<?php
/* Template Name: index */ 
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
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.musepolyfill.bgsize.js", "webpro.js", "musewpdisclosure.js", "musewpslideshow.js", "jquery.museoverlay.js", "touchswipe.js", "jquery.watch.js", "jquery.museresponsive.js", "require.js", "index.css"], "outOfDate":[]};
</script>
  
  
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/css/site_global.css?crc=416700763"/>
  <link rel="stylesheet" type="text/css" href="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/css/master_a-master.css?crc=4155914511"/>
  <link rel="stylesheet" type="text/css" href="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/css/index.css?crc=4134456260" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_index.css?crc=3824530138"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_preview_master_a-master.css?crc=4205201619"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_index.css?crc=508580395" id="nomq_pagesheet"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 
   var __adobewebfontsappname__ = "muse";
</script>
  <!-- JS includes -->
  <script src="//webfonts.creativecloud.com/pt-mono:n4:default;abril-fatface:i4:default;raleway:n4,n7,n9:default.js" type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } </script>
    <!--custom head HTML-->
  <style> html, body { max-width: 100%; overflow-x: hidden; } </style><script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">if( window.jQuery ){ var $ = jQuery.noConflict(); } </script><link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/hover.css/2.0.2/css/hover-min.css"><link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css"><script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js">if( window.jQuery ){ var $ = jQuery.noConflict(); } </script><script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js">if( window.jQuery ){ var $ = jQuery.noConflict(); } </script><script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js">if( window.jQuery ){ var $ = jQuery.noConflict(); } </script><script type="text/javascript" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/assets/animationjs.js">if( window.jQuery ){ var $ = jQuery.noConflict(); } </script><link rel="stylesheet" type="text/css" href="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/assets/animationcss.css"/><script type="text/javascript" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/assets/parallax.js">if( window.jQuery ){ var $ = jQuery.noConflict(); } </script><script type="text/javascript" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/assets/parallaxmove.js">if( window.jQuery ){ var $ = jQuery.noConflict(); } </script><script type="text/javascript" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/assets/typewriter.min.js">if( window.jQuery ){ var $ = jQuery.noConflict(); } </script>
  <!--HTML Widget code-->
  
<style type="text/css">#u56451.size_fluid_width_height iframe { position:absolute; left:0; top:0; }</style>


				<script>if( window.jQuery ){ var $ = jQuery.noConflict(); } 
				<?php
								  $cats_name = '';
									$cats_name = trim($cats_name);

									$args = array(
											'posts_per_page'   => 6,
											'offset'           => 1,
											'category'         => '',
											'category_name'    => $cats_name,
											'orderby'          => 'modified',
											'order'            => 'DESC',
											'post_type'        => 'post',
											'post_status'      => 'publish',
											'suppress_filters' => true

									);

									//array di post
									$posts_query_blog = new WP_Query( $args );

									$posts_blog = $posts_query_blog->posts;
						 wp_reset_query(); ?>
		</script>
		<style>
			div[mxp-link]{
				cursor: pointer;
			}
			.MusexPress-Posts-Template-Container .AccordionPanelTab{
				visibility: hidden;
			}
		</style>
				
  <!--/*

*/
-->
 <?php
