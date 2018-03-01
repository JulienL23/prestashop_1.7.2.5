<?php /* Smarty version Smarty-3.1.19, created on 2018-02-28 09:39:38
         compiled from "C:\xampp\htdocs\prestashop_1.7.2.5\modules\welcome\views\navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3220949125a966aca3ca924-04070515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c40bd9aa0b430d77ca5e6ddff4281d102d4caca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.2.5\\modules\\welcome\\views\\navbar.tpl',
      1 => 1519735137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3220949125a966aca3ca924-04070515',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'percent_rounded' => 0,
    'percent_real' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a966aca3dd106_20485485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a966aca3dd106_20485485')) {function content_5a966aca3dd106_20485485($_smarty_tpl) {?>

<div class="onboarding-navbar">
  <div class="row text">
    <div class="col-md-8">
      <?php echo smartyTranslate(array('s'=>'Launch your shop!','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

    </div>
    <div class="col-md-4 text-right text-md-right"><?php echo $_smarty_tpl->tpl_vars['percent_rounded']->value;?>
%</div>
  </div>
  <div class="progress">
    <div class="bar" role="progressbar" style="width:<?php echo $_smarty_tpl->tpl_vars['percent_real']->value;?>
%;"></div>
  </div>
  <div>
    <button class="btn btn-main btn-sm onboarding-button-resume"><?php echo smartyTranslate(array('s'=>'Resume','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
  </div>
  <div>
    <a class="btn -small btn-main btn-sm onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Stop the OnBoarding','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</a>
  </div>
</div>
<?php }} ?>
