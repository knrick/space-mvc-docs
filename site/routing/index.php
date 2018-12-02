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
    
    
      
        <title>Routing - Space MVC Framework</title>
      
    
    
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
    
      <a href="#routing" tabindex="1" class="md-skip">
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
                Routing
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

    
      
      
      

  


  <li class="md-nav__item md-nav__item--active md-nav__item--nested">
    
      <input class="md-toggle md-nav__toggle" data-md-toggle="nav-4" type="checkbox" id="nav-4" checked>
    
    <label class="md-nav__link" for="nav-4">
      The Basics
    </label>
    <nav class="md-nav" data-md-component="collapsible" data-md-level="1">
      <label class="md-nav__title" for="nav-4">
        The Basics
      </label>
      <ul class="md-nav__list" data-md-scrollfix>
        
        
          
          
          

  


  <li class="md-nav__item md-nav__item--active">
    
    <input class="md-toggle md-nav__toggle" data-md-toggle="toc" type="checkbox" id="__toc">
    
      
    
    
      <label class="md-nav__link md-nav__link--active" for="__toc">
        Routing
      </label>
    
    <a href="./" title="Routing" class="md-nav__link md-nav__link--active">
      Routing
    </a>
    
      
<nav class="md-nav md-nav--secondary">
  
  
    
  
  
    <label class="md-nav__title" for="__toc">Table of contents</label>
    <ul class="md-nav__list" data-md-scrollfix>
      
        <li class="md-nav__item">
  <a href="#basic-routing" title="Basic Routing" class="md-nav__link">
    Basic Routing
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#the-default-route-files" title="The Default Route Files" class="md-nav__link">
    The Default Route Files
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#available-router-methods" title="Available Router Methods" class="md-nav__link">
    Available Router Methods
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#csrf-protection" title="CSRF Protection" class="md-nav__link">
    CSRF Protection
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#redirect-routes" title="Redirect Routes" class="md-nav__link">
    Redirect Routes
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#view-routes" title="View Routes" class="md-nav__link">
    View Routes
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#route-parameters" title="Route Parameters" class="md-nav__link">
    Route Parameters
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#required-parameters" title="Required Parameters" class="md-nav__link">
    Required Parameters
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#optional-parameters" title="Optional Parameters" class="md-nav__link">
    Optional Parameters
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#regular-expression-constraints" title="Regular Expression Constraints" class="md-nav__link">
    Regular Expression Constraints
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#global-constraints" title="Global Constraints" class="md-nav__link">
    Global Constraints
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#named-routes" title="Named Routes" class="md-nav__link">
    Named Routes
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#generating-urls-to-named-routes" title="Generating URLs To Named Routes" class="md-nav__link">
    Generating URLs To Named Routes
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#inspecting-the-current-route" title="Inspecting The Current Route" class="md-nav__link">
    Inspecting The Current Route
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#route-groups" title="Route Groups" class="md-nav__link">
    Route Groups
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#middleware" title="Middleware" class="md-nav__link">
    Middleware
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#namespaces" title="Namespaces" class="md-nav__link">
    Namespaces
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#sub-domain-routing" title="Sub-Domain Routing" class="md-nav__link">
    Sub-Domain Routing
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#route-prefixes" title="Route Prefixes" class="md-nav__link">
    Route Prefixes
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#route-name-prefixes" title="Route Name Prefixes" class="md-nav__link">
    Route Name Prefixes
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#route-model-binding" title="Route Model Binding" class="md-nav__link">
    Route Model Binding
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#implicit-binding" title="Implicit Binding" class="md-nav__link">
    Implicit Binding
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#customizing-the-key-name" title="Customizing The Key Name" class="md-nav__link">
    Customizing The Key Name
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#explicit-binding" title="Explicit Binding" class="md-nav__link">
    Explicit Binding
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#customizing-the-resolution-logic" title="Customizing The Resolution Logic" class="md-nav__link">
    Customizing The Resolution Logic
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#fallback-routes" title="Fallback Routes" class="md-nav__link">
    Fallback Routes
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#rate-limiting" title="Rate Limiting" class="md-nav__link">
    Rate Limiting
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#dynamic-rate-limiting" title="Dynamic Rate Limiting" class="md-nav__link">
    Dynamic Rate Limiting
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#form-method-spoofing" title="Form Method Spoofing" class="md-nav__link">
    Form Method Spoofing
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#accessing-the-current-route" title="Accessing The Current Route" class="md-nav__link">
    Accessing The Current Route
  </a>
  
