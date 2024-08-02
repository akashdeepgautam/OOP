<?php

/**
 * 1) Create a Bank Class
 * 2) Define properties of bank class
 *  - accno
 *  - name
 *  - balance
 * 3) Define Methods
 *  - depositAmount($amt)
 *  - deductedAmount($amt)
 *  - checkBalance()
 * 4) Create an account for user.
 * 5) CheckBalance, DepositAmount, DeductAmount
 */

class Bank
{
    public $accno;
    public $name;
    public $balance = 0;

    function depositAmount($amt)
    {
        return $this->balance = $amt + $this->balance;
    }

    function deductedAmount($amt)
    {
        if ($this->balance <= 0) {
            return "Insufficient Balance!";
        }
        if ($this->balance <= $amt) {
            return "Low balance in your account";
        }
        return $this->balance = $this->balance - $amt;
    }

    function checkBalance()
    {
        return $this->balance;
    }
}

$bank = new Bank();
$bank->accno = 56060600606;
$bank->name = "John Doe";
$bank->balance = 500;

echo $bank->depositAmount(500).PHP_EOL;
echo "Your balance is ".$bank->checkBalance().PHP_EOL;
echo $bank->deductedAmount(100).PHP_EOL;
echo "Your balance is ".$bank->checkBalance();