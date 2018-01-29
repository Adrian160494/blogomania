<?php
    /*
     * Template Name: Single Page
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
                   <?php if(have_posts()): while(have_posts()) : the_post(); ?>
                        <div class="page">
                            <div class="page-header">
                                <?php the_title(); ?>
                            </div>
                            <div class="page-content">

                            </div>
                        </div>
                    <?php endwhile; else: ?>
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
