<?php
slot('op_sidemenu');
include_parts('rankingLink', 'RankingLink');
end_slot();
include_box('friend_list', __('Member of number No1 of %friend%', array('%friend%' => $op_term['friend']->pluralize())), __('There is no member who has a %friend%'));
?>

<?php use_helper('Javascript') ?>
<?php op_include_line('backLink', link_to_function(__('Back to previous page'), 'history.back()')) ?>
