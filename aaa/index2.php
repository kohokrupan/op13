

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

	<style>
	.navbar{
		border-radius:0;
		margin-bottom:0;
	}
	</style>

<nav class="navbar navbar-inverse" role="navigation">
<div class="navbar-header">
     <a class="navbar-brand" href="#">Brand</a>
    </div>
</nav>

<div class="jumbotron">
  <div class="container">
   <h1>Hello, world!</h1>
  </div>
</div>
 <?php
if($_POST){
//mysql�ɐڑ�
$db = mysql_connect('localhost','root');
$select=mysql_select_db('op13',$db);
//���[�U�[����₢���킹��
$name=mysql_real_escape_string($_POST['name']);
$password=mysql_real_escape_string($_POST['password']);
$sql="SELECT * FROM  users WERE name = '".$name."'AND password='".$password."'";
$result=mysql_query($sql);
$row=mysql_fetch_assoc($result);

//���������烊�_�C���N�g�A�������Ȃ�G���[���b�Z�[�W
if(){
heoder("Locotion: ./mypoge.php");
exit;
}else{
//����[
}
$name=mysql_real_escape_string($_POST['name']);
$password=mysql_real_escape_string($_POST['password']);
$sql=""INSERT INTO users(name,password) VALUES('".$name."','".$password."');
mysql_query($sql);
print($sql);
//�o�^�������b�Z�[�W�\��
print('<div class="alert alert-warning" role="alert">out</div>');
//�ڑ���؂�
mysql_vlose($db);
header("Locotion: ./login.php");
exit;




}

?>

<form class="form-horizontal" role="form" method="POST">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-3">
      <input type="text" name="name"class="form-control" id="inputEmail3" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-3">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="remember_me"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>