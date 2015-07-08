<?php
/**
 * Template Name: Portfolio
 */

get_header(); ?>

<section class="port_descr">
    <div class="s_content s_portfolio_full">
        <div class="container">
            <div class="row ">
                <div class="col-md-7 left">
                    <div class="descr_img">
                        <img src="<?php bloginfo('template_url'); ?>/img/portfolio-images/slider/img-8-650x400.jpg" alt="" draggable="false">
                    </div>
                    <div class="port_item_switch">
                        <ul class="pager ">
                            <div class="row">
                                <div class="col-md-6 left">
                                    <li >
                                        <a href="#">« Previous post</a>
                                    </li>
                                </div>
                                <div class="col-md-6 right">
                                    <li>
                                        <a href="#">Next Post »</a>
                                    </li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div> <!--Col-->

                <div class="col-md-5 right">
                    <div class="port_item_switch">
                        <div class="portfolio_meta">
                        <span class="post_category">
                            <i class="glyphicon glyphicon-bookmark"></i>
                            <a href="#" rel="tag">Gallery Category 1</a>
                        </span>
                        <span class="post_tag">
                            <i class="glyphicon glyphicon-tag"></i>
                            <a href="#" rel="tag">accusantium</a>,
                             <a href="#" rel="tag">consectetur</a>,
                              <a href="#" rel="tag">cumque</a>
                        </span>
                        </div>
                    </div>
                    <div class="portfolio_meta_list">
                        <ul class=" port_item_switch">
                            <li><strong>Client:</strong>Lorem ipsum</li>
                            <li><strong>Date:</strong>07/07/2012</li>
                            <li><strong>Info:</strong>Phasellus ultrices tellus eget ipsum</li>
                            <li><a target="_blank" href="http://demolink.org">Launch Project</a></li>
                        </ul>
                    </div>
                    <div class="content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris sollicitudin dignissim. Phasellus ultrices tellus eget ipsum ornare molestie scelerisque eros dignissim. Phasellus fringilla hendrerit lectus nec vehicula.
                        </p>
                        <p>
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In faucibus, risus eu volutpat pellentesque, massa felis feugiat velit, nec mattis felis elit a eros.
                        </p>
                        <p>
                            Cras convallis sodales orci, et pretium sapien egestas quis. Donec tellus leo, scelerisque in facilisis a, laoreet vel quam. Suspendisse arcu nisl, tincidunt a vulputate ac, feugiat vitae leo. Integer hendrerit orci id metus venenatis in luctus.
                        </p>
                    </div>
                </div>
            </div> <!--IMG  row-->

            <div class="row">
                <div class="col-md-7 left">
<!--                    <div  class="related-posts">-->
<!--                        <h3>Related Posts</h3>-->
<!--                        <ul class="related-posts_list">-->
<!--                            <div class="row">-->
<!--                                <div class="col-md-3">-->
<!--                                    <li class="related-posts_item">-->
<!--                                        <a href="#" title="Excepteur sint occ aecat cupidatat">-->
<!--                                            <img alt="Excepteur sint occ aecat cupidatat" src="--><?php //bloginfo('template_url'); ?><!--/img/portfolio-images/slider/img-8-650x400.jpg">-->
<!--                                        </a>-->
<!--                                        <p>-->
<!--                                            <a href="#">Excepteur sint occ aecat cupidatat</a>-->
<!--                                        </p>-->
<!--                                    </li>-->
<!--                                </div>-->
<!--                                <div class="col-md-3">-->
<!--                                    <li class="related-posts_item">-->
<!--                                        <a href="#" title="Excepteur sint occ aecat cupidatat">-->
<!--                                            <img alt="Excepteur sint occ aecat cupidatat" src="--><?php //bloginfo('template_url'); ?><!--/img/portfolio-images/slider/img-8-650x400.jpg">-->
<!--                                        </a>-->
<!--                                        <p>-->
<!--                                            <a href="#">tat</a>-->
<!--                                        </p>-->
<!--                                    </li>-->
<!--                                </div>-->
<!--                                <div class="col-md-3">-->
<!--                                    <li class="related-posts_item">-->
<!--                                        <a href="#" title="Excepteur sint occ aecat cupidatat">-->
<!--                                            <img alt="Excepteur sint occ aecat cupidatat" src="--><?php //bloginfo('template_url'); ?><!--/img/portfolio-images/slider/img-8-650x400.jpg">-->
<!--                                        </a>-->
<!--                                        <p>-->
<!--                                            <a href="#">Excepteur sint occ aecat cupidatat</a>-->
<!--                                        </p>-->
<!--                                    </li>-->
<!--                                </div>-->
<!--                                <div class="col-md-3">-->
<!--                                    <li class="related-posts_item">-->
<!--                                        <a href="#" title="Excepteur sint occ aecat cupidatat">-->
<!--                                            <img alt="Excepteur sint occ aecat cupidatat" src="--><?php //bloginfo('template_url'); ?><!--/img/portfolio-images/slider/img-8-650x400.jpg">-->
<!--                                        </a>-->
<!--                                        <p>-->
<!--                                            <a href="#">Excepteur sint occ aecat cupidatat</a>-->
<!--                                        </p>-->
<!--                                    </li>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </ul>-->

                        <?php
                        $orig_post = $post;
                        global $post;
                        $categories = get_the_category($post->ID);
                        if ($categories)
                            $category_ids = array();
                        foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                        $args=array(
                            'category__in' => $category_ids,
                            'post__not_in' => array($post->ID),
                            'posts_per_page'=> 2, // Number of related posts that will be shown.
                            'caller_get_posts'=>1
                        );
                        $my_query = new wp_query( $args );
                        ?>


                        <?php if( $my_query->have_posts() ) : ?>
                            <div  class="related-posts">
                                <h3>Related Posts</h3>
                                <ul class="related-posts_list">
                                    <div class="row">
                                        <?php while( $my_query->have_posts() ) : ?>
                                            <?php $my_query->the_post(); ?>
                                            <div class="col-md-3">
                                                <li class="related-posts_item">
                                                    <a href="<? the_permalink()?>" title="Excepteur sint occ aecat cupidatat">
                                                        <?php the_post_thumbnail(); ?>
                                                    </a>
                                                    <p>
                                                        <a href="<? the_permalink()?>"><?php the_title(); ?></a>
                                                    </p>
                                                </li>
                                            </div>
                                        <?php endwhile; ?>

                                    </div>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>

                    <p class="nocomments">No Comments Yet.</p>

                    <div id="respond" class="respond">
                        <h3>Leave a comment</h3>

                        <form action="http://formspree.io/agragregra@ya.ru" class="main_form" novalidate target="_blank" method="post">
                            <label class="form-group">
                                <input type="text" name="name" placeholder="Name*" data-validation-required-message="Enter your name" required />
                                <span class="help-block text-danger"></span>
                            </label>
                            <label class="form-group">
                                <input type="email" name="email" placeholder="E-mail" data-validation-required-message="Invalid e-mail" required />
                                <span class="help-block text-danger"></span>
                            </label>
                            <label class="form-group">
                                <input type="url" name="website" placeholder="Enter the site" data-validation-required-message="The website address is not valid" required /><!--data-fv-field="website"-->
                                <span class="help-block text-danger"></span>
                            </label>
                            <label class="form-group">
                                <textarea name="message" rows="10" placeholder="Your comment*" data-validation-required-message="Enter your comment" required></textarea>
                                <span class="help-block text-danger"></span>
                            </label>
                            <a class="read-more-btn" href="">
                                <span>submit comment</span>
                            </a>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>