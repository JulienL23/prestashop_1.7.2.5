<?php /* Smarty version Smarty-3.1.19, created on 2018-02-28 09:39:37
         compiled from "C:\xampp\htdocs\prestashop_1.7.2.5\admin\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1333862725a966ac95bcda3-93578792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ef79adffae33bf8b3ca4de9e002ef4209ddce55' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.2.5\\admin\\themes\\default\\template\\content.tpl',
      1 => 1519735131,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1333862725a966ac95bcda3-93578792',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a966ac95cf392_49788120',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a966ac95cf392_49788120')) {function content_5a966ac95cf392_49788120($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
