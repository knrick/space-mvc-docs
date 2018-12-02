<?php

$credentials = array(
	'username' => 'admin',
	'password' => 'secret'
);

//require_once('../basic_auth.php');
?>




<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      
      
      
      
        <meta name="lang:clipboard.copy" content="Copy to clipboard">
      
        <meta name="lang:clipboard.copied" content="Copied to clipboard">
      
        <meta name="lang:search.language" content="en">
      
        <meta name="lang:search.pipeline.stopwords" content="True">
      
        <meta name="lang:search.pipeline.trimmer" content="True">
      
        <meta name="lang:search.result.none" content="No matching documents">
      
        <meta name="lang:search.result.one" content="1 matching document">
      
        <meta name="lang:search.result.other" content="# matching documents">
      
        <meta name="lang:search.tokenizer" content="[\s\-]+">
      
      <link rel="shortcut icon" href="../assets/images/favicon.png">
      <meta name="generator" content="mkdocs-1.0, mkdocs-material-3.1.0">
    
    
      
        <title>Helpers - Space MVC Framework</title>
      
    
    
      <link rel="stylesheet" href="../assets/stylesheets/application.11e41852.css">
      
      
    
    
      <script src="../assets/javascripts/modernizr.20ef595d.js"></script>
    
    
      
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,700|Roboto+Mono">
        <style>body,input{font-family:"Roboto","Helvetica Neue",Helvetica,Arial,sans-serif}code,kbd,pre{font-family:"Roboto Mono","Courier New",Courier,monospace}</style>
      
    
    <link rel="stylesheet" href="../assets/fonts/material-icons.css">
    
    
    

    <style type="text/css">
      h1, h2, h3, h4, h5,
      .md-content__inner li a,
      .md-nav__link:active,
      .md-nav__link--active,
      article a{
        color:#4196EC !important;
      }
    </style>

  </head>
  
    <body dir="ltr">
  
    <svg class="md-svg">
      <defs>
        
        
          <svg xmlns="http://www.w3.org/2000/svg" width="416" height="448"
    viewBox="0 0 416 448" id="__github">
  <path fill="currentColor" d="M160 304q0 10-3.125 20.5t-10.75 19-18.125
        8.5-18.125-8.5-10.75-19-3.125-20.5 3.125-20.5 10.75-19 18.125-8.5
        18.125 8.5 10.75 19 3.125 20.5zM320 304q0 10-3.125 20.5t-10.75
        19-18.125 8.5-18.125-8.5-10.75-19-3.125-20.5 3.125-20.5 10.75-19
        18.125-8.5 18.125 8.5 10.75 19 3.125 20.5zM360
        304q0-30-17.25-51t-46.75-21q-10.25 0-48.75 5.25-17.75 2.75-39.25
        2.75t-39.25-2.75q-38-5.25-48.75-5.25-29.5 0-46.75 21t-17.25 51q0 22 8
        38.375t20.25 25.75 30.5 15 35 7.375 37.25 1.75h42q20.5 0
        37.25-1.75t35-7.375 30.5-15 20.25-25.75 8-38.375zM416 260q0 51.75-15.25
        82.75-9.5 19.25-26.375 33.25t-35.25 21.5-42.5 11.875-42.875 5.5-41.75
        1.125q-19.5 0-35.5-0.75t-36.875-3.125-38.125-7.5-34.25-12.875-30.25-20.25-21.5-28.75q-15.5-30.75-15.5-82.75
        0-59.25 34-99-6.75-20.5-6.75-42.5 0-29 12.75-54.5 27 0 47.5 9.875t47.25
        30.875q36.75-8.75 77.25-8.75 37 0 70 8 26.25-20.5
        46.75-30.25t47.25-9.75q12.75 25.5 12.75 54.5 0 21.75-6.75 42 34 40 34
        99.5z" />
</svg>
        
      </defs>
    </svg>
    <input class="md-toggle" data-md-toggle="drawer" type="checkbox" id="__drawer" autocomplete="off">
    <input class="md-toggle" data-md-toggle="search" type="checkbox" id="__search" autocomplete="off">
    <label class="md-overlay" data-md-component="overlay" for="__drawer"></label>
    
      <a href="#helpers" tabindex="1" class="md-skip">
        Skip to content
      </a>
    
    
      <header class="md-header" data-md-component="header" style="background-color:#4196EC;">
  <nav class="md-header-nav md-grid" style="width:1920px !important; height:50px !important;">
    <div style="width:100%;">

      <div style="width:50px;height:48px;float:left;">
        <a href=".." title="Space MVC Framework" class="md-header-nav__button md-logo">
          
          <i class="md-icon"></i>
          
        </a>
      </div>
      <div style="width:50px;height:48px;float:left;color:red;">
        &nbsp; <div class="md-flex__cell md-flex__cell--shrink">
            <label class="md-icon md-icon--menu md-header-nav__button" for="__drawer" style="color: white;position:relative;top:-10px;"></label>
          </div>
      </div>
      <div style="width:240px;height:48px;float:left;">
        <div class="md-header-nav__title" data-md-component="title">
          
          
          <span class="md-header-nav__topic">
                Space MVC Framework
              </span>
          <span class="md-header-nav__topic">
                Helpers
              </span>
          
          
        </div>
      </div>

      <div style="width:550px;height:48px;float:right;">
        <div class="md-flex__cell md-flex__cell--shrink">
          
          
          <label class="md-icon md-icon--search md-header-nav__button" for="__search"></label>
          
<div class="md-search" data-md-component="search" role="dialog">
  <label class="md-search__overlay" for="__search"></label>
  <div class="md-search__inner" role="search">
    <form class="md-search__form" name="search">
      <input type="text" class="md-search__input" name="query" placeholder="Search" autocapitalize="off" autocorrect="off" autocomplete="off" spellcheck="false" data-md-component="query" data-md-state="active">
      <label class="md-icon md-search__icon" for="__search"></label>
      <button type="reset" class="md-icon md-search__icon" data-md-component="reset" tabindex="-1">
        &#xE5CD;
      </button>
    </form>
    <div class="md-search__output">
      <div class="md-search__scrollwrap" data-md-scrollfix>
        <div class="md-search-result" data-md-component="result">
          <div class="md-search-result__meta">
            Type to start searching
          </div>
          <ol class="md-search-result__list"></ol>
        </div>
      </div>
    </div>
  </div>
</div>
          
          
        </div>
        
        <div class="md-flex__cell md-flex__cell--shrink">
          <div class="md-header-nav__source">
            


  


  <a href="https://github.com/space-mvc/space-mvc/" title="Go to repository" class="md-source" data-md-source="github">
    
      <div class="md-source__icon">
        <svg viewBox="0 0 24 24" width="24" height="24">
          <use xlink:href="#__github" width="24" height="24"></use>
        </svg>
      </div>
    
    <div class="md-source__repository">
      space-mvc/space-mvc
    </div>
  </a>

          </div>
        </div>
        
      </div>


      <div style="width:400px;height:48px;float:right;text-align:right;">
        <style type="text/css">
          .x-button {
            color:white;
            font-family: "Roboto","Helvetica Neue",Helvetica,Arial,sans-serif;
            font-size:14px;
            margin-top:9px;
            margin-right:10px;
            padding:8px;
            border-radius: 5px;
          }
          .x-button:hover {
            background-color:#5C96D4;
          }
        </style>

        <!--<a href="/">-->
          <!--<button class="x-button" type="button">Home</button>-->
        <!--</a>-->

        <!--<a href="/what-is-wamp/">-->
          <!--<button class="x-button" type="button">Tutorial Videos</button>-->
        <!--</a>-->

        <!--<a href="/docs/extras/mailing-list">-->
        <!--<button class="x-button" type="button">Mailing List</button>-->
        <!--</a>-->

        <!--<a href="/docs/extras/code-contributors">-->
        <!--<button class="x-button" type="button">Code Contributors</button>-->
        <!--</a>-->

        <a href="https://github.com/space-mvc/space-mvc/archive/master.zip">
          <button class="x-button" type="button">Download</button>
        </a>

        <a target="_blank" href="https://github.com/space-mvc/space-mvc">
          <button class="x-button" type="button">Github</button>
        </a>

      <div style="clear:both;"></div>
    </div>
  </nav>
