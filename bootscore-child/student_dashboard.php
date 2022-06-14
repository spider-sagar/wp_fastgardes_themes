<?php 
/*Template Name: Student Dashboard
 * 
 */
get_header(); 
?>

<section class=" py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <div class="nav-side-menu">
                    <div class="menu-list">

                        <ul id="menu-content" class="menu-content collapse out">
                            <li data-toggle="collapse" data-target="#products" class="collapsed active">
                                <a href="#">MY PROFILE <span class="arrow"></span></a>
                            </li>
                            <ul class="sub-menu collapse" id="products">
                                <li><a href="#">UPDATE PERSONAL PROFILE</a></li>
                                <li><a href="#">CHANGE PASSWORD</a></li>
                            </ul>
                            <li data-toggle="collapse" data-target="#service" class="collapsed">
                                <a href="#"> TUTORING REQUESTS<span class="arrow"></span></a>
                            </li>
                            <ul class="sub-menu collapse" id="service">
                                <li><a href="#"> MANAGE ALL REQUEST</a></li>
                                <li><a href="#">POST NEW PROIVATE REQUEST</a></li>
								<li><a href="#">POST NEW PUBLIC REQUEST</a></li>
                            </ul>
                            <li data-toggle="collapse" data-target="#new" class="collapsed">
                                <a href="#"> BOOKINGS<span class="arrow"></span></a>
                            </li>
                            <ul class="sub-menu collapse" id="new">
                                <li><a href="tutors-booking-requests.php">BOOKING REQUESTS</a></li>
                                <li><a href="session-timetable.php">TUTORING SESSION TIMETABLE</a></li>
                                <li>SESSION HISTORY</li>
                            </ul>
                            <li>
                                <a href="notification.php">
                                    NOTIFICATIONS
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    LOGOUT
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="w-subj-head">
                    <h6>Update Profile Info</h6>
                </div>
            </div>
        </div>
</section>
<?php get_footer(); ?>
