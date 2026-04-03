
<?php
    require 'config.php';
    $login_url = $client->createAuthUrl();
?>
<a href="<?php echo $login_url; ?>">Login with Google</a>