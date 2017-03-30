<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FriendList extends Model
{
    public static function addFriend($userA, $userB) {
        $temp = new FriendList;
        $temp->own_id = $userA->id;
        $temp->friend_id = $userB->id;
        $temp->save();

        $temp = new FriendList;
        $temp->own_id = $userB->id;
        $temp->friend_id = $userA->id;
        $temp->save();
    }
}
