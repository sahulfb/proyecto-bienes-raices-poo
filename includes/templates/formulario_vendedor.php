<fieldset>
        <legend>Informacion General</legend>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="vendedor[nombre]" placeholder="Nombre del Vendedor(a)" value="<?php echo s($vendedor->nombre); ?>">

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="vendedor[apellido]" placeholder="Apellido del Vendedor(a)" value="<?php echo s($vendedor->apellido); ?>">
</fieldset>

<fieldset>
        <legend>Informacion Extra</legend>
        <label for="telefono">Telefono:</label>
        <input type="text" id="telefono" name="vendedor[telefono]" placeholder="Telefono del Vendedor(a)" value="<?php echo s($vendedor->telefono); ?>">
</fieldset>