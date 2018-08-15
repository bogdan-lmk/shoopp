<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-08-14 09:12:45
         compiled from "/home/bod/web/roundhome-dev.bandapixels.com/public_html/design/uggi_shop/html/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8952630055b6f2637d610b7-35502767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fc806dcdf54278e488e45c20a4f46844c68b3f3' => 
    array (
      0 => '/home/bod/web/roundhome-dev.bandapixels.com/public_html/design/uggi_shop/html/index.tpl',
      1 => 1534237916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8952630055b6f2637d610b7-35502767',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b6f2637e09060_66685010',
  'variables' => 
  array (
    'language' => 0,
    'config' => 0,
    'settings' => 0,
    'js_version' => 0,
    'css_version' => 0,
    'counters' => 0,
    'counter' => 0,
    'lang_link' => 0,
    'lang' => 0,
    'menu_header' => 0,
    'module' => 0,
    'page' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6f2637e09060_66685010')) {function content_5b6f2637e09060_66685010($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/bod/web/roundhome-dev.bandapixels.com/public_html/vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html <?php if ($_smarty_tpl->tpl_vars['language']->value->href_lang) {?>lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value->href_lang, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> prefix="og: http://ogp.me/ns#">
<head>
    
    <base href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/">

    
    <?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    
    <link href="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/favicon.png" type="image/x-icon" rel="icon">
    <link href="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/favicon.png" type="image/x-icon" rel="shortcut icon">

    
    <script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery-2.1.4.min.js<?php if ($_smarty_tpl->tpl_vars['js_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['js_version']->value;?>
<?php }?>"></script>

    
    <script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/slick.min.js<?php if ($_smarty_tpl->tpl_vars['js_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['js_version']->value;?>
<?php }?>"></script>

    
    <script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery.matchHeight-min.js<?php if ($_smarty_tpl->tpl_vars['js_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['js_version']->value;?>
<?php }?>"></script>

    
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&amp;subset=cyrillic" rel="stylesheet">

    
    <link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/main.css<?php if ($_smarty_tpl->tpl_vars['css_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['css_version']->value;?>
<?php }?>" rel="stylesheet">
    <?php if ($_smarty_tpl->tpl_vars['counters']->value['head']) {?>
        <?php  $_smarty_tpl->tpl_vars['counter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['counter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['counters']->value['head']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['counter']->key => $_smarty_tpl->tpl_vars['counter']->value) {
$_smarty_tpl->tpl_vars['counter']->_loop = true;
?>
            <?php echo $_smarty_tpl->tpl_vars['counter']->value->code;?>

        <?php } ?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type=="v2") {?>
        <script type="text/javascript">
            var onloadCallback = function() {
                mysitekey = "<?php echo $_smarty_tpl->tpl_vars['settings']->value->public_recaptcha;?>
";
                if($('#recaptcha1').size()>0){
                    grecaptcha.render('recaptcha1', {
                        'sitekey' : mysitekey
                    });
                }
                if($('#recaptcha2').size()>0){
                    grecaptcha.render('recaptcha2', {
                        'sitekey' : mysitekey
                    });
                }
            };
        </script>
        <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
    <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value->captcha_type=="invisible") {?>
        <script>
            function onSubmit(token) {
                document.getElementById("captcha_id").submit();
            }
            function onSubmitCallback(token) {
                document.getElementById("fn_callback").submit();
            }
            function onSubmitBlog(token) {
                document.getElementById("fn_blog_comment").submit();
            }
        </script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    <?php }?>

</head>

<body class="index-page">
  <div class="wrapper">
    <div class="content">
      <div class="overlay-body"></div>
<?php if ($_smarty_tpl->tpl_vars['counters']->value['body_top']) {?>
    <?php  $_smarty_tpl->tpl_vars['counter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['counter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['counters']->value['body_top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['counter']->key => $_smarty_tpl->tpl_vars['counter']->value) {
$_smarty_tpl->tpl_vars['counter']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['counter']->value->code;?>

    <?php } ?>
<?php }?>

<header class="header">
      <div class="container">
        <div class="content-row content-row--header">
            <div class="logo logo--header">
        
        <a class="home-link" href="<?php if ($_GET['module']=='MainView') {?>javascript:;<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php }?>">
            <img class="img-logo img-logo--header"src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/logo-head.png" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
"/>
        </a>
        
        
            </div>
            <a class="contact-link contact-link--header" href="tel:<?php echo $_smarty_tpl->tpl_vars['lang']->value->company_phone_1;?>
" data-language="company_phone_1" ><?php echo $_smarty_tpl->tpl_vars['lang']->value->company_phone_1;?>
</a>

            <a class="contact-link contact-link--header" href="tel:<?php echo $_smarty_tpl->tpl_vars['lang']->value->company_phone_2;?>
"  ><?php echo $_smarty_tpl->tpl_vars['lang']->value->company_address;?>
</a>
          <div class="mobile-menu-icon-wrap">
            <svg class="icon icon-menu ">
              <use xlink:href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/img/svg/symbol/sprite.svg#menu"></use>
            </svg>
            <svg class="icon icon-close-menu ">
              <use xlink:href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/img/svg/symbol/sprite.svg#close-menu"></use>
            </svg>
          </div>
          <div class="button-wrap"><a class="btn btn-request-call btn-request-call--white" data-button-call="1"> Заказать звонок</a></div>
            <div id="cart_informer" data-button-basket="1">
                <?php echo $_smarty_tpl->getSubTemplate ('cart_informer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        </div>
    </div>
            <!-- <div class="categories">
                
                <div class="categories_heading fn_switch">
                    <?php echo $_smarty_tpl->getSubTemplate ("svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>"menu_icon"), 0);?>

                    <span class="small-hidden" data-language="index_categories"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_categories;?>
</span>
                </div>

                <?php echo $_smarty_tpl->getSubTemplate ("categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        </div>
    </div> -->
</header>
<nav class="navigation">
  <div class="container">
    
    
    <?php echo $_smarty_tpl->tpl_vars['menu_header']->value;?>

  </div>
  <div class="button-wrap button-wrap--mobile">
    <div class="container">
      <a class="btn btn-request-call btn--mobile btn--black" data-button-call="1"> Заказать звонок</a></div>
  </div>
</nav>



    <?php if ($_smarty_tpl->tpl_vars['module']->value=="MainView"||$_smarty_tpl->tpl_vars['page']->value->url=='404') {?>
        <div class="fn_ajax_content">
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        </div>
    <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ('breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <div class="fn_ajax_content">
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            </div>
    <?php }?>

<!-- <div class="to_top"></div> -->


<footer class="footer">
  <div class="container">
    <div class="content-row content-row--footer align-items-center justify-content-between">
      <div class="logo"><a class="home-link" href=<?php if ($_GET['module']=='MainView') {?>javascript:;<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php }?>><img src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/images/logo-footer.png"></a></div>
      <a class="contact-link contact-link--footer" href="tel:<?php echo $_smarty_tpl->tpl_vars['lang']->value->company_phone_1;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->company_phone_1;?>
</a>
      <a class="contact-link contact-link--footer" href="/"><?php echo $_smarty_tpl->tpl_vars['lang']->value->company_address;?>
</a>
      <a class="contact-link contact-link--footer" href="/"><?php echo $_smarty_tpl->tpl_vars['lang']->value->company_email;?>
 </a>
      <div class="button-wrap"><a class="btn btn-request-call btn-request-call--black btn-footer" data-button-call="1">Заказать звонок</a><a class="btn btn-request-call btn--mobile btn--white" data-button-call="1"> Заказать звонок</a></div>
    </div>
  </div>
</footer>



    
                    
                    

                
                
                        
                        

                
                

                
                

            

<div class="copyright">
    <span class="copyright-link">2009-<?php echo smarty_modifier_date_format(time(),"%Y");?>
</span>
    <a href="http://okay-cms.com" target="_blank">
        <span class="copyright-link" data-language="index_copyright"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_copyright;?>
</span>
    </a>
  </div>
</div>
</div>

<div class="popup  popup-basket" data-basket="1">
  <div class="container">
    <div class="popup-content">
      <div class="close-icon-row">
        <svg class="icon icon-close ">
          <use xlink:href="/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/img/svg/symbol/sprite.svg#close"></use>
        </svg>
      </div>
        <?php echo $_smarty_tpl->getSubTemplate ('cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
  </div>
</div>
<div class="popup popup-order">
  <div class="container">
    <div class="popup-content">
      <div class="close-icon-row">
        <svg class="icon icon-close ">
          <use xlink:href="static/img/svg/symbol/sprite.svg#close"></use>
        </svg>
      </div>
      <div class="popup-content-heading-row">
        <h3 class="popup-content-heading popup-content-heading--contacts">Оформление заказа</h3>
      </div>
      <form class="popup-form">
        <div class="popup-form-description"><span class="popup-form-description-text">Заполните, пожалуйста, поля ниже, чтобы мы могли связаться с вами	</span></div>
        <div class="input-row">
          <input class="input--popup-form" placeholder="ФИО" required>
        </div>
        <div class="input-row">
          <input class="input--popup-form input--phone" placeholder="Телефон" required>
          <input class="input--popup-form input--email" placeholder="E-mail">
        </div>
        <div class="input-row">
          <textarea class="textarea delivery-area" placeholder="Адрес доставки"></textarea>
        </div>
        <div class="input-row">
          <textarea class="textarea comment-area" placeholder="Коментарий"></textarea>
        </div>
        <div class="button-wrap">
          <button class="btn btn-large btn--black btn-call-me">Отправить сообщение</button><a class="btn btn-small btn--white btn-decline">Отменить</a>
        </div>
      </form>
    </div>
  </div>
</div>



<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery-ui.min.js<?php if ($_smarty_tpl->tpl_vars['js_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['js_version']->value;?>
<?php }?>"></script>


<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/jquery.fancybox.min.css<?php if ($_smarty_tpl->tpl_vars['css_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['css_version']->value;?>
<?php }?>" rel="stylesheet">
<script src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/jquery.fancybox.min.js<?php if ($_smarty_tpl->tpl_vars['js_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['js_version']->value;?>
<?php }?>" defer></script>


<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery.autocomplete-min.js<?php if ($_smarty_tpl->tpl_vars['js_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['js_version']->value;?>
<?php }?>" defer></script>


<?php if ($_SESSION['admin']) {?>
    <script>lang_id = <?php echo $_smarty_tpl->tpl_vars['language']->value->id;?>
</script>
    <script src ="backend/design/js/admintooltip/admintooltip.js<?php if ($_smarty_tpl->tpl_vars['js_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['js_version']->value;?>
<?php }?>"></script>
    <link href="backend/design/js/admintooltip/styles/admin.css<?php if ($_smarty_tpl->tpl_vars['css_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['css_version']->value;?>
<?php }?>" rel="stylesheet">
<?php }?>


<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery.validate.min.js<?php if ($_smarty_tpl->tpl_vars['js_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['js_version']->value;?>
<?php }?>" ></script>
<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/additional-methods.min.js<?php if ($_smarty_tpl->tpl_vars['js_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['js_version']->value;?>
<?php }?>"></script>


<?php if ($_GET['module']=='ProductView'||$_GET['module']=="BlogView") {?>

    <link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/jssocials.css<?php if ($_smarty_tpl->tpl_vars['css_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['css_version']->value;?>
<?php }?>" rel="stylesheet">
    <link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/jssocials-theme-flat.css<?php if ($_smarty_tpl->tpl_vars['css_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['css_version']->value;?>
<?php }?>" rel="stylesheet">
    <script src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/jssocials.min.js<?php if ($_smarty_tpl->tpl_vars['js_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['js_version']->value;?>
<?php }?>" ></script>
<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ("scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/okay.js<?php if ($_smarty_tpl->tpl_vars['js_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['js_version']->value;?>
<?php }?>"></script>

<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/main.js<?php if ($_smarty_tpl->tpl_vars['js_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['js_version']->value;?>
<?php }?>"></script>
<?php if ($_smarty_tpl->tpl_vars['counters']->value['body_bottom']) {?>
    <?php  $_smarty_tpl->tpl_vars['counter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['counter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['counters']->value['body_bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['counter']->key => $_smarty_tpl->tpl_vars['counter']->value) {
$_smarty_tpl->tpl_vars['counter']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['counter']->value->code;?>

    <?php } ?>
<?php }?>
  </div>
    </div>
</body>
</html>
<?php }} ?>
