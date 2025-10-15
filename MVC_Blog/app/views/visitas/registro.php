<div class="container">
    <section class="registro-visitas">
        <h1>Registro de Visitas</h1>
        <p class="lead">
            Si has visitado este blog, nos encantaría saber tu opinión. 
            Por favor completa el siguiente formulario.
        </p>
        
        <?php if (isset($_SESSION['mensaje'])): ?>
            <div class="alert alert-<?php echo $_SESSION['tipo_mensaje']; ?>">
                <?php 
                    echo $_SESSION['mensaje']; 
                    unset($_SESSION['mensaje']);
                    unset($_SESSION['tipo_mensaje']);
                ?>
            </div>
        <?php endif; ?>
        
    <form action="index.php?url=visitas/guardar" method="POST" class="registro-form">
            <div class="form-group">
                <label for="nombre">Nombre Completo *</label>
                <input 
                    type="text" 
                    id="nombre" 
                    name="nombre" 
                    required 
                    maxlength="100"
                    placeholder="Ingresa tu nombre completo"
                >
            </div>
            
            <div class="form-group">
                <label for="email">Correo Electrónico *</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    required 
                    maxlength="100"
                    placeholder="ejemplo@correo.com"
                >
            </div>
            
            <div class="form-group">
                <label for="comentario">Comentario (Opcional)</label>
                <textarea 
                    id="comentario" 
                    name="comentario" 
                    rows="5"
                    placeholder="Comparte tu opinión sobre el blog..."
                ></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Registrar Visita</button>
        </form>
    </section>
</div>