<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-panel</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Pacifico&family=Roboto:wght@700&family=Scada:wght@700&family=Source+Code+Pro:wght@500&family=Ubuntu:wght@700&family=Yanone+Kaffeesatz:wght@700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- custom css file   -->
    <link rel="stylesheet" href="./styles/admin.css">

</head>

<body class="text-center">

    <main id="kol" class="form-signin w-100 m-auto">
        <div class="login_form">
            <h2 class="h3 mb-3 fw-normal">Admin Login</h2>
            <form action="auth.php" method="POST" enctype="multipart/form-data">
                <!-- <img class="mb-4" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->

                <div class="form-floating mt-3 input_box">
                    <input type="text" class="form-control" id="floatingInput" name="floatingInput" placeholder="GCECT">
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating mt-3 input_box">
                    <input type="password" class="form-control" id="floatingPassword" name="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="checkbox my-3 input_box">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="login_btn" type="submit">Login</button>
            </form>
        </div>
    </main>

    <!-- External JS -->
    <!-- <script src="function.js"></script> -->

    <!-- External Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
        

</body>

</html>