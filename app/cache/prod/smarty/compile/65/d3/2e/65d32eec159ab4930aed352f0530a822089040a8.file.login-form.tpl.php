<?php /* Smarty version Smarty-3.1.19, created on 2018-03-01 09:20:13
         compiled from "C:\xampp\htdocs\prestashop_1.7.2.5\themes\classic\templates\customer\_partials\login-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8906804565a97b7bdb13217-24499744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65d32eec159ab4930aed352f0530a822089040a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.2.5\\themes\\classic\\templates\\customer\\_partials\\login-form.tpl',
      1 => 1519735141,
      2 => 'file',
    ),
    '7b8fcea0a8619e95b0ce4f44ea06c94876e4f891' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.2.5\\themes\\classic\\templates\\_partials\\form-errors.tpl',
      1 => 1519735141,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8906804565a97b7bdb13217-24499744',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'action' => 0,
    'formFields' => 0,
    'field' => 0,
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a97b7bdb617f9_31248485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a97b7bdb617f9_31248485')) {function content_5a97b7bdb617f9_31248485($_smarty_tpl) {?>


  
    <?php /*  Call merged included template "_partials/form-errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, '8906804565a97b7bdb13217-24499744');
content_5a97b7bdb39c14_10461155($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/form-errors.tpl" */?>
  

  <form id="login-form" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');?>
" method="post">

    <section>
      
        <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
          
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0][0]->smartyFormField(array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl);?>

          
        <?php } ?>
      
      <div class="forgot-password">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
          <?php echo smartyTranslate(array('s'=>'Forgot your password?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>

        </a>
      </div>
    </section>

    
      <footer class="form-footer text-sm-center clearfix">
        <input type="hidden" name="submitLogin" value="1">
        
          <button class="btn btn-primary" data-link-action="sign-in" type="submit" class="form-control-submit">
            <?php echo smartyTranslate(array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

          </button>
        
      </footer>
    

  </form>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-03-01 09:20:13
         compiled from "C:\xampp\htdocs\prestashop_1.7.2.5\themes\classic\templates\_partials\form-errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a97b7bdb39c14_10461155')) {function content_5a97b7bdb39c14_10461155($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    
      <ul>
        <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
          <li class="alert alert-danger"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li>
        <?php } ?>
      </ul>
    
  </div>
<?php }?>
<?php }} ?>
