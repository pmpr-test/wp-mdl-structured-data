<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d4bba9dd7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork\Article; use Pmpr\Module\StructuredData\Schema\CreativeWork\CreativeWork; class Article extends CreativeWork { protected $backStory = null; protected int $wordCount = 0; protected ?string $articleBody = null; protected ?string $articleSection = null; public function ccycowykkkuseiye() : string { return $this->articleBody; } public function kygcaauaawiqycqi($mgkkocsqmesceqka) : Article { if ($mgkkocsqmesceqka && is_string($mgkkocsqmesceqka)) { $this->articleBody = $this->caokeucsksukesyo()->owgcciayoweymuws()->kogyygyqqyqcioeg(strip_shortcodes(strip_tags($mgkkocsqmesceqka)), 2000); } return $this; } public function gcawsewyqsiiwuao() : string { return $this->articleSection; } public function wakseuguomugicme(string $uoawyyacuissyaac) : Article { $this->articleSection = $uoawyyacuissyaac; return $this; } public function comqiismsekuoeec() { return $this->backStory; } public function eswyscwkqgwwmwkc($smgomyyiawqoyyse) { $this->backStory = $smgomyyiawqoyyse; return $this; } public function cicqawoimmoyyaio() : int { return $this->wordCount; } public function wocmweesiwocsmua(int $cqkugkyukikgyyyk) : Article { $this->wordCount = $cqkugkyukikgyyyk; return $this; } }
