<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c83a4e00921             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\StructuredData\DataType\Instruction; use Pmpr\Module\StructuredData\Schema\CreativeWork\MediaObject\ImageObject; use Pmpr\Module\StructuredData\Schema\Intangible\ItemList\HowToItem\HowToStep; use Pmpr\Module\StructuredData\Schema\Intangible\ItemList\HowToItem\HowToSupply; use Pmpr\Module\StructuredData\Schema\Intangible\ItemList\HowToItem\HowToTool; use Pmpr\Module\StructuredData\Schema\Intangible\StructuredValue\MonetaryAmount; use Pmpr\Module\StructuredData\Setting; class HowTo extends CreativeWork { protected $step = null; protected $tool = null; protected $supply = null; protected $estimatedCost = null; protected ?string $totalTime = null; public function scecwgoqwqwaamgq() { return $this->estimatedCost; } public function ecqgemyswuaswooa($cscgeyumqcskuukg) : self { $this->estimatedCost = $cscgeyumqcskuukg; return $this; } public function qscamskeayuqiosa() : ?string { return $this->totalTime; } public function oguioqiqyaioiuca(?string $sieqmaaeyogyamwk) : self { $this->totalTime = $sieqmaaeyogyamwk; return $this; } public function ocqmggygciqgeuek() { return $this->supply; } public function gquekoigiqqkwiym(?HowToSupply $egcsuueoacmkqwgy) { if (!is_array($this->ocqmggygciqgeuek())) { $this->supply = []; } $this->supply[] = $egcsuueoacmkqwgy; return $this; } public function mgakwmcemaaqcogk($egcsuueoacmkqwgy) : self { $this->supply = $egcsuueoacmkqwgy; return $this; } public function asgqmkcukouykiie() { return $this->tool; } public function gocqaqicsamyaeqc(?HowToTool $scsoukmiqiescesc) { if (!is_array($this->asgqmkcukouykiie())) { $this->tool = []; } $this->tool[] = $scsoukmiqiescesc; return $this; } public function ocqcogaoggsakqky($scsoukmiqiescesc) : self { $this->tool = $scsoukmiqiescesc; return $this; } public function ouwekiquyskqewwi() { return $this->step; } public function mgqggiyywoageqmo(?HowToStep $wyeyeaaekyoyimqu) { if (!is_array($this->ouwekiquyskqewwi())) { $this->step = []; } $this->step[] = $wyeyeaaekyoyimqu; return $this; } public function ccwiuiwgkmiwamyk($wyeyeaaekyoyimqu) : self { $this->step = $wyeyeaaekyoyimqu; return $this; } }
