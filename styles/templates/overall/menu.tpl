       <ul class="nav nav-sidebar">
       {if isset($smarty.get.view) and $smarty.get.view == 'cuentas'}
          <li class="active"> <a href="?view=search">Tu cuenta</a></li>
         {/if}

          {if isset($smarty.get.view) and $smarty.get.view == 'search'}
          <li class="active"> <a href="?view=search">Resultado Busqueda</a></li>
         {/if}

          {if isset($smarty.get.type) and $smarty.get.type == 'tops'}
          <li class="active">{else}<li>{/if}<a href="?view=foro&type=tops">Los mejores</a></li> 

            {if (!isset($smarty.get.type) and isset($smarty.get.view) and $smarty.get.view =='foro') || 
            (!isset($smarty.get.view))}
            <li class="active">{else}<li>{/if}<a href="?view=index">Inicio</a></li>

            {if isset($smarty.get.type) and $smarty.get.type == '1'}
          <li class="active">{else}<li>{/if}<a href="?view=foro&type=1">PHP</a></li>
             {if isset($smarty.get.type) and $smarty.get.type == '2'}
          <li class="active">{else}<li>{/if}<a href="?view=foro&type=2">Js</a></li>
             {if isset($smarty.get.type) and $smarty.get.type == '3'}
          <li class="active">{else}<li>{/if}<a href="?view=foro&type=3">Other</a></li>
          </ul>