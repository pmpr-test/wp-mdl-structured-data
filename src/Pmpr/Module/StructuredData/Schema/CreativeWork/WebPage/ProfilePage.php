<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d46f49088a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork\WebPage; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\StructuredData\Schema\CreativeWork\MediaObject\ImageObject; use Pmpr\Module\StructuredData\Schema\Person; class ProfilePage extends WebPage { public function __construct($goiqeyeaqmicqiky = true) { if ($goiqeyeaqmicqiky) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $gsqycqmccqgwosck = $this->uwkmaywceaaaigwo()->mguqscccckuywsya(); $post = $seumokooiykcomco->get(); $qscaoekmoooeuyqg = $seumokooiykcomco->mguqscccckuywsya($post); $this->kwcomqeygmcaegeo(sprintf(__("\101\142\x6f\165\164\40\x25\163", PR__MDL__STRUCTURED_DATA), $gsqycqmccqgwosck->get()))->keogoququwauweom((new Person())->mwiamauscyiwogsu(new ImageObject())->gucwmccyimoagwcm($gsqycqmccqgwosck->igawqaomowicuayw(Constants::eqkeooqcsscoggia)))->eyqkogeiqauioamw(esc_url($gsqycqmccqgwosck->mkaiaewoyaimieqg($qscaoekmoooeuyqg)))->iaqckqwoiseyqaku(); } parent::__construct($goiqeyeaqmicqiky); } }
