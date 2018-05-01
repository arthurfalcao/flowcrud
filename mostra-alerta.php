<?php
  function showAlert($tipo) {
    if (isset($_SESSION[$tipo])) {
?>
  <p class="alert-<?=$tipo?> text-center"><?=$_SESSION[$tipo]?></p>
<?php
      unset($_SESSION[$tipo]);
    }
  }
