<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ecad49867             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork\MediaObject; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\StructuredData\Schema\Intangible\StructuredValue\PropertyValue; use WP_Term; use WP_User; class ImageObject extends MediaObject { protected $caption = null; protected $exifData = null; protected ?ImageObject $thumbnail = null; public function __construct($ccamueccusigaaio = null, $goiqeyeaqmicqiky = true) { if (!$goiqeyeaqmicqiky) { goto eeqesooyqagwawae; } if ($ccamueccusigaaio instanceof WP_User) { goto soqqemyioggmoakg; } if ($ccamueccusigaaio instanceof WP_Term) { goto qkcyqocqqwmqgqww; } if ($this->caokeucsksukesyo()->iqsmaqoiukeasukw()->qecqsmowoqmwgagu($ccamueccusigaaio)) { goto qqewoyookaskiuek; } $aiooqyausygaasqm = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->usieywkaugusugwm($ccamueccusigaaio); goto ssoucoucsgccekwe; qqewoyookaskiuek: $aiooqyausygaasqm = $ccamueccusigaaio; ssoucoucsgccekwe: goto miyqyeiwquwsacsm; qkcyqocqqwmqgqww: $aiooqyausygaasqm = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->usieywkaugusugwm($ccamueccusigaaio); miyqyeiwquwsacsm: if ($aiooqyausygaasqm) { goto ywqgcegomwaiuquc; } if ($ewgwqamkygiqaawc = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->souwykwwmyygqyqi($ccamueccusigaaio)) { goto wmmggowmigekyoso; } goto eegqyykygiccaoeo; ywqgcegomwaiuquc: $this->omsioukysssesasy($aiooqyausygaasqm); goto eegqyykygiccaoeo; wmmggowmigekyoso: $wwgucssaecqekuek = $this->caokeucsksukesyo()->gkksucgseqqemesc()->ccekeuwwqqoiwuwy($ewgwqamkygiqaawc, "\x69\155\x67"); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $this->omsioukysssesasy([$gkyciwoiiisgywcs->get($wwgucssaecqekuek, "\163\x72\143"), $gkyciwoiiisgywcs->get($wwgucssaecqekuek, "\x77\x69\x64\x74\150"), $gkyciwoiiisgywcs->get($wwgucssaecqekuek, "\150\145\x69\147\150\164")]); eegqyykygiccaoeo: goto acaqummmoyiemqss; soqqemyioggmoakg: $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $oiegiwogmwmawkeo = 96; $ogomymegcoacqisg = $ewgmommeawggyaek->aeymcyaqkmmukomc($ewgmommeawggyaek->igawqaomowicuayw(Constants::akoagooquksouwka, $ccamueccusigaaio), [Constants::waguuiqqgsysuukq => $oiegiwogmwmawkeo]); $aiooqyausygaasqm = [$ogomymegcoacqisg, $oiegiwogmwmawkeo, $oiegiwogmwmawkeo]; acaqummmoyiemqss: if ($this->suegwaomueaiseeo()) { goto suswcqoyyqkkquuo; } $aiooqyausygaasqm = $this->ocksiywmkyaqseou("\x67\145\x74\137\151\x6d\141\147\145\x5f\x70\154\141\x63\145\x68\x6f\x6c\144\x65\162\137\151\144", ''); $this->omsioukysssesasy($aiooqyausygaasqm); suswcqoyyqkkquuo: $this->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->oockkiieqcwiocga($aiooqyausygaasqm)->qmueseocuuekommo($this->suegwaomueaiseeo())); eeqesooyqagwawae: parent::__construct($goiqeyeaqmicqiky); } protected function omsioukysssesasy($aiooqyausygaasqm) { $eeamcawaiqocomwy = ''; $qeswwaqqsyymqawg = 100; $cswemwoyesycwkuq = 100; if (!$aiooqyausygaasqm) { goto kymkucucyeoeikim; } if (!is_array($aiooqyausygaasqm)) { goto foeeqckqsyockkak; } $mcqieaigyeeyaksm = $aiooqyausygaasqm; goto iekumemscwieugqw; foeeqckqsyockkak: $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); $mcqieaigyeeyaksm = $eaeiswmwiqewicoc->uikkssqcoewckces($aiooqyausygaasqm, "\x66\x75\154\x6c"); if ($mcqieaigyeeyaksm) { goto oqugqwcyomiaaoqu; } $mcqieaigyeeyaksm = $eaeiswmwiqewicoc->uikkssqcoewckces($this->ocksiywmkyaqseou("\x67\145\164\x5f\x69\155\141\147\145\x5f\x70\x6c\141\143\145\150\157\x6c\x64\145\x72\137\151\144", 0), "\146\165\154\154"); oqugqwcyomiaaoqu: iekumemscwieugqw: if (!($mcqieaigyeeyaksm && is_array($mcqieaigyeeyaksm))) { goto hoeeyiowekaeemko; } $eeamcawaiqocomwy = $mcqieaigyeeyaksm[0]; $qeswwaqqsyymqawg = $mcqieaigyeeyaksm[1]; $cswemwoyesycwkuq = $mcqieaigyeeyaksm[2]; hoeeyiowekaeemko: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aiooqyausygaasqm = $seumokooiykcomco->get($aiooqyausygaasqm); $this->usuqmwksoeaayaig($seumokooiykcomco->qcgakseyaikigqco($aiooqyausygaasqm)); kymkucucyeoeikim: $this->esyyaomkkeccysos($qeswwaqqsyymqawg)->seiwcgsykwcukmsc($cswemwoyesycwkuq)->eyqkogeiqauioamw($eeamcawaiqocomwy); } public function cqcsquysckuaewym() { return $this->caption; } public function skcuoiemgyoacmus($oeceqaaausgeosyu) { $this->caption = $oeceqaaausgeosyu; return $this; } public function symiamcqqasoqewe() { return $this->exifData; } public function qymmgmuqsieomcsm($umgeyqqiekcuqiky) { $this->exifData = $umgeyqqiekcuqiky; return $this; } public function smwweookeqkiiygs() : ImageObject { return $this->thumbnail; } public function oscqyoeskqmekcyo(ImageObject $uickqscmwgggsmgy) : ImageObject { $this->thumbnail = $uickqscmwgggsmgy; return $this; } }
