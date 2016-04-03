<!DOCTYPE html>
<html>
<head>
  <title>Material Design for Bootstrap</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/x-icon" href="/public/favicon.ico">

  <!-- Mobile support -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Material Design fonts -->
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
  <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Material Design -->
  <link href="/public/css/bootstrap-material-design.css" rel="stylesheet">
  <link href="/public/css/ripples.min.css" rel="stylesheet">
  <link href="/public/css/style.css" rel="stylesheet">

  <!-- jQuery -->
  <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>

</head>
<body>

<?php $this->elements('nav_bar'); ?>

<?php $this->fetch() ?>

<!-- Twitter Bootstrap -->
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- Material Design for Bootstrap -->
<script src="/public/js/material.min.js"></script>
<script src="/public/js/ripples.min.js"></script>
<script>
  $.material.init();
</script>
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.2.11.2.js'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>
</html>
