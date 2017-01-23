<li class="uk-width-medium-1-1">
    <div class="md-card hoverable">
        <div class="md-card-toolbar">
            <div class="md-card-toolbar-actions">
                <a class="btn waves-effect waves-light z-depth-0 amber lighten-4" data-uk-tooltip title="{{ config('tooltips.influencer') }}"><i class="material-icons">help</i></a>
                <a class="btn waves-effect waves-light z-depth-0 green lighten-4" data-uk-tooltip title="Minimize" data-uk-toggle="{target:'#author'}"><i class="material-icons md-icon">fullscreen</i></a>
            </div>
            <div class="md-card-toolbar-heading-text">
                <ul class="uk-subnav uk-subnav-pill" data-uk-switcher="{connect:'#influencer ul'}">
                    <li class="uk-active"><a>TOP FORUM</a></li>
                </ul>
            </div>
        </div>
        <div id="influencer" class="md-card-content conv-wrap">
            <?php //INFLUENCER/AUTHOR TABLE ?>
            <ul class="uk-switcher">
                <li>
                    <table id="top10Forum" class="uk-table uk-table-hover uk-table-striped uk-margin-remove responsive-table"></table>
                </li>
            </ul>
        </div>
    </div>
</li>

<li class="uk-width-medium-1-1">
    <div class="md-card hoverable">
        <div class="md-card-toolbar">
            <div class="md-card-toolbar-actions">
                <a class="btn waves-effect waves-light z-depth-0 amber lighten-4" data-uk-tooltip title="{{ config('tooltips.convotable') }}"><i class="material-icons">help</i></a>
                <a class="btn waves-effect waves-light z-depth-0 green lighten-4" data-uk-tooltip title="Minimize" data-uk-toggle="{target:'#convwrap'}"><i class="material-icons md-icon">fullscreen</i></a>
            </div>
            <h2 class="md-card-toolbar-heading-text">THREAD</h2>
        </div>
        <div id="convwrap" class="md-card-content conv-wrap">
			<?php //FORUM TABLE ?>
			<table id="table_forum" class="uk-table uk-table-hover uk-table-striped uk-margin-remove responsive-table"></table>
        </div>
    </div>

</li>
