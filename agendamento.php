<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dashboard - SUAC</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>


  <?php

  /* Menu principal */

  include_once('top.php');

  ?>

  
  <?php

  /* Menu principal */

  include_once('navbar.php');

  ?>


<!-- /subnavbar -->
<div class="main">

  <div class="main-inner">
    <!-- /container --> 

    <div class="container">

      <div class="row">
          
          <div class="span12">
            
            <div class="widget">
            
          <div class="widget-header">
            <i class="icon-user"></i>
            <h3>Agendar atendimento</h3>
          </div> <!-- /widget-header -->
          
          <div class="widget-content">

                 
            
            <br>
            
              
                <div class="tab-pane active" id="formcontrols">
                <form id="edit-profile" class="form-horizontal">
                  <fieldset>
                    
                
                  <div class="control-group">                     
                      <label class="control-label" for="email">Pessoa referênciada:</label>
                      <div class="controls">

                        <select class="span7">
                          <option>Maria das dores do Nascimento Pinto</option>
                          <option>Margarida Pinto da Silva Menezes</option>
                          <option>Jacira Leão Silva Sampaio</option>
                        </select>
                      </div> <!-- /controls -->       
                    </div>




                    <div class="control-group">                     
                      <label class="control-label" for="email">Data do atendimento:</label>
                      <div class="controls">
                        <input type="date" class="span3" id="email">
                      </div> <!-- /controls -->       
                    </div>





                    <div class="form-actions">
                      <button type="submit" class="btn btn-primary">Agendar</button> 
                      <button class="btn">Cancelar</button>
                    </div>


                    
                  </fieldset>
                </form>
                </div>
                
                
              
              
            </div>              
              
          
      
            
            
          </div> <!-- /widget-content -->
            
        </div> <!-- /widget --> 
        
        </div> <!-- /spa12 -->
        
        
        
        
          
          
          
        </div>

          </div>
     </div>

      </div>

    </div>

  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->
<!-- /extra -->
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/chart.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>
 
</body>
</html>