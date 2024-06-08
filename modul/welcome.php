<title>Beranda</title>
<h2 class='text text-primary'>Beranda</h2>
<hr>
<?php
$htgejala = mysqli_query($conn, "SELECT count(*) as total from gejala");
$dtgejala = mysqli_fetch_assoc($htgejala); ?>
<div class='row'>
  <div class='col-lg-3 col-xs-6'>
    <!-- small box -->
    <div class='small-box bg-aqua'>
      <div class='inner'>
        <h3> <?php echo $dtgejala["total"]; ?></h3>
        <p>Total Gejala</p>
      </div>
      <div class='icon'>
        <i class='ion ion-thermometer'></i>
      </div>
    </div>
  </div>
  <!-- ./col -->
  <?php
  $htpenyakit = mysqli_query($conn, "SELECT count(*) as total from penyakit");
  $dtpenyakit = mysqli_fetch_assoc($htpenyakit); ?>
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3> <?php echo $dtpenyakit["total"]; ?></h3>

        <p>Total Penyakit</p>
      </div>
      <div class="icon">
        <i class="ion ion-bug"></i>
      </div>
    </div>
  </div>
  <!-- ./col -->
  <?php
  $htpengetahuan = mysqli_query($conn, "SELECT count(*) as total from basis_pengetahuan");
  $dtpengetahuan = mysqli_fetch_assoc($htpengetahuan); ?>
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3><?php echo $dtpengetahuan["total"]; ?></h3>

        <p>Total Pengetahuan</p>
      </div>
      <div class="icon">
        <i class="ion ion-erlenmeyer-flask"></i>
      </div>
    </div>
  </div>
  <!-- ./col -->
  <?php
  $htadmin = mysqli_query($conn, "SELECT count(*) as total from admin");
  $dtadmin = mysqli_fetch_assoc($htadmin); ?>
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3> <?php echo $dtadmin["total"]; ?></h3>
        <p>Total Admin Pakar</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
    </div>
  </div>
  <!-- ./col -->
</div>

<body>
  <div class="ma3">
    <article class="tc w-75 center pt5 pb2 ph3 mw6-ns ba bw1 b--light-gray" style="background: #fff;">
      <h1 class="f3 f2-ns lh-title mt0 mb3" style="text-align: center;">Sistem Pakar</h1>
      <p class="f6 tl lh-copy silver" style="margin: 20px;">Sistem pakar yang mampu mendiagnosa gangguan mental berdasarkan pengetahuan yang diberikan langsung dari pakar/ahlinya dan melalui studi literatur. Penelitian ini menggunakan metode perhitungan Certainty Factor (CF) dalam menghitung tingkat kepakaran. Data penelitian ini terdiri dari data gejala dan data gangguan mental, serta data aturan. Sistem pakar pada organisasi ditujukan untuk penambahan value, peningkatan produktivitas serta area manajerial yang dapat mengambil kesimpulan dengan cepat.</p>
    </article>
  </div>
</body>