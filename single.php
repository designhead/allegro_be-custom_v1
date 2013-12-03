<?php

if ( in_category(array(19,20,21)) ) {
include(TEMPLATEPATH . '/single_business_software.php');
}

elseif ( in_category('5') ) {
include(TEMPLATEPATH . '/single_default.php');
}

elseif ( in_category(array(22,23,24,25,42,58,45,57,28,37,38,29,39,30,51,31,52,53)) ) {
include(TEMPLATEPATH . '/single_faq.php');
}

elseif ( in_category(array(12,41,65,66)) ) {
include(TEMPLATEPATH . '/single_other_software_services.php');
}

else {
include(TEMPLATEPATH . '/single_default.php');
}
?>