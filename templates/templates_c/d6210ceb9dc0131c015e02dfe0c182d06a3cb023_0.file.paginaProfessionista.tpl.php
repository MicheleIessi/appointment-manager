<?php /* Smarty version 3.1.27, created on 2016-07-06 15:00:17
         compiled from "templates\templates\paginaProfessionista.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10033577d00e198e002_08367995%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6210ceb9dc0131c015e02dfe0c182d06a3cb023' => 
    array (
      0 => 'templates\\templates\\paginaProfessionista.tpl',
      1 => 1467794419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10033577d00e198e002_08367995',
  'variables' => 
  array (
    'numID' => 0,
    'nome' => 0,
    'cognome' => 0,
    'dataNascita' => 0,
    'sesso' => 0,
    'codiceFiscale' => 0,
    'email' => 0,
    'settore' => 0,
    'modifica' => 0,
    'orariLavorativi' => 0,
    'nomeUtente' => 0,
    'serviziOfferti' => 0,
    'servizio' => 0,
    'proprietario' => 0,
    'tipo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_577d00e1c100f3_36275566',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_577d00e1c100f3_36275566')) {
function content_577d00e1c100f3_36275566 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10033577d00e198e002_08367995';
?>
<link type="text/css" rel="stylesheet" href="View/css/paginaProfessionista.css"/>

<div title="contenitoreUtente"id="contenitoreUtente">
        
    <h2 id="titolo">Pagina Professionista - ID Utente <?php echo $_smarty_tpl->tpl_vars['numID']->value;?>
</h2>

    <div title="immagine" id="immagine">
        Carica Immagine
    </div>

    <div title="datiUtente" id="datiUtente">

        <ul>
            <li>Nome: <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
 </li><br>
            <li>Cognome: <?php echo $_smarty_tpl->tpl_vars['cognome']->value;?>
 </li><br>
            <li>Data di nascita: <?php echo $_smarty_tpl->tpl_vars['dataNascita']->value;?>
 </li><br>
            <li>Sesso: <?php echo $_smarty_tpl->tpl_vars['sesso']->value;?>
 </li><br>
            <li>Codice fiscale: <?php echo $_smarty_tpl->tpl_vars['codiceFiscale']->value;?>
 </li><br>
            <li>Email:<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
 </li><br>
            <li>Settore:<?php echo $_smarty_tpl->tpl_vars['settore']->value;?>
 </li>
        </ul> 
        
    </div>
        
    <?php if ($_smarty_tpl->tpl_vars['modifica']->value) {?>
        <a href=?controller=modificaUtente><button class="bottoneProf">Modifica informazioni</button></a>
    <?php }?>

    <h3>Orario di lavoro</h3>
    
    <div title="orariLavoro" class="tabProfessionisti">
        <table id="orariLavoro">
            
            <tr>
                <td>Lunedì</td>
                <td> <?php echo $_smarty_tpl->tpl_vars['orariLavorativi']->value['lun'];?>
 </td>
            </tr>

            <tr>
                <td>Martedì</td>
                <td> <?php echo $_smarty_tpl->tpl_vars['orariLavorativi']->value['mar'];?>
 </td>
            </tr>

            <tr>
                <td>Mercoledì</td>
                <td> <?php echo $_smarty_tpl->tpl_vars['orariLavorativi']->value['mer'];?>
 </td>
            </tr>

            <tr>
                <td>Giovedì</td>
                <td> <?php echo $_smarty_tpl->tpl_vars['orariLavorativi']->value['gio'];?>
 </td>
            </tr>

            <tr>
                <td>Venerdì</td>
                <td> <?php echo $_smarty_tpl->tpl_vars['orariLavorativi']->value['ven'];?>
 </td>
            </tr>

            <tr>
                <td>Sabato</td>
                <td> <?php echo $_smarty_tpl->tpl_vars['orariLavorativi']->value['sab'];?>
 </td>
            </tr>

            <tr>
                <td>Domenica</td>
                <td> <?php echo $_smarty_tpl->tpl_vars['orariLavorativi']->value['dom'];?>
 </td>
            </tr>

        </table>
    </div>
     
    <h3>Servizi offerti da <?php echo $_smarty_tpl->tpl_vars['nomeUtente']->value;?>
</h3>
    
    <div title="serviziOfferti" class="tabProfessionisti">
        <table id="serviziOfferti">
                        
            <tr id="chiavi">
                <td>Nome servizio</td>
                <td>Settore</td>
                <td>Durata</td>
                <td>Descrizione</td>
            </tr>
            
                <?php
$_from = $_smarty_tpl->tpl_vars['serviziOfferti']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['servizio'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['servizio']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['servizio']->value) {
$_smarty_tpl->tpl_vars['servizio']->_loop = true;
$foreach_servizio_Sav = $_smarty_tpl->tpl_vars['servizio'];
?>
                    <tr>
                            <td id="servizio"><?php echo $_smarty_tpl->tpl_vars['servizio']->value['nomeServizio'];?>
</td>
                            <td id="servizio"><?php echo $_smarty_tpl->tpl_vars['servizio']->value['settore'];?>
</td>
                            <td id="servizio"><?php echo $_smarty_tpl->tpl_vars['servizio']->value['durata'];?>
</td>
                            <td id="servizio"><?php echo $_smarty_tpl->tpl_vars['servizio']->value['descrizione'];?>
</td>
                        </tr>
                <?php
$_smarty_tpl->tpl_vars['servizio'] = $foreach_servizio_Sav;
}
?>
                
        </table>
    </div>
    
    <?php if ($_smarty_tpl->tpl_vars['proprietario']->value || $_smarty_tpl->tpl_vars['tipo']->value == "cliente") {?>
        <a href="?controller=calendario&idp=<?php echo $_smarty_tpl->tpl_vars['numID']->value;?>
"><button class="bottoneProf">

            <?php if ($_smarty_tpl->tpl_vars['proprietario']->value) {?>
                Apri la tua agenda
                <?php } else { ?>
                Prenota un appuntamento! Clicca per aprire l'agenda di <?php echo $_smarty_tpl->tpl_vars['nomeUtente']->value;?>

            <?php }?>

        </button></a>
    <?php }?>
</div>
<?php }
}
?>