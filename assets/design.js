/* Hug in the Mail — front-page design enhancements
   Scroll reveals for [data-aos] + click-to-play on the testimonial portrait.
   Self-contained, no build step. */
(function () {
  "use strict";

  // Scroll reveals — opt in via .js-aos so no-JS / print show everything.
  document.documentElement.classList.add("js-aos");
  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (e.isIntersecting) {
        e.target.classList.add("in");
        io.unobserve(e.target);
      }
    });
  }, { rootMargin: "0px 0px -8% 0px", threshold: 0.08 });
  document.querySelectorAll(".hitm [data-aos]").forEach(function (el) { io.observe(el); });

  // Testimonial portrait → YouTube on click.
  document.querySelectorAll("[data-yt]").forEach(function (frame) {
    frame.addEventListener("click", function () {
      if (frame.querySelector("iframe")) return;
      var id = frame.getAttribute("data-yt");
      var iframe = document.createElement("iframe");
      iframe.src = "https://www.youtube.com/embed/" + id +
        "?autoplay=1&rel=0&modestbranding=1&playsinline=1";
      iframe.title = frame.getAttribute("data-yt-title") || "Subscriber story";
      iframe.allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture";
      iframe.allowFullscreen = true;
      frame.appendChild(iframe);
    });
  });
})();
