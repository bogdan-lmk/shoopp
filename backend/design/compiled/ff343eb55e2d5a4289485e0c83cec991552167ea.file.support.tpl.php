<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-07-30 14:43:20
         compiled from "backend/design/html/support.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14566794675b5f2408647b15-02294024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff343eb55e2d5a4289485e0c83cec991552167ea' => 
    array (
      0 => 'backend/design/html/support.tpl',
      1 => 1532936824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14566794675b5f2408647b15-02294024',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'btr' => 0,
    'topics_count' => 0,
    'topics' => 0,
    'topic' => 0,
    'message_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b5f240877de60_55355956',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5f240877de60_55355956')) {function content_5b5f240877de60_55355956($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['btr']->value->support_support, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>


<div class="row">
    <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php if ($_smarty_tpl->tpl_vars['topics_count']->value) {?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_msg, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['topics_count']->value;?>

                <?php } else { ?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->index_support, ENT_QUOTES, 'UTF-8', true);?>

                <?php }?>
            </div>
            <div class="box_btn_heading">
                <a class="btn btn_small btn-info" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'TopicAdmin'),$_smarty_tpl);?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'plus'), 0);?>

                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_add, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12">
        <div class="wrap_heading wrap_head_mob float-sm-right">
            <a class="btn btn_blue btn_small" target="_blank" href="https://okay-cms.com/support">
                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'sertificat'), 0);?>

                <span class="ml-q"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_condition, ENT_QUOTES, 'UTF-8', true);?>
</span>
            </a>
        </div>
    </div>
</div>


<?php if ($_smarty_tpl->tpl_vars['topics']->value) {?>
    <div class="boxed fn_toggle_wrap">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm 12 txt_center">
                <?php echo $_smarty_tpl->getSubTemplate ('pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form class="fn_form_list" method="post">
                    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">

                    <div class="orders_list okay_list fn_sort_list">
                        
                        <div class="okay_list_head">
                            <div class="okay_list_heading okay_list_support_num"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_number, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_support_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_theme, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_support_status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_status, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_support_time"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_time, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        </div>
                        
                        <div class="okay_list_body">
                            <?php  $_smarty_tpl->tpl_vars['topic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topic']->key => $_smarty_tpl->tpl_vars['topic']->value) {
$_smarty_tpl->tpl_vars['topic']->_loop = true;
?>
                                <div class="fn_row okay_list_body_item">
                                    <div class="okay_list_row">
                                        <div class="okay_list_boding okay_list_support_num">
                                            <div class="text_dark text_600 txt_center mb-q"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['topic']->value->id, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <span class="text_grey font_12"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['topic']->value->created);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['time'][0][0]->time_modifier($_smarty_tpl->tpl_vars['topic']->value->created);?>
</span>

                                        </div>

                                        <div class="okay_list_boding okay_list_support_name">
                                            <div class="mb-q">
                                                <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'TopicAdmin','id'=>$_smarty_tpl->tpl_vars['topic']->value->id,'page'=>null,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['topic']->value->header, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                            </div>
                                            <div class="">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_last_answer, ENT_QUOTES, 'UTF-8', true);?>

                                                <?php if ($_smarty_tpl->tpl_vars['topic']->value->last_comment) {?>
                                                    <span class="tag tag-default"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['topic']->value->last_comment);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['time'][0][0]->time_modifier($_smarty_tpl->tpl_vars['topic']->value->last_comment);?>
</span>
                                                <?php }?>
                                            </div>
                                        </div>

                                        <div class="okay_list_boding okay_list_support_status ">
                                            <?php if ($_smarty_tpl->tpl_vars['topic']->value->status=='received') {?>
                                                <span class="text_success"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_waiting, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['topic']->value->status=='sent') {?>
                                                <span class="text_success"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_reseived, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['topic']->value->status=='closed') {?>
                                                <span class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_closed, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                            <?php } else { ?>
                                               <span class="text_grey">unknown</span>
                                            <?php }?>
                                        </div>
                                        <div class="okay_list_boding okay_list_support_time <?php if ($_smarty_tpl->tpl_vars['topic']->value->spent_time<0) {?>text_success<?php }?>">
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['balance'][0][0]->balance_modifier($_smarty_tpl->tpl_vars['topic']->value->spent_time);?>

                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } else { ?>

    
    <?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="boxed boxed_warning">
                    <div class="heading_box">
                        <?php if ($_smarty_tpl->tpl_vars['message_error']->value=='empty_key') {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_no_keys, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='domain_not_found') {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_no_domain, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='domain_disabled') {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_domain_blocked, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='wrong_key') {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_wrong_keys, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='domain_has_already_gotten_keys') {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_already_receive_keys, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='request_has_already_sent') {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_already_sent, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='localhost') {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_local, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } else { ?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>

                        <?php }?>
                    </div>
                    <?php if (in_array($_smarty_tpl->tpl_vars['message_error']->value,array('empty_key','domain_not_found'))) {?>
                        <div class="text_box">
                            <form class="fn_form_list" method="post">
                                <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
                                <input class="btn btn-sm btn-primary" type="submit" name="get_new_keys" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_get_keys, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            </form>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="boxed boxed_warning">
                    <div class="heading_box">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->support_no, ENT_QUOTES, 'UTF-8', true);?>

                    </div>
                </div>
            </div>
        </div>
    <?php }?>
<?php }?>
<?php }} ?>
