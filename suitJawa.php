<?php

$pilihan = (isset($_GET["pilihan"])) ? $_GET["pilihan"] : null;

$comp = rand(1, 3);
if ($comp == 1) {
    $comp = 'orang';
} else if ($comp == 2) {
    $comp = 'gajah';
} else {
    $comp = 'semut';
}

if ($pilihan == $comp) {
    $hasil = 'SERI!';
} else if ($pilihan == 'orang') {
    $hasil = ($comp == 'gajah') ? 'KALAH!' : 'MENANG!';
} else if ($pilihan == 'gajah') {
    $hasil = ($comp == 'orang') ? 'MENANG!' : 'KALAH!';
} else {
    $hasil = ($comp == 'orang') ? 'KALAH!' : 'MENANG!';
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Bootstarp Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Suit Jawa</title>
</head>

<body class="bg">

    <div class="container mt-5 mb-3">
        <div class="row">
            <div class="col">
                <h1 class="judulSuit mb-5">SUIT JAWA</h1>
                <p class="font-monospace">Pilih salah satu di antara orang, semut, dan gajah untuk melawan komputer.</p>
            </div>
        </div>
    </div>

    <?php if ($pilihan != null) : ?>
        <?php if ($hasil == 'MENANG!') : ?>
            <div class="alert alert-success text-center mb-4" role="alert">
                <?= 'Kamu memilih ' . $pilihan . ' dan komputer memilih ' . $comp . ' maka hasilnya adalah ' . $hasil; ?>
            </div>
        <?php endif; ?>

        <?php if ($hasil == 'KALAH!') : ?>
            <div class="alert alert-danger text-center mb-4" role="alert">
                <?= 'Kamu memilih ' . $pilihan . ' dan komputer memilih ' . $comp . ' maka hasilnya adalah ' . $hasil; ?>
            </div>
        <?php endif; ?>

        <?php if ($hasil == 'SERI!') : ?>
            <div class="alert alert-secondary text-center mb-4" role="alert">
                <?= 'Kamu memilih ' . $pilihan . ' dan komputer memilih ' . $comp . ' maka hasilnya adalah ' . $hasil; ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <div class="container">
        <div class="row">
            <div class="position-relative">
                <div class="col float-end ulang position-absolute top-0 end-0">
                    <a href="suitjawa.php" class="text-dark"><span>&#10226;</span></a>
                    <h3>reset</h3>
                </div>
            </div>
        </div>
        <div class="row suitPilih">
            <div class="col orang">
                <a href="?pilihan=<?= 'orang'; ?>">
                    <img src="img/orang1.png" height="300px">
                    <span>orang</span>
                </a>
            </div>
            <div class="col gajah">
                <a href="?pilihan=<?= 'gajah'; ?>">
                    <img src="img/gajah.png" height="300px">
                    <span>gajah</span>
                </a>
            </div>
            <div class="col semut">
                <a href="?pilihan=<?= 'semut'; ?>">
                    <img src="img/semut.png" height="300px">
                    <span>semut</span>
                </a>
            </div>
        </div>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="/js/script.js"></script> -->

</body>

</html>