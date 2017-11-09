<?php
/**
 * Template name: Demo Template for Lists
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
                        <h1 class="white-until-load">Lists</h1>
                        <hr class="separator">
                        <h5 class="subheading white-until-load">Elements And Shortcodes</h5> 
                    </div> 
                </div>
            </div>    
        </section>
        <!-- End Page Hero -->
            
        <!-- Start Lists -->
        <section class="pt60 pb60">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 col-sm-6 mt40 mb40">
                        <ul class="list-icons">
                            <li><i class="ion-arrow-right-c"></i>Vivamus nunc nunc dolor consectetur</li>
                            <li><i class="ion-arrow-right-c"></i>Lacinia ac consectetu nulla eget</li>
                            <li><i class="ion-arrow-right-c"></i>Phasellus consectetu fermentum velit</li>
                            <li><i class="ion-arrow-right-c"></i>Aliquam pharetra consectetu orci ligula</li>
                            <li><i class="ion-arrow-right-c"></i>Et consectetu dignissim neque porttitor</li>
                            <li><i class="ion-arrow-right-c"></i>Sed imperdiet id est in consectetu.</li>
                        </ul>
                    </div>

                    <div class="col-md-4 col-sm-6 mt40 mb40">
                        <ul class="list-icons">
                            <li><i class="ion-checkmark-round"></i>Vivamus nunc nunc dolor consectetur</li>
                            <li><i class="ion-checkmark-round"></i>Lacinia ac consectetu nulla eget</li>
                            <li><i class="ion-checkmark-round"></i>Phasellus consectetu fermentum velit</li>
                            <li><i class="ion-checkmark-round"></i>Aliquam pharetra consectetu orci ligula</li>
                            <li><i class="ion-checkmark-round"></i>Et consectetu dignissim neque porttitor</li>
                            <li><i class="ion-checkmark-round"></i>Sed imperdiet id est in consectetu.</li>
                        </ul>
                    </div>

                    <div class="col-md-4 col-sm-6 mt40 mb40">
                        <ul class="list-icons">
                            <li><i class="ion-android-checkmark-circle"></i>Vivamus nunc nunc dolor consectetur</li>
                            <li><i class="ion-android-checkmark-circle"></i>Lacinia ac consectetu nulla eget</li>
                            <li><i class="ion-android-checkmark-circle"></i>Phasellus consectetu fermentum velit</li>
                            <li><i class="ion-android-checkmark-circle"></i>Aliquam pharetra consectetu orci ligula</li>
                            <li><i class="ion-android-checkmark-circle"></i>Et consectetu dignissim neque porttitor</li>
                            <li><i class="ion-android-checkmark-circle"></i>Sed imperdiet id est in consectetu.</li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Lists --> 

        <!-- Start Lists -->
        <section class="bg-grey pt60 pb60">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 col-sm-6 mt40 mb40">
                        <ul class="list-icons">
                            <li><i class="ion-android-favorite-outline"></i>Vivamus nunc nunc dolor consectetur</li>
                            <li><i class="ion-android-favorite-outline"></i>Lacinia ac consectetu nulla eget</li>
                            <li><i class="ion-android-favorite-outline"></i>Phasellus consectetu fermentum velit
                                <ul class="list-icons pl20">
                                    <li><i class="ion-android-favorite-outline"></i>Et consectetu dignissim neque porttitor</li>
                                    <li><i class="ion-android-favorite-outline"></i>Sed imperdiet id est in consectetu.</li>
                                    <li><i class="ion-android-favorite-outline"></i>Et consectetu dignissim neque porttitor</li> 
                                </ul>
                            </li>
                            <li><i class="ion-android-favorite-outline"></i>Aliquam pharetra consectetu orci ligula</li>
                            <li><i class="ion-android-favorite-outline"></i>Et consectetu dignissim neque porttitor</li>
                            <li><i class="ion-android-favorite-outline"></i>Sed imperdiet id est in consectetu.</li>
                        </ul>
                    </div> 

                    <div class="col-md-4 col-sm-6 mt40 mb40">
                        <ul class="list-icons">
                            <li><i class="ion-android-checkbox-outline"></i>Vivamus consectetu nunc nunc dolor</li>
                            <li><i class="ion-android-checkbox-outline"></i>Lacinia ac consectetu nulla eget
                                <ul class="list-icons pl20">
                                    <li><i class="ion-android-checkbox-outline"></i>Vivamus consectetu nunc nunc dolor</li>
                                    <li><i class="ion-android-checkbox-outline"></i>Lacinia ac consectetu nulla eget</li>
                                    <li><i class="ion-android-checkbox-outline"></i>Phasellus fermentum velitconsectetu</li> 
                                </ul>
                            </li>
                            <li><i class="ion-android-checkbox-outline"></i>Phasellus fermentum velitconsectetu</li>
                            <li><i class="ion-android-checkbox-outline"></i>Aliquam pharetra orci ligula</li>
                            <li><i class="ion-android-checkbox-outline"></i>Et dignissim neque porttitor</li>
                            <li><i class="ion-android-checkbox-outline"></i>Sed imperdiet id est in consectetu</li>
                        </ul>
                    </div>

                    <div class="col-md-4 col-sm-6 mt40 mb40">
                        <ul class="list-icons">
                            <li><i class="ion-android-done-all"></i>Vivamus nunc nunc consectetu dolor</li>
                            <li><i class="ion-android-done-all"></i>Lacinia consectetu ac nulla eget
                                <ul class="list-icons pl20">
                                    <li><i class="ion-android-done-all"></i>Vivamus nunc nunc consectetu dolor</li> 
                                </ul>
                            </li>
                            <li><i class="ion-android-done-all"></i>Phasellus consectetu fermentum velit</li>
                            <li><i class="ion-android-done-all"></i>Aliquam pharetra orci ligula consectetu
                                <ul class="list-icons pl20">
                                    <li><i class="ion-android-done-all"></i>Vivamus nunc nunc consectetu dolor</li>
                                    <li><i class="ion-android-done-all"></i>Lacinia consectetu ac nulla eget</li> 
                                </ul>
                            </li>
                            <li><i class="ion-android-done-all"></i>Et dignissim neque consectetu porttitor</li>
                            <li><i class="ion-android-done-all"></i>Sed consectetu imperdiet id est in.</li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Lists --> 

        <!-- Start Lists -->
        <section class="pt100 pb100">
            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                        <ul class="list-group list-space">
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Morbi leo risus</li>
                          <li class="list-group-item">Porta ac consectetur ac</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <ul class="list-group">
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Morbi leo risus</li>
                          <li class="list-group-item">Porta ac consectetur ac</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <ul class="list-group list-grey">
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Morbi leo risus</li>
                          <li class="list-group-item">Porta ac consectetur ac</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Lists --> 

		

<?php
get_footer();
