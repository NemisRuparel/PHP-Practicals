// Parent class
 abstract class Car 
{
    abstract public function intro(); 
 }
// Child classes
 class Audi extends Car 
{
    public function intro($name) 
    {
        return "This is AUDI"; 
    }
}
class Volvo extends Car 
{
    public function intro()  
    {
        return "This is VOLVO"; 
    }
 }
class Citroen extends Car 
{
    public function intro()  
    {
        return "This is CITRON"; 
    }
}
// Create objects from the child classes
 $audi = new audi("Audi");
 echo $audi->intro();
 echo "<br>";
 $volvo = new volvo("Volvo");
 echo $volvo->intro("imran");
 echo "<br>";
 $citroen = new citroen("Citroen");
 echo $citroen->intro();
 ?>
