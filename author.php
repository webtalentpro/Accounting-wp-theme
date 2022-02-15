<?php get_header(); ?>

<section
    class="hero-wrap hero-wrap-2"
    style="background-image: url(<?php echo esc_url(get_template_directory_uri(  ))?>/assets/images/bg_2.jpg);"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">

            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2">
                    <span class="mr-2">
                        <a href="<?php echo esc_url(home_url( )); ?>">
                            Home
                            <i class="fa fa-angle-right "></i>
                        </a>
                    </span>
                    <span>
                        <?php the_archive_title( ); ?>
                        <i class="fa fa-angle-right "></i>
                    </span>
                </p>
                <h1 class="mb-0 bread archive">
                    <?php the_archive_title( );?>
                </h1>
            </div>

        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row d-flex">
            <?php if(have_posts(  )) : ?>
            <?php while(have_posts(  )): the_post(  ) ?>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="<?php the_permalink(  ); ?>" class="block-20 rounded">
                        <?php echo the_post_thumbnail() ?>
                    </a>
                    <div class="text p-4">
                        <div class="meta mb-2">
                            <div>
                                <a href="<?php the_permalink(  ); ?>"><?php the_date( ); ?></a>
                            </div>
                            <div>
                                <a href="<?php the_permalink(  ); ?>?>"><?php the_author( ); ?></a>
                            </div>
                            <div>
                                <a href="<?php the_permalink(  ) ?>" class="meta-chat">
                                    <span class="fa fa-comment"></span>
                                    <?php comments_popup_link(__('comment', 'accounting'), __('1', 'accounting'), __('%', 'accounting'), '', __('Comments are off for this post', 'accounting') ); ?></a>
                            </div>
                        </div>
                        <h3 class="heading"> <a href="<?php the_permalink() ?>">  <?php the_title(); ?></a></h3>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; wp_reset_postdata(  ); ?>
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                <nav class="blog-pagination justify-content-center d-flex">
                          <ul class="pagination">
                            <?php the_posts_pagination( array(
                              'screen_reader_text'=> ' ',
                              'prev_text'=> '<i class="fa fa-long-arrow-right"> </i>',
                              'next_text'=> '<i class="fa fa-long-arrow-left"> </i>',

                            ) )
                            ?>
                          </ul>
                      </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer( ); ?>