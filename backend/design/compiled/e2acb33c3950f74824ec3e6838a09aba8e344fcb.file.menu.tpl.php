<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-07-30 10:10:23
         compiled from "backend/design/html/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8952107335b5ee40fbf8e42-93070246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2acb33c3950f74824ec3e6838a09aba8e344fcb' => 
    array (
      0 => 'backend/design/html/menu.tpl',
      1 => 1532936824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8952107335b5ee40fbf8e42-93070246',
  'function' => 
  array (
    'menu_items' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'menu' => 0,
    'btr' => 0,
    'message_success' => 0,
    'message_error' => 0,
    'lang_id' => 0,
    'level' => 0,
    'menu_items' => 0,
    'index' => 0,
    'menu_item' => 0,
    'parent_index' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b5ee40fd365f1_33608316',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5ee40fd365f1_33608316')) {function content_5b5ee40fd365f1_33608316($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['menu']->value->id) {?>
    <?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['menu']->value->name, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['btr']->value->menu_new_menu, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php }?>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php if (!$_smarty_tpl->tpl_vars['menu']->value->id) {?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->menu_new_menu, ENT_QUOTES, 'UTF-8', true);?>

                <?php } else { ?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->name, ENT_QUOTES, 'UTF-8', true);?>

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
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->menu_added, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value=='updated') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->menu_updated, ENT_QUOTES, 'UTF-8', true);?>

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
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->menu_id_exists, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='empty_group_id') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->menu_enter_id, ENT_QUOTES, 'UTF-8', true);?>

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
                            <input class="form-control mb-h" name="name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            <input name="id" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="input-group">
                                    <span class="boxes_inline heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->menu_id_enter, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <span class="boxes_inline bnr_id_grup">
                                        <input name="group_id" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->group_id, ENT_QUOTES, 'UTF-8', true);?>
" />
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="input-group">
                                    <span class="boxes_inline heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->menu_var_for_insert, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <span class="boxes_inline bnr_id_grup">
                                        <input class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value->var, ENT_QUOTES, 'UTF-8', true);?>
" readonly />
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
                                        <input class="switch-input" name="visible" value='1' type="checkbox" id="visible_checkbox" <?php if ($_smarty_tpl->tpl_vars['menu']->value->visible) {?>checked=""<?php }?>/>
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
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap">
                <div class="heading_box visible_md">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->menu_items, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="okay_list products_list fn_sort_list fn_row" data-index="0">
                        
                        <div class="okay_list_head">
                            <div class="okay_list_heading okay_list_drag"></div>
                            <div class="okay_list_heading okay_list_menu_name">
                                <span class="okay_list_menu_item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                <span class="okay_list_menu_item quickview_hidden"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->menu_general_url, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </div>
                            <div class="okay_list_heading okay_list_status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->menu_general_target_blank, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_menu_setting"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->menu_general_add, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_close"></div>
                        </div>
                        <?php $_smarty_tpl->tpl_vars["index"] = new Smarty_variable(1, null, 0);?>
                        <?php if (!function_exists('smarty_template_function_menu_items')) {
    function smarty_template_function_menu_items($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['menu_items']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
                            <div class="okay_list_body categories_wrap sortable fn_sub_rows submenu_level_<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
" data-level="<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
">
                                <?php  $_smarty_tpl->tpl_vars['menu_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu_item']->key => $_smarty_tpl->tpl_vars['menu_item']->value) {
$_smarty_tpl->tpl_vars['menu_item']->_loop = true;
?>
                                    <div class="fn_row okay_list_body_item" data-index="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">
                                        <div class="okay_list_row fn_sort_item">
                                            <input type="hidden" name="menu_items[id][]" value="<?php echo $_smarty_tpl->tpl_vars['menu_item']->value->id;?>
"/>
                                            <input type="hidden" name="menu_items[index][]" value="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"/>
                                            <input type="hidden" name="menu_items[parent_index][]" value="<?php echo $_smarty_tpl->tpl_vars['parent_index']->value;?>
"/>
                                            <div class="okay_list_boding okay_list_drag move_zone">
                                                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'drag_vertical'), 0);?>

                                            </div>
                                            <div class="okay_list_boding okay_list_menu_name">
                                                <span class="okay_list_menu_item">
                                                    <input class="form-control" type="text" name="menu_items[name][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu_item']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" placeholder="Введите название"/>
                                                </span>
                                                <span class="okay_list_menu_item">
                                                    <input class="form-control" type="text" name="menu_items[url][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu_item']->value->url, ENT_QUOTES, 'UTF-8', true);?>
