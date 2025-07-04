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
        'en' => '',
        'ar' => 'عمل',
        'dis' => ['en' => '', 'ar' => 'أعمال'],
    ],
    2 => [
        'en' => '',
        'ar' => 'مشروع',
        'dis' => ['en' => '', 'ar' => 'مشاريع'],
    ],
    3 => [
        'en' => '',
        'ar' => 'دورة',
        'dis' => ['en' => '', 'ar' => 'دورات'],
    ],
    4 => [
        'en' => '',
        'ar' => 'فعالية',
        'dis' => ['en' => '', 'ar' => 'فعاليات'],
    ],
];
?>
