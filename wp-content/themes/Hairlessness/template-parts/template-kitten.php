<?php
/*
 Template Name: Chatons
 */
    get_header();
?>
<main>
    <div>
        <h2>
            <?=the_title();?>
        </h2>
    </div>
    <div>
        <p>
            <?php the_field('preambule');?>
        </p>
    </div>
    <?php
    $stories = new WP_Query(
        [
            'post_type'=>'chaton',
            'order'=> 'DESC',
            'order_by'=>'date'
        ]
    );
    if ($stories->have_posts()):while ($stories->have_posts()):$stories->the_post();
        ?>
        <div class="cont_proj">
            <div>
                <h3 class="title_proj">
                    <?php the_title();?>
                </h3>
                <img src="<?php the_post_thumbnail();?>" alt="photo du chaton">
                <div class="excerp_proj">
                    <?php the_excerpt();?>
                </div>
            </div>
        </div>
    <?php endwhile;?>
    <?php endif;?>
</main>
<?php
    get_footer();
?>