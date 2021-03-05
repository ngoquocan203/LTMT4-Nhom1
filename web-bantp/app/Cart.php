<?php

namespace App;

class Cart
{
	public $products = null;
	public $totalQuantity = 0;
	public $totalPrice = 0;

	public function __construct($cart){
		if($cart){
			$this->products = $cart->products;
			$this->totalQuantity = $cart->totalQuantity;
			$this->totalPrice = $cart->totalPrice;
		}
	}

	public function AddCart($products, $id){
		$newProduct = ['quantity'=> 0, 'price' => $products->price, 'productInfo' => $products];
		if($this->products){
			if(array_key_exists($id, $products)){
				$newProduct = $products[$id];
			}
		}
		$newProduct['qty']++;
		$newProduct['price'] = $item->unit_price * $giohang['qty'];
		$this->products[$id] = $newProduct;
		$this->totalQuantity++;
		$this->totalPrice += $products->price;
	}
	/*//xóa 1
	public function reduceByOne($id){
		$this->items[$id]['qty']--;
		$this->items[$id]['price'] -= $this->items[$id]['item']['price'];
		$this->totalQty--;
		$this->totalPrice -= $this->items[$id]['item']['price'];
		if($this->items[$id]['qty']<=0){
			unset($this->items[$id]);
		}
	}
	//xóa nhiều
	public function removeItem($id){
		$this->totalQty -= $this->items[$id]['qty'];
		$this->totalPrice -= $this->items[$id]['price'];
		unset($this->items[$id]);
	}*/
}
