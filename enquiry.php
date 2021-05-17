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
                <input type="text" class="form-control" id="inputsubject" placeholder="">
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
