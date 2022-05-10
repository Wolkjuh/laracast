<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Post::truncate();
        Category::truncate();


         $user = User::factory()->create();

         $personal = Category::create([
            'name' => 'Personal',
             'slug' => 'personal'
         ]);

         $family = Category::create([
            'name' => 'Family',
             'slug' => 'family'
         ]);

         $work = Category::create([
            'name' => 'Work',
             'slug' => 'work'
         ]);

         Post::create([
             'user_id' => $user->id,
             'category_id' => $family->id,
             'title' => 'Mijn Familie Post',
             'slug' => 'my-family-post',
             'exerpt' => 'Lorem ipsum ofzo',
             'body' => '<p>Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd</p> '
         ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'Mijn Persoonlijke Post',
            'slug' => 'my-personal-post',
            'exerpt' => 'Lorem ipsum ofzo',
            'body' => '<p>Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd</p> '
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'Mijn Werk Post',
            'slug' => 'my-work-post',
            'exerpt' => 'Lorem ipsum ofzo',
            'body' => '<p>Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd Lorem ahwd pauiwld ia;wud oid;aiw uchs liuasp puwpa dhlaiwld alhlwd</p> '
        ]);


    }
}
