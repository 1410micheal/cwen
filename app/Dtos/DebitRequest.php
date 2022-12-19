<?php
namespace App\Dtos;
use App\Models\StandingOrder;

class DebitRequest{

    private $amount;
    private $institution_id;
    private $order;
    private $customer_name;
    private $reason = "Jubilee Monthly Contribution";

    public function setAmount($amount){
         return $this->amount = $amount;
    }

    public function getAmount(){
        return $this->amount;
   }

    public function setInstitutionId($id){
        return $this->institution_id = $id;
    }

    public function getInstitutionId(){
        return $this->institution_id;
    }

   public function setOrder(StandingOrder $order){
        return $this->order = $order;
   }

   public function getOrder(){
    return $this->order;
    }

   public function setCustomerName( $name){
    return $this->customer_name = $name;
   }

   public function getCustomerName(){
    return $this->customer_name;
   }

    public function setReason( $reason){
        return $this->reason = $reason;
    }

    public function getReason(){
        return $this->reason;
    }


}