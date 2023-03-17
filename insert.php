<?php
$course = $_POST['course'];
$dept = $_POST['dept'];
$sem = $_POST['sem'];
$term = $_POST['term'];
$year = $_POST['year'];
$papercode = $_POST['papercode'];
$papername = $_POST['papername'];
// $myfiles = $_POST['myfiles'];

$filename = $_FILES['myfiles']['name'];
$destination = 'uploads/' . $filename;

$extension = pathinfo($filename,PATHINFO_EXTENSION);

$file = $_FILES['myfiles']['tmp_name'];

move_uploaded_file($file,$destination);



if(!empty($course) || !empty($dept) || !empty($sem) || !empty($term) || !empty($year) || !empty($papercode) || !empty($filename) || !empty($papername)) {
    
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


    if(mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
    } else {        

        $SELECT = "SELECT papercode FROM papers WHERE papercode = ?";
        $INSERT = "INSERT INTO papers (course, dept, sem, term, year, papercode, papername, files) values(?, ?, ?, ?, ?, ?, ?, ?)";
        //prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $papercode);
        $stmt->execute();
        $stmt->bind_result($papercode);
        $stmt->store_result();
        $rnum = $stmt->num_rows; 

        if($rnum==0) {
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssisisss", $course, $dept, $sem, $term, $year, $papercode, $papername, $filename);
            $stmt->execute();
            // echo "New record inserted sucessfully";
            header("Location: s-admin-panel.php");      
        } else {
            header("Location: s-admin-panel.php");
            // echo "you already inserted this papercode";
        }

        $stmt->close();
        $conn->close();


    }


} else {
    echo "All fields are required";
    die();
}

?>

