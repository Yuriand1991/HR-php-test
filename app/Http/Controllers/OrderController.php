<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;

class OrderController extends Controller
{
    //
	public function submit(OrderRequest $req)
	{
		//$validation = $req->validate([
									//'email' => 'required|email'
								//	]);
		//dd($req->input('email'));
	}
}
