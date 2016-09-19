<!-- Modal inicio de sesion -->
<!DOCTYPE html>
<html lang="en">
<head>

</head>

        <div id="modalIS" class="modal fade" role="dialog" >
          <div class="modal-dialog" style="width:500px;">
        
            <!-- Modal content-->
            <div class="modal-content">
            
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><span class="glyphicon glyphicon-record" aria-hidden="true"></span>&nbsp; Iniciar sesi&oacute;n</h4>
              </div>
              
              <div class="modal-body" id="contenidomodal" style="margin:0px auto; text-align:center">
				<table align="center">
				<tr>
					<td>
					<div class="well" style="width:350px; margin:0 auto 0 auto; height:370px" align="center">
					              
						<img src="./modales/usuario.gif" class="img-rounded" width="100px" style="margin:5px 0 15px 0"/>
						<div id="lab_usu" align="left"> &nbsp; Clave de usuario</div>
						<input type="text" id="usu" class="form-control input-lg enter" placeholder="" style="margin-bottom:10px; font-size: 16px"/>
						<div id="lab_psw" align="left"> &nbsp; Contrase&ntilde;a</div>
						<input type="password" id="psw" class="form-control input-lg enter" placeholder="" style="margin-bottom:10px; font-size: 16px"/>
						<button id="ingresar" type="button" data-loading-text="Ingresar" class="btn btn-primary" style="width:100%; margin-bottom:10px; font-size: 16px">Iniciar sesi&oacute;n</button>
					  </div>
					</td>
				</tr>
				</table>
				 </div>                
            </div>
        
          </div>
        </div>