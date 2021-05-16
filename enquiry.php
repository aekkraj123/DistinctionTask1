<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Dave">
    <meta name="description" content="Feedback">
    <title>Enquiry</title>

    <link rel="stylesheet" type="text/css" href="css/enquiry.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="icon" href="images/ARLogo.png">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
        <form action="">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputfname">First name*</label>
                    <input type="text" class="form-control" id="inputfname" placeholder="John">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputlname">Last name</label>
                    <input type="text" class="form-control" id="inputlname" placeholder="Doe">
                </div>
            </div>
            <div class="form-group">
                <label for="inputemail">Email address*</label>
                <input type="email" class="form-control" id="inputemail" placeholder="JohnDoe@gmail.com">
            </div>
            <div class="form-group">
                <label for="inputsubject">Subject*</label>
                <input type="email" class="form-control" id="inputsubject" placeholder="">
            </div>
            <div class="form-group">
                <label for="txtarea">Message*</label>
                <textarea class="form-control" id="txtarea" rows="5" placeholder="Write us a message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<footer>
    <?php include("footer.php"); ?>
</footer>
</body>
</html>
