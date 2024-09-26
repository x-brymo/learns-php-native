<php>
    <title>Index Part 2</title>
    <body>
        <h1>Hello World!</h1>
        <p>
            <3>Learn PHP and connect to db sql</3>
        </p>
        <?php 
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "myDB";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            echo "Connected successfully";

            $sql = "SELECT id, firstName, lastName , age FROM MyGuests";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "id: " . $row["id"]. " - Name: " . $row["firstName"]. " " . $row["lastName"]. "<br>";
                    echo "age : " . $row["age"]. "<br>";
                }    
            } else {
                echo "0 results";
            }
            $conn->close();

            function person($name, $age) {
                return new Person($name, $age);
            }

            class Person {  
                public $name;
                public $age;
                function __construct($name, $age) {
                    $this->name = $name;
                    $this->age = $age;
                }
            }
            ?>
    </body>
</php>