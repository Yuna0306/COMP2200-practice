<!DOCTYPE html>

<html  dir="ltr" lang="en" xml:lang="en">
<head>
    <title>COMP2200_SHFYR_2024_ALL_U|/ COMP6200: Practical week 1 ipynb file | iLearn</title>
    <link rel="shortcut icon" href="https://ilearn.mq.edu.au/theme/image.php/mqboost/theme/1724256719/favicon" />
    <!-- Start Matomo Code -->
    <noscript>
        <p>
            <img src="//catalyst-analytics.net/piwik.php?idsite=51" style="border:0;" alt="" />
        </p>
    </noscript>

<script>
    var _paq = _paq || [];
    
    _paq.push(['setUserId', '392038']);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    _paq.push(['enableHeartBeatTimer', 30]);

    function embedTrackingCode() {
        var u='//catalyst-analytics.net/';
        var p='//catalyst-analytics.net/';

        _paq.push(['setTrackerUrl', u+'piwik.php']);
        _paq.push(['setSiteId', 51]);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=p+'piwik.js'; s.parentNode.insertBefore(g,s);
    }

    if (window.addEventListener) {
        window.addEventListener("load", embedTrackingCode, false);
    } else if (window.attachEvent) {
        window.attachEvent("onload", embedTrackingCode);
    } else {
        embedTrackingCode();
    }
