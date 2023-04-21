<?php
//Lesson 14
class BuyProduct extends Visa{
    public function getPayment(){
        return $this->visaPayment();
    }
}