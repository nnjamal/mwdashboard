@extends('layouts.mediawave')

@section('page-level-styles')
    <link rel="stylesheet" href="{!! asset('mediawave/css/dataTables.mw.css') !!}" />
@endsection

@section('content')
@include('layouts.project-subnav')
    <main class="uk-width-1-1">
        <div class="md-container">
            @include('layouts.project-filter')

            <ul class="uk-grid uk-grid-medium" data-uk-grid data-uk-grid-margin>

                @include('mediawave.project-blogs.trend')

                @include('mediawave.project-blogs.pie')

                @include('mediawave.project-blogs.bar-wordcloud')

                @include('mediawave.project-blogs.conversation')
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
        var projectId = '{!! $project->pid !!}';
        var mediaId = 3;
        var startDate = '{!! $startDate !!}';
        var endDate = '{!! $endDate !!}';
        var brands = '{!! $brands !!}';
        var sentiments = '{!! $sentiments !!}';
        var search = '{!! $shownSearch !!}';
        var influencers = ["top10Blog"];
        var data = {
            "projectId": '{!! $project->pid !!}',
            "keywords": '{!! $brands !!}',
            "startDate": '{!! $startDate !!}',
            "sentiment": '{!! $sentiments !!}',
            "endDate": '{!! $endDate !!}',
            "search": '{!! $shownSearch !!}'
        };
    </script>
    <script src="{!! asset('js/projects/post-trend.js') !!}"></script>
    <script src="{!! asset('js/projects/comment-trend.js') !!}"></script>
    <script src="{!! asset('js/projects/post-pie.js') !!}"></script>
    <script src="{!! asset('js/projects/comment-pie.js') !!}"></script>
    <script src="{!! asset('js/projects/reach-pie.js') !!}"></script>
    <script src="{!! asset('js/projects/sentiment-bar.js') !!}"></script>
    <script src="{!! asset('js/projects/word-cloud.js') !!}"></script>
    <script src="{!! asset('js/projects/influencer.js') !!}"></script>
	<script src="{!! asset('js/projects/convo-blog.js') !!}"></script>

@endsection