</li>
      
      
      
      
      
    </ul>
  
</nav>
    
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
  <a href="#basic-routing" title="Basic Routing" class="md-nav__link">
    Basic Routing
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#the-default-route-files" title="The Default Route Files" class="md-nav__link">
    The Default Route Files
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#available-router-methods" title="Available Router Methods" class="md-nav__link">
    Available Router Methods
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#csrf-protection" title="CSRF Protection" class="md-nav__link">
    CSRF Protection
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#redirect-routes" title="Redirect Routes" class="md-nav__link">
    Redirect Routes
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#view-routes" title="View Routes" class="md-nav__link">
    View Routes
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#route-parameters" title="Route Parameters" class="md-nav__link">
    Route Parameters
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#required-parameters" title="Required Parameters" class="md-nav__link">
    Required Parameters
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#optional-parameters" title="Optional Parameters" class="md-nav__link">
    Optional Parameters
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#regular-expression-constraints" title="Regular Expression Constraints" class="md-nav__link">
    Regular Expression Constraints
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#global-constraints" title="Global Constraints" class="md-nav__link">
    Global Constraints
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#named-routes" title="Named Routes" class="md-nav__link">
    Named Routes
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#generating-urls-to-named-routes" title="Generating URLs To Named Routes" class="md-nav__link">
    Generating URLs To Named Routes
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#inspecting-the-current-route" title="Inspecting The Current Route" class="md-nav__link">
    Inspecting The Current Route
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#route-groups" title="Route Groups" class="md-nav__link">
    Route Groups
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#middleware" title="Middleware" class="md-nav__link">
    Middleware
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#namespaces" title="Namespaces" class="md-nav__link">
    Namespaces
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#sub-domain-routing" title="Sub-Domain Routing" class="md-nav__link">
    Sub-Domain Routing
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#route-prefixes" title="Route Prefixes" class="md-nav__link">
    Route Prefixes
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#route-name-prefixes" title="Route Name Prefixes" class="md-nav__link">
    Route Name Prefixes
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#route-model-binding" title="Route Model Binding" class="md-nav__link">
    Route Model Binding
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#implicit-binding" title="Implicit Binding" class="md-nav__link">
    Implicit Binding
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#customizing-the-key-name" title="Customizing The Key Name" class="md-nav__link">
    Customizing The Key Name
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#explicit-binding" title="Explicit Binding" class="md-nav__link">
    Explicit Binding
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#customizing-the-resolution-logic" title="Customizing The Resolution Logic" class="md-nav__link">
    Customizing The Resolution Logic
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#fallback-routes" title="Fallback Routes" class="md-nav__link">
    Fallback Routes
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#rate-limiting" title="Rate Limiting" class="md-nav__link">
    Rate Limiting
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#dynamic-rate-limiting" title="Dynamic Rate Limiting" class="md-nav__link">
    Dynamic Rate Limiting
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#form-method-spoofing" title="Form Method Spoofing" class="md-nav__link">
    Form Method Spoofing
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#accessing-the-current-route" title="Accessing The Current Route" class="md-nav__link">
    Accessing The Current Route
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
                  <a href="https://github.com/space-mvc/space-mvc/edit/master/docs/routing.md" title="Edit this page" class="md-icon md-content__icon">&#xE3C9;</a>
                 -->

                
                <h1 id="routing">Routing</h1>
<p><a name="basic-routing"></a></p>
<h2 id="basic-routing"><a href="#basic-routing">Basic Routing</a></h2>
<p>The most basic Laravel routes accept a URI and a Closure, providing a very
        simple and expressive method of defining routes:</p>
<pre><code class="php">&lt;?php
    return [

        // introduction
        [
            'uri' =&gt; '/docs/introduction/what-is-space',
            'controller' =&gt; 'Docs\IntroductionController',
            'action' =&gt; 'whatIsSpace',
        ],

        // getting started
        [
            'uri' =&gt; '/docs/getting-started/installation',
            'controller' =&gt; 'Docs\IndexController',
            'action' =&gt; 'installation',
        ],

</code></pre>

<pre><code class="php">Route::get('foo', function () {
    return 'Hello World';
});
</code></pre>

<h4 id="the-default-route-files">The Default Route Files</h4>
<p>All Laravel routes are defined in your route files, which are located in the routes directory. These files are
        automatically loaded by the framework. The  routes/web.php file defines routes that are for your web interface.
        These routes are assigned the web middleware group, which provides features like session state and CSRF protection.
        The routes in routes/api.php are stateless and are assigned the api middleware group.
For most applications, you will begin by defining routes in your routes/web.php file. The routes defined in
        routes/web.php may be accessed by entering the defined route's URL in your browser. For example, you may access
        the following route by navigating to http://your-app.test/user in your browser:</p>
<pre><code class="php">Route::get('/user', 'UserController@index');
</code></pre>

<p>Routes defined in the routes/api.php file are nested within a route group by the  RouteServiceProvider.
        Within this group, the /api URI prefix is automatically applied so you do not need to manually apply it to
        every route in the file. You may modify the prefix and other route group options by modifying your
        RouteServiceProvider class.</p>
<h4 id="available-router-methods">Available Router Methods</h4>
<p>The router allows you to register routes that respond to any HTTP verb:</p>
<pre><code class="php">Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);
</code></pre>

