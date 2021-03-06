<?php
/**
 * WicketPixie
 * (c) 2006-2011 Eddie Ringle <eddie@eringle.net>
 * Provided by Chris Pirillo <chris@pirillo.com>
 *
 * Licensed under the New BSD License.
 */
?>
                <div id="content">
                <?php wipi_before_content(); ?>
				    <?php
				    if (have_posts()) : while (have_posts()) : the_post();
				    ?>
				    <div class="post" id="post-<?php the_ID(); ?>">
				        <?php wipi_before_post(); ?>
					    <h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					    <div class="post-aside">
	                        <?php wipi_post_aside(); ?>
	                    </div>
					    <div class="post-content">
						    <?php the_content(__('Read on...')); ?>
					    </div>
					    <?php wipi_after_post(); ?>
				    </div>
				    <?php
				    endwhile; endif;
				    ?>
				<?php wipi_after_content(); ?>
			    </div>
                <?php include_once 'sidebar.php'; ?>