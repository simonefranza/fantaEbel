<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>

  <link rel="stylesheet" href="./css/loginstyle.css">
  <?php include 'header.php'; ?>


    <script>
        $(document).ready(function(){
            $("#registerNow").click(function(){
                $("#log_in_form").fadeOut(200).delay(100);
                document.getElementById('log_in').style.marginTop = "5%";
                $("#register").delay(200).fadeIn(800);
            });
        });
    </script>
    <!-- CONTENT -->
    <div class="container">
        <div class="row">
            <div id="log_in" class="col-md-4">
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
                        <p style="text-align: center;">You don't have an account? <a id="registerNow" href="#">click here</a></p>
                    </form>

                    <!-- REGISTER -->
                    <div id="register">
                        <h1 style="text-align: center; margin-top: 15px;">Register</h1>
                        <form>
                                <div class="form-group">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword4">Password</label>
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword4">Conferma Password</label>
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" style="margin-bottom: 15px; width: 40%;">Sign up</button>
                            </div>
                        </form>
                    </div>
                    <!-- REGISTER -->
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php' ?>
</body>
</html>
