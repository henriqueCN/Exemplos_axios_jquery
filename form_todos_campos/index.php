<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
$( document ).ready(function() {
function buscarDados(){

	return axios.get("webservice.php?nome=henrique");

}

dados = buscarDados();

dados.then(function(resposta){
  obj =(resposta.data);

var foto = obj.foto;
var sexo = obj.sexo;
var nomi = obj.nome;
var biog = obj.biografia;

document.getElementById("bio").value = biog;
document.getElementById("nome").value = nomi;

$("img").attr('src', foto);

if(sexo == "masculino"){
	$("#masc").attr("checked", true);
}
else if (sexo == "feminino") {
	$("#femi").attr("checked", true);
}
else{
	$("#outro").attr("checked", true);
}


});

	if(error){     
	alert(error);
}
})
   function previewFile(){
       var preview = document.querySelector('img');
       var file    = document.querySelector('input[type=file]').files[0];
       var reader  = new FileReader();

       reader.onloadend = function () {
           preview.src = reader.result;
       }

       if (file) {
          reader.readAsDataURL(file);

       } else {
           preview.src = "";
       }
  }
  previewFile();

  </script>
</head>


<body>
<div class = "row">
		<center><h1 style = "">Exemplo s3wf</h1></center>
<div class = "col-md-4">
  <h3>Furmulário com todos os campos</h3>
  <input type="radio" id = "femi" name="genero" value="feminino"> Feminino<br>
	  <input type="radio" id = "masc" name="genero" value="masculino"> Masculino<br>
  <input type="radio" id = "outro" name="genero" value="outro"> Outro<br>
  <br>
  <label for "nome">Digite seu nome:</label>
  <input type="text" placeholder = "Digite o nome aqui..." style="width: 400px;" class="form-control" id="nome"><br>
  <input name="meufile" onchange="previewFile()" id = "foto" type="file"><br>
  <input type="button" style="width: 120px;" onclick="alert('Este é o form com todos os tipos de campos pedidos no email da s3wf, está pegando informações do Banco (teste upload) da tabela (ususario) do usuario (henrique)')" value="Informações">
<br>
	<br><label for "nome">Sua Biografia</label>
	<input type="text" style="width: 600px;" placeholder="Biografia" id = "bio" name="biografia">

</div>
<div class = "col-md-4">
	<h3>Foto do usuário:</h3>
  <img src="" id = "foto" height="200" style = "border-radius:10px; margin-top:20px;" alt="Image preview...">
</div>
</div>

</body>

<!-- O caminho do AXIO é este aqui ai dentro tem o que precisa.

https://github.com/axios/axios/tree/master/dist
https://github.com/axios/axios/blob/master/dist/axios.min.js

Então:

Agora faça um formulário com todos os tipos de capos do HTML para que possa saber como capturar os elementos.

Faça agora o type=file, para fazer UPLOAD de arquivo em seus AJAX.

No AXIOS vc irá precisar brincar com Header, testa varios Content-Type para ver o que ocorre:

headers: { 'Content-Type': 'multipart/form-data',}

Faça em JS NATIVO O UPLOAD, JQUERY E AXIOS.


Qualquer dúvida posta aqui. -->
</html>
