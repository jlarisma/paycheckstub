<?php
/*
Template Name: Full Width Page
*/

?>
<?php get_header(); ?>

<?php get_template_part('includes/breadcrumbs'); ?>
<?php get_template_part('includes/top_info'); ?>

<div id="content" class="clearfix fullwidth">
	<div id="left-area">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="entry post clearfix">
			<?php if (get_option('chameleon_page_thumbnails') == 'on') { ?>
				<?php
					$thumb = '';
					$width = 186;
					$height = 186;
					$classtext = 'post-thumb';
					$titletext = get_the_title();
					$thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext,false,'Entry');
					$thumb = $thumbnail["thumb"];
				?>

				<?php if($thumb <> '') { ?>
					<div class="post-thumbnail">
						<?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext); ?>
						<span class="post-overlay"></span>
					</div> 	<!-- end .post-thumbnail -->
				<?php } ?>
			<?php } ?>

			<?php 
				the_content(); 
			?>
			<?php wp_link_pages(array('before' => '<p><strong>'.esc_html__('Pages','Chameleon').':</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			<?php edit_post_link(esc_html__('Edit this page','Chameleon')); ?>
		</div> <!-- end .entry -->

		<?php if (get_option('chameleon_show_pagescomments') == 'on') comments_template('', true); ?>
	<?php endwhile; endif; ?>
	</div> 	<!-- end #left-area -->
</div> <!-- end #content -->
<script type="text/javascript">
	var post = <?php echo json_encode($_POST); ?>;
	$('#s2member-pro-authnet-checkout-email, #s2member-pro-authnet-checkout-username').val(post.user_email);
</script>
<?php get_footer(); ?>