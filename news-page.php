<?php
/*
 * Template Name: News Page
 */
?>

<?php get_header() ?>
    <main>
        <div class="mainContent">
            <div class="contentSide col-md-9">
                <div class="contentSideHeader">
                    <p>ContentBar</p>
                </div>
                <div class="contentSideContent">
                    <section>
                        <?php query_posts('showposts=2'); ?>

                        <?php while (have_posts()) : the_post(); ?>
                            <div class="well">
                                <div class="news text-center">
                                    <div class="newsHeader">
                                        <h2>News!!!</h2>
                                    </div>
                                </div>
                                <div>
                                    <h3><?php the_title(); ?></h3>
                                </div>
                                <div class="content">
                                    <p><?php the_excerpt(); ?>
                                        <a href="<?php the_permalink(); ?>">Czytaj dalej...</a>
                                    </p>
                                </div>
                            </div>


                        <?php endwhile;?>
                    </section>
                </div>
            </div>
            <div class="sideBar col-md-3">
                <div class="sideBarHeader text-center">
                    <p>SideBar</p>
                </div>
                <aside>
                    <?php get_sidebar(); ?>
                </aside>
            </div>
        </div>
    </main>
<?php get_footer() ?>
