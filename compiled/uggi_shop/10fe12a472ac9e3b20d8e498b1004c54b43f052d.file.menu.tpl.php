<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-08-14 09:12:45
         compiled from "/home/bod/web/roundhome-dev.bandapixels.com/public_html/design/uggi_shop/html/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14808481805b6f2637925372-35822734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10fe12a472ac9e3b20d8e498b1004c54b43f052d' => 
    array (
      0 => '/home/bod/web/roundhome-dev.bandapixels.com/public_html/design/uggi_shop/html/menu.tpl',
      1 => 1534237916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14808481805b6f2637925372-35822734',
  'function' => 
  array (
    'menu_items_tree' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b6f263799bcb4_04818185',
  'variables' => 
  array (
    'menu_items' => 0,
    'item' => 0,
    'level' => 0,
  ),
  'has_nocache_code' => 0,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6f263799bcb4_04818185')) {function content_5b6f263799bcb4_04818185($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['menu_items']->value) {?>
    <div class="content-row content-row--navigation">
        <?php if (!function_exists('smarty_template_function_menu_items_tree')) {
    function smarty_template_function_menu_items_tree($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['menu_items_tree']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
            <?php if ($_smarty_tpl->tpl_vars['menu_items']->value) {?>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->visible==1) {?>
                            <li class="nav-list nav-list--main">
                                <a class="nav-link nav-link--main" href="<?php if ($_smarty_tpl->tpl_vars['item']->value->url) {?><?php echo $_smarty_tpl->tpl_vars['item']->value->url;?>
<?php } else { ?>javascript:;<?php }?>" <?php if (!$_smarty_tpl->tpl_vars['item']->value->submenus&&$_smarty_tpl->tpl_vars['item']->value->is_target_blank) {?>target="_blank"<?php }?>>
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                 </a>
                                <?php smarty_template_function_menu_items_tree($_smarty_tpl,array('menu_items'=>$_smarty_tpl->tpl_vars['item']->value->submenus,'level'=>$_smarty_tpl->tpl_vars['level']->value+1));?>

                            </li>
                        <?php }?>
                    <?php } ?>
            <?php }?>
        <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

        <?php smarty_template_function_menu_items_tree($_smarty_tpl,array('menu_items'=>$_smarty_tpl->tpl_vars['menu_items']->value,'level'=>1));?>

    </div>
<?php }?>
<?php }} ?>
