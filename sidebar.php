				<div class="sidebar fourcol first clearfix" role="complementary">
					<?php if ( is_tree( 7 ) && !is_page('policies')) : ?>

						<?php if ( is_active_sidebar( 'about' ) ) : ?>
							<header class="menu-header"><h3 class="delta no-margin">Related Pages</h3></header>
							<?php dynamic_sidebar( 'about' ); ?>					

						<?php endif; ?>

					<?php elseif ( is_tree( 34 ) ) : ?>

						<?php if ( is_active_sidebar( 'services' ) ) : ?>
							<header class="menu-header"><h3 class="delta no-margin">Related Pages</h3></header>
							<?php dynamic_sidebar( 'services' ); ?>					

						<?php endif; ?>

					<?php elseif ( is_tree( 108 ) || is_page( 'kids') || is_page( 'teens' ) ) : ?>
						<?php if ( is_active_sidebar( 'event' ) ) : ?>							

							<form role="form" id="form_26" method="post" action="http://systems.library.nova.edu/form/view.php">
								<ul>
									<li class="append field">
										<label class="label" for="element_2">Get our Monthly Newsletter</label>
										<input class="wide input" type="email" id="element_2" name="element_2" placeholder="your@email.com">
										<input type="hidden" name="form_id" value="26">
										<input type="hidden" name="submit" value="1">
										<input class="mint-green" type="submit" id="saveForm" name="submit" value="<?php echo esc_attr__('Subscribe') ?>" />
									</li>
								</ul>
							</form>
							<?php dynamic_sidebar( 'event' ); ?>


	
						<?php endif; ?>

					<?php elseif ( is_tree( 118 ) ) : ?>
						<?php if ( is_active_sidebar( 'collection' ) ) : ?>
							<header class="menu-header"><h3 class="delta no-margin">Related Pages</h3></header>
							<?php dynamic_sidebar( 'collection' ); ?>
						<?php endif; ?>

					<?php elseif ( is_tree( 149 ) ) : ?>
						<?php if ( is_active_sidebar( 'support' ) ) : ?>
							<header class="menu-header"><h3 class="delta no-margin">Related Pages</h3></header>
							<?php dynamic_sidebar( 'support' ); ?>
						<?php endif; ?>

					<?php else: ?>
					<?php endif; ?>
				</div>

