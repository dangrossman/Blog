</div>

<?php wp_footer(); ?>

<!-- Begin W3Counter Tracking Code -->
<script type="text/javascript" src="http://www.w3counter.com/tracker.js"></script>
<script type="text/javascript">
w3counter(4493);
</script>
<noscript>
<div><a href="http://www.w3counter.com"><img src="http://www.w3counter.com/tracker.php?id=4493" style="border: 0" alt="W3Counter" /></a></div>
</noscript>
<!-- End W3Counter Tracking Code-->

<!-- Begin W3Counter Pulse Real-Time Heartbeat Code -->
<script type="text/javascript">
(function(){
  var ps = document.createElement('script');
	 ps.type = 'text/javascript';
	 ps.async = true;
	 ps.src = '//pulse.w3counter.com/pulse.js?id=4493';
  (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(ps);
})();
</script>
<!-- End W3Counter Pulse Real-Time Heartbeat Code-->

<div id="footer"></div>

<script type="text/javascript">

$(document).ready(function() {

    setInterval(function() {
      animateTitle();
    }, 3000);

    animateTitle();

    function animateTitle() {
      var bg = new Trianglify({
        x_colors: 'random',
        y_colors: 'match_x',
        palette: Trianglify.colorbrewer,
        width: document.body.clientWidth,
        height: 15,
        stroke_width: 0,
        cell_size: 10
      });

      $('.topbar').css('background-image', 'url(' + bg.png() + ')'); 
    }

});

</script>

<script type="text/javascript">
Shopify = { shop: 'www.dangrossman.info' };
</script>
<script type="text/javascript" src="https://icf.improvely.com/icf-button.js?shop=www.dangrossman.info"></script>

<script type="text/javascript">
var im_domain = 'awio';
var im_project_id = 50;
(function(e,t){window._improvely=[];var n=e.getElementsByTagName("script")[0];var r=e.createElement("script");r.type="text/javascript";r.src="https://"+im_domain+".iljmp.com/improvely.js";r.async=true;n.parentNode.insertBefore(r,n);if(typeof t.init=="undefined"){t.init=function(e,t){window._improvely.push(["init",e,t])};t.goal=function(e){window._improvely.push(["goal",e])};t.conversion=function(e){window._improvely.push(["conversion",e])};t.label=function(e){window._improvely.push(["label",e])}}window.improvely=t;t.init(im_domain,im_project_id)})(document,window.improvely||[])
</script>

</body>
</html>
