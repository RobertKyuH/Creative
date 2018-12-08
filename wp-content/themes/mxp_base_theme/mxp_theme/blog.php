<?php
/* Template Name: blog */ 
?>
<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="en-GB">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2018.1.0.386"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
  <script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.musepolyfill.bgsize.js", "webpro.js", "musewpdisclosure.js", "jquery.watch.js", "jquery.museresponsive.js", "require.js", "blog.css"], "outOfDate":[]};
</script>
  
  
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/css/site_global.css?crc=116311235"/>
  <link rel="stylesheet" type="text/css" href="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/css/master_a-master-light.css?crc=39692522"/>
  <link rel="stylesheet" type="text/css" href="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/css/blog.css?crc=3817431723" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_blog.css?crc=3824530138"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_preview_master_a-master-light.css?crc=4204244850"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_blog.css?crc=308882048" id="nomq_pagesheet"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 
   var __adobewebfontsappname__ = "muse";
</script>
  <!-- JS includes -->
  <script src="//webfonts.creativecloud.com/open-sans:n4:default;roboto:n4,n9:default;raleway:n4,n7:default.js" type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } </script>
    <!--custom head HTML-->
  <style> html, body { max-width: 100%; overflow-x: hidden; } </style><script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">if( window.jQuery ){ var $ = jQuery.noConflict(); } </script><link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/hover.css/2.0.2/css/hover-min.css"><link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css"><script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js">if( window.jQuery ){ var $ = jQuery.noConflict(); } </script><script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js">if( window.jQuery ){ var $ = jQuery.noConflict(); } </script><script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js">if( window.jQuery ){ var $ = jQuery.noConflict(); } </script><script type="text/javascript" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/assets/animationjs.js">if( window.jQuery ){ var $ = jQuery.noConflict(); } </script><link rel="stylesheet" type="text/css" href="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/assets/animationcss.css"/><script type="text/javascript" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/assets/parallax.js">if( window.jQuery ){ var $ = jQuery.noConflict(); } </script><script type="text/javascript" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/assets/parallaxmove.js">if( window.jQuery ){ var $ = jQuery.noConflict(); } </script><script type="text/javascript" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/assets/typewriter.min.js">if( window.jQuery ){ var $ = jQuery.noConflict(); } </script>
  <!--HTML Widget code-->
  

				<style>
					div[mxp-link]{
						cursor: pointer;
					}
					.MusexPress-Posts-Template-Container .AccordionPanelTab{
						visibility: hidden;
					}
				</style>
				<script>if( window.jQuery ){ var $ = jQuery.noConflict(); } 
				<?php
								 $cats_name = '';
									$cats_name = trim($cats_name);

									$args = array(
											'posts_per_page'   => 1,
											'offset'           => 0,
											'category'         => '',
											'category_name'    => $cats_name,
											'orderby'          => 'date',
											'order'            => 'DESC',
											'post_type'        => 'post',
											'post_status'      => 'publish',
											'meta_key' => '_mxp_featured_post',
			 								'meta_value' => 1,
											'suppress_filters' => true

									);

									//array di post
									$posts_query_ID = new WP_Query( $args );

									$posts_ID = $posts_query_ID->posts;
						 wp_reset_query(); ?>
		</script>
				
	<script>if( window.jQuery ){ var $ = jQuery.noConflict(); } 

		<?php if ( have_posts() ) {
        global $wp_query;
		$posts_blog = $wp_query->posts;

		}

		?>
	</script>


	
	
 <?php
