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
<section class="portfolio-project">
            <div class="container">
                <div class="row"> 
<?php while ( have_posts() ) : the_post(); ?>
                    <div class="col-md-9 mb30">
						<?php $medias = rwmb_meta( 'p_img', 'type=image&size=Facebookvertical'); ?>
						<?php if($medias){ ?>
							<div class="project-carousel owl-carousel navigation-thin pagination-in dark-pagination">
								 <?php
									foreach ( $medias as $media ){ ?>
										<div><img src="<?php echo $media['url'] ?>" class="img-responsive" alt="#"></div>
									<?php } ?>
							</div>
						<?php }elseif ( has_post_format( 'video' )) {
							$urls = get_post_meta( get_the_ID(), 'p_vid', true );
							
						?><div class="video-container">
							<iframe src="<?php echo esc_url($urls); ?>" width="500" height="213" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
						
						<?php }elseif ( has_post_format( 'audio' )) { ?>
                            <?php $urls = get_post_meta( get_the_ID(), 'p_vid', true );?>
                                
                                   <iframe width="100%" height="166" scrolling="no" frameborder="no"  src='<?php echo $urls; ?>'></iframe>
                               
                            
						<?php }elseif( has_post_thumbnail() ) {
								 $url=wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'full') ); ?>
								<img src="<?php echo esc_url($url); ?>" class="img-responsive width100" alt="#">
							
						<?php } ?>						
                        <div class="mt20">
                         
                                <?php the_content(); ?>
                               
						
                        </div>
                    </div> 

                    <div class="col-md-3"> 
                        <h3><?php the_title();?></h3>
                        <div class="sidebar-share pl10"> 
                            <ul class="list-inline">
                                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                <li><a href="#"><i class="ti-pinterest-alt"></i></a></li> 
                                <li><a href="#"><i class="ti-google"></i></a></li> 
                            </ul>
                        </div>
						 <p><?php the_excerpt();?></p>
                        
						<?php
						$cats = array();
						$cat_name = array();
						$categories = get_the_terms( get_the_ID(), 'project_category' );
						
						
						?>
						<ul class="project-category-list">
							<?php 
							if($categories){
								foreach($categories as $category){								
									?>
									<li><i class="ion-android-checkmark-circle"></i><?php echo $category->name; ?></li>
									<?php
									
								}
							}
							?>                            
                        </ul>
						<?php 
						$client = get_post_meta( get_the_ID(), 'p_name', true );
						$date = get_post_meta( get_the_ID(), 'p_date', true );
						$link = get_post_meta( get_the_ID(), 'p_link', true );
						
						?>
                        <ul class="project-info">
                            <li><strong><?php esc_html_e('Client','wander'); ?></strong><?php echo esc_html($client);?></li>
                            <li><strong><?php esc_html_e('Date','wander'); ?></strong><?php echo esc_html($date);?></li>
                            <li><strong><?php esc_html_e('Link','wander'); ?></strong><?php echo esc_url($link);?></li> 
                        </ul>

                    </div>
 <?php endwhile; wp_reset_postdata();?>
                </div>
            </div>
        </section>
		 
<?php get_footer(); ?>
