<?php

// struttura dati (array associativo)
$struttura = [
    'INFORMATICA' => [
        'C:\\Utenti\\Matteo\\Documenti\\Informatica\\Database' => [
            'argomento' => 'Gestione dei Database',
            'mese' => 'Ottobre',
        ],
        'C:\\Utenti\\Matteo\\Documenti\\Informatica\\PHP' => [
            'argomento' => 'Linguaggio PHP',
            'mese' => 'Dicembre',
        ]
    ],
    'SISTEMI' => [
        'C:\\Utenti\\Matteo\\Documenti\\Sistemi\\Switch_Multilayer' => [
            'argomento' => 'Switch Multilayer',
            'mese' => 'Ottobre',
        ],
        'C:\\Utenti\\Matteo\\Documenti\\Sistemi\\VLAN' => [
            'argomento' => 'Creazione e gestione delle VLAN',
            'mese' => 'Novembre',
        ]
    ],
    'TPSI' => [
        'C:\\Utenti\\Matteo\\Documenti\\TPSI\\Socket' => [
            'argomento' => 'Gestione delle socket',
            'mese' => 'Novembre',
        ],
        'C:\\Utenti\\Matteo\\Documenti\\TPSI\\Bootstrap' => [
            'argomento' => 'Utilizzo di Bootstrap',
            'mese' => 'Dicembre',
        ]
    ]
];


// funzione per ottenere argomento e mese data la materia e il percorso
function getArgomentoMese($struttura, $materia, $percorso)
{
    if (isset($struttura[$materia]) && isset($struttura[$materia][$percorso]))
    {
        return $struttura[$materia][$percorso];
    }
    else
    {
        return null;  // se non trovo la materia o il percorso
    }
}


//================================== UTILIZZO ===================================
$materia = 'SISTEMI';
$percorso = 'C:\\Utenti\\Matteo\\Documenti\\Sistemi\\Switch_Multilayer';

$risultato = getArgomentoMese($struttura, $materia, $percorso);

if ($risultato != null)
{
    echo "Argomento: ".$risultato['argomento']."\n";
    echo '<br>';
    echo "Mese: ".$risultato['mese']."\n";
}
else
{
    echo "Percorso non trovato.\n";
}

?>
