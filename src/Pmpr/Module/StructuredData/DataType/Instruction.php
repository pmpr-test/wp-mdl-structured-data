<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc597b818d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\DataType; use Pmpr\Module\StructuredData\Schema\CreativeWork\HowToDirection; use Pmpr\Module\StructuredData\Schema\CreativeWork\HowToTip; class Instruction extends DataType { const sueuicugaemqiksg = "\164\151\160"; const mwmmmioksayswakq = "\x64\151\x72\145\x63\164\151\x6f\x6e"; protected $text; protected $type = self::mwmmmioksayswakq; protected $position; public function __construct(string $cmwygeyygwqaemaq, $kuuiuigeacouwmaa = 1) { if (is_string($cmwygeyygwqaemaq) && $cmwygeyygwqaemaq) { $cmwygeyygwqaemaq = ltrim($cmwygeyygwqaemaq); if ($cmwygeyygwqaemaq[0] == "\43") { $cmwygeyygwqaemaq = rtrim(ltrim($cmwygeyygwqaemaq, "\x23")); $this->type = self::sueuicugaemqiksg; } $this->text = $cmwygeyygwqaemaq; } $this->position = $kuuiuigeacouwmaa; } public function ykgcioecqcwwkime() : ?string { return $this->text; } public function gueasuouwqysmomu() : ?string { return $this->type; } public function yqyeyqikcyswcaig() : ?int { return $this->position; } public function ggwmgmiswsqmcywi() : bool { return $this->gueasuouwqysmomu() == self::sueuicugaemqiksg; } public function uqeoyqiwywwmsiew() { switch ($this->gueasuouwqysmomu()) { case self::sueuicugaemqiksg: $aaqqkgyougeiueyq = new HowToTip(); break; case self::mwmmmioksayswakq: default: $aaqqkgyougeiueyq = new HowToDirection(); break; } $aaqqkgyougeiueyq->kguaimkyumsuesem($this->ykgcioecqcwwkime())->weakiuagguweamee($this->yqyeyqikcyswcaig()); return $aaqqkgyougeiueyq; } }
