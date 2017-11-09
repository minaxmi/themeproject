<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wander
 */

?>

<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="side-details">
        <div class="post-date">
            <h4 class="month"><?php echo the_date('M');?></h4>
            <h3 class="day"><?php echo the_time('d');?></h3>
            <span class="year"><?php echo get_the_date('Y');?></span>
        </div>
    </div>
    <div class="post-content">
		<?php if ( has_post_format( 'video' )) { ?>
			<div class="video-container"> 
                <iframe src='http://player.vimeo.com/video/157100757' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
            </div>
		<?php }elseif ( has_post_thumbnail() ) {
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
