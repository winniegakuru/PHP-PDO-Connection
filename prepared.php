 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO users (Name, username, age)
    VALUES (:firstname, :lastname, :age)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':age', $email);
    
    // insert a row
    $firstname = "trey";
    $lastname = "Jones";
    $email = 77;
    $stmt->execute();

    // insert another row
    $firstname = "happy";
    $lastname = "kemnto";
    $email = 81;
    $stmt->execute();

    // insert another row
    $firstname = "qwinter";
    $lastname = "nolar";
    $email = 79;
    $stmt->execute();

    echo "New records created successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?>
