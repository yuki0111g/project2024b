<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $remove = $_POST["removeCart"];
}
echo $remove;
?>