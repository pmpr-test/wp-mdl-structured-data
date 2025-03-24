<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e1693ca0336             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema; use Pmpr\Module\StructuredData\Schema\Action\Action; use Pmpr\Module\StructuredData\Schema\CreativeWork\MediaObject\ImageObject; class Thing extends Base { protected ?string $url = null; protected ?string $name = null; protected $image = null; protected $mainEntityOfPage = null; protected ?string $identifier = null; protected ?string $description = null; protected ?string $alternateName = null; protected ?Action $potentialAction = null; protected array $sameAs = []; public function eiswegiqykyigwig() : ?string { return $this->identifier; } public function siiuycgkowwuyuka(?string $owqaeesoaygymmcy) { $this->identifier = $owqaeesoaygymmcy; return $this; } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function usuqmwksoeaayaig(?string $ymqmyyeuycgmigyo) { $this->name = $ymqmyyeuycgmigyo; return $this; } public function meqceykmywmqgoym() : ?string { return $this->description; } public function gucwmccyimoagwcm(?string $ukwokcuqauuosmoo) { $this->description = strip_shortcodes(strip_tags((string) $ukwokcuqauuosmoo)); return $this; } public function oiucukewkckkwiqc() : ?string { return $this->url; } public function boucusiemiykwime(?string $eeamcawaiqocomwy) { $this->url = $eeamcawaiqocomwy; return $this; } public function gowiaikecoyuieic(string $scukiocsysuaqwoy) : Thing { $this->alternateName = $scukiocsysuaqwoy; return $this; } public function osmigsawqmkissoy() : string { return $this->alternateName; } public function uqeimkauiqaemkio(Action $yuqosykcmykcgayi) : Thing { $this->potentialAction = $yuqosykcmykcgayi; return $this; } public function cuiwyawscgeoeqas() : Action { return $this->potentialAction; } public function gqiiwauggswiogqy($smqakouyugyoecee) { $this->mainEntityOfPage = $smqakouyugyoecee; return $this; } public function ysmuiiiomckwykya() { return $this->mainEntityOfPage; } public function mwiamauscyiwogsu($mcqieaigyeeyaksm) : self { $this->image = $mcqieaigyeeyaksm; return $this; } public function qaeeusqkgwagwaqc() { return $this->image; } public function yuikseiqmmkcisas() : array { return $this->sameAs; } public function sceiycyikekgiqgg(?string $eeamcawaiqocomwy) : self { if ($eeamcawaiqocomwy) { $this->sameAs[] = $eeamcawaiqocomwy; } return $this; } public function qeqwyeuussowiaac(?array $auwuoyyagaiegwae) : self { foreach ($auwuoyyagaiegwae as $eeamcawaiqocomwy) { $this->sceiycyikekgiqgg($eeamcawaiqocomwy); } return $this; } }
