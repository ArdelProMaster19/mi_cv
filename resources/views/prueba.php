<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Jesus Arellano Delgado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
 
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Jesus Arellano Delgado</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="container">
            <h1 class="display-4">Hello, I'm Jesus Arellano Delgado, a Web Developer</h1>
            <p class="lead">A passionate web developer creating modern and user-friendly applications.</p>
        </div>
    </section>

    <section id="about" class="container py-5">
        <h2 class="section-title">About Me</h2>
        <div class="text-center mt-4">
            <img src="{{ asset('Images/chuy.jpg') }}" alt="el_chuy" class="img-chuy">
        </div>
        <p class="text-center mt-3">I am a web developer with solid experience in programming and a specialization in process automation...</p>
    </section>

    <section id="contact" class="container py-5">
        <h2 class="section-title">Contact</h2>
        <div class="text-center">
            <a href="https://github.com/tuusuario" target="_blank" class="btn btn-custom">GitHub</a>
            <a href="mailto:jesusarellano27091@gmail.com" class="btn btn-custom">Email</a>
        </div>
    </section>

    <footer class="text-center py-3 bg-dark text-white">
        <p>&copy; 2025 Jesus Arellano Delgado. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>