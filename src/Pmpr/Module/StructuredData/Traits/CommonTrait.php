<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67ceddae29f34             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\StructuredData\Schema\Thing; use Pmpr\Module\StructuredData\StructuredData; trait CommonTrait { public function ycqquoiyyuesegsy($sycgeiyakseiumqy = false, $yyimiwcuegayoskq = null) : string { if ($sycgeiyakseiumqy) { $migiiksoiymissge = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(); } else { if (!$yyimiwcuegayoskq) { $yyimiwcuegayoskq = $this->caokeucsksukesyo()->kyqakacqeumicgag()->iqoacwuiemooiysg(); } $migiiksoiymissge = $yyimiwcuegayoskq->ycqquoiyyuesegsy(); } return (string) $this->ocksiywmkyaqseou(StructuredData::ocmiuacywmgycowk . 'markup_permalink', $migiiksoiymissge); } public function yuaukuikuewwqumk($aaqqkgyougeiueyq, $qscuacuysiqsossk = false) { if ($aaqqkgyougeiueyq instanceof Thing) { $sqeykgyoooqysmca = strtolower($aaqqkgyougeiueyq->gueasuouwqysmomu()); $aaqqkgyougeiueyq = $this->ocksiywmkyaqseou(StructuredData::ocmiuacywmgycowk . 'before_render_schema', $aaqqkgyougeiueyq); $aaqqkgyougeiueyq = $this->ocksiywmkyaqseou(StructuredData::ocmiuacywmgycowk . "before_render_{$sqeykgyoooqysmca}_schema", $aaqqkgyougeiueyq); $aaqqkgyougeiueyq = $aaqqkgyougeiueyq->kmykkqwsssqqmwmg([], $this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()); } $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); if ('' !== $aaqqkgyougeiueyq && !is_null($aaqqkgyougeiueyq)) { if ($qscuacuysiqsossk) { $mymggmkssycumueo[] = $yyauwyaeewsickwk->queuakuqucciemcc($aaqqkgyougeiueyq); } else { echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ssqqsemoqaeqcqka("{$aaqqkgyougeiueyq}\n", [Constants::squoamkioomemiyi => StructuredData::amgecouwceeaomww]); } if ($qscuacuysiqsossk && !empty($mymggmkssycumueo)) { if (1 === count($mymggmkssycumueo)) { $mymggmkssycumueo = reset($mymggmkssycumueo); } if ($this->caokeucsksukesyo()->eiwcuqigayigimak()->esoowymaimwcuecq()) { $qiouiwasaauyaaue = JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT; } else { $qiouiwasaauyaaue = JSON_UNESCAPED_SLASHES; } print $yyauwyaeewsickwk->wegeuqkaeuusoike($mymggmkssycumueo, $qiouiwasaauyaaue); } } } }
