(function ($) {

/**
* @file
* Javascript support files.
*
*/

Drupal.behaviors.chat = {
  attach: function (context, settings) {
    var delay = parseInt(Drupal.settings.chat.delay);
    /*$(".chat-open").click( openChat );*/
    $(".chat-open").click(function() {
      clearTimeout(chatInit);
      openChat();
    });
    $(".chat-close").click(function(){
        $("#chat-inner").slideUp("slow", function() { $("#chat-button").show() });
    });
    if (delay) {
      var chatInit = setTimeout(openChat, delay*1000);
    }

    function openChat() {
      $("#chat-inner").slideDown("slow");
      $("#chat-button").hide();
    }  
  }
}

}(jQuery));
