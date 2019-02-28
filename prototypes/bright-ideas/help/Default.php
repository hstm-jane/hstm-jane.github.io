<!DOCTYPE html>
<html class="left-layout" data-mc-runtime-file-type="Default">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta charset="utf-8" /><title></title>
        <link rel="Stylesheet" href="Skins/Default/Stylesheets/TextEffects.css" />
        <link rel="Stylesheet" href="Skins/Default/Stylesheets/Styles.css" />
        <script type="text/javascript" src="Resources/Scripts/custom.modernizr.js">
        </script>
        <script type="text/javascript" src="Resources/Scripts/jquery.min.js">
        </script>
        <script type="text/javascript" src="Resources/Scripts/foundation.min.js">
        </script>
        <script type="text/javascript" src="Resources/Scripts/plugins.min.js">
        </script>
        <script type="text/javascript" src="Resources/Scripts/require.min.js">
        </script>
        <script type="text/javascript" src="Resources/Scripts/require.config.js">
        </script>
        <script type="text/javascript" src="Resources/Scripts/MadCapAll.js">
        </script>
    </head>
    <body class="off-canvas hide-extras">
        <div id="DEBUG_Log">
            <div class="MCDebugLogHeader">
            Log Console</div>
            <div class="MCDebugLogBody">
            </div>
            <div class="MCDebugLogFooter">
            </div>
        </div>
        <div id="header" data-mc-style="Header"><a href="Default.htm"><h1 class="logo" data-mc-style="Logo"><img src="Skins/Default/Stylesheets/Images/transparent.gif" alt="Logo" /></h1></a>
            <div class="search-bar needs-pie" data-mc-style="Search Bar">
                <input id="search-field" class="needs-pie" type="text" placeholder="Search" data-mc-style="Search Input" />
                <div class="search-filter-wrapper">
                    <div class="search-filter" data-mc-style="Search Filter"><span>All Files</span>
                        <div class="search-filter-content" data-mc-style="Search Filter Drop-down">
                            <ul>
                                <li>All Files</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="search-submit-wrapper" dir="ltr" data-mc-style="Search Submit Button">
                    <div class="search-submit" title="Search">
                    </div>
                </div>
            </div>
        </div>
        <div id="navigationResizeBar">
            <div id="show-hide-navigation" class="needs-pie" dir="ltr" data-mc-style="Navigation Panel Hide Arrow">
            </div>
        </div>
        <div id="body" data-mc-style="Main Page">
            <div id="navigation" role="complementary">
                <div id="home" class=" image-then-text tab-icon" data-mc-style="Home Button"><span id="home-icon" class="tabs-nav-icon"></span><span id="home-text" class="tabs-nav-text">Home</span>
                </div>
                <div class="tabs">
                    <div class="tab">
                        <ul class="tabs-nav clearfix image-then-text tab-icon">
                            <li id="TocTab" class="needs-pie tabs-nav-active" data-mc-style="Navigation Tab.TOC">
                                <div><span class="tabs-nav-icon active" title="Contents"></span><span class="tabs-nav-text">Contents</span>
                                </div>
                            </li>
                        </ul>
                        <div class="tabs-panel tabs-panel-active">
                            <div id="toc" class="tabs-panel-content needs-pie" data-mc-style="Navigation Panel.TOC">
                            </div>
                        </div>
                    </div>
                    <div class="tab">
                        <ul class="tabs-nav clearfix image-then-text tab-icon">
                            <li id="IndexTab" class="needs-pie tabs-nav-inactive" data-mc-style="Navigation Tab.Index">
                                <div><span class="tabs-nav-icon active" title="Index"></span><span class="tabs-nav-text">Index</span>
                                </div>
                            </li>
                        </ul>
                        <div class="tabs-panel">
                            <input type="text" id="search-index" class="tabs-panel-search" placeholder="Search Index" />
                            <div id="index" class="tabs-panel-content searchable needs-pie popup-container" data-see-prefix="See" data-see-also-prefix="See Also" data-mc-style="Navigation Panel.Index">
                                <div class="index-wrapper">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab">
                        <ul class="tabs-nav clearfix image-then-text tab-icon">
                            <li id="GlossaryTab" class="needs-pie tabs-nav-inactive" data-mc-style="Navigation Tab.Glossary">
                                <div><span class="tabs-nav-icon active" title="Glossary"></span><span class="tabs-nav-text">Glossary</span>
                                </div>
                            </li>
                        </ul>
                        <div class="tabs-panel" data-mc-style="Glossary Tab">
                            <input type="text" id="search-glossary" class="tabs-panel-search" placeholder="Search Glossary" />
                            <div id="glossary" class="tabs-panel-content searchable needs-pie popup-container" data-mc-style="Navigation Panel.Glossary">
                            </div>
                        </div>
                    </div>
                    <div class="tab">
                        <ul class="tabs-nav clearfix image-then-text tab-icon">
                        </ul>
                        <div class="tabs-panel" data-mc-style="Browse Sequences">
                            <div id="browseSequences" class="tabs-panel-content needs-pie" data-mc-style="Navigation Panel.Browse Sequences">
                            </div>
                        </div>
                    </div>
                    <div class="tab">
                        <ul class="tabs-nav clearfix image-then-text tab-icon">
                            <li id="CommunityTab" class="needs-pie pulse-required tabs-nav-inactive" data-mc-style="Navigation Tab.Community">
                                <div><span class="tabs-nav-icon active" title="Community"></span><span class="tabs-nav-text">Community</span>
                                </div>
                            </li>
                        </ul>
                        <div class="tabs-panel">
                            <div id="community" class="tabs-panel-content needs-pie popup-container pulse-required" data-mc-style="Navigation Panel.Community"><iframe id="community-frame-html5" name="community-frame-html5" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="tab">
                        <ul class="tabs-nav clearfix image-then-text tab-icon">
                            <li id="SearchTab" class="needs-pie tabs-nav-inactive" data-mc-style="Navigation Tab.Search Filters">
                                <div><span class="tabs-nav-icon active" title="Search Filters"></span><span class="tabs-nav-text">Search Filters</span>
                                </div>
                            </li>
                        </ul>
                        <div class="tabs-panel" data-mc-style="Search">
                            <div id="search" class="tabs-panel-content needs-pie" data-mc-style="Navigation Panel.Search Filters">
                                <ul class="tree">
                                    <li class="SearchFilterEntry tree-node tree-node-leaf">
                                        <div class="SearchFilter"><span class="label">All Files</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="contentBody" class="needs-pie" data-mc-style="Topic Container">
                <div id="responsiveHeader" class="needs-pie" data-mc-style="Header"><a href="Default.htm"><h1 class="logo" data-mc-style="Logo"><img src="Skins/Default/Stylesheets/Images/transparent.gif" alt="Logo" /></h1></a>
                    <div id="slideRight" class="toggle-topbar menu-icon"><a id="sidebarButton" href="#"><span></span></a>
                    </div>
                </div>
                <div class="buttons">
                    <div class="button-group-container-left">
                        <button class="button needs-pie print-button" type="button" title="Print">
                            <img src="Skins/Default/Stylesheets/Images/transparent.gif" alt="print" />
                        </button>
                        <button class="button needs-pie expand-all-button" type="button" data-state1-class="expand-all-button" data-state2-class="collapse-all-button" data-state2-title="Collapse all" title="Expand all" data-state1-title="Expand all">
                            <img src="Skins/Default/Stylesheets/Images/transparent.gif" alt="expand all" />
                        </button>
                        <button class="button needs-pie remove-highlight-button" type="button" title="Remove Highlights">
                            <img src="Skins/Default/Stylesheets/Images/transparent.gif" alt="remove highlight" />
                        </button>
                        <div class="button-separator">
                        </div>
                        <div class="button-group star-buttons loading feedback-topic-required">
                            <div class="button star-button topic-ratings-empty-button" data-state1-class="topic-ratings-empty-button" data-state2-class="topic-ratings-button" title="Click a star to rate this topic" data-state1-title="Click a star to rate this topic" data-state2-title="Click a star to rate this topic">
                                <img src="Skins/Default/Stylesheets/Images/transparent.gif" alt="topic rating" />
                            </div>
                            <div class="button star-button topic-ratings-empty-button" data-state1-class="topic-ratings-empty-button" data-state2-class="topic-ratings-button" title="Click a star to rate this topic" data-state1-title="Click a star to rate this topic" data-state2-title="Click a star to rate this topic">
                                <img src="Skins/Default/Stylesheets/Images/transparent.gif" alt="topic rating" />
                            </div>
                            <div class="button star-button topic-ratings-empty-button" data-state1-class="topic-ratings-empty-button" data-state2-class="topic-ratings-button" title="Click a star to rate this topic" data-state1-title="Click a star to rate this topic" data-state2-title="Click a star to rate this topic">
                                <img src="Skins/Default/Stylesheets/Images/transparent.gif" alt="topic rating" />
                            </div>
                            <div class="button star-button topic-ratings-empty-button" data-state1-class="topic-ratings-empty-button" data-state2-class="topic-ratings-button" title="Click a star to rate this topic" data-state1-title="Click a star to rate this topic" data-state2-title="Click a star to rate this topic">
                                <img src="Skins/Default/Stylesheets/Images/transparent.gif" alt="topic rating" />
                            </div>
                            <div class="button star-button topic-ratings-empty-button" data-state1-class="topic-ratings-empty-button" data-state2-class="topic-ratings-button" title="Click a star to rate this topic" data-state1-title="Click a star to rate this topic" data-state2-title="Click a star to rate this topic">
                                <img src="Skins/Default/Stylesheets/Images/transparent.gif" alt="topic rating" />
                            </div>
                        </div>
                        <div class="button-separator feedback-topic-required">
                        </div>
                        <button class="button feedback-required login-button" type="button" id="normalLoginBtn" data-state1-class="login-button" data-state2-class="edit-user-profile-button" data-state2-title="Edit user profile" title="Login" data-state1-title="Login">
                            <img src="Skins/Default/Stylesheets/Images/transparent.gif" alt="login" />
                        </button>
                    </div>
                    <div class="button-group-container-right">
                        <button class="button needs-pie previous-topic-button" type="button" title="Navigate previous">
                            <img src="Skins/Default/Stylesheets/Images/transparent.gif" alt="previous topic" />
                        </button>
                        <div class="button current-topic-index-button disabled"><span class="sequence-index"></span> of <span class="sequence-total"></span></div>
                        <button class="button needs-pie next-topic-button" type="button" title="Navigate next">
                            <img src="Skins/Default/Stylesheets/Images/transparent.gif" alt="next topic" />
                        </button>
                    </div>
                </div>
                <div id="contentBodyInner">
                    <!-- frameBorder="0" is for IE 8 and below --><iframe id="topic" class="content" name="topic" frameBorder="0"></iframe><iframe id="pulse" class="content" name="pulse" frameBorder="0"></iframe>
                    <div id="searchPane">
                        <h1 id="results-heading">Your search for <span class="query"></span> returned <span class="total-results"></span> result(s).</h1>
                        <!--
                    <ul id="resultList">
                        <li>
                            <h3 class="title"><a href="#TopicA.htm">Topic A</a></h3>
                            <span class="ratingStarsContainer">
                                <div class="ratingStar ratingStarFilled">&#160;</div>
                                <div class="ratingStar ratingStarFilled">&#160;</div>
                                <div class="ratingStar ratingStarFilled">&#160;</div>
                                <div class="ratingStar ratingStarFilled">&#160;</div>
                                <div class="ratingStar ratingStarEmpty">&#160;</div>
                                17 reviews
                            </span>
                            <div class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a dictum dolor. Suspendisse potenti. Donec commodo, mi et pulvinar lobortis, velit magna sodales lectus, sit amet interdum magna urna eget leo. Pellentesque risus eros, vehicula non tempus at, bibendum in neque. In mollis malesuada facilisis.</div>
                            <div class="url"><cite>TopicA.htm</cite></div>
                        </li>
                        <li>
                            <h3 class="title"><a href="#TopicB.htm">Topic B</a></h3>
                            <span class="ratingStarsContainer">
                                <div class="ratingStar ratingStarFilled">&#160;</div>
                                <div class="ratingStar ratingStarFilled">&#160;</div>
                                <div class="ratingStar ratingStarFilled">&#160;</div>
                                <div class="ratingStar ratingStarEmpty">&#160;</div>
                                <div class="ratingStar ratingStarEmpty">&#160;</div>
                                5 reviews
                            </span>
                            <div class="description">Duis nec massa est, id hendrerit neque. Sed ornare adipiscing turpis eu luctus. Phasellus eu viverra lectus. Nunc purus risus, scelerisque non porttitor vitae, fringilla luctus augue.</div>
                            <div class="url"><cite>TopicB.htm</cite></div>
                        </li>
                        <li>
                            <h3 class="title"><a href="#TopicA.htm">Topic A</a></h3>
                            <div class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a dictum dolor. Suspendisse potenti. Donec commodo, mi et pulvinar lobortis, velit magna sodales lectus, sit amet interdum magna urna eget leo. Pellentesque risus eros, vehicula non tempus at, bibendum in neque. In mollis malesuada facilisis.</div>
                            <div class="url"><cite>TopicA.htm</cite></div>
                        </li>
                    </ul>
                    -->
                    </div>
                </div>
            </div>
        </div>
        <div class="login-dialog needs-pie">
            <div class="login-dialog-header needs-pie" data-mc-style="Feedback User Profile Header">
            Create Profile
        </div>
            <div class="login-dialog-content needs-pie" data-mc-style="Feedback User Profile Body">
                <div class="profile-item-wrapper clearfix" data-mc-style="Feedback User Profile Item Label">
                    <div class="label-wrapper">
                        <label>Username *</label>
                    </div>
                    <div class="input-wrapper">
                        <input class="needs-pie" type="text" name="Username" data-required="true" />
                    </div>
                </div>
                <div class="profile-item-wrapper clearfix" data-mc-style="Feedback User Profile Item Label">
                    <div class="label-wrapper">
                        <label>Email Address *</label>
                    </div>
                    <div class="input-wrapper">
                        <input class="needs-pie" type="text" name="EmailAddress" data-required="true" />
                    </div>
                </div>
                <div class="profile-item-wrapper email-notifications-wrapper">
                    <div class="label-wrapper">
                    Email Notifications
                </div>
                    <div class="email-notifications-group needs-pie" data-mc-style="Feedback User Profile Item Group">
                    I want to receive an email when...
                    <div><label><input type="checkbox" name="CommentReplyNotification" />a reply is left to one of my comments</label></div><div><label><input type="checkbox" name="CommentSameTopicNotification" />a comment is left on a topic that I commented on</label></div><div><label><input type="checkbox" name="CommentSameHelpSystemNotification" />a comment is left on any topic in the Help system</label></div></div>
                </div>
                <div class="login-dialog-buttons">
                    <button class="submit-button needs-pie" type="submit" data-mc-style="Feedback User Profile Button.Submit">Submit</button>
                    <button class="cancel-button needs-pie" data-mc-style="Feedback User Profile Button.Cancel">Cancel</button>
                </div>
                <div class="status-message-box"><span class="message verification-email-sent-message" data-mc-style="Feedback User Profile Dialog Submitted Message">An email has been sent to verify your new profile.</span><span class="message required-fields-missing-message" data-mc-style="Feedback User Profile Dialog Missing Required Field Message">Please fill out all required fields before submitting your information.</span>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="Resources/Scripts/jquery.offcanvas.js">
        </script>
        <script>
        $(document).foundation();
    </script>
    </body>
</html>