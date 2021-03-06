<?php
    session_start();

    ini_set('display_errors', 1);
    error_reporting(-1); 

    include_once '../inc/Conn.php';
    $conne = new Mysql();
    $conn = $conne->dbConnect();

    if (isset($_SESSION['user_isAdmin']) && $_SESSION['user_isAdmin'] == 1) {
        $sUsername = $_SESSION['user_Username'];
        $userid = $_SESSION['user_UserID'];
    } else {
        header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
        include("../404.php");
        die();
        $sUsername = null;
    }

?>
<!-- META Header -->
<meta title="robots" content="noindex">
<meta title="description" content="Admin Dashboard AI Customer Support">
<title>Admin Dashboard V1.1</title>
<!-- JS/CSS Header -->
<script src="../js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/admin-dash.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<?php if(preg_match('/unresolved/', $_SERVER['REQUEST_URI'])) : ?>
<!-- Modal Header -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<?php endif; ?>

<!-- Admin Header -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">
        <img src="../images/mascot.png" width="30" height="30" class="d-inline-block align-top" alt=""> Admin Dashboard V1.1
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/index.php">AICS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/install/install-new.php">Install</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="general-options.php">General Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="users.php">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="questions.php">Questions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="categories.php">Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="comments.php">Comments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="unresolved.php">Unresolved Issues</a>
            </li>
        </ul>
    </div>
</nav>

</style>

<script type="text/javascript">
var loader = "<div id='cover-spin'></div>";
  $("body").prepend(loader);
  $("#cover-spin").delay(200).fadeOut(200, function(){
      $(this).remove();
  });
</script>
