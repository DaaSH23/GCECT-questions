<?php

    // include 'admin.php';

    // $host = "localhost";
    // $dbUsername = "id19885247_gcect";
    // $dbPassword = "C7|s2Gi1GfahxDPQ";
    // $dbname = "id19885247_prevweb123";

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "prevquestions";

    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    $count = 0;

    if(mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
    } else {

        $entered_username = $_POST['floatingInput'];
        $entered_pass = $_POST['floatingPassword'];

        $sql = "SELECT username, psp FROM admin WHERE username = '$entered_username' AND psp = '$entered_pass'";

        $result = mysqli_query($conn, $sql);
        // $ps = mysqli_query($conn, $uspass);

        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $count++;
            }
        }
        // echo $count;
        if($count == 1) {
            header("Location: admin-panel.php");
        }
        else{
                ?>
                    <div class="alert alert-danger">
                        <strong>Wrong!</strong> Username or Password error.
                    </div>
            <?php
        }
    }

?>