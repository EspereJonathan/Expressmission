<?php
/**
 * The template for displaying comments
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Best_Shop
 */

/*
 * Check If the current post is protected by a password
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
    
		<h2 class="comments-title">
			<?php
			$hotel_and_travel_comment_count = get_comments_number();
			if ( '1' === $hotel_and_travel_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'Comments', 'hotel-and-travel' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf( 
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s Comment', '%1$s Comments', $hotel_and_travel_comment_count, 'comments title', 'hotel-and-travel' ) ),
					number_format_i18n( $hotel_and_travel_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
            
		</h2><!-- .comments-title -->

		<ol class="comments-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
					'callback'   => 'hotel_and_travel_comment',
                    'avatar_size' => 95,
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'hotel-and-travel' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	comment_form();
	?>

</div><!-- #comments -->
