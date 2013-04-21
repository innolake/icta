<?php

/**
 * @package WordPress
 * @subpackage Gentle
 */

global $page_id;
global $post_type;
global $page;
global $shortname;
$mp_option = gentle_get_global_options();

if(isset($page->ID))
	$page_id = $page->ID;

if(isset($mp_option['gentle_sidebar']) && isset($mp_option['gentle_sidebar']['radio_sb_' .$page_id])) {
	$sidebar_position = $mp_option['gentle_sidebar']['radio_sb_' .$page_id];
} else {
	$sidebar_position = 'right'; }
?>

<script>
	jQuery(document).ready(function($) {

		<?php if($mp_option['gentle_footer_visible'] == "0") {?>
			$('#gentle_footer').children('.footer-content').slideUp(1);
			$('#gentle_footer').children('.bottom-footer').css('border', 'none');
		<?php } ?>

		<?php if($mp_option['gentle_footer_animated'] == "1") {?>
			$('#gentle_footer').hover(function() {
				var $this = $(this).children('.footer-content');
				$this.stop().slideDown();
				$('html, body').stop().animate({ scrollTop: $(document).height() });
				$('#gentle_footer').children('.bottom-footer').css('border-top', '1px solid #DDD');
			}, function() {
				var $this = $(this).children('.footer-content');
				$this.stop().slideUp('slow', function(){
					$('#gentle_footer').children('.bottom-footer').css('border', 'none');
				});
				
			});
		<?php } ?>
	});
</script>

