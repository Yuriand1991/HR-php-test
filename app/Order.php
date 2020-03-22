<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /*******************************/
	/*Продукты принадлежащие заказу*/
	/*******************************/
	public function products(){
		return $this->belongsToMany('App\Product', 'order_products', 'order_id', 'product_id');
	}
	
	/**********************************/
	/*Получить партнера данного заказа*/
	/**********************************/
	public function partner()
	{
		return $this->belongsTo('App\Partner');
	}
}
