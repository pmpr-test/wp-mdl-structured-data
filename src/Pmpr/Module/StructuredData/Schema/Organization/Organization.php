<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d4bba9dd7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\Organization; use Pmpr\Module\StructuredData\Schema\CreativeWork\MediaObject\ImageObject; use Pmpr\Module\StructuredData\Schema\Intangible\Rating\AggregateRating; use Pmpr\Module\StructuredData\Schema\Intangible\StructuredValue\ContactPoint\PostalAddress; use Pmpr\Module\StructuredData\Schema\Place\Place; use Pmpr\Module\StructuredData\Schema\Thing; use Pmpr\Module\StructuredData\Traits\OrganizationPersonTrait; class Organization extends Thing { use OrganizationPersonTrait; protected $logo = null; protected ?string $email = null; protected ?string $telephone = null; protected ?string $areaServed = null; protected ?PostalAddress $address = null; protected ?AggregateRating $aggregateRating = null; public function cseqaqmuaswgwuoo() : string { return $this->email; } public function oeogosayocuskygw(string $owaiikyuwwwmswgc) { $this->email = $owaiikyuwwwmswgc; return $this; } public function gckekgcikugasqwu() { return $this->logo; } public function wqkwkoysgkaaewkc($weowoqykiyuqcwam) { $this->logo = $weowoqykiyuqcwam; return $this; } public function wuoiwkucmsqqeeme() : string { return $this->telephone; } public function sweikoswukusgwwo(string $mseqekmwiimayuek) { $this->telephone = $mseqekmwiimayuek; return $this; } public function oeaeiissukoeowwe() : ?AggregateRating { return $this->aggregateRating; } public function nsqwikmawcqqyayk(?AggregateRating $gggmygsysokgmaiq) { $this->aggregateRating = $gggmygsysokgmaiq; return $this; } public function muuoiamcuueieaoi() { return $this->address; } public function cseiuayiuyawqqkw(PostalAddress $iuwcwgqmsmawoigq) { $this->address = $iuwcwgqmsmawoigq; return $this; } public function qmgkkgiuwuwiamyi($amcgcekcaqaiayuu) : Organization { $this->areaServed = $amcgcekcaqaiayuu; return $this; } public function gcygcoaugumeyaas() : string { return $this->areaServed; } }
