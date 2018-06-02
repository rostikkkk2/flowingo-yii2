$(document).ready(function() {
  $('.edit').click(function() {
    var siblings = $(this).siblings('form');
    var rmCl = $(siblings).removeClass('hidden');
    var dr = $(this).addClass('hidden');
    var parents_tr =  $(this).parents('.tr');
    var children_td = $(parents_tr).children('td');
    var children_input = $(children_td).children('input');
    var rmclass = $(children_input).removeClass('hidden');
    var find_class_action = $(children_td).children('.action');
    var add_class_hidden = $(find_class_action).addClass('hidden');
    var find_last_td = $(children_td).last();
    var find_form_delete = $(find_last_td).children('form');
    var hide_form_delete = $(find_form_delete).addClass('hidden');
    var find_button_annulment = $(find_last_td).children('button');
    var show_button_annulment = $(find_button_annulment).removeClass('hidden');
  });
});
