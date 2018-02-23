<?php
/*
Template Name: 募集要項（下層）
 */

//表組みの要素配列
$ele_array = array("job","form","compensation","table_location","benefits","hours","holiday","description","person");
?>
<?php get_header();?>
<article id="joblist" class="underlayer">
		<section id="sec_01" class="sec">
				<div class="cover">
				</div>
		</section>
		<section id="sec_02" class="sec">
				<h2 class="ttl_en-ja align_center">
		<span class="en">JOBLIST</span>
		<span class="ja">募集要項</span>
	</h2>
	<h3 class="joblist_ttl">
		<span class="category"><?php the_title(); ?></span>
		<?php if(get_field("location")): ?><span class="work_location">勤務地：<?php echo strip_tags(get_field("location")); ?></span><?php endif; ?>
	</h3>
				<dl>
						<?php foreach ($ele_array as $v): ?>
						<?php if(get_field($v)): ?>
						<dt><?php echo get_field_object($v)['label'];?></dt>
						<dd><?php echo get_field($v); ?></dd>
						<?php endif; ?>
						<?php endforeach; ?>
				</dl>
				<p class="btn_more">
						<a href="<?php echo esc_url( home_url( '/entry/' ) ); ?>">エントリーする</a>
				</p>
		</section>
</article>
<?php get_template_part('template-parts/content-entry');?>
<?php get_footer();?>
