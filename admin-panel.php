<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-panel | GCECT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- custom css file -->
    <link rel="stylesheet" href="./styles/admin-panel.css">
</head>

<body>
    <div class="hed">
        <h1>ADMIN - PANEL</h1>
    </div>

    <!-- admin form -->
    <div class="arer">
        <div class="pr-form">
            <div class="container">
                <form action="insert.php" method="POST" enctype="multipart/form-data">

                    <div class="row text-center">
                        <div class="d-flex gap-2 my-2 justify-content-between">
                            <div>
                                <label for="course" class="py-1">Course: </label>
                            </div>
                            <div class="input_box">
                                <select name="course" id="course" required class="w-100 input_field">
                                    <option value="btech">B.TECH</option>
                                    <option value="mtech">M.TECH</option>
                                </select>
                            </div>
                        </div>

                        <div class="d-flex gap-2 my-2">
                            <div>
                                <label for="dept" class="py-1">Dept:</label>
                            </div>
                            <div class="input_box">
                                <select name="dept" id="course" required class="w-100 input_field">
                                    <option value="CSE">CSE</option>
                                    <option value="IT">IT</option>
                                    <option value="Ceramic">Ceramic</option>
                                </select>
                            </div>
                        </div>


                        <div class="d-flex gap-2 my-2">
                            <div>
                                <label for="sem" class="py-1">Sem: </label>
                            </div>
                            <div class="input_box">
                                <select name="sem" id="course" required class="w-100 input_field">
                                    <option value="1">I</option>
                                    <option value="2">II</option>
                                    <option value="3">III</option>
                                    <option value="4">IV</option>
                                    <option value="5">V</option>
                                    <option value="6">VI</option>
                                    <option value="7">VII</option>
                                    <option value="8">VIII</option>
                                </select>
                            </div>
                        </div>

                        <div class="d-flex gap-2 my-2">
                            <div>
                                <label for="term" class="py-1">Term: </label>
                            </div>
                            <div class="input_box">
                                <select name="term" id="course" required class="w-100 input_field">
                                    <option value="mid1">Mid-Term 1</option>
                                    <option value="mid2">Mid-Term 2</option>
                                    <option value="end">End-Sem</option>
                                </select>
                            </div>
                        </div>


                        <div class="d-flex gap-2 my-2">
                            <div>
                                <label for="year" class="py-1">Year: </label>
                            </div>
                            <div class="input_box">
                                <select name="year" id="course" required class="w-100 input_field">
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                </select>
                            </div>
                        </div>


                        <div class="d-flex gap-2 my-2">
                            <div>
                                <label for="sub" class="py-1">PaperCode:</label>
                            </div>
                            <div class="input_box">
                                <input id="sub" name="papercode" type="text" required class="w-100 input_field"
                                    autocomplete="off">
                            </div>
                        </div>


                        <div class="d-flex gap-2 my-2">
                            <div>
                                <label for="nm" class="py-1">PaperName:</label>
                            </div>
                            <div class="input_box">
                                <input id="nm" name="papername" type="text" required class="w-100 input_field"
                                    autocomplete="off">
                            </div>
                        </div>


                        <div class="d-flex gap-2 my-2">
                            <div>
                                <label for="nm" class="py-1">Upload:</label>
                            </div>
                            <div class="input_box">
                                <input type="file" name="myfiles" required class="w-100 input_field upload_field">
                            </div>
                        </div>

                        <div class="d-flex gap-2 my-2">
                            <input type="Submit" name="upld" value="Submit" class="submit_btn">
                        </div>


                    </div>
                    
                </form>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>