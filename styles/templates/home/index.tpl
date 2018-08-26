   
   {include '../overall/header.tpl'}
  <body> 


 
     {include '../overall/nav.tpl'} 
<div class="container" style="margin-top: 50px;">
      <div class="jumbotron">
        {if isset($smarty.session.user)}
        <h1 class="text-center" style="font-family: 'PT Sans' ">Bienvenido a ForoDev {$smarty.session.user} </h1>
            <p class="lead" style="font-family:'PT Sans';">Bienvenido a tu espacio !! Donde resolveras y aprenderas sobre tus
            dudas</p>
        {else}
        <h1 class="text-center" style="font-family: 'PT Sans' ">Bienvenido a ForoDev</h1>

            <p class="lead" style="font-family:'PT Sans';">Bienvenido al foro de los developers, un mundo lleno de aprendizaje donde 
        vamos a tratar temas de programacion, frameworks, diseño web y mucha más temática relacionada.</p>
        <a class="btn btn-primary btn-lg" href="?view=login" role="button">Comenzar!</a>
        {/if}   
         <div class="imagesdev text-center" style="margin-top: 10px;  padding-bottom: 10px">
              <img src="styles/images/if_nodejs-512_339733.png">
              <img src="styles/images/if_php_282805.svg">
              <img src="styles/images/if_js_282802.svg">
              <img src="styles/images/express.png">
              <img src="styles/images/if_java_386470.svg">
              <img src="styles/images/if_JQuery_logo_282806.svg">
              <img src="styles/images/grunt.png">
              <img src="styles/images/if_docker-icon_copy_1245853.png">
              <img src="styles/images/if_html5_252093.svg">
              <img src="styles/images/mongodb.png">
              <img src="styles/images/if_angular_1296847.svg">
              <img src="styles/images/bootstrap.png">
            </div>    
      </div>

 {include '../overall/footer.tpl'} 
</body>
</html>