<?php
/*
YARPP Template: List
*/
?>
<?php if (have_posts()): ?>
  <div class="list_people">
    <ul>
      <?php
        while (have_posts()) : the_post();
		      get_template_part( 'template-parts/content-list_people' );
        endwhile;
      ?>
    </ul>
  </div>
<?php else: ?>
  <p>該当する記事はありません。</p>
<?php endif; ?>
