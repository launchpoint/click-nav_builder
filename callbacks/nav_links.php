<?

$items = NavigationItem::find_all( array(
  'conditions'=>'is_active = 1',
  'order'=>'weight'
));

$links = array();

foreach($items as $i)
{
  $links[] = array('href'=>call_user_func($i->function), 'label'=>$i->label);
}