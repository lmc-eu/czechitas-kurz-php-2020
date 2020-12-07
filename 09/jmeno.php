<?php session_start();

require "header.php";


?>
<form action="uloz-jmeno.php" method="POST">
    <div class="form-group">
        <input type="text" name="jmeno" placeholder="Jak se jmenujete?">
    </div>
    <button type="submit" class="btn btn-primary">Potvrdit</button>
</form>

<?php
require "footer.php";

?>