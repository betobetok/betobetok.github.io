<?php
$len = $_POST['language'];
$title = [
  'english' => ['education' => 'Education', 'work' => 'Work Experience', 'further_education' => 'Further Education'],
  'spanish' => ['education' => 'Educación', 'work' => 'Experiencia Profesional', 'further_education' => 'Capacitación'],
  'german' => ['education' => 'Studium und Ausbildung', 'work' => 'Berufserfahrung', 'further_education' => 'Weiterbildungen'],
];
$workExperience = [
  'english' => [
    [
      'title' => 'Requirements Management Engineer',
      'firma' => 'Deutsche Flugsicherung GmbH',
      'link' => 'https://www.dfs.de',
      'initDate' => 'May 2019',
      'endDate' => 'Feb 2020',
      'activities' => [
        'Description and analysis of the requirements for the future <a class="tooltip">ATM<span class="tooltiptext w3-round-small">(Air Trafic Management)</span></a>-System.',
        'Analysis of specifications and user requirements.',
        'Build the business process model and maintain the database in the system.',
      ],
    ],
    [
      'title' => 'Maintenance of technical aircraft documentation',
      'firma' => 'Lufthansa Technik - Aviation Power',
      'link' => 'https://www.aviationpower.de/',
      'initDate' => 'Aug 2018',
      'endDate' => 'May 2019',
      'activities' => [
        'Digitalization and control of Aircraft documentation.',
      ],
    ],
    [
      'title' => 'Quality Control Manager',
      'firma' => 'MC Jets',
      'link' => 'https://redwings.aero/',
      'initDate' => 'Jan 2015',
      'endDate' => 'Mar 2016',
      'activities' => [
        'Supervise the quality control of the maintenance process.',
        'Setup of training programs for technical staff.',
        'Audit the maintenance process to obtain the permission of the <a class="tooltip">FAA<span class="tooltiptext w3-round-small">(Federal Aviation Administration in USA)</span></a>.'
      ],
    ],
    [
      'title' => 'Research Professor',
      'firma' => 'Universidad Aeronáutica en Querétaro',
      'link' => 'https://www.unaq.edu.mx/',
      'initDate' => 'Sep 2011',
      'endDate' => 'Dec 2014',
      'activities' => [
        'Teach in bachelor grade.',
        'Give technical trainings to technical aviation personnel.',
        'Project management and collaborating in innovation and development projects between <a class="tooltip">private sector <span class="tooltiptext w3-round-small">(aerospace
          industry)</span></a> and <a class="tooltip">state agency <span class="tooltiptext w3-round-small">(Nacional Center of Science and Technology, CONACYT)</span></a>.',
        'Leader of the Thermodynamics Department and the Model and Prototyping Workshop.',
      ],
    ],
    [
      'title' => 'Vertical Market Manager',
      'firma' => 'Siemens Global Services (Mexico)',
      'link' => '',
      'initDate' => 'Feb 2010',
      'endDate' => 'Aug 2011',
      'activities' => [
        'Customer care for aerospace clients in Mexico.',
        'Market and strategies analysis.',
      ],
    ],
    [
      'title' => 'Chief Executive Officer',
      'firma' => 'Mitra Energía',
      'link' => '',
      'initDate' => 'Feb 2008',
      'endDate' => 'Jul 2010',
      'activities' => [
        'Set up and spin off of the company.',
        'Management of Relationships with clients and providers.',
        'Employer and supervisor of three technical employees.',
      ],
    ],
    [
      'title' => 'Aircraft Maintenance Instructor',
      'firma' => 'Centro de Capacitación Alas de América (Aeromexico)',
      'link' => '',
      'initDate' => 'Mar 2004',
      'endDate' => 'Sep 2006',
      'activities' => [
        'Teach to maintenance personnel and pilots of Aeromexico.',
        'Develop training manuals on maintenance and didactic materials',
      ],
    ],
    [
      'title' => 'Certification Engineer for Avionics Workshop',
      'firma' => 'Aeromexico Maintenance',
      'link' => '',
      'initDate' => 'Mar 2004',
      'endDate' => 'Sep 2006',
      'activities' => [
        'Certification of the workbenches and tooling for <a class="tooltip">FAA<span class="tooltiptext w3-round-small">(Federal Aviation Administration in USA)</span></a>.',
        'Design and manufacture workbenches and tools to maintain the capabilities of the workshop.',
      ],
    ],
  ],
  'spanish' => [
    [
      'title' => 'Ingeniero de administración de requerimientos',
      'firma' => 'Deutsche Flugsicherung GmbH',
      'link' => 'https://www.dfs.de',
      'initDate' => 'May 2019',
      'endDate' => 'Feb 2020',
      'activities' => [
        'Descripción y análisis de requerimiento para el sistema futuro de <a class="tooltip">ATM<span class="tooltiptext w3-round-small">(Air Trafic Management)</span></a>.',
        'Análisis de especificaciones y requerimientos de usuario.',
        'Construcción del modelo de negocio y mantenimiento del sistema de base de datos.',
      ],
    ],
    [
      'title' => 'Mantenimiento de la documentación técnica aeronáutica',
      'firma' => 'Lufthansa Technik - Aviation Power',
      'link' => 'https://www.aviationpower.de/',
      'initDate' => 'Ago 2018',
      'endDate' => 'May 2019',
      'activities' => [
        'Digitalización y control de la documentación de las aeronaves.',
      ],
    ],
    [
      'title' => 'Gerente de control de calidad',
      'firma' => 'MC Jets',
      'link' => 'https://redwings.aero/',
      'initDate' => 'Ene 2015',
      'endDate' => 'Mar 2016',
      'activities' => [
        'Supervisión de los procesos de control de calidad.',
        'Creación y ajuste de los programas de capacitación del personal técnico.',
        'Dirección de las auditorías a los procesos de mantenimiento para obtener el permiso de la <a class="tooltip">FAA<span class="tooltiptext w3-round-small">(Federal Aviation Administration en EEUU)</span></a>.'
      ],
    ],
    [
      'title' => 'Profesor-Investigador',
      'firma' => 'Universidad Aeronáutica en Querétaro',
      'link' => 'https://www.unaq.edu.mx/',
      'initDate' => 'Sep 2011',
      'endDate' => 'Dic 2014',
      'activities' => [
        'Profesor para el grado universitario.',
        'Impartición de entrenamientos técnicos para personal aeronáutico.',
        'Administración de proyectos y colaboración en el desarrollo de proyectos de innovación entre el <a class="tooltip">sector privado<span class="tooltiptext w3-round-small">(Industría Aeronáutica)</span></a> y <a class="tooltip">agencias gubernamentales <span class="tooltiptext w3-round-small">(Consejo Nacional de Ciencia y Tecnología, CONACYT)</span></a>.',
        'Líder del departamento de Termodinámica y jefe del taller de Modelos y Prototipos.',
      ],
    ],
    [
      'title' => 'Gerente de Mercado Vertical',
      'firma' => 'Siemens Global Services (México)',
      'link' => '',
      'initDate' => 'Feb 2010',
      'endDate' => 'Ago 2011',
      'activities' => [
        'Atención a clientes del sector aeronáutico en México.',
        'Análisis de estrategia y mercado.',
      ],
    ],
    [
      'title' => 'Director general y Fundador',
      'firma' => 'Mitra Energía',
      'link' => '',
      'initDate' => 'Feb 2008',
      'endDate' => 'Jul 2010',
      'activities' => [
        'Creación y arranque de la empresa.',
        'Administración de la relación con clientes y proveedores.',
        'Empleador y supervisor de los empleados técnicos.',
      ],
    ],
    [
      'title' => 'Instructor de técnicos de mantenimiento aeronáutico',
      'firma' => 'Centro de Capacitación Alas de América (Aeromexico)',
      'link' => '',
      'initDate' => 'Mar 2004',
      'endDate' => 'Sep 2006',
      'activities' => [
        'Instrucción del personal técnico de mantenimiento de Aeromexico.',
        'Desarrollo de los manuales de entrenamiento y del material didáctico.',
      ],
    ],
    [
      'title' => 'Ingeniero de certificación para el taller de Aviónica.',
      'firma' => 'Aeromexico Mantenimiento',
      'link' => '',
      'initDate' => 'Mar 2004',
      'endDate' => 'Sep 2006',
      'activities' => [
        'Certificación de los bancos de prueba y herramientas ante la <a class="tooltip">FAA<span class="tooltiptext w3-round-small">(Federal Aviation Administration en EEUU)</span></a>.',
        'Diseño y manufactura de bancos de prueba y herramientas para mantener las capacidades del taller.',
      ],
    ],
  ],
  'german' => [
    [
      'title' => 'Ingenieur im Anforderungsmanagement',
      'firma' => 'Deutsche Flugsicherung GmbH',
      'link' => 'https://www.dfs.de',
      'initDate' => 'Mai 2019',
      'endDate' => 'Feb 2020',
      'activities' => [
        'Funktionalitäten des zukünftigen <a class="tooltip">ATM<span class="tooltiptext w3-round-small">(Air Trafic Management)</span></a>-Systems analysieren und beschreiben,',
        'Analyse von Vorgaben und Nutzeranforderungen,',
        'Requirements Analyse auf Basis von Prozess Modellen,',
        'Agile Requirements.',
      ],
    ],
    [
      'title' => 'Pflege der technischen Flugzeugdokumentation',
      'firma' => 'Lufthansa Technik - Aviation Power',
      'link' => 'https://www.aviationpower.de/',
      'initDate' => 'Aug 2018',
      'endDate' => 'Mai 2019',
      'activities' => [
        'Digitalisierung der Wartungslogs.',
      ],
    ],
    [
      'title' => 'Leiter der Qualitätskontrolle von Wartungsarbeiten',
      'firma' => 'MC Jets',
      'link' => 'https://redwings.aero/',
      'initDate' => 'Jan 2015',
      'endDate' => 'Mär 2016',
      'activities' => [
        'Entwicklung und Kontrolle von Wartungsplänen für Flugzeuge Ergebnis: Um mehr als 15% reduzierte Lieferzeit.',
        'Leitung der technischen Abteilung. Erhalt der Genehmigung der <a class="tooltip">FAA<span class="tooltiptext w3-round-small">(Federal Aviation Administration en USA)</span></a>. für die Wartungsprozesse (09.2016)',
        'Leitung der technischen Ausbildungsprogram.'
      ],
    ],
    [
      'title' => 'Dozent an der Hochschule für Luftfahrttechnik',
      'firma' => 'Universidad Aeronautica en Queretaro',
      'link' => 'https://www.unaq.edu.mx/',
      'initDate' => 'Sep 2011',
      'endDate' => 'Dic 2014',
      'activities' => [
        'Vorbereitung und Durchführung von Kursen für reguläre Studenten und des technischen Ausbildungsprogrammes von TECHOPS Aeromexico - Delta Joint-Venture: Ausbildung von mehr als 600 Studenten und Technikern',
        'Leiter der Thermodynamikabteilung sowie der Modell- und Prototypenwerkstatt: Erfolgreicher Abschluss von sieben Forschungsprojekten.',
      ],
    ],
    [
      'title' => 'Vertical Manager',
      'firma' => 'Siemens Global Services (Mexico)',
      'link' => 'https://new.siemens.com/mx/es.html',
      'initDate' => 'Feb 2010',
      'endDate' => 'Aug 2011',
      'activities' => [
        'Betreuung von Kunden aus der Luft- und Raumfahrtindustrie.',
        'Markt- und Strategieanalyse.',
      ],
    ],
    [
      'title' => 'Chief Executive Officer',
      'firma' => 'Mitra Energia',
      'link' => '',
      'initDate' => 'Feb 2008',
      'endDate' => 'Jul 2010',
      'activities' => [
        'Aufbau des Unternehmens und Management der Kundenbeziehungen.',
      ],
    ],
    [
      'title' => 'Ausbilder Flugzeugwartung',
      'firma' => 'Centro de Capacitacion Alas de America (Aeromexico)',
      'link' => 'https://aeromexicoformacion.com/',
      'initDate' => 'Mar 2004',
      'endDate' => 'Sep 2006',
      'activities' => [
        'Vorbereitung und Durchführung von Kursen für das Flugzeugwartungspersonal und Piloten von Aeromexico: Ausbildung von mehr als 400 Technikern,',
        'Verfassen von Schulungsunterlagen und',
        'Aufbereitung von didaktischen Materialien zur Flugzeugswartung',
      ],
    ],
    [
      'title' => 'Zertifizierungsingenieur für die Avionik Werkstatt von Aeromexico',
      'firma' => 'Aeromexico Mantenimiento',
      'link' => 'https://www.aeromexico.com/es-mx/vuela-con-nosotros/alianza-delta-air-lines',
      'initDate' => 'Mär 2004',
      'endDate' => 'Sep 2006',
      'activities' => [
        'Zertifizierung der Prüfstände und Werkzeuge für die <a class="tooltip">FAA<span class="tooltiptext w3-round-small">(Federal Aviation Administration en USA)</span></a>: Mehr als 30 Prüfstände und Werkzeuge,',
        'Design und Herstellung von Prüfständen und Werkzeugen, zur
        Inbetriebhaltung der Werkstatt.',
      ],
    ],
  ],
];
$educations = [
  'english' => [
    [
      'title' => 'Web-Developer mit Webmasters-Zertifizierung',
      'institution' => 'WBS Training',
      'link' => 'https://www.wbstraining.de/weiterbildung-web-developer-webmasters-zertifizierung/',
      'dateStart' => '09/2020',
      'dateEnd' => '04/2021',
      'activities' => ['Fields of study: Javascript, PHP, HTML-5, CSS, Typo3.', 'Final Project: Web Aplication with Database conection (In Progress).']
    ],
    [
      'title' => 'Master of Aerospace Engineering',
      'institution' => 'Universidad Aeronautica en Queretaro',
      'link' => 'https://www.unaq.edu.mx/oferta-educativa/posgrado/mia/',
      'dateStart' => '09/2013',
      'dateEnd' => '08/2017',
      'activities' => [
        'Major fields of study: Thermo and Aerodynamics.',
        'Thesis: Experimental methodology to identify the dynamic model of a glider with CG position control.'
      ]
    ],
    [
      'title' => 'Master of Sciences in Energetic Systems',
      'institution' => 'Instituto Politecnico Nacional',
      'link' => 'https://www.ipn.mx/oferta-educativa/posgrado/ver-carrera.html?lg=es&id=132',
      'dateStart' => '09/2006',
      'dateEnd' => '02/2008',
      'activities' => [
        'Major fields of study: Thermodynamics.',
        'Thesis: Correlations for calculating heat transfer in smooth tube-banks.'
      ]
    ],
    [
      'title' => 'Aeronautical Engineering (Germany validation)',
      'institution' => 'Instituto Politecnico Nacional',
      'link' => 'https://www.ipn.mx/oferta-educativa/educacion-superior/ver-carrera.html?lg=en&id=1',
      'dateStart' => '09/1998',
      'dateEnd' => '02/2002',
      'activities' => [
        'Major fields of study: Aircraft Maintenance and Mechanical Design',
        'Thesis: Design and construction of a Stirling engine.'
      ]
    ],
  ],
  'spanish' => [
    [
      'title' => 'Desarrollador Web con certificación Webmaster',
      'institution' => 'WBS Training',
      'link' => 'https://www.wbstraining.de/weiterbildung-web-developer-webmasters-zertifizierung/',
      'dateStart' => '09/2020',
      'dateEnd' => '04/2021',
      'activities' => [
        'Areas de estudio: Javascript, PHP, HTML-5, CSS, Typo3.',
        'Proyecto final: Aplicación Web con conexión a base de datos (En Progreso).'
      ]
    ],
    [
      'title' => 'Maestría en Ingeniería Aeroespacial',
      'institution' => 'Universidad Aeronáutica en Querétaro',
      'link' => 'https://www.unaq.edu.mx/oferta-educativa/posgrado/mia/',
      'dateStart' => '09/2013',
      'dateEnd' => '08/2017',
      'activities' => [
        'Principal área de estudios: Termodinámica y Aerodinámica.',
        'Tésis: Metodología experimental para la identificación del modelo dinámico de un planeador con control de la posición del centro de gravedad.'
      ]
    ],
    [
      'title' => 'Maestría en Sistemas Energéticos',
      'institution' => 'Instituto Politécnico Nacional',
      'link' => 'https://www.ipn.mx/oferta-educativa/posgrado/ver-carrera.html?lg=es&id=132',
      'dateStart' => '09/2006',
      'dateEnd' => '02/2008',
      'activities' => [
        'Principal área de estudios: Termodinámica.',
        'Tesis: Correlaciones para el cálculo de las transferencias de calor en bancos de tubos lisos.'
      ]
    ],
    [
      'title' => 'Ingeniería Aeronáutica (Validación en Alemania)',
      'institution' => 'Instituto Politécnico Nacional',
      'link' => 'https://www.ipn.mx/oferta-educativa/educacion-superior/ver-carrera.html?lg=en&id=1',
      'dateStart' => '09/1998',
      'dateEnd' => '02/2002',
      'activities' => [
        'Principal área de estudios: Mantenimiento Aeronáutico y Diseño Mecánico',
        'Tesis: Diseño y construcción de un motor Stirling.'
      ]
    ],
  ],
  'german' => [
    [
      'title' => 'Web-​Developer mit Webmasters-​Zertifizierung',
      'institution' => 'WBS Training',
      'link' => 'https://www.wbstraining.de/weiterbildung-web-developer-webmasters-zertifizierung/',
      'dateStart' => '09/2020',
      'dateEnd' => '04/2021',
      'activities' => [
        'Inhalte: Javascript, PHP, HTML-5, CSS, Typo3.',
        'Abschlussprojekt : Webanwendung mit Datenbankverbindung.(in Fortgang)'
      ]
    ],
    [
      'title' => 'Aufbaustudium: Master in Luft- und Raumfahrttechnik',
      'institution' => 'Hochschule für Luftfahrttechnik Querétaro (UNAQ)',
      'link' => 'https://www.unaq.edu.mx/oferta-educativa/posgrado/mia/',
      'dateStart' => '09/2013',
      'dateEnd' => '08/2017',
      'activities' => [
        'Studienschwerpunkte: Thermo- und Aerodynamik.',
        'Zusatzfach: Segelflugzeugdynamik',
        'Diplomarbeit: Identifikation des dynamischen Modells in einem Segelflugzeug mit CG-Positionssteuerung'
      ]
    ],
    [
      'title' => 'Aufbaustudium: Master in Science von Energiesysteme',
      'institution' => 'National Polytechnisch Institute (IPN)',
      'link' => 'https://www.ipn.mx/oferta-educativa/posgrado/ver-carrera.html?lg=es&id=132',
      'dateStart' => '09/2006',
      'dateEnd' => '02/2008',
      'activities' => [
        'Studienschwerpunkte: Synergie- und thermodynamische Optimierung',
        'Zusatzfach: Thermodynamischer Betrieb der Turbine',
        'Diplomarbeit: Charakterisierung der Wärmeübertragung in einer Reihe glatter Röhren'
      ]
    ],
    [
      'title' => 'Luftfahrtingenieur (Deutsche Anerkennung)',
      'institution' => 'National Polytechnisch Institute (IPN)',
      'link' => 'https://www.ipn.mx/oferta-educativa/educacion-superior/ver-carrera.html?lg=en&id=1',
      'dateStart' => '09/1998',
      'dateEnd' => '02/2002',
      'activities' => [
        'Studienschwerpunkte: Flugzeugsysteme, Tragwerk und Aerodynamische
        Konstruktion',
        'Zusatzfach: Umlaufmotoren und Wartungsprogramme',
        'Diplomarbeit: Design und Konstruktion eines Stirlingmotors'
      ]
    ],
  ],
];
$further_education = [
  'english' => [
    'technical_training' => [
      'title' => 'Technical Training',
      'areas' => [
        [
          'name' => 'Avionics',
          'id' => 'avionics',
          'courses' => [
            'Boeing 777-200/-300 Avionics/Airframe/Power Plant/Electrical Systems',
            'Line Maintenance of Electrical Systems of B-757 and B-767',
            'Line Maintenance of Electrical Systems of B-737-700',
          ],
        ],
        [
          'name' => 'Aircraft Maintenance',
          'id' => 'maintenace',
          'courses' => [
            'Initial Training Cessna 414',
            'Initial Training Embraer 145/135',
            'Initial Training ATA II Hawker 800',
            'Initial Training ATA II CRJ-200',
            'Initial Training Airbus A-320',
            'Initial Training ATA II Learjet',
            'Maintenance and repair of Sell Gales inserts',
          ],
        ],
        [
          'name' => 'Other Trainings',
          'id' => 'other',
          'courses' => [
            'ESCAM – EASA Legislations',
            'Aeronautic Legislations',
            'Humans Factor',
            'Initial Training for NDT Inspections',
            '<a class="w3-tooltip"><i></i><b>ETOPS</b><span class="w3-text w3-round-small">(Extended-range Twin-engine Operation Performance Standards)</span></a> for B-757 and B-767',
            'Landing Minimum CAT - II / III for B-757 and 767',
            'Instructor Initial Training',
          ],
        ],
      ],
    ],
    'programation_training' => [
      'title' => 'Programmation Training',
      'areas' => [
        [
          'name' => 'Web Programmation',
          'id' => 'web',
          'courses' => [
            'Diploma of PHP and mySQL - Development of dynamic applications',
            'Introduction to jQuery',
            'Building Interactive Prototypes using JavaScript',
          ],
        ],
        [
          'name' => 'Science Programmation',
          'id' => 'science',
          'courses' => [
            'Wolfram Mathematica for Science',
            'Matlab 4.x',
          ],
        ],
        [
          'name' => 'General',
          'id' => 'general',
          'courses' => [
            'Diploma in Design and Object Oriented Programming',
            'C language',
          ],
        ],
      ],
    ],
    'other_curses' => [
      'title' => 'Other Courses',
      'areas' => [
        [
          'name' => 'CAD-CAE',
          'id' => 'CAD-CAE',
          'courses' => [
            'Siemens NX 7.5',
            'SolidWorks',
            'Mechanical Desktop',
            'AutoCAD R12 Advanced',
          ],
        ],
        [
          'name' => 'Others',
          'id' => 'others',
          'courses' => [
            'Project Management by Siemens',
            'New Collaborations Model by Siemens',
            'Project Manager Siemens LoA Tool',
            'Instructor Actualization',
            'Humans Resource Management in Aircraft Maintenance',
            'Diploma of Tutoring and Educational Guidance',
          ],
        ],
      ],
    ],
  ],
  'spanish' => [
    'technical_training' => [
      'title' => 'Entrenamiento Técnico',
      'areas' => [
        [
          'name' => 'Avionics',
          'id' => 'avionics',
          'courses' => [
            'Sistemas Eléctricos / Aviónica / Planta de potencia / Estructuras del Boeing 777-200/-300',
            'Mantenimiento en línea de los sistemas eléctricos del B-757 y B-767',
            'Mantenimiento en línea de los sistemas eléctricos del of B-737-700',
          ],
        ],
        [
          'name' => 'Aircraft Maintenance',
          'id' => 'maintenace',
          'courses' => [
            'Entrenamiento Inicial Cessna 414',
            'Entrenamiento Inicial Embraer 145/135',
            'Entrenamiento Inicial ATA II Hawker 800',
            'Entrenamiento Inicial ATA II CRJ-200',
            'Entrenamiento Inicial Airbus A-320',
            'Entrenamiento Inicial ATA II Learjet',
            'Mantenimiento y reparación de los Galley Sell',
          ],
        ],
        [
          'name' => 'Otros Entrenamientos',
          'id' => 'other',
          'courses' => [
            'Legislación ESCAM – EASA',
            'Legislación Aeronáutica',
            'Factor Humano',
            'Entrenamiento Inicial para inspeciones NDT',
            '<a class="w3-tooltip"><i></i><b>ETOPS</b><span class="w3-text w3-round-small">(Extended-range Twin-engine Operation Performance Standards)</span></a> para B-757 y B-767',
            'Mínimos de Aterrizaje CAT - II / III para B-757 y 767',
            'Entrenamiento Inicial de Instructor',
          ],
        ],
      ],
    ],
    'programation_training' => [
      'title' => 'Capacitacion en Programación',
      'areas' => [
        [
          'name' => 'Programación Web',
          'id' => 'web',
          'courses' => [
            'Diplomado en PHP y mySQL - Desarrollo de aplicaciones dinámicas',
            'Introducción a jQuery',
            'Construcción de prototipos interactivos usando JavaScript',
          ],
        ],
        [
          'name' => 'Programación científica',
          'id' => 'science',
          'courses' => [
            'Wolfram Mathematica para ciencias',
            'Matlab 4.x',
          ],
        ],
        [
          'name' => 'General',
          'id' => 'general',
          'courses' => [
            'Diplomado en Programación y Diseño Orientado a Objetos',
            'Lenguaje C',
          ],
        ],
      ],
    ],
    'other_curses' => [
      'title' => 'Otros Cursos',
      'areas' => [
        [
          'name' => 'CAD-CAE',
          'id' => 'CAD-CAE',
          'courses' => [
            'Siemens NX 7.5',
            'SolidWorks',
            'Mechanical Desktop',
            'AutoCAD R12 Avanzado',
          ],
        ],
        [
          'name' => 'Otros',
          'id' => 'others',
          'courses' => [
            'Administración de Proyectos por Siemens',
            'Nuevo Modelo de Colaboración por Siemens',
            'Administración de Proyectos Herramienta LoA Siemens',
            'Actualización de Instructor',
            'Administración de Recursos Humanos en el Mantenimiento de Aeronaves',
            'Diplomado en Tutoría y Evaluación Educativa',
          ],
        ],
      ],
    ],
  ],
  'german' => [
    'technical_training' => [
      'title' => 'Technisches Training',
      'areas' => [
        [
          'name' => 'Avionics',
          'id' => 'avionics',
          'courses' => [
            'Boeing 777-200/-300 Avionics/Airframe/Power Plant/Electrical Systems',
            'Line Maintenance of Electrical Systems of B-757 and B-767',
            'Line Maintenance of Electrical Systems of B-737-700',
          ],
        ],
        [
          'name' => 'Flugzeugwartung',
          'id' => 'maintenace',
          'courses' => [
            'Erstausbildung Cessna 414',
            'Erstausbildung Embraer 145/135',
            'Erstausbildung ATA II Hawker 800',
            'Erstausbildung ATA II CRJ-200',
            'Erstausbildung Airbus A-320',
            'Erstausbildung ATA II Learjet',
            'Instandhaltung und Reparatur von Sell Gales inserts',
          ],
        ],
        [
          'name' => 'Andere Schulungen',
          'id' => 'other',
          'courses' => [
            'ESCAM – EASA Gesetze',
            'Luftfahrtgesetze',
            'Faktor Mensch',
            'Erstausbildung für ZfP-Inspektionen',
            '<a class="w3-tooltip"><i></i><b>ETOPS</b><span class="w3-text w3-round-small">(Extended-range Twin-engine Operation Performance Standards)</span></a> von B-757 und B-767',
            'Landing Minimum CAT - II / III for B-757 and 767',
            'Erstausbildung des Lehrers',
          ],
        ],
      ],
    ],
    'programation_training' => [
      'title' => 'Programmiertraining',
      'areas' => [
        [
          'name' => 'Web Programmation',
          'id' => 'web',
          'courses' => [
            'Diplom von PHP und mySQL - Entwicklung dynamischer Anwendungen ',
            'Einführung in jQuery',
            'Erstellen interaktiver Prototypen mit JavaScript',
          ],
        ],
        [
          'name' => 'Wissenschaftliche Programmierung',
          'id' => 'science',
          'courses' => [
            'Wolfram Mathematica für Wissenschaft',
            'Matlab 4.x',
          ],
        ],
        [
          'name' => 'Allgemeines',
          'id' => 'general',
          'courses' => [
            'Diplom in Design und objektorientierter Programmierung ',
            'Sprache C',
          ],
        ],
      ],
    ],
    'other_curses' => [
      'title' => 'Weitere Kurse',
      'areas' => [
        [
          'name' => 'CAD-CAE',
          'id' => 'CAD-CAE',
          'courses' => [
            'Siemens NX 7.5',
            'SolidWorks',
            'Mechanical Desktop',
            'AutoCAD R12 Fortgeschrittene',
          ],
        ],
        [
          'name' => 'Andere',
          'id' => 'others',
          'courses' => [
            'Projektmanagement von Siemens',
            'Neues Kollaborationsmodell von Siemens',
            'Projektleiter Siemens LoA Tool',
            'Aktualisierung des Lehrers',
            'Human Resources Management in der Flugzeugwartung',
            'Diplom für Nachhilfe und Bildungsberatung',
          ],
        ],
      ],
    ],
  ],
]
?>
<h2 class="w3-text-grey w3-padding-10"><i class="fa fa-briefcase fa-fw w3-margin-right w3-xlarge w3-text-teal"></i><?= $title[$len]['work'] ?></h2>
<div id="work-1">
  <?php foreach ($workExperience[$len] as $experience) : ?>
    <div class="w3-container">
      <h3 class="w3-opacity"><b><?= $experience['title'] ?> / <a href="<?= $experience['link'] ?>" target="_blank"><?= $experience['firma'] ?></a></b></h3>
      <h4 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?= $experience['initDate'] ?> - <?= $experience['endDate'] ?></h4>
      <ul>
        <?php foreach ($experience['activities'] as $activitie) : ?>
          <li><?= $activitie ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endforeach; ?>
  <hr>
