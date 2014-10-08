<?php
include('connector.php');
include('form.php');
$table='info';
$db_name='contacts';
$conector= new DatabaseManager();
$conector->SelectDB($db_name);
$result=$conector->Read($table);
if(isset($_POST['firstname'])&&!empty($_POST['firstname'])){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$isfriend = $_POST['isfriend'];

$conector->Insert($table,$firstname,$lastname,$phone,$email,$address,$city,$zip,$isfriend);
}

?>

<html>
<head>

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js">< </script>
<script src="js/ui-bootstrap-tpls-0.11.0.min.js"></script>
<link href="css/bootstrap-theme.min.css" rel="stylesheet" />
<link href="css/bootstrap.min.css" rel="stylesheet" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript">
  $(function(){
      $('table').on('click','tr a',function(e){
         e.preventDefault();
        $(this).parents('tr').remove();
		var id=$(this).parents('tr').attr('id');
	  });
 });
</script>

<style>
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th	{
    background-color: black;
    color: white;
}
</style>
</head>
<body>
<nav class="navbar navbar" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="images/widelogo.png" style="margin-top:none;float:center;width:30px;height:30px"/> Directory</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<ul class="nav navbar-nav">
	    <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Setting<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#" data-toggle="modal" data-target="#adduser">New User</a></li>
			<li class="divider"></li>
            <li><a href="#" data-toggle="modal" data-target="#database">Refresh</a></li>
          </ul>
        </li>
        <li><a href="#">About</a></li>      
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search <span class="glyphicon glyphicon-search"></span></button>
      </form>

    </div><!-- /.navbar-collapse -->
	<div id="wrapper">
	
	<table>
  <tr>
	<th>Action</th>
    <th>First Name</th>
    <th>Last Name</th>		
    <th>Phone</th>
    <th>Email</th>
    <th>Address</th>		
    <th>City</th>	
	<th>Zip</th>
    <th>Is Friend</th>			
  </tr>
<?php
$id=0;
while($row = mysql_fetch_array($result)){
$firstname=$row['FirstName'];
$lastname=$row['LastName'];
$phone=$row['Phone'];
$email=$row['Email'];
$address=$row['Address'];
$city=$row['City'];
$zip=$row['Zip'];
$isfriend=$row['IsFriend'];
echo "<tr id=".$id.">
<td><a class=\"del\" href=\"#\">del</a><a href=\"#\">edit</a></td>
<td>".$firstname."</td>
	<td>".$lastname."</td>
	<td>".$phone."</td>
	<td>".$email."</td>
	<td>".$address."</td>
	<td>".$city."</td>
	<td>".$zip."</td>
	<td>".$isfriend."</td></tr>";	
	
	$id++;
}
?>
</table>
	</div>
	<p><br/></p>
  </div><!-- /.container-fluid -->
</nav>


</body>
</html>