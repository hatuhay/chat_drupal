<?php

/**
 * @file
 * tpl file for theming the chat
 *
 */
?>

<div class="embed-responsive" id="outer-chat">
  <div id="chat-button" class="chat-open"><i class="fa fa-comments-o fa-2x"></i><?php print $button_text; ?></div>
  <div id="chat-inner">
    <div id="chat-header">
      <button type="button" class="chat-close">
        <span aria-hidden="true">&times;</span>
      </button>
	</div>
    <iframe class="embed-responsive-item" src="<?php print $url; ?>"></iframe>
  </div>
</div>
