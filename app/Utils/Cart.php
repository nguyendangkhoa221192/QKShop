<?php
namespace App\Utils;

/**
 * Trait handle shopping bag
 */
class Cart
{
    public $item = null;
    public $total_qantity = 0;
    public $total_price = 0;

    public function __construct($oldCard) {
    	if ($oldCard) {
    		$this->item = $oldCard->item;
    		$this->total_qantity = $oldCard->total_qantity;
    		$this->total_price = $oldCard->total_price;
    	}
    }

    public function add($item, $id) {
    	$shop_bag = ['quantity' => 0, 'price' => $item->unit_price, 'item' => $item];
    	if ($this->item) {
    		if (array_key_exists($id, $this->item)) {
    			$shop_bag = $this->item[$id];
    		}
    	}
    	$shop_bag['quantity']++;
    	$shop_bag['price'] = $item->unit_price*$shop_bag['quantity'];
    	$this->item[$id] = $shop_bag;
    	$this->total_qantity++;
    	$this->total_price += $item->unit_price;
    }

    public function reduceByOne($id) {
    	$this->item[$id]['quantity']--;
    	$this->item[$id]['price'] -= $this->item[$id]['item']['price'];
    	$this->total_qantity--;
    	$this->total_price -= $this->item[$id]['item']['price'];
    	if ($this->item[$id]['quantity'] <= 0) {
    		unset($this->item[$id]);
    	}
    }

    public function removeItem($id) {
    	$this->total_qantity -= $this->item[$id]['quantity'];
    	$this->total_price -= $this->item[$id]['price'];
    	unset($this->item[$id]);
    }
}
