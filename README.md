# Dysk internetowy

- Aplikacja działa w sposób zbliżony do popularnych serwisów takich jak Dropbox


- Każdy z użytkowników może dodawać własne pliki, które domyślne są widoczne tylko dla niego.


- Użytkownik może tworzyć link do pobrania pliku, jest on wtedy ogólnie dostępny dla wszystkich osób posiadających link

 
	*Jest generowany przez szary przycisk ze strzałką*

- Użytkownik może udostępniać plik innym użytkownikom serwisu - prywatne udostępnianie

	*Kazdy uzytkownik ma przypisany unikatowy secret key, ktory jest wykozystywany podczas prywatnego udostepniania plikow.*

- Po udostępnieniu plików na koncie adresata powinno się pojawić powiadomienie o nowym pliku

	*Po nadaniu innemu uzytkownikowi uprawneń do pliku, dostaje on powiadomienie w views/drive/notifications. *

- Użytkownik powinien posiadać listę aktualnie udostępnionych plików

	 *Kazdy uzytkownik posiada rozwijana liste udostepnionych plikow w sidebar po prawej*

- Akacja powinna udostępniać REST API umożliwiające integrację z różnego typu klientami

## Commity

Skrótowy, kontretny opis Twojego commitu + bardziej szczegółowy opis danego commita, w ktorym mozesz opisac konkretne przyczyny tego commita i/lub zmiany jakie wprowadza.

    git commit -m "krótki opis"
    
    git commit -m "krótki opis" -m "dłuższy opis"



Przykład:

    git commit -m "Adds changes to index function in DriveController"

lub

    git commit -m "Adds changes to index function in DriveController" -m "[ redirection to auth.login if user isn't signed in ]"

## Pomocne linki

  

Random Unique Value For Each User

    https://stackoverflow.com/questions/28524290/how-to-generate-unique-random-value-for-each-user-in-laravel-and-add-it-to-datab

Clipboard Button

    https://laracasts.com/discuss/channels/laravel/laravel-copy-to-clipboard-button

File Extension

    https://laracasts.com/discuss/channels/laravel/getting-file-extension-using-storage-facade


File Size

    https://stackoverflow.com/questions/40995731/laravel-get-size-from-uploaded-file



