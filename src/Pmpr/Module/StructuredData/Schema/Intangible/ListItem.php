<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68dfe8127d0bb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\Intangible; use Pmpr\Module\StructuredData\Schema\Thing; class ListItem extends Intangible { protected $item = null; protected ?int $position = 0; protected ?ListItem $nextItem = null; protected ?ListItem $previousItem = null; public function sqoiuykcoueiucgc() { return $this->item; } public function eoqkakkyqsmyicow($igqsaukqcqscimok) : ListItem { $this->item = $igqsaukqcqscimok; return $this; } public function esyogicmmyuyywyk() : ListItem { return $this->nextItem; } public function omggmwwsugmmygww(ListItem $oqgwgiugacksqsie) : ListItem { $this->nextItem = $oqgwgiugacksqsie; return $this; } public function yqyeyqikcyswcaig() : ?int { return $this->position; } public function weakiuagguweamee(?int $kuuiuigeacouwmaa) : ListItem { $this->position = $kuuiuigeacouwmaa; return $this; } public function kwwsekqqymeyways() : ListItem { return $this->previousItem; } public function miaugkouikqeqqsk(ListItem $ioqoeiescgussqiq) : ListItem { $this->previousItem = $ioqoeiescgussqiq; return $this; } }
