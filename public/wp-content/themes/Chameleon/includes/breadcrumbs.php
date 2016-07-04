<div id="breadcrumbs">
	<?php if(function_exists('bcn_display')) { bcn_display(); }
		  else { ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Home','Chameleon') ?></a> <span class="raquo">&raquo;</span>

				<?php if( is_tag() ) { ?>
					<?php esc_html_e('Posts Tagged ','Chameleon') ?><span class="raquo">&quot;</span><?php single_tag_title(); echo('&quot;'); ?>
				<?php } elseif (is_day()) { ?>
					<?php esc_html_e('Posts made in','Chameleon') ?> <?php the_time('F jS, Y'); ?>
				<?php } elseif (is_month()) { ?>
					<?php esc_html_e('Posts made in','Chameleon') ?> <?php the_time('F, Y'); ?>
				<?php } elseif (is_year()) { ?>
					<?php esc_html_e('Posts made in','Chameleon') ?> <?php the_time('Y'); ?>
				<?php } elseif (is_search()) { ?>
					<?php esc_html_e('Search results for','Chameleon') ?> <?php the_search_query() ?>
				<?php } elseif (is_single()) { ?>
					<?php $category = get_the_category();
						  $catlink = get_category_link( $category[0]->cat_ID );
						  echo ('<a href="'.esc_url($catlink).'">'.esc_html($category[0]->cat_name).'</a> '.'<span class="raquo">&raquo;</span> '.get_the_title()); ?>
				<?php } elseif (is_category()) { ?>
					<?php single_cat_title(); ?>
				<?php } elseif (is_author()) { ?>
					<?php $curauth = get_userdata($post->post_author); ?>
					<?php esc_html_e('Posts by ','Chameleon'); echo ' ',$curauth->nickname; ?>
				<?php } elseif (is_page()) { ?>
					<?php elegant_titles(); ?>
				<?php }; ?>
	<?php }; ?>
</div> <!-- end #breadcrumbs -->