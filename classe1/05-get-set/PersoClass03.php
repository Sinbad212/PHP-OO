<?php
class PersoClass03{
    // Propriétés
    protected string $name; // typage en string
    protected ?int $hp; // typage en null ou int (pourrait rester vide à la création)
    protected int $age; // typage en int
    protected int $xp=0;// typage en int avec valeur par défaut
    protected ?int $level; // int ou null
    protected string $espece;
    private null|bool|int $alive; // depuis PHP 8.0 Union types

    // Constantes
    public const ESPECE_CHOICE = ["Humain",
                                     "Saiyan",
                                     "Elf",
                                     "Nain",
                                     "Cyborg",
                                    ];

    // Méthodes

        // constructeur
        public function __construct(string $name, int $age, string $espece){
            // $this->name = $name;
            $this->setName($name); // correcte
            $this->age = $age; // à remplacer par le setter
            // modification grâce à un setter (BP)
            $this->setEspece($espece);
        }


        // Getters - Accessors

        // getters de $name
        public function getName(): string 
        {
            return $this->name;
        }

        // getter de $hp (ou int ou null)

        // getter de $age (int)

        // getter de $xp (int)

        // getter de $level (ou int ou null)

        // getter de $espece (string)

        // getter de $alive (null bool ou int) - si rien = null - si 0 => false, si 1 => true, si plus de 1 => int

        // Setters - Mutators

        // Setter de name
        // le nom doit être protégé contre les
        // espaces avant et arrière et ne peux contenir
        // des tags, il doit également avoir plus de 2 caractères
        public function setName(string $thename){
            $thename = trim(strip_tags($thename));
            if(strlen($thename)<=2){
                throw new Exception("Nom trop court",333);
            }
            // si pas d'erreur
            $this->name = $thename;
        }

        // setter de $hp (int) int positif uniquement, sinon erreur 335

        // setter de $age (int) doit être plus grand que 12 sinon erreur 336

        // setter de $xp (int) seulement un entier positif sinon 337

        // setter de $level (int) seulement un entier positif sinon 338


        // getter de $alive (null bool ou int) - si rien = null - si 0 => false, si 1 => true, si plus de 1 => int

        // Setter de espece
        public function setEspece(string $espece){
            if(in_array($espece, self::ESPECE_CHOICE)){
                $this->espece = $espece;
            }else{
                throw new Exception("Tu fais quoi là!",334);
            }
        }

}