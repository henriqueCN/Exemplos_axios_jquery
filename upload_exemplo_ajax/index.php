<html>
<head>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
  <center><h1>Enviando Dados via Ajax</h1></center>
<form id="meuForm" enctype="multipart/form-data">
<input type="radio" id = "femi" name="genero" value="feminino"> Feminino<br>
<input type="radio" id = "masc" name="genero" value="masculino"> Masculino<br>
<input type="radio" id = "outro" name="genero" value="outro"> Outro<br>
<br>
<input type="file" onchange="previewFile()" name="arquivo" multiple><br>
<br>
<label for "nome">Digite seu nome:</label>
<input type="text" placeholder = "Digite o nome aqui..." style="width: 400px;" name ="nome" id="nome"><br>
<button id="enviar" style = "background-color: green; color:white; width:100px; height:40px; border-radius:10px;">Enviar</button>
<h3>Foto do usuário:</h3>
<img src="" id = "foto" height="200" style = "border-radius:10px; margin-top:20px;" alt="Image preview...">
</form>
<div id="mensagens"></div>
</div>
</body>
</html>
<script>

  $("#enviar").on('click',function(e){
    e.preventDefault();
    var form = $('form')[0];
    var formData = new FormData(form);
    $.ajax({
      url:'upload.php',
      type: 'POST',
      data: formData,
      processData: false,
      contentType: false,
      success: function(data){
        $("#mensagens").html(data);
      }
    });
  });
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
