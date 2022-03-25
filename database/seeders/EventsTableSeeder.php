<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [[
            'Name'=> 'Football',
            'Category_id'=> "1",
            'Date'=> '2021-04-05 18:05:00',
            'Description'=> 'kick ball ... ?? ... profit',
            'Organiser'=> 'Rick Astley',
            'Place'=> 'London Borough of Harrow',
            'URL'=> Str::random(10),
        ],[
            'Name'=> 'Rugby',
            'Category_id'=> '1',
            'Date'=> '2021-04-05 18:05:00',
            'Description'=> 'Tackle other alpha males',
            'Organiser'=> 'Jesus Christ',
            'Place'=> 'heaven',
            'URL'=> Str::random(10),
        ],[
            'Name'=> 'Cricket',
            'Category_id'=> '1',
            'Date'=> '2021-04-05 18:05:00',
            'Description'=> 'Ball goes high',
            'Organiser'=> 'Samantha bells',
            'Place'=> 'Astro turf',
            'URL'=> Str::random(10),
        ],[
            'Name'=> 'Art',
            'Category_id'=> '2',
            'Date'=> '2021-04-05 18:05:00',
            'Description'=> 'Student art gallery',
            'Organiser'=> 'Dylan mertz',
            'Place'=> 'Univeristy of Birmingham paking lot',
            'URL'=> Str::random(10),
        ],[
            'Name'=> 'History',
            'Category_id'=> '2',
            'Date'=> '2021-04-05 18:05:00',
            'Description'=> 'WW1 and WW2 movie night',
            'Organiser'=> 'Tracy hall',
            'Place'=> 'Reception',
            'URL'=> Str::random(10),
        ],[
            'Name'=> 'Museum',
            'Category_id'=> '2',
            'Date'=> '2021-04-05 18:05:00',
            'Description'=> 'Fascinating history',
            'Organiser'=> 'John Pebble',
            'Place'=> 'Peterborough Museum',
            'URL'=> Str::random(10),
        ],[
            'Name'=> 'TEDxTalks',
            'Category_id'=> '3',
            'Date'=> '2021-05-05 20:30:00',
            'Description'=> 'Have an opinion you want to share? The stage is yours!',
            'Organiser'=> 'Albert Gawny',
            'Place'=> 'Conference hall',
            'URL'=> Str::random(10),
        ],[
            'Name'=> 'Live',
            'Category_id'=> '3',
            'Date'=> '2021-10-05 16:00:00',
            'Description'=> 'Live Environmental Discussion',
            'Organiser'=> 'Britney Strope',
            'Place'=> 'Online',
            'URL'=> Str::random(10),
        ],[
            'Name'=> 'Music',
            'Category_id'=> '3',
            'Date'=> '2021-08-03 11:15:00',
            'Description'=> 'Sing with us, at the Student Union and let your voice be heard!',
            'Organiser'=> 'Tom Mitchel',
            'Place'=> 'Student Union',
            'URL'=> Str::random(10),
        ]];
        foreach ($events as $event){
            DB::table('events')->insert($event);
        };
    }
}
