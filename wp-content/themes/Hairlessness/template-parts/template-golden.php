<?php
/*
 Template Name: Livre d'or
 */
get_header();
?>
    <main>
        <div>
            <h2>
                <?=the_title();?>
            </h2>
            <p>
                <?php the_field('preambule');?>
            </p>
        </div>
        <div>

        </div>
    </main>
<?php
get_footer();
?>