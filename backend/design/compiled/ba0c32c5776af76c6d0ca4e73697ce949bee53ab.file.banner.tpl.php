<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-08-02 13:18:53
         compiled from "backend/design/html/banner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6705410245b6304bd9b4d40-08324346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba0c32c5776af76c6d0ca4e73697ce949bee53ab' => 
    array (
      0 => 'backend/design/html/banner.tpl',
      1 => 1532936824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6705410245b6304bd9b4d40-08324346',
  'function' => 
  array (
    'category_select' => 
    array (
      'parameter' => 
      array (
        'level' => 0,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'banner' => 0,
    'btr' => 0,
    'message_success' => 0,
    'message_error' => 0,
    'lang_id' => 0,
    'pages' => 0,
    'page' => 0,
    'categories' => 0,
    'category' => 0,
    'selected' => 0,
    'level' => 0,
    'brands' => 0,
    'brand' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b6304bda112b2_21353140',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6304bda112b2_21353140')) {function content_5b6304bda112b2_21353140($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['banner']->value->id) {?>
    <?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['banner']->value->name, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['btr']->value->banner_new_group, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php }?>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php if (!$_smarty_tpl->tpl_vars['banner']->value->id) {?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_new_group, ENT_QUOTES, 'UTF-8', true);?>

                <?php } else { ?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                <?php }?>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-12 col-sm-12 float-xs-right"></div>
</div>


<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_success">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_success']->value=='added') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_group_added, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value=='updated') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_updated, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                    <?php if ($_GET['return']) {?>
                        <a class="btn btn_return float-xs-right" href="<?php echo $_GET['return'];?>
">
                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'return'), 0);?>

                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_back, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </a>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_warning">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_error']->value=='group_id_exists') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_id_exists, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='empty_group_id') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_enter_id, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>


<form method="post" enctype="multipart/form-data" class="fn_fast_button">
    <input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
    <input type="hidden" name="lang_id" value="<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" />
    <div class="row">
        <div class="col-xs-12">
            <div class="boxed">
                <div class="row d_flex">
                    
                    <div class="col-lg-10 col-md-9 col-sm-12">
                        <div class="heading_label">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>

                        </div>
                        <div class="form-group">
                            <input class="form-control mb-h" name="name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            <input name="id" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="mt-h">
                                    <span class="boxes_inline">
                                        <label class="switch switch-default switch-pill switch-primary-outline-alt boxes_inline">
                                        <input class="switch-input" name="show_all_pages" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['banner']->value->show_all_pages) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                    </span>
                                    <span class="boxes_inline heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_show_group, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="input-group">
                                    <span class="boxes_inline heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_id_enter, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <span class="boxes_inline bnr_id_grup">
                                        <input name="group_id" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value->group_id, ENT_QUOTES, 'UTF-8', true);?>
" />
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="activity_of_switch">
                            <div class="activity_of_switch_item"> 
                                <div class="okay_switch clearfix">
                                    <label class="switch_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>
</label>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="visible" value='1' type="checkbox" id="visible_checkbox" <?php if ($_smarty_tpl->tpl_vars['banner']->value->visible) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="boxed fn_toggle_wrap min_height_230px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_show_banner, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>

                <div class="toggle_body_wrap fn_card on">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="banner_card">
                                <div class="banner_card_header">
                                    <span class="font-weight-bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_pages, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </div>
                                <div class="banner_card_block">
                                    <select name="pages[]" class="selectpicker fn_action_select" multiple="multiple" data-selected-text-format="count">
                                        <option value="0" <?php if (!$_smarty_tpl->tpl_vars['banner']->value->page_selected||in_array(0,$_smarty_tpl->tpl_vars['banner']->value->page_selected)) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_hide, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['page']->value->name!='') {?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value->page_selected&&in_array($_smarty_tpl->tpl_vars['page']->value->id,$_smarty_tpl->tpl_vars['banner']->value->page_selected)) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                            <?php }?>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="banner_card">
                                <div class="banner_card_header">
                                    <span class="font-weight-bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_categories, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </div>
                                <div class="banner_card_block">
                                    <select name="categories[]" class="selectpicker" multiple="multiple" data-selected-text-format="count">
                                        <option value='0' <?php if (!$_smarty_tpl->tpl_vars['banner']->value->category_selected||in_array(0,$_smarty_tpl->tpl_vars['banner']->value->category_selected)) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_hide, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php if (!function_exists('smarty_template_function_category_select')) {
    function smarty_template_function_category_select($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['category_select']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
                                            <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['selected']->value&&in_array($_smarty_tpl->tpl_vars['category']->value->id,$_smarty_tpl->tpl_vars['selected']->value)) {?>selected<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sp'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['name'] = 'sp';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['level']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['total']);
?>&nbsp;<?php endfor; endif; ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                <?php smarty_template_function_category_select($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['category']->value->subcategories,'selected'=>$_smarty_tpl->tpl_vars['banner']->value->category_selected,'level'=>$_smarty_tpl->tpl_vars['level']->value+1));?>

                                            <?php } ?>
                                        <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

                                        <?php smarty_template_function_category_select($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['categories']->value,'selected'=>$_smarty_tpl->tpl_vars['banner']->value->category_selected));?>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="banner_card">
                                <div class="banner_card_header">
                                    <span class="font-weight-bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_brands, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </div>
                                <div class="banner_card_block">
                                    <select name="brands[]" class="selectpicker" multiple="multiple" data-selected-text-format="count">
                                        <option value='0' <?php if (!$_smarty_tpl->tpl_vars['banner']->value->brand_selected||in_array(0,$_smarty_tpl->tpl_vars['banner']->value->brand_selected)) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_hide, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
