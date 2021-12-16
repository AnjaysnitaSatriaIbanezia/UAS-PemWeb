<!DOCTYPE html>
<html lang="en">

<head>
  <title>CONTACT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <div class="container mt-2">
    <div class="col-md-3">
  <img src="/img/Logo_Angkoet.jpg" alt="" width="40%">
    <br><br><br><br>
    <h2>CONTACT</h2>
    <p><img src="/img/lime-green.png" alt="" width="50%"></p>

    

    
  </div>

  <div class="row">
      <div class="col-sm-2">
        </div>
      <div class="col-sm-5">
      <p><b>Username</b></p>
    <form action="<?= base_url() ?>/login/submitlogin" method="POST">
      <div class="form-floating mb-3 mt-3">
        <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username">
        <label for="username">Username</label>
      </div>
      <p><b>Password</b></p>
      <div class="form-floating mt-3 mb-3">
        <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password">
        <label for="password">Password</label>
      </div>
      <p><b>Confirm Password</b></p>
      <div class="form-floating mt-3 mb-3">
        <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password">
        <label for="password">Confirm Password</label>
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
      <div class="col-sm-5">
      <img src="/img/List.jpg" alt="" width="107%">
      </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>