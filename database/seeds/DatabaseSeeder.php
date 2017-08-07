<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Database\Eloquent\Model;
use App\Models\Technology;
use App\Models\Team;
use App\Models\Member;
use App\Models\Feedback;
use App\Models\Service;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // $this->call(UsersTableSeeder::class);
        Model::unguard();
        User::create([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('abc123'),
            'role' => 2
        ]);

        /*
         * ----------------------------
         * CREATE: Vu Ngoc Son
         * DATE: 04/08/2016
         * CONTENT: Seeder Teams and Members
         * ----------------------------
         */
        Team::create(
                [
                    'name' => 'PHP',
                    'desciption' => 'Alias ut explicabo Autem suscipit omnis aliquam nostrud natus alias voluptas fuga Dolor reprehenderit non fugiat odit occaecat quibusdam'
                ]
        );
        Team::create(
                [
                    'name' => 'Android',
                    'desciption' => 'Alias ut explicabo Autem suscipit omnis aliquam nostrud natus alias voluptas fuga Dolor reprehenderit non fugiat odit occaecat quibusdam'
                ]
        );
        Team::create(
                [
                    'name' => 'Rubi',
                    'desciption' => 'Alias ut explicabo Autem suscipit omnis aliquam nostrud natus alias voluptas fuga Dolor reprehenderit non fugiat odit occaecat quibusdam'
                ]
        );
        Team::create(
                [
                    'name' => 'Node Js',
                    'desciption' => 'Alias ut explicabo Autem suscipit omnis aliquam nostrud natus alias voluptas fuga Dolor reprehenderit non fugiat odit occaecat quibusdam'
                ]
        );
        Team::create(
                [
                    'name' => 'Dot Net',
                    'desciption' => 'Alias ut explicabo Autem suscipit omnis aliquam nostrud natus alias voluptas fuga Dolor reprehenderit non fugiat odit occaecat quibusdam'
                ]
        );
        Member::create(
                [
                    'name' => 'Son Vu',
                    'image' => 'Mem-1470279684.png',
                    'position' => 'Developer',
                    'team_id' => 4
                ]
        );
        Member::create(
                [
                    'name' => 'Thanh Ngo',
                    'image' => 'Mem-1470279697.png',
                    'position' => 'Developer',
                    'team_id' => 2
                ]
        );
        Member::create(
                [
                    'name' => 'Nhan Hoang',
                    'image' => 'Mem-1470279710.jpg',
                    'position' => 'Developer',
                    'team_id' => 1
                ]
        );
        Member::create(
                [
                    'name' => 'Duyen Pham',
                    'image' => 'Mem-1470279722.jpg',
                    'position' => 'Developer',
                    'team_id' => 3
                ]
        );
        Member::create(
                [
                    'name' => 'Son Ho',
                    'image' => 'Mem-1470279740.jpg',
                    'position' => 'Developer',
                    'team_id' => 4
                ]
        );
        Member::create(
                [
                    'name' => 'Son Ngoc Vu',
                    'image' => 'Mem-1470279684.png',
                    'position' => 'Developer',
                    'team_id' => 1
                ]
        );
        /*
         * ----------------------------
         * CREATE: Ngo-Viet-Thanh
         * DATE: 04/08/2016
         * CONTENT:Seed Feedback
         * ----------------------------
         */
        Feedback::create([
            'content' => 'Possesses extremely sound technical and professional skills. The utilization of these skills to the optimum level is evident from his performance',
            'image' => 'feedback-0b871ffa-3b43-493c-8bd1-e630293d996a.png',
            'name_client' => 'Nguyen Van A',
            'company' => 'ABC Software',
                ]
        );
        Feedback::create(
                [
                    'content' => 'The way of handling critical situations with ease has earned him a lot of respect from his team members',
                    'image' => 'feedback-2722a4ee-9375-4a0c-b2e1-b58508dd0991.jpg',
                    'name_client' => 'Le Li',
                    'company' => 'BCA Software',
                ]
        );
        Feedback::create([
            'content' => 'Has grown in the last few months by giving promising result through a steady performance. The growth path is definitely positive',
            'image' => 'feedback-656694fb-ee4e-4d48-8636-3c0656fce701.png',
            'name_client' => 'Le Hi',
            'company' => 'CBA Software',
                ]
        );


        /*
         * ----------------------------
         * CREATE: Pham Thi Duyen
         * DATE: 04/08/2016
         * CONTENT:Seed Technology
         * ----------------------------
         */
        Technology::create(
                [
                    'name' => 'Nodejs',
                    'image' => 'nodejs.png',
                    'link' => 'https://nodejs.org/en/'
        ]);

        Technology::create([
            'name' => 'Ruby',
            'image' => 'ruby.png',
            'link' => 'https://www.ruby-lang.org/vi/'
        ]);

        Technology::create([
            'name' => 'Ruby on Rails',
            'image' => 'ruby-rails.png',
            'link' => 'http://rubyonrails.org/'
        ]);
        Technology::create([
            'name' => 'PHP',
            'image' => 'php.png',
            'link' => 'http://php.net/']);
        Technology::create([
            'name' => 'Android',
            'image' => 'android.png',
            'link' => 'https://developer.android.com'
        ]);
        Technology::create([
            'name' => 'MongoDB',
            'image' => 'mongodb-logo-white.png',
            'link' => 'https://www.mongodb.com/'
        ]);
        Technology::create([
            'name' => 'MySQL',
            'image' => 'MySQL.png',
            'link' => 'https://www.mysql.com/'
        ]);
        Technology::create([
            'name' => 'PHP Laravel',
            'image' => 'laravel-logo.png',
            'link' => 'https://laravel.com/']);
        /**
         * ----------------------------
         * CREATE: Hoàng Tuấn Nhân
         * DATE: 04/08/2016
         * CONTENT: Add seed Services DB
         * ----------------------------
         * MODIFY:
         * DATE:
         * CONTENT
         * ----------------------------
         * @param request
         * @return view get company
         * ----------------------------
         */
        Service::create(
                [
                    'name' => 'Realtime Data',
                    'content' => 'Gain immediate insight into critical',
                    'image' => 'category-1470290599.png',
                ]
        );
        Service::create(
                [
                    'name' => 'Front-end',
                    'content' => 'Implement game-changing designs that captivate use...',
                    'image' => 'category-1470290691.png',
                ]
        );
        Service::create(
                [
                    'name' => 'Mobile',
                    'content' => 'Create mobile solutions with superior integration',
                    'image' => 'category-1470290434.png',
                ]
        );
        Service::create(
                [
                    'name' => 'Web Applications',
                    'content' => 'Develop complex systems with a passionate team',
                    'image' => 'category-1470290895.png',
                ]
        );
        Service::create(
                [
                    'name' => 'Microservices',
                    'content' => 'Increase deployment agility and prevent technology...',
                    'image' => 'category-1470290954.png',
                ]
        );
        Service::create(
                [
                    'name' => 'Continuos Delivery',
                    'content' => 'Deliver features faster',
                    'image' => 'category-1470291147.png',
                ]
        );
    }

}
