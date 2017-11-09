<?php
/*
Template name: Blog Sidebar with Two Column Template
*/
get_header(); ?>


	<section class="blog">
        <div class="container">
            <div class="row">     
                <div class="col-md-9">
				
                  <div class="blog-sidebar blog-columns cbp" id="blog-grid">
                <?php query_posts('post_type=post&post_status=publish&paged='. get_query_var('paged')); 
                        if (have_posts()) : 
                          while (have_posts()) : the_post(); ?>
                    <div class="cbp-item">
                                <div class="post-date">
                                    <h4 class="month"><?php echo the_date('M');?></h4>
                                    <h3 class="day"><?php echo the_time('d');?></h3>
                                    <span class="year"><?php echo get_the_date('Y');?></span>
                                </div>
                                <a href="<?php esc_url( get_permalink() );?>" class="cbp-caption">
                                  
									<?php if( has_post_thumbnail() ) {
									 $url=wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
									<a href="<?php esc_url( get_permalink() );?>"><img src="<?php echo esc_url($url); ?>" class="img-responsive width100" alt="blog"></a>
									<?php } ?>  
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body"> 
                                                <div class="cbp-l-caption-desc"><i class="ion-android-more-horizontal"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="blog-thumb-desc"> 
                                    <a class="link-to-post" href="<?php echo esc_url( the_permalink() );?>"><h4><?php the_title();?></h4></a>
                                    <p class="blog-post-categories">
                                        <span><i class="ion-ios-pricetags-outline"></i></span>
                                        <?php 
                                            $counter=0;
                                            $posttags = get_the_tags();
                                            if ($posttags) {
                                            foreach($posttags as $tag) {
                                            if($counter!=0){
                                              echo '<a href="#">, ';
                                            } 
                                              echo $tag->name . '';
                                              $counter++;
                                            }
                                          } ?> 
                                    </p> 
                                    <p class="excerpt"><?php the_excerpt();?></p>
                                    <a class="read-more-link btn-appear" href="blog-post-carousel.html"><span><?php esc_attr_e('Read More', 'wander')?> <i class="ion-android-arrow-forward"></i></span></a>  
                                </div>
                            </div>
                            <?php endwhile;
							//wp_reset_postdata();
                                endif; 
                                ?>                                
                </div>
				<div class="col-md-12 text-center"> 
                            <?php
                            if (function_exists("wander_pagination")) {
                                wander_pagination();
                            }
                        ?>
                        </div>  
               </div>
				<div class="col-md-3 sidebar">
					<?php get_sidebar();?>				
				</div>            
			</div>
		</div>
	</section>

<?php get_footer();