</div>
<h2 class="w3-text-grey w3-padding-10"><i class="fa fa-leanpub fa-fw w3-margin-right w3-xlarge w3-text-teal"></i><?= $title[$len]['education'] ?></h2>
<div id="education-1">
  <?php foreach ($educations[$len] as $education) : ?>
    <div class="w3-container">
      <h3 class="w3-opacity"><b><?= $education['title'] ?> / <a href="<?= $education['link'] ?>" target="_blank"><?= $education['institution'] ?></a></b></h3>
      <h4 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?= $education['dateStart'] ?> – <?= $education['dateEnd'] ?></h4>
      <ul>
        <?php foreach ($education['activities'] as $activitie) : ?>
          <li><?= $activitie ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endforeach; ?>
  <hr>
</div>
<h2 class="w3-text-grey w3-padding-10"><i class="fa fa-certificate fa-fw w3-margin-right w3-xlarge w3-text-teal"></i><?= $title[$len]['further_education'] ?></h2>
<div id="capacitation-1">
  <?php foreach ($further_education[$len] as $areas) : ?>
    <h3 class="w3-opacity"><b><?= $areas['title'] ?></b></h3>
    <div>
    <?php foreach ($areas['areas'] as $area) : ?>
      <div class="area">
        <h4 class="w3-text-teal" style="display: block;"><i class="fa fa-folder-open fa-fw w3-margin-right"></i><?= $area['name'] ?></h4>
        <div id="<?= $area['id'] ?>" >
          <ul class="w3-ul w3-hoverable">
            <?php foreach ($area['courses'] as $course) : ?>
              <li><i class="fa fa-arrow-right fa-fw w3-margin-right w3-text-teal"></i><?= $course ?></li>
            <?PHP endforeach; ?>
          </ul>
        </div>
      </div>
    <?PHP endforeach; ?>
    </div>
  <?PHP endforeach; ?>
</div>