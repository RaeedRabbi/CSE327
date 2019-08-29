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
    private $totalQty=0;
    private $item = null;
    private $product_price = 0;
    private $subtotal = 0;

    public function __construct($id, $totalQty, $product_price, $item){
        $this->id=$id;
        $this->totalQty= $totalQty;
        $this->product_price = $product_price;
        $this->item = $item;
        $this->subtotal = $product_price * $totalQty;
       
    }
    
    public function setItem($item){
        $this->item = $item;
    }
    
    public function getItem(){
        return $this->item;
    }

    public function setId($id){
        $this->id=$id;
    }

    public function getId(){
        return $this->id;
    }

    public function getPrice(){
        return $this->product_price;
    }
    public function subtotalPrice(){
        $this->subtotal = $this->product_price * $this->totalQty;
        return $this->subtotal;
    }
    
    public function setQty($newQty){
        $this->totalQty=$newQty;
    }

    public function getQty(){
        return $this->totalQty;
    }

    

}
