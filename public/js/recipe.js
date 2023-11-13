function inserisciRicetta() {
    var nomeRicetta = document.getElementById('nomeRicetta').value;
    var descrizioneRicetta = document.getElementById('descrizioneRicetta').value;
     // Effettua l'operazione di inserimento della ricetta
    
            // Aggiorna la tabella delle ricette inserite
            var ricetteTable = document.getElementById('ricetteTable');
            var newRow = ricetteTable.insertRow();
    
            var nomeCell = newRow.insertCell(0);
            nomeCell.innerHTML = nomeRicetta;
    
            var descrizioneCell = newRow.insertCell(1);
            descrizioneCell.innerHTML = descrizioneRicetta;
    
            var deleteCell = newRow.insertCell(2);
            deleteCell.innerHTML = "<button onclick=\"deleteRicetta('" + newRow.rowIndex + "')\">Elimina</button>";
    
            var mostraCell = newRow.insertCell(3);
            mostraCell.innerHTML = "<button onclick=\"mostraRicetta('" + newRow.rowIndex + "')\">Mostra</button>";
    
            // Resetta i valori dei campi di input
            document.getElementById('nomeRicetta').value = "";
            document.getElementById('descrizioneRicetta').value = "";
        }
    
        function deleteRicetta(rowIndex) {
            // Effettua l'operazione di eliminazione della ricetta
    
            // Rimuove la riga corrispondente dalla tabella delle ricette inserite
            var ricetteTable = document.getElementById('ricetteTable');
            ricetteTable.deleteRow(rowIndex);
        }
    
        function mostraRicetta(rowIndex) {
            // Effettua l'operazione di visualizzazione della ricetta
    
            // Codice per mostrare la ricetta selezionata
        }