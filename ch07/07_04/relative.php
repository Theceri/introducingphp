<?php require './includes/copyright.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Using include path</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Using the include path</h1>
<p>This paragraph is in the original file.</p>
<?php include './includes/para.html'; ?>
<p>This is also in the original file.</p>
<p><?= lyn_copyright(2018) ;?> Paul Theceri</p>
</body>
</html>
