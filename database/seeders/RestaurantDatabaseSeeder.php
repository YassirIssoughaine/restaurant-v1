<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Disable foreign key checks during seeding
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        // Seed clients table
        DB::table('clients')->insert([
            ['name' => 'yassir', 'phone' => '0641571910'],
            ['name' => 'yahya', 'phone' => '0661619730'],
        ]);

        // Seed bookings table
        DB::table('bookings')->insert([
            ['client_id' => 1, 'numberPersons' => 3, 'date' => '2023-12-03', 'time' => '08:00:00', 'message' => 'JHSDGFJSF', 'created_at' => '2023-12-03 14:07:05', 'updated_at' => '2023-12-03 14:07:05'],
        ]);

        DB::table('categories')->insert([
            ['name' => 'Breakfast'],
            ['name' => 'Appetizers'],
            ['name' => 'Drinks'],
        ]);

        // Seed meals table
        DB::table('meals')->insert([
            ['name' => 'Spaghetti Bolognese', 'description' => 'Classic Italian pasta dish with savory meat sauce.', 'image' => '', 'price' => 12.99, 'category_id' => 1],
            ['name' => 'Grilled Chicken Salad', 'description' => 'Healthy salad with grilled chicken, mixed greens, and vinaigrette.', 'image' => '', 'price' => 9.99, 'category_id' => 2],
            ['name' => 'Vegetarian Pizza', 'description' => 'Delicious pizza topped with a variety of fresh vegetables.', 'image' => '', 'price' => 14.50, 'category_id' => 3],
            ['name' => 'Beef Tacos', 'description' => 'Mexican-style tacos with seasoned beef, lettuce, and cheese.', 'image' => '', 'price' => 8.75, 'category_id' => 2],
            ['name' => 'Salmon Teriyaki', 'description' => 'Grilled salmon glazed with teriyaki sauce, served with rice and vegetables.', 'image' => '', 'price' => 16.99, 'category_id' => 1],
            ['name' => 'Caprese Panini', 'description' => 'Panini sandwich with fresh mozzarella, tomatoes, and basil.', 'image' => '', 'price' => 7.95, 'category_id' => 3],
            ['name' => 'Chicken Alfredo Pasta', 'description' => 'Creamy Alfredo sauce with grilled chicken over fettuccine pasta.', 'image' => '', 'price' => 15.25, 'category_id' => 3],
            ['name' => 'Mushroom Risotto', 'description' => 'Italian risotto dish with savory mushrooms and Parmesan cheese.', 'image' => '', 'price' => 13.50, 'category_id' => 1],
        ]);

        // Enable foreign key checks after seeding
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
