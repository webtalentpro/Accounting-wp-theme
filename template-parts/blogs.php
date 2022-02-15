<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">

            <div class="col-md-7 heading-section text-center ftco-animate">
            <?php if( $blog_sec=get_field('blog', 'options')){ ?>
                <span class="subheading"><?php echo esc_html($blog_sec['section_subtitle']); ?></span>
                <h2><?php echo esc_html($blog_sec['section_title']); ?></h2>
                <?php } ?>
            </div>
        </div>
        <div class="row d-flex">

            <?php $args=array( 'posts_per_page'=> 3, 'post_type'=> 'post' ); $query=new
            WP_Query($args); while($query->have_posts( )){ $query->the_post( ); ?>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="<?php the_permalink(  ); ?>" class="block-20 rounded">
                        <?php echo the_post_thumbnail() ?>
                    </a>
                    <div class="text p-4">
                        <div class="meta mb-2">
                            <div>
                                <span class="entry-date"><?php echo get_the_date(); ?></span>
                            </div>
                            <div>
                                <a
                                    href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"
                                    title="<?php echo esc_attr( get_the_author() ); ?>"><?php the_author(); ?></a>
                            </div>
                            <div>
                                <a href="<?php the_permalink(  ) ?>" class="meta-chat">
                                    <span class="fa fa-comment"></span>
                                    <?php comments_popup_link(__('comment', 'accounting'), __('1', 'accounting'),
                                    __('%', 'accounting'), '', __('Comments are off for this post', 'accounting') );
                                    ?></a>
                            </div>
                        </div>
                        <h3 class="heading">
                            <a href="<?php the_permalink() ?>">
                                <?php the_title(); ?></a>
                        </h3>
                    </div>
                </div>
            </div>

            <?php } wp_reset_postdata(  ); ?>
        </div>
    </div>
</section>
