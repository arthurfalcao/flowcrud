<?php require 'partials/head.php'?>

<h1>Contacts</h1>

<form action="/contacts" method="POST">
    <input type="text" name="name" id="name">

    <button tyoe="submit">Enviar</button>
</form>

<?php foreach ($contacts as $contact): ?>
    <li>
        <?=$contact->name?>
    </li>
<?php endforeach?>

<?php require 'partials/footer.php'?>