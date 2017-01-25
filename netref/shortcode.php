<?php add_shortcode('blogpost', function($content){ ob_start();?>

<section class="socialNblog" style="background:#ececec">
	<div class="container">
		<div id="blog-onHome" class="col-md-6">

			<h2 class="headline">Blog</h2>


			<?php
			$args = array('numberposts' => 1, 'orderby' => 'post_date', 'order' => 'DESC', 'post_type' => 'post', 'post_status' => 'publish', 'offset' => 0);

			$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
			$index = 0; ?>

			<?php foreach( $recent_posts as $recent ): ?>

				<?php  //if($index%2==0): ?>
					<div class="col-md-12">
						<div class="article box-border">



							<div class="img">
								<a href="<?php echo get_permalink( $recent['ID'] ); ?>" ><?php echo get_the_post_thumbnail($recent['ID']) ?></a>
							</div>
							<div class="text">
								<div class="head">
									<a href="<?php echo get_permalink( $recent['ID'] ); ?>" ><h4><?php echo $recent['post_title']; ?></h4></a>
									<div class="details">Published <span><?php echo get_the_time('F j, Y',$recent['ID'] ); ?></span> By <?php   echo the_author_meta( 'display_name' , $recent['post_author'] ); ?></div>
								</div>
								<p><?php echo substr( wp_strip_all_tags($recent['post_content']), 0, 150); ?>...</p>
							</div>

						</div>

						<?php //endif; ?>
					</div>
					<?php //$index++; ?>
				<?php endforeach; ?>

				<?php $index = 0; ?>

				<?php
				$args = array('numberposts' => 2, 'orderby' => 'post_date', 'order' => 'DESC', 'post_type' => 'post', 'post_status' => 'publish', 'offset' => 1);

				$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
				$index = 0; ?>

				<?php foreach( $recent_posts as $recent ): ?>

					<?php  //if($index%2==0): ?>
						<div class="col-md-6 col-xs-12">
							<div class="article small-post">

								<div class="text">
									<div class="head">
										<a href="<?php echo get_permalink( $recent['ID'] ); ?>" ><h4><?php echo $recent['post_title']; ?></h4></a>
										<div class="details"><span class="orange"><?php echo get_the_time('F j, Y',$recent['ID'] ); ?></span> By <?php   echo the_author_meta( 'display_name' , $recent['post_author'] ); ?></div>
									</div>

								</div>

							</a>
						</div>

						<?php //endif; ?>
					</div>
					<?php //$index++; ?>
				<?php endforeach; ?>

				<?php $index = 0; ?>


			</div>
			<div id="twitter-fd" class="col-md-6">
				<h2><img src="<?php echo esc_url( get_template_directory_uri() );?>/images/Net_ref_lock.png" alt="Recon-logo" class="twitter_logo">Twitter Feed</h2>
				<?php echo do_shortcode('[minmentweet username="netreferee" count="4" type="user" retweets=“0” replies=“0”]'); ?>


				<div class="followrecon">
					<i class="fa fa-twitter"></i> Follow us <a href='https://twitter.com/netreferee' target='_blank' class="">@NetRef</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $something = ob_get_clean(); return $something ; }); ?>
<?php add_shortcode('video1', function($content){ ob_start();?>
<div class="video-section" style="padding-bottom:100px">

	<h2 class="heading2">Designed by Teachers, For Teachers</h2>
	<div class="homeVid vone" style="display:none">
		<div id="play" class="play">
			<h2>NetRef</h2>
			<p>An Overview</p>
		</div>


		<div id="widescreen" style="display:none;position:absolute;">
			<span id="stop" class="stop button" style="z-index:999999;"></span>
			<video style="max-height:100vh;" id="aboutus" preload="metadata" data-teaser="[&quot;<?php bloginfo('template_directory'); ?>/video/reel.mp4&quot;]" controls>
				<source class="mp4" src="<?php bloginfo('template_directory'); ?>/video/reel.mp4" type="video/mp4" poster="<?php bloginfo('template_directory'); ?>/video/reel-clip.jpg">


				</video>
			</div>
		</div>
		<div class="homeVid vtwo" >
			<div id="play2" class="play">
				<h2>NetRef</h2>
				<p>in the Classroom </p>
			</div>


			<div id="widescreen2" style="display:none;position:absolute;">
				<span id="stop2" class="stop button" style="z-index:999999;"></span>
				<video style="max-height:100vh;" id="aboutus2" preload="metadata" data-teaser="[&quot;<?php bloginfo('template_directory'); ?>/video/videosecond.mp4&quot;]" controls>
					<source class="mp4" src="<?php bloginfo('template_directory'); ?>/video/videosecond.mp4" type="video/mp4" poster="<?php bloginfo('template_directory'); ?>/video/reel-clip.jpg">
					</video>
				</div>
			</div>

			<!-- <div class="homeVid vthree">
				<div id="play3" class="play">
					<h2>NetRef DEMO</h2>
					<p>See the software</p>
				</div>


				<div id="widescreen3" style="display:none;position:absolute;">
					<span id="stop3" class="stop button" style="z-index:999999;"></span>
					<video style="max-height:100vh;" id="aboutus3" preload="metadata" data-teaser="[&quot;<?php bloginfo('template_directory'); ?>/video/NetRef_Demo.mp4" controls>
						<source class="mp4" src="<?php bloginfo('template_directory'); ?>/video/NetRef_Demo.mp4" type="video/mp4" poster="<?php bloginfo('template_directory'); ?>/video/reel-clip.jpg">
						</video>
					</div>
				</div> -->

			</div>



<?php $something1 = ob_get_clean(); return $something1 ; }); ?>

