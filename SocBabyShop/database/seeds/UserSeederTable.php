<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Thiên Ái';
        $user->email = 'nta@gmail.com';
        $user->password = bcrypt('12345678');
        $user->save();

        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('12345678');
        $user->save();
}
}