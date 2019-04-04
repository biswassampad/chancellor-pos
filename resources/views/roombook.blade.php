@extends('layouts.theme')
@section('content')
<div class="container-fluid">
        @if ( session()->has('success') )
        <p class="alert alert-success">
                     {{ session()->get('success') }}
                  </p>
               @endif
        <nav class="navbar navbar-light bg-light">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add Customer</button>
                
              </nav>
              
              <room-availibility></room-availibility>
              <event-availibility></event-availibility>
              <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                            <form method="POST" action="{{url('addcustomer')}}">
                                @csrf
                                    <div class="form-group">
                                     <label for="customername">Customer Name</label>
                                        <input type="text"  class="form-control" id="customername" placeholder="John Doe" name="name">
                                    </div>
                                    
                                    <div class="form-group">
                                     <label for="customername">Customer Mobile</label>
                                        <input type="phone"  class="form-control" id="customername" placeholder="1234567890" name="phone">
                                    </div>
                                    <div class="form-group">
                                            <label for="customername">Customer Address</label>
                                               <input type="text"  class="form-control" id="customername" placeholder="At-/Po-/Dist-/State-" name="address">
                                    </div>
                                    <div class="form-group">
                                            <label for="customername">Members</label>
                                               <input type="text"  class="form-control" id="customername" placeholder="memebers" name="members">
                                    </div>
                                    <div class="form-group">
                                            <label for="customername">Staying Days</label>
                                               <input type="text"  class="form-control" id="customername" placeholder="How many days ..." name="stay">
                                    </div>      
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success">Add & Proceed</button>
                                            </div>
                                    </form>
                      </div>
                    </div>
                  </div>
                  {{-- <div class="container">
                        <table class="table table-hover table-dark">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Book For Customer</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customer as $item)
                                    <tr>
                                            <th scope="row">{{$item->id}}</th>
                                            <td>{{$item->Name}}</td>
                                            <td>{{$item->Phone}}</td>
                                            <td>{{$item->Address}}</td>
                                            <td><a href="{{url('addtoroom')}}/{{$item->id}}" class="btn btn-success">Allot Room</a></td>
                                    </tr>
                                    @endforeach
                                  
                                 
                                </tbody>
                              </table>
                  </div> --}}
</div>

@endsection