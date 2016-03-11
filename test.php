<!DOCTYPE html>

<html>

<head>
  <title>Material Design for Bootstrap</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Mobile support -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Material Design fonts -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Material Design -->
  <link href="./public/css/bootstrap-material-design.css" rel="stylesheet">
  <link href="./public/css/ripples.min.css" rel="stylesheet">
  <link href="./public/css/style.css" rel="stylesheet">

  <!-- Dropdown.js -->
  <link href="//cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.css" rel="stylesheet">

  <!-- jQuery -->
  <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>

</head>
<body>
<?php require_once('./View/Elements/nav_bar.php'); ?>

<div class="bs-docs-section">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-5">
          <div class="well bs-component">
            <form class="form-horizontal">
              <fieldset>
                <div class="form-group is-empty">
                  <label for="inputEmail" class="col-md-2 control-label">Title</label>
                  <div class="col-md-10">
                    <input class="form-control" id="inputTitle" placeholder="Title" type="email">
                  </div>
                <span class="material-input"></span>
              </div>
                <div class="form-group is-empty">
                  <label for="textArea" class="col-md-2 control-label">Textarea</label>

                  <div class="col-md-10">
                    <textarea class="form-control" rows="3" id="textArea"></textarea>
                    <span class="help-block">Type Your Memo !!</span>
                  </div>
                <span class="material-input"></span>
              </div>
              <div class="form-group">
                  <label for="select111" class="col-md-2 control-label">Category</label>

                  <div class="col-md-10">
                    <select id="select111" class="form-control">
                      <option>PHP</option>
                      <option>Ruby</option>
                      <option>Javascript</option>
                      <option>Java</option>
                      <option>Server</option>
                    </select>
                  </div>
                <span class="material-input"></span>
              </div>
                <div class="form-group">
                  <div class="col-md-10 col-md-offset-2">
                    <button type="submit" class="btn btn-primary">Confirm</button>
                  </div>
                </div>
              </fieldset>
            </form>
        </div>
      </div>

      <div class="col-md-7">
        <div class="bs-component">
          <div class="panel panel-primary">
            <div class="panel-heading">
              Panel heading
            </div>
            <div class="panel-body">
              <div id="content">content</div>
              <div id="footer">
                <span class="label label-info top-date">2016-03-03</span>
                <span class="top-category"><a href="javascript:void(0)" class="btn btn-default">Category<div class="ripple-container"></div></a></span>
                <span><a href="javascript:void(0)" class="btn btn-primary">Detail<div class="ripple-container"></div></a></span>
              </div>
            </div>
          </div>
          <div class="panel panel-primary">
            <div class="panel-heading">
              Panel heading
            </div>
            <div class="panel-body">
              <div id="content">content</div>
              <div id="footer">
                <span class="label label-info top-date">2016-03-03</span>
                <span class="top-category"><a href="javascript:void(0)" class="btn btn-default">Category<div class="ripple-container"></div></a></span>
                <span><a href="javascript:void(0)" class="btn btn-primary">Detail<div class="ripple-container"></div></a></span>
              </div>
            </div>
          </div>
          <div class="panel panel-primary">
            <div class="panel-heading">
              Panel heading
            </div>
            <div class="panel-body">
              <div id="content">content</div>
              <div id="footer">
                <span class="label label-info top-date">2016-03-03</span>
                <span class="top-category"><a href="javascript:void(0)" class="btn btn-default">Category<div class="ripple-container"></div></a></span>
                <span><a href="javascript:void(0)" class="btn btn-primary">Detail<div class="ripple-container"></div></a></span>
              </div>
            </div>
          </div>
          <ul class="pagination">
            <li class="disabled"><a href="javascript:void(0)">«</a></li>
            <li class="active"><a href="javascript:void(0)">1</a></li>
            <li><a href="javascript:void(0)">2</a></li>
            <li><a href="javascript:void(0)">3</a></li>
            <li><a href="javascript:void(0)">4</a></li>
            <li><a href="javascript:void(0)">5</a></li>
            <li><a href="javascript:void(0)">»<div class="ripple-container"></div></a></li>
          </ul>
      </div>
    </div>
  </div>




<!-- Twitter Bootstrap -->
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- Material Design for Bootstrap -->
<script src="./public/js/material.min.js"></script>
<script src="./public/js/ripples.min.js"></script>
<script>
  $.material.init();
</script>

<!-- Dropdown.js -->
<script src="https://cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.js"></script>
<script>
  $("#dropdown-menu select").dropdown();
</script>

</body>
</html>