<?php
    // opens a new file to write 
    $data_file = fopen("text.txt", "w");

    $fname = $_POST["fname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $income = $_POST["income"];
    $savings = $_POST["savings"];
    $spending = $_POST['spending'];
    $credit = $_POST["credit"];
    $investments = $_POST["investments"];
    $text_to_write = $fname . " " . $email . " " . $password . " " . $income . " " . $savings . " " . $spending . " " . $credit . " " . $investments;

    fwrite($data_file, $text_to_write);
    fclose($data_file);

?>
