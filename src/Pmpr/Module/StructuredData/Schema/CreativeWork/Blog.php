<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ecad49867             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\StructuredData\Schema\CreativeWork\Article\SocialMediaPosting\BlogPosting; use Pmpr\Module\StructuredData\Schema\Intangible\ItemList\BreadcrumbList; class Blog extends CreativeWork { protected $breadcrumb; protected $blogPost = []; protected ?string $issn = null; public function __construct($goiqeyeaqmicqiky = true) { if (!$goiqeyeaqmicqiky) { goto ygcsmkuycoagwyou; } $oikyogsosqcyueay = $this->caokeucsksukesyo()->kyqakacqeumicgag()->cykwscocqwykiocm(); $this->eyqkogeiqauioamw($this->ycqquoiyyuesegsy())->mqqgwegyyqkgoqeg($this->iyssgoiwgwygeacg())->gucwmccyimoagwcm(get_bloginfo(Constants::eqkeooqcsscoggia))->kkqwmgsyqkqyqgge($this->weymkusmeageugsu($oikyogsosqcyueay))->akcmoueugeecmoqm($this->osswsoymmgisqmoy($oikyogsosqcyueay)); ygcsmkuycoagwyou: parent::__construct($goiqeyeaqmicqiky); } private function iyssgoiwgwygeacg() { $kwyammwkyeoumeqi = []; iggyqogweyosuikc: if (!have_posts()) { goto kqksuugcgsyeoayy; } the_post(); $kwyammwkyeoumeqi[] = new BlogPosting($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get()); goto iggyqogweyosuikc; kqksuugcgsyeoayy: return $kwyammwkyeoumeqi; } public function csysgcguqaaisskm() : BlogPosting { return $this->blogPost; } public function mqqgwegyyqkgoqeg($kwyammwkyeoumeqi) : Blog { $this->blogPost = $kwyammwkyeoumeqi; return $this; } public function wwuogamoqmacsiqm(BlogPosting $aqsswsusswoyqakg) : Blog { $this->blogPost[] = $aqsswsusswoyqakg; return $this; } public function yyacwcaacimsoyyw() : ?string { return $this->issn; } public function eqqgkcgsewmucmku(?string $gmekmommwsucqkqa) : Blog { $this->issn = $gmekmommwsucqkqa; return $this; } }
