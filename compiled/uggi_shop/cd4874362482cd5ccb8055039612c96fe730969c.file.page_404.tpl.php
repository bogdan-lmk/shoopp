<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-08-14 09:12:46
         compiled from "/home/bod/web/roundhome-dev.bandapixels.com/public_html/design/uggi_shop/html/page_404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16068317285b6f264a187865-55299107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd4874362482cd5ccb8055039612c96fe730969c' => 
    array (
      0 => '/home/bod/web/roundhome-dev.bandapixels.com/public_html/design/uggi_shop/html/page_404.tpl',
      1 => 1534237917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16068317285b6f264a187865-55299107',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b6f264a18f507_09011300',
  'variables' => 
  array (
    'page' => 0,
    'lang' => 0,
    'menu_404' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6f264a18f507_09011300')) {function content_5b6f264a18f507_09011300($_smarty_tpl) {?>





<div class="block padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <?php echo $_smarty_tpl->tpl_vars['page']->value->description;?>

            </div>
            <div class="col-sm-12 col-md-7">
                <div class="menu_404">
                    <div class="text_404">
                        <span data-language="page404_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value->page404_text;?>
</span>
                    </div>
                    
                    <?php echo $_smarty_tpl->tpl_vars['menu_404']->value;?>

                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>
