@extends('layouts.mediawave')

@section('page-level-styles')
    <link rel="stylesheet" href="{!! asset('mediawave/css/dataTables.mw.css') !!}" />
@endsection

@section('content')
@include('layouts.socmed-subnav')
    <main class="uk-width-1-1">
        <div class="md-container">
            @include('layouts.socmed-filter')
            <ul class="uk-grid uk-grid-medium" data-uk-grid data-uk-grid-margin>

                @include('mediawave.socmed-instagrams.trend')

                @include('mediawave.socmed-instagrams.pie')

                @include('mediawave.socmed-instagrams.bar')

                @include('mediawave.socmed-instagrams.wordcloud-influencer')

                @include('mediawave.socmed-instagrams.conversation')

            </ul>
        </div>
    </main>
@endsection

@section('page-level-plugins')
    <script src="{!! asset('mediawave/js/components/datepicker.min.js') !!}"></script>
    <script src="{!! asset('mediawave/js/highchart/highcharts.js') !!}"></script>
    <script src="{!! asset('mediawave/js/highchart/highcharts-more.js') !!}"></script>
    <script src="{!! asset('mediawave/js/highchart/modules/exporting.js') !!}"></script>
    <script src="{!! asset('mediawave/js/highchart/themes/mw.js') !!}"></script>
    <script src="{!! asset('mediawave/js/jqcloud.min.js') !!}"></script>
    <script src="{!! asset('mediawave/js/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! asset('mediawave/js/dataTables.select.min.js') !!}"></script>
    <script src="{!! asset('mediawave/js/dataTables.mw.js') !!}"></script>
@endsection

@section('page-level-scripts')

    <script type="text/javascript" src="{{ asset('js/jquery.blockUI.js') }}"></script>
    <script type="text/javascript">
        var ajaxUrl = '{!! url('/') !!}';
        var csrfToken = '{!! csrf_token() !!}';
        var mediaId = 7;
        var type = 2;
        var influencers = ["topCommentIG", "topLoveIG", "topViewIG"];
        var data = {
            "idMedia": '7',
            "keywords": '{!! $brands !!}',
            "startDate": '{!! $startDate !!}',
            "endDate": '{!! $endDate !!}',
            "sentiment": '{!! $sentiments !!}',
            "search": '{!! $shownSearch !!}'
        };
    </script>
    <script src="{!! asset('js/socmeds/post-trend.js') !!}"></script>
    <script src="{!! asset('js/socmeds/comment-trend.js') !!}"></script>
    <script src="{!! asset('js/socmeds/love-trend.js') !!}"></script>
    <script src="{!! asset('js/socmeds/potential-trend.js') !!}"></script>

    <script src="{!! asset('js/socmeds/post-pie.js') !!}"></script>
    <script src="{!! asset('js/socmeds/love-pie.js') !!}"></script>
    <script src="{!! asset('js/socmeds/comment-pie.js') !!}"></script>
    <script src="{!! asset('js/socmeds/view-pie.js') !!}"></script>

    <script src="{!! asset('js/socmeds/sentiment-bar.js') !!}"></script>
    <script src="{!! asset('js/socmeds/interaction-bar.js') !!}"></script>

    <script src="{!! asset('js/socmeds/word-cloud.js') !!}"></script>
    <script src="{!! asset('js/socmeds/influencer.js') !!}"></script>
    <script src="{!! asset('js/socmeds/convo-ig.js') !!}"></script>

@endsection
