<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119749215-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-119749215-2');
    </script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <title>Johnson &amp; Johnson Annual Enrolment</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico">

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-Bx4pytHkyTDy3aJKjGkGoHPt3tvv6zlwwjc3iqN7ktaiEMLDPqLSZYts2OjKcBx1" crossorigin="anonymous">

    <link rel="stylesheet" href="css/custom.css" type="text/css">
    <link rel="stylesheet" href="css/navbar-fixed-left.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/docs.js"></script>



    <script type="text/javascript">
        $(document).ready(function() {
            $('.collapse').collapse

            $('a[data-toggle="tooltip"]').tooltip({
                animated: 'fade',
                trigger: 'hover'
            });
        });

        $(document).ready(function() {
            // -----------------------------------------------------------------------
            $.each($('#navbar').find('li'), function() {
                $(this).toggleClass('active',
                    window.location.pathname.indexOf($(this).find('a').attr('href')) > -1);
            });
            // -----------------------------------------------------------------------
        });
    </script>

</head>

<body>



    <nav class="navbar navbar-inverse navbar-fixed-left">
        <div class="container">
            <div class="navbar-header nav-inset">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./"><img src="images/jnj_fyb_logo.png" alt="Johnson & Johnson Health, Benefits & Compensation"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <div class="nav-inset">
                    <ul class="nav navbar-nav">

                        <li><a href="about-the-plan">About the plan</a></li>
                        <li><a href="flexible-benefit-options">Flexible benefits options</a></li>
                        <li><a href="understanding-flex-credits">Understanding flex credits</a></li>
                        <li><a href="choosing-the-right-options">Choosing the right options</a></li>
                        <li><a href="enrolment-made-simple">Enrolment made simple</a></li>
                        <li><a href="benefits-a-shared-responsibility">Benefits: a shared responsibility</a></li>
                        <li><a href="questions">Questions?</a></li>
                    </ul>
                    <a class="btn btn-default" href="jnj_benefits_guide.pdf" download target="_blank"><img src="images/icons/icon_32x32_PDF.png" class="icon-32" /> Download a PDF</a>
                    <a href="http://jnjbenefitsguide.ca/pension/en/" class="sidebar-btn">See the Pension & Savings Program guide</a>
                </div>
                <div id="support">
                    <div class="nav-inset">
                        <img src="images/icons/icon_32x32_support.png" class="icon-32" />
                        <p><b>Get support</b>
                            <br />Call the Benefit Help Centre at <br />1-866-769-8521
                        </p>
                        <p>EN | <a href="../benefits/fr">FR</a></p>

                        <img src="images/jnj_logo.png" class="jnj-logo">
                    </div>
                </div>
            </div>
        </div>

    </nav>