<?php
  session_start();
  //require("fpdf/fpdf.php");
  require("document.php");
?>

<html>
  <head>
    <style media="screen">
      input{
        margin-bottom: 10px;
      }
    </style>
  </head>
  <body>
    <div>
      <form class="" action="pdf.php" method="post">
        <input type="text" name="firstname" placeholder="firstname"><br>
        <input type="text" name="lastname" placeholder="lastname"><br>
        <input type="email" name="email" placeholder="email"><br>
        <input type="submit" name="submit" value="Submit">
        <input type="reset" name="reset" value="Reset">
      </form>
      <?php
      /*
        $host = "localhost";
      	$user = "root";
      	$pass = "";
      	$db = "resume";

      	$conn = mysql_connect($host, $user, $pass);
      	if (!$conn) {
      	    die("Connection failed: " . mysql_error());
      	}

      	mysql_select_db($db);

      	$sql = "SELECT * FROM person";
      	$result = mysql_query($sql);

      	//testing the fetch row here

      	if ($result = mysql_query($sql)){
          // Fetch one and one row
          while ($row = mysql_fetch_row($result)){
      		  echo '<div>';
      	  	echo '<p>'.$row[1].'</p>';
      	  	echo '<p>'.$row[2].'</p>';
      	  	echo '<p>'.$row[3].'</p>';

      	    echo '</div>';
      	  }
      	}
      */
        // Database Connection
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "resume";
        $conn = mysqli_connect($host, $user, $pass, $db);
				if(!$conn){
					die("Opps something happened" . mysqli_connect_error());
				}else {
          echo "connected successfully";
        }

        // Test Print of data from database
        /*
        $sql = "SELECT * FROM person";//WHERE dbid = '1'";
				$query = mysqli_query($conn, $sql);

        if ($query = mysqli_query($conn, $sql)){
          // Fetch one and one row
          while ($row = mysqli_fetch_row($query)){
      		  echo '<div>';
      	  	echo '<p>'.$row[1].'</p>';
      	  	echo '<p>'.$row[2].'</p>';
      	  	echo '<p>'.$row[3].'</p>';

      	    echo '</div>';
      	  }
      	}*/

				mysqli_close($conn);

        //var_dump(get_class_methods($pdf));


        //Session

        //$firstname = $_SESSION['firtname'];
      //  $_POST[$firstname];

        // class version
        /*
        $document = new document($_POST['firstname'], $_POST['lastname'], $_POST['email']);

        if(isset($document)){
          echo $document->get_first_name() . '<br>';
          echo $document->get_last_name() . '<br>';
          echo $document->get_email() . '<br>';
        } else{
          echo "you fucked nigeger";
        }
        */
        /*
        if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email'])){
          echo 'yes it works';
        }else {
          echo 'nope';
        }*/
        /*
        // PDF commands
        $pdf = new fpdf();
        $pdf->AddPage();
        $pdf->SetFont("Arial", "B", "20");
        $pdf->Cell(0, 10, "Sfdsdsdf");
        $pdf->Output();
        */

      ?>
    </div>
  </body>

</html>
