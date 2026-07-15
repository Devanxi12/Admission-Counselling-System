<?php
session_start();

// prevent cache (VERY IMPORTANT)
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// restore session from cookie
if(!isset($_SESSION['user']) && isset($_COOKIE['user'])){
    $_SESSION['user'] = $_COOKIE['user'];
}
//search
$query = "";

if(isset($_GET['query'])){
    $query = mysqli_real_escape_string($conn, $_GET['query']);

    $sql = "SELECT * FROM universities 
            WHERE name LIKE '%$query%' 
            OR location LIKE '%$query%'";

    $result = mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admission Counselling System</title>
  <link rel="stylesheet" href="styles.css">
  <script>
history.pushState(null, null, location.href);
window.onpopstate = function () {
    history.go(1);
};
function toggleMenu(e){
    e.preventDefault();
    let menu = document.getElementById("dropdownMenu");
    menu.style.display = (menu.style.display === "block") ? "none" : "block";
}

window.onclick = function(e){
    if(!e.target.closest('.profile-menu')){
        document.getElementById("dropdownMenu").style.display = "none";
    }
}
</script>
</head>

<body>

  <!-- ================= HEADER ================= -->
 <header class="site-header">

<div class="header-left">

<h2 class="logo">Admission Counselling</h2>

<nav class="navbar">

<a href="index.php">Home</a>
<a href="contact.html">Contact</a>

<?php if(isset($_SESSION['user'])): ?>

<div class="profile-menu" style="display:inline-block; position:relative;">
    
    <a href="#" onclick="toggleMenu(event)" class="username">
        👤 <?php echo $_SESSION['user']; ?>
    </a>

    <div id="dropdownMenu" class="dropdown">
        <a href="logout.php">Logout</a>
    </div>

</div>

<?php else: ?>
<a href="login.html">Login</a>
<?php endif; ?>
</nav>
</div>

<div class="header-right">

<?php if(isset($_SESSION['user'])): ?>
    <form method="GET" action="search.php">
        <input type="text" name="query" placeholder="Search universities or city..." required>
        <button type="submit">🔍</button>
    </form>
<?php else: ?>
    <input type="text" placeholder="Login to search..." disabled>
<?php endif; ?>

</div>
</div>

</header>
  
  
  <!-- Hero Section -->

<section class="hero">
    <div class="hero-box">
        <h1>Admission Counselling System</h1>
        <p>Explore Top Universities of Gujarat and Find Your Path to Success.</p>

        <?php if(!isset($_SESSION['user'])) { ?>
            <!-- Show only before login -->
            <a href="login.html" class="btn">Get Started</a>
        <?php } else { ?>
            <!-- After login -->
            <a href="index.php" class="btn">Get Started</a>
        <?php } ?>

    </div>
</section>

  <!-- Top Universities -->
  <div class="section">
    <h2>Top 5 Universities of Gujarat</h2>

    <!-- University 1 -->
    <div class="university">
      <div class="university-box">
        <div class="university-content image">
          <img src="image/nirma.jpg" alt="Nirma University">
        </div>
        <div class="university-content description">
          <h3>Nirma University</h3>
          <p><strong>Address:</strong> Sarkhej-Gandhinagar Highway, Ahmedabad, Gujarat</p>
          <p><strong>Contact:</strong> +91 2717 241900</p>
          <p>Leading multidisciplinary university with programs in engineering, management, law, pharmacy, and design.</p>
          <p><a href="https://nirmauni.ac.in" target="_blank">Visit Website</a></p>
        </div>
      </div>
    </div>

    <!-- University 2 -->
    <div class="university reverse">
      <div class="university-box">
        <div class="university-content description">
          <h3>Gujarat University</h3>
          <p><strong>Address:</strong> Navrangpura, Ahmedabad, Gujarat</p>
          <p><strong>Contact:</strong> +91 79 26301341</p>
          <p>One of the oldest and largest universities offering undergraduate and postgraduate programs.</p>
          <p><a href="https://www.gujaratuniversity.ac.in" target="_blank">Visit Website</a></p>
        </div>
        <div class="university-content image">
          <img src="image/gujarat.jpg" alt="Gujarat University">
        </div>
      </div>
    </div>

    <!-- University 3 -->
    <div class="university">
      <div class="university-box">
        <div class="university-content image">
          <img src="image/sardar.png" alt="Sardar Patel University">
        </div>
        <div class="university-content description">
          <h3>Sardar Patel University</h3>
          <p><strong>Address:</strong> Vallabh Vidyanagar, Anand, Gujarat</p>
          <p><strong>Contact:</strong> +91 2692 226807</p>
          <p>Renowned for humanities, science, and management education with strong research focus.</p>
          <p><a href="https://www.spuvvn.edu" target="_blank">Visit Website</a></p>
        </div>
      </div>
    </div>

    <!-- University 4 -->
    <div class="university reverse">
      <div class="university-box">
        <div class="university-content description">
          <h3>RK University, Rajkot</h3>
          <p><strong>Address:</strong> Kasturbadham, Rajkot-Bhavnagar Highway, Rajkot</p>
          <p><strong>Contact:</strong> +91 281 278 7815</p>
          <p>Leading private university with multidisciplinary programs in engineering, pharmacy, and management.</p>
          <p><a href="https://rku.ac.in" target="_blank">Visit Website</a></p>
        </div>
        <div class="university-content image">
          <img src="image/rk.jpeg" alt="RK University">
        </div>
      </div>
    </div>

    <!-- University 5 -->
    <div class="university">
      <div class="university-box">
        <div class="university-content image">
          <img src="image/parul.jpg" alt="Parul University">
        </div>
        <div class="university-content description">
          <h3>Parul University, Vadodara</h3>
          <p><strong>Address:</strong> P.O. Limda, Waghodia, Vadodara</p>
          <p><strong>Contact:</strong> +91 2668 260 300</p>
          <p>Leading university offering 160+ programs in engineering, law, management, medicine, and more.</p>
          <p><a href="https://paruluniversity.ac.in" target="_blank">Visit Website</a></p>
        </div>
      </div>
    </div>

<!-- Institutes Section -->
<section class="institutes">
  <h2>Programs</h2>

  <div class="grid">

    <div class="institute">🏛️ 
      <a href="arch.html" class="btn">Institute of Architecture & Planning</a>
    </div>

    <div class="institute">💰 
      <a href="comm.html" class="btn">Institute of Commerce</a>
    </div>

    <div class="institute">🎨 
      <a href="des.html" class="btn">Institute of Design</a>
    </div>

    <div class="institute">⚖️ 
      <a href="law.html" class="btn">Institute of Law</a>
    </div>

    <div class="institute">📊
      <a href="manage.html" class="btn">Institute of Management</a>
    </div>

    <div class="institute">💊 
      <a href="pharma.html" class="btn">Institute of Pharmacy</a>
    </div>

    <div class="institute">🔬
      <a href="science.html" class="btn">Institute of Science</a>
    </div>

    <div class="institute">⚙️ 
      <a href="tech.html" class="btn">Institute of Technology</a>
    </div>

    <div class="institute">🎓 
      <a href="doct.html" class="btn">Faculty of Doctoral Studies</a>
    </div>

    <div class="institute">🌍 
      <a href="inter.html" class="btn">Institute of International Study</a>
    </div>

  </div>
</section>

</div>

<!-- Floating Chatbot -->
<div class="chatbot-container">

    <div class="chat-bubble">Hi 👋</div>

    <div class="chat-icon" onclick="toggleChat()">
        <img src="image/robot.png" alt="Chatbot">
    </div>

    <div class="chat-window" id="chatWindow">

        <div class="chat-header">
             🤖 Chatbot
            <span onclick="toggleChat()">✖</span>
        </div>

        <div class="chat-body" id="chatBody"></div>

        <div class="chat-input">
            <input type="text" id="userInput" placeholder="Ask about universities...">
            <button onclick="sendMessage()">➤</button>
        </div>

    </div>

</div>

<script src="chat.js">
window.onload = function () {

    document.getElementById("userInput").addEventListener("keyup", function(event) {

        if (event.key === "Enter") {

            event.preventDefault();
            sendMessage();

        }

    });

};
</script>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Admission Counselling System</p>
    <p>Contact: info@admissioncounselling.com | Phone: +91 9876543210</p>
  </footer>

</body>
</html>