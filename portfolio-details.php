<?php require_once "config.php"; require_once "user_data.php"; require_once "website_data.php"; ?>

$G = 0;

if (isset($_GET['G'])) {
  $G = $_GET['G'];

} else {
  header("Location: index.php");
  exit;
}

if ($G == 0) {
  header("Location: index.php");
  exit;
}


$portfolioItems = [];
if ($G == 1) {
  $portfolioItems = addPortfolioItem($portfolioItems, '', array(1, 1));
} elseif ($G == 2) {
  $portfolioItems = addPortfolioItem($portfolioItems, '', array(1, 2));
} elseif ($G == 3) {
  $portfolioItems = addPortfolioItem($portfolioItems, 'D', array(2, 1));
  $portfolioItems = addPortfolioItem($portfolioItems, 'A', array(2, 1));
} elseif ($G == 4) {
  $portfolioItems = addPortfolioItem($portfolioItems, 'N', array(2, 2, 1));
  $portfolioItems = addPortfolioItem($portfolioItems, 'M', array(2, 2, 1));
  $portfolioItems = addPortfolioItem($portfolioItems, '', array(2, 2, 2));
  $portfolioItems = addPortfolioItem($portfolioItems, 'B', array(2, 2, 1));
  $portfolioItems = addPortfolioItem($portfolioItems, 'W', array(2, 2, 1));
  $portfolioItems = addPortfolioItem($portfolioItems, 'D', array(2, 2, 1));

} elseif ($G == 5) {
  $portfolioItems = addPortfolioItem($portfolioItems, 'B', array(2, 3));
  $portfolioItems = addPortfolioItem($portfolioItems, 'W', array(2, 3));
  $portfolioItems = addPortfolioItem($portfolioItems, 'A', array(2, 3));
  $portfolioItems = addPortfolioItem($portfolioItems, 'D', array(2, 3));
} elseif ($G == 6) {
  $portfolioItems = addPortfolioItem($portfolioItems, 'B', array(2, 4));
  $portfolioItems = addPortfolioItem($portfolioItems, 'A', array(2, 4));
  $portfolioItems = addPortfolioItem($portfolioItems, 'R', array(2, 4));
} elseif ($G == 7) {
  $portfolioItems = addPortfolioItem($portfolioItems, 'D', array(2, 5));
  $portfolioItems = addPortfolioItem($portfolioItems, 'B', array(2, 5));
  $portfolioItems = addPortfolioItem($portfolioItems, 'A', array(2, 5));
} elseif ($G == 8) {
  $portfolioItems = addPortfolioItem($portfolioItems, '', array(2, 6));
} elseif ($G == 9) {
  $portfolioItems = addPortfolioItem($portfolioItems, 'D', array(2, 7, 1));
  $portfolioItems = addPortfolioItem($portfolioItems, 'B', array(2, 7, 1));
  $portfolioItems = addPortfolioItem($portfolioItems, 'A', array(2, 7, 1));

  $portfolioItems = addPortfolioItem($portfolioItems, 'D', array(2, 7, 2));
  $portfolioItems = addPortfolioItem($portfolioItems, 'B', array(2, 7, 2));
  $portfolioItems = addPortfolioItem($portfolioItems, 'A', array(2, 7, 2));
} elseif ($G == 10) {
  $portfolioItems = addPortfolioItem($portfolioItems, 'B', array(2, 8));
  $portfolioItems = addPortfolioItem($portfolioItems, 'A', array(2, 8));
} elseif ($G == 11) {
  $portfolioItems = addPortfolioItem($portfolioItems, 'D', array(2, 9));
  $portfolioItems = addPortfolioItem($portfolioItems, 'A', array(2, 9));
} elseif ($G == 12) {
  $portfolioItems = addPortfolioItem($portfolioItems, 'B', array(2, 10));
  $portfolioItems = addPortfolioItem($portfolioItems, 'A', array(2, 10));
} elseif ($G == 13) {
  $portfolioItems = addPortfolioItem($portfolioItems, 'B', array(2, 11));
  $portfolioItems = addPortfolioItem($portfolioItems, 'A', array(2, 11));
} elseif ($G == 14) {
  $portfolioItems = addPortfolioItem($portfolioItems, '', array(2, 12));
} elseif ($G == 15) {
  $portfolioItems = addPortfolioItem($portfolioItems, 'D', array(2, 13));
} elseif ($G == 16) {
  $portfolioItems = addPortfolioItem($portfolioItems, 'B', array(2, 14));
  $portfolioItems = addPortfolioItem($portfolioItems, 'A', array(2, 14));
} elseif ($G == 17) {
  $portfolioItems = addPortfolioItem($portfolioItems, 'D', array(2, 15));
} elseif ($G == 18) {
  $portfolioItems = addPortfolioItem($portfolioItems, 'D', array(2, 16));
  $portfolioItems = addPortfolioItem($portfolioItems, 'B', array(2, 16));
  $portfolioItems = addPortfolioItem($portfolioItems, 'A', array(2, 16));
} elseif ($G == 19) {
  $portfolioItems = addPortfolioItem($portfolioItems, '', array(2, 17));
} elseif ($G == 20) {
  $portfolioItems = addPortfolioItem($portfolioItems, '', array(3, 1));
} elseif ($G == 21) {
  $portfolioItems = addPortfolioItem($portfolioItems, '', array(3, 2));
} elseif ($G == 22) {
  $portfolioItems = addPortfolioItem($portfolioItems, '', array(3, 3));
} elseif ($G == 23) {
  $portfolioItems = addPortfolioItem($portfolioItems, '', array(3, 4));
} elseif ($G == 24) {
  $portfolioItems = addPortfolioItem($portfolioItems, '', array(3, 5));

} elseif ($G == 25) {
  $portfolioItems = addPortfolioItem($portfolioItems, '', array(3, 6));
} elseif ($G == 26) {
  $portfolioItems = addPortfolioItem($portfolioItems, '', array(3, 7));
} elseif ($G == 27) {
  $portfolioItems = addPortfolioItem($portfolioItems, '', array(4, 1));
} elseif ($G == 28) {
  $portfolioItems = addPortfolioItem($portfolioItems, '', array(4, 2));
} elseif ($G == 29) {
  $portfolioItems = addPortfolioItem($portfolioItems, '', array(4, 3));
} elseif ($G == 30) {
  $portfolioItems = addPortfolioItem($portfolioItems, '', array(4, 4));
} else {
  header("Location: index.php");
  exit;
}


