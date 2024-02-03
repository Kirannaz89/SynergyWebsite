 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="index.php" class="navbar-brand">
                <h1 class="m-0 text-primary"><i class="fa me-3"><img src="../img/logo.jpeg" alt="logo" width="50px" height="50px"></i>Synergy School System</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="index.php" <?php if($activepage == 'home') echo 'class="nav-item nav-link active"';?> class="nav-item nav-link">Home</a>
                    <a href="about.php" <?php if($activepage == 'about') echo 'class="nav-item nav-link active"';?> class="nav-item nav-link">About Us</a>
                    <a href="classes.php" <?php if($activepage == 'Activities') echo 'class="nav-item nav-link active"';?> class="nav-item nav-link">Activities</a>
                    <div class="nav-item dropdown">
                        <a href="#" <?php if($activepage == 'page') echo 'class="nav-item nav-link dropdown-toggle active"';?>class="nav-item nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="facility.php" class="dropdown-item">School Facilities</a>
                            <a href="team.php" class="dropdown-item">Popular Teachers</a>
                            <a href="call-to-action.php" class="dropdown-item">Become A Teachers</a>
                        </div>
                    </div>
                    <a href="contact.php" <?php if($activepage == 'contact') echo 'class="nav-item nav-link active"';?> class="nav-item nav-link">Contact Us</a>
                </div>
                <a href="contact.php" class="btn btn-primary rounded-pill px-3  d-lg-block">Join Us<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->