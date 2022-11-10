<body>
  <header id="header" class="header js-change-header <?php if(strpos($_SERVER['PHP_SELF'],'index.php')||strpos($_SERVER['PHP_SELF'],'prefectures.php')) echo 'active';?>">
    <div class="header-wrapper">
      <a href="index.php" class="header_logo">Globe Note</a>
      <form class="header_form js-change-header_form <?php if(strpos($_SERVER['PHP_SELF'],'index.php')||strpos($_SERVER['PHP_SELF'],'prefectures.php')) echo 'nonactive';?>" action="index.html" method="post">
        <input type="text" name="" class="header_input" value="" placeholder="都道府県名を入力">
        <input type="text" name="" class="header_input" value="" placeholder="キーワードを入力">
        <button type="submit" class="header_submit" name=""><i class="fas fa-search fa-lg"></i></button>
      </form>
      <ul class="header_menu">
        <li class="header_menuItem"><a href="index.php#about" class="header_menuItem_link">About</a></li>
        <li class="header_menuItem"><a href="signIn.php" class="header_menuItem_link">Sign in</a></li>
        <li class="header_menuItem"><a href="register.php" class="header_menuItem_link">Register</a></li>
      </ul>
    </div>
  </header>
