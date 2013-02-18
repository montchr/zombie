<?php
/*
Template Name: Movers & Shakers
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
				
					<div class="moversshakers-top-promo">
				    	
					</div>
					
					
					
					
					<div class="moversshakers-main first eightcol">
						
						<div class="moversshakers-summary">
							
						</div>
						
						<h2 id="headline-voters-map" class="fittext">You put them on the map</h2>
						
						<div class="rank-voters-container clearfix">
							
							<div class="rank-voters-firstcol first sixcol clearfix">
								<ul class="rank-voters-list-first rank-voters-list">
									<?php // Vendors: Voters' Rankings (first 5)
								
									$movers_shakers_args = array(
										'post_type'      => 'food_vendor',
										'category_name'  => 'voters-ranking',
										'year'           => LUNCHIES_YEAR,
										'posts_per_page' => 5,
										'meta_key'       => 'lunchies_rank_voter',
										'orderby'        => 'meta_value_num',
										'order'          => 'ASC'
									);
								
									$lunchies_rank_voters_first_query = get_posts($voter_args_first);
								
									// Begin first column of the voters' ranking loop
									foreach($lunchies_rank_voters_first_query as $post) : setup_postdata($post); ?>
								
									<li class="rank-voters-item clearfix">
										<div class="rank-voters-item-rank-container">
											<div class="rank-voters-item-rank"><?php echo get_post_meta( $post->ID, 'lunchies_rank_voter', true ); ?></div>
											<div class="rank-voters-item-percent"><?php echo get_post_meta( $post->ID, 'lunchies_vote_percent', true ) . '%'; ?></div>
										</div>
										
										<div class="rank-voters-item-info">
											<h3 class="rank-voters-item-title fittext"><?php the_title(); ?></h3>
											
											<?php if ( get_post_meta( $post->ID, 'address_street' ) == true ) { ?>
												<span class="rank-voters-item-address-1"><?php echo get_post_meta( $post->ID, 'address_street', true ); ?></span><br /><?php } ?>
											<?php if ( get_post_meta( $post->ID, 'address_street_2' ) == true ) { ?>
												<span class="rank-voters-item-address-2"><?php echo get_post_meta( $post->ID, 'address_street_2', true ); ?></span><br /><?php } ?>
											<?php if ( get_post_meta( $post->ID, 'lunchies_owner' ) == true ) { ?>
												<span class="rank-voters-item-lunchies-owner"><strong>Owner: </strong><?php echo get_post_meta( $post->ID, 'lunchies_owner', true ); ?></span><br /><?php } ?>
											<?php if ( get_post_meta( $post->ID, 'lunchies_founded' ) == true ) { ?>
												<span class="rank-voters-item-lunchies-founded"><strong>Founded: </strong><?php echo get_post_meta( $post->ID, 'lunchies_founded', true ); ?></span><br /><?php } ?>
											<?php if ( get_post_meta( $post->ID, 'lunchies_pricerange' ) == true ) { ?>
												<span class="rank-voters-item-pricerange"><strong>Price Range: </strong><?php echo get_post_meta( $post->ID, 'lunchies_pricerange', true ); ?></span><br /><?php } ?>
											<?php if ( get_post_meta( $post->ID, 'lunchies_signature' ) == true ) { ?>
												<span class="rank-voters-item-signature"><strong>Signature Item: </strong><?php echo get_post_meta( $post->ID, 'lunchies_signature', true ); ?></span><?php } ?>
										</div>
									</li>
								
									<?php endforeach; // End the first column of the voters' ranking loop ?>
								</ul>
							</div>
							
							
							<div class="rank-voters-secondcol last sixcol clearfix">
								<ul class="rank-voters-list-last rank-voters-list">
									<?php // Vendors: Voters' Rankings (second 5)
								
									$voter_args_first = array(
										'post_type'      => 'food_vendor',
										'category_name'  => 'voters-ranking',
										'year'           => LUNCHIES_YEAR,
										'posts_per_page' => 5,
										'meta_key'       => 'lunchies_rank_voter',
										'orderby'        => 'meta_value_num',
										'order'          => 'ASC',
										'offset'         => 5
									);
								
									$lunchies_rank_voters_2nd_query = get_posts($voter_args_first);
								
									// Begin 2nd column of the voters' ranking loop
									foreach($lunchies_rank_voters_2nd_query as $post) : setup_postdata($post); ?>
								
									<li class="rank-voters-item clearfix">
										<div class="rank-voters-item-rank-container">
											<div class="rank-voters-item-rank"><?php echo get_post_meta( $post->ID, 'lunchies_rank_voter', true ); ?></div>
											<div class="rank-voters-item-percent"><?php echo get_post_meta( $post->ID, 'lunchies_vote_percent', true ) . '%'; ?></div>
										</div>
										
										<div class="rank-voters-item-info">
											<h3 class="rank-voters-item-title fittext"><?php the_title(); ?></h3>
											
											<?php if ( get_post_meta( $post->ID, 'address_street' ) == true ) { ?>
												<span class="rank-voters-item-address-1"><?php echo get_post_meta( $post->ID, 'address_street', true ); ?></span><br /><?php } ?>
											<?php if ( get_post_meta( $post->ID, 'address_street_2' ) == true ) { ?>
												<span class="rank-voters-item-address-2"><?php echo get_post_meta( $post->ID, 'address_street_2', true ); ?></span><br /><?php } ?>
											<?php if ( get_post_meta( $post->ID, 'lunchies_owner' ) == true ) { ?>
												<span class="rank-voters-item-lunchies-owner"><strong>Owner: </strong><?php echo get_post_meta( $post->ID, 'lunchies_owner', true ); ?></span><br /><?php } ?>
											<?php if ( get_post_meta( $post->ID, 'lunchies_founded' ) == true ) { ?>
												<span class="rank-voters-item-lunchies-founded"><strong>Founded: </strong><?php echo get_post_meta( $post->ID, 'lunchies_founded', true ); ?></span><br /><?php } ?>
											<?php if ( get_post_meta( $post->ID, 'lunchies_pricerange' ) == true ) { ?>
												<span class="rank-voters-item-pricerange"><strong>Price Range: </strong><?php echo get_post_meta( $post->ID, 'lunchies_pricerange', true ); ?></span><br /><?php } ?>
											<?php if ( get_post_meta( $post->ID, 'lunchies_signature' ) == true ) { ?>
												<span class="rank-voters-item-signature"><strong>Signature Item: </strong><?php echo get_post_meta( $post->ID, 'lunchies_signature', true ); ?></span><?php } ?>
										</div>
									</li>
								
									<?php endforeach; // End the 2nd column of the voters' ranking loop ?>
								</ul>
							</div>
							
						</div>
						
						
						<div class="lunchies-articles clearfix">
						<?php include('library/inc/lunchies/lunchies-' . LUNCHIES_YEAR . '.php'); ?>
						</div>
						
						
						
					</div> <!-- /.lunchies-main -->
					
					
					
					
					<div class="lunchies-sidebar last fourcol">
						
						<h2 id="headline-eds-list" class="slabtextthis">Our Top Ten</h2>
						
						<ul class="rank-eds-list">
						
						<?php // Vendors: Editors' Rankings
						
							$eds_args = array(
								'post_type'      => 'food_vendor',
								'category_name'  => 'editors-ranking',
								'year'           => LUNCHIES_YEAR,
								'posts_per_page' => 10,
								'meta_key'       => 'lunchies_rank_eds',
								'orderby'        => 'meta_value_num',
								'order'          => 'ASC'
							);
							
							$lunchies_rank_eds_query = get_posts($eds_args);
							
							// Begin the editors' ranking loop
							foreach($lunchies_rank_eds_query as $post) : setup_postdata($post); ?>
					
						
							<li class="rank-eds-item">
								<div class="rank-eds-item-head">
									<div class="rank-eds-item-outer-circle">
										<div class="rank-eds-item-inner-circle">
											<span class="rank-eds-item-rank"><?php echo get_post_meta( $post->ID, 'lunchies_rank_eds', true ); ?></span>
										</div>
									</div>
									<h3 class="rank-eds-item-title"><?php the_title(); ?></h3>
								</div>
								
								<div class="rank-eds-item-img">
									<?php the_post_thumbnail('zom-landscape-396'); ?>
								</div>
							</li>
					
							<?php endforeach; // Close the editors' ranking loop ?>
						
						</ul>
					
					</div> <!-- /.lunchies-sidebar -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>