<?php
//Lesson 14
abstract class Visa {
   public function visaPayment() {
    return "Perform a payment";
   }

   abstract public function getPayment();
}