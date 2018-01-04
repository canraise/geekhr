<?php

use Illuminate\Database\Seeder;

class AuthorizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = [
			"slug" => "admin",
			"name" => "Admin",
			"permissions" => [
				"admin" => true
			]
		];

		Sentinel::getRoleRepository()->createModel()->fill($role_admin)->save();

		$adminrole = Sentinel::findRoleByName('Admin');

		$user_admin = ["first_name"=>"Admin", "last_name"=>"Real", "email"=>"real@admin.com", "password"=>"realadmin"];

		$adminuser = Sentinel::registerAndActivate($user_admin);

		$adminuser->roles()->attach($adminrole);

		$role_user = [
			"slug" => "user",
			"name" => "User",
			"permissions" => [
				"user.index" => true,
				"user.create" => true,
				"user.store" => true,
				"user.show" => true,
				"user.edit" => true,
				"user.update" => true,
			]
		];

		Sentinel::getRoleRepository()->createModel()->fill($role_user)->save();

		$userrole = Sentinel::findRoleByName('User');

		$user_data = ["first_name"=>"namasatu", "last_name"=>"tes", "email"=>"namasatu@tes.com", "password"=>"namasatu"];

		$storeuser = Sentinel::registerAndActivate($user_data);

		$storeuser->roles()->attach($userrole);

    }
}
