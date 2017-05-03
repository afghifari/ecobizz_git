<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    public function threads() {
        return $this->hasMany(Thread::class, "forum_id", "id");
    }
    public function postCount() {
        $count = 0;
        foreach ($this->threads as $thread) {
            $count += count($thread->posts);
        }
        return $count;
    }

    public function viewCount() {
        $count = 0;
        foreach ($this->threads as $thread) {
            $count += count($thread->views);
        }
        return $count;
    }

    public function contributorCount() {
        $count = 0;
        foreach ($this->threads as $thread) {
            $count += $thread->contributorCount();
        }
        return $count;
    }
}
