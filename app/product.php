<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
  public function reviews() {
    return $this->hasMany('App\review');
}

}
