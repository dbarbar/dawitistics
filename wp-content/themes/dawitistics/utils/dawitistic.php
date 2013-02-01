<?php
//bootstrap wordpress
require_once $_SERVER['DOCUMENT_ROOT'] . '/wp-blog-header.php';

//get random post
query_posts('orderby=rand&posts_per_page=1');

//loop through post
while(have_posts())
{
	the_post();
	$title = get_the_title();
}

//send it
header("Content-type: text/plain; charset: UTF-8");
echo html_entity_decode($title, ENT_QUOTES, 'UTF-8');