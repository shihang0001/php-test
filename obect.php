<html>
  <head>
    <title></title>
  </head>
  <body>
    <p>
      <?php
      class Person{
        public static function say(){
            echo "Here are my thoughts!";  
            } 
        }
      class Blogger extends Person{
    const cats=50;
#     static public $cats = "50";
    // Some code
      }
  echo Blogger::cats;
   Blogger::say();
      ?>
    </p>
  </body>
</html>


