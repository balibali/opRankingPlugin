<?php
$list = array();
for ($i = 0; $i < $ranking['number']; $i++)
{
  $community = $ranking['model'][$i];
  $list[$i][__('No%0%', array('%0%' => $ranking['rank'][$i]))] =
    link_to($community->getName(), 'community/home?id='.$community->getId()).' '.__(':%0% member', array('%0%' => $ranking['count'][$i]));
  $list[$i][__('Category')] = $community->getCommunityCategory();
  $list[$i][__('Manager')] = $ranking['admin'][$i]->getName();
  $list[$i][__('Description')] = op_truncate($community->getConfig('description'), 36, '', 3);
}

$options = array(
  'title'          => __("The No1 of the number of %community% member is '%0%'", array('%community%' => $op_term['community'], '%0%' => $ranking['model'][0]->getName())),
  'link_to_detail' => 'community/home?id=%d',
  'model'          => $ranking['model'],
  'list'           => $list,
  'rank'           => $ranking['rank'],
);

slot('op_sidemenu');
include_parts('rankingLink', 'RankingLink');
end_slot();
include_parts('rankingResultList', 'RankingResultList', $options);
