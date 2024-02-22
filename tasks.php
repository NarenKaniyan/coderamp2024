<?php
    echo '<!DOCTYPE html>
<html lang="en">

<head>
    <title>Task - CodeRamp\'20</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="CodeRamp, Code Ramp, CodeRamp\'20, JHC, JHC Contest">

    <link rel="icon" href="avataaars.png" type="image/png">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/task.css" rel="stylesheet">


    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.15.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.15.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.15.0/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.15.0/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.8.0/firebase-storage.js"></script>
    <script type="text/javascript" src="js/config.js"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <div class="navbar-header">
                <img class="brand" src="img/brand.png" width="100px" />
            </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="tasks.php">
                <i class="fas fa-fw fa-clipboard-list"></i>
                <span>Tasks</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="rank.php">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Rank</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="contact.php">
                <i class="fas fa-fw fa-envelope"></i>
                <span>Contact</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                               aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="Search for..." aria-label="Search"
                                           aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Alerts Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 12, 2019</div>
                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 7, 2019</div>
                                    $290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 2, 2019</div>
                                    Spending Alert: We\'ve noticed unusually high spending for your account. Correct it

                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter">7</span>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Message Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60"
                                         alt="">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                        problem I\'ve been having.</div>
                                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60"
                                         alt="">
                                    <div class="status-indicator"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">I have the photos that you ordered last month, how
                                        would you like them sent to you?</div>
                                    <div class="small text-gray-500">Jae Chun · 1d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60"
                                         alt="">
                                    <div class="status-indicator bg-warning"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Last month\'s report looks great, I am very happy with
                                        the progress so far, keep up the good work!</div>
                                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                         alt="">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                        told me that people say this to all dogs, even if they aren\'t good...</div>
                                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-white small" id="username"></span>
                            <img class="img-profile rounded-circle"
                                 src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->';
            ?>


            <?php
    echo '<!-- Begin Page Content -->
                <div id="task" style="display: none;">
                    <div class="container p-3">
                        <div class="card text-gray-300 bg-dark">
                            <div class="row pt-2 pl-4 pr-2">
                                <div class="card-body col-lg-9">
                                    <h3 id="task-title" class="card-title task-title"></h3>
                                    <hr class="heading-hr">
                                    <div id="task-content" class="card-text my-5"></div>
                                    <h5>
                                        Task Tags:
                                        <div id="task-tags" class="tags grey">
                                        </div>
                                    </h5>
                                </div>
                                <div class="col-lg-3 py-3">
                                    <div id="task-btn-section">
                                        <button id="claim-btn" class="btn btn-primary text-light">Claim this
                                            Task</button>
                                    </div>
                                    </br>
                                    <div>
                                        Task Type:
                                        <h4 id="task-type"></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </br>
                        <div id="msg-section" class="row" style="display: none;">
                            <div class="col-xl-4 col-lg-3">
                                <div class="card shadow mb-4">
                                    <div class="card-body">
                                        <div id="help" class="list-group">
                                            <h4 class="text-gray-300">Need Help?</h4>
                                            <div>
                                                <span class="text-gray-400">Join our Discord group:</span></br> <a
                                                    href="https://discord.gg/cM4hr4w">https://discord.gg/cM4hr4w</a>
                                                </br></br>
                                                <span class="text-gray-400">Send us a mail:</span> </br>
                                                coderamp@gmail.com
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-8 col-lg-9">
                                <div class="card shadow mb-4">
                                    <div class="card-body">
                                        <div id="messages">
                                        </div>
                                        <div class="form-group px-3">
                                            <div id="upload-progress-section" style="display: none;">
                                                <div class="text-center">Uploading wait...</div>
                                                <div class="progress mb-2">
                                                    <div id="upload-progress"
                                                         class="progress-bar progress-bar-striped progress-bar-animated"
                                                         role="progressbar" style="width: 0%"></div>
                                                </div>
                                            </div>
                                            <textarea class="form-control mb-2" id="new-message" rows="2"
                                                      placeholder="Type your message here.."></textarea>
                                            <input type="file" id="file" name="files[]" />
                                            <button class="btn btn-primary float-right" id="send-message-btn">Send
                                                Message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->';
            ?>


            <?php
