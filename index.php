<?php require_once "config.php"; require_once "user_data.php"; require_once "website_data.php"; ?>
<!DOCTYPE html>
<html lang="en">

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
    <div class="hero-container" data-aos="fade-in" dir="rtl">
      <h1><?php echo $names['ar']; ?></h1>
      <p>
        <span class="typed" dir="rtl" data-typed-items="<?php echo implode(' , ', $heroItems); ?>"></span>
      </p>
    </div>
  </section><!-- End Hero -->
  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="section-title">
          <h2><?php echo $sectionTitles['vision']; ?></h2>
          <div dir="rtl">
            <?php foreach ($visionPoints as $v) { ?>
              <i class="bi bi-caret-left-fill text-success"></i><span> <?php echo $v; ?></span></br>
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
              <h4><i class="bi <?php echo $item['icon']; ?> mx-2 text-success"></i><?php echo $item['text']; ?></h4>
            <?php } ?>
          </div>
          <div class="col-lg-4" data-aos="fade-right">
            <img src="./Pro/profile.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">

            <ul class="fst-italic" dir="rtl">
              <?php foreach ($aboutHighlights as $h) { ?>
                <li> &#9679; <?php echo $h; ?></li>
              <?php } ?>
            </ul>
            <div class="row">
              <div class="col-lg-6">
                <ul dir="rtl">
                  <?php foreach ($contactInfoLeft as $info) { ?>
                    <li><i class="bi <?php echo $info['icon']; ?>"></i> <strong><?php echo $info['label']; ?></strong>
                      <?php if(isset($info['href'])) echo '<a href="'.$info['href'].'">'; ?>
                      <span<?php if(isset($info['ltr'])) echo ' dir="ltr"'; ?>><?php echo $info['text']; ?></span>
                      <?php if(isset($info['href'])) echo '</a>'; ?>
                    </li>
                  <?php } ?>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul dir="rtl">
                  <?php foreach ($contactInfoRight as $info) { ?>
                    <li><i class="bi <?php echo $info['icon']; ?>"></i> <strong><?php echo $info['label']; ?></strong>
                      <span><?php echo $info['text']; ?></span>
                    </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
            <p dir="rtl">
              <?php echo $aboutConclusion; ?>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container">
        <div class="section-title">
          <h2><?php echo $sectionTitles['facts']; ?></h2>
          <p><?php echo $sectionDescriptions['facts']; ?></p>
        </div>
        <div class="row no-gutters">
          <?php foreach ($counterData as $item) {
            echo '<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                          <div class="count-box">
                            <i class="bi ' . $item['icon'] . '"></i>
                            <span data-purecounter-start="' . $item['start'] . '" data-purecounter-end="' . $item['end'] . '" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>' . $item['label'] . '</strong></p>
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
                <h2><?php echo $sectionTitles['skills']; ?></h2>
              </div>
              <div class="col-md-8">
                <ul dir="rtl">
                  <?php foreach ($skillsIntro as $line) { ?>
                    <li><?php echo $line; ?></li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>


        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">
            <?php foreach ($skills[1] as $skill => $percentage) {
              echo '<div class="progress">
                      <span class="skill">' . $skill . ' <i class="val">' . $percentage . '%</i></span>
                        <div class="progress-bar-wrap">
                          <div class="progress-bar" role="progressbar" aria-valuenow="' . $percentage . '" aria-valuemin="0" aria-valuemax="100">
                          </div>
                      </div>
                    </div>';
            } ?>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <?php foreach ($skills[2] as $skill => $percentage) {
              echo '<div class="progress">
                      <span class="skill">' . $skill . ' <i class="val">' . $percentage . '%</i></span>
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
                <h2><?php echo $sectionTitles['resume']; ?></h2>
              </div>
              <div class="col-md-8">
                <ul dir="rtl">
                  <?php foreach ($resumeIntroPoints as $p) { ?>
                    <li><?php echo $p; ?></li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title"><?php echo $sectionTitles['resumeSummary']; ?></h3>
            <div class="resume-item pb-0">
              <h4><?php echo $names['ar']; ?> </h4>
              <p><em><?php echo $resumeNationality; ?></em></p>
              <ul>
                <?php foreach ($resumeHighlights as $item) { ?>
                  <li><?php echo $item; ?></li>
                <?php } ?>
              </ul>
            </div>

            <h3 class="resume-title"><?php echo $sectionTitles['education']; ?></h3>
            <?php
            foreach ($education as $item) {
              echo '<div class="resume-item">
                      <h4>' . $item["title"] . '</h4>
                      <h5>' . $item["year"] . '</h5>
                      <p><em>' . $item["university"] . '</em></p>
                      <p>' . $item["description"] . '</p>
                    </div>';
            }
            ?>
            <h3 class="resume-title"><?php echo $sectionTitles['courses']; ?></h3>
            <?php
            foreach ($courses as $course) {
              echo '<div class="resume-item">
                      <h4>' . $course["title"] . '</h4>
                      <h5>' . $course["date"] . '</h5>
                      <p><em>' . $course["organization"] . '</em></p>
                      <p>' . $course["description"] . '</p>
                    </div>';
            }
            ?>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title"><?php echo $sectionTitles['experience']; ?></h3>
            <?php foreach ($expersinces as $item) {
              echo '<div class="resume-item">
                            <h4>' . $item["location"] . '</h4>
                            <h5>' . $item["date"] . '</h5>
                            <p><em>' . $item["title"] . '</em></p>';
              if (!empty($item["description"])) {
                echo '<ul dir="rtl">';
                foreach ($item["description"] as $desc) {
                  echo '<li>' . $desc . '</li>';
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
          <h2><?php echo $sectionTitles['portfolio']; ?></h2>
          <p><?php echo $sectionDescriptions['portfolio']; ?></p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active"><?php echo $portfolioLabels['all']; ?></li>
              <?php foreach ($Cats as $cat => $catname) { 
              echo "<li data-filter='.filter-".$catname["en"]."'>".$catname["dis"]."</li>";
             } ?>
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
                <a href="portfolio-details.php?G=<?php echo $G; ?>" title="<?php echo $uiLabels['moreDetails']; ?>"><i
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
          <h2><?php echo $sectionTitles['services']; ?></h2>
          <p></p>
        </div>
        <div class="row">
          <?php
          foreach ($services as $service):
            ?>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi <?php echo $service['icon']; ?>"></i></div>
            <h4 class="title"><a href="<?php echo $service['link']; ?>">
                <?php echo $service['title']; ?>
              </a></h4>
            <p class="description">
              <?php echo $service['description']; ?>
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
          <h2><?php echo $sectionTitles['goals']; ?></h2>
          <p><?php echo $sectionDescriptions['goals']; ?></p>
        </div>
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <?php foreach ($Goals as $Goal): ?>
            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <?php echo $Goal['quote']; ?>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <i class="bi bi-<?php echo $Goal['circle']; ?>-circle"></i>
                <h3>
                  <?php echo $Goal['title']; ?>
                </h3>
                <h4>
                  <?php echo $Goal['subtitle']; ?>
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

  <!-- Vendor JS Files -->
  <?php echo $end; ?>

</body>

</html>