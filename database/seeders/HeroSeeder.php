<?php

namespace Database\Seeders;

use App\Models\HeroSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HeroSection::updateOrCreate(
            ['id' => 1],
            [
                'title' => 'Effortless Logistics. Smarter Operations. Total Control.',
                'subtitle' => 'Manage all your shipments from one powerful platform. Track deliveries in real time, optimize routes automatically, and reduce logistics costs with complete operational visibility',
                'background_image' => null,
                'primary_button_text' => 'Get a Free Quote',
                'primary_button_link' => '#',
                'secondary_button_text' => 'Learn More',
                'secondary_button_link' => '#',
            ]
        );
    }
}
