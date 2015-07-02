<?php
  $connection = new MongoClient();
  $db = $connection->university;
  $studentCollection = $db->student;
?>

<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
  <body>
    <h1>Resume Builder With Mongo Connection</h1>
    <form id="form_id" action="index.php" method="post">
      <input type="text" name="studentName" value="">
      <input type="text" name="studentNum" value="">
      <input class="submit" type="submit" name="submit" value="submit">
    </form>

    <?php
      if(isset($_POST['submit'])) {
        $studentName = $_POST['studentName'];
        $studentNum = $_POST['studentNum'];
        $doc = array(
          "name" => $studentName,
          "studentNum" => $studentNum
        );
        $studentCollection->insert($doc);
        echo "1 record added, the database includes:"."\n";
        $cursor = $studentCollection->find();
        foreach($cursor as $doc) {
          echo $doc["name"]."\n";
          echo $doc["studentNum"]."\n";
        }
      }
      //$studentCollection->remove();
    ?>

  </body>
</html>
