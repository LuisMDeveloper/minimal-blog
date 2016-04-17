<?php
/**
  * *******************************************************************************************************************
  * index.php
  *
  * The main template file.
  * *******************************************************************************************************************
  */
?>

<?php
/* Load header.php */
get_header();
?>

<div class="container">
    <div class="row">
        <div class="jumbotron col-md-12 text-center">
            <h1><?php _e("Howdy. I'm a grid based layout focused on your talent.", 'minimal') ?></h1>
            <p><?php _e("Greet your visitors & Showcase your work with style.", 'minimal') ?></p>
        </div><!--end jumbotron-->
    </div><!--end row-->
</div><!--end container-->

<!-- BLOG AREA -->
<section class="portfolio-area">
    <div class="container">
        <div class="row box-blog">
            <div class="col-md-8">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <?php get_template_part('content', get_post_format()); ?>
                <?php endwhile; ?>

                <?php else: ?>
                    <?php get_template_part('content', 'none'); ?>
                <?php endif; ?>

                <?php
                    /* Load numbered pagination */
                    minimal_numbered_pagination()
                ?>
            </div>
            <aside class="col-md-4">
                <!-- sidebar here-->
            </aside>
        </div>
    </div>
</section>

<?php
/* Load footer.php */
get_footer();
?>