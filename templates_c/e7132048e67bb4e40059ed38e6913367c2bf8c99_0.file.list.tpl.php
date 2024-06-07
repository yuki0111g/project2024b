<?php
/* Smarty version 3.1.39, created on 2024-06-07 10:54:27
  from 'C:\xampp\htdocs\project2024b\templates\04\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6662cac32e08d7_15977002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7132048e67bb4e40059ed38e6913367c2bf8c99' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project2024b\\templates\\04\\list.tpl',
      1 => 1717750046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6662cac32e08d7_15977002 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>  
<head>
    <meta charset="UTF-8">
    <title>一覧</title>
</head>      
<body>
<h1>一覧</h1><table border="1">
<tr>
    <td>ID</td>
    <td>stock</td>
    <td>name</td>
</tr>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultMarc']->value, 'loop');
$_smarty_tpl->tpl_vars['loop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['loop']->value) {
$_smarty_tpl->tpl_vars['loop']->do_else = false;
?>
    <tr>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['product_id'];?>
</td>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['stock'];?>
</td>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['productName'];?>
</td>
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</table>
</body>
</html><?php }
}
