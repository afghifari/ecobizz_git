<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class UserLastSeen extends Model
{
    public static function check(User $user) {
        $lastSeen = UserLastSeen::where("user_id", $user->id)->first();
        if ($lastSeen) {
            $lastSeen->touch();
        } else {
            $lastSeen = new UserLastSeen;
            $lastSeen->user_id = $user->id;
            $lastSeen->save();
        }
    }
}