wp_enqueue_script("jquery");
wp_head();
?></head>
 <body class=" <?php echo implode(" ", get_body_class()); ?>"><script>if( window.jQuery ){ var $ = jQuery.noConflict(); }</script>

  <div class="breakpoint active" id="bp_infinity" data-min-width="381"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox" id="page"><!-- group -->
    <div class="clearfix grpelem" id="pu28539"><!-- group -->
     <div class="rounded-corners shared_content" id="u28539" data-content-guid="u28539_content"><!-- simple frame --></div>
     <div class="Button menuSideSlideNav-Btn transition shared_content" id="buttonu28599" data-content-guid="buttonu28599_content"><!-- container box --></div>
     <div class="Button menuSideSlideNavLeft rgba-background clearfix" id="buttonu28600"><!-- container box -->
      <div class="menuSideSlideNavBG grpelem shared_content" id="u28615" data-content-guid="u28615_content"><!-- simple frame --></div>
      <a class="nonblock nontext Button transition clearfix grpelem shared_content" id="buttonu28607" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#experience" data-href="anchor:U82:U18912" data-visibility="changed" style="visibility:hidden" data-content-guid="buttonu28607_content"><!-- container box --><div class="wow-fadeInDown clearfix grpelem" id="u28608-4" title="Layer_9" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content --><p>Experience</p></div></a>
      <a class="nonblock nontext Button transition clearfix grpelem shared_content" id="buttonu28601" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#portfolio" data-href="anchor:U82:U18915" data-visibility="changed" style="visibility:hidden" data-content-guid="buttonu28601_content"><!-- container box --><div class="wow-fadeInDown clearfix grpelem" id="u28602-4" title="Layer_9" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content --><p>Portfolio</p></div></a>
      <a class="nonblock nontext Button transition clearfix grpelem shared_content" id="buttonu28616" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#skills" data-href="anchor:U82:U18918" data-visibility="changed" style="visibility:hidden" data-content-guid="buttonu28616_content"><!-- container box --><div class="wow-fadeInDown clearfix grpelem" id="u28617-4" title="Layer_9" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content --><p>Skills</p></div></a>
      <a class="nonblock nontext Button transition clearfix grpelem shared_content" id="buttonu28620" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#blog" data-href="anchor:U82:U42317" data-visibility="changed" style="visibility:hidden" data-content-guid="buttonu28620_content"><!-- container box --><div class="wow-fadeInDown clearfix grpelem" id="u28621-4" title="Layer_9" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content --><p>Blog</p></div></a>
      <a class="nonblock nontext Button transition clearfix grpelem shared_content" id="buttonu28611" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#service" data-href="anchor:U82:U18909" data-visibility="changed" style="visibility:hidden" data-content-guid="buttonu28611_content"><!-- container box --><div class="wow-fadeInDown clearfix grpelem" id="u28612-4" title="Layer_9" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content --><p>Service</p></div></a>
      <a class="nonblock nontext Button anim_swing transition clearfix grpelem shared_content" id="buttonu28613" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#about-me" data-href="anchor:U82:U12310" data-visibility="changed" style="visibility:hidden" data-content-guid="buttonu28613_content"><!-- container box --><div class="wow-fadeInDown clearfix grpelem" id="u28614-4" title="Layer_9" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content --><p>About me</p></div></a>
      <a class="nonblock nontext Button transition clearfix grpelem shared_content" id="buttonu44185" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#contact" data-href="anchor:U82:U18924" data-visibility="changed" style="visibility:hidden" data-content-guid="buttonu44185_content"><!-- container box --><div class="wow-fadeInDown clearfix grpelem" id="u44186-4" title="Layer_9" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content --><p>Contact me</p></div></a>
      <div class="Button menuSideSlideNavLeft clearfix grpelem" id="buttonu28628" data-sizepolicy="fixed" data-pintopage="page_fluidx"><!-- container box -->
       <div class="menuSideSlideNavBG clearfix grpelem" id="u28636"><!-- column -->
        <div class="clip_frame colelem shared_content" id="u28634" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u28634_content"><!-- image -->
         <img class="block temp_no_img_src" id="u28634_img" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/logo%20ver%203.png?crc=4064509805" alt="" width="50" height="50" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
        </div>
        <div class="clearfix colelem shared_content" id="u28629" data-content-guid="u28629_content"><!-- group -->
         <div class="menuSideSlideNav-Btn rounded-corners grpelem" id="u28633" data-sizepolicy="fixed" data-pintopage="page_fluidx"><!-- simple frame --></div>
         <div class="clearfix grpelem" id="u28630"><!-- group -->
          <div class="menuSideSlideNav-Btn grpelem" id="u28631" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.7071,M12=-0.7071,M21=0.7071,M22=0.7071,SizingMethod='auto expand')" data-mu-ie-matrix-dx="2" data-mu-ie-matrix-dy="-7"><!-- simple frame --></div>
          <div class="menuSideSlideNav-Btn grpelem" id="u28632" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=-0.7071,M12=-0.7071,M21=0.7071,M22=-0.7071,SizingMethod='auto expand')" data-mu-ie-matrix-dx="2" data-mu-ie-matrix-dy="-7"><!-- simple frame --></div>
         </div>
        </div>
       </div>
       <div class="clearfix grpelem shared_content" id="u28637-4" data-ibe-flags="txtStyleSrc" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0,M12=1,M21=-1,M22=0,SizingMethod='auto expand')" data-mu-ie-matrix-dx="103" data-mu-ie-matrix-dy="-103" data-content-guid="u28637-4_content"><!-- content -->
        <p>CREATIVE VIBE</p>
       </div>
      </div>
     </div>
     <div class="Button translateRight clearfix" id="buttonu48912"><!-- container box -->
      <div class="clip_frame grpelem" id="u54692"><!-- image -->
       <img class="block temp_no_img_src" id="u54692_img" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/fb.png?crc=400507023" alt="" data-heightwidthratio="1" data-image-width="22" data-image-height="22" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
      </div>
      <div class="grpelem" id="u46387"><!-- custom html -->
       <iframe src="//www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCreative-Vibe-1337981909636937&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId=333211160470273" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
      </div>
      <div class="clearfix grpelem" id="u48913"><!-- group -->
       <div class="rounded-corners grpelem" id="u48918" data-sizepolicy="fixed" data-pintopage="page_fluidx"><!-- simple frame --></div>
       <div class="rounded-corners grpelem" id="u48917" data-sizepolicy="fixed" data-pintopage="page_fluidx"><!-- simple frame --></div>
      </div>
     </div>
    </div>
    <div class="clearfix grpelem" id="pu57957"><!-- column -->
     <div class="gradient clearfix colelem" id="u57957"><!-- group -->
      <div class="grpelem" id="u57951" title="Layer_6" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- simple frame --></div>
      <div class="Button clearfix grpelem" id="buttonu57893" title="Parallax" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- container box -->
       <div class="clearfix grpelem" id="u57897"><!-- group -->
        <!-- m_editable region-id="editable-static-tag-U57898-BP_infinity" template="index.html" data-type="image" -->
        <div class="clip_frame grpelem" id="u57898" data-muse-uid="U57898" data-muse-type="img_frame" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- image -->
         <img class="block temp_no_img_src" id="u57898_img" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/4c0a1107.jpg?crc=150214179" alt="" title="Layer_4" width="537" height="806" data-muse-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/4c0a1107.jpg?crc=150214179" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U57900-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
        <div class="clearfix grpelem shared_content" id="u57900-4" title="Layer_6" data-muse-uid="U57900" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u57900-4_content"><!-- content -->
         <p id="u57900-2">VIBE</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U57902-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
        <div class="clearfix grpelem shared_content" id="u57902-4" title="Layer_9" data-muse-uid="U57902" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u57902-4_content"><!-- content -->
         <p id="u57902-2">CREATIVE</p>
        </div>
        <!-- /m_editable -->
       </div>
       <!-- m_editable region-id="editable-static-tag-U57894-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
       <div class="clearfix grpelem shared_content" id="u57894-5" title="Layer_4" data-muse-uid="U57894" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u57894-5_content"><!-- content -->
        <p id="u57894-3"><span id="u57894">Robert </span><span id="u57894-2">Que</span></p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U57895-BP_infinity" template="index.html" data-type="image" data-ice-options="clickable" data-ice-editable="link" -->
       <a class="nonblock nontext anim_swing pulses clip_frame grpelem" id="u57895" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#about-me" data-href="anchor:U82:U12310" data-muse-uid="U57895" data-muse-type="img_frame" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- image --><img class="block temp_no_img_src" id="u57895_img" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/arrow.png?crc=3924973439" alt="" width="31" height="31" data-muse-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/arrow.png?crc=3924973439" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/></a>
       <!-- /m_editable -->
      </div>
      <a class="anchor_item grpelem shared_content" id="home_page" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-content-guid="home_page_content"></a>
     </div>
     <div class="clearfix colelem" id="pu10174"><!-- group -->
      <div class="browser_width grpelem" id="u10174-bw">
       <div id="u10174"><!-- column -->
        <div class="clearfix" id="u10174_align_to_page">
         <div class="position_content" id="u10174_position_content">
          <!-- m_editable region-id="editable-static-tag-U12550-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="wow-fadeInUp clearfix colelem shared_content" id="u12550-4" data-muse-uid="U12550" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u12550-4_content"><!-- content -->
           <p id="u12550-2">Being creative is a way of life</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U12351-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="wow-fadeInUpDelay400ms clearfix colelem shared_content" id="u12351-7" data-muse-uid="U12351" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u12351-7_content"><!-- content -->
           <p id="u12351-2">Creativity is both ingenuity, discovery, originality, innovation as well as experimentation. And although it seems complicated and intricate, it is not. Creativity does not require any effort but only a free dreamy and relaxed mind ...</p>
           <p id="u12351-3">&nbsp;</p>
           <p id="u12351-5">I can write a lot about this side effect with all conviction.</p>
          </div>
          <!-- /m_editable -->
          <div class="clearfix colelem" id="u12473"><!-- column -->
           <!-- m_editable region-id="editable-static-tag-U12435" template="index.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
           <a class="nonblock nontext Button anim_swing transition clearfix colelem" id="buttonu12435" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#about-me" data-href="anchor:U82:U12310" data-rotate="270.00" data-muse-uid="U12435" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0,M12=1,M21=-1,M22=0,SizingMethod='auto expand')" data-mu-ie-matrix-dx="-1" data-mu-ie-matrix-dy="0" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- container box --><!-- m_editable region-id="editable-static-tag-U12430-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="wow-fadeInUpDelay400ms clearfix grpelem" id="u12430-4" data-muse-uid="U12430" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p>02</p></div><!-- /m_editable --></a>
           <!-- /m_editable -->
           <div class="colelem" id="u12464" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0,M12=1,M21=-1,M22=0,SizingMethod='auto expand')" data-mu-ie-matrix-dx="21" data-mu-ie-matrix-dy="-21" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- simple frame --></div>
           <!-- m_editable region-id="editable-static-tag-U12454" template="index.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
           <a class="nonblock nontext Button anim_swing transition clearfix colelem" id="buttonu12454" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#service" data-href="anchor:U82:U18909" data-rotate="270.00" data-muse-uid="U12454" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0,M12=1,M21=-1,M22=0,SizingMethod='auto expand')" data-mu-ie-matrix-dx="34" data-mu-ie-matrix-dy="-34" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- container box --><!-- m_editable region-id="editable-static-tag-U12455-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="wow-fadeInUpDelay400ms clearfix grpelem" id="u12455-4" data-muse-uid="U12455" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content --><p>Service</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U12470-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="wow-fadeInUpDelay400ms clearfix grpelem" id="u12470-4" data-muse-uid="U12470" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content --><p>03</p></div><!-- /m_editable --></a>
           <!-- /m_editable -->
          </div>
          <div class="clearfix colelem" id="pu36753"><!-- group -->
           <div class="grpelem" id="u36753" data-sizepolicy="fluidWidth" data-pintopage="page_fixedRight"><!-- simple frame --></div>
           <div class="museBGSize clearfix grpelem" id="u14976"><!-- column -->
            <div class="position_content" id="u14976_position_content">
             <a class="anchor_item colelem shared_content" id="service" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-content-guid="service_content"></a>
             <div class="clearfix colelem" id="pu12606-5"><!-- group -->
              <!-- m_editable region-id="editable-static-tag-U12606-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" -->
              <div class="wow-flipInX clearfix grpelem" id="u12606-5" data-muse-uid="U12606" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedRight"><!-- content -->
               <p id="u12606-3"><span id="u12606">Servic</span>e</p>
              </div>
              <!-- /m_editable -->
              <div class="clearfix grpelem" id="u12577"><!-- group -->
               <!-- m_editable region-id="editable-static-tag-U12582" template="index.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
               <a class="nonblock nontext Button anim_swing transition clearfix grpelem" id="buttonu12582" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#service" data-href="anchor:U82:U18909" data-muse-uid="U12582" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- container box --><!-- m_editable region-id="editable-static-tag-U12583-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="wow-fadeInUpDelay400ms clearfix grpelem" id="u12583-4" data-muse-uid="U12583" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p>03</p></div><!-- /m_editable --></a>
               <!-- /m_editable -->
               <div class="grpelem" id="u12581" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- simple frame --></div>
               <!-- m_editable region-id="editable-static-tag-U12578" template="index.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
               <a class="nonblock nontext Button transition clearfix grpelem" id="buttonu12578" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#experience" data-href="anchor:U82:U18912" data-muse-uid="U12578" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- container box --><!-- m_editable region-id="editable-static-tag-U12580-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="wow-fadeInUpDelay400ms clearfix grpelem" id="u12580-4" data-muse-uid="U12580" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content --><p>04</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U12579-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="wow-fadeInUpDelay400ms clearfix grpelem" id="u12579-4" data-muse-uid="U12579" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content --><p>Experience</p></div><!-- /m_editable --></a>
               <!-- /m_editable -->
              </div>
              <!-- m_editable region-id="editable-static-tag-U12555-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
              <div class="Hometitle clearfix grpelem shared_content" id="u12555-4" data-muse-uid="U12555" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u12555-4_content"><!-- content -->
               <p id="u12555-2">What I can</p>
              </div>
              <!-- /m_editable -->
              <!-- m_editable region-id="editable-static-tag-U12556-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
              <div class="Hometitle clearfix grpelem shared_content" id="u12556-4" data-muse-uid="U12556" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u12556-4_content"><!-- content -->
               <p id="u12556-2">The bunch of my skills that can be useful in projects.</p>
              </div>
              <!-- /m_editable -->
             </div>
             <div class="clearfix colelem" id="pu21524"><!-- group -->
              <div class="clearfix grpelem" id="u21524"><!-- group -->
               <div class="wow-fadeInLeft rounded-corners clearfix grpelem" id="u14537"><!-- group -->
                <div class="wow-fadeInLeft clip_frame grpelem" id="u16295" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- svg -->
                 <img class="svg temp_no_img_src" id="u16293" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted-svg-3516x345.svg?crc=251218904" width="32" height="32" alt="" data-mu-svgfallback="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted%20svg%203516x345_poster_.png?crc=5761938" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
                </div>
               </div>
              </div>
              <div class="clearfix grpelem" id="u21532"><!-- group -->
               <div class="wow-fadeInUp rounded-corners clearfix grpelem" id="u14758"><!-- group -->
                <div class="wow-fadeInUp clip_frame grpelem" id="u16315" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- svg -->
                 <img class="svg temp_no_img_src" id="u16313" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted-svg-2577x194.svg?crc=270274859" width="39" height="31" alt="" data-mu-svgfallback="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted%20svg%202577x194_poster_.png?crc=28861627" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
                </div>
               </div>
              </div>
              <div class="clearfix grpelem" id="u21528"><!-- group -->
               <div class="wow-fadeInRight rounded-corners clearfix grpelem" id="u14764"><!-- group -->
                <div class="wow-fadeInRight clip_frame grpelem" id="u16235" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- svg -->
                 <img class="svg temp_no_img_src" id="u16233" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted-svg-4271x481.svg?crc=161071075" width="36" height="42" alt="" data-mu-svgfallback="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted%20svg%204271x481_poster_.png?crc=3813368301" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
                </div>
               </div>
              </div>
             </div>
             <div class="clearfix colelem" id="pu14513-6"><!-- group -->
              <!-- m_editable region-id="editable-static-tag-U14513-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
              <div class="wow-fadeInLeft clearfix grpelem shared_content" id="u14513-6" data-muse-uid="U14513" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u14513-6_content"><!-- content -->
               <p id="u14513-2">WEB DESIGN</p>
               <p id="u14513-4">I have done some interesting projects that are in line with current trends in web design.</p>
              </div>
              <!-- /m_editable -->
              <!-- m_editable region-id="editable-static-tag-U14728-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
              <div class="wow-fadeInUp clearfix grpelem shared_content" id="u14728-6" data-muse-uid="U14728" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u14728-6_content"><!-- content -->
               <p id="u14728-2">VIDEO EDITION</p>
               <p id="u14728-4">My passion for creating movies continues to grow :)</p>
              </div>
              <!-- /m_editable -->
              <!-- m_editable region-id="editable-static-tag-U14734-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
              <div class="wow-fadeInRight clearfix grpelem shared_content" id="u14734-6" data-muse-uid="U14734" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u14734-6_content"><!-- content -->
               <p id="u14734-2">DIGITAL MARKETING</p>
               <p id="u14734-4">The knowledge gained thanks to Google Digital Garage brings fruits in the form of the online opportunities that I am currently taking advantage of.</p>
              </div>
              <!-- /m_editable -->
             </div>
             <div class="clearfix colelem" id="pu21540"><!-- group -->
              <div class="clearfix grpelem" id="u21540"><!-- group -->
               <div class="wow-fadeInLeft rounded-corners clearfix grpelem" id="u14742"><!-- group -->
                <div class="wow-fadeInLeft clip_frame grpelem" id="u16305" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- svg -->
                 <img class="svg temp_no_img_src" id="u16303" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted-svg-5351x535.svg?crc=4225744208" width="38" height="39" alt="" data-mu-svgfallback="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted%20svg%205351x535_poster_.png?crc=4290198450" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
                </div>
               </div>
              </div>
              <div class="clearfix grpelem" id="u21544"><!-- group -->
               <div class="wow-fadeInUp rounded-corners clearfix grpelem" id="u14773"><!-- group -->
                <div class="wow-fadeInLeft clip_frame grpelem" id="u16255" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- svg -->
                 <img class="svg temp_no_img_src" id="u16253" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted-svg-6378x302.svg?crc=41784042" width="45" height="22" alt="" data-mu-svgfallback="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted%20svg%206378x302_poster_.png?crc=31205111" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
                </div>
               </div>
              </div>
              <div class="clearfix grpelem" id="u21548"><!-- group -->
               <div class="wow-fadeInUp rounded-corners clearfix grpelem" id="u14770"><!-- group -->
                <div class="wow-fadeInUp clip_frame grpelem" id="u16275" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- svg -->
                 <img class="svg temp_no_img_src" id="u16273" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted-svg-978x97.svg?crc=437872459" width="39" height="46" alt="" data-mu-svgfallback="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted%20svg%20978x97_poster_.png?crc=479167487" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
                </div>
               </div>
              </div>
             </div>
             <div class="clearfix colelem" id="pu14652-6"><!-- group -->
              <!-- m_editable region-id="editable-static-tag-U14652-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
              <div class="wow-fadeInLeft clearfix grpelem shared_content" id="u14652-6" data-muse-uid="U14652" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u14652-6_content"><!-- content -->
               <p id="u14652-2">CREATIVE STRATEGY</p>
               <p id="u14652-4">Creating an effective strategy is a really creative job requiring constant adaptation to changing technologies and business conditions.</p>
              </div>
              <!-- /m_editable -->
              <!-- m_editable region-id="editable-static-tag-U14670-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
              <div class="wow-fadeInUp clearfix grpelem shared_content" id="u14670-6" data-muse-uid="U14670" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u14670-6_content"><!-- content -->
               <p id="u14670-2">SEO</p>
               <p id="u14670-4">Use words people search for, put them in important place and get links that show Google your pages are important - that is a plan.</p>
              </div>
              <!-- /m_editable -->
              <!-- m_editable region-id="editable-static-tag-U14703-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
              <div class="wow-fadeInUp clearfix grpelem shared_content" id="u14703-6" data-muse-uid="U14703" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u14703-6_content"><!-- content -->
               <p id="u14703-2">GRAPHIC DESIGN</p>
               <p id="u14703-4">Inspirations come unexpectedly, often save them in my handy notebook because disappear forever after a while. They are the essence of creative visualization.</p>
              </div>
              <!-- /m_editable -->
             </div>
            </div>
           </div>
          </div>
          <!-- m_editable region-id="editable-static-tag-U57267-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="museBGSize clearfix colelem shared_content" id="u57267-3" data-muse-uid="U57267" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-content-guid="u57267-3_content"><!-- content -->
           <p>&nbsp;</p>
          </div>
          <!-- /m_editable -->
          <div class="colelem" id="u36783" data-sizepolicy="fluidWidth" data-pintopage="page_fixedLeft"><!-- simple frame --></div>
          <div class="colelem" id="u36777" data-sizepolicy="fluidWidth" data-pintopage="page_fixedRight"><!-- simple frame --></div>
          <!-- m_editable region-id="editable-static-tag-U18138-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="clearfix colelem" id="u18138-4" data-muse-uid="U18138" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
           <p>PREMIER PRO</p>
          </div>
          <!-- /m_editable -->
          <a class="anchor_item colelem" id="blog" data-sizepolicy="fixed" data-pintopage="page_fluidx"></a>
          <div class="PamphletWidget clearfix colelem" id="pamphletu46625" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- none box -->
           <div class="ThumbGroup clearfix grpelem" id="u46628" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- none box -->
            <div class="popup_anchor" id="u46630popup">
             <div class="Thumb popup_element rounded-corners" id="u46630" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- simple frame --></div>
            </div>
            <div class="popup_anchor" id="u46631popup">
             <div class="Thumb popup_element rounded-corners" id="u46631" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- simple frame --></div>
            </div>
           </div>
           <div class="popup_anchor" id="u46632popup">
            <div class="ContainerGroup clearfix" id="u46632" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- stack box -->
             <div class="Container home_courses clearfix grpelem" id="u46633" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- group -->
              <ul class="AccordionWidget MusexPress-Posts-Template-Container clearfix grpelem" id="accordionu47543" data-sizepolicy="fixed" data-pintopage="page_fluidx"style=" <?php echo isset($posts_blog[1-1]) ? "" : "; display: none;" ;?> "><?php if(isset($posts_blog[1-1])) : ?><?php global $post; $post = $posts_blog[1-1]; setup_postdata($posts_blog[1-1]); ?><!-- vertical box -->
               <li class="AccordionPanel clearfix colelem" id="u47544"><!-- vertical box --><!-- m_editable region-id="editable-static-tag-U47545-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,clickable" --><div class="AccordionPanelTab borderbox clearfix colelem" id="u47545-3" data-muse-uid="U47545" data-muse-type="txt_frame"><!-- content --><p>&nbsp;</p></div><!-- /m_editable --><div class="AccordionPanelContent borderbox clearfix colelem" id="u47546"><!-- group --><div class="museBGSize  grpelem" id="u47555"style="<?php $url = wp_get_attachment_url( get_post_thumbnail_id($posts_blog[1-1]->ID) ); echo "background-image: url(".$url.");";?>"mxp-link="<?php echo get_the_permalink($posts_blog[1-1]); ?>"><!-- simple frame --></div><div class="clearfix grpelem" id="pu47548-4"><!-- column --><!-- m_editable region-id="editable-static-tag-U47548-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" --><a class="nonblock nontext  clearfix colelem" id="u47548-4" href="<?php echo get_the_permalink(); ?>" data-muse-uid="U47548" data-muse-type="txt_frame"><!-- content --><p><?php echo get_the_title(); ?></p></a><!-- /m_editable --><div class="colelem" id="u47554"><!-- simple frame --></div><!-- m_editable region-id="editable-static-tag-U47553-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class=" clearfix colelem" id="u47553-4" data-muse-uid="U47553" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc"><?php echo get_the_excerpt(); ?></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U47547-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class=" clearfix colelem" id="u47547-4" data-muse-uid="U47547" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc"><?php echo get_the_category_list(" , "); ?></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U47552-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class=" clearfix colelem" id="u47552-4" data-muse-uid="U47552" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc"><?php echo get_the_tag_list(""," , "); ?></div><!-- /m_editable --><div class="clearfix colelem" id="pbuttonu47549"><!-- group --><!-- m_editable region-id="editable-static-tag-U47549" template="index.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" --><a class="nonblock nontext Button  rounded-corners clearfix grpelem" id="buttonu47549" href="<?php echo get_the_permalink(); ?>" data-visibility="changed" style="visibility:hidden" data-muse-uid="U47549"><!-- container box --><!-- m_editable region-id="editable-static-tag-U47550-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u47550-4" data-muse-uid="U47550" data-muse-type="txt_frame"><!-- content --><p>Read More</p></div><!-- /m_editable --></a><!-- /m_editable --><div class="clearfix grpelem" id="pu47557-4"><!-- column --><!-- m_editable region-id="editable-static-tag-U47557-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,clickable,txtStyleTarget" data-ice-editable="link" --><a class="nonblock nontext  clearfix colelem" id="u47557-4" href="<?php $post_author_id = get_post_field( 'post_author' ); echo get_author_posts_url( $post_author_id );?>" data-muse-uid="U47557" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc"><?php echo get_the_author_meta( "nicename", $post_author_id  ); ?></a><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U47551-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class=" clearfix colelem" id="u47551-4" data-muse-uid="U47551" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc"><?php echo get_the_date( get_option('date_format')); ?></div><!-- /m_editable --></div><!-- m_editable region-id="editable-static-tag-U47556" template="index.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" --><a class="nonblock nontext museBGSize rounded-corners  grpelem" id="u47556" href="<?php $post_author_id = get_post_field( 'post_author', $posts_blog[1-1]->ID ); echo get_author_posts_url( $post_author_id ); ?>" data-muse-uid="U47556" data-sizepolicy="fixed" data-pintopage="page_fixedRight"style="<?php $post_author_id = get_post_field( 'post_author', $posts_blog[1-1]->ID ); $author_url = get_avatar_url( $post_author_id ); echo "background-image: url(".$author_url.");" ;?>"><!-- simple frame --></a><!-- /m_editable --></div></div></div></li>
              <?php wp_reset_postdata(); ?><?php endif; ?></ul>
             </div>
             <div class="Container invi home_courses clearfix grpelem" id="u46655" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- group -->
              <ul class="AccordionWidget MusexPress-Posts-Template-Container clearfix grpelem" id="accordionu47635" data-sizepolicy="fixed" data-pintopage="page_fluidx"style=" <?php echo isset($posts_blog[2-1]) ? "" : "; display: none;" ;?> "><?php if(isset($posts_blog[2-1])) : ?><?php global $post; $post = $posts_blog[2-1]; setup_postdata($posts_blog[2-1]); ?><!-- vertical box -->
               <li class="AccordionPanel clearfix colelem" id="u47636"><!-- vertical box --><!-- m_editable region-id="editable-static-tag-U47637-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,clickable" --><div class="AccordionPanelTab borderbox clearfix colelem" id="u47637-3" data-muse-uid="U47637" data-muse-type="txt_frame"><!-- content --><p>&nbsp;</p></div><!-- /m_editable --><div class="AccordionPanelContent borderbox clearfix colelem" id="u47638"><!-- group --><div class=" museBGSize grpelem" id="u47647"style="<?php $url = wp_get_attachment_url( get_post_thumbnail_id($posts_blog[2-1]->ID) ); echo "background-image: url(".$url.");";?>"mxp-link="<?php echo get_the_permalink($posts_blog[2-1]); ?>"><!-- simple frame --></div><div class="clearfix grpelem" id="pu47639-4"><!-- column --><!-- m_editable region-id="editable-static-tag-U47639-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" --><a class="nonblock nontext  clearfix colelem" id="u47639-4" href="<?php echo get_the_permalink(); ?>" data-muse-uid="U47639" data-muse-type="txt_frame"><!-- content --><p><?php echo get_the_title(); ?></p></a><!-- /m_editable --><div class="colelem" id="u47644"><!-- simple frame --></div><!-- m_editable region-id="editable-static-tag-U47645-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class=" clearfix colelem" id="u47645-4" data-muse-uid="U47645" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc"><?php echo get_the_excerpt(); ?></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U47642-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class=" clearfix colelem" id="u47642-4" data-muse-uid="U47642" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc"><?php echo get_the_category_list(" , "); ?></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U47641-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class=" clearfix colelem" id="u47641-4" data-muse-uid="U47641" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc"><?php echo get_the_tag_list(""," , "); ?></div><!-- /m_editable --><div class="clearfix colelem" id="pbuttonu47648"><!-- group --><!-- m_editable region-id="editable-static-tag-U47648" template="index.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" --><a class="nonblock nontext Button  rounded-corners clearfix grpelem" id="buttonu47648" href="<?php echo get_the_permalink(); ?>" data-visibility="changed" style="visibility:hidden" data-muse-uid="U47648"><!-- container box --><!-- m_editable region-id="editable-static-tag-U47649-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u47649-4" data-muse-uid="U47649" data-muse-type="txt_frame"><!-- content --><p>Read More</p></div><!-- /m_editable --></a><!-- /m_editable --><div class="clearfix grpelem" id="pu47640-4"><!-- column --><!-- m_editable region-id="editable-static-tag-U47640-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,clickable,txtStyleTarget" data-ice-editable="link" --><a class="nonblock nontext  clearfix colelem" id="u47640-4" href="<?php $post_author_id = get_post_field( 'post_author' ); echo get_author_posts_url( $post_author_id );?>" data-muse-uid="U47640" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc"><?php echo get_the_author_meta( "nicename", $post_author_id  ); ?></a><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U47646-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class=" clearfix colelem" id="u47646-4" data-muse-uid="U47646" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc"><?php echo get_the_date( get_option('date_format')); ?></div><!-- /m_editable --></div><!-- m_editable region-id="editable-static-tag-U47643" template="index.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" --><a class="nonblock nontext  museBGSize grpelem" id="u47643" href="<?php $post_author_id = get_post_field( 'post_author', $posts_blog[2-1]->ID ); echo get_author_posts_url( $post_author_id ); ?>" data-muse-uid="U47643" data-sizepolicy="fixed" data-pintopage="page_fixedRight"style="<?php $post_author_id = get_post_field( 'post_author', $posts_blog[2-1]->ID ); $author_url = get_avatar_url( $post_author_id ); echo "background-image: url(".$author_url.");" ;?>"><!-- simple frame --></a><!-- /m_editable --></div></div></div></li>
              <?php wp_reset_postdata(); ?><?php endif; ?></ul>
             </div>
            </div>
           </div>
           <div class="popup_anchor" id="u46626popup">
            <div class="PamphletPrevButton PamphletLightboxPart popup_element museBGSize home_previous" id="u46626" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- simple frame --></div>
           </div>
           <div class="popup_anchor" id="u46627popup">
            <div class="PamphletNextButton PamphletLightboxPart popup_element museBGSize home_next" id="u46627" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- simple frame --></div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
      <div class="clip_frame grpelem" id="u20893" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- svg -->
       <img class="svg temp_no_img_src" id="u20891" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted-svg-11059x2963.svg?crc=207733903" width="346" height="926" alt="" data-mu-svgfallback="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted%20svg%2011059x2963_poster_.png?crc=3989459121" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
      </div>
      <div class="size_fixed grpelem" id="u56451" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- custom html -->
       
    <iframe class="actAsDiv" style="width:100%;height:100%;" src="//player.vimeo.com/video/282543732?title=1&amp;byline=0&amp;portrait=0&amp;color=FFFFFF&amp;autoplay=0&amp;loop=0&amp;wmode=transparent" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

      </div>
      <!-- m_editable region-id="editable-static-tag-U12488-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
      <a class="nonblock nontext transition clearfix grpelem shared_content" id="u12488-8" href="<?php echo get_permalink( mxp_get_page_by_slug( 'login' ) ); ?>" data-href="page:U38905" data-muse-uid="U12488" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u12488-8_content"><!-- content --><p id="u12488-4"><span id="u12488">TO DOWNLOAD MY CV</span><span id="u12488-2"> </span><span id="u12488-3"></span></p><p id="u12488-6"><span id="u12488-5">SIGN IN or REGISTER</span></p></a>
      <!-- /m_editable -->
      <div class="browser_width grpelem" id="u16198-bw">
       <div id="u16198"><!-- group -->
        <div class="clearfix" id="u16198_align_to_page">
         <!-- m_editable region-id="editable-static-tag-U16323-BP_infinity" template="index.html" data-type="image" -->
         <div class="clip_frame clearfix grpelem" id="u16323" data-muse-uid="U16323" data-muse-type="img_frame" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- image -->
          <img class="position_content temp_no_img_src" id="u16323_img" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/lamp2jpg.png?crc=152756116" alt="" width="202" height="390" data-muse-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/lamp2jpg.png?crc=152756116" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U14963-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="wow-flipInX clearfix grpelem" id="u14963-4" data-muse-uid="U14963" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- content -->
          <p id="u14963-2">Resume</p>
         </div>
         <!-- /m_editable -->
         <div class="grpelem shared_content" id="u16186" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u16186_content"><!-- simple frame --></div>
         <!-- m_editable region-id="editable-static-tag-U15528-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
         <div class="wow-fadeInUpDelay400ms clearfix grpelem" id="u15528-4" data-muse-uid="U15528" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
          <p>Master’s degree in Business Management, Wroclaw Academy of Economics, 1997, Poland</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U16108-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
         <div class="wow-fadeInUpDelay400ms clearfix grpelem" id="u16108-4" data-muse-uid="U16108" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
          <p>I invite you to my portfolio where there are several projects in which I used my skills in creating content and coding.</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U15846-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
         <div class="wow-fadeInUpDelay400ms clearfix grpelem" id="u15846-4" data-muse-uid="U15846" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
          <p>Postgraduate Studies in IT Project Management, University of Computer Science and Skills, 2014, Poland</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U16144-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
         <div class="wow-fadeInUpDelay400ms clearfix grpelem" id="u16144-4" data-muse-uid="U16144" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
          <p>All my professional life manage projects. Adventure started with the organization of big business events to&nbsp; IT projects. Welcome to my resume.</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U15856-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
         <div class="wow-fadeInUpDelay400ms clearfix grpelem" id="u15856-4" data-muse-uid="U15856" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
          <p>BTEC Level 5 HND Diploma in Computing and System Development (QCF)</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U16168-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
         <div class="wow-fadeInUpDelay400ms clearfix grpelem" id="u16168-4" data-muse-uid="U16168" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
          <p>I invite you to my portfolio where there are several videos in which I used my skills in creating stories.</p>
         </div>
         <!-- /m_editable -->
         <div class="clearfix grpelem" id="u15905"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U15908" template="index.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
          <a class="nonblock nontext Button anim_swing transition clearfix colelem" id="buttonu15908" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#portfolio" data-href="anchor:U82:U18915" data-rotate="270.00" data-muse-uid="U15908" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0,M12=1,M21=-1,M22=0,SizingMethod='auto expand')" data-mu-ie-matrix-dx="41" data-mu-ie-matrix-dy="-41" data-sizepolicy="fixed" data-pintopage="page_fixedRight"><!-- container box --><!-- m_editable region-id="editable-static-tag-U15909-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="wow-fadeInUpDelay400ms clearfix grpelem" id="u15909-4" data-muse-uid="U15909" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content --><p>Portfolio</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U15910-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="wow-fadeInUpDelay400ms clearfix grpelem" id="u15910-4" data-muse-uid="U15910" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content --><p>05</p></div><!-- /m_editable --></a>
          <!-- /m_editable -->
          <div class="colelem" id="u15911" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0,M12=1,M21=-1,M22=0,SizingMethod='auto expand')" data-mu-ie-matrix-dx="21" data-mu-ie-matrix-dy="-21" data-sizepolicy="fixed" data-pintopage="page_fixedRight"><!-- simple frame --></div>
          <!-- m_editable region-id="editable-static-tag-U15906" template="index.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
          <a class="nonblock nontext Button anim_swing transition clearfix colelem" id="buttonu15906" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#experience" data-href="anchor:U82:U18912" data-rotate="270.00" data-muse-uid="U15906" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0,M12=1,M21=-1,M22=0,SizingMethod='auto expand')" data-mu-ie-matrix-dx="0" data-mu-ie-matrix-dy="0" data-sizepolicy="fixed" data-pintopage="page_fixedRight"><!-- container box --><!-- m_editable region-id="editable-static-tag-U15907-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="wow-fadeInUpDelay400ms clearfix grpelem" id="u15907-4" data-muse-uid="U15907" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p>04</p></div><!-- /m_editable --></a>
          <!-- /m_editable -->
         </div>
         <!-- m_editable region-id="editable-static-tag-U14983-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
         <div class="Hometitle clearfix grpelem shared_content" id="u14983-4" data-muse-uid="U14983" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u14983-4_content"><!-- content -->
          <p id="u14983-2">Discover what I know and what I can do</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U15600-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
         <div class="Hometitle clearfix grpelem shared_content" id="u15600-4" data-muse-uid="U15600" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u15600-4_content"><!-- content -->
          <p id="u15600-2">Education</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U16076-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
         <div class="Hometitle clearfix grpelem shared_content" id="u16076-4" data-muse-uid="U16076" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u16076-4_content"><!-- content -->
          <p id="u16076-2">Experience</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U14980-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
         <div class="Hometitle clearfix grpelem shared_content" id="u14980-4" data-muse-uid="U14980" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u14980-4_content"><!-- content -->
          <p id="u14980-2">The road I have gone through so far.</p>
         </div>
         <!-- /m_editable -->
         <div class="wow-fadeInLeft rounded-corners clearfix grpelem shared_content" id="u14938" data-content-guid="u14938_content"><!-- group -->
          <div class="wow-fadeInLeft clip_frame grpelem" id="u15376" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- svg -->
           <img class="svg temp_no_img_src" id="u15374" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted-svg-1411x128.svg?crc=250209876" width="33" height="34" alt="" data-mu-svgfallback="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted%20svg%201411x128_poster_.png?crc=130566458" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
          </div>
         </div>
         <div class="wow-fadeInLeft rounded-corners clearfix grpelem shared_content" id="u14944" data-content-guid="u14944_content"><!-- group -->
          <div class="wow-fadeInLeft clip_frame grpelem" id="u15495" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- svg -->
           <img class="svg temp_no_img_src" id="u15493" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted-svg-1135x105.svg?crc=4178827749" width="36" height="38" alt="" data-mu-svgfallback="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted%20svg%201135x105_poster_.png?crc=3848626085" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
          </div>
         </div>
         <div class="wow-fadeInLeft rounded-corners clearfix grpelem shared_content" id="u16059" data-content-guid="u16059_content"><!-- group -->
          <div class="wow-fadeInLeft clip_frame grpelem" id="u16178" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- svg -->
           <img class="svg temp_no_img_src" id="u16176" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted-svg-1301x125.svg?crc=4006992262" width="36" height="40" alt="" data-mu-svgfallback="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted%20svg%201301x125_poster_.png?crc=143017477" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
          </div>
         </div>
         <div class="wow-fadeInUp rounded-corners clearfix grpelem shared_content" id="u15020" data-content-guid="u15020_content"><!-- group -->
          <div class="wow-fadeInUp rounded-corners clearfix grpelem" id="u15025"><!-- group -->
           <div class="wow-fadeInUp rounded-corners grpelem" id="u15030" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- simple frame --></div>
          </div>
         </div>
         <div class="wow-fadeInUp rounded-corners clearfix grpelem shared_content" id="u16081" data-content-guid="u16081_content"><!-- group -->
          <div class="wow-fadeInUp rounded-corners clearfix grpelem" id="u16082"><!-- group -->
           <div class="wow-fadeInUp rounded-corners grpelem" id="u16083" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- simple frame --></div>
          </div>
         </div>
         <div class="wow-fadeInUp rounded-corners clearfix grpelem shared_content" id="u15441" data-content-guid="u15441_content"><!-- group -->
          <div class="wow-fadeInUp rounded-corners clearfix grpelem" id="u15442"><!-- group -->
           <div class="wow-fadeInUp rounded-corners grpelem" id="u15443" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- simple frame --></div>
          </div>
         </div>
         <div class="wow-fadeInUp rounded-corners clearfix grpelem shared_content" id="u16122" data-content-guid="u16122_content"><!-- group -->
          <div class="wow-fadeInUp rounded-corners clearfix grpelem" id="u16121"><!-- group -->
           <div class="wow-fadeInUp rounded-corners grpelem" id="u16123" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- simple frame --></div>
          </div>
         </div>
         <div class="wow-fadeInUp rounded-corners clearfix grpelem shared_content" id="u15479" data-content-guid="u15479_content"><!-- group -->
          <div class="wow-fadeInUp rounded-corners clearfix grpelem" id="u15478"><!-- group -->
           <div class="wow-fadeInUp rounded-corners grpelem" id="u15480" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- simple frame --></div>
          </div>
         </div>
         <div class="wow-fadeInUp rounded-corners clearfix grpelem shared_content" id="u16153" data-content-guid="u16153_content"><!-- group -->
          <div class="wow-fadeInUp rounded-corners clearfix grpelem" id="u16154"><!-- group -->
           <div class="wow-fadeInUp rounded-corners grpelem" id="u16155" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- simple frame --></div>
          </div>
         </div>
         <div class="wow-fadeInLeft grpelem shared_content" id="u15394" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u15394_content"><!-- simple frame --></div>
         <div class="wow-fadeInLeft grpelem shared_content" id="u16104" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u16104_content"><!-- simple frame --></div>
         <div class="wow-fadeInLeft grpelem shared_content" id="u15436" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u15436_content"><!-- simple frame --></div>
         <div class="wow-fadeInLeft grpelem shared_content" id="u16136" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u16136_content"><!-- simple frame --></div>
         <div class="wow-fadeInLeft grpelem shared_content" id="u15473" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u15473_content"><!-- simple frame --></div>
         <div class="wow-fadeInLeft grpelem shared_content" id="u16172" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u16172_content"><!-- simple frame --></div>
         <!-- m_editable region-id="editable-static-tag-U15010-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
         <div class="wow-fadeInLeft clearfix grpelem shared_content" id="u15010-4" data-muse-uid="U15010" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u15010-4_content"><!-- content -->
          <p>22 August 1970</p>
         </div>
         <!-- /m_editable -->
         <div class="wow-fadeInLeft shadow rounded-corners clearfix grpelem shared_content" id="u15403" data-content-guid="u15403_content"><!-- group -->
          <!-- m_editable region-id="editable-static-tag-U15399-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="wow-fadeInLeft clearfix grpelem" id="u15399-4" data-muse-uid="U15399" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
           <p>Bachelor (Honours) 1997</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="wow-fadeInLeft shadow rounded-corners clearfix grpelem shared_content" id="u16096" data-content-guid="u16096_content"><!-- group -->
          <!-- m_editable region-id="editable-static-tag-U16403-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="wow-fadeInLeft clearfix grpelem" id="u16403-4" data-muse-uid="U16403" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
           <p>Coder and web content designer</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="wow-fadeInLeft shadow rounded-corners clearfix grpelem shared_content" id="u15456" data-content-guid="u15456_content"><!-- group -->
          <!-- m_editable region-id="editable-static-tag-U15432-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="wow-fadeInLeft clearfix grpelem" id="u15432-4" data-muse-uid="U15432" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
           <p>IT Project Management 2014</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="wow-fadeInLeft shadow rounded-corners clearfix grpelem shared_content" id="u16112" data-content-guid="u16112_content"><!-- group -->
          <!-- m_editable region-id="editable-static-tag-U16408-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="wow-fadeInLeft clearfix grpelem" id="u16408-4" data-muse-uid="U16408" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
           <p>Project manager</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="wow-fadeInLeft shadow rounded-corners clearfix grpelem shared_content" id="u15469" data-content-guid="u15469_content"><!-- group -->
          <!-- m_editable region-id="editable-static-tag-U15465-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="wow-fadeInLeft clearfix grpelem" id="u15465-4" data-muse-uid="U15465" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
           <p>HND QCF Coventry College 2018</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="wow-fadeInLeft shadow rounded-corners clearfix grpelem shared_content" id="u16140" data-content-guid="u16140_content"><!-- group -->
          <!-- m_editable region-id="editable-static-tag-U16422-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="wow-fadeInLeft clearfix grpelem" id="u16422-4" data-muse-uid="U16422" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
           <p>Videographer</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="grpelem" id="u35125"><!-- simple frame --></div>
         <a class="anchor_item grpelem shared_content" id="experience" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-content-guid="experience_content"></a>
        </div>
       </div>
      </div>
      <div class="browser_width grpelem" id="u17385-bw">
       <div class="museBGSize" id="u17385"><!-- column -->
        <div class="clearfix" id="u17385_align_to_page">
         <div class="clearfix colelem" id="pu17382-4"><!-- group -->
          <!-- m_editable region-id="editable-static-tag-U17382-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="wow-flipInX clearfix grpelem" id="u17382-4" data-muse-uid="U17382" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- content -->
           <p id="u17382-2">Skills</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U17977-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="Hometitle clearfix grpelem" id="u17977-4" data-muse-uid="U17977" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- content -->
           <p id="u17977-2">My skills in statistics.</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U17982-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="Hometitle clearfix grpelem" id="u17982-4" data-muse-uid="U17982" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- content -->
           <p id="u17982-2">Discover what I know and what I can do</p>
          </div>
          <!-- /m_editable -->
          <div class="clearfix grpelem" id="u36046"><!-- group -->
           <!-- m_editable region-id="editable-static-tag-U18289" template="index.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
           <a class="nonblock nontext Button anim_swing transition clearfix grpelem" id="buttonu18289" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#skills" data-href="anchor:U82:U18918" data-muse-uid="U18289" data-sizepolicy="fixed" data-pintopage="page_fixedRight"><!-- container box --><!-- m_editable region-id="editable-static-tag-U18290-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="wow-fadeInUpDelay400ms clearfix grpelem" id="u18290-4" data-muse-uid="U18290" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p>06</p></div><!-- /m_editable --></a>
           <!-- /m_editable -->
           <div class="grpelem" id="u18288" data-sizepolicy="fixed" data-pintopage="page_fixedRight"><!-- simple frame --></div>
           <!-- m_editable region-id="editable-static-tag-U18291" template="index.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
           <a class="nonblock nontext Button anim_swing transition clearfix grpelem" id="buttonu18291" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#contact" data-href="anchor:U82:U18924" data-muse-uid="U18291" data-sizepolicy="fixed" data-pintopage="page_fixedRight"><!-- container box --><!-- m_editable region-id="editable-static-tag-U18292-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="wow-fadeInUpDelay400ms clearfix grpelem" id="u18292-4" data-muse-uid="U18292" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content --><p>07</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U18293-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="wow-fadeInUpDelay400ms clearfix grpelem" id="u18293-4" data-muse-uid="U18293" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content --><p>Contact me</p></div><!-- /m_editable --></a>
           <!-- /m_editable -->
          </div>
         </div>
         <div class="clearfix colelem" id="pu17408-4"><!-- group -->
          <!-- m_editable region-id="editable-static-tag-U17408-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="wow-fadeInLeft clearfix grpelem" id="u17408-4" data-muse-uid="U17408" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
           <p>GRAPHIC DESIGN</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U17429-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="clearfix grpelem" id="u17429-4" data-muse-uid="U17429" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
           <p>%</p>
          </div>
          <!-- /m_editable -->
          <div class="size_fixed grpelem" id="u17604" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- custom html -->
           
