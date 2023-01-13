<?php

//Comment Textarea move down
function accounting_move_comment_field_to_bottom( $fields ) {
//	Unset cookie
	unset( $fields['cookies'] );
	// unset comment and reset down
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;

	return $fields;
}

add_filter( 'comment_form_fields', 'accounting_move_comment_field_to_bottom' );
