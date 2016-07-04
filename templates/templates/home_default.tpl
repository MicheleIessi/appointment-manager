<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <link type="text/css" rel='stylesheet' href='JS/fullcalendar-2.6.1/fullcalendar.css' />
        <link type="text/css" rel="stylesheet" href='View/css/prova.css' />
        <link type="text/css" rel="stylesheet" href="View/css/login.css" />
        <link type="text/css" rel="stylesheet" href="View/css/calendario.css" />
        <script type="text/javascript" src='JS/fullcalendar-2.6.1/lib/jquery.min.js'></script>
        <script type="text/javascript" src="JS/validation/jquery.validate.js"></script>
        <script type="text/javascript" src='JS/jquery-ui/jquery-ui.min.js'></script>
        <script type="text/javascript" src='JS/fullcalendar-2.6.1/lib/moment.min.js'></script>
        <script type="text/javascript" src='JS/fullcalendar-2.6.1/fullcalendar.min.js'></script>
        <script type="text/javascript" src='JS/fullcalendar-2.6.1/lang-all.js'></script>
        <script type="text/javascript" src='JS/JCalendar.js'></script>
        <script type="text/javascript" src="JS/validation/jquery.validate.js"></script>
        <script type="text/javascript" src="JS/JLogRegOut.js"></script>
        <script type="text/javascript" src="JS/jquery.leanModal.min.js"></script>
        <script type="text/javascript" src="JS/jquery-ui/datepicker-it.js"></script>
        <title>{$title}</title>
    </head>
    <body>
    <!-- BANNER -->
    {$banner}
    <!-- MAIN BUTTONS -->
    {$nolog = false}
    <div class="wrapper">
        <div class ="mainButtons">
            {foreach $mainButtons as $button}
                {if $button['testo'] eq 'Login' or $button['testo'] eq 'Registrati' }
                    {$nolog = true}
                    <a class='buttonElem' rel="leanModal" href="{$button['link']}" id="modaltrigger">{$button['testo']}</a>
                {else}
                <a class='buttonElem' href="{$button['link']}">{$button['testo']}</a>
                {/if}
            {/foreach}
        </div>
    </div>
    {if $nolog} <!-- L'utente corrente non è loggato o non è registrato. Sono quindi presenti i div relativi a login e registrazione con leanmodal-->
        <div id="loginmodal">
                <div id="signin-header">
                    <h2>Login Utente</h2>
                    <p>Sei già iscritto? Effettua il login.</p>
                </div>
                <form id="logform">
                    <div class="txt-fld">
                        <label for="">Email</label>
                        <input id="mail" name="email" type="text">
                    </div>
                    <div class="txt-fld">
                        <label for="">Password</label>
                        <input id="pwd" name="password" type="password">

                    </div>
                    <div class="btn-fld">
                        <button id="lgbtn" type="button">Login »</button>
                    </div>
                </form>
            </div>
        </div>
        <div id="registrazionemodal">
              <div id="signup-header">
                    <h3>Creazione account</h3>
                    <p>&Egrave;facile e veloce.</p>
                </div>
                <form id="regform">
                    <div class="txt-fld">
                        <label for="">Nome</label>
                        <input id="name" name="nome" type="text">
                    </div>
                    <div class="txt-fld">
                        <label for="">Cognome</label>
                        <input id="surname" name="cognome" type="text">
                    </div>
                    <div class="txt-fld">
                        <label for="">Email</label>
                        <input id="EmailReg" name="EmailReg" type="text">
                    </div>
                    <div class="txt-fld">
                        <label for="">Data di nascita</label>
                        <input id="datepicker" name="date" type="date">
                    </div>
                    <div class="txt-fld">
                    </div>
                    <div class="txt-fld">
                        <label for="">sesso</label>                       
                        <input type="radio" name="sesso" value="M"/>
                        <input type="radio" name="sesso" value="F"/>
                      
                    </div>
                    <div class="txt-fld">
                        <label for="">Codice Fiscale</label>
                        <input id="CodFis" name="CodiceFiscale" type="text">
                    </div>
                    <div class="txt-fld">
                        <label for="">Password</label>
                        <input id="pwd1" name="password1" type="password">

                    </div>
                    <div class="btn-fld">
                        <button id="regbtn" type="button">Registrati »</button>
                    </div>
                </form>
            </div>
    {/if}
    <div class ="main">
        <!-- MAIN CONTENT -->
        <div class='content inline-content'>
            {$main_content}
        </div>
        <!-- SIDE CONTENT -->
        {if $right_content}
            <div class="side_content inline-content">
                {$right_content}
            </div>
        {/if}
        </div>
    </body>
</html>