wp_enqueue_script("jquery");
wp_head();
?></head>
 <body class=" <?php echo implode(" ", get_body_class()); ?>"><script>if( window.jQuery ){ var $ = jQuery.noConflict(); }</script>

  <div class="breakpoint active" id="bp_infinity" data-min-width="381"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox" id="page"><!-- group -->
    <div class="clearfix grpelem" id="pu55170"><!-- group -->
     <div class="rounded-corners shared_content" id="u55170" data-content-guid="u55170_content"><!-- simple frame --></div>
     <div class="Button menuSideSlideNav-Btn transition shared_content" id="buttonu55180" data-content-guid="buttonu55180_content"><!-- container box --></div>
     <div class="Button menuSideSlideNavLeft rgba-background clearfix shared_content" id="buttonu55153" data-content-guid="buttonu55153_content"><!-- container box -->
      <div class="menuSideSlideNavBG grpelem" id="u55162"><!-- simple frame --></div>
      <a class="nonblock nontext Button transition clearfix grpelem" id="buttonu55156" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#experience" data-href="anchor:U82:U18912" data-visibility="changed" style="visibility:hidden"><!-- container box --><div class="wow-fadeInDown clearfix grpelem" id="u55157-4" title="Layer_9" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content --><p>Experience</p></div></a>
      <a class="nonblock nontext Button transition clearfix grpelem" id="buttonu55167" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#portfolio" data-href="anchor:U82:U18915" data-visibility="changed" style="visibility:hidden"><!-- container box --><div class="wow-fadeInDown clearfix grpelem" id="u55168-4" title="Layer_9" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content --><p>Portfolio</p></div></a>
      <a class="nonblock nontext Button transition clearfix grpelem" id="buttonu55163" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#skills" data-href="anchor:U82:U18918" data-visibility="changed" style="visibility:hidden"><!-- container box --><div class="wow-fadeInDown clearfix grpelem" id="u55164-4" title="Layer_9" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content --><p>Skills</p></div></a>
      <a class="nonblock nontext Button transition clearfix grpelem" id="buttonu55165" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#blog" data-href="anchor:U82:U42317" data-visibility="changed" style="visibility:hidden"><!-- container box --><div class="wow-fadeInDown clearfix grpelem" id="u55166-4" title="Layer_9" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content --><p>Blog</p></div></a>
      <a class="nonblock nontext Button transition clearfix grpelem" id="buttonu55160" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#service" data-href="anchor:U82:U18909" data-visibility="changed" style="visibility:hidden"><!-- container box --><div class="wow-fadeInDown clearfix grpelem" id="u55161-4" title="Layer_9" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content --><p>Service</p></div></a>
      <a class="nonblock nontext Button transition clearfix grpelem" id="buttonu55158" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#about-me" data-href="anchor:U82:U12310" data-visibility="changed" style="visibility:hidden"><!-- container box --><div class="wow-fadeInDown clearfix grpelem" id="u55159-4" title="Layer_9" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content --><p>About me</p></div></a>
      <a class="nonblock nontext Button transition clearfix grpelem" id="buttonu55154" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#contact" data-href="anchor:U82:U18924" data-visibility="changed" style="visibility:hidden"><!-- container box --><div class="wow-fadeInDown clearfix grpelem" id="u55155-4" title="Layer_9" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content --><p>Contact me</p></div></a>
     </div>
     <div class="Button menuSideSlideNavLeft clearfix" id="buttonu55196"><!-- container box -->
      <div class="menuSideSlideNavBG clearfix grpelem" id="u55197"><!-- column -->
       <div class="clip_frame colelem shared_content" id="u55204" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u55204_content"><!-- image -->
        <img class="block temp_no_img_src" id="u55204_img" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/logo%20ver%203.png?crc=4064509805" alt="" width="50" height="50" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
       </div>
       <div class="clearfix colelem shared_content" id="u55199" data-content-guid="u55199_content"><!-- group -->
        <div class="menuSideSlideNav-Btn rounded-corners grpelem" id="u55203" data-sizepolicy="fixed" data-pintopage="page_fluidx"><!-- simple frame --></div>
        <div class="clearfix grpelem" id="u55200"><!-- group -->
         <div class="menuSideSlideNav-Btn grpelem" id="u55201" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.7071,M12=-0.7071,M21=0.7071,M22=0.7071,SizingMethod='auto expand')" data-mu-ie-matrix-dx="2" data-mu-ie-matrix-dy="-7"><!-- simple frame --></div>
         <div class="menuSideSlideNav-Btn grpelem" id="u55202" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=-0.7071,M12=-0.7071,M21=0.7071,M22=-0.7071,SizingMethod='auto expand')" data-mu-ie-matrix-dx="2" data-mu-ie-matrix-dy="-7"><!-- simple frame --></div>
        </div>
       </div>
      </div>
      <div class="clearfix grpelem shared_content" id="u55198-4" data-ibe-flags="txtStyleSrc" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0,M12=1,M21=-1,M22=0,SizingMethod='auto expand')" data-mu-ie-matrix-dx="103" data-mu-ie-matrix-dy="-103" data-content-guid="u55198-4_content"><!-- content -->
       <p>CREATIVE VIBE</p>
      </div>
     </div>
     <div class="Button translateRight clearfix" id="buttonu55185"><!-- container box -->
      <div class="clip_frame grpelem" id="u55186"><!-- image -->
       <img class="block temp_no_img_src" id="u55186_img" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/fb.png?crc=400507023" alt="" data-heightwidthratio="1" data-image-width="22" data-image-height="22" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
      </div>
      <div class="grpelem" id="u55191"><!-- custom html -->
       <iframe src="//www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCreative-Vibe-1337981909636937&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId=333211160470273" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
      </div>
      <div class="clearfix grpelem" id="u55188"><!-- group -->
       <div class="rounded-corners grpelem" id="u55189" data-sizepolicy="fixed" data-pintopage="page_fluidx"><!-- simple frame --></div>
       <div class="rounded-corners grpelem" id="u55190" data-sizepolicy="fixed" data-pintopage="page_fluidx"><!-- simple frame --></div>
      </div>
     </div>
    </div>
    <div class="clearfix grpelem" id="ppaccordionu43470"><!-- column -->
     <div class="clearfix colelem" id="paccordionu43470"><!-- group -->
      <ul class="AccordionWidget MusexPress-Posts-Template-Container clearfix grpelem" id="accordionu43470" data-visibility="changed" style="visibility:hidden <?php echo isset($posts_blog[1-1]) ? "" : "; display: none;" ;?> "><?php if(isset($posts_blog[1-1])) : ?><?php global $post; $post = $posts_blog[1-1]; setup_postdata($posts_blog[1-1]); ?><!-- vertical box -->
       <li class="AccordionPanel borderbox clearfix colelem" id="u43471"><!-- vertical box --><!-- m_editable region-id="editable-static-tag-U43472-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,clickable,txtStyleTarget" --><div class="AccordionPanelTab borderbox clearfix colelem" id="u43472-3" data-muse-uid="U43472" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc"><!-- content --><p class="shared_content" data-content-guid="u43472-3_0_content">&nbsp;</p></div><!-- /m_editable --><div class="AccordionPanelContent borderbox clearfix colelem" id="u43473"><!-- column --><div class="museBGSize  clearfix colelem shared_content" id="u43480" data-content-guid="u43480_content"style="<?php $url = wp_get_attachment_url( get_post_thumbnail_id($posts_blog[1-1]->ID) ); echo "background-image: url(".$url.");";?>"mxp-link="<?php echo get_the_permalink($posts_blog[1-1]); ?>"><!-- column --><div class="position_content" id="u43480_position_content"><!-- m_editable region-id="editable-static-tag-U43475-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class="clearfix colelem" id="u43475-4" data-muse-uid="U43475" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc"><!-- content --><p>FEATURED POST</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43474-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" --><a class="nonblock nontext  transition clearfix colelem" id="u43474-4" href="<?php echo get_the_permalink(); ?>" data-muse-uid="U43474" data-muse-type="txt_frame"><!-- content --><p><?php echo get_the_title(); ?></p></a><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43481-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class=" clearfix colelem" id="u43481-4" data-muse-uid="U43481" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc"><?php echo get_the_excerpt(); ?></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43477" template="blog.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" --><a class="nonblock nontext Button  transition rounded-corners clearfix colelem" id="buttonu43477" href="<?php echo get_the_permalink(); ?>" data-visibility="changed" style="visibility:hidden" data-muse-uid="U43477"><!-- container box --><!-- m_editable region-id="editable-static-tag-U43478-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u43478-4" data-muse-uid="U43478" data-muse-type="txt_frame"><!-- content --><p>CONTINUE READING</p></div><!-- /m_editable --></a><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43479" template="blog.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" --><a class="nonblock nontext museBGSize rounded-corners  colelem" id="u43479" href="<?php $post_author_id = get_post_field( 'post_author', $posts_blog[1-1]->ID ); echo get_author_posts_url( $post_author_id ); ?>" data-muse-uid="U43479"style="<?php $post_author_id = get_post_field( 'post_author', $posts_blog[1-1]->ID ); $author_url = get_avatar_url( $post_author_id ); echo "background-image: url(".$author_url.");" ;?>"><!-- simple frame --></a><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43482-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,clickable,txtStyleTarget" data-ice-editable="link" --><a class="nonblock nontext  clearfix colelem" id="u43482-4" href="<?php $post_author_id = get_post_field( 'post_author' ); echo get_author_posts_url( $post_author_id );?>" data-muse-uid="U43482" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc"><?php echo get_the_author_meta( "nicename", $post_author_id  ); ?></a><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U43476-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class=" clearfix colelem shared_content" id="u43476-4" data-muse-uid="U43476" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-content-guid="u43476-4_content"><?php echo get_the_date( get_option('date_format')); ?></div><!-- /m_editable --></div></li>
      <?php wp_reset_postdata(); ?><?php endif; ?></ul>
      <div class="size_fixed grpelem shared_content" id="u43483" data-sizepolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u43483_content"><!-- custom html -->
       

				<div style="display: none"></div>
				
      </div>
     </div>
     <!-- m_editable region-id="editable-static-tag-U43485-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
     <div class="heading1 clearfix colelem shared_content" id="u43485-4" data-muse-uid="U43485" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u43485-4_content"><!-- content -->
      <p>All blog posts</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U43484-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
     <div class="body1 clearfix colelem shared_content" id="u43484-3" data-muse-uid="U43484" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u43484-3_content"><!-- content -->
      <p>&nbsp;</p>
     </div>
     <!-- /m_editable -->
     <div class="clearfix colelem" id="pu43486"><!-- group -->
      <div class="size_fixed grpelem shared_content" id="u43486" data-sizepolicy="fixed" data-pintopage="page_fluidx" data-content-guid="u43486_content"><!-- custom html -->
       
