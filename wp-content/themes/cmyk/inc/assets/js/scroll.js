// if(window.location.hash) {
//   jQuery('html,body').animate({
//     scrollTop: jQuery(window.location.hash).offset().top
//   });
// }

jQuery(document).ready(function(){

  // Textarea overflow

  var textarea = null;
  window.addEventListener("load", function() {
    textarea = window.document.querySelector("textarea");
    if(textarea){
      textarea.addEventListener("keypress", function() {
        if(textarea.scrollTop != 0){
          textarea.style.height = textarea.scrollHeight + "px";
        }
      }, false); }
  }, false);

});
