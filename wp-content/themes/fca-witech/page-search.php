<?php
/*
Template Name: Search Page
*/

$search_query = (!empty($_GET['query'])) ? $_GET['query'] : '';
$posts = Timber::get_posts(array('posts_per_page' => 25, 's' => $search_query));

$context = Timber::get_context();
$context['posts'] = $posts;
$context['search_query'] = $search_query;
Timber::render(array('search.twig'), $context);
