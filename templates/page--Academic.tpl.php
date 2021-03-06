<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to main-menu administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>

<!-- header -->

<div id="header_wrapper">
<div class="inner">
  <header id="header" class="clearfix">
    <div class="top_right">
      <?php print render($page['user_menu']) ?>
      
      <div id="promo">
      
      	<?php print render($page['promotion_upper_right']) ?>
      
          <div id="socialLinks">
          <!-- Social Links -->        
          <?php if (theme_get_setting('social_links')): ?>
            <span class="social-icons">
             <ul>
              <li><a class="fb" href="<?php echo theme_get_setting('facebook_profile_url'); ?>" target="_blank" rel="me"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="<?php echo theme_get_setting('twitter_profile_url'); ?>" target="_blank" rel="me"><i class="fa fa-twitter"></i></a></li>
              <li><a class="gplus" href="<?php echo theme_get_setting('gplus_profile_url'); ?>" target="_blank" rel="me"><i class="fa fa-google-plus"></i></a></li>
              <li><a class="linkedin" href="<?php echo theme_get_setting('linkedin_profile_url'); ?>" target="_blank" rel="me"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="pinterest" href="<?php echo theme_get_setting('pinterest_profile_url'); ?>" target="_blank" rel="me"><i class="fa fa-pinterest"></i></a></li>
              <li><a class="youtube" href="<?php echo theme_get_setting('youtube_profile_url'); ?>" target="_blank" rel="me"><i class="fa fa-youtube"></i></a></li>
              <li><a class="rss" href="<?php print $front_page; ?>rss.xml"><i class="fa fa-rss"></i></a></li>         
              
             </ul>
            </span>
          <?php endif; ?>
          <!-- End Social Links -->
          <?php print render($page['upper_right_secondary_links']) ?>
          </div><!-- /#socialLinks -->
      </div>
      <div class="menu-wrap">
          <div class="clearfix">
            <nav id="main-menu"  role="navigation">
              <a class="nav-toggle" href="#">Navigation</a>
              <div class="menu-navigation-container">
                <?php $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
                  print drupal_render($main_menu_tree);
                ?>
                <ul class="menu">
                	<li><a class="searchToggle">Search</a></li>
                </ul>
              </div>
              <div class="clear"></div>
            </nav>
            
            <?php print render($page['search']) ?>
            
            <script type="text/javascript">
				jQuery( ".searchToggle" ).click(function() {
				  jQuery( ".region-search" ).toggle(300);
				});
			</script>
			<noscript>
			<style type="text/css">
			.region-search {display:block;}
			.top_right .region-search {width:48%;}
			#main-menu ul.menu:last-child {display:none;}
			
			</style>
			</noscript>
          </div>
    	</div>
    </div>
    <div class="top_left">
      <?php if ($logo): ?>
        <div id="logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img alt="Carbon Sequestration Leadership Forum (CSLF)" src="<?php print $logo; ?>"/></a></div>
      <?php endif; ?>
      <h1 id="site-title">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
        <div id="site-description"><?php print $site_slogan; ?></div>
      </h1>
    </div>
  </header>
</div>
</div>
<!-- End Header -->

<!--<div class="slideshow">
<?php /* if ($is_front): ?>
  <?php print render($page['slideshow']); ?>
<?php endif; */?>
</div> -->

<div id="pageInfo">
	<div class="inner">
		<?php print render($title_prefix); ?>
            <?php if ($title): ?>
                <h1 class="page-title"><?php print $title; ?></h1>
            <?php endif; ?>
        <?php print render($title_suffix); ?>
        
        <?php if (theme_get_setting('breadcrumbs')): ?>
        <div id="breadcrumbs">
          <?php if ($breadcrumb): print $breadcrumb; endif;?>
        </div>
        <?php endif; ?>
	</div>
</div>


<div id="page-wrap" class="academicPage">

  <?php if ($is_front): ?>           
    <?php if ($page['top_first'] || $page['top_second'] || $page['top_third']): ?> 
      <div id="top-area" class="page-wrap clearfix">
        <?php if ($page['top_first']): ?>
        <div class="column one"><?php print render($page['top_first']); ?></div>
        <?php endif; ?>
        <?php if ($page['top_second']): ?>
        <div class="column two"><?php print render($page['top_second']); ?></div>
        <?php endif; ?>
        <?php if ($page['top_third']): ?>
        <div class="column three"><?php print render($page['top_third']); ?></div>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  <?php endif; ?>

  <div id="container">
    <div class="container-wrap">
      <div class="content-sidebar-wrap">
        <div id="content">

          

          <section id="post-content" role="main">
            <?php print $messages; ?>
            
            <?php if (!empty($tabs['#primary'])): ?>
              <div class="tabs-wrapper"><?php print render($tabs); ?></div>
            <?php endif; ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?>
              <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
            <?php print render($page['content']); ?>
          </section>
        </div>
      
        <?php if ($page['sidebar_first']): ?>
          <aside id="sidebar-first" role="complementary"><?php print render($page['sidebar_first']); ?></aside>
        <?php endif; ?>
      
        </div>

        <?php if ($page['sidebar_second']): ?>
          <aside id="sidebar-second" role="complementary"><?php print render($page['sidebar_second']); ?></aside> 
        <?php endif; ?>

    </div>
  </div>

  <?php if ($is_front): ?>

    <div id="footer_wrapper" class="footer_block bottom_widget">
      <?php if ($page['bottom_widget_1'] || $page['bottom_widget_2'] || $page['bottom_widget_3']): ?> 
        <div id="footer-area" class="full-wrap clearfix">
          <?php if ($page['bottom_widget_1']): ?>
          <div class="column"><?php print render($page['bottom_widget_1']); ?></div>
          <?php endif; ?>
          <?php if ($page['bottom_widget_2']): ?>
          <div class="column two"><?php print render($page['bottom_widget_2']); ?></div>
          <?php endif; ?>
          <?php if ($page['bottom_widget_3']): ?>
          <div class="column"><?php print render($page['bottom_widget_3']); ?></div>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>

  <?php endif; ?>

