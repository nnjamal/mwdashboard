<div class="md-card uk-width-1-1 md-keywords">
    <div class="md-card-toolbar">
        <h1 class="md-card-toolbar-heading-text large proxima-nova-bold" data-title="Social Media Page">
            Social Media Page
        </h1>
    </div>
    <form class="md-card-content" action="" method="POST">
        {{ csrf_field() }}
        <div class="uk-grid uk-grid-medium">
            <div class="uk-width-medium-1-1 uk-width-small-1-1">
                @if (count($keywords) > 0)
                <ul class="uk-subnav">
                    @foreach($keywords as $key => $keywords)
                    <li class="md-keyword">
                        <input type="checkbox" name="keywords[]" value="{!! $key !!}" class="filled-in" id="{!! $key !!}" {!! $keywords['selected'] !!}  />
                        <label for="{!! $key !!}" data-uk-tooltip title="{!! $keywords['value'] !!}">{!! $keywords['value'] !!}</label>
                    </li>
                   @endforeach
                </ul>
                @endif
            </div>
            <div class="uk-width-medium-1-1 uk-width-small-1-1">
                <hr>
                <ul class="uk-subnav left uk-margin-bottom-remove" style="padding-top:5px;">
                    <li style="line-height:24px;">Sentiment: </li>
                    @foreach($sentimentCheckboxes as $key => $sentiment)
                        <li>
                            <input type="checkbox" name="sentiments[]" value="{!! $sentiment['value'] !!}" class="filled-in" id="{!! $key !!}" {!! $sentiment['checked'] !!}/>
                            <label for="{!! $key !!}">{!! $sentiment['showName'] !!}</label>
                        </li>
                    @endforeach
                </ul>
                <ul class="uk-subnav right">
                    <li>
                        <div class="input-field md-search">
                            <input id="search" name="search" type="search" placeholder="Search">
                            <label for="search"><i class="material-icons">search</i></label>
                        </div>
                    </li>
                    <li>
                        <div class="input-field md-daterange">
                            <input id="startdate" name="start_date" type="text" class="uk-datepicker" data-uk-datepicker="{pos:'bottom',format:'DD/MM/YY'}" placeholder="10/12/16" value="{!! $shownStartDate !!}">
                            <label for="startdate"><i class="material-icons prefix">date_range</i></label>
                        </div> -
                        <div class="input-field md-daterange">
                            <input id="enddate" name="end_date" type="text" class="uk-datepicker" data-uk-datepicker="{pos:'bottom',format:'DD/MM/YY'}" placeholder="17/12/16" value="{!! $shownEndDate !!}">
                            <label for="enddate"><i class="material-icons prefix">date_range</i></label>
                        </div>
                    </li>
                    <li>
                        <button class="btn pink darken-4 z-depth-0" name="filter" value="1" type="submit">UPDATE</button>
                    </li>
                </ul>
            </div>
        </div>
    </form>
</div>
