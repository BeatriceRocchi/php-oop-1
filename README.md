# Movie List

Creare un file `index.php` in cui:

- è definita una **classe ‘Movie’**
  => all’interno della classe sono dichiarate delle **variabili d’istanza**
  => all’interno della classe è definito **un costruttore**
  => all’interno della classe è definito almeno **un metodo**
- vengono **istanziati almeno due oggetti ‘Movie’** e stampati a schermo i valori delle relative proprietà.

**Bonus 1:**
Modificare la classe Movie in modo che accetti piú di un genere.

**Bonus 2:**
Creare un layout completo per stampare a schermo una lista di movies.

Fare attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Ad esempio organizzare il codice:

- creando un file dedicato ai dati (tipo le array di oggetti) db.php
- mettendo ciascuna classe nel proprio file e magari raggruppando tutte le classi in una cartella dedicata che possiamo chiamare Models
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.

### Svolgimento

1. In un file dedicato `Movie.php` definire una classe 'Movie' con le sue variabili, aggiungere un costruttore per le variabili obbligatorie ed aggiungere almeno un metodo
2. In `index.php` creare almeno due istanze della classe 'Movie' e stampare a schermo con var_dump le istanze create
