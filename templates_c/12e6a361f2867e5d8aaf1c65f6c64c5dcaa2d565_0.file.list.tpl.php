<?php
/* Smarty version 3.1.39, created on 2024-06-21 06:40:56
  from 'C:\xampp\htdocs\2024b\purchaseHistory\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_667504581f4d52_60067592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12e6a361f2867e5d8aaf1c65f6c64c5dcaa2d565' => 
    array (
      0 => 'C:\\xampp\\htdocs\\2024b\\purchaseHistory\\list.tpl',
      1 => 1718944853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667504581f4d52_60067592 (Smarty_Internal_Template $_smarty_tpl) {
?><html>  
<head>
    <meta charset="UTF-8">
    <title>購入履歴</title>
</head>      
<body>
<h1>購入履歴</h1><table border="1">
<tr>
    <td>注文番号</td>
    <td>商品名</td>
    <td>1つあたりの価格</td>
    <td>ブランド</td>
    <td>注文日時</td>
    <td>商品ID</td>
    <td>個数</td>
    <td>合計金額</td>
    <td>ユーザID(テスト)</td>
    <td>残りの在庫数(テスト)</td>

</tr>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultMarc']->value, 'loop');
$_smarty_tpl->tpl_vars['loop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['loop']->value) {
$_smarty_tpl->tpl_vars['loop']->do_else = false;
?>
    <tr>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['orderId'];?>
</td>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['productName'];?>
</td>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['value'];?>
</td>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['brand'];?>
</td>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['timestamp'];?>
</td>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['productId'];?>
</td>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['num'];?>
</td>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['sumValue'];?>
</td>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['userId'];?>
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