</header>
    
    <div class="md-container">
      
        
      
      
      <main class="md-main">
        <div class="md-main__inner md-grid" data-md-component="container">
          
            
              <div class="md-sidebar md-sidebar--primary" data-md-component="navigation">
                <div class="md-sidebar__scrollwrap">
                  <div class="md-sidebar__inner">
                    <nav class="md-nav md-nav--primary" data-md-level="0">
  <label class="md-nav__title md-nav__title--site" for="__drawer">
    <a href=".." title="Space MVC Framework" class="md-nav__button md-logo">
      
        <i class="md-icon"></i>
      
    </a>
    Space MVC Framework
  </label>
  
    <div class="md-nav__source">
      


  


  <a href="https://github.com/space-mvc/space-mvc/" title="Go to repository" class="md-source" data-md-source="github">
    
      <div class="md-source__icon">
        <svg viewBox="0 0 24 24" width="24" height="24">
          <use xlink:href="#__github" width="24" height="24"></use>
        </svg>
      </div>
    
    <div class="md-source__repository">
      space-mvc/space-mvc
    </div>
  </a>

    </div>
  
  <ul class="md-nav__list" data-md-scrollfix>
    
      
      
      


  <li class="md-nav__item md-nav__item--nested">
    
      <input class="md-toggle md-nav__toggle" data-md-toggle="nav-1" type="checkbox" id="nav-1">
    
    <label class="md-nav__link" for="nav-1">
      What is Space MVC?
    </label>
    <nav class="md-nav" data-md-component="collapsible" data-md-level="1">
      <label class="md-nav__title" for="nav-1">
        What is Space MVC?
      </label>
      <ul class="md-nav__list" data-md-scrollfix>
        
        
          
          
          


  <li class="md-nav__item">
    <a href=".." title="Introduction" class="md-nav__link">
      Introduction
    </a>
  </li>

        
      </ul>
    </nav>
  </li>

    
      
      
      


  <li class="md-nav__item md-nav__item--nested">
    
      <input class="md-toggle md-nav__toggle" data-md-toggle="nav-2" type="checkbox" id="nav-2">
    
    <label class="md-nav__link" for="nav-2">
      Video Tutorials
    </label>
    <nav class="md-nav" data-md-component="collapsible" data-md-level="1">
      <label class="md-nav__title" for="nav-2">
        Video Tutorials
      </label>
      <ul class="md-nav__list" data-md-scrollfix>
        
        
          
          
          


  <li class="md-nav__item">
    <a href="../what-is-wamp/" title="What is Wamp?" class="md-nav__link">
      What is Wamp?
    </a>
  </li>

        
          
          
          


  <li class="md-nav__item">
    <a href="../what-is-php-storm/" title="What is PHP Storm IDE?" class="md-nav__link">
      What is PHP Storm IDE?
    </a>
  </li>

        
          
          
          


  <li class="md-nav__item">
    <a href="../what-is-git/" title="What is Git?" class="md-nav__link">
      What is Git?
    </a>
  </li>

        
          
          
          


  <li class="md-nav__item">
    <a href="../github-multiple-users/" title="How to use git in a Dev Team?" class="md-nav__link">
      How to use git in a Dev Team?
    </a>
  </li>

        
          
          
          


  <li class="md-nav__item">
    <a href="../download-space-mvc/" title="How to download space mvc using source tree?" class="md-nav__link">
      How to download space mvc using source tree?
    </a>
  </li>

        
      </ul>
    </nav>
  </li>

    
      
      
      


  <li class="md-nav__item md-nav__item--nested">
    
      <input class="md-toggle md-nav__toggle" data-md-toggle="nav-3" type="checkbox" id="nav-3">
    
    <label class="md-nav__link" for="nav-3">
      Getting Started
    </label>
    <nav class="md-nav" data-md-component="collapsible" data-md-level="1">
      <label class="md-nav__title" for="nav-3">
        Getting Started
      </label>
      <ul class="md-nav__list" data-md-scrollfix>
        
        
          
          
          


  <li class="md-nav__item">
    <a href="../installation/" title="Space MVC Installation" class="md-nav__link">
      Space MVC Installation
    </a>
  </li>

        
          
          
          


  <li class="md-nav__item">
    <a href="../space-cli/" title="Space CLI Tool" class="md-nav__link">
      Space CLI Tool
    </a>
  </li>

        
          
          
          


  <li class="md-nav__item">
    <a href="../environments/" title="Environments" class="md-nav__link">
      Environments
    </a>
  </li>

        
          
          
          


  <li class="md-nav__item">
    <a href="../configuration/" title="Configuration" class="md-nav__link">
      Configuration
    </a>
  </li>

        
          
          
          


  <li class="md-nav__item">
    <a href="../directory-structure/" title="Directory Structure" class="md-nav__link">
      Directory Structure
    </a>
  </li>

        
      </ul>
    </nav>
  </li>

    
      
      
      


  <li class="md-nav__item md-nav__item--nested">
    
      <input class="md-toggle md-nav__toggle" data-md-toggle="nav-4" type="checkbox" id="nav-4">
    
    <label class="md-nav__link" for="nav-4">
      The Basics
    </label>
    <nav class="md-nav" data-md-component="collapsible" data-md-level="1">
      <label class="md-nav__title" for="nav-4">
        The Basics
      </label>
      <ul class="md-nav__list" data-md-scrollfix>
        
        
          
          
          


  <li class="md-nav__item">
    <a href="../routing/" title="Routing" class="md-nav__link">
      Routing
    </a>
  </li>

        
          
          
          


  <li class="md-nav__item">
    <a href="../controllers/" title="Controllers" class="md-nav__link">
      Controllers
    </a>
  </li>

        
          
          
          


  <li class="md-nav__item">
    <a href="../requests/" title="Requests" class="md-nav__link">
      Requests
    </a>
  </li>

        
          
          
          


  <li class="md-nav__item">
    <a href="../responses/" title="Responses" class="md-nav__link">
      Responses
    </a>
  </li>

        
          
          
          


  <li class="md-nav__item">
    <a href="../views/" title="Views" class="md-nav__link">
      Views
    </a>
  </li>

        
          
          
          


  <li class="md-nav__item">
    <a href="../session/" title="Session" class="md-nav__link">
      Session
    </a>
  </li>

        
          
          
          


  <li class="md-nav__item">
    <a href="../validation/" title="Validation" class="md-nav__link">
      Validation
    </a>
  </li>

        
          
          
          


  <li class="md-nav__item">
    <a href="../error-handling/" title="Error Handling" class="md-nav__link">
      Error Handling
    </a>
  </li>

        
          
          
          


  <li class="md-nav__item">
    <a href="../logging/" title="Logging" class="md-nav__link">
      Logging
    </a>
  </li>

        
      </ul>
    </nav>
  </li>

    
      
      
      


  <li class="md-nav__item md-nav__item--nested">
    
      <input class="md-toggle md-nav__toggle" data-md-toggle="nav-5" type="checkbox" id="nav-5">
    
    <label class="md-nav__link" for="nav-5">
      Database
    </label>
    <nav class="md-nav" data-md-component="collapsible" data-md-level="1">
      <label class="md-nav__title" for="nav-5">
        Database
      </label>
      <ul class="md-nav__list" data-md-scrollfix>
        
        
          
          
          


  <li class="md-nav__item">
    <a href="../database-getting-started/" title="Getting Started" class="md-nav__link">
      Getting Started
    </a>
  </li>

        
          
          
          


  <li class="md-nav__item">
    <a href="../database-configuration/" title="Configuration" class="md-nav__link">
      Configuration
    </a>
  </li>

        
          
          
          


  <li class="md-nav__item">
    <a href="../database-conventions/" title="Conventions" class="md-nav__link">
      Conventions
    </a>
  </li>

        
          
          
          


  <li class="md-nav__item">
    <a href="../database-basic-crud/" title="Basic Crud" class="md-nav__link">
      Basic Crud
    </a>
  </li>

        
          
          
          


  <li class="md-nav__item">
    <a href="../database-finders/" title="Finders" class="md-nav__link">
      Finders
    </a>
  </li>

        
          
          
          


  <li class="md-nav__item">
    <a href="../database-relationships/" title="Relationships" class="md-nav__link">
      Relationships
    </a>
  </li>

        
      </ul>
    </nav>
  </li>

    
      
      
      


  <li class="md-nav__item md-nav__item--nested">
    
      <input class="md-toggle md-nav__toggle" data-md-toggle="nav-6" type="checkbox" id="nav-6">
    
    <label class="md-nav__link" for="nav-6">
      Advanced
    </label>
    <nav class="md-nav" data-md-component="collapsible" data-md-level="1">
      <label class="md-nav__title" for="nav-6">
        Advanced
      </label>
      <ul class="md-nav__list" data-md-scrollfix>
        
        
          
          
          


  <li class="md-nav__item">
    <a href="../file-storage/" title="File Storage" class="md-nav__link">
      File Storage
    </a>
  </li>

        
          
          
          


  <li class="md-nav__item">
    <a href="../cache/" title="Cache" class="md-nav__link">
      Cache
    </a>
  </li>

        
          
          
          


  <li class="md-nav__item">
    <a href="../events/" title="Events" class="md-nav__link">
      Events
    </a>
  </li>

        
          
          
          


  <li class="md-nav__item">
    <a href="../mail/" title="Mail" class="md-nav__link">
      Mail
    </a>
  </li>

        
      </ul>
    </nav>
  </li>

    
  </ul>
</nav>
                  </div>
                </div>
              </div>
            
            
              <div class="md-sidebar md-sidebar--secondary" data-md-component="toc">
                <div class="md-sidebar__scrollwrap">
                  <div class="md-sidebar__inner">
                    
<nav class="md-nav md-nav--secondary">
  
  
    
  
  
    <label class="md-nav__title" for="__toc">Table of contents</label>
    <ul class="md-nav__list" data-md-scrollfix>
      
        <li class="md-nav__item">
  <a href="#introduction" title="Introduction" class="md-nav__link">
    Introduction
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#available-methods" title="Available Methods" class="md-nav__link">
    Available Methods
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#arrays-objects" title="Arrays &amp; Objects" class="md-nav__link">
    Arrays &amp; Objects
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#paths" title="Paths" class="md-nav__link">
    Paths
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#strings" title="Strings" class="md-nav__link">
    Strings
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#urls" title="URLs" class="md-nav__link">
    URLs
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#miscellaneous" title="Miscellaneous" class="md-nav__link">
    Miscellaneous
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#method-listing" title="Method Listing" class="md-nav__link">
    Method Listing
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#arrays-objects_1" title="Arrays &amp; Objects" class="md-nav__link">
    Arrays &amp; Objects
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#paths_1" title="Paths" class="md-nav__link">
    Paths
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#strings_1" title="Strings" class="md-nav__link">
    Strings
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#urls_1" title="URLs" class="md-nav__link">
    URLs
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#miscellaneous_1" title="Miscellaneous" class="md-nav__link">
    Miscellaneous
  </a>
  
</li>
      
      
      
      
      
    </ul>
  
</nav>
                  </div>
                </div>
              </div>
            
          
          <div class="md-content">
            <article class="md-content__inner md-typeset">
              

              <!-- 
                  <a href="https://github.com/space-mvc/space-mvc/edit/master/docs/helpers.md" title="Edit this page" class="md-icon md-content__icon">&#xE3C9;</a>
                 -->

                
                <h1 id="helpers">Helpers</h1>
<pre><code>&lt;ul&gt;
    &lt;li&gt;&lt;a href="#introduction"&gt;Introduction&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#available-methods"&gt;Available Methods&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</code></pre>
<p><a name="introduction"></a></p>
<h2 id="introduction"><a href="#introduction">Introduction</a></h2>
<p>Space MVC includes a variety of global "helper" PHP functions. Many of these functions are used by the framework itself; however, you are free to use them in your own applications if you find them convenient.
<a name="available-methods"></a></p>
<h2 id="available-methods"><a href="#available-methods">Available Methods</a></h2>
<pre><code>&lt;style&gt;
    .collection-method-list &gt; p {
        column-count: 3; -moz-column-count: 3; -webkit-column-count: 3;
        column-gap: 2em; -moz-column-gap: 2em; -webkit-column-gap: 2em;
    }

    .collection-method-list a {
        display: block;
    }
