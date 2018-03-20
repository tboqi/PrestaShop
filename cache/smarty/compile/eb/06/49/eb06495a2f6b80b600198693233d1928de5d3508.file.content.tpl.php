<?php /* Smarty version Smarty-3.1.19, created on 2018-03-20 09:49:35
         compiled from "/work/d/code/PrestaShop/admin-dev/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17217681445ab068afab9918-54185550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb06495a2f6b80b600198693233d1928de5d3508' => 
    array (
      0 => '/work/d/code/PrestaShop/admin-dev/themes/default/template/content.tpl',
      1 => 1521507735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17217681445ab068afab9918-54185550',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ab068afabed54_26432154',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab068afabed54_26432154')) {function content_5ab068afabed54_26432154($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
