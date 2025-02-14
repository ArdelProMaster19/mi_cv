<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Jesus Arellano Delgado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
               body {
            font-family: 'Poppins', sans-serif;
            background-color: #121212;
            color: #f8f9fa;
            overflow-x: hidden;
        }

        .hero {
            background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('https://source.unsplash.com/1600x900/?technology,coding');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0;
            text-align: center;
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .card {
            background: #1e1e1e;
            color: white;
            border: none;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0px 10px 20px rgba(255, 255, 255, 0.1);
        }

        .navbar {
            background: rgba(0, 0, 0, 0.8) !important;
        }

        .btn-custom {
            background: linear-gradient(135deg, #ff8c00, #e63946);
            color: white;
            border: none;
            padding: 10px 20px;
            font-weight: bold;
            transition: all 0.3s ease-in-out;
        }

        .btn-custom:hover {
            background: linear-gradient(135deg, #e63946, #ff8c00);
            transform: scale(1.1);
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 40px;
            text-transform: uppercase;
        }

        .img-chuy {
            max-width: 40%;
            height: auto;
            border-radius: 10px;
            margin-top: 20px;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Jesus Arellano Delgado</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about" id="about-link">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#experience" id="experience-link">Professional Experience</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects" id="projects-link">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#education" id="education-link">Education</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact" id="contact-link">Contact</a></li>
                    <!-- Dropdown de idiomas -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Language
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#" onclick="setLanguage('en')">English</a></li>
                            <li><a class="dropdown-item" href="#" onclick="setLanguage('es')">Español</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <section class="hero">
        <div class="container">
            <h1 class="display-4" id="hero-title">Hello, I'm Jesus Arellano Delgado, a Web Developer</h1>
            <p class="lead" id="hero-description">A passionate web developer creating modern and user-friendly applications.</p>
        </div>
    </section>
    
    <section id="about" class="container py-5">
        <h2 class="text-center" id="about-title">About Me</h2>
        <div class="text-center mt-4">
            <img src="{{ asset('Images/chuy.jpg') }}" alt="el_chuy" class="img-chuy">
        </div>
        <br>
        <p class="text-center" id="about-description">I am a web developer with solid experience in programming and a specialization in process automation. I am passionate about creating innovative and efficient solutions, always with a focus on problem-solving. I quickly adapt to dynamic environments, working independently or actively collaborating in a team throughout all phases of a project. I am looking for opportunities to further expand my skills in web development and the implementation of technological solutions. I started in the world of programming in 2016, when I was in high school, developing desktop systems with Visual Basic linked to a SQL Server database. From that moment, I realized that programming was something I was passionate about and enjoyed, so I decided to study systems engineering. I am very passionate about data analysis; everything related to databases has always been of great interest to me. Normalization for proper data management are aspects that I truly enjoy. My future goal is to continue growing as a developer, further focusing on web development, which is one of the areas I enjoy the most. Another of my great passions, in addition to being a software developer, is the world of cars. Whenever I have free time, I enjoy attending car events, modifying and detailing my car, and watching car-related programs. I developed this passion for cars from a very young age.</p>
        
        <div class="text-center mt-4">
            <img src="{{ asset('Images/versa.jpg') }}" alt="el_versa_perron" class="img-fluid">
        </div>

    </section>

    <section id="experience" class="container py-5">
    <h2 class="text-center mb-5" id="experience-title">Professional Experience</h2>
    <ul class="experience-list">
        <!-- Primera experiencia -->
        <li class="experience-item">
            <h5 class="company-name" id="company1-title">Motera Development & Consulting</h5>
            <p class="date-range" id="company1-date">June 2024 - Present</p>
            <p class="role" id="company1-role">Fullstack Developer</p>
            <p class="description" id="company1-description">
                I worked remotely with PHP and the Laravel framework, integrating JavaScript functionalities, developing multiple modules, implementing various libraries, and creating new plugins in TypeScript to meet the needs of end users. I designed new tables for the MySQL database, maintaining the existing normalization levels and adding indexes to optimize query execution times.
            </p>
        </li>

        <li class="experience-item">
            <h5 class="company-name" id="company2-title">Rainde Corporation</h5>
            <p class="date-range" id="company2-date">May 2023 - May 2024</p>
            <p class="role" id="company2-role">Fullstack Developer</p>
            <p class="description" id="company2-description">
            Contributed to the support and development of new modules for an ERP specialized in logistics and transportation companies, using programming languages such as HTML, CSS, Classic ASP, ASP.NET, and SQL Server. Configured web services for CFDI stamping generation, ensuring compliance with tax requirements and enhancing efficiency in the invoicing process. Collaborated closely with my team to achieve efficient results and meet client needs, maintaining constant communication and effective synergy. Designed reports using Crystal Reports and PDF Sharp, providing users with detailed and visually appealing information to support business decision-making.
            </p>
        </li>

        <li class="experience-item">
            <h5 class="company-name" id="company3-title">MexQ</h5>
            <p class="date-range" id="company3-date">June 2022 - April 2023</p>
            <p class="role" id="company3-role">Fullstack Developer</p>
            <p class="description" id="company3-description">
            This was my first professional job related to my field in systems. Here, I designed and developed a complete Balanced Scorecard management system using web technologies such as HTML, CSS, Angular, Laravel, and managed the database with SQL Server. I provided first-line technical support to end users, effectively resolving issues and ensuring a smooth system experience. I created detailed documentation, including procedures and manuals, to facilitate the understanding of users and support staff and ensure efficient system use.
            </p>
        </li>
    </ul>
</section>

    
    <section id="projects" class="container py-5">
        <h2 class="text-center" id="projects-title">Projects</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    
                <img src="{{ asset('Images/angular.jpg') }}" alt="Logo" class="card-img-top">                    
                    <div class="card-body">
                        <h5 class="card-title" id="project1-title">Balanced Scorecard Card</h5>
                        <p class="card-text" id="project1-description">Website developed with Angular and Laravel, designed to capture and manage key company information, facilitating the implementation of the Balanced Scorecard model for measuring and tracking performance in key areas: finance, customers, internal processes, and learning and growth.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('Images/asp.jpg') }}" alt="Logo" class="card-img-top" alt="Project 2">
                    <div class="card-body">
                        <h5 class="card-title" id="project2-title">Transportation Company Management</h5>
                        <p class="card-text" id="project2-description">Creation and maintenance of new modules for an ERP specialized in managing transportation companies, with an emphasis on the billing system. I used ASP and ASP.NET to program and integrate new functionalities that improved operational efficiency and the management of key processes.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('Images/php.jpg') }}" alt="Logo" class="card-img-top" alt="Project 3">
                    <div class="card-body">
                        <h5 class="card-title" id="project3-title">Health Information System</h5>
                        <p class="card-text" id="project3-description">Development and optimization of a news platform using PHP Laravel, designed for writers and journalists. The application allows users to efficiently capture, edit, and approve news articles, integrating a DOI (Digital Object Identifier) system to ensure traceability and uniqueness of each article.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="education" class="container py-5">
    <h2 class="text-center text-primary mb-4" id="education-heading">My Academic Background</h2>
    
    <div class="row align-items-center">
    <div class="col-md-6 mb-4">
        <div class="d-flex align-items-center">
            <div class="education-icon bg-primary text-white p-4 rounded-circle mr-4">
                <i class="fas fa-graduation-cap"></i>
            </div>
            <div>
                <h5 class="font-weight-bold text-white" id="edu1-title">Polytechnic University of Aguascalientes</h5>
                <p class="text-white" id="edu1-description">Graduate student in 2023 with a degree in Systems Engineering, specializing in Software Development.</p>
            </div>
        </div>
    </div>

    <div class="col-md-6 mb-4">
        <div class="d-flex align-items-center">
            <div class="education-icon bg-success text-white p-4 rounded-circle mr-4">
                <i class="fas fa-graduation-cap"></i>
            </div>
            <div>
                <h5 class="font-weight-bold text-white" id="edu2-title">Conalep 1 Aguascalientes</h5>
                <p class="text-white" id="edu2-description">Student graduated in the Computer Technician degree.</p>
            </div>
        </div>
    </div>
