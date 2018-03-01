<?php /* Smarty version Smarty-3.1.19, created on 2018-02-28 10:07:30
         compiled from "C:\xampp\htdocs\prestashop_1.7.2.5\themes\classic\templates\catalog\_partials\product-additional-info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10923065225a9671527a0963-13000331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5822f1fa6ad9ecae0685000b399e37df228566e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.2.5\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1519735141,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10923065225a9671527a0963-13000331',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a9671527a28e1_44215693',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9671527a28e1_44215693')) {function content_5a9671527a28e1_44215693($_smarty_tpl) {?>
<div class="product-additional-info">
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

</div>
<?php }} ?>
