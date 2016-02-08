<?php
/* 	Assembling a bunch of code for Advanced Custom Fields Pro
*	Nothing too out of the ordinary, just wanted my own repo instead
*	of always using the documentation on the site
*/


// Text Field
the_field('text');

// Text Area
the_field('textarea');

// Image Field: Basic display (URL)
if( get_field('image') ): ?>

	<img src="<?php the_field('image'); ?>" />

<?php endif;

// WYSIWYG
the_field('wysiwyg_test');

// Repeater
if( have_rows('repeater_field_name') ):
	while ( have_rows('repeater_field_name') ) : the_row();
        // display a sub field value
        the_sub_field('sub_field_name');
    endwhile;
else :
    // no rows found
endif;
