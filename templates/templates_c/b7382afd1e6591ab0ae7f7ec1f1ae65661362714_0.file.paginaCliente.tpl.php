<?php /* Smarty version 3.1.27, created on 2016-07-12 17:34:02
         compiled from "templates\templates\paginaCliente.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1274357850dea754710_88261276%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7382afd1e6591ab0ae7f7ec1f1ae65661362714' => 
    array (
      0 => 'templates\\templates\\paginaCliente.tpl',
      1 => 1468227546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1274357850dea754710_88261276',
  'variables' => 
  array (
    'numID' => 0,
    'modifica' => 0,
    'immagine' => 0,
    'nome' => 0,
    'cognome' => 0,
    'dataNascita' => 0,
    'codiceFiscale' => 0,
    'sesso' => 0,
    'email' => 0,
    'cronologia' => 0,
    'app' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57850dea7b83a4_69614573',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57850dea7b83a4_69614573')) {
function content_57850dea7b83a4_69614573 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1274357850dea754710_88261276';
?>
<link type="text/css" rel="stylesheet" href="css/paginaCliente.css" />

<div title="contenitoreUtente" id='contenitoreUtente'>
            
            

            <h2>Pagina Cliente - ID Utente: <?php echo $_smarty_tpl->tpl_vars['numID']->value;?>
 </h2>

    <div title="immagine" id="immagine">
        <?php if ($_smarty_tpl->tpl_vars['modifica']->value) {?>
            <a rel="leanModal" href="#caricamentoImmagine" id="bottoneImmagine"><img src="img/modifica.gif" id="immModifica" /></a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['immagine']->value) {?>
            <image id="immagineProfilo" src="<?php echo $_smarty_tpl->tpl_vars['immagine']->value;?>
" />
        <?php }?>
    </div>
            
            <div title="datiUtente" id="datiUtente">
                
                <ul>
                    <li>Nome: <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
 </li><br>
                    <li>Cognome: <?php echo $_smarty_tpl->tpl_vars['cognome']->value;?>
 </li><br>
                    <li>Data di nascita: <?php echo $_smarty_tpl->tpl_vars['dataNascita']->value;?>
 </li><br>
                    <li>Codice fiscale: <?php echo $_smarty_tpl->tpl_vars['codiceFiscale']->value;?>
 </li><br>
                    <li>Sesso: <?php echo $_smarty_tpl->tpl_vars['sesso']->value;?>
 </li><br>
                    <li>Email: <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
 </li><br>
                    <br>
                </ul>
                
            </div>            
            
                <h3>Cronologia Appuntamenti </h3>
                <table id="pastAppTable">
                    <tr id="chiavi">
                        <td>Data</td> 
                        <td>Orario</td> 
                        <td>Servizio</td> 
                        <td>Professionista</td>
                    </tr>
                    
                    <?php
$_from = $_smarty_tpl->tpl_vars['cronologia']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['app'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['app']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['app']->value) {
$_smarty_tpl->tpl_vars['app']->_loop = true;
$foreach_app_Sav = $_smarty_tpl->tpl_vars['app'];
?> 
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['app']->value['data'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['app']->value['orario'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['app']->value['nomeServ'];?>
</td>
                            <td><a href=?controller=paginaProfessionista&id=<?php echo $_smarty_tpl->tpl_vars['app']->value['idProf'];?>
 ><?php echo $_smarty_tpl->tpl_vars['app']->value['nomeProf'];?>
 </a></td>
                        </tr>
                    <?php
$_smarty_tpl->tpl_vars['app'] = $foreach_app_Sav;
}
?>
                    
                    <?php if ($_smarty_tpl->tpl_vars['modifica']->value) {?>
                    <a href=?controller=modificaUtente><button id="modifica">Modifica informazioni</button></a>
                    <?php }?>
                </table>
                
     <!-- ----------------------------------------------------------------------------------------------------- -->           
    <?php if ($_smarty_tpl->tpl_vars['modifica']->value) {?>            
    <div title="caricamentoImmagine" id="caricamentoImmagine">
        
        <h2>Carica immagine</h2>
        
        <form enctype="multipart/form-data" action="Chiamate/AUtente.php" method="POST">
            <input type="hidden" name="MAX_FILE_SIZE" value="4194304" />
            <input type="hidden" name="utenteCorrente" value="<?php echo $_smarty_tpl->tpl_vars['numID']->value;?>
" />
            <table>
                <tr>
                    <td> <input id="fileLabel" name="immagineUtente" type="file"> </td>
                </tr>
                <tr>
                    <td> <input type="submit" value="Carica"> </td>
                </tr>            
            </table>
            <input type="hidden" name="task" value="caricaImmagine" />
        </form>
                
    </div>
    <?php }?>

</div>


<?php }
}
?>