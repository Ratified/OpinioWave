<?php
  include_once("header.php");
?>
<?php 
  if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $feedback = mysqli_real_escape_string($connection, $_POST['feedback']);

    $sql = "INSERT INTO feedback_table (name, email, feedback) VALUES ('$name', '$email', '$feedback')";
    $result = mysqli_query($connection, $sql);
    if(!$result){
      die("Error: ".mysqli_error($connection));
    } else{
      header("Location: feedback.php?feedback=success");
    }
  }
?>


<main>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div>
          <label for="name">Name</label>
          <input type="text" name="name">
        </div>
        <div>
          <label for="email">Email</label>
          <input type="email" name="email">
        </div>
        <div>
          <label for="feedback">Feedback</label>
          <textarea name="feedback"></textarea>
        </div>

        <input type="submit" value="Send" name="submit">
    </form>
</main>


<?php 
  include_once("footer.php");
?>