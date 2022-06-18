<?php if (is_category('Gallery')) : ?>
    <h2>
     Categories
	 <?php wp_list_categories(); ?>
    </h2>

<?php elseif (is_category('Events')) : ?>
    <h2>
     Categories
	 <?php wp_list_categories(); ?>
    </h2>
    <?php if (have_posts()) :
    while (have_posts()) : the_post();
        // Your loop code
?>
        <div class="col-md-6 gx-5">
            <a href="<?php the_permalink() ?>">
                <img class="img-fluid rounded-1 shadow-5-strong" style="max-height:150px; max-width:150px" src="<?php echo the_post_thumbnail_url('thumbnail') ?>" />
                <p style="float:right;"><?php echo the_title(); ?></br>
                <?php the_time('l, F jS, Y'); ?></p>
            </a>
        </div>
    <?php endwhile;?>
    <?php endif;?>

<?php else : ?>
<p>This is some generic text to describe all other category pages, 
I could be left blank</p>
    <h2>
     Categories
	 <?php wp_list_categories(); ?>
    </h2>
<?php endif; ?>