<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserView extends Model
{
    public static function newView($user, User $viewed) {
        $userId = $user ? $user->id : null;

        if ($userId) {
            $lastView = UserView::where('user_id', $userId)->where('viewed_id', $viewed->id)->orderBy('created_at', 'desc')->first();
            if ($lastView) {
                if ($lastView->created_at->diffInMinutes(\Carbon\Carbon::now()) <= 10)
                    return;
            }
        }
        $view = new UserView;
        $view->user_id = $userId;
        $view->viewed_id = $viewed->id;
        $view->save();
    }
}
