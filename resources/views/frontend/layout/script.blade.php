 <!--    JavaScripts-->
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 <script>
    AOS.init();
  </script>
<script src="/vendor/jquery/jquery.slim.min.js"></script>
 <script src="/vendors/@popperjs/popper.min.js"></script>
 <script src="/vendors/bootstrap/bootstrap.min.js"></script>
 <script src="/vendors/is/is.min.js"></script>
 <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
 <script src="/vendors/fontawesome/all.min.js"></script>
 <script src="/assets/js/theme.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
 <script>
   // Wrap every letter in a span
   var textWrapper = document.querySelector('.hero-title');
   textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

   anime.timeline({loop: true})
           .add({
             targets: '.hero-title .letter',
             translateX: [40,0],
             translateZ: 0,
             opacity: [0,1],
             easing: "easeOutExpo",
             duration: 5200,
             delay: (el, i) => 500 + 30 * i
           }).add({
     targets: '.hero-title .letter',
     translateX: [0,-30],
     opacity: [1,0],
     easing: "easeInExpo",
     duration: 1100,
     delay: (el, i) => 100 + 30 * i
   });
 </script>
 <!--    End of JavaScripts-->
