<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d9814dc129             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\Intangible\ItemList; use Pmpr\Common\Foundation\Data\PageInfo; use Pmpr\Module\StructuredData\Factory; use Pmpr\Module\StructuredData\Schema\Intangible\ListItem; use Pmpr\Module\StructuredData\Schema\Thing; class BreadcrumbList extends ItemList { public function __construct(array $oammesyieqmwuwyi, bool $goiqeyeaqmicqiky = true) { foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { if ($igqsaukqcqscimok instanceof PageInfo) { $gceqaqwwqeicckwq = new ListItem(); $gceqaqwwqeicckwq->usuqmwksoeaayaig($igqsaukqcqscimok->qcgakseyaikigqco())->weakiuagguweamee($momcykaoccoymeig + 1)->eoqkakkyqsmyicow($igqsaukqcqscimok->ycqquoiyyuesegsy())->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->qmueseocuuekommo($igqsaukqcqscimok->ycqquoiyyuesegsy())->aseocggwwegcmqes($igqsaukqcqscimok->gueasuouwqysmomu())); $this->asssmuisouigmaom($gceqaqwwqeicckwq); } } $this->ygamocmgiuiuaiao(count($oammesyieqmwuwyi))->usuqmwksoeaayaig(__("\102\x72\x65\141\144\x63\x72\165\155\142", PR__MDL__STRUCTURED_DATA))->iaqckqwoiseyqaku(); parent::__construct($goiqeyeaqmicqiky); } public function eeeoeecuqeeemoqa(PageInfo $yyimiwcuegayoskq) : Thing { $igqsaukqcqscimok = Factory::symcgieuakksimmu()->mwcosyumkyawcmyo($yyimiwcuegayoskq, false); return $igqsaukqcqscimok->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->qmueseocuuekommo($yyimiwcuegayoskq->ycqquoiyyuesegsy())->aseocggwwegcmqes($yyimiwcuegayoskq->gueasuouwqysmomu())); } }
