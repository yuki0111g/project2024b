<?php
/* Smarty version 3.1.39, created on 2024-06-21 08:43:27
  from 'C:\xampp\htdocs\2024b\productList\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6675210fe53c62_51431360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8cd41ac13c722ec3655c5eac10ebd156808676a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\2024b\\productList\\list.tpl',
      1 => 1718952092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6675210fe53c62_51431360 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="list.css">
    <title>商品一覧</title>
</head>

<h1>商品一覧</h1><table border="1">
<div id="column" class="column02">
<h3>2個並び</h3>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultMarc']->value, 'loop');
$_smarty_tpl->tpl_vars['loop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['loop']->value) {
$_smarty_tpl->tpl_vars['loop']->do_else = false;
?>
<li><a href=""><img src=<?php echo ("../productImages/").($_smarty_tpl->tpl_vars['loop']->value['image']);?>
 /><p><?php echo $_smarty_tpl->tpl_vars['loop']->value['productName'];?>
</p><span><?php echo ($_smarty_tpl->tpl_vars['loop']->value['value']).("円");?>
</span></a></li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
</div>




<?php }
}
