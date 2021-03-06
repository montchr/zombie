<?php get_header(); ?>

			<?php $post_type = get_post_type();

						if ( $post_type == "article_news" ) {
							$cat_id     = 4;
						} elseif ( $post_type == "article_sports" ) {
							$cat_id     = 10;
						} elseif ( $post_type == "article_living" ) {
							$cat_id     = 11;
						} elseif ( $post_type == "article_ae" ) {
							$cat_id     = 2341;
						} elseif ( $post_type == "article_opinion" ) {
							$cat_id     = 5;
						} elseif ( $post_type == "multimedia" ) {
							$cat_id     = 194;
						} elseif ( $post_type == "slideshows" ) {
							$cat_id     = 39;
						}

						// Get the single name of the post type
						global $wp_post_types;
						$obj = $wp_post_types[$post_type];
						$post_type_name = $obj->labels->singular_name;

						?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="eightcol first clearfix" role="main">

						<h1 class="single-section-name" class="first last twelvecol">
							<div class="breadcrumbs">
								<?php if(function_exists('bcn_display'))
								{
									bcn_display();
								}?>
							</div>
						</h1>

						<div id="print-edition-main" class="ninecol last">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

									<?php if (get_field('print_type') === 'issue') : ?>

										<header class="article-header">
											<h2 class="print-edition-title"><?php the_date(); ?></h2>
										</header> <!-- end article header -->

									<?php endif; ?>

									<section class="post-content clearfix" itemprop="articleBody">

										<?php the_content(); ?>

										<ul class="page-list">
											<?php wp_list_pages( array(
											              'depth' => 1,
											              'sort_column' => 'menu_order',
											              'title_li' => '',
											              'post_type' => 'print_edition',
											              'child_of' => get_the_ID()
											              )
											); ?>
										</ul>

									</section> <!-- end article section -->

									<footer class="article-footer">

										<!--sharexy code start--><noindex><div id="shr_655191" class="sharexy"><script type='text/javascript'>(function(w) { if (!w.SharexyWidget) { w.SharexyWidget = {};} if (!w.SharexyWidget.Params) { w.SharexyWidget.Params = {}; } w.SharexyWidget.Params['655191'] = {'code_id':'655191','publisher_key':'0','design':'metro','layout_static':'h','type':'st','mode_float':'','size_float':'60','size_static':'32','buzz':'0','services':['facebook', 'twitter', 'stumbleupon', 'reddit', 'google_plus'],'url':'current','allways_show_ads':'0','show_ads_sharing':'0','show_ads_cursor':'0','bg_float':'0','bg_color':'#f1f1f1','labels':'','counters':'0', 'counters_float':'0'} })(window);</script><script type='text/javascript' src='http://shuttle.sharexy.com/LoaderLite.js'></script></div></noindex><!--sharexy code end -->

										<?php // the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?>

									</footer> <!-- end article footer -->

								</article> <!-- end article -->

							<?php endwhile; ?>

							<?php else : ?>

								<article id="post-not-found" class="hentry clearfix">
									<header class="article-header">
										<h1><?php _e("Oops, Post Not Found!", "zombietheme"); ?></h1>
									</header>
									<section class="post-content">
										<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "zombietheme"); ?></p>
									</section>
									<footer class="article-footer">
										<p><?php _e("This is the error message in the single.php template.", "zombietheme"); ?></p>
									</footer>
								</article>

							<?php endif; ?>

						</div> <!-- end #print-edition-main -->

						<aside id="print-edition-aside" class="threecol first">

								<?php wp_list_pages( array(
										'post_type'       => 'print_edition',
										'title_li'        => __('')
									)
								); ?>

						</aside>

					</div> <!-- end #main -->

					<aside id="sidebar" class="sidebar fourcol last clearfix" role="complementary">

						<?php get_sidebar(); // primary sidebar ?>

					</aside>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>