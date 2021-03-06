<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
      <meta name="keyword"
            content="Solr,Twitter,Graphs,Analytics,News,,Media,Lucene,Indexing,Search Engine,Tweets,Tweepy">

      <title>Untitled : Search</title>

      <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">    
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
          <!--logo start-->
          <a href="index.php" class="logo"><b>UNTITLED</b></a>
          <!--logo end-->
          <div class="nav notify-row" id="top_menu">
              <!--  notification start -->
              <ul class="nav top-menu">
                  <!-- inbox dropdown start-->
                  <li id="header_inbox_bar" class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
                          <i class="fa fa-envelope-o"></i>
                          <span class="badge bg-theme">5</span>
                      </a>
                      <ul class="dropdown-menu extended inbox">
                          <div class="notify-arrow notify-arrow-green"></div>
                          <li>
                              <p class="green">You have 5 new messages</p>
                          </li>
                          <li>
                              <a href="index.php#">
                                  <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                              </a>
                          </li>
                          <li>
                              <a href="index.php#">
                                  <span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                              </a>
                          </li>
                          <li>
                              <a href="index.php#">
                                  <span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Love your new Dashboard.
                                    </span>
                              </a>
                          </li>
                          <li>
                              <a href="index.php#">
                                  <span class="photo"><img alt="avatar" src="assets/img/ui-sherman.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please, answer asap.
                                    </span>
                              </a>
                          </li>
                          <li>
                              <a href="index.php#">See all messages</a>
                          </li>
                      </ul>
                  </li>
                  <!-- inbox dropdown end -->
              </ul>
              <!--  notification end -->
          </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <!--<p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>-->
              	  <!--<h5 class="centered">Marcel Newman</h5>-->
              	  	<!---->
                  <!--<li class="mt">-->
                      <!--<a href="index.php">-->
                          <!--<i class="fa fa-dashboard"></i>-->
                          <!--<span>Dashboard</span>-->
                      <!--</a>-->
                  <!--</li>-->

                  <!--<li class="sub-menu">-->
                      <!--<a href="javascript:;" >-->
                          <!--<i class="fa fa-desktop"></i>-->
                          <!--<span>UI Elements</span>-->
                      <!--</a>-->
                      <!--<ul class="sub">-->
                          <!--<li><a  href="general.html">General</a></li>-->
                          <!--<li><a  href="buttons.html">Buttons</a></li>-->
                          <!--<li><a  href="panels.html">Panels</a></li>-->
                      <!--</ul>-->
                  <!--</li>-->

                  <!--<li class="sub-menu">-->
                      <!--<a href="javascript:;" >-->
                          <!--<i class="fa fa-cogs"></i>-->
                          <!--<span>Components</span>-->
                      <!--</a>-->
                      <!--<ul class="sub">-->
                          <!--<li><a  href="calendar.html">Calendar</a></li>-->
                          <!--<li><a  href="gallery.php">Gallery</a></li>-->
                          <!--<li><a  href="todo_list.html">Todo List</a></li>-->
                      <!--</ul>-->
                  <!--</li>-->
                  <!--<li class="sub-menu">-->
                      <!--<a href="javascript:;" >-->
                          <!--<i class="fa fa-book"></i>-->
                          <!--<span>Extra Pages</span>-->
                      <!--</a>-->
                      <!--<ul class="sub">-->
                          <!--<li><a  href="blank.html">Blank Page</a></li>-->
                          <!--<li><a  href="login.php">Login</a></li>-->
                          <!--<li><a  href="lock_screen.html">Lock Screen</a></li>-->
                      <!--</ul>-->
                  <!--</li>-->
                  <!--<li class="sub-menu">-->
                      <!--<a href="javascript:;" >-->
                          <!--<i class="fa fa-tasks"></i>-->
                          <!--<span>Forms</span>-->
                      <!--</a>-->
                      <!--<ul class="sub">-->
                          <!--<li><a  href="form_component.html">Form Components</a></li>-->
                      <!--</ul>-->
                  <!--</li>-->
                  <!--<li class="sub-menu">-->
                      <!--<a href="javascript:;" >-->
                          <!--<i class="fa fa-th"></i>-->
                          <!--<span>Data Tables</span>-->
                      <!--</a>-->
                      <!--<ul class="sub">-->
                          <!--<li><a  href="basic_table.html">Basic Table</a></li>-->
                          <!--<li><a  href="responsive_table.html">Responsive Table</a></li>-->
                      <!--</ul>-->
                  <!--</li>-->
                  <!--<li class="sub-menu">-->
                      <!--<a class="active" href="javascript:;" >-->
                          <!--<i class=" fa fa-bar-chart-o"></i>-->
                          <!--<span>Charts</span>-->
                      <!--</a>-->
                      <!--<ul class="sub">-->
                          <!--<li class="active"><a  href="morris.html">Morris</a></li>-->
                          <!--<li><a  href="chartjs.html">Chartjs</a></li>-->
                      <!--</ul>-->
                  <!--</li>-->

                  <p class="centered"><a href="profile.php"><img src="assets/img/logo.png" class="img-circle" width="60"></a>
                  </p>
                  <h5 class="centered">Untitled</h5>

                  <li class="mt">
                      <a  href="index.php">
                          <i class="fa fa-search"></i>
                          <span>Search</span>
                      </a>
                  </li>
                  <li>
                      <a class="active" href="analytics.php">
                          <i class="fa fa-bar-chart-o"></i>
                          <span>Analytics</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="fa fa-twitter"></i>
                          <span>My Twitter</span>
                      </a>
                      <ul class="sub">
                          <li><a href="calendar.php">Calendar</a></li>
                          <li><a href="gallery.php">Gallery</a></li>
                          <li><a href="profile.php">Profile</a></li>
                      </ul>
                  </li>


              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          <h3><i class="fa fa-angle-right"></i> Analytics</h3>
              <!-- page start-->
              <div id="morris">
                  <div class="row mt">
                      <div class="col-lg-6">
                          <div class="content-panel">
                              <h4><i class="fa fa-angle-right"></i> Hashtag Co-occurance</h4>
                              <div class="panel-body">
                                  <div id="hero-graph" class="graph"></div>
                                  <embed class="g-graph" src="http://istanbul.cse.buffalo.edu:9886/graph.html"></embed>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="content-panel">
                              <h4><i class="fa fa-angle-right"></i> Language Distribution </h4>
                              <div class="panel-body">
                                  <div id="hero-bar" class="graph"></div>
                                   <embed class="g-lang" src="http://istanbul.cse.buffalo.edu:9886/lang.html"></embed>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row mt">
                      <div class="col-lg-6">
                          <div class="content-panel">
                              <h4><i class="fa fa-angle-right"></i> Trending Topics</h4>
                              <div class="panel-body">
                                  <div id="hero-area" class="graph"></div>
                                   <embed class="g-trend" src="http://istanbul.cse.buffalo.edu:9886/trending.html"></embed>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="content-panel">
                              <h4><i class="fa fa-angle-right"></i> Tweet Demographics</h4>
                              <div class="panel-body">
                                  <div id="hero-donut" class="graph"></div>
                                   <embed class="g-ctry" src="http://istanbul.cse.buffalo.edu:9886/country.html"></embed>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2015 - untitled.us
              <a href="morris.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <!--<script src="assets/js/morris-conf.js"></script>-->
    
  <script>
      //custom select box

      /*$(function(){
          $('select.styled').customSelect();
      });*/

  </script>

  </body>
</html>

