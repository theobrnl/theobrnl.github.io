<?php
define("ACCUEIL", "accueil");
define("LIVRE", "livre");
define("RESEAUX_SOCIAUX", "reseaux-sociaux");

function competences()
{
    return [
        [
            "skills" => "Communication",
            "level" => 90,
        ],
        [
            "skills" => "Créativité",
            "level" => 82,
        ],
        [
            "skills" => "Organisation",
            "level" => 75,
        ],
        [
            "skills" => "Direction",
            "level" => 70,
        ],
        [
            "skills" => "Joueur d'équipe",
            "level" => 55,
        ],
    ];
}

function educations()
{
    return [
        [
            "grade" => "Ecole maternelle et primaire",
            "period" => "2008-2017",
            "message" => "Mon école maternelle et primaire était l'école Beauvallon.
                      Elle est située à Saint-Héand. C'est une école publique.
                      Ce sera la dernière école publique dans laquelle j'aurais étudié jusqu'à présent.",
        ],
        [
            "grade" => "Collège",
            "period" => "2017-2021",
            "message" => "Mon collège était le collège Joseph Collard. Il est situé à Saint-Héand.
                     J'y ai obtenu le brevet avec mention très bien. Mes matières préférées les maths et la physique."
        ],
        [
            "grade" => "Lycée",
            "period" => "2021-2024",
            "message" => "Mon lycée est le lycée Saint-Paul, il est situé à Saint-Etienne.
                     A la fin de ma seconde, j'ai choisi 3 spécialités qui sont:
                     Maths, Physique et NSI (numérique et sciences informatiques)"
        ],
    ];
}

function experiences()
{
    return [
        [
            "jobtitle" => "Vendeur",
            "period" => "2012-2013",
            "company" => "Auchan",
            "message" => "J'ai été vendeur à Auchan afin de gagner de l'argent pour financer mes études. C'était un petit
        travail qui me plaisait bien. J'ai bien aimé le rapport que l'on a avec les clients.",
        ],
        [
            "jobtitle" => "Stagiaire",
            "period" => "2014-2015",
            "company" => "Webqam",
            "message" => "J'ai été stagiaire dans l'entreprise webqam. Cet expérience m'a permis de connaitre le métier
                    de développeur web. Le métier me plait c'est donc une expérience réussie.",
        ],
    ];
}


function logiciels()
{
    return [
        [
            "firmware" => "Photoshop",
            "level" => 87,
        ],
        [
            "firmware" => "Illustrateur",
            "level" => 81,
        ],
        [
            "firmware" => "Indesign",
            "level" => 74,
        ],
        [
            "firmware" => "HTML 5",
            "level" => 68,
        ],
        [
            "firmware" => "CSS",
            "level" => 58,
        ],
    ];
}

function contacts()
{
    return [
        [
            "images" => "images/logo-mail.svg",
            "alt" => "Mail:",
            "data" => "mailto:theobrunel2006@gmail.fr",
            "target" => "_blank",
            "text" => "theobrunel2006@gmail.fr",
        ],
        [
            "images" => "images/logo-telephone.svg",
            "alt" => "Téléphone:",
            "data" => "tel:(+33)(767882262)",
            "target" => "_blank",
            "text" => "07.67.88.22.62",
        ],
        [
            "images" => "images/logo-localisation.svg",
            "alt" => "Localisation:",
            "data" => "https://goo.gl/maps/Wjy1yX8AuKNWvSgQA",
            "target" => "_blank",
            "text" => "Saint-Etienne",
        ],
        [
            "images" => "images/logo-internet.svg",
            "alt" => "Internet:",
            "data" => "https://www.webqam.fr/",
            "target" => "_blank",
            "text" => "www.webqam.fr",
        ],
    ];
}

function livredor()
{
    return [
        [
            "demandes" => "Prise de contact",
            "messages" => "Quand êtes-vous disponible pour un entretien téléphonique ?
            Notre entreprise est ouverte du lundi au vendredi, de 9h à 18h. Merci, bonne journée",
        ],
        [
            "demandes" => "Demande d'entretien",
            "messages" => "Je souhaiterai vous rencontrer pour travailler dans notre entreprise.",
        ],
        [
            "demandes" => "Renseignements",
            "messages" => "Pouvez-vous me préciser par mail vos compétences concernant PHP. Merci de l'envoyer sous
            les 48 heures.",
        ],
    ];
}

function reseaux()
{
    return [
        [
            "images" => "images/logo-insta.svg",
            "alt" => "Instagram",
            "text" => "theooo.brubru",
        ],
        [
            "images" => "images/logo-snap.svg",
            "alt" => "Snapchat",
            "text" => "theoo.brnl",
        ],
    ];
}
