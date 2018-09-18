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
<link rel="icon" href="./images/logo.png">


</head>

<body onload="checkWelcome()">

<!-- Overlay -->
<div id="overlay" class="over">
  <div id="join-text">
    <img id="join-logo" src="./images/logo.png" alt="logo">
    <p>The power is in your hands with FantaEBEL,<br/>form your team and become legend today.</p>
    <button id="join-button" type="button" class="btn btn-primary btn-lg join" onclick="overlayOff()">JOIN NOW!</button>
  </div>
</div>
<!-- Overlay -->

<!-- Content -->
<div id="body-content">
  <div id="myHeader">
    <!-- Navbar -->

    <nav id="navbarBox" class="navbar navbar-expand-lg navbar-light">
      <div id="logoTitle" class="d-flex flex-grow-1">
        <span class="w-100 d-lg-none d-block"></span>
        <a href="index.php"><img src="images/logo.png" alt="logo" height="64px"></a>
        <a class="navbar-brand d-none d-lg-inline-block" href="index.php"><h1 id="siteTitle">FantaEbel</h1></a>
        <div class="w-100 text-right">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
      <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
        <ul class="navbar-nav ml-auto flex-nowrap">
          <li class="nav-item">
            <div class="dropdown">
              <button class="dropbtn">
                <a href="#" class="nav-link m-2 menu-item">Come funziona</a></button>
                <div class="dropdown-content">
                  <div class="circleMenu"></div>
                  <a href="#">Link 1</a>
                  <a href="#">Link 2</a>
                  <a href="#">Link 3</a>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <button class="dropbtn">
                  <a href="#" class="nav-link m-2 menu-item">League</a></button>
                  <div class="dropdown-content">
                    <div class="circleMenu"></div>
                    <a href="#">
                      <h3 class="linkTitle">NEW LEAGUE</h3>
                    </a>
                    <a href="#">
                      <h3 class="linkTitle">SEARCH<input type="text" placeholder="..."></h3>
                    </a>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <div class="dropdown">
                  <button class="dropbtn">
                    <a href="#" class="nav-link m-2 menu-item">Players</a>
                  </button>
                  <div class="dropdown-content">
                    <div class="circleMenu"></div>
                    <a href="#">
                      <h3 class="linkTitle">Goaltenders</h3>
                    </a>
                    <a href="#">
                      <h3 class="linkTitle">Offensive</h3>
                    </a>
                    <a href="#">
                      <h3 class="linkTitle">Defensive</h3>
                    </a>

                  </div>

                </div>
              </li>
              <li class="nav-item">
                <div class="dropdown">
                  <button class="dropbtn">
                    <a href="#" class="nav-link m-2 menu-item">Contact/About</a>
                  </button>
                  <div class="dropdown-content">
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <div class="dropdown">
                  <button class="dropbtn">
                    <a href="login.php" class="nav-link m-2 menu-item">Accedi</a>
                  </button>
                  <div class="dropdown-content">
                  </div>
                </div>
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
</div>
