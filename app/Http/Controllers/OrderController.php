<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Order;

class OrderController extends Controller
{
    /*************************/
	/*Метод добавления заказа*/
	/*************************/
	public function submit(OrderRequest $req)
	{
		$order = new Order();
		$order->status = $req->input('status');
		$order->client_email = $req->input('email');
		$order->partner_id = $req->input('partner');
		$order->save();
		
		return redirect()->route('home')->with('success', 'Заказ добавлен');
	}
	/*************************/
	/*Метод получения всех записей*/
	/*************************/
	public function allData(){
		return view('orders', ['data'=>Order::all()]);
	}
}
