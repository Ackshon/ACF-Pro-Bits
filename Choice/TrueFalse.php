<?php
/* TrueFalse
*
*/

// Template usage
/*
*  View value data (for debugging)
*/

var_dump( get_field('field_name') );

/*
*  Conditional Statement
*/

if( get_field('field_name') )
{
    echo "do something";
}
else
{
    echo "do something else";
}

/*
*  Query posts for a true/false value.
*  This method uses the meta_query param to match the string "1" to the database value "1|0"
*/

$posts = get_posts(array(
	'meta_query' => array(
		array(
			'key' => 'field_name',
			'value' => '1',
			'compare' => '=='
		)
	)
));

if( $posts )
{
	foreach( $posts as $post )
	{
		setup_postdata( $post );

		// ...

	}

	wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
}