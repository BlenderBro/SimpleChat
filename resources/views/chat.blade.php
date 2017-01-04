<!DOCTYPE html>
<html>
<head>
    <title>SimpleChat</title>
    <meta http-equiv="refresh" content="8" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/vendor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/flat-admin.css') }}">
</head>
<body>
<div class="app app-default">

    <script type="text/ng-template" id="sidebar-dropdown.tpl.html">
        <div class="dropdown-background">
            <div class="bg"></div>
        </div>
        <div class="dropdown-container">
        </div>
    </script>
    <div class="app-container app-full">
        <div class="app-messaging-container">
            <div class="app-messaging" id="collapseMessaging">
                <div class="chat-group">
                    <div class="heading"><span style="font-size: 1.5em">SimpleChat</span></div>
                    <ul class="group full-height">
                        <li class="section">Users</li>
                        @foreach($users as $user)
                        <li class="message">
                            <a data-toggle="collapse" href="#collapseMessaging" aria-expanded="false" aria-controls="collapseMessaging">
                                {{--<span class="badge badge-warning pull-right">10</span>--}}
                                <div class="message">
                                    <img class="profile" src="{{asset('/images/usr-default.png')}}">
                                    <div class="content">
                                        <div class="title">{{ $user->name }}</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="messaging">
                    <div class="heading">
                        <div class="title">
                            <span style="visibility: hidden;" class="badge badge-success badge-icon"><i class="fa fa-circle" aria-hidden="true"></i></span>                        </div>
                        <div class="action"></div>
                    </div>
                    <ul class="chat">


                        {{--Other users wrote--}}
                        @foreach($messages as $message)
                        <li>
                            <div class="message"><b><span>{{ $message->user_name }}:</span></b><br/>{{ $message->message }}</div>
                            <div class="info">
                                <div class="datetime">{{$message->created_at->format('H:i')}}</div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <div class="footer">
                        <form  action="{{ action('ChatController@store') }}" method="POST" class="message-box">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <textarea name="message" placeholder="type something..." class="form-control" autofocus></textarea>
                            <input style="position: relative;" type="submit" name='save' class="btn btn-success" value = "Send"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('/js/vendor.js') }}"></script>
<script type="text/javascript" src="{{asset('/js/app.js') }}"></script>

</body>
</html>