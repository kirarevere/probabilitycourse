




<!DOCTYPE html>
<html class="   ">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    
    <title>sweetCaptcha-sdk-php/sweetcaptcha.php at master · sweetcaptcha/sweetCaptcha-sdk-php · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png" />
    <meta property="fb:app_id" content="1401488693436528"/>

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="sweetcaptcha/sweetCaptcha-sdk-php" name="twitter:title" /><meta content="sweetCaptcha-sdk-php - Sweet Captcha is an anti spam security widget useful for protecting comments, contact and login forms from bots in a human friendly manner - PHP SDK" name="twitter:description" /><meta content="https://avatars1.githubusercontent.com/u/5601323?s=400" name="twitter:image:src" />
<meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://avatars1.githubusercontent.com/u/5601323?s=400" property="og:image" /><meta content="sweetcaptcha/sweetCaptcha-sdk-php" property="og:title" /><meta content="https://github.com/sweetcaptcha/sweetCaptcha-sdk-php" property="og:url" /><meta content="sweetCaptcha-sdk-php - Sweet Captcha is an anti spam security widget useful for protecting comments, contact and login forms from bots in a human friendly manner - PHP SDK" property="og:description" />

    <link rel="assets" href="https://github.global.ssl.fastly.net/">
    <link rel="conduit-xhr" href="https://ghconduit.com:25035/">
    <link rel="xhr-socket" href="/_sockets" />

    <meta name="msapplication-TileImage" content="/windows-tile.png" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="selected-link" value="repo_source" data-pjax-transient />
    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="github" name="octolytics-app-id" /><meta content="807728C1:023E:C0CCC3:533C3FCB" name="octolytics-dimension-request_id" />
    

    
    
    <link rel="icon" type="image/x-icon" href="https://github.global.ssl.fastly.net/favicon.ico" />

    <meta content="authenticity_token" name="csrf-param" />
<meta content="4IjG90c1WSK76J99/811h65yBkptPUhb98sxy//a9lg=" name="csrf-token" />

    <link href="https://github.global.ssl.fastly.net/assets/github-927f0bd30c92b2f1f72bead5d0086b25492d8375.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://github.global.ssl.fastly.net/assets/github2-db8f6f9bbe1b0e611d0e24fc905420b0c99729f2.css" media="all" rel="stylesheet" type="text/css" />
    


        <script crossorigin="anonymous" src="https://github.global.ssl.fastly.net/assets/frameworks-dca097f6f454ee06b43ea4817a154392e3caf824.js" type="text/javascript"></script>
        <script async="async" crossorigin="anonymous" src="https://github.global.ssl.fastly.net/assets/github-8f50ef8d73fe0d7e132fe0703ddfb1928cf847fa.js" type="text/javascript"></script>
        
        
      <meta http-equiv="x-pjax-version" content="f69f05f1dc5a6f45a089ae04efd636e9">

        <link data-pjax-transient rel='permalink' href='/sweetcaptcha/sweetCaptcha-sdk-php/blob/a0f056cffd560dcf8d3b65728f69e40b23a462b2/sweetcaptcha.php'>

  <meta name="description" content="sweetCaptcha-sdk-php - Sweet Captcha is an anti spam security widget useful for protecting comments, contact and login forms from bots in a human friendly manner - PHP SDK" />

  <meta content="5601323" name="octolytics-dimension-user_id" /><meta content="sweetcaptcha" name="octolytics-dimension-user_login" /><meta content="13919807" name="octolytics-dimension-repository_id" /><meta content="sweetcaptcha/sweetCaptcha-sdk-php" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="13919807" name="octolytics-dimension-repository_network_root_id" /><meta content="sweetcaptcha/sweetCaptcha-sdk-php" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/sweetcaptcha/sweetCaptcha-sdk-php/commits/master.atom" rel="alternate" title="Recent Commits to sweetCaptcha-sdk-php:master" type="application/atom+xml" />

  </head>


  <body class="logged_out  env-production linux vis-public page-blob">
    <a href="#start-of-content" tabindex="1" class="accessibility-aid js-skip-to-content">Skip to content</a>
    <div class="wrapper">
      
      
      
      


      
      <div class="header header-logged-out">
  <div class="container clearfix">

    <a class="header-logo-wordmark" href="https://github.com/">
      <span class="mega-octicon octicon-logo-github"></span>
    </a>

    <div class="header-actions">
        <a class="button primary" href="/join">Sign up</a>
      <a class="button signin" href="/login?return_to=%2Fsweetcaptcha%2Fsweetcaptcha-sdk-php%2Fblob%2Fmaster%2Fsweetcaptcha.php">Sign in</a>
    </div>

    <div class="command-bar js-command-bar  in-repository">

      <ul class="top-nav">
          <li class="explore"><a href="/explore">Explore</a></li>
        <li class="features"><a href="/features">Features</a></li>
          <li class="enterprise"><a href="https://enterprise.github.com/">Enterprise</a></li>
          <li class="blog"><a href="/blog">Blog</a></li>
      </ul>
        <form accept-charset="UTF-8" action="/search" class="command-bar-form" id="top_search_form" method="get">

