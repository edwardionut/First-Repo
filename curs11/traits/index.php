<?php

require_once 'BankAccount.php';

use Bank\BankAccount;
// use ILBAH\BankAccount as IlbachBankAccount; clase din namespace diferit folosim alias in fisierul curent pentru a nu avea coliziune de nume

$account = new BankAccount();

$account->log('You have a new bank account.');