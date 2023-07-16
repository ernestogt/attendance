<?php
$title = "Index";
require_once 'includes/header.php'; ?>

<h1 class="text-center">Registration</h1>
<!-- date of birth
    first name
    last name
    email
    password
-->
<form>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre">
    </div>
    <div class="mb-3">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="apellido">
    </div>
    <div class="mb-3">
        <label for="nacimiento" class="form-label">Nacimiento</label>
        <input type="date" class="form-control" id="nacimiento">
    </div>
    <div class="mb-3">
        <label for="telefono" class="form-label">Telefono</label>
        <input type="tel" class="form-control" id="telefono" aria-describedby="telefonoHelp">
        >
    </div>
    <div class="mb-3">
        <label for="especialidad" class="form-label">Area de especialidad</label>
        <select class="form-select" aria-label="Area de especialidad" id="especialidad">
            <option>Desarrollador de software</option>
            <option>Administrador de base de datos</option>
            <option>Administrador web</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php require_once 'includes/footer.php'; ?>