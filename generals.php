<?php
$len = $_POST['language'];
$softskills = [
  'english' => [
    ['Communication', 'fa-comment-o'],
    ['Critical Thinking', 'fa-search'],
    ['Leadership', 'fa-graduation-cap'],
    ['Positive Attitude', 'fa-plus-circle'],
    ['Teamwork', 'fa-users'],
    ['Work Ethic', 'fa-balance-scale']
  ],
  'spanish' => [
    ['Comunicación', 'fa-comment-o'],
    ['Pensamiento critico', 'fa-search'],
    ['Liderazgo', 'fa-graduation-cap'],
    ['Actitud Positiva', 'fa-plus-circle'],
    ['Trabajo en Equipo', 'fa-users'],
    ['Trabajo Ético', 'fa-balance-scale']
  ],
  'german' => [
    ['Kommunikationsfähigkeit', 'fa-comment-o'],
    ['Kritikfähigkeit', 'fa-search'],
    ['Durchsetzungsfähigkeit', 'fa-graduation-cap'],
    ['Engagement', 'fa-plus-circle'],
    ['Teamfähigkeit', 'fa-users'],
    ['Gewissenhaftigkeit', 'fa-balance-scale']
  ]
];
$muy_bueno = 'Muy Bueno';
$bueno = 'Bueno';
$conocimientos_basicos = 'Conocimientos Básicos';
$very_good = 'Very Good';
$good = 'Good';
$basic_knowledge = 'Basic Knowledge';
$sehr_gut = 'Sehr gut';
$gut = 'Gut';
$grundkenntnis = 'Grundkenntnis';
$skills = [
  'english' => [
    [
      'name' => 'Office Software',
      'icon' => 'fas fa-keyboard',
      'level_name' => $very_good,
      'level' => 84,
      'skills' => [
        [
          'name' => 'Microsoft Office',
          'icon' => 'fa fa-windows',
          'level_name' => $very_good,
          'level' => 90,
        ],
        [
          'name' => 'Open Office',
          'icon' => 'fa-fw',
          'level_name' => $very_good,
          'level' => 90,
        ],
        [
          'name' => 'Latex',
          'icon' => 'fa-fw',
          'level_name' => $very_good,
          'level' => 75,
        ],
        [
          'name' => 'Photoshop',
          'icon' => 'fa-fw',
          'level_name' => $good,
          'level' => 65,
        ]
      ]
    ],
    [
      'name' => 'Program Languages',
      'icon' => 'fa fa-code',
      'level_name' => $very_good,
      'level' => 75,
      'skills' => [
        [
          'name' => 'HTMLe',
          'icon' => 'fa fa-html5',
          'level_name' => $very_good,
          'level' => 90,
        ],
        [
          'name' => 'Javascript',
          'icon' => 'fa-fw',
          'level_name' => $very_good,
          'level' => 80,
        ],
        [
          'name' => 'PHP',
          'icon' => 'fa fa-server',
          'level_name' => $very_good,
          'level' => 80,
        ],
        [
          'name' => 'Matlab',
          'icon' => 'fa fa-fw',
          'level_name' => $very_good,
          'level' => 75,
        ],
        [
          'name' => 'Wolfram Mathematica',
          'icon' => 'fa fa-fw',
          'level_name' => $very_good,
          'level' => 75,
        ],
        [
          'name' => 'Typo3',
          'icon' => 'fa fa-fw',
          'level_name' => $good,
          'level' => 60,
        ],
        [
          'name' => 'C',
          'icon' => 'fa fa-fw',
          'level_name' => $good,
          'level' => 50,
        ],
        [
          'name' => 'Fortran',
          'icon' => 'fa fa-fw',
          'level_name' => $basic_knowledge,
          'level' => 40,
        ],
        [
          'name' => 'Pyton',
          'icon' => 'fa fa-fw',
          'level_name' => $basic_knowledge,
          'level' => 40,
        ]
      ]
    ],
    [
      'name' => 'CAD-CAE Software',
      'icon' => 'fa fa-code',
      'level_name' => $good,
      'level' => 60,
      'skills' => [
        [
          'name' => 'Siemens NX',
          'icon' => 'fa-fw',
          'level_name' => $basic_knowledge,
          'level' => 40,
        ],
        [
          'name' => 'SolidWorks',
          'icon' => 'fa-fw',
          'level_name' => $good,
          'level' => 50,
        ],
        [
          'name' => 'FreeCAD',
          'icon' => 'fa-fw',
          'level_name' => $good,
          'level' => 50,
        ],
        [
          'name' => 'OpenSCAD',
          'icon' => 'fa fa-fw',
          'level_name' => $very_good,
          'level' => 85,
        ],
        [
          'name' => 'ANSYS',
          'icon' => 'fa fa-fw',
          'level_name' => $basic_knowledge,
          'level' => 35,
        ]
      ]
    ],
    [
      'name' => 'Microcontroller',
      'icon' => 'fa fa-microchip',
      'level_name' => $basic_knowledge,
      'level' => 40,
      'skills' => [
        [
          'name' => 'Arduino',
          'icon' => 'fa-fw',
          'level_name' => $basic_knowledge,
          'level' => 45,
        ],
        [
          'name' => 'ESP32',
          'icon' => 'fa-fw',
          'level_name' => $basic_knowledge,
          'level' => 40,
        ]
      ]
    ]
  ],
  'spanish' => [
    [
      'name' => 'Software de oficina',
      'icon' => 'fas fa-keyboard',
      'level_name' => $muy_bueno,
      'level' => 84,
      'skills' => [
        [
          'name' => 'Microsoft Office',
          'icon' => 'fa fa-windows',
          'level_name' => $muy_bueno,
          'level' => 90,
        ],
        [
          'name' => 'Open Office',
          'icon' => 'fa-fw',
          'level_name' => $muy_bueno,
          'level' => 90,
        ],
        [
          'name' => 'Latex',
          'icon' => 'fa-fw',
          'level_name' => $muy_bueno,
          'level' => 75,
        ],
        [
          'name' => 'Photoshop',
          'icon' => 'fa-fw',
          'level_name' => $bueno,
          'level' => 65,
        ]
      ]
    ],
    [
      'name' => 'Lenguajes de Programación',
      'icon' => 'fa fa-code',
      'level_name' => $muy_bueno,
      'level' => 75,
      'skills' => [
        [
          'name' => 'HTMLe',
          'icon' => 'fa fa-html5',
          'level_name' => $muy_bueno,
          'level' => 90,
        ],
        [
          'name' => 'Javascript',
          'icon' => 'fa-fw',
          'level_name' => $muy_bueno,
          'level' => 80,
        ],
        [
          'name' => 'PHP',
          'icon' => 'fa fa-server',
          'level_name' => $muy_bueno,
          'level' => 80,
        ],
        [
          'name' => 'Matlab',
          'icon' => 'fa fa-fw',
          'level_name' => $muy_bueno,
          'level' => 75,
        ],
        [
          'name' => 'Wolfram Mathematica',
          'icon' => 'fa fa-fw',
          'level_name' => $muy_bueno,
          'level' => 75,
        ],
        [
          'name' => 'Typo3',
          'icon' => 'fa fa-fw',
          'level_name' => $bueno,
          'level' => 60,
        ],
        [
          'name' => 'C',
          'icon' => 'fa fa-fw',
          'level_name' => $bueno,
          'level' => 50,
        ],
        [
          'name' => 'Fortran',
          'icon' => 'fa fa-fw',
          'level_name' => $conocimientos_basicos,
          'level' => 40,
        ],
        [
          'name' => 'Pyton',
          'icon' => 'fa fa-fw',
          'level_name' => $conocimientos_basicos,
          'level' => 40,
        ]
      ]
    ],
    [
      'name' => ' Software CAD-CAE',
      'icon' => 'fa fa-code',
      'level_name' => $bueno,
      'level' => 60,
      'skills' => [
        [
          'name' => 'Siemens NX',
          'icon' => 'fa-fw',
          'level_name' => $conocimientos_basicos,
          'level' => 40,
        ],
        [
          'name' => 'SolidWorks',
          'icon' => 'fa-fw',
          'level_name' => $bueno,
          'level' => 50,
        ],
        [
          'name' => 'FreeCAD',
          'icon' => 'fa-fw',
          'level_name' => $bueno,
          'level' => 50,
        ],
        [
          'name' => 'OpenSCAD',
          'icon' => 'fa fa-fw',
          'level_name' => $muy_bueno,
          'level' => 85,
        ],
        [
          'name' => 'ANSYS',
          'icon' => 'fa fa-fw',
          'level_name' => $conocimientos_basicos,
          'level' => 35,
        ]
      ]
    ],
    [
      'name' => 'Microcontroladores',
      'icon' => 'fa fa-microchip',
      'level_name' => $conocimientos_basicos,
      'level' => 40,
      'skills' => [
        [
          'name' => 'Arduino',
          'icon' => 'fa-fw',
          'level_name' => $conocimientos_basicos,
          'level' => 45,
        ],
        [
          'name' => 'ESP32',
          'icon' => 'fa-fw',
          'level_name' => $conocimientos_basicos,
          'level' => 40,
        ]
      ]
    ]
  ],
  'german' => [
    [
      'name' => 'Bürosoftware',
      'icon' => 'fas fa-keyboard',
      'level_name' => $sehr_gut,
      'level' => 84,
      'skills' => [
        [
          'name' => 'Microsoft Office',
          'icon' => 'fa fa-windows',
          'level_name' => $sehr_gut,
          'level' => 90,
        ],
        [
          'name' => 'Open Office',
          'icon' => 'fa-fw',
          'level_name' => $sehr_gut,
          'level' => 90,
        ],
        [
          'name' => 'Latex',
          'icon' => 'fa-fw',
          'level_name' => $sehr_gut,
          'level' => 75,
        ],
        [
          'name' => 'Photoshop',
          'icon' => 'fa-fw',
          'level_name' => $gut,
          'level' => 65,
        ]
      ]
    ],
    [
      'name' => 'Programmieren Sprache',
      'icon' => 'fa fa-code',
      'level_name' => $sehr_gut,
      'level' => 75,
      'skills' => [
        [
          'name' => 'HTMLe',
          'icon' => 'fa fa-html5',
          'level_name' => $sehr_gut,
          'level' => 90,
        ],
        [
          'name' => 'Javascript',
          'icon' => 'fa-fw',
          'level_name' => $sehr_gut,
          'level' => 80,
        ],
        [
          'name' => 'PHP',
          'icon' => 'fa fa-server',
          'level_name' => $sehr_gut,
          'level' => 80,
        ],
        [
          'name' => 'Matlab',
          'icon' => 'fa fa-fw',
          'level_name' => $sehr_gut,
          'level' => 75,
        ],
        [
          'name' => 'Wolfram Mathematica',
          'icon' => 'fa fa-fw',
          'level_name' => $sehr_gut,
          'level' => 75,
        ],
        [
          'name' => 'Typo3',
          'icon' => 'fa fa-fw',
          'level_name' => $gut,
          'level' => 60,
        ],
        [
          'name' => 'C',
          'icon' => 'fa fa-fw',
          'level_name' => $gut,
          'level' => 50,
        ],
        [
          'name' => 'Fortran',
          'icon' => 'fa fa-fw',
          'level_name' => $grundkenntnis,
          'level' => 40,
        ],
        [
          'name' => 'Pyton',
          'icon' => 'fa fa-fw',
          'level_name' => $grundkenntnis,
          'level' => 40,
        ]
      ]
    ],
    [
      'name' => 'CAD-CAE Software',
      'icon' => 'fa fa-code',
      'level_name' => $gut,
      'level' => 60,
      'skills' => [
        [
          'name' => 'Siemens NX',
          'icon' => 'fa-fw',
          'level_name' => $grundkenntnis,
          'level' => 40,
        ],
        [
          'name' => 'SolidWorks',
          'icon' => 'fa-fw',
          'level_name' => $gut,
          'level' => 50,
        ],
        [
          'name' => 'FreeCAD',
          'icon' => 'fa-fw',
          'level_name' => $gut,
          'level' => 50,
        ],
        [
          'name' => 'OpenSCAD',
          'icon' => 'fa fa-fw',
          'level_name' => $sehr_gut,
          'level' => 85,
        ],
        [
          'name' => 'ANSYS',
          'icon' => 'fa fa-fw',
          'level_name' => $grundkenntnis,
          'level' => 35,
        ]
      ]
    ],
    [
      'name' => 'Mikrocontroller',
      'icon' => 'fa fa-microchip',
      'level_name' => $grundkenntnis,
      'level' => 40,
      'skills' => [
        [
          'name' => 'Arduino',
          'icon' => 'fa-fw',
          'level_name' => $grundkenntnis,
          'level' => 45,
        ],
        [
          'name' => 'ESP32',
          'icon' => 'fa-fw',
          'level_name' => $grundkenntnis,
          'level' => 40,
        ]
      ]
    ]
  ]
];

