<?php 
    include_once("header.php");
?>

<?php 
    $query = "SELECT * FROM feedback_table";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC)
?>

<main>
    <h2 class="h2_feedback">Feedback</h2>
    <?php foreach($row as $data): ?>
        <div class="feedback_card">
            <?php 
                echo '<p class="feedback_card__paragraph">' . $data['feedback'] . '</p>';
                echo '<p class="feedback_card__name">' . $data['name'] .'</p>';    
            ?>
        </div>
    <?php endforeach ?>
</main>

<?php 
    include_once("footer.php");
?>