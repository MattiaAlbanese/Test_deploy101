# Come inviare una mail
1. Creare una rotta con method get e una funzione nel controller che ritorna una vista
2. Creare la vista contenente un form:
    2.1 method -> il metodo della rotta
    2.2 action -> endpoint dove inviare i dati
    2.3 @csrf token 
    2.4 gli attributi name negli input 
    2.5 un bottone di tipo submit
3. Creare una rotta di tipo post e la funzione nel controller
    3.1 accetta un parametro di classe Request
    3.2 salvare in delle variabili i dati che ci arrivano dalla request (dalla compilazione del form)
4. Creare la classe Mail -> php artisan make:mail NomeMail
    4.1 nel metodo envelope() inserire l'oggetto della mail e l'eventuale mittente
    4.2 nel metodo content() inserire il percorso del template blade della mail
5. Creare in views la cartella mail con il file mail.blade.php
    5.1 In questa vista inseriamo la struttura HTML e le scritte da far visualizzare nella mail
6. Nel metodo nel Controller, dopo il recupero dei dati dal form, inviare la mail all'indirizzo dell'utente con la nostra classe mail
    6.1 dopo l'invio della mail, fare un return redirect() con un messaggio di successo da far visualizzare all'utente
    6.2 Inserire nel file blade lo snippet per far comparire il messaggio di sessione
7. Collegare il servizio mail nel file .env

# Inviare una mail con dati dinamici
1. Dichiarare gli attributi pubblici nella classe della mail
    1.1 passarli e valorizzarli nel metodo construct()
2. Passare i parametri reali nell'istanza della nostra classe mail nella funzione del controller
3. Nel file blade possiamo accedere agli attributi pubblici dichiarati nella classe