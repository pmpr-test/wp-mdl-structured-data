<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d01b9cd35dc             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\Intangible\StructuredValue\ContactPoint; use Pmpr\Module\StructuredData\Setting; class PostalAddress extends ContactPoint { protected ?string $postalCode = null; protected ?string $addressRegion = null; protected ?string $streetAddress = null; protected ?string $addressCountry = null; protected ?string $addressLocality = null; protected ?string $postOfficeBoxNumber = null; public function __construct() { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $agwamyeymqaiuwgk = Setting::symcgieuakksimmu()->amemeossuowwgsmo(); $this->kiwqskkuyiyykqea($gkyciwoiiisgywcs->get($agwamyeymqaiuwgk, Setting::acsumqomaoqywmks))->egsmocswkweayewk($gkyciwoiiisgywcs->get($agwamyeymqaiuwgk, Setting::kgqkweuagysiswwi))->gewiqeuakougiuwy($gkyciwoiiisgywcs->get($agwamyeymqaiuwgk, Setting::ykicocoewwsgqswe))->oyicmcauoiuygyeo($gkyciwoiiisgywcs->get($agwamyeymqaiuwgk, Setting::euaageieksayiceq))->smuuqiawqukweeqi($gkyciwoiiisgywcs->get($agwamyeymqaiuwgk, Setting::owameugmcuwyqcmq))->mcycmqaawmcwecso($gkyciwoiiisgywcs->get($agwamyeymqaiuwgk, Setting::cqikcoskqewweuuk)); parent::__construct(); } public function guowuukcooaissic() { return $this->addressCountry; } public function gewiqeuakougiuwy(string $cqmeayuwuckoskoq) { $this->addressCountry = $cqmeayuwuckoskoq; return $this; } public function oisowgaowgysagsk() { return $this->addressLocality; } public function smuuqiawqukweeqi(string $somwkmoggimgkkqs) { $this->addressLocality = $somwkmoggimgkkqs; return $this; } public function ksiismgygcsuwosy() { return $this->addressRegion; } public function kiwqskkuyiyykqea(string $sgqykuqiuqcqaaig) { $this->addressRegion = $sgqykuqiuqcqaaig; return $this; } public function oakycyigckisigio() { return $this->postOfficeBoxNumber; } public function mcycmqaawmcwecso(string $cgwscumyeqqgqowe) { $this->postOfficeBoxNumber = $cgwscumyeqqgqowe; return $this; } public function qygacesqaaecckea() { return $this->postalCode; } public function oyicmcauoiuygyeo(string $ueicassgwemgyyiw) { $this->postalCode = $ueicassgwemgyyiw; return $this; } public function qkkeswykequuaqmm() { return $this->streetAddress; } public function egsmocswkweayewk(string $quwaiucmgymqmkwq) { $this->streetAddress = $quwaiucmgymqmkwq; return $this; } }
