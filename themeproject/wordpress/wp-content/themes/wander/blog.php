<?php
/*
Template name: Blog Page Template
*/
get_header(); ?>


	<section class="blog">
            <div class="container">
                <div class="row">     

                    <div class="col-md-9"> 

                        <ul class="blog-standard">
						<?php query_posts('post_type=post&post_status=publish&paged='. get_query_var('paged')); 
		                if (have_posts()) : 
		                  while (have_posts()) : the_post(); ?>
                            <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="side-details">
        <div class="post-date">
            <h4 class="month"><?php echo get_the_date('M');?></h4>
            <h3 class="day"><?php echo get_the_date('d');?></h3>
            <span class="year"><?php echo get_the_date('Y');?></span>
        </div>
    </div>
    <div class="post-content">
		 <?php if ( has_post_format( 'gallery' )) { ?>
			<div class="image-slider2 owl-carousel navigation-thin pagination-in">
			<?php $medias = rwmb_meta( 'b_img', 'type=image&size=Facebookvertical'); 
			foreach ( $medias as $media ){ ?>
				<div><img src="<?php echo $media['url'] ?>" class="img-responsive width100" alt="#"></div>
				<?php } ?>                                
			</div> 
			<?php }elseif ( has_post_format( 'video' )) { ?>
			<?php $urls = get_post_meta( get_the_ID(), 'b_vid', true );?>
				<div class="video-container"> 
					<iframe src='<?php echo esc_url($urls); ?>' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				</div>
			<?php }elseif ( has_post_format( 'audio' )) { ?>
			<?php $urls = get_post_meta( get_the_ID(), 'b_vid', true );?>
				
				   <iframe width="100%" height="166" scrolling="no" frameborder="no"  src='<?php echo $urls; ?>'></iframe>
			   
			<?php }elseif( has_post_thumbnail() ) {
			 $url=wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
			<a href="<?php esc_url( get_permalink() );?>"><img src="<?php echo esc_url($url); ?>" class="img-responsive width100" alt="blog"></a>
			<?php } ?>  
        <div class="post-text">
        	<?php
				if ( is_single() ) {
					the_title( '<h4>', '</h4>' );
				} else {
					the_title( '<a class="link-to-post" href="' . esc_url( get_permalink() ) . '"><h4>', '</h4></a>' );
				} ?>            
         <?php 
                    $counter=0;
                    $posttags = get_the_tags();
                    if ($posttags) {?>
					<p class="blog-post-categories">
	            <span><i class="ion-ios-pricetags-outline"></i></span>
					<?php
                    foreach($posttags as $tag) {
					
                    if($counter!=0){
                      echo '<a href="'. esc_url(home_url('/')).'tag/'.esc_attr( $tag->slug ).'"> ';
                    } 
                      echo esc_attr( $tag->name ) . '';
                      $counter++;
                     if($counter!=0){
                      echo '</a>, ';
                    } 
					 } ?>
					</p> <?php 
                  } ?>	 
            <?php
				the_excerpt();
				
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wander' ),
					'after'  => '</div>',
				) );?>
        </div> 
        <a class="read-more-link btn-appear" href="<?php echo esc_url( get_permalink() );?>"><span><?php esc_attr_e('Read More', 'wander')?> <i class="ion-android-arrow-forward"></i></span></a>   
    </div>	
</li>
						 <?php endwhile;
						// wp_reset_postdata();
				                endif; 
				                ?>                            

                        </ul> 

                        <!-- Pagination -->
                        <div class="col-md-12 text-center"> 
                            <?php
							if (function_exists("wander_pagination")) {
								wander_pagination();
							}
						?>
                        </div>
                        <!-- End Pagination -->

                    </div>
				<div class="col-md-3 sidebar">
					<?php get_sidebar();?>				
				</div>
			</div>
		</div>
				

	</section>

<?php get_footer();
