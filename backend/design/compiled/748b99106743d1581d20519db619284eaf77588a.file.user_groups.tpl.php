<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-07-30 10:06:03
         compiled from "backend/design/html/user_groups.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5919534815b5ee30b7c6104-87694673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '748b99106743d1581d20519db619284eaf77588a' => 
    array (
      0 => 'backend/design/html/user_groups.tpl',
      1 => 1532936824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5919534815b5ee30b7c6104-87694673',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'btr' => 0,
    'groups' => 0,
    'group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b5ee30b87da77_35657509',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5ee30b87da77_35657509')) {function content_5b5ee30b87da77_35657509($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['btr']->value->user_groups_groups, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>


<div class="row">
    <div class="col-lg-8 col-md-8">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->user_groups_groups, ENT_QUOTES, 'UTF-8', true);?>
 (<?php echo count($_smarty_tpl->tpl_vars['groups']->value);?>
)
            </div>
            <div class="box_btn_heading">
                <a class="btn btn_small btn-info" href="index.php?module=UserGroupAdmin&return=<?php echo $_SERVER['REQUEST_URI'];?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'plus'), 0);?>

                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->user_groups_add, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="boxed fn_toggle_wrap">
    <?php if ($_smarty_tpl->tpl_vars['groups']->value) {?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form class="fn_form_list" method="post">
                    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">

                    <div class="groups_wrap okay_list">
                        
                        <div class="okay_list_head">
                            <div class="okay_list_heading okay_list_check">
                                <input class="hidden_check fn_check_all" type="checkbox" id="check_all_1" name="" value=""/>
                                <label class="okay_ckeckbox" for="check_all_1"></label>
                            </div>
                            <div class="okay_list_heading okay_list_usergroups_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->user_groups_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_usergroups_sale"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->user_groups_discount, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_usergroups_counts"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->user_groups_number, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_close"></div>
                        </div>
                        
                        <div class="okay_list_body">
                            <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
                                <div class="fn_row okay_list_body_item">
                                    <div class="okay_list_row ">
                                        <div class="okay_list_boding okay_list_check">
                                            <input class="hidden_check" type="checkbox" id="id_<?php echo $_smarty_tpl->tpl_vars['group']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['group']->value->id;?>
"/>
                                            <label class="okay_ckeckbox" for="id_<?php echo $_smarty_tpl->tpl_vars['group']->value->id;?>
"></label>
                                        </div>
                                        <div class="okay_list_boding okay_list_usergroups_name">
                                            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'UserGroupAdmin','id'=>$_smarty_tpl->tpl_vars['group']->value->id),$_smarty_tpl);?>
">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                                            </a>
                                        </div>
                                        <div class="okay_list_boding okay_list_usergroups_sale">
                                            <span class="tag tag-danger"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_discount, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['group']->value->discount;?>
 %</span>
                                        </div>
                                        <div class="okay_list_boding okay_list_usergroups_counts">
                                            <span><?php echo $_smarty_tpl->tpl_vars['group']->value->cnt_users;?>
</span>
                                        </div>
                                        <div class="okay_list_boding okay_list_close">
                                            
                                            <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->user_groups_delete, ENT_QUOTES, 'UTF-8', true);?>
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
                                <div class="okay_list_heading okay_list_check">
                                    <input class="hidden_check fn_check_all" type="checkbox" id="check_all_2" name="" value=""/>
                                    <label class="okay_ckeckbox" for="check_all_2"></label>
                                </div>
                                <div class="okay_list_option">
                                    <select name="action" class="selectpicker">
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
            </div>
        </div>
    <?php } else { ?>
        <div class="heading_box mt-1">
            <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->user_groups_no, ENT_QUOTES, 'UTF-8', true);?>
</div>
        </div>
    <?php }?>
</div>
<?php }} ?>