<?php global $wp_query;
$current_page = $wp_query->get( 'paged' );
if ( ! $current_page ) {
    $current_page = 1;
}
if ( $current_page == $wp_query->max_num_pages ) : ?>
    <style>
		#page{
			min-height: 0;
			height: auto;
		}
		.verticalspacer{
			height: auto;
			min-height: 0;
		}

	</style>


<?php endif; ?>
	<div class="mxp_posts_per_page" data-mxp="true" style="display: none;">
			6
	</div>
	
      </div>
      <ul class="AccordionWidget MusexPress-Posts-Template-Container clearfix grpelem" id="accordionu43487" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"style=" <?php echo isset($posts_blog[1-1]) ? "" : "; display: none;" ;?> "><?php if(isset($posts_blog[1-1])) : ?><?php global $post; $post = $posts_blog[1-1]; setup_postdata($posts_blog[1-1]); ?><!-- vertical box -->
       <li class="AccordionPanel clearfix colelem" id="u43488"><!-- vertical box --><!-- m_editable region-id="editable-static-tag-U43489-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,clickable" --><div class="AccordionPanelTab clearfix colelem" id="u43489-3" data-muse-uid="U43489" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- content --><p class="shared_content" data-content-guid="u43489-3_0_content">&nbsp;</p></div><!-- /m_editable --><div class="AccordionPanelContent rounded-corners clearfix colelem" id="u43490"><!-- column --><div class="position_content" id="u43490_position_content"><div class=" museBGSize colelem shared_content" id="u43497" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u43497_content"style="<?php $url = wp_get_attachment_url( get_post_thumbnail_id($posts_blog[1-1]->ID) ); echo "background-image: url(".$url.");";?>"mxp-link="<?php echo get_the_permalink($posts_blog[1-1]); ?>"><!-- simple frame --></div><!-- m_editable region-id="editable-static-tag-U43496-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class=" Text-Links clearfix colelem shared_content" id="u43496-4" data-muse-uid="U43496" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u43496-4_content"><?php echo get_the_category_list(" , "); ?></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43495-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" --><a class="nonblock nontext  transition clearfix colelem shared_content" id="u43495-4" href="<?php echo get_the_permalink(); ?>" data-muse-uid="U43495" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u43495-4_content"><!-- content --><p><?php echo get_the_title(); ?></p></a><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43494-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class=" clearfix colelem shared_content" id="u43494-3" data-muse-uid="U43494" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u43494-3_content"><?php echo get_the_excerpt(); ?></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43493-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class=" clearfix colelem shared_content" id="u43493-4" data-muse-uid="U43493" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u43493-4_content"><?php echo get_the_date( get_option('date_format')); ?></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43491" template="blog.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" --><a class="nonblock nontext Button  transition rounded-corners clearfix colelem shared_content" id="buttonu43491" href="<?php echo get_the_permalink(); ?>" data-muse-uid="U43491" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="buttonu43491_content"><!-- container box --><!-- m_editable region-id="editable-static-tag-U43492-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u43492-4" data-muse-uid="U43492" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p>CONTINUE READING</p></div><!-- /m_editable --></a><!-- /m_editable --></div></div></li>
      <?php wp_reset_postdata(); ?><?php endif; ?></ul>
      <div class="clearfix grpelem" id="paccordionu43529"><!-- column -->
       <ul class="AccordionWidget MusexPress-Posts-Template-Container clearfix colelem" id="accordionu43529" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="paccordionu43529"style=" <?php echo isset($posts_blog[2-1]) ? "" : "; display: none;" ;?> "><?php if(isset($posts_blog[2-1])) : ?><?php global $post; $post = $posts_blog[2-1]; setup_postdata($posts_blog[2-1]); ?><!-- vertical box -->
        <li class="AccordionPanel clearfix colelem" id="u43530"><!-- vertical box --><!-- m_editable region-id="editable-static-tag-U43531-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,clickable" --><div class="AccordionPanelTab clearfix colelem" id="u43531-3" data-muse-uid="U43531" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- content --><p class="shared_content" data-content-guid="u43531-3_0_content">&nbsp;</p></div><!-- /m_editable --><div class="AccordionPanelContent clearfix colelem" id="u43532"><!-- group --><div class=" museBGSize clearfix grpelem shared_content" id="u43534" data-content-guid="u43534_content"style="<?php $url = wp_get_attachment_url( get_post_thumbnail_id($posts_blog[2-1]->ID) ); echo "background-image: url(".$url.");";?>"mxp-link="<?php echo get_the_permalink($posts_blog[2-1]); ?>"><!-- column --><!-- m_editable region-id="editable-static-tag-U43533-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class=" Text-Links clearfix colelem" id="u43533-4" data-muse-uid="U43533" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><?php echo get_the_category_list(" , "); ?></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43536-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" --><a class="nonblock nontext  transition clearfix colelem" id="u43536-4" href="<?php echo get_the_permalink(); ?>" data-muse-uid="U43536" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content --><p><?php echo get_the_title(); ?></p></a><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43535-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class=" clearfix colelem" id="u43535-4" data-muse-uid="U43535" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><?php echo get_the_date( get_option('date_format')); ?></div><!-- /m_editable --></div></div></li>
       <?php wp_reset_postdata(); ?><?php endif; ?></ul>
       <ul class="AccordionWidget MusexPress-Posts-Template-Container clearfix colelem" id="accordionu43537" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="paccordionu43529"style=" <?php echo isset($posts_blog[3-1]) ? "" : "; display: none;" ;?> "><?php if(isset($posts_blog[3-1])) : ?><?php global $post; $post = $posts_blog[3-1]; setup_postdata($posts_blog[3-1]); ?><!-- vertical box -->
        <li class="AccordionPanel clearfix colelem" id="u43538"><!-- vertical box --><!-- m_editable region-id="editable-static-tag-U43544-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,clickable" --><div class="AccordionPanelTab clearfix colelem" id="u43544-3" data-muse-uid="U43544" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- content --><p class="shared_content" data-content-guid="u43544-3_0_content">&nbsp;</p></div><!-- /m_editable --><div class="AccordionPanelContent clearfix colelem" id="u43539"><!-- group --><div class=" museBGSize clearfix grpelem shared_content" id="u43541" data-content-guid="u43541_content"style="<?php $url = wp_get_attachment_url( get_post_thumbnail_id($posts_blog[3-1]->ID) ); echo "background-image: url(".$url.");";?>"mxp-link="<?php echo get_the_permalink($posts_blog[3-1]); ?>"><!-- column --><!-- m_editable region-id="editable-static-tag-U43543-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class=" Text-Links clearfix colelem" id="u43543-4" data-muse-uid="U43543" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><?php echo get_the_category_list(" , "); ?></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43540-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" --><a class="nonblock nontext  transition clearfix colelem" id="u43540-4" href="<?php echo get_the_permalink(); ?>" data-muse-uid="U43540" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content --><p><?php echo get_the_title(); ?></p></a><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43542-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class=" clearfix colelem" id="u43542-4" data-muse-uid="U43542" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><?php echo get_the_date( get_option('date_format')); ?></div><!-- /m_editable --></div></div></li>
       <?php wp_reset_postdata(); ?><?php endif; ?></ul>
      </div>
     </div>
     <div class="clearfix colelem" id="paccordionu43520"><!-- group -->
      <ul class="AccordionWidget MusexPress-Posts-Template-Container clearfix grpelem" id="accordionu43520" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="paccordionu43520"style=" <?php echo isset($posts_blog[4-1]) ? "" : "; display: none;" ;?> "><?php if(isset($posts_blog[4-1])) : ?><?php global $post; $post = $posts_blog[4-1]; setup_postdata($posts_blog[4-1]); ?><!-- vertical box -->
       <li class="AccordionPanel clearfix colelem" id="u43521"><!-- vertical box --><!-- m_editable region-id="editable-static-tag-U43528-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,clickable" --><div class="AccordionPanelTab clearfix colelem" id="u43528-3" data-muse-uid="U43528" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- content --><p class="shared_content" data-content-guid="u43528-3_0_content">&nbsp;</p></div><!-- /m_editable --><div class="AccordionPanelContent rounded-corners clearfix colelem" id="u43522"><!-- column --><div class="position_content" id="u43522_position_content"><div class=" museBGSize colelem shared_content" id="u43525" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u43525_content"style="<?php $url = wp_get_attachment_url( get_post_thumbnail_id($posts_blog[4-1]->ID) ); echo "background-image: url(".$url.");";?>"mxp-link="<?php echo get_the_permalink($posts_blog[4-1]); ?>"><!-- simple frame --></div><!-- m_editable region-id="editable-static-tag-U43527-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class=" Text-Links clearfix colelem shared_content" id="u43527-4" data-muse-uid="U43527" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u43527-4_content"><?php echo get_the_category_list(" , "); ?></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43526-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" --><a class="nonblock nontext  transition clearfix colelem shared_content" id="u43526-4" href="<?php echo get_the_permalink(); ?>" data-muse-uid="U43526" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u43526-4_content"><!-- content --><p><?php echo get_the_title(); ?></p></a><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43523-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class=" clearfix colelem shared_content" id="u43523-3" data-muse-uid="U43523" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u43523-3_content"><?php echo get_the_excerpt(); ?></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43524-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class=" clearfix colelem shared_content" id="u43524-4" data-muse-uid="U43524" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u43524-4_content"><?php echo get_the_date( get_option('date_format')); ?></div><!-- /m_editable --></div></div></li>
      <?php wp_reset_postdata(); ?><?php endif; ?></ul>
      <ul class="AccordionWidget MusexPress-Posts-Template-Container clearfix grpelem" id="accordionu43498" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="paccordionu43520"style=" <?php echo isset($posts_blog[5-1]) ? "" : "; display: none;" ;?> "><?php if(isset($posts_blog[5-1])) : ?><?php global $post; $post = $posts_blog[5-1]; setup_postdata($posts_blog[5-1]); ?><!-- vertical box -->
       <li class="AccordionPanel clearfix colelem" id="u43499"><!-- vertical box --><!-- m_editable region-id="editable-static-tag-U43508-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,clickable" --><div class="AccordionPanelTab clearfix colelem" id="u43508-3" data-muse-uid="U43508" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- content --><p class="shared_content" data-content-guid="u43508-3_0_content">&nbsp;</p></div><!-- /m_editable --><div class="AccordionPanelContent rounded-corners clearfix colelem" id="u43500"><!-- column --><div class="position_content" id="u43500_position_content"><div class=" museBGSize colelem shared_content" id="u43503" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u43503_content"style="<?php $url = wp_get_attachment_url( get_post_thumbnail_id($posts_blog[5-1]->ID) ); echo "background-image: url(".$url.");";?>"mxp-link="<?php echo get_the_permalink($posts_blog[5-1]); ?>"><!-- simple frame --></div><!-- m_editable region-id="editable-static-tag-U43507-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class=" Text-Links clearfix colelem shared_content" id="u43507-4" data-muse-uid="U43507" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u43507-4_content"><?php echo get_the_category_list(" , "); ?></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43504-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" --><a class="nonblock nontext  transition clearfix colelem shared_content" id="u43504-4" href="<?php echo get_the_permalink(); ?>" data-muse-uid="U43504" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u43504-4_content"><!-- content --><p><?php echo get_the_title(); ?></p></a><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43502-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class=" clearfix colelem shared_content" id="u43502-3" data-muse-uid="U43502" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u43502-3_content"><?php echo get_the_excerpt(); ?></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43501-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class=" clearfix colelem shared_content" id="u43501-4" data-muse-uid="U43501" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u43501-4_content"><?php echo get_the_date( get_option('date_format')); ?></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43505" template="blog.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" --><a class="nonblock nontext Button  transition rounded-corners clearfix colelem shared_content" id="buttonu43505" href="<?php echo get_the_permalink(); ?>" data-muse-uid="U43505" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="buttonu43505_content"><!-- container box --><!-- m_editable region-id="editable-static-tag-U43506-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u43506-4" data-muse-uid="U43506" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p>CONTINUE READING</p></div><!-- /m_editable --></a><!-- /m_editable --></div></div></li>
      <?php wp_reset_postdata(); ?><?php endif; ?></ul>
     </div>
     <ul class="AccordionWidget MusexPress-Posts-Template-Container clearfix colelem" id="accordionu43509" data-sizepolicy="fixed" data-pintopage="page_fluidx"style=" <?php echo isset($posts_blog[6-1]) ? "" : "; display: none;" ;?> "><?php if(isset($posts_blog[6-1])) : ?><?php global $post; $post = $posts_blog[6-1]; setup_postdata($posts_blog[6-1]); ?><!-- vertical box -->
      <li class="AccordionPanel clearfix colelem" id="u43510"><!-- vertical box --><!-- m_editable region-id="editable-static-tag-U43519-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,clickable" --><div class="AccordionPanelTab clearfix colelem" id="u43519-3" data-muse-uid="U43519" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- content --><p class="shared_content" data-content-guid="u43519-3_0_content">&nbsp;</p></div><!-- /m_editable --><div class="AccordionPanelContent rounded-corners clearfix colelem" id="u43511"><!-- column --><div class="position_content" id="u43511_position_content"><div class=" museBGSize colelem shared_content" id="u43512" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u43512_content"style="<?php $url = wp_get_attachment_url( get_post_thumbnail_id($posts_blog[6-1]->ID) ); echo "background-image: url(".$url.");";?>"mxp-link="<?php echo get_the_permalink($posts_blog[6-1]); ?>"><!-- simple frame --></div><!-- m_editable region-id="editable-static-tag-U43516-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class=" Text-Links clearfix colelem shared_content" id="u43516-4" data-muse-uid="U43516" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u43516-4_content"><?php echo get_the_category_list(" , "); ?></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43515-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" --><a class="nonblock nontext  transition clearfix colelem shared_content" id="u43515-4" href="<?php echo get_the_permalink(); ?>" data-muse-uid="U43515" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u43515-4_content"><!-- content --><p><?php echo get_the_title(); ?></p></a><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43517-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class=" clearfix colelem shared_content" id="u43517-3" data-muse-uid="U43517" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u43517-3_content"><?php echo get_the_excerpt(); ?></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43518-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class=" clearfix colelem shared_content" id="u43518-4" data-muse-uid="U43518" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u43518-4_content"><?php echo get_the_date( get_option('date_format')); ?></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43513" template="blog.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" --><a class="nonblock nontext Button  transition rounded-corners clearfix colelem shared_content" id="buttonu43513" href="<?php echo get_the_permalink(); ?>" data-muse-uid="U43513" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="buttonu43513_content"><!-- container box --><!-- m_editable region-id="editable-static-tag-U43514-BP_infinity" template="blog.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u43514-4" data-muse-uid="U43514" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p>CONTINUE READING</p></div><!-- /m_editable --></a><!-- /m_editable --></div></div></li>
     <?php wp_reset_postdata(); ?><?php endif; ?></ul>
    </div>
    <div class="verticalspacer" data-offset-top="3177" data-content-above-spacer="3176" data-content-below-spacer="0" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"></div>
   </div>
  </div>
  <div class="breakpoint" id="bp_380" data-max-width="380"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu55170"><!-- group -->
     <span class="rounded-corners placeholder" data-placeholder-for="u55170_content"><!-- placeholder node --></span>
     <span class="Button menuSideSlideNav-Btn transition placeholder" data-placeholder-for="buttonu55180_content"><!-- placeholder node --></span>
     <span class="Button menuSideSlideNavLeft rgba-background clearfix placeholder" data-placeholder-for="buttonu55153_content"><!-- placeholder node --></span>
     <div class="Button menuSideSlideNavLeft clearfix temp_no_id" data-orig-id="buttonu55196"><!-- container box -->
      <div class="menuSideSlideNavBG clearfix grpelem temp_no_id" data-orig-id="u55197"><!-- column -->
       <span class="clearfix colelem placeholder" data-placeholder-for="u55199_content"><!-- placeholder node --></span>
       <span class="clip_frame colelem placeholder" data-placeholder-for="u55204_content"><!-- placeholder node --></span>
      </div>
      <span class="clearfix grpelem placeholder" data-placeholder-for="u55198-4_content"><!-- placeholder node --></span>
     </div>
    </div>
    <div class="clearfix grpelem temp_no_id" data-orig-id="ppaccordionu43470"><!-- column -->
     <div class="clearfix colelem temp_no_id" data-orig-id="paccordionu43470"><!-- group -->
      <ul class="AccordionWidget MusexPress-Posts-Template-Container clearfix grpelem temp_no_id" data-visibility="changed" style="visibility:hidden" data-orig-id="accordionu43470"><?php if(isset($posts_blog[1-1])) : ?><?php global $post; $post = $posts_blog[1-1]; setup_postdata($posts_blog[1-1]); ?><!-- vertical box -->
       <li class="AccordionPanel borderbox clearfix colelem temp_no_id" data-orig-id="u43471"><!-- vertical box --><!-- m_editable region-id="editable-static-tag-U43472-BP_380" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,clickable,txtStyleTarget" --><div class="AccordionPanelTab borderbox clearfix colelem temp_no_id" data-muse-uid="U43472" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-orig-id="u43472-3"><!-- content --><span class="placeholder" data-placeholder-for="u43472-3_0_content"><!-- placeholder node --></span></div><!-- /m_editable --><div class="AccordionPanelContent borderbox clearfix colelem temp_no_id" data-orig-id="u43473"><!-- column --><span class="museBGSize  clearfix colelem placeholder" data-placeholder-for="u43480_content"><!-- placeholder node --></span><!-- m_editable region-id="editable-static-tag-U43476-BP_380" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><span class=" clearfix colelem placeholder" data-placeholder-for="u43476-4_content"><!-- placeholder node --></span><!-- /m_editable --></div></li>
      <?php wp_reset_postdata(); ?><?php endif; ?></ul>
      <span class="size_fixed grpelem placeholder" data-placeholder-for="u43483_content"><!-- placeholder node --></span>
     </div>
     <!-- m_editable region-id="editable-static-tag-U43485-BP_380" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
     <span class="heading1 clearfix colelem placeholder" data-placeholder-for="u43485-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U43484-BP_380" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
     <span class="body1 clearfix colelem placeholder" data-placeholder-for="u43484-3_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <div class="clearfix colelem" id="ppaccordionu43529"><!-- group -->
      <div class="clearfix grpelem temp_no_id" data-orig-id="paccordionu43529"><!-- column -->
       <ul class="AccordionWidget MusexPress-Posts-Template-Container clearfix colelem temp_no_id" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="paccordionu43529" data-orig-id="accordionu43529"><?php if(isset($posts_blog[2-1])) : ?><?php global $post; $post = $posts_blog[2-1]; setup_postdata($posts_blog[2-1]); ?><!-- vertical box -->
        <li class="AccordionPanel clearfix colelem temp_no_id" data-orig-id="u43530"><!-- vertical box --><!-- m_editable region-id="editable-static-tag-U43531-BP_380" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,clickable" --><div class="AccordionPanelTab clearfix colelem temp_no_id" data-muse-uid="U43531" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-orig-id="u43531-3"><!-- content --><span class="placeholder" data-placeholder-for="u43531-3_0_content"><!-- placeholder node --></span></div><!-- /m_editable --><div class="AccordionPanelContent clearfix colelem temp_no_id" data-orig-id="u43532"><!-- group --><span class=" museBGSize clearfix grpelem placeholder" data-placeholder-for="u43534_content"><!-- placeholder node --></span></div></li>
       <?php wp_reset_postdata(); ?><?php endif; ?></ul>
       <ul class="AccordionWidget MusexPress-Posts-Template-Container clearfix colelem temp_no_id" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="paccordionu43529" data-orig-id="accordionu43537"><?php if(isset($posts_blog[3-1])) : ?><?php global $post; $post = $posts_blog[3-1]; setup_postdata($posts_blog[3-1]); ?><!-- vertical box -->
        <li class="AccordionPanel clearfix colelem temp_no_id" data-orig-id="u43538"><!-- vertical box --><!-- m_editable region-id="editable-static-tag-U43544-BP_380" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,clickable" --><div class="AccordionPanelTab clearfix colelem temp_no_id" data-muse-uid="U43544" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-orig-id="u43544-3"><!-- content --><span class="placeholder" data-placeholder-for="u43544-3_0_content"><!-- placeholder node --></span></div><!-- /m_editable --><div class="AccordionPanelContent clearfix colelem temp_no_id" data-orig-id="u43539"><!-- group --><span class=" museBGSize clearfix grpelem placeholder" data-placeholder-for="u43541_content"><!-- placeholder node --></span></div></li>
       <?php wp_reset_postdata(); ?><?php endif; ?></ul>
      </div>
      <span class="size_fixed grpelem placeholder" data-placeholder-for="u43486_content"><!-- placeholder node --></span>
      <ul class="AccordionWidget MusexPress-Posts-Template-Container clearfix grpelem temp_no_id" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-orig-id="accordionu43487"><?php if(isset($posts_blog[1-1])) : ?><?php global $post; $post = $posts_blog[1-1]; setup_postdata($posts_blog[1-1]); ?><!-- vertical box -->
       <li class="AccordionPanel clearfix colelem temp_no_id" data-orig-id="u43488"><!-- vertical box --><!-- m_editable region-id="editable-static-tag-U43489-BP_380" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,clickable" --><div class="AccordionPanelTab clearfix colelem temp_no_id" data-muse-uid="U43489" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-orig-id="u43489-3"><!-- content --><span class="placeholder" data-placeholder-for="u43489-3_0_content"><!-- placeholder node --></span></div><!-- /m_editable --><div class="AccordionPanelContent rounded-corners clearfix colelem temp_no_id" data-orig-id="u43490"><!-- column --><div class="position_content temp_no_id" data-orig-id="u43490_position_content"><span class=" museBGSize colelem placeholder" data-placeholder-for="u43497_content"><!-- placeholder node --></span><!-- m_editable region-id="editable-static-tag-U43496-BP_380" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><span class=" Text-Links clearfix colelem placeholder" data-placeholder-for="u43496-4_content"><!-- placeholder node --></span><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43495-BP_380" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" --><span class="nonblock nontext  transition clearfix colelem placeholder" data-placeholder-for="u43495-4_content"><!-- placeholder node --></span><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43494-BP_380" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><span class=" clearfix colelem placeholder" data-placeholder-for="u43494-3_content"><!-- placeholder node --></span><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43493-BP_380" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><span class=" clearfix colelem placeholder" data-placeholder-for="u43493-4_content"><!-- placeholder node --></span><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43491" template="blog.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" --><span class="nonblock nontext Button  transition rounded-corners clearfix colelem placeholder" data-placeholder-for="buttonu43491_content"><!-- placeholder node --></span><!-- /m_editable --></div></div></li>
      <?php wp_reset_postdata(); ?><?php endif; ?></ul>
     </div>
     <div class="clearfix colelem temp_no_id" data-orig-id="paccordionu43520"><!-- group -->
      <ul class="AccordionWidget MusexPress-Posts-Template-Container clearfix grpelem temp_no_id" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="paccordionu43520" data-orig-id="accordionu43520"><?php if(isset($posts_blog[4-1])) : ?><?php global $post; $post = $posts_blog[4-1]; setup_postdata($posts_blog[4-1]); ?><!-- vertical box -->
       <li class="AccordionPanel clearfix colelem temp_no_id" data-orig-id="u43521"><!-- vertical box --><!-- m_editable region-id="editable-static-tag-U43528-BP_380" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,clickable" --><div class="AccordionPanelTab clearfix colelem temp_no_id" data-muse-uid="U43528" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-orig-id="u43528-3"><!-- content --><span class="placeholder" data-placeholder-for="u43528-3_0_content"><!-- placeholder node --></span></div><!-- /m_editable --><div class="AccordionPanelContent rounded-corners clearfix colelem temp_no_id" data-orig-id="u43522"><!-- column --><div class="position_content temp_no_id" data-orig-id="u43522_position_content"><span class=" museBGSize colelem placeholder" data-placeholder-for="u43525_content"><!-- placeholder node --></span><!-- m_editable region-id="editable-static-tag-U43527-BP_380" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><span class=" Text-Links clearfix colelem placeholder" data-placeholder-for="u43527-4_content"><!-- placeholder node --></span><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43526-BP_380" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" --><span class="nonblock nontext  transition clearfix colelem placeholder" data-placeholder-for="u43526-4_content"><!-- placeholder node --></span><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43523-BP_380" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><span class=" clearfix colelem placeholder" data-placeholder-for="u43523-3_content"><!-- placeholder node --></span><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43524-BP_380" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><span class=" clearfix colelem placeholder" data-placeholder-for="u43524-4_content"><!-- placeholder node --></span><!-- /m_editable --></div></div></li>
      <?php wp_reset_postdata(); ?><?php endif; ?></ul>
      <ul class="AccordionWidget MusexPress-Posts-Template-Container clearfix grpelem temp_no_id" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="paccordionu43520" data-orig-id="accordionu43498"><?php if(isset($posts_blog[5-1])) : ?><?php global $post; $post = $posts_blog[5-1]; setup_postdata($posts_blog[5-1]); ?><!-- vertical box -->
       <li class="AccordionPanel clearfix colelem temp_no_id" data-orig-id="u43499"><!-- vertical box --><!-- m_editable region-id="editable-static-tag-U43508-BP_380" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,clickable" --><div class="AccordionPanelTab clearfix colelem temp_no_id" data-muse-uid="U43508" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-orig-id="u43508-3"><!-- content --><span class="placeholder" data-placeholder-for="u43508-3_0_content"><!-- placeholder node --></span></div><!-- /m_editable --><div class="AccordionPanelContent rounded-corners clearfix colelem temp_no_id" data-orig-id="u43500"><!-- column --><div class="position_content temp_no_id" data-orig-id="u43500_position_content"><span class=" museBGSize colelem placeholder" data-placeholder-for="u43503_content"><!-- placeholder node --></span><!-- m_editable region-id="editable-static-tag-U43507-BP_380" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><span class=" Text-Links clearfix colelem placeholder" data-placeholder-for="u43507-4_content"><!-- placeholder node --></span><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43504-BP_380" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" --><span class="nonblock nontext  transition clearfix colelem placeholder" data-placeholder-for="u43504-4_content"><!-- placeholder node --></span><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43502-BP_380" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><span class=" clearfix colelem placeholder" data-placeholder-for="u43502-3_content"><!-- placeholder node --></span><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43501-BP_380" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><span class=" clearfix colelem placeholder" data-placeholder-for="u43501-4_content"><!-- placeholder node --></span><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43505" template="blog.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" --><span class="nonblock nontext Button  transition rounded-corners clearfix colelem placeholder" data-placeholder-for="buttonu43505_content"><!-- placeholder node --></span><!-- /m_editable --></div></div></li>
      <?php wp_reset_postdata(); ?><?php endif; ?></ul>
     </div>
     <ul class="AccordionWidget MusexPress-Posts-Template-Container clearfix colelem temp_no_id" data-sizepolicy="fixed" data-pintopage="page_fluidx" data-orig-id="accordionu43509"><?php if(isset($posts_blog[6-1])) : ?><?php global $post; $post = $posts_blog[6-1]; setup_postdata($posts_blog[6-1]); ?><!-- vertical box -->
      <li class="AccordionPanel clearfix colelem temp_no_id" data-orig-id="u43510"><!-- vertical box --><!-- m_editable region-id="editable-static-tag-U43519-BP_380" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,clickable" --><div class="AccordionPanelTab clearfix colelem temp_no_id" data-muse-uid="U43519" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-orig-id="u43519-3"><!-- content --><span class="placeholder" data-placeholder-for="u43519-3_0_content"><!-- placeholder node --></span></div><!-- /m_editable --><div class="AccordionPanelContent rounded-corners clearfix colelem temp_no_id" data-orig-id="u43511"><!-- column --><div class="position_content temp_no_id" data-orig-id="u43511_position_content"><span class=" museBGSize colelem placeholder" data-placeholder-for="u43512_content"><!-- placeholder node --></span><!-- m_editable region-id="editable-static-tag-U43516-BP_380" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><span class=" Text-Links clearfix colelem placeholder" data-placeholder-for="u43516-4_content"><!-- placeholder node --></span><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43515-BP_380" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" --><span class="nonblock nontext  transition clearfix colelem placeholder" data-placeholder-for="u43515-4_content"><!-- placeholder node --></span><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43517-BP_380" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><span class=" clearfix colelem placeholder" data-placeholder-for="u43517-3_content"><!-- placeholder node --></span><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43518-BP_380" template="blog.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><span class=" clearfix colelem placeholder" data-placeholder-for="u43518-4_content"><!-- placeholder node --></span><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U43513" template="blog.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" --><span class="nonblock nontext Button  transition rounded-corners clearfix colelem placeholder" data-placeholder-for="buttonu43513_content"><!-- placeholder node --></span><!-- /m_editable --></div></div></li>
     <?php wp_reset_postdata(); ?><?php endif; ?></ul>
    </div>
    <div class="verticalspacer" data-offset-top="3442" data-content-above-spacer="3441" data-content-below-spacer="0" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"></div>
   </div>
  </div>
  <!-- JS includes -->
  <script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 
   
