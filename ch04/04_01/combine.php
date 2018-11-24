<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php $age = 100;?>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consequatur est iure maiores necessitatibus nihil nostrum, numquam pariatur quaerat quia repellendus similique suscipit ut. Ad aliquam asperiores libero soluta tempore?</p>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloremque dolorum eaque id magnam neque officiis quaerat quis reiciendis repudiandae sunt tempore, veniam. Alias aut debitis deserunt, eius ullam ut.</p>

<?php if($age>99): ?>
  <p>Old person</p>
<?php else: ?>
   <p>hhhhhhh</p>
<?php  endif;?>

<?php if ($age>99){  ?>
  <h2>Very old</h2>
<?php  } else{  ?>
   <h2>Very Young</h2>
<?php } ?>









</body>
</html>