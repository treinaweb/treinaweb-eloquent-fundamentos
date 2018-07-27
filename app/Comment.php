<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  /**
   * Mapeia o relacionamento com o model de posts
   *
   * @return void
   */
   public function post()
   {
     return $this->belongsTo('App\Post');
   }
}
