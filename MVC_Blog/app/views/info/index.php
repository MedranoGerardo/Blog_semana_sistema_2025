<div class="container">
    <section class="info-personal">
        <h1>Información Personal</h1>
        
        <div class="profile-card">
            <div class="profile-image">
                <img src="<?= $datosPersonales['foto'] ?>" alt="Foto de <?= $datosPersonales['nombre'] ?>" style="width:200px; border-radius:10px;">
            </div>
            
            <div class="profile-info">
                <h2><?php echo $datosPersonales['nombre']; ?></h2>
                
                <div class="info-item">
                    <strong>Carnet:</strong>
                    <span><?php echo $datosPersonales['carnet']; ?></span>
                </div>
                
                <div class="info-item">
                    <strong>Carrera:</strong>
                    <span><?php echo $datosPersonales['carrera']; ?></span>
                </div>
                
                <div class="info-item">
                    <strong>Email:</strong>
                    <span><?php echo $datosPersonales['email']; ?></span>
                </div>
            </div>
        </div>
        
        <div class="about-project">
            <h3>Sobre Este Proyecto</h3>
            <p>
                Este blog fue desarrollado como parte de la documentación de la 
                Semana de Sistemas 2025. Implementa una arquitectura MVC (Modelo-Vista-Controlador) 
                utilizando PHP para la gestión del contenido y MySQL para el almacenamiento 
                de datos de visitas.
            </p>
            
            <h4>Tecnologías Utilizadas:</h4>
            <ul>
                <li>PHP 8.2+</li>
                <li>MySQL</li>
            </ul>
        </div>
    </section>
</div>