<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert(
            ['name'=>'Mat-Mart',
            'description'=>'An E-commerce web application built with laravel, that sells different types of mats. It has an in-built Content Management System for the Orders placed and Mats. It has a payment system and is search engine optimized. Uses generic back-end types and code to enable expedited creation of e-commerce stores in the future. ',
            'images'=>'1,2,3,4,5,6,7,8,9,10',
            'url'=>'https://matmart.shop/',
            'techs'=>'Business Analysis, UI Design, Full Stack Development (Laravel, Blade), SQL (SQLite), SEO',
            'status'=>'Completed August 23',
            'logo'=>'mmLogo.png']);

        DB::table('posts')->insert(
            ['name'=>'HaHa Hub',
            'description'=>'A joke generator app, built with angular/ionic. Pick a category and get a related joke. This app is monetized through google AdMob and uses a free API to produce jokes. ',
            'images'=>'1,2',
            'techs'=>'UI Design, API Creation, App Development (Angular - Ionic)',
            'status'=>'Completed September 23 - Available on the Google Play Store',
            'logo'=>'hahaLogo.png']);

        DB::table('posts')->insert(
            ['name'=>'Japres',
            'description'=>"Japres is an educational app designed to introduce the
                Japanese language to children aged 7-14. It's a shining example
                of synergy between Ionic and Angular technologies. In my role as
                the project lead, I demonstrated exceptional leadership skills by
                overseeing the complete Software Development Life Cycle (SDLC),
                from concept to execution, ensuring a seamless and engaging
                language learning experience. As lead developer, I oversaw all
                aspects of development, set and met deadlines, delegated tasks,
                and crafted engaging games for effective language learning",
            'images'=>'1,2,3,4,5,6,7,8,9',
            'techs'=>'Systems Analysis, Project Management, Team Leadership, App Development (Angular - Ionic)',
            'status'=>'Scheduled Release for October 23',
            'logo'=>'japresLogo.png'
        ]);
        DB::table('posts')->insert(
            ['name'=>"Freeman's Mowing",
            'description'=>" I created Freeman's Mowing, a full-stack project for a local mowing business. It includes a user-friendly website using HTML, CSS, and jQuery for the front end. Email functionality connects with potential customers, and SEO boosts online visibility, demonstrating my end-to-end solutions for small businesses, merging tech skills with marketing to drive growth.",
            'images'=>'1,2,3,4,5,6,7,8,9,10',
            'techs'=>'HTML5 & SCSS, jQuery, JavaScript, PHP - Laravel (Backend), SQLite, SEO, SMTP Config, Web Hosting (SSH), Git (Version Control), Canva (UI Design)',
            'status'=>'Final Touches - Release in 1-2 weeks',
            'logo'=>'freemanLogo.jpg']);

        DB::table('posts')->insert(
            ['name'=>"Nomster",
            'description'=>"Nomster is a new personal project I have created. It utilises the Spoonacular API's to provide an indepth recipe search using macro nutrients, cuisine, ingredients to name a few. It will have a user account feature to enable users to track their nutrients, be given tailored recipe content and to create a user review system to empower users further. Working on this over the summer with a good friend and am very excited about the potential this app has!",
            'images'=>'nomster1,nomster2,nomster3,nomster4,nomster5,nomster6,nomster7',
            'techs'=>'HTML5 & SCSS, TypeScript, Angular, SQL (SQLite), REST APIs, Mobile Development, Git (Version Control), Canva (UI Design)',
            'status'=>'In Progress - Scheduled Release in 2024',
            'logo'=>'nomsterLogo.png']);
            
        DB::table('posts')->insert(
            ['name'=>'Alcay',
            'description'=>'A front-end demonstration (not functional) of a splash page that is used to grab the users attention and to follow the call to action, of getting in contact with Alcay. ',
            'images'=>'1,2',
            'techs'=>'UI Design, Front-End (React.js)',
            'status'=>'Completed July 22',
            'logo'=>'alcLogo1.PNG'
        ]);

        DB::table('posts')->insert(
            ['name'=>'F Service',
            'description'=>'A web application that imitates popular food delivery services. It allows users to view restaurants, make orders and favourite dishes. Restaurants can create an account, display their items, receive orders, tick orders off with Create, Read, Update and Delete functionality on all dishes. ',
            'images'=>'1,2,3,4,5,6',
            'url'=>'https://foodservice-mock.online/',
            'techs'=>'Business Analysis, UI Design, Full Stack Development (Laravel, Blade), SQL (SQLite)',
            'status'=>'Completed July 23',
            'logo'=>'fsLogo.png'
        ]);
    }
}
