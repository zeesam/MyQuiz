@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-4">
                        @include('layouts.sidebar')
                      </div>
                      <div class="col-sm-8">
                        @if(Session::has('message'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          {{Session::get('message')}}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        @endif
                        <div class="card">
                          <h5 class="card-header">All Questions</h5>
                          <div class="card-body small">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Sl. No.</th>
                                  <th scope="col">Quiz Topic</th>
                                  <th scope="col">Question</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($question as $key=>$ques)
                                <tr>
                                  <th scope="row">{{$key+1}}</th>
                                  <td>{{$ques->quizer->quiz_category}}</td>
                                  <td>{{$ques->question}}</td>
                                  <td>
                                    <a href="{{url('/question/show/'.$ques->id)}}" class="btn btn-sm btn-outline-success">Show</a>
                                    <a href="{{url('/question/edit/'.$ques->id)}}" class="btn btn-sm btn-outline-warning">Edit</a>
                                    <a href="{{url('/question/delete/'.$ques->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>
                                  </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
