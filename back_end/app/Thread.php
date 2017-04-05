<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    public function forum() {
        return $this->belongsTo(Forum::class, "forum_id");
    }
    public function user() {
        return $this->belongsTo(User::class, "owner_id");
    }

    public function posts() {
        return $this->hasMany(ForumPost::class, "thread_id", "id");
    }
}