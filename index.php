<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bàsic</title>
</head>
<body>

    <?php
    /* EXERCICI 1 */

    echo "<h5>EXERCICI 1</h5>";

    class Employee {
       public $nom;
       public $sou; 

       function __construct($lNom, $lSou) {
            $this->nom = $lNom;
            $this->sou = $lSou;
       }

       function pagaImpostos() {
            if($this->sou > 6000) {
                return true;
            } else {
                return false;
            }
       }

       function print() {
           echo "<p>Nom: $this->nom.</p>";
           if($this->pagaImpostos()) {
               echo "<p>El sou és de $this->sou, has de pagar impostos.</p>";
           } else {
            echo "<p>El sou és de $this->sou, NO has de pagar impostos.</p>";
           }
           echo "<br>";

       }
    }

    $emp1 = new Employee("Carlos", 4500);
    $emp1->print();

    $emp2 = new Employee("Júlia", 8000);
    $emp2->print();

    $emp3 = new Employee("Marta", 6000);
    $emp3->print();

    $emp4 = new Employee("Jordi", 6001);
    $emp4->print();
    echo "<br>";
    echo "<br>";

    /* EXERCICI 2 */

    echo "<h5>EXERCICI 2</h5>";

    class Shape {
        public $width;
        public $height;

        function __construct($lWidth, $lHeight) {
            $this->width = $lWidth;
            $this->height = $lHeight;
        }
    }

    class Triangle extends Shape {
        function area() {
            $area = ($this->width * $this->height) / 2;
            echo("<p>L'area d'un triangle amb base $this->width i altura $this->height és de $area.</p>");
        }
    }

    class Rectangle extends Shape {
        function area() {
            $area = ($this->width * $this->height);
            echo("<p>L'area d'un rectangle amb base $this->width i altura $this->height és de $area.</p>");
        }
    }

    $triangle = new Triangle(50, 30);
    $triangle->area();

    $rectangle = new Rectangle(50, 30);
    $rectangle->area();

    ?>
</body>
</html>