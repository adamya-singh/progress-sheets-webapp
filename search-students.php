<!doctype html>
<!--html5 boilerplate from https://www.sitepoint.com/a-basic-html5-template/-->
<!-- logo button from tutorial https://www.youtube.com/watch?v=lCxfo8tvHqk&t=363s-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Progress Sheets</title>
  <meta name="description" content="A student data management portal to replace physical progress sheets">
  <meta name="author" content="Adamya Singh">

  <meta property="og:title" content="Progress Sheets Portal">
  <meta property="og:type" content="website">
  <!-- <meta property="og:url" content="https://github.com/adamya-singh/progress-sheets-webapp/blob/main/index.html"> -->
  <meta property="og:description" content="A student data management portal to replace physical progress sheets">
  <!-- <meta property="og:image" content=""> -->

  <!-- <link rel="icon" href="/favicon.ico"> -->
  <!-- <link rel="icon" href="/favicon.svg" type="image/svg+xml"> -->
  <!-- <link rel="apple-touch-icon" href="/apple-touch-icon.png"> -->

  <link rel="stylesheet" href="style.css">
  <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">-->
  <title>Student Search</title>

</head>

<body>
  <div class="navbar">
    <div class="navbarBackground"></div>

    <div class="progress-sheets-logo-button">
      <button class="logoButton" type="button" onclick="window.location.href='index.html';"><span>Progress Sheets</span></button>
    </div>

    <div class="search-button">
      <button onclick="window.location.href='search-students.php';" type="button">
        <h1>Search</h1>
      </button>
    </div>

    <div class="manage-button">
      <button onclick="window.location.href='manage-students.html';" type="button">
        <h1>Manage</h1>
      </button>
    </div>

    <div class="settings-button">
      <button type="button">
        <h1>Settings</h1>
      </button>
    </div>

    <div class="profile-button">
      <button type="button">
        <h1>Profile</h1>
      </button>
    </div>

    <div class="rectangle"></div>
  </div>

<!--START SEARCH BOX TUTORIAL CODE-->
<div class="container">
  <div class="row">
    <div class="search-bar">
      <div class="col-md-8">
        <form action="" method="GET">
          <input type="text" name="searchStudents" value="<?php if(isset($_GET['searchStudents'])) {echo $_GET['searchStudents'];}?>" placeholder="Find Student">
          <button type="submit" name="submit">Search</button>
        </form>
      </div>
    </div>
    <div class="search-results">
      <div class="col-md-12">
        <div class="card-mt-4">
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Level</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  include "connectDB.php";
                  if (isset($_GET['searchStudents'])) {
                    $filtervalues = $_GET['searchStudents'];
                    $query = "SELECT * FROM students WHERE CONCAT(fullName,level) LIKE '%$filtervalues%' ";
                    $query_run = mysqli_query($connection, $query);

                    if(mysqli_num_rows($query_run) > 0) {
                      foreach($query_run as $items){
                        ?>
                        <tr>
                          <td><?= $items['fullName']; ?></td>
                          <td><?= $items['level']; ?></td>
                        </tr>
                        <?php
                      }
                    } else {
                      ?>

                        <tr>
                          <td colspan="4">Not Found</td>
                        </tr>

                      <?php
                    }
                  }
                ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!--END SEARCH BOX TUTORIAL CODE-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>