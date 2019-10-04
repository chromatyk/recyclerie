$(function () {
  $(document).scroll(function () {
    var $nav = $(".fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});
$(function() {

  var $c = $('#carousel'),
    $w = $(window);

  $c.carouFredSel({
    align: false,
    items: 9,
    scroll: {
      items: 1,
      duration: 3000,
      timeoutDuration: 0,
      easing: 'linear',
      pauseOnHover: 'immediate'
    }
  });


  $w.bind('resize.example', function() {
    var nw = $w.width();
    if (nw < 990) {
      nw = 990;
    }

    $c.width(nw * 3);
    $c.parent().width(nw);

  }).trigger('resize.example');

});

var vid = document.getElementById("bgvid");
var pauseButton = document.querySelector("#polina button");

if (window.matchMedia('(prefers-reduced-motion)').matches) {
    vid.removeAttribute("autoplay");
    vid.pause();
    pauseButton.innerHTML = "Paused";
}

function vidFade() {
  vid.classList.add("stopfade");
}

vid.addEventListener('ended', function()
{
// only functional if "loop" is removed
vid.pause();
// to capture IE10
vidFade();
});


pauseButton.addEventListener("click", function() {
  vid.classList.toggle("stopfade");
  if (vid.paused) {
    vid.play();
    pauseButton.innerHTML = "Pause";
  } else {
    vid.pause();
    pauseButton.innerHTML = "Paused";
  }
})
