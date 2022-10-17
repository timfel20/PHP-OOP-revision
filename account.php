<?php
/* this file is for inheritance  */
class Account{
    public $withdraw;
    public $deposite;

    public function deposite($amount){
       echo 'depositing' .$amount. '<br>';
    }

    public function withdraw($amount){
       echo 'withdrawing' .$amount. '<br>';
    }
}