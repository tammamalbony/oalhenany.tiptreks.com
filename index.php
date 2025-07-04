<?php require_once "config.php"; require_once "user_data.php"; require_once "website_data.php"; ?>
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
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center" style="">
    <div class="hero-container" data-aos="fade-in" dir="<?php echo $lang === 'ar' ? 'rtl' : 'ltr'; ?>">
      <h1><?php echo langText($names); ?></h1>
      <p>
        <span class="typed" dir="<?php echo $lang === 'ar' ? 'rtl' : 'ltr'; ?>" data-typed-items="<?php echo implode(' , ', array_map('langText', $heroItems)); ?>"></span>
      </p>
    </div>
  </section><!-- End Hero -->
  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="section-title">
          <h2><?php echo langText($sectionTitles['vision']); ?></h2>
          <div dir="<?php echo $lang === 'ar' ? 'rtl' : 'ltr'; ?>">
            <?php foreach ($visionPoints as $v) { ?>
              <i class="bi bi-caret-left-fill text-success"></i><span> <?php echo langText($v); ?></span></br>
            <?php } ?>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-right text-white bg" dir="rtl" id="About_Edu">
            <style>
              #About_Edu h3,
              #About_Edu h4,
              #About_Edu h5 {
                color: #fff;
                font-family: "Raleway", sans-serif;
              }

              #About_Edu {
                background-color: #043042;
                border-top-right-radius: 25px;
                border-top-left-radius: 25px;
                border: #288008 solid 5px !important;
              }
            </style>
            <?php foreach ($aboutEdu as $item) { ?>
              <h4><i class="bi <?php echo $item['icon']; ?> mx-2 text-success"></i><?php echo langText($item['text']); ?></h4>
            <?php } ?>
          </div>
          <div class="col-lg-4" data-aos="fade-right">
            <img src="./Pro/profile.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">

            <ul class="fst-italic" dir="<?php echo $lang === 'ar' ? 'rtl' : 'ltr'; ?>">
              <?php foreach ($aboutHighlights as $h) { ?>
                <li> &#9679; <?php echo langText($h); ?></li>
              <?php } ?>
            </ul>
            <div class="row">
              <div class="col-lg-6">
                <ul dir="<?php echo $lang === 'ar' ? 'rtl' : 'ltr'; ?>">
                  <?php foreach ($contactInfoLeft as $info) { ?>
                    <li><i class="bi <?php echo $info['icon']; ?>"></i> <strong><?php echo langText($info['label']); ?></strong>
                      <?php if(isset($info['href'])) echo '<a href="'.$info['href'].'">'; ?>
                      <span<?php if(isset($info['ltr'])) echo ' dir="ltr"'; ?>><?php echo $info['text']; ?></span>
                      <?php if(isset($info['href'])) echo '</a>'; ?>
                    </li>
                  <?php } ?>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul dir="<?php echo $lang === 'ar' ? 'rtl' : 'ltr'; ?>">
                  <?php foreach ($contactInfoRight as $info) { ?>
                    <li><i class="bi <?php echo $info['icon']; ?>"></i> <strong><?php echo langText($info['label']); ?></strong>
                      <span><?php echo $info['text']; ?></span>
                    </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
            <p dir="<?php echo $lang === 'ar' ? 'rtl' : 'ltr'; ?>">
              <?php echo langText($aboutConclusion); ?>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container">
        <div class="section-title">
          <h2><?php echo langText($sectionTitles['facts']); ?></h2>
          <p><?php echo langText($sectionDescriptions['facts']); ?></p>
        </div>
        <div class="row no-gutters">
          <?php foreach ($counterData as $item) {
            echo '<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                          <div class="count-box">
                            <i class="bi ' . $item['icon'] . '"></i>
                            <span data-purecounter-start="' . $item['start'] . '" data-purecounter-end="' . $item['end'] . '" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>' . langText($item['label']) . '</strong></p>
                          </div>
                        </div>';
          } ?>
        </div>
      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">
        <style>
          #skills {
            border-top-right-radius: 25px;
            border-top-left-radius: 25px;
          }
        </style>
        <div class="section-title">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <h2><?php echo langText($sectionTitles['skills']); ?></h2>
              </div>
              <div class="col-md-8">
                <ul dir="<?php echo $lang === 'ar' ? 'rtl' : 'ltr'; ?>">
                  <?php foreach ($skillsIntro as $line) { ?>
                    <li><?php echo langText($line); ?></li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>


        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">
            <?php foreach ($skills[1] as $skill) {
              $name = langText($skill['name']);
              $percentage = $skill['value'];
              echo '<div class="progress">
                      <span class="skill">' . $name . ' <i class="val">' . $percentage . '%</i></span>
                        <div class="progress-bar-wrap">
                          <div class="progress-bar" role="progressbar" aria-valuenow="' . $percentage . '" aria-valuemin="0" aria-valuemax="100">
                          </div>
                      </div>
                    </div>';
            } ?>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <?php foreach ($skills[2] as $skill) {
              $name = langText($skill['name']);
              $percentage = $skill['value'];
              echo '<div class="progress">
                      <span class="skill">' . $name . ' <i class="val">' . $percentage . '%</i></span>
                        <div class="progress-bar-wrap">
                          <div class="progress-bar" role="progressbar" aria-valuenow="' . $percentage . '" aria-valuemin="0" aria-valuemax="100">
                          </div>
                      </div>
                    </div>';
            } ?>
          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <h2><?php echo langText($sectionTitles['resume']); ?></h2>
              </div>
              <div class="col-md-8">
                <ul dir="<?php echo $lang === 'ar' ? 'rtl' : 'ltr'; ?>">
                  <?php foreach ($resumeIntroPoints as $p) { ?>
                    <li><?php echo langText($p); ?></li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title"><?php echo langText($sectionTitles['resumeSummary']); ?></h3>
            <div class="resume-item pb-0">
              <h4><?php echo langText($names); ?> </h4>
              <p><em><?php echo langText($resumeNationality); ?></em></p>
              <ul>
                <?php foreach ($resumeHighlights as $item) { ?>
                  <li><?php echo langText($item); ?></li>
                <?php } ?>
              </ul>
            </div>

            <h3 class="resume-title"><?php echo langText($sectionTitles['education']); ?></h3>
            <?php
            foreach ($education as $item) {
              echo '<div class="resume-item">'
                    . '<h4>' . langText($item["title"]) . '</h4>'
                    . '<h5>' . $item["year"] . '</h5>'
                    . '<p><em>' . langText($item["university"]) . '</em></p>'
                    . '<p>' . langText($item["description"]) . '</p>'
                  . '</div>';
            }
            ?>
            <h3 class="resume-title"><?php echo langText($sectionTitles['courses']); ?></h3>
            <?php
            foreach ($courses as $course) {
              $desc = is_array($course["description"]) ? langText($course["description"]) : $course["description"];
              echo '<div class="resume-item">'
                      . '<h4>' . langText($course["title"]) . '</h4>'
                      . '<h5>' . $course["date"] . '</h5>'
                      . '<p><em>' . langText($course["organization"]) . '</em></p>'
                      . '<p>' . $desc . '</p>'
                    . '</div>';
            }
            ?>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title"><?php echo langText($sectionTitles['experience']); ?></h3>
            <?php foreach ($expersinces as $item) {
              echo '<div class="resume-item">'
                    . '<h4>' . langText($item["location"]) . '</h4>'
                    . '<h5>' . $item["date"] . '</h5>'
                    . '<p><em>' . langText($item["title"]) . '</em></p>';
              if (!empty($item["description"])) {
                echo '<ul dir="' . ($lang === 'ar' ? 'rtl' : 'ltr') . '">';
                foreach ($item["description"] as $desc) {
                  echo '<li>' . langText($desc) . '</li>';
                }
                echo '</ul>';
              }
              echo '</div>';
            } ?>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2><?php echo langText($sectionTitles['portfolio']); ?></h2>
          <p><?php echo langText($sectionDescriptions['portfolio']); ?></p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active"><?php echo langText($portfolioLabels['all']); ?></li>
              <?php foreach ($Cats as $cat => $catname) { ?>
                <li data-filter='.filter-<?php echo $catFilters[$cat]; ?>'><?php echo langText($catname['dis']); ?></li>
              <?php } ?>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <?php foreach ($Main as $G => $item) { ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $item['T'] ?>">
            <div class="portfolio-wrap">
              <div class="card mb-3">
                <img src="<?php echo $rootlink ."/". $item['I'] . ".jpg" ; ?>" class="img-fluid" alt="">
                <div class="card-body">
                  <h5 class="card-title">
                    <?php echo $item['S']; ?>
                  </h5>
                  <p class="card-text"></p>
                  <p class="card-text"><small class="text-body-secondary"></small></p>
                </div>
              </div>
              <div class="portfolio-links ">
                <a href="<?php echo $rootlink ."/". $item['I'] . " .jpg"; ?>" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" data-title="
                  <?php echo $item['S'] ?>"><i class="bi bi-zoom-in"></i>
                </a>
                <a href="portfolio-details.php?G=<?php echo $G; ?>" title="<?php echo langText($uiLabels['moreDetails']); ?>"><i
                    class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          <?php
          } ?>


        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="section-title">
          <h2><?php echo langText($sectionTitles['services']); ?></h2>
          <p></p>
        </div>
        <div class="row">
          <?php
          foreach ($services as $service):
            ?>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi <?php echo $service['icon']; ?>"></i></div>
            <h4 class="title"><a href="<?php echo $service['link']; ?>">
                <?php echo langText($service['title']); ?>
              </a></h4>
            <p class="description">
              <?php echo langText($service['description']); ?>
            </p>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <?php

    ?>
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">
        <div class="section-title">
          <h2><?php echo langText($sectionTitles['goals']); ?></h2>
          <p><?php echo langText($sectionDescriptions['goals']); ?></p>
        </div>
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <?php foreach ($Goals as $Goal): ?>
            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <?php echo langText($Goal['quote']); ?>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <i class="bi bi-<?php echo $Goal['circle']; ?>-circle"></i>
                <h3>
                  <?php echo langText($Goal['title']); ?>
                </h3>
                <h4>
                  <?php echo langText($Goal['subtitle']); ?>
                </h4>
              </div>
            </div><!-- End testimonial item -->
            <?php endforeach; ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->
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