<?php 
/* 	TextArea 
*
*	The Textarea field creates a simple textarea. This field
*	is useful to store simple paragraphs of text to use in your theme.
*
*	Default Value:
*	Set a default value for this field when creating a new post.
*
*	Formatting: 
*	This option will determine how to render the value. Selecting
*	“HTML” will convert any tags in the value to html tags.
*	Selecting “auto <br />” will convert any new lines to html
*	line breaks. Selecting “None” will not convert any tags and
*	you will see any html displayed as normal text.
*/

// The API will return a string.
the_field('textarea');