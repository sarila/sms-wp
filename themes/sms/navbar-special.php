<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-2">
    <a href="/wordpress" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img class="img-fluid logocls" src="<?php echo get_template_directory_uri() ?>/includes/assets/img/logo.png" alt="logo">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href=" <?php echo site_url('/'); ?> " class="nav-item nav-link">Home</a>
            <a href="<?php echo site_url('/about'); ?>" class="nav-item nav-link">About</a>
            <a href="<?php echo site_url('/courses'); ?>" class="nav-item nav-link">Courses</a>
            <!-- <div class="nav-item dropdown"> -->
            <!-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a> -->
            <!-- <div class="dropdown-menu fade-down m-0"> -->
            <!-- <a href="<?php echo site_url('/team'); ?>" class="dropdown-item">Our Team</a> -->
            <!-- <a href="<?php echo site_url('/testimonial'); ?>" class="dropdown-item">Testimonial</a> -->
            <!-- <a href="404.php" class="dropdown-item">404 Page</a> -->
            <!-- </div> -->
            <!-- </div> -->
            <a href="<?php echo site_url('/contact'); ?>" class="nav-item nav-link active">Contact</a>
        </div>
        <a href="https://forms.gle/sdE5W9wTkpsZLwPZ9" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block" target="_blank">Make a request<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>