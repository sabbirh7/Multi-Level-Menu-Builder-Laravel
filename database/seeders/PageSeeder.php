<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            ['name' => 'Home', 'slug' => 'home', 'status' => 'active', 'meta_title' => 'Home Page', 'meta_description' => 'Welcome to our homepage.'],
            ['name' => 'About Us', 'slug' => 'about-us', 'status' => 'active', 'meta_title' => 'About Us', 'meta_description' => 'Learn more about our company.'],
            ['name' => 'Blog', 'slug' => 'blog', 'status' => 'active', 'meta_title' => 'Company Blog', 'meta_description' => 'Stay updated with our latest posts.'],
            ['name' => 'Event', 'slug' => 'event', 'status' => 'active', 'meta_title' => 'Upcoming Events', 'meta_description' => 'Check out our upcoming events.'],
            ['name' => 'Services', 'slug' => 'services', 'status' => 'active', 'meta_title' => 'Our Services', 'meta_description' => 'Learn about the services we offer.'],
            ['name' => 'Contact Us', 'slug' => 'contact-us', 'status' => 'active', 'meta_title' => 'Contact Us', 'meta_description' => 'Get in touch with us.'],
        ];

        // Insert each page individually
        foreach ($pages as $page) {
            Page::create($page);
        }
    }
}
