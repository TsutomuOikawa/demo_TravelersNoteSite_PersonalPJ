<body>
  <header id="header" class="header js-change-header <?php if(strpos($_SERVER['PHP_SELF'],'index.php')||strpos($_SERVER['PHP_SELF'],'prefectures.php')) echo 'active';?>">
    <div class="header-wrapper">
      <a href="index.php" class="header_logo">Globe Note</a>
      <form class="header_form js-change-header_form <?php if(strpos($_SERVER['PHP_SELF'],'index.php')||strpos($_SERVER['PHP_SELF'],'prefectures.php')) echo 'nonactive';?>" action="index.html" method="post">
        <input type="text" name="" class="header_input" value="" placeholder="都道府県名を入力">
        <input type="text" name="" class="header_input" value="" placeholder="キーワードを入力">
        <button type="submit" class="header_submit" name=""><i class="fas fa-search fa-lg"></i></button>
      </form>
      <div class="header_humburger js-menu-trigger">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav class="header_menu">
        <ul class="menu">
          <li class="menu_item"><a href="index.php#about" class="menu_item_link">About</a></li>
          <li class="menu_item--sp"><a href="index.php#about" class="menu_item_link">Search Destination</a></li>
          <li class="menu_item"><a href="login.php" class="menu_item_link">Login</a></li>
          <li class="menu_item"><a href="register.php" class="menu_item_link">Register</a></li>
        </ul>
      </nav>
    </div>
  </header>
