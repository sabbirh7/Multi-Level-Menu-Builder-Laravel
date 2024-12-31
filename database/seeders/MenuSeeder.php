<?php

// database/seeders/MenuSeeder.php
namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run()
    {
        // Create top-level menu items
        $webDevelopment = Menu::create(['title' => 'Web Development']);
        $blogs = Menu::create(['title' => 'Blogs']);

        // Create child menu items under Web Development
        $laravel = Menu::create(['title' => 'Laravel', 'parent_id' => $webDevelopment->id]);
        $mern = Menu::create(['title' => 'MERN', 'parent_id' => $webDevelopment->id]);

        // Create child menu items under MERN
        Menu::create(['title' => 'React', 'parent_id' => $mern->id]);
        Menu::create(['title' => 'Node.js', 'parent_id' => $mern->id]);

        // Create child menu items under Blogs
        Menu::create(['title' => 'Tech Blog', 'parent_id' => $blogs->id]);
        Menu::create(['title' => 'Lifestyle Blog', 'parent_id' => $blogs->id]);
    }
}
