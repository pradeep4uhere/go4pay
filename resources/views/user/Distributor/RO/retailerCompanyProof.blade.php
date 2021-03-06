
@extends('layouts.defaultDashboard')

@section('content')

<section class="containers">
<div class="bg-light shadow-md rounded p-4">
  <div class="row"> 
    <div class="col-lg-12">
    <div class="bg-light shadow-md rounded p-4"> 
      
            <!-- Personal Information
          ============================================= -->
            <div class="row">
              <div class="col-lg-3"> 
          <!-- Nav Link
          ============================================= -->
          <ul class="nav nav-pills alternate flex-lg-column sticky-top">
            <li class="nav-item"><a class="nav-link {{GeneralHelper::isActiveMenu('personaldetails')}}" href="{{route('personaldetails',['id'=>$id])}}"><i class="fas fa-user"></i>{{ __('Retailer Personal Details') }}</a></li>
            <li class="nav-item"><a class="nav-link {{GeneralHelper::isActiveMenu('retaileraddress')}}" href="{{route('retaileraddress',['id'=>$id])}}" ><i class="fas fa-map-marker"></i>{{ __('Retailer Address Details')}}</a></li>
            <li class="nav-item"><a class="nav-link {{GeneralHelper::isActiveMenu('retailercompany')}}" href="{{route('retailercompany',['id'=>$id])}}" ><i class="fas fa-bookmark"></i>{{ __('Retailer Company Proof')}}</a></li>
            <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="fas fa-file"></i>{{ __('Retailer Document Proof')}}</a></li>
            
          </ul>
          <!-- Nav Link end --> 
          <!--  <div class="bg-light-2 p-3">
                  <p class="mb-2">We value your Privacy.</p>
                  <p class="text-1 mb-0">We will not sell or distribute your contact information. Read our <a href="#">Privacy Policy</a>.</p>
                  <hr>
                  <p class="mb-2">Billing Enquiries</p>
                  <p class="text-1 mb-0">Do not hesitate to reach our <a href="#">support team</a> if you have any queries.</p>
                </div> -->
        </div>
       
              <div class="col-lg-6"  style="border: solid 1px #eee;padding:20px; 
              -webkit-box-shadow: -5px 8px 24px -17px rgba(0,0,0,0.75);
              -moz-box-shadow: -5px 8px 24px -17px rgba(0,0,0,0.75);
              box-shadow: -5px 8px 24px -17px rgba(0,0,0,0.75); ">

                <h4 class="mb-4">{{ __('Company Detail') }}</h4>
                 <p>
                    @if(Session::has('message'))
                    <p class="alert alert-success">Retailer Details Save Successfully.</p>
                    @endif
                    @if(Session::has('error'))
                    <p class="alert alert-danger"><small>
                    @foreach(Session::get('error') as $err)
                    <b>Error:</b> {{ $err }}</br>
                    @endforeach
                    </small>
                    </p>
                    @endif

                  </p>
                <form id="personalInformation" method="post" action="{{route('retailercompany',['id'=>$id])}}" method="POST">
                  @csrf
                  <input type="hidden" name="id" value="{{$id}}">
                  <div class="form-group ">
                      <label for="fullName">{{ __('Company Name ') }}</label>
                      <input type="text"  class="form-control" data-bv-field="address_line_1" id="company_name" name="company_name"  placeholder="Enter company name" value="{{ old('company_name',$userDetails['company_name']) }}">
                  </div>
                   <div class="form-group ">
                      <label for="fullName">{{ __('Company Type') }}</label>
                      <select class="form-control" name="company_type">
                        <option value="1">Indivisual</option>
                        <option value="2">Other</option>
                      </select>

                  </div>
                
                  <div class="form-group ">
                      <label for="fullName">{{ __('Service By') }}</label>
                      <select class="form-control" name="service_by">
                       {!!GeneralHelper::getServiceTypeOptionList()!!}
                      </select>
                  </div>
                
                 
                    <div class="form-group">
                    <label for="emailID">{{ __('Zone') }}</label>
                    <select class="form-control" name="zone">
                        {!!GeneralHelper::getZoneTypeOptionList()!!}
                      </select>
                  </div>

                    <div class="form-group">
                    <label for="emailID">{{ __('Identification Type') }}</label>
                    <select class="form-control" name="identification_type">
                       {!!GeneralHelper::getIdentificationTypeOptionList()!!}
                      </select>
                  </div>
                  

                    <div class="form-group">
                    <label for="emailID">{{ __('Is Name On Pan Card') }}</label>
                      <select class="form-control" name="is_name_on_pan_card">
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="emailID">{{ __('Pan Card Number') }}</label>
                    <input type="text"  class="form-control" data-bv-field="pan_card_number" id="pan_card_number"  placeholder="{{ __('Enter Pan Card Number') }}" name="pan_card_number" value="{{ old('company_type',$userDetails['pan_card_number']) }}">
                      
                    
                  </div>
                 
                  
                       <div class="form-group row">
                  <div class="col-md-12 offset-3">
                    <button class="btn btn-danger" type="button" onclick="history.go('-1')">Back</button>
                    <button class="btn btn-primary" type="submit">Save & Continue</button>
                   </div>
                </div>
                </form>
              </div>
             
            </div>
          
    </div>
  </div>
  </div>
</div>
</section>

<!-- Document Wrapper end --> 
@endsection

