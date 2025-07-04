<?php
$uiLabels = [
    'home'        => ['en' => 'Home',          'ar' => 'الرئيسية'],
    'moreDetails' => ['en' => 'More Details', 'ar' => 'المزيد من التفاصيل'],
];

$sectionTitles = [
    'vision'        => ['en' => 'Vision',               'ar' => 'الرؤية'],
    'facts'         => ['en' => 'Facts & Statistics',  'ar' => 'أرقام و إحصائيات'],
    'skills'        => ['en' => 'Skills',               'ar' => 'المهارات'],
    'resume'        => ['en' => 'Resume',               'ar' => 'السيرة الذاتية'],
    'resumeSummary' => ['en' => 'Summary',              'ar' => 'الملخص'],
    'education'     => ['en' => 'Education',            'ar' => 'الدراسة'],
    'courses'       => ['en' => 'Training Courses',     'ar' => 'الدورات التدريبية'],
    'experience'    => ['en' => 'Experience',           'ar' => 'الخبرات'],
    'portfolio'     => ['en' => 'Portfolio',            'ar' => 'الأعمال'],
    'services'      => ['en' => 'General Info',         'ar' => 'معلومات عامة'],
    'goals'         => ['en' => 'Goals',                'ar' => 'الأهداف'],
];

$sectionDescriptions = [
    'facts'     => [
        'en' => 'Shows work and achievements',
        'ar' => 'توضح الأعمال و الإنجازات '
    ],
    'portfolio' => [
        'en' => 'A sample of documented works reflecting quality, precision in execution, and the planning principles followed.<br>',
        'ar' => 'عينة من الأعمال الموثقة لتعكس جودة العمل و الدقة بالتنفيذ و الأسس المتبعة بالتخطيط <br>'
    ],
    'goals'     => [
        'en' => 'Achieving goals is the fundamental step in determining the steps needed to realize my vision',
        'ar' => 'يعتبر تحقيق الأهداف هي الخطوة الأساسية لتحديد الخطوات التي يجب اتخاذها لتحقيق رؤيتي'
    ],
];

$portfolioLabels = [
    'category'    => ['en' => 'Category',     'ar' => 'الفئة'],
    'description' => ['en' => 'Description',  'ar' => 'الوصف'],
    'status'      => ['en' => 'Status',       'ar' => 'الحالة'],
    'area'        => ['en' => 'Design Area',  'ar' => 'المساحة التصميمية'],
    'all'         => ['en' => 'All',          'ar' => 'الكل'],
];

$navItems = [
    ['href' => './#hero',      'icon' => 'bx bx-home',         'label' => ['en' => 'Home',      'ar' => 'الرئيسية']],
    ['href' => './#about',     'icon' => 'bx bx-user',         'label' => ['en' => 'Vision',    'ar' => 'الرؤية']],
    ['href' => './#resume',    'icon' => 'bx bx-file-blank',   'label' => ['en' => 'Resume',    'ar' => 'السيرة الذاتية']],
    ['href' => './#portfolio', 'icon' => 'bx bx-book-content', 'label' => ['en' => 'Portfolio', 'ar' => 'الأعمال']],
];

function buildNav($items, $name) {
    $html = '<div class="d-flex flex-column">';
    $html .= '<div class="profile">';
    $html .= '<img src="./Pro/profile.jpg" alt="" class="img-fluid rounded-circle">';
    $html .= '<h1 class="text-light"><a href="index.php">' . $name . '</a></h1>';
    $html .= '<div class="social-links mt-3 text-center">';
    $html .= '<a href="https://wa.me/963994763404"><i class="bi bi-whatsapp"></i></a>';
    $html .= '<a href="https://www.facebook.com/profile.php?id=100063954043789"><i class="bx bxl-facebook"></i></a>';
    $html .= '<a href="https://m.me/omranalhenany"><i class="bi bi-messenger"></i></a>';
    $html .= '<a href="mailto:oalhenany@gmail.com"><i class="bi bi-envelope-at"></i></a>';
    $html .= '<a href="tel:+963994763404"><i class="bi bi-telephone"></i></a>';
    $html .= '</div></div>';
    $html .= '<nav id="navbar" class="nav-menu navbar"><ul>';
    $first = true;
    foreach ($items as $item) {
        $active = $first ? ' active' : '';
        $html .= '<li><a href="'.$item['href'].'" class="nav-link scrollto'.$active.'"><i class="'.$item['icon'].'"></i> <span>'.langText($item['label']).'</span></a></li>';
        $first = false;
    }
    $switch = ($GLOBALS['lang'] === 'ar') ? 'EN' : 'ع';
    $html .= '<li><a href="#" class="nav-link scrollto lang-switch-btn"><i class="bi bi-translate"></i> <span>'.$switch.'</span></a></li>';
    $html .= '</ul></nav><!-- .nav-menu --></div>';
    return $html;
}

