<?php
include "./header.php";
?>
<h1>Search page</h1>
<div class="article-container">
    <?php
    if (isset($_POST['submit-search'])) {
        $searchResult = mysqli_real_escape_string($connect,$_POST['search']);
       $sql = "SELECT * FROM articles  WHERE a_title LIKE '%$searchResult%' OR a_text LIKE '%$searchResult%'  OR a_author LIKE '%$searchResult%' OR a_date LIKE '%$searchResult%'";
       $result = mysqli_query($connect , $sql);
       $resultRow = mysqli_num_rows($result);

       echo "There are " . $resultRow . " results!"."<br><br>";

       if ($resultRow > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $a_id = $row['a_id'];
            $a_title = $row['a_title'];
            $a_text = $row['a_text'];
            $a_author = $row['a_author'];
            $a_date = $row['a_date'];
            
        echo "<a href='./article.php?title={$a_title}&date={$a_date}'><div class='color-background'>
                <h1>Article number: $a_id</h1>
                <h3>Article title: $a_title</h3>
                <p> Article content: $a_text</p>
                <p> Article author:  $a_author</p>
                <p> Article date: $a_date</p>
        </div></a><br><br>";
        }
       }else{
         echo "<script type='text/javascript'>alert('NO such result found on the database ')</script>";
       }


    }
    
    
    
    ?>
</div>
