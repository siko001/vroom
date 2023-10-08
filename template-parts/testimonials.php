<?php
// Get all comments from your WordPress site
$comments = get_comments(array(
    'status' => 'approve', // Display only approved comments
    'number' => 6, // Number of comments to retrieve
));

// Check if there are comments to display
if ($comments) {
    foreach ($comments as $comment) {
        // Output each comment's author, avatar, and content
        echo '<div class="item">';
        echo '<div class="testimonial__photo">';

        // Display the commenter's avatar
        $avatar = get_avatar($comment->comment_author_email, 64); // Change the size as needed
        echo $avatar;

        echo '</div>';
        echo '<h3 class="testimonial__name custom-font font-light">' . esc_html($comment->comment_author) . '</h3>';
        echo '<br>';

        // Limit the comment content to 18 words and append "..." if it exceeds that limit
        $comment_content = $comment->comment_content;
        $comment_words = explode(' ', $comment_content);
        if (count($comment_words) > 18) {
            $comment_content = implode(' ', array_slice($comment_words, 0, 18)) . '...';
        }

        echo '<p class="testimonial__para custom-font">' . esc_html($comment_content) . '</p>';
        echo '<br>';
        echo '<h6 class="testimonial__position custom-font blue">' . esc_html(get_comment_date()) . '</h6>';
        echo '</div>';
    }
}
