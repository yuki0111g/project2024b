<?php
/* Smarty version 3.1.39, created on 2024-06-28 09:09:37
  from 'C:\xampp\htdocs\project2024b\templates\productList\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_667e61b13b5239_21205074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '352614e40fd1de39f24365a4041c1305df2f9d3b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project2024b\\templates\\productList\\list.tpl',
      1 => 1719558574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667e61b13b5239_21205074 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./templates/productList/list.css">
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
<li><a href=""><img src=<?php echo ("./productImages/").($_smarty_tpl->tpl_vars['loop']->value['image']);?>
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
