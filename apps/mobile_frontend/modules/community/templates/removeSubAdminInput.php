<?php op_mobile_page_title(__('Demotion of the sub-administrator of this %community%'), $community->getName()) ?>
<?php
op_include_parts('yesNo', 'removeSubAdminConfirmForm', array(
  'body' => __("Do you demote %0% from this %community%'s sub-administrator?", array('%0%' => $member->getName())),
  'yes_form'  => new BaseForm(),
  'no_url'    => url_for('@community_memberManage'),
  'no_method' => 'get',
  'no_form'   => '<input type="hidden" name="id" value="'.$community->getId().'">',
  'align' => 'center',
))
?>
