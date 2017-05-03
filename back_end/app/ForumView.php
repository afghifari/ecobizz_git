<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumView extends Model
{
    public static function newView(User $user, Thread $thread) {
        $view = new ForumView;
        $view->user_id = $user ? $user->id : null;
        $view->viewed_id = $thread->id;
        $view->save();
    }
}
