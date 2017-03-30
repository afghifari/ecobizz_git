<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumPost extends Model
{
    public function thread() {
        return $this->belongsTo(Thread::class, "thread_id");
    }

    public function owner() {
        return $this->belongsTo(User::class, "owner_id");
    }

    public function attachments() {
        return $this->hasMany(Attachment::class, "post_id", "id");
    }

}
