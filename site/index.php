<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fanta EBEL</title>

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
    <!-- Header -->
    <div id="myHeader">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg">
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
              </ul>
            </div>
          </nav>
          <!-- Navbar -->
        </div>
        <!-- Header -->

        <!-- Main Content -->
        <div class="fullHeight main-content container-fluid">
          <div class="fullHeight row">
            <div class="col-md-6">
              <img id="rxIntro" src="images/hockeyplayer.svg" width="50%">
            </div>
            <div class="col-md-6">
              <div id="lxIntro">
                <div id="introText" class="container">
                  <div class="textWelcome">
                    <h1>FantaEBEL</h1>
                    <p>
                      Create your team, play your friends, <br/>
                      and prove yourself every weekend to claim the championship.<br/>
                    </p>
                  </div>
                </div>
                <div id="buttonWrapper">
                  <div class="container btn-container">
                    <div id="discoverButton" class="myButton" onclick="discoverActivate()">SCOPRI DI PI&Ugrave;</div>
                  </div>
                  <div class="container btn-container">
                    <div id="signupButton" class="myButton" onclick="signupActivate()">REGISTRATI</div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- Main Content -->

        <div id="discoverSlider" class="contentSlider myClose">
          <div class="container-fluid">
            <h2>Come funziona il fantasy IceHockey</h2>
            <p>Il fantasy IceHockey è un gioco molto bello per bambini molto belli.
              Non è assolutamente difficile e a anche i Kevin possono giocarci</p>
              <h3>Panoramica</h3>
              <p> Nel fantasy IceHockey tu e i tuoi amici formate delle squadre e
                buttate i soldi dei vostri genitori nel cesso.
              </p>
              <h3>Draft</h3>
              <p>Per prima cosa dovete effettuare una selezione dei giocatori.<br/>
                Questo pu&ograve; essere effettuato in vari modi:
                <ul>
                  <li>Comprando vostra madre</li>
                  <li>A busta chiusa</li>
                  <li>Tramite asta</li>
                </ul>
              </p>
              <h3>Creazione lega e squadre</h3>
              <p>Una volta create le squadre, uno di voi dovr&agrave; creare la lega.<br/>
                Per fare ciò recatevi sul menu lega e selezionare la voce "Crea Lega".
                Dopo aver inserito i dati i restati componenti del gruppo, dovranno
                registrarsi a loro volta sul sito e richiedere di unirsi alla lega tramite
                il botton "Join". L'ultimo passo è quello di inserire le squadre
                concordate durante il draft. Ogni giocatore dovrà premere su aggiungi squadra
                e inserire i giocatori. Il sistema controllerà in automatico se lo stesso giocatore
                è stato inserito in più squadre e nell'eventualità impedirà di aggiungere la squadra.
              </p>
              <h3>Organizzazione incontri</h3>
              <p>Quando la formazione della lega sarà stata ultimata il sistema
                genererà automaticamente tutti gli scontri.
                Sul profilo di ogni giocatore apparirà un timer che vi avviserà di
                inserire i giocatori nelle varie categoria in vista della prossima giornata.
                Nel caso un giocatore si dimenticasse di inserire i giocatori nelle categorie
                il sistema utilizzerà la stessa combinazione della giornata precedente.
                Se ci si dovesse dimenticare di inserire i giocatori per la prima giornata,
                i giocatori verranno assegnati in modo randomico.
                Sulle impostazioni del profilo è possibile attivare una notifica email,
                che vi ricorderà di aggironare il roster per la prossima giornata.
              </p>
              <h3>Regole dell'IceHockey</h3>
              <h4>Modalità di gioco</h4>
              <p>Esistono vari modi in cui si può giocare il fantasy football, questi sono:
                pinco, pallo, pistoliricoppi</p>
                <h5>Pinco</h5>
                <p>Pinco si fa così</p>
                <h5>Pallo</h5>
                <p>Lo sai</p>
                <h5>Pistoliricoppi</h5>
                <p>Ehi Campione</p>
                <h4>Squadre</h4>
                <p>Ogni squadra deve essere composta da 20 giocatori; di questi almeno
                  5 devono essere attaccanti, 5 difensori e 2 portieri</p>
                  <h4>Categorie</h4>
                  <p>Prima di ogni giornata dovrete suddividere 10 dei vostri giocatori
                    in queste 20 categorie</p>
                  </div>
                  <footer>

                    <!-- Copyright -->
                    <div id="myCopyright">
                      © 2018 Copyright:
                      <a href="#"> Simone Franza</a>
                      <span>&</span>
                      <a href="#"> Angelo Rosace</a>
                    </div>
                    <svg id="svgNavbar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 150" preserveAspectRatio="none">
                      <polygon class="svg--sm" fill="hsl(220, 50%,90%)" points="0,100 12,0 30,100 35,50 43,140 65,21 90,130 100,75 100,150 0,150"></polygon>
                      <polygon class="svg--lg" fill="hsl(220,60%,80%)" points="0,150 7,70 13,100 23,30 35,95 50,0 65,100 67,85 71,110 78,30 84,100 90,70 100,150 0,150"></polygon>
                      <polygon class="svg--lg" fill="hsl(220,45%,64%)" points="0,150 11,150 7,70 13,100 23,30 11,150 43,150 43,145 35,95 50,0 43,145 43,150 68,150 67,130 65,100 67,85 67,130 68,150 78,150 71,110 78,30 78,150 88,150 88,140 84,100 90,70 88,140 88,150 0,150"></polygon>
                    </svg>
                    <!-- Copyright -->
                  </footer>
                </div>

                <div id="signupSlider" class="contentSlider myClose">
                  <p>Signup Slider</p>
                </div>
              </div>
              <!-- Content -->

              <!-- Footer -->
              <footer id="stdFooter">

                <!-- Copyright -->
                <div id="myCopyright">
                  © 2018 Copyright:
                  <a href="#"> Simone Franza</a>
                  <span>&</span>
                  <a href="#"> Angelo Rosace</a>
                </div>
                <svg id="svgNavbar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 150" preserveAspectRatio="none">
                  <polygon class="svg--sm" fill="hsl(220, 50%,90%)" points="0,100 12,0 30,100 35,50 43,140 65,21 90,130 100,75 100,150 0,150"></polygon>
                  <polygon class="svg--lg" fill="hsl(220,60%,80%)" points="0,150 7,70 13,100 23,30 35,95 50,0 65,100 67,85 71,110 78,30 84,100 90,70 100,150 0,150"></polygon>
                  <polygon class="svg--lg" fill="hsl(220,45%,64%)" points="0,150 11,150 7,70 13,100 23,30 11,150 43,150 43,145 35,95 50,0 43,145 43,150 68,150 67,130 65,100 67,85 67,130 68,150 78,150 71,110 78,30 78,150 88,150 88,140 84,100 90,70 88,140 88,150 0,150"></polygon>
                </svg>
                <!-- Copyright -->
              </footer>
              <!-- Footer -->



            </body>
            </html>
