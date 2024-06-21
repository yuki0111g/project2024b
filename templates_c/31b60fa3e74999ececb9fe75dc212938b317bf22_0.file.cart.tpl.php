<?php
/* Smarty version 3.1.39, created on 2024-06-21 08:21:30
  from 'C:\xampp\htdocs\project2024b\templates\cart\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_66751bea1425f6_84331742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31b60fa3e74999ececb9fe75dc212938b317bf22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project2024b\\templates\\cart\\cart.tpl',
      1 => 1718950882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66751bea1425f6_84331742 (Smarty_Internal_Template $_smarty_tpl) {
?><html>  
<head>
    <meta charset="UTF-8">
    <title>一覧</title>
</head>      
<body>
<table>
<tr>
    <td>name</td>
    <td>price</td>
    <td>amount</td>
</tr>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
    <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['p']->value[0];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['p']->value[1];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['p']->value[2];?>
</td>
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<a href="home_smtylist.php">戻る</a>
</body>
</html><?php }
}
