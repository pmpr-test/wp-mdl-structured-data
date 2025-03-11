<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d02130bfca9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork; use Pmpr\Module\StructuredData\Schema\CreativeWork\Article\SocialMediaPosting\BlogPosting; use Pmpr\Module\StructuredData\Schema\Intangible\ItemList\BreadcrumbList; class Blog extends CreativeWork { protected $breadcrumb; protected $blogPost = []; protected ?string $issn = null; public function csysgcguqaaisskm() : BlogPosting { return $this->blogPost; } public function mqqgwegyyqkgoqeg($kwyammwkyeoumeqi) : Blog { $this->blogPost = $kwyammwkyeoumeqi; return $this; } public function wwuogamoqmacsiqm(BlogPosting $aqsswsusswoyqakg) : Blog { $this->blogPost[] = $aqsswsusswoyqakg; return $this; } public function yyacwcaacimsoyyw() : ?string { return $this->issn; } public function eqqgkcgsewmucmku(?string $gmekmommwsucqkqa) : Blog { $this->issn = $gmekmommwsucqkqa; return $this; } }
