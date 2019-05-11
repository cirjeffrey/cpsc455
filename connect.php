<body>
    <?php
	
     $username = filter_input(INPUT_POST, 'username');
     $password = filter_input(INPUT_POST, 'password');
     if (!empty($username)){
    if (!empty($password)){
		
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "test2";

    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
	$sql2 = "SELECT `userName`, `userPassword` FROM `login`";
	$result = $conn -> query($sql2);
	while($row =  $result->fetch_assoc()){
		if($row["userName"] == $username && $row["userPassword"] == $password){
			echo "<h1> WELCOME ". $username. "</h1>";
			break;
		}
		else{
			echo "Name or Password is Wrong";
		}
		
	}



 /* INSERT
    $sql = "INSERT INTO `login`(`userName`, `userPassword`) VALUES ('$username','$password')";
	$sql2 = 'SELECT  `userPassword` FROM `login` WHERE userName = "testAdmin"';
    if ($conn->query($sql)){
    echo "New record is inserted sucessfully";
	}
*/
    $conn->close();
    
    }
    else{
    echo "Password should not be empty";
    die();
    }
    }
    else{
    echo "Username should not be empty";
    die();
    }
    ?>

	

</body>
