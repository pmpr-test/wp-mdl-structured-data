<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e1693ca0336             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\MetaBox; use Pmpr\Module\StructuredData\Container; use Pmpr\Module\StructuredData\StructuredData; abstract class Tab extends Container { protected array $data = []; public function wigskegsqequoeks() { $this->waqewsckuayqguos('single_after_content', [$this, 'ieoqyoeecukogies'])->waqewsckuayqguos('single_before_content', [$this, 'eweuqkioyiiiqgcw']); } public function kgquecmsgcouyaya() { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $ymqmyyeuycgmigyo = $yyauwyaeewsickwk->kwuyaykukcmaqggg($yyauwyaeewsickwk->mkwcwqkqeqkqyggc($this)); $this->aqaqisyssqeomwom("get_{$ymqmyyeuycgmigyo}_data", [$this, 'seyyiqmgwymyumoq'])->aqaqisyssqeomwom(StructuredData::ocmiuacywmgycowk . 'meta_box_tabs', [$this, 'aoukuouwimcigeqe'])->aqaqisyssqeomwom(StructuredData::ocmiuacywmgycowk . "get_{$ymqmyyeuycgmigyo}_data", [$this, 'cqusuyikwqoycomu'], 10, 2); parent::kgquecmsgcouyaya(); } public function render() { } public function aoukuouwimcigeqe($ywoucyskcquysiwc = []) { return $ywoucyskcquysiwc; } public function eweuqkioyiiiqgcw($post) { } public function ieoqyoeecukogies($post) { } public function cqusuyikwqoycomu($icwicymcioeyeyek, $post) { return $this->seyyiqmgwymyumoq($post); } public function seyyiqmgwymyumoq($post = null) { return $this->data; } public function mgoekicaagiaeuki($icwicymcioeyeyek) : self { $this->data = $icwicymcioeyeyek; return $this; } public function ykqmgooyokusewai($eqgoocgaqwqcimie, $uusmaiomayssaecw = null) : self { if ($eqgoocgaqwqcimie) { if ($uusmaiomayssaecw) { $this->data[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; } else { $this->data[] = $eqgoocgaqwqcimie; } } return $this; } }
