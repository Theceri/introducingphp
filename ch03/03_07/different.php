<?php $member = 0; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Serving different content</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper">
    <header class="both">
        <h1>Nonesuch Club</h1>
        <p>Welcome one and all to a really exclusive club for PHP developers. So exclusive, it doesn't exist!</p>
    </header>
    <?php if (!$member) : ?>
    <section class="non-members">
        <h2>Become a Member</h2>
        <p>Useful information for non-members. Lorem ipsum dolor sit amet, qui facer quodsi lucilius eu, ad est harum populo explicari, nam ad integre perpetua. Blandit pertinax adipiscing est ut. Eam dicta dictas fastidii an, laudem dolorum ex has. Ne vim dicta labitur pertinax.</p>
        <p>Ut sea populo definitionem, ea regione percipit singulis est. Ex usu deleniti atomorum antiopam, ius duis sonet at. Mea dico deseruisse ex, ut adipisci aliquando argumentum pro. Duo id insolens reformidans, nemore verear vel cu.</p>
    </section>
    <?php
    endif;
    if ($member) :
    ?>
    <section class="members">
        <h2>Member's News</h2>
        <p>For members's eyes only. Sint impedit facilisis mea ei, his at dicunt vocent. Ius error dicit option id. Viris saperet quo in, eu rebum invidunt eam. Cu nam recusabo delicata euripidis. Ut usu natum graeco ponderum, eu senserit rationibus cum.</p>
    </section>
</div>
</body>
</html>