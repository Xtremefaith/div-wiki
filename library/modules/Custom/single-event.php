<?php $EVENT = new Event(get_the_ID()); ?>

<?php get_header(); ?>
			
		<div id="main" class="eightcol first clearfix single" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
					<?php $featured = get_field('header_image') ? get_field('header_image') : get_field('featured_image'); ?>
					<?php $regions = wp_get_post_terms($post->ID, 'regions', array("fields" => "all")); ?>
					<?php $Content = new Content($post->ID); ?>

					<?php if($featured){ ?>
						<div class="post-feature-image">
							
							<?php if($regions[0]->name != "Universal") {
								_e('<div class="eyebrow">'.$regions[0]->name.'</div>');
							}
								_e('<img src="'.$featured.'">'); ?>
							
						</div>
					<?php } ?>

					<section class="entry">
						<?php if($featured){ ?>
							<div class="right">
								<?php $icons = array('facebook','twitter','email'); ?>
								<?php $Content->share_icons($icons,get_field('thumbnail_image')); ?>
								<?php $tags = wp_get_post_tags($post->ID); ?>
								<?php $tag_count = 0; ?>
								<?php foreach ($tags as $value) {
									@$tag_string .= $value->name.', ';
									if (++$tag_count == 5) break;
								} ?>
							</div>

							<?php if($tags){ ?>
								<div class="tags">Tags: <?php echo substr($tag_string, 0, -2); ?></div>
							<?php } ?>
						<?php } ?>
						
						
						
						<p class="type"><?php the_field('issue'); ?></p>
						<h1><?php the_title(); ?></h1>

						<div id="event_details" class="right">
							<ul>
								<?php if($EVENT->get_date()){ ?><li id="date" class="date"><?=$EVENT->get_the_date();?></li><?php } ?>
								<?php if($EVENT->details['start_time']){ ?><li class="time"><?=$EVENT->get_the_time();?></li><?php } ?>
								<?php if($EVENT->get_phone_number()){ ?><li class="phone"><?=$EVENT->get_phone_number();?></li><?php } ?>
								<?php if($EVENT->details['location_name']){ ?><li id="location" class="location"><?=$EVENT->details['location_name'];?></li><?php } ?>
								<?php if($EVENT->details['location_address']){ ?><li><?=$EVENT->details['location_address'];?></li><?php } ?>
								<?php if($EVENT->details['location']){ ?><li><?=$EVENT->details['location'];?></li><?php } ?>
								<li></li>
							</ul>
						</div>

						<p class="content"><?php the_content(); ?></p>

						<?php if(!$featured){ ?>
							<footer class="">
								<?php $icons = array('facebook','twitter','email'); ?>
								<?php $Content->share_icons($icons,get_field('thumbnail_image')); ?>
								<?php $tags = wp_get_post_tags($post->ID); ?>
								<?php $tag_count = 0; ?>
								<?php foreach ($tags as $value) {
									@$tag_string .= $value->name.', ';
									if (++$tag_count == 5) break;
								} ?>

								<?php if($tags){ ?>
									<div class="tags">Tags: <?php echo substr($tag_string, 0, -2); ?></div>
								<?php } ?>
							</footer>
						<?php } ?>
						
					</section>

				</article> <!-- end article -->
		
			<?php endwhile; ?>			
		
			<?php else : ?>
		
				<article id="post-not-found" class="hentry clearfix">
		    		<header class="article-header">
		    			<h1><?php _e("Post Not Found", "divtruth"); ?></h1>
		    		</header>
		    		<section class="entry-content">
					    <p><?php _e("Please visit our home page.", "divtruth"); ?></p>
							<ul>
							<li><a href="/">Home</a></li>
						</ul>
		    		</section>
		    		<footer class="article-footer">
		    		    
		    		</footer>
				</article>
		
			<?php endif; ?>

		</div> <!-- end #main -->

		<div id="sidebars" class="sidebar fourcol last clearfix">
			<div id="sidebar2" class="sidebar" role="complementary">

				<?php if ( is_active_sidebar( 'secondary' ) ) : ?>

					<?php dynamic_sidebar( 'secondary' ); ?>

				<?php else : ?>
				<?php endif; ?>

			</div>
		</div>

<?php get_footer(); ?>