<li class="uk-width-medium-1-4">
    <?php //POST PIE ?>
    <div class="md-card hoverable">
        <div class="md-card-toolbar">
            <div class="md-card-toolbar-actions">
                <a class="btn waves-effect waves-light z-depth-0 amber lighten-4" data-uk-tooltip title="{{ config('tooltips.post-pie') }}"><i class="material-icons">help</i></a>
                <a class="btn waves-effect waves-light z-depth-0 green lighten-4" data-uk-tooltip title="Minimize" data-uk-toggle="{target:'#piewrap1'}"><i class="material-icons md-icon">fullscreen</i></a>
            </div>
            <h2 class="md-card-toolbar-heading-text">POST</h2>
        </div>
        <div id="piewrap1" class="md-card-content">
            <div id="postpie" class="md-chart"></div>
        </div>
    </div>
</li>
<li class="uk-width-medium-1-4">
    <?php //LOVE PIE ?>
    <div class="md-card hoverable">
        <div class="md-card-toolbar">
            <div class="md-card-toolbar-actions">
                <a class="btn waves-effect waves-light z-depth-0 amber lighten-4" data-uk-tooltip title="{{ config('tooltips.reach-pie') }}"><i class="material-icons">help</i></a>
                <a class="btn waves-effect waves-light z-depth-0 green lighten-4" data-uk-tooltip title="Minimize" data-uk-toggle="{target:'#piewrap2'}"><i class="material-icons md-icon">fullscreen</i></a>
            </div>
            <h2 class="md-card-toolbar-heading-text">LOVE</h2>
        </div>
        <div id="piewrap2" class="md-card-content">
            <div id="lovepie" class="md-chart"></div>
        </div>
    </div>
</li>
<li class="uk-width-medium-1-4">
    <?php //COMMENT PIE ?>
    <div class="md-card hoverable">
        <div class="md-card-toolbar">
            <div class="md-card-toolbar-actions">
                <a class="btn waves-effect waves-light z-depth-0 amber lighten-4" data-uk-tooltip title="{{ config('tooltips.post-pie') }}"><i class="material-icons">help</i></a>
                <a class="btn waves-effect waves-light z-depth-0 green lighten-4" data-uk-tooltip title="Minimize" data-uk-toggle="{target:'#piewrap3'}"><i class="material-icons md-icon">fullscreen</i></a>
            </div>
            <h2 class="md-card-toolbar-heading-text">COMMENT</h2>
        </div>
        <div id="piewrap3" class="md-card-content">
            <div id="commentpie" class="md-chart"></div>
        </div>
    </div>
</li>
<li class="uk-width-medium-1-4">
    <?php //VIEW PIE ?>
    <div class="md-card hoverable">
        <div class="md-card-toolbar">
            <div class="md-card-toolbar-actions">
                <a class="btn waves-effect waves-light z-depth-0 amber lighten-4" data-uk-tooltip title="{{ config('tooltips.reach-pie') }}"><i class="material-icons">help</i></a>
                <a class="btn waves-effect waves-light z-depth-0 green lighten-4" data-uk-tooltip title="Minimize" data-uk-toggle="{target:'#piewrap4'}"><i class="material-icons md-icon">fullscreen</i></a>
            </div>
            <h2 class="md-card-toolbar-heading-text">VIEW</h2>
        </div>
        <div id="piewrap4" class="md-card-content">
            <div id="viewpie" class="md-chart"></div>
        </div>
    </div>
</li>