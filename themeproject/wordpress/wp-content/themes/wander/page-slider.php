<?php defined('ABSPATH') or die("No script kiddies please!"); ?>

    <?php $slider_opts=rwmb_meta( 'wander_slider');     
    if ($slider_opts == 'slider_1'){ ?>
        <section class="hero-fullscreen">
            <div class="hero-slider navigation-thin">
                
                <!-- Slide -->
                <?php  $slider_1_image_1 = wander_return_theme_option('slider_1_image_1','url');?>
                <div class="slide overlay" style="background-image: url(<?php echo esc_url($slider_1_image_1)?>);"> 
                    <div class="hero-container container">  
                        <div class="hero-content"> 
                            <div class="appear white text-center"> 
                                <p class="subheading"><?php echo wander_return_theme_option('slider_1_subtitletitle_1');?></p>
                                <h1 class="large mt20 mb20"><?php echo wander_return_theme_option('slider_1_title_1');?></h1> 
                                <p><?php echo wander_return_theme_option('slider_1_content_1');?></p>
                                <a href="<?php echo wander_return_theme_option('slider_1_btn_link_1');?>" class="btn btn-lg btn-primary btn-scroll mt30"><?php echo wander_return_theme_option('slider_1_btn_content_1');?></a>  
                            </div>
                        </div> 
                    </div>   
                </div>
                <!-- End Slide --> 
                
                <!-- Slide -->
                <?php  $slider_1_image_2 = wander_return_theme_option('slider_1_image_2','url');?>
                <div class="slide overlay" style="background-image: url(<?php echo esc_url($slider_1_image_2)?>);"> 
                    <div class="hero-container container">  
                        <div class="hero-content"> 
                            <div class="appear white text-center"> 
                                <p class="subheading"><?php echo wander_return_theme_option('slider_1_subtitletitle_2');?></p>
                                <h1 class="large mt20 mb20"><?php echo wander_return_theme_option('slider_1_title_2');?></h1> 
                                <p><?php echo wander_return_theme_option('slider_1_content_2');?></p>
                                <a href="<?php echo wander_return_theme_option('slider_1_btn_link_2');?>" class="btn btn-lg btn-primary btn-scroll mt30"><?php echo wander_return_theme_option('slider_1_btn_content_2');?></a>  
                            </div>
                        </div> 
                    </div>   
                </div>
                <!-- End Slide -->   
                
            </div>
        </section>
<?php } elseif ($slider_opts == 'slider_2') { ?>

        <section class="hero-fullwidth">
            <div class="hero-slider navigation-thin">
                
                <!-- Slide -->
                <?php  $slider_2_image_1 = wander_return_theme_option('slider_2_image_1','url');?>
                <div class="slide overlay" style="background-image: url(<?php echo esc_url($slider_2_image_1)?>);"> 
                    <div class="hero-container container">  
                        <div class="hero-content"> 
                            <div class="appear white text-center"> 
                                <p class="subheading"><?php echo wander_return_theme_option('slider_2_subtitletitle_1');?></p>
                                <h1 class="large mt20 mb20"><?php echo wander_return_theme_option('slider_2_title_1');?></h1> 
                                <p><?php echo wander_return_theme_option('slider_2_content_1');?></p>
                                <a href="<?php echo wander_return_theme_option('slider_2_btn_link_1');?>" class="btn btn-lg btn-primary btn-scroll mt30"><?php echo wander_return_theme_option('slider_2_btn_content_1');?></a>  
                            </div>
                        </div> 
                    </div>   
                </div>
                <!-- End Slide --> 
                
                <!-- Slide -->
                <?php  $slider_2_image_2 = wander_return_theme_option('slider_2_image_2','url');?>
                <div class="slide overlay" style="background-image: url(<?php echo esc_url($slider_2_image_2)?>);"> 
                    <div class="hero-container container">  
                        <div class="hero-content"> 
                            <div class="appear white text-center"> 
                                <p class="subheading"><?php echo wander_return_theme_option('slider_2_subtitletitle_2');?></p>
                                <h1 class="large mt20 mb20"><?php echo wander_return_theme_option('slider_2_title_2');?></h1> 
                                <p><?php echo wander_return_theme_option('slider_2_content_2');?></p>
                                <a href="<?php echo wander_return_theme_option('slider_2_btn_link_2');?>" class="btn btn-lg btn-primary btn-scroll mt30"><?php echo wander_return_theme_option('slider_2_btn_content_2');?></a>  
                            </div>
                        </div> 
                    </div>   
                </div>
                <!-- End Slide -->   
                
            </div>
        </section>

<?php } elseif ($slider_opts == 'slider_3') { ?>       
	   <section class="hero-fullscreen hero-video overlay">   
            <?php  $slider_3_video_1 = wander_return_theme_option('slider_3_video_1');?>
            <video youtube-video-id="<?php echo wander_return_theme_option('slider_3_video_1');?>" id="vossen-youtube"></video>
            
            <div class="hero-container">
                <div class="hero-content text-center">   
                    <div class="col-sm-12 mr-auto white text-center pt20">   
                        <p class="subheading"><?php echo wander_return_theme_option('slider_3_subtitletitle_1');?></p>
                        <h1 class="large mt20 mb20"><?php echo wander_return_theme_option('slider_3_title_1');?></h1> 
                        <p class="hidden-xs"><?php echo wander_return_theme_option('slider_3_content_1');?></p>
                        <a href="#<?php echo wander_return_theme_option('slider_3_btn_link_1');?>" class="btn btn-lg btn-primary btn-scroll mt30"><?php echo wander_return_theme_option('slider_3_btn_content_1');?></a>  
                    </div>                    
                    <a href="<?php echo wander_return_theme_option('slider_3_btn_link_1');?>" class="scroll-btn"><i class="ion-chevron-down"></i></a>
                    
                </div>
            </div>   
            
        </section>
<?php } elseif ($slider_opts == 'slider_4') { ?>
        <section class="hero-fullwidth hero-video overlay">   
            <?php  $slider_4_video_1 = wander_return_theme_option('slider_4_video_1');?>
            <video youtube-video-id="<?php echo wander_return_theme_option('slider_4_video_1');?>" id="vossen-youtube"></video>
            
            <div class="hero-container">
                <div class="hero-content text-center">   
                    <div class="col-sm-12 mr-auto white text-center pt20">   
                        <p class="subheading"><?php echo wander_return_theme_option('slider_4_subtitletitle_1');?></p>
                        <h1 class="large mt20 mb20"><?php echo wander_return_theme_option('slider_4_title_1');?></h1> 
                        <p class="hidden-xs"><?php echo wander_return_theme_option('slider_4_content_1');?></p>
                        <a href="#<?php echo wander_return_theme_option('slider_4_btn_link_1');?>" class="btn btn-lg btn-primary btn-scroll mt30"><?php echo wander_return_theme_option('slider_3_btn_content_1');?></a>  
                    </div>                    
                    <a href="<?php echo wander_return_theme_option('slider_4_btn_link_1');?>" class="scroll-btn"><i class="ion-chevron-down"></i></a>
                    
                </div>
            </div>   
            
        </section>
<?php } elseif ($slider_opts == 'slider_5') { ?>
        <?php  $slider_5_image_1 = wander_return_theme_option('slider_5_image_1','url');?>
        <section class="hero-fullscreen parallax overlay" style="background-image: url(<?php echo esc_url($slider_5_image_1)?>);">  
            <div class="hero-container">  
                <div class="hero-content">   
                    
                    <div class="content-slider container">
                        
                        <div class="white">
                            <h5 class="subheading"><?php echo wander_return_theme_option('slider_5_subtitletitle_1');?></h5>
                            <h1 class="large mt20"><?php echo wander_return_theme_option('slider_5_title_1');?></h1>
                            <hr class="separator mb30">   
                            <p class="mb60"><?php echo wander_return_theme_option('slider_5_content_1');?></p>
                        </div>
                        
                        <div class="white">
                            <h5 class="subheading mt20"><?php echo wander_return_theme_option('slider_5_subtitletitle_2');?></h5>
                            <h1 class="large mt20"><?php echo wander_return_theme_option('slider_5_title_2');?></h1> 
                            <hr class="separator">
                            <p><?php echo wander_return_theme_option('slider_5_content_2');?></p>
                        </div>
                        
                    </div>
                    <a href="<?php echo wander_return_theme_option('slider_5_video_1');?>" class="play-btn popup-video"><i class="ti-control-play"></i></a> 
                    <a href="#features" class="scroll-btn"><i class="ion-chevron-down"></i></a>
                </div>
            </div>    
        </section>
<?php } elseif ($slider_opts == 'slider_6') { ?>
        <?php  $slider_6_image_1 = wander_return_theme_option('slider_6_image_1','url');?>
        <section class="hero-fullwidth parallax overlay" style="background-image: url(<?php echo esc_url($slider_6_image_1)?>);">  
            <div class="hero-container">  
                <div class="hero-content">   
                    
                    <div class="content-slider container">
                        
                        <div class="white">
                            <h5 class="subheading"><?php echo wander_return_theme_option('slider_6_subtitletitle_1');?></h5>
                            <h1 class="large mt20"><?php echo wander_return_theme_option('slider_6_title_1');?></h1>
                            <hr class="separator mb30">   
                            <p class="mb60"><?php echo wander_return_theme_option('slider_5_content_1');?></p>
                        </div>
                        
                        <div class="white">
                            <h5 class="subheading mt20"><?php echo wander_return_theme_option('slider_6_subtitletitle_2');?></h5>
                            <h1 class="large mt20"><?php echo wander_return_theme_option('slider_6_title_2');?></h1> 
                            <hr class="separator">
                            <p><?php echo wander_return_theme_option('slider_6_content_2');?></p>
                        </div>
                        
                    </div>                    
                </div>
            </div>    
        </section>
<?php } elseif ($slider_opts == 'slider_7') { ?>
        <?php  $slider_7_image_1 = wander_return_theme_option('slider_7_image_1','url');?>
        <section class="hero-fullwidth parallax overlay" style="background-image: url(<?php echo esc_url($slider_7_image_1)?>);">  
            <div class="hero-container container">  
                <div class="hero-content text-center">
                        
                        <div class="white">
                            <h5 class="subheading"><?php echo wander_return_theme_option('slider_7_subtitletitle_1');?></h5>
                            <h1 class="large mt20"><?php echo wander_return_theme_option('slider_7_title_1');?></h1>
                            <hr class="separator mb30">   
                            <p class="mb60"><?php echo wander_return_theme_option('slider_7_content_1');?></p>
                        </div>              
                </div>
            </div>    
        </section>
<?php } elseif ($slider_opts == 'slider_8') { ?>
        <?php  $slider_8_image_1 = wander_return_theme_option('slider_8_image_1','url');?>
        <section class="hero-fullscreen coming-soon overlay" style="background-image: url(<?php echo esc_url($slider_8_image_1)?>);">  
            <div class="hero-container">  
                <div class="hero-content">   
                        
                    <h5 class="subheading white mt10 mb10"><?php echo wander_return_theme_option('slider_8_subtitletitle_1');?></h5>
                    <?php  $slider_8_image_2 = wander_return_theme_option('slider_8_image_2','url');?>
                    <img src="<?php echo esc_url($slider_8_image_2)?>" alt="coming-soon" class="img-responsive mr-auto">
                    <div data-date="<?php echo wander_return_theme_option('slider_8_re_1');?>" id="countdown-timer" class="countdown-big">
                        <div><h1 id="months"></h1><h6>Months</h6></div> 
                        <div><h1 id="days"></h1><h6>Days</h6></div> 
                        <div><h1 id="hours"></h1><h6>Hours</h6></div> 
                        <div><h1 id="minutes"></h1><h6>Minutes</h6></div> 
                        <div><h1 id="seconds"></h1><h6>Seconds</h6></div>
                    </div>
                    <p class="mt40 white"><?php echo wander_return_theme_option('slider_8_content_1');?></p>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary btn-lg mt60"><i class="ion-arrow-left-c"></i> <?php echo wander_return_theme_option('slider_8_btn_content_1');?></a>
                    
                </div>
            </div>    
        </section>
<?php } elseif ($slider_opts == 'slider_9') { ?>
        <?php  $slider_9_image_1 = wander_return_theme_option('slider_9_image_1','url');?>
        <section class="page-title parallax overlay" style="background-image: url(<?php echo esc_url($slider_9_image_1)?>);">  
            <div class="page-title-content"> 
                <div class="container">   
                    <div class="col-sm-12 text-center white">
                        <h1><?php echo wander_return_theme_option('slider_9_title_1');?></h1>
                        <hr class="separator">
                        <h5 class="subheading"><?php echo wander_return_theme_option('slider_9_subtitletitle_1');?></h5> 
                    </div> 
                </div>
            </div>    
        </section>            
<?php } ?>