<?php

add_action('pre_get_posts', 'filter_posts_list');

function filter_posts_list($query)
{
	global $pagenow;

	global $current_user;
	get_currentuserinfo();

	if(!current_user_can('administrator') && ('edit.php' == $pagenow))
	{
		$query->set('author', $current_user->ID); 
	}
}
?>