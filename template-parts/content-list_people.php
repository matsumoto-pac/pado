<?php
/**
 * Template part for displaying entry
 *
 * @package pado
 */

?>
<li>
  <a href="<?php the_permalink(); ?>">
      <figure class="img sr_bottom_delay">
          <?php the_post_thumbnail(); ?>
      </figure>
      <p class="text">
          <span class="date"><?php the_field('list_text'); ?></span>
          <span class="name"><?php the_title(); ?></span>
      </p>
  </a>
</li>
