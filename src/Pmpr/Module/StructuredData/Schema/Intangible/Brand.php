<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae92b4957d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\Intangible; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\StructuredData\Setting; class Brand extends Intangible { protected $logo = null; protected $review = null; protected ?string $slogan = null; protected $aggregateRating = null; public function __construct($goiqeyeaqmicqiky = true) { $this->isGlobal = true; if (!$goiqeyeaqmicqiky) { goto kooskuwkuayiuose; } $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $this->wqkwkoysgkaaewkc(Setting::symcgieuakksimmu()->gckekgcikugasqwu())->usuqmwksoeaayaig($qkqgcaykemoiecma->ciqkaakiwsgqwiqu(Constants::NAME))->aayqioqmoaasosqc($qkqgcaykemoiecma->ciqkaakiwsgqwiqu(Constants::eqkeooqcsscoggia))->iaqckqwoiseyqaku(); kooskuwkuayiuose: parent::__construct($goiqeyeaqmicqiky); } public function oeaeiissukoeowwe() { return $this->aggregateRating; } public function nsqwikmawcqqyayk($gggmygsysokgmaiq) : self { $this->aggregateRating = $gggmygsysokgmaiq; return $this; } public function gckekgcikugasqwu() { return $this->logo; } public function wqkwkoysgkaaewkc($weowoqykiyuqcwam) { $this->logo = $weowoqykiyuqcwam; return $this; } public function yieewsuceqymoqeu() { return $this->review; } public function wacyaeigikuoaogy($qkcymeiwcsikkkkk) { $this->review = $qkcymeiwcsikkkkk; return $this; } public function qkmcugoswuqogqqk() { return $this->slogan; } public function aayqioqmoaasosqc($msmuuuiukkuoukoe) { $this->slogan = $msmuuuiukkuoukoe; return $this; } }
