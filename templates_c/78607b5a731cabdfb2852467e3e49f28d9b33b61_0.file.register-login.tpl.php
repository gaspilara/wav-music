<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 08:05:26
  from 'C:\xampp\htdocs\proyectos\TUDAI 2\WEB 2\0. TPE\TPE_Web_2\templates\public\register-login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f869526e37253_51383336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78607b5a731cabdfb2852467e3e49f28d9b33b61' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TUDAI 2\\WEB 2\\0. TPE\\TPE_Web_2\\templates\\public\\register-login.tpl',
      1 => 1602270269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f869526e37253_51383336 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- LOG IN -->

<div class="formLogInBox">
    <button class="btnClose" id="js-btnClose-login"></button>

    <form action="welcome" class="formLogin" method="post"> 
        <label class="color-primary" for="userName"><?php echo $_smarty_tpl->tpl_vars['msgName']->value;?>
</label>
        <input name="userName" class="inp-log" type="text" placeholder="User" required>
        <label class="color-primary" for="userPassword"><?php echo $_smarty_tpl->tpl_vars['msgPass']->value;?>
</label>
        <input name="userPassword" class="inp-log" type="password" placeholder="Password" required>
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
