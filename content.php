<?php
/**
 * ********************************************************************************************************************
 * content.php
 * Created by Luis Manuel Ramirez Vargas.
 * Date: 17/04/2016
 * Time: 10:15 AM
 *
 * The theme standard post.
 * ********************************************************************************************************************
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('panel panel-default'); ?>>
    <div class="panel-body">
        <?php if(has_post_thumbnail()): ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail('full', array(
                'class' => 'img-responsive'
            )); ?>
        </a>
        <?php endif; ?>
        <article class="post">
            <?php
             /* Display the title in a link */
            echo '<h3><a href="'.get_the_permalink().'">'.get_the_title().'</a></h3>';
            ?>

            <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur cum dolorum fuga
                fugit ipsam maiores quos rerum vel! A commodi consequatur culpa eum fugiat nemo quas!
                Adipisci cum cumque ducimus excepturi itaque, laborum odit pariatur quod, rem repellat
                repudiandae rerum sed veniam vero voluptas voluptate, voluptatibus! A aliquam dolorum
                expedita illo nisi rerum voluptate! Animi doloribus hic officiis rerum, sit soluta
                tempore vitae voluptatibus....</p>
            <a href="#" class="btn btn-primary" role="button">Read More</a>-->
            <?php the_content(__('Continue reading', 'minimal')); ?>
        </article>
    </div>
    <div class="panel-footer">
        <div class="post-footer-box">
            <!--<ul class="list-inline">
                <li>
                    <span class="glyphicon glyphicon-calendar"></span> <a href="#">Posted on October 17, 2008</a>
                </li>
                <li>
                    <span class="glyphicon glyphicon-folder-open"></span> <a href="#">Uncategorized</a>
                </li>
                <li>
                    <span class="glyphicon glyphicon-tags"></span> <a href="#">boat, lake</a>
                </li>
            </ul>-->
            <?php
            /* Get the post meta */
            minimal_post_meta();
            ?>

        </div>
    </div>
</div>
