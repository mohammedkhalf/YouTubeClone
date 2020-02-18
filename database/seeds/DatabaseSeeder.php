<?php
use Illuminate\Database\Seeder;
use App\Channel;
use App\User;
use App\Subscription;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(LaratrustSeeder::class);

        $user1 = factory(User::class)->create([
            'email' => 'mohammed-ali@gmail.com'
        ]);

        $user2 = factory(User::class)->create([
            'email' => 'ahmed-ali@gmail.com'
        ]);

        $channel1 = factory(Channel::class)->create([
            'user_id' => $user1->id
        ]);

        $channel2 = factory(Channel::class)->create([
            'user_id' => $user2->id
        ]);

        $channel1->subscriptions()->create([
            'user_id' => $user1->id
        ]);

        $channel2->subscriptions()->create([
            'user_id' => $user2->id
        ]);

        factory(Subscription::class,100)->create([
            'channel_id' => $channel1->id
        ]);


        factory(Subscription::class,100)->create([
            'channel_id' => $channel2->id
        ]);
    }
}
