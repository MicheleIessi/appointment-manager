<?php /* Smarty version 3.1.27, created on 2016-07-11 23:53:41
         compiled from "templates\templates\paginaAmministratore.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2921957841565aec637_97094339%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55e812cba7d563b1e49c81b512aa6b8f36e94b7c' => 
    array (
      0 => 'templates\\templates\\paginaAmministratore.tpl',
      1 => 1468243666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2921957841565aec637_97094339',
  'variables' => 
  array (
    'professionisti' => 0,
    'prof' => 0,
    'servizi' => 0,
    'ser' => 0,
    'messaggio' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57841565b8bcd0_24198997',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57841565b8bcd0_24198997')) {
function content_57841565b8bcd0_24198997 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2921957841565aec637_97094339';
?>
<link type="text/css" rel="stylesheet" href="css/paginaAmministratore.css" />

<?php echo '<script'; ?>
 type="text/javascript" src="JS/paginaAmministratore.js"><?php echo '</script'; ?>
>

<div name="contenitoreAmministratore" id="contenitoreAmministratore">
    
        <h2>Pagina Amministratore</h2>
        
        <div class="box"><a class='adminButton' rel="leanModal" href="#aggiungiProfessionista"><button class="modifica">Aggiungi professionista</button></a></div>
        <div class="box"><a class='adminButton' rel="leanModal" href="#modificaOrari"><button class="modifica">Modifica orari</button></a></div>
        <div class="box clear"><a class='adminButton' rel="leanModal" href="#aggiungiServizio"><button class="modifica">Aggiungi servizio</button></a></div>
        <div class="box"><a class='adminButton' rel="leanModal" href="#modificaServizio"><button class="modifica">Modifica servizio</button></a></div>
        <div class="box"><a class='adminButton' rel="leanModal" href="#eliminaServizio"><button class="modifica">Elimina servizio</button></a></div>
        <div class="box clear"><a class='adminButton' rel="leanModal" href="#assegnaServizio"><button class="modifica">Assegna servizio</button></a></div>
        <div class="box clear"><a class='adminButton' rel="leanModal" href="#modificaInformazioni"><button class="modifica">Modifica informazioni</button></a></div>

<!-- ---------------------------------------------------------------------------------------------------------------------------------------- -->    
        <div id="aggiungiProfessionista">

            <h3>Modifica informazioni</h3>

            <form name="aggiungiProf" id="aggiungiProf" method="post" action="Chiamate/AAdmin.php">
                <table id="tabellaProfessionista">

                    <tr>
                        <td>
                            <p>Informazioni utente</p>
                        </td>
                    </tr>
                    <tr>
                        <td>Nome</td>
                        <td> <input type="text" name="nome" id="nome" ></td>
                    </tr>
                    <tr>
                        <td>Cognome</td>
                        <td> <input type="text" name="cognome" id="cognome" ></td>
                    </tr>
                    <tr>
                        <td>Data di nascita</td>
                        <td> <input type=text name="dataNascita" id="datepicker" ></td>
                    </tr>
                    <tr>
                        <td>Codice fiscale</td>
                        <td> <input type=text name="codiceFiscale" id="codiceFiscale" ></td>
                    </tr>
                    <tr>
                        <td>Sesso</td>
                        <td> M<input type="radio" name="sesso" id="maschio" value="M" checked> F<input type="radio" name="sesso" id="femmina" value="F"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td> <input type="text" name="email" id="email" ></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td> <input type="password" name="password1" id="password1" ></td>
                    </tr>
                    <tr>
                        <td>Conferma Password</td>
                        <td> <input type="password" name="password2" id="password2" ></td>
                    </tr>
                    <tr>
                        <td>Settore</td>
                        <td> <input type="text" name="settore" id="settore" ></td>
                    </tr>

                    <tr>
                        <td>
                            <p>Orari di lavoro</p>
                        </td>
                    </tr>
                    <tr>
                        <td>Lunedì</td>
                        <td> <input type="text" id="orarioLun" name="orarioLun"></td>
                    </tr>
                    <tr>
                        <td>Martedì</td>
                        <td> <input type="text" id="orarioMar" name="orarioMar"></td>
                    </tr>
                    <tr>
                        <td>Mercoledì</td>
                        <td> <input type="text" id="orarioMer" name="orarioMer"></td>
                    </tr>
                    <tr>
                        <td>Giovedì</td>
                        <td> <input type="text" id="orarioGio" name="orarioGio"></td>
                    </tr>
                    <tr>
                        <td>Venerdì</td>
                        <td> <input type="text" id="orarioVen" name="orarioVen"></td>
                    </tr>
                    <tr>
                        <td>Sabato</td>
                        <td> <input type="text" id="orarioSab" name="orarioSab"></td>
                    </tr>
                    <tr>
                        <td>Domenica</td>
                        <td> <input type="text" id="orarioDom" name="orarioDom"></td>
                    </tr>

                    <tr>
                        <td><input id="submit1" type="submit" value="AGGIUNGI "></td>
                    </tr>

                </table>
                <input type="hidden" name="task" value="aggiungiProf" />
            </form>        

        </div>
        
<!-- ---------------------------------------------------------------------------------------------------------------------------------------- -->
        
        <div id="modificaOrari">

            <h3>Modifica orari</h3>

            <form name="modificaOra" id="modificaOra" method="post" action="Chiamate/AAdmin.php">
                
                <select id="listaProf" name="listaProf">
                    <optgroup label="Professionista">
                        <option selected disabled>Professionisti:</option>
                        <!-- Qui da implementare un ciclo smarty per caricare tutti i professionisti-->
                        <?php
$_from = $_smarty_tpl->tpl_vars['professionisti']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['prof'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['prof']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['prof']->value) {
$_smarty_tpl->tpl_vars['prof']->_loop = true;
$foreach_prof_Sav = $_smarty_tpl->tpl_vars['prof'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['prof']->value['idProf'];?>
"><?php echo $_smarty_tpl->tpl_vars['prof']->value['idProf'];?>
 - <?php echo $_smarty_tpl->tpl_vars['prof']->value['nomePro'];?>
 <?php echo $_smarty_tpl->tpl_vars['prof']->value['cognomePro'];?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['prof'] = $foreach_prof_Sav;
}
?>
                    </optgroup>
                </select>
                    <br>
                    
                <table id="modificaOrariTab">

                    <tr>
                        <td>Lunedì</td>
                        <td> <input class="orario" type="text" id="modOrarioLun" name="modOrarioLun"></td>
                    </tr>
                    <tr>
                        <td>Martedì</td>
                        <td> <input class="orario" type="text" id="modOrarioMar" name="modOrarioMar"></td>
                    </tr>
                    <tr>
                        <td>Mercoledì</td>
                        <td> <input class="orario" type="text" id="modOrarioMer" name="modOrarioMer"></td>
                    </tr>
                    <tr>
                        <td>Giovedì</td>
                        <td> <input class="orario" type="text" id="modOrarioGio" name="modOrarioGio"></td>
                    </tr>
                    <tr>
                        <td>Venerdì</td>
                        <td> <input class="orario" type="text" id="modOrarioVen" name="modOrarioVen"></td>
                    </tr>
                    <tr>
                        <td>Sabato</td>
                        <td> <input class="orario" type="text" id="modOrarioSab" name="modOrarioSab"></td>
                    </tr>
                    <tr>
                        <td>Domenica</td>
                        <td> <input class="orario" type="text" id="modOrarioDom" name="modOrarioDom"></td>
                    </tr>

                    <tr>
                        <td><input id="submit2" type="submit" value="MODIFICA "></td>
                    </tr>

                </table>
                <input type="hidden" name="task" value="modificaOrari" />
            </form>        

        </div>
        
<!-- ---------------------------------------------------------------------------------------------------------------------------------------- -->
        
        <div id="aggiungiServizio">

            <h3>Aggiungi servizio</h3>

            <form name="aggiungiSer" id="aggiungiSer" method="post" wrap="hard" action="Chiamate/AAdmin.php">
                <table id="aggiungiServizioTab">

                    <tr>
                        <td>Nome servizio</td>
                        <td> <input type="text" id="nomeServizio" name="nomAggSer"></td>
                    </tr>
                    <tr>
                        <td>Descrizione</td>
                        <td> <input type="text" id="descrizione" name="desAggSer"></td>
                    </tr>
                    <tr>
                        <td>Settore</td>
                        <td> <input type="text" id="settoreAgg" name="setAggSer"></td>
                    </tr>
                    <tr>
                        <td>Durata</td>
                        <td> <input type="text" id="durata" name="durAggSer"></td>
                    </tr>
                    <tr>
                        <td><input id="submit3" type="submit" value="AGGIUNGI "></td>
                    </tr>
                    
                </table>
                <input type="hidden" name="task" value="aggiungiServizio" />
            </form>       

        </div>
        
<!-- ---------------------------------------------------------------------------------------------------------------------------------------- -->
        
        <div id="modificaServizio">

            <h3>Modifica servizio</h3>

            <form name="modificaSer" id="modificaSer" method="post" wrap="hard" action="Chiamate/AAdmin.php">
                <select id="listaSer" name="listaSer">
                    <optgroup label="Servizio">
                        <option selected disabled>Servizi:</option>
                        <!-- Qui da implementare un ciclo smarty per caricare tutti i professionisti-->
                        <?php
$_from = $_smarty_tpl->tpl_vars['servizi']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ser'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ser']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ser']->value) {
$_smarty_tpl->tpl_vars['ser']->_loop = true;
$foreach_ser_Sav = $_smarty_tpl->tpl_vars['ser'];
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['ser']->value['nomeSer'];?>
"><?php echo $_smarty_tpl->tpl_vars['ser']->value['nomeSer'];?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['ser'] = $foreach_ser_Sav;
}
?>
                    </optgroup>
                </select>
                <table id="modificaServizioTab">

                    <tr>
                        <td>Nome servizio</td>
                        <td> <input type="text" id="nomeModSer" name="nomeModSer"></td>    <!-- Qui un menù a tendina -->
                    </tr>
                    <tr>
                        <td>Descrizione</td>
                        <td> <input type="text" id="descModSer" name="descModSer"></td>
                    </tr>
                    <tr>
                        <td>Settore</td>
                        <td> <input type="text" id="settModSer" name="settModSer"></td>
                    </tr>
                    <tr>
                        <td>Durata</td>
                        <td> <input type="text" id="durataModSer" name="durataModSer"></td>
                    </tr>
                    <tr>
                        <td><input id="submit4" type="submit" value="MODIFICA "></td>
                    </tr>
                    
                </table>
                <input type="hidden" name="task" value="modificaServizio" />
            </form>       

        </div>
        
<!-- ---------------------------------------------------------------------------------------------------------------------------------------- -->
        
        <div id="assegnaServizio">

            <h3>Assegna servizio</h3>

            <form name="assegnaSer" id="assegnaSer" method="post" action="Chiamate/AAdmin.php">
                
                <table id="assegnaServizioTab">
                 
                <tr>
                    <td>
                    <select id="listaProfAggiungiSer" name="listaProfAggiungiSer">
                        <optgroup label="Professionista">
                            <option selected disabled>Professionisti:</option>
                            <!-- Qui da implementare un ciclo smarty per caricare tutti i professionisti-->
                            <?php
$_from = $_smarty_tpl->tpl_vars['professionisti']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['prof'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['prof']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['prof']->value) {
$_smarty_tpl->tpl_vars['prof']->_loop = true;
$foreach_prof_Sav = $_smarty_tpl->tpl_vars['prof'];
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['prof']->value['idProf'];?>
"><?php echo $_smarty_tpl->tpl_vars['prof']->value['idProf'];?>
 - <?php echo $_smarty_tpl->tpl_vars['prof']->value['nomePro'];?>
 <?php echo $_smarty_tpl->tpl_vars['prof']->value['cognomePro'];?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['prof'] = $foreach_prof_Sav;
}
?>
                        </optgroup>
                    </select>
                    </td>
                    <!-- Ciclo for che popola la checkbox tramite chiamata Ajax che dipende dal prof scelto; in questo caso vengono
                        caricati i servizi della tabella 'servizio' -->
                    <td id="checkboxContainerAgg"></td>
                </tr>
                    
                <tr>
                    <td><input id="submit5" type="submit" value="ASSEGNA "></td>
                </tr>
                    
                <input type="hidden" name="task" value="assegnaServizio" />
                </table>
            </form>       

        </div>
        
<!-- ---------------------------------------------------------------------------------------------------------------------------------------- -->
        
        <div id="eliminaServizio">

            <h3>Elimina servizi</h3>

            <form name="eliminaSer" id="eliminaSer" method="post" action="Chiamate/AAdmin.php">
                        
                <table id="eliminaServiziotab">
                    <tr>
                        <td>
                        <select id="listaProfEliminaSer" name="listaProfEliminaSer">
                            <optgroup label="Professionista">
                                <option selected disabled>Professionisti:</option>
                                <!-- Qui da implementare un ciclo smarty per caricare tutti i professionisti-->
                                <?php
$_from = $_smarty_tpl->tpl_vars['professionisti']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['prof'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['prof']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['prof']->value) {
$_smarty_tpl->tpl_vars['prof']->_loop = true;
$foreach_prof_Sav = $_smarty_tpl->tpl_vars['prof'];
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['prof']->value['idProf'];?>
"><?php echo $_smarty_tpl->tpl_vars['prof']->value['idProf'];?>
 - <?php echo $_smarty_tpl->tpl_vars['prof']->value['nomePro'];?>
 <?php echo $_smarty_tpl->tpl_vars['prof']->value['cognomePro'];?>
</option>
                                <?php
$_smarty_tpl->tpl_vars['prof'] = $foreach_prof_Sav;
}
?>
                        </optgroup>
                        </select>
                        </td>
                        <!-- Ciclo for che popola la checkbox tramite chiamata Ajax che dipende dal prof scelto, in questo caso vengono
                            caricati solo i relativi a quel professionista -->
                        <td id="checkboxContainer"></td>
                    </tr>
                    <tr>
                        <td><input id="submit6" type="submit" value="ELIMINA "></td>
                    </tr>

                </table>
                <input type="hidden" name="task" value="rimuoviServizio" />
            </form>       

        </div>
        
<!-- ---------------------------------------------------------------------------------------------------------------------------------------- -->
        
        
        
        <div id="modificaInformazioni">

            <h3>Testo da Inserire nella sezione informazioni:</h3>

            <form name="modificaInf" id="modificaInf" method="post" action="Chiamate/AAdmin.php">
                <table id="infoTab">
                    <tr>
                        <td class="tdbold left">Sezione</td>
                        <td class="tdbold">Valore</td>
                    </tr>
                    <tr>
                        <td class="left">Titolo</td>
                        <td><input type="text" class="textLargo" id="infoTitolo" name="infoTitolo" /></td>
                    </tr>
                    <tr>
                        <td class="left">Sottotitolo 1</td>
                        <td><input type="text" class="textLargo" id="infoSot1" name="infoSot1" /></td>
                    </tr>
                    <tr>
                        <td class="left">Testo area 1</td>
                        <td><textarea class="areaTesto" id="testoArea1" name="testoArea1"></textarea></td>
                    </tr>
                    <tr>
                        <td class="left">Sottotitolo 2</td>
                        <td><input type="text" class="textLargo" id="infoSot2" name="infoSot2" /></td>
                    </tr>
                    <tr>
                        <td class="left">Testo area 2</td>
                        <td><textarea class="areaTesto" id="testoArea2" name="testoArea2"></textarea></td>
                    </tr>
                    <tr>
                        <td class="left">Sottotitolo 3</td>
                        <td><input type="text" class="textLargo" id="infoSot3" name="infoSot3" /></td>
                    </tr>
                    <tr>
                        <td class="left">Testo area 3</td>
                        <td><textarea class="areaTesto" id="testoArea3" name="testoArea3"></textarea></td>
                    </tr>
                </table>
                <input type="hidden" name="task" value="modificaInfo" />
                <input id="submit7" type="submit" value="MODIFICA ">
            </form>
        </div>
        
        <?php if ($_smarty_tpl->tpl_vars['messaggio']->value) {?>
            <label><?php echo $_smarty_tpl->tpl_vars['messaggio']->value;?>
</label>
        <?php }?>

    </div><?php }
}
?>