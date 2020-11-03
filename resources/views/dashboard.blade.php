@extends('layouts.app')
<br>
<br>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
<!DOCTYPE html>
<html>
<head>

</head>
<body class="">

	<div class="clearfix"></div>
  </div>
  </div>
  <a href="Scroll">Scroll</a>
  <div class="page-title">	
  <a href="Change_Password"><h3>Change Password</h3></a>
				
          <div class="tiles-body">
                <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                <a href="view_product" >View Product</a>

                 <div class="row-fluid">
                  <div class="heading"> <span class="fa fa-ticket"></span>
                  <a href="make_order">Make Order</a>
                   </div>
                
          <div class="row-fluid">
                  <div class="heading"> <span class="fa fa-ticket"></span>
                  <a href="view_order">View Order</a>
                   </div>
                <div class="heading">  <span class="fa fa-user"></span>
                <a href="my_profile">My Profile</a>
                 </div>
                
               
              </div>
            </div>
          </div>
          
            	
		</div>
    </div>
  </div>
  


</body>
</html>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
