<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68e4de4a5f042             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\Intangible\StructuredValue; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\StructuredData\Schema\Action\Action; class InteractionCounter extends StructuredValue { protected $interactionType = null; protected int $userInteractionCount = 0; public function yuyykqaicekauosa(int $omakqiyyomoumagy) : self { $this->userInteractionCount = $omakqiyyomoumagy; return $this; } public function yoyeieyucyyggmyy($sasqmowcecowqika) : self { if (in_array($sasqmowcecowqika, ['follow', 'write', 'link', Constants::COMMENT, Constants::uwycywkimsycqwcy], true)) { $sasqmowcecowqika = "https://schema.org/" . ucfirst($sasqmowcecowqika) . "Action"; } $this->interactionType = $sasqmowcecowqika; return $this; } }
