<? include("./ayar/ayar.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Panel Giriş</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script src='https://www.google.com/recaptcha/api.js'></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Giriş Yap</div>
				<div class="panel-body">
				<? 
				$token = new token();
				if(isset($_POST['giris-yap'])){
					$token_test = $_POST["spam_token"];
					
				if($token->tokenSorgula($token_test) == false){
					die("TOKEN HATALI!");
				
				}elseif(($_POST["nick"]==$admin_username2) and ($_POST["password"]==$admin_sifre2)){
						$_SESSION["login"] = "true";
						header("Location: index.php");
					}else{
						echo "Şifreyi veya kullanıcı adını yanlış girdiniz!<br><br>";

					}
					}
				?>
					<form action="" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Kullanıcı Adı" name="nick" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Şifre" AUTOCOMPLETE="off" name="password" type="password" value="">
							</div>
							<button name="giris-yap" type="submit" class="btn btn-primary pull-right">Giriş Yap</button>
						</fieldset>
					<input type="hidden" name="spam_token" value="<? echo $_SESSION['spam_token'] ?>" />
					<input type="hidden" name="token" value="<? echo $_SESSION['token'] ?>" />
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