&lt;/style&gt;
</code></pre>
<h3 id="arrays-objects">Arrays &amp; Objects</h3>
<pre><code>&lt;div class="collection-method-list"&gt;
&lt;a href="#method-array-add"&gt;array_add&lt;/a&gt;
        &lt;a href="#method-array-collapse"&gt;array_collapse&lt;/a&gt;
        &lt;a href="#method-array-divide"&gt;array_divide&lt;/a&gt;
        &lt;a href="#method-array-dot"&gt;array_dot&lt;/a&gt;
        &lt;a href="#method-array-except"&gt;array_except&lt;/a&gt;
        &lt;a href="#method-array-first"&gt;array_first&lt;/a&gt;
        &lt;a href="#method-array-flatten"&gt;array_flatten&lt;/a&gt;
        &lt;a href="#method-array-forget"&gt;array_forget&lt;/a&gt;
        &lt;a href="#method-array-get"&gt;array_get&lt;/a&gt;
        &lt;a href="#method-array-has"&gt;array_has&lt;/a&gt;
        &lt;a href="#method-array-last"&gt;array_last&lt;/a&gt;
        &lt;a href="#method-array-only"&gt;array_only&lt;/a&gt;
        &lt;a href="#method-array-pluck"&gt;array_pluck&lt;/a&gt;
        &lt;a href="#method-array-prepend"&gt;array_prepend&lt;/a&gt;
        &lt;a href="#method-array-pull"&gt;array_pull&lt;/a&gt;
        &lt;a href="#method-array-random"&gt;array_random&lt;/a&gt;
        &lt;a href="#method-array-set"&gt;array_set&lt;/a&gt;
        &lt;a href="#method-array-sort"&gt;array_sort&lt;/a&gt;
        &lt;a href="#method-array-sort-recursive"&gt;array_sort_recursive&lt;/a&gt;
        &lt;a href="#method-array-where"&gt;array_where&lt;/a&gt;
        &lt;a href="#method-array-wrap"&gt;array_wrap&lt;/a&gt;
        &lt;a href="#method-data-fill"&gt;data_fill&lt;/a&gt;
        &lt;a href="#method-data-get"&gt;data_get&lt;/a&gt;
        &lt;a href="#method-data-set"&gt;data_set&lt;/a&gt;
        &lt;a href="#method-head"&gt;head&lt;/a&gt;
        &lt;a href="#method-last"&gt;last&lt;/a&gt;
&lt;/div&gt;
</code></pre>
<h3 id="paths">Paths</h3>
<pre><code>&lt;div class="collection-method-list"&gt;
&lt;a href="#method-app-path"&gt;app_path&lt;/a&gt;
        &lt;a href="#method-base-path"&gt;base_path&lt;/a&gt;
        &lt;a href="#method-config-path"&gt;config_path&lt;/a&gt;
        &lt;a href="#method-database-path"&gt;database_path&lt;/a&gt;
        &lt;a href="#method-mix"&gt;mix&lt;/a&gt;
        &lt;a href="#method-public-path"&gt;public_path&lt;/a&gt;
        &lt;a href="#method-resource-path"&gt;resource_path&lt;/a&gt;
        &lt;a href="#method-storage-path"&gt;storage_path&lt;/a&gt;
&lt;/div&gt;
</code></pre>
<h3 id="strings">Strings</h3>
<pre><code>&lt;div class="collection-method-list"&gt;
&lt;a href="#method-__"&gt;__&lt;/a&gt;
        &lt;a href="#method-camel-case"&gt;camel_case&lt;/a&gt;
        &lt;a href="#method-class-basename"&gt;class_basename&lt;/a&gt;
        &lt;a href="#method-e"&gt;e&lt;/a&gt;
        &lt;a href="#method-ends-with"&gt;ends_with&lt;/a&gt;
        &lt;a href="#method-kebab-case"&gt;kebab_case&lt;/a&gt;
        &lt;a href="#method-preg-replace-array"&gt;preg_replace_array&lt;/a&gt;
        &lt;a href="#method-snake-case"&gt;snake_case&lt;/a&gt;
        &lt;a href="#method-starts-with"&gt;starts_with&lt;/a&gt;
        &lt;a href="#method-str-after"&gt;str_after&lt;/a&gt;
        &lt;a href="#method-str-before"&gt;str_before&lt;/a&gt;
        &lt;a href="#method-str-contains"&gt;str_contains&lt;/a&gt;
        &lt;a href="#method-str-finish"&gt;str_finish&lt;/a&gt;
        &lt;a href="#method-str-is"&gt;str_is&lt;/a&gt;
        &lt;a href="#method-str-limit"&gt;str_limit&lt;/a&gt;
        &lt;a href="#method-str-ordered-uuid"&gt;Str::orderedUuid&lt;/a&gt;
        &lt;a href="#method-str-plural"&gt;str_plural&lt;/a&gt;
        &lt;a href="#method-str-random"&gt;str_random&lt;/a&gt;
        &lt;a href="#method-str-replace-array"&gt;str_replace_array&lt;/a&gt;
        &lt;a href="#method-str-replace-first"&gt;str_replace_first&lt;/a&gt;
        &lt;a href="#method-str-replace-last"&gt;str_replace_last&lt;/a&gt;
        &lt;a href="#method-str-singular"&gt;str_singular&lt;/a&gt;
        &lt;a href="#method-str-slug"&gt;str_slug&lt;/a&gt;
        &lt;a href="#method-str-start"&gt;str_start&lt;/a&gt;
        &lt;a href="#method-studly-case"&gt;studly_case&lt;/a&gt;
        &lt;a href="#method-title-case"&gt;title_case&lt;/a&gt;
        &lt;a href="#method-trans"&gt;trans&lt;/a&gt;
        &lt;a href="#method-trans-choice"&gt;trans_choice&lt;/a&gt;
        &lt;a href="#method-str-uuid"&gt;Str::uuid&lt;/a&gt;
&lt;/div&gt;
</code></pre>
<h3 id="urls">URLs</h3>
<pre><code>&lt;div class="collection-method-list"&gt;
&lt;a href="#method-action"&gt;action&lt;/a&gt;
        &lt;a href="#method-asset"&gt;asset&lt;/a&gt;
        &lt;a href="#method-secure-asset"&gt;secure_asset&lt;/a&gt;
        &lt;a href="#method-route"&gt;route&lt;/a&gt;
        &lt;a href="#method-secure-url"&gt;secure_url&lt;/a&gt;
        &lt;a href="#method-url"&gt;url&lt;/a&gt;
&lt;/div&gt;
</code></pre>
<h3 id="miscellaneous">Miscellaneous</h3>
<pre><code>&lt;div class="collection-method-list"&gt;
&lt;a href="#method-abort"&gt;abort&lt;/a&gt;
        &lt;a href="#method-abort-if"&gt;abort_if&lt;/a&gt;
        &lt;a href="#method-abort-unless"&gt;abort_unless&lt;/a&gt;
        &lt;a href="#method-app"&gt;app&lt;/a&gt;
        &lt;a href="#method-auth"&gt;auth&lt;/a&gt;
        &lt;a href="#method-back"&gt;back&lt;/a&gt;
        &lt;a href="#method-bcrypt"&gt;bcrypt&lt;/a&gt;
        &lt;a href="#method-blank"&gt;blank&lt;/a&gt;
        &lt;a href="#method-broadcast"&gt;broadcast&lt;/a&gt;
        &lt;a href="#method-cache"&gt;cache&lt;/a&gt;
        &lt;a href="#method-class-uses-recursive"&gt;class_uses_recursive&lt;/a&gt;
        &lt;a href="#method-collect"&gt;collect&lt;/a&gt;
        &lt;a href="#method-config"&gt;config&lt;/a&gt;
        &lt;a href="#method-cookie"&gt;cookie&lt;/a&gt;
        &lt;a href="#method-csrf-field"&gt;csrf_field&lt;/a&gt;
        &lt;a href="#method-csrf-token"&gt;csrf_token&lt;/a&gt;
        &lt;a href="#method-dd"&gt;dd&lt;/a&gt;
        &lt;a href="#method-decrypt"&gt;decrypt&lt;/a&gt;
        &lt;a href="#method-dispatch"&gt;dispatch&lt;/a&gt;
        &lt;a href="#method-dispatch-now"&gt;dispatch_now&lt;/a&gt;
        &lt;a href="#method-dump"&gt;dump&lt;/a&gt;
        &lt;a href="#method-encrypt"&gt;encrypt&lt;/a&gt;
        &lt;a href="#method-env"&gt;env&lt;/a&gt;
        &lt;a href="#method-event"&gt;event&lt;/a&gt;
        &lt;a href="#method-factory"&gt;factory&lt;/a&gt;
        &lt;a href="#method-filled"&gt;filled&lt;/a&gt;
        &lt;a href="#method-info"&gt;info&lt;/a&gt;
        &lt;a href="#method-logger"&gt;logger&lt;/a&gt;
        &lt;a href="#method-method-field"&gt;method_field&lt;/a&gt;
        &lt;a href="#method-now"&gt;now&lt;/a&gt;
        &lt;a href="#method-old"&gt;old&lt;/a&gt;
        &lt;a href="#method-optional"&gt;optional&lt;/a&gt;
        &lt;a href="#method-policy"&gt;policy&lt;/a&gt;
        &lt;a href="#method-redirect"&gt;redirect&lt;/a&gt;
        &lt;a href="#method-report"&gt;report&lt;/a&gt;
        &lt;a href="#method-request"&gt;request&lt;/a&gt;
        &lt;a href="#method-rescue"&gt;rescue&lt;/a&gt;
        &lt;a href="#method-resolve"&gt;resolve&lt;/a&gt;
        &lt;a href="#method-response"&gt;response&lt;/a&gt;
        &lt;a href="#method-retry"&gt;retry&lt;/a&gt;
        &lt;a href="#method-session"&gt;session&lt;/a&gt;
        &lt;a href="#method-tap"&gt;tap&lt;/a&gt;
        &lt;a href="#method-today"&gt;today&lt;/a&gt;
        &lt;a href="#method-throw-if"&gt;throw_if&lt;/a&gt;
        &lt;a href="#method-throw-unless"&gt;throw_unless&lt;/a&gt;
        &lt;a href="#method-trait-uses-recursive"&gt;trait_uses_recursive&lt;/a&gt;
        &lt;a href="#method-transform"&gt;transform&lt;/a&gt;
        &lt;a href="#method-validator"&gt;validator&lt;/a&gt;
        &lt;a href="#method-value"&gt;value&lt;/a&gt;
        &lt;a href="#method-view"&gt;view&lt;/a&gt;
        &lt;a href="#method-with"&gt;with&lt;/a&gt;
