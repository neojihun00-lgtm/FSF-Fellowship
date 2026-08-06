<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Comments | Future Skills Fellowship</title>

    <!-- Google Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Font Awesome -->

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- AOS -->

    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css"
        rel="stylesheet">

    <!-- SweetAlert2 -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Custom CSS -->

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- ===========================
Navbar
=========================== -->

    
 <nav class="navbar navbar-expand-lg navbar-dark fixed-top">

        <div class="container">
            <div>
          <img src="images/LGS.jpeg" class="logo-pill">
        </div>
|
        <!-- Logo 2: Replace text with LGS logo image if you have it -->
        <div >
          <img src="images/FSF.jpeg" class="logo-pill">
        </div>

            <a class="navbar-brand fw-bold" href="index.html">

                Future Skills Fellowship

            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbar">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">

                        <a class="nav-link" href="index.html">

                            Home

                        </a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link active" href="mentors.html">

                            Mentors

                        </a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="achievements.html">

                            Achievements

                        </a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="gallery.html">

                            Gallery

                        </a>

                    </li>
                    <li class="nav-item">

                        <a class="nav-link" href="comments.php">

                            Comments

                        </a>

                    </li>

                

                </ul>

            </div>

        </div>

    </nav>


    <!-- ===========================
Hero Section
=========================== -->

    <!--<section class="comments-hero">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6"
                    data-aos="fade-right">

                    <span class="badge bg-warning text-dark px-4 py-2 mb-3">

                        We'd Love Your Feedback

                    </span>

                    <h1 class="display-4 fw-bold">

                        Share Your Experience

                    </h1>

                    <p class="lead mt-4">

                        Thank you for visiting my Future Skills Fellowship
                        appreciation website.

                        Your feedback motivates me to continue learning,
                        improving, and building meaningful projects.

                    </p>

                </div>

                <div class="col-lg-6 text-center"
                    data-aos="fade-left">

                    <!--<img src="images/comments.png"
                     class="img-fluid hero-image"
                     alt="Comments">

                </div>

            </div>

        </div>

    </section>-->
    <section class="hero">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-7" data-aos="fade-right">
                    <div class="d-flex align-items-center mb-4">

                    <!-- LGS Logo -->
                    <img src="images/LGS.jpeg"
                        alt="LGS Logo"
                        class="logo me-3">

                    <!-- FSF Logo -->
                    <img src="images/FSF.jpeg"
                        alt="FSF Logo"
                        class="logo">

                </div>

                    <span class="badge bg-warning text-dark px-4 py-2 mb-4">

                         We'd Love Your Feedback

                    </span>

                    <h1>

                    Share Your <span>Feedback

                       
                    </h1>

                    <p>

                        Thank you for visiting my Future Skills Fellowship
                        appreciation website.

                        Your feedback motivates me to continue learning,
                        improving, and building meaningful projects.

                    
                    </p>

                </div>

                <!--<div class="col-lg-5 text-center" data-aos="zoom-in">

                    <img src="images/mentor-hero.png" class="img-fluid hero-image" alt="Mentors">

                </div>-->

            </div>

        </div>

    </section>
    <!-- ===========================
Comment Form
=========================== -->

    <section class="comment-section py-5">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-8">

                    <div class="comment-card p-5 shadow-lg" data-aos="zoom-in">

                        <div class="text-center mb-5">

                            <h2 class="fw-bold">

                                Leave Your Feedback

                            </h2>

                            <p class="text-muted">

                                Your feedback means a lot and helps me improve my work.

                            </p>

                        </div>

                        <form action="submit_comment.php" method="POST">

                            <div class="row">

                                <div class="col-md-6 mb-4">

                                    <label class="form-label">

                                        Full Name

                                    </label>

                                    <input
                                        type="text"
                                        name="name"
                                        class="form-control"
                                        placeholder="Enter your full name"
                                        required>

                                </div>

                                <div class="col-md-6 mb-4">

                                    <label class="form-label">

                                        Email Address

                                    </label>

                                    <input
                                        type="email"
                                        name="email"
                                        class="form-control"
                                        placeholder="Enter your email"
                                        required>

                                </div>

                            </div>

                            <div class="mb-4">

                                <label class="form-label">

                                    Your Role

                                </label>

                                <select
                                    class="form-select"
                                    name="role"
                                    required>

                                    <option value="">

                                        Select Role

                                    </option>

                                    <option value="Mentor">Mentor</option>

                                    <option value="Fellow">Fellow</option>

                                    <option value="Student">Student</option>

                                    <option value="Visitor">Visitor</option>

                                    <option value="Guest">Guest</option>

                                </select>

                            </div>

                            <div class="mb-4">

                                <label class="form-label">

                                    Your Comment

                                </label>

                                <textarea
                                    name="comment"
                                    rows="6"
                                    class="form-control"
                                    placeholder="Write your appreciation here..."
                                    required></textarea>

                            </div>

                            <div class="text-center">

                                <button
                                    type="submit"
                                    name="submit"
                                    class="btn btn-warning btn-lg px-5">

                                    <i class="fas fa-paper-plane me-2"></i>

                                    Submit Comment

                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- ===========================
