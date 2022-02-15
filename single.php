<?php get_header(); ?>
<!-- END nav -->
<section
    class="hero-wrap hero-wrap-2"
    style="background-image: url('<?php echo esc_url(get_template_directory_uri(  )); ?>/assets/images/bg_2.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">

            <?php get_template_part('lib/breadcam'); ?>

        </div>
    </div>
</section>
<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
            	
          <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> </div>
                <p>
                    <?php echo the_post_thumbnail( ) ?>
                </p>
                <h2 class="mb-3"><?php the_title(); ?></h2>
                <?php the_content() ?>
                <div class="tag-widget post-tag-container mb-5 mt-5">
                    <div class="tagcloud">
                        <?php wp_tag_cloud(  ); ?>
                    </div>
                </div>
                <div class="about-author d-flex p-4 bg-light">
                    <div class="bio mr-5">
                        <?php global $post; $author_id = $post->post_author; ?>
                        <img
                            src="<?php echo esc_url( get_avatar_url( $author_id ) ); ?>"
                            alt="<?php echo get_the_author_meta( 'display_name', $author_id );?>"
                            class="img-fluid mb-4">

                    </div>
                    <div class="desc">
                      <h3><?php echo get_the_author_meta( 'display_name', $author_id );?></h3>
                        <p><?php echo get_the_author_meta( 'description', $author_id );?></p>
                    </div>
                  

                </div>
         
            <div class="pt-5 mt-1">
                <?php // If comments are open or we have at least one comment, load up the
               if ( comments_open() || get_comments_number() ) :
                comments_template(); endif; ?>
            </div>
            </div>
     
        <!-- .col-md-8 -->
        <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
           <?php get_search_form(  ) ?>
           <?php get_sidebar( ); ?> 
    </div>
</div>
</div>
</section>

<?php get_footer() ?>