&lt;/div&gt;
</code></pre>
<p><a name="method-listing"></a></p>
<h2 id="method-listing"><a href="#method-listing">Method Listing</a></h2>
<pre><code>&lt;style&gt;
    #collection-method code {
        font-size: 14px;
    }

    #collection-method:not(.first-collection-method) {
        margin-top: 50px;
    }
&lt;/style&gt;
</code></pre>
<p><a name="arrays"></a></p>
<h2 id="arrays-objects_1"><a href="#arrays">Arrays &amp; Objects</a></h2>
<p><a name="method-array-add"></a>
    <h4 id="collection-method" class="first-collection-method">array_add()
The array_add function adds a given key / value pair to an array if the given key doesn't already exist in the array:</p>
<pre><code class="php">$array = array_add(['name' =&gt; 'Desk'], 'price', 100);

// ['name' =&gt; 'Desk', 'price' =&gt; 100]
</code></pre>

<p><a name="method-array-collapse"></a>
    <h4 id="collection-method">array_collapse()
The array_collapse function collapses an array of arrays into a single array:</p>
<pre><code class="php">$array = array_collapse([[1, 2, 3], [4, 5, 6], [7, 8, 9]]);

// [1, 2, 3, 4, 5, 6, 7, 8, 9]
</code></pre>

<p><a name="method-array-divide"></a>
    <h4 id="collection-method">array_divide()
The array_divide function returns two arrays, one containing the keys, and the other containing the values of the given array:</p>
<pre><code class="php">[$keys, $values] = array_divide(['name' =&gt; 'Desk']);

// $keys: ['name']

// $values: ['Desk']
</code></pre>

<p><a name="method-array-dot"></a>
    <h4 id="collection-method">array_dot()
The array_dot function flattens a multi-dimensional array into a single level array that uses "dot" notation to indicate depth:</p>
<pre><code class="php">$array = ['products' =&gt; ['desk' =&gt; ['price' =&gt; 100]]];

$flattened = array_dot($array);

// ['products.desk.price' =&gt; 100]
</code></pre>

<p><a name="method-array-except"></a>
    <h4 id="collection-method">array_except()
The array_except function removes the given key / value pairs from an array:</p>
<pre><code class="php">$array = ['name' =&gt; 'Desk', 'price' =&gt; 100];

$filtered = array_except($array, ['price']);

// ['name' =&gt; 'Desk']
</code></pre>

<p><a name="method-array-first"></a>
    <h4 id="collection-method">array_first()
The array_first function returns the first element of an array passing a given truth test:</p>
<pre><code class="php">$array = [100, 200, 300];

$first = array_first($array, function ($value, $key) {
    return $value &gt;= 150;
});

// 200
</code></pre>

<p>A default value may also be passed as the third parameter to the method. This value will be returned if no value passes the truth test:</p>
<pre><code class="php">$first = array_first($array, $callback, $default);
</code></pre>

<p><a name="method-array-flatten"></a>
    <h4 id="collection-method">array_flatten()
The array_flatten function flattens a multi-dimensional array into a single level array:</p>
<pre><code class="php">$array = ['name' =&gt; 'Joe', 'languages' =&gt; ['PHP', 'Ruby']];

$flattened = array_flatten($array);

// ['Joe', 'PHP', 'Ruby']
</code></pre>

<p><a name="method-array-forget"></a>
    <h4 id="collection-method">array_forget()
The array_forget function removes a given key / value pair from a deeply nested array using "dot" notation:</p>
<pre><code class="php">$array = ['products' =&gt; ['desk' =&gt; ['price' =&gt; 100]]];

array_forget($array, 'products.desk');

// ['products' =&gt; []]
</code></pre>

<p><a name="method-array-get"></a>
    <h4 id="collection-method">array_get()
The array_get function retrieves a value from a deeply nested array using "dot" notation:</p>
<pre><code class="php">$array = ['products' =&gt; ['desk' =&gt; ['price' =&gt; 100]]];

$price = array_get($array, 'products.desk.price');

// 100
</code></pre>

<p>The array_get function also accepts a default value, which will be returned if the specific key is not found:</p>
<pre><code class="php">$discount = array_get($array, 'products.desk.discount', 0);

// 0
</code></pre>

<p><a name="method-array-has"></a>
    <h4 id="collection-method">array_has()
The array_has function checks whether a given item or items exists in an array using "dot" notation:</p>
<pre><code class="php">$array = ['product' =&gt; ['name' =&gt; 'Desk', 'price' =&gt; 100]];

$contains = array_has($array, 'product.name');

// true

$contains = array_has($array, ['product.price', 'product.discount']);

// false
</code></pre>

<p><a name="method-array-last"></a>
    <h4 id="collection-method">array_last()
The array_last function returns the last element of an array passing a given truth test:</p>
<pre><code class="php">$array = [100, 200, 300, 110];

$last = array_last($array, function ($value, $key) {
    return $value &gt;= 150;
});

// 300
</code></pre>

<p>A default value may be passed as the third argument to the method. This value will be returned if no value passes the truth test:</p>
<pre><code class="php">$last = array_last($array, $callback, $default);
</code></pre>

<p><a name="method-array-only"></a>
    <h4 id="collection-method">array_only()
The array_only function returns only the specified key / value pairs from the given array:</p>
<pre><code class="php">$array = ['name' =&gt; 'Desk', 'price' =&gt; 100, 'orders' =&gt; 10];

$slice = array_only($array, ['name', 'price']);

// ['name' =&gt; 'Desk', 'price' =&gt; 100]
</code></pre>

<p><a name="method-array-pluck"></a>
    <h4 id="collection-method">array_pluck()
The array_pluck function retrieves all of the values for a given key from an array:</p>
<pre><code class="php">$array = [
    ['developer' =&gt; ['id' =&gt; 1, 'name' =&gt; 'Taylor']],
    ['developer' =&gt; ['id' =&gt; 2, 'name' =&gt; 'Abigail']],
];

$names = array_pluck($array, 'developer.name');

// ['Taylor', 'Abigail']
</code></pre>

<p>You may also specify how you wish the resulting list to be keyed:</p>
<pre><code class="php">$names = array_pluck($array, 'developer.name', 'developer.id');

// [1 =&gt; 'Taylor', 2 =&gt; 'Abigail']
</code></pre>

<p><a name="method-array-prepend"></a>
    <h4 id="collection-method">array_prepend()
The array_prepend function will push an item onto the beginning of an array:</p>
<pre><code class="php">$array = ['one', 'two', 'three', 'four'];

$array = array_prepend($array, 'zero');

// ['zero', 'one', 'two', 'three', 'four']
</code></pre>

<p>If needed, you may specify the key that should be used for the value:</p>
<pre><code class="php">$array = ['price' =&gt; 100];

$array = array_prepend($array, 'Desk', 'name');

// ['name' =&gt; 'Desk', 'price' =&gt; 100]
</code></pre>

<p><a name="method-array-pull"></a>
    <h4 id="collection-method">array_pull()
The array_pull function returns and removes a key / value pair from an array:</p>
<pre><code class="php">$array = ['name' =&gt; 'Desk', 'price' =&gt; 100];

$name = array_pull($array, 'name');

// $name: Desk

// $array: ['price' =&gt; 100]
</code></pre>

<p>A default value may be passed as the third argument to the method. This value will be returned if the key doesn't exist:</p>
<pre><code class="php">$value = array_pull($array, $key, $default);
</code></pre>

<p><a name="method-array-random"></a>
    <h4 id="collection-method">array_random()
The array_random function returns a random value from an array:</p>
<pre><code class="php">$array = [1, 2, 3, 4, 5];

$random = array_random($array);

// 4 - (retrieved randomly)
</code></pre>

<p>You may also specify the number of items to return as an optional second argument. Note that providing this argument will return an array, even if only one item is desired:</p>
<pre><code class="php">$items = array_random($array, 2);

// [2, 5] - (retrieved randomly)
</code></pre>

<p><a name="method-array-set"></a>
    <h4 id="collection-method">array_set()
The array_set function sets a value within a deeply nested array using "dot" notation:</p>
<pre><code class="php">$array = ['products' =&gt; ['desk' =&gt; ['price' =&gt; 100]]];

array_set($array, 'products.desk.price', 200);

// ['products' =&gt; ['desk' =&gt; ['price' =&gt; 200]]]
</code></pre>

<p><a name="method-array-sort"></a>
    <h4 id="collection-method">array_sort()
The array_sort function sorts an array by its values:</p>
<pre><code class="php">$array = ['Desk', 'Table', 'Chair'];

$sorted = array_sort($array);

// ['Chair', 'Desk', 'Table']
</code></pre>

<p>You may also sort the array by the results of the given Closure:</p>
<pre><code class="php">$array = [
    ['name' =&gt; 'Desk'],
    ['name' =&gt; 'Table'],
    ['name' =&gt; 'Chair'],
];

$sorted = array_values(array_sort($array, function ($value) {
    return $value['name'];
}));

/*
    [
        ['name' =&gt; 'Chair'],
        ['name' =&gt; 'Desk'],
        ['name' =&gt; 'Table'],
    ]
*/
</code></pre>

<p><a name="method-array-sort-recursive"></a>
    <h4 id="collection-method">array_sort_recursive()
