<?php
use Illuminate\Database\Seeder;
use App\Models\Usuarios\User;
class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 5)->create();
    }
}
