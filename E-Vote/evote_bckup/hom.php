 <!DOCTYPE html>
<html>
  <title>election</title>
<head>
  <!--  <meta property='og:locale' content='en_us' >
    <meta property='og:title' content='Election Polling'>
    <meta property='og:type'  content='Politics'>
    <meta name='Keywords' content='election'Polling'vote'>
    <meta name='robots' content='noindex'nosnippet'nocache'>
    <meta property='og:site_name' content='TN_Election'>
    <meta property='og:description' content='TamilNadu Advance Election Polling in Digital'>
    <meta name='viewport' content='width=device-width' initial-scale=1.0'>   -->
</head>
<style>
    #login{
       float:right;
       display:relative;
    }
    #formm{
      display:none;
      float:right;
      height:300px;
      width:500px;
      margin-top:40px;
      margin-right:-40px;
      text-align:center;
      background-color:lightgreen;
      border:4px outset lightgreen;
      
    }
    #close{
      color:#ea2528;
    } 
    #sub{
      color:blue;
    }
    #note{
      color:darkgreen;
      font-size:12px;
    }
</style>

  <body>
    <div id='login'>
     
      
      <button onclick='login()'>login</button>
      <button> <a href='vote'>vote</a></button>
    </div>
      <form action='/reg.php' method='post' id='formm'>
            <h4 id='log'>LOGIN</h4>
         <label for='name'>NAME &emsp; &ensp; &ensp; &ensp;:</label>
          <input type='text' name='name' placeholder='SHIVA.N' required></br>
         <label for='adno'>AADHAR NO &nbsp;:</label>
          <input type='text' name='adno' placeholder='1234 5678 9012' required></br>
         <label for='voteid'>VOTER ID&ensp; &nbsp; &ensp;:</label>
           <input type='text' name='voteid' placeholder='ABC0987657' required></br>
         <label for='phno'>MOBILE NO &ensp; :</label>
          <input type='tel' name='phno' placeholder='1234567890' required></br>
         <label for='wardno'>WARD NO &ensp; &ensp; &nbsp;:</label>
          <input type='text' name='wardno' placeholder='12' required></span> </br>
         <label for='area'>CONSITUENCY  :</label>
          <input type='text' name='area' placeholder='ex nagar' required></br>
         <label for='footno'>CONSIT NO &emsp; &ensp; :</label>
          <input type='text' name='footno' placeholder='111' required></br></br>
               <button type='submit' id='sub'>submit</button><button><a href='front' id='close'>close</a></button> </br>
          <note>note*:GIVE THE DETAILS ABOVE THE FORMAT.*ALL LETTERS ARE CAPITIAL</note>

      </form>
  </body>
<script>
  function login(){
   document.getElementById('formm').style.display='block';
  }

</script>
</html>
