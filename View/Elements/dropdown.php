<!-- Dropdown.js -->
<link href="//cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.css" rel="stylesheet">

<ul class="nav navbar-nav">
  <li class="active"><a href="javascript:void(0)">POST</a></li>
</ul>
<li class="dropdown">
  <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
    <b class="caret"></b></a>
  <ul class="dropdown-menu">
    <li><a href="javascript:void(0)">Action</a></li>
    <li><a href="javascript:void(0)">Another action</a></li>
    <li><a href="javascript:void(0)">Something else here</a></li>
    <li class="divider"></li>
    <li class="dropdown-header">Dropdown header</li>
    <li><a href="javascript:void(0)">Separated link</a></li>
    <li><a href="javascript:void(0)">One more separated link</a></li>
  </ul>
</li>
<ul class="nav navbar-nav navbar-right">
  <li class="dropdown">
    <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
      <b class="caret"></b></a>
    <ul class="dropdown-menu">
      <li><a href="javascript:void(0)">Action</a></li>
      <li><a href="javascript:void(0)">Another action</a></li>
      <li><a href="javascript:void(0)">Something else here</a></li>
      <li class="divider"></li>
      <li><a href="javascript:void(0)">Separated link</a></li>
    </ul>
  </li>
</ul>

<!-- Dropdown.js -->
<script src="https://cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.js"></script>
<script>
  $("#dropdown-menu select").dropdown();
</script>
