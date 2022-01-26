<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Base Theme
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
*/
if (post_password_required()) {
    return;
}

// Get only the approved comments
$args = [
    'status' => 'approve',
];

// The comment Query
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query($args);

// Comment Loop
if ($comments) {
    foreach ($comments as $comment) {
        echo '<p>' . $comment->comment_content . '</p>';
    } 
} else {
    echo 'No comments found.';
}

?>