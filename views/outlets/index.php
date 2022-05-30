<?php
    // @include '../../controller/outlets/getOutlets.php';
    // var_dump($outlets);
    // die;
    @include '../../model/Outlet.php';
    $outlets = getOutlets();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  @include '../_includes/header.php';
  ?>
  <!-- Custom Style -->
  <link rel="stylesheet" href="../../css/outlet.css">

</head>

<body id="body-pd">

  <?php
  // $title = 'Outlets';
  @include '../_includes/side.php';
  ?>

  <!-- Content Boody -->
  <main>
    <!-- Coding disini -->
    <!-- start wrap list outlets -->
    <div class="container">
      <!-- baris pertama outlets -->
      <div class="list-outlet">
        <!-- outlet tambahan -->
        <a href='add-outlets.php' class="card btn-add">
          <i class="fa-solid fa-circle-plus"></i>
          <!-- <div class="card-body">
                    </div> -->
        </a>
        <!-- outlet pertama -->
        <?php foreach($outlets as $outlet) : ?>
        <div class="card">
          <img src="../../img/outlets_img/outlet-1.png" alt="Outlet 1" class="img-card">
          <div class="card-body">
            <h3><?= $outlet['kota']; ?></h3>
            <p><?= $outlet['alamat']; ?></p>
          </div>
        </div>
        <?php endforeach; ?>
    </div>
    <!-- end wrap list outlets -->

    <!-- end container outlets -->
  </main>
  <!-- End Content Body -->

  <?php
    @include '../_includes/footer.php';
  ?>

<?php if (isset($_GET['status']) && $_GET['status'] === 'success'): ?>
        <script>
            Swal.fire({
                icon: 'success',
                text: 'Outlet baru berhasil ditambahkan!',
            })
        </script>
    <?php endif; ?>

</body>

</html>