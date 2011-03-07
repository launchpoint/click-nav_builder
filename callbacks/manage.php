<?


if(p('cmd')=='refresh')
{
  global $__routes;
  
  foreach($__routes as $k=>$v)
  {
    $i = NavigationItem::find_or_create_by( array(
      'conditions'=>array('function = ?', $k.'_url'),
      'attributes'=>array(
        'function'=>$k.'_url',
        'label'=>humanize($k),
      ),
    ));
  }
  
  flash_next('Functions refreshed.');
  redirect_to(manage_navigation_url());
}


$objs = NavigationItem::find_all(array(
  'order'=>'is_active desc, weight, label'
));

$meta = array(
  'klass'=>'NavigationItem',
  'objects'=>$objs,
  'list'=>array('label', 'is_active'),
);

echo button_to('Refresh Functions', command_url('refresh'));
superlist($meta);