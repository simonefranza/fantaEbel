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

  <script src="./scripts/welcomeOverlay.js"></script>
  <link rel="stylesheet" href="./css/styles.css">
  <link rel="stylesheet" href="./css/homepagestyle.css">

  

  <script>
    function overlayOff() {
    document.getElementById("body-content").style.filter ="blur(0)";
  }
</script>

    <script>
        $(document).ready(function(){
            $(".join").click(function(){
                $(".over").fadeOut(500);
            });
        });
    </script>
</head>

<body onload="checkWelcome()">

  <div id="overlay" class="over">
    <div id="text">

      <img id="join-logo" src="./images/logo.png" alt="logo">
      <p id="join-text">The power is in your hands with FantaEBEL,<br/>form your team and become legend today.</p>
      <button id="join-button" type="button" class="btn btn-primary btn-lg join" onclick="overlayOff()">JOIN NOW!</button>
    </div>
  </div>


  
  <div class="bg" id="body-content">
        <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="d-flex flex-grow-1">
                <span class="w-100 d-lg-none d-block"></span>
                <img src="images/logo.png" alt="logo" height="64px">
                <a class="navbar-brand d-none d-lg-inline-block" href="#"><h1>FantaEbel</h1></a>
                    <div class="w-100 text-right">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    </div>
                    <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
                        <ul class="navbar-nav ml-auto flex-nowrap">
                            <li class="nav-item">
                                <a href="#" class="nav-link m-2 menu-item nav-active">Link1</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link m-2 menu-item">Link2</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link m-2 menu-item">Link3</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link m-2 menu-item">Come funziona</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link m-2 menu-item">Contact/About</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link m-2 menu-item">Accedi</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link m-2 menu-item"><img src="images/ita.png" alt="ita"></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link m-2 menu-item"><img src="images/de.png" alt="de"></a>
                            </li>
                        </ul>
            </div>
        </nav>
        <!-- Navbar -->
        <!-- Main -->
        <div class="container">
            <!-- Introduction Text -->
            <div class="row" id="text1">
                <div class="col-8">
                    <span style="font-size: 25px">
                        Lorem ipsum dolor sit amet, consectetur adipisci elit, 
                        sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum 
                        exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur
                    </span>
                    <a href="#">[leggi di più a riguardo...]</a>
                </div>
            </div>
            <!-- Introduction Text -->
            <!-- Buttons -->
            <div class="row" id="buttons">
                <div class="col-12">
                        <a class="btn btn-primary button btn-lg" href="#" role="button">Crea Account</a>
                        <a class="btn btn-danger button btn-lg" href="#" role="button">Accedi</a>
                </div>
            </div>
            <!-- Buttons -->    
        </div>
        <!-- Main -->
        <!-- Footer -->
        <footer class="page-footer font-small fixed-bottom" id="footer">
            <!-- Copyright -->
            <div class="footer-copyright text-center py-1 ft">© 2018 Copyright:
              <a href="#"> Simone Franza</a>
              <span>&</span>
              <a href="#"> Angelo Rosace</a>
            </div>
            <!-- Copyright -->
        
        </footer>
         <!-- Footer -->
    
    </div>
    
  </body>
  </html>
