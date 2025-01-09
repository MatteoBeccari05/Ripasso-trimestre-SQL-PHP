SQL:
Creare un DB con due tabelle: una per contenere diversi modelli di access-point wi-fi e una per i 
dati dei produttori di questi dispositi; in base alle proprie conoscenze, ed eventualmente ricercando in rete, 
creare gli schemi delle due tabelle e popolarle con un certo numero di tuple.
Sulle tabelle così ottenute eseguire le seguenti operazioni:
       - CRUD
       - JOIN (tutti i tipi)
       - utilizzo degli operatori aggregati(inclusi group-by e having).

PHP-1:
Realizzare un'applicazione PHP che simuli un modulo di Google Forms.
L'applicazione deve essere composta da due pagine principali:
  Prima pagina:
        Contiene un form con domande sui DBMS.
        Il form deve includere tutti i controlli visti a lezione (ad esempio,pulsanti di scelta,
        caselle di selezione, un campo di testo per fornire una risposta libera,   ecc.).
  Seconda pagina:
        Visualizza le risposte date dall'utente confrontandole con le risposte corrette.
        Per ogni risposta:
        Se la risposta è corretta, deve essere contrassegnata con un simbolo di conferma (ad esempio, un apice verde).
        Se la risposta è errata, deve essere contrassegnata con un simbolo di errore (ad esempio, una croce rossa).
        Per la risposta aperta:
        Deve essere effettuata un'analisi del testo fornendo il numero di parole, consonanti, vocali e caratteri numerici presenti. Per questa domanda, non è richiesto il confronto con una risposta corretta.
  Requisiti aggiuntivi del form:
        Deve includere campi obbligatori per nome, cognome, email e password dell'utente.
        Il front end deve essere realizzao con HTML,CSS e JS.

PHP-2:
Progettare una struttura dati con le seguenti tre caratteristiche:
      - Deve contenere le discipline INFORMATICA, SISTEMI, e TPS.
      - A ciascuna disciplina devono essere associati uno o più percorsi nel
        file system (ad esempio: C:\Utenti\Bob\Documenti); i percorsi associati
        a una disciplina devono essere diversi tra di loro, ovvero un persorso identico può essere
        assegnato solo a disciplina diverse;
      - Ogni percorso deve contenere il nome di un argomento (ad esempio: Socket per la materia TPS)
        e il mese dell'anno in cui l'argomento è stato (o sarà) trattato.
Requisito funzionale:
La struttura dati,tramite un'apposita funzione, deve consentire di ottenere il nome dell'argomento e il mese di studio,
partendo dalla materia e dal percorso specificato.
