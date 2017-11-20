<?php

class Auction
{
    private $auc;
    private $item;
    private $owner;
    private $ownerRealm;
    private $bid;
    private $buyout;
    private $quantity;
    private $timeLeft;
    private $rand;
    private $seed;
    private $context;      

    public function getitem(){
        return $this->item;
    }
    public function getauc(){
        return $this->auc;
    }
    public function getowner(){
        return $this->owner;
    }
    public function getownerRealm(){
        return $this->ownerRealm;
    }
    public function getbid(){
        return $this->bit;
    }
    public function getbuyout(){
        return $this->buyout;
    }
    public function getquantity(){
        return $this->quantity;
    }
    public function gettimeLeft(){
        return $this->timeLeft;
    }
    public function getrand(){
        return $this->rand;
    }
    public function getseed(){
        return $this->seed;
    }
    public function getcontext(){
        return $this->context;
    }
    
    public function setitem($value){
        $this->item = $value;
    }
    public function setauc($value){
        $this->auc = $value;
    }
    public function setowner($value){
        $this->owner = $value;
    }
    public function setownerRealm($value){
        $this->ownerRealm = $value;
    }
    public function setbid($value){
        $this->bid = $value;
    }
    public function setbuyout($value){
        $this->buyout = $value;
    }
    public function setquantity($value){
        $this->quantity = $value;
    }
    public function settimeLeft($value){
        $this->timeLeft = $value;
    }
    public function setrand($value){
        $this->rand = $value;
    }
    public function setseed($value){
        $this->seed = $value;
    }
    public function setcontext($value){
        $this->context = $value;
    }
}

?>