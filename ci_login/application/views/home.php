<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets/lib/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
  <!--external css-->
  <link href="<?= base_url('assets/lib/font-awesome/css/font-awesome.css');?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/zabuto_calendar.css');?>" rel="stylesheet">
  <link href="<?= base_url('assets/lib/gritter/css/jquery.gritter.css');?>" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?= base_url('assets/css/style.css');?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/style-responsive.css');?>" rel="stylesheet">
  <script src="<?= base_url('assets/lib/cart-master/Chart.js');?>"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>DASH<span>IO</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">

      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="../auth/logout">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

          <li class="mt">
            <a class="active" href="index.html">
              <span>Dashboard</span>
              </a>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?= base_url('lib/jquery/jquery.min.js');?>"></script>

  <script src="<?= base_url('lib/bootstrap/js/bootstrap.min.js');?>"></script>
  <script class="include" type="text/javascript" src="<?= base_url('lib/jquery.dcjqaccordion.2.7.js');?>"></script>
  <script src="<?= base_url('lib/jquery.scrollTo.min.js');?>"></script>
  <script src="<?= base_url('lib/jquery.nicescroll.js');?>" type="text/javascript"></script>
  <script src="<?= base_url('lib/jquery.sparkline.js');?>"></script>
  <!--common script for all pages-->
  <script src="<?= base_url('lib/common-scripts.js');?>"></script>
  <script type="text/javascript" src="<?= base_url('lib/gritter/js/jquery.gritter.js');?>"></script>
  <script type="text/javascript" src="<?= base_url('lib/gritter-conf.js');?>"></script>
  <!--script for this page-->
  <script src="<?= base_url('lib/sparkline-chart.js');?>"></script>
  <script src="<?= base_url('lib/zabuto_calendar.js');?>"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: 'img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
