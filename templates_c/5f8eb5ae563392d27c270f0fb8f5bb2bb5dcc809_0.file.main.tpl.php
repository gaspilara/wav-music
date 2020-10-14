<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 08:05:57
  from 'C:\xampp\htdocs\proyectos\TUDAI 2\WEB 2\0. TPE\TPE_Web_2\templates\user\ticket\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f86954528a7f7_30913218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f8eb5ae563392d27c270f0fb8f5bb2bb5dcc809' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TUDAI 2\\WEB 2\\0. TPE\\TPE_Web_2\\templates\\user\\ticket\\main.tpl',
      1 => 1602297111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f86954528a7f7_30913218 (Smarty_Internal_Template $_smarty_tpl) {
?><main>

    <section class="ticketBox" id="ticketsSection">

        <section class="ticketsTableSection">

        <div class="backBox">
            <button id="js-btnBack">
                <i class="fas fa-arrow-left"></i>
            </button>
        </div>
        <div class="tableBoxHead">
            <table>
                <thead>
                    <tr class="trHead">
                        <th>ID</th>
                        <th>Dj name</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th>Category</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tableBox">
            <table>
                <tbody>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ticketsByCategory']->value, 'ticket');
$_smarty_tpl->tpl_vars['ticket']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ticket']->value) {
$_smarty_tpl->tpl_vars['ticket']->do_else = false;
?>    
                                        
                    <?php if ($_smarty_tpl->tpl_vars['ticket']->value->id_category == $_smarty_tpl->tpl_vars['param_id']->value[':ID']) {?>
                    
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['ticket']->value->id_ticket;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['ticket']->value->name;?>
</td>
                            <td>$<?php echo $_smarty_tpl->tpl_vars['ticket']->value->cat_price;?>
 ARS</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['ticket']->value->date;?>
</td>
                            <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['ticket']->value->cat_name, 'UTF-8');?>
</td>
                            <td class="tdButton">
                                <!--button class="js-btn-showConfirmBuy" data-id="<?php echo $_smarty_tpl->tpl_vars['ticket']->value->id_ticket;?>
"-->
                                <button class="js-btn-showTicketDetails" data-id="<?php echo $_smarty_tpl->tpl_vars['ticket']->value->id_ticket;?>
">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </td>
                        </tr>  
                    
                    <?php }?>
                
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </tbody>
            </table>
        </div>
        <div class="showAllTicketBox">
            <a href="user/tickets-all" id="js-btnShowAllTickets">
                Show all tickets
            </a>
        </div>

        </section>
            
    </section><?php }
}
