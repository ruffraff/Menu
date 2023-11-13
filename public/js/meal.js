function filterFoods() {
    var typeId = document.getElementById("type").value;
     var typeSelect = document.getElementById("type");
    var selectedOption = typeSelect.selectedOptions[0];
    var typeIdValue = selectedOption.innerText;
    var search = document.getElementById("search").value.toUpperCase();
    var table = document.getElementById("foodTable");
    var rows = table.getElementsByTagName("tr");

    // Cicla su tutte le righe della tabella tranne l'header
    for (var i = 1; i < rows.length; i++) {
        var type = rows[i].getElementsByTagName("td")[1];
        var foodName = rows[i].getElementsByTagName("td")[0];

        // Mostra la riga se la tipologia corrisponde alla selezione o se la casella di ricerca è vuota
        if ((typeId == "all" || type.innerHTML.toUpperCase() == typeIdValue.toUpperCase()) && (search == "" || foodName.innerHTML.toUpperCase().indexOf(search) > -1)) {
            rows[i].style.display = "";
        } else {
            rows[i].style.display = "none";
        }
    }
}

 function updateFoodPercentage(percentage, foodId) {
        // Seleziona tutte le righe della tabella
        var rows = document.querySelectorAll('#mealTable tbody tr');

        // Trova la riga corrispondente all'ID del cibo e aggiorna i valori
        for (var i = 0; i < rows.length; i++) {
            var row = rows[i];
            var id = row.querySelector('td[dataFoodId]').getAttribute('dataFoodId');

            if (id === foodId) {
                // Aggiorna i valori delle colonne in base alla percentuale
                var columns = row.querySelectorAll('td[dataOriginalValue]');
                for (var j = 0; j < columns.length; j++) {
                    var column = columns[j];
                    var originalValue = parseFloat(column.getAttribute('dataOriginalValue'));
                    var newValue = originalValue * percentage / 100;
                    column.textContent = newValue.toFixed(2);
                }
                break;
            }
        }
        updateMacronutrientTable();
    }

    function deleteFood(foodId) {
        // Seleziona tutte le righe della tabella
        var rows = document.querySelectorAll('#mealTable tbody tr');

        // Trova la riga corrispondente all'ID del cibo e rimuovila
        for (var i = 0; i < rows.length; i++) {
            var row = rows[i];
            var id = row.querySelector('td[dataFoodId]').getAttribute('dataFoodId');

            if (id === foodId) {
                row.parentNode.removeChild(row);
                break;
            }
        }
         // Trova la riga corrispondente all'ID del cibo nella tabella foodTable e abilita il pulsante "Aggiungi"
        var foodRow = document.querySelector('#foodTable tr[data-food-id="' + foodId + '"]');
        foodRow.setAttribute('data-food-added', 'false');
        foodRow.querySelector('button').disabled = false;

        updateMacronutrientTable();
    }
 

  function getFoodById(foodId) {
            var foodRows = document.querySelectorAll('#foodTable tbody tr');
            for (var i = 0; i < foodRows.length; i++) {
                var row = foodRows[i];
                var id = row.querySelector('td[dataFoodId]').getAttribute('dataFoodId');
                if (id == foodId) {
                    return {
                        id: id,
                        name: row.cells[0].textContent,
                        type: row.cells[1].textContent,
                        water: row.cells[2].textContent,
                        protein: row.cells[3].textContent,
                        fat: row.cells[4].textContent,
                        carbohydrate: row.cells[5].textContent,
                        fiber: row.cells[6].textContent
                    };
                }
            }
            return null;
        }


   function addFood(foodId) {

     // Trova la riga della tabella foodTable con l'ID del cibo selezionato
     var foodRow = document.querySelector('#foodTable tr[data-food-id="' + foodId + '"]');

     // Verifica se la riga è già stata aggiunta alla tabella mealTable
     if (foodRow.getAttribute('data-food-added') === 'true') {
         // La riga è già stata aggiunta, disabilita il pulsante "Aggiungi"
         
     } else {
          
 
         // Imposta l'attributo "data-food-added" a true per indicare che la riga è stata aggiunta
        
    
             var food = getFoodById(foodId);
            if (food === null) {
                console.error("Cibo non trovato con id:", foodId);
                return;
            }
            var table = document.getElementById('mealTable').getElementsByTagName('tbody')[0];

            // Crea una nuova riga nella tabella
            var newRow = table.insertRow();

            // Aggiungi le celle alla riga
           

            var nameCell = newRow.insertCell(0);
            nameCell.setAttribute('datafoodid', food.id);
           
            nameCell.textContent = food.name;

            var typeCell = newRow.insertCell(1);
            typeCell.setAttribute('dataoriginalvalue', food.type);
            typeCell.textContent = food.type;

            var waterCell = newRow.insertCell(2);
            waterCell.textContent = food.water;
            waterCell.setAttribute('dataoriginalvalue', food.water);
            var proteinCell = newRow.insertCell(3);
            proteinCell.textContent = food.protein;
            proteinCell.setAttribute('dataoriginalvalue', food.protein);
            var fatCell = newRow.insertCell(4);
            fatCell.textContent = food.fat;
            fatCell.setAttribute('dataoriginalvalue', food.fat);
            var carbohydrateCell = newRow.insertCell(5);
            carbohydrateCell.textContent = food.carbohydrate;
            carbohydrateCell.setAttribute('dataoriginalvalue', food.carbohydrate);   
            var fiberCell = newRow.insertCell(6);
            fiberCell.textContent = food.fiber;
            fiberCell.setAttribute('dataoriginalvalue', food.fiber);
            // Crea la cella dello slider
            var sliderCell = newRow.insertCell(7);
            var slider = document.createElement('input');
            slider.type = 'range';
            slider.min = '1';
            slider.max = '200';
            slider.value = '100';
            slider.className = 'slider';
            slider.onchange = function() { updateFoodPercentage(this.value, food.id); };
            sliderCell.appendChild(slider);

            // Crea la cella del pulsante Cancella
            var deleteCell = newRow.insertCell(8);
            var deleteButton = document.createElement('button');
            //deleteButton textContent in modo da tradurre il testo del pulsante cancel|translate
            const currentLanguage = document.querySelector('#currentLanguage').value;

            // controlla quale lingua è selezionata e traduci il testo 
            if (currentLanguage == 'en') {
                deleteButton.textContent = 'Cancel';
            } else if (currentLanguage == 'it') {
                deleteButton.textContent = 'Annulla';
            } else if (currentLanguage == 'es') {
                deleteButton.textContent = 'Cancelar';
            }

            
            
           

             
            deleteButton.onclick = function() { deleteFood(food.id); };
            deleteCell.appendChild(deleteButton);
            updateMacronutrientTable();
            foodRow.setAttribute('data-food-added', 'true');
            foodRow.querySelector('button').setAttribute('disabled', 'disabled');
        }

            //assegna a lista il valore ricavato da getSelectedFoods
            var lista = getSelectedFoods();
            
            // Salvare la lista nella sessione
            fetch('/meals/salvaLista', {
                method: 'POST',
                body: JSON.stringify({lista: lista}),
                headers: {
                'Content-Type': 'application/json'
                }
            }).then(function(response) {
                // ...codice per gestire la risposta...
            });
        }
  
    
        function getSelectedFoods() {
            var listaCibi = [];
            var table = document.getElementById('mealTable');
            var rows = table.getElementsByTagName('tr');
            for (var i = 1; i < rows.length; i++) {
              var food = {};
              food.id = rows[i].querySelector('td[datafoodid]').getAttribute('datafoodid');
              food.name = rows[i].querySelector('td[datafoodid]').outerText;
              
                food.type = rows[i].cells[1].textContent;
               
              
              food.water = rows[i].cells[2].textContent;
              food.protein = rows[i].cells[3].textContent;;
              food.fat = rows[i].cells[4].textContent;;
              food.carbohydrate = rows[i].cells[5].textContent;;
              food.fiber = rows[i].cells[6].textContent;;
              food.percentage = rows[i].cells[7].textContent;;
              listaCibi.push(food);
            }
            return listaCibi;
          }


  function updateMacronutrientTable() {
    let macronutrients = {
        water: 0,
        protein: 0,
        fat: 0,
        carbohydrate: 0,
        fiber: 0,
    };

    const rows = document.querySelectorAll("#mealTable tbody tr");

    rows.forEach(row => {
     

        const water = parseFloat(row.querySelector("td:nth-child(3)").textContent);
        const protein = parseFloat(row.querySelector("td:nth-child(4)").textContent);
        const fat = parseFloat(row.querySelector("td:nth-child(5)").textContent);
        const carbohydrate = parseFloat(row.querySelector("td:nth-child(6)").textContent);
        const fiber = parseFloat(row.querySelector("td:nth-child(7)").textContent);


        macronutrients.water += water;
        macronutrients.protein += protein;
        macronutrients.fat += fat;
        macronutrients.carbohydrate += carbohydrate;
        macronutrients.fiber += fiber;
    });

    const macronutrientRows = document.querySelectorAll("#macronutrientTable tbody tr");

    macronutrientRows.forEach(row => {
        const macronutrient = row.querySelector("td").textContent;
        const valueCell = row.querySelector("td:nth-child(2)");
        const chartCell = row.querySelector("td:nth-child(3) .line-chart");

        valueCell.textContent = macronutrients[macronutrient];
        chartCell.style.width = (macronutrients[macronutrient] * 5) + "px";
    });
}