<p>Sometimes you may need to register a route that responds to multiple HTTP verbs. You may do so using the match method. Or, you may even register a route that responds to all HTTP verbs using the any method:</p>
<pre><code class="php">Route::match(['get', 'post'], '/', function () {
    //
});

Route::any('foo', function () {
    //
});
</code></pre>

<h4 id="csrf-protection">CSRF Protection</h4>
<p>Any HTML forms pointing to POST, PUT, or DELETE routes that are defined in the web routes file should include a CSRF token field. Otherwise, the request will be rejected. You can read more about CSRF protection in the <a href="/docs/5.7/csrf">CSRF documentation</a>:</p>
<pre><code class="php">&lt;form method=&quot;POST&quot; action=&quot;/profile&quot;&gt;
    @csrf
    ...
&lt;/form&gt;
</code></pre>

<p><a name="redirect-routes"></a></p>
<h3 id="redirect-routes">Redirect Routes</h3>
<p>If you are defining a route that redirects to another URI, you may use the Route::redirect method. This method provides a convenient shortcut so that you do not have to define a full route or controller for performing a simple redirect:</p>
<pre><code class="php">Route::redirect('/here', '/there', 301);
</code></pre>

<p><a name="view-routes"></a></p>
<h3 id="view-routes">View Routes</h3>
<p>If your route only needs to return a view, you may use the Route::view method. Like the redirect method, this method provides a simple shortcut so that you do not have to define a full route or controller. The view method accepts a URI as its first argument and a view name as its second argument. In addition, you may provide an array of data to pass to the view as an optional third argument:</p>
<pre><code class="php">Route::view('/welcome', 'welcome');

Route::view('/welcome', 'welcome', ['name' =&gt;; 'Taylor']);
</code></pre>

<p><a name="route-parameters"></a></p>
<h2 id="route-parameters"><a href="#route-parameters">Route Parameters</a></h2>
<p><a name="required-parameters"></a></p>
<h3 id="required-parameters">Required Parameters</h3>
<p>Of course, sometimes you will need to capture segments of the URI within your route. For example, you may need to capture a user's ID from the URL. You may do so by defining route parameters:</p>
<pre><code class="php">Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});
</code></pre>

<p>You may define as many route parameters as required by your route:</p>
<pre><code class="php">Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    //
});
</code></pre>

<p>Route parameters are always encased within {} braces and should consist of alphabetic characters, and may not contain a - character. Instead of using the - character, use an underscore (_). Route parameters are injected into route callbacks / controllers based on their order - the names of the callback / controller arguments do not matter.
<a name="parameters-optional-parameters"></a></p>
<h3 id="optional-parameters">Optional Parameters</h3>
<p>Occasionally you may need to specify a route parameter, but make the presence of that route parameter optional. You may do so by placing a ? mark after the parameter name. Make sure to give the route's corresponding variable a default value:</p>
<pre><code class="php">Route::get('user/{name?}', function ($name = null) {
    return $name;
});

Route::get('user/{name?}', function ($name = 'John') {
    return $name;
});
</code></pre>

<p><a name="parameters-regular-expression-constraints"></a></p>
<h3 id="regular-expression-constraints">Regular Expression Constraints</h3>
<p>You may constrain the format of your route parameters using the where method on a route instance. The where method accepts the name of the parameter and a regular expression defining how the parameter should be constrained:</p>
<pre><code class="php">Route::get('user/{name}', function ($name) {
    //
})-&gt;;where('name', '[A-Za-z]+');

Route::get('user/{id}', function ($id) {
    //
})-&gt;;where('id', '[0-9]+');

