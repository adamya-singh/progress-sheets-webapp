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

  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Student Search</title>

</head>

<body>
  <div class="navbar">
    <div class="navbarBackground"></div>

    <div class="progress-sheets-logo-button">
      <button onclick="window.location.href='index.html';" type="button"><span>Progress Sheets</span></button>
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

  <div class="search-bar">
    <div class="row">
      <div class="col-md-8">
        <form action="" method="GET">
          <input type="text" name="searchStudents" value="<?php if(isset($_GET['searchStudents'])) {echo $_GET['searchStudents'];}?>" placeholder="Find Student">
          <button type="submit" name="submit">Search</button>
        </form>
      </div>
    </div>
  </div>

  <div class="search-results">
    <div class="col-md-12">
      <table>
        <thead>
          <tr>
              <th class="test">Full Name</th>
              <th>Level</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</body>

</html>