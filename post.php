<?php
    session_start();
    $cursos = ["Nenhum", "Robótica", "Futebol", "Artes"];
    $_SESSION["curPreferido"] = $cursos;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário</title>
</head>
<body>
    <header>
        <img src="imagemquebrada.png" alt="Logo da instituição" style="float:right">
        <h1>Pesquisa de interesse por curso extracurricular</h1><br>
    </header>

    <div class="container">
        <div class="div__formulario">
            <form action="/resultadoPost.php" method="post">
                <h3>Informações do aluno</h3>
                <small style="color:red">(Campos marcados com * são obrigatórios)</small><br><br>
                <label for="alunoNome">*Nome do aluno:</label><br>
                    <input type="text" id="alunoNome" name="alunoNome" placeholder="José da Silva" required="true"><br>

                <label for="alunoRA">*RA do aluno:</label><br>
                    <input type="number" id="alunoRA" name="alunoRA" required="true"/><br>
                <br>
                <label>*Matriculado no período:</label><br>
                    <input type="radio" id="per1" name="periodo" value="Matutino" required="true">
                    <label for="per1">Matutino</label>
                    <input type="radio" id="per2" name="periodo" value="Vespertino">
                    <label for="per2">Vespertino</label>
                    <input type="radio" id="per3" name="periodo" value="Integral">
                    <label for="per3">Integral</label><br>
                <hr>
                <h3>Informações do curso</h3>
                <br>
                <label>Interesse em:</label><br>
                    <label for="selInteresse"></label>
                    <input type="checkbox" id="interesse1" name="interesse[]" value="Robótica"> Robótica
                    <input type="checkbox" id="interesse2" name="interesse[]" value="Futebol"> Futebol
                    <input type="checkbox" id="interesse3" name="interesse[]" value="Artes"> Artes
                <br><br>
                <label for="selCurso">Curso preferido:</label>
                    <select id="selCurso" name="selCurso">
                        <?php
                            for ($i=0; $i < count($cursos); $i++) {
                            ?> 
                            <option value="<?= $i;?>"><?= $cursos[$i];?></option>
                        <?php
                        }
                        ?>
                    </select><br>
                <hr>
                <label for="admEmail">Email da coordenação</label><br>
                    <input type="email" id="admEmail" placeholder="coordenador@instituicao.com.br" required="true"><br>
                <label for="admSenha">Senha da coordenação</label><br>
                    <input type="password" id="admSenha" required="true"><br><br>
                <input type="submit" value="Cadastrar">
                <input type="reset" value="Recomeçar">
            </form>
        </div>
        <div class="espacamento"></div>
        <div class="div__info">
            <h2>Possíveis horários:</h2><br>
            <h4>Robótica:</h4>
            <h5>Professor Renato</h5>
            <ul>
            <li>Segunda e quarta das 13:00 às 16:00</li>
            <li>Terça e quinta das 13:00 às 16:00</li>
            <li>Quarta e sexta das 13:00 às 16:00</li>
            </ul>
            <br>
            <h4>Futebol:</h4>
            <h5>Professor Ricardo</h5>
            <ul>
            <li>Segunda e quarta das 09:00 às 12:00</li>
            <li>Quarta e sexta das 09:00 às 12:00</li>
            </ul>
            <br>
            <h4>Artes:</h4>
            <h5>Professora Luciana</h5>
            <ul>
            <li>Segunda e quinta das 13:00 às 16:00</li>
            <li>Terça e quinta das 13:00 às 16:00</li>
            </ul>
            <br>

            <p>TODOS OS HORÁRIOS ESTÃO <br> SUJEITOS À MUDANÇAS</p>
        </div>
    </div>
</body>
</html>