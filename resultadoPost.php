<?php
    session_start();
    //var_dump($_POST);
    $alunoNome = $_POST["alunoNome"];
    $alunoRA = $_POST["alunoRA"];
    $alunoPeriodo = $_POST["periodo"];

    $curInteresse;
    $curIndex = $_SESSION["curPreferido"];
    $curPreferido = $curIndex[$_POST["selCurso"]];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>
    <header>
        <h1>Interesse cadastrado com sucesso!</h1>
    </header>
    <div class="container">
        <div class="div__resumo">
            <h2>Resumo:</h2>
            <br>
            <h3>Informações do aluno</h3>
            <label>Nome do aluno:</label> <?php echo($alunoNome)?><br>
            <label>RA do aluno:</label> <?php echo($alunoRA)?><br>
            <label>Matriculado no período:</label> <?php echo($alunoPeriodo)?><br>
            <br>
            <h3>Informações do curso</h3>
            <label>Tem interesse por curso de:</label>
            <?php
                $e = count($_POST["interesse"]) - (count($_POST["interesse"])-1);
                foreach ($_POST["interesse"] as $curInteresse) {
                    echo $curInteresse;
                    if (count($_POST["interesse"]) > $e){
                        echo " e ";
                        $e++;
                    }
                }
            ?><br>
            <label>Prefere curso de:</label> <?php echo($curPreferido)?><br>
        </div>
        <div class="espacamento"></div>
        <div class="div__orientacao">
            <h2>Oriente ao aluno que:</h2>
            <ul>
                <li>Os horários podem ser alterados</li>
                <li>Os professores podem ser alterados</li>
                <li>Cursos não são garantidos</li>
                <li>Vagas não são garantidas</li>
            </ul>
        </div>
        <div class="espacamento"></div>
        <div class="btn_NovoCadastro">
            <form action="/post.php">
                <br>
                <button type="submit">Cadastrar novo aluno</button>
            </form>
            
        </div>
    </div>
</body>
</html>