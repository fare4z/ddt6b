<?php
include 'function_profile.php';

$full_name = "Muhammad Fareez bin Borhanudin";
$username = "Fareez";
$email = "fareez@psp.edu.my";
$phone = "0145061447";
$position = "Pensyarah";
$nric = "020907025233";

?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Profil Pengguna</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
    <div class="main-body">
        <h2>Profil Saya</h2>
          <div class="row gutters-sm">

            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <!-- Gambar profil -->
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <!-- UserName -->
                      <h4><?php echo $username; ?></h4>
                      <p class="text-secondary mb-1"><?php echo $position; ?></p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama Penuh</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $full_name; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $email; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nombor Telefon</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $phone; ?>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nombor Kad Pengenalan</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $nric; ?>
                    </div>
                  </div>
                  <hr>

                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Jantina</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo get_jantina($nric); ?>
                    </div>
                  </div>
                  <hr>

                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Tarikh Lahir</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo date("d-M-Y", strtotime(get_dob($nric))); ?>
                    </div>
                  </div>
                  <hr>

                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Negeri Lahir</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo get_state($nric); ?>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="#">Kemaskini</a>
                    </div>
                  </div>
                </div>
              </div>




            </div>
          </div>

        </div>
    </div>

<style type="text/css">
body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

</style>

<script type="text/javascript">

</script>
</body>
</html>