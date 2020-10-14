<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 09:13:08
  from 'C:\xampp\htdocs\proyectos\TUDAI 2\WEB 2\0. TPE\TPE_Web_2\templates\public\ticket\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f86a504ca90a3_05988175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae56efcdc80e8d993d9741d805e126741c555d63' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TUDAI 2\\WEB 2\\0. TPE\\TPE_Web_2\\templates\\public\\ticket\\main.tpl',
      1 => 1602262513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/ticket/ticketsByCategory.tpl' => 1,
  ),
),false)) {
function content_5f86a504ca90a3_05988175 (Smarty_Internal_Template $_smarty_tpl) {
?><main>

    <section class="ticketBox" id="ticketsSection">

    <?php $_smarty_tpl->_subTemplateRender('file:public/ticket/ticketsByCategory.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            
    </section><?php }
}