Display Comments
=========================== -->

    <section class="comments-display py-5">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold">

                    What Visitors Say

                </h2>

                <p class="text-muted">

                    Thank you to everyone who shared their valuable feedback.

                </p>

            </div>

            <div class="row">

                <?php

                $sql = "SELECT * FROM comments ORDER BY id DESC";

                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {

                ?>

                    <div class="col-lg-6 mb-4">

                        <div class="feedback-card h-100">

                            <div class="d-flex justify-content-between align-items-center">

                                <div>

                                    <h5 class="mb-1">

                                        <?php echo htmlspecialchars($row['name']); ?>

                                    </h5>

                                    <span class="badge bg-warning text-dark">

                                        <?php echo htmlspecialchars($row['role']); ?>

                                    </span>

                                </div>

                                <i class="fas fa-quote-right fa-2x text-warning"></i>

                            </div>

                            <p class="mt-4">

                                <?php echo nl2br(htmlspecialchars($row['comment'])); ?>

                            </p>

                            <hr>

                            <small class="text-muted">

                                <i class="far fa-calendar-alt me-2"></i>

                                <?php echo date("d M Y", strtotime($row['created_at'])); ?>

                            </small>

                        </div>

                    </div>

                <?php } ?>

            </div>

        </div>

    </section>
    <!-- ===========================
Footer
=========================== -->

    <footer class="footer">

        <div class="container">

            <div class="row gy-4 text-center text-lg-start">

                <!-- About -->
                <div class="col-lg-4 col-md-6">

                    <h3>Future Skills Fellowship</h3>

                    <p>
                        A heartfelt appreciation website dedicated to the mentors
                        and leadership of Leaders for Global Society.
                    </p>

                    <!-- <a href="https://leadersforglobalsociety.com/" target="_blank" class="footer-btn">
                    Visit LGS Website
                </a>-->

                </div>

                <!-- Quick Links -->
                <div class="col-lg-4 col-md-6">

                    <h4>Quick Links</h4>

                    <ul class="footer-links">

                        <li><a href="index.html">Home</a></li>
                        <li><a href="mentors.html">Mentors</a></li>
                        <li><a href="achievements.html">Achievements</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="comments.php">Comments</a></li>


                    </ul>

                </div>

                <!-- Thank You -->
                <div class="col-lg-4 col-md-12">

                    <h4>Thank You</h4>

                    <p>
                        Special appreciation to
                        <strong>Sir Aakash</strong> and the entire
                        Leaders for Global Society team for creating
                        such an inspiring initiative for students
                        across Pakistan.
                    </p>

                    <div class="social-links">

                        <a href="https://www.facebook.com/share/19L5i7r3ee/" target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a>

                        <a href="https://www.linkedin.com/company/leaders-for-global-society-lgs/" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>

                        <a href="https://www.instagram.com/leadersforglobalsociety.lgs?igsh=OTRndDU2OW9kaGQx" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>

                    </div>

                </div>

            </div>

            <hr>

            <div class="copyright text-center">

              © 2026 Future Skills Fellowship Appreciation Website. All Rights Reserved.


                <br>



            </div>

        </div>

    </footer>

    <!-- Bootstrap -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS -->

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
        AOS.init({

            duration: 1000,

            once: true

        });
    </script>

    <!-- Sticky Navbar -->

    <script>
        window.addEventListener("scroll", function() {

            const navbar = document.querySelector(".custom-navbar");

            if (window.scrollY > 50) {

                navbar.classList.add("sticky");

            } else {

                navbar.classList.remove("sticky");

            }

        });
    </script>

    <!-- Success Popup -->

    <?php

    if (isset($_GET['success'])) {

    ?>

        <script>
            Swal.fire({

                icon: 'success',

                title: 'Thank You! ❤️',

                text: 'Thank you for your appreciation and valuable feedback.',

                confirmButtonColor: '#f4b400',

                confirmButtonText: 'Close'

            });
        </script>

    <?php

    }

    ?>

</body>

</html>