<span class="u17604">65</span> 

          </div>
          <div class="clearfix grpelem" id="u21556"><!-- group -->
           <div class="wow-fadeInLeft rounded-corners clearfix grpelem" id="u17435"><!-- group -->
            <div class="clip_frame grpelem" id="u17461" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- svg -->
             <img class="svg temp_no_img_src" id="u17459" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted-svg-692x69.svg?crc=4237198577" width="70" height="69" alt="" data-mu-svgfallback="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted%20svg%20692x69_poster_.png?crc=467556654" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
            </div>
           </div>
          </div>
          <!-- m_editable region-id="editable-static-tag-U17639-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="clearfix grpelem" id="u17639-4" data-muse-uid="U17639" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
           <p id="u17639-2">%</p>
          </div>
          <!-- /m_editable -->
          <div class="size_fixed grpelem" id="u17631" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- custom html -->
           
<span class="u17631">55</span> 

          </div>
          <div class="clearfix grpelem" id="u21560"><!-- group -->
           <div class="wow-fadeInLeft rounded-corners clearfix grpelem" id="u17453"><!-- group -->
            <div class="clip_frame grpelem" id="u17471" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- svg -->
             <img class="svg temp_no_img_src" id="u17469" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted-svg-692x692.svg?crc=3771711772" width="70" height="69" alt="" data-mu-svgfallback="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted%20svg%20692x69_poster_2.png?crc=4145865439" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
            </div>
           </div>
          </div>
         </div>
         <div class="clearfix colelem" id="pu17438-4"><!-- group -->
          <!-- m_editable region-id="editable-static-tag-U17438-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="wow-fadeInLeft clearfix grpelem" id="u17438-4" data-muse-uid="U17438" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
           <p>PHOTOSHOP</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U17456-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="wow-fadeInLeft clearfix grpelem" id="u17456-4" data-muse-uid="U17456" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
           <p>ILLUSTRATOR</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="ppu17934-4"><!-- group -->
          <div class="clearfix grpelem" id="pu17934-4"><!-- group -->
           <!-- m_editable region-id="editable-static-tag-U17934-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
           <div class="clearfix grpelem" id="u17934-4" data-muse-uid="U17934" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="pu17934-4"><!-- content -->
            <p>%</p>
           </div>
           <!-- /m_editable -->
           <div class="size_fixed grpelem" id="u17919" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="pu17934-4"><!-- custom html -->
            
<span class="u17919">70</span> 

           </div>
           <div class="clearfix grpelem" id="u21580"><!-- group -->
            <div class="wow-fadeInLeft rounded-corners clearfix grpelem" id="u17930"><!-- group -->
             <div class="clip_frame grpelem" id="u17521" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- svg -->
              <img class="svg temp_no_img_src" id="u17519" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted-svg-692x693.svg?crc=4122441125" width="70" height="69" alt="" data-mu-svgfallback="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted%20svg%20692x69_poster_3.png?crc=251355910" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
             </div>
            </div>
           </div>
           <!-- m_editable region-id="editable-static-tag-U17953-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
           <div class="clearfix grpelem" id="u17953-4" data-muse-uid="U17953" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="pu17934-4"><!-- content -->
            <p>%</p>
           </div>
           <!-- /m_editable -->
           <div class="size_fixed grpelem" id="u17946" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="pu17934-4"><!-- custom html -->
            
<span class="u17946">40</span> 

           </div>
           <div class="clearfix grpelem" id="u21576"><!-- group -->
            <div class="wow-fadeInLeft rounded-corners clearfix grpelem" id="u17938"><!-- group -->
             <div class="clip_frame grpelem" id="u17531" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- svg -->
              <img class="svg temp_no_img_src" id="u17529" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted-svg-692x694.svg?crc=3887232485" width="70" height="69" alt="" data-mu-svgfallback="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted%20svg%20692x69_poster_4.png?crc=142254552" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
             </div>
            </div>
           </div>
          </div>
          <!-- m_editable region-id="editable-static-tag-U17988-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="wow-fadeInLeft clearfix grpelem" id="u17988-6" data-muse-uid="U17988" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
           <p>WEB DESIGN</p>
           <p>DEVELOPMENT</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U17880-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="clearfix grpelem" id="u17880-4" data-muse-uid="U17880" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
           <p id="u17880-2">%</p>
          </div>
          <!-- /m_editable -->
          <div class="size_fixed grpelem" id="u17856" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- custom html -->
           
<span class="u17856">75</span> 

          </div>
          <div class="clearfix grpelem" id="u21588"><!-- group -->
           <div class="wow-fadeInLeft rounded-corners clearfix grpelem" id="u17864"><!-- group -->
            <div class="clip_frame grpelem" id="u17501" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- svg -->
             <img class="svg temp_no_img_src" id="u17499" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted-svg-692x695.svg?crc=4047629378" width="70" height="69" alt="" data-mu-svgfallback="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted%20svg%20692x69_poster_5.png?crc=30897513" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
            </div>
           </div>
          </div>
          <!-- m_editable region-id="editable-static-tag-U17903-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="clearfix grpelem" id="u17903-4" data-muse-uid="U17903" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
           <p id="u17903-2">%</p>
          </div>
          <!-- /m_editable -->
          <div class="size_fixed grpelem" id="u17884" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- custom html -->
           
