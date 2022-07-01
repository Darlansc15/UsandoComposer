<?php
namespace Classes;
use Classes;
use Outras;

class ClassTest extends ClassIntegracao{
   
    private $Outras;
    
    public function construct()
    {
        $this->Outras=new Outras\ClassFinal();
        echo "Class Teste Funcionamento";
        echo "<br><hr><br>";
        echo $this->Integrar(;);
        echo "<br><hr><br>";
        $this->Outras->TesteFinal();
    }
}