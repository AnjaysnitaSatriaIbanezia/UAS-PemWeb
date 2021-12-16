<!DOCTYPE html>
<html lang="en">

<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <div class="container mt-3">
    <div class="col-md-5"> 
    <img src="/img/Logo_Angkoet.jpg" alt="" width="40%">
    <h2></h2>
    <br><br>
    <p><b>Username</b></p>
    <form action="<?= base_url() ?>/register/submitregister" method="POST">
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
        <input type="password" class="form-control" id="cpassword" placeholder="Masukkan Konfirmasi Password" name="cpassword">
        <label for="cpassword">Confirm Password</label>
      </div>
      <p><b>No Handphone</b></p>
      <div class="form-floating mb-3 mt-3">
        <input type="text" class="form-control" id="namadepan" placeholder="Masukkan Nama Depan" name="namadepan">
        <label for="namadepan">No Handphone</label>
      </div>
      <p><b>Email</b></p>
      <div class="form-floating mb-3 mt-3">
        <input type="text" class="form-control" id="namabelakang" placeholder="Masukkan Nama Belakang" name="namabelakang">
        <label for="namabelakang">Email</label>
      </div>
      <button type="submit" class="btn btn-primary">Confirm</button>
    </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>