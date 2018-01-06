

// check if side navigation is already opened (based on whether the respective class is set) and switch state
function switchNav() {
  if ($("#sidenav").hasClass("sidenav_open")) {
    closeNav();
  } else {
    openNav();
  }
}






function closeNav() {
  $("#sidenav").removeClass("sidenav_open");
  $("#main").removeClass("sidenav_open_main");
  $("#topnav").removeClass("sidenav_open_main");

  if (!!('ontouchstart' in window)) {//check for touch device
    $("#main").unbind("click",closeNav);
  }
}

function openNav() {
  $("#sidenav").addClass("sidenav_open");
  $("#main").addClass("sidenav_open_main");
  $("#topnav").addClass("sidenav_open_main");

  if (!!('ontouchstart' in window)) {//check for touch device
    $("#main").click(closeNav);
  }
}





if (!!('ontouchstart' in window)) {//check for touch device
  //behaviour and events for touch device
}
else {
  $("#sidenav").hover(switchNav);
}
