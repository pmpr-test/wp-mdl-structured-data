<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e166667eee4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\MetaBox; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Citation extends Tab { const ueigqgkciaksggio = 'references'; public function seyyiqmgwymyumoq($post = null) { $icwicymcioeyeyek = parent::seyyiqmgwymyumoq($post); if (!$icwicymcioeyeyek) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $seumokooiykcomco->get($post); $agkmksicugiqcucq = []; if ($post) { $ykqcceqiqygieeks = $seumokooiykcomco->igawqaomowicuayw(self::ueigqgkciaksggio, $post); if ($ykqcceqiqygieeks && is_array($ykqcceqiqygieeks)) { foreach ($ykqcceqiqygieeks as $mskaauwqgysweyyg) { if (!empty($mskaauwqgysweyyg[Constants::auqoykcmsiauccao]) && !empty($mskaauwqgysweyyg[Constants::NAME])) { $agkmksicugiqcucq[] = $mskaauwqgysweyyg; } } } } $icwicymcioeyeyek = $agkmksicugiqcucq; $this->mgoekicaagiaeuki($icwicymcioeyeyek); } return $icwicymcioeyeyek; } public function aoukuouwimcigeqe($ywoucyskcquysiwc = []) { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $ywoucyskcquysiwc[] = $uuyucgkyusckoaeq->doeuiogekyiwgsgw('citation_tab')->gswweykyogmsyawy(__('Citation', PR__MDL__STRUCTURED_DATA))->saemoowcasogykak(IconInterface::sgsyceqikaeaiokw)->mkksewyosgeumwsa($uuyucgkyusckoaeq->qqmgmgasauucoago(self::ueigqgkciaksggio)->omsoosuoikgueyke()->gswweykyogmsyawy(__('References', PR__MDL__STRUCTURED_DATA))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::NAME)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__('Title', PR__MDL__STRUCTURED_DATA)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::auqoykcmsiauccao)->xkgcwkwsqysqamic()->mkmssscwmeekwgqo()->gswweykyogmsyawy(__('Link', PR__MDL__STRUCTURED_DATA)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::iwascisiiokuackw)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__('Author', PR__MDL__STRUCTURED_DATA)))); return parent::aoukuouwimcigeqe($ywoucyskcquysiwc); } }
