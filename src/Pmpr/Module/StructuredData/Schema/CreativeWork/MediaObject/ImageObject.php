<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c839d2684ee             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork\MediaObject; use Pmpr\Module\StructuredData\Schema\Intangible\StructuredValue\PropertyValue; class ImageObject extends MediaObject { protected $caption = null; protected $exifData = null; protected ?ImageObject $thumbnail = null; protected function omsioukysssesasy($aiooqyausygaasqm) { $eeamcawaiqocomwy = ''; $qeswwaqqsyymqawg = 100; $cswemwoyesycwkuq = 100; if ($aiooqyausygaasqm) { if (!is_array($aiooqyausygaasqm)) { $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); $mcqieaigyeeyaksm = $eaeiswmwiqewicoc->uikkssqcoewckces($aiooqyausygaasqm, 'full'); if (!$mcqieaigyeeyaksm) { $mcqieaigyeeyaksm = $eaeiswmwiqewicoc->uikkssqcoewckces($this->ocksiywmkyaqseou('get_image_placeholder_id', 0), 'full'); } } else { $mcqieaigyeeyaksm = $aiooqyausygaasqm; } if ($mcqieaigyeeyaksm && is_array($mcqieaigyeeyaksm)) { $eeamcawaiqocomwy = $mcqieaigyeeyaksm[0]; $qeswwaqqsyymqawg = $mcqieaigyeeyaksm[1]; $cswemwoyesycwkuq = $mcqieaigyeeyaksm[2]; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aiooqyausygaasqm = $seumokooiykcomco->get($aiooqyausygaasqm); $this->usuqmwksoeaayaig($seumokooiykcomco->qcgakseyaikigqco($aiooqyausygaasqm)); } $this->esyyaomkkeccysos($qeswwaqqsyymqawg)->seiwcgsykwcukmsc($cswemwoyesycwkuq)->boucusiemiykwime($eeamcawaiqocomwy); } public function cqcsquysckuaewym() { return $this->caption; } public function skcuoiemgyoacmus($oeceqaaausgeosyu) { $this->caption = $oeceqaaausgeosyu; return $this; } public function symiamcqqasoqewe() { return $this->exifData; } public function qymmgmuqsieomcsm($umgeyqqiekcuqiky) { $this->exifData = $umgeyqqiekcuqiky; return $this; } public function smwweookeqkiiygs() : ImageObject { return $this->thumbnail; } public function oscqyoeskqmekcyo(ImageObject $uickqscmwgggsmgy) : ImageObject { $this->thumbnail = $uickqscmwgggsmgy; return $this; } }
