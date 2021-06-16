<!DOCTYPE html>
<html lang="en">
<head>
<body>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>

</body>

<center>
    <script>
      var btnDD = document.querySelector('#questoesDD');
      var visivel = false;
      btnDD.addEventListener('click', () => {
        var listQ = document.querySelector('#listQ');
        if (visivel) {
          listQ.style.display = 'none';
          visivel = false;
        } else {
          listQ.style.display = 'block';
          visivel = true;
        }
      })

      function mediacalc() {
        var nome = form_calcmed.nome.value;
        var disc = form_calcmed.disc.value;
        var not1 = form_calcmed.not1.value;
        var not2 = form_calcmed.not2.value;
        var media = (parseFloat(not1) + parseFloat(not2)) / 2;

        if (media <= 3) {
          document.getElementById("demo1").innerHTML = nome.toUpperCase() + ", Você está Reprovado Nesta disciplina de " +
            disc.toUpperCase() + ", com Média " + media;
        } else if ((media > 3) && (media < 7)) {
          document.getElementById("demo1").innerHTML = nome.toUpperCase() +
            ", Você está de Recuperação Nesta disciplina, Estude Mais Para Ser Aprovado em:" +
            disc.toUpperCase() + ", com Média " + media;
        } else if ((media >= 7) && (media <= 10)) {
          document.getElementById("demo1").innerHTML = nome.toUpperCase() + ", você foi aprovado na disciplina de:" +
            disc.toUpperCase() + ", com Média " + media;
        } else {
          document.getElementById("demo1").innerHTML = "Erro, Preencha Todos os Campos";
        }
      }
    </script>
  
  <div class="row">
    <form name="form_calcmed" id="form_calcmed">
      <div class="row">
        <div class="input-field col s4">
          <input placeholder="Nome do aluno" id="nome" name="nome" type="text" class="validate" required>
          <label>Aluno:</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Disciplina" id="disc" name="disciplina" type="text" class="validate" required>
          <label>Disciplina:</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s5">
          <input placeholder="Primeira nota" id="not1" name="not1" type="number" max="10" min="0" required>
          <label>Primeira Nota:</label>
        </div>
        <div class="input-field col s5">
          <input placeholder="Segunda nota" id="not2" name="not2" type="number" max="10" min="0" required>
          <label>Segunda Nota:</label>
        </div>
      </div>
      <button style="vertical-align:middle;margin:0px 10px" onclick="mediacalc()"
        class="btn btn-outline-primary float-right" type="button">Calcular Média</button>
    </form>
    
    <h4 id="demo1"> Calcule sua média!</h4>
  </center>
  </div>


</head>

</html>