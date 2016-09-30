<?php

class UserProfileSeeder extends Seeder {


	public function run()
	{

		$users_details = array(

			array(

				'firstname' => 'Naveen',
				'lastname' => 'kumar',
				'username' => 'nknaveen',
				'phno' => '7845787900',
				'password_change' => 'naveen123',
				'nationality' => 'indian',
				'dobmonth' => 'June',
				'dobday' => '12',
				'dobyear' => '1995',




				)

			);

		DB::table('user_details')->insert($users_details);

	}
}


?>