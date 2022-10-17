<?php 
class Bid
    {
        private $minumumBid = 100;
        private $bidAmount;

        public function setBidAmount($amount){
            if($amount < $this -> minumumBid){

               return $this -> bidAmount = $this -> minumumBid;
            }
         $this -> bidAmount = $amount;
        }

        public function getBidAmount(){
            return $this->bidAmount; 
        }
    }
?>
<!-- In this class, we're using setters and getters to the value of the private property bidamount(make it easily  modifiable)
and we're using getters to get it's value in e.g child components -->