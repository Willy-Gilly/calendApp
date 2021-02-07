@extends('adminlte::page')

@section('title', 'CalendApp - '. ucfirst(__('notification.notifications')))

@section('css')
    @include('partial.includeCss',["pageName" => 'notification'])
@stop

@section('content_header')
    <h2>
        {{$notifNumber ?? '0'}} {{__('notification.newNotification')}}
    </h2>
@stop

@section('content')
    <div class="col-12">
        <div class="row">
            @csrf
            <div id="friendRequestDiv" class="col-sm">
                <div class="card">
                    <div class="card-header bg-gradient-cyan">
                        <h5 class="card-title">{{$numberFr ?? '0'}} {{__('notification.newFriendRequest')}}</h5>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                <i class="fas fa-expand"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body cardBodySocial">
                        <form class="form-group">
                            <div class="row optionRowDiv">
                                <div class="col-sm custom-control custom-checkbox">
                                    <input class="custom-control-input input-friendRequest" type="checkbox" id="checkAllFriendRequest" checked="">
                                    <label id="checkAllFriendRequestLabel" for="checkAllFriendRequest" class="custom-control-label">{{__('notification.checkAll')}}</label>
                                </div>
                                <div class="col-sm deleteNotifButton">
                                    <button id="friendRequestDeleteButton" class="btn btn-friendRequest btn-block btn-sm" type="button">{{__('notification.delete')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="newMessageDiv" class="col-sm">
                <div class="card">
                    <div class="card-header bg-gradient-blue">
                        <h5 class="card-title">{{$numberMessage ?? '0'}} {{__('notification.newMessages')}}</h5>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                <i class="fas fa-expand"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body cardBodySocial">
                        <form class="form-group">
                            <div class="row optionRowDiv">
                                <div class="col-sm custom-control custom-checkbox">
                                    <input class="custom-control-input input-messages" type="checkbox" id="checkAllMessage" checked="">
                                    <label id="checkAllMessageLabel" for="checkAllMessage" class="custom-control-label">{{__('notification.checkAll')}}</label>
                                </div>
                                <div class="col-sm deleteNotifButton">
                                    <button id="MessageDeleteButton" class="btn btn-messages btn-block btn-sm" type="button">{{__('notification.delete')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="newInvitationDiv" class="col-sm">
                <div class="card">
                    <div class="card-header bg-gradient-lightblue">
                        <h5 class="card-title">{{($numberTeamInvite ?? 0 + $numberStructureInvite ?? 0)}} {{__('notification.newInvitations')}}</h5>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                <i class="fas fa-expand"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body inviteDivPadding">
                        <div id="teamInviteDiv" class="row card">
                            <div class="card-header bg-gradient-yellow">
                                <h5 class="card-title">{{$numberTeamInvite ?? 0}} {{__('notification.inviteTeam')}}</h5>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                        <i class="fas fa-expand"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body cardBodySocial">
                                <form class="form-group form-margin-correct">

                                    <div class="row optionRowDiv">
                                        <div class="col-sm custom-control custom-checkbox">
                                            <input class="custom-control-input input-teamInvite" type="checkbox" id="checkAllTeamInvite" checked="">
                                            <label id="checkAllTeamInviteLabel" for="checkAllTeamInvite" class="custom-control-label">{{__('notification.checkAll')}}</label>
                                        </div>
                                        <div class="col-sm deleteNotifButton">
                                            <button id="teamInviteDeleteButton" class="btn btn-teamInvite btn-block btn-sm" type="button">{{__('notification.delete')}}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="structureInviteDiv" class="row card">
                            <div class="card-header bg-gradient-green">
                                <h5 class="card-title">{{$numberStructureInvite ?? 0}} {{__('notification.inviteStructure')}}</h5>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                                        <i class="fas fa-expand"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body cardBodySocial">
                                <form class="form-group form-margin-correct">
                                    <div class="row optionRowDiv">
                                        <div class="col-sm custom-control custom-checkbox">
                                            <input class="custom-control-input input-structureInvite" type="checkbox" id="checkAllStructureInvite" checked="">
                                            <label id="checkAllStructureInviteLabel" for="checkAllStructureInvite" class="custom-control-label">{{__('notification.checkAll')}}</label>
                                        </div>
                                        <div class="col-sm deleteNotifButton">
                                            <button id="structureInviteDeleteButton" class="btn btn-structureInvite btn-block btn-sm" type="button">{{__('notification.delete')}}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    @include('partial.includeJs',["pageName" => 'notification'])
    <script>
        $.ready(
            $(function() {

            })
        );
    </script>
@stop