<footer id="gentle_footer" class="sidebar-<?php echo $sidebar_position; ?>">
	<div class="footer-content">
		<ul>
			<?php 
			if(isset($mp_option['gentle_sidebar']) && isset($mp_option['gentle_sidebar']['footer_' .$page_id]))
				$custom_sb = $mp_option['gentle_sidebar']['footer_' .$page_id];
			else
				$custom_sb = "off";	

			$custom_sb_id = get_the_title($page_id).' Footer';

			if($custom_sb == 'on' && dynamic_sidebar($custom_sb_id) ) {
				// displays custom footer
			} elseif(dynamic_sidebar('Main Footer') ) {
				// displays regular footer when there are no widgets in custom Footer
			} else {
				// displays widgets when they are not specified in custom & Main Footer
			?>
				<li class="widget widget_3">
					<h2 class="widget_title footer_title">About TIVIT</h2>
					<div class="textwidget">
                                            TIVIT’s overriding aim is to further increase the pace of development of Finnish know-how, which in turn will ensure growth of the business activities of the whole sector, and therein the creation of new jobs. 
                                            As one of Finland’s Strategic Centres for Science, Technology and Innovation (SHOKs) – TIVIT’s role is not only to bring together and systematise research and development, but also to ensure that the results of research are understood, applied and adopted as part of companies’ business practice faster than ever before.
                                            <p><img src="/wp-content/uploads/2013/04/tivit.png" alt="TIVIT" /></p>
                                        </div>
				</li>
				<li class="widget widget_3"><h2 class="widget_title footer_title">Categories</h2>
					<ul>
						<?php wp_list_categories('show_count=1&title_li='); ?>
					</ul>
				</li>
				<li class="widget widget_3"><h2 class="widget_title sidebar_widget_title">Archives</h2>
					<ul>
						<?php wp_get_archives('type=monthly'); ?>
					</ul>
				</li>
			<?php
			}?>
		</ul>
	</div>	
	<div class="bottom-footer">
		<div class="bottom-footer-content">
			<div class="gentle-copyright"><?php echo $mp_option[$shortname.'_copyright_text']; ?></div>
			<div class="gentle-social-icons">			
				<?php if ($mp_option[$shortname.'_facebook_icon'] == "1") { ?>
					<a href="<?php echo $mp_option[$shortname.'_facebook_link']; ?>"><span class="gentle-social-icon gentle-facebook"></span></a>
				<?php } ?>
				<?php if ($mp_option[$shortname.'_twitter_icon'] == "1") { ?>
					<a href="<?php echo $mp_option[$shortname.'_twitter_link']; ?>"><span class="gentle-social-icon gentle-twitter"></span></a>
				<?php } ?>
				<?php if ($mp_option[$shortname.'_dribbble_icon'] == "1") { ?>
					<a href="<?php echo $mp_option[$shortname.'_dribbble_link']; ?>"><span class="gentle-social-icon gentle-dribbble"></span></a>
				<?php } ?>
				<?php if ($mp_option[$shortname.'_forrst_icon'] == "1") { ?>
					<a href="<?php echo $mp_option[$shortname.'_forrst_link']; ?>"><span class="gentle-social-icon gentle-forst"></span></a>
				<?php } ?>
				<?php if ($mp_option[$shortname.'_rss_icon'] == "1") { ?>
					<a href="<?php echo $mp_option[$shortname.'_rss_link']; ?>"><span class="gentle-social-icon gentle-rss"></span></a>
				<?php } ?>
				<?php if ($mp_option[$shortname.'_linkedin_icon'] == "1") { ?>
					<a href="<?php echo $mp_option[$shortname.'_linkedin_link']; ?>"><span class="gentle-social-icon gentle-linkedin"></span></a>
				<?php } ?>
				<?php if ($mp_option[$shortname.'_youtube_icon'] == "1") { ?>
					<a href="<?php echo $mp_option[$shortname.'_youtube_link']; ?>"><span class="gentle-social-icon gentle-youtube"></span></a>
				<?php } ?>
				<?php if ($mp_option[$shortname.'_skype_icon'] == "1") { ?>
					<a href="<?php echo $mp_option[$shortname.'_skype_link']; ?>"><span class="gentle-social-icon gentle-skype"></span></a>
				<?php } ?>
				<?php if ($mp_option[$shortname.'_vimeo_icon'] == "1") { ?>
					<a href="<?php echo $mp_option[$shortname.'_vimeo_link']; ?>"><span class="gentle-social-icon gentle-vimeo"></span></a>
				<?php } ?>
				<?php if ($mp_option[$shortname.'_myspace_icon'] == "1") { ?>
					<a href="<?php echo $mp_option[$shortname.'_myspace_link']; ?>"><span class="gentle-social-icon gentle-myspace"></span></a>
				<?php } ?>
				<?php if ($mp_option[$shortname.'_flickr_icon'] == "1") { ?>
					<a href="<?php echo $mp_option[$shortname.'_flickr_link']; ?>"><span class="gentle-social-icon gentle-flickr"></span></a>
				<?php } ?>
				<?php if ($mp_option[$shortname.'_digg_icon'] == "1") { ?>
					<a href="<?php echo $mp_option[$shortname.'_digg_link']; ?>"><span class="gentle-social-icon gentle-digg"></span></a>
				<?php } ?>
				<?php if ($mp_option[$shortname.'_lastfm_icon'] == "1") { ?>
					<a href="<?php echo $mp_option[$shortname.'_lastfm_link']; ?>"><span class="gentle-social-icon gentle-lastfm"></span></a>
				<?php } ?>
				<?php if ($mp_option[$shortname.'_stumble_icon'] == "1") { ?>
					<a href="<?php echo $mp_option[$shortname.'_stumble_link']; ?>"><span class="gentle-social-icon gentle-stumble"></span></a>
				<?php } ?>
				<?php if ($mp_option[$shortname.'_google_icon'] == "1") { ?>
					<a href="<?php echo $mp_option[$shortname.'_google_link']; ?>"><span class="gentle-social-icon gentle-google"></span></a>
				<?php } ?>
				<?php if ($mp_option[$shortname.'_share_icon'] == "1") { ?>
					<a href="<?php echo $mp_option[$shortname.'_share_link']; ?>"><span class="gentle-social-icon gentle-share"></span></a>
				<?php } ?>
				<?php if ($mp_option[$shortname.'_quora_icon'] == "1") { ?>
					<a href="<?php echo $mp_option[$shortname.'_quora_link']; ?>"><span class="gentle-social-icon gentle-quora"></span></a>
				<?php } ?>
				<?php if ($mp_option[$shortname.'_ember_icon'] == "1") { ?>
					<a href="<?php echo $mp_option[$shortname.'_ember_link']; ?>"><span class="gentle-social-icon gentle-ember"></span></a>
				<?php } ?>
				<?php if ($mp_option[$shortname.'_delicious_icon'] == "1") { ?>
					<a href="<?php echo $mp_option[$shortname.'_delicious_link']; ?>"><span class="gentle-social-icon gentle-delicious"></span></a>
				<?php } ?>
				<?php if ($mp_option[$shortname.'_thumblr_icon'] == "1") { ?>
					<a href="<?php echo $mp_option[$shortname.'_thumblr_link']; ?>"><span class="gentle-social-icon gentle-thumblr"></span></a>
				<?php } ?>
			</div>
			

		</div>
	</div>
</footer><!-- gentle footer end -->
</div><!-- #page end -->
	<?php wp_footer(); ?>
</body>
</html>