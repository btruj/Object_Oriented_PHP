<?php
//Lesson 13

// Interface for payment related methods
interface PaymentInterface {
    public function payNow();
    public function paymentProcess();
}

// Interface for login related methods
interface LoginInterface {
    public function loginFirst();
    public function paymentProcess();
}

// PayPal class implementing both PaymentInterface and LoginInterface
class Paypal implements PaymentInterface, LoginInterface {
    public function loginFirst() {}
    public function payNow() {}
    public function paymentProcess() {
        $this->loginFirst(); // Login first using loginFirst() method
        $this->payNow();    // Pay now using payNow() method
    }
}

// BankTransfer class implementing both PaymentInterface and LoginInterface
class BankTransfer implements PaymentInterface, LoginInterface {
    public function loginFirst() {}
    public function payNow() {}
    public function paymentProcess() {
        $this->loginFirst(); // Login first using loginFirst() method
        $this->payNow();    // Pay now using payNow() method
    }
}

// Visa class implementing PaymentInterface only
class Visa implements PaymentInterface {
    public function payNow() {}
    public function paymentProcess() {
        $this->payNow();    // Pay now using payNow() method
    }
}

// Cash class implementing PaymentInterface only
class Cash implements PaymentInterface {
    public function payNow() {}
    public function paymentProcess() {
        $this->payNow();    // Pay now using payNow() method
    }
}

// BuyProduct class with pay() and onlinePay() methods that accepts different payment types
class BuyProduct {
    public function pay(PaymentInterface $paymentType) {
        $paymentType->paymentProcess(); // Call paymentProcess() method of the given payment type
    }
    public function onlinePay(LoginInterface $paymentType) {
        $paymentType->paymentProcess(); // Call paymentProcess() method of the given payment type
    }
}

// Create a new instance of Cash payment type
$paymentType = new Cash();

// Create a new instance of BuyProduct
$buyProduct = new BuyProduct();

// Call pay() method of BuyProduct with the Cash payment type
$buyProduct->pay($paymentType);