<div class="commandbar">
  <span class="message"></span>
  <input type="text" data-hotkey="/ s" name="q" id="js-command-bar-field" placeholder="Search or type a command" tabindex="1" autocapitalize="off"
    
    
      data-repo="sweetcaptcha/sweetCaptcha-sdk-php"
      data-branch="master"
      data-sha="5f7ef2e7c6255093b1594e8ff91663720b3f2291"
  >
  <div class="display hidden"></div>
</div>

    <input type="hidden" name="nwo" value="sweetcaptcha/sweetCaptcha-sdk-php" />

    <div class="select-menu js-menu-container js-select-menu search-context-select-menu">
      <span class="minibutton select-menu-button js-menu-target" role="button" aria-haspopup="true">
        <span class="js-select-button">This repository</span>
      </span>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container" aria-hidden="true">
        <div class="select-menu-modal">

          <div class="select-menu-item js-navigation-item js-this-repository-navigation-item selected">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" class="js-search-this-repository" name="search_target" value="repository" checked="checked" />
            <div class="select-menu-item-text js-select-button-text">This repository</div>
          </div> <!-- /.select-menu-item -->

          <div class="select-menu-item js-navigation-item js-all-repositories-navigation-item">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" name="search_target" value="global" />
            <div class="select-menu-item-text js-select-button-text">All repositories</div>
          </div> <!-- /.select-menu-item -->

        </div>
      </div>
    </div>

  <span class="help tooltipped tooltipped-s" aria-label="Show command bar help">
    <span class="octicon octicon-question"></span>
  </span>


  <input type="hidden" name="ref" value="cmdform">

</form>
    </div>

  </div>
</div>



      <div id="start-of-content" class="accessibility-aid"></div>
          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">
        

<ul class="pagehead-actions">


  <li>
    <a href="/login?return_to=%2Fsweetcaptcha%2FsweetCaptcha-sdk-php"
    class="minibutton with-count js-toggler-target star-button tooltipped tooltipped-n"
    aria-label="You must be signed in to star a repository" rel="nofollow">
    <span class="octicon octicon-star"></span>Star
  </a>

    <a class="social-count js-social-count" href="/sweetcaptcha/sweetCaptcha-sdk-php/stargazers">
      1
    </a>

  </li>

    <li>
      <a href="/login?return_to=%2Fsweetcaptcha%2FsweetCaptcha-sdk-php"
        class="minibutton with-count js-toggler-target fork-button tooltipped tooltipped-n"
        aria-label="You must be signed in to fork a repository" rel="nofollow">
        <span class="octicon octicon-git-branch"></span>Fork
      </a>
      <a href="/sweetcaptcha/sweetCaptcha-sdk-php/network" class="social-count">
        8
      </a>
    </li>
</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
          <span class="repo-label"><span>public</span></span>
          <span class="mega-octicon octicon-repo"></span>
          <span class="author">
            <a href="/sweetcaptcha" class="url fn" itemprop="url" rel="author"><span itemprop="title">sweetcaptcha</span></a>
          </span>
          <span class="repohead-name-divider">/</span>
          <strong><a href="/sweetcaptcha/sweetCaptcha-sdk-php" class="js-current-repository js-repo-home-link">sweetCaptcha-sdk-php</a></strong>

          <span class="page-context-loader">
            <img alt="Octocat-spinner-32" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
          </span>

        </h1>
      </div><!-- /.container -->
    </div><!-- /.repohead -->

    <div class="container">
      <div class="repository-with-sidebar repo-container new-discussion-timeline js-new-discussion-timeline  ">
        <div class="repository-sidebar clearfix">
            

