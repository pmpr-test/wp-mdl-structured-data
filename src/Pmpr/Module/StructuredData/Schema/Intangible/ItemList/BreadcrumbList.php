<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670517909530b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\Intangible\ItemList; use Pmpr\Common\Foundation\Data\PageInfo; use Pmpr\Module\StructuredData\Factory; use Pmpr\Module\StructuredData\Schema\Intangible\ListItem; use Pmpr\Module\StructuredData\Schema\Thing; class BreadcrumbList extends ItemList { public function __construct(array $oammesyieqmwuwyi, bool $goiqeyeaqmicqiky = true) { foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { if (!$igqsaukqcqscimok instanceof PageInfo) { goto quwcqmyokicssyew; } $gceqaqwwqeicckwq = new ListItem(); $gceqaqwwqeicckwq->usuqmwksoeaayaig($igqsaukqcqscimok->qcgakseyaikigqco())->weakiuagguweamee($momcykaoccoymeig + 1)->eoqkakkyqsmyicow($igqsaukqcqscimok->ycqquoiyyuesegsy())->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->qmueseocuuekommo($igqsaukqcqscimok->ycqquoiyyuesegsy())->aseocggwwegcmqes($igqsaukqcqscimok->gueasuouwqysmomu())); $this->asssmuisouigmaom($gceqaqwwqeicckwq); quwcqmyokicssyew: kiwqkcaekqqyuegq: } qsygcycwieukkgwc: $this->ygamocmgiuiuaiao(count($oammesyieqmwuwyi))->usuqmwksoeaayaig(__("\x42\162\145\141\x64\x63\162\x75\x6d\142", PR__MDL__STRUCTURED_DATA))->iaqckqwoiseyqaku(); parent::__construct($goiqeyeaqmicqiky); } public function eeeoeecuqeeemoqa(PageInfo $yyimiwcuegayoskq) : Thing { $igqsaukqcqscimok = Factory::symcgieuakksimmu()->mwcosyumkyawcmyo($yyimiwcuegayoskq, false); return $igqsaukqcqscimok->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->qmueseocuuekommo($yyimiwcuegayoskq->ycqquoiyyuesegsy())->aseocggwwegcmqes($yyimiwcuegayoskq->gueasuouwqysmomu())); } }
