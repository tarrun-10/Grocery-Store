<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>

    #chatframe{
      display:none;
      height:300px;
      width:450px;
      margin:10px;
      position:fixed;
      bottom:10px;
      right:10px;
      border-radius:10px;
      border:4px solid lightgreen;
    }

    #chaticon{
        height:70px;
        width:70px;
        margin:10px;
        position: fixed;
        bottom: 10px;
        right: 10px;
    }

    #chaticon:hover{
        cursor:pointer;
        margin:10px;
        border:10px solid lightgreen;
        border-radius:200px;
        animation-name:iconmove;
        animation-duration:1s;
    }


    @keyframes iconmove{
      0%{transform: rotate(0deg);}
      25%{transform: rotate(-20deg);}
      50%{transform: rotate(20deg);}
      75%{transform: rotate(-20deg);}
      100%{transform: rotate(20deg);}

    }


    </style>
  </head>
  <body>
    <iframe src="index.html" id="chatframe">

    </iframe>
    <img src="help-desk.png" id="chaticon">


  </body>

  <script>
  document.getElementById('chaticon').onmouseover=function(){
    document.getElementById('chaticon').style="display:block";
    document.getElementById('chatframe').style="display:block;";
  }

  document.getElementById('chatframe').onmouseover=function(){
    document.getElementById('chaticon').onmouseleave=function(){
      document.getElementById('chaticon').style="display:none;";
    }
  }





  document.getElementById('chatframe').onmouseleave=function(){
    document.getElementById('chaticon').style="display:default;";
    document.getElementById('chatframe').style="display:none;";
  }

  </script>
</html>
