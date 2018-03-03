<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(function () {

            $("#cep").blur(function () {

                var cep = $(this).val().replace(/\D/g, '');

                $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados){

                    $("#logradouro").val(dados.logradouro);
                    $("#bairro").val(dados.bairro);
                    $("#localidade").val(dados.localidade);
                    $("#uf").val(dados.uf);
                    if (dados.bairro === "") {
                        $("#bairro").val("valor não disponível");
                    }
                    if (dados.logradouro === "") {
                        $("#logradouro").val("valor não disponível");
                    }

                    if (dados.localidade === "") {
                        $("#localidade").val("valor não disponível");
                    }
                    if (dados.uf === "") {
                        $("#uf").val("valor não disponível");
                    }

                });
            });

            $("#limpar").click(function() {

                $("input").val("");
            });
        })

    </script>
</head>
<body>
    <center>
        <h1>Exemplo Jquery</h1>
    <input type="text" placeholder="Digite o CEP" id = "cep" name="cep"><br>
    <input type="text" placeholder="logradouro" id = "logradouro" name="logradouro"><br>
    <input type="text" placeholder="bairro" id = "bairro" name="bairro"><br>
    <input type="text" placeholder="localidade" id = "localidade" name="localidade"><br>
    <input type="text" placeholder="uf" id = "uf" name="uf"><br>
    <button id = "pesquisar">Pesquisar</button><button id = "limpar">Limpar</button>
    <div style="background-color: black; height: 200px; width: 400px; color: white; border-radius: 6px; margin-top: 20px;">
        <p>Esse modo de acionamento do Jquery fará mais ou menos o que o Axios faz, buscando a informação na API do site ViaCep, quando aparecer "valor não disponivel" em algum campo, é porque não há valor disponível na API (foto explicativa dentro da pasta ("exemplo_Jquery/imagem_viacep.png")).</p>
    </div>
    </center>
</body>
