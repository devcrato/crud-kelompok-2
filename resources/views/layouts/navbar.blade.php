<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="{{  route('produk.index') }}">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTop">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTop">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <x-nav-item :href="route('produk.index')" :active="request()->routeIs('produk.index')">Produk</x-nav-item>
            </ul>
        </div>
    </div>
</nav>
