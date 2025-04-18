<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class productosCursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         
        $products = [
            [
                'producto' => 'React Avanzado',
                'extract' => 'Extracto',
                'description' => '<div class="prose"><p>¿Quieres aprender React Actual o migrarte a trabajar con Hooks?</p><p>Este curso tiene por objetivo llevarte de cero conocimiento de React hasta un nivel competitivo en el ambiente laboral de hoy en día. Este curso está construido&nbsp;100% en Hooks&nbsp;y functional components.</p><p>También cuenta con secciones sobre&nbsp;pruebas unitarias y de integración en cada aplicación&nbsp;que hacemos en el curso, esto incluye pruebas en componentes, hooks, customHooks, context, Redux, Fetch, mocks, spies, snapshots y mucho más relacionado al unit test.</p><p>Sin olvidar que todos empezamos de cero en un momento, el curso cuenta con una introducción a los conceptos que necesitaremos para entrar en React de la forma más cómoda posible.</p><p>Este curso cuenta con mas de&nbsp;400 lecciones y más de 40 horas de video&nbsp;haciendo aplicaciones y pruebas distintas que nos ayudará a alcanzar el objetivo de dominar React y otras tecnologías que lo rodean, hay muchas tareas y ejercicios que te ayudarán a asimilar los conocimientos necesarios para ser un FullStack Developer utilizando React y Node en el Backend junto con Mongo y Firestore como bases de datos.</p><p>Este es un listado de varios de los temas que tocamos en el curso:</p><p>React a profundidad</p><p>Hooks y Hooks personalizados</p><p>Functional Components</p><p>HOC&nbsp;-&nbsp;higher-order components</p><p>Context&nbsp;API</p><p>Redux</p><p>MERN - Mongo + Express +&nbsp;React + Node</p><p>Router</p><p>Diseños diferentes en diferentes rutas</p><p>Bootstrap</p><p>Mongoose</p><p>JWT y su re-validación</p><p>Encriptación de contraseñas</p><p>Google Sign-in</p><p>Autenticación personalizada</p><p>Unit Test</p><p>Pruebas especializadas en cada aplicación terminada</p><p>Despliegues a producción</p><p>Enzyme</p><p>Jest</p><p>React Testing Library</p><p>Mocks</p><p>Animaciones en componentes</p><p>History</p><p>QueryStrings</p><p>Heroku y Heroku Logs</p><p>Git y Github</p><p>Redux DevTools</p><p>React DevTools</p><p>Y mucho más!</p><p>Este curso es para todas las personas que quieran aprender React, quieran pasar de Class Base Componentes a Functional Components, quieran especializarse en pruebas, entrar en Redux, Firebase, Context o simplemente aprender algo nuevo de manera completa y funciona.</p><p><br></p></div>',
                'precio' => 300.00,
                'descuento' => 0.00,
                'stock' => 0.00,
                'costo_x_art' => 0.00,
                'peso' => null,
                'imagen' => "images/cursos/devops.png",
                'atributes' => null,
                'sku' => 'F6V30AL',
                'destacar' => 0,
                'recomendar' => 0,
                'categoria_id' => 1,
                'visible' => 1,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'imagen_ambiente' => null,
                'subcategory_id' => null,
                'imagen_2' => null,
                'imagen_3' => null,
                'imagen_4' => null,
                'color' => null,
                'image_texture' => null,
                'slug' => 'react-avanzado',
                'max_stock' => 222222,
                'precio_reseller' => 0.00,
                'creditos' => '24',
                'duracion' => '200',
                'fecha_inicio' => '2024-08-27',
            ],
            [
                'producto' => 'Node Js',
                'extract' => 'Extracto',
                'description' => '<div class="prose"><p>Curso para aquellos que quiere aprender node .js </p><p><br></p></div>',
                'precio' => 200.00,
                'descuento' => 0.00,
                'stock' => 0.00,
                'costo_x_art' => 0.00,
                'peso' => null,
                'imagen' => "images/cursos/devops.png",
                'atributes' => null,
                'sku' => 'F6V30AL',
                'destacar' => 0,
                'recomendar' => 0,
                'categoria_id' => 2,
                'visible' => 1,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'imagen_ambiente' => null,
                'subcategory_id' => null,
                'imagen_2' => null,
                'imagen_3' => null,
                'imagen_4' => null,
                'color' => null,
                'image_texture' => null,
                'slug' => 'node-js',
                'max_stock' => 0,
                'precio_reseller' => 0.00,
                'creditos' => '18',
                'duracion' => '250',
                'fecha_inicio' => '2024-08-30',
            ],
            [
                'producto' => 'Introducción a Google Cloud Platform (GCP) para Principiantes',
                'extract' => 'Extracto',
                'description' => '<div class="prose"><p>Este curso está diseñado para aquellos que desean dar sus primeros pasos en el mundo de la computación en la nube con Google Cloud Platform (GCP). A lo largo de este curso, los participantes aprenderán los conceptos fundamentales de GCP, comprendiendo cómo funciona la infraestructura de nube de Google y cómo se puede utilizar para mejorar la eficiencia y escalabilidad de proyectos y aplicaciones.</p><p><strong>Contenido del curso:</strong></p><ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Introducción a la Nube y GCP:</strong> Comprende los conceptos básicos de la computación en la nube y descubre las principales características y beneficios de GCP.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Navegación por la Consola de GCP:</strong> Aprende a utilizar la consola de GCP para gestionar recursos, servicios y configuraciones.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Servicios Esenciales de GCP:</strong> Familiarízate con los servicios clave de GCP, como Google Compute Engine, Google Cloud Storage, y Google Kubernetes Engine.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Manejo de Identidades y Accesos:</strong> Entiende cómo gestionar usuarios, permisos y roles en GCP para mantener la seguridad y el control de tus recursos.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Implementación y Gestión de Proyectos:</strong> Aprende a crear, configurar y desplegar proyectos en GCP, maximizando la eficiencia y minimizando los costos.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Prácticas y Laboratorios:</strong> Aplica los conceptos aprendidos en escenarios reales a través de laboratorios prácticos que te ayudarán a consolidar tus conocimientos.</li></ol><p><strong>¿A quién está dirigido?</strong> Este curso es ideal para estudiantes, profesionales en tecnología, desarrolladores, y cualquier persona interesada en aprender sobre Google Cloud Platform sin necesidad de experiencia previa.</p><p><strong>Objetivos del curso:</strong></p><ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Adquirir una comprensión sólida de los conceptos y servicios básicos de GCP.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Desarrollar habilidades prácticas para gestionar y desplegar proyectos en la nube.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Prepararse para continuar con cursos avanzados de GCP.</li></ol><p><br></p></div>',
                'precio' => 300.00,
                'descuento' => 0.00,
                'stock' => 0.00,
                'costo_x_art' => 0.00,
                'peso' => null,
                'imagen' => "images/cursos/devops.png",
                'atributes' => null,
                'sku' => 'F6V30AL',
                'destacar' => 0,
                'recomendar' => 0,
                'categoria_id' => 1,
                'visible' => 1,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'imagen_ambiente' => null,
                'subcategory_id' => null,
                'imagen_2' => null,
                'imagen_3' => null,
                'imagen_4' => null,
                'color' => null,
                'image_texture' => null,
                'slug' => 'introduccion-a-google-cloud-platform-gcp-para-principiantes',
                'max_stock' => 0,
                'precio_reseller' => 0.00,
                'creditos' => '30',
                'duracion' => '140',
                'fecha_inicio' => '2024-08-15',
            ],
            [
                'producto' => 'Curso de Python para Principiantes',
                'extract' => 'Extracto del curso de Python',
                'description' => '<div class="prose"><p>Este curso está diseñado para aquellos que desean aprender Python desde cero. A lo largo del curso, los participantes aprenderán los conceptos fundamentales de Python, incluyendo sintaxis, estructuras de datos, y programación orientada a objetos.</p><p><strong>Contenido del curso:</strong></p><ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Introducción a Python:</strong> Comprende los conceptos básicos de Python y su sintaxis.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Estructuras de Datos:</strong> Aprende a trabajar con listas, tuplas, diccionarios y conjuntos.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Programación Orientada a Objetos:</strong> Familiarízate con los conceptos de clases y objetos en Python.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Manejo de Archivos:</strong> Aprende a leer y escribir archivos en Python.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Prácticas y Ejercicios:</strong> Aplica los conceptos aprendidos a través de ejercicios prácticos.</li></ol><p><strong>¿A quién está dirigido?</strong> Este curso es ideal para estudiantes, profesionales en tecnología, desarrolladores, y cualquier persona interesada en aprender Python sin necesidad de experiencia previa.</p><p><strong>Objetivos del curso:</strong></p><ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Adquirir una comprensión sólida de los conceptos y sintaxis de Python.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Desarrollar habilidades prácticas para escribir programas en Python.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Prepararse para continuar con cursos avanzados de Python.</li></ol><p><br></p></div>',
                'precio' => 250.00,
                'descuento' => 10.00,
                'stock' => 50.00,
                'costo_x_art' => 200.00,
                'peso' => null,
                'imagen' => "images/cursos/devops.png",
                'atributes' => null,
                'sku' => 'PY12345',
                'destacar' => 1,
                'recomendar' => 1,
                'categoria_id' => 2,
                'visible' => 1,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'imagen_ambiente' => null,
                'subcategory_id' => null,
                'imagen_2' => null,
                'imagen_3' => null,
                'imagen_4' => null,
                'color' => null,
                'image_texture' => null,
                'slug' => 'curso-de-python-para-principiantes',
                'max_stock' => 100,
                'precio_reseller' => 220.00,
                'creditos' => '20',
                'duracion' => '120',
                'fecha_inicio' => '2024-09-01',
            ],
            [
                'producto' => 'Desarrollo Web con Django',
                'extract' => 'Extracto del curso de Django',
                'description' => '<div class="prose"><p>Este curso está diseñado para aquellos que desean aprender a desarrollar aplicaciones web utilizando el framework Django. A lo largo del curso, los participantes aprenderán los conceptos fundamentales de Django, incluyendo la creación de proyectos, manejo de bases de datos, y desarrollo de aplicaciones web completas.</p><p><strong>Contenido del curso:</strong></p><ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Introducción a Django:</strong> Comprende los conceptos básicos de Django y su arquitectura.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Configuración del Entorno:</strong> Aprende a configurar el entorno de desarrollo para trabajar con Django.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Modelos y Bases de Datos:</strong> Familiarízate con la creación y manejo de modelos y bases de datos en Django.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Vistas y Plantillas:</strong> Aprende a crear vistas y plantillas para renderizar contenido dinámico.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Autenticación y Autorización:</strong> Entiende cómo implementar sistemas de autenticación y autorización en Django.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Despliegue de Aplicaciones:</strong> Aprende a desplegar aplicaciones Django en servidores de producción.</li></ol><p><strong>¿A quién está dirigido?</strong> Este curso es ideal para desarrolladores web, estudiantes, y cualquier persona interesada en aprender Django para desarrollar aplicaciones web completas.</p><p><strong>Objetivos del curso:</strong></p><ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Adquirir una comprensión sólida de los conceptos y arquitectura de Django.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Desarrollar habilidades prácticas para crear aplicaciones web con Django.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Prepararse para continuar con proyectos avanzados de desarrollo web.</li></ol><p><br></p></div>',
                'precio' => 350.00,
                'descuento' => 15.00,
                'stock' => 30.00,
                'costo_x_art' => 280.00,
                'peso' => null,
                'imagen' => "images/cursos/devops.png",
                'atributes' => null,
                'sku' => 'DJ45678',
                'destacar' => 1,
                'recomendar' => 1,
                'categoria_id' => 1,
                'visible' => 1,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'imagen_ambiente' => null,
                'subcategory_id' => null,
                'imagen_2' => null,
                'imagen_3' => null,
                'imagen_4' => null,
                'color' => null,
                'image_texture' => null,
                'slug' => 'desarrollo-web-con-django',
                'max_stock' => 80,
                'precio_reseller' => 300.00,
                'creditos' => '25',
                'duracion' => '150',
                'fecha_inicio' => '2024-10-01',
            ],

            [
                'producto' => 'Machine Learning con TensorFlow',
                'extract' => 'Extracto del curso de Machine Learning',
                'description' => '<div class="prose"><p>Este curso está diseñado para aquellos que desean aprender sobre Machine Learning utilizando TensorFlow. A lo largo del curso, los participantes aprenderán los conceptos fundamentales de Machine Learning, incluyendo la creación y entrenamiento de modelos, y cómo utilizar TensorFlow para implementar soluciones de Machine Learning.</p><p><strong>Contenido del curso:</strong></p><ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Introducción a Machine Learning:</strong> Comprende los conceptos básicos de Machine Learning y sus aplicaciones.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Configuración del Entorno:</strong> Aprende a configurar el entorno de desarrollo para trabajar con TensorFlow.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Creación de Modelos:</strong> Familiarízate con la creación y entrenamiento de modelos de Machine Learning en TensorFlow.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Evaluación y Mejora de Modelos:</strong> Aprende a evaluar y mejorar el rendimiento de tus modelos.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Implementación de Soluciones:</strong> Aprende a implementar soluciones de Machine Learning en aplicaciones reales.</li></ol><p><strong>¿A quién está dirigido?</strong> Este curso es ideal para desarrolladores, científicos de datos, y cualquier persona interesada en aprender Machine Learning con TensorFlow.</p><p><strong>Objetivos del curso:</strong></p><ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Adquirir una comprensión sólida de los conceptos y técnicas de Machine Learning.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Desarrollar habilidades prácticas para crear y entrenar modelos de Machine Learning.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Prepararse para implementar soluciones de Machine Learning en proyectos reales.</li></ol><p><br></p></div>',
                'precio' => 400.00,
                'descuento' => 20.00,
                'stock' => 40.00,
                'costo_x_art' => 320.00,
                'peso' => null,
                'imagen' => "images/cursos/devops.png",
                'atributes' => null,
                'sku' => 'ML67890',
                'destacar' => 1,
                'recomendar' => 1,
                'categoria_id' => 2,
                'visible' => 1,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'imagen_ambiente' => null,
                'subcategory_id' => null,
                'imagen_2' => null,
                'imagen_3' => null,
                'imagen_4' => null,
                'color' => null,
                'image_texture' => null,
                'slug' => 'machine-learning-con-tensorflow',
                'max_stock' => 90,
                'precio_reseller' => 350.00,
                'creditos' => '35',
                'duracion' => '180',
                'fecha_inicio' => '2024-11-01',
            ],
            [
                'producto' => 'Introducción a React',
                'extract' => 'Extracto del curso de React',
                'description' => '<div class="prose"><p>Este curso está diseñado para aquellos que desean aprender a desarrollar aplicaciones web utilizando React. A lo largo del curso, los participantes aprenderán los conceptos fundamentales de React, incluyendo la creación de componentes, manejo del estado, y desarrollo de aplicaciones web interactivas.</p><p><strong>Contenido del curso:</strong></p><ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Introducción a React:</strong> Comprende los conceptos básicos de React y su ecosistema.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Creación de Componentes:</strong> Aprende a crear y reutilizar componentes en React.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Manejo del Estado:</strong> Familiarízate con el manejo del estado y los hooks en React.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Rutas y Navegación:</strong> Aprende a implementar rutas y navegación en aplicaciones React.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Integración con APIs:</strong> Entiende cómo integrar React con APIs externas para obtener y mostrar datos.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Despliegue de Aplicaciones:</strong> Aprende a desplegar aplicaciones React en servidores de producción.</li></ol><p><strong>¿A quién está dirigido?</strong> Este curso es ideal para desarrolladores web, estudiantes, y cualquier persona interesada en aprender React para desarrollar aplicaciones web interactivas.</p><p><strong>Objetivos del curso:</strong></p><ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Adquirir una comprensión sólida de los conceptos y ecosistema de React.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Desarrollar habilidades prácticas para crear aplicaciones web con React.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Prepararse para continuar con proyectos avanzados de desarrollo web.</li></ol><p><br></p></div>',
                'precio' => 300.00,
                'descuento' => 10.00,
                'stock' => 40.00,
                'costo_x_art' => 250.00,
                'peso' => null,
                'imagen' => "images/cursos/devops.png",
                'atributes' => null,
                'sku' => 'RE12345',
                'destacar' => 1,
                'recomendar' => 1,
                'categoria_id' => 2,
                'visible' => 1,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'imagen_ambiente' => null,
                'subcategory_id' => null,
                'imagen_2' => null,
                'imagen_3' => null,
                'imagen_4' => null,
                'color' => null,
                'image_texture' => null,
                'slug' => 'introduccion-a-react',
                'max_stock' => 100,
                'precio_reseller' => 270.00,
                'creditos' => '20',
                'duracion' => '120',
                'fecha_inicio' => '2024-12-01',
            ],
            [
                'producto' => 'Fundamentos de DevOps',
                'extract' => 'Extracto del curso de DevOps',
                'description' => '<div class="prose"><p>Este curso está diseñado para aquellos que desean aprender los fundamentos de DevOps. A lo largo del curso, los participantes aprenderán los conceptos clave de DevOps, incluyendo la integración continua, entrega continua, y la automatización de procesos de desarrollo y operaciones.</p><p><strong>Contenido del curso:</strong></p><ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Introducción a DevOps:</strong> Comprende los conceptos básicos de DevOps y su importancia en el desarrollo de software.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Integración Continua:</strong> Aprende a implementar prácticas de integración continua para mejorar la calidad del código.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Entrega Continua:</strong> Familiarízate con las prácticas de entrega continua para acelerar el ciclo de vida del desarrollo.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Automatización de Procesos:</strong> Aprende a automatizar procesos de desarrollo y operaciones para mejorar la eficiencia.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Herramientas de DevOps:</strong> Entiende cómo utilizar herramientas clave de DevOps como Jenkins, Docker, y Kubernetes.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Prácticas y Ejercicios:</strong> Aplica los conceptos aprendidos a través de ejercicios prácticos.</li></ol><p><strong>¿A quién está dirigido?</strong> Este curso es ideal para desarrolladores, ingenieros de operaciones, y cualquier persona interesada en aprender DevOps para mejorar sus procesos de desarrollo y operaciones.</p><p><strong>Objetivos del curso:</strong></p><ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Adquirir una comprensión sólida de los conceptos y prácticas de DevOps.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Desarrollar habilidades prácticas para implementar DevOps en proyectos reales.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Prepararse para continuar con proyectos avanzados de DevOps.</li></ol><p><br></p></div>',
                'precio' => 450.00,
                'descuento' => 15.00,
                'stock' => 35.00,
                'costo_x_art' => 380.00,
                'peso' => null,
                'imagen' => "images/cursos/devops.png",
                'atributes' => null,
                'sku' => 'DV12345',
                'destacar' => 1,
                'recomendar' => 1,
                'categoria_id' => 1,
                'visible' => 1,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'imagen_ambiente' => null,
                'subcategory_id' => null,
                'imagen_2' => null,
                'imagen_3' => null,
                'imagen_4' => null,
                'color' => null,
                'image_texture' => null,
                'slug' => 'fundamentos-de-devops',
                'max_stock' => 70,
                'precio_reseller' => 400.00,
                'creditos' => '30',
                'duracion' => '160',
                'fecha_inicio' => '2024-09-15',
            ],
            [
                'producto' => 'Introducción a la Inteligencia Artificial',
                'extract' => 'Extracto del curso de Inteligencia Artificial',
                'description' => '<div class="prose"><p>Este curso está diseñado para aquellos que desean aprender los fundamentos de la Inteligencia Artificial (IA). A lo largo del curso, los participantes aprenderán los conceptos clave de la IA, incluyendo algoritmos de aprendizaje automático, redes neuronales, y aplicaciones prácticas de la IA.</p><p><strong>Contenido del curso:</strong></p><ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Introducción a la IA:</strong> Comprende los conceptos básicos de la Inteligencia Artificial y su historia.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Algoritmos de Aprendizaje Automático:</strong> Aprende sobre los algoritmos más comunes utilizados en el aprendizaje automático.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Redes Neuronales:</strong> Familiarízate con el funcionamiento de las redes neuronales y su entrenamiento.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Procesamiento de Lenguaje Natural:</strong> Entiende cómo las máquinas pueden interpretar y generar lenguaje humano.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Visión por Computadora:</strong> Aprende sobre las técnicas de visión por computadora y sus aplicaciones.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Prácticas y Ejercicios:</strong> Aplica los conceptos aprendidos a través de ejercicios prácticos.</li></ol><p><strong>¿A quién está dirigido?</strong> Este curso es ideal para desarrolladores, científicos de datos, y cualquier persona interesada en aprender sobre la Inteligencia Artificial.</p><p><strong>Objetivos del curso:</strong></p><ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Adquirir una comprensión sólida de los conceptos y técnicas de la Inteligencia Artificial.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Desarrollar habilidades prácticas para implementar soluciones de IA.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Prepararse para continuar con proyectos avanzados de IA.</li></ol><p><br></p></div>',
                'precio' => 500.00,
                'descuento' => 25.00,
                'stock' => 25.00,
                'costo_x_art' => 400.00,
                'peso' => null,
                'imagen' => "images/cursos/devops.png",
                'atributes' => null,
                'sku' => 'AI12345',
                'destacar' => 1,
                'recomendar' => 1,
                'categoria_id' => 1,
                'visible' => 1,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'imagen_ambiente' => null,
                'subcategory_id' => null,
                'imagen_2' => null,
                'imagen_3' => null,
                'imagen_4' => null,
                'color' => null,
                'image_texture' => null,
                'slug' => 'introduccion-a-la-inteligencia-artificial',
                'max_stock' => 60,
                'precio_reseller' => 450.00,
                'creditos' => '40',
                'duracion' => '200',
                'fecha_inicio' => '2024-10-15',
            ],
            [
                'producto' => 'Desarrollo de Aplicaciones Móviles con Flutter',
                'extract' => 'Extracto del curso de Flutter',
                'description' => '<div class="prose"><p>Este curso está diseñado para aquellos que desean aprender a desarrollar aplicaciones móviles utilizando Flutter. A lo largo del curso, los participantes aprenderán los conceptos fundamentales de Flutter, incluyendo la creación de interfaces de usuario, manejo del estado, y desarrollo de aplicaciones móviles multiplataforma.</p><p><strong>Contenido del curso:</strong></p><ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Introducción a Flutter:</strong> Comprende los conceptos básicos de Flutter y su arquitectura.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Creación de Interfaces de Usuario:</strong> Aprende a crear interfaces de usuario atractivas y responsivas con Flutter.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Manejo del Estado:</strong> Familiarízate con el manejo del estado en aplicaciones Flutter.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Integración con APIs:</strong> Entiende cómo integrar Flutter con APIs externas para obtener y mostrar datos.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Despliegue de Aplicaciones:</strong> Aprende a desplegar aplicaciones Flutter en tiendas de aplicaciones.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span><strong>Prácticas y Ejercicios:</strong> Aplica los conceptos aprendidos a través de ejercicios prácticos.</li></ol><p><strong>¿A quién está dirigido?</strong> Este curso es ideal para desarrolladores móviles, estudiantes, y cualquier persona interesada en aprender Flutter para desarrollar aplicaciones móviles multiplataforma.</p><p><strong>Objetivos del curso:</strong></p><ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Adquirir una comprensión sólida de los conceptos y arquitectura de Flutter.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Desarrollar habilidades prácticas para crear aplicaciones móviles con Flutter.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Prepararse para continuar con proyectos avanzados de desarrollo móvil.</li></ol><p><br></p></div>',
                'precio' => 350.00,
                'descuento' => 20.00,
                'stock' => 50.00,
                'costo_x_art' => 280.00,
                'peso' => null,
                'imagen' => "images/cursos/devops.png",
                'atributes' => null,
                'sku' => 'FL12345',
                'destacar' => 1,
                'recomendar' => 1,
                'categoria_id' => 2,
                'visible' => 1,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'imagen_ambiente' => null,
                'subcategory_id' => null,
                'imagen_2' => null,
                'imagen_3' => null,
                'imagen_4' => null,
                'color' => null,
                'image_texture' => null,
                'slug' => 'desarrollo-de-aplicaciones-moviles-con-flutter',
                'max_stock' => 100,
                'precio_reseller' => 320.00,
                'creditos' => '30',
                'duracion' => '180',
                'fecha_inicio' => '2024-11-01',
            ],
        ];
        DB::table('products')->insert($products);
    }
}
