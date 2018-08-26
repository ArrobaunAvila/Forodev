<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid" style="background-color: #ff5722">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="?view=index"><img src="styles/images/if_code_nuevosvg.svg" style="width: 40px; padding-top: 10px;"></a>
      <a class="navbar-brand" href="?view=index">ForoDev</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" style="margin-left: 20px;">
       {if isset($smarty.get.view) and $smarty.get.view == 'foro' || $smarty.get.view=='search'}
        <li class="active"><a href="?view=foro">Foro</a></li>
          <form class="navbar-form navbar-left" role="search" action="?view=search" method="POST">
       <div class="form-group">
      <input class="form-control" type="search" name="busqueda" placeholder="Buscar Posts" aria-label="Search">
       </div>
         <button class="btn btn-default" name="submit" type="submit">Search</button>
         </form>
        {else }
        <li><a href="?view=foro">Foro</a></li>
        <li><a href="https://avilacardenasdaniel.000webhostapp.com/" target="_Plank">Blog Dev<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Ir a la Tienda</a></li>
        {/if}
      </ul>

   

      <ul class="nav navbar-nav navbar-right">
        {if isset($smarty.session.user)}
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{$smarty.session.user} <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
          <li><a href="?view=perfil&user={$smarty.session.id}">Perfil</a></li>
            <li><a href="?view=cuenta">Cuenta</a></li>
            <li><a href="?view=logout">Salir</a></li>
          </ul>
        </li>
        {else}
        {if isset($smarty.get.view) and $smarty.get.view == 'login'}
        <li class="active">
        {else}
        <li>{/if}<a href="?view=login">Login</a></li>
        {if isset($smarty.get.view) and $smarty.get.view == 'registro'}
        <li class="active">
        {else}
        <li>{/if}<a href="?view=registro">Registrarme</a></li>
        {/if}
      </ul>
    </div>
  </div>
</nav>