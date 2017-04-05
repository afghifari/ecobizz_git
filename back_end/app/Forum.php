<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    public function threads() {
        return $this->hasMany(Thread::class, "forum_id", "id");
    }
    public function postCount() {
        $threads = $this->threads;
        $count = 0;
        foreach ($threads as $thread) {
            $count += count($thread->posts);
        }
        return $count;
    }
}
