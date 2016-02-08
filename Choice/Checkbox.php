<?php 
/* Checkbox
*
*/

// BASIC OUTPUT
?>
<p>Color: <?php the_field('field_name'); ?></p>
<?

// CUSTOM OUTPUT
$field = get_field_object('field_name');
$value = $field['value'];
$choices = $field['choices'];

if( $value ): ?>
<ul>
	<?php foreach( $value as $v ): ?>
	<li>
		<?php echo $choices[ $v ]; ?>
	</li>
	<?php endforeach; ?>
</ul>
<?php endif;


// BASIC LOGIC
$selected = get_field('field_name');

if( in_array('red', $selected) ) {
	echo 'Red was selected!';
}


// QUERY POSTS
$posts = get_posts(array(
    'meta_query' => array(
        array(
            'key' => 'field_name', // name of custom field
            'value' => '"red"', // matches exactly "red"
            'compare' => 'LIKE'
        )
    )
));

if( $posts ) {
    //...
}