<div class="sunken-menu vertical-right repo-nav js-repo-nav js-repository-container-pjax js-octicon-loaders">
  <div class="sunken-menu-contents">
    <ul class="sunken-menu-group">
      <li class="tooltipped tooltipped-w" aria-label="Code">
        <a href="/sweetcaptcha/sweetCaptcha-sdk-php" aria-label="Code" class="selected js-selected-navigation-item sunken-menu-item" data-gotokey="c" data-pjax="true" data-selected-links="repo_source repo_downloads repo_commits repo_tags repo_branches /sweetcaptcha/sweetCaptcha-sdk-php">
          <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

        <li class="tooltipped tooltipped-w" aria-label="Issues">
          <a href="/sweetcaptcha/sweetcaptcha-sdk-php/issues" aria-label="Issues" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-gotokey="i" data-selected-links="repo_issues /sweetcaptcha/sweetcaptcha-sdk-php/issues">
            <span class="octicon octicon-issue-opened"></span> <span class="full-word">Issues</span>
            <span class='counter'>0</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>

      <li class="tooltipped tooltipped-w" aria-label="Pull Requests">
        <a href="/sweetcaptcha/sweetcaptcha-sdk-php/pulls" aria-label="Pull Requests" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-gotokey="p" data-selected-links="repo_pulls /sweetcaptcha/sweetcaptcha-sdk-php/pulls">
            <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull Requests</span>
            <span class='counter'>0</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>


    </ul>
    <div class="sunken-menu-separator"></div>
    <ul class="sunken-menu-group">

      <li class="tooltipped tooltipped-w" aria-label="Pulse">
        <a href="/sweetcaptcha/sweetCaptcha-sdk-php/pulse" aria-label="Pulse" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="pulse /sweetcaptcha/sweetCaptcha-sdk-php/pulse">
          <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped tooltipped-w" aria-label="Graphs">
        <a href="/sweetcaptcha/sweetCaptcha-sdk-php/graphs" aria-label="Graphs" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="repo_graphs repo_contributors /sweetcaptcha/sweetCaptcha-sdk-php/graphs">
          <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped tooltipped-w" aria-label="Network">
        <a href="/sweetcaptcha/sweetCaptcha-sdk-php/network" aria-label="Network" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-selected-links="repo_network /sweetcaptcha/sweetCaptcha-sdk-php/network">
          <span class="octicon octicon-git-branch"></span> <span class="full-word">Network</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>
    </ul>


  </div>
</div>

              <div class="only-with-full-nav">
                

  

<div class="clone-url open"
  data-protocol-type="http"
  data-url="/users/set_protocol?protocol_selector=http&amp;protocol_type=clone">
  <h3><strong>HTTPS</strong> clone URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/sweetcaptcha/sweetCaptcha-sdk-php.git" readonly="readonly">

    <span aria-label="copy to clipboard" class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="https://github.com/sweetcaptcha/sweetCaptcha-sdk-php.git" data-copied-hint="copied!"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>

  

<div class="clone-url "
  data-protocol-type="subversion"
  data-url="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=clone">
  <h3><strong>Subversion</strong> checkout URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/sweetcaptcha/sweetCaptcha-sdk-php" readonly="readonly">

    <span aria-label="copy to clipboard" class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="https://github.com/sweetcaptcha/sweetCaptcha-sdk-php" data-copied-hint="copied!"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>


<p class="clone-options">You can clone with
      <a href="#" class="js-clone-selector" data-protocol="http">HTTPS</a>
      or <a href="#" class="js-clone-selector" data-protocol="subversion">Subversion</a>.
  <span class="help tooltipped tooltipped-n" aria-label="Get help on which URL is right for you.">
    <a href="https://help.github.com/articles/which-remote-url-should-i-use">
    <span class="octicon octicon-question"></span>
    </a>
  </span>