<?php add_shortcode('popupbtn2', function($content){ ob_start();?>
			<div class="combinedBtn toggl1">
						<a href="#ninja-forms-modal-4" rel="nf-modal:open" class="text nf-modal-link" >
							<p></p>
							<h4 style="padding: 10px 0px;">Request a Demo</h4>
						</a>
						<a href="#ninja-forms-modal-4" rel="nf-modal:open" class="logo_netref nf-modal-link">
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/netref/images/demoNow.png">
						</a>
						<div style="display:none">
							<?php echo do_shortcode( '[ninja_forms_modal_form id=4 text_link="Contact Us"]' ); ?>
						</div>
				</div>

<?php $something3 = ob_get_clean(); return $something3 ; }); ?>
<?php add_shortcode('popupbtn3', function($content){ ob_start();?>
			<div class="combinedBtn toggl1">
        		<a href="#" id="getstarted" class="text nf-modal-link" >
        			<p></p>
        			<h4 style="padding: 10px 0px;">Request a Demo</h4>
        		</a>
        		<a href="#ninja-forms-modal-4" rel="nf-modal:open" class="logo_netref nf-modal-link">
        			<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/netref/images/demoNow.png">
        		</a>
        	</div>

<?php $something4 = ob_get_clean(); return $something4 ; }); ?>

<?php add_shortcode('popupbtn3', function($content){ ob_start();?>
			<div class="combinedBtn toggl1">
        		<a href="#" id="getstarted" class="text nf-modal-link" >
        			<p></p>
        			<h4 style="padding: 10px 0px;">Request a Demo</h4>
        		</a>
        		<a href="#ninja-forms-modal-4" rel="nf-modal:open" class="logo_netref nf-modal-link">
        			<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/netref/images/demoNow.png">
        		</a>
        	</div>
<?php $something5 = ob_get_clean(); return $something5 ; }); ?>