</script>
  <script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 
   
</script>
  <!-- Other scripts -->
  <script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 
   // Decide whether to suppress missing file error or not based on preference setting
var suppressMissingFileError = true
</script>
  <script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 
   window.Muse.assets.check=function(c){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},d=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},f=function(f){for(var g=document.getElementsByTagName("link"),j=0;j<g.length;j++)if("text/css"==g[j].type){var l=(g[j].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!l||!l[1]||!l[2])break;b[l[1]]=l[2]}g=document.createElement("div");g.className="version";g.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(g);for(j=0;j<Muse.assets.required.length;){var l=Muse.assets.required[j],k=l.match(/([\w\-\.]+)\.(\w+)$/),i=k&&k[1]?
k[1]:null,k=k&&k[2]?k[2]:null;switch(k.toLowerCase()){case "css":i=i.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");g.className+=" "+i;i=a(d(g,"color"));k=a(d(g,"backgroundColor"));i!=0||k!=0?(Muse.assets.required.splice(j,1),"undefined"!=typeof b[l]&&(i!=b[l]>>>24||k!=(b[l]&16777215))&&Muse.assets.outOfDate.push(l)):j++;g.className="version";break;case "js":j++;break;default:throw Error("Unsupported file type: "+k);}}c?c().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");
g.parentNode.removeChild(g);if(Muse.assets.outOfDate.length||Muse.assets.required.length)g="Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.",f&&Muse.assets.outOfDate.length&&(g+="\nOut of date: "+Muse.assets.outOfDate.join(",")),f&&Muse.assets.required.length&&(g+="\nMissing: "+Muse.assets.required.join(",")),suppressMissingFileError?(g+="\nUse SuppressMissingFileError key in AppPrefs.xml to show missing file error pop up.",console.log(g)):alert(g)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?
setTimeout(function(){f(!0)},5E3):f()}};
var muse_init=function(){require.config({baseUrl:"//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/"});require(["jquery","museutils","whatinput","jquery.musepolyfill.bgsize","webpro","musewpdisclosure","jquery.watch","jquery.museresponsive"],function(c){var $ = c;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.makeButtonsVisibleAfterSettingMinWidth();/* body */
Muse.Utils.initWidget('#accordionu43470', ['#bp_infinity', '#bp_380'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:false,defaultIndex:0}); });/* #accordionu43470 */
Muse.Utils.initWidget('#accordionu43487', ['#bp_infinity', '#bp_380'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:false,defaultIndex:0}); });/* #accordionu43487 */
Muse.Utils.initWidget('#accordionu43529', ['#bp_infinity', '#bp_380'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:false,defaultIndex:0}); });/* #accordionu43529 */
Muse.Utils.initWidget('#accordionu43537', ['#bp_infinity', '#bp_380'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:false,defaultIndex:0}); });/* #accordionu43537 */
Muse.Utils.initWidget('#accordionu43520', ['#bp_infinity', '#bp_380'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:false,defaultIndex:0}); });/* #accordionu43520 */
Muse.Utils.initWidget('#accordionu43498', ['#bp_infinity', '#bp_380'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:false,defaultIndex:0}); });/* #accordionu43498 */
Muse.Utils.initWidget('#accordionu43509', ['#bp_infinity', '#bp_380'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:false,defaultIndex:0}); });/* #accordionu43509 */
Muse.Utils.fullPage('#page');/* 100% height page */
$( '.breakpoint' ).registerBreakpoint();/* Register breakpoints */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/scripts/require.js?crc=7928878" type="text/javascript" async data-main="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/scripts/museconfig.js?crc=310584261" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();">if( window.jQuery ){ var $ = jQuery.noConflict(); } </script>
  
  <!--HTML Widget code-->
  

<script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 

	jQuery(document).ready(function () {

	   jQuery('body').on('click','[mxp-link]',function(){
		 	var link = jQuery(this).attr('mxp-link');
			window.location.href = link;
		 });

	});

</script>

	
   <?php
wp_footer();
?></body>
</html>