</script>
<!-- End Matomo Code --><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="moodle, COMP2200_SHFYR_2024_ALL_U|/ COMP6200: Practical week 1 ipynb file | iLearn" />
<link rel="stylesheet" type="text/css" href="https://ilearn.mq.edu.au/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css" /><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="https://ilearn.mq.edu.au/theme/styles.php/mqboost/1724256719_1724257086/all" />
<script>
//<![CDATA[
var M = {}; M.yui = {};
M.pageloadstarttime = new Date();
M.cfg = {"wwwroot":"https:\/\/ilearn.mq.edu.au","homeurl":{},"sesskey":"ilDtmDCxmr","sessiontimeout":"14400","sessiontimeoutwarning":1200,"themerev":"1724256719","slasharguments":1,"theme":"mqboost","iconsystemmodule":"core\/icon_system_fontawesome","jsrev":"1724256719","admin":"admin","svgicons":true,"usertimezone":"Australia\/Sydney","language":"en","courseId":78675,"courseContextId":9164753,"contextid":9164840,"contextInstanceId":8255343,"langrev":1724256719,"templaterev":"1724256719"};var yui1ConfigFn = function(me) {if(/-skin|reset|fonts|grids|base/.test(me.name)){me.type='css';me.path=me.path.replace(/\.js/,'.css');me.path=me.path.replace(/\/yui2-skin/,'/assets/skins/sam/yui2-skin')}};
var yui2ConfigFn = function(me) {var parts=me.name.replace(/^moodle-/,'').split('-'),component=parts.shift(),module=parts[0],min='-min';if(/-(skin|core)$/.test(me.name)){parts.pop();me.type='css';min=''}
if(module){var filename=parts.join('-');me.path=component+'/'+module+'/'+filename+min+'.'+me.type}else{me.path=component+'/'+component+'.'+me.type}};
YUI_config = {"debug":false,"base":"https:\/\/ilearn.mq.edu.au\/lib\/yuilib\/3.17.2\/","comboBase":"https:\/\/ilearn.mq.edu.au\/theme\/yui_combo.php?","combine":true,"filter":null,"insertBefore":"firstthemesheet","groups":{"yui2":{"base":"https:\/\/ilearn.mq.edu.au\/lib\/yuilib\/2in3\/2.9.0\/build\/","comboBase":"https:\/\/ilearn.mq.edu.au\/theme\/yui_combo.php?","combine":true,"ext":false,"root":"2in3\/2.9.0\/build\/","patterns":{"yui2-":{"group":"yui2","configFn":yui1ConfigFn}}},"moodle":{"name":"moodle","base":"https:\/\/ilearn.mq.edu.au\/theme\/yui_combo.php?m\/1724256719\/","combine":true,"comboBase":"https:\/\/ilearn.mq.edu.au\/theme\/yui_combo.php?","ext":false,"root":"m\/1724256719\/","patterns":{"moodle-":{"group":"moodle","configFn":yui2ConfigFn}},"filter":null,"modules":{"moodle-core-dragdrop":{"requires":["base","node","io","dom","dd","event-key","event-focus","moodle-core-notification"]},"moodle-core-languninstallconfirm":{"requires":["base","node","moodle-core-notification-confirm","moodle-core-notification-alert"]},"moodle-core-blocks":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification"]},"moodle-core-formchangechecker":{"requires":["base","event-focus","moodle-core-event"]},"moodle-core-notification":{"requires":["moodle-core-notification-dialogue","moodle-core-notification-alert","moodle-core-notification-confirm","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-core-notification-dialogue":{"requires":["base","node","panel","escape","event-key","dd-plugin","moodle-core-widget-focusafterclose","moodle-core-lockscroll"]},"moodle-core-notification-alert":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-confirm":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-exception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-ajaxexception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-actionmenu":{"requires":["base","event","node-event-simulate"]},"moodle-core-chooserdialogue":{"requires":["base","panel","moodle-core-notification"]},"moodle-core-handlebars":{"condition":{"trigger":"handlebars","when":"after"}},"moodle-core-event":{"requires":["event-custom"]},"moodle-core-popuphelp":{"requires":["moodle-core-tooltip"]},"moodle-core-lockscroll":{"requires":["plugin","base-build"]},"moodle-core-tooltip":{"requires":["base","node","io-base","moodle-core-notification-dialogue","json-parse","widget-position","widget-position-align","event-outside","cache-base"]},"moodle-core-maintenancemodetimer":{"requires":["base","node"]},"moodle-core_availability-form":{"requires":["base","node","event","event-delegate","panel","moodle-core-notification-dialogue","json"]},"moodle-backup-confirmcancel":{"requires":["node","node-event-simulate","moodle-core-notification-confirm"]},"moodle-backup-backupselectall":{"requires":["node","event","node-event-simulate","anim"]},"moodle-course-management":{"requires":["base","node","io-base","moodle-core-notification-exception","json-parse","dd-constrain","dd-proxy","dd-drop","dd-delegate","node-event-delegate"]},"moodle-course-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-course-coursebase","moodle-course-util"]},"moodle-course-util":{"requires":["node"],"use":["moodle-course-util-base"],"submodules":{"moodle-course-util-base":{},"moodle-course-util-section":{"requires":["node","moodle-course-util-base"]},"moodle-course-util-cm":{"requires":["node","moodle-course-util-base"]}}},"moodle-course-categoryexpander":{"requires":["node","event-key"]},"moodle-form-shortforms":{"requires":["node","base","selector-css3","moodle-core-event"]},"moodle-form-dateselector":{"requires":["base","node","overlay","calendar"]},"moodle-form-passwordunmask":{"requires":[]},"moodle-question-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-question-searchform":{"requires":["base","node"]},"moodle-question-preview":{"requires":["base","dom","event-delegate","event-key","core_question_engine"]},"moodle-availability_badge-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_cohort-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_completion-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_date-form":{"requires":["base","node","event","io","moodle-core_availability-form"]},"moodle-availability_grade-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_group-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_grouping-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_mandatorybadge-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_profile-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_releasecode-form":{"requires":["base","node","event","event-valuechange","moodle-core_availability-form"]},"moodle-mod_assign-history":{"requires":["node","transition"]},"moodle-mod_attendance-groupfilter":{"requires":["base","node"]},"moodle-mod_checklist-linkselect":{"requires":["node","event-valuechange"]},"moodle-mod_dialogue-autocomplete":{"requires":["base","node","json-parse","autocomplete","autocomplete-filters","autocomplete-highlighters","event","event-key"]},"moodle-mod_dialogue-clickredirector":{"requires":["base","node","json-parse","clickredirector","clickredirector-filters","clickredirector-highlighters","event","event-key"]},"moodle-mod_dialogue-userpreference":{"requires":["base","node","json-parse","userpreference","userpreference-filters","userpreference-highlighters","event","event-key"]},"moodle-mod_mediagallery-mediabox":{"requires":["base","node","selector-css3"]},"moodle-mod_mediagallery-base":{"requires":["base","node","selector-css3","dd-constrain","dd-proxy","dd-drop","dd-plugin","moodle-core-notification","event"]},"moodle-mod_oublog-tagselector":{"requires":["base","node","autocomplete","autocomplete-filters","autocomplete-highlighters"]},"moodle-mod_oublog-savecheck":{"requires":["base","node","io","panel","moodle-core-notification-alert"]},"moodle-mod_quiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-base","moodle-mod_quiz-util-page","moodle-mod_quiz-util-slot","moodle-course-util"]},"moodle-mod_quiz-util":{"requires":["node","moodle-core-actionmenu"],"use":["moodle-mod_quiz-util-base"],"submodules":{"moodle-mod_quiz-util-base":{},"moodle-mod_quiz-util-slot":{"requires":["node","moodle-mod_quiz-util-base"]},"moodle-mod_quiz-util-page":{"requires":["node","moodle-mod_quiz-util-base"]}}},"moodle-mod_quiz-quizbase":{"requires":["base","node"]},"moodle-mod_quiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_quiz-util","querystring-parse"]},"moodle-mod_quiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-mod_quiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_quiz-modform":{"requires":["base","node","event"]},"moodle-message_airnotifier-toolboxes":{"requires":["base","node","io"]},"moodle-filter_glossary-autolinker":{"requires":["base","node","io-base","json-parse","event-delegate","overlay","moodle-core-event","moodle-core-notification-alert","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-filter_mathjaxloader-loader":{"requires":["moodle-core-event"]},"moodle-editor_atto-rangy":{"requires":[]},"moodle-editor_atto-editor":{"requires":["node","transition","io","overlay","escape","event","event-simulate","event-custom","node-event-html5","node-event-simulate","yui-throttle","moodle-core-notification-dialogue","moodle-core-notification-confirm","moodle-editor_atto-rangy","handlebars","timers","querystring-stringify"]},"moodle-editor_atto-plugin":{"requires":["node","base","escape","event","event-outside","handlebars","event-custom","timers","moodle-editor_atto-menu"]},"moodle-editor_atto-menu":{"requires":["moodle-core-notification-dialogue","node","event","event-custom"]},"moodle-report_eventlist-eventfilter":{"requires":["base","event","node","node-event-delegate","datatable","autocomplete","autocomplete-filters"]},"moodle-report_loglive-fetchlogs":{"requires":["base","event","node","io","node-event-delegate"]},"moodle-gradereport_history-userselector":{"requires":["escape","event-delegate","event-key","handlebars","io-base","json-parse","moodle-core-notification-dialogue"]},"moodle-qbank_editquestion-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-tool_capability-search":{"requires":["base","node"]},"moodle-tool_lp-dragdrop-reorder":{"requires":["moodle-core-dragdrop"]},"moodle-tool_monitor-dropdown":{"requires":["base","event","node"]},"moodle-local_kaltura-ltitinymcepanel":{"requires":["base","node","panel","node-event-simulate"]},"moodle-local_kaltura-lticontainer":{"requires":["base","node"]},"moodle-local_kaltura-ltiservice":{"requires":["base","node","node-event-simulate"]},"moodle-local_kaltura-ltipanel":{"requires":["base","node","panel","node-event-simulate"]},"moodle-assignfeedback_editpdf-editor":{"requires":["base","event","node","io","graphics","json","event-move","event-resize","transition","querystring-stringify-simple","moodle-core-notification-dialog","moodle-core-notification-alert","moodle-core-notification-warning","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-atto_accessibilitychecker-button":{"requires":["color-base","moodle-editor_atto-plugin"]},"moodle-atto_accessibilityhelper-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_align-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_bold-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_charmap-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_chemistry-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_clear-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_collapse-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_echo360attoplugin-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emojipicker-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emoticon-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_equation-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_fontfamily-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_h5p-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_html-codemirror":{"requires":["moodle-atto_html-codemirror-skin"]},"moodle-atto_html-button":{"requires":["promise","moodle-editor_atto-plugin","moodle-atto_html-beautify","moodle-atto_html-codemirror","event-valuechange"]},"moodle-atto_html-beautify":{},"moodle-atto_htmlplus-codemirror":{"requires":["moodle-atto_htmlplus-codemirror-skin"]},"moodle-atto_htmlplus-button":{"requires":["moodle-editor_atto-plugin","moodle-atto_htmlplus-beautify","moodle-atto_htmlplus-codemirror","event-valuechange"]},"moodle-atto_htmlplus-beautify":{},"moodle-atto_image-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_indent-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_italic-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_kalturamedia-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_link-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-usedfiles":{"requires":["node","escape"]},"moodle-atto_managefiles-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_media-button":{"requires":["moodle-editor_atto-plugin","moodle-form-shortforms"]},"moodle-atto_mediagallery-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_noautolink-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_orderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_preview-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_recordrtc-recording":{"requires":["moodle-atto_recordrtc-button"]},"moodle-atto_recordrtc-button":{"requires":["moodle-editor_atto-plugin","moodle-atto_recordrtc-recording"]},"moodle-atto_rtl-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_strike-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_styles-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_subscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_superscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_table-button":{"requires":["moodle-editor_atto-plugin","moodle-editor_atto-menu","event","event-valuechange"]},"moodle-atto_templates4u-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_title-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_underline-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_undo-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_unorderedlist-button":{"requires":["moodle-editor_atto-plugin"]}}},"gallery":{"name":"gallery","base":"https:\/\/ilearn.mq.edu.au\/lib\/yuilib\/gallery\/","combine":true,"comboBase":"https:\/\/ilearn.mq.edu.au\/theme\/yui_combo.php?","ext":false,"root":"gallery\/1724256719\/","patterns":{"gallery-":{"group":"gallery"}}}},"modules":{"core_filepicker":{"name":"core_filepicker","fullpath":"https:\/\/ilearn.mq.edu.au\/lib\/javascript.php\/1724256719\/repository\/filepicker.js","requires":["base","node","node-event-simulate","json","async-queue","io-base","io-upload-iframe","io-form","yui2-treeview","panel","cookie","datatable","datatable-sort","resize-plugin","dd-plugin","escape","moodle-core_filepicker","moodle-core-notification-dialogue"]},"core_comment":{"name":"core_comment","fullpath":"https:\/\/ilearn.mq.edu.au\/lib\/javascript.php\/1724256719\/comment\/comment.js","requires":["base","io-base","node","json","yui2-animation","overlay","escape"]},"mathjax":{"name":"mathjax","fullpath":"https:\/\/cdn.jsdelivr.net\/npm\/mathjax@2.7.9\/MathJax.js?delayStartupUntil=configured"}}};
M.yui.loader = {modules: {}};

//]]>
</script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body  id="page-mod-resource-view" class="format-topcoll  path-mod path-mod-resource safari dir-ltr lang-en yui-skin-sam yui3-skin-sam ilearn-mq-edu-au pagelayout-incourse course-78675 context-9164840 cmid-8255343 cm-type-resource category-4919 category-1527 category-183 category-182 category-144 uses-drawers drawer-open-index">
<div class="toast-wrapper mx-auto py-0 fixed-top" role="status" aria-live="polite"></div>
<div id="page-wrapper" class="d-print-block">

    <div>
    <a class="sr-only sr-only-focusable" href="#maincontent">Skip to main content</a>
</div><script src="https://ilearn.mq.edu.au/lib/javascript.php/1724256719/lib/polyfills/polyfill.js"></script>
<script src="https://ilearn.mq.edu.au/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.js"></script><script src="https://ilearn.mq.edu.au/lib/javascript.php/1724256719/lib/javascript-static.js"></script>
<script>
//<![CDATA[
document.body.className += ' jsenabled';
//]]>
</script>



    
    <nav class="navbar fixed-top navbar-light bg-mq navbar-expand" aria-label="Site navigation">
    
        <button class="navbar-toggler aabtn d-block d-md-none px-1 my-1 border-0" data-toggler="drawers" data-action="toggle" data-target="theme_boost-drawers-primary">
            <span class="navbar-toggler-icon"></span>
            <span class="sr-only">Side panel</span>
        </button>
    
        <a href="https://ilearn.mq.edu.au/my/" class="navbar-brand d-none d-md-flex align-items-center m-0 mr-4 p-0 aabtn">
    
                <img src="https://ilearn.mq.edu.au/pluginfile.php/1/core_admin/logocompact/300x300/1724256719/header-logo.png" class="logo mr-1" alt="iLearn">
        </a>
            <div class="primary-navigation">
                <nav class="moremenu navigation">
                    <ul id="moremenu-66dd5a63a0b14-navbar-nav" role="menubar" class="nav more-nav navbar-nav">
                                <li data-key="home" class="nav-item" role="none" data-forceintomoremenu="false">
                                            <a role="menuitem" class="nav-link  "
                                                href="https://ilearn.mq.edu.au/?redirect=0"
                                                
                                                
                                                tabindex="-1"
                                            >
                                                Home
                                            </a>
                                </li>
                                <li data-key="myhome" class="nav-item" role="none" data-forceintomoremenu="false">
                                            <a role="menuitem" class="nav-link  "
                                                href="https://ilearn.mq.edu.au/my/"
                                                
                                                
                                                tabindex="-1"
                                            >
                                                My home
                                            </a>
                                </li>
                                <li data-key="mycourses" class="nav-item" role="none" data-forceintomoremenu="false">
                                            <a role="menuitem" class="nav-link  "
                                                href="https://ilearn.mq.edu.au/my/courses.php"
                                                
                                                
                                                tabindex="-1"
                                            >
                                                My units
                                            </a>
                                </li>
                                <li class="dropdown nav-item" role="none" data-forceintomoremenu="false">
                                    <a class="dropdown-toggle nav-link  " id="drop-down-66dd5a63a08d6" role="menuitem" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" href="#" aria-controls="drop-down-menu-66dd5a63a08d6"
                                        
                                        
                                        tabindex="-1"
                                    >
                                        Learning and Study Support
                                    </a>
                                    <div class="dropdown-menu" role="menu" id="drop-down-menu-66dd5a63a08d6" aria-labelledby="drop-down-66dd5a63a08d6">
                                                    <a class="dropdown-item" role="menuitem" href="https://ilearn.mq.edu.au/course/view.php?id=16580%22%20target%3D%22_blank"  tabindex="-1"
                                                        
                                                    >
                                                        StudyWISE
                                                    </a>
                                                    <a class="dropdown-item" role="menuitem" href="https://students.mq.edu.au/support/study/writing/writewise" target="_blank"  tabindex="-1"
                                                        
                                                    >
                                                        WriteWISE
                                                    </a>
                                                    <a class="dropdown-item" role="menuitem" href="https://students.mq.edu.au/support/study/writing" target="_blank"  tabindex="-1"
                                                        
                                                    >
                                                        The Writing Centre
                                                    </a>
                                                    <a class="dropdown-item" role="menuitem" href="https://students.mq.edu.au/support/study/numeracy" target="_blank"  tabindex="-1"
                                                        
                                                    >
                                                        Numeracy Centre
                                                    </a>
                                                    <a class="dropdown-item" role="menuitem" href="https://mylearn.mq.edu.au" target="_blank"  tabindex="-1"
                                                        
                                                    >
                                                        myLearn
                                                    </a>
                                                    <a class="dropdown-item" role="menuitem" href="https://ilearn.mq.edu.au/mod/page/view.php?id=7573854%22%20target%3D%22_blank"  tabindex="-1"
                                                        
                                                    >
                                                        Studiosity
                                                    </a>
                                    </div>
                                </li>
                                <li class="dropdown nav-item" role="none" data-forceintomoremenu="false">
                                    <a class="dropdown-toggle nav-link  " id="drop-down-66dd5a63a0921" role="menuitem" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" href="#" aria-controls="drop-down-menu-66dd5a63a0921"
                                        
                                        
                                        tabindex="-1"
                                    >
                                        Student Services
                                    </a>
                                    <div class="dropdown-menu" role="menu" id="drop-down-menu-66dd5a63a0921" aria-labelledby="drop-down-66dd5a63a0921">
                                                    <a class="dropdown-item" role="menuitem" href="https://ask.mq.edu.au/ "target="_blank"  tabindex="-1"
                                                        
                                                    >
                                                        Ask.mq
                                                    </a>
                                                    <a class="dropdown-item" role="menuitem" href="https://students.mq.edu.au/support/centres/service-connect "target="_blank"  tabindex="-1"
                                                        
                                                    >
                                                        Service Connect
                                                    </a>
                                                    <a class="dropdown-item" role="menuitem" href="https://students.mq.edu.au/support "target="_blank"  tabindex="-1"
                                                        
                                                    >
                                                        Support Services
                                                    </a>
                                                    <a class="dropdown-item" role="menuitem" href="https://mq-access.symplicity.com/students/ "target="_blank"  tabindex="-1"
                                                        
                                                    >
                                                        Accessibility Service Portal
                                                    </a>
                                                    <a class="dropdown-item" role="menuitem" href="https://students.mq.edu.au/support/technology/service-desk "target="_blank"  tabindex="-1"
                                                        
                                                    >
                                                        IT Support
                                                    </a>
                                                    <a class="dropdown-item" role="menuitem" href="https://students.mq.edu.au/uni-life/community/walanga-muru "target="_blank"  tabindex="-1"
                                                        
                                                    >
                                                        Walanga Muru (Indigenous student services)
                                                    </a>
                                                    <a class="dropdown-item" role="menuitem" href="https://www.mq.edu.au/about/campus-services/security "target="_blank"  tabindex="-1"
                                                        
                                                    >
                                                        Campus Security
                                                    </a>
                                    </div>
                                </li>
                                <li class="dropdown nav-item" role="none" data-forceintomoremenu="false">
                                    <a class="dropdown-toggle nav-link  " id="drop-down-66dd5a63a0958" role="menuitem" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" href="#" aria-controls="drop-down-menu-66dd5a63a0958"
                                        
                                        
                                        tabindex="-1"
                                    >
                                        Library
                                    </a>
                                    <div class="dropdown-menu" role="menu" id="drop-down-menu-66dd5a63a0958" aria-labelledby="drop-down-66dd5a63a0958">
                                                    <a class="dropdown-item" role="menuitem" href="https://mq-ua.libanswers.com/chat/widget/b6039bae1e8fd600b6933d5d136b77c5 "target="_blank"  tabindex="-1"
                                                        
                                                    >
                                                        Library Live Chat
                                                    </a>
                                                    <a class="dropdown-item" role="menuitem" href="https://www.mq.edu.au/about/facilities/library "target="_blank"  tabindex="-1"
                                                        
                                                    >
                                                        MultiSearch
                                                    </a>
                                                    <a class="dropdown-item" role="menuitem" href="https://libguides.mq.edu.au/multisearch "target="_blank"  tabindex="-1"
                                                        
                                                    >
                                                        How to use MultiSearch
                                                    </a>
                                                    <a class="dropdown-item" role="menuitem" href="https://libguides.mq.edu.au/homepage "target="_blank"  tabindex="-1"
                                                        
                                                    >
                                                        Subject and Research Guides
                                                    </a>
                                                    <a class="dropdown-item" role="menuitem" href="https://libguides.mq.edu.au/referencing "target="_blank"  tabindex="-1"
                                                        
                                                    >
                                                        Guides for Referencing
                                                    </a>
                                                    <a class="dropdown-item" role="menuitem" href="https://www.mq.edu.au/about/facilities/library/study-support/unit-readings "target="_blank"  tabindex="-1"
                                                        
                                                    >
                                                        Leganto
                                                    </a>
                                    </div>
                                </li>
                                <li class="dropdown nav-item" role="none" data-forceintomoremenu="false">
                                    <a class="dropdown-toggle nav-link  " id="drop-down-66dd5a63a0987" role="menuitem" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" href="#" aria-controls="drop-down-menu-66dd5a63a0987"
                                        
                                        
                                        tabindex="-1"
                                    >
                                        Staff
                                    </a>
                                    <div class="dropdown-menu" role="menu" id="drop-down-menu-66dd5a63a0987" aria-labelledby="drop-down-66dd5a63a0987">
                                                    <a class="dropdown-item" role="menuitem" href="https://report.ilearn.mq.edu.au/ "target="_blank"  tabindex="-1"
                                                        
                                                    >
                                                        iLearn Insights
                                                    </a>
                                                    <a class="dropdown-item" role="menuitem" href="https://staff.mq.edu.au/teach/technologies-and-tools/ilearn-unit-websites "target="_blank"  tabindex="-1"
                                                        
                                                    >
                                                        iLearn Quick Guides for staff
                                                    </a>
                                                    <a class="dropdown-item" role="menuitem" href="https://staff.mq.edu.au/teach/teaching-development-recognition/workshops-and-training "target="_blank"  tabindex="-1"
                                                        
                                                    >
                                                        L&amp;T Workshops and Services
                                                    </a>
                                                    <a class="dropdown-item" role="menuitem" href="https://iteach.mq.edu.au/sign_in "target="_blank"  tabindex="-1"
                                                        
                                                    >
                                                        iTeach (iLearn and Unit Guide Setup)
                                                    </a>
                                                    <a class="dropdown-item" role="menuitem" href="https://staff.mq.edu.au/teach/technologies-and-tools/lecture-recordings "target="_blank"  tabindex="-1"
                                                        
                                                    >
                                                        ECHO360 Lecture recordings info
                                                    </a>
                                                    <a class="dropdown-item" role="menuitem" href="https://staff.mq.edu.au/teach/teaching-development-recognition/teaching-unit-evaluation "target="_blank"  tabindex="-1"
                                                        
                                                    >
                                                        Student Surveys
                                                    </a>
                                                    <a class="dropdown-item" role="menuitem" href="https://ishare.mq.edu.au "target="_blank"  tabindex="-1"
                                                        
                                                    >
                                                        iShare (Learning Resources Repository)
                                                    </a>
                                    </div>
                                </li>
                        <li role="none" class="nav-item dropdown dropdownmoremenu d-none" data-region="morebutton">
                            <a class="dropdown-toggle nav-link " href="#" id="moremenu-dropdown-66dd5a63a0b14" role="menuitem" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="-1">
                                More
                            </a>
                            <ul class="dropdown-menu dropdown-menu-left" data-region="moredropdown" aria-labelledby="moremenu-dropdown-66dd5a63a0b14" role="menu">
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
    
        <ul class="navbar-nav d-none d-md-flex my-1 px-1">
            <!-- page_heading_menu -->
            
        </ul>
    
        <div id="usernavigation" class="navbar-nav ml-auto">
            <div class="popover-region collapsed popover-region-notifications"
    id="nav-notification-popover-container" data-userid="392038"
    data-region="popover-region">
    <div class="popover-region-toggle nav-link icon-no-margin"
        data-region="popover-region-toggle"
        role="button"
        aria-controls="popover-region-container-66dd5a63a262066dd5a639da388"
        aria-haspopup="true"
        aria-label=" Show notification window with no new notifications   "
        tabindex="0">
                <i class="icon fa fa-bell-o fa-fw "  title="Toggle notifications menu" role="img" aria-label="Toggle notifications menu"></i>
        <div
            class="count-container hidden"
            data-region="count-container"
            aria-hidden=true
        >
            0
        </div>

    </div>
    <div 
        id="popover-region-container-66dd5a63a262066dd5a639da388"
        class="popover-region-container"
        data-region="popover-region-container"
        aria-expanded="false"
        aria-hidden="true"
        aria-label="Notification window"
        role="region">
        <div class="popover-region-header-container">
            <h3 class="popover-region-header-text" data-region="popover-region-header-text">Notifications</h3>
            <div class="popover-region-header-actions" data-region="popover-region-header-actions">        <a class="mark-all-read-button"
           href="#"
           title="Mark all as read"
           data-action="mark-all-read"
           role="button"
           aria-label="Mark all as read">
            <span class="normal-icon"><i class="icon fa fa-check fa-fw " aria-hidden="true"  ></i></span>
            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
        </a>
            <a href="https://ilearn.mq.edu.au/message/notificationpreferences.php"
               title="Notification preferences"
               aria-label="Notification preferences">
                <i class="icon fa fa-cog fa-fw " aria-hidden="true"  ></i></a>
</div>
        </div>
        <div class="popover-region-content-container" data-region="popover-region-content-container">
            <div class="popover-region-content" data-region="popover-region-content">
                        <div class="all-notifications"
            data-region="all-notifications"
            role="log"
            aria-busy="false"
            aria-atomic="false"
            aria-relevant="additions"></div>
        <div class="empty-message" tabindex="0" data-region="empty-message">You have no notifications</div>

            </div>
            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" role="img" aria-label="Loading"></i></span>
        </div>
                <a class="see-all-link"
                    href="https://ilearn.mq.edu.au/message/output/popup/notifications.php">
                    <div class="popover-region-footer-container">
                        <div class="popover-region-seeall-text">See all</div>
                    </div>
                </a>
    </div>
</div>
            <div class="d-flex align-items-stretch usermenu-container" data-region="usermenu">
                    <div class="usermenu">
                            <div class="dropdown show">
                                <a href="#" role="button" id="user-menu-toggle" data-toggle="dropdown" aria-label="User menu"
                                   aria-haspopup="true" aria-controls="user-action-menu" class="btn dropdown-toggle">
                                    <span class="userbutton">
                                        <span class="avatars">
                                                <span class="avatar current">
                                                    <span class="userinitials size-35">YK</span>
                                                </span>
                                        </span>
                                    </span>
                                </a>
                                <div id="user-action-menu" class="dropdown-menu dropdown-menu-right">
                                    <div id="usermenu-carousel" class="carousel slide" data-touch="false" data-interval="false" data-keyboard="false">
                                        <div class="carousel-inner">
                                            <div id="carousel-item-main" class="carousel-item active" role="menu" tabindex="-1" aria-label="User">
                                                        <a href="https://ilearn.mq.edu.au/user/profile.php" class="dropdown-item" role="menuitem" tabindex="-1">
                                                                
                                                            Profile
                                                        </a>
                                                    
                                                        <a href="https://ilearn.mq.edu.au/grade/report/overview/index.php" class="dropdown-item" role="menuitem" tabindex="-1">
                                                                
                                                            Grades
                                                        </a>
                                                    
                                                        <a href="https://ilearn.mq.edu.au/calendar/view.php?view=month" class="dropdown-item" role="menuitem" tabindex="-1">
                                                                
                                                            Calendar
                                                        </a>
                                                    
                                                        <a href="https://ilearn.mq.edu.au/user/files.php" class="dropdown-item" role="menuitem" tabindex="-1">
                                                                
                                                            Private files
                                                        </a>
                                                    
                                                        <a href="https://ilearn.mq.edu.au/reportbuilder/index.php" class="dropdown-item" role="menuitem" tabindex="-1">
                                                                
                                                            Reports
                                                        </a>
                                                    
                                                    <div class="dropdown-divider"></div>
                                                        <a href="https://ilearn.mq.edu.au/user/preferences.php" class="dropdown-item" role="menuitem" tabindex="-1">
                                                                
                                                            Preferences
                                                        </a>
                                                    <div class="dropdown-divider"></div>
                                                        <a href="https://ilearn.mq.edu.au/login/logout.php?sesskey=ilDtmDCxmr" class="dropdown-item" role="menuitem" tabindex="-1">
                                                                
                                                            Log out
                                                        </a>
                                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
    
                <span class="header-logo-ilearn d-none d-sm-inline">
                    <img src="https://ilearn.mq.edu.au/theme/image.php/mqboost/theme_mqboost/1724256719/ilearn-logo" alt="iLearn">
                    </span>
            </div>
            
        </div>
    </nav>
    

<div  class="drawer drawer-left drawer-primary d-print-none not-initialized" data-region="fixed-drawer" id="theme_boost-drawers-primary" data-preference="" data-state="show-drawer-primary" data-forceopen="0" data-close-on-resize="1">
    <div class="drawerheader">
        <button
            class="btn drawertoggle icon-no-margin hidden"
            data-toggler="drawers"
            data-action="closedrawer"
            data-target="theme_boost-drawers-primary"
            data-toggle="tooltip"
            data-placement="right"
            title="Close drawer"
        >
            <i class="icon fa fa-times fa-fw " aria-hidden="true"  ></i>
        </button>
    </div>
    <div class="drawercontent drag-container" data-usertour="scroller">
                <div class="list-group">
                <a href="https://ilearn.mq.edu.au/?redirect=0" class="list-group-item list-group-item-action  " >
                    Home
                </a>
                <a href="https://ilearn.mq.edu.au/my/" class="list-group-item list-group-item-action  " >
                    My home
                </a>
                <a href="https://ilearn.mq.edu.au/my/courses.php" class="list-group-item list-group-item-action  " >
                    My units
                </a>
                <a id="drop-down-1" href="#" class="list-group-item list-group-item-action icons-collapse-expand collapsed d-flex" data-toggle="collapse" data-target="#drop-down-menu-1" aria-expanded="false" aria-controls="drop-down-menu-1">
                    Learning and Study Support
                    <span class="ml-auto expanded-icon icon-no-margin mx-2">
                        <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"  ></i>
                        <span class="sr-only">
                            Collapse
                        </span>
                    </span>
                    <span class="ml-auto collapsed-icon icon-no-margin mx-2">
                        <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"  ></i>
                        <span class="sr-only">
                            Expand
                        </span>
                    </span>
                </a>
                <div class="collapse list-group-item p-0 border-0" role="menu" id="drop-down-menu-1" aria-labelledby="drop-down-1">
                             <a href="https://ilearn.mq.edu.au/course/view.php?id=16580%22%20target%3D%22_blank" class="pl-5 bg-light list-group-item list-group-item-action">StudyWISE</a>
                             <a href="https://students.mq.edu.au/support/study/writing/writewise" target="_blank" class="pl-5 bg-light list-group-item list-group-item-action">WriteWISE</a>
                             <a href="https://students.mq.edu.au/support/study/writing" target="_blank" class="pl-5 bg-light list-group-item list-group-item-action">The Writing Centre</a>
                             <a href="https://students.mq.edu.au/support/study/numeracy" target="_blank" class="pl-5 bg-light list-group-item list-group-item-action">Numeracy Centre</a>
                             <a href="https://mylearn.mq.edu.au" target="_blank" class="pl-5 bg-light list-group-item list-group-item-action">myLearn</a>
                             <a href="https://ilearn.mq.edu.au/mod/page/view.php?id=7573854%22%20target%3D%22_blank" class="pl-5 bg-light list-group-item list-group-item-action">Studiosity</a>
                </div>
                <a id="drop-down-8" href="#" class="list-group-item list-group-item-action icons-collapse-expand collapsed d-flex" data-toggle="collapse" data-target="#drop-down-menu-8" aria-expanded="false" aria-controls="drop-down-menu-8">
                    Student Services
                    <span class="ml-auto expanded-icon icon-no-margin mx-2">
                        <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"  ></i>
                        <span class="sr-only">
                            Collapse
                        </span>
                    </span>
                    <span class="ml-auto collapsed-icon icon-no-margin mx-2">
                        <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"  ></i>
                        <span class="sr-only">
                            Expand
                        </span>
                    </span>
                </a>
                <div class="collapse list-group-item p-0 border-0" role="menu" id="drop-down-menu-8" aria-labelledby="drop-down-8">
                             <a href="https://ask.mq.edu.au/ "target="_blank" class="pl-5 bg-light list-group-item list-group-item-action">Ask.mq</a>
                             <a href="https://students.mq.edu.au/support/centres/service-connect "target="_blank" class="pl-5 bg-light list-group-item list-group-item-action">Service Connect</a>
                             <a href="https://students.mq.edu.au/support "target="_blank" class="pl-5 bg-light list-group-item list-group-item-action">Support Services</a>
                             <a href="https://mq-access.symplicity.com/students/ "target="_blank" class="pl-5 bg-light list-group-item list-group-item-action">Accessibility Service Portal</a>
                             <a href="https://students.mq.edu.au/support/technology/service-desk "target="_blank" class="pl-5 bg-light list-group-item list-group-item-action">IT Support</a>
                             <a href="https://students.mq.edu.au/uni-life/community/walanga-muru "target="_blank" class="pl-5 bg-light list-group-item list-group-item-action">Walanga Muru (Indigenous student services)</a>
                             <a href="https://www.mq.edu.au/about/campus-services/security "target="_blank" class="pl-5 bg-light list-group-item list-group-item-action">Campus Security</a>
                </div>
                <a id="drop-down-16" href="#" class="list-group-item list-group-item-action icons-collapse-expand collapsed d-flex" data-toggle="collapse" data-target="#drop-down-menu-16" aria-expanded="false" aria-controls="drop-down-menu-16">
                    Library
                    <span class="ml-auto expanded-icon icon-no-margin mx-2">
                        <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"  ></i>
                        <span class="sr-only">
                            Collapse
                        </span>
                    </span>
                    <span class="ml-auto collapsed-icon icon-no-margin mx-2">
                        <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"  ></i>
                        <span class="sr-only">
                            Expand
                        </span>
                    </span>
                </a>
                <div class="collapse list-group-item p-0 border-0" role="menu" id="drop-down-menu-16" aria-labelledby="drop-down-16">
                             <a href="https://mq-ua.libanswers.com/chat/widget/b6039bae1e8fd600b6933d5d136b77c5 "target="_blank" class="pl-5 bg-light list-group-item list-group-item-action">Library Live Chat</a>
                             <a href="https://www.mq.edu.au/about/facilities/library "target="_blank" class="pl-5 bg-light list-group-item list-group-item-action">MultiSearch</a>
                             <a href="https://libguides.mq.edu.au/multisearch "target="_blank" class="pl-5 bg-light list-group-item list-group-item-action">How to use MultiSearch</a>
                             <a href="https://libguides.mq.edu.au/homepage "target="_blank" class="pl-5 bg-light list-group-item list-group-item-action">Subject and Research Guides</a>
                             <a href="https://libguides.mq.edu.au/referencing "target="_blank" class="pl-5 bg-light list-group-item list-group-item-action">Guides for Referencing</a>
                             <a href="https://www.mq.edu.au/about/facilities/library/study-support/unit-readings "target="_blank" class="pl-5 bg-light list-group-item list-group-item-action">Leganto</a>
                </div>
                <a id="drop-down-23" href="#" class="list-group-item list-group-item-action icons-collapse-expand collapsed d-flex" data-toggle="collapse" data-target="#drop-down-menu-23" aria-expanded="false" aria-controls="drop-down-menu-23">
                    Staff
                    <span class="ml-auto expanded-icon icon-no-margin mx-2">
                        <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"  ></i>
                        <span class="sr-only">
                            Collapse
                        </span>
                    </span>
                    <span class="ml-auto collapsed-icon icon-no-margin mx-2">
                        <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"  ></i>
                        <span class="sr-only">
                            Expand
                        </span>
                    </span>
                </a>
                <div class="collapse list-group-item p-0 border-0" role="menu" id="drop-down-menu-23" aria-labelledby="drop-down-23">
                             <a href="https://report.ilearn.mq.edu.au/ "target="_blank" class="pl-5 bg-light list-group-item list-group-item-action">iLearn Insights</a>
                             <a href="https://staff.mq.edu.au/teach/technologies-and-tools/ilearn-unit-websites "target="_blank" class="pl-5 bg-light list-group-item list-group-item-action">iLearn Quick Guides for staff</a>
                             <a href="https://staff.mq.edu.au/teach/teaching-development-recognition/workshops-and-training "target="_blank" class="pl-5 bg-light list-group-item list-group-item-action">L&amp;T Workshops and Services</a>
                             <a href="https://iteach.mq.edu.au/sign_in "target="_blank" class="pl-5 bg-light list-group-item list-group-item-action">iTeach (iLearn and Unit Guide Setup)</a>
                             <a href="https://staff.mq.edu.au/teach/technologies-and-tools/lecture-recordings "target="_blank" class="pl-5 bg-light list-group-item list-group-item-action">ECHO360 Lecture recordings info</a>
                             <a href="https://staff.mq.edu.au/teach/teaching-development-recognition/teaching-unit-evaluation "target="_blank" class="pl-5 bg-light list-group-item list-group-item-action">Student Surveys</a>
                             <a href="https://ishare.mq.edu.au "target="_blank" class="pl-5 bg-light list-group-item list-group-item-action">iShare (Learning Resources Repository)</a>
                </div>
        </div>

    </div>
</div>
        <div  class="drawer drawer-left show d-print-none not-initialized" data-region="fixed-drawer" id="theme_boost-drawers-courseindex" data-preference="drawer-open-index" data-state="show-drawer-left" data-forceopen="0" data-close-on-resize="0">
    <div class="drawerheader">
        <button
            class="btn drawertoggle icon-no-margin hidden"
            data-toggler="drawers"
            data-action="closedrawer"
            data-target="theme_boost-drawers-courseindex"
            data-toggle="tooltip"
            data-placement="right"
            title="Close course index"
        >
            <i class="icon fa fa-times fa-fw " aria-hidden="true"  ></i>
        </button>
    </div>
    <div class="drawercontent drag-container" data-usertour="scroller">
                        <nav id="courseindex" class="courseindex">
    <div id="courseindex-content">
        <div data-region="loading-placeholder-content" aria-hidden="true" id="course-index-placeholder">
            <ul class="media-list">
                <li class="media">
                    <div class="media-body col-md-6 p-0 d-flex align-items-center">
                        <div class="bg-pulse-grey rounded-circle mr-2"></div>
                        <div class="bg-pulse-grey w-100"></div>
                    </div>
                </li>
                <li class="media">
                    <div class="media-body col-md-6 p-0 d-flex align-items-center">
                        <div class="bg-pulse-grey rounded-circle mr-2"></div>
                        <div class="bg-pulse-grey w-100"></div>
                    </div>
                </li>
                <li class="media">
                    <div class="media-body col-md-6 p-0 d-flex align-items-center">
                        <div class="bg-pulse-grey rounded-circle mr-2"></div>
                        <div class="bg-pulse-grey w-100"></div>
                    </div>
                </li>
                <li class="media">
                    <div class="media-body col-md-6 p-0 d-flex align-items-center">
                        <div class="bg-pulse-grey rounded-circle mr-2"></div>
                        <div class="bg-pulse-grey w-100"></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

    </div>
</div>
    <div id="page" data-region="mainpage" data-usertour="scroller" class="drawers show-drawer-left  drag-container">
        <div id="topofscroll" class="main-inner">
            <div class="drawer-toggles d-flex">
                    <div class="drawer-toggler drawer-left-toggle open-nav d-print-none">
                        <button
                            class="btn icon-no-margin"
                            data-toggler="drawers"
                            data-action="toggle"
                            data-target="theme_boost-drawers-courseindex"
                            data-toggle="tooltip"
                            data-placement="right"
                            title="Open course index"
                        >
                            <span class="sr-only">Open course index</span>
                            <i class="icon fa fa-list fa-fw " aria-hidden="true"  ></i>
                        </button>
                    </div>
            </div>
            <header id="page-header" class="header-maxwidth d-print-none">
    <div class="w-100">
        <div class="d-flex flex-wrap">
            <div id="page-navbar">
                <nav aria-label="Navigation bar">
    <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="https://ilearn.mq.edu.au/my/"  >My home</a>
                </li>
        
                <li class="breadcrumb-item">
                    <a href="https://ilearn.mq.edu.au/my/courses.php"  >My units</a>
                </li>
        
                <li class="breadcrumb-item">
                    <a href="https://ilearn.mq.edu.au/course/view.php?id=78675"  title="COMP2200 Data Science / COMP6200">COMP2200_SHFYR_2024_ALL_U|/ COMP6200</a>
                </li>
        
                <li class="breadcrumb-item"><span>Week 1: Introduction</span></li>
        
                <li class="breadcrumb-item">
                    <a href="https://ilearn.mq.edu.au/mod/resource/view.php?id=8255343" aria-current="page" title="File">Practical week 1 ipynb file</a>
                </li>
        </ol>
</nav>
            </div>
            <div class="ml-auto d-flex">
                
            </div>
            <div id="course-header">
                
            </div>
        </div>
        <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <div class="page-context-header"><div class="page-header-image mr-2"><div class="content activityiconcontainer modicon_resource"><img class="icon activityicon nofilter" aria-hidden="true" src="https://ilearn.mq.edu.au/theme/image.php/mqboost/core/1724256719/f/text-24" alt="" /></div></div><div class="page-header-headings"><h1 class="h2">Practical week 1 ipynb file</h1></div></div>
                    </div>
            <div class="header-actions-container ml-auto" data-region="header-actions-container">
            </div>
        </div>
    </div>
</header>
            <div id="page-content" class="pb-3 d-print-block">
                <div id="region-main-box">
                    <section id="region-main" aria-label="Content">

                        <span class="notifications" id="user-notifications"></span>
                            <span id="maincontent"></span>
                            <div class="activity-header" data-for="page-activity-header">                                    <div class="activity-description" id="intro">
                                        <p class="resourcedetails">54.3 KB Text file</p>
                                    </div>
                                </div>
                        <div role="main"><div class="resourceworkaround">Click <a href="https://ilearn.mq.edu.au/pluginfile.php/9164840/mod_resource/content/3/Workshop%20Week%201%20%282024s2%29.ipynb" onclick="this.target='_blank'">Workshop Week 1 (2024s2).ipynb</a> link to view the file.</div></div>
                        <div class="mt-5 mb-1 activity-navigation container-fluid">
<div class="row">
    <div class="col-md-4">        <div class="float-left">
                <a href="https://ilearn.mq.edu.au/mod/page/view.php?id=8255342&forceview=1" id="prev-activity-link" class="btn btn-link" >&#x25C0;&#xFE0E; Practical Week 1</a>

        </div>
</div>
    <div class="col-md-4">        <div class="mdl-align">
            <div class="urlselect">
    <form method="post" action="https://ilearn.mq.edu.au/course/jumpto.php" class="form-inline" id="url_select_f66dd5a639da389">
        <input type="hidden" name="sesskey" value="ilDtmDCxmr">
            <label for="jump-to-activity" class="sr-only">
                Jump to...
            </label>
        <select  id="jump-to-activity" class="custom-select urlselect" name="jump"
                 >
                    <option value="" selected>Jump to...</option>
                    <option value="/mod/forum/view.php?id=8255272&amp;forceview=1" >Announcements</option>
                    <option value="/mod/forum/view.php?id=8255273&amp;forceview=1" >General Discussion Forum</option>
                    <option value="/mod/dialogue/view.php?id=8255274&amp;forceview=1" >Private Message to Unit Contacts</option>
                    <option value="/mod/url/view.php?id=8255283&amp;forceview=1" >COMP2200 Unit guide</option>
                    <option value="/mod/url/view.php?id=8255285&amp;forceview=1" >COMP6200 Unit guide</option>
                    <option value="/mod/url/view.php?id=8255287&amp;forceview=1" >Introduction to Data Science Notebook Repository</option>
                    <option value="/mod/resource/view.php?id=8395028&amp;forceview=1" >GitHub Classroom Instructions</option>
                    <option value="/mod/resource/view.php?id=8255288&amp;forceview=1" >Steve's Slide Notebooks from the Videos</option>
                    <option value="/mod/resource/view.php?id=8255290&amp;forceview=1" >github-git-cheat-sheet</option>
                    <option value="/mod/resource/view.php?id=8255291&amp;forceview=1" >atlassian-git-cheatsheet</option>
                    <option value="/mod/resource/view.php?id=8255293&amp;forceview=1" >Pandas_Cheat_Sheet</option>
                    <option value="/mod/page/view.php?id=8255298&amp;forceview=1" >Publishing your Github Repositories</option>
                    <option value="/mod/page/view.php?id=8255301&amp;forceview=1" >Portfolio Part 1</option>
                    <option value="/mod/folder/view.php?id=8255302&amp;forceview=1" >Portfolio Part 1 resources</option>
                    <option value="/mod/assign/view.php?id=8255303&amp;forceview=1" >Portfolio Part 1 - iLearn Submission</option>
                    <option value="/mod/page/view.php?id=8255306&amp;forceview=1" >Portfolio Part 2</option>
                    <option value="/mod/folder/view.php?id=8255307&amp;forceview=1" >Portfolio part 2 resources</option>
                    <option value="/mod/assign/view.php?id=8255308&amp;forceview=1" >Portfolio Part 2 - iLearn Submission</option>
                    <option value="/mod/quiz/view.php?id=8255327&amp;forceview=1" >Mock Mid Exam (just for practice)</option>
                    <option value="/mod/url/view.php?id=8255336&amp;forceview=1" >Markdown Cheat Sheet</option>
                    <option value="/mod/url/view.php?id=8255337&amp;forceview=1" >DataCamp: Jupyter Notebook Tutorial: The Definitive Guide</option>
                    <option value="/mod/folder/view.php?id=8255340&amp;forceview=1" >Week 1 Lecture notes</option>
                    <option value="/mod/page/view.php?id=8255342&amp;forceview=1" >Practical Week 1</option>
                    <option value="/mod/resource/view.php?id=8396839&amp;forceview=1" >Practical week 1 solution</option>
                    <option value="/mod/folder/view.php?id=8255349&amp;forceview=1" >Week 2 Lecture Notes</option>
                    <option value="/mod/page/view.php?id=8255351&amp;forceview=1" >Practical Week 2</option>
                    <option value="/mod/page/view.php?id=8255352&amp;forceview=1" >Practical Week 2 Solution</option>
                    <option value="/mod/url/view.php?id=8255355&amp;forceview=1" >What is CRISP DM?</option>
                    <option value="/mod/folder/view.php?id=8255357&amp;forceview=1" >Week 3 Lecture Notes</option>
                    <option value="/mod/page/view.php?id=8400917&amp;forceview=1" >Practical Week 3</option>
                    <option value="/mod/page/view.php?id=8400929&amp;forceview=1" >Practical Week 3 solution</option>
                    <option value="/mod/folder/view.php?id=8255365&amp;forceview=1" >Week 4 Lecture Notes</option>
                    <option value="/mod/page/view.php?id=8255361&amp;forceview=1" >Practical Week 4 Solution</option>
                    <option value="/mod/folder/view.php?id=8255360&amp;forceview=1" >Workshop Week 4 files</option>
                    <option value="/mod/page/view.php?id=8255359&amp;forceview=1" >Practical Week 4</option>
                    <option value="/mod/folder/view.php?id=8255373&amp;forceview=1" >Week 5 Lecture Notes</option>
                    <option value="/mod/folder/view.php?id=8255369&amp;forceview=1" >Practical Week 5 Solution</option>
                    <option value="/mod/page/view.php?id=8255367&amp;forceview=1" >Practical Week 5</option>
                    <option value="/mod/equella/view.php?id=8255379&amp;forceview=1" >Simple Linear Regression - Predicting Salary.mp4</option>
                    <option value="/mod/equella/view.php?id=8255380&amp;forceview=1" >Multiple Linear Regression - Predicting Energy Usage.mp4</option>
                    <option value="/mod/equella/view.php?id=8255381&amp;forceview=1" >Binary Classification - Predicting Diabetes.mp4</option>
                    <option value="/mod/equella/view.php?id=8255382&amp;forceview=1" >Multiclass Classification - Predicting Human Actitivities.mp4</option>
                    <option value="/mod/resource/view.php?id=8255383&amp;forceview=1" >Notebooks for Regression Examples</option>
                    <option value="/mod/folder/view.php?id=8255388&amp;forceview=1" >Week 6 lecture notes</option>
                    <option value="/mod/page/view.php?id=8255377&amp;forceview=1" >Practical Week 6 Solution</option>
                    <option value="/mod/page/view.php?id=8255376&amp;forceview=1" >Practical Week 6</option>
                    <option value="/mod/folder/view.php?id=8255398&amp;forceview=1" >Week 7 Lecture Notes</option>
                    <option value="/mod/page/view.php?id=8255395&amp;forceview=1" >Practical Week 7 Solution</option>
                    <option value="/mod/folder/view.php?id=8255394&amp;forceview=1" >Practical Week 7 files</option>
                    <option value="/mod/page/view.php?id=8255393&amp;forceview=1" >Practical Week 7</option>
                    <option value="/mod/folder/view.php?id=8255401&amp;forceview=1" >Practical Week 8 files</option>
                    <option value="/mod/page/view.php?id=8255400&amp;forceview=1" >Practical Week 8</option>
        </select>
            <noscript>
                <input type="submit" class="btn btn-secondary ml-1" value="Go">
            </noscript>
    </form>
</div>

        </div>
</div>
    <div class="col-md-4">        <div class="float-right">
                <a href="https://ilearn.mq.edu.au/mod/resource/view.php?id=8396839&forceview=1" id="next-activity-link" class="btn btn-link" >Practical week 1 solution &#x25B6;&#xFE0E;</a>

        </div>
</div>
</div>
</div>
                        

                    </section>
                </div>
            </div>
        </div>
        
        <footer id="page-footer" class="footer-popover bg-white">
            <div data-region="footer-container-popover">
                <button class="btn btn-icon bg-mqbrightred text-white icon-no-margin btn-footer-popover" data-action="footer-popover" aria-label="Show footer">
                    <i class="icon fa fa-question fa-fw " aria-hidden="true"  ></i>
                </button>
                <button class="btn btn-icon bg-mqbrightred text-white icon-no-margin btn-footer-popover back-to-top" id="back-to-top-btn">
                    <i class="icon fa fa-arrow-up fa-fw " aria-hidden="true"  ></i>
                </button>
            </div>
            <div class="footer-content-popover container" data-region="footer-content-popover">
                    <div class="footer-section p-3 border-bottom">
        
        
                            <div class="footer-support-link"><a href="https://help.ilearn.mq.edu.au" target="blank"><i class="icon fa fa-envelope-o fa-fw " aria-hidden="true"  ></i>Contact site support<i class="icon fa fa-external-link fa-fw ml-1" aria-hidden="true"  ></i></a></div>
                    </div>
                <div class="footer-section p-3 border-bottom">
                    <div class="logininfo">
                        <div class="logininfo">You are logged in as <a href="https://ilearn.mq.edu.au/user/profile.php?id=392038" title="View profile">Yuna Kim</a> (<a href="https://ilearn.mq.edu.au/login/logout.php?sesskey=ilDtmDCxmr">Log out</a>)</div>
                    </div>
                    <div class="tool_usertours-resettourcontainer">
                    </div>
        
                    
                    <script>
//<![CDATA[
var require = {
    baseUrl : 'https://ilearn.mq.edu.au/lib/requirejs.php/1724256719/',
    // We only support AMD modules with an explicit define() statement.
    enforceDefine: true,
    skipDataMain: true,
    waitSeconds : 0,

    paths: {
        jquery: 'https://ilearn.mq.edu.au/lib/javascript.php/1724256719/lib/jquery/jquery-3.6.1.min',
        jqueryui: 'https://ilearn.mq.edu.au/lib/javascript.php/1724256719/lib/jquery/ui-1.13.2/jquery-ui.min',
        jqueryprivate: 'https://ilearn.mq.edu.au/lib/javascript.php/1724256719/lib/requirejs/jquery-private'
    },

    // Custom jquery config map.
    map: {
      // '*' means all modules will get 'jqueryprivate'
      // for their 'jquery' dependency.
      '*': { jquery: 'jqueryprivate' },
      // Stub module for 'process'. This is a workaround for a bug in MathJax (see MDL-60458).
      '*': { process: 'core/first' },

      // 'jquery-private' wants the real jQuery module
      // though. If this line was not here, there would
      // be an unresolvable cyclic dependency.
      jqueryprivate: { jquery: 'jquery' }
    }
};

//]]>
</script>
<script src="https://ilearn.mq.edu.au/lib/javascript.php/1724256719/lib/requirejs/require.min.js"></script>
<script>
//<![CDATA[
M.util.js_pending("core/first");
require(['core/first'], function() {
require(['core/prefetch'])
;
require(["media_videojs/loader"], function(loader) {
    loader.setUp('en');
});;
M.util.js_pending('core_courseformat/courseeditor'); require(['core_courseformat/courseeditor'], function(amd) {amd.setViewFormat("78675", {"editing":false,"supportscomponents":true,"statekey":"1725767724_1725775413"}); M.util.js_complete('core_courseformat/courseeditor');});;

require(['core_courseformat/local/courseindex/placeholder'], function(component) {
    component.init('course-index-placeholder');
});
;

require(['core_courseformat/local/courseindex/drawer'], function(component) {
    component.init('courseindex');
});
;
function legacy_activity_onclick_handler_1(e) { e.halt(); window.open('https://ilearn.mq.edu.au/mod/url/view.php?id=8255335&redirect=1'); return false; };
function legacy_activity_onclick_handler_2(e) { e.halt(); window.open('https://ilearn.mq.edu.au/mod/url/view.php?id=8255336&redirect=1'); return false; };
function legacy_activity_onclick_handler_3(e) { e.halt(); window.open('https://ilearn.mq.edu.au/mod/url/view.php?id=8255337&redirect=1'); return false; };
function legacy_activity_onclick_handler_4(e) { e.halt(); window.open('https://ilearn.mq.edu.au/mod/resource/view.php?id=8255343&redirect=1'); return false; };
function legacy_activity_onclick_handler_5(e) { e.halt(); window.open('https://ilearn.mq.edu.au/mod/resource/view.php?id=8396839&redirect=1'); return false; };
function legacy_activity_onclick_handler_6(e) { e.halt(); window.open('https://ilearn.mq.edu.au/mod/url/view.php?id=8397295&redirect=1'); return false; };
M.util.js_pending('core_courseformat/local/content/activity_header'); require(['core_courseformat/local/content/activity_header'], function(amd) {amd.init(); M.util.js_complete('core_courseformat/local/content/activity_header');});;

    require(['core/moremenu'], function(moremenu) {
        moremenu(document.querySelector('#moremenu-66dd5a63a0b14-navbar-nav'));
    });
;

require(['jquery', 'message_popup/notification_popover_controller'], function($, Controller) {
    var container = $('#nav-notification-popover-container');
    var controller = new Controller(container);
    controller.registerEventListeners();
    controller.registerListNavigationEventListeners();
});
;

    require(['core/usermenu'], function(UserMenu) {
        UserMenu.init();
    });
;

require(['theme_boost/drawers']);
;

require(['theme_boost/drawers']);
;

    require(['core/yui'], function(Y) {
            Y.on('click', legacy_activity_onclick_handler_4, '#action_link66dd5a639da384', null);
    });
;

        require(['jquery', 'core/custom_interaction_events'], function($, CustomEvents) {
            CustomEvents.define('#jump-to-activity', [CustomEvents.events.accessibleChange]);
            $('#jump-to-activity').on(CustomEvents.events.accessibleChange, function() {
                if ($(this).val()) {
                    $('#url_select_f66dd5a639da389').submit();
                }
            });
        });
    ;

require(['theme_boost/footer-popover'], function(FooterPopover) {
    FooterPopover.init();
});

if($(".pagelayout-course").length > 0){
    var backToTopButton = $(".pagelayout-course #back-to-top-btn");
    var topOfScroll = $(".pagelayout-course #page");

    topOfScroll.scroll(function () {
        if (topOfScroll.scrollTop() > 20) {
            backToTopButton.show();
        } else {
            backToTopButton.hide();
        }
    });

    backToTopButton.on("click", function(e){
        e.preventDefault();
        topOfScroll.scrollTop(0);
    });
}



;

M.util.js_pending('theme_boost/loader');
require(['theme_boost/loader', 'theme_boost/drawer'], function(Loader, Drawer) {
    Drawer.init();
    M.util.js_complete('theme_boost/loader');
});
;
M.util.js_pending('core/notification'); require(['core/notification'], function(amd) {amd.init(9164840, []); M.util.js_complete('core/notification');});;
M.util.js_pending('core/log'); require(['core/log'], function(amd) {amd.setConfig({"level":"warn"}); M.util.js_complete('core/log');});;
M.util.js_pending('core/page_global'); require(['core/page_global'], function(amd) {amd.init(); M.util.js_complete('core/page_global');});;
M.util.js_pending('core/utility'); require(['core/utility'], function(amd) {M.util.js_complete('core/utility');});;
M.util.js_pending('core/storage_validation'); require(['core/storage_validation'], function(amd) {amd.init(1725773987); M.util.js_complete('core/storage_validation');});
    M.util.js_complete("core/first");
});
//]]>
</script>
<script>
//<![CDATA[
M.str = {"moodle":{"lastmodified":"Last modified","name":"Name","error":"Error","info":"Information","yes":"Yes","no":"No","ok":"OK","cancel":"Cancel","confirm":"Confirm","areyousure":"Are you sure?","closebuttontitle":"Close","unknownerror":"Unknown error","file":"File","url":"URL","collapseall":"Collapse all","expandall":"Expand all"},"repository":{"type":"Type","size":"Size","invalidjson":"Invalid JSON string","nofilesattached":"No files attached","filepicker":"File picker","logout":"Logout","nofilesavailable":"No files available","norepositoriesavailable":"Sorry, none of your current repositories can return files in the required format.","fileexistsdialogheader":"File exists","fileexistsdialog_editor":"A file with that name has already been attached to the text you are editing.","fileexistsdialog_filemanager":"A file with that name has already been attached","renameto":"Rename to \"{$a}\"","referencesexist":"There are {$a} links to this file","select":"Select"},"admin":{"confirmdeletecomments":"You are about to delete comments, are you sure?","confirmation":"Confirmation"},"debug":{"debuginfo":"Debug info","line":"Line","stacktrace":"Stack trace"},"langconfig":{"labelsep":": "}};
//]]>
</script>
<script>
//<![CDATA[
(function() {Y.use("moodle-filter_glossary-autolinker",function() {M.filter_glossary.init_filter_autolinking({"courseid":0});
});
Y.use("moodle-filter_mathjaxloader-loader",function() {M.filter_mathjaxloader.configure({"mathjaxconfig":"\n\n\nMathJax.Hub.Config({\n    config: [\"Accessible.js\", \"Safe.js\"],\n    errorSettings: { message: [\"!\"] },\n    skipStartupTypeset: true,\n    messageStyle: \"none\",\n    TeX: {\n        extensions: [\"mhchem.js\",\"color.js\",\"AMSmath.js\",\"AMSsymbols.js\",\"noErrors.js\",\"noUndefined.js\"]\n    }\n});\n      ","lang":"en"});
});
M.util.help_popups.setup(Y);
 M.util.js_pending('random66dd5a639da3810'); Y.on('domready', function() { M.util.js_complete("init");  M.util.js_complete('random66dd5a639da3810'); });
})();
//]]>
</script>

                </div>
                <div class="footer-section p-3">
                    <div>© Copyright Macquarie University</div>
                    <div><a target="_blank" href="https://ishare.mq.edu.au/prod/file/dbc1a9c8-7bcd-4a60-a4a1-f46ab50af7b2/1/iLearn%20Confidentiality%20and%20Privacy%20Collection%20Statement.pdf">Confidentiality & Privacy Statement</a></div>
                    <!--<div>Powered by <a href="https://moodle.com">Moodle</a></div>
                    -->
                </div>
            </div>
        
            <div class="footer-content-debugging footer-dark bg-dark text-light">
                <div class="container-fluid footer-dark-inner">
                    
                </div>
            </div>
        </footer>
    </div>
    
</div>

</body>
</html>