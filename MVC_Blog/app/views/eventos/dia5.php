<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Día 1 - Inauguración | Semana de Sistemas 2025</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #2563eb;
            --secondary-color: #1e40af;
            --accent-color: #3b82f6;
            --success-color: #10b981;
            --text-color: #1f2937;
            --text-light: #6b7280;
            --bg-color: #f9fafb;
            --white: #ffffff;
            --border-color: #e5e7eb;
            --shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--bg-color);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Event Header */
        .event-header {
            text-align: center;
            padding: 3rem 0 2rem;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: var(--white);
            border-radius: 12px;
            margin: 2rem 0;
            box-shadow: var(--shadow-lg);
        }

        .event-header h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            font-weight: 700;
        }

        .event-date {
            font-size: 1.25rem;
            opacity: 0.9;
            font-weight: 500;
        }

        /* Event Content */
        .event-content {
            background: var(--white);
            padding: 3rem;
            border-radius: 12px;
            box-shadow: var(--shadow);
            margin-bottom: 2rem;
        }

        .event-content h2 {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            border-bottom: 3px solid var(--accent-color);
            padding-bottom: 0.5rem;
        }

        .event-content h3 {
            font-size: 1.75rem;
            color: var(--text-color);
            margin: 2.5rem 0 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .event-content h3::before {
            content: "▶";
            color: var(--primary-color);
            font-size: 1.2rem;
        }

        .event-description {
            background: linear-gradient(to right, #eff6ff, #dbeafe);
            padding: 1.5rem;
            border-radius: 8px;
            border-left: 4px solid var(--primary-color);
            margin-bottom: 2rem;
        }

        .event-description p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-color);
        }

        /* Activities */
        .activities {
            margin: 2rem 0;
        }

        .activity {
            background: linear-gradient(to right, #f9fafb, #ffffff);
            padding: 2rem;
            border-radius: 10px;
            margin-bottom: 1.5rem;
            border-left: 5px solid var(--primary-color);
            box-shadow: var(--shadow);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .activity:hover {
            transform: translateX(5px);
            box-shadow: var(--shadow-lg);
        }

        .activity h4 {
            color: var(--primary-color);
            font-size: 1.4rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .activity h4::before {
            content: "🎯";
            font-size: 1.3rem;
        }

        .activity p {
            margin-bottom: 0.75rem;
            font-size: 1.05rem;
        }

        .activity p strong {
            color: var(--secondary-color);
            font-weight: 600;
        }

        /* Gallery */
        .gallery {
            margin: 3rem 0;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            margin-top: 1.5rem;
        }

        .gallery-item {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: transform 0.3s, box-shadow 0.3s;
            background: var(--white);
        }

        .gallery-item:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-lg);
        }

        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            display: block;
            transition: transform 0.3s;
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        .gallery-caption {
            padding: 1rem;
            background: var(--white);
            text-align: center;
            color: var(--text-light);
            font-size: 0.95rem;
            font-weight: 500;
        }

        /* Videos */
        .videos {
            margin: 3rem 0;
            background: linear-gradient(to right, #fef3c7, #fde68a);
            padding: 2rem;
            border-radius: 12px;
            border: 2px solid #fbbf24;
        }

        .videos h3 {
            color: #92400e;
        }

        .video-container {
            margin: 1.5rem 0;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--shadow-lg);
        }

        .video-container video {
            width: 100%;
            display: block;
        }

        .video-caption {
            margin-top: 1rem;
            color: #78350f;
            text-align: center;
            font-weight: 600;
            font-size: 1.05rem;
        }

        /* Attendance Proof */
        .attendance-proof {
            margin: 3rem 0;
            padding: 2rem;
            background: linear-gradient(135deg, #dcfce7, #bbf7d0);
            border-radius: 12px;
            border: 2px solid var(--success-color);
        }

        .attendance-proof h3 {
            color: #065f46;
        }

        .attendance-proof > p {
            color: #047857;
            font-size: 1.05rem;
            margin-bottom: 1.5rem;
        }

        .proof-images {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 1.5rem;
        }

        .proof-images img {
            width: 100%;
            border-radius: 10px;
            box-shadow: var(--shadow-lg);
            transition: transform 0.3s;
            border: 3px solid var(--success-color);
        }

        .proof-images img:hover {
            transform: scale(1.05);
        }

        /* Day Navigation */
        .day-navigation {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 2rem 0;
            padding: 2rem;
            background: var(--white);
            border-radius: 12px;
            box-shadow: var(--shadow);
        }

        .btn {
            display: inline-block;
            padding: 1rem 2rem;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            color: var(--white);
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: var(--shadow);
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
        }

        /* Badges */
        .badge {
            display: inline-block;
            padding: 0.35rem 0.75rem;
            background: var(--primary-color);
            color: var(--white);
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-left: 0.5rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .event-header h1 {
                font-size: 1.75rem;
            }

            .event-content {
                padding: 1.5rem;
            }

            .day-navigation {
                flex-direction: column;
                gap: 1rem;
            }

            .btn {
                width: 100%;
                text-align: center;
            }
        }

        /* Animations */
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

        .event-content > * {
            animation: fadeInUp 0.6s ease-out;
        }

        .activity:nth-child(1) { animation-delay: 0.1s; }
        .activity:nth-child(2) { animation-delay: 0.2s; }
        .activity:nth-child(3) { animation-delay: 0.3s; }
    </style>
</head>
<body>
    <div class="container">
        <div class="event-header">
            <h1>Día 1 - Inauguración <span class="badge">Lunes</span></h1>
            <p class="event-date">📅 Lunes 10 de Marzo, 2025</p>
        </div>
        
        <section class="event-content">
            <h2>🎊 Inauguración de la Semana de Sistemas 2025</h2>
            
            <div class="event-description">
                <p>
                    El primer día comenzó con la ceremonia de inauguración del evento, 
                    donde autoridades universitarias y representantes estudiantiles dieron 
                    la bienvenida a todos los participantes. Un momento memorable que marcó 
                    el inicio de cinco días llenos de aprendizaje y tecnología.
                </p>
            </div>
            
            <div class="activities">
                <h3>Actividades del Día</h3>
                
                <div class="activity">
                    <h4>1. Ceremonia de Inauguración</h4>
                    <p><strong>⏰ Hora:</strong> 8:00 AM - 9:00 AM</p>
                    <p><strong>📍 Lugar:</strong> Auditorio Principal</p>
                    <p>
                        Palabras de bienvenida del Director de la Escuela de Sistemas, 
                        presentación del programa de la semana y apertura oficial del evento.
                        Se destacó la importancia de la tecnología en el desarrollo profesional.
                    </p>
                </div>
                
                <div class="activity">
                    <h4>2. Ponencia Magistral: "El Futuro de la IA"</h4>
                    <p><strong>⏰ Hora:</strong> 9:30 AM - 11:00 AM</p>
                    <p><strong>👨‍🏫 Ponente:</strong> Dr. Juan Pérez</p>
                    <p><strong>📚 Tema:</strong> Inteligencia Artificial y Machine Learning</p>
                    <p>
                        El Dr. Pérez compartió su visión sobre las tendencias actuales en 
                        Inteligencia Artificial y cómo están transformando la industria tecnológica.
                        Presentó casos reales de implementación de IA en empresas de la región.
                    </p>
                </div>
                
                <div class="activity">
                    <h4>3. Panel de Discusión: "Tecnología y Sociedad"</h4>
                    <p><strong>⏰ Hora:</strong> 2:00 PM - 4:00 PM</p>
                    <p><strong>👥 Panelistas:</strong> Diversos expertos del sector tecnológico</p>
                    <p>
                        Debate sobre el impacto social de las nuevas tecnologías y la 
                        responsabilidad de los profesionales en sistemas. Se abordaron temas 
                        como ética en IA, privacidad de datos y transformación digital.
                    </p>
                </div>
            </div>
            
            <div class="gallery">
                <h3>📸 Galería de Fotos del Día</h3>
                <div class="gallery-grid">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=400&h=300&fit=crop" alt="Inauguración">
                        <p class="gallery-caption">🎤 Ceremonia de inauguración</p>
                    </div>
                    
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1475721027785-f74eccf877e2?w=400&h=300&fit=crop" alt="Ponencia">
                        <p class="gallery-caption">🧠 Dr. Pérez durante su ponencia sobre IA</p>
                    </div>
                    
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1591115765373-5207764f72e7?w=400&h=300&fit=crop" alt="Asistencia">
                        <p class="gallery-caption">👨‍💻 Mi participación en el evento</p>
                    </div>

                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678?w=400&h=300&fit=crop" alt="Panel">
                        <p class="gallery-caption">💬 Panel de discusión sobre tecnología</p>
                    </div>
                    
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?w=400&h=300&fit=crop" alt="Audiencia">
                        <p class="gallery-caption">👥 Audiencia participando activamente</p>
                    </div>
                    
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?w=400&h=300&fit=crop" alt="Networking">
                        <p class="gallery-caption">🤝 Momento de networking</p>
                    </div>
                </div>
            </div>
            
            <div class="videos">
                <h3>🎥 Videos del Día</h3>
                <div class="video-container">
                    <video controls poster="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=800&h=450&fit=crop">
                        <source src="/videos/dia1/inauguracion.mp4" type="video/mp4">
                        Tu navegador no soporta el elemento de video.
                    </video>
                    <p class="video-caption">🎬 Video resumen de la inauguración y ponencias del día 1</p>
                </div>
            </div>
            
            <div class="attendance-proof">
                <h3>✅ Comprobante de Mi Asistencia</h3>
                <p>
                    📌 A continuación se muestra evidencia fotográfica de mi participación 
                    en las actividades del día 1. Estuve presente desde la inauguración 
                    hasta el panel de discusión.
                </p>
                <div class="proof-images">
                    <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=400&h=300&fit=crop" alt="Mi asistencia 1">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=400&h=300&fit=crop" alt="Mi asistencia 2">
                    <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=400&h=300&fit=crop" alt="Mi asistencia 3">
                </div>
            </div>
        </section>
        
        <nav class="day-navigation">
            <a href="<?php echo url('evento/dia4'); ?>" class="btn">← Día 4 - Talleres</a>
            <a href="<?php echo url(); ?>" class="btn">Volver al inicio</a>
        </nav>
    </div>
</body>
</html>