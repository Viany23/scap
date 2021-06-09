<!-- Cuando el div era estático

<div class="form-group">
    <label>Precio del producto</label>
    <input type="text" class="form-control" id="precio">
    
</div>

-->

<!-- El div de forma dinámica -->

<div class="form-group">
    <label for="{{ $name }}">{{ ucfirst($name) }}</label>
    <input type="{{ $type }}" class="form-control" id="{{ $name }}">
</div>



