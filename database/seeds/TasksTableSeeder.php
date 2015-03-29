<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('tasks')->delete();

		$tasks = array(
			['id' => 1, 'name' => 'Task 1', 'slug' => 'task-1', 'description' => 'My first task', 'expiration' => date('Y-m-d'), 'completed' => true, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 2, 'name' => 'Task 2', 'slug' => 'task-2', 'description' => 'My first task', 'expiration' => date('Y-m-d', strtotime("+5 days")), 'completed' => false, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 3, 'name' => 'Task 3', 'slug' => 'task-3', 'description' => 'My first task', 'expiration' => date('Y-m-d', strtotime("+30 days")), 'completed' => false, 'created_at' => new DateTime, 'updated_at' => new DateTime],
		);

		//// Uncomment the below to run the seeder
		DB::table('tasks')->insert($tasks);
	}

}