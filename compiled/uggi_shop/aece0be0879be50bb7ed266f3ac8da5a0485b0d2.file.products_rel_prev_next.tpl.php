<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-08-11 18:08:55
         compiled from "/home/bod/web/roundhome-dev.bandapixels.com/public_html/design/uggi_shop/html/products_rel_prev_next.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8396757675b6f2637a354f3-06816387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aece0be0879be50bb7ed266f3ac8da5a0485b0d2' => 
    array (
      0 => '/home/bod/web/roundhome-dev.bandapixels.com/public_html/design/uggi_shop/html/products_rel_prev_next.tpl',
      1 => 1534009162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8396757675b6f2637a354f3-06816387',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total_pages_num' => 0,
    'current_page_num' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b6f2637a5e090_79138225',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6f2637a5e090_79138225')) {function content_5b6f2637a5e090_79138225($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['total_pages_num']->value>1) {?>
    <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==$_smarty_tpl->tpl_vars['total_pages_num']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==2) {?>
            <link rel="prev" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('page'=>null),$_smarty_tpl);?>
"/>
        <?php } else { ?>
            <link rel="prev" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value-1),$_smarty_tpl);?>
"/>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['current_page_num']->value==1) {?>
        <link rel="next" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('page'=>2),$_smarty_tpl);?>
"/>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==2) {?>
            <link rel="prev" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('page'=>null),$_smarty_tpl);?>
"/>
        <?php } else { ?>
            <link rel="prev" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value-1),$_smarty_tpl);?>
"/>
        <?php }?>
        <link rel="next" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value+1),$_smarty_tpl);?>
"/>
    <?php }?>
<?php }?><?php }} ?>
