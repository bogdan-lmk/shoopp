<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-07-30 10:06:02
         compiled from "backend/design/html/users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10970941945b5ee30a4f1ec9-14118354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d3442483947dfc2553e7a5d0d095a6f683ca873' => 
    array (
      0 => 'backend/design/html/users.tpl',
      1 => 1532936824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10970941945b5ee30a4f1ec9-14118354',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'btr' => 0,
    'users_count' => 0,
    'keyword' => 0,
    'groups' => 0,
    'g' => 0,
    'group' => 0,
    'users' => 0,
    'sort' => 0,
    'user' => 0,
    'config' => 0,
    'group_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b5ee30a618e57_71828862',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5ee30a618e57_71828862')) {function content_5b5ee30a618e57_71828862($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['btr']->value->users_users, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>

<?php if ($_smarty_tpl->tpl_vars['users_count']->value>0) {?>
    <div class="row">
        <progress id="progressbar" class="progress progress-xs progress-info mt-0" style="display: none" value="0" max="100"></progress>
    </div>
<?php }?>


<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="heading_page">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->users_users, ENT_QUOTES, 'UTF-8', true);?>
 (<?php echo $_smarty_tpl->tpl_vars['users_count']->value;?>
)
            <?php if ($_smarty_tpl->tpl_vars['users_count']->value>0&&!$_smarty_tpl->tpl_vars['keyword']->value) {?>
                <div class="export_block export_users hint-bottom-middle-t-info-s-small-mobile  hint-anim" data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->users_export, ENT_QUOTES, 'UTF-8', true);?>
">
                    <span class="fn_start_export fa fa-file-excel-o"></span>
                </div>
            <?php }?>
        </div>
    </div>

    <div class="col-md-12 col-lg-5 col-xs-12 float-xs-right">
        <div class="boxed_search">
            <form class="search" method="get">
                <input type="hidden" name="module" value="UsersAdmin">
                <div class="input-group">

                    <input name="keyword" class="form-control" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->users_search, ENT_QUOTES, 'UTF-8', true);?>
" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true);?>
" >

                    <span class="input-group-btn">
                        <button type="submit" class="btn btn_blue"><i class="fa fa-search"></i> <span class="hidden-md-down"></span></button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="boxed fn_toggle_wrap">
    
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="fn_toggle_wrap">
                <div class="heading_box visible_md">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_filter, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="boxed_sorting action_options toggle_body_wrap off fn_card">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-sm-12">
                        <select class="selectpicker" onchange="location = this.value;">
                            <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('group_id'=>null),$_smarty_tpl);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_groups, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('group_id'=>$_smarty_tpl->tpl_vars['g']->value->id),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['group']->value->id==$_smarty_tpl->tpl_vars['g']->value->id) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['g']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['users']->value) {?>
        
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form class="fn_form_list" method="post">
                    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">

                    <div class="users_wrap okay_list products_list fn_sort_list">
                        <div class="okay_list_head">
                            <div class="okay_list_heading okay_list_check">
                                <input class="hidden_check fn_check_all" type="checkbox" id="check_all_1" name="" value=""/>
                                <label class="okay_ckeckbox" for="check_all_1"></label>
                            </div>
                            <div class="okay_list_heading okay_list_users_name">

                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('sort'=>'name'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['sort']->value=='name') {?>class="selected"<?php }?>><?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'sorts'), 0);?>
</a>

                            </div>
                            <div class="okay_list_heading okay_list_users_email">
                                <span>Email</span>
                                <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('sort'=>'email'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['sort']->value=='email') {?>class="selected"<?php }?>><?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'sorts'), 0);?>
</a>
                            </div>
                            <div class="okay_list_heading okay_list_users_date">

                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_registration_date, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('sort'=>'date'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['sort']->value=='date') {?>class="selected"<?php }?>><?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'sorts'), 0);?>
</a>
                            </div>
                            <div class="okay_list_heading okay_list_users_group"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_group, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_count">
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->users_orders, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('sort'=>'cnt_order'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['sort']->value=='cnt_order') {?>}class="selected"<?php }?>><?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'sorts'), 0);?>
</a>

                            </div>
                            <div class="okay_list_heading okay_list_close"></div>
                        </div>
                        
                        <div class="okay_list_body sortable">
                            <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
                                <div class="fn_row okay_list_body_item fn_sort_item">
                                    <div class="okay_list_row ">
                                        <div class="okay_list_boding okay_list_check">
                                            <input class="hidden_check" type="checkbox" id="id_<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