?>
                                            <option value='<?php echo $_smarty_tpl->tpl_vars['brand']->value->id;?>
' <?php if ($_smarty_tpl->tpl_vars['banner']->value->brand_selected&&in_array($_smarty_tpl->tpl_vars['brand']->value->id,$_smarty_tpl->tpl_vars['banner']->value->brand_selected)) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 ">
                            <button type="submit" class="btn btn_small btn_blue float-md-right">
                                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'checked'), 0);?>

                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php if ($_smarty_tpl->tpl_vars['banner']->value->id) {?>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="boxed fn_toggle_wrap min_height_230px">
                    <div class="heading_box">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_instruction, ENT_QUOTES, 'UTF-8', true);?>

                    </div>
                    <textarea id="fn_banner_code" readonly>
                    
                        {get_banner var="banner_<?php echo $_smarty_tpl->tpl_vars['banner']->value->group_id;?>
" group="<?php echo $_smarty_tpl->tpl_vars['banner']->value->group_id;?>
"}
                        {if $banner_<?php echo $_smarty_tpl->tpl_vars['banner']->value->group_id;?>
->items}
                        <div class="container hidden-md-down">
                            <div class="fn_banner_<?php echo $_smarty_tpl->tpl_vars['banner']->value->group_id;?>
 slick-banner">
                                {foreach $banner_<?php echo $_smarty_tpl->tpl_vars['banner']->value->group_id;?>
->items as $bi}
                                <div>
                                    {if $bi->url}
                                        <a href="{$bi->url}" target="_blank">
                                    {/if}
                                    {if $bi->image}
                                        <img src="{$config->banners_images_dir}{$bi->image}" alt="{$bi->alt}" title="{$bi->title}"/>
                                    {/if}
                                    <span class="slick-name">
                                        {$bi->title}
                                    </span>
                                    {if $bi->description}
                                        <span class="slick-description">
                                        {$bi->description}
                                    </span>
                                    {/if}
                                    {if $bi->url}
                                    </a>
                                    {/if}
                                </div>
                                {/foreach}
                            </div>
                        </div>
                        {/if}
                        
                    </textarea>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="boxed fn_toggle_wrap min_height_230px">
                    <div class="heading_box">
                       <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_instruction2, ENT_QUOTES, 'UTF-8', true);?>

                    </div>
                    <textarea disabled id="fn_banner_js">
                       $('.fn_banner_<?php echo $_smarty_tpl->tpl_vars['banner']->value->group_id;?>
').slick({
                            infinite: true,
                            speed: 500,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            swipeToSlide : true,
                            dots: true,
                            arrows: false,
                            adaptiveHeight: true,
                            autoplaySpeed: 8000,
                            autoplay: true
                        });
                    </textarea>
                </div>
            </div>
        </div>
    <?php }?>

</form>
<?php if ($_smarty_tpl->tpl_vars['banner']->value->id) {?>
    <link rel="stylesheet" href="design/js/codemirror/lib/codemirror.css">
    <link rel="stylesheet" href="design/js/codemirror/theme/monokai.css">
    <script src="design/js/codemirror/lib/codemirror.js"></script>
    <script src="design/js/codemirror/mode/smarty/smarty.js"></script>
    <script src="design/js/codemirror/mode/smartymixed/smartymixed.js"></script>
    <script src="design/js/codemirror/mode/xml/xml.js"></script>
    <script src="design/js/codemirror/mode/htmlmixed/htmlmixed.js"></script>
    <script src="design/js/codemirror/mode/javascript/javascript.js"></script>
    
        <style type="text/css">

            .CodeMirror{
                font-family:'Courier New';
                margin-bottom:10px;
                border:1px solid #c0c0c0;
                background-color: #ffffff;
                height: auto;
                min-height: 100px;
                width:100%;
            }
            .CodeMirror-scroll
            {
                overflow-y: hidden;
                overflow-x: auto;
            }
            .cm-s-monokai .cm-smarty.cm-tag{color: #ff008a;}
            .cm-s-monokai .cm-smarty.cm-string {color: #007000;}
            .cm-s-monokai .cm-smarty.cm-variable {color: #ff008a;}
            .cm-s-monokai .cm-smarty.cm-variable-2 {color: #ff008a;}
            .cm-s-monokai .cm-smarty.cm-variable-3 {color: #ff008a;}
            .cm-s-monokai .cm-smarty.cm-property {color: #ff008a;}
            .cm-s-monokai .cm-comment {color: #505050;}
            .cm-s-monokai .cm-smarty.cm-attribute {color: #ff20Fa;}
        </style>
        <script>
            var editor = CodeMirror.fromTextArea(document.getElementById("fn_banner_code"), {
                mode: "smartymixed",
                lineNumbers: true,
                matchBrackets: false,
                enterMode: 'keep',
                indentWithTabs: false,
                indentUnit: 1,
                tabMode: 'classic',
                theme : 'monokai',
                readOnly: true,
            });

            var editor_2 = CodeMirror.fromTextArea(document.getElementById("fn_banner_js"), {
                mode: "javascript",
                lineNumbers: true,
                matchBrackets: false,
                enterMode: 'keep',
                indentWithTabs: false,
                indentUnit: 1,
                tabMode: 'classic',
                theme : 'monokai',
                readOnly: true,
            });
        </script>
    
<?php }?>
<?php }} ?>
