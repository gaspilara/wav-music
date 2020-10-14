<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 08:05:56
  from 'C:\xampp\htdocs\proyectos\TUDAI 2\WEB 2\0. TPE\TPE_Web_2\templates\user\ticket\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f869544f090f5_27713904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cedf7f3bb96981cc2f5d28463b460568a19ab43f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TUDAI 2\\WEB 2\\0. TPE\\TPE_Web_2\\templates\\user\\ticket\\index.tpl',
      1 => 1602296370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/welcome/head.tpl' => 1,
    'file:../../public/register.tpl' => 1,
    'file:user/welcome/nav.tpl' => 1,
    'file:../../public/header.tpl' => 1,
    'file:user/ticket/main.tpl' => 1,
    'file:../../public/footer.tpl' => 1,
  ),
),false)) {
function content_5f869544f090f5_27713904 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:user/welcome/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:../../public/register.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:user/welcome/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:../../public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:user/ticket/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:../../public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
