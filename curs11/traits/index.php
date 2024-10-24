<?php

require_once 'BankAccount.php';

use Bank\BankAccount;
use ILBAH\BankAccount as IlbachBankAccount;

$account = new BankAccount();

$account->log('You have a new bank account.');