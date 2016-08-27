				<div id="sidebar1">

					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend.

						<div class="alert help">
							<p>Please activate some Widgets.</p>
						</div> -->

					<?php endif; ?>

				</div> <!-- end sidebar1 -->



				<!-- DESKTOP-ONLY ADS -->
				<?php if ( function_exists( 'is_handheld' ) && ! is_handheld() ) : ?>
				<div class="ad-container clearfix">
					<div class="ad tower-ad adsense">

						<!-- NSSideBarMidTower -->
						<div id='div-gpt-ad-1394035111008-1' style='width:300px; height:600px;'>
						<script type='text/javascript'>
						googletag.cmd.push(function() { googletag.display('div-gpt-ad-1394035111008-1'); });
						</script>
						</div>

					</div>

				</div>
				<?php endif; ?>



				<div id="sidebar2">

					<?php if ( is_active_sidebar( 'sidebar2' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar2' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend.

						<div class="alert help">
							<p>Please activate some Widgets.</p>
						</div> -->

					<?php endif; ?>

				</div> <!-- end sidebar2 -->

				<!-- DESKTOP-ONLY ADS -->
				<?php if ( function_exists( 'is_handheld' ) && ! is_handheld() ) : ?>
				<div class="ad-container clearfix">
					<div class="ad rectangle-ad adsense">

						<!-- NSSideBarMidBox -->
						<div id='div-gpt-ad-1394035111008-0' style='width:300px; height:250px;'>
						<script type='text/javascript'>
						googletag.cmd.push(function() { googletag.display('div-gpt-ad-1394035111008-0'); });
						</script>
						</div>

					</div>

				</div>
				<?php endif; ?>