$value = reset($portfolioItems);

?>





<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" dir="<?php echo $lang === 'ar' ? 'rtl' : 'ltr'; ?>">

<head>
  <?php echo $head; ?>
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <?php echo $nav; ?>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>
            <?php echo $Main[$G]['S']; ?>
          </h2>
          <ol>
            <li><a href="index.php"><?php echo langText($uiLabels['home']); ?></a></li>
            <li>
              <?php echo $Main[$G]['S']; ?>
            </li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <style>
        .portfolio-details .portfolio-description,
        .portfolio-details {
          padding-top: 0rem !important;
        }

        .text-success {
          color: #00Af00 !important;
        }
      </style>
      <?php
      $first = true;
      foreach ($portfolioItems as $item) {
        if ($first) { ?>
          <div class="portfolio-description">
            <ul dir="<?php echo $lang === 'ar' ? 'rtl' : 'ltr'; ?>" class="m-5">
              <?php foreach ($item['description'] as $dis) { ?>
                <li><?php echo $dis; ?></li>
              <?php } ?>
            </ul>
          </div>
          <?php if (isset($item['dis']) && $item['dis'] != '') { ?>
            <h6 class='text-center'><span class='border rounded border-success py-1 px-5' style='color:white ;  background-color: #043042 !important;'><?php echo $item['dis']; ?></span></h6>
          <?php }
          $first = false;
        } ?>
        <div class="container mb-5">
          <div class="row gy-4">
            <div class="col-lg-8">
              <div class="portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">
                  <?php for ($i = 0; $i < $item['images']; $i++) { $j = $i + 1; ?>
                    <div class="swiper-slide text-center">
                      <img src="<?php echo $item['root'] . '(' . $j . ').jpg'; ?>" alt="" class="img-fluid" style="max-height:50vh ;width:auto">
                    </div>
                  <?php } ?>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="portfolio-info">
                <h3><?php echo $item['SD']; ?></h3>
                <ul dir="<?php echo $lang === 'ar' ? 'rtl' : 'ltr'; ?>">
                  <li><strong><?php echo langText($portfolioLabels['category']); ?></strong> : <?php echo $item['category']; ?></li>
                  <li><strong><?php echo langText($portfolioLabels['description']); ?></strong> : <?php echo $item['SD']; ?></li>
                  <?php if (isset($statusTexts[$item['projectStatu']])) { ?>
                    <li><strong><?php echo langText($portfolioLabels['status']); ?></strong> : <?php echo langText($statusTexts[$item['projectStatu']]); ?></li>
                  <?php } elseif (isset($item['projectStatu']) && $item['projectStatu'] != '') { ?>
                    <li><strong><?php echo langText($portfolioLabels['status']); ?></strong> : <?php echo $item['projectStatu']; ?></li>
                  <?php } ?>
                  <?php if (isset($item['area']) && $item['area'] != '') { ?>
                    <li><strong><?php echo langText($portfolioLabels['area']); ?></strong> : <?php echo $item['area']; ?></li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>


      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <?php echo $footer; ?>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="lang-switch" class="position-fixed bottom-0 <?php echo $lang === 'ar' ? 'start-0' : 'end-0'; ?> m-3">
    <button class="btn btn-success rounded-circle lang-switch-btn" id="switch-lang-btn">
      <?php echo $lang === 'ar' ? 'EN' : 'ع'; ?>
    </button>
  </div>
  <script>
    document.querySelectorAll('.lang-switch-btn').forEach(function(btn){
      btn.addEventListener('click', function(){
        var newLang = '<?php echo $lang; ?>' === 'ar' ? 'en' : 'ar';
        document.cookie = 'lang=' + newLang + '; path=/; max-age=31536000';
        location.reload();
      });
    });
  </script>

  <!-- Vendor JS Files -->
  <?php echo $end; ?>

</body>

</html>