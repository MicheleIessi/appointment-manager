<link type="text/css" rel="stylesheet" href="View/css/paginaProfessionista.css" />

<div title="contenitoreUtente"id="contenitoreUtente">
        
    <h2>Pagina Professionista - ID Utente {$numID}</h2>

    <div title="immagine" id="immagine">
        Carica Immagine
    </div>

    <div title="datiUtente" id="datiUtente">

        <ul>
            <li>Nome: {$nome} </li>
            <li>Cognome: {$cognome} </li>
            <li>Data di nascita: {$dataNascita} </li>
            <li>Sesso: {$sesso} </li>
            <li>Codice fiscale: {$codiceFiscale} </li>
            <li>Email:{$email} </li>
            <li>Settore:{$settore} </li>
        </ul> 
        
    </div>

    <div title="orariLavoro" id="orariLavoro">
        <table>
            <h3>Orario di lavoro</h3>
            <tr>
                <td>Lunedì</td>
                <td> {$orariLavorativi['lun']} </td>
            </tr>

            <tr>
                <td>Martedì</td>
                <td> {$orariLavorativi['mar']} </td>
            </tr>

            <tr>
                <td>Mercoledì</td>
                <td> {$orariLavorativi['mer']} </td>
            </tr>

            <tr>
                <td>Giovedì</td>
                <td> {$orariLavorativi['gio']} </td>
            </tr>

            <tr>
                <td>Venerdì</td>
                <td> {$orariLavorativi['ven']} </td>
            </tr>

            <tr>
                <td>Sabato</td>
                <td> {$orariLavorativi['sab']} </td>
            </tr>

            <tr>
                <td>Domenica</td>
                <td> {$orariLavorativi['dom']} </td>
            </tr>

        </table>
    </div>
            
    <div title="serviziOfferti" id="serviziOfferti">
        <table id="servizi">
            <h3>Servizi offerti da {$nomeUtente}</h3>
            
            <tr id="chiavi">
                <td>Nome servizio</td>
                <td>Settore</td>
                <td>Durata</td>
                <td>Descrizione</td>
            </tr>
            
                {foreach $serviziOfferti as $servizio}
                    <tr>
                            <td id="servizio">{$servizio['nomeServizio']}</td>
                            <td id="servizio">{$servizio['settore']}</td>
                            <td id="servizio">{$servizio['durata']}</td>
                            <td id="servizio">{$servizio['descrizione']}</td>
                        </tr>
                {/foreach}
                
        </table>
    </div>
                
    <div title="Calendario" id="Calendario">
        <a href="?controller=calendario&idp={$numID}"><button>Prenota un appuntamento! Clicca per aprire l'agenda di {$nomeUtente}<button/></a>
    </div>

</div>