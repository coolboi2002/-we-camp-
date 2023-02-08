<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="index.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <nav>
      <!---nav-rleft-->
      <div class="nav-left">
        <img src="" class="logo" />
        <ul>
          <li>
            <a href="menu.html"><img src="menu2.jpeg" class="mens" /></a>
          </li>
          <li>
            <a href="inbox_log.html"><img src="inbox.png" /></a>
          </li>
          <li><img src="notification.png" /></li>
        </ul>
      </div>
      <!--nav-mid-->
      <div class="nav-mid">
        <img src="WhatsApp Image 2023-01-29 at 16.34.44.jpg" class="logo-img" />
        <div class="logo-text">
          <h4 class="font">
            WE-CAMP
          </h4>
        </div>
      </div>
      <!--nav-rytt-->
      <div class="nav-right">
        <div class="search-box">
          <img src="search.png" />
          <input type="text" placeholder="Search" />
        </div>
        <div class="user-icon">
          <a href="PROFILE.html"><img src="profile picss/dev.jpg" /></a>
        </div>
      </div>
    </nav>
    <div class="container">
      <!---leftbar-->
      <div class="left-bar">
        <div class="imp-links">
          <a href="#"><img src="news.jpeg" />News</a>
          <a href="http://imsec.ac.in/events"><img src="events.jpeg" />Events</a>
          <a href="http://imsec.ac.in/academics/academic-calendarv"><img src="calender.jpeg" />Calender</a>
          <a href="https://erp.aktu.ac.in/webpages/oneview/oneview.aspx"><img src="results.jpeg" />Results</a>
        </div>
      </div>
      <!---feed -->
      <div class="feed">
        <div class="write-post-container">
          <div class="user-profile">
            <img class="post" src="profile picss/dev.jpg" />
            <div>
              <?php

              $con=mysqli_connect("localhost","root","","wecam");
              $userid=$_GET['user'];
              $sql="SELECT * FROM `login` WHERE `userid` = '$userid';";
              $result=mysqli_query($con,$sql);
              if(mysqli_num_rows($result))
              {
              $row=mysqli_fetch_assoc($result);


?>
              <p><?php echo $row['userid']?></p>
              <small>public</small>
              <p><?php echo $row['status']?></p>
            </div>
          </div>
          <div class="post-input-container">
            <textarea rows="3" placeholder="lets connect here.."></textarea>
            <div class="add-post-links">
              <a href="#"><img src="photo.png" />Photos</a>
              <a href="#"><img src="vid1.png" />videos</a>
              <a href="#"><img src="doc1.png" />documents</a>
            </div>
             <?php }?>
          </div>
        </div>
        <div class="feed-post">
          <div class="post-profile">
            <img class="logo" src="profile picss/harsh.jpg" />
            <div>
              <p>Harsh Rajvanshi</p>
              <small>public</small>
              <div class="post-image">
                <img src="feed/WhatsApp Image 2023-01-30 at 22.58.37.jpg" />
              </div>
            </div>
          </div>
        </div>
        <div class="feed-post">
          <div class="post-profile">
            <img class="logo" src="profile picss/dev.jpg" />
            <div>
              <p>Dev Dhama</p>
              <small>public</small>
              <div class="post-image">
                <img src="" />
              </div>
            </div>
          </div>
        </div>
        <div class="feed-post">
          <div class="post-profile">
            <img class="logo" src="profile picss/ayush.jpg" />
            <div>
              <p>Ayush Malik</p>
              <small>public</small>
              <div class="post-image">
                <img src="feed/IMG_20230130_163127.jpg" />
              </div>
            </div>
          </div>
        </div>
        <div class="feed-post">
          <div class="post-profile">
            <img class="logo" src="profile picss/aman.jpg" />
            <div>
              <p>Aman Singh</p>
              <small>public</small>
              <div class="post-image">
                <img src="photos/imsec.jpg" />
              </div>
            </div>
          </div>
        </div>
        <div class="feed-post">
          <div class="post-profile">
            <img class="logo" src="profile picss/anshika.jpg" />
            <div>
              <p>Anshika shrivastav</p>
              <small>public</small>
              <div class="post-image">
                <img src="feed/NAAC-&-NBA-Certificate-Banner.jpg" />
              </div>
            </div>
          </div>
        </div>
      </div>

      <!----right bar-->
      <div class="right-bar">
        <div class="find">
          <a href="#"><img src="friends.png" />Friends</a>
          <a href="#"><img src="student.jpeg" />Students</a>
          <a href="#"><img src="faculties.jpeg" />faculties</a>
        </div>
      </div>
    </div>
  </body>
</html>