echo '<!-- Footer -->
            <footer class="sticky-footer bg-dark mt-4 mt-4">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; JHCICT 2020, All Rights Reserved</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button id="logout" onclick="firebase.auth().signOut();" class="btn btn-primary">Logout</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function urlify(text) {
            var urlRegex = /(https?:\/\/[^\s]+)/g;
            return text.replace(urlRegex, function (url) {
                return \'<a href="\' + url + \'">\' + url + \'</a>\';
            })
        }

        document.getElementById(\'file\').onchange = function () {
        $(\'#new-message\').attr(\'placeholder\', \'Tell us about this file.\');
        };
        var url = new URL(window.location.href);
        var taskId = url.searchParams.get("id");
        var userDatabase = firebase.firestore().collection(\'users\');
        var taskDatabase = firebase.firestore().collection(\'tasks\');
        var adminDatabase = firebase.firestore().collection(\'admin\');

        taskDatabase.doc(taskId).get().then(function (doc) {
            if (doc.exists) {
                var style, level;
                switch (doc.data()[\'level\']) {
                    case "1":
                        style = "primary";
                        level = "Beginner";
                        break;
                    case "2":
                        style = "warning";
                        level = "Intermediate";
                        break;
                    case "3":
                        style = "danger";
                        level = "Advanced"
                        break;
            }
            $("#task-title").php(doc.data()[\'title\'] + \' <span class="badge badge-pill badge-\' + style + \'">\' + level + \'</span>\');
            $("title").php(doc.data()[\'title\'] + \' - CodeRamp\\\'20\');
            $("#task-content").php(doc.data()[\'content\']);
            var types = \'\';
            for (var i = 0; i < doc.data()[\'type\'].length; i++) {
            types += \'<span class="badge badge-light">\' + doc.data()[\'type\'][i] + \'</span>\n\';
        }
        $("#task-type").php(types);
        var tags = \'\';
        for (var i = 0; i < doc.data()[\'tags\'].length; i++) {
        tags += \'<span class="badge badge-info">\' + doc.data()[\'tags\'][i] + \'</span>\n\';
        }
        $("#task-tags").php(tags);
        for (var i = 0; i < doc.data()[\'tags\'].length; i++) {
        tags += \'<span class="badge badge-info">\' + doc.data()[\'tags\'][i] + \'</span>\n\';
        }

        $("#task").show();
        } else {
            alert("No such Task.");
            location.replace(\'tasks.php\')
        }
        })

        var username;
        firebase.auth().onAuthStateChanged(function (user) {
            if (user) {
                // User is signed in.
                username = user.displayName;
                var docUsername = username.toLowerCase();
                $(\'#username\').php(username);
                userDatabase.doc(docUsername).get().then(function (doc) {
                    if (doc.exists) {
                        if (doc.data()[\'alerts\']) {
                        var alerts = doc.data()[\'alerts\'];
                        var alertCount = \'\';
                        if (doc.data()[\'alertCount\'] !== 0) {
                        alertCount = doc.data()[\'alertCount\'];
                        $(\'#alertsDropdown\').click(function () {
                        $(\'#alert-count\').php(\'\');
                        userDatabase.doc(username).update({
                            alertCount: 0
                        })
                    });
                }
                $(\'#alert-count\').php(alertCount);
                var len = alerts.length > 3 ? 3 : alerts.length;
                alerts.reverse();
                for (var i = 0; i < len; i++) {
                    var icon, message,link;
                    switch (alerts[i][\'type\']) {
                        case "success":
                            icon = \'fa-check\';
                            message = \'Congrats! Your task Approved.\'
                            link = \'task.php?id=\' + alerts[i][\'taskId\'];
                            break;
                        case "warning":
                            icon = \'fa-exclamation-triangle\';
                            message = \'Ouch! More work needed.\'
                            link = \'task.php?id=\' + alerts[i][\'taskId\'];
                            break;
                        case "primary":
                            icon = \'fa-handshake\';
                            message = \'Welcome to CodeRamp\\\'20.\'
                            link = \'dashboard.php\';
                            break;
                }
                $(\'#alerts\').append(\'<a class="dropdown-item d-flex align-items-center" href="\' + link + \'"><div class="mr-3"><div class="icon-circle bg-\' + alerts[i][\'type\'] + \'"><i class="fas \' + icon + \' text-white"></i></div></div><div><div class="small text-gray-700">\' + alerts[i][\'timestamp\'] + \'</div><div class="font-weight-bold">\' + message + \'<br/>\' + alerts[i][\'task\'] + \'</div></div></a>\')
            }
        }
        if (doc.data()[\'claimed\'] == taskId) {
        adminDatabase.doc(\'review\').get().then(function (doc) {
        if (doc.exists) {
            var requests = doc.data()[\'requests\'];
            var reqIndex = requests.findIndex(x => x.user === username);
            if (reqIndex == -1) {
                $(\'#task-btn-section\').php(\'<h4><span class="badge badge-info">On Progress...</span></h4><button id="review-btn" class="btn btn-warning text-light mb-2">Submit for review</button></br><button id="abandon-btn" class="btn btn-danger text-light">Abandon this Task</button>\');
                $(\'#review-btn\').click(function () {
                adminDatabase.doc(\'review\').get().then(function (doc) {
                if (doc.exists) {
                    var requests = doc.data()[\'requests\'];
                    requests.push({ user: username, task: taskId });
                    adminDatabase.doc(\'review\').update({
                    requests: requests
                }).then(function () {
                    userDatabase.doc(docUsername).collection(\'tasks\').doc(taskId).get().then(function (doc) {
                    var msgData = doc.data()[\'msges\'];
                    msgData.push({ msg: \'Submitted for Review\', sender: username, timestamp: new Date().toString().substring(4, 21) });
                    userDatabase.doc(docUsername).collection(\'tasks\').doc(taskId).update({
                    msges: msgData
                }).then(function () {
                        location.reload();
                    });
                });
            });
        }
        });
        });

        $(\'#abandon-btn\').click(function () {
        userDatabase.doc(docUsername).update({
            claimed: \'no\'
        }).then(function () {
            userDatabase.doc(docUsername).collection(\'tasks\').doc(taskId).get().then(function (doc) {
            var msgData = doc.data()[\'msges\'];
            msgData.push({ msg: \'Task Abandoned\', sender: username, timestamp: new Date().toString().substring(4, 21) });
            userDatabase.doc(docUsername).collection(\'tasks\').doc(taskId).update({
            msges: msgData
        }).then(function () {
                location.reload();
            });
        });
        });
        });
        } else {
            $(\'#task-btn-section\').php(\'<h4><span class="badge badge-warning">Submitted for Review</span></h4><button id="abandon-btn" class="btn btn-danger text-light">Abandon this Task</button>\');

            $(\'#abandon-btn\').click(function () {
            var requests = doc.data()[\'requests\'];
            var reqIndex = requests.findIndex(x => x.user === username);
            requests.splice(reqIndex, 1)
            adminDatabase.doc(\'review\').update({
            requests: requests
        }).then(function () {
            userDatabase.doc(docUsername).update({
                claimed: \'no\'
        }).then(function () {
                userDatabase.doc(docUsername).collection(\'tasks\').doc(taskId).get().then(function (doc) {
                var msgData = doc.data()[\'msges\'];
                msgData.push({ msg: \'Task Abandoned\', sender: username, timestamp: new Date().toString().substring(4, 21) });
                userDatabase.doc(docUsername).collection(\'tasks\').doc(taskId).update({
                msges: msgData
            }).then(function () {
                    location.reload();
                });
            });
        });
        });
        });
        }
        }
        });
        } else if (doc.data()[\'completed\']) {
        if (doc.data()[\'completed\'].indexOf(taskId) !== -1) {
        $(\'#task-btn-section\').php(\'<h4><span class="badge badge-success">Task Completed</span></h4>\');
        } else if (doc.data()[\'claimed\'] !== "no") {
        $(\'#task-btn-section\').php(\'<h4><span class="badge badge-danger">Claimed Another Task</span></h4>\');
        }
        } else if (doc.data()[\'claimed\'] !== "no" && doc.data()[\'claimed\'] !== undefined) {
        $(\'#task-btn-section\').php(\'<h4><span class="badge badge-danger">Claimed Another Task</span></h4>\');
        }

        $(\'#claim-btn\').click(function () {
        userDatabase.doc(docUsername).update({
            claimed: taskId
        }).then(function () {
            userDatabase.doc(docUsername).collection(\'tasks\').doc(taskId).get().then(function (doc) {
            if (doc.exists) {
                var msgData = doc.data()[\'msges\'];
                msgData.push({ msg: \'Task Claimed Again\', sender: username, timestamp: new Date().toString().substring(4, 21) });
                userDatabase.doc(docUsername).collection(\'tasks\').doc(taskId).update({
                msges: msgData
            }).then(function () {
                    location.reload();
                });
            } else {
                userDatabase.doc(docUsername).collection(\'tasks\').doc(taskId).set({
                msges: [{ msg: \'Task Claimed\', sender: username, timestamp: new Date().toString().substring(4, 21) }]
            }).then(function () {
                    location.reload();
                });
            }
        });
        });
        });

        userDatabase.doc(docUsername).collection(\'tasks\').doc(taskId).get().then(function (doc) {
        if (doc.exists) {
            $(\'#msg-section\').show();
            var i;
            if (doc.data()[\'msges\'].length > 5) {
            i = doc.data()[\'msges\'].length - 5;
            $(\'#messages\').append(\'<div class="d-flex justify-content-center"><div id="all-msg-btn">See All Messages</div></div>\');
            $(\'#all-msg-btn\').click(function () {
            $(\'#messages\').php(\'\');
            for (i = 0; i < doc.data()[\'msges\'].length; i++) {
            $(\'#messages\').append(\'<div class="dialogbox"><div class="body"><span class="tip tip-left"></span><div class="user">\' + doc.data()[\'msges\'][i][\'sender\'] + \' <small class="time">\' + doc.data()[\'msges\'][i][\'timestamp\'] + \'</small></div><div class="message"><span>\' + doc.data()[\'msges\'][i][\'msg\'] + \'</span></div></div></div>\');
        }
        });
        } else {
            i = 0;
        }
        for (i; i < doc.data()[\'msges\'].length; i++) {
        $(\'#messages\').append(\'<div class="dialogbox"><div class="body"><span class="tip tip-left"></span><div class="user">\' + doc.data()[\'msges\'][i][\'sender\'] + \' <small class="time">\' + doc.data()[\'msges\'][i][\'timestamp\'] + \'</small></div><div class="message"><span>\' + doc.data()[\'msges\'][i][\'msg\'] + \'</span></div></div></div>\');
        }
        $(\'#send-message-btn\').click(function () {

        var file = document.getElementById(\'file\').files[0];
        if (file) {
            $(\'#upload-progress-section\').show();
            var storageRef = firebase.storage().ref(\'taskAttachments/\' + taskId + \'/\' + username + \'/\' + file.name);
            var uploadTask = storageRef.put(file);

            uploadTask.on(\'state_changed\', function (snapshot) {
            var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
            $(\'#upload-progress\').php(\'Upload Progress: \' + Math.round(progress) + \'%\');
            switch (snapshot.state) {
                case firebase.storage.TaskState.PAUSED:
                    console.log(\'Upload is paused\');
                    break;
                case firebase.storage.TaskState.RUNNING:
                    console.log(\'Upload is running\');
                    break;
            }
        }, function (error) {
            // Handle unsuccessful uploads
        }, function () {
            uploadTask.snapshot.ref.getDownloadURL().then(function (downloadURL) {
                taskDatabase.doc(taskId).get().then(function (doc) {
                    if (doc.exists) {
                        var messages = doc.data()[\'msges\'];
                        messages.push({ sender: username, msg: urlify($(\'#new-message\').val()) + \' <a href="\' + downloadURL + \'">\' + file.name + \'</a>\', timestamp: new Date().toString().substring(4, 21) });
                        taskDatabase.doc(taskId).update({
                            msges: messages
                        }).then(function () {
                            location.reload();
                        });
                    }
                    });
                });
            });
        } else {
            taskDatabase.doc(taskId).get().then(function (doc) {
                if (doc.exists) {
                    var messages = doc.data()[\'msges\'];
                    messages.push({ sender: username, msg: urlify($(\'#new-message\').val()), timestamp: new Date().toString().substring(4, 21) });
                    taskDatabase.doc(taskId).update({
                        msges: messages
                    }).then(function () {
                        location.reload();
                    });
                }
                });
            }
        });
        }
        });
        }
        });
        } else {
            location.replace(\'login.php\');
        }
        });

    </script>

</body>
</html>';
?>