</p>



                <a href="/sweetcaptcha/sweetCaptcha-sdk-php/archive/master.zip"
                   class="minibutton sidebar-button"
                   aria-label="Download sweetcaptcha/sweetCaptcha-sdk-php as a zip file"
                   title="Download sweetcaptcha/sweetCaptcha-sdk-php as a zip file"
                   rel="nofollow">
                  <span class="octicon octicon-cloud-download"></span>
                  Download ZIP
                </a>
              </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>
          


<!-- blob contrib key: blob_contributors:v21:41ca26de3b943d049d6d2a1342362802 -->

<p title="This is a placeholder element" class="js-history-link-replace hidden"></p>

<a href="/sweetcaptcha/sweetCaptcha-sdk-php/find/master" data-pjax data-hotkey="t" class="js-show-file-finder" style="display:none">Show File Finder</a>

<div class="file-navigation">
  

<div class="select-menu js-menu-container js-select-menu" >
  <span class="minibutton select-menu-button js-menu-target" data-hotkey="w"
    data-master-branch="master"
    data-ref="master"
    role="button" aria-label="Switch branches or tags" tabindex="0" aria-haspopup="true">
    <span class="octicon octicon-git-branch"></span>
    <i>branch:</i>
    <span class="js-select-button">master</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax aria-hidden="true">

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-remove-close js-menu-close"></span>
      </div> <!-- /.select-menu-header -->

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
            </li>
          </ul>
        </div><!-- /.select-menu-tabs -->
      </div><!-- /.select-menu-filters -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item selected">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/sweetcaptcha/sweetcaptcha-sdk-php/blob/master/sweetcaptcha.php"
                 data-name="master"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="master">master</a>
            </div> <!-- /.select-menu-item -->
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

    </div> <!-- /.select-menu-modal -->
  </div> <!-- /.select-menu-modal-holder -->
</div> <!-- /.select-menu -->

  <div class="breadcrumb">
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/sweetcaptcha/sweetCaptcha-sdk-php" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">sweetCaptcha-sdk-php</span></a></span></span><span class="separator"> / </span><strong class="final-path">sweetcaptcha.php</strong> <span aria-label="copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="sweetcaptcha.php" data-copied-hint="copied!"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>


  <div class="commit file-history-tease">
    <img alt="Sagi Isha" class="main-avatar js-avatar" data-user="756892" height="24" src="https://avatars2.githubusercontent.com/u/756892?s=140" width="24" />
    <span class="author"><a href="/sagish" rel="author">sagish</a></span>
    <time class="js-relative-date" data-title-format="YYYY-MM-DD HH:mm:ss" datetime="2013-11-14T12:20:34+02:00" title="2013-11-14 10:20:34">November 14, 2013</time>
    <div class="commit-title">
        <a href="/sweetcaptcha/sweetCaptcha-sdk-php/commit/a0f056cffd560dcf8d3b65728f69e40b23a462b2" class="message" data-pjax="true" title="1.1.0">1.1.0</a>
    </div>

    <div class="participation">
      <p class="quickstat"><a href="#blob_contributors_box" rel="facebox"><strong>1</strong>  contributor</a></p>
      
    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2 class="facebox-header">Users who have contributed to this file</h2>
      <ul class="facebox-user-list">
          <li class="facebox-user-list-item">
            <img alt="Sagi Isha" class=" js-avatar" data-user="756892" height="24" src="https://avatars2.githubusercontent.com/u/756892?s=140" width="24" />
            <a href="/sagish">sagish</a>
          </li>
      </ul>
    </div>
  </div>

<div class="file-box">
  <div class="file">
    <div class="meta clearfix">
      <div class="info file-name">
        <span class="icon"><b class="octicon octicon-file-text"></b></span>
        <span class="mode" title="File Mode">file</span>
        <span class="meta-divider"></span>
          <span>101 lines (77 sloc)</span>
          <span class="meta-divider"></span>
        <span>2.585 kb</span>
      </div>
      <div class="actions">
        <div class="button-group">
              <a class="minibutton disabled tooltipped tooltipped-w" href="#"
                 aria-label="You must be signed in to make or propose changes">Edit</a>
          <a href="/sweetcaptcha/sweetCaptcha-sdk-php/raw/master/sweetcaptcha.php" class="button minibutton " id="raw-url">Raw</a>
            <a href="/sweetcaptcha/sweetCaptcha-sdk-php/blame/master/sweetcaptcha.php" class="button minibutton js-update-url-with-hash">Blame</a>
          <a href="/sweetcaptcha/sweetCaptcha-sdk-php/commits/master/sweetcaptcha.php" class="button minibutton " rel="nofollow">History</a>
        </div><!-- /.button-group -->
          <a class="minibutton danger disabled empty-icon tooltipped tooltipped-w" href="#"
             aria-label="You must be signed in to make or propose changes">
          Delete
        </a>
      </div><!-- /.actions -->
    </div>
        <div class="blob-wrapper data type-php js-blob-data">
        <table class="file-code file-diff tab-size-8">
          <tr class="file-code-line">
            <td class="blob-line-nums">
              <span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>
