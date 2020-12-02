<?php session_start();

require 'data.php';
require 'header.php';

$jmeno = "";
if (isset($_SESSION['jmeno'])) {
    $jmeno = $_SESSION["jmeno"];
}

?>

<form action="uloz-jmeno.php" method="POST">
    <div class="form-group">
        <label for="jmeno">Jmeno</label>
        <input type="text" name="jmeno" class="form-control" id="jmeno" placeholder="Jaké je Vaše jméno?" value="<?php echo $jmeno; ?>">
    </div>
    <button type="submit" class="btn btn-primary">Potvrdit</button>
    <a href="smazat-jmeno.php" class="btn btn-danger">Smazat</a>
</form>


<?php require 'footer.php'; ?>