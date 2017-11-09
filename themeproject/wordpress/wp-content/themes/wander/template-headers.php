<?php
/**
 * Template name: Demo Template for Header Styles
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wander
 */

get_header(); ?>

        <!-- Page Hero -->
        <section class="page-title parallax bg-img-4">  
            <div class="page-title-content"> 
                <div class="container">   
                    <div class="col-sm-12 text-center">
                        <h1 class="white-until-load">Header Styles</h1>
                        <hr class="separator">
                        <h5 class="subheading white-until-load">Elements And Shortcodes</h5> 
                    </div> 
                </div>
            </div>    
        </section>
        <!-- End Page Hero --> 
            
        <!-- Headers -->
        <section class="pt120 pb60">
            <div class="container header-style-images"> 

                <div class="row mt20">
                    <div class="col-md-12 header-styles icons-pre mr-auto">
                        <p>Default Appearance for Header</p> 
                    </div> 

                    <div class="col-md-12 mb40">
                        <img src="<?php echo get_template_directory_uri();?>/img/portfolio/header1.jpg" class="img-repsonsive width100">
                    </div>   
                </div>  

                <div class="row mt20">  
                    <div class="col-md-12 header-styles v2 icons-pre mr-auto">
                        <p>Transparent Header<br>(add class .transparent)</p> 
                    </div> 

                    <div class="col-md-12 mb40">
                        <img src="<?php echo get_template_directory_uri();?>/img/portfolio/header2.jpg" class="img-repsonsive width100">
                    </div>   
                </div> 

                <div class="row mt20">  
                    <div class="col-md-12 header-styles icons-pre mr-auto">
                        <p>Dark Header<br>(add class .dark)</p> 
                    </div> 

                    <div class="col-md-12 mb40">
                        <img src="<?php echo get_template_directory_uri();?>/img/portfolio/header3.jpg" class="img-repsonsive width100">
                    </div>   
                </div> 

                <div class="row mt20">  
                    <div class="col-md-12 header-styles v2 icons-pre mr-auto">
                        <p>Transparent Dark<br>(add class .transparent-dark)</p> 
                    </div> 

                    <div class="col-md-12 mb50">
                        <img src="<?php echo get_template_directory_uri();?>/img/portfolio/header4.jpg" class="img-repsonsive width100">
                    </div>   
                </div> 
                
                <div class="row mt20">  
                    <div class="col-md-12 header-styles v2 icons-pre mr-auto">
                        <p>Boxed<br>(remove class .fullwidth)</p> 
                    </div> 

                    <div class="col-md-12 mb50">
                        <img src="<?php echo get_template_directory_uri();?>/img/portfolio/header5.jpg" class="img-repsonsive width100">
                    </div>   
                </div>

            </div>
        </section>  
        <!-- End Headers -->
            
<?php
get_footer('two');
