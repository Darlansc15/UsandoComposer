<?php
/**
* Nome do plugin: Exemplo composer
*/
require("vendor/autoload.php");
/*Usando Slugfy para remover qualquer caractere especial*/
use Cocur\Slugify\Slugify;
echo $slugify->('Ola amigão, Bão de más da conta ou não!');

echo "<br><hr><br>";

/*Classes Internas*/
use Classes\ClassTeste;
$Teste==new ClassTeste();
	public function construct()
    {
        $this->Outras=new Outras\ClassFinal();
        echo "Class Teste Funcionamento";
        echo "<br><hr><br>";
        echo $this->Integrar(;);
        echo "<br><hr><br>";
        $this->Outras->TesteFinal();
    }