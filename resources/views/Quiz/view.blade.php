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
                          <h5 class="card-header">All Quizzes</h5>
                          <div class="card-body small">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Sl. No.</th>
                                  <th scope="col">Quiz ID</th>
                                  <th scope="col">Quiz Topic</th>
                                  <th scope="col">Description</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($quiz as $key=>$qu)
                                <tr>
                                  <th scope="row">{{$key+1}}</th>
                                  <td>{{$qu->id}}</td>
                                  <td>
                                    <a href="{{url('/quiz/show/'.$qu->id)}}" class="text-decoration-none "><div class="badge badge-primary text-wrap">
                                   {{$qu->quiz_category}}
                                  </div></a></td>
                                  <td>{{$qu->quiz_description}}</td>
                                  <td>
                                    <a href="{{url('/quiz/edit/'.$qu->id)}}" class="btn btn-sm btn-outline-warning">Edit</a>
                                    <a href="{{url('/quiz/delete/'.$qu->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>
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
