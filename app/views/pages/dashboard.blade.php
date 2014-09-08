@extends('layouts.dashboard')

@section('content')
    <!-- Small boxes -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            @include('......elements.small-box', [
                'link'      => route('users.index'),
                'color'     => 'yellow',
                'header'    => $userCount,
                'text'      => 'Users Registered',
                'ionicon'   => 'person-add',
                'more_text' => 'Manage users',
            ])
        </div>
        <div class="col-lg-3 col-xs-6">
            @include('......elements.small-box', [
                'link'      => 'link',
                'color'     => 'aqua',
                'header'    => '150',
                'text'      => 'New Orders',
                'ionicon'   => 'bag',
                'more_text' => 'More info',
            ])
        </div>
        <div class="col-lg-3 col-xs-6">
            @include('......elements.small-box', [
                'link'      => 'link',
                'color'     => 'green',
                'header'    => '53<sup style="font-size: 20px">%</sup>',
                'text'      => 'Bounce Rate',
                'ionicon'   => 'stats-bars',
                'more_text' => 'More info',
            ])
        </div>
        <div class="col-lg-3 col-xs-6">
            @include('......elements.small-box', [
                'link'      => 'link',
                'color'     => 'red',
                'header'    => '65',
                'text'      => 'Unique Visitors',
                'ionicon'   => 'pie-graph',
                'more_text' => 'More info',
            ])
        </div>
    </div>
@endsection