The array_sort_recursive function recursively sorts an array using the sort function for numeric sub=arrays and ksort for associative sub-arrays:</p>
<pre><code class="php">$array = [
    ['Roman', 'Taylor', 'Li'],
    ['PHP', 'Ruby', 'JavaScript'],
    ['one' =&gt; 1, 'two' =&gt; 2, 'three' =&gt; 3],
];

$sorted = array_sort_recursive($array);

/*
    [
        ['JavaScript', 'PHP', 'Ruby'],
        ['one' =&gt; 1, 'three' =&gt; 3, 'two' =&gt; 2],
        ['Li', 'Roman', 'Taylor'],
    ]
*/
</code></pre>

<p><a name="method-array-where"></a>
    <h4 id="collection-method">array_where()
The array_where function filters an array using the given Closure:</p>
<pre><code class="php">$array = [100, '200', 300, '400', 500];

$filtered = array_where($array, function ($value, $key) {
    return is_string($value);
});

// [1 =&gt; '200', 3 =&gt; '400']
</code></pre>

<p><a name="method-array-wrap"></a>
    <h4 id="collection-method">array_wrap()
The array_wrap function wraps the given value in an array. If the given value is already an array it will not be changed:</p>
<pre><code class="php">$string = 'Space MVC';

$array = array_wrap($string);

// ['Space MVC']
</code></pre>

<p>If the given value is null, an empty array will be returned:</p>
<pre><code class="php">$nothing = null;

$array = array_wrap($nothing);

// []
</code></pre>

<p><a name="method-data-fill"></a>
    <h4 id="collection-method">data_fill()
The data_fill function sets a missing value within a nested array or object using "dot" notation:</p>
<pre><code class="php">$data = ['products' =&gt; ['desk' =&gt; ['price' =&gt; 100]]];

data_fill($data, 'products.desk.price', 200);

// ['products' =&gt; ['desk' =&gt; ['price' =&gt; 100]]]

data_fill($data, 'products.desk.discount', 10);

// ['products' =&gt; ['desk' =&gt; ['price' =&gt; 100, 'discount' =&gt; 10]]]
</code></pre>

<p>This function also accepts asterisks as wildcards and will fill the target accordingly:</p>
<pre><code class="php">$data = [
    'products' =&gt; [
        ['name' =&gt; 'Desk 1', 'price' =&gt; 100],
        ['name' =&gt; 'Desk 2'],
    ],
];

data_fill($data, 'products.*.price', 200);

/*
    [
        'products' =&gt; [
            ['name' =&gt; 'Desk 1', 'price' =&gt; 100],
            ['name' =&gt; 'Desk 2', 'price' =&gt; 200],
        ],
    ]
*/
</code></pre>

<p><a name="method-data-get"></a>
    <h4 id="collection-method">data_get()
The data_get function retrieves a value from a nested array or object using "dot" notation:</p>
<pre><code class="php">$data = ['products' =&gt; ['desk' =&gt; ['price' =&gt; 100]]];

$price = data_get($data, 'products.desk.price');

// 100
</code></pre>

<p>The data_get function also accepts a default value, which will be returned if the specified key is not found:</p>
<pre><code class="php">$discount = data_get($data, 'products.desk.discount', 0);

// 0
</code></pre>

<p>The function also accepts wildcards using asterisks, which may target any key of the array or object:</p>
<pre><code class="php">$data = [
    'product-one' =&gt; ['name' =&gt; 'Desk 1', 'price' =&gt; 100],
    'product-two' =&gt; ['name' =&gt; 'Desk 2', 'price' =&gt; 150],
];

data_get($data, '*.name');

// ['Desk 1', 'Desk 2'];
</code></pre>

<p><a name="method-data-set"></a>
    <h4 id="collection-method">data_set()
The data_set function sets a value within a nested array or object using "dot" notation:</p>
<pre><code class="php">$data = ['products' =&gt; ['desk' =&gt; ['price' =&gt; 100]]];

data_set($data, 'products.desk.price', 200);

// ['products' =&gt; ['desk' =&gt; ['price' =&gt; 200]]]
</code></pre>

<p>This function also accepts wildcards and will set values on the target accordingly:</p>
<pre><code class="php">$data = [
    'products' =&gt; [
        ['name' =&gt; 'Desk 1', 'price' =&gt; 100],
        ['name' =&gt; 'Desk 2', 'price' =&gt; 150],
    ],
];

data_set($data, 'products.*.price', 200);

/*
    [
        'products' =&gt; [
            ['name' =&gt; 'Desk 1', 'price' =&gt; 200],
            ['name' =&gt; 'Desk 2', 'price' =&gt; 200],
        ],
    ]
*/
</code></pre>

<p>By default, any existing values are overwritten. If you wish to only set a value if it doesn't exist, you may pass false as the third argument:</p>
<pre><code class="php">$data = ['products' =&gt; ['desk' =&gt; ['price' =&gt; 100]]];

data_set($data, 'products.desk.price', 200, false);

// ['products' =&gt; ['desk' =&gt; ['price' =&gt; 100]]]
</code></pre>

<p><a name="method-head"></a>
    <h4 id="collection-method">head()
The head function returns the first element in the given array:</p>
<pre><code class="php">$array = [100, 200, 300];

$first = head($array);

// 100
</code></pre>

<p><a name="method-last"></a>
    <h4 id="collection-method">last()
The last function returns the last element in the given array:</p>
<pre><code class="php">$array = [100, 200, 300];

$last = last($array);

// 300
</code></pre>

<p><a name="paths"></a></p>
<h2 id="paths_1"><a href="#paths">Paths</a></h2>
<p><a name="method-app-path"></a>
    <h4 id="collection-method">app_path()
The app_path function returns the fully qualified path to the app directory. You may also use the app_path function to generate a fully qualified path to a file relative to the application directory:</p>
<pre><code class="php">$path = app_path();

$path = app_path('Http/Controllers/Controller.php');
</code></pre>

<p><a name="method-base-path"></a>
    <h4 id="collection-method">base_path()
The base_path function returns the fully qualified path to the project root. You may also use the base_path function to generate a fully qualified path to a given file relative to the project root directory:</p>
<pre><code class="php">$path = base_path();

$path = base_path('vendor/bin');
</code></pre>

<p><a name="method-config-path"></a>
    <h4 id="collection-method">config_path()
The config_path function returns the fully qualified path to the config directory. You may also use the config_path function to generate a fully qualified path to a given file within the application's configuration directory:</p>
<pre><code class="php">$path = config_path();

$path = config_path('app.php');
</code></pre>

<p><a name="method-database-path"></a>
    <h4 id="collection-method">database_path()
The database_path function returns the fully qualified path to the database directory. You may also use the database_path function to generate a fully qualified path to a given file within the database directory:</p>
<pre><code class="php">$path = database_path();

$path = database_path('factories/UserFactory.php');
</code></pre>

<p><a name="method-mix"></a>
    <h4 id="collection-method">mix()
The mix function returns the path to a <a href="/docs/5.7/mix">versioned Mix file</a>:</p>
<pre><code class="php">$path = mix('css/app.css');
</code></pre>

<p><a name="method-public-path"></a>
    <h4 id="collection-method">public_path()
The public_path function returns the fully qualified path to the public directory. You may also use the public_path function to generate a fully qualified path to a given file within the public directory:</p>
<pre><code class="php">$path = public_path();

$path = public_path('css/app.css');
</code></pre>

<p><a name="method-resource-path"></a>
    <h4 id="collection-method">resource_path()
The resource_path function returns the fully qualified path to the resources directory. You may also use the resource_path function to generate a fully qualified path to a given file within the resources directory:</p>
<pre><code class="php">$path = resource_path();

$path = resource_path('sass/app.scss');
</code></pre>

<p><a name="method-storage-path"></a>
    <h4 id="collection-method">storage_path()
The storage_path function returns the fully qualified path to the storage directory. You may also use the storage_path function to generate a fully qualified path to a given file within the storage directory:</p>
<pre><code class="php">$path = storage_path();

$path = storage_path('app/file.txt');
</code></pre>

<p><a name="strings"></a></p>
<h2 id="strings_1"><a href="#strings">Strings</a></h2>
<p><a name="method-__"></a>
    <h4 id="collection-method"><strong>()
The </strong> function translates the given translation string or translation key using your <a href="/docs/5.7/localization">localization files</a>:</p>
<pre><code class="php">echo __('Welcome to our application');

echo __('messages.welcome');
</code></pre>

<p>If the specified translation string or key does not exist, the <strong> function will return the given value. So, using the example above, the </strong> function would return messages.welcome if that translation key does not exist.
<a name="method-camel-case"></a>
    <h4 id="collection-method">camel_case()
The camel_case function converts the given string to camelCase:</p>
<pre><code class="php">$converted = camel_case('foo_bar');

// fooBar
</code></pre>

<p><a name="method-class-basename"></a>
    <h4 id="collection-method">class_basename()
The class_basename returns the class name of the given class with the class' namespace removed:</p>
<pre><code class="php">$class = class_basename('Foo\Bar\Baz');

// Baz
</code></pre>

<p><a name="method-e"></a>
    <h4 id="collection-method">e()
The e function runs PHP's htmlspecialchars function with the double_encode option set to true by default:</p>
<pre><code class="php">echo e('&lt;html&gt;foo&lt;/html&gt;');

// &amp;lt;html&amp;gt;foo&amp;lt;/html&amp;gt;
</code></pre>

<p><a name="method-ends-with"></a>
    <h4 id="collection-method">ends_with()
The ends_with function determines if the given string ends with the given value:</p>
<pre><code class="php">$result = ends_with('This is my name', 'name');

// true
</code></pre>

<p><a name="method-kebab-case"></a>
    <h4 id="collection-method">kebab_case()
The kebab_case function converts the given string to kebab-case:</p>
<pre><code class="php">$converted = kebab_case('fooBar');

// foo-bar
</code></pre>

<p><a name="method-preg-replace-array"></a>
    <h4 id="collection-method">preg_replace_array()
The preg_replace_array function replaces a given pattern in the string sequentially using an array:</p>
<pre><code class="php">$string = 'The event will take place between :start and :end';

