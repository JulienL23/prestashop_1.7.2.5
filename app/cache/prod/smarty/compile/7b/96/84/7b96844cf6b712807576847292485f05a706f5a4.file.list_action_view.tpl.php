<?php /* Smarty version Smarty-3.1.19, created on 2018-02-28 09:57:19
         compiled from "C:\xampp\htdocs\prestashop_1.7.2.5\admin\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14925449295a966eef1abd23-67267989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b96844cf6b712807576847292485f05a706f5a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.2.5\\admin\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1519735134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14925449295a966eef1abd23-67267989',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a966eef1bfc15_51658633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a966eef1bfc15_51658633')) {function content_5a966eef1bfc15_51658633($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
