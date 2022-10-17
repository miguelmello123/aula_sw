<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dados Alunos</title>
</head>
<body>
    <?php
        echo "Seguem abaixo as informações digitadas na pániga anterior: "."<br><br>";
        echo "Nome Completo: ".$_POST['txtnome']." ".$_POST['txtsobrenome']."<br>";
        echo "Telefone: ".$_POST['txttel']."<br>";
    
    ?>
</body>
</html>