" placeholder="Введите url"/>
                                                </span>
                                            </div>
                                            <div class="okay_list_boding okay_list_status">
                                                
                                                <label class="switch switch-default fn_switch_block" data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>
">
                                                    <input class="switch-input fn_ajax_action fn_visible <?php if ($_smarty_tpl->tpl_vars['menu_item']->value->visible) {?>fn_active_class<?php }?>" data-module="menu_item" data-action="visible" data-id="<?php echo $_smarty_tpl->tpl_vars['menu_item']->value->id;?>
" name="visible" value="1" type="checkbox"  <?php if ($_smarty_tpl->tpl_vars['menu_item']->value->visible) {?>checked=""<?php }?>/>
                                                    <input class="form-control fn_visible_input" type="hidden" name="menu_items[visible][]" value="<?php echo intval($_smarty_tpl->tpl_vars['menu_item']->value->visible);?>
"/>
                                                    <span class="switch-label"></span>
                                                    <span class="switch-handle"></span>
                                                </label>
                                            </div>
                                            <div class="okay_list_boding okay_list_status">
                                                
                                                <label class="switch switch-default hint-bottom-middle-t-info-s-small-mobile hint-anim fn_switch_block" data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->menu_general_target_blank, ENT_QUOTES, 'UTF-8', true);?>
">
                                                    <input class="switch-input fn_ajax_action fn_is_target_blank <?php if ($_smarty_tpl->tpl_vars['menu_item']->value->is_target_blank) {?>fn_active_class<?php }?>" data-module="menu_item" data-action="is_target_blank" data-id="<?php echo $_smarty_tpl->tpl_vars['menu_item']->value->id;?>
" name="is_target_blank" value="1" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['menu_item']->value->is_target_blank) {?>checked=""<?php }?>/>
                                                    <input class="form-control fn_is_target_blank_input" type="hidden" name="menu_items[is_target_blank][]" value="<?php echo intval($_smarty_tpl->tpl_vars['menu_item']->value->is_target_blank);?>
"/>
                                                    <span class="switch-label"></span>
                                                    <span class="switch-handle"></span>
                                                </label>
                                            </div>
                                            <div class="okay_list_boding okay_list_menu_setting">
                                                <a href="javascript:;" data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->menu_item_add, ENT_QUOTES, 'UTF-8', true);?>
" class="menu_icon_add fn_add_menuitem hint-bottom-middle-t-info-s-small-mobile hint-anim">
                                                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'add'), 0);?>

                                                </a>
                                            </div>
                                            <div class="okay_list_boding okay_list_close">
                                                
                                                <a href="javascript:;" data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
" class="btn_close fn_remove_menuitem hint-bottom-right-t-info-s-small-mobile hint-anim">
                                                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>

                                                </a>
                                            </div>
                                        </div>
                                        <?php smarty_template_function_menu_items($_smarty_tpl,array('menu_items'=>$_smarty_tpl->tpl_vars['menu_item']->value->submenus,'level'=>$_smarty_tpl->tpl_vars['level']->value+1,'parent_index'=>$_smarty_tpl->tpl_vars['index']->value++));?>

                                    </div>
                                <?php } ?>
                            </div>
                        <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

                        <?php smarty_template_function_menu_items($_smarty_tpl,array('menu_items'=>$_smarty_tpl->tpl_vars['menu_items']->value,'level'=>0,'parent_index'=>0));?>

                        <div class="fn_row fn_new_menuitem okay_list_body_item" data-index="-1">
                            <div class="okay_list_row fn_sort_item">
                                <input type="hidden" name="menu_items[index][]" value="-1"/>
                                <input type="hidden" name="menu_items[parent_index][]" value="0"/>
                                <div class="okay_list_boding okay_list_drag move_zone">
                                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'drag_vertical'), 0);?>

                                </div>
                                <div class="okay_list_boding okay_list_menu_name">
                                    <span class="okay_list_menu_item">
                                        <input class="form-control" type="text" name="menu_items[name][]" value="" placeholder="Введите название"/>
                                    </span>
                                    <span class="okay_list_menu_item">
                                        <input class="form-control" type="text" name="menu_items[url][]" value="" placeholder="Введите url"/>
                                    </span>
                                </div>
                                <div class="okay_list_boding okay_list_status">
                                    <label class="switch switch-default fn_switch_block" data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>
