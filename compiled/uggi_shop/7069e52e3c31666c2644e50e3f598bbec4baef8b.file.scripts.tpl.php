<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-08-14 09:12:46
         compiled from "/home/bod/web/roundhome-dev.bandapixels.com/public_html/design/uggi_shop/html/scripts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9838931355b6f2638078132-40320811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7069e52e3c31666c2644e50e3f598bbec4baef8b' => 
    array (
      0 => '/home/bod/web/roundhome-dev.bandapixels.com/public_html/design/uggi_shop/html/scripts.tpl',
      1 => 1534237917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9838931355b6f2638078132-40320811',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b6f263809b467_16729593',
  'variables' => 
  array (
    'settings' => 0,
    'error' => 0,
    'call_sent' => 0,
    'call_error' => 0,
    'subscribe_success' => 0,
    'subscribe_error' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6f263809b467_16729593')) {function content_5b6f263809b467_16729593($_smarty_tpl) {?><script>
    /* Глобальный обьект */
    /* все глобальные переменные добавляем в оъект и работаем с ним!!! */
    var okay = {};
    okay.max_order_amount = <?php echo $_smarty_tpl->tpl_vars['settings']->value->max_order_amount;?>
;

    
    okay.is_preorder = <?php echo $_smarty_tpl->tpl_vars['settings']->value->is_preorder;?>
;
    
    <?php if ($_GET['module']=='BlogView'&&$_smarty_tpl->tpl_vars['error']->value) {?>
        
        $( window ).load( function() {
            location.href = location.href + '#fn_blog_comment';
            $( '#fn_blog_comment' ).trigger( 'submit' );
        } );
    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['call_sent']->value) {?>
        $( function() {
            $.fancybox.open( {
                src: '#fn_callback_sent',
                type : 'inline',
            } );
        } );
    <?php } elseif ($_smarty_tpl->tpl_vars['call_error']->value) {?>
        $(function() {
            $.fancybox.open({
                src: '#fn_callback',
                type : 'inline'
            });
        });
    <?php }?>

    
    <?php if ($_GET['module']=='ProductView'&&$_smarty_tpl->tpl_vars['error']->value) {?>
        $( window ).load( function() {
            $( '.tab_navigation a' ).removeClass( 'selected' );
            $( '.tab' ).hide();
            $( 'a[href="#comments"]' ).addClass( 'selected' );
             $( '#comments').show();
        } );
    
    <?php } elseif ($_GET['module']=='ProductView') {?>
        $( window ).load( function() {
            if( location.hash.search('comment') !=-1 ) {
                $( '.tab_navigation a' ).removeClass( 'selected' );
                $( '.tab' ).hide();
                $( 'a[href="#comments"]' ).addClass( 'selected' );
                 $( '#comments').show();
            }
        } );
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['subscribe_success']->value) {?>
        $( function() {
            $.fancybox.open( {
                src: '#fn_subscribe_sent',
                type : 'inline',
            } );
        } );
    <?php } elseif ($_smarty_tpl->tpl_vars['subscribe_error']->value) {?>
        $( window ).load( function() {
            location.href = location.href + '#subscribe_error';
            $.fancybox.open( {
                src: '#subscribe_error',
                type : 'inline',
            } );
        } );
    <?php }?>

    <?php if ($_GET['module']=="MainView"||$_GET['module']=="ProductsView"||$_GET['module']=="ProductView"||$_GET['module']=="ComparisonView"||$_GET['module']=="WishlistView"||$_GET['module']=="BlogView") {?>
        $(document).ready(function(){
            $('select[name=variant]').each(function(){
                var first_in_stock = $(this).find('option[data-stock!="0"]').first();
                first_in_stock.prop('selected',true);
                first_in_stock.trigger('change');
            });
        });
    <?php }?>

    var form_enter_name = '<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_name;?>
';
    var form_enter_phone = '<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_phone;?>
';
    var form_error_captcha = '<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_error_captcha;?>
';
    var form_enter_email = '<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_email;?>
';
    var form_enter_password = '<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_password;?>
';
    var form_enter_message = '<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_message;?>
';

    if($(".fn_validate_product").size()>0) {
        $(".fn_validate_product").validate({
            rules: {
                name: "required",
                text: "required",
                captcha_code: "required"
            },
            messages: {
                name: form_enter_name,
                text: form_enter_message,
                captcha_code: form_error_captcha
            }
        });
    }
    if($(".fn_validate_callback").size()>0) {
        $(".fn_validate_callback").validate({
            rules: {
                name: "required",
                phone: "required",
            },
            messages: {
                name: form_enter_name,
                phone: form_enter_phone,
            }

        });
    }
    if($(".fn_validate_subscribe").size()>0) {
        $(".fn_validate_subscribe").validate({
            rules: {
                subscribe_email: "required",
            },
            messages: {
                subscribe_email: form_enter_email
            }
        });
    }
    if($(".fn_validate_post").size()>0) {
        $(".fn_validate_post").validate({
            rules: {
                name: "required",
                text: "required",
                captcha_code: "required"
            },
            messages: {
                name: form_enter_name,
                text: form_enter_message,
                captcha_code: form_error_captcha
            }
        });
    }

    if($(".fn_validate_feedback").size()>0) {
        $(".fn_validate_feedback").validate({
            rules: {
                name: "required",
                email: {
                    required: true,
                    email: true
                },
                message: "required",
                captcha_code: "required"
            },
            messages: {
                name: form_enter_name,
                email: form_enter_email,
                message: form_enter_message,
                captcha_code: form_error_captcha
            }
        });
    }

    if($(".fn_validate_cart").size()>0) {
        $(".fn_validate_cart").validate({
            rules: {
                name: "required",
                email: {
                    required: true,
                    email: true
                },
                captcha_code: "required"
            },
            messages: {
                name: form_enter_name,
                email: form_enter_email,
                captcha_code: form_error_captcha
            }
        });
    }

    if($(".fn_validate_login").size()>0) {
        $(".fn_validate_login").validate({
            rules: {
                email: "required",
                password: "required",
            },
            messages: {
                email: form_enter_email,
                password: form_enter_password
            }
        });
    }

    if($(".fn_validate_register").size()>0) {
        $(".fn_validate_register").validate({
            rules: {
                name: "required",
                email: {
                    required: true,
                    email: true
                },
                password: "required",
                captcha_code: "required"
            },
            messages: {
                name: form_enter_name,
                email: form_enter_email,
                captcha_code: form_error_captcha,
                password: form_enter_password
            }
        });
    }

    if($(".fn_share").size()>0) {
        $(".fn_share").jsSocials({
            showLabel: false,
            showCount: false,
            shares: ["twitter", "facebook", "googleplus", "vkontakte"]
        });
    }

</script>
<?php }} ?>
