<?php get_header(); ?>

	<div id="content">
	
		    <main id="main" role="main">

			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
				
				    <header class="hide-accessible">
						<h1 class="title beta wrap" itemprop="headline">
							<?php the_title(); ?>
						</h1>
				    </header> <!-- end article header -->
			
				    <section class="post-content hero eightcol center-grid clearfix" itemprop="articleBody">

				    <?php the_content(); ?>

					<table class="table table--responsive">
						<thead>
							<tr>
								<th class="align-center has-background background-base" colspan="8">Opening and Closing Hours</th>
							</tr>
							<tr>
								<th>Sunday</th>
								<th>Monday</th>
								<th>Tuesday</th>
								<th>Wednesday</th>
								<th>Thursday</th>
								<th>Friday</th>
								<th>Saturday</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td class="table__hours" data-table-label="Sunday">11 a.m. -<br> 11:30 p.m.</td>
								<td class="table__hours" data-table-label="Monday">7:30 a.m. -<br> 11 p.m.</td>
								<td class="table__hours" data-table-label="Tuesday">7:30 a.m. -<br> 11 p.m.</td>
								<td class="table__hours" data-table-label="Wednesday">7:30 a.m. -<br> 11 p.m.</td>
								<td class="table__hours" data-table-label="Thursday">7:30 a.m. -<br> 11 p.m.</td>
								<td class="table__hours" data-table-label="Friday">7:30 a.m. -<br> 9 p.m.</td>
								<td class="table__hours" data-table-label="Saturday">8 a.m. -<br> 8 p.m.</td>
							</tr>

						</tbody>
					</table>

					<section class="align-right">
						<h3 class="hide-accessible">Holidays</h3>
						<p class="zeta">				
							Except for winter closure, we follow the Nova Southeastern University
							 <a href="http://www.nova.edu/hr/holiday-schedule.html">Holiday Schedule</a>
						</p>

					</section>

					<table class="table table--responsive">
						<thead>
							<tr>
								<th class="align-center has-background background-base" colspan="8">Service and Desk Schedules</th>
							</tr>

							<tr>
								<th><span class="hide-accessible">Desks</th>
								<th>Sunday</th>
								<th>Monday</th>
								<th>Tuesday</th>
								<th>Wednesday</th>
								<th>Thursday</th>
								<th>Friday</th>
								<th>Saturday</th>
							</tr>
						</thead>

						<tbody>

							<tr>
								<td data-table-label="Service">Circulation</td>
								<td class="table__hours" data-table-label="Sunday">11 a.m. -<br> 11:15 p.m.</td>
								<td class="table__hours" data-table-label="Monday">7:30 a.m. -<br> 10:45 p.m.</td>
								<td class="table__hours" data-table-label="Tuesday">7:30 a.m. -<br> 10:45 p.m.</td>
								<td class="table__hours" data-table-label="Wednesday">7:30 a.m. -<br> 10:45 p.m.</td>
								<td class="table__hours" data-table-label="Thursday">7:30 a.m. -<br> 10:45 p.m.</td>
								<td class="table__hours" data-table-label="Friday">7:30 a.m. -<br> 8.45 p.m.</td>
								<td class="table__hours" data-table-label="Saturday">8 a.m. -<br> 7.45 p.m.</td>
							</tr>

							<tr>
								<td data-table-label="Note"></td>
								<td class="table__hours" data-table-label="Note" colspan="7">Note that the circulation desk follows the building hours, but will <strong>close</strong> 15 minutes earlier.</td>
							</tr>

							<tr>
								<td data-table-label="Location">Cotilla Gallery</td>
								<td class="table__hours" data-table-label="Sunday">11 a.m. -<br> 9 p.m.</td>
								<td class="table__hours" data-table-label="Monday">9 a.m. -<br> 9 p.m.</td>
								<td class="table__hours" data-table-label="Tuesday">9 a.m. -<br> 9 p.m.</td>
								<td class="table__hours" data-table-label="Wednesday">9 a.m. -<br> 9 p.m.</td>
								<td class="table__hours" data-table-label="Thursday">9 a.m. -<br> 9 p.m.</td>
								<td class="table__hours" data-table-label="Friday">9 a.m. -<br> 9 p.m.</td>
								<td class="table__hours" data-table-label="Saturday">9 a.m. -<br> 8 p.m.</td>
							</tr>

							<tr>
								<td data-table-label="Service">Public Desk</td>
								<td class="table__hours" data-table-label="Sunday">11 a.m. -<br> 9 p.m.</td>
								<td class="table__hours" data-table-label="Monday">9 a.m. -<br> 9 p.m.</td>
								<td class="table__hours" data-table-label="Tuesday">9 a.m. -<br> 9 p.m.</td>
								<td class="table__hours" data-table-label="Wednesday">9 a.m. -<br> 9 p.m.</td>
								<td class="table__hours" data-table-label="Thursday">9 a.m. -<br> 9 p.m.</td>
								<td class="table__hours" data-table-label="Friday">9 a.m. -<br> 9 p.m.</td>
								<td class="table__hours" data-table-label="Saturday">9 a.m. -<br> 8 p.m.</td>
							</tr>

							<tr>
								<td data-table-label="Service">Reference Desk</td>
								<td class="table__hours" data-table-label="Sunday">11 a.m. -<br> 9 p.m.</td>
								<td class="table__hours" data-table-label="Monday">9 a.m. -<br> 9 p.m.</td>
								<td class="table__hours" data-table-label="Tuesday">9 a.m. -<br> 9 p.m.</td>
								<td class="table__hours" data-table-label="Wednesday">9 a.m. -<br> 9 p.m.</td>
								<td class="table__hours" data-table-label="Thursday">9 a.m. -<br> 9 p.m.</td>
								<td class="table__hours" data-table-label="Friday">9 a.m. -<br> 9 p.m.</td>
								<td class="table__hours" data-table-label="Saturday">9 a.m. -<br> 8 p.m.</td>
							</tr>

							<tr>
								<td data-table-label="Location">West End Deli</td>
								<td data-table-label="Hmm ..." colspan="7">The deli hours can vary - especially during summer. Please call <a href="tel:19542625500">954.262.5500</a></td>
							</tr>


						</tbody>
	              </table>

					</section> <!-- end article section -->
				
				    <footer class="article-footer wrap clearfix">
	
					    <?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?>
						
				    </footer> <!-- end article footer -->
			
			    </article> <!-- end article -->
			
			    <?php endwhile; ?>		
			
			    <?php else : ?>
			
				    <article id="post-not-found" class="hentry clearfix">
				    	<header class="article-header">
				    		<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
				    	</header>
				    	<section class="post-content">
				    		<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
				    	</section>
				    	<footer class="article-footer">
				    	    <p><?php _e("This is the error message in the page.php template.", "bonestheme"); ?></p>
				    	</footer>
				    </article>
			
			    <?php endif; ?>
	
			</main> <!-- end #main -->
		    
		
		
	</div> <!-- end #content -->

<?php get_footer(); ?>