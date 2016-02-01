<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>

<link type="text/css" rel="stylesheet" href="css/style.css"/>
</head>

<body ng-app>

<?php include ("/view/layout/header.php");?>    
<?php include ("/view/layout/menu.php");?>
    
    <input type='text' ng-model='name'/>
    hello {{name}}
  <article>
    <h2>Добро пожаловать!</h2>
    <p>Рада приветствовать вас на своем сайте.</p>
  </article>
  
    <article>
    <h2>Добро пожаловать!</h2>
    <p>Рада приветствовать вас на своем сайте.</p>
  </article>
  
    <article>
    <h2>Добро пожаловать!</h2>
    <p>Рада приветствовать вас на своем сайте.</p>
  </article>  <article>
    <h2>Добро пожаловать!</h2>
    <p>Рада приветствовать вас на своем сайте.</p>
  </article>
  
<?php include ("/view/main.php");?>   
<?php include ("/view/layout/footer.php");?>  
  
<script type="text/javascript" src="js/requirejs.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/angular.min.js"></script>
<script type="text/javascript" src="js/all_1.min.js"></script>

</body>

</html>