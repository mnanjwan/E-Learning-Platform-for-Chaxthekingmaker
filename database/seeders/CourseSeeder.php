<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Course::truncate();

        $courses = [
            ['title' => 'Beginner', 'description' => 'Explore Forex trading basics: currency pairs, exchange rates, market hours. Learn strategies, risk management, and factors influencing markets. Start your journey into global currency trading', 'image_cover' => '...'],
            ['title' => 'Intermediate', 'description' => 'Master Forex essentials: currency pairs, price movements, chart analysis. Develop strategies, understand risk management, and navigate the dynamic world of foreign exchange trading.', 'image_cover' => '...'],
            ['title' => 'Advance', 'description' => 'Unlock Forex success: master technical analysis, chart patterns, risk control. Gain insights into global markets, leverage, and strategies for confident, profitable currency trading.', 'image_cover' => '...'],
        ];
            
        foreach ($courses as $key => $value) {
            Course::create($value);
        }
    }
}