$replaced = preg_replace_array('/:[a-z_]+/', ['8:30', '9:00'], $string);

// The event will take place between 8:30 and 9:00
</code></pre>

<p><a name="method-snake-case"></a>
    <h4 id="collection-method">snake_case()
The snake_case function converts the given string to snake_case:</p>
<pre><code class="php">$converted = snake_case('fooBar');

// foo_bar
</code></pre>

<p><a name="method-starts-with"></a>
    <h4 id="collection-method">starts_with()
The starts_with function determines if the given string begins with the given value:</p>
<pre><code class="php">$result = starts_with('This is my name', 'This');

// true
</code></pre>

<p><a name="method-str-after"></a>
    <h4 id="collection-method">str_after()
The str_after function returns everything after the given value in a string:</p>
<pre><code class="php">$slice = str_after('This is my name', 'This is');

// ' my name'
</code></pre>

<p><a name="method-str-before"></a>
    <h4 id="collection-method">str_before()
The str_before function returns everything before the given value in a string:</p>
<pre><code class="php">$slice = str_before('This is my name', 'my name');

// 'This is '
</code></pre>

<p><a name="method-str-contains"></a>
    <h4 id="collection-method">str_contains()
The str_contains function determines if the given string contains the given value (case sensitive):</p>
<pre><code class="php">$contains = str_contains('This is my name', 'my');

// true
</code></pre>

<p>You may also pass an array of values to determine if the given string contains any of the values:</p>
<pre><code class="php">$contains = str_contains('This is my name', ['my', 'foo']);

// true
</code></pre>

<p><a name="method-str-finish"></a>
    <h4 id="collection-method">str_finish()
The str_finish function adds a single instance of the given value to a string if it does not already end with the value:</p>
<pre><code class="php">$adjusted = str_finish('this/string', '/');

// this/string/

$adjusted = str_finish('this/string/', '/');

// this/string/
</code></pre>

<p><a name="method-str-is"></a>
    <h4 id="collection-method">str_is()
The str_is function determines if a given string matches a given pattern. Asterisks may be used to indicate wildcards:</p>
<pre><code class="php">$matches = str_is('foo*', 'foobar');

// true

$matches = str_is('baz*', 'foobar');

// false
</code></pre>

<p><a name="method-str-limit"></a>
    <h4 id="collection-method">str_limit()
The str_limit function truncates the given string at the specified length:</p>
<pre><code class="php">$truncated = str_limit('The quick brown fox jumps over the lazy dog', 20);

// The quick brown fox...
</code></pre>

<p>You may also pass a third argument to change the string that will be appended to the end:</p>
<pre><code class="php">$truncated = str_limit('The quick brown fox jumps over the lazy dog', 20, ' (...)');

// The quick brown fox (...)
</code></pre>

<p><a name="method-str-ordered-uuid"></a>
    <h4 id="collection-method">Str::orderedUuid()
The Str::orderedUuid method generates a "timestamp first" UUID that may be efficiently stored in an indexed database column:</p>
<pre><code class="php">use Illuminate\Support\Str;

return (string) Str::orderedUuid();
</code></pre>

<p><a name="method-str-plural"></a>
    <h4 id="collection-method">str_plural()
The str_plural function converts a string to its plural form. This function currently only supports the English language:</p>
<pre><code class="php">$plural = str_plural('car');

// cars

$plural = str_plural('child');

// children
</code></pre>

<p>You may provide an integer as a second argument to the function to retrieve the singular or plural form of the string:</p>
<pre><code class="php">$plural = str_plural('child', 2);

// children

$plural = str_plural('child', 1);

// child
</code></pre>

<p><a name="method-str-random"></a>
    <h4 id="collection-method">str_random()
The str_random function generates a random string of the specified length. This function uses PHP's random_bytes function:</p>
<pre><code class="php">$random = str_random(40);
</code></pre>

<p><a name="method-str-replace-array"></a>
    <h4 id="collection-method">str_replace_array()
The str_replace_array function replaces a given value in the string sequentially using an array:</p>
<pre><code class="php">$string = 'The event will take place between ? and ?';

$replaced = str_replace_array('?', ['8:30', '9:00'], $string);

// The event will take place between 8:30 and 9:00
</code></pre>

<p><a name="method-str-replace-first"></a>
    <h4 id="collection-method">str_replace_first()
The str_replace_first function replaces the first occurrence of a given value in a string:</p>
<pre><code class="php">$replaced = str_replace_first('the', 'a', 'the quick brown fox jumps over the lazy dog');

// a quick brown fox jumps over the lazy dog
</code></pre>

<p><a name="method-str-replace-last"></a>
    <h4 id="collection-method">str_replace_last()
The str_replace_last function replaces the last occurrence of a given value in a string:</p>
<pre><code class="php">$replaced = str_replace_last('the', 'a', 'the quick brown fox jumps over the lazy dog');

// the quick brown fox jumps over a lazy dog
</code></pre>

<p><a name="method-str-singular"></a>
    <h4 id="collection-method">str_singular()
The str_singular function converts a string to its singular form. This function currently only supports the English language:</p>
<pre><code class="php">$singular = str_singular('cars');

// car

$singular = str_singular('children');

// child
</code></pre>

<p><a name="method-str-slug"></a>
    <h4 id="collection-method">str_slug()
The str_slug function generates a URL friendly "slug" from the given string:</p>
<pre><code class="php">$slug = str_slug('Space MVC 5 Framework', '-');

// Space MVC
</code></pre>

<p><a name="method-str-start"></a>
    <h4 id="collection-method">str_start()
The str_start function adds a single instance of the given value to a string if it does not already start with the value:</p>
<pre><code class="php">$adjusted = str_start('this/string', '/');

// /this/string

$adjusted = str_start('/this/string', '/');

// /this/string
</code></pre>

<p><a name="method-studly-case"></a>
    <h4 id="collection-method">studly_case()
The studly_case function converts the given string to StudlyCase:</p>
<pre><code class="php">$converted = studly_case('foo_bar');

// FooBar
</code></pre>

<p><a name="method-title-case"></a>
    <h4 id="collection-method">title_case()
The title_case function converts the given string to Title Case:</p>
<pre><code class="php">$converted = title_case('a nice title uses the correct case');

// A Nice Title Uses The Correct Case
</code></pre>

<p><a name="method-trans"></a>
    <h4 id="collection-method">trans()
The trans function translates the given translation key using your <a href="/docs/5.7/localization">localization files</a>:</p>
<pre><code class="php">echo trans('messages.welcome');
</code></pre>

<p>If the specified translation key does not exist, the trans function will return the given key. So, using the example above, the trans function would return messages.welcome if the translation key does not exist.
<a name="method-trans-choice"></a>
    <h4 id="collection-method">trans_choice()
The trans_choice function translates the given translation key with inflection:</p>
<pre><code class="php">echo trans_choice('messages.notifications', $unreadCount);
</code></pre>

<p>If the specified translation key does not exist, the trans_choice function will return the given key. So, using the example above, the trans_choice function would return messages.notifications if the translation key does not exist.
<a name="method-str-uuid"></a>
    <h4 id="collection-method">Str::uuid()
The Str::uuid method generates a UUID (version 4):</p>
<pre><code class="php">use Illuminate\Support\Str;

return (string) Str::uuid();
</code></pre>

<p><a name="urls"></a></p>
<h2 id="urls_1"><a href="#urls">URLs</a></h2>
<p><a name="method-action"></a>
    <h4 id="collection-method">action()
The action function generates a URL for the given controller action. You do not need to pass the full namespace of the controller. Instead, pass the controller class name relative to the App\Http\Controllers namespace:</p>
<pre><code class="php">$url = action('HomeController@index');

$url = action([HomeController::class, 'index']);
</code></pre>

<p>If the method accepts route parameters, you may pass them as the second argument to the method:</p>
<pre><code class="php">$url = action('UserController@profile', ['id' =&gt; 1]);
</code></pre>

<p><a name="method-asset"></a>
    <h4 id="collection-method">asset()
The asset function generates a URL for an asset using the current scheme of the request (HTTP or HTTPS):</p>
<pre><code class="php">$url = asset('img/photo.jpg');
</code></pre>

<p><a name="method-secure-asset"></a>
    <h4 id="collection-method">secure_asset()
The secure_asset function generates a URL for an asset using HTTPS:</p>
<pre><code class="php">$url = secure_asset('img/photo.jpg');
</code></pre>

<p><a name="method-route"></a>
    <h4 id="collection-method">route()
The route function generates a URL for the given named route:</p>
<pre><code class="php">$url = route('routeName');
</code></pre>

<p>If the route accepts parameters, you may pass them as the second argument to the method:</p>
<pre><code class="php">$url = route('routeName', ['id' =&gt; 1]);
</code></pre>

<p>By default, the route function generates an absolute URL. If you wish to generate a relative URL, you may pass false as the third argument:</p>
<pre><code class="php">$url = route('routeName', ['id' =&gt; 1], false);
</code></pre>

<p><a name="method-secure-url"></a>
    <h4 id="collection-method">secure_url()
The secure_url function generates a fully qualified HTTPS URL to the given path:</p>
<pre><code class="php">$url = secure_url('user/profile');

$url = secure_url('user/profile', [1]);
</code></pre>

<p><a name="method-url"></a>
    <h4 id="collection-method">url()
The url function generates a fully qualified URL to the given path:</p>
<pre><code class="php">$url = url('user/profile');

$url = url('user/profile', [1]);
</code></pre>

<p>If no path is provided, a Illuminate\Routing\UrlGenerator instance is returned:</p>
<pre><code class="php">$current = url()-&gt;current();

$full = url()-&gt;full();

$previous = url()-&gt;previous();
</code></pre>

<p><a name="miscellaneous"></a></p>
<h2 id="miscellaneous_1"><a href="#miscellaneous">Miscellaneous</a></h2>
<p><a name="method-abort"></a>
    <h4 id="collection-method">abort()
The abort function throws <a href="/docs/5.7/errors#http-exceptions">an HTTP exception</a> which will be rendered by the <a href="/docs/5.7/errors#the-exception-handler">exception handler</a>:</p>
<pre><code class="php">abort(403);
</code></pre>

