
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- API (Bootstrap for design, Ajax for DOM)-->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/main.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 nav-column">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 min-vh-100">
                    <!-- <a href="https://rabiloo.com/vi"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto navbar-brand">
                        <span class="fs-5 d-none d-sm-inline">
                            <img src="https://rabiloo.com/images/logo-menu-blue.svg" alt="" class="block lg:hidden ml-3">
                        </span>
                    </a> -->
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item menu-item">
                            <a href="#" class="nav-link align-middle px-0" id="home-btn">
                                <i class="bi bi-card-text"></i><span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>

                        <li class="nav-item menu-item">
                            <a href="#" class="nav-link align-middle px-0" id="result-btn">
                                <i class="bi bi-award-fill"></i><span class="ms-1 d-none d-sm-inline">Results</span>
                            </a>
                        </li>

                        <li class="nav-item menu-item">
                            <a href="#" class="nav-link align-middle px-0" id="report-btn">
                                <i class="bi bi-bar-chart-fill"></i> <span class="ms-1 d-none d-sm-inline">Report</span>
                            </a>
                        </li>

                        <li class="nav-item menu-item">
                            <a href="#" class="nav-link align-middle px-0" id="setting-btn">
                                <i class="bi bi-gear-fill"></i> <span class="ms-1 d-none d-sm-inline">Settings</span>
                            </a>
                        </li>

                        <li class="nav-item menu-item">
                            <a href="login.php" class="nav-link align-middle px-0" id="signout-btn">
                                <i class="bi bi-box-arrow-left"></i> <span class="ms-1 d-none d-sm-inline">Sign out</span>
                            </a>
                        </li>

                    </ul>
                    <hr>
                    <div class="pb-4">
                        <a href="#" class="d-flex align-items-center text-decoration-none">
                            <img src="https://media.istockphoto.com/vectors/user-avatar-profile-icon-black-vector-illustration-vector-id1209654046?k=20&m=1209654046&s=612x612&w=0&h=Atw7VdjWG8KgyST8AXXJdmBkzn0lvgqyWod9vTb2XoE="
                                alt="HumanImage" width="50" height="50" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1 administrator"><?php echo $_GET['user'] ?></span>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col">
                <div class="top-bar">
                    <button type="button" class="btn nav-link control-btn px-2 pt-2 pb-2 mt-3 mb-3" style="display: inline-flex; align-items: center" id="add-button">
                        <i class="bi bi-file-earmark-plus"></i>
                        <span class="ms-1"><a href="#" class="add-exam">ADD EXAM</a></span>
                    </button>
                </div>
                <div id="workplace" onload="onLoad()">
                    <!-- <canvas id = "canvas-workspace"> </canvas> -->
                </div>
                
            </div>
        </div>

    </div>
    <div id = "addExamForm">
        
    </div>
</body>
<script src="./assets/js/mainUI.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</html>