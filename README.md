
### **SQL: Creazione di un DB per modelli di access point Wi-Fi e produttori**

1. **Creare un DB con due tabelle:**
   - **Tabella per i modelli di access-point Wi-Fi.**
   - **Tabella per i dati dei produttori di questi dispositivi.**
   - Creare gli schemi delle due tabelle e popolarle con un certo numero di tuple.
   
2. **Eseguire le seguenti operazioni sulle tabelle:**
   - **CRUD** (Create, Read, Update, Delete).
   - **JOIN** (tutti i tipi).
   - **Utilizzo degli operatori aggregati** (inclusi `GROUP BY` e `HAVING`).

---

### **PHP-1: Realizzazione di un'applicazione PHP che simuli un modulo di Google Forms**

1. **Prima pagina:**
   - Contiene un form con domande sui DBMS.
   - Il form deve includere tutti i controlli visti a lezione (ad esempio, pulsanti di scelta, caselle di selezione, un campo di testo per una risposta libera, ecc.).
   
2. **Seconda pagina:**
   - Visualizza le risposte date dall'utente confrontandole con le risposte corrette.
   - Per ogni risposta:
     - Se la risposta è corretta, deve essere contrassegnata con un simbolo di conferma (ad esempio, un apice verde).
     - Se la risposta è errata, deve essere contrassegnata con un simbolo di errore (ad esempio, una croce rossa).
     - Per le risposte aperte:
       - Deve essere effettuata un'analisi del testo, fornendo il numero di parole, consonanti, vocali e caratteri numerici presenti.
       - Non è richiesto il confronto con una risposta corretta per queste domande.
     
3. **Requisiti aggiuntivi del form:**
   - Campi obbligatori per nome, cognome, email e password dell'utente.
   - Il front-end deve essere realizzato con HTML, CSS e JavaScript.

---

### **PHP-2: Progettazione di una struttura dati per le materie**

1. **Struttura dati da progettare:**
   - Deve contenere le seguenti tre discipline: **INFORMATICA**, **SISTEMI**, **TPS**.
   - A ciascuna disciplina devono essere associati uno o più percorsi nel file system (ad esempio: `C:\Utenti\Bob\Documenti`).
   - I percorsi associati a una disciplina devono essere diversi tra di loro; un percorso identico può essere assegnato solo a discipline diverse.
   - Ogni percorso deve contenere il nome di un argomento (ad esempio: *Socket per la materia TPS*) e il mese dell'anno in cui l'argomento è stato (o sarà) trattato.
   
2. **Funzionalità richiesta:**
   - La struttura dati, tramite un'apposita funzione, deve consentire di ottenere il nome dell'argomento e il mese di studio partendo dalla materia e dal percorso specificato.

---
