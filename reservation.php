<?php

class Reservation
{
    private $host = 'host';
    private $guest = 'guest';

    public function cancel(){
        $this->sendCancellationEmail();
        $this->refundGuest();
    }

    private function sendCancellationEmail(){
        echo 'sending notification to'. $this-> host. '<br>';
    }

    private function refundGuest(){
        echo 'sending refund to' . $this-> guest . '<br>';
    }
}
/* SO, basically, here we're making the functions and properties private, adding a public function cancel to be able to 
use and display the other private functions on other components */