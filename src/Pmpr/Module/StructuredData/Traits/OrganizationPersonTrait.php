<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d01b9cd35dc             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Traits; use Pmpr\Module\StructuredData\DataType\Text; use Pmpr\Module\StructuredData\Schema\CreativeWork\EducationalOccupationalCredential; use Pmpr\Module\StructuredData\Schema\Intangible\StructuredValue\ContactPoint\ContactPoint; use Pmpr\Module\StructuredData\Schema\Organization\Organization; use Pmpr\Module\StructuredData\Schema\Person; use Pmpr\Module\StructuredData\Schema\Thing; trait OrganizationPersonTrait { protected $worksFor = null; protected $knowsAbout = null; protected $knowsLanguage = null; protected $memberOf = null; protected $hasCredential = null; protected $contactPoint = []; protected $interactionStatistic = []; public function saagkoumoeowsaas($uuygoqwweiomiwiu) : self { $this->worksFor = $uuygoqwweiomiwiu; return $this; } public function msikugwoyqeuskoa() { return $this->worksFor; } public function ceoksewkcagkoqua($kkieqgwmakgeomyq) : self { $this->knowsAbout = $kkieqgwmakgeomyq; return $this; } public function ymkqmuwescgusswy() { return $this->knowsAbout; } public function gqqesamawyysgegm($ymkomcgesksuuysk = []) : self { $this->knowsLanguage = $ymkomcgesksuuysk; return $this; } public function gwikgekskmkmscmq() { return $this->knowsLanguage; } public function skyueuykeugeygmm($auyeqaukayqowweu = []) : self { $this->memberOf = $auyeqaukayqowweu; return $this; } public function kmowwqyymiocskcc($auyeqaukayqowweu) : self { $this->memberOf[] = $auyeqaukayqowweu; return $this; } public function qigceesaakqoiokg() { return $this->memberOf; } public function wsqqcksweociaoug($isgiiuymqwceuiys) : void { $this->hasCredential = $isgiiuymqwceuiys; } public function mcaeeegmmcmkeyik(ContactPoint $wywawoqwkeackwck) : self { $this->contactPoint[] = $wywawoqwkeackwck; return $this; } public function mywssaqkcwgssomc($wywawoqwkeackwck) : self { $this->contactPoint = $wywawoqwkeackwck; return $this; } public function eeiacwskeoykcgmu() : array { return $this->contactPoint; } public function ioysyokmsskuwemg(InteractionCounter $qsquocuswksogcma) : self { $this->interactionStatistic[] = $qsquocuswksogcma; return $this; } public function mqouiausewimuomo() : array { return $this->interactionStatistic; } }
