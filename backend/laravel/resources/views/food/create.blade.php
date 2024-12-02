<form action="{{ route('food.store') }}" method="POST">
    @csrf
    <!-- Ételt hozzáadó mezők -->
    <div class="form-group">
        <label for="name">Étel neve</label>
        <input type="text" name="name" class="form-control" id="name" required>
    </div>

    <div class="form-group">
        <label for="price">Ár</label>
        <input type="number" name="price" class="form-control" id="price" required>
    </div>

    <div class="form-group">
        <label for="description">Leírás</label>
        <textarea name="description" class="form-control" id="description"></textarea>
    </div>

    <!-- Étterem kiválasztása -->
    <div class="form-group">
        <label for="restaurant_id">Válassz éttermet</label>
        <select name="restaurant_id" class="form-control" id="restaurant_id" required>
            <option value="">-- Válassz éttermet --</option>
            @foreach($restaurants as $restaurant)
                <option value="{{ $restaurant->id }}">{{ $restaurant->name }}</option>
            @endforeach
        </select>
    </div>

    <!-- Kép URL -->
    <div class="form-group">
        <label for="picture_path">Kép URL</label>
        <input type="text" name="picture_path" class="form-control" id="picture_path" placeholder="Adj meg egy kép URL-jét">
    </div>

    <button type="submit" class="btn btn-primary">Étel hozzáadása</button>
</form>
