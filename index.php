<?php include("db.php");

if (isset($_POST["name"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];

    $sql = "INSERT INTO comments (`name`, `email`, `comment`)
    VALUES ('".$name."', '".$email."', '".$comment."')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } 
}

?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>module 13 challenge</title>
</head>

<body>

    <div id="container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/5SejM_hBvMM?si=WWCghBvyhrl0HqBl"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        <form method="post" action="index.php">
            <input type="text" name="name" placeholder="name" required><br>
            <input type="email" name="email" placeholder="email" required><br>
            <input type="text" name="comment" placeholder="comment" required><br>
            <input type="submit" name="submit" value="submit">
        </form>
    </div>

  <?php  
   $time = date("h:i:sa");
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $sql = "INSERT INTO comments(name, email, comment) VALUES ('$name', $email, '$comment')";

$getcomment = "SELECT name, email, comment FROM comments";
$result = $conn->query($getcomment);
if ($result->rowCount() > 0) {
    while($row = $result->fetch()) {
      echo "name: " . $row["name"] ."<br>"."email: ". $row["email"] . "<br> comment: ".$row["comment"]. "<br>"."<br>";
    }
  } else {
}
}

?>

</body>

</html>