<?php add_shortcode('slidform1', function($content){ ob_start();?>
			<div id="demo" class="col-md-5">
		<div id="start2" class="play"></div>
		<div id="smallcreen2" style="display:none">
			<span id="end2" class="stop button" style="z-index:999999;"></span>
			<video id="testimony2" preload="metadata" data-teaser="[&quot;<?php bloginfo('template_directory'); ?>/video/NetRef_short.mp4" controls>
				<source class="mp4" src="<?php bloginfo('template_directory'); ?>/video/NetRef_short.mp4" type="video/mp4" poster="<?php bloginfo('template_directory'); ?>/video/reel-clip.jpg">

				</video>
			</div>
		</div>



		<script>
		jQuery(document).ready(function () {
			jQuery("#getstarted").click(function (e) {
				e.preventDefault();
				jQuery('html, body').animate({
					scrollTop: jQuery("#form-edu").offset().top
				}, 1000, function() {
					jQuery("[name='ninja_forms_field_1']").focus();
				});
			});

      jQuery("#getstarted2").click(function (e) {
        e.preventDefault();
        jQuery('html, body').animate({
          scrollTop: jQuery("#form-edu").offset().top
        }, 1000, function() {
          jQuery("[name='ninja_forms_field_1']").focus();
        });
      });

			jQuery("#requestdemo").click(function (e) {
				e.preventDefault();
				jQuery('html, body').animate({
					scrollTop: jQuery("#form-edu").offset().top
				}, 1000, function() {
					jQuery("[name='ninja_forms_field_1']").focus();
				});
			});
			jQuery("input").focus(function() {
				jQuery(".ninja-forms-field-error").css( "display", "none" );
			});

		});
		</script>
<?php $something6 = ob_get_clean(); return $something6 ; }); ?>
<?php add_shortcode('testimonials', function($content){ ob_start();?>
	<div class="educatorsTeachers">
		<h2>Teacher Testimonials</h2>

          <div class="col-md-12">



        <?php
  			  // set up or arguments for our custom query
  			  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  			  $query_args = array(
  				'post_type' => 'testimonials',
  				'posts_per_page' => 3,
  				'paged' => $paged
  			  );
  			  // create a new instance of WP_Query
  			  $the_query = new WP_Query( $query_args );
  			?>

  			<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
  			<div class="cont-test">
          <img src="<?php echo $url = get_field('image_quotedby'); ?>" alt="Founder and Head of School Andrew Kutt">
					<div class="testimonial">
						<?php the_content(); ?>
						<div class="logoNname">
							<div class="quote">
								<img src="<?php echo $url = get_field('school_logo'); ?>" alt="<?php echo the_title(); ?>">
							</div>
							<div class="name">
								<p><b><?php echo the_title(); ?></b> <br>
									<?php $school_name =  get_post_meta($post->ID, 'school_name', true); ?><?php echo $school_name ?></p>
								</div>
							</div>
						</div>


  			</div>
  			<?php endwhile; ?>

  			<?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
  			  <nav class="prev-next-posts">
  				<div class="prev-posts-link">
  				  <?php echo get_next_posts_link( 'Older Entries', $the_query->max_num_pages ); // display older posts link ?>
  				</div>
  				<div class="next-posts-link">
  				  <?php echo get_previous_posts_link( 'Newer Entries' ); // display newer posts link ?>
  				</div>
  			  </nav>
  			<?php } ?>

  			<?php else: ?>
  			  <article>
  				<h1>Sorry...</h1>
  				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  			  </article>
  			<?php endif; ?>
          </div>
          <div class="col-md-12" >
            <div class="row">
              <a href="/testimonials/" class="button-center">See All Testimonials</a>
            </div>
        </div>
</div>			
<?php $something7 = ob_get_clean(); return $something7 ; }); ?>
<?php add_shortcode('video2', function($content){ ob_start();?>
	<div id="demo" class="col-md-6 col-md-offset-3 videohide1" style="background: url(<?php bloginfo('template_directory'); ?>/images/homevedeo.jpg)no-repeat;background-size:100%;padding:0">
		<div id="start2" class="play play1"></div>
		<div id="smallcreen2" style="display:none">
			<span id="end2" class="stop button" style="z-index:999999;"></span>
			<video id="testimony2" preload="metadata" data-teaser="[&quot;<?php bloginfo('template_directory'); ?>/video/NetRef_short.mp4" controls>
				<source class="mp4" src="<?php bloginfo('template_directory'); ?>/video/NetRef_short.mp4" type="video/mp4" poster="<?php bloginfo('template_directory'); ?>/video/reel-clip.jpg">

				</video>
			</div>
	</div>
<?php $something7 = ob_get_clean(); return $something7 ; }); ?>
<?php add_shortcode('popupbtn4', function($content){ ob_start();?>
			<div class="combinedBtn toggl3">
						<a href="#ninja-forms-modal-4" rel="nf-modal:open" class="text nf-modal-link" >
							<p></p>
							<h4 style="padding: 10px 0px;">Request a Demo</h4>
						</a>
						<a href="#ninja-forms-modal-4" rel="nf-modal:open" class="logo_netref nf-modal-link">
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/netref/images/demoNow.png">
						</a>
						<div style="display:none">
							<?php echo do_shortcode( '[ninja_forms_modal_form id=4 text_link="Contact Us"]' ); ?>
						</div>
				</div>

<?php $something10 = ob_get_clean(); return $something10 ; }); 
add_shortcode('site_url', function($content){ ob_start();
return get_site_url();
$somethings = ob_get_clean(); return $somethings; }); ?>
<?php add_shortcode('popuphometop', function($content){ ob_start();?>
			<div class="combinedBtn toggl1" style="height:55px;margin-top:20px">
						<a href="#ninja-forms-modal-4" rel="nf-modal:open" class="text nf-modal-link" style="width: 100% !important;border-right: 2px solid #F4A100;text-align: center;height:55px">
							<h4 style="padding: 0;margin: 0;">See NetRef in Action</h4>
						</a>
					
						<div style="display:none">
							<?php echo do_shortcode( '[ninja_forms_modal_form id=4 text_link="Contact Us"]' ); ?>
						</div>
				</div>

<?php $something3 = ob_get_clean(); return $something3 ; }); ?>
