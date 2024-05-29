<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Visit Malang</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
                    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset("/assets/css/style.css") }}">
        <link rel="stylesheet" href="{{ asset("/assets/css/style-event.css") }}">
        <!-- icon -->
        <link href="{{ asset("/assets/icon/logo_domain.png") }}" rel="icon">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
</head>
<body>
<header class="header-area">
        <div class="navbar-area">
                <div class="container">
                        <nav class="site-navbar">
                                <a href="{{ url("index.html") }}" class="site-logo">
                                        <img class="image"
                                                 src="{{ asset("/assets/icon/logo_header.png") }}"
                                                 alt="Logo">
                                </a>
                                <div class="d-flex align-items-center">
                                        <div class="MenuItem" id="MenuItems">
                                                <a class="item" href="{{ url("index.html") }}">Home</a>
                                                <a class="item" href="{{ url("event.html") }}">Event</a>
                                                <a class="item" href="{{ url("destination.html") }}">Destination</a>
                                                <a class="item" href="{{ url("package.html") }}">Package</a>
                                         </div>
                                        <form class="w-100 me-3" role="search">
                                                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                                        </form>
                                        <img id="profile-picture" class="rounded-circle profile-picture" src="{{ asset("/assets/icon/pp.jpg") }}" width="30" height="30">
                                        <a href="{{ url("#") }}" class="mobile bars" id="NavMobile">
                                                <img class="image"
                                                         src="{{ asset("/assets/image/bars.png") }}"
                                                         alt="Logo">
                                        </a>
                                        <a href="{{ url("#") }}" class="mobile">
                                                <img class="image"
                                                         src="{{ asset("/assets/image/search.png") }}"
                                                         alt="Logo">
                                        </a>
                                </div>
                        </nav>
                </div>
        </div>
</header>
<main id="landing">
        <div class="container row">
                <div class="col-lg-7 col-md-6 col-12">
                        <img src="{{ asset("/assets/image/landing-event.png") }}" alt="Landing" width="550" height="380">
                </div>
                <div class="col-lg-5 col-md-6 col-12">
                        <h2>JOIN THE FUN!</h2>
                        <h1>Explore Exciting <span class="udd-marked"> Events & Festivals</span></h1>
                        <h1>in Malang</h1>
                        <p>Malang is not just about beautiful landscapes; it's also a hub of vibrant events and festivals.
                                From cultural celebrations to music festivals, discover the diverse events that make Malang a lively city.</p>
                </div>
        </div>
</main>
<main id="calender">
        <div class="mobile-header z-depth-1">
                <div class="row">
                    <div class="col-2">
                        <a href="{{ url("#") }}" data-activates="sidebar" class="button-collapse">
                            <i class="material-icons">menu</i>
                        </a>
                    </div>
                    <div class="col">
                        <h4>Events</h4>
                    </div>
                </div>

            </div>

            <div class="main-wrapper">

                <div class="sidebar-wrapper z-depth-2 side-nav fixed" id="sidebar">

                    <div class="sidebar-title">
                        <h4>Events</h4>
                        <h5 id="eventDayName">Date</h5>
                    </div>
                    <div class="sidebar-events" id="sidebarEvents">
                        <div class="empty-message">Sorry, no events to selected date</div>
                    </div>

                </div>

                <div class="content-wrapper grey lighten-3">
                    <div class="container">

                        <div class="calendar-wrapper z-depth-2">

                            <div class="header-background">
                                <div class="calendar-header">

                                    <a class="prev-button" id="prev">
                                        <i class="material-icons">keyboard_arrow_left</i>
                                    </a>
                                    <a class="next-button" id="next">
                                        <i class="material-icons">keyboard_arrow_right</i>
                                    </a>

                                    <div class="row header-title">

                                        <div class="header-text">
                                            <h3 id="month-name">February</h3>
                                            <h5 id="todayDayName">Today is Friday 7 Feb</h5>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="calendar-content">
                                <div id="calendar-table" class="calendar-cells">

                                    <div id="table-header">
                                        <div class="row">
                                            <div class="col">Mon</div>
                                            <div class="col">Tue</div>
                                            <div class="col">Wed</div>
                                            <div class="col">Thu</div>
                                            <div class="col">Fri</div>
                                            <div class="col">Sat</div>
                                            <div class="col">Sun</div>
                                        </div>
                                    </div>

                                    <div id="table-body" class="">

                                    </div>

                                </div>
                            </div>



                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
                            crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
                            crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
            <script>
                $(".button-collapse").sideNav();
            </script>
        </body>
    </html>
</main>
<script src="{{ asset("/assets/js/script-event.js") }}"></script>
</body>
</html>
