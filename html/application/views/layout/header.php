<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>PWEB Hotel</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">PWEB Hotel</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/rooms">Rooms</a></li>
        <li><a href="/guests">Guests</a></li>
        <li><a href="/members">Members</a></li>
        <?php if (null !== $this->input->cookie('member_ID')):?>
        <li><a href="/logout">Logout</a></li>
        <li> <?= $this->input->cookie('member_name') ?></li>
      <?php else :?>
        <li><a href="/login">Login</a></li>
      <?php endif; ?>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="/rooms">Rooms</a></li>
        <li><a href="/guests">Guests</a></li>
        <li><a href="/members">Members</a></li>
        <li><a href="/login">Login</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
