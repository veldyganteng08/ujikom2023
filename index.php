<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/style.css?version=<?= filemtime("css/style.css")?>" >

</head>
<body>
<form method="POST" action="ceklogin.php">
 	<?php if (isset($_GET['msg'])) : ?>
						<div class="alert" role="alert">
							<small class="text-danger"><?= $_GET['msg'];  ?></small>
						</div>
					<?php endif ?>

         
                    <div class="login">
  <div class="form">
    <p>VELAUNDRY</p>
    <form class="login-form">
      <input type="text" name="username"placeholder="username" />
      <input type="password" name="password" placeholder="password" required />
      <button>login</button>
    </form>  
  </div>
</div>
</html