@extends('adminlte::page')

@section('title', 'CalendApp - '.__('profile.profile'))

@section('content_header')

@stop

@section('content')
    <div class="row col-sm-12">
        <div class="card card-primary card-outline col-sm-4 offset-sm-4">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="{{url($profilePicture) ?? url("/image/default-profile-picture.png")}}" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$name ?? "Profile Name"}}</h3>

                <p class="text-muted text-center">{{$pseudo ?? "Pseudo"}}</p>
                @if(!is_null($description ?? null))
                <p class="text-center">{{$description}}</p>
                @endif
                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>Number of teams joined</b> <a class="float-right">{{$teamJoinedCount ?? "Count Team"}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Number of structures joined</b> <a class="float-right">{{$structureJoinedCount ?? "Count Structure"}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Number of Friends</b> <a class="float-right">{{$friendlistCount ?? "Count Friend"}}</a>
                    </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#profileModal"><b>Edit Profile</b></a>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <div class="modal fade" id="profileModal" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg">
            <form>
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">{{__('profile.edit')}}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>One fine body…</p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">{{__('profile.close')}}</button>
                        <button type="button" class="btn btn-primary">{{__('profile.saveChanges')}}</button>
                    </div>
                </div>
            </form>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@stop

@section('css')

@stop

@section('js')

@stop
