<!DOCTYPE html>
<?php
	session_start();
   // Check if the user is not logged in
    if (!isset($_SESSION['id'])) {
        // Redirect the user to the login page
        header("Location: http://localhost/csconnect/wt-project2/index.html");
        exit();
    }
?>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/scroll.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

     <p class="logo">Welcome, <?php echo " ",$_SESSION['name'],"!"?></p>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
         <div id="user-btn" class="fa fa-sign-out"></div>
      </div>

      

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="images/pic-1.jpg" class="image" alt="">
      <h3 class="name"><?php echo $_SESSION['id']?></h3>
      <p class="role"> Faculty</p>
      <a href="profile.php" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="home.php"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="data/course_structure.pdf" target="_blank"><i class="fas fa-graduation-cap"></i><span>Courses</span></a>
      <a href="results.php"><i class="fas fa-chalkboard-user"></i><span>Results</span></a>
      <a href="attendance.php"><i class="fa-solid fa-people-group"></i><span>Attendance</span></a>
      <a href="contact.php"><i class="fas fa-headset"></i><span>contact us</span></a>
   </nav>

</div>

<section id="events">

   <h1 class="heading">events</h1>

   <div class="slider-container">
    <div class="slider">
        <div class="slide">
            <img src="images/AADHYA.jpg" alt="Image 1">
            <div class="text">AADHYA - Tech Fest</div>
        </div>
        <div class="slide">
            <img src="images/ANANTHA.jpg" alt="Image 2">
            <div class="text">ANANTHA - 2k24</div>
        </div>
        <div class="slide">
            <img src="images/ADVAITHA.jpg" alt="Image 3">
            <div class="text">ADVAITHA - 2k23</div>
        </div>
        
        
    </div>
</div>

</section>



<section id="clubs">

    <h1 class="heading">clubs</h1>
 
    <div class="slider-container">
     <div class="slider">
         <div class="slide">
             <img src="images/SRC.jpeg" alt="Image 1">
             <div class="text">Student Recreation Center (SRC)</div>
         </div>
         <div class="slide">
             <img src="images/AI_ML.jpeg" alt="Image 2">
             <div class="text">AI / ML</div>
         </div>
         <div class="slide">
             <img src="images/programming_club.jpeg" alt="Image 3">
             <div class="text">Programming Club</div>
         </div>
         <div class="slide">
             <img src="images/DS.jpg" alt="Image 4">
             <div class="text">Data Science</div>
         </div>
         <div class="slide">
             <img src="images/competitive_exam.jpeg" alt="Image 5">
             <div class="text">Competitive Examination</div>
         </div>
         <div class="slide">
             <img src="images/Software_Development.jpeg" alt="Image 6">
             <div class="text">Software Development</div>
         </div>
         <div class="slide">
             <img src="images/cyber_security.jpeg" alt="Image 7">
             <div class="text">Cyber Security</div>
         </div>
         <div class="slide">
             <img src="images/cloud_computing.jpeg" alt="Image 8">
             <div class="text">Cloud Computing</div>
         </div>
         
     </div>
 </div>
 
 </section>

 <section id="contests">

    <h1 class="heading">Contests</h1>
 
    <div class="slider-container">
     <div class="slider">
         <div class="slide">
             <img src="images/hackathon.jpeg" alt="Image 1">
             <div class="text">Hackathon</div>
         </div>
         <div class="slide">
             <img src="images/debug.avif" alt="Image 2">
             <div class="text">Debugging</div>
         </div>
         <div class="slide">
             <img src="images/coding.webp" alt="Image 3">
             <div class="text">Coding</div>
         </div>
         <div class="slide">
             <img src="images/quiz.jpg" alt="Image 4">
             <div class="text">Quiz</div>
         </div>
        
         
     </div>
 </div>
 
 </section>


<!-- custom js file link  -->
<script>
        // Wait until the DOM is fully loaded
        document.addEventListener('DOMContentLoaded', () => {
            // Select the element with ID 'user-btn'
            const userBtn = document.getElementById('user-btn');

            // Attach an onclick event listener to the element
            userBtn.onclick = () => {
                // Redirect to 'logout.php' when the element is clicked
                window.location.href = 'logout.php';
            }
        });
    </script>
<script src="js/script.js"></script>
<script src="js/scroll.js"></script>
   
</body>
</html>