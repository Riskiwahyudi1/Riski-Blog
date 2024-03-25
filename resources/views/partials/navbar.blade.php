<nav class="navbar navbar-expand-lg  bg-primary">
    <div class="container">
        <a class="navbar-brand text-white" href="/">Riski Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link  {{ $active === 'Home' ? 'text-white' : '' }}"  href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ $active === 'About' ? 'text-white' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ $active === 'Blog' ? 'text-white ' : '' }}" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ $active === 'Categories' ? 'text-white ' : '' }}" href="/categories">Categories</a>
                </li>

            </ul>
        </div>
    </div>
</nav>