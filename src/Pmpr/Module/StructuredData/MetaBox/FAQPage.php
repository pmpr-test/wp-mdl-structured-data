<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             680106a5c2bfe             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\MetaBox; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class FAQPage extends Tab { const sqgaeeagsegecugi = 'faq_main_entity'; public function ieoqyoeecukogies($post) { $oammesyieqmwuwyi = $this->seyyiqmgwymyumoq($post); if ($oammesyieqmwuwyi) { echo $this->iuygowkemiiwqmiw('faq_list', [Constants::qgqyauaqwqmqseim => IconInterface::ucomcyskmkiqysee, Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi, Constants::qescuiwgsyuikume => __('FAQ', PR__MDL__STRUCTURED_DATA)]); } parent::ieoqyoeecukogies($post); } public function seyyiqmgwymyumoq($post = null) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $seumokooiykcomco->get($post); $icwicymcioeyeyek = parent::seyyiqmgwymyumoq($post); if (!$icwicymcioeyeyek) { $agkmksicugiqcucq = []; if ($post) { $kgcuukieymaqosmm = $seumokooiykcomco->igawqaomowicuayw(self::sqgaeeagsegecugi, $post); if ($kgcuukieymaqosmm && is_array($kgcuukieymaqosmm)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($kgcuukieymaqosmm as $igqsaukqcqscimok) { $cgiaqqwoogcwuuwq = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::kuygeqomywoykkai); $wqckkkeieieqasqk = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::eeiymeksiysiuemu); if ($cgiaqqwoogcwuuwq && $wqckkkeieieqasqk) { $agkmksicugiqcucq[] = [$cgiaqqwoogcwuuwq, $wqckkkeieieqasqk]; } } } } $icwicymcioeyeyek = ConvertArray::wauqeqkcymgoceuy($agkmksicugiqcucq, [Constants::kuygeqomywoykkai, Constants::eeiymeksiysiuemu]); $this->mgoekicaagiaeuki($icwicymcioeyeyek); } return $icwicymcioeyeyek; } public function aoukuouwimcigeqe($ywoucyskcquysiwc = []) { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $ywoucyskcquysiwc[] = $uuyucgkyusckoaeq->doeuiogekyiwgsgw('faq_tab')->gswweykyogmsyawy(__('FAQ', PR__MDL__STRUCTURED_DATA))->saemoowcasogykak(IconInterface::qscwsaqyuyomumoc)->mkksewyosgeumwsa($uuyucgkyusckoaeq->qqmgmgasauucoago(self::sqgaeeagsegecugi)->omsoosuoikgueyke()->gswweykyogmsyawy(__('Items', PR__MDL__STRUCTURED_DATA))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::kuygeqomywoykkai)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__('Question', PR__MDL__STRUCTURED_DATA)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->sciaycsmsiekqueg(Constants::eeiymeksiysiuemu)->qsecygiycssgacqs(5)->gsomueooycksswcy()->gswweykyogmsyawy(__('Answer', PR__MDL__STRUCTURED_DATA)))); return parent::aoukuouwimcigeqe($ywoucyskcquysiwc); } }
