<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Order;
use App\Partner;

class OrderController extends Controller
{
	/******************************/
	/*Метод получения всех заказов*/
	/*****************************/
	public function allData(){
		return view('orders', ['data'=>Order::all()]);
	}
	
	/******************************/
	/*Метод получения заказа по ид*/
	/******************************/
	public function showOrder($id){
		$order = new Order();
		return view('order', ['order'=>$order->find($id), 'partners'=>Partner::all()]);
	}
	
	/*******************************/
	/*Метод обновления заказа по ид*/
	/*******************************/
	public function updateOrder($id, OrderRequest $req){
		$order = Order::find($id);
		$order->status = $req->input('status');
		$order->client_email = $req->input('email');
		$order->partner_id = $req->input('partner');
		$order->save();
		
		return redirect()->route('order-edit' , $id)->with('success', 'Заказ сохранен');
	}
}
