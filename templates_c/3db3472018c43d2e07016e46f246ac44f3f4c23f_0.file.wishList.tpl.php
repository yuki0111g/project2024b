<?php
/* Smarty version 3.1.39, created on 2024-07-05 06:43:33
  from 'C:\xampp\htdocs\2024b\templates\wishList\wishList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_668779f5ad0af3_72502842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3db3472018c43d2e07016e46f246ac44f3f4c23f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\2024b\\templates\\wishList\\wishList.tpl',
      1 => 1720154608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668779f5ad0af3_72502842 (Smarty_Internal_Template $_smarty_tpl) {
?><html>  
<head>
    <meta charset="UTF-8">
    <title>欲しいものリスト</title>
</head>      
<body>
<h1>欲しいものリスト</h1><table border="1">
<tr>
    <td>欲しいものリストID</td>
    <td>ユーザID</td>
    <td>ユーザーネーム</td>
    <td>商品ID</td>
    <td>商品名</td>
    <td>1つあたりの価格</td>
    <td>ブランド</td>
    <td>残りの在庫数</td>
</tr>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultMarc']->value, 'loop');
$_smarty_tpl->tpl_vars['loop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['loop']->value) {
$_smarty_tpl->tpl_vars['loop']->do_else = false;
?>
    <tr>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['wishlist_id'];?>
</td>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['userId'];?>
</td>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['username'];?>
</td>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['productId'];?>
</td>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['productName'];?>
</td>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['value'];?>
</td>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['brand'];?>
</td>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['stock'];?>
</td>
    
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<br>



</table>
</body>
</html><?php }
}
