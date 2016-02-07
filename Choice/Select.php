<?php
/* Select
*
*/

// Template Usage

/*
*  Displaying single value
*/

?>
<p>Color: <?php the_field('page_layout'); ?></p>
<?php

/*
*  Displaying a single value's Label
*/

$field = get_field_object('field_name');
$value = get_field('field_name');
$label = $field['choices'][ $value ];

?>
<p>Color: <?php echo $label; ?></p>
<?php

/*
*  Displaying multiple values
*/

?>
<p>Colors: <?php echo implode(', ', get_field('page_layout')); ?></p>
<?php

/*
*  Conditional statement (Single Value)
*/

if(get_field('page_layout') == "col_1")
{
    //...
}

/*
*  Conditional statement (Multiple Values)
*/

if( in_array( 'col_1', get_field('page_layout') ) )
{
    //...
}

?>