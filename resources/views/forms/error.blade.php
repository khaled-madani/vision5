@if ($errors->any())
<div class="alert alert-warning">
    <ul>
        @foreach ($errors->all() as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</div>
@endif
