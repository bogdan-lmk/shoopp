<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-08-14 09:12:45
         compiled from "/home/bod/web/roundhome-dev.bandapixels.com/public_html/design/uggi_shop/html/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:217814995b6f26af356ab4-71739210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1441e94fe8f691ed0c4254a8945138daf735a07e' => 
    array (
      0 => '/home/bod/web/roundhome-dev.bandapixels.com/public_html/design/uggi_shop/html/main.tpl',
      1 => 1534237916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '217814995b6f26af356ab4-71739210',
  'function' => 
  array (
    'categories_tree' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b6f26af3582e9_51249661',
  'variables' => 
  array (
    'is_mobile' => 0,
    'is_tablet' => 0,
    'banner_group1' => 0,
    'bi' => 0,
    'config' => 0,
    'settings' => 0,
    'new_products' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6f26af3582e9_51249661')) {function content_5b6f26af3582e9_51249661($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable('', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
<section class="sales-block">
  <div class="container column">
  <div id="fn_content" class="main">
    
    <?php if ($_smarty_tpl->tpl_vars['is_mobile']->value===false&&$_smarty_tpl->tpl_vars['is_tablet']->value===false) {?>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_banner'][0][0]->get_banner_plugin(array('var'=>'banner_group1','group'=>'group1'),$_smarty_tpl);?>

        <?php if ($_smarty_tpl->tpl_vars['banner_group1']->value->items) {?>
            <div class="fn_banner_group1 banners container">
                <?php  $_smarty_tpl->tpl_vars['bi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner_group1']->value->items; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bi']->key => $_smarty_tpl->tpl_vars['bi']->value) {
$_smarty_tpl->tpl_vars['bi']->_loop = true;
?>
                    <div>
                        <?php if ($_smarty_tpl->tpl_vars['bi']->value->url) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['bi']->value->url;?>
" target="_blank">
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['bi']->value->image) {?>
                                <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['bi']->value->image,1170,390,false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['bi']->value->alt;?>
" title="<?php echo $_smarty_tpl->tpl_vars['bi']->value->title;?>
"/>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['bi']->value->url) {?>
                        </a>
                        <?php }?>
                    </div>
                <?php } ?>
                  </div>
                </div>
              </div>
            </section>
        <?php }?>
    <?php }?>
</section>
<section class="benefits">
  <div class="container">
    <div class="content-row content-row--card justify-content-between">
      <div class="benefit-card">
        <div class="icon-wrap">
          <svg class="icon icon-bf-icon-1 bf-icons">
            <use xlink:href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/img/svg/symbol/sprite.svg#bf-icon-1"></use>
          </svg>
        </div>
        <div class="benefit-card--content">
          <h3 class="benefit-card-name">Бесплатная доставка</h3>
          <p class="text benefit-card-text">Бесплатная доставка при полной предоплате. Доставка от 1 дня от 199 рублей.</p>
        </div>
      </div>
      <div class="benefit-card">
        <div class="icon-wrap">
          <svg class="icon icon-bf-icon-1 bf-icons">
            <use xlink:href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/img/svg/symbol/sprite.svg#bf-icon-1"></use>
          </svg>
        </div>
        <div class="benefit-card--content">
          <h3 class="benefit-card-name">Летняя Ликвидация</h3>
          <p class="text benefit-card-text">Скидки на коллекцию 2017-2018 до 70% Торопитесь!</p>
        </div>
      </div>
      <div class="benefit-card">
        <div class="icon-wrap">
          <svg class="icon icon-bf-icon-1 bf-icons">
            <use xlink:href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/img/svg/symbol/sprite.svg#bf-icon-1"></use>
          </svg>
        </div>
        <div class="benefit-card--content">
          <h3 class="benefit-card-name">Гарантия качества</h3>
          <p class="text benefit-card-text">Мы работаем с официальным поставщиком UGG Australia и гарантируем ее качество.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="shop-content">
<div class="container">
  <div class="content-row content-row--item justify-content-end">
    

    
    

    
  <div class="catalog">
    <div class="drop-menu-head">
      <div class="drop-menu-head-name drop-menu-head-name--catalog"><a class="drop-menu-head-heading" href="catalog.html">Каталог</a>
        <svg class="icon icon-chevron-down drop-menu-head-icon">
          <use xlink:href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/img/svg/symbol/sprite.svg#chevron-down"></use>
        </svg>
        </div>
          <?php echo $_smarty_tpl->getSubTemplate ('categories.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          <?php echo $_smarty_tpl->getSubTemplate ('post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      </div>
    </div>
    <div class="item-content">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_new_products'][0][0]->get_new_products_plugin(array('var'=>'new_products','limit'=>12),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['new_products']->value) {?>
        
        <div class="drop-menu-head drop-filter">
          <div class="drop-menu-head-name">
            <h3 class="drop-menu-head-heading">Подобрать товар</h3>
            <svg class="icon icon-chevron-down drop-menu-head-icon">
              <use xlink:href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/img/svg/symbol/sprite.svg#chevron-down"></use>
            </svg>
          </div>
        <div class="item-card-row">
            <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                <div class="item-card">
                    <?php echo $_smarty_tpl->getSubTemplate ("product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div>
            <?php } ?>
        </div>
    <?php }?>
</div>
</div>
</div>
</section>
<?php }} ?>
