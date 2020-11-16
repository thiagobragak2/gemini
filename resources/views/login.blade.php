<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bemol | Escolha com Confiança</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <link href="assets/img/favicon.ico" rel="icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
  <header id="header" class="fixed-top align-items-center">
    <div class="container d-flex align-items-center">
      <img src="assets/img/marca-bemol.svg" class="mr-auto" id="icon">
      </nav>
    </div>
  </header>
  <main id="main">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			
			<div class="modal-body">
          @if(session('warning'))
          @component('components.alert')
              <ul>
                  <li>{{ session('warning') }}</li>
              </ul>
          @endcomponent
          @endif
          
          <form method="POST">
              @csrf
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Digite um e-Mail" required="required">
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Digite sua Senha" required="required">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-block btn-lg" value="Entrar"/>
					</div>
				</form>				
        <div class="hint-text small"><a href="/register">Criar Cadastro</a></div>
			</div>
		</div>
	</div>
  </main>
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>