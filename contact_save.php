```php
<?php
include("db.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$message = mysqli_real_escape_string($conn, $_POST['message']);

$sql = "INSERT INTO contact (name, email, message)
        VALUES ('$name', '$email', '$message')";

if(mysqli_query($conn, $sql))
{
    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;

        $mail->Username = 'devanxi.kandoliya12@gmail.com';
        $mail->Password = 'myjfwmbbdghvpqni';

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->setFrom(
            'devanxi.kandoliya12@gmail.com',
            'ACS Contact Form'
        );

        $mail->addAddress('devanxi.kandoliya12@gmail.com');
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);

        $mail->Subject = 'New Contact Form Message';

        $mail->Body = "
            <h3>New Contact Message</h3>

            <b>Name:</b> $name <br>
            <b>Email:</b> $email <br><br>

            <b>Message:</b><br>
            $message
        ";

        $mail->send();

        echo "<script>
                alert('Message Sent Successfully');
                window.location.href='index.php';
              </script>";

    } catch (Exception $e) {

        echo 'Mail Error: ' . $mail->ErrorInfo;

    }

}
else
{
    echo "<script>
            alert('Database Error');
            window.history.back();
          </script>";
}
?>
