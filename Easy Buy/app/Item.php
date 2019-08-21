<?php

namespace App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use Session;
use Auth;

class Item 
{
    private $id=0;
    private $totalPrice=0;
    private $totalQty=0;
    public $item = null;

    public function __construct($totalQty, $price, $item){
       
        $this->totalQty= $totalQty;
        $this->item=$item;
        $this->totalPrice= $price*$totalQty;
    }
    
    public function getTotalPrice(){
        return $this->totalPrice;
    }
    
    public function getQty(){
        return $this->totalQty;
    }

    public function update($newQty){    
        return $this->totalQty=$newQty;

     }

}