</div>


</section>

    
    
    <section id="contact" class="container py-5">
    <h2 class="text-center" id="contact-title">Contact</h2>
    <p class="text-center" id="contact-description">Feel free to reach out for collaboration or any inquiries.</p>
    <div class="text-center">
        <!-- Enlace a GitHub -->
        <a href="https://github.com/ArdelProMaster19" target="_blank" class="btn btn-light mb-3" id="contact-button">
            <i class="fab fa-github me-2"></i>GitHub
        </a><br>

        <!-- Enlace a LinkedIn -->
        <a href="https://www.linkedin.com/in/jesus-arellano-delgado-aa88192bb/" target="_blank" class="btn btn-light mb-3" id="contact-button">
            <i class="fab fa-linkedin me-2"></i>LinkedIn
        </a><br>

        <a href="https://wa.me/4494375459" target="_blank" class="btn btn-light mb-3" id="contact-button">
            <i class="fab fa-whatsapp me-2"></i>WhatsApp
        </a><br>

        <a href="mailto:rcjserver4@gmail.com" class="btn btn-light mb-3" id="contact-button">
            <i class="fas fa-envelope me-2"></i>Email
        </a><br>

        <a href="{{ asset('Documents/cv.pdf') }}" download class="btn btn-light mb-3" id="contact-button">
            <i class="fas fa-file-download me-2"></i>Download CV
        </a>

    </div>

