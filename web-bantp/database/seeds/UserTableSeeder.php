<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	$data = [
	    	[
				'fullname'=>'Ngô Quốc An',
				'email'=>'ngoquocan203@gmail.com',
				'password'=>'123456',
				'level'=>1
	    	],
	    	[
				'fullname'=>'Nguyễn Văn Bình',
				'email'=>'binh9999@gmail.com',
				'password'=>'123456',
				'level'=>1
	    	],
		];
        DB::table('users')->insert($data);
    }
}
