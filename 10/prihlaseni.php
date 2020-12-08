<?php
require "data.php";
require "header.php";
?>
<style>
  .form-signin {
    width: 100%;
    max-width: 330px;
    padding: 15px;
    margin: auto;
  }
  .form-signin .form-control {
    position: relative;
    box-sizing: border-box;
    height: auto;
    padding: 10px;
    font-size: 16px;
  }
  .form-signin .form-control:focus {
    z-index: 2;
  }
  .form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
</style>

<?php if (isset($_GET['stav']) && $_GET['stav'] == "error") { ?>
    <div class="alert alert-danger" role="alert">
        Nepodařilo se přihlásit, zkontrolujte jméno a heslo
    </div>
<?php } ?>

<form class="form-signin" action="prihlas-me.php" method="POST">
    <h1 class="h3 mb-3 font-weight-normal">Přihlašte se</h1>
    <label for="jmeno" class="sr-only">Jméno</label>
    <input type="text" id="jmeno" name="jmeno" class="form-control" placeholder="Jméno" required autofocus>
    <label for="heslo" class="sr-only">Password</label>
    <input type="password" id="heslo" name="heslo" class="form-control" placeholder="Heslo" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Přihlásit</button>
</form>

<?php
require "footer.php";
?>