<html>
 <head>
  <title>check in app</title>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
  <style>
  body
  {
   margin:0;
   padding:0;
   background-color:#f1f1f1;
  }
  .box
  {
   width:1270px;
   padding:20px;
   background-color:#fff;
   border:1px solid #ccc;
   border-radius:5px;
   margin-top:25px;
   box-sizing:border-box;
  }
  </style>
 </head>
 <body>
  <div class="container box">
   <h1 align="center">checkin</h1>
   <br />
   <div class="table-responsive">
   <br />

    <br />
    <div id="alert_message"></div>
    <table id="user_data" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Firstt Name</th>
       <th>Last Name</th>
       <th></th>
      </tr>
     </thead>

    </table>
   </div>
  </div>
 </body>
</html>
<script type="text/javascript" language="javascript" >
 $(document).ready(function(){

  fetch_data();

  function fetch_data()
  {
   var dataTable = $('#user_data').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "ajax" : {
     url:"home.php",
     type:"POST"
    }
   });
  }
	$(document).on('click', '.checkin', function(){
	   var id = $(this).attr("id");
	   if(confirm("Are you sure you want to checkin ?"))
	   {
	    $.ajax({
	     url:"checkin.php",
	     method:"POST",
	     data:{id:id},
	     success:function(data){
	      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
	      $('#user_data').DataTable().destroy();
	      fetch_data();
	     }
	    });
	    setInterval(function(){
	     $('#alert_message').html('');
	    }, 5000);
	   }
	  });
	 });
	</script>
