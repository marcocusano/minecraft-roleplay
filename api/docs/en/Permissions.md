# Permissions
Here is available the full permissions list. Each permissions is a key that can be used to allow you to create, read, update or delete infos.
Most keys are type of boolean (true/false). In few case permissions could be an array of strings.

___

### Admin Permissions
Could be defined for each Company from a System Admin:

#### `companies.read`
- `alias`: Where {alias} is the unique alias param to read a Company;

#### `companies.employees.read`
- `alias`: Where {alias} is the unique alias param to read a Company list of Employees;

#### `companies.transactions.read`
- `alias`: Where {alias} is the unique alias param to read a Company list of Transactions;


**Esempio:**
```JAVASCRIPT
const permissions = [
    "self",
    "cybertek",
    "one_more_alias",
    ...
];
```

### Owner Permissions
Can be custom defined by an Owner of a Company. Many Companies has custom keys, reserved to their own features.

#### `dashboard` - Pagina principale
- `dashboard.employees`: Read analytics based on Employees;
- `dashboard.transactions`: Read analytics based on Transactions;

#### `employees` - Gestione Dipendenti
- `employees.create`: Hire a new Employee;
- `employees.read`: View the Employees list;
- `employees.update`: Update roles for an existing Employee;
- `employees.delete`: Fire an existing Employee;

#### `transactions` - Emissione Scontrini
- `transactions.create`: Create a new receipt;
- `transactions.read`: Read the whole list of transactions;

___

# Permessi specifici
Permissions of a Company with a Category.

#### Banca
`bank.transfers.create`: Create a new transaction, typed of Bank Transfer, for any Player / Company;
`bank.transfers.read`: View all transactions, typed of Bank Transfer, for any Player / Company;
`bank.transfers.update`: Accept or decline transactions, typed of Bank Transfers;
`bank.actions.create`: Can invest in Company shares;
`bank.actions.read`: Can read the Company shares area;

#### Scuola Guida
`drive.documents.create`: Create a new driving license;
`drive.documents.update`: Renew an existing driving license;