<span class="u17884">60</span> 

          </div>
          <div class="clearfix grpelem" id="u21584"><!-- group -->
           <div class="wow-fadeInLeft rounded-corners clearfix grpelem" id="u17907"><!-- group -->
            <div class="clip_frame grpelem" id="u17511" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- svg -->
             <img class="svg temp_no_img_src" id="u17509" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted-svg-692x696.svg?crc=111767381" width="70" height="69" alt="" data-mu-svgfallback="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted%20svg%20692x69_poster_6.png?crc=3782481483" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
            </div>
           </div>
          </div>
         </div>
         <div class="clearfix colelem" id="ppu17915-4"><!-- group -->
          <div class="clearfix grpelem" id="pu17915-4"><!-- group -->
           <!-- m_editable region-id="editable-static-tag-U17915-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
           <div class="clearfix grpelem" id="u17915-4" data-muse-uid="U17915" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="pu17915-4"><!-- content -->
            <p>CSS</p>
           </div>
           <!-- /m_editable -->
           <!-- m_editable region-id="editable-static-tag-U17942-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
           <div class="clearfix grpelem" id="u17942-4" data-muse-uid="U17942" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="pu17915-4"><!-- content -->
            <p>JAVASCRIPT</p>
           </div>
           <!-- /m_editable -->
          </div>
          <!-- m_editable region-id="editable-static-tag-U17911-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="wow-fadeInLeft clearfix grpelem" id="u17911-4" data-muse-uid="U17911" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
           <p>MUSE</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U17926-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="clearfix grpelem" id="u17926-4" data-muse-uid="U17926" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
           <p>HTML</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu17997"><!-- group -->
          <div class="grpelem" id="u17997" data-sizepolicy="fluidWidth" data-pintopage="page_fixedLeft"><!-- simple frame --></div>
          <!-- m_editable region-id="editable-static-tag-U18187-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="wow-fadeInLeft clearfix grpelem" id="u18187-6" data-muse-uid="U18187" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
           <p>VIDEO</p>
           <p>EDITION</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U18129-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="clearfix grpelem" id="u18129-4" data-muse-uid="U18129" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
           <p id="u18129-2">%</p>
          </div>
          <!-- /m_editable -->
          <div class="size_fixed grpelem" id="u18115" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- custom html -->
           
<span class="u18115">70</span> 

          </div>
          <div class="clearfix grpelem" id="u21596"><!-- group -->
           <div class="wow-fadeInLeft rounded-corners clearfix grpelem" id="u18135"><!-- group -->
            <div class="clip_frame grpelem" id="u17561" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- svg -->
             <img class="svg temp_no_img_src" id="u17559" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted-svg-692x697.svg?crc=179304324" width="70" height="69" alt="" data-mu-svgfallback="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted%20svg%20692x69_poster_7.png?crc=4048497052" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
            </div>
           </div>
          </div>
          <!-- m_editable region-id="editable-static-tag-U18161-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="clearfix grpelem" id="u18161-4" data-muse-uid="U18161" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
           <p id="u18161-2">%</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U18141-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="clearfix grpelem" id="u18141-4" data-muse-uid="U18141" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
           <p>AFTER EFFECTS</p>
          </div>
          <!-- /m_editable -->
          <div class="size_fixed grpelem" id="u18147" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- custom html -->
           
<span class="u18147">30</span> 

          </div>
          <div class="clearfix grpelem" id="u21592"><!-- group -->
           <div class="wow-fadeInLeft rounded-corners clearfix grpelem" id="u18144"><!-- group -->
            <div class="clip_frame grpelem" id="u17571" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- svg -->
             <img class="svg temp_no_img_src" id="u17569" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted-svg-692x698.svg?crc=526805290" width="70" height="69" alt="" data-mu-svgfallback="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted%20svg%20692x69_poster_8.png?crc=47479152" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
            </div>
           </div>
          </div>
          <!-- m_editable region-id="editable-static-tag-U36771-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="clearfix grpelem" id="u36771-4" data-muse-uid="U36771" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
           <p>PREMIER PRO</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
       </div>
      </div>
      <!-- m_editable region-id="editable-static-tag-U21652-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <div class="clearfix grpelem" id="u21652-4" data-muse-uid="U21652" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc"><!-- content -->
       <p>85</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U21674-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <div class="clearfix grpelem" id="u21674-4" data-muse-uid="U21674" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc"><!-- content -->
       <p>40</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U21685-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <div class="clearfix grpelem" id="u21685-4" data-muse-uid="U21685" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc"><!-- content -->
       <p id="u21685-2">90</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U21703-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <div class="clearfix grpelem" id="u21703-4" data-muse-uid="U21703" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc"><!-- content -->
       <p id="u21703-2">90</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U21697-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <div class="clearfix grpelem" id="u21697-4" data-muse-uid="U21697" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc"><!-- content -->
       <p id="u21697-2">80</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U21709-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <div class="clearfix grpelem" id="u21709-4" data-muse-uid="U21709" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc"><!-- content -->
       <p id="u21709-2">40</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U21714-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <div class="clearfix grpelem" id="u21714-4" data-muse-uid="U21714" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc"><!-- content -->
       <p id="u21714-2">65</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U21665-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <div class="clearfix grpelem" id="u21665-4" data-muse-uid="U21665" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc"><!-- content -->
       <p>70</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U21680-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <div class="clearfix grpelem" id="u21680-4" data-muse-uid="U21680" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc"><!-- content -->
       <p>25</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U21720-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <div class="clearfix grpelem" id="u21720-4" data-muse-uid="U21720" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc"><!-- content -->
       <p>40</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U21732-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <div class="clearfix grpelem" id="u21732-4" data-muse-uid="U21732" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc"><!-- content -->
       <p>75</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U21744-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <div class="clearfix grpelem" id="u21744-4" data-muse-uid="U21744" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc"><!-- content -->
       <p>55</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U18436-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <div class="wow-flipInX clearfix grpelem" id="u18436-4" data-muse-uid="U18436" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedRight"><!-- content -->
       <p id="u18436-2">Contact</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U18331-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <div class="Hometitle clearfix grpelem shared_content" id="u18331-6" data-muse-uid="U18331" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-content-guid="u18331-6_content"><!-- content -->
       <p id="u18331-2">Take some time to say</p>
       <p id="u18331-4">HELLO!</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U18336-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <div class="Hometitle clearfix grpelem shared_content" id="u18336-4" data-muse-uid="U18336" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-content-guid="u18336-4_content"><!-- content -->
       <p id="u18336-2">Please do not hesitate and write down to me. I will answer as soon as possible.</p>
      </div>
      <!-- /m_editable -->
      <form class="form-grp clearfix grpelem" id="widgetu18365" method="post" enctype="multipart/form-data" action="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/scripts/form-u18365.php" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- none box -->
       <div class="fld-grp clearfix grpelem" id="widgetu18373" data-required="true" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- none box -->
        <!-- m_editable region-id="editable-static-tag-U18374-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <label class="fld-label actAsDiv clearfix grpelem" id="u18374-4" data-muse-uid="U18374" data-muse-type="txt_frame" for="widgetu18373_input" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- content --><span class="actAsPara shared_content" id="u18374-2" data-content-guid="u18374-2_content">Name:</span></label>
        <!-- /m_editable -->
        <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix grpelem" id="u18375-3" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- content --><input class="wrapped-input shared_content" type="text" spellcheck="false" id="widgetu18373_input" name="custom_U18373" tabindex="1" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-content-guid="widgetu18373_input_content"/></span>
       </div>
       <div class="fld-grp clearfix grpelem" id="widgetu18378" data-required="true" data-type="email" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- none box -->
        <!-- m_editable region-id="editable-static-tag-U18379-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <label class="fld-label actAsDiv clearfix grpelem" id="u18379-4" data-muse-uid="U18379" data-muse-type="txt_frame" for="widgetu18378_input" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- content --><span class="actAsPara shared_content" id="u18379-2" data-content-guid="u18379-2_content">Email:</span></label>
        <!-- /m_editable -->
        <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix grpelem" id="u18381-3" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- content --><input class="wrapped-input shared_content" type="email" spellcheck="false" id="widgetu18378_input" name="Email" tabindex="2" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-content-guid="widgetu18378_input_content"/></span>
       </div>
       <!-- m_editable region-id="editable-static-tag-U18377-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u18377-4" data-muse-uid="U18377" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- content -->
        <p class="shared_content" data-content-guid="u18377-4_0_content">Submitting Form...</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U18366-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u18366-4" data-muse-uid="U18366" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- content -->
        <p class="shared_content" data-content-guid="u18366-4_0_content">The server encountered an error.</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U18367-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u18367-4" data-muse-uid="U18367" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- content -->
        <p id="u18367-2" class="shared_content" data-content-guid="u18367-2_content">Form received.</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U18372-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <button class="submit-btn NoWrap transition rounded-corners clearfix grpelem" id="u18372-4" data-muse-uid="U18372" data-muse-type="txt_frame" type="submit" value="SUBMIT" tabindex="4" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- content -->
        <div style="margin-top:-14px;height:14px;">
         <p id="u18372-2" class="shared_content" data-content-guid="u18372-2_content">SUBMIT</p>
        </div>
       </button>
       <!-- /m_editable -->
       <div class="fld-grp clearfix grpelem" id="widgetu18368" data-required="false" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- none box -->
        <!-- m_editable region-id="editable-static-tag-U18369-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <label class="fld-label actAsDiv clearfix grpelem" id="u18369-4" data-muse-uid="U18369" data-muse-type="txt_frame" for="widgetu18368_input" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- content --><span class="actAsPara shared_content" id="u18369-2" data-content-guid="u18369-2_content">Message:</span></label>
        <!-- /m_editable -->
        <span class="fld-textarea actAsDiv transition rounded-corners clearfix grpelem" id="u18370-3" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- content --><textarea class="wrapped-input shared_content" id="widgetu18368_input" name="custom_U18368" tabindex="3" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-content-guid="widgetu18368_input_content"></textarea></span>
       </div>
      </form>
      <div class="size_fixed grpelem" id="u46618" data-sizepolicy="fixed" data-pintopage="page_fluidx"><!-- custom html -->
       

				<div style="display: none"></div>
				
      </div>
      <div class="browser_width grpelem shared_content" id="u47114-bw" data-content-guid="u47114-bw_content">
       <!-- m_editable region-id="editable-static-tag-U47114" template="index.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
       <a class="nonblock nontext museBGSize" id="u47114" href="<?php echo get_permalink( mxp_get_page_by_slug( 'blog' ) ); ?>" data-href="page:U40562" data-muse-uid="U47114"><!-- simple frame --></a>
       <!-- /m_editable -->
      </div>
      <!-- m_editable region-id="editable-static-tag-U42311-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,clickable,txtStyleTarget" data-ice-editable="link" -->
      <a class="nonblock nontext wow-flipInX clearfix grpelem" id="u42311-4" href="<?php echo get_permalink( mxp_get_page_by_slug( 'blog' ) ); ?>" data-href="page:U40562" data-muse-uid="U42311" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedRight"><!-- content --><p id="u42311-2">Blog</p></a>
      <!-- /m_editable -->
      <div class="browser_width grpelem" id="u16388-bw">
       <div id="u16388"><!-- group -->
        <div class="clearfix" id="u16388_align_to_page">
         <div class="clearfix grpelem" id="u18194"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U18198" template="index.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
          <a class="nonblock nontext Button anim_swing transition clearfix colelem" id="buttonu18198" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#skills" data-href="anchor:U82:U18918" data-rotate="270.00" data-muse-uid="U18198" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0,M12=1,M21=-1,M22=0,SizingMethod='auto expand')" data-mu-ie-matrix-dx="28" data-mu-ie-matrix-dy="-28" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- container box --><!-- m_editable region-id="editable-static-tag-U18199-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="wow-fadeInUpDelay400ms clearfix grpelem" id="u18199-4" data-muse-uid="U18199" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content --><p>Skills</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U18200-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="wow-fadeInUpDelay400ms clearfix grpelem" id="u18200-4" data-muse-uid="U18200" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content --><p>06</p></div><!-- /m_editable --></a>
          <!-- /m_editable -->
          <div class="colelem" id="u18197" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0,M12=1,M21=-1,M22=0,SizingMethod='auto expand')" data-mu-ie-matrix-dx="21" data-mu-ie-matrix-dy="-21" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- simple frame --></div>
          <!-- m_editable region-id="editable-static-tag-U18195" template="index.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
          <a class="nonblock nontext Button anim_swing transition clearfix colelem" id="buttonu18195" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#portfolio" data-href="anchor:U82:U18915" data-rotate="270.00" data-muse-uid="U18195" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0,M12=1,M21=-1,M22=0,SizingMethod='auto expand')" data-mu-ie-matrix-dx="0" data-mu-ie-matrix-dy="0" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"><!-- container box --><!-- m_editable region-id="editable-static-tag-U18196-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="wow-fadeInUpDelay400ms clearfix grpelem" id="u18196-4" data-muse-uid="U18196" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fluidx"><!-- content --><p>05</p></div><!-- /m_editable --></a>
          <!-- /m_editable -->
         </div>
         <div class="clearfix grpelem" id="pu16426-4"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U16426-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="Hometitle clearfix colelem" id="u16426-4" data-muse-uid="U16426" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="pu16426-4"><!-- content -->
           <p>01</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U16436-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="Hometitle clearfix colelem" id="u16436-4" data-muse-uid="U16436" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="pu16426-4"><!-- content -->
           <p>04</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U16441-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="Hometitle clearfix colelem" id="u16441-4" data-muse-uid="U16441" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="pu16426-4"><!-- content -->
           <p>05</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix grpelem" id="pu16431-4"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U16431-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="Hometitle clearfix colelem" id="u16431-4" data-muse-uid="U16431" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="pu16431-4"><!-- content -->
           <p>02</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U56743-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="Hometitle clearfix colelem" id="u56743-4" data-muse-uid="U56743" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="pu16431-4"><!-- content -->
           <p>03</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U16451-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
          <div class="Hometitle clearfix colelem" id="u16451-4" data-muse-uid="U16451" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="pu16431-4"><!-- content -->
           <p>06</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
       </div>
      </div>
      <div class="browser_width grpelem shared_content" id="u16373-bw" data-content-guid="u16373-bw_content">
       <div id="u16373"><!-- simple frame --></div>
      </div>
      <div class="browser_width grpelem shared_content" id="u16353-bw" data-content-guid="u16353-bw_content">
       <div class="museBGSize" id="u16353"><!-- simple frame --></div>
      </div>
      <div class="Button clearfix grpelem shared_content" id="pbuttonu16728" data-sizepolicy="fluidWidth" data-pintopage="page_fixedCenter" data-content-guid="pbuttonu16728_content"><!-- group -->
       <!-- m_editable region-id="editable-static-tag-U16728" template="index.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
       <a class="nonblock nontext Scalehover museBGSize clearfix grpelem" id="buttonu16728" href="<?php echo get_permalink( mxp_get_page_by_slug( 'video' ) ); ?>" data-href="page:U37782" data-muse-uid="U16728"><!-- container box --><div class="clearfix grpelem" id="u25024"><!-- group --><div class="clearfix grpelem" id="u16731"><!-- group --><!-- m_editable region-id="editable-static-tag-U16729-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class="Hometitle clearfix grpelem" id="u16729-5" data-muse-uid="U16729" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedRight"><!-- content --><p>&nbsp;</p><p id="u16729-3">⎮ VIDEO PRODUCTION</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U16730-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class="Hometitle clearfix grpelem" id="u16730-4" data-muse-uid="U16730" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedRight"><!-- content --><p id="u16730-2">+</p></div><!-- /m_editable --></div></div></a>
       <!-- /m_editable -->
      </div>
      <!-- m_editable region-id="editable-static-tag-U18191-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <div class="clearfix grpelem" id="u18191-4" data-muse-uid="U18191" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
       <p id="u18191-2">Work</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U16364-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <div class="Hometitle clearfix grpelem shared_content" id="u16364-6" data-muse-uid="U16364" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-content-guid="u16364-6_content"><!-- content -->
       <p id="u16364-2">Some projects</p>
       <p id="u16364-4">I have worked on.</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U16369-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <div class="Hometitle clearfix grpelem shared_content" id="u16369-4" data-muse-uid="U16369" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-content-guid="u16369-4_content"><!-- content -->
       <p id="u16369-2">Below there are projects which I have put my heart and passions on.</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U36009-BP_infinity" template="index.html" data-type="image" -->
      <div class="clip_frame grpelem" id="u36009" data-muse-uid="U36009" data-muse-type="img_frame" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- image -->
       <img class="block temp_no_img_src" id="u36009_img" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/logo%20ver%203.png?crc=4064509805" alt="" width="71" height="71" data-muse-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/logo%20ver%203.png?crc=4064509805" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
      </div>
      <!-- /m_editable -->
      <div class="Button clearfix grpelem" id="pbuttonu56387" data-sizepolicy="fluidWidth" data-pintopage="page_fixedCenter"><!-- group -->
       <!-- m_editable region-id="editable-static-tag-U56387" template="index.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
       <a class="nonblock nontext Scalehover museBGSize clearfix grpelem" id="buttonu56387" href="<?php echo get_permalink( mxp_get_page_by_slug( 'web-content' ) ); ?>" data-href="page:U38116" data-muse-uid="U56387"><!-- container box --><!-- m_editable region-id="editable-static-tag-U56389-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class="Hometitle clearfix grpelem shared_content" id="u56389-5" data-muse-uid="U56389" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u56389-5_content"><!-- content --><p id="u56389">&nbsp;</p><p id="u56389-3">⎮ WEBSITE CONTENT</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U56390-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class="Hometitle clearfix grpelem shared_content" id="u56390-4" data-muse-uid="U56390" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u56390-4_content"><!-- content --><p>+</p></div><!-- /m_editable --></a>
       <!-- /m_editable -->
      </div>
      <div class="Button clearfix grpelem" id="pbuttonu56408" data-sizepolicy="fluidWidth" data-pintopage="page_fixedCenter"><!-- group -->
       <!-- m_editable region-id="editable-static-tag-U56408" template="index.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
       <a class="nonblock nontext Scalehover museBGSize clearfix grpelem" id="buttonu56408" href="<?php echo get_permalink( mxp_get_page_by_slug( 'development' ) ); ?>" data-href="page:U38283" data-muse-uid="U56408"><!-- container box --><!-- m_editable region-id="editable-static-tag-U56410-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class="Hometitle clearfix grpelem shared_content" id="u56410-5" data-muse-uid="U56410" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u56410-5_content"><!-- content --><p id="u56410">&nbsp;</p><p id="u56410-3">⎮DEVELOPMENT - PHP &amp; JS</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U56411-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class="Hometitle clearfix grpelem shared_content" id="u56411-4" data-muse-uid="U56411" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u56411-4_content"><!-- content --><p>+</p></div><!-- /m_editable --></a>
       <!-- /m_editable -->
      </div>
      <div class="Button clearfix grpelem" id="pbuttonu16900" data-sizepolicy="fluidWidth" data-pintopage="page_fixedCenter"><!-- group -->
       <!-- m_editable region-id="editable-static-tag-U16900" template="index.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
       <a class="nonblock nontext Scalehover museBGSize clearfix grpelem" id="buttonu16900" href="<?php echo get_permalink( mxp_get_page_by_slug( 'project-management' ) ); ?>" data-href="page:U37949" data-muse-uid="U16900"><!-- container box --><!-- m_editable region-id="editable-static-tag-U16903-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class="Hometitle clearfix grpelem shared_content" id="u16903-4" data-muse-uid="U16903" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u16903-4_content"><!-- content --><p id="u16903-2">⎮ PROJECT MANAGEMENT</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U16901-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class="Hometitle clearfix grpelem shared_content" id="u16901-4" data-muse-uid="U16901" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u16901-4_content"><!-- content --><p>+</p></div><!-- /m_editable --></a>
       <!-- /m_editable -->
      </div>
      <div class="Button clearfix grpelem" id="pbuttonu16831" data-sizepolicy="fluidWidth" data-pintopage="page_fixedCenter"><!-- group -->
       <!-- m_editable region-id="editable-static-tag-U16831" template="index.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
       <a class="nonblock nontext Scalehover museBGSize clearfix grpelem" id="buttonu16831" href="<?php echo get_permalink( mxp_get_page_by_slug( 'web-design' ) ); ?>" data-href="page:U54068" data-muse-uid="U16831"><!-- container box --><div class="clearfix grpelem" id="u25029"><!-- group --><div class="clearfix grpelem" id="u16835"><!-- group --><!-- m_editable region-id="editable-static-tag-U16833-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class="Hometitle clearfix grpelem shared_content" id="u16833-5" data-muse-uid="U16833" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u16833-5_content"><!-- content --><p id="u16833">&nbsp;</p><p id="u16833-3">⎮ WEB DESIGN - HTML, CSS, JS</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U16832-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class="Hometitle clearfix grpelem shared_content" id="u16832-4" data-muse-uid="U16832" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u16832-4_content"><!-- content --><p>+</p></div><!-- /m_editable --></div></div></a>
       <!-- /m_editable -->
      </div>
      <div class="Button clearfix grpelem" id="pbuttonu16788" data-sizepolicy="fluidWidth" data-pintopage="page_fixedCenter"><!-- group -->
       <!-- m_editable region-id="editable-static-tag-U16788" template="index.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
       <a class="nonblock nontext Scalehover museBGSize clearfix grpelem" id="buttonu16788" href="<?php echo get_permalink( mxp_get_page_by_slug( 'node' ) ); ?>" data-href="page:U38617" data-muse-uid="U16788"><!-- container box --><!-- m_editable region-id="editable-static-tag-U16790-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class="Hometitle clearfix grpelem shared_content" id="u16790-5" data-muse-uid="U16790" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u16790-5_content"><!-- content --><p id="u16790">&nbsp;</p><p id="u16790-3">⎮ NODE.JS</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U16789-BP_infinity" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><div class="Hometitle clearfix grpelem shared_content" id="u16789-4" data-muse-uid="U16789" data-muse-type="txt_frame" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u16789-4_content"><!-- content --><p id="u16789-2">+</p></div><!-- /m_editable --></a>
       <!-- /m_editable -->
      </div>
      <a class="anchor_item grpelem shared_content" id="about-me" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-content-guid="about-me_content"></a>
      <a class="anchor_item grpelem shared_content" id="portfolio" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-content-guid="portfolio_content"></a>
      <a class="anchor_item grpelem" id="skills" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"></a>
      <a class="anchor_item grpelem shared_content" id="contact" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-content-guid="contact_content"></a>
     </div>
    </div>
    <div class="verticalspacer" data-offset-top="10901" data-content-above-spacer="10900" data-content-below-spacer="613" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"></div>
    <div class="browser_width grpelem" id="u28540-bw">
     <div id="u28540"><!-- group -->
      <div class="clearfix" id="u28540_align_to_page">
       <a class="nonblock nontext anim_swing transition clearfix grpelem" id="u28549-4" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#home_page" data-href="anchor:U82:U12542" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content --><p>HOME</p></a>
       <div class="clearfix grpelem" id="pbuttonu28638"><!-- column -->
        <a class="nonblock nontext Button anim_swing transition rounded-corners clearfix colelem shared_content" id="buttonu28638" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#home_page" data-href="anchor:U82:U12542" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="pbuttonu28638" data-content-guid="buttonu28638_content"><!-- container box --><div class="clip_frame grpelem" id="u28639" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- svg --><img class="svg temp_no_img_src" id="u28640" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted-svg-173x9.svg?crc=4269935345" width="18" height="10" alt="" data-mu-svgfallback="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted%20svg%20173x9_poster_.png?crc=4273604416" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/></div></a>
        <div class="clip_frame colelem" id="u28556" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="pbuttonu28638"><!-- image -->
         <img class="block temp_no_img_src" id="u28556_img" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/logo%20ver%203.png?crc=4064509805" alt="" width="62" height="62" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
        </div>
        <div class="clearfix colelem shared_content" id="u28555-4" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="pbuttonu28638" data-content-guid="u28555-4_content"><!-- content -->
         <p>CREATIVE VIBE</p>
        </div>
        <div class="clearfix colelem" id="ppu28646"><!-- group -->
         <div class="clearfix grpelem" id="pu28646"><!-- group -->
          <div class="clearfix grpelem" id="u28646"><!-- column -->
           <div class="clip_frame colelem shared_content" id="u28648" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u28648_content"><!-- svg -->
            <img class="svg temp_no_img_src" id="u28649" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted-svg-1501x152.svg?crc=4224355670" width="21" height="21" alt="" data-mu-svgfallback="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted%20svg%201501x152_poster_.png?crc=411065957" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
           </div>
           <div class="transition clearfix colelem shared_content" id="u28647-4" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u28647-4_content"><!-- content -->
            <p>COFFEE CUPS</p>
           </div>
          </div>
          <div class="size_fixed grpelem" id="u28544" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="pu28646"><!-- custom html -->
           
