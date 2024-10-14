<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4b4ba3b83             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\Intangible\StructuredValue; class OpeningHoursSpecification extends StructuredValue { protected ?string $closes = null; protected array $dayOfWeek = []; protected ?string $opens = null; public function __construct($goiqeyeaqmicqiky = true) { $this->isGlobal = true; parent::__construct($goiqeyeaqmicqiky); } public function myaimoqqmacaimwa(string $oosqskcmwkkqicqw) : OpeningHoursSpecification { $this->closes = $oosqskcmwkkqicqw; return $this; } public function egesasokgqsywgci() : string { return $this->closes; } public function oiescoyaamcwgouw(array $aqsgkkiwsymikwse) : OpeningHoursSpecification { $this->dayOfWeek = $aqsgkkiwsymikwse; return $this; } public function gmekgkwiwsqeaaca() : array { return $this->dayOfWeek; } public function wsuymoguiayymgce(string $ikccqoeegmsscsmy) : OpeningHoursSpecification { $this->opens = $ikccqoeegmsscsmy; return $this; } public function ueywugaeakaqweok() : string { return $this->opens; } }
