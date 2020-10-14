<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 07:53:34
  from 'C:\xampp\htdocs\proyectos\TUDAI 2\WEB 2\0. TPE\TPE_Web_2\templates\public\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f86925e8cc212_50271414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c8cd3240cd5abd7f4e035b0399781bcb85538de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TUDAI 2\\WEB 2\\0. TPE\\TPE_Web_2\\templates\\public\\register.tpl',
      1 => 1602257427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f86925e8cc212_50271414 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- LOG IN -->

<div class="formLogInBox js-show-contain">
    <button class="btnClose" id="js-btnClose-login"></button>

    <form action="welcome" class="formLogin" method="post"> 

        <input class="inp-log" type="text" name="userName" placeholder="User" required>
        <input class="inp-log" type="password" name="userPassword" placeholder="Password" required>
        <button type="submit">Log In</button>
        
    </form>
</div>

<!-- SIGN UP -->

<div class="formSignUpBox js-show-contain">
    <button class="btnClose" id="js-btnClose-signup"></button>

    <form action="verify" class="formSignUp" method="post"> 

        <input class="inp-log" type="text" name="userName" placeholder="User" required>
        <input class="inp-log" type="email" name="userEmail" placeholder="Email" required>
        <input class="inp-log" type="password" name="userPassword" placeholder="Password" required>
        <button type="submit">Sign Up</button>

    </form>
</div><?php }
}
