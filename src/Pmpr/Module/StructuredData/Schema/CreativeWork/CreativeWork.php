<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e166667eee4             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork; use Pmpr\Module\StructuredData\DataType\DateTime; use Pmpr\Module\StructuredData\Schema\CreativeWork\Comment\Comment; use Pmpr\Module\StructuredData\Schema\Intangible\Rating\Rating; use Pmpr\Module\StructuredData\Schema\Organization\Organization; use Pmpr\Module\StructuredData\Schema\Person; use Pmpr\Module\StructuredData\Schema\Thing; class CreativeWork extends Thing { protected $abstract; protected $author; protected $editor; protected $creator; protected $publisher; protected $award; protected $comment; protected $commentCount; protected $contentRating; protected $copyRightHolder; protected $copyRightYear; protected $headline; protected $datePublished; protected $dateModified; protected $keywords; protected $citation; protected $about; protected $dateCreated; protected $mainEntity; protected $hasPart = null; protected $text; protected $provider; protected $aggregateRating = null; protected $isPartOf = null; public function ssssceasyyuiyqmu(string $euqoowssgqscommq) : self { $this->abstract = $euqoowssgqscommq; return $this; } public function kwkigmoeyaecsicy() : string { return $this->abstract; } public function oyecyiciiuqooyio($qscaoekmoooeuyqg) { $this->author = $qscaoekmoooeuyqg; return $this; } public function mguqscccckuywsya() { return $this->author; } public function oeaeiissukoeowwe() { return $this->aggregateRating; } public function nsqwikmawcqqyayk($gggmygsysokgmaiq) : self { $this->aggregateRating = $gggmygsysokgmaiq; return $this; } public function ggwuigemyukiywau(Person $igwkwmgowquoucyk) : self { $this->editor = $igwkwmgowquoucyk; return $this; } public function oiocaukeksiowcsw() : Person { return $this->editor; } public function yauugqacaaeucwoq($eiuuauwyukskgois) { $this->creator = $eiuuauwyukskgois; return $this; } public function auquqesgeuaeggcm() { return $this->creator; } public function qgkocaugaamsqscm($mcmgyiyokmuwqoyc) { $this->publisher = $mcmgyiyokmuwqoyc; return $this; } public function eicocscgqssuowue() { return $this->publisher; } public function yamcgqkwosywiwye(string $cmgumsammeamiwyk) : self { $this->award = $cmgumsammeamiwyk; return $this; } public function uksggyowccuweycc() : string { return $this->award; } public function wieaiquucwakewgy($comment) : self { $this->comment = $comment; return $this; } public function yagekskwwyqosqcs() : Comment { return $this->comment; } public function owykoqcycwauuioo(?string $gosysykeqkauccmw) : self { $this->commentCount = $gosysykeqkauccmw; return $this; } public function ymgsgecsiqeegseg() : ?string { return $this->commentCount; } public function ykumikyaccuwocyw($iokaoyagiqwsyoay) { $this->contentRating = $iokaoyagiqwsyoay; return $this; } public function kcmcqsmiececuwus() { return $this->contentRating; } public function qsccuwqacsasgyeu($seqmuusyqkmcyese) { $this->copyRightHolder = $seqmuusyqkmcyese; return $this; } public function yucoosycimyecuem() { return $this->copyRightHolder; } public function cqoookaiiygigkaq(int $yguosaqygkksqsoo) : self { $this->copyRightYear = $yguosaqygkksqsoo; return $this; } public function ciysqkcqgwgocogm() : int { return $this->copyRightYear; } public function qaioowkkkeowewio(string $qyoygekomsseociu) : self { $this->headline = $qyoygekomsseociu; return $this; } public function qmwmqgqwwomaqckq() : string { return $this->headline; } public function kkqwmgsyqkqyqgge($gcuymekqeeqssoky) { $this->datePublished = $gcuymekqeeqssoky; return $this; } public function iwmqosaoogkuqemc() { return $this->datePublished; } public function akcmoueugeecmoqm($cuckcueoawmmqeua) { $this->dateModified = $cuckcueoawmmqeua; return $this; } public function keawisqwqcccggui() { return $this->dateModified; } public function ywssmgkikwksokge($ksmaqckuykgswwyg) : self { $this->keywords = $ksmaqckuykgswwyg; return $this; } public function cicesgyoamuuggao() : string { return $this->keywords; } public function mqiwswaueskoigek($cwiceqmaqqgqcgga) : self { $this->citation = $cwiceqmaqqgqcgga; return $this; } public function giekkukoeokmkqgi($cwiceqmaqqgqcgga) : self { $this->citation[] = $cwiceqmaqqgqcgga; return $this; } public function gwqgsymeqsimciqy() : array { return $this->citation; } public function keogoququwauweom($kgoqgmcsomguyeqq) { $this->about = $kgoqgmcsomguyeqq; return $this; } public function kowekgioaacecqus() { return $this->about; } public function ogoesumqawygewou($eyaouuceyyykggoc) { $this->dateCreated = $eyaouuceyyykggoc; return $this; } public function sgmwueyyuciacmye() { return $this->dateCreated; } public function kmwekywqqyigueyi() { return $this->mainEntity; } public function gcgaecmemumegiyq($kgcuukieymaqosmm) : self { $this->mainEntity = $kgcuukieymaqosmm; return $this; } public function ikueqmmawsgmgyiu(Thing $oikmcqwkmsyiicqs) : self { if (!is_array($this->kmwekywqqyigueyi())) { $this->mainEntity = []; } $this->mainEntity[] = $oikmcqwkmsyiicqs; return $this; } public function ykgcioecqcwwkime() : ?string { return $this->text; } public function kguaimkyumsuesem(?string $cmwygeyygwqaemaq) : self { $this->text = $cmwygeyygwqaemaq; return $this; } public function kkcowsyecqiosuko() { return $this->provider; } public function oaqksmcekisgaqqw($iwigiqwyskocowwo) : self { $this->provider = $iwigiqwyskocowwo; return $this; } public function issowqkyqasigmkw(CreativeWork $skayikqyskksweaa) : self { $this->hasPart[] = $skayikqyskksweaa; return $this; } public function yeygiosuwyoiioay() { return $this->hasPart; } public function ieawuemikkqauoom($ywgmkakamaoweeuu) : self { $this->isPartOf = $ywgmkakamaoweeuu; return $this; } public function skgyomcooiwqcaea() { return $this->isPartOf; } }
