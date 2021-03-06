<script src="Scripts/bootbox.min.js"></script>
<script src="Scripts/bootstrap.min.js"></script>
<script src="Scripts/jquery-2.1.4.min.js"></script>

<script type="text/javascript">
	function updateCart() {
    	document.getElementById('cart').action = 'cartprocess.php?action=update';
	}
	function checkoutCart() {
    	document.getElementById('cart').action = 'index.php?content_page=placeorder';
	}
</script>

<?php
	// Include MySQL class
	require_once('mysql.class.php');
		
	// Display hat according to the category
	function displayHat($category) {
		global $db;
		$sql = "SELECT * FROM `HAT` WHERE CATEGORY = '".$category."'";
		$result = $db->query($sql);
		while ($row = $result->fetch()) {
			echo '<div class="col-sm-4 col-lg-4 col-md-4"><div class="thumbnail">'.'<img src="'.$row["PATH"].'" alt="Hat" style="width:320px;height:210px">'.'<div class="caption"><h4 class="pull-right"><b>$'.$row["PRICE"].'</b></h4><h4><b>'.$row["HATNAME"].'</b></h4><p>'.$row["HATDESC"].'</p><p><a href="cartprocess.php?action=add&id='.$row['HATID'].'" class="btn btn-primary">Buy Now!</a></p></div></div></div>';
		}
	}
	
	// Write shopping cart
	function writeShoppingCart() {
		if (isset($_SESSION['cart']))
		{
			$cart = $_SESSION['cart'];
		}
		
		if (!isset($cart) || $cart=='') {
			return '<p>You have no items in your shopping cart</p>';
		} else {
			// Parse the cart session variable
			$items = explode(',',$cart);
			$s = (count($items) > 1) ? 's':'';
			return '<p>You have <a href="cart.php?action=display">'.count($items).' item'.$s.' in your shopping cart</a></p>';
		}
	}
	
	// Show shopping cart
	function showCart() {
		global $db;
		$cart = (isset($_SESSION['cart']) ? $_SESSION['cart'] : null);
		if ($cart) {
			$items = explode(',',$cart);
			$contents = array();
			$GST = 0;
			$subtotal = 0;
			$total = 0;
			foreach ($items as $item) {
				$contents[$item] = (isset($contents[$item])) ? $contents[$item] + 1 : 1;
			}
			$output[] = '<div class="col-sm-12"><p class="lead">SHOPPING CART</p><form id="cart" method="post">';
			$output[] = '<table class="table table-hover"><thead><tr><th>Product</th><th>Quantity</th><th class="text-center">Price</th><th class="text-center">Total</th><th></th></tr></thead><tbody>';
			foreach ($contents as $HATID=>$qty) {
				$sql = 'SELECT * FROM HAT WHERE HATID = '.$HATID;
				$result = $db->query($sql);
				$row = $result->fetch();
				extract($row);
				$output[] = '<tr>';
				$output[] = '<td class="col-sm-8"><div class="media"><a class="thumbnail pull-left" href="#"><img class="media-object" src="'.$PATH.'" style="width: 96px; height: 96px;"></a>';
				$output[] = '<div class="media-body"><h4 class="media-heading">'.$HATNAME.'</h4><span>Status: </span><span class="text-success"><strong>In Stock</strong></span></div></div></td><td class="col-sm-1 col-md-1" style="text-align: center">';
				$output[] = '<input type="text" class="form-control" name="qty'.$HATID.'" value="'.$qty.'" size="3" maxlength="3" />';
				$output[] = '<td class="col-sm-1 text-center"><strong>$'.$PRICE.'</strong></td>';
				$output[] = '<td class="col-sm-1 text-center"><strong>$'.($PRICE * $qty).'</strong></td>';
				$output[] = '<td class="col-sm-1"><a href="cartprocess.php?action=delete&id='.$HATID.'" class="btn btn-danger">Remove</a></td>';
				$output[] = '</tr>';
				$GST += $PRICE * $qty * 0.15;
				$subtotal += $PRICE * $qty;
				$total = $GST + $subtotal;
			}
			$output[] = '<tr><td>   </td><td>   </td><td>   </td><td><h5>Subtotal</h5></td><td class="text-right"><h5><strong>$'.$subtotal.'</strong></h5></td></tr>';
			$output[] = '<tr><td>   </td><td>   </td><td>   </td><td><h5>GST</h5></td><td class="text-right"><h5><strong>$'.$GST.'</strong></h5></td></tr>';
			$output[] = '<tr><td><input type="hidden" name="total" value="'.$total.'" /></td><td>   </td><td>   </td><td><h3>Total</h3></td><td class="text-right"><h3><strong>$'.$total.'</strong></h3></td></tr>';
			$output[] = '<tr><td>   </td><td>   </td><td><input type="submit" class="btn btn-default" value="Update Cart" onclick="updateCart();return true;" /></td><td><a href="cartprocess.php?action=clear" class="btn btn-danger">Clear Cart</a></td><td><input type="submit" class="btn btn-success" value="Checkout" onclick="checkoutCart();return true;" /></td></tr>';
			$output[] = '</tbody></table></form></div>';
		} else {
			$output[] = '<p>You shopping cart is empty.</p>';
		}
		return join('',$output);
	}
	
	// Write order into the database
	function submitOrder(){
		if (isset($_SESSION['cart'])) {
			$cart = $_SESSION['cart'];
		}
		if (isset($_POST['total'])) {
			$total = $_POST['total'];
		}

		//checking if user is not authenticated
		if (!isset($_SESSION['flag']) || ($_SESSION['flag'] == false))
		{
			return "<script>bootbox.alert('Please log in first!!!');</script>";
		} else {
			$username = $_SESSION['current_user'];
			global $db;
			$sql = "SELECT `CUSTOMERID` FROM `CUSTOMER` WHERE `USERNAME` = '".$username."'";
			$result = $db->query($sql);
			$row = $result->fetch();
			extract($row);
			$sql = "INSERT INTO `HATORDER`(`CUSTOMERID`, `STATUS`, `TOTAL`) VALUES (".$CUSTOMERID.",'WAIT','".$total."')";
			$db->query($sql);
			$sql = "SELECT @@IDENTITY as ORDERID";
			$result = $db->query($sql);
			$row = $result->fetch();
			extract($row);
			$order = $ORDERID;
			
			$items = explode(',',$cart);
			$contents = array();
			foreach ($items as $item) {
				$contents[$item] = (isset($contents[$item])) ? $contents[$item] + 1 : 1;
			}
			foreach ($contents as $id=>$qty) {
				$sql = "INSERT INTO `ORDERITEM`(`ORDERID`, `ITEMID`, `QUANTITY`) VALUES (".$order.",".$id.",".$qty.")";
				$db->query($sql);		
			}
			
			$_SESSION['cart']=0;
			return "<script>bootbox.alert('Congratulations!!! You have placed your order!!!');</script>";
		}
	}
	
	// Process different cart actions
	function processActions() {
		if (isset($_SESSION['cart']))
		{
			$cart = $_SESSION['cart'];
		}
		
		if (isset($_GET['action']))
		{
			$action = $_GET['action'];
		}
		
		switch ($action) {
			case 'add':
				if (isset($cart) && $cart!='') {
					$cart .= ','.$_GET['id'];
				} else {
					$cart = $_GET['id'];
				}
			break;
			case 'delete':
				if ($cart) {
					$items = explode(',',$cart);
					$newcart = '';
					foreach ($items as $item) {
						if ($_GET['id'] != $item) {
							if ($newcart != '') {
								$newcart .= ','.$item;
							} else {
								$newcart = $item;
							}
						}
					}
					$cart = $newcart;
				}
			break;
			case 'update':
				if ($cart) {
					$newcart = '';
					foreach ($_POST as $key=>$value) {
						if (stristr($key,'qty')) {
							$id = str_replace('qty','',$key);
							$items = ($newcart != '') ? explode(',',$newcart) : explode(',',$cart);
							$newcart = '';
							foreach ($items as $item) {
								if ($id != $item) {
									if ($newcart != '') {
										$newcart .= ','.$item;
									} else {
										$newcart = $item;
									}
								}
							}
							for ($i=1;$i<=$value;$i++) {
								if ($newcart != '') {
									$newcart .= ','.$id;
								} else {
									$newcart = $id;
								}
							}
						}
					}
				}
			$cart = $newcart;
			break;
			case 'clear':
				if ($cart) {
					$cart = 0;
				}
				break;
			break;
		}
		$_SESSION['cart'] = $cart;
		//echo $cart;
	}
?>
