<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-07-30 14:43:52
         compiled from "backend/design/html/deliveries.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3293102255b5f2428bf8d42-43090169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd50d4f478aec372fc05de3780ec246664c3803c5' => 
    array (
      0 => 'backend/design/html/deliveries.tpl',
      1 => 1532936824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3293102255b5f2428bf8d42-43090169',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'btr' => 0,
    'deliveries' => 0,
    'delivery' => 0,
    'config' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b5f2428d15933_12803177',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5f2428d15933_12803177')) {function content_5b5f2428d15933_12803177($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['btr']->value->general_shipping, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>


<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_shipping, ENT_QUOTES, 'UTF-8', true);?>

            </div>
            <div class="box_btn_heading">
                <a class="btn btn_small btn-info" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'DeliveryAdmin'),$_smarty_tpl);?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'plus'), 0);?>

                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->deliveries_add, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="boxed fn_toggle_wrap">
    <?php if ($_smarty_tpl->tpl_vars['deliveries']->value) {?>
        <form class="fn_form_list" method="post">
            <div class="okay_list products_list fn_sort_list">
                <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
                
                <div class="okay_list_head">
                    <div class="okay_list_boding okay_list_drag"></div>
                    <div class="okay_list_heading okay_list_check">
                        <input class="hidden_check fn_check_all" type="checkbox" id="check_all_1" name="" value=""/>
                        <label class="okay_ckeckbox" for="check_all_1"></label>
                    </div>
                    <div class="okay_list_heading okay_list_delivery_photo"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_image, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_delivery_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_delivery_condit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_conditions, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_close"></div>
                </div>

                
                <div class="deliveries_wrap okay_list_body sortable">
                    <?php  $_smarty_tpl->tpl_vars['delivery'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['delivery']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['deliveries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['delivery']->key => $_smarty_tpl->tpl_vars['delivery']->value) {
$_smarty_tpl->tpl_vars['delivery']->_loop = true;
?>
                        <div class="fn_row okay_list_body_item fn_sort_item">
                            <div class="okay_list_row">
                               <input type="hidden" name="positions[<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['delivery']->value->position;?>
">

                                <div class="okay_list_boding okay_list_drag move_zone">
                                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'drag_vertical'), 0);?>

                                </div>

                                <div class="okay_list_boding okay_list_check">
                                    <input class="hidden_check" type="checkbox" id="id_<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
"/>
                                    <label class="okay_ckeckbox" for="id_<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
"></label>
                                </div>

                                <div class="okay_list_boding okay_list_delivery_photo">
                                    <?php if ($_smarty_tpl->tpl_vars['delivery']->value->image) {?>
                                        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'DeliveryAdmin','id'=>$_smarty_tpl->tpl_vars['delivery']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
">
                                            <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier(htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->image, ENT_QUOTES, 'UTF-8', true),75,75,false,$_smarty_tpl->tpl_vars['config']->value->resized_deliveries_dir);?>
"/>
                                        </a>
                                    <?php } else { ?>
                                        <img width="75" src="design/images/no_image.png"/>
                                    <?php }?>
                                </div>

                                <div class="okay_list_boding okay_list_delivery_name">
                                    <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'DeliveryAdmin','id'=>$_smarty_tpl->tpl_vars['delivery']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                                    </a>
                                    <div class="hidden-lg-up mt-q">
                                        <?php if ($_smarty_tpl->tpl_vars['delivery']->value->separate_payment) {?>
                                            <div><span class="tag tag-primary"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_paid_separately, ENT_QUOTES, 'UTF-8', true);?>
</span></div>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['delivery']->value->price>0) {?>
                                            <div><span class="tag tag-warning"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_price, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['delivery']->value->price;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span></div>
                                        <?php } else { ?>
                                            <div><span class="tag tag-info"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->deliveries_free, ENT_QUOTES, 'UTF-8', true);?>
</span></div>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['delivery']->value->free_from>0) {?>
                                            <div><span class="tag tag-success"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->deliveries_free_from, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['delivery']->value->free_from;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span></div>
                                        <?php }?>
                                    </div>
                                </div>

                                <div class="okay_list_boding okay_list_delivery_condit">
                                    <?php if ($_smarty_tpl->tpl_vars['delivery']->value->separate_payment) {?>
                                        <div><span class="tag tag-primary"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_paid_separately, ENT_QUOTES, 'UTF-8', true);?>
</span></div>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['delivery']->value->price>0) {?>
                                        <div><span class="tag tag-warning"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_price, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['delivery']->value->price;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span></div>
                                    <?php } else { ?>
                                        <div><span class="tag tag-info"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->deliveries_free, ENT_QUOTES, 'UTF-8', true);?>
</span></div>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['delivery']->value->free_from>0) {?>
                                        <div><span class="tag tag-success"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->deliveries_free_from, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['delivery']->value->free_from;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span></div>
                                    <?php }?>
                                </div>

                                <div class="okay_list_boding okay_list_status">
                                    
                                    <label class="switch switch-default">
                                        <input class="switch-input fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['delivery']->value->enabled) {?>fn_active_class<?php }?>" data-module="delivery" data-action="enabled" data-id="<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
" name="enabled" value="1" type="checkbox"  <?php if ($_smarty_tpl->tpl_vars['delivery']->value->enabled) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                                <div class="okay_list_boding okay_list_close">
                                    
                                    <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove hint-bottom-right-t-info-s-small-mobile  hint-anim" data-toggle="modal" data-target="#fn_action_modal" onclick="success_action($(this));">
                                        <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>

                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                
                <div class="okay_list_footer fn_action_block">
                    <div class="okay_list_foot_left">
                        <div class="okay_list_boding okay_list_drag"></div>
                        <div class="okay_list_heading okay_list_check">
                            <input class="hidden_check fn_check_all" type="checkbox" id="check_all_2" name="" value=""/>
                            <label class="okay_ckeckbox" for="check_all_2"></label>
                        </div>
                        <div class="okay_list_option">
                            <select name="action" class="selectpicker">
                                <option value="enable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_do_enable, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="disable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_do_disable, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="delete"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn_small btn_blue">
                        <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'checked'), 0);?>

                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </button>
                </div>
            </div>
        </form>
    <?php } else { ?>
        <div class="heading_box mt-1">
            <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->deliveries_no, ENT_QUOTES, 'UTF-8', true);?>
</div>
        </div>
    <?php }?>
</div>
<?php }} ?>
