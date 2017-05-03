<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumView extends Model
{
    public static function newView(User $user, Thread $viewed) {
        $userId = $user ? $user->id : null;

        if ($userId) {
            $lastView = ForumView::where('user_id', $userId)->where('viewed_id', $viewed->id)->first();
            if ($lastView) {
                if ($lastView->created_at->diffInMinutes(\Carbon\Carbon::now()) <= 10)
                    return;
            }
        }
        $view = new ForumView;
        $view->user_id = $user ? $user->id : null;
        $view->viewed_id = $viewed->id;
        $view->save();
    }
}
