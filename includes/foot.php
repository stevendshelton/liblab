</div>
<!---->
</div>
<!--/column-->
</div>
<!--/row-->
</div>
<!-- /container -->
<div id="push">
   <!-- pushes footer down -->
</div>
</div>
<!-- /stickyfooter wrapper -->
<!-- Footer with (map) navs, fine print and document close
================================================== -->
<footer class="achieve-2">
   <div class="container topMargin">
      <div class="row">
         <div class="col">
            <h3 class="center">UTC Library</h3>
         </div>
      </div>
      <div class="row">
         <div class="col">
            <p class="achieve pushup center">UTC Library
               &nbsp;|&nbsp;
               Dept 6456
               &nbsp;|&nbsp;
               600 Douglas Street
               &nbsp;|&nbsp;
               Chattanooga, TN 37403
               &nbsp;|&nbsp;
               (423) 425-4501<abbr title="Phone"> </abbr>
               &nbsp;|&nbsp;
               <a href="https://www.utc.edu/library/about/contact">Contact Us</a>
            </p>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <div class="col">
         <p><a href="https://www.utc.edu/about/contact" id="legal-questions">Questions?</a> © 2012-2021 University of Tennessee at Chattanooga. All rights reserved.</p>

<p><a href="https://www.utc.edu/enrollment-management-and-student-affairs/title-ix#title-ix-statement" id="legal-title-ix">Title IX Statement</a> | <a href="https://www.utc.edu/communications-and-marketing/eeo-statement" id="legal-eeo">EEO Statement</a> | <a href="https://www.utc.edu/about/privacy" id="legal-privacy">Privacy Statement</a> | <a href="https://www.utc.edu/academic-affairs/accessible-information-materials-and-technology-program">Accessibility</a> | <a href="https://utcwebdev.atlassian.net/servicedesk/customer/portals">Web Requests</a></p>
<p>A comprehensive, community-engaged campus of the <a href="http://www.tennessee.edu/" id="legal-ut">University of Tennessee System</a> and partner in the&nbsp;<a href="https://www.tntransferpathway.org">Tennessee Transfer Pathway</a>.</p></div>
      </div>
   </div>
   <button onclick="topFunction()" id="backToTopBtn" aria-label="back to top" data-toggle="tooltip" title="Go to top"><span class="fa fa-large fa-angle-double-up"></span></button>
</footer>
</body>
<!-- document close -->

<!-- Common Bootstrap Scripts for all pages -->
<script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- Fit Text plugin for big hero-unit
<script type="text/javascript" src="//www.utc.edu/_resources/Kickstrap/apps/fittext/jquery.fittext.js"></script>-->
<!-- Image Zoom plugin
<script type="text/javascript" src="//www.utc.edu/_resources/Kickstrap/apps/zoom/jquery.zoom.js"></script>-->
<!-- Document Ready scripts for all pages
<script type="text/javascript" src="//www.utc.edu/_resources/Kickstrap/apps/thememain/main.js"></script>-->
<script type="text/javascript">
   if (window.location.href.indexOf("test.utc.edu") > -1) {
      $("#dev-environment").show();
   };
   if ((window.location.href.indexOf("192.168.33.10") > -1) || (window.location.href.indexOf("localhost:8080") > -1)) {
      $("#dev-environment").show();
      $('#dev-environment').removeClass('alert-info');
      $('#dev-environment').addClass('alert-danger');
      $('#dev-environment').html('| <strong>LOCAL DEV</strong> environment | ');
   };
</script>
<?php print $addfoot;
if ($help === "show") {
   echo "
<div id='libraryh3lp'><a href='https://www.utc.edu/library/help'><i class='icon-comment' aria-hidden='true'><!-- comment icon --></i> Ask a Librarian</a></div>
<!-- side menu tweaks -->
<script type='text/javascript'>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById('backToTopBtn').style.display = 'block';
    } else {
        document.getElementById('backToTopBtn').style.display = 'none';
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
// ]]></script>";
} //close if help
?>