<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['name'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo "id: ".$name; +||
    }
}
?>