@props(['brand'])
<div class="card" style="width: 100%;">
    <img height="230" src="{{ url( 'brand/', $brand->image) }}" class="card-img-top" alt="{{ $brand->name }}" style="object-fit: cover; object-position: center;">
    <div class="card-body">
        <h5 class="card-title">{{ $brand->name }}</h5>
    </div>
</div>
