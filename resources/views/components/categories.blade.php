<select name="category" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="margin-top:5px">
    <option selected disabled>Choose categories</option>
    @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->title }}</option>
    @endforeach
</select>
