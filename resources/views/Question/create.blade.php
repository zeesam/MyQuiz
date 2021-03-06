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
                          <h5 class="card-header">Create Question</h5>
                          <div class="card-body">
                            <form method="post" action="{{url('question/store')}}">@csrf
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Select a Quiz Category</label>
                                <select name="quiz_id" class="form-control" id="exampleFormControlSelect1">
                                  <option>Select a Quiz Category</option>
                                  @foreach(App\Models\Quiz::all() as $quiz)
                                  <option value="{{$quiz->id}}">{{$quiz->quiz_category}}</option>
                                  @endforeach
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="question">Question</label>
                                <input type="text" name="question" class="form-control @error('question') is-invalid @enderror" id="question" >
                                @error('question')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                              </div>
                              Answer:<br>
                              <div class="container">
                                <div class="row">
                                  <div class="col-sm">
                                    <input type="text" name="optiona" class="form-control @error('optiona') is-invalid @enderror" placeholder="Option A" >
                                  </div>
                                  <div class="col-sm">
                                    <input type="radio" value="optiona" name="correct_ans" class="@error('correct_ans') is-invalid @enderror"> Correct Answer
                                  </div>
                                </div><br>
                                <div class="row">
                                  <div class="col-sm">
                                    <input type="text" name="optionb" class="form-control @error('optionb') is-invalid @enderror" placeholder="Option B" >
                                  </div>
                                  <div class="col-sm">
                                    <input type="radio" value="optionb" name="correct_ans" class="@error('correct_ans') is-invalid @enderror"> Correct Answer
                                  </div>
                                </div><br>
                                <div class="row">
                                  <div class="col-sm">
                                    <input type="text"  name="optionc" class="form-control @error('optionc') is-invalid @enderror" placeholder="Option C" >
                                  </div>
                                  <div class="col-sm">
                                    <input type="radio" value="optionc" name="correct_ans" class="@error('correct_ans') is-invalid @enderror"> Correct Answer
                                  </div>
                                </div><br>
                                <div class="row">
                                  <div class="col-sm">
                                    <input type="text" name="optiond" class="form-control @error('optiond') is-invalid @enderror" placeholder="Option D" >
                                  </div>
                                  <div class="col-sm">
                                    <input type="radio" value="optiond" name="correct_ans" class="@error('correct_ans') is-invalid @enderror"> Correct Answer
                                  </div>
                                </div>
                                @error('correct_ans')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                              </div><br>
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
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
