
<!-- __________________________________________Header___________________________________________________ -->
@include('layouts.header')


<body class="">
  <div class="wrapper ">
  

<!-- __________________________________________SideBar___________________________________________________ -->



@include('layouts.sidebar')

    <div class="main-panel">
      <!-- __________________________________________NavBar___________________________________________________ -->



@include('layouts.navbar')
      <div class="content">
          <div class="content">
              


          	 <div class="col-md-12">
              <div class="card ">
                <div class="card-header card-header-rose card-header-text">
                  <div class="card-text">
                    <h4 class="card-title">Edit Car Type</h4>

                       @if(count($errors))
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                  </div>
                </div>
                <div class="card-body ">
                		 <form  action="{{ route('Vehicle.edit') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        	 	{{ csrf_field() }}



                     <div class="row">
                         <label class="col-sm-2 col-form-label">CarType ID</label>
                         <div class="col-sm-5">
                             <div class="form-group">
                                 <input type="number" class="form-control" name="carId" value="{{$carType->carId}}" required readonly>

                                 <span class="bmd-help">Id of the Car-type</span>
                             </div>
                         </div>
                     </div>



                    <div class="row">
                      <label class="col-sm-2 col-form-label">Car Name</label>
                      <div class="col-sm-5">
                        <div class="form-group">
                          <input type="text" class="form-control" name="carName" value="{{$carType->carName}}" required>
                          <span class="bmd-help">Enter here a Car name</span>
                        </div>
                      </div>
                    </div>



                    <div class="row">
                      <label class="col-sm-2 col-form-label">Arabic Car Name</label>
                      <div class="col-sm-5">
                        <div class="form-group">
                          <input type="text" class="form-control" name="arabicName" value="{{$carType->arabicName}}" required>
                          <span class="bmd-help">Enter here a Car name In Arabic</span>
                        </div>
                      </div>
                    </div>


                     <div class="row">
                         <label class="col-sm-2 col-form-label">Distance Cost in Rush Hours (SARs / KM)</label>
                         <div class="col-sm-5">
                             <div class="form-group">
                                 <input type="text" class="form-control" name="rushHoursPBD" value="{{$carType->rushHoursPBD}}" required>
                                 <span class="bmd-help">Enter here a Distance Cost in Rush Hours</span>
                             </div>
                         </div>
                     </div>

                     <div class="row">
                         <label class="col-sm-2 col-form-label">Time Cost Rate in Rush Hours (SARs / Min)</label>
                         <div class="col-sm-5">
                             <div class="form-group">
                                 <input type="text" class="form-control" name="rushHoursPBT" value="{{$carType->rushHoursPBT}}" required>
                                 <span class="bmd-help">Enter here a Time Cost in Rush Hours (SARs / Min)</span>
                             </div>
                         </div>
                     </div>



                    <div class="row">
                      <label class="col-sm-2 col-form-label">Number of Sheets</label>
                      <div class="col-sm-5">
                        <div class="form-group">
                          <input type="text" class="form-control" name="carSheet" value="{{$carType->carSheet}}" required>
                          <span class="bmd-help">Home many sheets are availiable in car</span>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <label class="col-sm-2 col-form-label">Opening Counter Price (SAR)</label>
                      <div class="col-sm-5">
                        <div class="form-group">
                          <input type="text" class="form-control" name="Counterprice" value="{{$carType->Counterprice}}" required>
                          <span class="bmd-help">the Counter Price for vehicle </span>
                        </div>
                      </div>
                      <div class="col-sm-5 ">
                        <div class="form-group " style="padding-left: 20%;">

                        	<i ><img src="{{url('public/uploads/images/carImage',$carType->carImage)}}" style="width: 160px; height: 140px;"></i>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <label class="col-sm-2 col-form-label">Distance Cost Rate (SARs / KM)</label>
                      <div class="col-sm-5">
                        <div class="form-group">
                          <input type="text" class="form-control" name="priceByDistence" value="{{$carType->priceByDistence}}" required>
                          <span class="bmd-help">Enter here Price By Distance</span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Time Cost Rate (SARs / Min)</label>
                      <div class="col-sm-5">
                        <div class="form-group">
                          <input type="text" class="form-control" name="priceByTime" value="{{$carType->priceByTime}}" required>
                          <span class="bmd-help">Enter Here Price By Time.</span>
                        </div>
                      </div>
                    </div>

                     <div class="row">
                         <label class="col-sm-2 col-form-label">priority</label>
                         <div class="col-sm-5">
                             <div class="form-group">
                                 <input type="number" class="form-control" name="priority" value="{{$carType->priority}}" required>
                                 <span class="bmd-help">Enter Here Car Priority.</span>
                             </div>
                         </div>
                     </div>

                             <div class="row">
                                 <label class="col-sm-2 col-form-label">Select the Car Image</label>
                                 <div class="picture-container">
                                     <div class="picture">
                                         <br>
                                         <input type="file" id="wizard-picture" name="carImage" >
                                     </div>

                                 </div>
                             </div>

                    <div class="row">
                      <label class="col-sm-2 col-form-label label-checkbox">Select Active or Unactive</label>
                      <div class="col-sm-10 checkbox-radios">
                        <div class="form-check form-check-inline">
                          <label class="form-check-label">
                            @if($carType->status)
                             <input class="form-check-input" type="checkbox" name="status"  checked>  
                            @else 
                             <input class="form-check-input" type="checkbox" name="status"  > 
                            @endif 
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                       
                        
                      </div>
                    </div>
                    <div class="col-sm-12">
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-raised btn-danger">Save</button>
                                </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            






          </div>
      </div>





                 
<!-- __________________________________________Footer___________________________________________________ -->



@include('layouts.footer')









                </div>
              </div>
              








<!-- __________________________________________Footer___________________________________________________ -->



<!-- @include('layouts.sideFilters') -->




<!-- __________________________________________JsFiles___________________________________________________ -->



@include('layouts.js')




</body>

</html>