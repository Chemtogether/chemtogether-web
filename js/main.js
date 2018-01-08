

// check if side navigation is already opened (based on whether the respective class is set) and switch state
function switchNav() {
  if ($("#sidenav").hasClass("sidenav_open-nav")) {
    closeNav();
  } else {
    openNav();
  }
}






function closeNav() {
  $("#sidenav").removeClass("sidenav_open-nav");
  $("#main").removeClass("sidenav_open-content");
  $("#topnav").removeClass("sidenav_open-content");
  $("#footer-container").removeClass("sidenav_open-content");
  $("#main").unbind("click",closeNav);
  $("#footer-container").unbind("click",closeNav);
  $("#sidenav").click(openNav);
}

function openNav() {
  $("#sidenav").addClass("sidenav_open-nav");
  $("#main").addClass("sidenav_open-content");
  $("#topnav").addClass("sidenav_open-content");
  $("#footer-container").addClass("sidenav_open-content");
  $("#main").click(closeNav);
  $("#footer-container").click(closeNav);
  $("#sidenav").unbind("click",openNav);
}



$("#sidenav").click(openNav);
$("#sidenav").hover(openNav, closeNav);

if (!!('ontouchstart' in window)) {//check for touch device
  //behaviour and events for touch device
}
else {
  $("#sidenav").hover(openNav, closeNav);
}
