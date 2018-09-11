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
    <link rel="stylesheet" href="./css/loginstyle.css">

    <script>
        $(document).ready(function(){
            $("#link").click(function(){
                $("#log_in_form").fadeOut(200).delay(100);
                $("#register").delay(200).fadeIn(800);
            });
        });
        
    </script>

</head>
<body>
    <!-- CONTENT -->
    <div class="container">
        <div class="row">
            <div id="log_in" class="col-4">
                <div>
                    <form id="log_in_form">
                        <h1 id="title" style="text-align: center; margin-top: 15px;">Log In</h1>
                        <div class="form-group">
                            <label for="inputEmail">Email address</label>
                            <div>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <div>    
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" style="margin-bottom: 15px; width: 40%;">Log in</button>
                        </div>
                        <p style="text-align: center;">You don't have an account? <a id="link" href="#">click here</a></p>
                    </form>
                    <div id="register">
                        <h1 style="text-align: center; margin-top: 15px;">Register</h1>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Password</label>
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                                <div class="form-group">
                                <label for="inputAddress2">Address 2</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">State</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                            </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                        Check me out
                                        </label>
                                    </div>
                                </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" style="margin-bottom: 15px; width: 40%;">Sign in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="page-footer font-small fixed-bottom" id="footer" style="background-color: hsla(0, 0%, 0%, 0.24)">
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