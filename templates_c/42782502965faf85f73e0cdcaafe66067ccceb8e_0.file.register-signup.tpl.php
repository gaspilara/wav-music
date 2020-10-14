<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 08:10:53
  from 'C:\xampp\htdocs\proyectos\TUDAI 2\WEB 2\0. TPE\TPE_Web_2\templates\public\register-signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f86966de288f9_87411506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42782502965faf85f73e0cdcaafe66067ccceb8e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TUDAI 2\\WEB 2\\0. TPE\\TPE_Web_2\\templates\\public\\register-signup.tpl',
      1 => 1602270326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f86966de288f9_87411506 (Smarty_Internal_Template $_smarty_tpl) {
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

<div class="formSignUpBox">
    <button class="btnClose" id="js-btnClose-signup"></button>

    <form action="verify" class="formSignUp" method="post"> 

        <label class="color-primary" for="userName"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</label>
        <input class="inp-log" type="text" name="userName" placeholder="User" required>
        <input class="inp-log" type="email" name="userEmail" placeholder="Email" required>
        <input class="inp-log" type="password" name="userPassword" placeholder="Password" required>
        <button type="submit">Sign Up</button>

    </form>
</div><?php }
}
