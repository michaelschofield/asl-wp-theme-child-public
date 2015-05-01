<?php get_header(); ?>
	
		<div id="content">

				    <main id="main" role="main">

				    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						    <header class="align-center article-header hero has-background background-base">
								<h1 class="title beta wrap" itemprop="headline">
									<?php the_title(); ?>
								</h1>
						    </header> <!-- end article header -->

							<?php get_template_part( 'partials/ask-a-librarian' ); ?>

							<section class="clearfix wrap">
								<table class="table table--responsive">
									<thead>
										<tr>
											<td><span class="hide-accessible">Service or Desk</span></td>
											<td>Phone</td>
											<td>Toll-Free</td>
											<td>Email</td>
										</tr>
									</thead>
									<tbody>
										<tr class="has-background background-base">
											<td colspan="4">Questions</td>
										</tr>
										<tr>
											<td data-table-label="Questions">General / Account Questions</td>
											<td data-table-label="Local #">
												<a href="tel:19542624600">954.262.4600</a>
											</td>
											<td data-table-label="Toll-Free">
												<a href="tel:18005416682">800.541.6682 ext. 24600</a>
											</td>
										</tr>
										<tr>
											<td data-table-label="Questions">In-Depth / Research Questions</td>
											<td data-table-label="Local #"><a href="tel:19542624613">954.262.4613</a></td>
											<td data-table-label="Toll-Free"><a href="tel:18005416682">800.541.6682 ext. 24613</a></td>
										</tr>

										<tr class="has-background background-base">
											<td colspan="4">Departments</td>
										</tr>
										<tr>
											<td data-table-label="Public Services Desk">Public Library Services</td>
											<td><a href="tel:19542625477">954.262.5477</a></td>
											<td><a href="tel:18005416682">800.541.6682 ext. 5477</a></td>
											<td></td>
										</tr>
										<tr>
											<td>Circulation</td>
											<td><a href="tel:19542624601">954.262.4601</a></td>
											<td><a href="tel:18005416682">800.541.6682 ext. 24601</a></td>
											<td></td>
										</tr>
										<tr>
											<td>Collection Development</td>
											<td><a href="tel:19542624633">954.262.4633</a></td>
											<td><a href="tel:800.541.6682">800.541.6682 ext. 24633</a></td>
											<td></td>
										</tr>
										<tr>
											<td>Document Delivery</td>
											<td><a href="tel:19542624602">954.262.4502</a></td>
											<td><a href="tel:18005416682">800.541.6682 ext. 24602</a></td>
											<td><a href="mailto:library@nova.edu">library@nova.edu</a></td>
										</tr>
										<tr>
											<td>Interlibrary Loan</td>
											<td><a href="tel:1954.262.4619">954.262.4619</a></td>
											<td><a href="tel:18005416682">800.541.6682 ext. 24619</a></td>
											<td><a href="mailto:ill@nova.edu">ill@nova.edu</a></td>
										</tr>
										<tr>
											<td>Electronic Course Reserves</td>
											<td></td>
											<td></td>
											<td><a href="mailto:ecrhpd@nova.edu">erchpd@nova.edu</a></td>
										</tr>

									</tbody>
								</table>
							</section>

						    <section class="post-content hero clearfix eightcol center-grid" itemprop="articleBody">
							    <?php the_content(); ?>
							</section> <!-- end article section -->

						    <footer class="article-footer wrap clearfix">
			
							    <?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?>
								
						    </footer> <!-- end article footer -->
						    
						    <?php //comments_template(); ?>
					
					    </article> <!-- end article -->
					    <?php endwhile; ?>	
					
    				</main> <!-- end #main -->

		</div> <!-- end #content -->	

				
	<?php endif; ?>	

<?php get_footer(); ?>