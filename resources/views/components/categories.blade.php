<select  name="category_id"  class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="margin-top:5px">
    <option  disabled>Choose categories</option>
    @foreach ($categories as $category)
        <option value="{{ $category->id }}" {{$category->id == $categoryId ?? 'selected'}}>{{ $category->title }}</option>
        {{-- <input type="hidden" value="{{ $category->id }}" name="category_id"> --}}

    @endforeach
</select>
