<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="author" content="Ayush Jha">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
  <title>Autocomplete Search Box</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body class="bg-info">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2 bg-light p-4 mt-3 rounded">
        <h4 class="text-center">Autocomplete Search Box</h4>
        <form action="details.php" method="post" class="form-inline p-3">
          <input type="text" name="search" id="search" class="form-control form-control-lg rounded-0 border-info" placeholder="Search..."
          style="width:80%;">
          <input type="submit" name="submit" value="Search" class="btn
          btn-info btn-lg rounded-0" style="width:20%;">
        </form>
      </div>
      <div class="col-md-5" style="position:relative;margin-top:-38px;margin-left:215px;">
        <div class="list-group" id="show-list">

        </div>
    </div>
  </div>
  <script type="text/javascript">
  $(document).ready(function(){
    $("#search").keyup(function(){
      var searchText = $(this).val();
      if(searchText!=''){
        $.ajax({
          url:'action.php',
          method:'post',
          data:{query:searchText},
          success:function(response){
            $("#show-list").html(response);
          }
        });
      }
      else{
        $("#show-list").html('');
      }
    });
    $(document).on('click','a',function(){
      $("#search").val($(this).text());
      $("#show-list").html('');
    });
  });
  </script>
</body>
</html>
