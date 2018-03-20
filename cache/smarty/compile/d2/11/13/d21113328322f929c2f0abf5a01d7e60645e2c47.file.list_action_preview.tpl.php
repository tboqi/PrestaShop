<?php /* Smarty version Smarty-3.1.19, created on 2018-03-20 10:51:36
         compiled from "/work/d/code/PrestaShop/admin-dev/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11477463465ab077382fddf3-47295856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd21113328322f929c2f0abf5a01d7e60645e2c47' => 
    array (
      0 => '/work/d/code/PrestaShop/admin-dev/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1521507735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11477463465ab077382fddf3-47295856',
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
  'unifunc' => 'content_5ab077383046c8_07959492',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab077383046c8_07959492')) {function content_5ab077383046c8_07959492($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
