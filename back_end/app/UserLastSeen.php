<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class UserLastSeen extends Model
{
    public static function check(User $user) {
        $lastSeen = UserLastSeen::where("user_id", $user->id)->first();
        if ($lastSeen) {
            /*$lastSeen->updated_at = \Carbon\Carbon::now();*/
            $lastSeen->touch();
        } else {
            $lastSeen = new UserLastSeen;
            $lastSeen->updated_at = $user->id;
            $lastSeen->save();
        }
    }
}
