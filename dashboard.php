    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="time.js"></script>
    <?php
session_start();
if(isset($_SESSION['username'])){
    echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">TRINCHELP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Materia
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Fisica</a>
          <a class="dropdown-item" href="#">Matematica</a>
          <a class="dropdown-item" href="#">Informatica</a>
        </div>
      </li>
      </ul>
      <a class="btn btn-outline-danger"  href="http://localhost/website/trinchelp/logout.php">Logout</a>
    </div>
  </nav>';
    echo "<nav aria-label='breadcrumb'>
            <ol class='breadcrumb'>
              <li class='breadcrumb-item active' aria-current='page'>" .
              '<p id="demo">Benvenuto ' . $_SESSION['username'] . '</p>'
            . " </li>
            </ol>
          </nav>";

    echo '<div class="card">
    <div class="card-header">
      Quote
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>'.$row['description'].'</p>
        <p>'.$row['quesito'].'</p>
        <footer class="blockquote-footer">Richiesta fatta da <cite title="Source Title">'.$_SESSION['username'].'</cite></footer>
      </blockquote>
    </div>
  </div>';
} else {
    echo "<script>window.location.href = 'http://localhost/website/trinchelp'</script>";
}
?>