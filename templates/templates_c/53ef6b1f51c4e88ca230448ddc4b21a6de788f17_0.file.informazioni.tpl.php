<?php /* Smarty version 3.1.27, created on 2016-07-09 16:46:34
         compiled from "templates\templates\informazioni.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1312557810e4ab92ae1_37328716%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53ef6b1f51c4e88ca230448ddc4b21a6de788f17' => 
    array (
      0 => 'templates\\templates\\informazioni.tpl',
      1 => 1468075592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1312557810e4ab92ae1_37328716',
  'variables' => 
  array (
    'titolo' => 0,
    'sezione1' => 0,
    'sotto1' => 0,
    'testo1' => 0,
    'sezione2' => 0,
    'sotto2' => 0,
    'testo2' => 0,
    'sezione3' => 0,
    'sotto3' => 0,
    'testo3' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57810e4abed921_69294749',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57810e4abed921_69294749')) {
function content_57810e4abed921_69294749 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1312557810e4ab92ae1_37328716';
?>
<link rel="stylesheet" type="text/css" href="View/css/info.css">

<p id="titolo"><?php echo $_smarty_tpl->tpl_vars['titolo']->value;?>
</p>
<?php if ($_smarty_tpl->tpl_vars['sezione1']->value) {?>
<div id="primaParte">
    <h3><?php echo $_smarty_tpl->tpl_vars['sotto1']->value;?>
</h3>
    <p class="testo"><?php echo $_smarty_tpl->tpl_vars['testo1']->value;?>
</p>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['sezione2']->value) {?>
<div id="secondaParte">
    <h3><?php echo $_smarty_tpl->tpl_vars['sotto2']->value;?>
</h3>
    <p class="testo"><?php echo $_smarty_tpl->tpl_vars['testo2']->value;?>
</p>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['sezione3']->value) {?>
<div id="terzaParte">
    <h3><?php echo $_smarty_tpl->tpl_vars['sotto3']->value;?>
</h3>
    <p class="testo"><?php echo $_smarty_tpl->tpl_vars['testo3']->value;?>
</p>
</div>
<?php }
}
}
?>