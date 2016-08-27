				<div id="menu--home-links" class="menu--home-links">
					<h4>Featured Links</h4>
					<?php ttn_menu_top_links(); ?>
				</div>

				<div id="widgetized-front-center-1">

					<?php if ( is_active_sidebar( 'widgetized-front-center-1' ) ) : ?>

						<?php dynamic_sidebar( 'widgetized-front-center-1' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend.

						<div class="alert help">
							<p>Please activate some Widgets.</p>
						</div> -->

					<?php endif; ?>

				</div> <!-- end widgetized-front-center-1 -->



				<!-- DESKTOP-ONLY ADS -->
				<?php if ( function_exists( 'is_handheld' ) && ! is_handheld() ) : ?>
				<div class="ad-container clearfix">
					<div class="ad rectangle-ad twelvecol first last">



					</div>
				</div>
				<?php endif; ?>



				<div id="widgetized-front-center-2">

					<?php if ( is_active_sidebar( 'widgetized-front-center-2' ) ) : ?>

						<?php dynamic_sidebar( 'widgetized-front-center-2' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend.

						<div class="alert help">
							<p>Please activate some Widgets.</p>
						</div> -->

					<?php endif; ?>

				</div> <!-- end widgetized-front-center-2 -->
