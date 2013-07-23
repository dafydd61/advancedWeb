$(document).ready(function() {

  $('.reveal-trigger').click(function(event) {
    event.preventDefault();
    var target = $(this).attr('href');
    $(target).slideToggle();
  });

  $('.slide-out-trigger').click(function(event) {
    event.preventDefault();
    var target = $(this).attr('href');
    $(target).addClass('slide-out-content-is-visible');
  });

  $('.slide-out-close').click(function(event) {
    event.preventDefault();
    var target = $(this).attr('href');
    $(target).removeClass('slide-out-content-is-visible');
  });

  $('#showme').click(function(event) {
    event.preventDefault();
    $(this).html("Whoa! That was cool!");
  });

  $('#add-more').click(function(event) {
    event.preventDefault();
    $(this).parent().append(' Hey look - more content!');
  });

  $('#holy-grail-form').submit(function() {
    var form = $(this);
    var action = $(this).attr('action');
    $.get(action, $(this).serialize(), function(data) {
      form.fadeOut(function() {
        form.after(data);
      });
    });
    return false;
  });

});