<?php
class Bank{
    public $account;
    public $name;
    public $balance = 0;

    function __construct($account, $name)
    {
        $this->account = $account;
        $this->name = $name;
        return $this;
    }

    function depositAmount($amt){
        $this->balance = $this->balance + $amt;
        return $this;
    }

    function deductAmount($amt){
        if($amt <= 0){
            return "Invalid amount.";
        }
        if($amt > $this->balance){
            return "Insufficient balance.";
        }
        $this->balance = $this->balance - $amt;
        return $this;
    }

    function checkBalance(){
        echo "Hello, $this->name you balance is ".$this->balance.PHP_EOL;
        return $this;
    }

}

$bank = new Bank("132424441", "Akash");
$bank->depositAmount(500)->checkBalance();
echo $bank->deductAmount(200)->checkBalance()->balance;