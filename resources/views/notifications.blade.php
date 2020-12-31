@extends('adminlte::page')

@section('title', 'CalendApp - '. ucfirst(__('notification.notifications')))

@section('content_header')
    <h2>
        {{$notifNumber ?? '0'}} {{__('notification.newNotification')}}
    </h2>
@stop

@section('content')
    <div class="col-12">
        <div class="row">
            @csrf
            <div class="col-sm">
                <div class="card">
                    <h5 class="card-header bg-gradient-cyan">
                        {{$frNumber ?? '0'}} {{__('notification.newFriendRequest')}}
                    </h5>
                    <form class="form-group">
                        <div class="card-body">
                            text
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <h5 class="card-header bg-gradient-blue">
                        {{$messsageNumber ?? '0'}} {{__('notification.newMessages')}}
                    </h5>
                    <div class="card-body">
                        <form>
                            text
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <h5 class="card-header bg-gradient-lightblue">
                        {{$invitationNumber ?? '0'}} {{__('notification.newInvitations')}}
                    </h5>
                    <div class="card-body">
                        <div class="row card">
                            <div class="card-header bg-gradient-yellow">
                                {{__('notification.inviteTeam')}}
                            </div>
                            <div class="card-body">
                                <form>
                                    text
                                </form>
                            </div>
                        </div>
                        <div class="row card">
                            <div class="card-header bg-gradient-green">
                                {{__('notification.inviteStructure')}}
                            </div>
                            <div class="card-body">
                                <form>
                                    text
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')

@stop
