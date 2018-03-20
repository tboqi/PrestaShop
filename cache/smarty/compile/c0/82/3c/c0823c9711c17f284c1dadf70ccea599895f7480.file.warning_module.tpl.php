<?php /* Smarty version Smarty-3.1.19, created on 2018-03-20 10:50:38
         compiled from "/work/d/code/PrestaShop/admin-dev/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11708913035ab076fec3ff18-61931694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0823c9711c17f284c1dadf70ccea599895f7480' => 
    array (
      0 => '/work/d/code/PrestaShop/admin-dev/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1521507735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11708913035ab076fec3ff18-61931694',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ab076fec529f1_69511915',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab076fec529f1_69511915')) {function content_5ab076fec529f1_69511915($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
