<?php

/**
 * @file
 * touch theme implementation to display a block.
 *
 * Available variables:
 * - $block->subject: Block title.
 * - $content: Block content.
 * - $block->module: Module that generated the block.
 * - $block->delta: An ID for the block, unique within each module.
 * - $block->region: The block region embedding the current block.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the following:
 *   - block: The current template type, i.e., "theming hook".
 *   - block-[module]: The module generating the block. For example, the user module
 *     is responsible for handling the default user navigation block. In that case
 *     the class would be "block-user".
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $block_zebra: Outputs 'odd' and 'even' dependent on each block region.
 * - $zebra: Same output as $block_zebra but independent of any block region.
 * - $block_id: Counter dependent on each block region.
 * - $id: Same output as $block_id but independent of any block region.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * @see template_preprocess()
 * @see template_preprocess_block()
 * @see template_process()
 */
?>

  <?php if (!empty($block->subject)): ?>


    <h2 <?php print $title_attributes; ?>><?php print $block->subject ?></h2>

  <?php endif;?>


  <div class="content"<?php print $content_attributes; ?>>
    <?php print $content ?>
    <!-- Begin MailChimp Signup Form -->
<!-- <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css"> -->

<div id="mc_embed_signup" class="borderBox">
<form action="//cslforum.us15.list-manage.com/subscribe/post?u=e368d4d7f5862a5b9a185d9f2&amp;id=d56a8aacde" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" accept-charset="UTF-8">
    <div id="mc_embed_signup_scroll">
	<h3>Follow CSLF to stay up to date on CCS developments:</h3>
    
<span class="social-icons">
         <!--<ul>
          <li><a class="fb" href="//www.facebook.com/CSLFNews/" target="_blank" rel="me"><i class="fa fa-facebook"></i></a></li>
           <li><a class="twitter" href="//twitter.com/search?src=typd&q=cslfnews" target="_blank" rel="me"><i class="fa fa-twitter"></i></a></li>
          
          <li><a class="rss" href="rss.xml"><i class="fa fa-rss"></i></a></li>         
          
         </ul> -->
        </span>
    
<div class="mc-field-group">
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter your email to subscribe to e-news.">
    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="emailSubscribeBtn">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_2a4eda2975db1386dd73be803_fe04ab7d7a" tabindex="-1" value=""></div>

    </div>
</form>
</div>

<!--End mc_embed_signup-->
  </div>
  
