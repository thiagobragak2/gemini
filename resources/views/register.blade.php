<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bemol | Escolha com Confiança</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  
  <script type="text/javascript" >

    var CpfCnpjMaskBehavior = function (val) {
                return val.replace(/\D/g, '').length <= 11 ? '000.000.000-009' : '00.000.000/0000-00';
            },
        cpfCnpjpOptions = {
            onKeyPress: function(val, e, field, options) {
            field.mask(CpfCnpjMaskBehavior.apply({}, arguments), options);
        }
        };
    

    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('address').value=("");
            document.getElementById('neiborhood').value=("");
            document.getElementById('city').value=("");
            document.getElementById('state').value=("");        
    }
    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('address').value=(conteudo.logradouro);
            document.getElementById('neiborhood').value=(conteudo.bairro);
            document.getElementById('city').value=(conteudo.localidade);
            document.getElementById('state').value=(conteudo.uf);
            
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {
        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');
        //Verifica se campo cep possui valor informado.
        if (cep != "") {
            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;
            //Valida o formato do CEP.
            if(validacep.test(cep)) {
                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('address').value="...";
                document.getElementById('neiborhood').value="...";
                document.getElementById('city').value="...";
                document.getElementById('state').value="...";
                
                //Cria um elemento javascript.
                var script = document.createElement('script');
                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';
                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };
  </script>
  <script type="text/javascript">
    function validar(){
      var senha = formuser.senha.value;
      var rep_senha = formuser.resenha.value;
      
      if(senha == "" || senha.length <= 5){
        alert('Preencha o campo senha com minimo 6 caracteres');
        formuser.senha.focus();
        return false;
      }
      
      if(rep_senha == "" || rep_senha.length <= 5){
        alert('Preencha o campo senha com minimo 6 caracteres');
        formuser.rep_senha.focus();
        return false;
      }
      
      if (senha != rep_senha) {
        alert('Senhas diferentes');
        formuser.senha.focus();
        return false;
      }
    }
  </script>


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
                @if($errors->any())
                @component('components.alert')
                    <ul>
                        <li>{{ $errors }}</li>
                    </ul>
                @endcomponent
                @endif

                <form method="POST">
                    @csrf
                    <label class="hint-text small">Campos com (*) são Obrigatorios</label>
                    <input type="email" name="email" class="form-control" placeholder="Digite um e-Mail *" required="required" value="{{old('email')}}" /><br/>
                    <input type="name" name="name" class="form-control" placeholder="Digite Seu Nome *" required="required" value="{{old('name')}}" /><br/>
                    <input type="password" name="password" class="form-control" placeholder="Digite sua Senha *" required="required" /><br/>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirme sua Senha *" required="required" /><br/>            
                    <input id="cliCGC" type="cliCGC" name="cliCGC" onblur="$(function() {$(':input[id=cliCGC]').mask(CpfCnpjMaskBehavior, cpfCnpjpOptions);})" class="form-control" placeholder="Digite seu CPF/CNPJ *" required="required" value="{{old('cliCGC')}}" /><br/>

                    <input type="date" name="birthday" class="form-control" placeholder="Digite a Data de Aniversario *" required="required" value="{{old('birthday')}}" /><br/>
                    <input type="cellphone" name="cellphone" class="form-control" placeholder="Número de Celular *" onkeypress="$(this).mask('(00) 0 0000-0000')" required="required" value="{{old('cellphone')}}" /><br/>
                    <input type="cep" name="cep" placeholder="Digite o CEP *" onblur="pesquisacep(this.value);" onkeypress="$(this).mask('00000-000')" class="form-control" required="required" value="{{old('cep')}}" /><br/>

                    <input id="address" type="address" name="address" class="form-control" placeholder="Digite seu Endereço *" required="required" value="{{old('address')}}" /><br/>
                    <input type="numberAdress" name="numberAdress" class="form-control" placeholder="Digite o Número Casa *" required="required" value="{{old('numberAdress')}}" /><br/>
                    <input type="additionalinfo" name="additionalinfo" class="form-control" placeholder="Digite o Complemento" value="{{old('additionalinfo')}}" /><br/>
                    <input type="reference" name="reference" class="form-control" placeholder="Digite uma Referencia" value="{{old('reference')}}" /><br/>
                    <input id="neiborhood" type="neiborhood" name="neiborhood" class="form-control" placeholder="Digite seu Bairro *" required="required" value="{{old('neiborhood')}}" /><br/>
                    <input id="city" type="city" name="city" class="form-control" placeholder="Digite sua Cidade" required="required *" value="{{old('city')}}" /><br/>
                    <input id="state" type="state" name="state" class="form-control" placeholder="Digite Seu Estado" required="required *" value="{{old('state')}}" /><br/>
            
                    <input type="submit" class="btn btn-primary btn-block btn-lg" value="Cadastrar"/>
                </form>
                
				<div class="hint-text small"><a href="/login">Voltar Login</a></div>
			</div>
		</div>
	</div>
  </main>
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>