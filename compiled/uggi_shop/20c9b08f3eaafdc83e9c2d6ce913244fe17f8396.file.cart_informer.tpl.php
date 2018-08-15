<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-08-14 09:12:46
         compiled from "/home/bod/web/roundhome-dev.bandapixels.com/public_html/design/uggi_shop/html/cart_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16146097575b6f2637ecdf83-72220329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20c9b08f3eaafdc83e9c2d6ce913244fe17f8396' => 
    array (
      0 => '/home/bod/web/roundhome-dev.bandapixels.com/public_html/design/uggi_shop/html/cart_informer.tpl',
      1 => 1534237916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16146097575b6f2637ecdf83-72220329',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b6f2637edf492_56956703',
  'variables' => 
  array (
    'cart' => 0,
    'settings' => 0,
    'lang' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6f2637edf492_56956703')) {function content_5b6f2637edf492_56956703($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['cart']->value->total_products>0) {?>
    <div  class="cart_info basket-wrap" data-button-basket="1">
      <svg class="icon icon-basket ">
        <use xlink:href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/img/svg/symbol/sprite.svg#basket"></use>
        <span class="cart_counter items-amount"><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
</span>
        <!-- <span class="cart_title" data-language="index_cart"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_cart;?>
</span> -->
        <!-- <span class="cart_total"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['cart']->value->total_price));?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span> -->
    </div >
<?php } else { ?>
    <div class="cart_info  basket-wrap" data-button-basket="1">
      <svg class="icon icon-basket ">
        <use xlink:href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/img/svg/symbol/sprite.svg#basket"></use>
        <span class="cart_counter items-amount"><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
</span>
        <!-- <span class="cart_title" data-language="index_cart"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_cart;?>
</span> -->
        <!-- <span class="cart_total"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['cart']->value->total_price));?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span> -->
    </div>
<?php }?>
<?php }} ?>
