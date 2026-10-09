<?php
/**
 *
 * Generic Single Page
 * @package 				WordPress
 * @subpackage 			Timber
 * @since 					Timber 0.2
 *
 */

$post = new TimberPost();

$context = Timber::get_context();
$context['post'] = $post;
Timber::render(array('single-' . get_post_type() . '.twig'), $context);
