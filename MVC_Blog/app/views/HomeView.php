</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Blog Semana del Sistema 2025</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #1a1a1a;
            background: linear-gradient(135deg, #244673 0%, #1E2D40 100%);
            min-height: 100vh;
        }

        header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 3rem 2rem;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #30618C, #9BCAF2, #30618C);
        }

        header h1 {
            font-size: 2.5rem;
            background: linear-gradient(135deg, #30618C 0%, #9BCAF2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.5rem;
            font-weight: 700;
        }

        header p {
            color: #5C6873;
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
        }

        main {
            max-width: 1200px;
            margin: 3rem auto;
            padding: 0 2rem;
        }

        .hero {
            background: rgba(255, 255, 255, 0.98);
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            animation: fadeInUp 0.6s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero h2 {
            color: #1E2D40;
            font-size: 2rem;
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
        }

        .hero h2::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 60%;
            height: 3px;
            background: linear-gradient(90deg, #30618C, #9BCAF2);
            border-radius: 2px;
        }

        .hero h3 {
            color: #244673;
            font-size: 1.5rem;
            margin: 2rem 0 1rem;
        }

        .hero p {
            color: #5C6873;
            font-size: 1.05rem;
            margin-bottom: 1rem;
        }

        ul.features {
            margin: 1.5rem 0;
            padding-left: 1.5rem;
            list-style: none;
        }

        ul.features li {
            padding: 0.8rem 0;
            color: #1E2D40;
            position: relative;
            padding-left: 2rem;
        }

        ul.features li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #30618C;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .links {
            margin-top: 2.5rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 1rem;
        }

        .btn {
            display: block;
            padding: 1rem 1.5rem;
            background: linear-gradient(135deg, #30618C 0%, #244673 100%);
            color: #fff;
            border-radius: 12px;
            text-decoration: none;
            text-align: center;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(48, 97, 140, 0.3);
            position: relative;
            overflow: hidden;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(48, 97, 140, 0.4);
        }

        .btn.secondary {
            background: linear-gradient(135deg, #9BCAF2 0%, #30618C 100%);
            box-shadow: 0 4px 15px rgba(155, 202, 242, 0.3);
        }

        .btn.secondary:hover {
            box-shadow: 0 8px 25px rgba(155, 202, 242, 0.4);
        }


        footer {
            text-align: center;
            padding: 2rem;
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.95rem;
            margin-top: 3rem;
        }

        @media (max-width: 768px) {
            header h1 {
                font-size: 1.8rem;
            }

            .hero {
                padding: 2rem 1.5rem;
            }

            .hero h2 {
                font-size: 1.5rem;
            }

            .links {
                grid-template-columns: 1fr;
            }

            main {
                margin: 2rem auto;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>🚀 Semana del Sistema 2025</h1>
        <p>Bienvenido al sitio del proyecto y evento: información, publicaciones y recursos de la Semana del Sistema 2025.</p>
    </header>
    
    <main>
        <section class="hero">
            <h2>¿En qué consiste este proyecto?</h2>
            <p>Este repositorio aloja el blog y la web informativa de la "Semana del Sistema 2025". Aquí encontrarás:</p>
            
            <ul class="features">
                <li>Publicaciones y artículos relacionados con el evento</li>
                <li>Agenda y actividades programadas durante la semana</li>
                <li>Información sobre los organizadores y ponentes</li>
                <li>Recursos, fotos y contactos para participantes</li>
            </ul>

            <h3>¿Qué es la Semana del Sistema?</h3>
            <p>La Semana del Sistema es un evento académico y profesional que reúne a estudiantes y profesionales para compartir proyectos, charlas y talleres relacionados con la ingeniería de sistemas, desarrollo de software y tecnologías afines.</p>

            <div class="links">
                <a class="btn" href="/evento1">DIA 1</a>
                <a class="btn secondary" href="/evento2">DIA 2</a>
                <a class="btn" href="/evento3">DIA 3</a>
                <a class="btn" href="/evento4">DIA 4</a>
                <a class="btn" href="/evento5">DIA 5</a>
            </div>

        </section>
    </main>

    <footer>
        <p>© 2025 — Semana del Sistema. Proyecto desarrollado como parte de la recuperación TPI.</p>
    </footer>
</body>
</html>