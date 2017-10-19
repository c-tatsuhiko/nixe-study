<?php
/* Smarty version 3.1.30, created on 2017-10-19 11:07:36
  from "C:\nixe-study\public_html\template\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e86b5886b089_03740099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adcf8b035601cb4d34f8ae11d867fc235246cbf7' => 
    array (
      0 => 'C:\\nixe-study\\public_html\\template\\index.tpl',
      1 => 1508403821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e86b5886b089_03740099 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Smartyテスト</title>
     <link rel="stylesheet" href="comn/style.css">
</head>
<body>
     
     やあ、<?php echo $_smarty_tpl->tpl_vars['obj']->value->hello;?>
 <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

</body>
</html><?php }
}
