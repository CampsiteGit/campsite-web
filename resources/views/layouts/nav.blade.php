<nav class="navbar is-transparent is-bold" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="/">
        <img src="{{ asset('favicon.png') }}">
      </a>
      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="dropdown">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
  
    <div id="dropdown" class="navbar-menu is-transparent">
      <div class="navbar-start">
        <a class="navbar-item" href="/about">
          About
        </a>
        <a class="navbar-item" href="/placeholder">
          Placeholder
        </a>
        <div class="navbar-item has-dropdown">
          <a class="navbar-link" href="/placeholder">
            Placeholder
          </a>
          <div class="navbar-dropdown is-transparent">
            <a class="navbar-item" href="/placeholder">
              Placeholder
            </a>
            <a class="navbar-item" href="/placeholder/placeholder">
              Placeholder
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>
<script>
document.addEventListener('DOMContentLoaded', () => {
  const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
  if ($navbarBurgers.length > 0) {
    $navbarBurgers.forEach(el => {
      el.addEventListener('click', () => {
        const target = el.dataset.target;
        const $target = document.getElementById(target);
        el.classList.toggle('is-active');
        $target.classList.toggle('is-active');
      });
    });
  }
});
</script>