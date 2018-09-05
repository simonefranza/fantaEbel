<!DOCTYPE html>
<html lang="en">
<head>


  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="./css/styles.css">

  <link rel="icon" href="./images/logo.png">
  <title>Fanta EBEL</title>

  <script>
  function off() {
    document.getElementById("overlay").style.display = "none";
    document.getElementById("body-content").style.filter ="blur(0)";
  }
</script>
</head>

<body>

  <div id="overlay">
    <div id="text">

      <img id="join-logo" src="./images/logo.png" alt="logo">
      <p id="join-text">The power is in your hands with FantaEBEL,<br/>form your team and become legend today.</p>
      <button id="join-button" type="button" class="btn btn-primary btn-lg" onclick="off()">JOIN NOW!</button>
    </div>
  </div>


  <div id="body-content">
    <header id="logoHeader">
      <a href="./index.php">
        <h1><img style="height:140px" src="./images/logo definitivo.png" alt="logo" float="left">FantaEBEL</h1>
      </a>
    </header>
    <div class="navBar">
      <ul>
        <li><a href="">Come si gioca</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Registrati</a></li>
      </ul>
    </div>
    <div class="content container-fluid">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non felis
        imperdiet, ornare metus vitae, finibus nunc. Fusce mollis pretium lacus nec
        tristique. Suspendisse dapibus fringilla gravida. Proin quis mi arcu.
        Aliquam vel accumsan enim. Mauris sollicitudin purus id faucibus rutrum.
        Nam euismod quam nibh, quis consequat dui lacinia ut. Pellentesque blandit
        rhoncus iaculis. In in massa ipsum. Quisque volutpat eros diam, ac tristique
        magna varius nec. Phasellus eu dictum erat.</p>
      </div>
    </div>
  </body>
  </html>
