<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670517909530b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\MetaBox; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class FAQPage extends Tab { const sqgaeeagsegecugi = "\x66\x61\161\x5f\x6d\141\x69\156\137\145\156\164\151\x74\x79"; public function ieoqyoeecukogies($post) { $oammesyieqmwuwyi = $this->seyyiqmgwymyumoq($post); if (!$oammesyieqmwuwyi) { goto mwysseaekcsiesmm; } echo $this->iuygowkemiiwqmiw("\146\141\x71\137\154\151\163\164", [Constants::qgqyauaqwqmqseim => IconInterface::ucomcyskmkiqysee, Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi, Constants::qescuiwgsyuikume => __("\106\x41\121", PR__MDL__STRUCTURED_DATA)]); mwysseaekcsiesmm: parent::ieoqyoeecukogies($post); } public function seyyiqmgwymyumoq($post = null) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $seumokooiykcomco->get($post); $icwicymcioeyeyek = parent::seyyiqmgwymyumoq($post); if ($icwicymcioeyeyek) { goto ucqmumuygcywwqma; } $agkmksicugiqcucq = []; if (!$post) { goto ukqocwewouckikso; } $kgcuukieymaqosmm = $seumokooiykcomco->igawqaomowicuayw(self::sqgaeeagsegecugi, $post); if (!($kgcuukieymaqosmm && is_array($kgcuukieymaqosmm))) { goto gommacygsykyussk; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($kgcuukieymaqosmm as $igqsaukqcqscimok) { $cgiaqqwoogcwuuwq = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::kuygeqomywoykkai); $wqckkkeieieqasqk = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::eeiymeksiysiuemu); if (!($cgiaqqwoogcwuuwq && $wqckkkeieieqasqk)) { goto uougwgeyiokewkkm; } $agkmksicugiqcucq[] = [$cgiaqqwoogcwuuwq, $wqckkkeieieqasqk]; uougwgeyiokewkkm: gygwewcqsmwqismo: } amgsueumgaguceaa: gommacygsykyussk: ukqocwewouckikso: $icwicymcioeyeyek = ConvertArray::wauqeqkcymgoceuy($agkmksicugiqcucq, [Constants::kuygeqomywoykkai, Constants::eeiymeksiysiuemu]); $this->mgoekicaagiaeuki($icwicymcioeyeyek); ucqmumuygcywwqma: return $icwicymcioeyeyek; } public function aoukuouwimcigeqe($ywoucyskcquysiwc = []) { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $ywoucyskcquysiwc[] = $uuyucgkyusckoaeq->doeuiogekyiwgsgw("\x66\x61\161\x5f\164\141\142")->gswweykyogmsyawy(__("\x46\101\x51", PR__MDL__STRUCTURED_DATA))->saemoowcasogykak(IconInterface::qscwsaqyuyomumoc)->mkksewyosgeumwsa($uuyucgkyusckoaeq->qqmgmgasauucoago(self::sqgaeeagsegecugi)->usosgsaaimqcysyk()->gswweykyogmsyawy(__("\x49\164\145\x6d\x73", PR__MDL__STRUCTURED_DATA))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::kuygeqomywoykkai)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\121\165\x65\163\x74\x69\x6f\156", PR__MDL__STRUCTURED_DATA)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->sciaycsmsiekqueg(Constants::eeiymeksiysiuemu)->qsecygiycssgacqs(5)->gsomueooycksswcy()->gswweykyogmsyawy(__("\101\156\163\167\145\162", PR__MDL__STRUCTURED_DATA)))); return parent::aoukuouwimcigeqe($ywoucyskcquysiwc); } }
