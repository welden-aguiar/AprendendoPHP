Olá 
<?php echo htmlspecialchars($_POST['name']); ?>.
Voce tem <?php echo (int)$_POST['age']; ?> anos. <br>

<br>Seu nome será apresentado pelo array $_REQUEST:<br>
<?php echo "Nome: " . $_REQUEST['name']; ?><br>
<?php echo "Idade: " . $_REQUEST['age']; ?>

<br>
<?php echo $_SERVER['REQUEST_METHOD'] . "<br>"; ?>


