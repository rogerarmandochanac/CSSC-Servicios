<div class="contacto contenedor">
    <div class="contacto-text">
        <h1>¿Tienes un desafio en mente?</h1>
        <h3>Contactanos.</h3>
        <p>En CSSC protegemos a las organizaciones de las ciberamenazas, desarrollando soluciones únicas y brindando servicios que dan confianza.</p>
    </div>
    <form action="" method="post">
        @csrf
        <div class="nombre">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="apellido">
            <label for="surname">Apellido:</label>
            <input type="text" id="surname" name="surname" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="phone">Telefono:</label>
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div>
            <label for="phone">Empresa:</label>
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div>
            <label for="phone">Cargo:</label>
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div>
            <label for="phone">Pais:</label>
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="mensaje">
            <label for="message">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" required placeholder="Escribe tu mensaje aqui"></textarea>
        </div>
        <div>
            <button type="submit" class="contacto-button">Enviar</button>
        </div>
    </form>
</div>
