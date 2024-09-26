<php>
    <meta charset="UTF-8">
    <title>PHP</title>
    <body>
        <h1>Hello World</h1>
    </body>
   <?php
   //This is a comment Variable
   $name = "John";
   $age = 35;
   echo ("My name is $name and I am $age years old.");
   // This is a comment Class
   class Person {
       public $name;
       public $age;
       function __construct($name, $age) {
           $this->name = $name;
           $this->age = $age;
       }
   }
   // This is a comment Function
   function person($name, $age) {
       return new Person($name, $age);
   }
   // This is a comment If
   if ($age > 30) {
       echo "I'm older than 30";
   }
   // This is a comment Switch
   switch ($name) {
       case "John":
           echo "Hello John";
           break;
       case "Peter":
           echo "Hello Peter";
           break;
       default:
           echo "Hello World";
   }
   // This is a comment For
   for ($i = 0; $i < 10; $i++) {
       echo "The number is: $i <br>";
   }
   // This is a comment While
   $i = 0;
   while ($i < 10) {
       echo "The number is: $i <br>";
       $i++;
   }
   // This is a comment Do While
   $i = 0;
   do {
       echo "The number is: $i <br>";
       $i++;
   } while ($i < 10);
   // This is a comment Foreach
   $people = array("Peter", "Joe", "Glenn", "Cleveland");
   foreach ($people as $person) {
       echo "Hello $person <br>";
   }
   // This is a comment Return
//    function person($name, $age) {
//        return new Person($name, $age);
//    }
   $person = person("John", 36);
   echo $person->name;
   echo $person->age;
   // This is a comment Exit
   exit("Bye");
   // This is a comment Echo
   echo "Hello World";
   // This is a comment Print
   print "Hello World";
   // This is a comment Print_R
   print_r($people);
   // This is a comment Var_Dump
   var_dump($people);
   // This is a comment Casting
   $x = (string) 123;
   echo $x;
   // This is a comment Concatenation
   $x = "Hello";
   $y = "World";
   echo $x . $y;
   // This is a comment Escape
   echo "Hello \"World\"";
   // This is a comment Heredoc
   $txt = <<<"END"
   Hello World
   END;
   echo $txt;
   // This is a comment Nowdoc
   $txt = <<<'END'
   Hello World
   END;
   echo $txt;
   // This is a comment Ternary
   $a = 10;
   $b = 20;
   echo ($a > $b) ? "a is greater than b" : "b is greater than a";
   // This is a comment Null Coalescing
   $a = 10;
   $b = 20;
   echo $a ?? $b;
   // This is a comment Isset
   $a = 10;
   if (isset($a)) {
       echo "Variable a is set";
   }
   // This is a comment Unset
   $a = 10;
   unset($a);
   if (!isset($a)) {
       echo "Variable a is not set";
   }
   // This is a comment Empty
   $a = 10;
   if (empty($a)) {
       echo "Variable a is empty";
   }
   // This is a comment Array
   $cars = array("Volvo", "BMW", "Toyota");
   echo $cars[0];
   // This is a comment Math
   $x = 5;
   $y = 4;
   echo $x + $y;
   // This is a comment Random
   $x = rand();
   echo $x; 
   // This is a comment Constant
   define("GREETING", "Welcome to W3Schools.com!");
   echo GREETING;
   // This is a comment Date
   echo date("d.m.Y");  
   // This is a comment Date Time
   echo date("d.m.Y h:i:sa");
   // This is a comment Date Format
   $a = "Hello";
   $b = "World";
   echo "$a $b!";
   // This is a comment Date Time Format
   $a = "Hello";
   $b = "World";
   echo "$a $b!";
   // This is a comment Date Format
   $a = "Hello";
   $b = "World";
   echo "$a $b!";
   // This is a comment Date Time Format
   $a = "Hello";
   $b = "World";
   echo "$a $b!";
   // This is a comment Date Format
   $a = "Hello";
   $b = "World";
   echo "$a $b!";
   // This is a comment Date Time Format
   $a = "Hello";
   $b = "World";
   echo "$a $b!";
   
   ?>
</php>