Route::get('user/{id}/{name}', function ($id, $name) {
    //
})-&gt;;where(['id' =&gt;; '[0-9]+', 'name' =&gt;; '[a-z]+']);
</code></pre>

<p><a name="parameters-global-constraints"></a></p>
<h4 id="global-constraints">Global Constraints</h4>
<p>If you would like a route parameter to always be constrained by a given regular expression, you may use the pattern method. You should define these patterns in the boot method of your RouteServiceProvider:</p>
<pre><code class="php">/**
 * Define your route model bindings, pattern filters, etc.
 *
 * @return void
 */
public function boot()
{
    Route::pattern('id', '[0-9]+');

    parent::boot();
}
</code></pre>

<p>Once the pattern has been defined, it is automatically applied to all routes using that parameter name:</p>
<pre><code class="php">Route::get('user/{id}', function ($id) {
    // Only executed if {id} is numeric...
});
</code></pre>

<p><a name="named-routes"></a></p>
<h2 id="named-routes"><a href="#named-routes">Named Routes</a></h2>
<p>Named routes allow the convenient generation of URLs or redirects for specific routes. You may specify a name for a route by chaining the name method onto the route definition:</p>
<pre><code class="php">Route::get('user/profile', function () {
    //
})-&gt;;name('profile');
</code></pre>

<p>You may also specify route names for controller actions:</p>
<pre><code class="php">Route::get('user/profile', 'UserProfileController@show')-&gt;;name('profile');
</code></pre>

<h4 id="generating-urls-to-named-routes">Generating URLs To Named Routes</h4>
<p>Once you have assigned a name to a given route, you may use the route's name when generating URLs or redirects via the global route function:</p>
<pre><code class="php">// Generating URLs...
$url = route('profile');

// Generating Redirects...
return redirect()-&gt;;route('profile');
</code></pre>

<p>If the named route defines parameters, you may pass the parameters as the second argument to the route function. The given parameters will automatically be inserted into the URL in their correct positions:</p>
<pre><code class="php">Route::get('user/{id}/profile', function ($id) {
    //
})-&gt;;name('profile');

$url = route('profile', ['id' =&gt;; 1]);
</code></pre>

<h4 id="inspecting-the-current-route">Inspecting The Current Route</h4>
<p>If you would like to determine if the current request was routed to a given named route, you may use the named method on a Route instance. For example, you may check the current route name from a route middleware:</p>
<pre><code class="php">/**
 * Handle an incoming request.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \Closure  $next
 * @return mixed
 */
public function handle($request, Closure $next)
{
    if ($request-&gt;;route()-&gt;;named('profile')) {
        //
    }

    return $next($request);
}
</code></pre>

<p><a name="route-groups"></a></p>
<h2 id="route-groups"><a href="#route-groups">Route Groups</a></h2>
<p>Route groups allow you to share route attributes, such as middleware or namespaces, across a large number of routes without needing to define those attributes on each individual route. Shared attributes are specified in an array format as the first parameter to the Route::group method.
<a name="route-group-middleware"></a></p>
<h3 id="middleware">Middleware</h3>
<p>To assign middleware to all routes within a group, you may use the middleware method before defining the group. Middleware are executed in the order they are listed in the array:</p>
<pre><code class="php">Route::middleware(['first', 'second'])-&gt;;group(function () {
    Route::get('/', function () {
        // Uses first &amp;amp; second Middleware
    });

    Route::get('user/profile', function () {
        // Uses first &amp;amp; second Middleware
    });
});
</code></pre>

<p><a name="route-group-namespaces"></a></p>
<h3 id="namespaces">Namespaces</h3>
<p>Another common use-case for route groups is assigning the same PHP namespace to a group of controllers using the namespace method:</p>
<pre><code class="php">Route::namespace('Admin')-&gt;;group(function () {
    // Controllers Within The &quot;App\Http\Controllers\Admin&quot; Namespace
});
</code></pre>

<p>Remember, by default, the RouteServiceProvider includes your route files within a namespace group, allowing you to register controller routes without specifying the full App\Http\Controllers namespace prefix. So, you only need to specify the portion of the namespace that comes after the base App\Http\Controllers namespace.
<a name="route-group-sub-domain-routing"></a></p>
<h3 id="sub-domain-routing">Sub-Domain Routing</h3>
<p>Route groups may also be used to handle sub-domain routing. Sub-domains may be assigned route parameters just like route URIs, allowing you to capture a portion of the sub-domain for usage in your route or controller. The sub-domain may be specified by calling the domain method before defining the group:</p>
<pre><code class="php">Route::domain('{account}.myapp.com')-&gt;;group(function () {
    Route::get('user/{id}', function ($account, $id) {
        //
    });
});
</code></pre>

