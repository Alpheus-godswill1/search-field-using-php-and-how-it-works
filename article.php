<?php include "./header.php";?>
<body>
    <h1>Article page!</h1>
    <div class="article-container">
        <?php 
        $title = mysqli_real_escape_string($connect,$_GET['title']);
        $date = mysqli_real_escape_string($connect,$_GET['date']);
        $sql = "SELECT * FROM articles WHERE a_title LIKE '%$title%' OR a_date LIKE '%$date%'";
        $result = mysqli_query($connect, $sql);
        $queryResults = mysqli_num_rows($result);

        if ($queryResults > 0) {
           while ($row = mysqli_fetch_assoc($result)) {
                $a_id = $row['a_id'];
                $a_title = $row['a_title'];
                $a_text = $row['a_text'];
                $a_author = $row['a_author'];
                $a_date = $row['a_date'];
                
            echo "<div class='color-background'>
                    <h1>Article number: $a_id</h1>
                    <h3>Article title: $a_title</h3>
                    <p> Article content: $a_text</p>
                    <p> Article author:  $a_author</p>
                    <p> Article date: $a_date</p>
            </div><br><br>";
           }
        }
        ?>
    </div>
</body>
</html>