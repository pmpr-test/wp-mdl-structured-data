<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67ceddae29f34             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\StructuredData\MetaBox\MetaBox; use Pmpr\Module\StructuredData\Schema\Action\SearchAction; use Pmpr\Module\StructuredData\Schema\CreativeWork\Course; use Pmpr\Module\StructuredData\Schema\CreativeWork\WebPage\WebPage; use Pmpr\Module\StructuredData\Schema\CreativeWork\WebSite; use Pmpr\Module\StructuredData\Schema\Intangible\Rating\AggregateRating; use Pmpr\Module\StructuredData\Schema\Organization\Organization; use Pmpr\Module\StructuredData\Traits\CommonTrait; class StructuredData extends ComponentInitiator { use CommonTrait; const amgecouwceeaomww = 'application/ld+json'; const ocmiuacywmgycowk = 'structured_data_'; protected array $sections = []; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __('Structured Data', PR__MDL__STRUCTURED_DATA); }, Constants::wuowaiyouwecckaw => false, Constants::sguyaymiiiiewame => Setting::class]); } public function mameiwsayuyquoeq() { MetaBox::symcgieuakksimmu(); } public function suuogccckocgseyg() : array { return $this->sections; } public function kwkugmqouisgkqig($awcmekyiwwkeyisq) : self { if (!in_array($awcmekyiwwkeyisq, $this->suuogccckocgseyg(), true)) { $this->sections[] = $awcmekyiwwkeyisq; } return $this; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('init', [$this, 'init'])->qcsmikeggeemccuu('add_schema', [$this, 'cquokmemekqqywgi'])->qcsmikeggeemccuu('wp_footer', [$this, 'cquokmemekqqywgi'], 9999)->qcsmikeggeemccuu('plugins_loaded', [$this, 'icwcgmcoimqeigye'])->qcsmikeggeemccuu('wp', [$this, 'imyqwyyasugqkwey'], 10, 1)->qcsmikeggeemccuu('add_schema_by_type', [$this, 'ccscygmymqsccmss'], 10, 2)->qcsmikeggeemccuu('wp_head', [$this, 'cgqaqseqmqcuksos'], 100)->qcsmikeggeemccuu('template_redirect', [$this, 'gweiymksimwkwuwk'], 0)->qcsmikeggeemccuu('amp_post_template_head', [$this, 'cuwgmcigowieawcq']); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('amp_schemaorg_metadata', '__return_false', 100)->cecaguuoecmccuse('amp_post_template_metadata', '__return_false', 100)->cecaguuoecmccuse('wpseo_json_ld_output', '__return_empty_array', 10, 1); parent::kgquecmsgcouyaya(); } public function init() { $this->kwkugmqouisgkqig('WebSite')->kwkugmqouisgkqig('WebPage'); $this->waueiywackcqekak(); } public function ccscygmymqsccmss(?string $sqeykgyoooqysmca, ?array $ywmkwiwkosakssii = []) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $sqeykgyoooqysmca = $this->caokeucsksukesyo()->owgcciayoweymuws()->kwuyaykukcmaqggg($sqeykgyoooqysmca); $post = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::mswoacegomcucaik); $aaqqkgyougeiueyq = null; $migiiksoiymissge = null; } public function icwcgmcoimqeigye() { if ($wpSeo = $this->caokeucsksukesyo()->owgcciayoweymuws()->cmaecekuqkwmemms('WPSEO_VERSION')) { if (version_compare($wpSeo, '11.0', '<')) { $this->cecaguuoecmccuse('wpseo_json_ld_output', [$this, 'uicgewckiaaaoucw'], 10, 2)->cecaguuoecmccuse('wpseo_json_ld_output', [$this, 'wwugssyqqgasasaa'], 10, 2); } else { $this->cecaguuoecmccuse('wpseo_schema_graph_pieces', [$this, 'qeqqaggmemcuieyq'], 10, 2); } } } public function waueiywackcqekak() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $auqoykcmsiauccao = $eiicaiwgqkgsekce->gkwaaeusmsaywikg('URL'); $aiamqeawckcsuaou = $eiicaiwgqkgsekce->gkwaaeusmsaywikg('Action'); if ($auqoykcmsiauccao && $aiamqeawckcsuaou === 'HSDeleteMarkupCache') { $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->cqgekgeqacmqquas('HunchSchema-Markup-' . md5($auqoykcmsiauccao)); header('HTTP/1.0 202 Accepted', true, 202); exit; } } public function cquokmemekqqywgi($qscuacuysiqsossk = false) { if ($this->ocksiywmkyaqseou(self::ocmiuacywmgycowk . 'can_add', true)) { $ycemioygiseosgqi = $this->mqeycaqkoigwaawm(); foreach ($ycemioygiseosgqi as $cckmquusswcwquse) { $this->yuaukuikuewwqumk($cckmquusswcwquse, $qscuacuysiqsossk); } } } private function mqeycaqkoigwaawm() : array { $qssskwiqeumgkago = []; $giqccwuccwuwiemw = SchemaPopulator::symcgieuakksimmu(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $imaseqywaiwakmgw = $this->weysguygiseoukqw(Setting::uuqysuiogykyyyoy, Setting::oaeygseeeegmooyk); $ieokeoyugcmwuumq = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(); $egqkagowiyeygcgy = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::NAME); $ukuqoigggaqaosoy = new WebSite(); $ukuqoigggaqaosoy->qgkocaugaamsqscm($giqccwuccwuwiemw->mqkewgkgeqwqoyui(true)); if ($imaseqywaiwakmgw === Setting::oaeygseeeegmooyk) { $ukuqoigggaqaosoy->uqeimkauiqaemkio((new SearchAction())->oockkiieqcwiocga("{$ieokeoyugcmwuumq}?s={search_term_string}")->goeakuiyqeiyqayo('required s=search_term_string')); } $ukuqoigggaqaosoy->usuqmwksoeaayaig($egqkagowiyeygcgy)->boucusiemiykwime($ieokeoyugcmwuumq)->xauiwawimomcgksy($giqccwuccwuwiemw->cmkamqgimsaseogs($ukuqoigggaqaosoy, Constants::wqekaoqqacecmuyg)); $mooimoaemiymkucu = new WebPage(); $eeamcawaiqocomwy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); $mooimoaemiymkucu->ieawuemikkqauoom((new WebSite())->usuqmwksoeaayaig($egqkagowiyeygcgy)->boucusiemiykwime($ieokeoyugcmwuumq)->xauiwawimomcgksy($giqccwuccwuwiemw->cmkamqgimsaseogs($ukuqoigggaqaosoy, Constants::wqekaoqqacecmuyg)))->xauiwawimomcgksy($giqccwuccwuwiemw->cmkamqgimsaseogs($mooimoaemiymkucu, '', parse_url($eeamcawaiqocomwy, PHP_URL_PATH)))->boucusiemiykwime($eeamcawaiqocomwy); switch ($imaseqywaiwakmgw) { case Setting::ywqqokqocemcgsam: break; case Setting::oaeygseeeegmooyk: case Setting::sseagwcwsyikaaii: default: break; } $mksyucucyswaukig = $mumyimcwkaemyyue->imgymusqgccqsqqq(); if ($mumyimcwkaemyyue->seokosgecygsmqau()) { $qssskwiqeumgkago[] = $giqccwuccwuwiemw->cykwscocqwykiocm(true); } else { if ($mumyimcwkaemyyue->migkyseymeomymmy()) { if ($mumyimcwkaemyyue->sgayqmgoigoseaoo() || $mumyimcwkaemyyue->ocwoeosukggumggw() || $mumyimcwkaemyyue->qmssqeyayicowkgy()) { $qssskwiqeumgkago[] = $giqccwuccwuwiemw->wwmegieeqomwecqq($mksyucucyswaukig, true); } else { if ($mumyimcwkaemyyue->moegwqkekcawsggs()) { $qssskwiqeumgkago[] = $giqccwuccwuwiemw->ceowqqwiaooowquk($mksyucucyswaukig, true); } else { if ($mumyimcwkaemyyue->mykygowqgwcuecua()) { $qssskwiqeumgkago[] = $giqccwuccwuwiemw->mguqscccckuywsya($mksyucucyswaukig); } } } $ewsqcacamuomwagw = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw(); $mooimoaemiymkucu->usuqmwksoeaayaig($ewsqcacamuomwagw->syeuyeikogukksam())->keogoququwauweom($ewsqcacamuomwagw->wieoiwogwmcwukom()); } else { if ($mumyimcwkaemyyue->cukiusasccucgwqc() && !$mumyimcwkaemyyue->sgeaogakoscmysgc()) { $ggickigkckaisqao = $giqccwuccwuwiemw->ayueggmoqeeukqmq($mksyucucyswaukig, true); if ($ggickigkckaisqao) { $qssskwiqeumgkago[] = $giqccwuccwuwiemw->ayueggmoqeeukqmq($mksyucucyswaukig, true); if ($mumyimcwkaemyyue->cukiusasccucgwqc(Constants::mswoacegomcucaik)) { $qssskwiqeumgkago[] = $giqccwuccwuwiemw->gmiiuwgykogoksou($mksyucucyswaukig); $qssskwiqeumgkago[] = $giqccwuccwuwiemw->eqggmkemkoououam($mksyucucyswaukig); } $mooimoaemiymkucu->usuqmwksoeaayaig($ggickigkckaisqao->aakmagwggmkoiiyu())->keogoququwauweom($ggickigkckaisqao->meqceykmywmqgoym()); } } else { if ($mumyimcwkaemyyue->gouusicsisumuiei()) { $gicygugkgaweeugg = $giqccwuccwuwiemw->siiwuwaswckkuoya(); $qssskwiqeumgkago[] = $gicygugkgaweeugg; $mooimoaemiymkucu->usuqmwksoeaayaig($gicygugkgaweeugg->aakmagwggmkoiiyu())->boucusiemiykwime($gicygugkgaweeugg->oiucukewkckkwiqc()); } } } } $qssskwiqeumgkago[] = $ukuqoigggaqaosoy; $qssskwiqeumgkago[] = $mooimoaemiymkucu; return array_filter($qssskwiqeumgkago); } public function imyqwyyasugqkwey($wp) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $iwceggomkwsaekmg = $eiicaiwgqkgsekce->gmsemuiwicucmcok('Accept'); $saqmwwmqiwmkiwaa = $eiicaiwgqkgsekce->gkwaaeusmsaywikg('format'); if ($saqmwwmqiwmkiwaa === 'application/ld json' || $iwceggomkwsaekmg === self::amgecouwceeaomww) { $this->cquokmemekqqywgi(true); exit; } } public function cgqaqseqmqcuksos() { $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw('link', ['rel' => 'alternate', 'type' => self::amgecouwceeaomww, 'href' => $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo([Constants::yqemseykugmsyeqa => self::amgecouwceeaomww], $this->ycqquoiyyuesegsy()), 'title' => __('Structured Descriptor Document (JSON-LD format)', PR__MDL__STRUCTURED_DATA)]); } public function gweiymksimwkwuwk() { ob_start([$this, 'mcqgqaomycmeomyy']); } public function mcqgqaomycmeomyy($gqykqygqmiosgqmg) { $gqykqygqmiosgqmg = preg_replace('/[\\s\\n]*<(link|meta)(\\s|[^>]+\\s)itemprop=[\'"][^\'"]*[\'"][^>]*>[\\s\\n]*/imS', '', $gqykqygqmiosgqmg); for ($fmwiggygsiguaaec = 1; $fmwiggygsiguaaec <= 6; $fmwiggygsiguaaec++) { $gqykqygqmiosgqmg = preg_replace('/(<[^>]*)\\sitem(scope|type|prop)(=[\'"][^\'"]*[\'"])?([^>]*>)/imS', '$1$4', $gqykqygqmiosgqmg); } return $gqykqygqmiosgqmg; } public function uicgewckiaaaoucw($icwicymcioeyeyek, $mgkceomocowocqyo) { if (in_array($mgkceomocowocqyo, ['website', 'company', 'person', 'breadcrumb'])) { return []; } return $icwicymcioeyeyek; } public function wwugssyqqgasasaa($icwicymcioeyeyek, $mgkceomocowocqyo) { if ($mgkceomocowocqyo === 'breadcrumb') { return []; } return $icwicymcioeyeyek; } public function qeqqaggmemcuieyq($aocwauauqiooioeq, $mgkceomocowocqyo) { return []; } public function cuwgmcigowieawcq($qqscaoyqikuyeoaw) { $this->cquokmemekqqywgi(); } }
