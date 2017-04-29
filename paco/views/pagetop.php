<!DOCTYPE html>

<HTML lang ="PT"> 
    <HEAD>
        
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        
        <!-- http://getbootstrap.com/ -->
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        
        <!-- File's CSS stylesheet -->
        <link href = "/css/style.css" rel="stylesheet"/>
        
        <!-- http://jquery.com/ -->
        <script src="/js/jquery-1.11.3.min.js"></script>
        
        <!-- https://github.com/twitter/typeahead.js/ -->
        <script src="/js/typeahead.jquery.min.js"></script>
        
        <!-- http://getbootstrap.com/ -->
        <script src="/js/bootstrap.min.js"></script>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
        
        <!-- Local script files -->
        <script src="js/paco.js"></script>
        
        <Title> PACO | Programa de Acompanhamento Farmacêutico</Title>
</HEAD>
    <BODY>
       <nav class="marginless navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="index.php"><span class="glyphicons glyphicons-medicine"></span>PACO</a>
            </div>
             <?php
             
             if(isset($_SESSION['id'])){
                 
                print("<ul class='nav navbar-nav'>
                          <li><a href='acompanhamento.php'>Prescrições</a></li>
                          <li><a href='labref.php'>Laboratório</a></li>
                        </ul>
            
                
                    <form id='signin' class='navbar-form navbar-right' role='form' action='logout.php' method='post'>
                        <button type='submit' class='btn btn-primary'>Sair</button>
                   </form>");  
             }
             else{
               print("<form id='signin' class='navbar-form navbar-right' role='form' action='login.php' method='post'>
                    <div class='input-group'>
                        <span class='input-group-addon'></span>
                        <input id='login' type='text' class='form-control' name='id' value='' placeholder='Login'>                                        
                    </div>

                    <div class='input-group'>
                        <span class='input-group-addon'></span>
                        <input id='password' type='password' class='form-control' name='password' value='' placeholder='Senha'>                                        
                    </div>

                    <button type='submit' class='btn btn-primary'>Entrar</button>
               </form>");
               }
             
             ?>
          </div>
        </nav>
<?php
     if(isset($_SESSION['id']))
        print("<div id = 'pagemid' class= 'container-fluid'>");
    else
        print("<div id = 'pagemid'");    
 ?>
 