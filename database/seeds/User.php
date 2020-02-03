<?php

use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            ['fullname' => 'Nguyen Viet Ha', 'phone' => '0399888567', 'address' => 'Bac Giang', 'id_number' => '056'],
            ['fullname' => 'Nguyen Thu Thao', 'phone' => '0962484123', 'address' => 'Ha Noi', 'id_number' => '134'],
            ['fullname' => 'Vu Trung Kien', 'phone' => '0979456123', 'address' => 'Bac Giang', 'id_number' => '98'],
            ['fullname' => 'Nguyen Phuong Tuy', 'phone' => '0832197456', 'address' => 'Thai Nguyen', 'id_number' => '138'],
        ]);
    }
}
