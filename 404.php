<?php get_header(); ?>
	<article class="cont">
    <h1 class="ttl">
      404 Error！<br>
      指定されたURLは存在しませんでした。<br />
      (Page Not Found)
    </h1>
    <p class="desc">
      お探しのページが見つかりませんでした。<br />
      URLが間違っているか、削除された可能性があります。
    </p>
    <p class="lnk">
      <a href="<?php echo home_url(); ?>/">
        「<?php bloginfo(); ?>」 トップへ
      </a>
    </p>
  </article>
<?php get_footer(); ?>
