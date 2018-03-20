<?php /* Smarty version Smarty-3.1.19, created on 2018-03-20 10:51:35
         compiled from "/work/d/code/PrestaShop/admin-dev/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20453467835ab077379c5568-69926354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a74fe0b56cf9c68c8cf605ecb2d88bd68bc1baf' => 
    array (
      0 => '/work/d/code/PrestaShop/admin-dev/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl',
      1 => 1521507735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20453467835ab077379c5568-69926354',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ab077379d5e17_83633540',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab077379d5e17_83633540')) {function content_5ab077379d5e17_83633540($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
