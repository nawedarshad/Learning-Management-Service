<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="../css/style.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <title>Admin Dashboard</title>
</head>
<style>
  *{
    font-family: "poppins";
  }
</style>
<body>
  <div class="d-flex">

    <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary sticky-top" style="width: 280px; height: 100vh" id="sidebar">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi pe-none me-2" width="40" height="32">
          <use xlink:href="#bootstrap"></use>
        </svg>
        <a href="../index.php" class="nav-link"><span class="fs-4">Back to Home</span></a>
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">

        <li>
          <a href="index.php" class="nav-link active" aria-current="page" data-target="dashboard.php">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#speedometer2"></use>
            </svg>
            Dashboard
          </a>
        </li>
        <li>
          <a href="courses.php" class="nav-link link-body-emphasis" data-target="courses.php" id="courses">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#table"></use>
            </svg>
            Courses
          </a>
        </li>
        <li>
          <a href="students.php" class="nav-link link-body-emphasis" id="students">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#grid"></use>
            </svg>
            Students
          </a>
        </li>
        <li>
          <a href="feedback.php" class="nav-link link-body-emphasis" id="feedback">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#people-circle"></use>
            </svg>
            Feedbacks
          </a>
        </li>
        <li>
          <a href="contact.php" class="nav-link link-body-emphasis" id="contact">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#people-circle"></use>
            </svg>
            Contact Us
          </a>
        </li>
        <li>
          <a href="bug.php" class="nav-link link-body-emphasis" id="bug">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#people-circle"></use>
            </svg>
            Bugs Reported
          </a>
        </li>
        <li>
          <a href="subscriber.php" class="nav-link link-body-emphasis" id="sub">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#people-circle"></use>
            </svg>
            Subscribers
          </a>
        </li>
        <li>
          <a href="payment.php" class="nav-link link-body-emphasis" id="payment">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#people-circle"></use>
            </svg>
            Payment Status
          </a>
        </li>
        <li>
          <a href="#" class="nav-link link-body-emphasis">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#people-circle"></use>
            </svg>
            Announcements
          </a>
        </li>
        <li>
          <a href="details.php" class="nav-link link-body-emphasis" id="detail">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#people-circle"></use>
            </svg>
            LMS Details
          </a>
        </li>
        <li>
          <a href="#" class="nav-link link-body-emphasis">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#people-circle"></use>
            </svg>
            Our Team
          </a>
        </li>
        <li>
          <a href="#" class="nav-link link-body-emphasis">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#people-circle"></use>
            </svg>
            Privacy Policy
          </a>
        </li>
        <li>
          <a href="#" class="nav-link link-body-emphasis">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#people-circle"></use>
            </svg>
            Account
          </a>
        </li>
      </ul>
      
    </div>
    <div id="content">