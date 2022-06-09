
<?php
get_header();
?>

<?php

global $wpdb;

    $post_id = 12; // your post id
    
    $post_author_id = (int) $wpdb->get_var( $wpdb->prepare( "SELECT post_author FROM {$wpdb->posts} WHERE ID = %d ", $post_id ) );
    
    $author =  new WP_User( $post_author_id );
    
    $display_name = $author->display_name;
    
    $avartar = get_avatar( $post_author_id, 30 ); // get_avatar( userid, size )
    
    $author_url = get_author_posts_url( $post_author_id );

?>

<main class="container-fluid text-center">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-12 px-0">
        <img class="rounded-5" src="<?php the_post_thumbnail_url(); ?>" 
        style="width:100%; max-width:900px; max-height:400px"
        />
      <h1 class="display-4 fst-italic"><?php echo the_title();?></h1>
      <p class="lead my-3"><?php the_excerpt();?></p>
     
    </div>
  </div>

  

  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
      <?php echo the_title();?>
      </h3>

      <article class="blog-post">
        <h2 class="blog-post-title"><?php echo the_title();?></h2>
        <p class="blog-post-meta"> <?php the_time( 'l, F jS, Y' ); ?>. <a href="#"><?php echo $display_name; ?>
</a></p>

        <div>
            <?php the_content();?>
        </div>

        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

      </article>

    

      
    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">About</h4>
          <p class="mb-0"><?php the_excerpt_rss();?></p>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Archives</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">March 2021</a></li>
            <li><a href="#">February 2021</a></li>
            <li><a href="#">January 2021</a></li>
            <li><a href="#">December 2020</a></li>
            <li><a href="#">November 2020</a></li>
            <li><a href="#">October 2020</a></li>
            <li><a href="#">September 2020</a></li>
            <li><a href="#">August 2020</a></li>
            <li><a href="#">July 2020</a></li>
            <li><a href="#">June 2020</a></li>
            <li><a href="#">May 2020</a></li>
            <li><a href="#">April 2020</a></li>
          </ol>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>



<?php
get_footer();
?>