<span id="L64" rel="#L64">64</span>
<span id="L65" rel="#L65">65</span>
<span id="L66" rel="#L66">66</span>
<span id="L67" rel="#L67">67</span>
<span id="L68" rel="#L68">68</span>
<span id="L69" rel="#L69">69</span>
<span id="L70" rel="#L70">70</span>
<span id="L71" rel="#L71">71</span>
<span id="L72" rel="#L72">72</span>
<span id="L73" rel="#L73">73</span>
<span id="L74" rel="#L74">74</span>
<span id="L75" rel="#L75">75</span>
<span id="L76" rel="#L76">76</span>
<span id="L77" rel="#L77">77</span>
<span id="L78" rel="#L78">78</span>
<span id="L79" rel="#L79">79</span>
<span id="L80" rel="#L80">80</span>
<span id="L81" rel="#L81">81</span>
<span id="L82" rel="#L82">82</span>
<span id="L83" rel="#L83">83</span>
<span id="L84" rel="#L84">84</span>
<span id="L85" rel="#L85">85</span>
<span id="L86" rel="#L86">86</span>
<span id="L87" rel="#L87">87</span>
<span id="L88" rel="#L88">88</span>
<span id="L89" rel="#L89">89</span>
<span id="L90" rel="#L90">90</span>
<span id="L91" rel="#L91">91</span>
<span id="L92" rel="#L92">92</span>
<span id="L93" rel="#L93">93</span>
<span id="L94" rel="#L94">94</span>
<span id="L95" rel="#L95">95</span>
<span id="L96" rel="#L96">96</span>
<span id="L97" rel="#L97">97</span>
<span id="L98" rel="#L98">98</span>
<span id="L99" rel="#L99">99</span>
<span id="L100" rel="#L100">100</span>
<span id="L101" rel="#L101">101</span>

            </td>
            <td class="blob-line-code"><div class="code-body highlight"><pre><div class='line' id='LC1'><span class="o">&lt;?</span><span class="nx">php</span> </div><div class='line' id='LC2'><br/></div><div class='line' id='LC3'><span class="cm">/*</span></div><div class='line' id='LC4'><span class="cm"> * Define you SweetCaptcha credentials.</span></div><div class='line' id='LC5'><span class="cm"> * Don&#39;t have any? Sign up at http://sweetcaptcha.com and get them by email</span></div><div class='line' id='LC6'><span class="cm"> */</span></div><div class='line' id='LC7'><br/></div><div class='line' id='LC8'><span class="nb">define</span><span class="p">(</span><span class="s1">&#39;SWEETCAPTCHA_APP_ID&#39;</span><span class="p">,</span> <span class="mi">500000</span><span class="p">);</span> <span class="c1">// your application id (change me)</span></div><div class='line' id='LC9'><span class="nb">define</span><span class="p">(</span><span class="s1">&#39;SWEETCAPTCHA_KEY&#39;</span><span class="p">,</span> <span class="s1">&#39;changeme&#39;</span><span class="p">);</span> <span class="c1">// your application key (change me)</span></div><div class='line' id='LC10'><span class="nb">define</span><span class="p">(</span><span class="s1">&#39;SWEETCAPTCHA_SECRET&#39;</span><span class="p">,</span> <span class="s1">&#39;changeme&#39;</span><span class="p">);</span> <span class="c1">// your application secret (change me)</span></div><div class='line' id='LC11'><span class="nb">define</span><span class="p">(</span><span class="s1">&#39;SWEETCAPTCHA_PUBLIC_URL&#39;</span><span class="p">,</span> <span class="s1">&#39;sweetcaptcha.php&#39;</span><span class="p">);</span> <span class="c1">// public http url to this file</span></div><div class='line' id='LC12'><br/></div><div class='line' id='LC13'><br/></div><div class='line' id='LC14'><span class="c1">/////==== Do not change below here ===/////</span></div><div class='line' id='LC15'><br/></div><div class='line' id='LC16'><span class="sd">/**</span></div><div class='line' id='LC17'><span class="sd"> * Handles remote negotiation with Sweetcaptcha.com.</span></div><div class='line' id='LC18'><span class="sd"> *</span></div><div class='line' id='LC19'><span class="sd"> * @version 1.1.0</span></div><div class='line' id='LC20'><span class="sd"> * @updated November 14, 2013</span></div><div class='line' id='LC21'><span class="sd"> */</span></div><div class='line' id='LC22'><br/></div><div class='line' id='LC23'><span class="nv">$sweetcaptcha</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Sweetcaptcha</span><span class="p">(</span></div><div class='line' id='LC24'>&nbsp;&nbsp;<span class="nx">SWEETCAPTCHA_APP_ID</span><span class="p">,</span> </div><div class='line' id='LC25'>&nbsp;&nbsp;<span class="nx">SWEETCAPTCHA_KEY</span><span class="p">,</span> </div><div class='line' id='LC26'>&nbsp;&nbsp;<span class="nx">SWEETCAPTCHA_SECRET</span><span class="p">,</span> </div><div class='line' id='LC27'>&nbsp;&nbsp;<span class="nx">SWEETCAPTCHA_PUBLIC_URL</span></div><div class='line' id='LC28'><span class="p">);</span></div><div class='line' id='LC29'><br/></div><div class='line' id='LC30'><span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;ajax&#39;</span><span class="p">])</span> <span class="k">and</span> <span class="nv">$method</span> <span class="o">=</span> <span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;ajax&#39;</span><span class="p">])</span> <span class="p">{</span></div><div class='line' id='LC31'>&nbsp;&nbsp;<span class="k">echo</span> <span class="nv">$sweetcaptcha</span><span class="o">-&gt;</span><span class="nv">$method</span><span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;params&#39;</span><span class="p">])</span> <span class="o">?</span> <span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;params&#39;</span><span class="p">]</span> <span class="o">:</span> <span class="k">array</span><span class="p">());</span></div><div class='line' id='LC32'><span class="p">}</span></div><div class='line' id='LC33'><br/></div><div class='line' id='LC34'><span class="k">class</span> <span class="nc">Sweetcaptcha</span> <span class="p">{</span></div><div class='line' id='LC35'>&nbsp;&nbsp;</div><div class='line' id='LC36'>&nbsp;&nbsp;<span class="k">private</span> <span class="nv">$appid</span><span class="p">;</span></div><div class='line' id='LC37'>&nbsp;&nbsp;<span class="k">private</span> <span class="nv">$key</span><span class="p">;</span></div><div class='line' id='LC38'>&nbsp;&nbsp;<span class="k">private</span> <span class="nv">$secret</span><span class="p">;</span></div><div class='line' id='LC39'>&nbsp;&nbsp;<span class="k">private</span> <span class="nv">$path</span><span class="p">;</span></div><div class='line' id='LC40'>&nbsp;&nbsp;</div><div class='line' id='LC41'>&nbsp;&nbsp;<span class="k">const</span> <span class="no">API_URL</span> <span class="o">=</span> <span class="s1">&#39;sweetcaptcha.com&#39;</span><span class="p">;</span></div><div class='line' id='LC42'>&nbsp;&nbsp;<span class="k">const</span> <span class="no">API_PORT</span> <span class="o">=</span> <span class="mi">80</span><span class="p">;</span></div><div class='line' id='LC43'>&nbsp;&nbsp;</div><div class='line' id='LC44'>&nbsp;&nbsp;<span class="k">function</span> <span class="nf">__construct</span><span class="p">(</span><span class="nv">$appid</span><span class="p">,</span> <span class="nv">$key</span><span class="p">,</span> <span class="nv">$secret</span><span class="p">,</span> <span class="nv">$path</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC45'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">appid</span> <span class="o">=</span> <span class="nv">$appid</span><span class="p">;</span></div><div class='line' id='LC46'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">key</span> <span class="o">=</span> <span class="nv">$key</span><span class="p">;</span></div><div class='line' id='LC47'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">secret</span> <span class="o">=</span> <span class="nv">$secret</span><span class="p">;</span></div><div class='line' id='LC48'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">path</span> <span class="o">=</span> <span class="nv">$path</span><span class="p">;</span></div><div class='line' id='LC49'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC50'>&nbsp;&nbsp;</div><div class='line' id='LC51'>&nbsp;&nbsp;<span class="k">private</span> <span class="k">function</span> <span class="nf">api</span><span class="p">(</span><span class="nv">$method</span><span class="p">,</span> <span class="nv">$params</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC52'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC53'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$basic</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC54'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;method&#39;</span>      <span class="o">=&gt;</span> <span class="nv">$method</span><span class="p">,</span></div><div class='line' id='LC55'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;appid&#39;</span>       <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">appid</span><span class="p">,</span></div><div class='line' id='LC56'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;key&#39;</span>         <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">key</span><span class="p">,</span></div><div class='line' id='LC57'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;path&#39;</span>        <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">path</span><span class="p">,</span></div><div class='line' id='LC58'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;user_ip&#39;</span>     <span class="o">=&gt;</span> <span class="nv">$_SERVER</span><span class="p">[</span><span class="s1">&#39;REMOTE_ADDR&#39;</span><span class="p">],</span></div><div class='line' id='LC59'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;platform&#39;</span>    <span class="o">=&gt;</span> <span class="s1">&#39;php&#39;</span></div><div class='line' id='LC60'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC61'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC62'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">call</span><span class="p">(</span><span class="nb">array_merge</span><span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$params</span><span class="p">[</span><span class="mi">0</span><span class="p">])</span> <span class="o">?</span> <span class="nv">$params</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span> <span class="o">:</span> <span class="nv">$params</span><span class="p">,</span> <span class="nv">$basic</span><span class="p">));</span></div><div class='line' id='LC63'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC64'>&nbsp;&nbsp;</div><div class='line' id='LC65'>&nbsp;&nbsp;<span class="k">private</span> <span class="k">function</span> <span class="nf">call</span><span class="p">(</span><span class="nv">$params</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC66'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$param_data</span> <span class="o">=</span> <span class="s2">&quot;&quot;</span><span class="p">;</span>   </div><div class='line' id='LC67'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$params</span> <span class="k">as</span> <span class="nv">$param_name</span> <span class="o">=&gt;</span> <span class="nv">$param_value</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC68'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$param_data</span> <span class="o">.=</span> <span class="nb">urlencode</span><span class="p">(</span><span class="nv">$param_name</span><span class="p">)</span> <span class="o">.</span><span class="s1">&#39;=&#39;</span><span class="o">.</span> <span class="nb">urlencode</span><span class="p">(</span><span class="nv">$param_value</span><span class="p">)</span> <span class="o">.</span><span class="s1">&#39;&amp;&#39;</span><span class="p">;</span> </div><div class='line' id='LC69'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC70'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC71'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="p">(</span><span class="nv">$fs</span> <span class="o">=</span> <span class="nb">fsockopen</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="na">API_URL</span><span class="p">,</span> <span class="nx">self</span><span class="o">::</span><span class="na">API_PORT</span><span class="p">,</span> <span class="nv">$errno</span><span class="p">,</span> <span class="nv">$errstr</span><span class="p">,</span> <span class="mi">10</span><span class="p">)))</span> <span class="p">{</span></div><div class='line' id='LC72'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">die</span> <span class="p">(</span><span class="s2">&quot;Couldn&#39;t connect to server&quot;</span><span class="p">);</span></div><div class='line' id='LC73'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC74'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC75'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$req</span> <span class="o">=</span> <span class="s2">&quot;POST /api.php HTTP/1.0</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC76'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$req</span> <span class="o">.=</span> <span class="s2">&quot;Host: &quot;</span><span class="o">.</span><span class="nx">self</span><span class="o">::</span><span class="na">API_URL</span><span class="o">.</span><span class="s2">&quot;</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC77'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$req</span> <span class="o">.=</span> <span class="s2">&quot;Content-Type: application/x-www-form-urlencoded</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC78'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$req</span> <span class="o">.=</span> <span class="s2">&quot;Referer: &quot;</span> <span class="o">.</span> <span class="nv">$_SERVER</span><span class="p">[</span><span class="s1">&#39;HTTP_HOST&#39;</span><span class="p">]</span><span class="o">.</span> <span class="s2">&quot;</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC79'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$req</span> <span class="o">.=</span> <span class="s2">&quot;Content-Length: &quot;</span> <span class="o">.</span> <span class="nb">strlen</span><span class="p">(</span><span class="nv">$param_data</span><span class="p">)</span> <span class="o">.</span> <span class="s2">&quot;</span><span class="se">\r\n\r\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC80'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$req</span> <span class="o">.=</span> <span class="nv">$param_data</span><span class="p">;</span>    </div><div class='line' id='LC81'>&nbsp;&nbsp;</div><div class='line' id='LC82'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$response</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC83'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">fwrite</span><span class="p">(</span><span class="nv">$fs</span><span class="p">,</span> <span class="nv">$req</span><span class="p">);</span></div><div class='line' id='LC84'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC85'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">while</span> <span class="p">(</span><span class="o">!</span><span class="nb">feof</span><span class="p">(</span><span class="nv">$fs</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC86'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$response</span> <span class="o">.=</span> <span class="nb">fgets</span><span class="p">(</span><span class="nv">$fs</span><span class="p">,</span> <span class="mi">1160</span><span class="p">);</span></div><div class='line' id='LC87'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC88'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC89'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">fclose</span><span class="p">(</span><span class="nv">$fs</span><span class="p">);</span></div><div class='line' id='LC90'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC91'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$response</span> <span class="o">=</span> <span class="nb">explode</span><span class="p">(</span><span class="s2">&quot;</span><span class="se">\r\n\r\n</span><span class="s2">&quot;</span><span class="p">,</span> <span class="nv">$response</span><span class="p">,</span> <span class="mi">2</span><span class="p">);</span></div><div class='line' id='LC92'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC93'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$response</span><span class="p">[</span><span class="mi">1</span><span class="p">];</span>  </div><div class='line' id='LC94'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC95'>&nbsp;&nbsp;</div><div class='line' id='LC96'>&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">__call</span><span class="p">(</span><span class="nv">$method</span><span class="p">,</span> <span class="nv">$params</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC97'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">api</span><span class="p">(</span><span class="nv">$method</span><span class="p">,</span> <span class="nv">$params</span><span class="p">);</span></div><div class='line' id='LC98'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC99'><span class="p">}</span></div><div class='line' id='LC100'><br/></div><div class='line' id='LC101'><span class="cp">?&gt;</span><span class="x"></span></div></pre></div></td>
          </tr>
        </table>
  </div>

  </div>
</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" class="js-jump-to-line" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <form accept-charset="UTF-8" class="js-jump-to-line-form">
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" autofocus>
    <button type="submit" class="button">Go</button>
  </form>
</div>

        </div>

      </div><!-- /.repo-container -->
      <div class="modal-backdrop"></div>
    </div><!-- /.container -->
  </div><!-- /.site -->


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer">
    <ul class="site-footer-links right">
      <li><a href="https://status.github.com/">Status</a></li>
      <li><a href="http://developer.github.com">API</a></li>
      <li><a href="http://training.github.com">Training</a></li>
      <li><a href="http://shop.github.com">Shop</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="/about">About</a></li>

    </ul>

    <a href="/">
      <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
    </a>

    <ul class="site-footer-links">
      <li>&copy; 2014 <span title="0.02903s from github-fe121-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="/site/terms">Terms</a></li>
        <li><a href="/site/privacy">Privacy</a></li>
        <li><a href="/security">Security</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
  </div><!-- /.site-footer -->
</div><!-- /.container -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-fullscreen-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="js-fullscreen-contents" placeholder="" data-suggester="fullscreen_suggester"></textarea>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped tooltipped-w" aria-label="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped tooltipped-w"
      aria-label="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-remove-close close js-ajax-error-dismiss"></a>
      Something went wrong with that request. Please try again.
    </div>

  </body>
</html>

