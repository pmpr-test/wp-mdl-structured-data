<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68e4dd3037f99             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema; use Pmpr\Module\StructuredData\Schema\Organization\EducationalOrganization; use Pmpr\Module\StructuredData\Schema\Organization\Organization; use Pmpr\Module\StructuredData\Traits\OrganizationPersonTrait; use WP_Comment; use WP_Post; use WP_User; class Person extends Thing { use OrganizationPersonTrait; protected $alumniOf = null; protected $jobTitle = null; public function gceeiigeoqmiyums($iqseugmgsgyscgms) : self { $this->alumniOf = $iqseugmgsgyscgms; return $this; } public function ksmseageqmgcaeka() { return $this->alumniOf; } public function gaseqciwmyewoiyu($yqewmcwcikwygcyq) : self { $this->jobTitle = $yqewmcwcikwygcyq; return $this; } public function xueakeiuigiekimq() { return $this->jobTitle; } }
