@extends('layouts.mediawave')

@section('page-level-styles')
    <link rel="stylesheet" href="{!! asset('mediawave/css/intro.js.css') !!}" />
@endsection

@section('content')
<?php /*
<nav class="uk-navbar md-subnav gradient-fluenza darken">
    <ul class="uk-navbar-nav md-head-container">
        <li class="uk-active"><a href="{!! url('/create-project') !!}">Create Project</a></li>
        <li><a href="{!! url('/create-project-ig') !!}">Create Instagram Project</a></li>
    </ul>
</nav>
*/ ?>
<main class="">
    <div class="md-container">
        <form action="{!! url('save-project') !!}" method="post" name="project-form" class="project-form">
            {!! csrf_field() !!}
            <div class="uk-grid uk-grid-medium uk-grid-match" data-uk-grid-match="{target:'.md-card'}" data-uk-grid-margin>
                <div class="uk-width-medium-1-2 uk-push-1-2">
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <h2 class="md-card-toolbar-heading-text">How To Create New Project?</h2>
                        </div>
                        <div class="md-card-content">
                            <p>A step by step guide to create a Project, just click the button below and follow the instructions.</p>
                            <a class="btn btn-success blue z-depth-0" href="javascript:void(0);" onclick="introAdd();">Show me how</a>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-2 uk-pull-1-2">
                    <div class="md-card step1">
                        <div class="md-card-toolbar">
                            <h2 class="md-card-toolbar-heading-text">PROJECT INFORMATION</h2>
                        </div>
                        <div class="md-card-content">
                            <div class="input-field step2">
                                <input id="projectname" name="projectname" type="text" class="validate uk-margin-remove" required>
                                <label for="projectname">Project Name (required)</label>
                            </div>
                            <div class="input-field step3">
                                <textarea id="projectobj" name="projectobj" class="validate materialize-textarea uk-margin-remove"></textarea>
                                <label for="projectobj">Project Objective</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md-card">
                <ul class="tabs uk-margin-top step4">
                    <li class="tab"><a class="active" href="#mode1">STEP BY STEP</a></li>
                    <li class="tab"><a href="#mode2">ADVANCED</a></li>
                </ul>
                <div class="md-card-content">
                    <div id="mode1">
                        <ul class="uk-grid uk-grid-collapse uk-grid-width-1-3 uk-text-center md-steps uk-margin-top uk-margin-bottom" data-uk-switcher="{connect:'#keywordsteps'}">
                            <li class="uk-active"><a href="#" class="switchkeyword"><span class="uk-border-circle">1</span>Keyword</a></li>
                            <li class=""><a href="#" class="switchtopic"><span class="uk-border-circle">2</span>Topic</a></li>
                            <li class=""><a href="#" class="switchexcld"><span class="uk-border-circle">3</span>Topic Not Include</a></li>
                        </ul>

                        <ul id="keywordsteps" class="uk-switcher">
                            <li>
                                <h5>CREATE KEYWORDS</h5>
                                <div class="wrap_keys">
                                    <div id="key-1" class="key uk-panel uk-panel-box uk-margin-bottom">
                                         <ul class="uk-grid uk-grid-small uk-grid-width-medium-1-4 key-op-1 step5">
                                            <li>
                                                <label class="label_key"><i class="material-icons">label</i></label>
                                                <input type="text" data-key-group="1" name="field_key[1][]" value="" placeholder="Write keyword here" />
                                            </li>
                                        </ul>
                                        <a href="javascript:void(0);" class="dropdown-button uk-button teal darken-4 white-text step6" data-activates="dropkey-1" title="Add Form"><i class="uk-icon uk-icon-plus-square"></i> Add Form</a>
                                        <ul id="dropkey-1" class="dropdown-content">
                                           <li><a href="javascript:void(0);" class="add_and" onclick="addKey(1, 'and')"> AND</a></li>
                                           <li><a href="javascript:void(0);" class="add_or" onclick="addKey(1, 'or')"> OR</a></li>
                                           <li><a href="javascript:void(0);" class="add_not" onclick="addKey(1, 'not')"> NOT</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="uk-button btn blue z-depth-0 add_key step7" title="Add Keyword">ADD MORE KEYWORD</a>
                                <hr>
                                <a class="btn cyan right z-depth-0 nextstep step8" data-uk-tooltip title="Next Step: Create Topics">NEXT STEP <i class="material-icons right">keyboard_arrow_right</i></a>
                            </li>
                            <li>
                                 <h5>CREATE TOPICS</h5>
                                 <div class="wrap_topics">
                                     <div id="topic-1" class="topic uk-panel uk-panel-box uk-margin-bottom">
                                          <ul class="uk-grid uk-grid-small uk-grid-width-medium-1-4 topic-op-1 step9">
                                             <li>
                                                 <label class="label_topic"><i class="material-icons">label</i></label>
                                                 <input type="text" name="field_topic[1][]" data-topic-group="1" value="" placeholder="Write topic here" />
                                             </li>
                                         </ul>
                                         <a href="javascript:void(0);" class="dropdown-button uk-button teal darken-4 white-text step10" data-activates="droptopic-1" title="Add Form"><i class="uk-icon uk-icon-plus-square"></i> Add Form</a>
                                         <ul id="droptopic-1" class="dropdown-content">
                                            <li><a href="javascript:void(0);" class="add_and" onclick="addTopic(1, 'and')"> AND</a></li>
                                            <li><a href="javascript:void(0);" class="add_or" onclick="addTopic(1, 'or')"> OR</a></li>
                                            <li><a href="javascript:void(0);" class="add_not" onclick="addTopic(1, 'not')"> NOT</a></li>
                                         </ul>
                                     </div>
                                 </div>
                                 <a href="javascript:void(0);" class="uk-button btn blue z-depth-0 add_topic step11" title="Add Topic">ADD MORE TOPIC</a>

                                 <hr>
                                 <a class="btn grey z-depth-0 prevstep backtopic" data-uk-tooltip title="Prev Step: Keywords"><i class="material-icons left">keyboard_arrow_left</i> BACK</a>


                                 <a class="btn cyan right z-depth-0 nextstep step12" data-uk-tooltip title="Next Step: Create Excluded Topics">NEXT STEP <i class="material-icons right">keyboard_arrow_right</i></a>
                            </li>
                            <li>
                                 <h5>CREATE EXCLUDED TOPICS</h5>
                                 <div class="wrap_exclds">
                                     <div id="topic-1" class="excld uk-panel uk-panel-box uk-margin-bottom">
                                          <ul class="uk-grid uk-grid-small uk-grid-width-medium-1-4 excld-op-1 step13">
                                             <li>
                                                 <label class="label_excld"><i class="material-icons">label</i></label>
                                                 <input type="text" name="field_excld[1][]" data-excld-group="1" value="" placeholder="Write exclude here" />
                                             </li>
                                         </ul>
                                         <a href="javascript:void(0);" class="dropdown-button uk-button teal darken-4 white-text step14" data-activates="dropexcld-1" title="Add Form"><i class="uk-icon uk-icon-plus-square"></i> Add Form</a>
                                         <ul id="dropexcld-1" class="dropdown-content">
                                            <li><a href="javascript:void(0);" class="add_and" onclick="addExcld(1, 'and')"> AND</a></li>
                                            <li><a href="javascript:void(0);" class="add_or" onclick="addExcld(1, 'or')"> OR</a></li>
                                            <li><a href="javascript:void(0);" class="add_not" onclick="addExcld(1, 'not')"> NOT</a></li>
                                         </ul>
                                     </div>
                                 </div>
                                 <a href="javascript:void(0);" class="uk-button btn blue z-depth-0 add_excld step15" title="Add Exclude">ADD MORE EXCLUDE</a>

                                 <hr>
                                 <a class="btn grey z-depth-0 prevstep backexcld" data-uk-tooltip title="Prev Step: Topics"><i class="material-icons left">keyboard_arrow_left</i> BACK</a>

                                 <ul class="uk-subnav right">
                                     <li><a href="#previewquery" class="modal-trigger btn cyan z-depth-0 step16" data-uk-tooltip title="Preview All Query" onclick="previewQuery()">PREVIEW</a></li>
                                     <li><button type="submit" class="btn amber darken-4 z-depth-0 step17" data-uk-tooltip title="Save Query">SAVE NOW</button></li>
                                 </ul>
                            </li>
                        </ul>
                    </div>
                    <div id="mode2">
                        <ul id="keywordadv" class="uk-list uk-list-line uk-margin-bottom-remove">
                            <li>
                                <h5>CREATE KEYWORDS</h5>
                                <div class="wrap_advkeys">
                                     <div class="advkey">
                                          <textarea id="key-1" name="adv_field_key[1]" class="materialize-textarea uk-margin-small-bottom"></textarea>
                                     </div>
                                </div>
                                <a href="javascript:void(0);" class="uk-button btn blue z-depth-0 add_advkey uk-margin-bottom" title="Add Keyword">ADD MORE KEYWORD</a>
                            </li>
                            <li>
                                  <h5>CREATE TOPICS</h5>
                                  <div class="wrap_advtopics">
                                       <div class="advtopic">
                                            <textarea id="topic-1" name="adv_field_topic[1]" class="materialize-textarea uk-margin-small-bottom"></textarea>
                                       </div>
                                  </div>
                                  <a href="javascript:void(0);" class="uk-button btn blue z-depth-0 add_advtopic uk-margin-bottom" title="Add Topic">ADD MORE TOPIC</a>
                            </li>
                            <li>
                                  <h5>CREATE EXCLUDED TOPICS</h5>
                                  <div class="wrap_advexclds">
                                       <div class="advexcld">
                                            <textarea id="excld-1" name="adv_field_excld[1]" class="materialize-textarea uk-margin-small-bottom"></textarea>
                                       </div>
                                  </div>
                                  <a href="javascript:void(0);" class="uk-button btn blue z-depth-0 add_advexcld uk-margin-bottom" title="Add Exclude">ADD MORE EXCLUDE</a>

                                  <hr>
                                  <ul class="uk-subnav right">
                                      <li><a href="#previewquery" class="modal-trigger btn cyan z-depth-0" data-uk-tooltip title="Preview All Query" onclick="previewAdavancedQuery()">PREVIEW QUERY</a></li>
                                      <li><button type="submit" class="btn amber darken-4 z-depth-0 step23" data-uk-tooltip title="Save Query">SAVE NOW</button></li>
                                  </ul>

                            </li>
                         </ul>
                    </div>
                </div>
            </div>

            <?php /*
            <div class="md-card" id="addIG">
                <div class="md-card-toolbar step17">
                    <div class="md-card-toolbar-actions">
                        <a class="btn waves-effect waves-light z-depth-0 green lighten-4 step18" data-uk-tooltip title="Hide Instagram" data-uk-toggle="{target:'#addIG .md-card-content'}"><i class="material-icons md-icon">visibility_off</i></a>
                    </div>
                    <h2 class="md-card-toolbar-heading-text">INSTAGRAM</h2>
                </div>
                <div class="md-card-content">
                    <ul id="hashtags" class="uk-list uk-list-line uk-margin-bottom-remove">
                       <li class="step19">
                           <h5>HASHTAG</h5>
                           <p>Write hashtag with prefix '#' then hit ENTER to add more hashtags.</p>
                           <div class="wrap_hashtag">
                                <div class="chips-hashtag"></div>
                           </div>
                       </li>
                       <li class="step20">
                             <h5>EXCLUDE HASHTAG</h5>
                             <p>Write hashtag with prefix '#' then hit ENTER to add more hashtags.</p>
                             <div class="wrap_excldhashtag">
                                  <div class="chips-excldhashtag"></div>
                             </div>
                       </li>
                       <li class="step21">
                             <h5>USER</h5>
                             <p>Write user with prefix '@' then hit ENTER to add more users.</p>
                             <div class="wrap_user">
                                  <div class="chips-user"></div>
                             </div>
                       </li>
                       <li class="step22">
                             <h5>EXCLUDE USER</h5>
                             <p>Write user with prefix '@' then hit ENTER to add more users.</p>
                             <div class="wrap_exclduser">
                                  <div class="chips-exclduser"></div>
                             </div>
                        </li>
                    </ul>

                </div>
            </div>

            <div class="md-card">
                <div class="md-card-content uk-text-right">
                    <button type="submit" class="btn amber darken-4 z-depth-0 step23" data-uk-tooltip title="Save Query">SAVE NOW</button>
                </div>
            </div>
            */ ?>
            <div id="previewquery" class="modal modal-fixed-footer">
                 <div class="modal-content">
                    <div class="previewquery"></div>
                 </div>
                 <div class="modal-footer">
                    <a class="modal-action modal-close waves-effect waves-light btn z-depth-0">CLOSE</a>
                 </div>
            </div>
        </form>
    </div>

</main>
@endsection

@section('page-level-scripts')
    <script src="{!! asset('mediawave/js/intro.min.js') !!}"></script>
    <script src="{!! asset('js/add-project.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('js/help-addproject.js') !!}" type="text/javascript"></script>
@endsection
