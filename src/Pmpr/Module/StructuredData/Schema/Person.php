<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67053533b0d9b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema; use WP_Comment; use WP_Post; use WP_User; class Person extends Thing { public function __construct($ccamueccusigaaio = null, $goiqeyeaqmicqiky = true) { $this->isGlobal = true; if ($ccamueccusigaaio && $goiqeyeaqmicqiky) { $eeamcawaiqocomwy = null; $ymqmyyeuycgmigyo = null; if ($ccamueccusigaaio instanceof WP_Comment) { $iiyososeqgecqayy = $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs(); $ymqmyyeuycgmigyo = $iiyososeqgecqayy->mguqscccckuywsya($ccamueccusigaaio); if ($ccamueccusigaaio->user_id) { $eeamcawaiqocomwy = $iiyososeqgecqayy->qkweigiqsaaigqau($ccamueccusigaaio); $ccamueccusigaaio = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($ccamueccusigaaio->user_id); } else { $ccamueccusigaaio = crc32($ccamueccusigaaio->comment_author_email); } } elseif ($ccamueccusigaaio instanceof WP_Post) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $qscaoekmoooeuyqg = $seumokooiykcomco->mguqscccckuywsya($ccamueccusigaaio); $ymqmyyeuycgmigyo = $seumokooiykcomco->ygwimyogyaqgumam($qscaoekmoooeuyqg); $eeamcawaiqocomwy = $seumokooiykcomco->qkweigiqsaaigqau($ccamueccusigaaio); $ccamueccusigaaio = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($qscaoekmoooeuyqg); } elseif ($ccamueccusigaaio instanceof WP_User) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->mguqscccckuywsya()->mkaiaewoyaimieqg($ccamueccusigaaio); $ymqmyyeuycgmigyo = $this->caokeucsksukesyo()->issssuygyewuaswa()->ygwimyogyaqgumam($ccamueccusigaaio); } $this->usuqmwksoeaayaig($ymqmyyeuycgmigyo)->eyqkogeiqauioamw($eeamcawaiqocomwy)->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->oockkiieqcwiocga($ccamueccusigaaio)); } parent::__construct($goiqeyeaqmicqiky); } }
