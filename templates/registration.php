<html>
    <head>
        <title>Registrati</title>
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="js/registrationJs.js"></script>
    </head>
    <body>
<div class="container">
<?php if(isset($templateParams['errore'])):?>
    <p><?php echo $templateParams['errore']?></p>
    <?php endif;?>
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Gestore Password</h2>
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5">

            <div class="text-center">
              <img src="https://thumbs.dreamstime.com/b/pellicano-5535306.jpg" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="text" class="form-control" id="Username" aria-describedby="emailHelp"
                placeholder="User Name" >
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="password" placeholder="password">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="ConfermaPassword" placeholder="Conferma Password">
              </div>
            <div class="text-center"><button type="submit" id="button" class="btn btn-color px-5 mb-5 w-100">Registrati</button></div>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Gia registrato? <a href="index.php" class="text-dark fw-bold">Torna al login</a>
              </div>
          </form>
        </div>

      </div>
    </div>
  </div>
    
  </body>
</html>