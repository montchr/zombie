						<div id="bar-guide-map">

							<iframe src="http://batchgeo.com/map/6fb9163ee139543dfd724aea01a1a2d6" frameborder="0" width="100%"></iframe>

						</div> <!-- end #bar-guide-map -->

						<div class="article-group">

							<div class="group-headline first fourcol">
								<h2 class="slabtext">Philly bars speak to inner child</h2>
							</div>

							<div class="article-group-inner">

								<?php // Article: Old City’s Sugar’s offers sweet deals

								$query = new WP_Query('p=42483&post_type=article_ae'); ?>

								<?php while ( $query->have_posts() ) : $query->the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class('fourcol clearfix'); ?> role="article">
						
									<div class="featured-image-container featured-image-container-full">
										<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('zom-landscape-576'); ?></a>
									</div> <!-- end .featured-image-container -->

									<header class="article-header">

										<h3 class="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

										<div class="dek">
											<?php the_excerpt(); ?>
										</div> <!-- end dek -->
									
										<p class="byline"><i><?php _e("by", "zombietheme"); ?></i> <span class="authors"><?php if(function_exists('coauthors_posts_links')) coauthors_posts_links(); else the_author_posts_link(); ?></span></p>
								
									</header> <!-- end article header -->
							
									<section class="first-graf">
										<?php echo get_the_content_first_graf(); ?>
									</section> <!-- end .first-graf -->
							
								</article> <!-- end article -->

								<?php endwhile; // end article: Old City’s Sugar’s offers sweet deals ?>



								<?php // Article: Barcade scores with customers

								$query = new WP_Query('p=42477&post_type=article_ae'); ?>

								<?php while ( $query->have_posts() ) : $query->the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class('fourcol last clearfix'); ?> role="article">
						
									<div class="featured-image-container featured-image-container-full">
										<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('zom-landscape-576'); ?></a>
									</div> <!-- end .featured-image-container -->

									<header class="article-header">

										<h3 class="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

										<div class="dek">
											<?php the_excerpt(); ?>
										</div> <!-- end dek -->
									
										<p class="byline"><i><?php _e("by", "zombietheme"); ?></i> <span class="authors"><?php if(function_exists('coauthors_posts_links')) coauthors_posts_links(); else the_author_posts_link(); ?></span></p>
								
									</header> <!-- end article header -->
							
									<section class="first-graf">
										<?php echo get_the_content_first_graf(); ?>
									</section> <!-- end .first-graf -->
							
								</article> <!-- end article -->

								<?php endwhile; // end article: Barcade scores with customers ?>

							</div> <!-- end .article-group-inner -->

						</div> <!-- end .article-group -->



						<div class="article-group">

							<div class="group-headline first fourcol">
								<h2 class="slabtext">Snapshots: Meet the Mixers &amp; Shakers</h2>
							</div>

							<div class="article-group-inner">

								<?php // Article: Snapshot: Miki Neuman

								$query = new WP_Query('p=42466&post_type=article_ae'); ?>

								<?php while ( $query->have_posts() ) : $query->the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class('fourcol clearfix'); ?> role="article">
						
									<div class="featured-image-container featured-image-container-full">
										<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('zom-landscape-576'); ?></a>
									</div> <!-- end .featured-image-container -->

									<header class="article-header">

										<h3 class="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

										<div class="dek">
											<?php the_excerpt(); ?>
										</div> <!-- end dek -->
									
										<p class="byline"><i><?php _e("by", "zombietheme"); ?></i> <span class="authors"><?php if(function_exists('coauthors_posts_links')) coauthors_posts_links(); else the_author_posts_link(); ?></span></p>
								
									</header> <!-- end article header -->
							
									<section class="first-graf">
										<?php echo get_the_content_first_graf(); ?>
									</section> <!-- end .first-graf -->
							
								</article> <!-- end article -->

								<?php endwhile; // end article: Snapshot: Miki Neuman ?>



								<?php // Article: Snapshot: Alex Slater

								$query = new WP_Query('p=42457&post_type=article_ae'); ?>

								<?php while ( $query->have_posts() ) : $query->the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class('fourcol last clearfix'); ?> role="article">

									<div class="featured-image-container featured-image-container-full">
										<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('zom-landscape-576'); ?></a>
									</div> <!-- end .featured-image-container -->

									<header class="article-header">

										<h3 class="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

										<div class="dek">
											<?php the_excerpt(); ?>
										</div> <!-- end dek -->
									
										<p class="byline"><i><?php _e("by", "zombietheme"); ?></i> <span class="authors"><?php if(function_exists('coauthors_posts_links')) coauthors_posts_links(); else the_author_posts_link(); ?></span></p>
								
									</header> <!-- end article header -->
							
									<section class="first-graf">
										<?php echo get_the_content_first_graf(); ?>
									</section> <!-- end .first-graf -->
							
								</article> <!-- end article -->

								<?php endwhile; // end article: Snapshot: Alex Slater ?>



								<?php // Article: Thompson: Bartender gets served memorable customers

								$query = new WP_Query('p=42454&post_type=article_ae'); ?>

								<?php while ( $query->have_posts() ) : $query->the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class('eightcol last push_four clearfix'); ?> role="article">

									<div class="headshot featured-image-container featured-image-container-full">
										<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('zom-columnist-200'); ?></a>
									</div> <!-- end .featured-image-container -->

									<header class="article-header">

										<h3 class="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

										<div class="dek">
											<?php the_excerpt(); ?>
										</div> <!-- end dek -->
									
										<p class="byline"><i><?php _e("by", "zombietheme"); ?></i> <span class="authors"><?php if(function_exists('coauthors_posts_links')) coauthors_posts_links(); else the_author_posts_link(); ?></span></p>
								
									</header> <!-- end article header -->
							
									<section class="first-graf">
										<?php echo get_the_content_first_graf(); ?>
									</section> <!-- end .first-graf -->
							
								</article> <!-- end article -->

								<?php endwhile; // end article: Thompson: Bartender gets served memorable customers ?>

							</div> <!-- end .article-group-inner -->

						</div> <!-- end .article-group -->



						<div class="article-group first sixcol clearfix">

							<div class="article-group-inner">

								<?php // Article: City’s modern speakeasies offer nostalgia, exclusivity

								$query = new WP_Query('p=42442&post_type=article_ae'); ?>

								<?php while ( $query->have_posts() ) : $query->the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

									<header class="article-header">

										<h3 class="headline slabtext"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

										<div class="dek">
											<?php the_excerpt(); ?>
										</div> <!-- end dek -->
									
										<p class="byline"><i><?php _e("by", "zombietheme"); ?></i> <span class="authors"><?php if(function_exists('coauthors_posts_links')) coauthors_posts_links(); else the_author_posts_link(); ?></span></p>
								
									</header> <!-- end article header -->
							
									<section class="first-graf">
										<?php echo get_the_content_first_graf(); ?>
									</section> <!-- end .first-graf -->
							
								</article> <!-- end article -->

								<?php endwhile; // end article: City’s modern speakeasies offer nostalgia, exclusivity ?>



								<?php // Article: Walking Tall and Speaking Easy

								$query = new WP_Query('p=42447&post_type=article_ae'); ?>

								<?php while ( $query->have_posts() ) : $query->the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class('sixcol first clearfix'); ?> role="article">

									<header class="article-header">

										<h3 class="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

										<div class="dek">
											<?php the_excerpt(); ?>
										</div> <!-- end dek -->
								
									</header> <!-- end article header -->
							
								</article> <!-- end article -->

								<?php endwhile; // end article: Walking Tall and Speaking Easy ?>



								<?php // Article: Three to See

								$query = new WP_Query('p=42450&post_type=article_ae'); ?>

								<?php while ( $query->have_posts() ) : $query->the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class('sixcol last clearfix'); ?> role="article">

									<header class="article-header">

										<h3 class="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

										<div class="dek">
											<?php the_excerpt(); ?>
										</div> <!-- end dek -->
								
									</header> <!-- end article header -->
							
								</article> <!-- end article -->

								<?php endwhile; // end article: Three to See ?>

							</div> <!-- end .article-group-inner -->

						</div> <!-- end .article-group -->






						<div class="article-group sixcol last clearfix">

							<div class="article-group-inner">

								<?php // Article: Patrons say, “Cheese!” at Tigerbeats

								$query = new WP_Query('p=42474&post_type=article_ae'); ?>

								<?php while ( $query->have_posts() ) : $query->the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class('sixcol first clearfix'); ?> role="article">

									<header class="article-header">

										<h3 class="headline slabtext"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

										<div class="dek">
											<?php the_excerpt(); ?>
										</div> <!-- end dek -->
									
										<p class="byline"><i><?php _e("by", "zombietheme"); ?></i> <span class="authors"><?php if(function_exists('coauthors_posts_links')) coauthors_posts_links(); else the_author_posts_link(); ?></span></p>
								
									</header> <!-- end article header -->
							
									<section class="first-graf">
										<?php echo get_the_content_first_graf(); ?>
									</section> <!-- end .first-graf -->
							
								</article> <!-- end article -->

								<?php endwhile; // end article: Patrons say, “Cheese!” at Tigerbeats ?>



								<?php // Article: Beer and billiards offered in Old City

								$query = new WP_Query('p=42471&post_type=article_ae'); ?>

								<?php while ( $query->have_posts() ) : $query->the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class('sixcol last clearfix'); ?> role="article">

									<header class="article-header">

										<h3 class="headline slabtext"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

										<div class="dek">
											<?php the_excerpt(); ?>
										</div> <!-- end dek -->
									
										<p class="byline"><i><?php _e("by", "zombietheme"); ?></i> <span class="authors"><?php if(function_exists('coauthors_posts_links')) coauthors_posts_links(); else the_author_posts_link(); ?></span></p>
								
									</header> <!-- end article header -->
							
									<section class="first-graf">
										<?php echo get_the_content_first_graf(); ?>
									</section> <!-- end .first-graf -->
							
								</article> <!-- end article -->

								<?php endwhile; // end article: Beer and billiards offered in Old City ?>

							</div> <!-- end .article-group-inner -->

						</div> <!-- end .article-group -->