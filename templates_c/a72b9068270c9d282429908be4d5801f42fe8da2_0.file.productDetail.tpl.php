<?php
/* Smarty version 3.1.39, created on 2024-07-05 16:49:48
  from 'C:\xampp\htdocs\2024b\templates\product_detail\productDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6688080c0f5852_28587201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a72b9068270c9d282429908be4d5801f42fe8da2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\2024b\\templates\\product_detail\\productDetail.tpl',
      1 => 1720190894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6688080c0f5852_28587201 (Smarty_Internal_Template $_smarty_tpl) {
?><html>  
<head>
    <meta charset="UTF-8">
    <title>商品の詳細</title>
</head>      
<body>
<h1>詳細情報</h1><table border="1">
<tr>
    <td>商品名</td>
    <td>1つあたりの価格</td>
    <td>ブランド</td>
    <td>商品ID</td>
    <td>要冷凍</td>
    <td>消費期限</td>
    <td>量<td>
    <td>残りの在庫数(テスト)</td>
    <td>画像</td>
    

</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultMarc']->value, 'loop');
$_smarty_tpl->tpl_vars['loop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['loop']->value) {
$_smarty_tpl->tpl_vars['loop']->do_else = false;
$_smarty_tpl->_assignInScope('tmp', $_smarty_tpl->tpl_vars['loop']->value['productId']);?>
    <tr>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['productName'];?>
</td>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['value'];?>
</td>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['brand'];?>
</td>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['productId'];?>
</td>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['isCool'];?>
</td>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['expTime'];?>
</td>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['amount'];?>
<td>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['stock'];?>
</td>
    <td><img src=<?php echo ("./productImages/").($_smarty_tpl->tpl_vars['loop']->value['image']);?>
 /></td>
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<form action="home_smtylist.php" method="POST" style="display: inline;">
<input type="number" name="orderAmount" value="1" min="1" style="width: 60px; padding: 5px;">
<input type="hidden" name="wtb" value="<?php echo $_smarty_tpl->tpl_vars['loop']->value['productId'];?>
">
<button type="submit" class="add-to-cart-button">カートに追加</button>


</form>
<form action="wishList.php" method="POST">
<input type="hidden" name="productId" value=<?php echo $_smarty_tpl->tpl_vars['tmp']->value;?>
>
<input type="submit" name="add-wishList" value = "欲しいものリストに追加">


</form>
<br>



</table>
<a href="home_smtylist.php" class="back-link">戻る</a>
</body>
</html><?php }
}
