<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae92b4957d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\MetaBox; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class FAQPage extends Tab { const sqgaeeagsegecugi = "\x66\141\161\x5f\155\x61\151\x6e\x5f\145\156\x74\151\164\x79"; public function ieoqyoeecukogies($post) { $oammesyieqmwuwyi = $this->seyyiqmgwymyumoq($post); if (!$oammesyieqmwuwyi) { goto mggeqkcksyaymcsa; } echo $this->iuygowkemiiwqmiw("\x66\x61\161\137\x6c\151\x73\164", [Constants::qgqyauaqwqmqseim => IconInterface::ucomcyskmkiqysee, Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi, Constants::qescuiwgsyuikume => __("\106\x41\x51", PR__MDL__STRUCTURED_DATA)]); mggeqkcksyaymcsa: parent::ieoqyoeecukogies($post); } public function seyyiqmgwymyumoq($post = null) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $seumokooiykcomco->get($post); $icwicymcioeyeyek = parent::seyyiqmgwymyumoq($post); if ($icwicymcioeyeyek) { goto wusciwkkckmqigms; } $agkmksicugiqcucq = []; if (!$post) { goto kqswcsysqawkcgye; } $kgcuukieymaqosmm = $seumokooiykcomco->igawqaomowicuayw(self::sqgaeeagsegecugi, $post); if (!($kgcuukieymaqosmm && is_array($kgcuukieymaqosmm))) { goto ewscugeuicukkycc; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($kgcuukieymaqosmm as $igqsaukqcqscimok) { $cgiaqqwoogcwuuwq = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::kuygeqomywoykkai); $wqckkkeieieqasqk = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::eeiymeksiysiuemu); if (!($cgiaqqwoogcwuuwq && $wqckkkeieieqasqk)) { goto eeyyskqsmquyquqw; } $agkmksicugiqcucq[] = [$cgiaqqwoogcwuuwq, $wqckkkeieieqasqk]; eeyyskqsmquyquqw: cgyakcqgugqgkqiw: } uegouoiuyoqkcscg: ewscugeuicukkycc: kqswcsysqawkcgye: $icwicymcioeyeyek = ConvertArray::wauqeqkcymgoceuy($agkmksicugiqcucq, [Constants::kuygeqomywoykkai, Constants::eeiymeksiysiuemu]); $this->mgoekicaagiaeuki($icwicymcioeyeyek); wusciwkkckmqigms: return $icwicymcioeyeyek; } public function aoukuouwimcigeqe($ywoucyskcquysiwc = []) { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $ywoucyskcquysiwc[] = $uuyucgkyusckoaeq->doeuiogekyiwgsgw("\x66\x61\x71\x5f\164\x61\142")->gswweykyogmsyawy(__("\x46\x41\x51", PR__MDL__STRUCTURED_DATA))->saemoowcasogykak(IconInterface::qscwsaqyuyomumoc)->mkksewyosgeumwsa($uuyucgkyusckoaeq->qqmgmgasauucoago(self::sqgaeeagsegecugi)->usosgsaaimqcysyk()->gswweykyogmsyawy(__("\111\x74\145\x6d\x73", PR__MDL__STRUCTURED_DATA))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::kuygeqomywoykkai)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\x51\x75\x65\163\x74\x69\157\156", PR__MDL__STRUCTURED_DATA)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->sciaycsmsiekqueg(Constants::eeiymeksiysiuemu)->qsecygiycssgacqs(5)->gsomueooycksswcy()->gswweykyogmsyawy(__("\x41\156\163\x77\145\x72", PR__MDL__STRUCTURED_DATA)))); return parent::aoukuouwimcigeqe($ywoucyskcquysiwc); } }
