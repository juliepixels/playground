<header>
  <div class="site-width">
    <h1><a class="logo-link" href="index.php">The East Cobb Group</a></h1>
    <nav role="navigation" id="mainNav" class="menu">
      <?php $menuItems = ['solutions', 'about', 'contact']; ?>
      <ul class="main-nav">
        <li class="mobile-only"><a class="main-nav-link <?= $pageName == $item ? 'active' : '' ?>" href="index.php">home</a></li>
        <?php foreach ($menuItems as $item): ?>
            <li><a class="main-nav-link <?= $pageName == $item ? 'active' : '' ?>" href="<?= $item ?>.php"><?= $item ?></a></li>
        <?php endforeach; ?>
      </ul>
    </nav>
    <button id="mobileNavButton" class="mobile-only menu-button button">Menu</button>
  </div>
</header>
