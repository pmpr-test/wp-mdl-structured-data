<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67ceddae29f34             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\Intangible\Offer; use Pmpr\Module\StructuredData\Schema\Intangible\Intangible; use Pmpr\Module\StructuredData\Schema\Organization\Organization; class Offer extends Intangible { protected ?string $priceCurrency = null; protected ?string $price = null; protected ?Organization $seller = null; protected ?string $availability = null; protected ?string $priceValidUntil = null; protected $hasOfferCatalog = null; public function qqiaccgweweoigwc(?string $wwoaqaicmwyayksi) : self { $this->priceCurrency = $wwoaqaicmwyayksi; return $this; } public function gumawiymasmgwskq(?string $aumscagymwyyicag) : self { $this->price = $aumscagymwyyicag; return $this; } public function iwqqooocksemkogq($imooqykauqyyswsw) : self { if (!is_string($imooqykauqyyswsw)) { $imooqykauqyyswsw = $imooqykauqyyswsw ? 'InStock' : 'OutOfStock'; $this->availability = "https://schema.org/{$imooqykauqyyswsw}"; } return $this; } public function amwiucgmuowkauue(?Organization $qqgseaigcecoiwew) : self { $this->seller = $qqgseaigcecoiwew; return $this; } public function ykmkuoeiqecoommu(?string $usukmucoosgeowwu) : self { $this->priceValidUntil = $usukmucoosgeowwu; return $this; } }
