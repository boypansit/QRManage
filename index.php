<!DOCTYPE html>
<html>
<head>
  <title>Checklist</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdn.netpie.io/microgear.js"></script>
  <script src="raphael-2.1.4.min.js"></script>
  <script src="justgage.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://www.google.com/jsapi"></script>
  <!-- <script src="weather-icons.min.css"></script> -->
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.min.js"></script>

  <!-- (Optional) Latest compiled and minified JavaScript translation files -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/i18n/defaults-*.min.js"></script>
  <script src="https://www.gstatic.com/firebasejs/4.5.0/firebase.js"></script>
  <script src="https://cdn.firebase.com/js/client/2.4.2/firebase.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDL-cRJzy6WSOSsAymv_8WurQmtO54NXzA"></script>
  <!-- <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.10.1.min.js"></script> -->
  <style>
table, td {
    border: 1px solid black;
}
</style>
</head>
<body>
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">
            Check list <small>Equipment</small>
            </h1>
          </div>
        </div>
	<div class="row">     
            <div class="col-xs-4">
            </div>
            <div class="col-xs-1">
              <p align="right">Site Code</p>

            </div>
            <div class="col-xs-1">
              <input class="form-control" type="text" id="search">
            </div>
            <div class="col-xs-1">
              <button type="button" class="btn btn-success" id="btnbatt" onclick="searchdata()">Search</button>
            </div>
            <div class="col-xs-1">
            </div>
            <div class="col-xs-4">
            </div>
     </div>
     <script type="text/javascript">
     function searchdata() {
      var input = document.getElementById("search");
          var inputt =  search.value;
		 console.log(inputt)
        }

     </script>
</body>
</html>