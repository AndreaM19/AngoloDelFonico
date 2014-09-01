<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-custom" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <a class="navbar-brand" href="#"><img src="img/logo/knob.png" style="width:50px; margin-top:-10px;"/></a>
      <a class="navbar-brand" href="#" style="margin-top:-5px;">L'angolo del <br />fonico</a>
    
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li <?php if(@$_GET['loc']=='home')echo"class='active'"?>><a href="index.php?loc=home">Home</a></li>
        <li <?php if(@$_GET['loc']=='instr')echo"class='active'"?>><a href="instruments.php?loc=instr">Lista strumenti</a></li>
        <li <?php if(@$_GET['loc']=='dict')echo"class='active'"?>><a href="dictionary.php?loc=dict">Dizionario del fonico</a></li>
        <li <?php if(@$_GET['loc']=='about')echo"class='active'"?>><a href="about.php?loc=about">About</a></li>
      </ul>
      <!--
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://getbootstrap.com/examples/navbar/">Default</a></li>
        <li><a href="http://getbootstrap.com/examples/navbar-static-top/">Static top</a></li>
        <li class="active"><a href="./Fixed Top Navbar Example for Bootstrap_files/Fixed Top Navbar Example for Bootstrap.htm">Fixed top</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lista strumenti <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      -->
  </div>
</div>