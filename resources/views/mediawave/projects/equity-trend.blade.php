<li class="uk-width-medium-1-2">
    <div class="md-card hoverable">
        <div class="md-card-toolbar">
            <div class="md-card-toolbar-actions">
                <a class="btn waves-effect waves-light z-depth-0 amber lighten-4" data-uk-tooltip title="{{ config('tooltips.brand-equity') }}"><i class="material-icons">help</i></a>
                <a class="btn waves-effect waves-light z-depth-0 green lighten-4 " data-uk-tooltip title="Minimize" data-uk-toggle="{target:'#brandequity'}"><i class="material-icons md-icon">fullscreen</i></a>
            </div>
            <h2 class="md-card-toolbar-heading-text">BRAND EQUITY</h2>
        </div>
        <div id="brandequity" class="md-card-content">
            <div id="brand-equity-container" class="md-chart"></div>
        </div>
    </div>
</li>
<li class="uk-width-medium-1-2">
    <div class="md-card hoverable">
        <div class="md-card-toolbar">
            <div class="md-card-toolbar-actions">
                <a class="btn waves-effect waves-light z-depth-0 amber lighten-4 " data-uk-tooltip title="{{ config('tooltips.trend-chart') }}"><i class="material-icons">help</i></a>
                <a class="btn waves-effect waves-light z-depth-0 green lighten-4 " data-uk-tooltip title="Minimize" data-uk-toggle="{target:'#trend'}"><i class="material-icons md-icon">fullscreen</i></a>
            </div>
            <div class="md-card-toolbar-heading-text uk-hidden-small">
                <ul class="uk-subnav uk-subnav-pill" data-uk-switcher="{connect:'#trend ul'}">
                    <li class="uk-active"><a>BUZZ TREND</a></li>
                    <li><a>POST TREND</a></li>
                    <li><a>REACH TREND</a></li>
                    <li><a>INTERACTIONS</a></li>
                </ul>
            </div>
            <div class="uk-button-dropdown uk-visible-small" data-uk-dropdown="{mode:'click'}">
                <button class="uk-button">CHOOSE <i class="uk-icon-caret-down"></i></button>
                <div class="uk-dropdown uk-dropdown-top">
                    <ul class="uk-nav uk-nav-dropdown" data-uk-switcher="{connect:'#trend ul'}">
                        <li class="uk-active"><a>BUZZ TREND</a></li>
                        <li><a>POST TREND</a></li>
                        <li><a>REACH TREND</a></li>
                        <li><a>INTERACTIONS</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php //TRENDS ?>
        <div id="trend" class="md-card-content">
            <ul class="uk-switcher">
                <li>
                    <div id="buzztrend" class="md-chart"></div>
                </li>
                <li>
                    <div id="posttrend" class="md-chart"></div>
                </li>
                <li>
                    <div id="reachtrend" class="md-chart"></div>
                </li>
                <li>
                    <div id="interacttrend" class="md-chart"></div>
                </li>
            </ul>
        </div>
    </div>
</li>
