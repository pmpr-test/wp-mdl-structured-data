<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67053261c02e5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Module\StructuredData\DataType\Identifier; use Pmpr\Module\StructuredData\StructuredData; use WP_User; class Base { use HookTrait, HelperTrait, WrapperTrait; protected ?string $id = null; protected ?string $type = null; protected bool $isGlobal = false; public function cykmceoageywgkqs() : bool { return $this->isGlobal; } public function mwikyscisascoeea() : ?string { if (!$this->id) { $this->iaqckqwoiseyqaku(); } return $this->id; } public function ggiaseqygioygumq(?string $aokagokqyuysuksm) : Base { $this->id = $aokagokqyuysuksm; return $this; } public function iaqckqwoiseyqaku(?Identifier $owqaeesoaygymmcy = null) { $yyimiwcuegayoskq = $this->caokeucsksukesyo()->kyqakacqeumicgag()->iqoacwuiemooiysg(); $wamcomkuwysqgwgk = "\45\61\44\x73\57\45\62\44\x73\x2f"; $migiiksoiymissge = null; $ccamueccusigaaio = null; $momcykaoccoymeig = null; $sqeykgyoooqysmca = null; if ($owqaeesoaygymmcy) { $migiiksoiymissge = $owqaeesoaygymmcy->ycqquoiyyuesegsy(); $ccamueccusigaaio = $owqaeesoaygymmcy->squsacgomqgkakaw(); $momcykaoccoymeig = $owqaeesoaygymmcy->mwikyscisascoeea(); $sqeykgyoooqysmca = $owqaeesoaygymmcy->gueasuouwqysmomu(); } if (!$migiiksoiymissge) { $migiiksoiymissge = $this->ycqquoiyyuesegsy($this->cykmceoageywgkqs(), $yyimiwcuegayoskq); } $migiiksoiymissge = trailingslashit($migiiksoiymissge); if ($ccamueccusigaaio instanceof WP_User) { $migiiksoiymissge .= sprintf($wamcomkuwysqgwgk, Constants::meksegaoamowuwoq, $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($ccamueccusigaaio, true)); } elseif ($ccamueccusigaaio && (is_string($ccamueccusigaaio) || is_numeric($ccamueccusigaaio))) { $migiiksoiymissge .= "{$ccamueccusigaaio}\x2f"; } if (!$sqeykgyoooqysmca) { $sqeykgyoooqysmca = $this->gueasuouwqysmomu(); } if ($momcykaoccoymeig) { $sqeykgyoooqysmca .= "\x2d{$momcykaoccoymeig}"; } return $this->ggiaseqygioygumq(urlencode($this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($migiiksoiymissge)) . "\x23{$sqeykgyoooqysmca}"); } public function cyamgsaeyiqasmcc() { return new Identifier(); } public function gueasuouwqysmomu() { if (!$this->type) { $this->aseocggwwegcmqes($this->caokeucsksukesyo()->owgcciayoweymuws()->mkwcwqkqeqkqyggc($this)); } return $this->type; } public function mewggysoioyqegcw(string $oaukocmsckciqaok) { return $this->{$oaukocmsckciqaok}; } public function ecioiwwikqqgwqee(string $oaukocmsckciqaok, $eqgoocgaqwqcimie) { if ($eqgoocgaqwqcimie !== null) { $this->{$oaukocmsckciqaok} = $eqgoocgaqwqcimie; } return $this; } public function kmykkqwsssqqmwmg($uomewyckeuqoqocu = [], $oomggoqacsumwqqu = false) { if (!$uomewyckeuqoqocu) { $uomewyckeuqoqocu = $this->kikmasogcikysciu(); } array_filter($uomewyckeuqoqocu); $uomewyckeuqoqocu = ["\100\x63\157\x6e\164\145\170\164" => "\150\164\x74\160\x3a\x2f\57\163\143\150\145\155\x61\56\157\162\x67\x2f"] + $uomewyckeuqoqocu; $qouiiuamucsomays = ''; if ($uomewyckeuqoqocu) { if ($oomggoqacsumwqqu && strnatcmp(PHP_VERSION, "\65\56\64\x2e\x30") >= 0) { $qouiiuamucsomays = json_encode($uomewyckeuqoqocu, JSON_PRETTY_PRINT | JSON_HEX_QUOT | JSON_UNESCAPED_SLASHES); } else { $qouiiuamucsomays = json_encode($uomewyckeuqoqocu, JSON_HEX_QUOT | JSON_UNESCAPED_SLASHES); } } return $qouiiuamucsomays; } public function kikmasogcikysciu() { $sogksuscggsicmac = ["\100\164\171\x70\x65" => $this->gueasuouwqysmomu(), "\x40\151\x64" => $this->mwikyscisascoeea()]; $aowmesqseaiqimyu = [Constants::squoamkioomemiyi, Constants::gouqcwikiiygyasc, "\x69\x73\107\x6c\x6f\142\141\x6c", "\x68\x65\x6c\160\145\162", "\167\x72\x61\160\x70\x65\x72"]; foreach (get_object_vars($this) as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (!in_array($uusmaiomayssaecw, $aowmesqseaiqimyu)) { $uusmaiomayssaecw = $this->ougekwycicscwquc($uusmaiomayssaecw); if (is_array($eqgoocgaqwqcimie)) { $eqiiwaeiswqmusqm = []; foreach ($eqgoocgaqwqcimie as $wgywewwaswowuooi => $mokouoooiwsmcmiu) { $wgywewwaswowuooi = $this->ougekwycicscwquc($wgywewwaswowuooi); if ($mokouoooiwsmcmiu instanceof Thing) { $eqiiwaeiswqmusqm[$wgywewwaswowuooi] = $mokouoooiwsmcmiu->kikmasogcikysciu(); } else { $eqiiwaeiswqmusqm[$wgywewwaswowuooi] = $mokouoooiwsmcmiu; } } $sogksuscggsicmac[$uusmaiomayssaecw] = $eqiiwaeiswqmusqm; } else { if ($eqgoocgaqwqcimie instanceof Thing) { $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie->kikmasogcikysciu(); } else { $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; } } } } $sogksuscggsicmac = array_filter($sogksuscggsicmac); return $sogksuscggsicmac; } private function ougekwycicscwquc($eqgoocgaqwqcimie) { if (strpos($eqgoocgaqwqcimie, "\137") !== false) { $eqgoocgaqwqcimie = str_replace("\137", "\x2d", $eqgoocgaqwqcimie); } return $eqgoocgaqwqcimie; } public function qcgakseyaikigqco($post = null) : ?string { return $this->sasweaqkmcaqweec($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($post)); } public function ycqquoiyyuesegsy($sycgeiyakseiumqy = false, $yyimiwcuegayoskq = null) { return StructuredData::symcgieuakksimmu()->ycqquoiyyuesegsy($sycgeiyakseiumqy, $yyimiwcuegayoskq); } public function aseocggwwegcmqes(string $sqeykgyoooqysmca) : Base { $this->type = $sqeykgyoooqysmca; return $this; } public function weymkusmeageugsu($post = null) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->squyiyimquqicqke("\x63", $post, false); } public function osswsoymmgisqmoy($post = null) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->oukqamgqowciwoum("\x63", $post, false); } public function owmuuoycwiskaeme($mkuwoiyskieqciqe) { $owmuuoycwiskaeme = ''; if (!empty($mkuwoiyskieqciqe)) { $immmocykksywgkqu = floor($mkuwoiyskieqciqe / 86400); $mkuwoiyskieqciqe = $mkuwoiyskieqciqe % 86400; $kqqiasykicusiqaw = floor($mkuwoiyskieqciqe / 3600); $mkuwoiyskieqciqe = $mkuwoiyskieqciqe % 3600; $scuieskcukagwiys = floor($mkuwoiyskieqciqe / 60); $mkuwoiyskieqciqe = $mkuwoiyskieqciqe % 60; $owmuuoycwiskaeme = sprintf("\x50\x25\144\104\124\x25\x64\x48\45\144\x4d\x25\144\123", $immmocykksywgkqu, $kqqiasykicusiqaw, $scuieskcukagwiys, $mkuwoiyskieqciqe); } return $owmuuoycwiskaeme; } public function sasweaqkmcaqweec(?string $sociqikgoyemqaac) : ?string { if (!mb_detect_encoding($sociqikgoyemqaac, "\x75\x74\146\x2d\x38", true)) { $sociqikgoyemqaac = utf8_encode($sociqikgoyemqaac); } return $sociqikgoyemqaac; } }
