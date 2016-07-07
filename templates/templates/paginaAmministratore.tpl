<link type="text/css" rel="stylesheet" href="paginaAmministratore.css" />

<div name="contenitoreAmministratore" id="contenitoreAmministratore">
    
        <h2>Pagina Amministratore - ID Utente: 0 </h2>
        
        <a class='buttonElem' rel="leanModal" href="#aggiungiProfessionista">   <button class="modifica">Aggiungi professionista</button>   </a>
        <a class='buttonElem' rel="leanModal" href="#modificaOrari">            <button class="modifica">Modifica orari</button>   </a><br>
        <a class='buttonElem' rel="leanModal" href="#aggiungiServizio">         <button class="modifica">Aggiungi servizio</button>         </a>
        <a class='buttonElem' rel="leanModal" href="#modificaServizio">         <button class="modifica">Modifica servizio</button>         </a><br>
        <a class='buttonElem' rel="leanModal" href="#assegnaServizio">          <button class="modifica">Assegna servizio</button>          </a><br>
        <a class='buttonElem' rel="leanModal" href="#modificaInformazioni">     <button class="modifica">Modifica informazioni</button>     </a><br>
        <a class='buttonElem' rel="leanModal" href="#modificaContatti">         <button class="modifica">Modifica contatti</button>         </a><br>
        <a class='buttonElem' rel="leanModal" href="#eliminaUtente">            <button class="modifica">Elimina utente</button>            </a><br>

<!-- ---------------------------------------------------------------------------------------------------------------------------------------- -->    
        <div id="aggiungiProfessionista">

            <h3>Modifica informazioni</h3>

            <form name="aggiungiProf" id="aggiungiProf" method="post" action="amministratore.php">
                <table>

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
                        <td> <input type="text" id="orarioLun" ></td>
                    </tr>
                    <tr>
                        <td>Martedì</td>
                        <td> <input type="text" id="orarioMar" ></td>
                    </tr>
                    <tr>
                        <td>Mercoledì</td>
                        <td> <input type="text" id="orarioMer" ></td>
                    </tr>
                    <tr>
                        <td>Giovedì</td>
                        <td> <input type="text" id="orarioGio" ></td>
                    </tr>
                    <tr>
                        <td>Venerdì</td>
                        <td> <input type="text" id="orarioVen" ></td>
                    </tr>
                    <tr>
                        <td>Sabato</td>
                        <td> <input type="text" id="orarioSab" ></td>
                    </tr>
                    <tr>
                        <td>Domenica</td>
                        <td> <input type="text" id="orarioDom" ></td>
                    </tr>

                    <tr>
                        <td><input id="submit1" type="submit" value="MODIFICA "><td/>
                    </tr>

                </table>
            </form>        

        </div>
        
<!-- ---------------------------------------------------------------------------------------------------------------------------------------- -->
        
        <div id="modificaOrari">

            <h3>Modifica orari</h3>

            <form name="modificaOra" id="modificaOra" method="post" action="amministratore.php">
                
                <select name="listaProf">
                    <optgroup label="Professionista">
                        <!-- Qui da implementare un ciclo smarty per caricare tutti i professionisti-->
                        <option value="{IDProfessionista}">{IDPro} - {NomePro} {CognomePro}</option>
                    </optgroup>
                </select>
                    <br>
                    
                <table id="modificaOrariTab">

                    <tr>
                        <td>Lunedì</td>
                        <td> <input type="text" id="orarioLun" ></td>
                    </tr>
                    <tr>
                        <td>Martedì</td>
                        <td> <input type="text" id="orarioMar" ></td>
                    </tr>
                    <tr>
                        <td>Mercoledì</td>
                        <td> <input type="text" id="orarioMer" ></td>
                    </tr>
                    <tr>
                        <td>Giovedì</td>
                        <td> <input type="text" id="orarioGio" ></td>
                    </tr>
                    <tr>
                        <td>Venerdì</td>
                        <td> <input type="text" id="orarioVen" ></td>
                    </tr>
                    <tr>
                        <td>Sabato</td>
                        <td> <input type="text" id="orarioSab" ></td>
                    </tr>
                    <tr>
                        <td>Domenica</td>
                        <td> <input type="text" id="orarioDom" ></td>
                    </tr>

                    <tr>
                        <td><input id="submit2" type="submit" value="MODIFICA "><td/>
                    </tr>

                </table>
            </form>        

        </div>
        
<!-- ---------------------------------------------------------------------------------------------------------------------------------------- -->
        
        <div id="aggiungiServizio">

            <h3>Aggiungi servizio</h3>

            <form name="aggiungiSer" id="aggiungiSer" method="post" wrap="hard" action="amministratore.php">
                <table id="aggiungiServizioTab">

                    <tr>
                        <td>Nome servizio</td>
                        <td> <input type="text" id="nomeServizio" ></td>
                    </tr>
                    <tr>
                        <td>Descrizione</td>
                        <td> <input type="text" id="descrizione" ></td>
                    </tr>
                    <tr>
                        <td>Settore</td>
                        <td> <input type="text" id="settore" ></td>
                    </tr>
                    <tr>
                        <td>Durata</td>
                        <td> <input type="text" id="durata" ></td>
                    </tr>
                    <tr>
                        <td><input id="submit3" type="submit" value="AGGIUNGI "><td/>
                    </tr>
                    
                </table>
            </form>       

        </div>
        
