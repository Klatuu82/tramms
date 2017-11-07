<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body >
        <div class="row">
            <div class="col s7 push-s7" >
                <div class="row" style="width:100%;float:right;margin:75px;">
                    <div class="col s12 m7">
                        <div >
                            <div class="card-content">
                                <img src="../src/logo1.png" style="width:100%"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s5 pull-s7">
                <div class="row z-depth-1" style="width: 60%;padding: 20px;margin-top:75px;border-radius: 5px;">
                    <form class="col s12" style="padding-bottom:40px;" method="POST" action="session_login.php">
                        <div class="row ">
                            <h4 style="text-align: center">login</h4>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                                <input  type="text" class="validate" name="name" value="">
                                <label >Benutzer Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock</i>
                                <input  type="password" class="validate" name="pwd" value="">
                                <label  data-error="wrong" data-success="right">Password</label>
                            </div>
                        </div>
                        <input type="submit" class="waves-effect waves-light btn light-blue lighten-2" style="border-radius:30px;margin: 10px;margin-left:45px;">
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </body>
</html>
