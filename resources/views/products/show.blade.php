{{-- filepath: c:\laragon\www\GestionProductos\resources\views\products\show.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h1>Detalles del Producto</h1>
        <div class="mb-3">
            <strong>Nombre:</strong> {{ $product->name }}
        </div>
        <div class="mb-3">
            <strong>Descripción:</strong> {{ $product->description }}
        </div>
        <div class="mb-3">
            <strong>Precio:</strong> {{ $product->price }}
        </div>
        <div class="mb-3">
            <strong>Stock:</strong> {{ $product->stock }}
        </div>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Volver</a>
    </div>
</body>

</html>
