<?php
/*
Template Name: 募集要項
 */
//カスタムタクソノミー一覧取得
$args = array(
	'post_type' => 'joblist',
	'taxonomy' => 'cat_joblist',
	'hide_empty' => false,
);
$cat_all = get_categories($args);
?>
<?php get_header();?>
<article id="joblist" class="underlayer">
		<section id="sec_01" class="sec">
				<div class="cover">
				</div>
		</section>
		<section id="sec_02" class="sec">
				<h2 class="ttl_en-ja align_center">
				<span class="en sr_bottom">JOBLIST</span>
				<span class="ja sr_bottom">募集要項</span>
				</h2>
				<ul class="category">
						<?php foreach ($cat_all as $v): ?>
						<li>
								<a href="<?php echo get_category_link($v); ?>"><?php echo esc_html($v->name); ?></a>
						</li>
						<?php endforeach;?>
				</ul>
				<?php if (have_posts()): ?>
				<ul class="job_area">
						<?php while (have_posts()): the_post();?>
						<li class="sr_bottom_delay">
								<a href="<?php echo get_permalink(); ?>">
										<span class="col-h3p">
										<h3>
										<span class="category_ttl"><?php the_title();?></span>
										<!-- <span class="office">品川支店</span> -->
										</h3>
										<p>勤務地：
												<?php echo get_field("location"); ?>
										</p>
										</span>
										<?php
											$thumbnail_id = get_post_thumbnail_id();
											$tg_img = wp_get_attachment_image_src( $thumbnail_id , 'joblist_thumbnail' );
										 ?>
										<figure style="background-image: url('<?php echo $tg_img[0]; ?>')">
												<?php the_post_thumbnail("joblist_thumbnail");?>
										</figure>
								</a>
						</li>
						<?php endwhile;?>
				</ul>
		<?php
		//Pagenation
		if (function_exists("pagination")) {
			pagination($additional_loop->max_num_pages);
		}
		?>
		<?php
		else:
			echo "<p>" . wpautop('投稿が見つかりませんでした。'), "</p>";
		endif;
		?>
		</section>
</article>
<?php get_template_part('template-parts/content-entry');?>
<?php get_footer();?>
