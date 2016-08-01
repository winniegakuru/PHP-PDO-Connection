<?php
  $user = 'root';
  $pass = "";

// establishing a connection
try{
       $db = new PDO( 'mysql:host=localhost;dbname=test', $user, $pass );
       $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "SELECT * FROM users";
 $result = $db->query( $sql ); 
      
          foreach( $result as $row ){
  echo "Name: " . $row[ 'Name' ] . "<br/>" . "Username: " . $row[ 'username' ] . "<br/>" . "Age: " . $row[ 'age' ]."</br>" ;
}
 
    
} catch (PDOExeption $e){
    echo $e.getMessage();
}

?> 
