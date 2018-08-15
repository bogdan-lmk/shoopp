<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-08-14 09:12:45
         compiled from "/home/bod/web/roundhome-dev.bandapixels.com/public_html/design/uggi_shop/html/post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1874098925b729d0da95bd1-71387915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '173ed4387dc5efd922d9c65a3f3683bafa1d1f99' => 
    array (
      0 => '/home/bod/web/roundhome-dev.bandapixels.com/public_html/design/uggi_shop/html/post.tpl',
      1 => 1534237917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1874098925b729d0da95bd1-71387915',
  'function' => 
  array (
    'comments_tree' => 
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
    'post' => 0,
    'prev_post' => 0,
    'next_post' => 0,
    'lang' => 0,
    'comments' => 0,
    'comment' => 0,
    'level' => 0,
    'children' => 0,
    'error' => 0,
    'comment_name' => 0,
    'comment_email' => 0,
    'comment_text' => 0,
    'settings' => 0,
    'captcha_post' => 0,
    'related_products' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b729d0db51cb7_32463848',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b729d0db51cb7_32463848')) {function content_5b729d0db51cb7_32463848($_smarty_tpl) {?>


/* <?php if ($_GET['type_post']=="blog") {?>
    <?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/blog/".((string)$_smarty_tpl->tpl_vars['post']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/news/".((string)$_smarty_tpl->tpl_vars['post']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
<?php }?> */


<h1 class="h1">
    <span data-post="<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
</h1>

<div class="block padding">
    
    <div class="post_date">
        <span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['post']->value->date);?>
</span>
    </div>

    
    <?php echo $_smarty_tpl->tpl_vars['post']->value->description;?>


    
    <div class="post_share">
        <div class="fn_share jssocials"></div>
    </div>

    
    <?php if ($_smarty_tpl->tpl_vars['prev_post']->value||$_smarty_tpl->tpl_vars['next_post']->value) {?>
        <nav>
            <ol class="pager row">
                <li class="col-xs-12<?php if ($_smarty_tpl->tpl_vars['next_post']->value) {?> col-sm-6<?php } else { ?> col-sm-12<?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['prev_post']->value) {?>
                        <a href="<?php echo $_GET['type_post'];?>
/<?php echo $_smarty_tpl->tpl_vars['prev_post']->value->url;?>
">← <span><?php echo $_smarty_tpl->tpl_vars['prev_post']->value->name;?>
</span></a>
                    <?php }?>
                </li>
                <li class="col-xs-12 col-sm-6">
                    <?php if ($_smarty_tpl->tpl_vars['next_post']->value) {?>
                        <a href="<?php echo $_GET['type_post'];?>
/<?php echo $_smarty_tpl->tpl_vars['next_post']->value->url;?>
"><span><?php echo $_smarty_tpl->tpl_vars['next_post']->value->name;?>
</span> →</a>
                    <?php }?>
                </li>
            </ol>
        </nav>
    <?php }?>
</div>

<div id="comments">
    <div class="h2">
        <span data-language="post_comments"><?php echo $_smarty_tpl->tpl_vars['lang']->value->post_comments;?>
</span>
    </div>

    <div class="padding block">
        <div class="row">
            <div class="col-lg-7">
                <?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
                    <?php if (!function_exists('smarty_template_function_comments_tree')) {
    function smarty_template_function_comments_tree($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['comments_tree']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
                        <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>

                            
                            <a name="comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
"></a>

                            
                            <div class="comment_item<?php if ($_smarty_tpl->tpl_vars['level']->value>0) {?> admin_note<?php }?>">

                                <div class="comment_header">
                                    
                                    <span class="comment_author"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </div>

                                
                                <div class="comment_content">
                                    <?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->text, ENT_QUOTES, 'UTF-8', true));?>

                                </div>
                                <div class="comment_footer">
                                    
                                    <span class="comment_date"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['date'][0][0]->date_modifier($_smarty_tpl->tpl_vars['comment']->value->date);?>
