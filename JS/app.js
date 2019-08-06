// Get the current year for the copyright
$('#year').text(new Date().getFullYear());
$("body").scrollspy({target: "#main-nav"})
// add smooth scrolling
$('#main-nav a').on('click', function(e) {
  // check for hash value
  if(this.hash !== '') {
    //prevent default behavior
    e.preventDefault();
    const hash = this.hash;
    // animate smooth scroll
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function() {
      // add hash to URL after scroll
      window.location.hash = hash;
    })
  }
});
