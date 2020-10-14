<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 08:05:39
  from 'C:\xampp\htdocs\proyectos\TUDAI 2\WEB 2\0. TPE\TPE_Web_2\templates\user\welcome\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8695336e6281_56542897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fea3bef1bfa18cfcbc29a82c99c89bfe4f5f3c01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TUDAI 2\\WEB 2\\0. TPE\\TPE_Web_2\\templates\\user\\welcome\\nav.tpl',
      1 => 1602298045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8695336e6281_56542897 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="fixedNav">
    <div class="navBox">

        <div class="logoBox">                  
            <img id="js-logo-ShowHome" src="img/WAV-logo.svg" alt="WAV logo">
        </div>

        <section class="navButtonsSection">
            <div class="defaultButtonsNavBox">
                <ul>
                    <li>
                        <a href="#ticketsSection" id="js-showTickets">
                            TICKETS
                        </a>
                    </li>
                    <li>
                        <label id="js-showSingUp" class="js-show-contain">userName</label>
                        <a class="color-primary">
                            <?php echo $_smarty_tpl->tpl_vars['userName']->value;?>

                        </a>
                    </li>
                    <li>
                        <a href="logout">
                            LOG OUT
                        </a>
                    </li>
                </ul>
            </div>
            <div class="burguerMenuBox">
                <button id="js-btnMenu">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </section>

    </div>
</nav>

<nav class="hiddenNav js-show-contain">

    <button class="invisibleBtnToHideNav" id="js-btnHiddenMenu">

    </button>
    <section class="buttonsHiddenNavSection">
        <button class="color-primary"><?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
</button>
        <button id="js-btnshowTickets"> TICKETS </button>
        <button id="js-btn-goToAdmin"> ADMIN </button>
        <button> EVENTS </button>
        <button><a href="logout">LOG OUT</a></button>
    </section>

</nav><?php }
}
