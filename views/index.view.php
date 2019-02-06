<?php require 'partials/head.php'?>

<h1>Contacts</h1>

<?php foreach ($contacts as $contact): ?>
    <li>
        <?=$contact->name?>
    </li>
<?php endforeach?>

<?php require 'partials/footer.php'?>