1<span class="u28544">20</span>

          </div>
         </div>
         <div class="clearfix grpelem" id="pu28656"><!-- group -->
          <div class="clearfix grpelem" id="u28656"><!-- column -->
           <div class="clip_frame colelem shared_content" id="u28659" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u28659_content"><!-- svg -->
            <img class="svg temp_no_img_src" id="u28660" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted-svg-125x120.svg?crc=4102626465" width="22" height="21" alt="" data-mu-svgfallback="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted%20svg%20125x120_poster_.png?crc=109296164" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
           </div>
           <div class="transition clearfix colelem shared_content" id="u28657-4" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u28657-4_content"><!-- content -->
            <p>POSITIVE FEEDBACK</p>
           </div>
          </div>
          <div class="size_fixed grpelem" id="u28545" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="pu28656"><!-- custom html -->
           
1<span class="u28545">60</span>

          </div>
         </div>
         <div class="clearfix grpelem" id="u28641"><!-- column -->
          <div class="clip_frame colelem shared_content" id="u28644" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u28644_content"><!-- svg -->
           <img class="svg temp_no_img_src" id="u28645" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted-svg-1644x159.svg?crc=4219610415" width="22" height="21" alt="" data-mu-svgfallback="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted%20svg%201644x159_poster_.png?crc=337680474" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
          </div>
          <div class="transition clearfix colelem shared_content" id="u28643-4" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u28643-4_content"><!-- content -->
           <p>PROJECTS</p>
          </div>
         </div>
         <div class="clearfix grpelem" id="u28651"><!-- column -->
          <div class="clip_frame colelem shared_content" id="u28652" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u28652_content"><!-- svg -->
           <img class="svg temp_no_img_src" id="u28653" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted-svg-1341x144.svg?crc=302613537" width="20" height="22" alt="" data-mu-svgfallback="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted%20svg%201341x144_poster_.png?crc=4280301335" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
          </div>
          <div class="transition clearfix colelem shared_content" id="u28655-4" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-content-guid="u28655-4_content"><!-- content -->
           <p>NEW IDEAS</p>
          </div>
         </div>
         <div class="size_fixed grpelem" id="u28542" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="ppu28646"><!-- custom html -->
          
0<span class="u28542">11</span>

         </div>
         <div class="size_fixed grpelem" id="u28543" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="ppu28646"><!-- custom html -->
          
