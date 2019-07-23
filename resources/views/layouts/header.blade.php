<section class="hero is-success is-mediumheight">
  <!-- Hero head: will stick at the top -->
  <div class="hero-head">
    <header class="navbar">
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item">
            <img src="https://bulma.io/images/bulma-type-white.png" alt="Logo">
          </a>
          <span class="navbar-burger burger" data-target="navbarMenuHeroC">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
        <div id="navbarMenuHeroC" class="navbar-menu">
          <div class="navbar-end">
            <a class="navbar-item" :class="{'is-active': <?php echo json_encode(Request::path()=='home') ?>}" href="/home">
              Home
            </a>
            <a class="navbar-item" :class="{'is-active': <?php echo json_encode(Request::path()=='carousel') ?>}" href="/carousel">
              Carousel
            </a>
            <a class="navbar-item">
              Documentation
            </a>
            <span class="navbar-item">
              <a class="button is-success is-inverted">
                <span class="icon">
                  <i class="fab fa-github"></i>
                </span>
                <span>Download</span>
              </a>
            </span>
          </div>
        </div>
      </div>
    </header>
  </div>

  <!-- Hero content: will be in the middle -->
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title">
        Title
      </h1>
      <h2 class="subtitle">
        Subtitle
      </h2>
    </div>
  </div>
  {{var_dump(Request::path())}}
  <!-- Hero footer: will stick at the bottom -->
  <div class="hero-foot">
    @include('layouts.nav')
  </div>
</section>

@if(in_array(Request::path(), ["home","/"]))
<section class="section">
  <div class="container">
    <router-view></router-view>  
  </div>
</section>
@endif