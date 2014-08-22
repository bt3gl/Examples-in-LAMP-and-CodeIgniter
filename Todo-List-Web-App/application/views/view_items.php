

<!DOCTYPE html>
<html lang="en">
<head>
    <base target="_blank">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>The Todo App</title>
    <meta name="author" content="Mari Wahl" />

<style>
<?php include 'style.css'; ?>
</style>

</head>

<body>

<div id="container">
    <h1>The tasks you have:</h1>

    <div id="body">
       <?php print_r($item); ?>
    </div>

    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>



</body>
</html>