$languages = [
  'english' => [
    [
      'name' => 'Spanish',
      'level_name' => 'Native',
      'level' => '100',
      'id' => 'spanish',
    ], [
      'name' => 'English',
      'level_name' => 'B2',
      'level' => '60',
      'id' => 'english',
    ],
    [
      'name' => 'German',
      'level_name' => 'B2',
      'level' => '70',
      'id' => 'german',
    ]
  ],
  'spanish' => [
    [
      'name' => 'Español',
      'level_name' => 'Native',
      'level' => '100',
      'id' => 'spanish',
    ], [
      'name' => 'Inglés',
      'level_name' => 'B2',
      'level' => '60',
      'id' => 'english',
    ],
    [
      'name' => 'Alemán',
      'level_name' => 'B2',
      'level' => '70',
      'id' => 'german',
    ]
  ],
  'german' => [
    [
      'name' => 'Spanisch',
      'level_name' => 'Muttersprache',
      'level' => '100',
      'id' => 'spanish',
    ], [
      'name' => 'Englisch',
      'level_name' => 'B2',
      'level' => '60',
      'id' => 'english',
    ],
    [
      'name' => 'Deutsch',
      'level_name' => 'B2',
      'level' => '70',
      'id' => 'german',
    ]
  ],
];
$hobbies = [
  'english' => [
    [
      'name' => 'Radio Control Aeromodelling',
      'icon' => 'img/paperAirplane.jpg',
      'comment' => 'I have been practicing it since I was 16 years old and it is the passion that I have built for the longest.'
    ],
    [
      'name' => 'Alpinism',
      'icon' => 'img/climber-silhouette.png',
      'comment' => 'Contemplating the greatness of nature is something that always inclines me to humility and respect.'
    ],
    [
      'name' => 'Glider flight',
      'icon' => 'img/62835.png',
      'comment' => 'I am currently in my training as a glider pilot. Flying is part of my passion.'
    ],
    [
      'name' => 'IoT',
      'icon' => 'img/iot.png',
      'comment' => 'The technology behind the "Internet of Things" is something that captivates me and motivates me to learn.'
    ],
  ],
  'spanish' => [
    [
      'name' => 'Aeromodelismo',
      'icon' => 'img/paperAirplane.jpg',
      'comment' => 'Lo practico desde los 16 años y es la pasión que he cultivado por más tiempo'
    ],
    [
      'name' => 'Alpinismo',
      'icon' => 'img/climber-silhouette.png',
      'comment' => 'Contemplar la grandeza de la naturaleza es algo que siempre me inclina a la humildad y el respeto.'
    ],
    [
      'name' => 'Vuelo en Planeador',
      'icon' => 'img/62835.png',
      'comment' => 'Actualmente me encuentro en mi entrenamiento como piloto de planeador. Volar es parte de mi pasión .'
    ],
    [
      'name' => 'IoT',
      'icon' => 'img/iot.png',
      'comment' => 'La tecnologia detrás del "Internet de las Cosas" (Internet of Things), es algo que me cautiva y motiva a aprender.'
    ],

  ],
  'german' => [
    [
      'name' => 'Luftfahrzeug Modellbauen',
      'icon' => 'img/paperAirplane.jpg',
      'comment' => 'Ich praktiziere es seit ich 16 Jahre alt war und es ist die Leidenschaft, die ich am längsten aufgebaut habe.'
    ],
    [
      'name' => 'Bergsteigen und Wandern',
      'icon' => 'img/climber-silhouette.png',
      'comment' => 'Das Betrachten der Größe der Natur ist etwas, das mich immer zu Demut und Respekt neigt.'
    ],
    [
      'name' => 'Segelflug',
      'icon' => 'img/62835.png',
      'comment' => 'Ich bin derzeit in meiner Ausbildung zum Segelflugzeugpiloten. Fliegen ist Teil meiner Leidenschaft.'
    ],
    [
      'name' => 'IoT',
      'icon' => 'img/iot.png',
      'comment' => 'Die Technologie hinter dem "Internet der Dinge"(Intenet of Things) fasziniert mich und motiviert mich zum Lernen.'
    ],
  ],
];
$title = [
  'english' => ['title' => 'Web Development and Engineer', 'h2' => 'Generals', 'skills' => 'Skills', 'languages' => 'Languages', 'soft_skills' => 'Soft Skills'],
  'spanish' => ['title' => 'Ingeniero y Desarrollador Web', 'h2' => 'Generales', 'skills' => 'Habilidades', 'languages' => 'Idiomas', 'soft_skills' => 'Habilidades Sociales'],
  'german' => ['title' => 'Web Entwickler und Ingenieur', 'h2' => 'Allgemain', 'skills' => 'Fähigkeiten', 'languages' => 'Sprachkenntnisse', 'soft_skills' => 'Soft Skills'],
];
// $Json = json_encode($title);
// echo $Json;
?>
<div class="target">
  <h2 class="w3-text-grey w3-padding-16"></h2>
  <div class="generals-container" id="generals">

    <div class="w3-display-container photo">
      <img src="img/d.jpg" alt="Alberto's CV Photo">
    </div>
    <div class="w3-container">
      <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $title[$len]['title'] ?></p>
      <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Frankfurt am Main, Germany</p>
      <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><a href="mailto:betobetok@gmail.com">betobetok@gmail.com</a></p>
      <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><a href="tel:+491775834192">0177 58 34 192</a></p>
    </div>
  </div>