</section>

    
    <footer class="text-center py-3 bg-dark text-white">
        <p>&copy; {{ now()->year }} Jesus Arellano Delgado. All rights reserved.</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const translations = {
            en: {
                "about-link": "About",
                "experience-title": "Professional Experience",
                "projects-link": "Projects",
                "contact-link": "Contact",
                "experience-link": "Professional Experience",
                "education-link": "Education",
                "hero-title": "Hello, I'm Jesus Arellano Delgado, a Web Developer",
                "hero-description": "A passionate web developer creating modern and user-friendly applications.",
                "about-title": "About Me",
                "about-description": "I am a web developer with solid experience in programming and a specialization in process automation. I am passionate about creating innovative and efficient solutions, always with a focus on problem-solving. I quickly adapt to dynamic environments, working independently or actively collaborating in a team throughout all phases of a project. I am looking for opportunities to further expand my skills in web development and the implementation of technological solutions. I started in the world of programming in 2016, when I was in high school, developing desktop systems with Visual Basic linked to a SQL Server database. From that moment, I realized that programming was something I was passionate about and enjoyed, so I decided to study systems engineering. I am very passionate about data analysis; everything related to databases has always been of great interest to me. Normalization for proper data management are aspects that I truly enjoy. My future goal is to continue growing as a developer, further focusing on web development, which is one of the areas I enjoy the most. Another of my great passions, in addition to being a software developer, is the world of cars. Whenever I have free time, I enjoy attending car events, modifying and detailing my car, and watching car-related programs. I developed this passion for cars from a very young age.",
                "projects-title": "Projects",
                "project1-title": "Balanced Scorecard Card",
                "project1-description": "Website developed with Angular and Laravel, designed to capture and manage key company information, facilitating the implementation of the Balanced Scorecard model for measuring and tracking performance in key areas: finance, customers, internal processes, and learning and growth.",
                "project2-title": "Transportation company management",
                "project2-description": "Creation and maintenance of new modules for an ERP specialized in managing transportation companies, with an emphasis on the billing system. I used ASP and ASP.NET to program and integrate new functionalities that improved operational efficiency and the management of key processes.",
                "project3-title": "Health Information System",
                "project3-description": "Development and optimization of a news platform using PHP Laravel, designed for writers and journalists. The application allows users to efficiently capture, edit, and approve news articles, integrating a DOI (Digital Object Identifier) system to ensure traceability and uniqueness of each article.",
                "contact-title": "Contact",
                "contact-description": "Feel free to reach out for collaboration or any inquiries.",
                "contact-button": "Git Hub",
                "navbarDropdown": "Languague",
                "company1-title": "Motera Development & Consulting",
                "company1-date": "June 2024 - Present",
                "company1-role": "Fullstack Developer",
                "company1-description": "I worked remotely with PHP and the Laravel framework, integrating JavaScript functionalities, developing multiple modules, implementing various libraries, and creating new plugins in TypeScript to meet the needs of end users. I designed new tables for the MySQL database, maintaining the existing normalization levels and adding indexes to optimize query execution times.",
                "company2-title": "Rainde Corporation",
                "company2-date": "May 2023 - May 2024",
                "company2-role": "Fullstack Developer",
                "company2-description": "Contributed to the support and development of new modules for an ERP specialized in logistics and transportation companies, using programming languages such as HTML, CSS, Classic ASP, ASP.NET, and SQL Server. Configured web services for CFDI stamping generation, ensuring compliance with tax requirements and enhancing efficiency in the invoicing process. Collaborated closely with my team to achieve efficient results and meet client needs, maintaining constant communication and effective synergy. Designed reports using Crystal Reports and PDF Sharp, providing users with detailed and visually appealing information to support business decision-making.",
                "company3-title": "MexQ",
                "company3-date": "June 2022 - April 2023",
                "company3-role": "Fullstack Developer",
                "company3-description": "This was my first professional job related to my field in systems. Here, I designed and developed a complete Balanced Scorecard management system using web technologies such as HTML, CSS, Angular, Laravel, and managed the database with SQL Server. I provided first-line technical support to end users, effectively resolving issues and ensuring a smooth system experience. I created detailed documentation, including procedures and manuals, to facilitate the understanding of users and support staff and ensure efficient system use.",
                "edu1-title": "Polytechnic University of Aguascalientes",
                "edu1-description": "Graduate student in 2023 with a degree in Systems Engineering, specializing in Software Development.",
                "edu2-title": "Conalep 1 Aguascalientes",
                "edu2-description": "Student graduated in the Computer Technician degree."
            },
            es: {
                "about-link": "Sobre Mi",
                "experience-title": "Experiencia Profesional",
                "projects-link": "Proyectos",
                "contact-link": "Contacto",
                "experience-link": "Experiencia Profesional",
                "education-link": "Educación",
                "hero-title": "Hola, soy Jesús Arellano Delgado, un Desarrollador Web",
                "hero-description": "Un desarrollador web apasionado creando aplicaciones modernas y fáciles de usar.",
                "about-title": "Sobre Mí",
                "about-description": "Soy un desarrollador web con una sólida experiencia en programación y especialización en la automatización de procesos. Me apasiona crear soluciones innovadoras y eficientes, siempre con un enfoque en la resolución de problemas. Me adapto rápidamente a entornos dinámicos, trabajando de forma independiente o colaborando activamente en equipo durante todas las fases de un proyecto. Busco oportunidades para seguir ampliando mis habilidades en desarrollo web y en la implementación de soluciones tecnológicas. Comencé en el mundo de la programación en 2016, cuando estaba en la preparatoria, desarrollando sistemas de escritorio con Visual Basic enlazados a una base de datos SQL Server. Desde ese momento, me di cuenta de que la programación era algo que me apasionaba y me gustaba, por lo que decidí estudiar ingeniería en sistemas. Me apasiona mucho el análisis de datos; todo lo relacionado con bases de datos siempre ha sido de mi interés. La normalización para la correcta administración de los datos son aspectos que realmente disfruto. Mi objetivo a futuro es seguir creciendo como desarrollador, continuar enfocándome en el desarrollo web, que es una de las ramas que más me gustan. Otra de mis grandes pasiones, además de ser desarrollador de software, es el mundo de los autos. Siempre que tengo tiempo libre, me gusta asistir a eventos de autos, modificar y detallar mi coche, y ver programas relacionados con autos. Desde muy pequeño, adquirí este bonito gusto por los autos.",
                "projects-title": "Proyectos",
                "project1-title": "Balanced Scorecard Card",
                "project1-description": "Sitio web desarrollado con Angular y Laravel diseñado para capturar y gestionar información clave de la empresa, facilitando la implementación del modelo Balanced Scorecard para la medición y seguimiento del desempeño en áreas clave: finanzas, clientes, procesos internos y aprendizaje y crecimiento.",
                "project2-title": "Géstion de empresas de transporte",
                "project2-description": "Creación y mantenimiento de nuevos módulos para un ERP especializado en la gestión de empresas de transporte, con énfasis en el sistema de facturación. Utilicé ASP y ASP.NET para programar e integrar nuevas funcionalidades que mejoraron la eficiencia operativa y la gestión de procesos clave.",
                "project3-title": "Sistema de información para la salud",
                "project3-description": "Desarrollo y optimización de una plataforma web de noticias utilizando Laravel PHP, diseñada para escritores y periodistas. La aplicación permite a los usuarios capturar, editar, y aprobar noticias de manera eficiente, integrando un sistema de identificación DOI (Digital Object Identifier) para garantizar la trazabilidad y singularidad de cada artículo.",
                "contact-title": "Contacto",
                "contact-description": "No dudes en ponerte en contacto para colaborar o hacer consultas.",
                "contact-button": "GitHub",
                "navbarDropdown": "Lenguaje",
                "company1-title": "Motera Development & Consulting",
                "company1-date": "Enero 2024 - Actualidad",
                "company1-role": "Desarrollador Fullstack",
                "company1-description": "Trabajé de forma remota con PHP y el framework Laravel, integrando funcionalidades de JavaScript, desarrollando múltiples módulos, implementando diversas bibliotecas y creando nuevos complementos en TypeScript para satisfacer las necesidades de los usuarios finales. Diseñé nuevas tablas para la base de datos MySQL, manteniendo los niveles de normalización existentes y agregando índices para optimizar los tiempos de ejecución de las consultas.",
                "company2-title": "Corporativo Rainde",
                "company2-date": "Mayo 2023 - Mayo 2024",
                "company2-role": "Desarrollador Fullstack",
                "company2-description": "Contribuí al soporte y desarrollo de nuevos módulos para un ERP especializado en empresas de logística y transporte, utilizando lenguajes de programación como HTML, CSS, Classic ASP, ASP.NET y SQL Server. Configuré servicios web para la generación de timbrado CFDI, asegurando el cumplimiento de los requisitos fiscales y mejorando la eficiencia en el proceso de facturación. Colaboré estrechamente con mi equipo para lograr resultados eficientes y satisfacer las necesidades del cliente, manteniendo una comunicación constante y una sinergia efectiva. Diseñé informes utilizando Crystal Reports y PDF Sharp, proporcionando a los usuarios información detallada y visualmente atractiva para apoyar la toma de decisiones empresariales.",
                "company3-title": "MexQ",
                "company2-date": "Junio 2022 - Abril 2023",
                "company3-role": "Desarrollador Fullstack",
                "company3-description": "Este fue mi primer empleo profesional relacionado con mi campo en sistemas. Aquí, diseñé y desarrollé un sistema de gestión de balance score card completo utilizando tecnologías web como HTML, CSS, Angular, Laravel y gestioné la base de datos con SQL Server. Proporcioné soporte técnico de primer nivel a los usuarios finales, resolviendo eficazmente los problemas y asegurando una experiencia fluida con el sistema. Creé documentación detallada, incluyendo procedimientos y manuales, para facilitar la comprensión de los usuarios y el personal de soporte y un uso eficiente del sistema.",
                "edu1-title": "Universidad Politécnica de Aguascalientes",
                "edu1-description": "Estudiante egresado en 2023 con un título en Ingeniería en Sistemas, especializado en Desarrollo de Software.",
                "edu2-title": "Conalep 1 Aguascalientes",
                "edu2-description": "Estudiante egresado en la carrera de Técnico en Informática.",
                "company3-date": "Junio 2022 - Abril 2023"
            }
        };

        function setLanguage(lang) {
            const translation = translations[lang];
            for (const key in translation) {
                if (translation.hasOwnProperty(key)) {
                    const element = document.getElementById(key);
                    if (element) {
                        element.textContent = translation[key];
                    }
                }
            }
        }
    </script>
</body>
</html>
