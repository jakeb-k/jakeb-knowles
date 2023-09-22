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
        DB::table('posts')->insert(['name'=>'Mat-Mart','description'=>'An E-commerce web application built with laravel, that sells different types of mats. It has an in-built Content Management System for the Orders placed and Mats. It has a payment system and is search engine optimized. Uses generic back-end types and code to enable expedited creation of e-commerce stores in the future. ','images'=>'1,2,3,4,5,6,7,8,9,10','url'=>'https://matmart.shop/','techs'=>'Business Analysis, UI Design, Full Stack Development (Laravel, Blade), SQL (SQLite), SEO','status'=>'Completed August 23','logo'=>'mmLogo.png']);
        DB::table('posts')->insert(['name'=>'F Service','description'=>'A web application that imitates popular food delivery services. It allows users to view restaurants, make orders and favourite dishes. Restaurants can create an account, display their items, receive orders, tick orders off with Create, Read, Update and Delete functionality on all dishes. ','images'=>'1,2,3,4,5,6','url'=>'https://foodservice-mock.online/','techs'=>'Business Analysis, UI Design, Full Stack Development (Laravel, Blade), SQL (SQLite)','status'=>'Completed July 23','logo'=>'fsLogo.png']);
        DB::table('posts')->insert(['name'=>'HaHa Hub','description'=>'A joke generator app, built with angular/ionic. Pick a category and get a related joke. This app is monetized through google AdMob and uses a free API to produce jokes. ','images'=>'1,2','url'=>'Available on Google Play','techs'=>'UI Design, API Creation, App Development (Angular - Ionic)','status'=>'Completed August 23','logo'=>'hhLogo.jpg']);
        DB::table('posts')->insert(['name'=>'Alcay','description'=>'A front-end demonstration (not functional) of a splash page that is used to grab the users attention and to follow the call to action, of getting in contact with Alcay. ','images'=>'1,2','url'=>'Not Hosted','techs'=>'UI Design, Front-End (React.js)','status'=>'Completed July 22','logo'=>'alcLogo.png']);
        DB::table('posts')->insert(['name'=>'Japres','description'=>'Japanese learning app for primary and high school students to learn japanese through fun interactive games. I was the lead developer of this project and guided the team towards creating engaging, and high quality software by outlining the software architecture to follow as well as designating roles and responsibilities to ensure smooth progression towards client delivery','images'=>'1,2','url'=>'Will be Available on all Mobile Platforms','techs'=>'Systems Analysis, UI Design, Project Management, Team Leadership, App Development (Angular - Ionic)','status'=>'Scheduled Release for October 23','logo'=>'japresLogo.png']);
        DB::table('posts')->insert(['name'=>'Store Score','description'=>'An application that allows users to find any store in the world and write a review about it. The application uses googles Places API to get all the restaurants based in the searched location to allow for a review. User account page also shows the number of reviews submitted and the average rating the user gives out. Currently works in browser, but requires native components to be imported to allow for mobile porting. ','images'=>'1','url'=>'Will be Available on Google Play','techs'=>'Business Analysis, UI Design, API Creation, App Development (Angular - Ionic)','status'=>'Scheduled Release for October 23','logo'=>'ssLogo.png']);

    }
}
