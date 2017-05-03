<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Http\UploadedFile;
use Storage;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'profile_picture', 'organization_structure', 'role_id', 'is_admin', 'last_seen',
    ];

    public function getOnlineAttribute() {
        if (!$this->last_seen)
            return false;

        return $this->last_seen->updated_at->diffInMinutes(Carbon::now()) <= 5;
    }

    public function getProfilePictureAttribute($value) {
        if ($value == null || $value == "") {
            return "https://poppin.imgix.net/products/swatch/swatch_light_gray.jpg?w=600&h=600";
        } else {
            return $value;
        }
    }

    public function role() {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    /**
     * Move uploaded file from request->file() to storage and store its link in the profile_picture attribue
     *
     * @var UploadedFile
     */
    public function uploadPhoto(UploadedFile $photo) {
        if (Storage::disk('photos')->exists('profile/' . $this->id)) {
            Storage::disk('photos')->deleteDirectory($this->id);
        }

        Storage::disk('photos')->put('profile/' . $this->id, $photo);

        $name = $photo->hashName();
        $link = Storage::disk('photos')->url('profile/' . $this->id . "/" . $name);

        $this->profile_picture = $link;
        $this->save();
    }

    public function uploadOrganizationChart(UploadedFile $photo) {
        if (Storage::disk('photos')->exists('chart/' . $this->id)) {
            Storage::disk('photos')->deleteDirectory($this->id);
        }

        Storage::disk('photos')->put('chart/' . $this->id, $photo);

        $name = $photo->hashName();
        $link = Storage::disk('photos')->url('chart/' . $this->id . "/" . $name);

        $this->organization_structure = $link;
        $this->save();
    }

    public function friends() {
        return $this->belongsToMany(User::class, 'friend_lists', 'own_id', 'friend_id');
    }

    public function threads() {
        return $this->hasMany(Thread::class, "owner_id", "id");
    }

    public function getMessages($friend) {
        $own = Message::where("source_id", $this->id)->where("target_id", $friend->id)->get();
        $theirs = Message::where("source_id", $friend->id)->where("target_id", $this->id)->get();
        return [
            "own" => $own,
            "theirs" => $theirs
        ];
    }

    public function timelines() {
        return $this->hasMany(TimelinePost::class, "user_id", "id");
    }

    public function posts() {
        return $this->hasMany(ForumPost::class, "owner_id", "id");
    }

    public function last_seen() {
        return $this->hasOne(UserLastSeen::class, "user_id", "id");
    }

    public function activities() {
        return $this->hasMany(UserActivity::class, "user_id", "id");
    }

    public static function newUsers() {
        return User::whereDate('created_at', \DB::raw('CURDATE()'))->get();
    }

    public function views() {
        return $this->hasMany(UserView::class, "viewed_id", "id");
    }
}
