<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             680106a5c2bfe             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Setting extends BaseClass { const iusoqcmuoaoewkis = 'cities'; const cuoisksyokesowui = 'area_served'; const ywkiasckoseguiwm = 'contact_type'; const amkuuawuyckkoceu = 'contact_points'; const eygyygwiwqkaocww = 'available_hours'; const iokcuyykuyomewei = 'product_supported'; const nekomuqumiuyqcce = 'opens'; const yyiwkiymwumssuek = 'closes'; const qwgisagiseqsgwoy = 'day_of_weeks'; const gcmiqcuaiqogmaec = 'opening_hours'; const uqkqkomwukqcwyuc = 'postal_address_'; const kgqkweuagysiswwi = self::uqkqkomwukqcwyuc . 'street'; const acsumqomaoqywmks = self::uqkqkomwukqcwyuc . 'region'; const ykicocoewwsgqswe = self::uqkqkomwukqcwyuc . 'country'; const owameugmcuwyqcmq = self::uqkqkomwukqcwyuc . 'locality'; const euaageieksayiceq = self::uqkqkomwukqcwyuc . 'postal_code'; const cqikcoskqewweuuk = self::uqkqkomwukqcwyuc . 'office_box_number'; const usqqysimummsausc = 'organization_'; const kqaiaoqsoogauwck = self::usqqysimummsausc . 'logo'; const iugueokiaeawyycm = self::usqqysimummsausc . 'area_served'; const mesmiqsuwqcucyaw = self::usqqysimummsausc . 'contact_points'; const muwugkaugyyiqciq = 'intangible_'; const qkiuagkeeiogycsq = self::muwugkaugyyiqciq . self::amkuuawuyckkoceu; const qggakygisakecymw = 'howto_placeholder'; const oaeygseeeegmooyk = 'blog'; const sseagwcwsyikaaii = 'personal'; const ywqqokqocemcgsam = 'ecommerce'; const uuqysuiogykyyyoy = 'website_type'; public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->gswweykyogmsyawy(__('Structured Data', PR__MDL__STRUCTURED_DATA)); } public function ykwqaukkycogooii() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $this->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg(Constants::ioomakeyqiqowgmk)->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->gswweykyogmsyawy(__('General', PR__MDL__STRUCTURED_DATA))->kwkugmqouisgkqig($uuyucgkyusckoaeq->ycgeeoiieoiakgam(Constants::ioomakeyqiqowgmk)->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->gswweykyogmsyawy(__('General', PR__MDL__STRUCTURED_DATA))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(self::uuqysuiogykyyyoy)->gswweykyogmsyawy(__('You Website Type', PR__MDL__STRUCTURED_DATA))->kesomeowemmyygey(self::oaeygseeeegmooyk, __('Blog or News', PR__MDL__STRUCTURED_DATA))->kesomeowemmyygey(self::ywqqokqocemcgsam, __('Ecommerce', PR__MDL__STRUCTURED_DATA))->kesomeowemmyygey(self::sseagwcwsyikaaii, __('Personal Page', PR__MDL__STRUCTURED_DATA))->eumecwmqmukqgyea()->mkmssscwmeekwgqo())))->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg('place')->gswweykyogmsyawy(__('Place Data', PR__MDL__STRUCTURED_DATA))->saemoowcasogykak(IconInterface::wswsiekeygsewicy)->kwkugmqouisgkqig($uuyucgkyusckoaeq->ycgeeoiieoiakgam('city')->gswweykyogmsyawy(__('City', PR__MDL__STRUCTURED_DATA))->saemoowcasogykak(IconInterface::eqycouqakooycgso)->mkksewyosgeumwsa($uuyucgkyusckoaeq->qqmgmgasauucoago(self::iusoqcmuoaoewkis)->omsoosuoikgueyke()->gswweykyogmsyawy(__('Cities', PR__MDL__STRUCTURED_DATA))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::NAME)->eumecwmqmukqgyea()->gswweykyogmsyawy(__('Name', PR__MDL__STRUCTURED_DATA))))))->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg('intangible')->gswweykyogmsyawy(__('Intangible Data', PR__MDL__STRUCTURED_DATA))->saemoowcasogykak(IconInterface::kmkemsykwyiociwe)->kwkugmqouisgkqig($uuyucgkyusckoaeq->ycgeeoiieoiakgam('contact_point')->gswweykyogmsyawy(__('Contact Point', PR__MDL__STRUCTURED_DATA))->saemoowcasogykak(IconInterface::ckocgsiwiimggicm)->mkksewyosgeumwsa($uuyucgkyusckoaeq->qqmgmgasauucoago(self::qkiuagkeeiogycsq)->omsoosuoikgueyke()->gswweykyogmsyawy(__('Items', PR__MDL__STRUCTURED_DATA))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->eumecwmqmukqgyea()->gswweykyogmsyawy(__('Title', PR__MDL__STRUCTURED_DATA)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::muqaqimusmckkieq)->mkiaygiogeeyogqm()->gswweykyogmsyawy(__('Email', PR__MDL__STRUCTURED_DATA))->eumecwmqmukqgyea()->eyygsasuqmommkua($qkqgcaykemoiecma->ciqkaakiwsgqwiqu('admin_email')))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::memskaacyikisggk)->smigkcmumwkgamkk()->eumecwmqmukqgyea()->gswweykyogmsyawy(__('Telephone', PR__MDL__STRUCTURED_DATA))->eyygsasuqmommkua($qkqgcaykemoiecma->ciqkaakiwsgqwiqu(Constants::memskaacyikisggk, Constants::qoawsacmmgmimqaw)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::ywkiasckoseguiwm)->eumecwmqmukqgyea()->gswweykyogmsyawy(__('Contact Type', PR__MDL__STRUCTURED_DATA)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::iokcuyykuyomewei)->eumecwmqmukqgyea()->gswweykyogmsyawy(__('Product Supported', PR__MDL__STRUCTURED_DATA)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::cuoisksyokesowui)->gswweykyogmsyawy(__('Serve Area', PR__MDL__STRUCTURED_DATA))->acauweqyyugwisqc($this->acqeemwceyimuiws([Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs])))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::eygyygwiwqkaocww)->oikgogcweiiaocka()->gswweykyogmsyawy(__('Available Hours', PR__MDL__STRUCTURED_DATA))->acauweqyyugwisqc($this->ykyqkswukukmkqqe([Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs])))))->kwkugmqouisgkqig($uuyucgkyusckoaeq->ycgeeoiieoiakgam('postal_address')->gswweykyogmsyawy(__('Postal Address', PR__MDL__STRUCTURED_DATA))->saemoowcasogykak(IconInterface::ckqqkkgqwgmckeao)->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::ykicocoewwsgqswe)->kqqqugemmqagucuq()->gswweykyogmsyawy(__('Country', PR__MDL__STRUCTURED_DATA)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::owameugmcuwyqcmq)->gswweykyogmsyawy(__('Locality', PR__MDL__STRUCTURED_DATA)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::acsumqomaoqywmks)->gswweykyogmsyawy(__('Region', PR__MDL__STRUCTURED_DATA)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::cqikcoskqewweuuk)->kqqqugemmqagucuq()->gswweykyogmsyawy(__('Office Box Number', PR__MDL__STRUCTURED_DATA)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::euaageieksayiceq)->kqqqugemmqagucuq()->gswweykyogmsyawy(__('Postal Code', PR__MDL__STRUCTURED_DATA)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::kgqkweuagysiswwi)->kqqqugemmqagucuq()->gswweykyogmsyawy(__('Street Address', PR__MDL__STRUCTURED_DATA))))->kwkugmqouisgkqig($uuyucgkyusckoaeq->ycgeeoiieoiakgam('opening_hours')->gswweykyogmsyawy(__('Opening Hours', PR__MDL__STRUCTURED_DATA))->saemoowcasogykak(IconInterface::qcyaqcamyiuukygg)->mkksewyosgeumwsa($uuyucgkyusckoaeq->qqmgmgasauucoago(self::gcmiqcuaiqogmaec)->gswweykyogmsyawy(__('Items', PR__MDL__STRUCTURED_DATA))->omsoosuoikgueyke()->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__('Title', PR__MDL__STRUCTURED_DATA)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::qwgisagiseqsgwoy)->oikgogcweiiaocka()->gswweykyogmsyawy(__('Day of Weeks', PR__MDL__STRUCTURED_DATA))->acauweqyyugwisqc($this->gueiuwsamgoocaau()))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::nekomuqumiuyqcce)->yscssskqyicmogii()->gswweykyogmsyawy(__('Open Hour', PR__MDL__STRUCTURED_DATA)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::yyiwkiymwumssuek)->yscssskqyicmogii()->gswweykyogmsyawy(__('Close Hour', PR__MDL__STRUCTURED_DATA))))))->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg('creative_work')->gswweykyogmsyawy(__('Creative Work Data', PR__MDL__STRUCTURED_DATA))->saemoowcasogykak(IconInterface::aysksyyosuiqaqge)->kwkugmqouisgkqig($uuyucgkyusckoaeq->ycgeeoiieoiakgam('howto')->gswweykyogmsyawy(__('How To', PR__MDL__STRUCTURED_DATA))->saemoowcasogykak(IconInterface::cuagoyqymoegsqcm)->mkksewyosgeumwsa($uuyucgkyusckoaeq->quaegkgkucwyeiqg(self::qggakygisakecymw)->gswweykyogmsyawy(__('Placeholder Image For Steps', PR__MDL__STRUCTURED_DATA)))))->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg('organization')->saemoowcasogykak(IconInterface::ugmsoqmcooyuugyo)->gswweykyogmsyawy(__('Organization Data', PR__MDL__STRUCTURED_DATA))->kwkugmqouisgkqig($uuyucgkyusckoaeq->ycgeeoiieoiakgam(Constants::ioomakeyqiqowgmk)->gswweykyogmsyawy(__('General', PR__MDL__STRUCTURED_DATA))->mkksewyosgeumwsa($uuyucgkyusckoaeq->quaegkgkucwyeiqg(self::kqaiaoqsoogauwck)->ycueqsmmommygueu(['svg+xml', 'webp'])->gswweykyogmsyawy(__('Logo', PR__MDL__STRUCTURED_DATA)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::amkuuawuyckkoceu)->oikgogcweiiaocka()->mkmssscwmeekwgqo()->acauweqyyugwisqc($this->mgoswmgamiqgceck([Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]))->gswweykyogmsyawy(__('Contact Points', PR__MDL__STRUCTURED_DATA)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::cuoisksyokesowui)->gswweykyogmsyawy(__('Served Area', PR__MDL__STRUCTURED_DATA))->acauweqyyugwisqc($this->acqeemwceyimuiws([Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]))))); parent::ykwqaukkycogooii(); } public function gckekgcikugasqwu() { return $this->giiuwsmyumqwwiyq(self::kqaiaoqsoogauwck); } public function gueiuwsamgoocaau() : array { return ['saturday' => __('Saturday', PR__MDL__STRUCTURED_DATA), 'sunday' => __('Sunday', PR__MDL__STRUCTURED_DATA), 'monday' => __('Monday', PR__MDL__STRUCTURED_DATA), 'tuesday' => __('Tuesday', PR__MDL__STRUCTURED_DATA), 'wednesday' => __('Wednesday', PR__MDL__STRUCTURED_DATA), 'thursday' => __('Thursday', PR__MDL__STRUCTURED_DATA), 'friday' => __('Friday', PR__MDL__STRUCTURED_DATA)]; } public function ygyiswukccscuqmm() { $iwiewowoqmoekyqi = $this->ocksiywmkyaqseou('image_placeholder_id', ''); return $this->giiuwsmyumqwwiyq(self::qggakygisakecymw, $iwiewowoqmoekyqi); } public function amemeossuowwgsmo() { $qiouiwasaauyaaue = [self::kgqkweuagysiswwi, self::acsumqomaoqywmks, self::ykicocoewwsgqswe, self::owameugmcuwyqcmq, self::euaageieksayiceq, self::cqikcoskqewweuuk]; $ksaameoqigiaoigg = []; foreach ($qiouiwasaauyaaue as $omkysikckkcieckq) { $ksaameoqigiaoigg[$omkysikckkcieckq] = $this->giiuwsmyumqwwiyq($omkysikckkcieckq); } return $ksaameoqigiaoigg; } public function acqeemwceyimuiws(array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii[Constants::uissasisiuymwsmu] = Constants::NAME; return (array) $this->giiuwsmyumqwwiyq(self::iusoqcmuoaoewkis, [], $ywmkwiwkosakssii); } public function ykyqkswukukmkqqe(array $ywmkwiwkosakssii = []) : array { return (array) $this->giiuwsmyumqwwiyq(self::gcmiqcuaiqogmaec, [], $ywmkwiwkosakssii); } public function aiguawmiigigiwye() : array { $sogksuscggsicmac = []; if ($icgueumiuoeqoaky = $this->giiuwsmyumqwwiyq(self::amkuuawuyckkoceu, [])) { $sogksuscggsicmac[self::amkuuawuyckkoceu] = $this->mgoswmgamiqgceck([Constants::ackcaikowcokggsc => $icgueumiuoeqoaky]); } if ($weowoqykiyuqcwam = $this->gckekgcikugasqwu()) { $sogksuscggsicmac[self::kqaiaoqsoogauwck] = $weowoqykiyuqcwam; } if ($amcgcekcaqaiayuu = $this->giiuwsmyumqwwiyq(self::cuoisksyokesowui)) { $sogksuscggsicmac[self::cuoisksyokesowui] = $this->acqeemwceyimuiws($amcgcekcaqaiayuu); } return $sogksuscggsicmac; } public function mgoswmgamiqgceck(array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii[Constants::wkweqssoakmmmguq] = [Constants::muqaqimusmckkieq, Constants::memskaacyikisggk, self::cuoisksyokesowui, self::ywkiasckoseguiwm, self::eygyygwiwqkaocww, self::iokcuyykuyomewei]; $oammesyieqmwuwyi = $this->giiuwsmyumqwwiyq(self::qkiuagkeeiogycsq, [], $ywmkwiwkosakssii); $sogksuscggsicmac = []; foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $igqsaukqcqscimok) { if (is_array($igqsaukqcqscimok)) { $igqsaukqcqscimok[self::cuoisksyokesowui] = $this->acqeemwceyimuiws([Constants::ascagqcquwgmygkm => $igqsaukqcqscimok[self::cuoisksyokesowui]]); $igqsaukqcqscimok[self::eygyygwiwqkaocww] = $this->ykyqkswukukmkqqe([Constants::ackcaikowcokggsc => $igqsaukqcqscimok[self::eygyygwiwqkaocww]]); } $sogksuscggsicmac[$uusmaiomayssaecw] = $igqsaukqcqscimok; } return $sogksuscggsicmac; } }
