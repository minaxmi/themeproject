<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wander
 */

get_header(); 
?>
<section class="blog">
            <div class="container">
                <div class="row">

                    <!-- Blog Content -->
                    <div class="col-md-9">

                        <div class="blog-post"> 
                            <div class="post-date">
                                <h4 class="month"><?php echo get_the_date('M');?></h4>
                                <h3 class="day"><?php echo get_the_date('d');?></h3>
                                <span class="year"><?php echo get_the_date('Y');?></span>
                            </div>
                          
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
                                    <iframe src='<?php echo $urls; ?>' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                </div>
                            <?php }elseif ( has_post_format( 'audio' )) { ?>
                            <?php $urls = get_post_meta( get_the_ID(), 'b_vid', true );?>
                                
                                   <iframe width="100%" height="166" scrolling="no" frameborder="no"  src='<?php echo $urls; ?>'></iframe>
                               
                            <?php }elseif( has_post_thumbnail() ) {
                             $url=wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
                            <a href="<?php esc_url( get_permalink() );?>"><img src="<?php echo esc_url($url); ?>" class="img-responsive width100" alt="blog"></a>
                            <?php } ?>
                            <a class="link-to-post" href="#"><h3><?php the_title();?></h3></a>
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
                            <?php if(have_posts()): the_post(); ?>
                                <?php the_content(); ?>
                                <?php endif; ?>

                        </div> 


                        <!-- Comments -->
                        <div class="comments">
                        <?php  if ( comments_open() || get_comments_number() ) {
                            comments_template();
                            } ?>
                        </div>

                    </div>
                    <!-- End Blog Content -->

                    <!-- Sidebar -->
                    <div class="col-md-3 sidebar"> 

                        <?php get_sidebar();?>     


                    </div>
                    <!-- End Sidebar --> 

                </div>
            </div>
        </section>	
		 
<?php get_footer(); ?>
