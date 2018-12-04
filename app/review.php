<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class review extends Model
{
  public function product() {
    return $this->belongsTo('App\product');
}
public function prettyUpdate() {

      $dt = new Carbon($this->updated_at);
      if ($dt->isToday()) {
          return $dt->format('g:i:s a');
      }
      return $dt->format('n/j/y \\a\\t g:i:s a');

  }
}
