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

  // Single-post polish: reading progress bar + TOC scroll-spy.
  var article = document.querySelector(".article");
  if (article) {
    var bar = document.querySelector(".reading-bar > span");
    if (bar) {
      var updateBar = function () {
        var rect = article.getBoundingClientRect();
        var total = rect.height - window.innerHeight;
        var done = Math.min(Math.max(-rect.top, 0), total);
        bar.style.width = (total > 0 ? (done / total) * 100 : 0) + "%";
      };
      window.addEventListener("scroll", updateBar, { passive: true });
      window.addEventListener("resize", updateBar);
      updateBar();
    }

    // Scroll-spy: highlight the TOC link for the heading nearest the top.
    var tocLinks = {};
    document.querySelectorAll(".toc a").forEach(function (a) {
      tocLinks[a.getAttribute("href").slice(1)] = a;
    });
    var headings = document.querySelectorAll(".prose [id]");
    if (Object.keys(tocLinks).length && headings.length) {
      var spy = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
          var a = tocLinks[e.target.id];
          if (a && e.isIntersecting) {
            // ponytail: last heading crossing the band wins — fine for top-down reading
            document.querySelectorAll(".toc a.active").forEach(function (x) {
              x.classList.remove("active");
            });
            a.classList.add("active");
          }
        });
      }, { rootMargin: "-100px 0px -70% 0px" });
      headings.forEach(function (h) { spy.observe(h); });
    }
  }
})();
