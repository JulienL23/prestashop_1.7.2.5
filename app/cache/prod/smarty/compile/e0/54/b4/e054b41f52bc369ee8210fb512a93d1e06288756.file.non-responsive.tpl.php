<?php /* Smarty version Smarty-3.1.19, created on 2018-02-28 10:09:43
         compiled from "C:\xampp\htdocs\prestashop_1.7.2.5\admin\themes\new-theme\template\components\layout\non-responsive.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5957095245a9671d7b2f298-77241504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e054b41f52bc369ee8210fb512a93d1e06288756' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.2.5\\admin\\themes\\new-theme\\template\\components\\layout\\non-responsive.tpl',
      1 => 1519735129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5957095245a9671d7b2f298-77241504',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'default_tab_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a9671d7b33cf0_10186366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9671d7b33cf0_10186366')) {function content_5a9671d7b33cf0_10186366($_smarty_tpl) {?>
<div id="non-responsive" class="js-non-responsive">
  <h1><?php echo smartyTranslate(array('s'=>'Oh no!'),$_smarty_tpl);?>
</h1>
  <p class="m-t-3">
    <?php echo smartyTranslate(array('s'=>'The mobile version of this page is not available yet.'),$_smarty_tpl);?>

  </p>
  <p class="m-t-2">
    <?php echo smartyTranslate(array('s'=>'Please use a desktop computer to access this page, until is adapted to mobile.'),$_smarty_tpl);?>

  </p>
  <p class="m-t-2">
    <?php echo smartyTranslate(array('s'=>'Thank you.'),$_smarty_tpl);?>

  </p>
  <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['default_tab_link']->value,'html','UTF-8');?>
" class="btn btn-primary p-y-1 m-t-3">
    <i class="material-icons">arrow_back</i>
    <?php echo smartyTranslate(array('s'=>'Back'),$_smarty_tpl);?>

  </a>
</div>
<div class="mobile-layer"></div>
<?php }} ?>