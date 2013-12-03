<?php

if ( is_category(array(5,47,48,43)) ) {
include(TEMPLATEPATH . '/category-latest-news.php');
}

elseif ( is_category(array(7,33,35,44)) ) {
include(TEMPLATEPATH . '/category-jobs.php');
}

elseif ( is_category(array(49,50,54,55)) ) {
include(TEMPLATEPATH . '/category-resellers.php');
}

elseif ( is_category(array(12,41,65,66)) ) {
include(TEMPLATEPATH . '/category-other-software-services.php');
}

else {
include(TEMPLATEPATH . '/category_default.php');
}
?>