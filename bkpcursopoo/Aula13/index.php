<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 13 - POO PHP - Polimorfismo</title>
    </head>
    <body>
        <h1>
        <pre>
        <?php
        require_once 'Animal.php';
        require_once 'Mamifero.php';
        require_once 'Lobo.php';
        require_once 'Cachorro.php';
        
        $m = new Mamifero();
        //$m->emitirSom();
        
        $l = new Lobo();
        //$l->emitirSom();
        
        $c = new Cachorro();
        $c->emitirSom();
        $c->reagirIdadePeso(4, 5);
        $c->reagirFrase("Olá!");
        $c->reagirFrase("Vai apanhar.");
        $c->reagirHora(11, 45);
        $c->reagirHora(21, 00);
        $c->reagirDono(true);
        $c->reagirDono(false);
        $c->reagirIdadePeso(2, 12.5);
         $c->reagirIdadePeso(17, 4.5);
          
        //print_r($c);
       // print_r($l);
       // print_r($m);
        
        
        ?>
        </pre>
        </h1>
    </body>
</html>
