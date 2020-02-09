@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$channel->name}}</div>

                    <div class="card-body">

                      <form  id="update-channel-form"  action="{{route('channels.update' , $channel->id)}}" method="POST"  enctype="multipart/form-data">
                          @csrf
                          @method('PATCH')
                          <div class="form-group row justify-content-center">
                                <div class="channel-avatar">
                                        <div class="channel-avatar-overlay"  onclick="document.getElementById('image').click()"></div>
                                        <img src="{{URL::asset($channel->getFirstMediaUrl('images'))}}"  width="100px" height="100px">

                                </div>
                          </div>


                          @if($channel->editTable())
                              <input  onchange="document.getElementById('update-channel-form').submit()"  type="file" id="image"  name="image"  style="display: none"/>


                              <div class="form-group">
                                  <label for="name" class="form-control-label"> Name </label>
                                  <input  id="name"  name="name"  value="{{$channel->name}}"  type="text"  class="form-control"/>
                              </div>

                              <div class="form-group">
                                  <label for="name" class="form-control-label"> description </label>
                                  <textarea  id="description"  name="description"  row="10" class="form-control">{{$channel->description}}</textarea>
                              </div>

                              @if($errors->any())
                                  <ul class="list-group mb-5">
                                      @foreach($errors->all() as $error)
                                          <li class="text-danger  list-group-item">
                                              {{$error}}
                                          </li>
                                      @endforeach
                                  </ul>
                              @endif
                              <button type="submit"  class="btn btn-info">Update Channel</button>
                          @endif




                      </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