<!-- ---------------------------------------------------------------------------------------------------------------------------------------- -->
        
        <div id="modificaServizio">

            <h3>Modifica servizio</h3>

            <form name="modificaSer" id="modificaSer" method="post" wrap="hard" action="amministratore.php">
                <table id="modificaServizioTab">

                    <tr>
                        <td>Nome servizio</td>
                        <td> <input type="text" id="nomeServizio" ></td>    <!-- Qui un menù a tendina -->
                    </tr>
                    <tr>
                        <td>Descrizione</td>
                        <td> <input type="text" id="descrizione" ></td>
                    </tr>
                    <tr>
                        <td>Settore</td>
                        <td> <input type="text" id="settore" ></td>
                    </tr>
                    <tr>
                        <td>Durata</td>
                        <td> <input type="text" id="durata" ></td>
                    </tr>
                    <tr>
                        <td><input id="submit4" type="submit" value="MODIFICA "><td/>
                    </tr>
                    
                </table>
            </form>       

        </div>
        
<!-- ---------------------------------------------------------------------------------------------------------------------------------------- -->
        
        <div id="assegnaServizio">

            <h3>Assegna servizio</h3>

            <form name="assegnaSer" id="assegnaSer" method="post" action="amministratore.php">
                
                <table id="assegnaServizioTab">
                 
                <tr>
                    <td>
                    <select name="profDaAssegnare">
                        <optgroup label="Professionista">
                            <!-- Qui da implementare un ciclo smarty per caricare tutti i professionisti-->
                            <option value="{IDProfessionista}">{IDPro} - {NomePro} {CognomePro}</option>
                        </optgroup>
                    </select>
                    </td>
                    <!-- Ciclo for che popola la checkbox tramite chiamata Ajax che dipende dal prof scelto; in questo caso vengono
                        caricati i servizi della tabella 'servizio' -->
                    <td>    
                    <input type="checkbox" id="serviziProf" value="{$nomeServizio}">{$nomeServizio}<br>
                    </td>
                </tr>
                    
                <tr>
                    <td><input id="submit5" type="submit" value="ASSEGNA "><td/>
                </tr>
                    

                </table>
            </form>       

        </div>
        
<!-- ---------------------------------------------------------------------------------------------------------------------------------------- -->
        
        <div id="eliminaServizio">

            <h3>Elimina servizi</h3>

            <form name="eliminaSer" id="eliminaSer" method="post" action="amministratore.php">
                        
                <table id="eliminaServiziotab">
                    
                    <tr>
                        
                        <select name="listaProf">
                            <optgroup label="Professionista">
                            <!-- Qui da implementare un ciclo smarty per caricare tutti i professionisti-->
                            <option value="{IDProfessionista}">{IDPro} - {NomePro} {CognomePro}</option>
                        </optgroup>
                        </select>
                        
                        <!-- Ciclo for che popola la checkbox tramite chiamata Ajax che dipende dal prof scelto, in questo caso vengono
                            caricati solo i relativi a quel professionista -->
                        
                        <input type="checkbox" id="serviziProf" value="{$nomeServizio}">{$nomeServizio}<br>
                        
                    </tr>
                    <tr>
                        <td><input id="submit6" type="submit" value="ELIMINA "><td/>
                    </tr>

                </table>
            </form>       

        </div>
        
<!-- ---------------------------------------------------------------------------------------------------------------------------------------- -->
        
        
        
        <div id="modificaInformazioni">

            <h3>Testo da Inserire nella sezione informazioni:</h3> <!-- E' il campo "Chi siamo" -->

            <form name="modificaInf" id="modificaInf" method="post" wrap="hard" action="amministratore.php">
                <textarea id="testo" cols="150"></textarea>
            </form>
            
            <br>
            
            <input id="submit7" type="submit" value="MODIFICA ">

        </div>
        
<!-- ---------------------------------------------------------------------------------------------------------------------------------------- -->
        
        <div id="modificaContatti">

            <h3>Testo da Inserire nella sezione contatti:</h3> <!-- E' il campo "Chi siamo" -->

            <form name="modificaCon" id="modificaCon" method="post" wrap="hard" action="amministratore.php">
                <textarea id="testo" cols="150"></textarea>
            </form>
            
            <br>
            
            <input id="submit8" type="submit" value="MODIFICA ">
            

        </div>
        
        <!-- Elimina utente da fare nel caso volessimo -->
    
    </div>
    
<!-- ---------------------------------------------------------------------------------------------------------------------------------------- -->
    
    