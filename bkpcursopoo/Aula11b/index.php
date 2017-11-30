<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 11b</title>
    </head>
    <body>
        <pre>
        <?php
        //require_once 'Visitante.php';
        
        //$v1 = new Visitante();
        //$v1->setNome("Juvenal");
        //$v1->setIdade(33);
        //$v1->setSexo("M");
        
        require_once 'Aluno.php';
        require_once 'Bolsista.php';
        require_once 'Professor.php';
        require_once 'Tecnico.php';
        
        $a1 = new Aluno();
        $a1->setNome("Pedro");
        $a1->setMatricula(1111);
        $a1->setIdade(16);
        $a1->setSexo("M");
        $a1->setCurso("Informática");
        $a1->pagarMensalidade();
        
        $b1 = new Bolsista();
        $b1->setMatricula(1112);
        $b1->setNome("Jubileu");
        $b1->setCurso("Informática");
        $b1->setBolsa(12.5);
        $b1->renovarBolsa();
        $b1->pagarMensalidade();
        
        $t1 = new Professor();
        $t1->setSalario(2500);
        $t1->receberAum(355);
        
        $at1 = new Tecnico();
        $at1->setNome("Henrique");
        $at1->getMatricula(1113);
        $at1->praticar();
        
        print_r($at1);
        ?>
        </pre>
    </body>
</html>