<p>You may also provide the exception's response text and custom response headers:</p>
<pre><code class="php">abort(403, 'Unauthorized.', $headers);
</code></pre>

<p><a name="method-abort-if"></a>
    <h4 id="collection-method">abort_if()
The abort_if function throws an HTTP exception if a given boolean expression evaluates to true:</p>
<pre><code class="php">abort_if(! Auth::user()-&gt;isAdmin(), 403);
</code></pre>

<p>Like the abort method, you may also provide the exception's response text as the third argument and an array of custom response headers as the fourth argument.
<a name="method-abort-unless"></a>
    <h4 id="collection-method">abort_unless()
The abort_unless function throws an HTTP exception if a given boolean expression evaluates to false:</p>
<pre><code class="php">abort_unless(Auth::user()-&gt;isAdmin(), 403);
</code></pre>

<p>Like the abort method, you may also provide the exception's response text as the third argument and an array of custom response headers as the fourth argument.
<a name="method-app"></a>
    <h4 id="collection-method">app()
The app function returns the <a href="/docs/5.7/container">service container</a> instance:</p>
<pre><code class="php">$container = app();
</code></pre>

<p>You may pass a class or interface name to resolve it from the container:</p>
<pre><code class="php">$api = app('HelpSpot\API');
</code></pre>

<p><a name="method-auth"></a>
    <h4 id="collection-method">auth()
The auth function returns an <a href="/docs/5.7/authentication">authenticator</a> instance. You may use it instead of the Auth facade for convenience:</p>
<pre><code class="php">$user = auth()-&gt;user();
</code></pre>

<p>If needed, you may specify which guard instance you would like to access:</p>
<pre><code class="php">$user = auth('admin')-&gt;user();
</code></pre>

<p><a name="method-back"></a>
    <h4 id="collection-method">back()
The back function generates a <a href="/docs/5.7/responses#redirects">redirect HTTP response</a> to the user's previous location:</p>
<pre><code class="php">return back($status = 302, $headers = [], $fallback = false);

return back();
</code></pre>

<p><a name="method-bcrypt"></a>
    <h4 id="collection-method">bcrypt()
The bcrypt function <a href="/docs/5.7/hashing">hashes</a> the given value using Bcrypt. You may use it as an alternative to the Hash facade:</p>
<pre><code class="php">$password = bcrypt('my-secret-password');
</code></pre>

<p><a name="method-broadcast"></a>
    <h4 id="collection-method">broadcast()
The broadcast function <a href="/docs/5.7/broadcasting">broadcasts</a> the given <a href="/docs/5.7/events">event</a> to its listeners:</p>
<pre><code class="php">broadcast(new UserRegistered($user));
</code></pre>

<p><a name="method-blank"></a>
    <h4 id="collection-method">blank()
The blank function returns whether the given value is "blank":</p>
<pre><code class="php">blank('');
blank('   ');
blank(null);
blank(collect());

// true

blank(0);
blank(true);
blank(false);

// false
</code></pre>

<p>For the inverse of blank, see the <a href="#method-filled">filled</a> method.
<a name="method-cache"></a>
    <h4 id="collection-method">cache()
The cache function may be used to get values from the <a href="/docs/5.7/cache">cache</a>. If the given key does not exist in the cache, an optional default value will be returned:</p>
<pre><code class="php">$value = cache('key');

$value = cache('key', 'default');
</code></pre>

<p>You may add items to the cache by passing an array of key / value pairs to the function. You should also pass the number of minutes or duration the cached value should be considered valid:</p>
<pre><code class="php">cache(['key' =&gt; 'value'], 5);

cache(['key' =&gt; 'value'], now()-&gt;addSeconds(10));
</code></pre>

<p><a name="method-class-uses-recursive"></a>
    <h4 id="collection-method">class_uses_recursive()
The class_uses_recursive function returns all traits used by a class, including traits used by all of its parent classes:</p>
<pre><code class="php">$traits = class_uses_recursive(App\User::class);
</code></pre>

<p><a name="method-collect"></a>
    <h4 id="collection-method">collect()
The collect function creates a <a href="/docs/5.7/collections">collection</a> instance from the given value:</p>
<pre><code class="php">$collection = collect(['taylor', 'abigail']);
</code></pre>

<p><a name="method-config"></a>
    <h4 id="collection-method">config()
The config function gets the value of a <a href="/docs/5.7/configuration">configuration</a> variable. The configuration values may be accessed using "dot" syntax, which includes the name of the file and the option you wish to access. A default value may be specified and is returned if the configuration option does not exist:</p>
<pre><code class="php">$value = config('app.timezone');

$value = config('app.timezone', $default);
</code></pre>

<p>You may set configuration variables at runtime by passing an array of key / value pairs:</p>
<pre><code class="php">config(['app.debug' =&gt; true]);
</code></pre>

<p><a name="method-cookie"></a>
    <h4 id="collection-method">cookie()
The cookie function creates a new <a href="/docs/5.7/requests#cookies">cookie</a> instance:</p>
<pre><code class="php">$cookie = cookie('name', 'value', $minutes);
</code></pre>

<p><a name="method-csrf-field"></a>
    <h4 id="collection-method">csrf_field()
The csrf_field function generates an HTML hidden input field containing the value of the CSRF token. For example, using <a href="/docs/5.7/blade">Blade syntax</a>:</p>
<pre><code class="php">{{ csrf_field() }}
</code></pre>

<p><a name="method-csrf-token"></a>
    <h4 id="collection-method">csrf_token()
The csrf_token function retrieves the value of the current CSRF token:</p>
<pre><code class="php">$token = csrf_token();
</code></pre>

<p><a name="method-dd"></a>
    <h4 id="collection-method">dd()
The dd function dumps the given variables and ends execution of the script:</p>
<pre><code class="php">dd($value);

dd($value1, $value2, $value3, ...);
</code></pre>

<p>If you do not want to halt the execution of your script, use the <a href="#method-dump">dump</a> function instead.
<a name="method-decrypt"></a>
    <h4 id="collection-method">decrypt()
The decrypt function decrypts the given value using Space MVC's <a href="/docs/5.7/encryption">encrypter</a>:</p>
<pre><code class="php">$decrypted = decrypt($encrypted_value);
</code></pre>

<p><a name="method-dispatch"></a>
    <h4 id="collection-method">dispatch()
The dispatch function pushes the given <a href="/docs/5.7/queues#creating-jobs">job</a> onto the Space MVC <a href="/docs/5.7/queues">job queue</a>:</p>
<pre><code class="php">dispatch(new App\Jobs\SendEmails);
</code></pre>

<p><a name="method-dispatch-now"></a>
    <h4 id="collection-method">dispatch_now()
The dispatch_now function runs the given <a href="/docs/5.7/queues#creating-jobs">job</a> immediately and returns the value from its handle method:</p>
<pre><code class="php">$result = dispatch_now(new App\Jobs\SendEmails);
</code></pre>

<p><a name="method-dump"></a>
    <h4 id="collection-method">dump()
The dump function dumps the given variables:</p>
<pre><code class="php">dump($value);

dump($value1, $value2, $value3, ...);
</code></pre>

<p>If you want to stop executing the script after dumping the variables, use the <a href="#method-dd">dd</a> function instead.
You may use Artisan's dump-server command to intercept all dump calls and display them in your console window instead of your browser.
<a name="method-encrypt"></a>
    <h4 id="collection-method">encrypt()
The encrypt function encrypts the given value using Space MVC's <a href="/docs/5.7/encryption">encrypter</a>:</p>
<pre><code class="php">$encrypted = encrypt($unencrypted_value);
</code></pre>

<p><a name="method-env"></a>
    <h4 id="collection-method">env()
The env function retrieves the value of an <a href="/docs/5.7/configuration#environment-configuration">environment variable</a> or returns a default value:</p>
<pre><code class="php">$env = env('APP_ENV');

// Returns 'production' if APP_ENV is not set...
$env = env('APP_ENV', 'production');
</code></pre>

<p>If you execute the config:cache command during your deployment process, you should be sure that you are only calling the env function from within your configuration files. Once the configuration has been cached, the .env file will not be loaded and all calls to the env function will return null.
<a name="method-event"></a>
    <h4 id="collection-method">event()
The event function dispatches the given <a href="/docs/5.7/events">event</a> to its listeners:</p>
<pre><code class="php">event(new UserRegistered($user));
</code></pre>

<p><a name="method-factory"></a>
    <h4 id="collection-method">factory()
The factory function creates a model factory builder for a given class, name, and amount. It can be used while <a href="/docs/5.7/database-testing#writing-factories">testing</a> or <a href="/docs/5.7/seeding#using-model-factories">seeding</a>:</p>
<pre><code class="php">$user = factory(App\User::class)-&gt;make();
</code></pre>

<p><a name="method-filled"></a>
    <h4 id="collection-method">filled()
The filled function returns whether the given value is not "blank":</p>
<pre><code class="php">filled(0);
filled(true);
filled(false);

// true

filled('');
filled('   ');
filled(null);
filled(collect());

// false
</code></pre>

<p>For the inverse of filled, see the <a href="#method-blank">blank</a> method.
<a name="method-info"></a>
    <h4 id="collection-method">info()
The info function will write information to the <a href="/docs/5.7/errors#logging">log</a>:</p>
<pre><code class="php">info('Some helpful information!');
</code></pre>

<p>An array of contextual data may also be passed to the function:</p>
<pre><code class="php">info('User login attempt failed.', ['id' =&gt; $user-&gt;id]);
</code></pre>

<p><a name="method-logger"></a>
    <h4 id="collection-method">logger()
The logger function can be used to write a debug level message to the <a href="/docs/5.7/errors#logging">log</a>:</p>
<pre><code class="php">logger('Debug message');
</code></pre>

<p>An array of contextual data may also be passed to the function:</p>
<pre><code class="php">logger('User has logged in.', ['id' =&gt; $user-&gt;id]);
</code></pre>

<p>A <a href="/docs/5.7/errors#logging">logger</a> instance will be returned if no value is passed to the function:</p>
<pre><code class="php">logger()-&gt;error('You are not allowed here.');
</code></pre>

