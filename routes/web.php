<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Post;
use Conner\Tagging\Model\Tag;

/*Route::get('/', function () {
    //$post = Post::create([
    //	'title' => 'Tutorial',
    //	'body'  => 'Contenido'
    //]);
    //dd($post);
    
    //$post = Post::find(2);
    //$post->tag([ 'php', 'laravel']);
    
    //$post = Post::find(2);
    //$post->tag([ 'php', 'laravel', 'html', 'vuejs' ]);
    //dd($post);
    
    //$tag = Tag::find(3);
    //$tag->suggest = true;
    //$tag->save();
    //dd($tag);
    
    //$tags = Tag::suggested()->get();
    //dd($tags);
    
    //$tag1 = Tag::find(1);
    //$tag1->setGroup('Backend');
    //$tag2 = Tag::find(2);
    //$tag2->setGroup('Backend');
    //$tag3 = Tag::find(3);
    //$tag3->setGroup('Frontend');
    //$tag4 = Tag::find(4);
    //$tag4->setGroup('Frontend');  
});*/

Route::get('/', 'PostController@index')->name('posts.index');

Route::post('guardar-post', 'PostController@store')->name('posts.store');

