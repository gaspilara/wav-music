<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 08:06:24
  from 'C:\xampp\htdocs\proyectos\TUDAI 2\WEB 2\0. TPE\TPE_Web_2\templates\user\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f86956035a743_13301463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23239e4bca6a83553598e287768648aa25116dd0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TUDAI 2\\WEB 2\\0. TPE\\TPE_Web_2\\templates\\user\\nav.tpl',
      1 => 1602266313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f86956035a743_13301463 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="fixedNav">
    <div class="navBox">

        <div class="logoBox">                  
            <img id="js-logo-ShowHome" src="img/WAV-logo.svg" alt="WAV logo">
        </div>

    </div>
</nav>

<nav class="hiddenNav js-show-contain">

    <button class="invisibleBtnToHideNav" id="js-btnHiddenMenu">

    </button>
    <section class="buttonsHiddenNavSection">
        <button id="js-btnshowTickets"> TICKETS </button>
        <button> GALERY </button>
        <button> EVENTS </button>
        <button id="js-btnshowLogin"> LOG IN </button>
        <button id="js-btnshowSignUp"> SIGN UP </button>
    </section>

</nav><?php }
}
