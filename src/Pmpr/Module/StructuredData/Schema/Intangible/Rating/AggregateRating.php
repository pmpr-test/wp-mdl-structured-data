<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ecad49867             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\Intangible\Rating; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\StructuredData\Schema\Thing; class AggregateRating extends Rating { protected ?int $reviewCount = 0; protected ?int $ratingCount = 0; protected ?Thing $itemReviewed = null; public function __construct($qqyuqswckkcomeak = null, $goiqeyeaqmicqiky = true) { if (!($qqyuqswckkcomeak && $goiqeyeaqmicqiky)) { goto igymseewwyiocoug; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $gaeqamemwmwsyukm = $gkyciwoiiisgywcs->get($qqyuqswckkcomeak, Constants::qiyqwyiiwykeccmo, 0); $qkcymeiwcsikkkkk = $gkyciwoiiisgywcs->get($qqyuqswckkcomeak, Constants::yokmsocosssowgke, 0); $wiiqgewkwwkaukyo = $gkyciwoiiisgywcs->get($qqyuqswckkcomeak, Constants::yewgggaqoacewaai, 0); $this->aqgscesisoeawose((int) $gaeqamemwmwsyukm)->euaugmcwosukseuy((int) $qkcymeiwcsikkkkk)->squsoiakemiuoouq(round((float) $wiiqgewkwwkaukyo, 2)); igymseewwyiocoug: parent::__construct($goiqeyeaqmicqiky); } public function iiqgqiuayuwcueys() : ?Thing { return $this->itemReviewed; } public function mwyyceoeyyyqsiou(?Thing $ccqeayaegooouysc) { $this->itemReviewed = $ccqeayaegooouysc; return $this; } public function wemamaiqweumqsqo() : ?int { return $this->ratingCount; } public function aqgscesisoeawose(?int $yoecwgecueuaaueu) { $this->ratingCount = $yoecwgecueuaaueu; return $this; } public function mykgeucqkcaaakce() : ?int { return $this->reviewCount; } public function euaugmcwosukseuy(?int $geosgykscusuqmae) { $this->reviewCount = $geosgykscusuqmae; return $this; } }
