<?php
// Procedural Code

require_once 'customer_flower.php';
require_once 'order.php';
require_once 'functions.php';

// order form has hidden orderNumber
// that submits with the form
if(inputHas('orderNumber')) {
  // $_POST['flowers'] = ['petunia', 'daisy'];

  $customer = new Customer();
  $customer->name = inputGet('customer_name');

  $address = inputGet('delivery_address');
  $order = new Order($address);
  
  // $order-> = deliveryAddress = inputGet('delivery_address');
  $order->customer = $customer;

}
if(inputHas('delivered')) {
  $order->deliver();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <?php if($order->delivered): ?>
    <h1>Your Order Has been delivered</h1>
  <?php endif; ?>
  <form action="">
    <button name="delivered" value="true" type="submit"></button>
  </form>
</body>
</html>