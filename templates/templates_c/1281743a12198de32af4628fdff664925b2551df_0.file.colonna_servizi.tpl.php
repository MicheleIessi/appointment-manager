<<<<<<< HEAD
<?php /* Smarty version 3.1.27, created on 2016-06-29 13:32:09
         compiled from "templates\templates\colonna_servizi.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:123955773b1b9ca9675_44489447%%*/
=======
<?php /* Smarty version 3.1.27, created on 2016-06-29 18:38:24
         compiled from "templates\templates\colonna_servizi.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:75465773f9804437f0_22830244%%*/
>>>>>>> 2ae2aa468947f25b9f5a59e51a63fa7c32d41384
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1281743a12198de32af4628fdff664925b2551df' => 
    array (
      0 => 'templates\\templates\\colonna_servizi.tpl',
<<<<<<< HEAD
      1 => 1467161491,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123955773b1b9ca9675_44489447',
=======
      1 => 1467218302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75465773f9804437f0_22830244',
>>>>>>> 2ae2aa468947f25b9f5a59e51a63fa7c32d41384
  'variables' => 
  array (
    'servizi' => 0,
    'servizio' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
<<<<<<< HEAD
  'unifunc' => 'content_5773b1b9cee6e2_73479750',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5773b1b9cee6e2_73479750')) {
function content_5773b1b9cee6e2_73479750 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '123955773b1b9ca9675_44489447';
=======
  'unifunc' => 'content_5773f9804a4270_22162975',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5773f9804a4270_22162975')) {
function content_5773f9804a4270_22162975 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '75465773f9804437f0_22830244';
>>>>>>> 2ae2aa468947f25b9f5a59e51a63fa7c32d41384
?>
<div id='wrapServizi'>
    <div id='external-events'>
        <h4>Servizi disponibili:</h4>
        <?php
$_from = $_smarty_tpl->tpl_vars['servizi']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['servizio'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['servizio']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['servizio']->value) {
$_smarty_tpl->tpl_vars['servizio']->_loop = true;
$foreach_servizio_Sav = $_smarty_tpl->tpl_vars['servizio'];
?>

            <div class='fc-event' data-duration="<?php echo $_smarty_tpl->tpl_vars['servizio']->value['durata'];?>
"><?php echo $_smarty_tpl->tpl_vars['servizio']->value['nome'];?>
</div>

        <?php
$_smarty_tpl->tpl_vars['servizio'] = $foreach_servizio_Sav;
}
?>

    </div>
</div><?php }
}
?>