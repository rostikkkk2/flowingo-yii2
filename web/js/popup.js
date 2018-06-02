$().ready(() =>{

  function createPopup(popup_type) {
    var popper = $("#" + popup_type + "_popper");
    var popup = $("#" + popup_type + "_popup");
    popup.hide();

    popper.mouseout(function() {
      popup.hide();
    })
    popper.mouseover(function() {
      popup.show();
      var popper = (popup_type + "_popper", popup_type + "_popup",{
        placement: 'top'
      })
    })
  }

  createPopup('work');
  createPopup('delivery');
  createPopup('flow');
  createPopup('money');
  createPopup('cut');
  createPopup('people');
  createPopup('sale');
  createPopup('percent');
  createPopup('visa');
});
