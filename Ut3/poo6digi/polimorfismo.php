<?php
abstract class Vehiculo{
 
    protected $nafta = 100; //Comienza con 100 litros de nafta
 
    public function  getNafta(){
	return $this->nafta;
    }
    abstract function avanzar();
    
}
 
class Ferrari extends Vehiculo{
 
    public function avanzar(){
        $this->nafta -= 20;
    }
}
 
class Fiat extends Vehiculo{
 
    public function avanzar(){
        $this->nafta -= 8;
    }
}

//No hace falta una clase ya que es static
class Prueba {
    
     static function  probar (Vehiculo $v)
     {
         $v->avanzar();
     }
 }
 

$coche1=new Fiat();
$coche2=new Ferrari();

Prueba::probar($coche1); // ::por ser un método estático
Prueba::probar($coche2);

// llamar a un método 
echo "Al Fiat del usuario 1 le quedan " . $coche1->getNafta() . " litros de nafta<br/>";

echo "Al Ferrari del usuario 2 le quedan " . $coche2->getNafta() . " litros de nafta<br/>";


//Un ejemplo de internet
//$usuario1 = new Fiat;
//$usuario2 = new Ferrari;
//
//$usuario1->avanzar();
//$usuario2->avanzar();

//$usuario1 = new Usuario (new Fiat);
//$usuario1->avanzarVehiculo();
// 
//$usuario2 = new Usuario (new Ferrari);
//$usuario2->avanzarVehiculo();
 
// 
//class Usuario {
// 
//    private $vehiculo;
// 
//    function __construct($objeto){
//	$this->vehiculo = $objeto;
//    }
// 
//    public function avanzarVehiculo(){
//	$this->vehiculo->avanzar();
//    }
// 
//    public function nafta(){
//	return $this->vehiculo->getNafta();
//    }
//}
// 


//echo "Al Fiat del usuario 1 le quedan " . $usuario1->nafta() . " litros de nafta<br/>";
// Al Fiat del usuario 1 le quedan 92 litros de nafta


//echo "Al Fiat del usuario 2 le quedan " . $usuario2-> nafta(). " litros de nafta<br/>";
// Al Ferrari del usuario 2 le quedan 80 litros de nafta


?>
