<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';

//$categories =[];
//
//for ($i=1; $i <= 5; $i++) {
//    $categories[] = [
//        'title' => 'Category' . $i,
//        'slug' => 'category-' . $i
//    ];
//}
//
//foreach ($categories as $category) {
//    \Hillel\Models\Category::create($category);
//}
//
//$posts = [];
//$categories = \Hillel\Models\Category::all();
//
//for ($i=1; $i <= 10; $i++) {
//    $posts[] = [
//        'title' => 'Post' . $i,
//        'slug' => 'post-' . $i,
//        'body' => 'Body of post ' . $i,
//        'category_id' => $categories->random()->id
//    ];
//}
//
//foreach ($posts as $post) {
//    \Hillel\Models\Post::create($post);
//}
//
//$tags =[];
//
//for ($i=1; $i <= 5; $i++) {
//    $tags[] = [
//        'title' => 'Tag' . $i,
//        'slug' => 'tag-' . $i
//    ];
//}
//
//foreach ($tags as $tag) {
//    \Hillel\Models\Tag::create($tag);
//}
//
//$tags = \Hillel\Models\Tag::all();
//$posts = \Hillel\Models\Post::all();
//
//foreach ($posts as $post) {
//    $tagsId = $tags->pluck('id')->random(3);
//    $post->tags()->sync($tagsId);
//}

$title = 'Абракадабра';

/** @var $blade \Illuminate\View\Factory */
echo $blade->make('pages.home', ['title' => $title])->render();
