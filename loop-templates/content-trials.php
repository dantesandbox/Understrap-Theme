<?php
/************************
Trials Posts
************************/
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
   <h1><?php the_title(); ?></h1>
   <?php the_content(); ?>
</article><!-- #post-## -->
