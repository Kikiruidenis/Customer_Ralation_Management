
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>CRM | User Profile</title>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="">

<div class="page-container row-fluid">
	
	<div class="clearfix"></div>
  </div>
  </div>
  <a href="home" class="scrollup">Home</a>
   <div class="footer-widget">		
	<div class="progress transparent progress-small no-radius no-margin">
		<div class="progress-bar progress-bar-success animate-progress-bar" ></div>		
	</div>
	
  <div class="page-content"> 
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">  
		<div class="page-title">	
			
	
              <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Your Profile</h3>
                                  
                             
                                <div class="panel-body">       
                                <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Name </label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="name" class="form-control"/>
                                            </div>                                            
                                      
                                        </div>                                                                 
                                    
                                   <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Primary Email </label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="email" class="form-control"/>
                                            </div>                                            
                                      
                                        </div>
                                    </div>
									   <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">alternate Email  </label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="alt_email"   class="form-control"/>
                                            </div>                                            
                                      
                                        </div>
                                    </div>
									   <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Contact no </label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text"  name="phone"   maxlength="10" class="form-control"/>
                                            </div>                                            

                                      
                                        </div>
                                    </div>
									
									
									   <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Gender </label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <select class="form-control select" name="gender">
                                                 
            <option value="m">Male</option>
            <option value="f">Female</option>
            <option value="others">Other</option>
            </select>
                                            </select>
                                            </div>                                            
                                      
                                        </div>
                                    </div>
									
                                    
                                
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Address</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea class="form-control" name="address" rows="5"></textarea>
                                          
                                        </div>
                                    </div>
                                   
                                   
                                    
                               
                                    
                                    

                                </div>
							
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>                                    
                                    <input type="submit" value="Submit" name="update" class="btn btn-primary pull-right">
                                </div>
                            </div>
                            </form>
                            
                        </div>
                    </div>                                       
             
            	
		</div>
    </div>
  </div>

 </div>

</body>
</html>