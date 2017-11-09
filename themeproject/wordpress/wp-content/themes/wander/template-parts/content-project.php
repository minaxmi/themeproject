<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<?php 
		
		 if ( get_post_gallery() ){
			$gallery = get_post_gallery( get_the_ID(), false );
			?>
			<section id="single-project-home-slider" class="white-bg">

			<div class="container">
				<div class="animate-carousel bg-image-carousel single-project-home-slider white-dots" data-dots="true" data-nav="false" data-autoplay="true" data-anim-out="fadeOut" data-anim-in="fadeIn" data-items="1" data-xsnumber="1" data-smnumber="1" data-mdnumber="1">
			
			<?php
			foreach( $gallery['src'] as $src ) : ?>
				<div class="item">
					<img src="<?php echo $src; ?>" class="hidden bg-image" alt="<?php echo esc_html__('slider-image','wander');?>" data-no-retina>
				</div>
				<?php
			endforeach;
			
			?></div>
			</div>
		</section><?php
		 }else{
			if ( has_post_thumbnail() ) {
			$src = wp_get_attachment_image_src ( get_post_thumbnail_id($post->ID), 'full');
			$img_src = esc_url ( $src [0] );
			?>	
			
			<section id="single-project-home-slider" class="white-bg">

				<div class="container">
					<div class="animate-carousel bg-image-carousel single-project-home-slider white-dots" data-dots="true" data-nav="false" data-autoplay="true" data-anim-out="fadeOut" data-anim-in="fadeIn" data-items="1" data-xsnumber="1" data-smnumber="1" data-mdnumber="1">
						<div class="item">
							<img src="<?php echo esc_url($img_src)?>" class="hidden bg-image" alt="<?php echo esc_html__('slider-image','wander');?>" data-no-retina>
						</div>
					</div>
				</div>
			</section>	
				
			<?php }
		}
		?>
		
		<section class="container pad-top-half pad-bottom-half project-text-content">
			<div class="row">
				<?php the_content(); ?>
			</div>
		</section>
		
		
		<?php echo do_shortcode('[wander_recent_projects]')?>
						
	</section>
	</section>