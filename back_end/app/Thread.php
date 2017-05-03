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

    public function views() {
        return $this->hasMany(ForumView::class, "viewed_id", "id");
    }

    public function contributorCount() {
        return count($this->posts()->select('owner_id')->groupBy('owner_id')->get());
    }
}
