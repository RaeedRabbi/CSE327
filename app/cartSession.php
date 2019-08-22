<?php

namespace App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Item;
use Session;
use Auth;

class cartSession 
{
    private $numOfItems=0;
    private $totalPrice=0;
    public $items = null;


    public function numOfItems(){
        return $this->numOfItems;
    }
    
    public function totalPrice(){
        foreach($this->items as $item)
        {
            $this->totalPrice= $this->totalPrice + $item->getTotalPrice();
        }
        return $this->totalPrice;
    }


    public function getitems(){
         return $this->items;
    }

    public function update($exItem,$newQty){
       foreach($this->items as $item)
       {
           if($item == $exItem)
           {
               $item->upadte($newQty);
               break;
           }
       }
       return;
    }

    public function add($newItem)
    {
        /*if($this->numberOfItems > 0)
        {
            foreach($this->items as $item)
            {
                if($item == $newItem){
                    return;
                }
            }
        }*/
       
        $this->items[$this->numOfItems]=$newItem;
        $this->numOfItems++;
        $this->totalPrice= $this->totalPrice + $newItem->getTotalPrice();

        return;
    }

    public function remove($deletedItem)
    {
        foreach($this->items as $item)
        {
            if($item==$deletedItem)
            {
                $item=null;
                return;
            }
        }
       return;
    }
    
    
    
}
