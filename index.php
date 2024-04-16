<?php get_header();  ?>



        <div class="container-fluid">
            <div id="content" class="mx-auto tm-content-container">
                <main>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-page-title mb-4">Our Video Catalog</h2>
                            <div class="tm-categories-container mb-5">
                                <h3 class="tm-text-primary tm-categories-text">Categories:</h3>
                                <ul class="nav tm-category-list">
                                    <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link active">All</a></li>
                                    <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link">Drone Shots</a></li>
                                    <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link">Nature</a></li>
                                    <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link">Actions</a></li>
                                    <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link">Featured</a></li>
                                </ul>
                            </div>        
                        </div>
                    </div>
                    
                    <div class="row tm-catalog-item-list">
                        <?php while(have_posts()){the_post(); 
                            $tmbnil= wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
                            
                            ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="<?php echo $tmbnil[0] ?>" alt="Image" class="img-fluid tm-catalog-item-img">    
                                <a href="<?php echo the_permalink(); ?>" class="position-absolute tm-img-overlay">
                                    <i class="fas fa-play tm-overlay-icon"></i>
                                </a>
                            </div>    
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title"><?php the_title(); ?></h3>
                                <p class="tm-catalog-item-text"><?php the_excerpt(); ?></p><p><?php echo get_the_date(); ?></p>
                            </div>
                        </div>
                        <?php }?>
                        
 

                        <!-- <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="<?php echo get_template_directory_uri() ?>/img/tn-02.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
                                <a href="video-page.html" class="position-absolute tm-img-overlay">
                                    <i class="fas fa-play tm-overlay-icon"></i>
                                </a>
                            </div>
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Mauris in odio vel odio</h3>
                                <p class="tm-catalog-item-text">You may need TemplateMo for a quick chat or send an email if you have any question about this CSS template. 
                                    <span class="tm-text-secondary">font-family: 'Source Sans Pro', sans-serif; for this template.</span></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="<?php echo get_template_directory_uri() ?>/img/tn-03.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
                                <a href="video-page.html" class="position-absolute tm-img-overlay">
                                    <i class="fas fa-play tm-overlay-icon"></i>
                                </a>
                            </div>                            
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Sagittis sodales enim</h3>
                                <p class="tm-catalog-item-text">You are allowed to use this video catalog for your business websites. 
                                Please do not make a re-distribution of our template ZIP file on any template collection website.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="<?php echo get_template_directory_uri() ?>/img/tn-04.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
                                <a href="video-page.html" class="position-absolute tm-img-overlay">
                                    <i class="fas fa-play tm-overlay-icon"></i>
                                </a>
                            </div>    
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Nam tincidunt consectetur</h3>
                                <p class="tm-catalog-item-text">You can apply this template for your commercial CMS theme. Nam sem leo, imperdiet non lacinia eget, volutpat ac massa. Donec mattis in velit quis commodo. Cras nec rutrum arcu.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="<?php echo get_template_directory_uri() ?>/img/tn-05.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
                                <a href="video-page.html" class="position-absolute tm-img-overlay">
                                    <i class="fas fa-play tm-overlay-icon"></i>
                                </a>
                            </div>
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Praesent posuere rhoncus</h3>
                                <p class="tm-catalog-item-text">Duis vulputate nisl metus, eget dapibus nunc ultricies id. Ut augue mauris, varius quis nulla non, sollicitudin consectetur nisl. Donec eget arcu placerat, ullamcorper.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="<?php echo get_template_directory_uri() ?>/img/tn-06.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
                                <a href="video-page.html" class="position-absolute tm-img-overlay">
                                    <i class="fas fa-play tm-overlay-icon"></i>
                                </a>
                            </div>                            
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Turpis massa aliquam</h3>
                                <p class="tm-catalog-item-text">Nunc neque risus, ultrices sed luctus at, iaculis at arcu. Pellentesque rutrum velit nec sapien ullamcorper ultrices. Vestibulum lectus risus, laoreet pretium ipsum</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="<?php echo get_template_directory_uri() ?>/img/tn-07.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
                                <a href="video-page.html" class="position-absolute tm-img-overlay">
                                    <i class="fas fa-play tm-overlay-icon"></i>
                                </a>
                            </div>    
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Class aptent taciti sociosqu</h3>
                                <p class="tm-catalog-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus bibendum orci sit amet dignissim rhoncus. Pellentesque pretium faucibus vestibulum.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="<?php echo get_template_directory_uri() ?>/img/tn-08.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
                                <a href="video-page.html" class="position-absolute tm-img-overlay">
                                    <i class="fas fa-play tm-overlay-icon"></i>
                                </a>
                            </div>
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Donec ac nisl ul elit</h3>
                                <p class="tm-catalog-item-text">Suspendisse in odio congue, lobortis metus sed, venenatis nisl. In dapibus et massa feugiat facilisis. Maecenas venenatis aliquet nulla, a tincidunt erat suscipit eget.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="<?php echo get_template_directory_uri() ?>/img/tn-09.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
                                <a href="video-page.html" class="position-absolute tm-img-overlay">
                                    <i class="fas fa-play tm-overlay-icon"></i>
                                </a>
                            </div>                            
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Sed mattis nisi erat</h3>
                                <p class="tm-catalog-item-text">Integer ultricies mi eu aliquet cursus. Nam sem leo, imperdiet non lacinia eget, volutpat ac massa. Donec mattis in velit quis commodo. Cras nec rutrum arcu.</p>
                            </div>
                        </div> -->
                    </div>
                    <?php print_r('<pre>'.next_post_link().'</pre>'); ?>
                    <!-- Catalog Paging Buttons -->
                    <div>
                        <ul class="nav tm-paging-links">
                            <li class="nav-item active"><a href="#" class="nav-link tm-paging-link">1</a></li>
                            <li class="nav-item"><a href="#" class="nav-link tm-paging-link">2</a></li>
                            <li class="nav-item"><a href="#" class="nav-link tm-paging-link">3</a></li>
                            <li class="nav-item"><a href="#" class="nav-link tm-paging-link">4</a></li>
                            <li class="nav-item"><a href="#" class="nav-link tm-paging-link">></a></li>
                        </ul>
                    </div>
                </main>

                <?php get_footer();  ?>