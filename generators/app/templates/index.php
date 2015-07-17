<!doctype html>
<html<% if (includeModernizr) { %> class="no-js"<% } %> lang="">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><%= appname %></title>

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- build:css styles/vendor.css -->
    <!-- bower:css -->
    <!-- endbower -->
    <!-- endbuild -->

    <!-- build:css styles/main.css -->
    <link rel="stylesheet" href="../.tmp/styles/main.css">
    <!-- endbuild -->
    <% if (includeModernizr) { %>
    <!-- build:js scripts/vendor/modernizr.js -->
    <script src="/bower_components/modernizr/modernizr.js"></script>
    <!-- endbuild --><% } %>
  </head>
  <body>
    <!--[if lt IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <% if (includeBootstrap) { %>
    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <h3 class="text-muted"><%= appname %></h3>
      </div>

      <div class="jumbotron">
        <h1>'Allo, 'Allo!</h1>
        <p>
          PHP workin
          <?php for($i = 1; $i<10; $i++): ?>
            <?php echo $i ?> - 
          <?php endfor; ?><br>
        </p>
        <p class="lead">Always a pleasure scaffolding your apps.</p>
        <p><a class="btn btn-lg btn-success" href="#">Splendid!</a></p>
      </div>

      <div class="row marketing">
        <div class="col-lg-6">
          <h4>HTML5 Boilerplate</h4>
          <p>HTML5 Boilerplate is a professional front-end template for building fast, robust, and adaptable web apps or sites.</p>
          <% if (includeSass) { %>
          <h4>Sass</h4>
          <p>Sass is the most mature, stable, and powerful professional grade CSS extension language in the world.</p>
          <% } %>
          <h4>Bootstrap</h4>
          <p>Sleek, intuitive, and powerful mobile first front-end framework for faster and easier web development.</p><% if (includeModernizr) { %>
          <h4>Modernizr</h4>
          <p>Modernizr is an open-source JavaScript library that helps you build the next generation of HTML5 and CSS3-powered websites.</p>
          <% } %>
        </div>
      </div>

      <div class="footer">
        <p>♥ from the Yeoman team</p>
      </div>
    </div>
    <% } else { %>
    <div class="hero-unit">
      <h1>'Allo, 'Allo!</h1>
      <p>You now have</p>
      <ul>
        <li>HTML5 Boilerplate</li><% if (includeSass) { %>
        <li>Sass</li><% } if (includeModernizr) { %>
        <li>Modernizr</li><% } if (includeJQuery) { %>
        <li>jQuery</li><% } %>
      </ul>
    </div>
    <% } %>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    <!-- build:js scripts/vendor.js -->
    <!-- bower:js -->
    <!-- endbower -->
    <!-- endbuild -->
    <% if (includeBootstrap) { %>
    <!-- build:js scripts/plugins.js -->
<% bsPlugins.forEach(function (plugin) { -%>
    <script src="<%= bsPath + plugin %>.js"></script>
<% }) -%>
    <!-- endbuild -->
    <% } %>
    <!-- build:js scripts/main.js -->
    <script src="scripts/main.js"></script>
    <!-- endbuild -->
  </body>
</html>
