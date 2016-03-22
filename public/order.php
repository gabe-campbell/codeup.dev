<?php

// Flower Delivery
// Orders
// Deliveries
// Flowers
// Customers
// Balloons

class Order 
{
  
  public $orderNumber;
  public $customer;
  public $order_date;
  public $flowers;
  public $price;
  public $deliveryAddress;
  public $delivered;

  public function __construct()
  {
    $this->orderNumber = uniqid();
    $this->deliveryAddress = $deliveryAddress;
    $this->sendDelivery();
  }

  public function isOrderDeliveredYet()
  {

  }

  public function deliver() 
  {

  }

  public function sendDelivery()
  {
    echo "Hey Bob, deliver " . $this->orderNUmber . " to " $this-deliveryAddress;
  }
}