</div>
<hr>
<!--Skills -->
<div class="target">
  <h3 class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i><?= $title[$len]['skills'] ?></b></h3>
  <div class="generals-container" id="skills">
    <?php foreach ($skills[$len] as $skill) : ?>
      <p><i class="<?= $skill['icon'] ?> fa-fw w3-margin-right w3-text-teal"></i><?= $skill['name'] ?></p>
      <div class="w3-light-grey w3-round-xlarge w3-small">
        <div id="<?= str_replace(' ', '-', $skill['name']) ?>" onclick="ver(this.id)" class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?= $skill['level'] ?>%; display: block;"><?= $skill['level_name'] ?></div>
        <div id="<?= str_replace(' ', '-', $skill['name']) . '1' ?>" onclick="ocultar('<?= str_replace(' ', '-', $skill['name']) ?>')" style="display: none;">
          <?php foreach ($skill['skills'] as $sub_skill) : ?>
            <p><i class="<?= $sub_skill['icon'] ?> w3-margin-right w3-text-teal"></i><?= $sub_skill['name'] ?></p>
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?= $sub_skill['level'] ?>%"><?= $sub_skill['level_name'] ?></div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<hr>
<!--Languages -->
<div class="target">
  <h3 class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i><?= $title[$len]['languages'] ?></b></h3>
  <div class="generals-container" id="langage">
    <?php foreach ($languages[$len] as $language) : ?>
      <p id="<?= $language['id'] ?>" onclick="traslate()" class="<?= $len === $language['id'] ? 'activeL' : '' ?>"><i class="material-icons fa-fw w3-margin-right w3-text-teal">translate</i><?= $language['name'] ?></p>
      <div class="w3-light-grey w3-round-xlarge">
        <div onclick="traslate()" class="w3-round-xlarge w3-center w3-teal" style="height:24px;width:<?= $language['level'] ?>%">
          <?= $language['level_name'] ?></div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<hr>
<!--Soft Skills -->
<div class="target">
  <h3 class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i><?= $title[$len]['soft_skills'] ?></b></h3>
  <div class="generals-container" id="soft">
    <?php foreach ($softskills[$len] as $skill) : ?>
      <p><i class="fa <?= $skill[1] ?> fa-fw w3-margin-right w3-text-teal"></i><?= $skill[0] ?></p>
    <?php endforeach ?>
  </div>
</div>
<hr>
<!-- Hobbies -->
<div class="target">
  <h3 class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Hobbies</b></h3>
  <div class="generals-container" id="hobbies">
    <?php foreach ($hobbies[$len] as $hobby) : ?>
      <img src="<?= $hobby['icon'] ?>" alt="icon of <?= $hobby['name'] ?>"><h4><?= $hobby['name'] ?></h4>
      <div>
        <p class="hidden"><?= $hobby['comment'] ?></p>
      </div>
    <?php endforeach ?>
  </div>
</div>
<hr>
