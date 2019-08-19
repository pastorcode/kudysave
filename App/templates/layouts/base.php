<?php 
$template = new \Codefii\Controller\Template; 

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Kudy | <?php echo $title; ?></title>
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/argon-dashboard-pro" />
  <!--  Social tags      -->

 
  <!-- Favicon -->
  <link rel="icon" href="" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../web/assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../web/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Page plugins -->
  <link rel="stylesheet" href="../web/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../web/assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="../web/assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
  <link rel="stylesheet" href="../web/assets/vendor/sweetalert2/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="../web/assets/vendor/animate.css/animate.min.css">


  <script src="../web/assets/vendor/jquery/dist/jquery.min.js"></script>

  <!-- Argon CSS -->
  <link rel="stylesheet" href="../web/assets/css/argon.min.css" type="text/css">
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
  </script>
  <!-- End Google Tag Manager -->
</head>

<?php include("nav.php"); ?>


<?php  $template->getTemp(); ?>


      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center text-lg-left text-muted">
              &copy; 2019 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">All Rights reserved</a><br>
    
          </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Kudy Save</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/license" class="nav-link" target="_blank">License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../web/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../web/assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../web/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../web/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="../web/assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="../web/assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <script src="../web/assets/vendor/jvectormap-next/jquery-jvectormap.min.js"></script>
  <script src="../web/assets/js/vendor/jvectormap/jquery-jvectormap-world-mill.js"></script>
  <script src="../web/assets/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
  <script src="../web/assets/vendor/list.js/dist/list.min.js"></script>




 <!-- Optional JS -->
 <script src="../web/assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../web/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../web/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../web/assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
  <script src="../web/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="../web/assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="../web/assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="../web/assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
  <script src="../web/assets/vendor/bootstrap-notify/bootstrap-notify.min.js"></script>


  <!-- Argon JS -->
  <script src="../web/assets/js/argon.min.js?v=1.1.0"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="../web/assets/js/demo.min.js"></script>
  <script>
    // Facebook Pixel Code Don't Delete
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window,
      document, 'script', '//connect.facebook.net/en_US/fbevents.js');

    try {
      fbq('init', '111649226022273');
      fbq('track', "PageView");

    } catch (err) {
      console.log('Facebook Track Error:', err);
    }
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
  </noscript>
</body>

</html>