<p><a name="method-method-field"></a>
    <h4 id="collection-method">method_field()
The method_field function generates an HTML hidden input field containing the spoofed value of the form's HTTP verb. For example, using <a href="/docs/5.7/blade">Blade syntax</a>:</p>
<pre><code class="php">&lt;form method=&quot;POST&quot;&gt;
    {{ method_field('DELETE') }}
&lt;/form&gt;
</code></pre>

<p><a name="method-now"></a>
    <h4 id="collection-method">now()
The now function creates a new Illuminate\Support\Carbon instance for the current time:</p>
<pre><code class="php">$now = now();
</code></pre>

<p><a name="method-old"></a>
    <h4 id="collection-method">old()
The old function <a href="/docs/5.7/requests#retrieving-input">retrieves</a> an <a href="/docs/5.7/requests#old-input">old input</a> value flashed into the session:</p>
<pre><code class="php">$value = old('value');

$value = old('value', 'default');
</code></pre>

<p><a name="method-optional"></a>
    <h4 id="collection-method">optional()
The optional function accepts any argument and allows you to access properties or call methods on that object. If the given object is null, properties and methods will return null instead of causing an error:</p>
<pre><code class="php">return optional($user-&gt;address)-&gt;street;

{!! old('name', optional($user)-&gt;name) !!}
</code></pre>

<p>The optional function also accepts a Closure as its second argument. The Closure will be invoked if the value provided as the first argument is not null:</p>
<pre><code class="php">return optional(User::find($id), function ($user) {
    return new DummyUser;
});
</code></pre>

<p><a name="method-policy"></a>
    <h4 id="collection-method">policy()
The policy method retrieves a <a href="/docs/5.7/authorization#creating-policies">policy</a> instance for a given class:</p>
<pre><code class="php">$policy = policy(App\User::class);
</code></pre>

<p><a name="method-redirect"></a>
    <h4 id="collection-method">redirect()
The redirect function returns a <a href="/docs/5.7/responses#redirects">redirect HTTP response</a>, or returns the redirector instance if called with no arguments:</p>
<pre><code class="php">return redirect($to = null, $status = 302, $headers = [], $secure = null);

return redirect('/home');

return redirect()-&gt;route('route.name');
</code></pre>

<p><a name="method-report"></a>
    <h4 id="collection-method">report()
The report function will report an exception using your <a href="/docs/5.7/errors#the-exception-handler">exception handler</a>'s report method:</p>
<pre><code class="php">report($e);
</code></pre>

<p><a name="method-request"></a>
    <h4 id="collection-method">request()
The request function returns the current <a href="/docs/5.7/requests">request</a> instance or obtains an input item:</p>
<pre><code class="php">$request = request();

$value = request('key', $default);
</code></pre>

<p><a name="method-rescue"></a>
    <h4 id="collection-method">rescue()
The rescue function executes the given Closure and catches any exceptions that occur during its execution. All exceptions that are caught will be sent to your <a href="/docs/5.7/errors#the-exception-handler">exception handler</a>'s report method; however, the request will continue processing:</p>
<pre><code class="php">return rescue(function () {
    return $this-&gt;method();
});
</code></pre>

<p>You may also pass a second argument to the rescue function. This argument will be the "default" value that should be returned if an exception occurs while executing the Closure:</p>
<pre><code class="php">return rescue(function () {
    return $this-&gt;method();
}, false);

return rescue(function () {
    return $this-&gt;method();
}, function () {
    return $this-&gt;failure();
});
</code></pre>

<p><a name="method-resolve"></a>
    <h4 id="collection-method">resolve()
The resolve function resolves a given class or interface name to its instance using the <a href="/docs/5.7/container">service container</a>:</p>
<pre><code class="php">$api = resolve('HelpSpot\API');
</code></pre>

<p><a name="method-response"></a>
    <h4 id="collection-method">response()
The response function creates a <a href="/docs/5.7/responses">response</a> instance or obtains an instance of the response factory:</p>
<pre><code class="php">return response('Hello World', 200, $headers);

return response()-&gt;json(['foo' =&gt; 'bar'], 200, $headers);
</code></pre>

<p><a name="method-retry"></a>
    <h4 id="collection-method">retry()
The retry function attempts to execute the given callback until the given maximum attempt threshold is met. If the callback does not throw an exception, its return value will be returned. If the callback throws an exception, it will automatically be retried. If the maximum attempt count is exceeded, the exception will be thrown:</p>
<pre><code class="php">return retry(5, function () {
    // Attempt 5 times while resting 100ms in between attempts...
}, 100);
</code></pre>

<p><a name="method-session"></a>
    <h4 id="collection-method">session()
The session function may be used to get or set <a href="/docs/5.7/session">session</a> values:</p>
<pre><code class="php">$value = session('key');
</code></pre>

<p>You may set values by passing an array of key / value pairs to the function:</p>
<pre><code class="php">session(['chairs' =&gt; 7, 'instruments' =&gt; 3]);
</code></pre>

<p>The session store will be returned if no value is passed to the function:</p>
<pre><code class="php">$value = session()-&gt;get('key');

session()-&gt;put('key', $value);
</code></pre>

<p><a name="method-tap"></a>
    <h4 id="collection-method">tap()
The tap function accepts two arguments: an arbitrary $value and a Closure. The $value will be passed to the Closure and then be returned by the tap function. The return value of the Closure is irrelevant:</p>
<pre><code class="php">$user = tap(User::first(), function ($user) {
    $user-&gt;name = 'taylor';

    $user-&gt;save();
});
</code></pre>

<p>If no Closure is passed to the tap function, you may call any method on the given $value. The return value of the method you call will always be $value, regardless of what the method actually returns in its definition. For example, the Eloquent update method typically returns an integer. However, we can force the method to return the model itself by chaining the update method call through the tap function:</p>
<pre><code class="php">$user = tap($user)-&gt;update([
    'name' =&gt; $name,
    'email' =&gt; $email,
]);
</code></pre>

<p><a name="method-today"></a>
    <h4 id="collection-method">today()
The today function creates a new Illuminate\Support\Carbon instance for the current date:</p>
<pre><code class="php">$today = today();
</code></pre>

<p><a name="method-throw-if"></a>
    <h4 id="collection-method">throw_if()
The throw_if function throws the given exception if a given boolean expression evaluates to true:</p>
<pre><code class="php">throw_if(! Auth::user()-&gt;isAdmin(), AuthorizationException::class);

throw_if(
    ! Auth::user()-&gt;isAdmin(),
    AuthorizationException::class,
    'You are not allowed to access this page'
);
</code></pre>

<p><a name="method-throw-unless"></a>
    <h4 id="collection-method">throw_unless()
The throw_unless function throws the given exception if a given boolean expression evaluates to false:</p>
<pre><code class="php">throw_unless(Auth::user()-&gt;isAdmin(), AuthorizationException::class);

throw_unless(
    Auth::user()-&gt;isAdmin(),
    AuthorizationException::class,
    'You are not allowed to access this page'
);
</code></pre>

<p><a name="method-trait-uses-recursive"></a>
    <h4 id="collection-method">trait_uses_recursive()
The trait_uses_recursive function returns all traits used by a trait:</p>
<pre><code class="php">$traits = trait_uses_recursive(\Illuminate\Notifications\Notifiable::class);
</code></pre>

<p><a name="method-transform"></a>
    <h4 id="collection-method">transform()
The transform function executes a Closure on a given value if the value is not <a href="#method-blank">blank</a> and returns the result of the Closure:</p>
<pre><code class="php">$callback = function ($value) {
    return $value * 2;
};

$result = transform(5, $callback);

// 10
</code></pre>

<p>A default value or Closure may also be passed as the third parameter to the method. This value will be returned if the given value is blank:</p>
<pre><code class="php">$result = transform(null, $callback, 'The value is blank');

// The value is blank
</code></pre>

<p><a name="method-validator"></a>
    <h4 id="collection-method">validator()
The validator function creates a new <a href="/docs/5.7/validation">validator</a> instance with the given arguments. You may use it instead of the Validator facade for convenience:</p>
<pre><code class="php">$validator = validator($data, $rules, $messages);
</code></pre>

<p><a name="method-value"></a>
    <h4 id="collection-method">value()
The value function returns the value it is given. However, if you pass a Closure to the function, the Closure will be executed then its result will be returned:</p>
<pre><code class="php">$result = value(true);

// true

$result = value(function () {
    return false;
});

// false
</code></pre>

<p><a name="method-view"></a>
    <h4 id="collection-method">view()
The view function retrieves a <a href="/docs/5.7/views">view</a> instance:</p>
<pre><code class="php">return view('auth.login');
</code></pre>

<p><a name="method-with"></a>
    <h4 id="collection-method">with()
The with function returns the value it is given. If a Closure is passed as the second argument to the function, the Closure will be executed and its result will be returned:</p>
<pre><code class="php">$callback = function ($value) {
    return (is_numeric($value)) ? $value * 2 : 0;
};

$result = with(5, $callback);

// 10

$result = with(null, $callback);

// 0

$result = with(5, null);

// 5
</code></pre>
                
                  
                
              
              
                


              
            </article>
          </div>
        </div>
      </main>

      <div style="height:50px;"></div>

      
        
<footer class="md-footer">
  

  <!--
  <div class="md-footer-meta md-typeset">
    <div class="md-footer-meta__inner md-grid">
      <div class="md-footer-copyright">
        



        powered by
        <a href="https://www.mkdocs.org">MkDocs</a>
        and
        <a href="https://squidfunk.github.io/mkdocs-material/">
          Material for MkDocs</a>
      </div>
      
        
      
    </div>
  </div>-->
</footer>
      
    </div>

  <span class="skype-button bubble " data-contact-id="live:347d3c27d3b520cf"></span>
  <script src="https://swc.cdn.skype.com/sdk/v1/sdk.min.js"></script>

    
      <script src="../assets/javascripts/application.9e1f3b71.js"></script>
      
      <script>app.initialize({version:"1.0",url:{base:".."}})</script>
      
    
    
      
    
  </body>
</html>
