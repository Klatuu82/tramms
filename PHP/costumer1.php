<!DOCTYPE html>
  <html>
    <head>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
    <a class="waves-effect waves-light btn red lighten-1" style="position:fixed;right: 20px;margin:20px;border-radius:25px;">logout</a>

    <div class="row">

        <div class="col s8" style=" margin:0px;">
            <div >
                <div class="card horizontal" >
                    <div class="card-stacked" >
                        <div class="card-content" style="padding:3px 3px 3px 15px">
                            <h5>Admin</h5>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="collapsible" data-collapsible="accordion" style="width:100%;height:400px;overflow: scroll;">
                  <li >
                    <div class="collapsible-header" style="padding-bottom:5px;padding-top:5px;">
                        <img  src="../src/logo1.png" style="width:9%;max-height:50px;padding-bottom:0px;padding-top:0px;margin:0px">
                        <p style="margin:10px 0px 0px 15px"><b>Admin Name</b></p>
                        <a class="waves-effect waves-light btn" style="margin-left: auto;margin-bottom: 0px;margin-top: 5px;">
                            speichern
                        </a>
                    </div>
                     <div class="collapsible-body">
                      <span>
                       <table style="margin:0px;padding:0px">
                          <thead>
                            <tr>
                                <th>Name</th>
                                <th>text</th>
                                <th>pic_Link</th>
                                <th>e_Mail</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                               <td style="margin:0px;padding:0px">
                                 <form >
                                   <div class="input-field " style="margin:0px;">
                                      <input  type="text" class="validate" style="width:90%;">
                                      <label >Name</label>
                                  </div>
                                </form>
                              </td>
                                  <td>
                                    <div class="input-field " >
                                     <textarea id="textarea1" class="materialize-textarea" data-length="1024" style="width:90%;max-height:75px;overflow:scroll;overflow-x: hidden;">
                                     hallo welt
                                     </textarea>
                                     <label for="textarea1">Text</label>
                                   </div>
                                </td>
                                <td>
                                  <div class="row">
                                    <form >
                                        <div class="input-field ">
                                          <input  type="text" class="validate" style="width:90%;" data-length="1024">
                                          <label >Foto</label>
                                      </div>
                                    </form>
                                  </div>

                                </td>
                                <td>
                                  <div class="row">
                                    <form >
                                        <div class="input-field ">
                                          <input id="email" type="email" class="validate" style="width:90%;">
                                          <label >Email</label>
                                      </div>
                                    </form>
                                  </div>
                                </td>
                                </tr>
                         </tbody>
                      </table>
                     </span>
                   </div>
                  </li>
              </ul>
          </div>
       </div>
    <div class="row">

        <div class="col s8" style=" margin:0px;">
            <div >
                <div class="card horizontal" >
                    <div class="card-stacked" >
                        <div class="card-content" style="padding:3px 3px 3px 15px">
                            <h5>Benutzer</h5>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="collapsible" data-collapsible="accordion" style="width:100%;height:400px;overflow: scroll;">
                <li >
                    <div class="collapsible-header" style="padding-bottom:5px;padding-top:5px;">
                        <img  src="../src/logo1.png" style="width:9%;max-height:50px;padding-bottom:0px;padding-top:0px;margin:0px">
                        <p style="margin:10px 0px 0px 15px"><b>Benutzer name</b></p>
                        <a class="waves-effect waves-light btn" style="margin-left: auto;margin-bottom: 0px;margin-top: 5px;">
                            speichern
                        </a>
                    </div>
                    <div class="collapsible-body">
                      <span>
                       <table style="margin:0px;padding:0px">
                          <thead>
                            <tr>
                                <th>Name</th>
                                <th>text</th>
                                <th>pic_Link</th>
                                <th>e_Mail</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                               <td style="margin:0px;padding:0px">
                                 <form >
                                   <div class="input-field " style="margin:0px;">
                                      <input  type="text" class="validate" style="width:90%;">
                                      <label >Name</label>
                                  </div>
                                </form>
                              </td>
                                  <td>
                                    <div class="input-field " >
                                     <textarea id="textarea1" class="materialize-textarea" data-length="1024" style="width:90%;max-height:75px;overflow:scroll;overflow-x: hidden;">
                                     hallo welt
                                     </textarea>
                                     <label for="textarea1">Text</label>
                                   </div>
                                </td>
                                <td>
                                  <div class="row">
                                    <form >
                                        <div class="input-field ">
                                          <input  type="text" class="validate" style="width:90%;" data-length="1024">
                                          <label >Foto</label>
                                      </div>
                                    </form>
                                  </div>

                                </td>
                                <td>
                                  <div class="row">
                                    <form >
                                        <div class="input-field ">
                                          <input id="email" type="email" class="validate" style="width:90%;">
                                          <label >Email</label>
                                      </div>
                                    </form>
                                  </div>
                                </td>
                                </tr>
                         </tbody>
                      </table>
                     </span>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

    </body>
  </html>
