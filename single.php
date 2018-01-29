<?php get_header() ?>
<main>
    <div class="mainContent">
        <div class="contentSide">
            <section>
                <?php if(have_posts()) : while(have_posts()) : the_post() ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="title text-center">
                                <h1><?php the_title(); ?></h1>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="post-content">
                                <div class="thumbnail">
                                    <?php if(has_post_thumbnail()) :?>
                                        <?php echo the_post_thumbnail(); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="contentPost">
                                    <p><?php the_content(); ?></p>
                                </div>
                                <div class="author">
                                    Author:<?php the_author(); ?>
                                </div>
                            </div>
                            <hr/>
                            <div class="comments">
                                <?php comments_template();?>
                            </div>
                        </div>


                    </div>
                <?php endwhile; else :?>
                    <?php echo "Error"; ?>
                <?php endif; ?>
            </section>
        </div>
    </div>
</main>
<?php get_footer() ?>