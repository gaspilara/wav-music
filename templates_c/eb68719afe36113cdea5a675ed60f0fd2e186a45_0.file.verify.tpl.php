<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 08:08:53
  from 'C:\xampp\htdocs\proyectos\TUDAI 2\WEB 2\0. TPE\TPE_Web_2\templates\user\verify.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8695f59d4e09_85614475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb68719afe36113cdea5a675ed60f0fd2e186a45' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TUDAI 2\\WEB 2\\0. TPE\\TPE_Web_2\\templates\\user\\verify.tpl',
      1 => 1602268782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8695f59d4e09_85614475 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- LOG IN -->

<div class="formLogInBox">
    <button class="btnClose" id="js-btnClose-login"></button>

    <div class="logBox">
    
        <a href="home" class="btn-exit-backHome" >
            <i class="fas fa-arrow-left"></i> back
        </a>
        
        <form action="welcome" class="formLogin" method="post"> 
    
            <input name="userName" class="inp-log color-primary" type="text" placeholder="User" value="<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
" required>
            <input name="userPassword" class="inp-log" type="password" placeholder="Password" required>
            <button type="submit">Log In</button>
            
        </form>
    </div>

</div><?php }
}