</div>


<!-- Footer -->

<div id="footer">
	<div class="inner">

  <?php if ($page['footer_first'] || $page['footer_second']): ?> 
    <div id="footer-area" class="full-wrap clearfix">
    
      <?php if ($page['footer_first']): ?>
      <div class="column"><?php print render($page['footer_first']); ?></div>
      <?php endif; ?>
      
      <?php if ($page['footer_second']): ?>
      <div class="column two"><?php print render($page['footer_second']); ?></div>
      <?php endif; ?>
      
      <?php if ($page['footer_third']): ?>
      <div class="column three"><?php print render($page['footer_third']); ?>
      
        <!-- Begin MailChimp Signup Form -->
        <div id="mc_embed_signup" class="borderBox">
        <form action="//cslforum.us15.list-manage.com/subscribe/post?u=e368d4d7f5862a5b9a185d9f2&amp;id=d56a8aacde" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" accept-charset="UTF-8">
            <div id="mc_embed_signup_scroll">
            <h3>Subscribe For CSLF Updates</h3>
            <div class="mc-field-group">
                <input aria-label="Enter Your Email" type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter your email to subscribe to e-news.">
                <input aria-label="Submit" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="emailSubscribeBtn">
            </div>
            <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input aria-label="anti-bot-field" type="text" name="b_2a4eda2975db1386dd73be803_fe04ab7d7a" tabindex="-1" value=""></div>
            </div>
        </form>
        </div>
        <!--End mc_embed_signup-->
      
      </div>
      <?php endif; ?>
      
    </div>
  <?php endif; ?>
  


  

  <div class="footer_credit">
      
    <div id="copyright" class="full-wrap clearfix">
      <div class="copyright">&copy; 2008-<?php echo date("Y"); ?> CSLForum.org. All Rights Reserved.</div> 
      
      

    </div>

  </div>
  <div class="credits">
    <a href="http://energy.gov/about-us/web-policies/privacy" target="_blank">Privacy</a>
  </div>
</div>
</div>

<style type="text/css">
	.field { width: 32%; padding:20px;margin-bottom: 10px;}
	.field ul {margin-left:0;}
	.field li {border-top:1px solid rgba(183, 180, 180, 0.5);list-style: none;padding:10px 0;margin-left:0;}
	.field li:first-child {border-top:0;}
	
	.field-label {font-size: 24px;font-family: 'Roboto', sans-serif;font-weight: 900;line-height:1.1;color: #fff;padding-bottom:20px;}
	
	.field-name-field-webinars-and-training {background: #646569;color: #fff;}
	
	.field-name-field-funding-opportunities {background:#5f5451;width:60%;color: #fff;}
	.field-name-field-funding-opportunities li {border-color:#696362;}
	
	.field-name-field-academic-programs {background: #ccc;width:60%;}
	.field-name-field-academic-programs .field-label {color:#383838;}
	.field-name-field-academic-programs li {border-color:rgba(183, 180, 180, 0.5);}
	
	.field-name-field-reports {background:#ddd;}
	.field-name-field-reports .field-label {color:#383838;}
	
	.field h3 {margin-bottom:15px;margin-left:-15px;margin-right:-15px;color:#383838;}
	.field h3:before {content: "\f0d7";font:normal normal normal 18px/1 FontAwesome;margin-right:10px;margin-left:-10px;vertical-align: middle;}
	.field-item {padding:15px 25px;}
	.field h4 {margin-top:25px;text-align: center;font-style: italic;}
	.field a {font-weight: bold;font-size:14.7px;}
	.field p, .field li {font-size:13px;}
	
	@media screen and (max-width: 440px) {
		.field { width: 100%;}
}
	
</style>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script>
	jQuery('.node-masonry-layout').masonry({
		// options
		itemSelector: '.field',
		percentPosition: true,
		gutter: 10
	});
	var counter = 1;

	//jQuery('.field-item h3').each(function(){ 
	//	jQuery(this).nextUntil("h3").andSelf().wrapAll('<div class="minicontain minicontainer-' + counter + '">');
	//});

</script>