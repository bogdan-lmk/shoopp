<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-08-14 09:12:46
         compiled from "/home/bod/web/roundhome-dev.bandapixels.com/public_html/design/uggi_shop/html/cart_purchases.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16201458365b705d0c4045f2-41660841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac0807b57ea7ef272778291ff1b3d4ef512cdeb4' => 
    array (
      0 => '/home/bod/web/roundhome-dev.bandapixels.com/public_html/design/uggi_shop/html/cart_purchases.tpl',
      1 => 1534237916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16201458365b705d0c4045f2-41660841',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b705d0c4fcd53_43294913',
  'variables' => 
  array (
    'lang' => 0,
    'cart' => 0,
    'lang_link' => 0,
    'purchase' => 0,
    'settings' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b705d0c4fcd53_43294913')) {function content_5b705d0c4fcd53_43294913($_smarty_tpl) {?><div class="purchase popup-form-info--basket">
  <div class="popup-form-info--basket">
    
    <div class="popup-form-name-row--basket popup-form-row--basket">
      <span class="popup-form-name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_head_name;?>
</span></div>
    <div class="popup-form-total-row--basket popup-form-row--basket">
      <span class="popup-form-total"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_head_amoun;?>
</span></div>
    <div class="popup-form-price-row--basket popup-form-row--basket">
      <span class="popup-form-price"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_head_price;?>
</span></div>
    

</div>
    <div class="popup-form-items-content--basket">
    <?php  $_smarty_tpl->tpl_vars['purchase'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['purchase']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value->purchases; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->key => $_smarty_tpl->tpl_vars['purchase']->value) {
$_smarty_tpl->tpl_vars['purchase']->_loop = true;
?>

            
            

            
          <div class="popup-form-items-row">
            <div class="popup-items-name-row">
                <a class="purchase_name popup-items-name" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['purchase']->value->product->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                <i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->variant->name, ENT_QUOTES, 'UTF-8', true);?>
</i>
                <?php if ($_smarty_tpl->tpl_vars['purchase']->value->variant->stock==0) {?><span class="preorder_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_pre_order;?>
</span><?php }?>
            </div>


            
            

            
            <td class="purchase_amount">
                <div class="fn_product_amount popup-items-total <?php if ($_smarty_tpl->tpl_vars['settings']->value->is_preorder) {?> fn_is_preorder<?php }?> amount">
                    <span class="minus">&minus;</span>
                    <input class="input_amount item-amount" type="text" data-id="<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->id;?>
" name="amounts[<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['purchase']->value->amount;?>
" onblur="ajax_change_amount(this, <?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->id;?>
);" data-max="<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->stock;?>
">
                    <span class="plus">&plus;</span>
                </div>
            </td>
            
              <div class="popup-items-price-row"><span class="popup-items-price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['purchase']->value->variant->price));?>
 <?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
 <?php if ($_smarty_tpl->tpl_vars['purchase']->value->variant->units) {?>/ <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->variant->units, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span></div>
          </div>
            


            
            
    <?php } ?>
</div>
    
    

    
    

    <tfoot>
        <tr>
            
                

                    
                    

                    
                    
                

            
                
                <div class="popup-form-row popup-form-row--basket-info">
                  <div class="basket-info"><span class="cart_total_pricetext-count text-count">Количество товаров</span><span class="total-items-in-basket" disabled="disabled"><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
</span></div>
                  <div class="basket-info"><span class="cart_total_price text-sum"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_total_price;?>
:</span><span class="total-price-in-basket total_sum nowrap"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['cart']->value->total_price);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span></div>
                </div>
                
            

            
          <div class="button-wrap button-wrap--basket">
            <button class="btn btn--black btn-call-me">Оформить заказ</button>
            <button class="btn btn-large btn--white">Продолжить покупки</button>
            <div class="action-link-row action-link-row--basket">
              <svg class="icon icon-close icon-close-basket " onclick="ajax_remove(<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->id;?>
);return false;">
                <use xlink:href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/img/svg/symbol/sprite.svg#close"></use>
              </svg>
              <a class="action-link--clear"  onclick="closeBasket(); ajax_remove(<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->id;?>
);return false;">  очистить</a>
            </div>
          </div>
<?php }} ?>