<p><a name="route-group-prefixes"></a></p>
<h3 id="route-prefixes">Route Prefixes</h3>
<p>The prefix method may be used to prefix each route in the group with a given URI. For example, you may want to prefix all route URIs within the group with admin:</p>
<pre><code class="php">Route::prefix('admin')-&gt;;group(function () {
    Route::get('users', function () {
        // Matches The &quot;/admin/users&quot; URL
    });
});
</code></pre>

<p><a name="route-group-name-prefixes"></a></p>
<h3 id="route-name-prefixes">Route Name Prefixes</h3>
<p>The name method may be used to prefix each route name in the group with a given string. For example, you may want to prefix all of the grouped route's names with admin. The given string is prefixed to the route name exactly as it is specified, so we will be sure to provide the trailing . character in the prefix:</p>
<pre><code class="php">Route::name('admin.')-&gt;;group(function () {
    Route::get('users', function () {
        // Route assigned name &quot;admin.users&quot;...
    })-&gt;;name('users');
});
</code></pre>

<p><a name="route-model-binding"></a></p>
<h2 id="route-model-binding"><a href="#route-model-binding">Route Model Binding</a></h2>
<p>When injecting a model ID to a route or controller action, you will often query to retrieve the model that corresponds to that ID. Laravel route model binding provides a convenient way to automatically inject the model instances directly into your routes. For example, instead of injecting a user's ID, you can inject the entire User model instance that matches the given ID.
<a name="implicit-binding"></a></p>
<h3 id="implicit-binding">Implicit Binding</h3>
<p>Laravel automatically resolves Eloquent models defined in routes or controller actions whose type-hinted variable names match a route segment name. For example:</p>
<pre><code class="php">Route::get('api/users/{user}', function (App\User $user) {
    return $user-&gt;;email;
});
</code></pre>

<p>Since the $user variable is type-hinted as the App\User Eloquent model and the variable name matches the {user} URI segment, Laravel will automatically inject the model instance that has an ID matching the corresponding value from the request URI. If a matching model instance is not found in the database, a 404 HTTP response will automatically be generated.</p>
<h4 id="customizing-the-key-name">Customizing The Key Name</h4>
<p>If you would like model binding to use a database column other than id when retrieving a given model class, you may override the getRouteKeyName method on the Eloquent model:</p>
<pre><code class="php">/**
 * Get the route key for the model.
 *
 * @return string
 */
public function getRouteKeyName()
{
    return 'slug';
}
</code></pre>

<p><a name="explicit-binding"></a></p>
<h3 id="explicit-binding">Explicit Binding</h3>
<p>To register an explicit binding, use the router's model method to specify the class for a given parameter. You should define your explicit model bindings in the boot method of the RouteServiceProvider class:</p>
<pre><code class="php">public function boot()
{
    parent::boot();

    Route::model('user', App\User::class);
}
</code></pre>

<p>Next, define a route that contains a {user} parameter:</p>
<pre><code class="php">Route::get('profile/{user}', function (App\User $user) {
    //
});
</code></pre>

<p>Since we have bound all {user} parameters to the App\User model, a User instance will be injected into the route. So, for example, a request to profile/1 will inject the User instance from the database which has an ID of 1.
If a matching model instance is not found in the database, a 404 HTTP response will be automatically generated.</p>
<h4 id="customizing-the-resolution-logic">Customizing The Resolution Logic</h4>
<p>If you wish to use your own resolution logic, you may use the Route::bind method. The Closure you pass to the bind method will receive the value of the URI segment and should return the instance of the class that should be injected into the route:</p>
<pre><code class="php">public function boot()
{
    parent::boot();

    Route::bind('user', function ($value) {
        return App\User::where('name', $value)-&gt;;first() ?? abort(404);
    });
}
</code></pre>

<p><a name="fallback-routes"></a></p>
<h2 id="fallback-routes"><a href="#fallback-routes">Fallback Routes</a></h2>
<p>Using the Route::fallback method, you may define a route that will be executed when no other route matches the incoming request. Typically, unhandled requests will automatically render a "404" page via your application's exception handler. However, since you may define the fallback route within your routes/web.php file, all middleware in the web middleware group will apply to the route. Of course, you are free to add additional middleware to this route as needed:</p>
<pre><code class="php">Route::fallback(function () {
    //
});
</code></pre>