1<span class="u28543">80</span>

         </div>
        </div>
        <div class="clearfix colelem" id="pu28548-4"><!-- group -->
         <a class="nonblock nontext transition clearfix grpelem" id="u28548-4" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#service" data-href="anchor:U82:U18909" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="pu28548-4"><!-- content --><p>SERVICE</p></a>
         <a class="nonblock nontext transition clearfix grpelem" id="u28550-4" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#experience" data-href="anchor:U82:U18912" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="pu28548-4"><!-- content --><p>EXPERIENCE</p></a>
         <a class="nonblock nontext transition clearfix grpelem" id="u28551-4" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#portfolio" data-href="anchor:U82:U18915" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="pu28548-4"><!-- content --><p>PORTFOLIO</p></a>
         <a class="nonblock nontext transition clearfix grpelem" id="u28553-4" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#skills" data-href="anchor:U82:U18918" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="pu28548-4"><!-- content --><p>SKILLS</p></a>
         <a class="nonblock nontext transition clearfix grpelem" id="u28554-4" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#contact" data-href="anchor:U82:U18924" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="pu28548-4"><!-- content --><p>BLOG</p></a>
        </div>
        <div class="transition clearfix colelem shared_content" id="u28552-4" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-leftadjustmentdoneby="pbuttonu28638" data-content-guid="u28552-4_content"><!-- content -->
         <p id="u28552-2">© 2018 All rights reserved.</p>
        </div>
       </div>
       <a class="nonblock nontext transition clearfix grpelem" id="u44503-4" href="<?php echo get_permalink( mxp_get_page_by_slug( 'index' ) ); ?>#contact" data-href="anchor:U82:U18924" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content --><p>CONTACT ME</p></a>
      </div>
     </div>
    </div>
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/code.jpg?crc=317001909" alt="" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_380" data-max-width="380"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu28539"><!-- group -->
     <span class="rounded-corners placeholder" data-placeholder-for="u28539_content"><!-- placeholder node --></span>
     <span class="Button menuSideSlideNav-Btn transition placeholder" data-placeholder-for="buttonu28599_content"><!-- placeholder node --></span>
     <div class="Button menuSideSlideNavLeft rgba-background clearfix temp_no_id" data-orig-id="buttonu28600"><!-- container box -->
      <span class="menuSideSlideNavBG grpelem placeholder" data-placeholder-for="u28615_content"><!-- placeholder node --></span>
      <span class="nonblock nontext Button transition clearfix grpelem placeholder" data-placeholder-for="buttonu28607_content"><!-- placeholder node --></span>
      <span class="nonblock nontext Button transition clearfix grpelem placeholder" data-placeholder-for="buttonu28601_content"><!-- placeholder node --></span>
      <span class="nonblock nontext Button transition clearfix grpelem placeholder" data-placeholder-for="buttonu28616_content"><!-- placeholder node --></span>
      <span class="nonblock nontext Button transition clearfix grpelem placeholder" data-placeholder-for="buttonu28620_content"><!-- placeholder node --></span>
      <span class="nonblock nontext Button transition clearfix grpelem placeholder" data-placeholder-for="buttonu28611_content"><!-- placeholder node --></span>
      <span class="nonblock nontext Button anim_swing transition clearfix grpelem placeholder" data-placeholder-for="buttonu28613_content"><!-- placeholder node --></span>
      <span class="nonblock nontext Button transition clearfix grpelem placeholder" data-placeholder-for="buttonu44185_content"><!-- placeholder node --></span>
      <div class="Button menuSideSlideNavLeft clearfix grpelem temp_no_id" data-sizepolicy="fixed" data-pintopage="page_fluidx" data-orig-id="buttonu28628"><!-- container box -->
       <div class="menuSideSlideNavBG clearfix grpelem temp_no_id" data-orig-id="u28636"><!-- column -->
        <span class="clearfix colelem placeholder" data-placeholder-for="u28629_content"><!-- placeholder node --></span>
        <span class="clip_frame colelem placeholder" data-placeholder-for="u28634_content"><!-- placeholder node --></span>
       </div>
       <span class="clearfix grpelem placeholder" data-placeholder-for="u28637-4_content"><!-- placeholder node --></span>
      </div>
     </div>
    </div>
    <div class="clearfix grpelem" id="ppu57957"><!-- column -->
     <div class="clearfix colelem temp_no_id" data-orig-id="pu57957"><!-- group -->
      <div class="gradient clearfix grpelem temp_no_id" data-orig-id="u57957"><!-- group -->
       <div class="Button clearfix grpelem temp_no_id" title="Parallax" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-orig-id="buttonu57893"><!-- container box -->
        <div class="clearfix grpelem temp_no_id" data-orig-id="u57897"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U57898-BP_380" template="index.html" data-type="image" -->
         <div class="clip_frame grpelem temp_no_id" data-muse-uid="U57898" data-muse-type="img_frame" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-orig-id="u57898"><!-- image -->
          <img class="block temp_no_id temp_no_img_src" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/4c0a1107328x491.jpg?crc=386957515" alt="" title="Layer_4" width="327" height="491" data-muse-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/4c0a1107328x491.jpg?crc=386957515" data-orig-id="u57898_img" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
         </div>
         <!-- /m_editable -->
         <div class="grpelem" id="u57901" title="Layer_6" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- simple frame --></div>
         <!-- m_editable region-id="editable-static-tag-U57900-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
         <span class="clearfix grpelem placeholder" data-placeholder-for="u57900-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U57902-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
         <span class="clearfix grpelem placeholder" data-placeholder-for="u57902-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
        </div>
        <!-- m_editable region-id="editable-static-tag-U57894-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u57894-5_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
       </div>
      </div>
      <span class="anchor_item grpelem placeholder" data-placeholder-for="home_page_content"><!-- placeholder node --></span>
     </div>
     <span class="anchor_item colelem placeholder" data-placeholder-for="about-me_content"><!-- placeholder node --></span>
     <!-- m_editable region-id="editable-static-tag-U12550-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
     <span class="wow-fadeInUp clearfix colelem placeholder" data-placeholder-for="u12550-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U12351-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
     <span class="wow-fadeInUpDelay400ms clearfix colelem placeholder" data-placeholder-for="u12351-7_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <div class="size_fluid_width_height colelem temp_no_id" data-pintopage="page_fluidx" data-sizepolicy="fluidWidthHeight" data-orig-id="u56451"><!-- custom html -->
      <div class="fluid_height_spacer"></div>
      
    <iframe class="actAsDiv" style="width:100%;height:100%;" src="//player.vimeo.com/video/282543732?title=1&amp;byline=0&amp;portrait=0&amp;color=FFFFFF&amp;autoplay=0&amp;loop=0&amp;wmode=transparent" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

     </div>
     <!-- m_editable region-id="editable-static-tag-U12488-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
     <span class="nonblock nontext transition clearfix colelem placeholder" data-placeholder-for="u12488-8_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <div class="browser_width colelem" id="u14976-bw">
      <div class="museBGSize temp_no_id" data-orig-id="u14976"><!-- column -->
       <div class="clearfix" id="u14976_align_to_page">
        <span class="anchor_item colelem placeholder" data-placeholder-for="service_content"><!-- placeholder node --></span>
        <!-- m_editable region-id="editable-static-tag-U12555-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
        <span class="Hometitle clearfix colelem placeholder" data-placeholder-for="u12555-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U12556-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
        <span class="Hometitle clearfix colelem placeholder" data-placeholder-for="u12556-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
        <div class="clearfix colelem temp_no_id" data-orig-id="pu21524"><!-- group -->
         <div class="clearfix grpelem temp_no_id" data-orig-id="u21524"><!-- group -->
          <div class="wow-fadeInLeft rounded-corners clearfix grpelem temp_no_id" data-orig-id="u14537"><!-- group -->
           <div class="wow-fadeInLeft clip_frame grpelem temp_no_id" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-orig-id="u16295"><!-- svg -->
            <img class="svg temp_no_id temp_no_img_src" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted-svg-3516x345.svg?crc=251218904" width="23" height="24" alt="" data-mu-svgfallback="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted%20svg%203516x345_poster_.png?crc=5761938" data-orig-id="u16293" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
           </div>
          </div>
         </div>
         <div class="clearfix grpelem temp_no_id" data-orig-id="u21528"><!-- group -->
          <div class="wow-fadeInRight rounded-corners clearfix grpelem temp_no_id" data-orig-id="u14764"><!-- group -->
           <div class="wow-fadeInRight clip_frame grpelem temp_no_id" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-orig-id="u16235"><!-- svg -->
            <img class="svg temp_no_id temp_no_img_src" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted-svg-4271x481.svg?crc=161071075" width="26" height="31" alt="" data-mu-svgfallback="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted%20svg%204271x481_poster_.png?crc=3813368301" data-orig-id="u16233" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
           </div>
          </div>
         </div>
        </div>
        <div class="clearfix colelem temp_no_id" data-orig-id="pu14513-6"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U14513-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
         <span class="wow-fadeInLeft clearfix grpelem placeholder" data-placeholder-for="u14513-6_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U14734-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
         <span class="wow-fadeInRight clearfix grpelem placeholder" data-placeholder-for="u14734-6_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="pu21532"><!-- group -->
         <div class="clearfix grpelem temp_no_id" data-orig-id="u21532"><!-- group -->
          <div class="wow-fadeInUp rounded-corners clearfix grpelem temp_no_id" data-orig-id="u14758"><!-- group -->
           <div class="wow-fadeInUp clip_frame grpelem temp_no_id" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-orig-id="u16315"><!-- svg -->
            <img class="svg temp_no_id temp_no_img_src" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted-svg-2577x194.svg?crc=270274859" width="28" height="23" alt="" data-mu-svgfallback="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted%20svg%202577x194_poster_.png?crc=28861627" data-orig-id="u16313" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
           </div>
          </div>
         </div>
         <div class="clearfix grpelem temp_no_id" data-orig-id="u21544"><!-- group -->
          <div class="wow-fadeInUp rounded-corners clearfix grpelem temp_no_id" data-orig-id="u14773"><!-- group -->
           <div class="wow-fadeInLeft clip_frame grpelem temp_no_id" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-orig-id="u16255"><!-- svg -->
            <img class="svg temp_no_id temp_no_img_src" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted-svg-6378x302.svg?crc=41784042" width="33" height="16" alt="" data-mu-svgfallback="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted%20svg%206378x302_poster_.png?crc=31205111" data-orig-id="u16253" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
           </div>
          </div>
         </div>
        </div>
        <div class="clearfix colelem" id="pu14728-6"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U14728-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
         <span class="wow-fadeInUp clearfix grpelem placeholder" data-placeholder-for="u14728-6_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U14670-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
         <span class="wow-fadeInUp clearfix grpelem placeholder" data-placeholder-for="u14670-6_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem temp_no_id" data-orig-id="pu21540"><!-- group -->
         <div class="clearfix grpelem temp_no_id" data-orig-id="u21540"><!-- group -->
          <div class="wow-fadeInLeft rounded-corners clearfix grpelem temp_no_id" data-orig-id="u14742"><!-- group -->
           <div class="wow-fadeInLeft clip_frame grpelem temp_no_id" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-orig-id="u16305"><!-- svg -->
            <img class="svg temp_no_id temp_no_img_src" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted-svg-5351x535.svg?crc=4225744208" width="28" height="29" alt="" data-mu-svgfallback="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted%20svg%205351x535_poster_.png?crc=4290198450" data-orig-id="u16303" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
           </div>
          </div>
         </div>
         <div class="clearfix grpelem temp_no_id" data-orig-id="u21548"><!-- group -->
          <div class="wow-fadeInUp rounded-corners clearfix grpelem temp_no_id" data-orig-id="u14770"><!-- group -->
           <div class="wow-fadeInUp clip_frame grpelem temp_no_id" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-orig-id="u16275"><!-- svg -->
            <img class="svg temp_no_id temp_no_img_src" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted-svg-978x97.svg?crc=437872459" width="28" height="34" alt="" data-mu-svgfallback="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/pasted%20svg%20978x97_poster_.png?crc=479167487" data-orig-id="u16273" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
           </div>
          </div>
         </div>
        </div>
        <div class="clearfix colelem temp_no_id" data-orig-id="pu14652-6"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U14652-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
         <span class="wow-fadeInLeft clearfix grpelem placeholder" data-placeholder-for="u14652-6_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U14703-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
         <span class="wow-fadeInUp clearfix grpelem placeholder" data-placeholder-for="u14703-6_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
        </div>
       </div>
      </div>
     </div>
     <div class="clearfix colelem" id="pu16198"><!-- group -->
      <div class="browser_width grpelem temp_no_id" data-orig-id="u16198-bw">
       <div class="temp_no_id" data-orig-id="u16198"><!-- group -->
        <div class="clearfix temp_no_id" data-orig-id="u16198_align_to_page">
         <span class="grpelem placeholder" data-placeholder-for="u16186_content"><!-- placeholder node --></span>
         <!-- m_editable region-id="editable-static-tag-U14983-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
         <span class="Hometitle clearfix grpelem placeholder" data-placeholder-for="u14983-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U15600-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
         <span class="Hometitle clearfix grpelem placeholder" data-placeholder-for="u15600-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U16076-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
         <span class="Hometitle clearfix grpelem placeholder" data-placeholder-for="u16076-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U14980-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
         <span class="Hometitle clearfix grpelem placeholder" data-placeholder-for="u14980-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <span class="wow-fadeInLeft rounded-corners clearfix grpelem placeholder" data-placeholder-for="u14938_content"><!-- placeholder node --></span>
         <span class="wow-fadeInLeft rounded-corners clearfix grpelem placeholder" data-placeholder-for="u14944_content"><!-- placeholder node --></span>
         <span class="wow-fadeInLeft rounded-corners clearfix grpelem placeholder" data-placeholder-for="u16059_content"><!-- placeholder node --></span>
         <span class="wow-fadeInUp rounded-corners clearfix grpelem placeholder" data-placeholder-for="u15020_content"><!-- placeholder node --></span>
         <span class="wow-fadeInUp rounded-corners clearfix grpelem placeholder" data-placeholder-for="u16081_content"><!-- placeholder node --></span>
         <span class="wow-fadeInUp rounded-corners clearfix grpelem placeholder" data-placeholder-for="u15441_content"><!-- placeholder node --></span>
         <span class="wow-fadeInUp rounded-corners clearfix grpelem placeholder" data-placeholder-for="u16122_content"><!-- placeholder node --></span>
         <span class="wow-fadeInUp rounded-corners clearfix grpelem placeholder" data-placeholder-for="u15479_content"><!-- placeholder node --></span>
         <span class="wow-fadeInUp rounded-corners clearfix grpelem placeholder" data-placeholder-for="u16153_content"><!-- placeholder node --></span>
         <span class="wow-fadeInLeft grpelem placeholder" data-placeholder-for="u15394_content"><!-- placeholder node --></span>
         <span class="wow-fadeInLeft grpelem placeholder" data-placeholder-for="u16104_content"><!-- placeholder node --></span>
         <span class="wow-fadeInLeft grpelem placeholder" data-placeholder-for="u15436_content"><!-- placeholder node --></span>
         <span class="wow-fadeInLeft grpelem placeholder" data-placeholder-for="u16136_content"><!-- placeholder node --></span>
         <span class="wow-fadeInLeft grpelem placeholder" data-placeholder-for="u15473_content"><!-- placeholder node --></span>
         <span class="wow-fadeInLeft grpelem placeholder" data-placeholder-for="u16172_content"><!-- placeholder node --></span>
         <!-- m_editable region-id="editable-static-tag-U15010-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
         <span class="wow-fadeInLeft clearfix grpelem placeholder" data-placeholder-for="u15010-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <span class="wow-fadeInLeft shadow rounded-corners clearfix grpelem placeholder" data-placeholder-for="u15403_content"><!-- placeholder node --></span>
         <span class="wow-fadeInLeft shadow rounded-corners clearfix grpelem placeholder" data-placeholder-for="u16096_content"><!-- placeholder node --></span>
         <span class="wow-fadeInLeft shadow rounded-corners clearfix grpelem placeholder" data-placeholder-for="u15456_content"><!-- placeholder node --></span>
         <span class="wow-fadeInLeft shadow rounded-corners clearfix grpelem placeholder" data-placeholder-for="u16112_content"><!-- placeholder node --></span>
         <span class="wow-fadeInLeft shadow rounded-corners clearfix grpelem placeholder" data-placeholder-for="u15469_content"><!-- placeholder node --></span>
         <span class="wow-fadeInLeft shadow rounded-corners clearfix grpelem placeholder" data-placeholder-for="u16140_content"><!-- placeholder node --></span>
         <span class="anchor_item grpelem placeholder" data-placeholder-for="experience_content"><!-- placeholder node --></span>
        </div>
       </div>
      </div>
      <span class="browser_width grpelem placeholder" data-placeholder-for="u47114-bw_content"><!-- placeholder node --></span>
      <div class="browser_width grpelem temp_no_id" data-orig-id="u16388-bw">
       <div class="temp_no_id" data-orig-id="u16388"><!-- simple frame --></div>
      </div>
      <span class="browser_width grpelem placeholder" data-placeholder-for="u16373-bw_content"><!-- placeholder node --></span>
      <span class="browser_width grpelem placeholder" data-placeholder-for="u16353-bw_content"><!-- placeholder node --></span>
      <span class="Button clearfix grpelem placeholder" data-placeholder-for="pbuttonu16728_content"><!-- placeholder node --></span>
      <!-- m_editable region-id="editable-static-tag-U16364-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <span class="Hometitle clearfix grpelem placeholder" data-placeholder-for="u16364-6_content"><!-- placeholder node --></span>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U16369-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <span class="Hometitle clearfix grpelem placeholder" data-placeholder-for="u16369-4_content"><!-- placeholder node --></span>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U36009-BP_380" template="index.html" data-type="image" -->
      <div class="clip_frame grpelem temp_no_id" data-muse-uid="U36009" data-muse-type="img_frame" data-orig-id="u36009"><!-- image -->
       <img class="block temp_no_id temp_no_img_src" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/logo%20ver%203.png?crc=4064509805" alt="" data-muse-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/logo%20ver%203.png?crc=4064509805" data-heightwidthratio="1" data-image-width="35" data-image-height="35" data-orig-id="u36009_img" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
      </div>
      <!-- /m_editable -->
      <div class="Button clearfix grpelem temp_no_id" data-sizepolicy="fluidWidth" data-pintopage="page_fixedCenter" data-orig-id="pbuttonu56387"><!-- group -->
       <!-- m_editable region-id="editable-static-tag-U56387" template="index.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
       <a class="nonblock nontext Scalehover museBGSize clearfix grpelem temp_no_id" href="<?php echo get_permalink( mxp_get_page_by_slug( 'web-content' ) ); ?>" data-href="page:U38116" data-muse-uid="U56387" data-orig-id="buttonu56387"><!-- container box --><!-- m_editable region-id="editable-static-tag-U56389-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><span class="Hometitle clearfix grpelem placeholder" data-placeholder-for="u56389-5_content"><!-- placeholder node --></span><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U56390-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><span class="Hometitle clearfix grpelem placeholder" data-placeholder-for="u56390-4_content"><!-- placeholder node --></span><!-- /m_editable --></a>
       <!-- /m_editable -->
      </div>
      <div class="Button clearfix grpelem temp_no_id" data-sizepolicy="fluidWidth" data-pintopage="page_fixedCenter" data-orig-id="pbuttonu56408"><!-- group -->
       <!-- m_editable region-id="editable-static-tag-U56408" template="index.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
       <a class="nonblock nontext Scalehover museBGSize clearfix grpelem temp_no_id" href="<?php echo get_permalink( mxp_get_page_by_slug( 'development' ) ); ?>" data-href="page:U38283" data-muse-uid="U56408" data-orig-id="buttonu56408"><!-- container box --><!-- m_editable region-id="editable-static-tag-U56410-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><span class="Hometitle clearfix grpelem placeholder" data-placeholder-for="u56410-5_content"><!-- placeholder node --></span><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U56411-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><span class="Hometitle clearfix grpelem placeholder" data-placeholder-for="u56411-4_content"><!-- placeholder node --></span><!-- /m_editable --></a>
       <!-- /m_editable -->
      </div>
      <div class="Button clearfix grpelem temp_no_id" data-sizepolicy="fluidWidth" data-pintopage="page_fixedCenter" data-orig-id="pbuttonu16900"><!-- group -->
       <!-- m_editable region-id="editable-static-tag-U16900" template="index.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
       <a class="nonblock nontext Scalehover museBGSize clearfix grpelem temp_no_id" href="<?php echo get_permalink( mxp_get_page_by_slug( 'project-management' ) ); ?>" data-href="page:U37949" data-muse-uid="U16900" data-orig-id="buttonu16900"><!-- container box --><!-- m_editable region-id="editable-static-tag-U16903-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><span class="Hometitle clearfix grpelem placeholder" data-placeholder-for="u16903-4_content"><!-- placeholder node --></span><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U16901-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><span class="Hometitle clearfix grpelem placeholder" data-placeholder-for="u16901-4_content"><!-- placeholder node --></span><!-- /m_editable --></a>
       <!-- /m_editable -->
      </div>
      <div class="Button clearfix grpelem temp_no_id" data-sizepolicy="fluidWidth" data-pintopage="page_fixedCenter" data-orig-id="pbuttonu16831"><!-- group -->
       <!-- m_editable region-id="editable-static-tag-U16831" template="index.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
       <a class="nonblock nontext Scalehover museBGSize clearfix grpelem temp_no_id" href="<?php echo get_permalink( mxp_get_page_by_slug( 'web-design' ) ); ?>" data-href="page:U54068" data-muse-uid="U16831" data-orig-id="buttonu16831"><!-- container box --><div class="clearfix grpelem temp_no_id" data-orig-id="u25029"><!-- group --><div class="grpelem temp_no_id" data-sizepolicy="fixed" data-pintopage="page_fixedRight" data-orig-id="u16835"><!-- simple frame --></div><!-- m_editable region-id="editable-static-tag-U16833-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><span class="Hometitle clearfix grpelem placeholder" data-placeholder-for="u16833-5_content"><!-- placeholder node --></span><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U16832-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><span class="Hometitle clearfix grpelem placeholder" data-placeholder-for="u16832-4_content"><!-- placeholder node --></span><!-- /m_editable --></div></a>
       <!-- /m_editable -->
      </div>
      <div class="Button clearfix grpelem temp_no_id" data-sizepolicy="fluidWidth" data-pintopage="page_fixedCenter" data-orig-id="pbuttonu16788"><!-- group -->
       <!-- m_editable region-id="editable-static-tag-U16788" template="index.html" data-type="html" data-ice-options="clickable" data-ice-editable="link" -->
       <a class="nonblock nontext Scalehover museBGSize clearfix grpelem temp_no_id" href="<?php echo get_permalink( mxp_get_page_by_slug( 'node' ) ); ?>" data-href="page:U38617" data-muse-uid="U16788" data-orig-id="buttonu16788"><!-- container box --><!-- m_editable region-id="editable-static-tag-U16790-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><span class="Hometitle clearfix grpelem placeholder" data-placeholder-for="u16790-5_content"><!-- placeholder node --></span><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U16789-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" --><span class="Hometitle clearfix grpelem placeholder" data-placeholder-for="u16789-4_content"><!-- placeholder node --></span><!-- /m_editable --></a>
       <!-- /m_editable -->
      </div>
      <span class="anchor_item grpelem placeholder" data-placeholder-for="portfolio_content"><!-- placeholder node --></span>
     </div>
     <div class="clearfix colelem" id="pu57267-3"><!-- group -->
      <!-- m_editable region-id="editable-static-tag-U57267-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <span class="museBGSize clearfix grpelem placeholder" data-placeholder-for="u57267-3_content"><!-- placeholder node --></span>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U18331-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <span class="Hometitle clearfix grpelem placeholder" data-placeholder-for="u18331-6_content"><!-- placeholder node --></span>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U18336-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->
      <span class="Hometitle clearfix grpelem placeholder" data-placeholder-for="u18336-4_content"><!-- placeholder node --></span>
      <!-- /m_editable -->
      <form class="form-grp clearfix grpelem temp_no_id" method="post" enctype="multipart/form-data" action="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/scripts/form-u18365.php" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-orig-id="widgetu18365"><!-- none box -->
       <div class="fld-grp clearfix grpelem temp_no_id" data-required="true" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-orig-id="widgetu18373"><!-- none box -->
        <!-- m_editable region-id="editable-static-tag-U18374-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <label class="fld-label actAsDiv clearfix grpelem temp_no_id" data-muse-uid="U18374" data-muse-type="txt_frame" for="widgetu18373_input" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-orig-id="u18374-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u18374-2_content"><!-- placeholder node --></span></label>
        <!-- /m_editable -->
        <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix grpelem temp_no_id" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-orig-id="u18375-3"><!-- content --><span class="wrapped-input placeholder" data-placeholder-for="widgetu18373_input_content"><!-- placeholder node --></span></span>
       </div>
       <div class="fld-grp clearfix grpelem temp_no_id" data-required="true" data-type="email" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-orig-id="widgetu18378"><!-- none box -->
        <!-- m_editable region-id="editable-static-tag-U18379-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <label class="fld-label actAsDiv clearfix grpelem temp_no_id" data-muse-uid="U18379" data-muse-type="txt_frame" for="widgetu18378_input" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-orig-id="u18379-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u18379-2_content"><!-- placeholder node --></span></label>
        <!-- /m_editable -->
        <span class="fld-input NoWrap actAsDiv transition rounded-corners clearfix grpelem temp_no_id" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-orig-id="u18381-3"><!-- content --><span class="wrapped-input placeholder" data-placeholder-for="widgetu18378_input_content"><!-- placeholder node --></span></span>
       </div>
       <!-- m_editable region-id="editable-static-tag-U18377-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem temp_no_id" data-muse-uid="U18377" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-orig-id="u18377-4"><!-- content -->
        <span class="placeholder" data-placeholder-for="u18377-4_0_content"><!-- placeholder node --></span>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U18366-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem temp_no_id" data-muse-uid="U18366" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-orig-id="u18366-4"><!-- content -->
        <span class="placeholder" data-placeholder-for="u18366-4_0_content"><!-- placeholder node --></span>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U18367-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem temp_no_id" data-muse-uid="U18367" data-muse-type="txt_frame" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-orig-id="u18367-4"><!-- content -->
        <span class="placeholder" data-placeholder-for="u18367-2_content"><!-- placeholder node --></span>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U18372-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <button class="submit-btn NoWrap transition rounded-corners clearfix grpelem temp_no_id" data-muse-uid="U18372" data-muse-type="txt_frame" type="submit" value="SUBMIT" tabindex="8" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-orig-id="u18372-4"><!-- content -->
        <div style="margin-top:-7px;height:7px;">
         <span class="placeholder" data-placeholder-for="u18372-2_content"><!-- placeholder node --></span>
        </div>
       </button>
       <!-- /m_editable -->
       <div class="fld-grp clearfix grpelem temp_no_id" data-required="false" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-orig-id="widgetu18368"><!-- none box -->
        <!-- m_editable region-id="editable-static-tag-U18369-BP_380" template="index.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <label class="fld-label actAsDiv clearfix grpelem temp_no_id" data-muse-uid="U18369" data-muse-type="txt_frame" for="widgetu18368_input" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-orig-id="u18369-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u18369-2_content"><!-- placeholder node --></span></label>
        <!-- /m_editable -->
        <span class="fld-textarea actAsDiv transition rounded-corners clearfix grpelem temp_no_id" data-sizepolicy="fixed" data-pintopage="page_fixedLeft" data-orig-id="u18370-3"><!-- content --><span class="wrapped-input placeholder" data-placeholder-for="widgetu18368_input_content"><!-- placeholder node --></span></span>
       </div>
      </form>
      <span class="anchor_item grpelem placeholder" data-placeholder-for="contact_content"><!-- placeholder node --></span>
     </div>
    </div>
    <div class="verticalspacer" data-offset-top="6534" data-content-above-spacer="6534" data-content-below-spacer="0" data-sizepolicy="fixed" data-pintopage="page_fixedLeft"></div>
    <div class="browser_width grpelem temp_no_id" data-orig-id="u28540-bw">
     <div class="temp_no_id" data-orig-id="u28540"><!-- column -->
      <div class="clearfix temp_no_id" data-orig-id="u28540_align_to_page">
       <span class="nonblock nontext Button anim_swing transition rounded-corners clearfix colelem placeholder" data-placeholder-for="buttonu28638_content"><!-- placeholder node --></span>
       <div class="clip_frame colelem temp_no_id" data-sizepolicy="fixed" data-pintopage="page_fixedCenter" data-orig-id="u28556"><!-- image -->
        <img class="block temp_no_id temp_no_img_src" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/logo%20ver%203.png?crc=4064509805" alt="" width="41" height="41" data-orig-id="u28556_img" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
       </div>
       <span class="clearfix colelem placeholder" data-placeholder-for="u28555-4_content"><!-- placeholder node --></span>
       <div class="clearfix colelem" id="pu28641"><!-- group -->
        <div class="clearfix grpelem temp_no_id" data-orig-id="u28641"><!-- column -->
         <span class="clip_frame colelem placeholder" data-placeholder-for="u28644_content"><!-- placeholder node --></span>
         <div class="clearfix colelem" id="u28642-4" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
          <p>180</p>
         </div>
         <span class="transition clearfix colelem placeholder" data-placeholder-for="u28643-4_content"><!-- placeholder node --></span>
        </div>
        <div class="clearfix grpelem temp_no_id" data-orig-id="u28646"><!-- column -->
         <span class="clip_frame colelem placeholder" data-placeholder-for="u28648_content"><!-- placeholder node --></span>
         <div class="clearfix colelem" id="u28650-4" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
          <p>75</p>
         </div>
         <span class="transition clearfix colelem placeholder" data-placeholder-for="u28647-4_content"><!-- placeholder node --></span>
        </div>
       </div>
       <div class="clearfix colelem" id="pu28651"><!-- group -->
        <div class="clearfix grpelem temp_no_id" data-orig-id="u28651"><!-- column -->
         <span class="clip_frame colelem placeholder" data-placeholder-for="u28652_content"><!-- placeholder node --></span>
         <div class="clearfix colelem" id="u28654-4" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
          <p>453</p>
         </div>
         <span class="transition clearfix colelem placeholder" data-placeholder-for="u28655-4_content"><!-- placeholder node --></span>
        </div>
        <div class="clearfix grpelem temp_no_id" data-orig-id="u28656"><!-- column -->
         <span class="clip_frame colelem placeholder" data-placeholder-for="u28659_content"><!-- placeholder node --></span>
         <div class="clearfix colelem" id="u28658-4" data-ibe-flags="txtStyleSrc" data-sizepolicy="fixed" data-pintopage="page_fixedCenter"><!-- content -->
          <p>890</p>
         </div>
         <span class="transition clearfix colelem placeholder" data-placeholder-for="u28657-4_content"><!-- placeholder node --></span>
        </div>
       </div>
       <span class="transition clearfix colelem placeholder" data-placeholder-for="u28552-4_content"><!-- placeholder node --></span>
      </div>
     </div>
    </div>
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/code.jpg?crc=317001909" alt="" src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/images/blank.gif?crc=4208392903"/>
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
var muse_init=function(){require.config({baseUrl:"//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/"});require(["jquery","museutils","whatinput","jquery.musepolyfill.bgsize","webpro","musewpdisclosure","musewpslideshow","jquery.museoverlay","touchswipe","jquery.watch","jquery.museresponsive"],function(c){var $ = c;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.resizeHeight('.browser_width');/* resize height */
Muse.Utils.requestAnimationFrame(function() { $('body').addClass('initialized'); });/* mark body as initialized */
Muse.Utils.makeButtonsVisibleAfterSettingMinWidth();/* body */
Muse.Utils.initWidget('#accordionu47543', ['#bp_infinity'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:false,defaultIndex:0}); });/* #accordionu47543 */
Muse.Utils.initWidget('#accordionu47635', ['#bp_infinity'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:false,defaultIndex:0}); });/* #accordionu47635 */
Muse.Utils.initWidget('#pamphletu46625', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'click',deactivationEvent:'none',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:300,hideAllContentsFirst:false,triggersOnTop:false,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false,isResponsive:false}); });/* #pamphletu46625 */
Muse.Utils.initWidget('#widgetu18365', ['#bp_infinity', '#bp_380'], function(elem) { return new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu18365 */
Muse.Utils.fullPage('#page');/* 100% height page */
$( '.breakpoint' ).registerBreakpoint();/* Register breakpoints */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/scripts/require.js?crc=7928878" type="text/javascript" async data-main="//robertcreativevibe.com/wp-content/themes/mxp_base_theme/mxp_theme/scripts/museconfig.js?crc=310584261" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();">if( window.jQuery ){ var $ = jQuery.noConflict(); } </script>
  
  <!--HTML Widget code-->
  

<script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 
// t: current time, b: begInnIng value, c: change In value, d: duration
jQuery.easing['jswing'] = jQuery.easing['swing'];

jQuery.extend( jQuery.easing,
{
	def: 'easeOutQuad',
	swing: function (x, t, b, c, d) {
		//alert(jQuery.easing.default);
		return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
	},
	easeInQuad: function (x, t, b, c, d) {
		return c*(t/=d)*t + b;
	},
	easeOutQuad: function (x, t, b, c, d) {
		return -c *(t/=d)*(t-2) + b;
	},
	easeInOutQuad: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},
	easeInCubic: function (x, t, b, c, d) {
		return c*(t/=d)*t*t + b;
	},
	easeOutCubic: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t + 1) + b;
	},
	easeInOutCubic: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	},
	easeInQuart: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t + b;
	},
	easeOutQuart: function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	},
	easeInOutQuart: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	},
	easeInQuint: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t*t + b;
	},
	easeOutQuint: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t*t*t + 1) + b;
	},
	easeInOutQuint: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
		return c/2*((t-=2)*t*t*t*t + 2) + b;
	},
	easeInSine: function (x, t, b, c, d) {
		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
	},
	easeOutSine: function (x, t, b, c, d) {
		return c * Math.sin(t/d * (Math.PI/2)) + b;
	},
	easeInOutSine: function (x, t, b, c, d) {
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	},
	easeInExpo: function (x, t, b, c, d) {
		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
	},
	easeOutExpo: function (x, t, b, c, d) {
		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
	},
	easeInOutExpo: function (x, t, b, c, d) {
		if (t==0) return b;
		if (t==d) return b+c;
		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},
	easeInCirc: function (x, t, b, c, d) {
		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
	},
	easeOutCirc: function (x, t, b, c, d) {
		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
	},
	easeInOutCirc: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
	},
	easeInElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
	},
	easeOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	},
	easeInOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
	},
	easeInBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*(t/=d)*t*((s+1)*t - s) + b;
	},
	easeOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
	},
	easeInOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158; 
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	},
	easeInBounce: function (x, t, b, c, d) {
		return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
	},
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (1/2.75)) {
			return c*(7.5625*t*t) + b;
		} else if (t < (2/2.75)) {
			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
		} else if (t < (2.5/2.75)) {
			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
		} else {
			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
		}
	},
	easeInOutBounce: function (x, t, b, c, d) {
		if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
		return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
	}
});
</script>










