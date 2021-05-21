<?php
require_once('php/FormValidator.php');
require_once('php/Enquiry.php');
require_once('php/Database.php');

$error_message = null;
$success_message = null;
$form_data = null;

function areAllFormValuesNotEmpty() : bool {
    return (
        isset($_POST['fname']) &&
        isset($_POST['lname']) &&
        isset($_POST['email']) &&
        isset($_POST['subject']) &&
        isset($_POST['message'])
    );
}

if (isset($_POST['submit'])) {
    $success_message = null;
    if (areAllFormValuesNotEmpty()) {
        $enquiry = new \app\Enquiry(
            $_POST['fname'],
            $_POST['lname'],
            $_POST['email'],
            $_POST['subject'],
            $_POST['message']
        );

        if ($enquiry->isValid()) {
            $error_message = null;
            $db = new \app\Database('root', '', 'swe20001_dt');
            $db->insert('enquiry',
                array(
                    array(
                        'first_name' => $enquiry->getFname(),
                        'last_name' => $enquiry->getLname(),
                        'email' => $enquiry->getEmail(),
                        'subject' => $enquiry->getSubject(),
                        'message' => $enquiry->getMessage(),
                    )
                )
            );
            $success_message = 'Enquiry saved. One of our agents will be in contact with you shortly.';
        } else {
            $error_message = 'Invalid form data. Please try again.';
        }
    } else {
        $error_message = 'All fields are required.';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Dave">
    <meta name="description" content="Feedback">
    <title>Enquiry</title>

    <link rel="stylesheet" type="text/css" href="css/enquiry.css">
    <link rel="icon" href="images/ARLogo.png">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Bootstrap Plugin-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</head>

<body>
<header>
  <?php include("header.php"); ?>
</header>
<div class="hero-image">
    <div class="hero-text">
        <h1>We want to hear from you</h1>
    </div>
</div>

<div class="card form-card shadow">
    <div class="card-body">
        <h2 class="card-title">Enquiry Form</h2>
        <?php
        if ($error_message != null) {
            echo '
                <div class="alert alert-danger alert-dismissible fade show my-4" role="alert">
                    <strong>Error!</strong> '.$error_message.'
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ';
        } else if ($success_message != null) {
            echo '
                <div class="alert alert-success alert-dismissible fade show my-4" role="alert">
                    <strong>Success!</strong> '.$success_message.'
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ';
        }
        ?>
        <form action="" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="fname">First name*</label>
                    <input type="text" class="form-control" name="fname" placeholder="John" />
                </div>
                <div class="form-group col-md-6">
                    <label for="lname">Last name</label>
                    <input type="text" class="form-control" name="lname" placeholder="Doe" />
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email address*</label>
                <input type="email" class="form-control" name="email" placeholder="JohnDoe@gmail.com" />
            </div>
            <div class="form-group">
                <label for="subject">Subject*</label>
                <input type="text" class="form-control" name="subject" placeholder="" />
            </div>
            <div class="form-group">
                <label for="message">Message*</label>
                <textarea class="form-control" name="message" rows="5" placeholder="Write us a message"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<footer>
  <?php include("footer.php"); ?>
</footer>
</body>
</html>
