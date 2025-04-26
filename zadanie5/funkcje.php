<?php
    function test_input($data) {
        $data = trim($data);               // usuwa białe znaki z początku i końca
        $data = stripslashes($data);       // usuwa backslashe
        $data = htmlspecialchars($data);   // zamienia specjalne znaki HTML
        return $data;
    }

    class Osoba {
        public $login;
        public $haslo;
        public $imieNazwisko;
    }
        $osoba1 = new Osoba;
        $osoba1->login = "adam";
        $osoba1->haslo = "adam2020";
        $osoba1->imieNazwisko = "Adam Kowalski";
        $osoba2 = new Osoba;
        $osoba2->login = "agata";
        $osoba2->haslo = "2020agata";
        $osoba2->imieNazwisko = "Agata Nowak";
?>