<?php
$errors = [];
$missing = [];
if (isset($_POST['send'])) {
    $expected = ['name', 'email', 'comments', 'extras'];
    $required = ['name', 'comments'];
    $to = 'David Powers <david@example.com>';
    $subject = 'Feedback from online form';
    $headers = [];
    $headers[] = 'From: webmaster@example.com';
    $headers[] = 'Cc: another@example.com';
    $headers[] = 'Content-type: text/plain; charset=utf-8';
    $authorized = null;
    //Because we're adding extras to the $expected array, the script in process_mail.php expects that element to be included in the $_POST array. But if the user hasn't selected any of the checkboxes, it won't exist. So we need to check for it's existence and create an empty array if it's not there.
    if (!isset($_POST['extras'])) {
        $_POST['extras'] = [];
    }
    //If there is a minimum number of checkboxes that we want checked, then we can raise an error if that minimum number of checkboxes is not reached
    $minimumChecked = 2;
    if (count($_POST['extras']) < $minimumChecked) {
        $errors['extras'] = true;
    }
    require './includes/process_mail.php';
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Single checkbox</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Contact Us</h1>
<?php if ($_POST && $suspect) : ?>
<p class="warning">Sorry, your email couldn't be sent.</p>
<?php elseif ($errors || $missing) : ?>
<p class="warning">Please fix the item(s) indicated</p>
<?php endif; ?>
<form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
    <p>
        <label for="name">Name:
        <?php if($missing && in_array('name', $missing)) : ?>
            <span class="warning">Please enter your name</span>
        <?php endif; ?>
        </label>
        <input type="text" name="name" id="name"
            <?php
            if ($errors || $missing) {
                echo 'value="' . htmlentities($name) . '"';
            }
            ?>
            >
    </p>
    <p>
        <label for="email">Email:
            <?php if($missing && in_array('email', $missing)) : ?>
                <span class="warning">Please enter your email address</span>
            <?php elseif (isset($errors['email'])) : ?>
                <span class="warning">Invalid email address</span>
            <?php endif; ?>
        </label>
        <input type="email" name="email" id="email"
            <?php
            if ($errors || $missing) {
                echo 'value="' . htmlentities($email) . '"';
            }
            ?>
            >
    </p>
    <p>
        <label for="comments">Comments:
            <?php if($missing && in_array('comments', $missing)) : ?>
                <span class="warning">You forgot to add any comments</span>
            <?php endif; ?>
        </label>
            <textarea name="comments" id="comments"><?php
                if ($errors || $missing) {
                    echo htmlentities($comments);
                }
                ?></textarea>
    </p>
    <fieldset>
        <legend>Optional Extras
        <?php if (isset($errors['extras'])) : ?>
            <span class="warning">Please select at least <?= $minimumChecked; ?></span>
            <?php endif; ?>
        </legend>
        <!--All checkboxes in the same group share the same name attribute, 'extras' in this case-->
        <!--value is what is transmitted with the form data if a checkbox is selected-->
        <!--There's a problem of using a single name for the whole group. When you do that, only the last selected value will be added to the $_POST array.

         To handle a group of checkboxes that use the same name, you need to turn it into an array. Do that by appending an empty pair of square brackets after the name attribute.
        -->
        <input type="checkbox" name="extras[]" value="sun roof" id="extras_0"
            <?php
            if ($_POST && in_array('sun roof', $extras)) {
                echo 'checked';
            }
            ?>
            >
            <label for="extras_0">Sun roof</label>
            <br>
        <input type="checkbox" name="extras[]" value="aircon" id="extras_1"
            <?php
            if ($_POST && in_array('aircon', $extras)) {
                echo 'checked';
            }
            ?>
            >
            <label for="extras_1">Air conditioning</label>
            <br>
        <input type="checkbox" name="extras[]" value="automatic" id="extras_2"
            <?php
            if ($_POST && in_array('automatic', $extras)) {
                echo 'checked';
            }
            ?>
            >
            <label for="extras_2">Automatic transmission</label>
    </fieldset>
    <p>
        <input type="submit" name="send" id="send" value="Send Comments">
    </p>
</form>
</body>
</html>