<script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 



$(function(){
    var u17604span = $('span.u17604'),
		initialvalue = u17604span.text();
	u17604span.text('0');
	$(window).scroll(function() {
		if ($(this).scrollTop() > 7200) {
			u17604span
				.prop('Counter',0)
				.animate(
					{'Counter':initialvalue},
					{
						duration: 4000,
						easing: 'swing',
						step: function (now) {u17604span.text(Math.ceil(now));}
					}
				);
			return;
    	}
	});
});







</script>


<script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 
// t: current time, b: begInnIng value, c: change In value, d: duration
jQuery.easing['jswing'] = jQuery.easing['swing'];

jQuery.extend( jQuery.easing,
{
	def: 'easeOutQuad',
	swing: function (x, t, b, c, d) {
		//alert(jQuery.easing.default);
		return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
	},
	easeInQuad: function (x, t, b, c, d) {
		return c*(t/=d)*t + b;
	},
	easeOutQuad: function (x, t, b, c, d) {
		return -c *(t/=d)*(t-2) + b;
	},
	easeInOutQuad: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},
	easeInCubic: function (x, t, b, c, d) {
		return c*(t/=d)*t*t + b;
	},
	easeOutCubic: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t + 1) + b;
	},
	easeInOutCubic: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	},
	easeInQuart: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t + b;
	},
	easeOutQuart: function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	},
	easeInOutQuart: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	},
	easeInQuint: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t*t + b;
	},
	easeOutQuint: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t*t*t + 1) + b;
	},
	easeInOutQuint: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
		return c/2*((t-=2)*t*t*t*t + 2) + b;
	},
	easeInSine: function (x, t, b, c, d) {
		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
	},
	easeOutSine: function (x, t, b, c, d) {
		return c * Math.sin(t/d * (Math.PI/2)) + b;
	},
	easeInOutSine: function (x, t, b, c, d) {
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	},
	easeInExpo: function (x, t, b, c, d) {
		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
	},
	easeOutExpo: function (x, t, b, c, d) {
		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
	},
	easeInOutExpo: function (x, t, b, c, d) {
		if (t==0) return b;
		if (t==d) return b+c;
		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},
	easeInCirc: function (x, t, b, c, d) {
		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
	},
	easeOutCirc: function (x, t, b, c, d) {
		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
	},
	easeInOutCirc: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
	},
	easeInElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
	},
	easeOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	},
	easeInOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
	},
	easeInBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*(t/=d)*t*((s+1)*t - s) + b;
	},
	easeOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
	},
	easeInOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158; 
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	},
	easeInBounce: function (x, t, b, c, d) {
		return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
	},
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (1/2.75)) {
			return c*(7.5625*t*t) + b;
		} else if (t < (2/2.75)) {
			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
		} else if (t < (2.5/2.75)) {
			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
		} else {
			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
		}
	},
	easeInOutBounce: function (x, t, b, c, d) {
		if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
		return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
	}
});
</script>










<script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 



$(function(){
    var u17631span = $('span.u17631'),
		initialvalue = u17631span.text();
	u17631span.text('0');
	$(window).scroll(function() {
		if ($(this).scrollTop() > 7200) {
			u17631span
				.prop('Counter',0)
				.animate(
					{'Counter':initialvalue},
					{
						duration: 4000,
						easing: 'swing',
						step: function (now) {u17631span.text(Math.ceil(now));}
					}
				);
			return;
    	}
	});
});







</script>


<script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 
// t: current time, b: begInnIng value, c: change In value, d: duration
jQuery.easing['jswing'] = jQuery.easing['swing'];

jQuery.extend( jQuery.easing,
{
	def: 'easeOutQuad',
	swing: function (x, t, b, c, d) {
		//alert(jQuery.easing.default);
		return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
	},
	easeInQuad: function (x, t, b, c, d) {
		return c*(t/=d)*t + b;
	},
	easeOutQuad: function (x, t, b, c, d) {
		return -c *(t/=d)*(t-2) + b;
	},
	easeInOutQuad: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},
	easeInCubic: function (x, t, b, c, d) {
		return c*(t/=d)*t*t + b;
	},
	easeOutCubic: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t + 1) + b;
	},
	easeInOutCubic: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	},
	easeInQuart: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t + b;
	},
	easeOutQuart: function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	},
	easeInOutQuart: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	},
	easeInQuint: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t*t + b;
	},
	easeOutQuint: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t*t*t + 1) + b;
	},
	easeInOutQuint: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
		return c/2*((t-=2)*t*t*t*t + 2) + b;
	},
	easeInSine: function (x, t, b, c, d) {
		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
	},
	easeOutSine: function (x, t, b, c, d) {
		return c * Math.sin(t/d * (Math.PI/2)) + b;
	},
	easeInOutSine: function (x, t, b, c, d) {
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	},
	easeInExpo: function (x, t, b, c, d) {
		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
	},
	easeOutExpo: function (x, t, b, c, d) {
		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
	},
	easeInOutExpo: function (x, t, b, c, d) {
		if (t==0) return b;
		if (t==d) return b+c;
		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},
	easeInCirc: function (x, t, b, c, d) {
		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
	},
	easeOutCirc: function (x, t, b, c, d) {
		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
	},
	easeInOutCirc: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
	},
	easeInElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
	},
	easeOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	},
	easeInOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
	},
	easeInBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*(t/=d)*t*((s+1)*t - s) + b;
	},
	easeOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
	},
	easeInOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158; 
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	},
	easeInBounce: function (x, t, b, c, d) {
		return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
	},
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (1/2.75)) {
			return c*(7.5625*t*t) + b;
		} else if (t < (2/2.75)) {
			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
		} else if (t < (2.5/2.75)) {
			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
		} else {
			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
		}
	},
	easeInOutBounce: function (x, t, b, c, d) {
		if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
		return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
	}
});
</script>










<script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 



$(function(){
    var u17919span = $('span.u17919'),
		initialvalue = u17919span.text();
	u17919span.text('0');
	$(window).scroll(function() {
		if ($(this).scrollTop() > 7600) {
			u17919span
				.prop('Counter',0)
				.animate(
					{'Counter':initialvalue},
					{
						duration: 4000,
						easing: 'swing',
						step: function (now) {u17919span.text(Math.ceil(now));}
					}
				);
			return;
    	}
	});
});







</script>


<script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 
// t: current time, b: begInnIng value, c: change In value, d: duration
jQuery.easing['jswing'] = jQuery.easing['swing'];

jQuery.extend( jQuery.easing,
{
	def: 'easeOutQuad',
	swing: function (x, t, b, c, d) {
		//alert(jQuery.easing.default);
		return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
	},
	easeInQuad: function (x, t, b, c, d) {
		return c*(t/=d)*t + b;
	},
	easeOutQuad: function (x, t, b, c, d) {
		return -c *(t/=d)*(t-2) + b;
	},
	easeInOutQuad: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},
	easeInCubic: function (x, t, b, c, d) {
		return c*(t/=d)*t*t + b;
	},
	easeOutCubic: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t + 1) + b;
	},
	easeInOutCubic: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	},
	easeInQuart: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t + b;
	},
	easeOutQuart: function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	},
	easeInOutQuart: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	},
	easeInQuint: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t*t + b;
	},
	easeOutQuint: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t*t*t + 1) + b;
	},
	easeInOutQuint: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
		return c/2*((t-=2)*t*t*t*t + 2) + b;
	},
	easeInSine: function (x, t, b, c, d) {
		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
	},
	easeOutSine: function (x, t, b, c, d) {
		return c * Math.sin(t/d * (Math.PI/2)) + b;
	},
	easeInOutSine: function (x, t, b, c, d) {
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	},
	easeInExpo: function (x, t, b, c, d) {
		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
	},
	easeOutExpo: function (x, t, b, c, d) {
		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
	},
	easeInOutExpo: function (x, t, b, c, d) {
		if (t==0) return b;
		if (t==d) return b+c;
		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},
	easeInCirc: function (x, t, b, c, d) {
		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
	},
	easeOutCirc: function (x, t, b, c, d) {
		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
	},
	easeInOutCirc: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
	},
	easeInElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
	},
	easeOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	},
	easeInOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
	},
	easeInBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*(t/=d)*t*((s+1)*t - s) + b;
	},
	easeOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
	},
	easeInOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158; 
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	},
	easeInBounce: function (x, t, b, c, d) {
		return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
	},
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (1/2.75)) {
			return c*(7.5625*t*t) + b;
		} else if (t < (2/2.75)) {
			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
		} else if (t < (2.5/2.75)) {
			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
		} else {
			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
		}
	},
	easeInOutBounce: function (x, t, b, c, d) {
		if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
		return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
	}
});
</script>










<script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 



$(function(){
    var u17946span = $('span.u17946'),
		initialvalue = u17946span.text();
	u17946span.text('0');
	$(window).scroll(function() {
		if ($(this).scrollTop() > 7600) {
			u17946span
				.prop('Counter',0)
				.animate(
					{'Counter':initialvalue},
					{
						duration: 4000,
						easing: 'swing',
						step: function (now) {u17946span.text(Math.ceil(now));}
					}
				);
			return;
    	}
	});
});







</script>


<script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 
// t: current time, b: begInnIng value, c: change In value, d: duration
jQuery.easing['jswing'] = jQuery.easing['swing'];

jQuery.extend( jQuery.easing,
{
	def: 'easeOutQuad',
	swing: function (x, t, b, c, d) {
		//alert(jQuery.easing.default);
		return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
	},
	easeInQuad: function (x, t, b, c, d) {
		return c*(t/=d)*t + b;
	},
	easeOutQuad: function (x, t, b, c, d) {
		return -c *(t/=d)*(t-2) + b;
	},
	easeInOutQuad: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},
	easeInCubic: function (x, t, b, c, d) {
		return c*(t/=d)*t*t + b;
	},
	easeOutCubic: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t + 1) + b;
	},
	easeInOutCubic: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	},
	easeInQuart: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t + b;
	},
	easeOutQuart: function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	},
	easeInOutQuart: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	},
	easeInQuint: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t*t + b;
	},
	easeOutQuint: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t*t*t + 1) + b;
	},
	easeInOutQuint: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
		return c/2*((t-=2)*t*t*t*t + 2) + b;
	},
	easeInSine: function (x, t, b, c, d) {
		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
	},
	easeOutSine: function (x, t, b, c, d) {
		return c * Math.sin(t/d * (Math.PI/2)) + b;
	},
	easeInOutSine: function (x, t, b, c, d) {
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	},
	easeInExpo: function (x, t, b, c, d) {
		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
	},
	easeOutExpo: function (x, t, b, c, d) {
		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
	},
	easeInOutExpo: function (x, t, b, c, d) {
		if (t==0) return b;
		if (t==d) return b+c;
		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},
	easeInCirc: function (x, t, b, c, d) {
		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
	},
	easeOutCirc: function (x, t, b, c, d) {
		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
	},
	easeInOutCirc: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
	},
	easeInElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
	},
	easeOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	},
	easeInOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
	},
	easeInBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*(t/=d)*t*((s+1)*t - s) + b;
	},
	easeOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
	},
	easeInOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158; 
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	},
	easeInBounce: function (x, t, b, c, d) {
		return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
	},
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (1/2.75)) {
			return c*(7.5625*t*t) + b;
		} else if (t < (2/2.75)) {
			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
		} else if (t < (2.5/2.75)) {
			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
		} else {
			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
		}
	},
	easeInOutBounce: function (x, t, b, c, d) {
		if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
		return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
	}
});
</script>










<script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 



$(function(){
    var u17856span = $('span.u17856'),
		initialvalue = u17856span.text();
	u17856span.text('0');
	$(window).scroll(function() {
		if ($(this).scrollTop() > 7600) {
			u17856span
				.prop('Counter',0)
				.animate(
					{'Counter':initialvalue},
					{
						duration: 4000,
						easing: 'swing',
						step: function (now) {u17856span.text(Math.ceil(now));}
					}
				);
			return;
    	}
	});
});







</script>


<script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 
// t: current time, b: begInnIng value, c: change In value, d: duration
jQuery.easing['jswing'] = jQuery.easing['swing'];

jQuery.extend( jQuery.easing,
{
	def: 'easeOutQuad',
	swing: function (x, t, b, c, d) {
		//alert(jQuery.easing.default);
		return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
	},
	easeInQuad: function (x, t, b, c, d) {
		return c*(t/=d)*t + b;
	},
	easeOutQuad: function (x, t, b, c, d) {
		return -c *(t/=d)*(t-2) + b;
	},
	easeInOutQuad: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},
	easeInCubic: function (x, t, b, c, d) {
		return c*(t/=d)*t*t + b;
	},
	easeOutCubic: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t + 1) + b;
	},
	easeInOutCubic: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	},
	easeInQuart: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t + b;
	},
	easeOutQuart: function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	},
	easeInOutQuart: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	},
	easeInQuint: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t*t + b;
	},
	easeOutQuint: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t*t*t + 1) + b;
	},
	easeInOutQuint: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
		return c/2*((t-=2)*t*t*t*t + 2) + b;
	},
	easeInSine: function (x, t, b, c, d) {
		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
	},
	easeOutSine: function (x, t, b, c, d) {
		return c * Math.sin(t/d * (Math.PI/2)) + b;
	},
	easeInOutSine: function (x, t, b, c, d) {
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	},
	easeInExpo: function (x, t, b, c, d) {
		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
	},
	easeOutExpo: function (x, t, b, c, d) {
		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
	},
	easeInOutExpo: function (x, t, b, c, d) {
		if (t==0) return b;
		if (t==d) return b+c;
		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},
	easeInCirc: function (x, t, b, c, d) {
		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
	},
	easeOutCirc: function (x, t, b, c, d) {
		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
	},
	easeInOutCirc: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
	},
	easeInElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
	},
	easeOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	},
	easeInOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
	},
	easeInBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*(t/=d)*t*((s+1)*t - s) + b;
	},
	easeOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
	},
	easeInOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158; 
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	},
	easeInBounce: function (x, t, b, c, d) {
		return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
	},
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (1/2.75)) {
			return c*(7.5625*t*t) + b;
		} else if (t < (2/2.75)) {
			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
		} else if (t < (2.5/2.75)) {
			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
		} else {
			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
		}
	},
	easeInOutBounce: function (x, t, b, c, d) {
		if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
		return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
	}
});
</script>










