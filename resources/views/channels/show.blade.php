@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$channel->name}}</div>

                    <div class="card-body">

                        @if($channel->editTable())

                        <form  id="update-channel-form"  action="{{route('channels.update' , $channel->id)}}" method="POST"  enctype="multipart/form-data">
                          @csrf
                          @method('PATCH')

                        @endif

                          <div class="form-group row justify-content-center">
                                <div class="channel-avatar">
                                        <div class="channel-avatar-overlay"  onclick="document.getElementById('image').click()"></div>
                                        <img src="{{URL::asset($channel->getFirstMediaUrl('images'))}}"  width="100px" height="100px">

                                </div>
                          </div>

                            @if(!auth()->check())
                                <div class="form-group text-center">
                                    <label><h4> {{$channel->name}} </h4></label><br/>
                                    <label>{{$channel->description}} </label>
                                </div>
                            @endif

                                <div class="text-center">
                                        <subscribe-button   :subscriptions="{{ $channel->subscriptions }}" inline-template>

                                            <button  @click="toggleSubscription"  class="btn btn-danger">
                                                Subscribe 7K
                                            </button>

                                        </subscribe-button>
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
                        @if($channel->editTable())
                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
