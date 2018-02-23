<?php
/**
 * Template part for displaying entry
 *
 * @package underscoreDefault
 */

?>

<section id="sec_entry" class="sec">
  <div class="cont">
    <h3 class="ttl_en-ja align_center color_white">
      <span class="en sr_bottom">ENTRY</span>
      <span class="ja sr_bottom">エントリー</span>
    </h3>
    <div class="btns">
      <ul>
        <li>
          <a href="https://job.mynavi.jp/19/pc/search/corp222996/outline.html" class="bc_blue_deep_alpha">
            新卒エントリー
          </a>
        </li><li>
          <a href="<?php echo esc_url( home_url( '/entry/' ) ); ?>" class="bc_blue_alpha">
            中途エントリー
          </a>
        </li>
      </ul>
    </div>
  </div>
</section>
