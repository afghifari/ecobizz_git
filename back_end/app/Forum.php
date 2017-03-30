<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    public function threads() {
        return $this->hasMany(Thread::class, "forum_id", "id");
    }
}