">
                                        <input class="switch-input fn_visible" type="checkbox"/>
                                        <input class="form-control fn_visible_input" type="hidden" name="menu_items[visible][]" value="0"/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                                <div class="okay_list_boding okay_list_status">
                                    <label class="switch switch-default hint-bottom-middle-t-info-s-small-mobile hint-anim fn_switch_block" data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->menu_general_target_blank, ENT_QUOTES, 'UTF-8', true);?>
">
                                        <input class="switch-input fn_is_target_blank" type="checkbox"/>
                                        <input class="form-control fn_is_target_blank_input" type="hidden" name="menu_items[is_target_blank][]" value="0"/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                                <div class="okay_list_boding okay_list_menu_setting">
                                    <a href="javascript:;" data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->menu_item_add, ENT_QUOTES, 'UTF-8', true);?>
" class="menu_icon_add fn_add_menuitem hint-bottom-middle-t-info-s-small-mobile hint-anim">
                                        <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'add'), 0);?>

                                    </a>
                                </div>
                                <div class="okay_list_boding okay_list_close">
                                    
                                    <a href="javascript:;" data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
" class="btn_close fn_remove_menuitem hint-bottom-right-t-info-s-small-mobile hint-anim">
                                        <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>

                                    </a>
                                </div>
                            </div>
                            <div class="okay_list_body categories_wrap sortable fn_sub_rows" data-level="-1"></div>
                        </div>
                        <div class="box_btn_heading mt-1 mb-1">
                            <button type="button" class="btn btn_small btn-info fn_add_menuitem">
                                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'plus'), 0);?>

                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->menu_item_add, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 mt-1">
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
</form>


    <script>

        $(document).on('click', '.fn_visible', function() {
            $(this).closest('.fn_switch_block').find('.fn_visible_input').val($(this).is(':checked')?1:0);
        });
        $(document).on('click', '.fn_is_target_blank', function() {
            $(this).closest('.fn_switch_block').find('.fn_is_target_blank_input').val($(this).is(':checked')?1:0);
        });

        var mi_index = <?php echo $_smarty_tpl->tpl_vars['index']->value;?>
;
        $(window).on("load", function() {
            var menuitem = $(".fn_new_menuitem").clone(true);
            $(".fn_new_menuitem").remove();
            menuitem.removeClass("fn_new_menuitem");
            $(document).on("click", ".fn_add_menuitem", function() {
                var elem = $(this),
                    menuitem_clone = menuitem.clone(true),
                    parent = elem.closest(".fn_row"),
                    sub_rows = parent.find(".fn_sub_rows").first(),
                    next_level = sub_rows.data("level")+1;

                menuitem_clone.appendTo(sub_rows);
                menuitem_clone.find(".fn_sub_rows")
                    .data("level", next_level)
                    .addClass("submenu_level_"+next_level);
                Sortable.create(menuitem_clone.find(".sortable").get(0), {
                    handle: ".move_zone",  // Drag handle selector within list items
                    sort: true,  // sorting inside list
                    animation: 150,  // ms, animation speed moving items when sorting, `0` — without animation
                    ghostClass: "sortable-ghost",  // Class name for the drop placeholder
                    chosenClass: "sortable-chosen",  // Class name for the chosen item
                    dragClass: "sortable-drag",  // Class name for the dragging item
                    scrollSensitivity: 30, // px, how near the mouse must be to an edge to start scrolling.
                    scrollSpeed: 10 // px
                });
                menuitem_clone.find("[name='menu_items[index][]']").val(mi_index);
                menuitem_clone.find("[name='menu_items[parent_index][]']").val(parent.data("index"));
                menuitem_clone.data("index", mi_index++);
                return false;
            });

            $(document).on("click", ".fn_remove_menuitem", function () {
                $(this).closest(".fn_row").remove();
                return false;
            });
        });
    </script>

<?php }} ?>
