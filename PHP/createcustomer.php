<html>
   <head>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
   </head>
   <body>

     <div  class="row " style="margin:90px 90px 0px 90px">
        <div class="col s6 z-depth-1" style="padding:10px">
          <h5>new Customer</h5>
        </div>
     </div >
     <div class="row " style="margin:0px 90px 90px 90px">

       <form >

         <div class="col s6 z-depth-1" style="padding:30px">

        <div  >
        <div class="input-field">
         <input type="text" class="validate">
         <label >Name</label>
        </div>
       </div>
       <div class="input-field " >
        <textarea id="textarea1" class="materialize-textarea" data-length="1024" style="width:90%;max-height:75px;overflow:scroll;overflow-x: hidden;">
        hallo welt
        </textarea>
        <label for="textarea1">Text</label>
      </div>
      <div  >
      <div class="input-field">
       <input type="text" class="validate">
       <label >Bild url</label>
      </div>
     </div>

     <div>
     <div class="input-field">
      <input type="email" class="validate">
      <label for="email" data-error="wrong" data-success="right">Email</label>
     </div>
    </div>
    <a class="waves-effect waves-light btn" style="margin:20px">button</a>

   </div>
 </form>

     </div>

     <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
   </body>
 </html>
