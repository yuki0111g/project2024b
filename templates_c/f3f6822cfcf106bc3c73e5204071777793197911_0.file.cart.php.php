<?php
/* Smarty version 3.1.39, created on 2024-06-14 09:46:30
  from 'C:\xampp\htdocs\project2024b\cart.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_666bf556735410_03529175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3f6822cfcf106bc3c73e5204071777793197911' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project2024b\\cart.php',
      1 => 1718350339,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666bf556735410_03529175 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>
session_start();
echo $_SESSION['cart']
<?php echo '?>';
}
}
