<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68cc703cdceec             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\Intangible\StructuredValue; class PriceSpecification extends StructuredValue { protected ?string $price = null; protected ?string $priceCurrency = null; protected ?string $valueAddedTaxIncluded = null; public function gumawiymasmgwskq(?string $aumscagymwyyicag) : self { $this->price = $aumscagymwyyicag; return $this; } public function qqiaccgweweoigwc(?string $wwoaqaicmwyayksi) : self { $this->priceCurrency = $wwoaqaicmwyayksi; return $this; } public function skimsyoskeysqmqo($eykywucwskgqyouq) : self { if (is_bool($eykywucwskgqyouq)) { $eykywucwskgqyouq = $eykywucwskgqyouq ? 'true' : 'false'; } $this->valueAddedTaxIncluded = $eykywucwskgqyouq; return $this; } }
