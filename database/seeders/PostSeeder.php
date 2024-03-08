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
            ['name'=>"Nomster",
            'description'=>"Nomster is a new personal project I have created. It utilises the Spoonacular API's to provide an indepth recipe search using macro nutrients, cuisine, ingredients to name a few. It will have a user account feature to enable users to track their nutrients, be given tailored recipe content and to create a user review system to empower users further. Working on this over the summer with a good friend and am very excited about the potential this app has!",
            'type'=>'mobile',
            'url'=>'https://github.com/jakeb-k/nomster',
            'techs'=>'HTML5,SASS,Ionic,TypeScript,Angular,SQLite,GitHub,AndroidStudio',
            'status'=>'In Progress - Scheduled Release in 2024',
            'logo'=>'nomsterLogo.png']);
            
        DB::table('posts')->insert(
            ['name'=>'Aussie PicklePro',
            'description'=>"Aussie PicklePro, a Laravel-powered E-commerce Platform, offers a sophisticated and responsive online marketplace. Leveraging Laravel's robust framework, it seamlessly integrates innovative functionalities, ensuring a secure shopping experience for customers while streamlining administration.",
            'type'=>'web',
            'url'=>'https://aussiepicklepro.com.au/',
            'techs'=>'PHP,Laravel,jQuery,HTML5,SASS,SQLite,GitHub,Linux,Stripe,Hostinger,GoogleAnalytics',
            'status'=>'Completed November 23',
            'logo'=>'pickleLogo.png'
        ]);
        DB::table('posts')->insert(
            ['name'=>"Freemans Lawns",
            'description'=>" I created Freeman's Lawns, a full-stack project for a local mowing business. It includes a user-friendly website using HTML, CSS, and jQuery for the front end. Email functionality connects with potential customers, and SEO boosts online visibility, demonstrating my end-to-end solutions for small businesses, merging tech skills with marketing to drive growth.",
            'type'=>'web',
            'url'=>'https://vimeo.com/899431114?share=copy',
            'techs'=>'PHP,Laravel,jQuery,HTML5,SASS,SQLite,GitHub,Linux,GoogleAnalytics,WordPress',
            'status'=>'Completed January 24',
            'logo'=>'freemanLogo.jpg']);

        DB::table('posts')->insert(
            ['name'=>'Mat-Mart',
            'description'=>'An E-commerce web application built with laravel, that sells different types of mats. It has an in-built Content Management System for the Orders placed and Mats. It has a payment system and is search engine optimized. Uses generic back-end types and code to enable expedited creation of e-commerce stores in the future. ',
            'type'=>'web',
            'url'=>'https://matmart.shop/',
            'techs'=>'PHP,Laravel,jQuery,HTML5,SASS,SQLite,GitHub,Linux,Stripe,Hostinger,GoogleAnalytics',
            'status'=>'Completed August 23',
            'logo'=>'mmLogo.png']);

        DB::table('posts')->insert(
            ['name'=>'HaHa Hub',
            'description'=>'A joke generator app, built with angular/ionic. Pick a category and get a related joke. This app is monetized through google AdMob and uses a free API to produce jokes. ',
            'type'=>'mobile',
            'url'=>'https://play.google.com/store/apps/details?id=com.ionic.hahahub&pli=1',
            'techs'=>'HTML5,SASS,Ionic,TypeScript,Angular,GitHub,AndroidStudio,GoogleAds',
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
            'type'=>'mobile',
            'url'=>'https://vimeo.com/899423632?share=copy',
            'techs'=>'HTML5,SASS,Ionic,TypeScript,Angular,GitHub,AndroidStudio,Trello',
            'status'=>'Completed October 23',
            'logo'=>'japresLogo.png'
        ]);
       

        DB::table('posts')->insert(
            ['name'=>'F Service',
            'description'=>'A web application that imitates popular food delivery services. It allows users to view restaurants, make orders and favourite dishes. Restaurants can create an account, display their items, receive orders, tick orders off with Create, Read, Update and Delete functionality on all dishes. ',
            'type'=>'web',
            'url'=>'https://foodservice-mock.online/',
            'techs'=>'PHP,Laravel,jQuery,HTML5,SASS,SQLite,GitHub,Linux',
            'status'=>'Completed July 23',
            'logo'=>'fsLogo.png'
        ]);
    }
}
