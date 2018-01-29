    <?php get_header() ?>
        <main>
            <div class="mainContent">
                <div class="contentSide col-md-9">
                    <div class="contentSideHeader text-center">
                        <p>ContentBar</p>
                    </div>
                    <div class="contentSideContent">
                        <section>
                            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                                <div class="panel panel-default post ">
                                    <div class="panel-heading">
                                        <div class="title text-center">
                                            <h4><?php the_title(); ?></h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="thumbnail">
                                            <?php if(has_post_thumbnail()) :?>
                                                <?php the_post_thumbnail(); ?>
                                            <?php endif; ?>
                                        </div>
                                            <div class="contentPost">
                                                <p><?php the_excerpt(); ?>
                                                    <a href="<?php the_permalink(); ?>">Czytaj dalej...</a>
                                                </p>
                                            </div>
                                    </div>

                                </div>
                            <?php endwhile; else:?>
                                <?php echo "Error"; ?>
                            <?php endif; ?>
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