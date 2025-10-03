<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68dfe8127d0bb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Plugin; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\StructuredData\Container; use Pmpr\Module\StructuredData\MetaBox\FAQPage; use WC_Product; class Woocommerce extends Container { public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('woocommerce_product_tabs', [$this, 'kckuciukkukguqyy'])->cecaguuoecmccuse('woocommerce_structured_data_product', '__return_empty_array'); } public function kckuciukkukguqyy($ywoucyskcquysiwc) { global $product; $umkkkaqkwugkemce = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->iooowgsqoyqseyuu($product); if ($umkkkaqkwugkemce) { $wyikweqowwcaaksk = FAQPage::symcgieuakksimmu(); if (!empty($wyikweqowwcaaksk->seyyiqmgwymyumoq($umkkkaqkwugkemce))) { $ywoucyskcquysiwc['faq'] = [Constants::qescuiwgsyuikume => __('FAQ', PR__CST__FILEFOX), Constants::iuqumwggccmcuyem => 15, Constants::wwgusigoaksqmwsm => [$this, 'seqaeusqowcmoagc']]; } } return $ywoucyskcquysiwc; } public function seqaeusqowcmoagc() { global $product; if ($product instanceof WC_Product) { echo FAQPage::symcgieuakksimmu()->wgqqgewcmcemoewo('', $this->caokeucsksukesyo()->aqasygcsqysmmyke()->iooowgsqoyqseyuu($product)); } } }
