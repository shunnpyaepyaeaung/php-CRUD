<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">

</head>
<body>
    <div class="container">
        <h1>Category List</h1>
        <?php 
            include("confs/config.php");
            $result = mysqli_query($conn, 'SELECT * FROM categories');
        ?>
        <ul>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <li title="<?php echo $row['remark'] ?>">
                <div class="ui buttons">
                    <a href="cat-del.php?id=<?php echo $row['id'] ?>" class="ui negative button">Delete</a>
                    <div class="or"></div>
                    <a href="cat-edit.php?id=<?php echo $row['id'] ?>" class="ui teal button">Edit</a>
                </div>
                    <?php echo $row['name'] ?>
                </li>
                <br>
            <?php endwhile; ?>
        </ul>
        <a href="cat-new.php" class="new">New Category</a>
    </div>
    
</body>
</html>