<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
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
				'name'=>'Trái Cây'
	    	],
	    	[
				'name'=>'Rau'
	    	],
	    	[
				'name'=>'Thịt'
	    	],
		];
        DB::table('category')->insert($data);
    }
}
