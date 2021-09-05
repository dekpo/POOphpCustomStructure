<?php
if (!empty($_POST)) {
    $user = $auth->login($_POST["email"], $_POST["password"]);
}
?>
<h1>FORM LOGIN HERE !</h1>
<form method="POST">
    <?php
    echo $form->input("email","email");
    echo $form->input("password","password");
    echo $form->submit();
    ?>
</form>