$nav = buildNav($navItems, langText($names));

/**
 * Adds a new portfolio item to the existing portfolio items array.
 *
 * @param array $portfolioItems   The current portfolio items array.
 * @param array $all              The root information for the  portfolio items.
 * @param int   $projectStatu     The project status or identifier.
 * @param array $roots            The path in $all to the desired data.
 *
 * @return array                  The updated portfolio items array with the new item added.
 */
function addPortfolioItem($portfolioItems, $projectStatu, $roots)
{
    global $Cats, $im, $all, $rootlink, $statusTexts;
    $dataarray = $all;
    $dataroot  = "";
    $images    = 0;
    $area      = "";
    $dis       = "";

    foreach ($roots as $root) {
        $dataarray = $dataarray[$root];
        $dataroot .= "/" . $root;
    }

    if ($projectStatu === "") {
        $images   = $dataarray["E"];
        $dataroot = $rootlink . $dataroot . "/" . $im;
    } elseif (isset($statusTexts[$projectStatu])) {
        $images   = $dataarray[$projectStatu];
        $dataroot = $rootlink . $dataroot . "/" . $projectStatu . "/" . $im;
    } else {
        echo "<script>alert('Unexpected project status')</script>";
    }

    if (isset($dataarray['Area'])) {
        $area = $dataarray['Area'];
    }
    if (isset($dataarray['Dis'])) {
        $dis = $dataarray['Dis'];
    }

    $newItem = [
        'images'       => $images,
        'projectStatu' => $projectStatu,
        'description'  => $dataarray['L'],
        'root'         => $dataroot,
        'SD'           => $dataarray['S'],
        'category'     => langText($Cats[$roots[0]]),
        'area'         => $area,
        'dis'          => $dis,
    ];

    $updatedPortfolioItems = $portfolioItems;
    $updatedPortfolioItems[] = $newItem;

    return $updatedPortfolioItems;
}

$description  = implode(" ◦ ❖ ◦ ", array_map('langText', $heroItems));
$pageTitle    = langText($names);
$head         = <<<HTML
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>{$pageTitle}</title>
<meta name="description" content="$description" />
<meta property="og:title" content="{$pageTitle}" />
<meta property="og:url" content="https://www.oalhenany.com/" />
<meta property="og:description" content="$description" />
<meta property="og:image" content="https://oalhenany.com/assets/img/bg.png" />
<link href="assets/img/favicon.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" rel="stylesheet" >
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/userx.css" rel="stylesheet">
HTML;

$end = '
<script src="./assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="./assets/vendor/aos/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="./assets/vendor/glightbox/js/glightbox.js"></script>
<script src="./assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="./assets/vendor/typed.js/typed.umd.js"></script>
<script src="./assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="./assets/vendor/php-email-form/validate.js"></script>
<script src="assets/js/mainx.js"></script>';

$footer = '<div class="container">'
    . '<div class="copyright" dir="rtl">&copy; '
    . langText($GLOBALS['footer_data']['copyright']) . '</div>'
    . '<div class="credits" dir="rtl">' . langText($GLOBALS['footer_data']['credits']) . '</div>'
    . '<hr class="mx-2">'
    . '<h6 class="text-center text-success">' . langText($GLOBALS['footer_data']['note']) . '</h6>'
    . '</div>';
?>