, <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['time'][0][0]->time_modifier($_smarty_tpl->tpl_vars['comment']->value->date);?>
</span>

                                    
                                    <?php if (!$_smarty_tpl->tpl_vars['comment']->value->approved) {?>
                                    <span data-language="post_comment_status">(<?php echo $_smarty_tpl->tpl_vars['lang']->value->post_comment_status;?>
)</span>
                                    <?php }?>
                                </div>

                                 <?php if (isset($_smarty_tpl->tpl_vars['children']->value[$_smarty_tpl->tpl_vars['comment']->value->id])) {?>
                                    <?php smarty_template_function_comments_tree($_smarty_tpl,array('comments'=>$_smarty_tpl->tpl_vars['children']->value[$_smarty_tpl->tpl_vars['comment']->value->id],'level'=>$_smarty_tpl->tpl_vars['level']->value+1));?>

                                <?php }?>
                            </div>

                        <?php } ?>
                    <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

                    <?php smarty_template_function_comments_tree($_smarty_tpl,array('comments'=>$_smarty_tpl->tpl_vars['comments']->value));?>

                <?php } else { ?>
                    <div class="no_comments">
                        <span data-language="post_no_comments"><?php echo $_smarty_tpl->tpl_vars['lang']->value->post_no_comments;?>
</span>
                    </div>
                <?php }?>
            </div>

            <div class="col-lg-5">
               
               <form id="fn_blog_comment" class="fn_validate_post"  method="post" action="">

                    <div class="h3">
                        <span data-language="post_write_comment"><?php echo $_smarty_tpl->tpl_vars['lang']->value->post_write_comment;?>
</span>
                    </div>

                    
                    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                        <div class="message_error">
                            <?php if ($_smarty_tpl->tpl_vars['error']->value=='captcha') {?>
                                <span data-language="form_error_captcha"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_error_captcha;?>
</span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_name') {?>
                                <span data-language="form_enter_name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_name;?>
</span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_comment') {?>
                                <span data-language="form_enter_comment"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_comment;?>
</span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_email') {?>
                                <span data-language="form_enter_email"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_email;?>
</span>
                            <?php }?>
                        </div>
                    <?php }?>

                    <div class="row">
                        
                        <div class="col-lg-6">
                            <div class="form_group">
                                <input class="form_input placeholder_focus" type="text" name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment_name']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
                                <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_name;?>
*</span>
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="form_group">
                                <input class="form_input placeholder_focus" type="text" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment_email']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
                                <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
</span>
                            </div>
                        </div>
                    </div>

                    
                    <div class="form_group">
                        <textarea class="form_textarea placeholder_focus" rows="3" name="text" ><?php echo $_smarty_tpl->tpl_vars['comment_text']->value;?>
</textarea>
                        <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_comment;?>
*</span>
                    </div>

                    
                    <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_post) {?>
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type=="v2") {?>
                             <div class="captcha row" style="">
                                 <div id="recaptcha1"></div>
                             </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value->captcha_type=="default") {?>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_captcha'][0][0]->get_captcha_plugin(array('var'=>"captcha_post"),$_smarty_tpl);?>

                             <div class="captcha">
                                  <div class="secret_number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_post']->value[0], ENT_QUOTES, 'UTF-8', true);?>
 + ? =  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_post']->value[1], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                  <span class="form_captcha">
                                       <input class="form_input input_captcha placeholder_focus" type="text" name="captcha_code" value="" >
                                       <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_captcha;?>
*</span>
                                  </span>
                             </div>
                        <?php }?>
                    <?php }?>
                   <input type="hidden" name="comment" value="1">

                   
                    <input class="button g-recaptcha" type="submit" name="comment" data-language="form_send" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type=="invisible") {?>data-sitekey="<?php echo $_smarty_tpl->tpl_vars['settings']->value->public_recaptcha_invisible;?>
" data-badge='bottomleft' data-callback="onSubmitBlog"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_send;?>
">
               </form>
           </div>
       </div>
    </div>
</div>



<?php if ($_smarty_tpl->tpl_vars['related_products']->value) {?>
    <div class="h2">
        <span data-language="product_recommended_products"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_recommended_products;?>
</span>
    </div>

    <div class="related clearfix">
        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
            <div class="products_item no_padding col-sm-6 col-xl-3">
                <?php echo $_smarty_tpl->getSubTemplate ("product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['p']->value), 0);?>

            </div>
        <?php } ?>
    </div>
<?php }?>
<?php }} ?>
