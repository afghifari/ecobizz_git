<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);

        $forum = new App\Forum;
        $forum->name = "Forum 1";
        $forum->description = "Deskripsi forum 1";
        $forum->save();

        $forum = new App\Forum;
        $forum->name = "Forum 2";
        $forum->description = "Deskripsi forum 2";
        $forum->save();

        $user1 = new App\User;
        $user1->name = "Albert";
        $user1->email = "albert@einstein.com";
        $user1->password = bcrypt("password");
        $user1->mobile_number = "081xxxxxxx";
        $user1->organization_name = $user1->name . "'s Organization";
        $user1->role_id = 1;
        $user1->owner = "Owner";
        $user1->save();

        $user2 = new App\User;
        $user2->name = "Tom";
        $user2->email = "tom@frank.com";
        $user2->password = bcrypt("password");
        $user2->mobile_number = "081xxxxxxx";
        $user2->organization_name = $user2->name . "'s Organization";
        $user2->role_id = 1;
        $user2->owner = "Owner";
        $user2->save();

        App\FriendList::addFriend($user1, $user2);

        $post = new App\TimelinePost;
        $post->message = "Timeline POST A";
        $post->user_id = $user2->id;
        $post->save();

        $msg = new App\Message;
        $msg->message = "Message B";
        $msg->source_id = $user2->id;
        $msg->target_id = $user1->id;
        $msg->save();

        $thread = new App\Thread;
        $thread->owner_id = $user1->id;
        $thread->forum_id = 1;
        $thread->name = "Thread 1";
        $thread->save();

        $thread = new App\Thread;
        $thread->owner_id = $user2->id;
        $thread->forum_id = 1;
        $thread->name = "Thread 2";
        $thread->save();

        $post = new App\ForumPost;
        $post->owner_id = $user1->id;
        $post->thread_id = $thread->id;
        $post->content = "Thread Content";
        $post->save();

        $post = new App\ForumPost;
        $post->owner_id = $user2->id;
        $post->thread_id = $thread->id;
        $post->content = "Thread Content X";
        $post->save();

        $attachment = new App\Attachment;
        $attachment->post_id = 1;
        $attachment->uri = "http://www.hbc333.com/data/out/193/47538062-random-image.png";
        $attachment->save();

    }
}
