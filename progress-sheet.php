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

</head>

<body>
    <div class="navbar">
      <div class="navbarBackground"></div>
  
      <div class="progress-sheets-logo-button">
        <button onclick="window.location.href='index.html';" type="button"><span>Progress Sheets</span></button>
      </div>
  
      <div class="search-button">
        <button onclick="window.location.href='search-students.php';" type="button"><h1>Search</h1></button>
      </div>
  
      <div class="manage-button">
        <button onclick="window.location.href='manage-students.html';" type="button"><h1>Manage</h1></button>
      </div>
  
      <div class="sheet-view-button">
        <button onclick="window.location.href='progress-sheet.php';" type="button"><h1>Sheet View</h1></button>
      </div>
  
      <div class="profile-button">
        <button type="button"><h1>Profile</h1></button>
      </div>
  
      <div class="rectangle"></div>
    </div>

    <div class="progress-sheet-and-labels">
      <div class="progress-sheet-image">
        <img src="images/progress-sheet.png">
    </div>
    
     
    <label class="levelOneStart" id="levelOneStartDate">
      Start Date
    </label>

    <label class="levelOneComplete" id="levelOneCompleteDate">
        Complete Date
    </label>

    <label class="levelOneNotes" id="levelOneNotes">
        Notes
    </label>

    
    <script type='text/javascript'>
      function updateLvlOneStartDate(){
        document.getElementById('levelOneStartDate').innerHTML = <?= $items['fullName'];?>;
      }
      //updateLvlOneStartDate();
    </script>";
    <label class="ninjaName" id="Ninja's Name">
        <?php
          include "connect-student_info.php";
          $query = "SELECT fullName FROM students";
          $query_run = mysqli_query($connection, $query);
          
          echo "<select id=fullName name=studentSelect onmousedown='this.value='';' onchange='updateLvlOneStartDate();' >";

          if(mysqli_num_rows($query_run) > 0) {
            ?>
            <option value="" disabled selected>Student Name</option>
            <?php

            
            foreach($query_run as $items){
              ?>

              <option value=<?= $items['fullName']; ?> > <?= $items['fullName'];?> </option>
              <?php
            }
          }
          echo "</select>";
        ?>
    </label>
    
    

  </div>
  
  <!-- <script src="js/scripts.js"></script> -->
</body>

</html>