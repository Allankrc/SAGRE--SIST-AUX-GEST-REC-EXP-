    <?php
    
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "coord";
    $port = 3306;

try {

$conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);
print " sucesso <br><br>";
    }
    
    catch (PDOException $err) {
        print "erro " . $err -> getMessage();
    }

    


    ?>