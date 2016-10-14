<?php

/**
 * @file
 * tpl file for theming the chat
 *
 */
?>

<div class="embed-responsive" id="outer-chat">
  <div id="chat-button" class="chat-open">
<u></u>  	<?php print $button_text; ?></div>
  <div id="chat-inner">
  	<div id="chat-header" style="">
  		<img src="http://ucal-dev.drupal.com.pe/sites/default/files/logo-ucal.png" alt="Inicio" class="pull-left" style="width: 24px; height: auto" >
	      <button type="button" class="chat-close" style="">
	        <span aria-hidden="true">×</span>
	      </button>
	</div>
    <iframe class="embed-responsive-item" src="<?php print $url; ?>"></iframe>
  </div>
</div>
