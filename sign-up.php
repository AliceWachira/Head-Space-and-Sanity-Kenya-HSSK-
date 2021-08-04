
   
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => sign-up
        $conn = mysqli_connect("localhost", "root", "", "sign-up");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 7 values from the form data(input)
        $your_name =  $_REQUEST['your_name'];
        $your_email = $_REQUEST['your_email'];
        $your_pasword =  $_REQUEST['your_pasword'];
        $repeatyour_password = $_REQUEST['repeatyour_password'];
        $your_location = $_REQUEST['your_location'];
        $your_age = $_REQUEST['your_age'];
        $gender = $_REQUEST['gender'];

        
          
        // Performing insert query execution
        // here our table name is personal
        $sql = "INSERT INTO personal  VALUES ('your_name', 
            '$your_email','$your_password','$repeatyour_password','$your_location','$your_age','$gender')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$your_name\n $your_email\n "
                . "$your_password\n $repeatyour_password\n $your_location\n $your_age\n $gender");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
 