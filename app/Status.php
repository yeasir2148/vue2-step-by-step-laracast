<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Status extends Model
{
   protected $fillable = ['body'];

   public function user() {
      return $this->belongsTo(User::class);
   }
}
