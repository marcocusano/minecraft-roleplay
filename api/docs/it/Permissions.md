# Permessi
Disponibile l'intera lista di permessi. Ogni permesso corrisponde ad una chiave da poter utilizzare per garantire l'accesso a determinate informazioni di una o più Aziende.
Quasi tutte le chiavi sono di tipo boolean, che consente di garantire un permesso semplicemente tramite l'utilizzo di true/false. In alcuni casi, tuttavia, alcuni permessi potranno avere un array di valori, principalmente di tipo String. I valori disponibili saranno sempre listati all'interno di una chiave, in mancanza dei quali potranno essere considerati boolean;

___

### Permessi Amministrativi
Possono essere definiti per ogni singola azienda solo da parte di un Admin del Gestionale:

#### `companies.read`
- `alias`: Dove {alias} corrisponde all'alias univoco dell'Azienda a cui possono avere accesso;

#### `companies.employees.read`
- `alias`: Dove {alias} corrisponde all'alias univoco dell'Azienda a cui possono avere accesso, per visualizzare la lista dei Dipendenti;

#### `companies.transactions.read`
- `alias`: Dove {alias} corrisponde all'alias univoco dell'Azienda a cui possono avere accesso, per la visualizzazione della lista completa delle transazioni;


**Esempio:**
```JAVASCRIPT
const permissions = [
    "self",
    "cybertek",
    "something_more",
    ...
];
```

### Permessi Direttori
Possono essere configurati da ogni Direttore di Azienda in modo personalizzato. Alcune aziende avranno chiavi riservate, in riferimento a funzionalità extra.

#### `dashboard` - Pagina principale
- `dashboard.employees`: Accesso alle statistiche relative ai Dipendenti
- `dashboard.transactions`: Accesso alle statistiche Aziendali

#### `employees` - Gestione Dipendenti
- `employees.create`: Assumere un nuovo Dipendente
- `employees.read`: Accedere alla lista Dipendenti
- `employees.update`: Aggiornare ruolo del Dipendente
- `employees.delete`: Licenziare un Dipendente

#### `transactions` - Emissione Scontrini
- `transactions.create`: Generare un nuovo scontrino
- `transactions.read`: Accedere alla lista completa degli scontrini emessi

___

# Permessi specifici
Sono tutti quei permessi che potranno essere applicati solo ad Aziende con Categoria.

#### Banca
`bank.transfers.create`: Creare una transazione bancaria, di tipo Bonifico Bancario, per conto di qualunque Giocatore / Azienda;
`bank.transfers.read`: Visualizzare transazioni bancarie, di tipo Bonifico Bancario.
`bank.transfers.update`: Accettare o rifiutare transazioni bancarie, di tipo Bonifico Bancario.
`bank.actions.create`: Possibilità di investire in una Azienda.
`bank.actions.read`: Possibilità di accedere e visualizzare l'andamento delle Azioni

#### Scuola Guida
`drive.documents.create`: Possibilità di emettere una nuova patente di guida;
`drive.documents.update`: Possibilità di rinnovare una patente di guida esistente.