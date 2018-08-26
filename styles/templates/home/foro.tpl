{include 'overall/header.tpl'}
    <body>
      
      {include 'overall/nav.tpl'}

      <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar" style="background-color: #3e2723; color: white">
          
          {include 'overall/menu.tpl'}
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header">{$titulo}</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th style="width: 65%;">Post</th>
                  <th style="width: 25%;">Autor</th>
                  <th style="width: 5%;">Puntos</th>
                  <th style="width: 5%;">Comentarios</th>
                </tr>
              </thead>
              <tbody>
              {*Comprobamos si hay posts obetnidos de la Base de datos*}
              {if isset($posts)}
              {foreach from=$posts item=pt}
                <tr>
                  <td><a href="">{$pt.titulo}</a></td>
                  <td><a href="">{$pt.autor}</a></td>
                  <td style="text-align: center;">{$pt.puntos}</td>
                  <td style="text-align: center;">0</td>
                </tr>
                {/foreach}
                {else}
                <tr>
                  <td colspan="4">No se han encontrado resultados</td>
                </tr>
                {/if}
              </tbody>
            </table>
          </div>
          <div>


           {if isset($posts)}
            <ul class="pagination">
              {if !isset($smarty.get.pag)}
              <li class="page-item disabled">
                <a  class="page-link disabled" href="#">Anterior</a>
              </li>
              {if $pags >= 1}
                {if isset($smarty.get.type)}
                    <li class="page-item"><a class="page-link" href="?view=foro&type={$smarty.get.type}&pag=2">Siguiente</a></li>
                    {else if isset($smarty.get.view) and $smarty.get.view == 'search'}  
                   <li class="page-item"> <a class="page-link" href="?view=search&pag=2">Siguiente</a></li>
                    {else}
              <li class="page-item">
               <a  class="page-link" href="?view=foro&pag=2">Siguiente</a>
             </li>
             {/if}
             {else}
             <li class="page-item disabled">
               <a  class="page-link" href="#">Siguiente</a>
             </li>
             {/if}
             {else}

             {if $smarty.get.pag <= 1}
             <li class="page-item disabled">
               <a  class="page-link" href="#">Anterior</a>
             </li>
              {else if isset($smarty.get.view) and $smarty.get.view == 'search'}  
              <li><a class="page-link" href="?view=search&pag={$smarty.get.pag - 1}">Anterior</a></li>
                    {else}
             <li class="page-item">
              <a  class="page-link" href="?view=foro&pag={$smarty.get.pag - 1}">Anterior</a>
            </li>
            {/if}
 
            {if $pags >= 1 and $smarty.get.pag >=1 and $smarty.get.pag <= $pags }
            <li class="page-item">
              <a  class="page-link" href="?view=foro&pag={$smarty.get.pag + 1}">Siguiente</a>
            </li>
            {else if isset($smarty.get.view) and $smarty.get.view == 'search'}  
              <a class="page-link" href="?view=search&pag={$smarty.get.pag + 1}">Siguiente</a>
              {else}
            <li class="page-item disabled">
              <a  class="page-link" href="#">Siguiente</a>
            </li>
            {/if}
            {/if} 
          </ul>
          </div>
          {/if}
        </div>
      </div>
    </div>    

{include 'overall/footer.tpl'}
   </body>
</html> 