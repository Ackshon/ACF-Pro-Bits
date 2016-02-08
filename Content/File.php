<?php
/*	File Field Type
*
*/

/* The file field will return either an array, a string or an int value depending on the return value set. Below are some examples of how you can use this data. Please note that all following examples use an file field called “file”, and if you are working with a sub field, remember to replace any get_field and the_field functions with the relative get_sub_field and the_sub_field functions.

*/


// Basic display (Object)
// This example shows how to display the selected file when using the array return type. This return type allows us to easily access data such as url and filename.

$file = get_field('file');

if( $file ): ?>
	
	<a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?></a>

<?php endif; ?>

<?php


// Customized display (Object)

<?php 

$file = get_field('file');

if( $file ): 

	// vars
	$url = $file['url'];
	$title = $file['title'];
	$caption = $file['caption'];
	

	// icon
	$icon = $file['icon'];
	
	if( $file['type'] == 'image' ) {
		
		$icon =  $file['sizes']['thumbnail'];
		
	}
	

	if( $caption ): ?>

		<div class="wp-caption">

	<?php endif; ?>

	<a href="<?php echo $url; ?>" title="<?php echo $title; ?>">

		<img src="<?php echo $icon; ?>" />
		<span><?php echo $title; ?></span>

	</a>

	<?php if( $caption ): ?>

			<p class="wp-caption-text"><?php echo $caption; ?></p>

		</div>

	<?php endif; ?>

<?php endif;


// Basic display (ID)
<?php 

$file = get_field('file');

if( $file ) {

	$url = wp_get_attachment_url( $file );
	
	?><a href="<?php echo $url; ?>" >Download File</a><?php

}


// Basic display (URL)
if( get_field('file') ): ?>

	<a href="<?php the_field('file'); ?>" >Download File</a>

<?php endif; ?>