<?php

include("db.php");

$message = strtolower(trim($_POST['message'] ?? ''));

if(empty($message))
{
    echo "Please enter a message.";
    exit();
}

/* ==========================
   GREETINGS
========================== */

$greetings = [
    "hi",
    "hello",
    "hey",
    "hii",
    "good morning",
    "good evening"
];

if(in_array($message, $greetings))
{
    echo "
    👋 Hello! Welcome to Admission Counselling System.<br><br>

    You can ask me:<br>
    🎓 Universities<br>
    🏫 Colleges<br>
    📚 Courses<br>
    📝 Admission Process<br>
    💰 Fees<br>
    📞 Contact Information
    ";

    exit();
}

/* ==========================
   HELP
========================== */

if(strpos($message, "help") !== false)
{
    echo "
    🤖 Try asking:<br><br>

    • Show Engineering Colleges<br>
    • Show Commerce Colleges<br>
    • BCA Course<br>
    • Admission Process<br>
    • Contact Information<br>
    • Universities in Rajkot
    ";

    exit();
}

/* ==========================
   ADMISSION
========================== */

if(
    strpos($message, "admission") !== false ||
    strpos($message, "apply") !== false
)
{
    echo "
    📝 Admission Process:<br><br>

    1️⃣ Register Account<br>
    2️⃣ Login<br>
    3️⃣ Browse Colleges<br>
    4️⃣ Select Course<br>
    5️⃣ Submit Application<br>
    6️⃣ Wait For Approval
    ";

    exit();
}

/* ==========================
   CONTACT
========================== */

if(
    strpos($message, "contact") !== false ||
    strpos($message, "phone") !== false ||
    strpos($message, "email") !== false
)
{
    echo "
    📞 Contact Information:<br><br>

    Email: info@acs.com<br>
    Phone: +91 9876543210
    ";

    exit();
}

/* ==========================
   FEES
========================== */

if(strpos($message, "fees") !== false)
{
    echo "
    💰 Fees vary by college and course.
    Please tell me the college or course name.
    ";

    exit();
}

/* ==========================
   ENGINEERING COLLEGES
========================== */

if(strpos($message, "engineering") !== false)
{
    $query = mysqli_query(
        $conn,
        "SELECT * FROM colleges WHERE type='Engineering'"
    );

    if(mysqli_num_rows($query) > 0)
    {
        echo "🏫 Engineering Colleges:<br><br>";

        while($row = mysqli_fetch_assoc($query))
        {
            echo "• ".$row['name']." (".$row['city'].")<br>";
        }
    }
    else
    {
        echo "No Engineering Colleges Found.";
    }

    exit();
}

/* ==========================
   COMMERCE COLLEGES
========================== */

if(strpos($message, "commerce") !== false)
{
    $query = mysqli_query(
        $conn,
        "SELECT * FROM colleges WHERE type='Commerce'"
    );

    if(mysqli_num_rows($query) > 0)
    {
        echo "🏫 Commerce Colleges:<br><br>";

        while($row = mysqli_fetch_assoc($query))
        {
            echo "• ".$row['name']." (".$row['city'].")<br>";
        }
    }
    else
    {
        echo "No Commerce Colleges Found.";
    }

    exit();
}

/* ==========================
   ARTS COLLEGES
========================== */

if(strpos($message, "arts") !== false)
{
    $query = mysqli_query(
        $conn,
        "SELECT * FROM colleges WHERE type='Arts'"
    );

    if(mysqli_num_rows($query) > 0)
    {
        echo "🏫 Arts Colleges:<br><br>";

        while($row = mysqli_fetch_assoc($query))
        {
            echo "• ".$row['name']." (".$row['city'].")<br>";
        }
    }
    else
    {
        echo "No Arts Colleges Found.";
    }

    exit();
}

/* ==========================
   SCIENCE COLLEGES
========================== */

if(strpos($message, "science") !== false)
{
    $query = mysqli_query(
        $conn,
        "SELECT * FROM colleges WHERE type='Science'"
    );

    if(mysqli_num_rows($query) > 0)
    {
        echo "🏫 Science Colleges:<br><br>";

        while($row = mysqli_fetch_assoc($query))
        {
            echo "• ".$row['name']." (".$row['city'].")<br>";
        }
    }
    else
    {
        echo "No Science Colleges Found.";
    }

    exit();
}

/* ==========================
   COURSE SEARCH
========================== */

$courseQuery = mysqli_query(
    $conn,
    "SELECT * FROM courses
     WHERE LOWER(course_name)
     LIKE '%$message%'"
);

if(mysqli_num_rows($courseQuery) > 0)
{
    while($row = mysqli_fetch_assoc($courseQuery))
    {
        echo "
        📚 <b>".$row['course_name']."</b><br>
        ".$row['description']."<br><br>
        ";
    }

    exit();
}

/* ==========================
   UNIVERSITY SEARCH
========================== */

$uniQuery = mysqli_query(
    $conn,
    "SELECT * FROM universities
     WHERE LOWER(name) LIKE '%$message%'
     OR LOWER(city) LIKE '%$message%'"
);

if(mysqli_num_rows($uniQuery) > 0)
{
    while($row = mysqli_fetch_assoc($uniQuery))
    {
        echo "
        🎓 <b>".$row['name']."</b><br>
        📍 ".$row['city']."<br><br>
        ";
    }

    exit();
}

/* ==========================
   COLLEGE SEARCH
========================== */

$collegeQuery = mysqli_query(
    $conn,
    "SELECT * FROM colleges
     WHERE LOWER(name) LIKE '%$message%'
     OR LOWER(city) LIKE '%$message%'
     OR LOWER(type) LIKE '%$message%'"
);

if(mysqli_num_rows($collegeQuery) > 0)
{
    while($row = mysqli_fetch_assoc($collegeQuery))
    {
        echo "
        🏫 <b>".$row['name']."</b><br>
        📍 ".$row['city']."<br>
        🎓 ".$row['type']."<br>
        🌐 ".$row['website']."<br><br>
        ";
    }

    exit();
}

/* ==========================
   DEFAULT RESPONSE
========================== */

echo "
🤖 Sorry, I couldn't understand that.<br><br>

Try asking:<br>
• Admission Process<br>
• Engineering Colleges<br>
• Commerce Colleges<br>
• BCA Course<br>
• Universities in Rajkot<br>
• Contact Information
";

?>