@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$title_path or $title}}</div>

                    <div class="panel-body">
                        <form method="post">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection