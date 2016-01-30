<?php
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Post::truncate();
    	foreach (range(1, 10) as $value) {
    		$faker = \Faker\Factory::create('zh_TW');
	        Post::create([
	        	'title' => $faker->title,
	        	'content' => $faker->name,
	        	'is_feature' => rand(1,0),
	        	'page_view' => rand(1,1000),
	        	'created_at' =>Carbon::now()->subDays($value),
	        	'updated_at' =>Carbon::now()->subDays($value),
	        ]);
    	}
    }
}