<p><a name="rate-limiting"></a></p>
<h2 id="rate-limiting"><a href="#rate-limiting">Rate Limiting</a></h2>
<p>Laravel includes a <a href="/docs/5.7/middleware">middleware</a> to rate limit access to routes within your application. To get started, assign the throttle middleware to a route or a group of routes. The throttle middleware accepts two parameters that determine the maximum number of requests that can be made in a given number of minutes. For example, let's specify that an authenticated user may access the following group of routes 60 times per minute:</p>
<pre><code class="php">Route::middleware('auth:api', 'throttle:60,1')-&gt;;group(function () {
    Route::get('/user', function () {
        //
    });
});
</code></pre>

<h4 id="dynamic-rate-limiting">Dynamic Rate Limiting</h4>
<p>You may specify a dynamic request maximum based on an attribute of the authenticated User model. For example, if your User model contains a rate_limit attribute, you may pass the name of the attribute to the throttle middleware so that it is used to calculate the maximum request count:</p>
<pre><code class="php">Route::middleware('auth:api', 'throttle:rate_limit,1')-&gt;;group(function () {
    Route::get('/user', function () {
        //
    });
});
</code></pre>

<p><a name="form-method-spoofing"></a></p>
<h2 id="form-method-spoofing"><a href="#form-method-spoofing">Form Method Spoofing</a></h2>
<p>HTML forms do not support PUT, PATCH or DELETE actions. So, when defining PUT, PATCH or DELETE routes that are called from an HTML form, you will need to add a hidden _method field to the form. The value sent with the _method field will be used as the HTTP request method:</p>
<pre><code class="php">&lt;form action=&quot;/foo/bar&quot; method=&quot;POST&quot;&gt;;
    &lt;input type=&quot;hidden&quot; name=&quot;_method&quot; value=&quot;PUT&quot;&gt;;
    &lt;input type=&quot;hidden&quot; name=&quot;_token&quot; value=&quot;{{ csrf_token() }}&quot;&gt;;
&lt;/form&gt;;
</code></pre>

<p>You may use the @method Blade directive to generate the _method input:</p>
<pre><code class="php">&lt;form action=&quot;/foo/bar&quot; method=&quot;POST&quot;&gt;;
    @method('PUT')
    @csrf
&lt;/form&gt;;
</code></pre>

<p><a name="accessing-the-current-route"></a></p>
<h2 id="accessing-the-current-route"><a href="#accessing-the-current-route">Accessing The Current Route</a></h2>
<p>You may use the current, currentRouteName, and currentRouteAction methods on the Route facade to access information about the route handling the incoming request:</p>
<pre><code class="php">$route = Route::current();

$name = Route::currentRouteName();

$action = Route::currentRouteAction();
</code></pre>

<p>Refer to the API documentation for both the <a href="https://laravel.com/api/5.7/Illuminate/Routing/Router.html">underlying class of the Route facade</a> and <a href="https://laravel.com/api/5.7/Illuminate/Routing/Route.html">Route instance</a> to review all accessible methods.</p>
                
                  
                
              
              
                


              
            </article>
          </div>
        </div>
      </main>

      <div style="height:50px;"></div>

      
        
<footer class="md-footer">
  
    <div class="md-footer-nav">
      <nav class="md-footer-nav__inner md-grid">
        
          <a href="../directory-structure/" title="Directory Structure" class="md-flex md-footer-nav__link md-footer-nav__link--prev" rel="prev">
            <div class="md-flex__cell md-flex__cell--shrink">
              <i class="md-icon md-icon--arrow-back md-footer-nav__button"></i>
            </div>
            <div class="md-flex__cell md-flex__cell--stretch md-footer-nav__title">
              <span class="md-flex__ellipsis">
                <span class="md-footer-nav__direction">
                  Previous
                </span>
                Directory Structure
              </span>
            </div>
          </a>
        
        
          <a href="../controllers/" title="Controllers" class="md-flex md-footer-nav__link md-footer-nav__link--next" rel="next">
            <div class="md-flex__cell md-flex__cell--stretch md-footer-nav__title">
              <span class="md-flex__ellipsis">
                <span class="md-footer-nav__direction">
                  Next
                </span>
                Controllers
              </span>
            </div>
            <div class="md-flex__cell md-flex__cell--shrink">
              <i class="md-icon md-icon--arrow-forward md-footer-nav__button"></i>
            </div>
          </a>
        
      </nav>
    </div>
  

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
