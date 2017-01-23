<li class="uk-width-medium-1-1">
    <div class="md-card hoverable">
        <div class="md-card-toolbar">
            <div class="md-card-toolbar-actions">
                <a class="btn waves-effect waves-light z-depth-0 amber lighten-4" data-uk-tooltip title="{{ config('tooltips.trend-chart') }}"><i class="material-icons">help</i></a>
                <a class="btn waves-effect waves-light z-depth-0 green lighten-4" data-uk-tooltip title="Minimize" data-uk-toggle="{target:'#trendwrap'}"><i class="material-icons md-icon">fullscreen</i></a>
            </div>
            <div class="md-card-toolbar-heading-text uk-hidden-small">
                <ul class="uk-subnav uk-subnav-pill" data-uk-switcher="{connect:'#trendwrap ul'}">
                    <li class="uk-active"><a>POST TREND</a></li>
                    <li><a>COMMENT TREND</a></li>
                    <li><a>LOVE TREND</a></li>
                    <li><a>POTENTIAL REACH TREND</a></li>
                </ul>
            </div>
            <div class="uk-button-dropdown uk-visible-small" data-uk-dropdown="{mode:'click'}">
                <button class="uk-button">CHOOSE <i class="uk-icon-caret-down"></i></button>
                <div class="uk-dropdown uk-dropdown-top">
                    <ul class="uk-nav uk-nav-dropdown" data-uk-switcher="{connect:'#trendwrap ul'}">
                        <li class="uk-active"><a>POST TREND</a></li>
                        <li><a>COMMENT TREND</a></li>
                        <li><a>LOVE TREND</a></li>
                        <li><a>POTENTIAL REACH TREND</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php //TRENDS ?>
        <div id="trendwrap" class="md-card-content">
            <ul class="uk-switcher">
                <li><div id="posttrend" class="md-chart"></div></li>
                <li><div id="commenttrend" class="md-chart"></div></li>
                <li><div id="lovetrend" class="md-chart"></div></li>
                <li><div id="potentialreachtrend" class="md-chart"></div></li>
            </ul>
        </div>
    </div>
</li>
