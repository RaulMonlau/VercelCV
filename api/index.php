<?php
// PHP code should be defined here first
// We'll move the data array up here
$imageData = base64_encode(file_get_contents('http://monlab.ddns.net/images/aa.png'));
$base64Image = 'data:image/png;base64,' . $imageData;
$datos = [
    'nombre' => 'Raül Castillejo',
    'foto' => $base64Image,
    'edad' => '21 años',
    'descripcion' => 'Soy una persona enérgica, dinámica, empática, presistente, con ganas de aprender y trabajar.',
    'contacto' => [
        'telefono' => '+34 611 48 87 59',
        'email' => 'raulcasgar@campus.monlau.com',
        'ubicacion' => 'España, Barcelona'
    ],
    'idiomas' => [
        'Catalán: Lengua materna',
        'Castellano: Lengua materna',
        'Inglés: Nivel medio'
    ],
    'conocimientos' => [
        'Paquete office',
        'Linux, Windows y Arduino',
        'SQL Developer, SQL/ PL/SQL',
        'SQLite, MySQL, MongoDB',
        'Visual Studio, C++ y C#',
        'Visual Studio Code, HTML, CSS, Flutter, PHP y Javascript',
        'Apache NetBeans y IntelliJ IDEA',
        'Java',
        'PyCharm, Python y Fast Api',
        'WebStorm, React y JavaScript',
        'Android Studio, XML y Java',
        'Git',
        'Figma'
    ],
    'experiencia' => [
        [
            'puesto' => 'Desarrollador Junior',
            'empresa' => 'Aradoxa Solutions S.L.',
            'periodo' => 'Octubre 2024 - Actual',
            'tareas' => [
                'Programación',
                'Control de versiones en Git',
                'Gestión de archivos',
                'APIs'
            ]
        ],
        [
            'puesto' => 'Prácticas programador',
            'empresa' => 'IRIS Technology',
            'periodo' => 'Abril 2024 - Julio 2024',
            'tareas' => [
                'Programación en C++',
                'Control de versiones en Git',
                'Programación de APIs con Python'
            ]
        ],
        [
            'puesto' => 'Ayudante de informática',
            'empresa' => 'IRO sistemas',
            'periodo' => 'Enero 2022 - Marzo 2022',
            'tareas' => [
                'Resolución de dudas informáticas',
                'Atención al cliente',
                'Reparación de sistemas'
            ]
        ]
    ],
    'formacion' => [
        [
            'titulo' => 'Ciclo de grado superior de desarrollo de aplicaciones web',
            'centro' => 'Monlau',
            'periodo' => '2024 - cursando'
        ],
        [
            'titulo' => 'Ciclo de grado superior de desarrollo de aplicaciones multiplataforma',
            'centro' => 'Monlau',
            'periodo' => '2022-2024'
        ],
        [
            'titulo' => 'Bachillerato científico',
            'centro' => 'La Salle Congres',
            'periodo' => '2019-2022'
        ]
    ],
    'habilidades' => [
        'Buen comunicador',
        'Resolución de conflictos',
        'Actitud para aprender',
        'Capacidad de adaptación',
        'Facilidad de aprendizaje',
        'Trato con personas',
        'Habilidad para trabajar en equipo'
    ],
    'otros_datos' => [
        'Posibilidad de desplazamiento',
        'Disponible fines de semana',
        'Positividad',
        'Adaptabilidad',
        'Motivación'
    ]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículum - Raül Castillejo</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background-color: #f5f5f5;
            color: #333;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        header {
            background-color: #3366a3;
            color: white;
            padding: 15px;
            text-align: center;
        }
        .content {
            display: flex;
            padding: 20px;
        }
        .left-column {
            width: 30%;
            padding-right: 20px;
            border-right: 1px solid #eee;
        }
        .right-column {
            width: 70%;
            padding-left: 20px;
        }
        .profile {
            text-align: center;
            margin-bottom: 20px;
        }
        .profile img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .profile .age {
            margin-top: 10px;
            font-size: 14px;
            color: #555;
        }
        h1 {
            color: #3366a3;
            margin-bottom: 10px;
        }
        h2 {
            color: #333;
            border-bottom: 2px solid #3366a3;
            padding-bottom: 5px;
            margin: 20px 0 15px;
        }
        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .contact-icon {
            width: 30px;
            height: 30px;
            background-color: #3366a3;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            color: white;
        }
        .description {
            color: #555;
            margin-bottom: 20px;
        }
        .section {
            margin-bottom: 25px;
        }
        ul {
            list-style-type: none;
        }
        ul.bullet-list {
            list-style-type: disc;
            padding-left: 20px;
        }
        .job-title {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .job-company {
            color: #555;
            margin-bottom: 5px;
        }
        .job-period {
            font-style: italic;
            color: #777;
            margin-bottom: 10px;
        }
        .two-columns {
            display: flex;
        }
        .two-columns .column {
            width: 50%;
            padding: 0 10px;
        }
        .skill-item {
            margin-bottom: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1><?php echo $datos['nombre']; ?></h1>
        </header>

        <div class="content">
            <div class="left-column">
                <div class="profile">
                    <img src="<?php echo $datos['foto']; ?>" alt="Foto de perfil" onerror="this.src='data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22150%22%20height%3D%22150%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Crect%20width%3D%22150%22%20height%3D%22150%22%20fill%3D%22%23EEEEEE%22%2F%3E%3Ctext%20x%3D%2275%22%20y%3D%2275%22%20font-size%3D%2220%22%20alignment-baseline%3D%22middle%22%20text-anchor%3D%22middle%22%20fill%3D%22%23AAAAAA%22%3EFoto%3C%2Ftext%3E%3C%2Fsvg%3E';" />
                    <div class="age"><?php echo $datos['edad']; ?></div>
                </div>

                <div class="section">
                    <h2>Contacto</h2>
                    <div class="contact-item">
                        <div class="contact-icon">T</div>
                        <div><?php echo $datos['contacto']['telefono']; ?></div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">@</div>
                        <div><?php echo $datos['contacto']['email']; ?></div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">L</div>
                        <div><?php echo $datos['contacto']['ubicacion']; ?></div>
                    </div>
                </div>

                <div class="section">
                    <h2>Idiomas</h2>
                    <ul>
                        <?php foreach ($datos['idiomas'] as $idioma): ?>
                            <li>- <?php echo $idioma; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="section">
                    <h2>Conocimientos informáticos</h2>
                    <ul>
                        <?php foreach ($datos['conocimientos'] as $conocimiento): ?>
                            <li>- <?php echo $conocimiento; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="right-column">
                <div class="description">
                    <?php echo $datos['descripcion']; ?>
                </div>

                <div class="section">
                    <h2>Experiencia laboral</h2>
                    <?php foreach ($datos['experiencia'] as $exp): ?>
                        <div class="job-title"><?php echo $exp['puesto']; ?></div>
                        <div class="job-company"><?php echo $exp['empresa']; ?></div>
                        <div class="job-period"><?php echo $exp['periodo']; ?></div>
                        <ul class="bullet-list">
                            <?php foreach ($exp['tareas'] as $tarea): ?>
                                <li><?php echo $tarea; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <br>
                    <?php endforeach; ?>
                </div>

                <div class="section">
                    <h2>Formación académica</h2>
                    <?php foreach ($datos['formacion'] as $formacion): ?>
                        <div class="job-title"><?php echo $formacion['titulo']; ?></div>
                        <div class="job-company"><?php echo $formacion['centro']; ?></div>
                        <div class="job-period"><?php echo $formacion['periodo']; ?></div>
                        <br>
                    <?php endforeach; ?>
                </div>

                <div class="section">
                    <h2>Habilidades</h2>
                    <div class="two-columns">
                        <div class="column">
                            <?php 
                            $half = ceil(count($datos['habilidades']) / 2);
                            for ($i = 0; $i < $half; $i++): 
                            ?>
                                <div class="skill-item"><?php echo $datos['habilidades'][$i]; ?></div>
                            <?php endfor; ?>
                        </div>
                        <div class="column">
                            <?php 
                            for ($i = $half; $i < count($datos['habilidades']); $i++): 
                            ?>
                                <div class="skill-item"><?php echo $datos['habilidades'][$i]; ?></div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>

                <div class="section">
                    <h2>Otros datos</h2>
                    <div class="two-columns">
                        <div class="column">
                            <?php 
                            $half = ceil(count($datos['otros_datos']) / 2);
                            for ($i = 0; $i < $half; $i++): 
                            ?>
                                <div class="skill-item"><?php echo $datos['otros_datos'][$i]; ?></div>
                            <?php endfor; ?>
                        </div>
                        <div class="column">
                            <?php 
                            for ($i = $half; $i < count($datos['otros_datos']); $i++): 
                            ?>
                                <div class="skill-item"><?php echo $datos['otros_datos'][$i]; ?></div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
