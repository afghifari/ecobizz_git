<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    public function post() {
     return $this->belongsTo(ForumPost::class, "post_id");
    }
}