"/>
                                            <label class="okay_ckeckbox" for="id_<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
"></label>
                                        </div>

                                        <div class="okay_list_boding okay_list_users_name">
                                            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'UserAdmin','id'=>$_smarty_tpl->tpl_vars['user']->value->id),$_smarty_tpl);?>
">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                                            </a>
                                        </div>

                                        <div class="okay_list_boding okay_list_users_email">
                                            <a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->email, ENT_QUOTES, 'UTF-8', true);?>
>">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->email, ENT_QUOTES, 'UTF-8', true);?>

                                            </a>
                                        </div>

                                        <div class="okay_list_boding okay_list_users_date">
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['user']->value->created);?>
 | <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['time'][0][0]->time_modifier($_smarty_tpl->tpl_vars['user']->value->created);?>

                                        </div>

                                        <div class="okay_list_boding okay_list_users_group">
                                            <?php if ($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->tpl_vars['user']->value->group_id]) {?>
                                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->tpl_vars['user']->value->group_id]->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                            <?php }?>
                                        </div>

                                        <div class="okay_list_boding okay_list_count">
                                            <?php echo count($_smarty_tpl->tpl_vars['user']->value->orders);?>

                                        </div>

                                        <div class="okay_list_boding okay_list_close">
                                            <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->users_delete, ENT_QUOTES, 'UTF-8', true);?>
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
                                    <select name="action" class="selectpicker fn_user_select">
                                        <option value="0"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_select_action, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <option value="move_to"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->users_move, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <option value="delete"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    </select>
                                </div>
                                <div id="move_to" class="okay_list_option hidden fn_hide_block">
                                    <select name="move_group" class="selectpicker">
                                    <?php if ($_smarty_tpl->tpl_vars['groups']->value) {?>
                                        <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['group']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php } ?>
                                    <?php }?>
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
            <div class="col-lg-12 col-md-12 col-sm 12 txt_center">
                <?php echo $_smarty_tpl->getSubTemplate ('pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        </div>
    <?php } else { ?>
        <div class="heading_box mt-1">
            <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->users_no, ENT_QUOTES, 'UTF-8', true);?>
</div>
        </div>
    <?php }?>
</div>


<script src="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/backend/design/js/piecon/piecon.js"></script>
<script>
    var group_id='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_id']->value, ENT_QUOTES, 'UTF-8', true);?>
';
    var sort='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort']->value, ENT_QUOTES, 'UTF-8', true);?>
';
</script>


<script>
$(function() {

    $(document).on('change','select.fn_user_select',function(){
        var elem = $(this).find('option:selected').val();
        $('.fn_hide_block').addClass('hidden');
        if($('#'+elem).size()>0){
            $('#'+elem).removeClass('hidden');
        }
    });

    // On document load
    $(document).on('click','.fn_start_export',function(){
        Piecon.setOptions({fallback: 'force'});
        Piecon.setProgress(0);
        var progress_item = $("#progressbar"); //указываем селектор элемента с анимацией
        progress_item.show();
        do_export('',progress_item);
    });

    function do_export(page,progress) {
        page = typeof(page) != 'undefined' ? page : 1;
        $.ajax({
            url: "ajax/export_users.php",
            data: {page:page, group_id:group_id, sort:sort},
            dataType: 'json',
            success: function(data){
                if(data && !data.end) {
                    Piecon.setProgress(Math.round(100*data.page/data.totalpages));
                    progress.attr('value',100*data.page/data.totalpages);
                    do_export(data.page*1+1,progress);
                }
                else {
                    Piecon.setProgress(100);
                    progress.attr('value','100');
                    window.location.href = 'files/export_users/users.csv';
                    progress.fadeOut(500);
                }
            },
            error:function(xhr, status, errorThrown) {
                alert(errorThrown+'\n'+xhr.responseText);
            }
        });
    }
});
</script>

<?php }} ?>
