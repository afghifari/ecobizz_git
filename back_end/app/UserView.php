<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserView extends Model
{
    public static function newView($user, User $viewed) {
        $view = new UserView;
        $view->user_id = $user ? $user->id : null;
        $view->viewed_id = $viewed->id;
        $view->save();
    }
}
