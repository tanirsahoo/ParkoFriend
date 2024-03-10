<?php
if (isset($_GET['id'])) {
    echo "GET Request received succesfully.\n" ;
    echo $_GET['id'] ;
} else {
    echo "GET Request Failed.\n" ;
}
?>