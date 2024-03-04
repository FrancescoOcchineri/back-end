<?php

namespace Biblioteca {
    interface Prestito
    {
        public function presta();
        public function restituisci();
    }

    abstract class MaterialeBibliotecario implements Prestito
    {
        protected static $contatoreMateriali = 0;
        protected static $contatoreLibri = 0;
        protected static $contatoreDVD = 0;

        public function __construct()
        {
            self::$contatoreMateriali++;
        }

        public static function getCount()
        {
            return self::$contatoreMateriali;
        }

        public static function getCountLibri()
        {
            return self::$contatoreLibri;
        }

        public static function getCountDVD()
        {
            return self::$contatoreDVD;
        }

        public function presta()
        {
            if (self::$contatoreMateriali > 0) {
                self::$contatoreMateriali--;
                echo 'Materiale prestato';
            } else {
                echo 'Materiale indisponibile';
            }

            if ($this instanceof Libro && self::$contatoreLibri > 0) {
                self::$contatoreLibri--;
                echo 'Materiale prestato';
            } elseif ($this instanceof DVD && self::$contatoreDVD > 0) {
                self::$contatoreDVD--;
                echo 'Materiale prestato';
            } else {
                echo 'Materiale indisponibile';
            }
        }

        public function restituisci()
        { {
                if ($this instanceof Libro) {
                    self::$contatoreLibri++;
                    echo 'Materiale restituito';
                } elseif ($this instanceof DVD) {
                    self::$contatoreDVD++;
                    echo 'Materiale restituito';
                }
            }
        }
    }

    class Libro extends MaterialeBibliotecario
    {
        public $titolo;
        public $autore;
        public $annoPubblicazione;

        public function __construct($titolo, $autore, $annoPubblicazione)
        {
            parent::__construct();
            $this->titolo = $titolo;
            $this->autore = $autore;
            $this->annoPubblicazione = $annoPubblicazione;
            self::$contatoreLibri++;
        }

        public static function contaLibri()
        {
            return self::$contatoreLibri;
        }
    }

    class DVD extends MaterialeBibliotecario
    {
        public $titolo;
        public $regista;
        public $annoPubblicazione;

        public function __construct($titolo, $regista, $annoPubblicazione)
        {
            parent::__construct();
            $this->titolo = $titolo;
            $this->regista = $regista;
            $this->annoPubblicazione = $annoPubblicazione;
            self::$contatoreDVD++;
        }

        public static function contaDVD()
        {
            return self::$contatoreDVD;
        }
    }
}

?>