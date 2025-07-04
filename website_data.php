<?php
$uiLabels = [
    'home' => 'Home',
    'moreDetails' => 'More Details'
];

$sectionTitles = [
    'vision' => 'الرؤية',
    'facts' => 'أرقام و إحصائيات',
    'skills' => 'المهارات',
    'resume' => 'السيرة الذاتية',
    'resumeSummary' => 'الملخص',
    'education' => 'الدراسة',
    'courses' => 'الدورات التدريبية',
    'experience' => 'الخبرات',
    'portfolio' => 'الأعمال',
    'services' => 'معلومات عامة',
    'goals' => 'الأهداف'
];

$sectionDescriptions = [
    'facts' => 'توضح الأعمال و الإنجازات ',
    'portfolio' => 'عينة من الأعمال الموثقة لتعكس جودة العمل و الدقة بالتنفيذ و الأسس المتبعة بالتخطيط <br>',
    'goals' => 'يعتبر تحقيق الأهداف هي الخطوة الأساسية لتحديد الخطوات التي يجب اتخاذها لتحقيق رؤيتي'
];
$portfolioLabels = [
    'category' => 'الفئة',
    'description' => 'الوصف',
    'status' => 'الحالة',
    'area' => 'المساحة التصميمية',
    'all' => 'الكل'
];

$navItems = [
    ["href" => "./#hero", "icon" => "bx bx-home", "label" => "الرئيسية"],
    ["href" => "./#about", "icon" => "bx bx-user", "label" => "الرؤية"],
    ["href" => "./#resume", "icon" => "bx bx-file-blank", "label" => "السيرة الذاتية"],
    ["href" => "./#portfolio", "icon" => "bx bx-book-content", "label" => "الأعمال"],
    ["href" => "./#services", "icon" => "bx bx-server", "label" => "الخدمات"]
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
        $html .= '<li><a href="'.$item['href'].'" class="nav-link scrollto'.$active.'"><i class="'.$item['icon'].'"></i> <span>'.$item['label'].'</span></a></li>';
        $first = false;
    }
    $html .= '</ul></nav><!-- .nav-menu --></div>';
    return $html;
}

$nav = buildNav($navItems, $names['en']);
];


/**
 * Adds a new portfolio item to the existing portfolio items array.
 *
 * @param array $portfolioItems   The current portfolio items array.
 * @param array $all              The root information for the  portfolio items.
 * @param int $images             The number of images associated with the new item.
 * @param string $category        The category of the new portfolio item.
 * @param string $SD              The name of the client or company.
 * @param string $projectDate     The date of the project.
 * @param string $projectStatu    The project status or identifier.
 * @param array $description     A description of the new portfolio item.
 *
 * @return array                  The updated portfolio items array with the new item added.
 */
function addPortfolioItem($portfolioItems, $projectStatu, $roots)
{
    global $Cats;
    global $im;
    global $all;
    global $rootlink;
    global $statusTexts;
    $dataarray = $all;
    $dataroot = "";
    $images = 0;
    $area = "";
    $dis = "";
    foreach ($roots as $root) {
        $dataarray = $dataarray[$root];
        $dataroot = $dataroot . "/" . $root;
    }
    if ($projectStatu == "") {
        $images = $dataarray["E"];
        $dataroot = $rootlink . $dataroot . "/" . $im;
    } else if (isset($statusTexts[$projectStatu])) {
        $images = $dataarray[$projectStatu];
        $dataroot = $rootlink . $dataroot . "/" . $projectStatu . "/" . $im;
    } else {
        echo "<script> alert('else of statu')</script>";
    }
    if(isset($dataarray['Area'])){
        $area = $dataarray['Area'];
    }
    if(isset($dataarray['Dis'])){
        $dis = $dataarray['Dis'];
    }
    $newItem = [
        'images' => $images,
        'projectStatu' => $projectStatu,
        'description' => $dataarray['L'],
        'root' => $dataroot,
        'SD' => $dataarray['S'],
        'category' => $Cats[$roots[0]]["ar"],
        'area' => $area,
        'dis' => $dis
    ];
    /*
   'root' => $root,
      'images' => $images,
      'category' => $category,
      
      'projectDate' => $projectDate,
     
      'description' => $description,
    */
    // Add the new item to a copy of the portfolio
    $updatedPortfolioItems = $portfolioItems;
    $updatedPortfolioItems[] = $newItem;

    return $updatedPortfolioItems;
}
$description = implode(" ◦ ❖ ◦ ", $heroItems);
$head = <<<HTML
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>{$names['ar']}</title>
<meta name="description" content="$description" />
<meta property="og:title" content="{$names['en']}" />
<meta property="og:url" content="https://www.oalhenany.com/" />
<meta property="og:description" content="$description" />
<meta property="og:image" content="https://oalhenany.com/assets/img/bg.png" />
<link href="assets/img/favicon.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="./assets/vendor/glightbox/js/glightbox.js"></script>
<script src="./assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="./assets/vendor/typed.js/typed.umd.js"></script>
<script src="./assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="./assets/vendor/php-email-form/validate.js"></script>
<script src="assets/js/mainx.js"></script>';

$footer = '<div class="container">
<div class="copyright" dir="rtl">
  &copy; وكيل <strong><span> شركة رقي للتدريب الهندسي الاحترافي</span></strong>
</div>
<div class="credits" dir="rtl">
  مؤسسة اليسر <a href="http://www.alyousser.com/">للارتقاء الهندسي</a>
</div>
<hr class="mx-2">
<h6 class="text-center text-success">الوثائق والثبوتيات جاهزة عند الطلب لكافة الأعمال</h6>

</div>';
?>
