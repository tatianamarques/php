<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 11</title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Pessoa.php';
        require_once 'Visitante.php';
        require_once 'Aluno.php';
        require_once 'Bolsista.php';
        
        $v1 = new Visitante();
        $v1->setIdade(18);
        $v1->setNome("Igor");
        $v1->setSexo("M");
        
        $a1 = new Aluno();
        $a1->getIdade(18);
        $a1->getNome("Igor");
        
        $b1 = new Bolsista();
        
        print_r($v1);
        ?>
        </pre>
    </body>
</html>
