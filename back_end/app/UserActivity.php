<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model
{
    public static function updateActivity() {
        $activity = new UserActivity;
        $activity->user_id = \Auth::user()->id;
        $activity->activity = "Update Profile";
        $activity->save();
    }

    public static function loginActivity() {
        $activity = new UserActivity;
        $activity->user_id = \Auth::user()->id;
        $activity->activity = "Logged In";
        $activity->save();
    }

    public static function logoutActivity() {
        $activity = new UserActivity;
        $activity->user_id = \Auth::user()->id;
        $activity->activity = "Logged Out";
        $activity->save();
    }

    public static function searchActivity($query) {
        $activity = new UserActivity;
        $activity->user_id = \Auth::user()->id;
        $activity->activity = "Search Forum, Query = $query";
        $activity->save();
    }

    public static function postForumActivity(ForumPost $post) {
        $activity = new UserActivity;
        $activity->user_id = \Auth::user()->id;
        $activity->activity = "Posted on Thread " . $post->thread->name . " on Forum " .$post->thread->forum->name;
        $activity->save();
    }

    public static function postTimelineActivity() {
        $activity = new UserActivity;
        $activity->user_id = \Auth::user()->id;
        $activity->activity = "Posted on Timeline";
        $activity->save();
    }

    public static function createThreadActivity(Thread $thread) {
        $activity = new UserActivity;
        $activity->user_id = \Auth::user()->id;
        $activity->activity = "Created Thread " .$thread->name . " on Forum " . $thread->forum->name;
        $activity->save();
    }
}
