<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
   /******************************/
   /* Получить заказы с партнером*/
   /******************************/
  public function orders()
  {
    return $this->hasMany('App\Order');
  }
}
