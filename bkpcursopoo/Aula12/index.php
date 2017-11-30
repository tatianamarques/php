
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 12 - Polimorfismo</title>
    </head>
    <body>
        <pre>
        <?php
        //require_once 'Animal.php';
        require_once 'Mamifero.php';
        require_once 'Reptil.php';
        require_once 'Peixe.php';
        require_once 'Ave.php';
        require_once 'Arara.php';
        require_once 'Goldfish.php';
        require_once 'Cobra.php';
        require_once 'Lobo.php';
        require_once 'Cachorro.php';
        require_once 'Cobra.php';
        require_once 'Tartaruga.php';
        
        $m = new Mamifero();
        $m->setPeso(0.500);
        $m->setCorPelo("Marrom");
        $m->setIdade(2);
        $m->setMembros(4);
        $m->emitirSom();
        $m->locomover();
        $m->alimentar();
        
        $r = new Reptil();
        $r->alimentar();
        $r->locomover();
        $r->emitirSom();
        $r->setIdade(3);
        $r->setMembros(4);
        $r->setPeso(1);
        $r->setCorEscama("Verde");
        
        $p = new Peixe();
        $p->alimentar();
        $p->locomover();
        $p->emitirSom();
        $p->soltarBolha();
        $p->setIdade(3);
        $p->setMembros(4);
        $p->setPeso(1);
        $p->setCorEscama("Vermelhas");
        
        $a = new Ave();
        $a->alimentar();
        $a->emitirSom();
        $a->fazerNinho();
        $a->locomover();
        $a->setPeso(0.2);
        $a->setMembros(2);
        $a->setIdade(1);
        $a->setCorPena("Amarela");
        
        $a2 = new Arara();
        $a2->locomover();
        
        $t = new Tartaruga();
        $t->locomover();
        
        $l = new Lobo();
        $l->locomover();
        $l->emitirSom();
        
        $k = new Cachorro();
        $k->locomover();
        $k->emitirSom();
        
        print_r($k);
        //print_r($a);
        //print_r($p);
        //print_r($r);
        //print_r($m);
        ?>
        </pre>
    </body>
</html>
