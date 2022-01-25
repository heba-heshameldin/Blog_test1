<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="margin-top:5px">
    <option selected disabled>Choose categories</option>
    <x-components.categories : catagories="$catagories"/>
    @foreach ($catagories as $cat)
        <option value="{{ $cat->id }}">{{ $cat->title }}</option>
    @endforeach
</select>