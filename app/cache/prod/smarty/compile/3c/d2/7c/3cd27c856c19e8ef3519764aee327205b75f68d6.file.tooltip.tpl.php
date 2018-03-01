<?php /* Smarty version Smarty-3.1.19, created on 2018-02-28 09:39:38
         compiled from "C:\xampp\htdocs\prestashop_1.7.2.5\modules\welcome\views\templates\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9065984805a966aca5204f6-53636466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cd27c856c19e8ef3519764aee327205b75f68d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.2.5\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1519735137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9065984805a966aca5204f6-53636466',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a966aca533d61_44310490',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a966aca533d61_44310490')) {function content_5a966aca533d61_44310490($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