<script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 



$(function(){
    var u17884span = $('span.u17884'),
		initialvalue = u17884span.text();
	u17884span.text('0');
	$(window).scroll(function() {
		if ($(this).scrollTop() > 7600) {
			u17884span
				.prop('Counter',0)
				.animate(
					{'Counter':initialvalue},
					{
						duration: 4000,
						easing: 'swing',
						step: function (now) {u17884span.text(Math.ceil(now));}
					}
				);
			return;
    	}
	});
});







</script>


<script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 
// t: current time, b: begInnIng value, c: change In value, d: duration
jQuery.easing['jswing'] = jQuery.easing['swing'];

jQuery.extend( jQuery.easing,
{
	def: 'easeOutQuad',
	swing: function (x, t, b, c, d) {
		//alert(jQuery.easing.default);
		return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
	},
	easeInQuad: function (x, t, b, c, d) {
		return c*(t/=d)*t + b;
	},
	easeOutQuad: function (x, t, b, c, d) {
		return -c *(t/=d)*(t-2) + b;
	},
	easeInOutQuad: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},
	easeInCubic: function (x, t, b, c, d) {
		return c*(t/=d)*t*t + b;
	},
	easeOutCubic: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t + 1) + b;
	},
	easeInOutCubic: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	},
	easeInQuart: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t + b;
	},
	easeOutQuart: function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	},
	easeInOutQuart: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	},
	easeInQuint: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t*t + b;
	},
	easeOutQuint: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t*t*t + 1) + b;
	},
	easeInOutQuint: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
		return c/2*((t-=2)*t*t*t*t + 2) + b;
	},
	easeInSine: function (x, t, b, c, d) {
		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
	},
	easeOutSine: function (x, t, b, c, d) {
		return c * Math.sin(t/d * (Math.PI/2)) + b;
	},
	easeInOutSine: function (x, t, b, c, d) {
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	},
	easeInExpo: function (x, t, b, c, d) {
		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
	},
	easeOutExpo: function (x, t, b, c, d) {
		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
	},
	easeInOutExpo: function (x, t, b, c, d) {
		if (t==0) return b;
		if (t==d) return b+c;
		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},
	easeInCirc: function (x, t, b, c, d) {
		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
	},
	easeOutCirc: function (x, t, b, c, d) {
		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
	},
	easeInOutCirc: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
	},
	easeInElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
	},
	easeOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	},
	easeInOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
	},
	easeInBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*(t/=d)*t*((s+1)*t - s) + b;
	},
	easeOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
	},
	easeInOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158; 
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	},
	easeInBounce: function (x, t, b, c, d) {
		return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
	},
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (1/2.75)) {
			return c*(7.5625*t*t) + b;
		} else if (t < (2/2.75)) {
			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
		} else if (t < (2.5/2.75)) {
			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
		} else {
			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
		}
	},
	easeInOutBounce: function (x, t, b, c, d) {
		if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
		return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
	}
});
</script>










<script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 



$(function(){
    var u18115span = $('span.u18115'),
		initialvalue = u18115span.text();
	u18115span.text('0');
	$(window).scroll(function() {
		if ($(this).scrollTop() > 8100) {
			u18115span
				.prop('Counter',0)
				.animate(
					{'Counter':initialvalue},
					{
						duration: 4000,
						easing: 'swing',
						step: function (now) {u18115span.text(Math.ceil(now));}
					}
				);
			return;
    	}
	});
});







</script>


<script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 
// t: current time, b: begInnIng value, c: change In value, d: duration
jQuery.easing['jswing'] = jQuery.easing['swing'];

jQuery.extend( jQuery.easing,
{
	def: 'easeOutQuad',
	swing: function (x, t, b, c, d) {
		//alert(jQuery.easing.default);
		return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
	},
	easeInQuad: function (x, t, b, c, d) {
		return c*(t/=d)*t + b;
	},
	easeOutQuad: function (x, t, b, c, d) {
		return -c *(t/=d)*(t-2) + b;
	},
	easeInOutQuad: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},
	easeInCubic: function (x, t, b, c, d) {
		return c*(t/=d)*t*t + b;
	},
	easeOutCubic: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t + 1) + b;
	},
	easeInOutCubic: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	},
	easeInQuart: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t + b;
	},
	easeOutQuart: function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	},
	easeInOutQuart: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	},
	easeInQuint: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t*t + b;
	},
	easeOutQuint: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t*t*t + 1) + b;
	},
	easeInOutQuint: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
		return c/2*((t-=2)*t*t*t*t + 2) + b;
	},
	easeInSine: function (x, t, b, c, d) {
		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
	},
	easeOutSine: function (x, t, b, c, d) {
		return c * Math.sin(t/d * (Math.PI/2)) + b;
	},
	easeInOutSine: function (x, t, b, c, d) {
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	},
	easeInExpo: function (x, t, b, c, d) {
		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
	},
	easeOutExpo: function (x, t, b, c, d) {
		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
	},
	easeInOutExpo: function (x, t, b, c, d) {
		if (t==0) return b;
		if (t==d) return b+c;
		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},
	easeInCirc: function (x, t, b, c, d) {
		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
	},
	easeOutCirc: function (x, t, b, c, d) {
		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
	},
	easeInOutCirc: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
	},
	easeInElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
	},
	easeOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	},
	easeInOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
	},
	easeInBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*(t/=d)*t*((s+1)*t - s) + b;
	},
	easeOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
	},
	easeInOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158; 
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	},
	easeInBounce: function (x, t, b, c, d) {
		return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
	},
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (1/2.75)) {
			return c*(7.5625*t*t) + b;
		} else if (t < (2/2.75)) {
			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
		} else if (t < (2.5/2.75)) {
			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
		} else {
			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
		}
	},
	easeInOutBounce: function (x, t, b, c, d) {
		if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
		return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
	}
});
</script>










<script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 



$(function(){
    var u18147span = $('span.u18147'),
		initialvalue = u18147span.text();
	u18147span.text('0');
	$(window).scroll(function() {
		if ($(this).scrollTop() > 8100) {
			u18147span
				.prop('Counter',0)
				.animate(
					{'Counter':initialvalue},
					{
						duration: 4000,
						easing: 'swing',
						step: function (now) {u18147span.text(Math.ceil(now));}
					}
				);
			return;
    	}
	});
});







</script>


<script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 

	jQuery(document).ready(function () {

	   jQuery('body').on('click','[mxp-link]',function(){
		 	var link = jQuery(this).attr('mxp-link');
			window.location.href = link;
		 });

	});

</script>

	

<script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 
// t: current time, b: begInnIng value, c: change In value, d: duration
jQuery.easing['jswing'] = jQuery.easing['swing'];

jQuery.extend( jQuery.easing,
{
	def: 'easeOutQuad',
	swing: function (x, t, b, c, d) {
		//alert(jQuery.easing.default);
		return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
	},
	easeInQuad: function (x, t, b, c, d) {
		return c*(t/=d)*t + b;
	},
	easeOutQuad: function (x, t, b, c, d) {
		return -c *(t/=d)*(t-2) + b;
	},
	easeInOutQuad: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},
	easeInCubic: function (x, t, b, c, d) {
		return c*(t/=d)*t*t + b;
	},
	easeOutCubic: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t + 1) + b;
	},
	easeInOutCubic: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	},
	easeInQuart: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t + b;
	},
	easeOutQuart: function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	},
	easeInOutQuart: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	},
	easeInQuint: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t*t + b;
	},
	easeOutQuint: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t*t*t + 1) + b;
	},
	easeInOutQuint: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
		return c/2*((t-=2)*t*t*t*t + 2) + b;
	},
	easeInSine: function (x, t, b, c, d) {
		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
	},
	easeOutSine: function (x, t, b, c, d) {
		return c * Math.sin(t/d * (Math.PI/2)) + b;
	},
	easeInOutSine: function (x, t, b, c, d) {
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	},
	easeInExpo: function (x, t, b, c, d) {
		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
	},
	easeOutExpo: function (x, t, b, c, d) {
		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
	},
	easeInOutExpo: function (x, t, b, c, d) {
		if (t==0) return b;
		if (t==d) return b+c;
		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},
	easeInCirc: function (x, t, b, c, d) {
		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
	},
	easeOutCirc: function (x, t, b, c, d) {
		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
	},
	easeInOutCirc: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
	},
	easeInElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
	},
	easeOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	},
	easeInOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
	},
	easeInBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*(t/=d)*t*((s+1)*t - s) + b;
	},
	easeOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
	},
	easeInOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158; 
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	},
	easeInBounce: function (x, t, b, c, d) {
		return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
	},
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (1/2.75)) {
			return c*(7.5625*t*t) + b;
		} else if (t < (2/2.75)) {
			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
		} else if (t < (2.5/2.75)) {
			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
		} else {
			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
		}
	},
	easeInOutBounce: function (x, t, b, c, d) {
		if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
		return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
	}
});
</script>










<script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 



$(function(){
    var u28544span = $('span.u28544'),
		initialvalue = u28544span.text();
	u28544span.text('0');
	$(window).scroll(function() {
		if ($(this).scrollTop() > 900) {
			u28544span
				.prop('Counter',0)
				.animate(
					{'Counter':initialvalue},
					{
						duration: 50000,
						easing: 'swing',
						step: function (now) {u28544span.text(Math.ceil(now));}
					}
				);
			return;
    	}
	});
});







</script>


<script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 
// t: current time, b: begInnIng value, c: change In value, d: duration
jQuery.easing['jswing'] = jQuery.easing['swing'];

jQuery.extend( jQuery.easing,
{
	def: 'easeOutQuad',
	swing: function (x, t, b, c, d) {
		//alert(jQuery.easing.default);
		return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
	},
	easeInQuad: function (x, t, b, c, d) {
		return c*(t/=d)*t + b;
	},
	easeOutQuad: function (x, t, b, c, d) {
		return -c *(t/=d)*(t-2) + b;
	},
	easeInOutQuad: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},
	easeInCubic: function (x, t, b, c, d) {
		return c*(t/=d)*t*t + b;
	},
	easeOutCubic: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t + 1) + b;
	},
	easeInOutCubic: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	},
	easeInQuart: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t + b;
	},
	easeOutQuart: function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	},
	easeInOutQuart: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	},
	easeInQuint: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t*t + b;
	},
	easeOutQuint: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t*t*t + 1) + b;
	},
	easeInOutQuint: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
		return c/2*((t-=2)*t*t*t*t + 2) + b;
	},
	easeInSine: function (x, t, b, c, d) {
		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
	},
	easeOutSine: function (x, t, b, c, d) {
		return c * Math.sin(t/d * (Math.PI/2)) + b;
	},
	easeInOutSine: function (x, t, b, c, d) {
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	},
	easeInExpo: function (x, t, b, c, d) {
		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
	},
	easeOutExpo: function (x, t, b, c, d) {
		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
	},
	easeInOutExpo: function (x, t, b, c, d) {
		if (t==0) return b;
		if (t==d) return b+c;
		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},
	easeInCirc: function (x, t, b, c, d) {
		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
	},
	easeOutCirc: function (x, t, b, c, d) {
		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
	},
	easeInOutCirc: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
	},
	easeInElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
	},
	easeOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	},
	easeInOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
	},
	easeInBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*(t/=d)*t*((s+1)*t - s) + b;
	},
	easeOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
	},
	easeInOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158; 
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	},
	easeInBounce: function (x, t, b, c, d) {
		return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
	},
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (1/2.75)) {
			return c*(7.5625*t*t) + b;
		} else if (t < (2/2.75)) {
			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
		} else if (t < (2.5/2.75)) {
			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
		} else {
			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
		}
	},
	easeInOutBounce: function (x, t, b, c, d) {
		if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
		return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
	}
});
</script>










<script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 



$(function(){
    var u28545span = $('span.u28545'),
		initialvalue = u28545span.text();
	u28545span.text('0');
	$(window).scroll(function() {
		if ($(this).scrollTop() > 900) {
			u28545span
				.prop('Counter',0)
				.animate(
					{'Counter':initialvalue},
					{
						duration: 50000,
						easing: 'swing',
						step: function (now) {u28545span.text(Math.ceil(now));}
					}
				);
			return;
    	}
	});
});







</script>


<script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 
// t: current time, b: begInnIng value, c: change In value, d: duration
jQuery.easing['jswing'] = jQuery.easing['swing'];

jQuery.extend( jQuery.easing,
{
	def: 'easeOutQuad',
	swing: function (x, t, b, c, d) {
		//alert(jQuery.easing.default);
		return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
	},
	easeInQuad: function (x, t, b, c, d) {
		return c*(t/=d)*t + b;
	},
	easeOutQuad: function (x, t, b, c, d) {
		return -c *(t/=d)*(t-2) + b;
	},
	easeInOutQuad: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},
	easeInCubic: function (x, t, b, c, d) {
		return c*(t/=d)*t*t + b;
	},
	easeOutCubic: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t + 1) + b;
	},
	easeInOutCubic: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	},
	easeInQuart: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t + b;
	},
	easeOutQuart: function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	},
	easeInOutQuart: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	},
	easeInQuint: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t*t + b;
	},
	easeOutQuint: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t*t*t + 1) + b;
	},
	easeInOutQuint: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
		return c/2*((t-=2)*t*t*t*t + 2) + b;
	},
	easeInSine: function (x, t, b, c, d) {
		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
	},
	easeOutSine: function (x, t, b, c, d) {
		return c * Math.sin(t/d * (Math.PI/2)) + b;
	},
	easeInOutSine: function (x, t, b, c, d) {
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	},
	easeInExpo: function (x, t, b, c, d) {
		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
	},
	easeOutExpo: function (x, t, b, c, d) {
		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
	},
	easeInOutExpo: function (x, t, b, c, d) {
		if (t==0) return b;
		if (t==d) return b+c;
		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},
	easeInCirc: function (x, t, b, c, d) {
		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
	},
	easeOutCirc: function (x, t, b, c, d) {
		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
	},
	easeInOutCirc: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
	},
	easeInElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
	},
	easeOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	},
	easeInOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
	},
	easeInBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*(t/=d)*t*((s+1)*t - s) + b;
	},
	easeOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
	},
	easeInOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158; 
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	},
	easeInBounce: function (x, t, b, c, d) {
		return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
	},
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (1/2.75)) {
			return c*(7.5625*t*t) + b;
		} else if (t < (2/2.75)) {
			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
		} else if (t < (2.5/2.75)) {
			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
		} else {
			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
		}
	},
	easeInOutBounce: function (x, t, b, c, d) {
		if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
		return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
	}
});
</script>










<script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 



$(function(){
    var u28542span = $('span.u28542'),
		initialvalue = u28542span.text();
	u28542span.text('0');
	$(window).scroll(function() {
		if ($(this).scrollTop() > 900) {
			u28542span
				.prop('Counter',0)
				.animate(
					{'Counter':initialvalue},
					{
						duration: 50000,
						easing: 'swing',
						step: function (now) {u28542span.text(Math.ceil(now));}
					}
				);
			return;
    	}
	});
});







</script>


<script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 
// t: current time, b: begInnIng value, c: change In value, d: duration
jQuery.easing['jswing'] = jQuery.easing['swing'];

jQuery.extend( jQuery.easing,
{
	def: 'easeOutQuad',
	swing: function (x, t, b, c, d) {
		//alert(jQuery.easing.default);
		return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
	},
	easeInQuad: function (x, t, b, c, d) {
		return c*(t/=d)*t + b;
	},
	easeOutQuad: function (x, t, b, c, d) {
		return -c *(t/=d)*(t-2) + b;
	},
	easeInOutQuad: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},
	easeInCubic: function (x, t, b, c, d) {
		return c*(t/=d)*t*t + b;
	},
	easeOutCubic: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t + 1) + b;
	},
	easeInOutCubic: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	},
	easeInQuart: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t + b;
	},
	easeOutQuart: function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	},
	easeInOutQuart: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	},
	easeInQuint: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t*t + b;
	},
	easeOutQuint: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t*t*t + 1) + b;
	},
	easeInOutQuint: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
		return c/2*((t-=2)*t*t*t*t + 2) + b;
	},
	easeInSine: function (x, t, b, c, d) {
		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
	},
	easeOutSine: function (x, t, b, c, d) {
		return c * Math.sin(t/d * (Math.PI/2)) + b;
	},
	easeInOutSine: function (x, t, b, c, d) {
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	},
	easeInExpo: function (x, t, b, c, d) {
		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
	},
	easeOutExpo: function (x, t, b, c, d) {
		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
	},
	easeInOutExpo: function (x, t, b, c, d) {
		if (t==0) return b;
		if (t==d) return b+c;
		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},
	easeInCirc: function (x, t, b, c, d) {
		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
	},
	easeOutCirc: function (x, t, b, c, d) {
		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
	},
	easeInOutCirc: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
	},
	easeInElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
	},
	easeOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	},
	easeInOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
	},
	easeInBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*(t/=d)*t*((s+1)*t - s) + b;
	},
	easeOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
	},
	easeInOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158; 
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	},
	easeInBounce: function (x, t, b, c, d) {
		return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
	},
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (1/2.75)) {
			return c*(7.5625*t*t) + b;
		} else if (t < (2/2.75)) {
			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
		} else if (t < (2.5/2.75)) {
			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
		} else {
			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
		}
	},
	easeInOutBounce: function (x, t, b, c, d) {
		if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
		return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
	}
});
</script>










<script type="text/javascript">if( window.jQuery ){ var $ = jQuery.noConflict(); } 



$(function(){
    var u28543span = $('span.u28543'),
		initialvalue = u28543span.text();
	u28543span.text('0');
	$(window).scroll(function() {
		if ($(this).scrollTop() > 9000) {
			u28543span
				.prop('Counter',0)
				.animate(
					{'Counter':initialvalue},
					{
						duration: 50000,
						easing: 'swing',
						step: function (now) {u28543span.text(Math.ceil(now));}
					}
				);
			return;
    	}
	});
});







</script>

   <?php
wp_footer();
?></body>
</html>
