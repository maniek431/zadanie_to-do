Uruchomienie zadania:
1. Upewnij się, że na serwerze jest zainstalowany Composer
2. Skopiuj pliki z zadaniem do folderu htdocs
3. Wypakuj pliki zip node_modules oraz vendor (pliki zip, ograniczenia)
4. Utwórz nową bazę danych
5. W pliku .env podaj dane serwera mysql:

 DB_CONNECTION=
 DB_HOST=
 DB_PORT=
 DB_DATABASE=
 DB_USERNAME=
 DB_PASSWORD=

Bugs:
1. Podczas dodawania zadań przez nowego użytkownika nie zmienia się ID w bazie danych
2. Podczas aktualizacji zadania błąd "Too few arguments to function", problem ze zmienną $id w kontrolerze
