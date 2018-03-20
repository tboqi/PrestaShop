<?php /* Smarty version Smarty-3.1.19, created on 2018-03-20 10:52:17
         compiled from "/work/d/code/PrestaShop/admin-dev/themes/default/template/helpers/list/list_action_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7603459975ab077617d8ef3-81591765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e437b7e8333b5810e17fc09a4b925fd61a7b5ec' => 
    array (
      0 => '/work/d/code/PrestaShop/admin-dev/themes/default/template/helpers/list/list_action_default.tpl',
      1 => 1521507735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7603459975ab077617d8ef3-81591765',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ab077617e4a97_33795706',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab077617e4a97_33795706')) {function content_5ab077617e4a97_33795706($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {?> name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="default">
	<i class="icon-asterisk"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
