<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-07-30 08:21:56
         compiled from "backend/design/html/images.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18368649385b5ecaa4f02043-23581859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56bc5d6dbafe70435dca0ecd28f618a1ccc952ba' => 
    array (
      0 => 'backend/design/html/images.tpl',
      1 => 1532936824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18368649385b5ecaa4f02043-23581859',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'btr' => 0,
    'theme' => 0,
    'message_error' => 0,
    'images_dir' => 0,
    'images' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b5ecaa50a32a3_59851528',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b5ecaa50a32a3_59851528')) {function content_5b5ecaa50a32a3_59851528($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/bod/web/roundhome-dev.bandapixels.com/public_html/vendor/smarty/smarty/libs/plugins/modifier.truncate.php';
?><?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['btr']->value->images_images, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>


<div class="row">
    <div class="col-lg-10 col-md-10">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->images_theme, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value, ENT_QUOTES, 'UTF-8', true);?>

            </div>
        </div>
    </div>
    <div class="col-md-2 col-lg-2 col-sm-12 float-xs-right"></div>
</div>


<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_warning">
                <div class="">
                    <?php if ($_smarty_tpl->tpl_vars['message_error']->value=='permissions') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_permissions, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='name_exists') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->images_exists, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value=='theme_locked') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_protected, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>


<div class="boxed fn_toggle_wrap">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
            <input type="hidden" name="delete_image" value="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading_box">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->images_images, ENT_QUOTES, 'UTF-8', true);?>

                            <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                                <a class="btn-minimize" href="javascript:;" ><i class="icon-arrow-down"></i></a>
                            </div>
                        </div>
                        
                        <div class="toggle_body_wrap fn_card on">
                            <div class="row">
                                <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                        <div class="banner_card">
                                            <div class="banner_card_header">
                                                <input type="text" class="hidden" name="old_name[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                                <div class="form-group col-lg-9 col-md-8 px-0 fn_rename_value hidden mb-0">
                                                    <input type="text" class="form-control" name="new_name[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                                </div>
                                                <span class="font-weight-bold"><?php echo smarty_modifier_truncate(htmlspecialchars($_smarty_tpl->tpl_vars['image']->value->name, ENT_QUOTES, 'UTF-8', true),20,'...');?>
</span>
                                                <i class="fa fa-pencil fn_rename_theme rename_theme p-h" data-old_name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"></i>

                                                <button type="button" data-name="<?php echo $_smarty_tpl->tpl_vars['image']->value->name;?>
" class="fn_delete_image btn_close float-xs-right">
                                                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>

                                                </button>
                                            </div>
                                            <div class="banner_card_block">
                                                <div class="wrap_bottom_tag_images">
                                                    <a class="theme_image_item" href='../<?php echo $_smarty_tpl->tpl_vars['images_dir']->value;?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value->name, ENT_QUOTES, 'UTF-8', true);?>
'>
                                                        <img src='../<?php echo $_smarty_tpl->tpl_vars['images_dir']->value;?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value->name, ENT_QUOTES, 'UTF-8', true);?>
'>
                                                    </a>
                                                    <div class="tag tag-info">
                                                        <?php if ($_smarty_tpl->tpl_vars['image']->value->size>1024*1024) {?>
                                                            <?php echo round(($_smarty_tpl->tpl_vars['image']->value->size/1024/1024),2);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_mb, ENT_QUOTES, 'UTF-8', true);?>

                                                        <?php } elseif ($_smarty_tpl->tpl_vars['image']->value->size>1024) {?>
                                                            <?php echo round(($_smarty_tpl->tpl_vars['image']->value->size/1024),2);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_kb, ENT_QUOTES, 'UTF-8', true);?>

                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['image']->value->size;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_byte, ENT_QUOTES, 'UTF-8', true);?>

                                                        <?php }?>,
                                                        <?php echo $_smarty_tpl->tpl_vars['image']->value->width;?>
&times;<?php echo $_smarty_tpl->tpl_vars['image']->value->height;?>
 px
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <div class="">
                            <button type="button" class="fn_add_image btn btn_small btn-info mb-1 btn_images_add">
                                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'plus'), 0);?>

                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->images_add, ENT_QUOTES, 'UTF-8', true);?>

                            </button>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 pull-right">
                        <button type="submit" name="save" class="btn btn_small btn_blue float-md-right">
                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'checked'), 0);?>

                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    var general_confirm_delete = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_confirm_delete, ENT_QUOTES, 'UTF-8', true);?>
';
</script>

<script>
$(function() {

    $('.fn_rename_theme').on('click',function(){
        $(this).parent().find('.fn_rename_value').toggleClass('hidden');
        $(this).prev().toggleClass('hidden');
        $(this).parent().find('.fn_rename_value > input').val($(this).data('old_name'))
    });
    // Удалить
    $('.fn_delete_image').on('click',function(){
        $('input[name=delete_image]').val($(this).data('name'));
        $('form').submit();
    });
    
    // Загрузить
    $('.fn_add_image').on('click',function(){
        $(this).closest('div').append($('<input class="import_file" type="file" name="upload_images[]">'));
    });
    
    $("form").submit(function() {
        if($('input[name="delete_image"]').val()!='' && !confirm(general_confirm_delete))
            return false;    
    });

});
</script>

<?php }} ?>
