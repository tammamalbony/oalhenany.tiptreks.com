<?php
//$rootlink = "https://oalhenany.000webhostapp.com/1/";
$rootlink = "./1";
$im = "w%20";

// Determine active language from cookie. Default is Arabic.
$lang = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : 'ar';

/**
 * Return a text string in the active language with Arabic fallback.
 *
 * @param array $item Array containing 'en' and 'ar' keys.
 * @return string
 */
function langText(array $item)
{
    global $lang;
    if (isset($item[$lang]) && $item[$lang] !== '') {
        return $item[$lang];
    }
    return $item['ar'] ?? '';
}

// Status texts
$statusTexts = [
    'A' => ['en' => '', 'ar' => 'بعد'],
    'B' => ['en' => '', 'ar' => 'قبل'],
    'D' => ['en' => '', 'ar' => 'مخطط'],
    'W' => ['en' => '', 'ar' => 'تنفيذ'],
    'R' => ['en' => '', 'ar' => 'جوية'],
    'N' => ['en' => '', 'ar' => 'نهاري'],
    'M' => ['en' => '', 'ar' => 'ليلي'],
];

// Portfolio categories
$Cats = [
    1 => [
        'en' => 'Work',
        'ar' => 'عمل',
        'dis' => ['en' => 'Works', 'ar' => 'أعمال'],
    ],
    2 => [
        'en' => 'Project',
        'ar' => 'مشروع',
        'dis' => ['en' => 'Projects', 'ar' => 'مشاريع'],
    ],
    3 => [
        'en' => 'Course',
        'ar' => 'دورة',
        'dis' => ['en' => 'Courses', 'ar' => 'دورات'],
    ],
    4 => [
        'en' => 'Event',
        'ar' => 'فعالية',
        'dis' => ['en' => 'Events', 'ar' => 'فعاليات'],
    ],
];


// Mapping used for Isotope filters
$catFilters = [
    1 => 'work',
    2 => 'project',
    3 => 'course',
    4 => 'event'
];
?>
