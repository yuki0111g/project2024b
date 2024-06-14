<?php
/* Smarty version 3.1.39, created on 2024-06-14 07:18:40
  from 'C:\xampp\htdocs\2024b\templates\home\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_666bd2b0c9c862_89004996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29963c71f2d71eb45d72ff5b080ec49f192f06cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\2024b\\templates\\home\\list.tpl',
      1 => 1718342317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666bd2b0c9c862_89004996 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>  
<head>
    <meta charset="UTF-8">
    <title>一覧</title>
</head>      
<body>
<form action="home_smtylist.php" method="POST">


<h1>一覧</h1><table border="1">
商品検索：<input type="text" size=20 maxlength="30" name="input1"><br>
<tr>
    <td>name</td>
    <td>stock</td>
</tr>
<form action="form2.php" method="POST">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultMarc']->value, 'loop');
$_smarty_tpl->tpl_vars['loop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['loop']->value) {
$_smarty_tpl->tpl_vars['loop']->do_else = false;
?>
    <tr>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['productId'];?>
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
