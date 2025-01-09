document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");  // Seleziona il form
    form.addEventListener("submit", function(event) {
        let isValid = true; // Flag per validità del form
        let errorMessages = []; // Array per memorizzare eventuali errori

        // Controllo sul campo nome
        const name = document.querySelector("#name").value;
        if (name.trim() === "") {
            isValid = false;
            errorMessages.push("Il campo 'Nome' è obbligatorio.");
        }

        // Controllo sulla password
        const password = document.querySelector("#password").value;
        if (password.trim() === "") {
            isValid = false;
            errorMessages.push("Il campo 'Password' è obbligatorio.");
        }

        // Controllo sulla mail
        const mail = document.querySelector("#mail").value;
        if (mail.trim() === "") {
            isValid = false;
            errorMessages.push("Il campo 'Mail' è obbligatorio.");
        }

        // Controllo su DBMS (campo di testo)
        const dbms = document.querySelector("#dbms").value;
        if (dbms.trim() === "") {
            isValid = false;
            errorMessages.push("Il campo 'Cosa si intende per DBMS?' è obbligatorio.");
        }

        // Controllo sul tipo di DBMS (radio buttons)
        const dbms3 = document.querySelectorAll("input[name='dbms3']:checked");
        if (dbms3.length === 0) {
            isValid = false;
            errorMessages.push("Seleziona il tipo di DBMS.");
        }

        // Controllo se almeno un checkbox è selezionato (DBMS conosciuti)
        const dbms4 = document.querySelectorAll("input[name='dbms4[]']:checked");
        if (dbms4.length === 0) {
            isValid = false;
            errorMessages.push("Seleziona almeno un DBMS che conosci.");
        }

        // Se il form non è valido, blocca l'invio e mostra gli errori
        if (!isValid) {
            event.preventDefault(); // Blocca l'invio del modulo
            alert("Ci sono degli errori nei seguenti campi:\n\n" + errorMessages.join("\n"));
        }
    });
});

