<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	/********************/
	/*Заказы с продуктом*/
	/********************/
	public function orders(){
		return $this->belongsToMany('App\Order', 'order_products', 'product_id', 'order_id');
	}
}
