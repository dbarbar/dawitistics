<?php
remove_action('wp_head', 'wp_generator');

//adding the api
add_action('init', 'add_api');
function add_api()
{
	global $wp_rewrite;

	add_filter('query_vars', create_function('$qv', '$qv[] = "txt"; return $qv;'));
	add_rewrite_rule('dawitistic\.txt$', $wp_rewrite->index.'?txt=1', 'top');

	flush_rewrite_rules(false);
}


//check to see if the request is for text
add_action('template_redirect', 'txt_template_redirect', 8);
function is_txt()
{
	return (bool)get_query_var('txt');
}

function txt_template_redirect()
{
	if(is_txt())
	{
		load_template( TEMPLATEPATH . '/utils/dawitistic.php');
		exit();
	}
}