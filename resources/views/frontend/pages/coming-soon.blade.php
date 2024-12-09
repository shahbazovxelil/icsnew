<!DOCTYPE html>
<html lang="en">

<head>
    <!-- metas -->
    <meta charset="utf-8" />
    <meta name="author" content="Chitrakoot Web" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="keywords" content="Laboratory and Research Template" />
    <meta name="description" content="Biology - Laboratory and Research Template" />

    <!-- title  -->
    <title>ics</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="frontend/img/logos/logo-ch.png" />
    <link rel="apple-touch-icon" href="frontend/img/logos/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="frontend/img/logos/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="frontend/img/logos/apple-touch-icon-114x114.png" />

    <!-- plugins -->
    <link rel="stylesheet" href="frontend/css/plugins.css">

    <!-- search css -->
    <link rel="stylesheet" href="frontend/search/search.css">

    <!-- quform css -->
    <link rel="stylesheet" href="frontend/quform/css/base.css">


    <style>
        .countdown li {
            display: inline-block;
            margin-right: 10px;
            text-align: center;
        }

        .countdown li span {
            font-size: 2em;
            font-weight: bold;
            color: #fff;
        }

        .countdown .timeRefDays,
        .countdown .timeRefHours,
        .countdown .timeRefMinutes,
        .countdown .timeRefSeconds {
            font-size: 0.9em;
            color: #ccc;
        }

    </style>







    <!-- core style css -->
    <link href="frontend/css/styles.css" rel="stylesheet">

</head>

<body>

<!-- PAGE LOADING
================================================== -->
<div id="preloader"></div>

<!-- COMINGSOON
================================================== -->
<!-- COMINGSOON
================================================== -->
<section class="full-screen p-0 bg-img cover-background primary-overlay coming-soon bg-dark">
    <div class="container-fluid d-flex flex-column">
        <div class="row align-items-center justify-content-center min-vh-100">
            <div class="col-xl-10 mx-auto">
                <div class="bg-dark position-relative z-index-9 border-radius-5">
                    <div class="row g-0">
                        <div class="col-lg-8">
                            <div class="d-table w-100 h-100 position-relative overflow-hidden ">
                                <div class="d-table-cell align-middle inner-content position-relative z-index-9">
                                    <img src="frontend/img/logos/logo-ch.png" alt="..." class="mb-4">
                                    <div class="mb-1-9 mb-md-2-5">
                                        <h1 class="mb-1-6 mb-sm-1-9 text-white text-uppercase display-21 display-sm-15 display-xl-10 display-xxl-5 letter-spacing-2 font-weight-300">We are coming soon</h1>
                                        <p class="text-white w-xxl-75 lh-base">Our Website Is Under Construction And Will Be Live Very Soon. Please Stay Tuned And Inspired.</p>
                                    </div>
                                    <!-- Countdown Timer -->
                                    <ul class="countdown mb-1-9 mb-lg-2-5 ps-0">
                                        <li><span id="days">00</span>
                                            <p class="timeRefDays text-center">days</p>
                                        </li>
                                        <li><span id="hours">00</span>
                                            <p class="timeRefHours text-center">hours</p>
                                        </li>
                                        <li><span id="minutes">00</span>
                                            <p class="timeRefMinutes text-center">minutes</p>
                                        </li>
                                        <li class="no-border-right"><span id="seconds">00</span>
                                            <p class="timeRefSeconds">seconds</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="position-absolute bottom-0 end-0 opacity05">
                                    <img src="frontend/img/content/shape-02.png" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- start scroll to top -->
<a href="coming-soon.html#!" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
<!-- end scroll to top -->

<!-- jQuery -->
<script src="frontend/js/jquery.min.js"></script>

<!-- popper js -->
<script src="frontend/js/popper.min.js"></script>

<!-- bootstrap -->
<script src="frontend/js/bootstrap.min.js"></script>

<!-- core.min.js -->
<script src="frontend/js/core.min.js"></script>

<!-- search -->
<script src="frontend/search/search.js"></script>

<!-- custom scripts -->
<script src="frontend/js/main.js"></script>

<!-- form plugins js -->
<script src="frontend/quform/js/plugins.js"></script>

<!-- form scripts js -->
<script src="frontend/quform/js/scripts.js"></script>


<script>
    // Check if the countdown date is already saved in localStorage
    var countdownDate;
    if (localStorage.getItem("countdownDate")) {
        countdownDate = new Date(localStorage.getItem("countdownDate"));
    } else {
        countdownDate = new Date();
        countdownDate.setDate(countdownDate.getDate() + 30); // Add 30 days to the current date
        localStorage.setItem("countdownDate", countdownDate); // Save the countdown date
    }

    // Update the countdown every 1 second
    var x = setInterval(function() {
        // Get the current date and time
        var now = new Date().getTime();

        // Find the time remaining
        var distance = countdownDate - now;

        // Calculate days, hours, minutes, and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result
        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;

        // If the countdown is finished, display a message
        if (distance < 0) {
            clearInterval(x);
            document.querySelector(".countdown").innerHTML = "The website is now live!";
            localStorage.removeItem("countdownDate"); // Remove the saved date
        }
    }, 1000);
</script>


<!-- all js include end -->

</body>

</html>
