<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="http://jsonplaceholder.typicode.com/"></script>
  <meta http-equiv="pragma" content="no-cache">


<script>
      window.onload = function(){
          var btn = document.getElementById("calcular");
          btn.onclick = function (){
              var primeiro = document.getElementById("valor_compra").value;
              var segundo = document.getElementById("valor_venda").value;
              var p = parseFloat(primeiro);
              var s = parseFloat(segundo);
              conta(p,s);
          }
      }

      function conta(p, s){
              var total;
              if (p > 0){
                  total = s-p;
                  if (total > 0) {
                    alert("Você obteve Lucro de: "+total);
                  }
                  else {
                    alert("Você obteve Prejuízo de: "+total);  //aqui informa através de um alert se voce teve prejuízo ou lucro
                  }
              }
              else{
                  alert("Digite um valor válido")
              }
              document.getElementById("resu").value = total;
          }
      $(document).ready(function() {
        alert("Essa aplicação utiliza o axios nos campos alta/baixa bitcoin buscando na API do site economia.awesomeapi.com.br, e usa Jquery para mostrar a tabela do investing, esconder e fazer o calculo.");
      $("#tabe").hide();
      $("#fechar").hide();

      $("#ver").click(function() {
        $("#tabe").show();            // aqui eu só interagi com os elementos HTML
        $("#fechar").show();

      $("#fechar").click(function() {
        $("#tabe").hide();
        $("#fechar").hide();
    });
    });
    });

  function buscarDados(){

  	return axios.get("https://economia.awesomeapi.com.br/json/BTC/1"); // axios busca a matriz no site
  }

  dados = buscarDados(); // atribui o return do método à variável

  dados.then(function(resposta){ //faz um function para retornar e exibir os dados
    obj =(resposta.data[0]);// a tabela tem um array antes de entrar na matriz peincipal, por isso o "[0]"

  	var high_json = JSON.stringify(obj.high);// atribui o resultado da célula "hight" a variável hight_json
  	var low_json = JSON.stringify(obj.low);
    var varia_json = JSON.stringify(obj.bid);
    var venda_json = JSON.stringify(obj.ask);

    document.getElementById("alta").value = high_json;// atribui o valor resultante ao elemento HTML com id "alta"
    document.getElementById("baixa").value = low_json;
    document.getElementById("varia").value = varia_json;
    document.getElementById("venda").value = venda_json;

  alert(nom_json);


  	if(error){
  	   alert(error);
  }

  })
  </script>

<style>
  input[type=text], select {
     width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
      display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
button{
  width: 100%;
background-color: #4CAF50;
   color: white;
  padding: 14px 20px;
   margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
div {
    border-radius: 5px;
     padding: 20px;
}
</style>

</head>

<body style="background-color: #f2f2f2;">
  <center><h1>Cotações BitCoin</h1></center>
<div class = "col-md-4">
  <h1>Formulário simulador</h1><br>
  <label for="alta">Máximo do Bitcoin</label>
  <input type="text"  id="alta" name="alta" placeholder="Valor máximo do Bitcoin(dia)" disabled >
  <label for="alta">Baixa  do Bitcoin</label>
  <input type="text"  id="baixa" name="baixa" placeholder="Valor mínimo do Bitcoin(dia)" disabled>
  <label for="alta">Variação</label>
  <input type="text"  id="varia" name="varia" placeholder="" disabled >
  <label for="alta">Venda</label>
  <input type="text"  id="venda" name="venda" placeholder="" disabled>

  <label for="valor_venda">Valor De Venda</label>
  <input type="text"  id="valor_venda" name="valor_venda" placeholder="Valor da venda da ação">

  <label for="valor_compra">Valor De Compra</label>
  <input type="text"  id="valor_compra" name="valor_compra" placeholder="Valor da compra da ação">

  <button  style="width: 100px;" id = "calcular" class = "botao" value="Submit">Calculo</button>
  <button  style="width: 170px; background-color: #607B8B;" id = "ver" value="Ver tabela investing">Ver Tab. Investing</button><br>

<br>
  <label for="resu">Resultado</label>
  <input type="text" id = "resu" name = "resultado" disabled>

</div>

<div class = "col-md-6">
<h1></h1>
<iframe id = "tabe" src="https://br.investingwidgets.com/top-cryptocurrencies?theme=lightTheme"
width="100%" height="67%" style="background-color: #f2f2f2; border-radius: 24px;" frameborder="0" allowtransparency="true" marginwidth="0"
marginheight="0"></iframe>
<button id = "fechar" style = "background-color: #ffa500; width: 100px;">Fechar</button>
</div>
</div>

</body>

</html>
