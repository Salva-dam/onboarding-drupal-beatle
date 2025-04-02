(function ($, Drupal) {
  Drupal.behaviors.miTema = {
    attach: function (context, settings) {
      $(context).find('h1').css('color', 'blue');
    }
  };
})(jQuery, Drupal);
