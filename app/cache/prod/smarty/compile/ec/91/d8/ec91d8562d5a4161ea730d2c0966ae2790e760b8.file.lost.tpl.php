<?php /* Smarty version Smarty-3.1.19, created on 2018-02-28 09:39:38
         compiled from "C:\xampp\htdocs\prestashop_1.7.2.5\modules\welcome\views\templates\lost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5407895845a966aca44a722-63462758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec91d8562d5a4161ea730d2c0966ae2790e760b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.2.5\\modules\\welcome\\views\\templates\\lost.tpl',
      1 => 1519735137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5407895845a966aca44a722-63462758',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a966aca45e4c5_60879627',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a966aca45e4c5_60879627')) {function content_5a966aca45e4c5_60879627($_smarty_tpl) {?>

<div class="onboarding onboarding-popup bootstrap">
  <div class="content">
    <p><?php echo smartyTranslate(array('s'=>'Hey! Are you lost?','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <p><?php echo smartyTranslate(array('s'=>'To continue, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-primary onboarding-button-goto-current"><?php echo smartyTranslate(array('s'=>'Continue','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
    <p><?php echo smartyTranslate(array('s'=>'If you want to stop the tutorial for good, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-alert onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Quit the Welcome tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
  </div>
</div>
<?php }} ?>
