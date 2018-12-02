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
    
    
      
        <title>Requests - Space MVC Framework</title>
      
    
    
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
    
      <a href="#http-requests" tabindex="1" class="md-skip">
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
                Requests
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

        
          
          
          

  


  <li class="md-nav__item md-nav__item--active">
    
    <input class="md-toggle md-nav__toggle" data-md-toggle="toc" type="checkbox" id="__toc">
    
      
    
    
      <label class="md-nav__link md-nav__link--active" for="__toc">
        Requests
      </label>
    
    <a href="./" title="Requests" class="md-nav__link md-nav__link--active">
      Requests
    </a>
    
      
<nav class="md-nav md-nav--secondary">
  
  
    
  
  
    <label class="md-nav__title" for="__toc">Table of contents</label>
    <ul class="md-nav__list" data-md-scrollfix>
      
        <li class="md-nav__item">
  <a href="#accessing-the-request" title="Accessing The Request" class="md-nav__link">
    Accessing The Request
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#dependency-injection-route-parameters" title="Dependency Injection &amp; Route Parameters" class="md-nav__link">
    Dependency Injection &amp; Route Parameters
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#accessing-the-request-via-route-closures" title="Accessing The Request Via Route Closures" class="md-nav__link">
    Accessing The Request Via Route Closures
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#request-path-method" title="Request Path &amp; Method" class="md-nav__link">
    Request Path &amp; Method
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#retrieving-the-request-path" title="Retrieving The Request Path" class="md-nav__link">
    Retrieving The Request Path
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#retrieving-the-request-url" title="Retrieving The Request URL" class="md-nav__link">
    Retrieving The Request URL
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#retrieving-the-request-method" title="Retrieving The Request Method" class="md-nav__link">
    Retrieving The Request Method
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#psr-7-requests" title="PSR-7 Requests" class="md-nav__link">
    PSR-7 Requests
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#input-trimming-normalization" title="Input Trimming &amp; Normalization" class="md-nav__link">
    Input Trimming &amp; Normalization
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#retrieving-input" title="Retrieving Input" class="md-nav__link">
    Retrieving Input
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#retrieving-all-input-data" title="Retrieving All Input Data" class="md-nav__link">
    Retrieving All Input Data
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#retrieving-an-input-value" title="Retrieving An Input Value" class="md-nav__link">
    Retrieving An Input Value
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#retrieving-input-from-the-query-string" title="Retrieving Input From The Query String" class="md-nav__link">
    Retrieving Input From The Query String
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#retrieving-input-via-dynamic-properties" title="Retrieving Input Via Dynamic Properties" class="md-nav__link">
    Retrieving Input Via Dynamic Properties
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#retrieving-json-input-values" title="Retrieving JSON Input Values" class="md-nav__link">
    Retrieving JSON Input Values
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#retrieving-a-portion-of-the-input-data" title="Retrieving A Portion Of The Input Data" class="md-nav__link">
    Retrieving A Portion Of The Input Data
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#determining-if-an-input-value-is-present" title="Determining If An Input Value Is Present" class="md-nav__link">
    Determining If An Input Value Is Present
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#old-input" title="Old Input" class="md-nav__link">
    Old Input
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#flashing-input-to-the-session" title="Flashing Input To The Session" class="md-nav__link">
    Flashing Input To The Session
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#flashing-input-then-redirecting" title="Flashing Input Then Redirecting" class="md-nav__link">
    Flashing Input Then Redirecting
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#retrieving-old-input" title="Retrieving Old Input" class="md-nav__link">
    Retrieving Old Input
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#cookies" title="Cookies" class="md-nav__link">
    Cookies
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#retrieving-cookies-from-requests" title="Retrieving Cookies From Requests" class="md-nav__link">
    Retrieving Cookies From Requests
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#attaching-cookies-to-responses" title="Attaching Cookies To Responses" class="md-nav__link">
    Attaching Cookies To Responses
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#generating-cookie-instances" title="Generating Cookie Instances" class="md-nav__link">
    Generating Cookie Instances
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#files" title="Files" class="md-nav__link">
    Files
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#retrieving-uploaded-files" title="Retrieving Uploaded Files" class="md-nav__link">
    Retrieving Uploaded Files
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#validating-successful-uploads" title="Validating Successful Uploads" class="md-nav__link">
    Validating Successful Uploads
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#file-paths-extensions" title="File Paths &amp; Extensions" class="md-nav__link">
    File Paths &amp; Extensions
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#other-file-methods" title="Other File Methods" class="md-nav__link">
    Other File Methods
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#storing-uploaded-files" title="Storing Uploaded Files" class="md-nav__link">
    Storing Uploaded Files
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#configuring-trusted-proxies" title="Configuring Trusted Proxies" class="md-nav__link">
    Configuring Trusted Proxies
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#trusting-all-proxies" title="Trusting All Proxies" class="md-nav__link">
    Trusting All Proxies
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
      
      
      
      
    </ul>
  
</nav>
    
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
  <a href="#accessing-the-request" title="Accessing The Request" class="md-nav__link">
    Accessing The Request
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#dependency-injection-route-parameters" title="Dependency Injection &amp; Route Parameters" class="md-nav__link">
    Dependency Injection &amp; Route Parameters
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#accessing-the-request-via-route-closures" title="Accessing The Request Via Route Closures" class="md-nav__link">
    Accessing The Request Via Route Closures
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#request-path-method" title="Request Path &amp; Method" class="md-nav__link">
    Request Path &amp; Method
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#retrieving-the-request-path" title="Retrieving The Request Path" class="md-nav__link">
    Retrieving The Request Path
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#retrieving-the-request-url" title="Retrieving The Request URL" class="md-nav__link">
    Retrieving The Request URL
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#retrieving-the-request-method" title="Retrieving The Request Method" class="md-nav__link">
    Retrieving The Request Method
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#psr-7-requests" title="PSR-7 Requests" class="md-nav__link">
    PSR-7 Requests
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#input-trimming-normalization" title="Input Trimming &amp; Normalization" class="md-nav__link">
    Input Trimming &amp; Normalization
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#retrieving-input" title="Retrieving Input" class="md-nav__link">
    Retrieving Input
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#retrieving-all-input-data" title="Retrieving All Input Data" class="md-nav__link">
    Retrieving All Input Data
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#retrieving-an-input-value" title="Retrieving An Input Value" class="md-nav__link">
    Retrieving An Input Value
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#retrieving-input-from-the-query-string" title="Retrieving Input From The Query String" class="md-nav__link">
    Retrieving Input From The Query String
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#retrieving-input-via-dynamic-properties" title="Retrieving Input Via Dynamic Properties" class="md-nav__link">
    Retrieving Input Via Dynamic Properties
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#retrieving-json-input-values" title="Retrieving JSON Input Values" class="md-nav__link">
    Retrieving JSON Input Values
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#retrieving-a-portion-of-the-input-data" title="Retrieving A Portion Of The Input Data" class="md-nav__link">
    Retrieving A Portion Of The Input Data
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#determining-if-an-input-value-is-present" title="Determining If An Input Value Is Present" class="md-nav__link">
    Determining If An Input Value Is Present
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#old-input" title="Old Input" class="md-nav__link">
    Old Input
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#flashing-input-to-the-session" title="Flashing Input To The Session" class="md-nav__link">
    Flashing Input To The Session
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#flashing-input-then-redirecting" title="Flashing Input Then Redirecting" class="md-nav__link">
    Flashing Input Then Redirecting
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#retrieving-old-input" title="Retrieving Old Input" class="md-nav__link">
    Retrieving Old Input
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#cookies" title="Cookies" class="md-nav__link">
    Cookies
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#retrieving-cookies-from-requests" title="Retrieving Cookies From Requests" class="md-nav__link">
    Retrieving Cookies From Requests
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#attaching-cookies-to-responses" title="Attaching Cookies To Responses" class="md-nav__link">
    Attaching Cookies To Responses
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#generating-cookie-instances" title="Generating Cookie Instances" class="md-nav__link">
    Generating Cookie Instances
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#files" title="Files" class="md-nav__link">
    Files
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#retrieving-uploaded-files" title="Retrieving Uploaded Files" class="md-nav__link">
    Retrieving Uploaded Files
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#validating-successful-uploads" title="Validating Successful Uploads" class="md-nav__link">
    Validating Successful Uploads
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#file-paths-extensions" title="File Paths &amp; Extensions" class="md-nav__link">
    File Paths &amp; Extensions
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#other-file-methods" title="Other File Methods" class="md-nav__link">
    Other File Methods
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#storing-uploaded-files" title="Storing Uploaded Files" class="md-nav__link">
    Storing Uploaded Files
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#configuring-trusted-proxies" title="Configuring Trusted Proxies" class="md-nav__link">
    Configuring Trusted Proxies
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#trusting-all-proxies" title="Trusting All Proxies" class="md-nav__link">
    Trusting All Proxies
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
            
          
          <div class="md-content">
            <article class="md-content__inner md-typeset">
              

              <!-- 
                  <a href="https://github.com/space-mvc/space-mvc/edit/master/docs/requests.md" title="Edit this page" class="md-icon md-content__icon">&#xE3C9;</a>
                 -->

                
                <h1 id="http-requests">HTTP Requests</h1>
<h4 id="accessing-the-request">Accessing The Request</h4>
<p>To obtain an instance of the current HTTP request via dependency injection, you should type-hint the Illuminate\Http\Request class on your controller method. The incoming request instance will automatically be injected by the <a href="/docs/5.7/container">service container</a>:</p>
<pre><code class="php">&lt;?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $name = $request-&gt;input('name');

        //
    }
}
</code></pre>

<h4 id="dependency-injection-route-parameters">Dependency Injection &amp; Route Parameters</h4>
<p>If your controller method is also expecting input from a route parameter you should list your route parameters after your other dependencies. For example, if your route is defined like so:</p>
<pre><code class="php">Route::put('user/{id}', 'UserController@update');
</code></pre>

<p>You may still type-hint the Illuminate\Http\Request and access your route parameter id by defining your controller method as follows:</p>
<pre><code class="php">&lt;?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Update the specified user.
     *
     * @param  Request  $request
     * @param  string  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }
}
</code></pre>

<h4 id="accessing-the-request-via-route-closures">Accessing The Request Via Route Closures</h4>
<p>You may also type-hint the Illuminate\Http\Request class on a route Closure. The service container will automatically inject the incoming request into the Closure when it is executed:</p>
<pre><code class="php">use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    //
});
</code></pre>

<p><a name="request-path-and-method"></a></p>
<h3 id="request-path-method">Request Path &amp; Method</h3>
<p>The Illuminate\Http\Request instance provides a variety of methods for examining the HTTP request for your application and extends the Symfony\Component\HttpFoundation\Request class. We will discuss a few of the most important methods below.</p>
<h4 id="retrieving-the-request-path">Retrieving The Request Path</h4>
<p>The path method returns the request's path information. So, if the incoming request is targeted at http://domain.com/foo/bar, the path method will return foo/bar:</p>
<pre><code class="php">$uri = $request-&gt;path();
</code></pre>

<p>The is method allows you to verify that the incoming request path matches a given pattern. You may use the * character as a wildcard when utilizing this method:</p>
<pre><code class="php">if ($request-&gt;is('admin/*')) {
    //
}
</code></pre>

<h4 id="retrieving-the-request-url">Retrieving The Request URL</h4>
<p>To retrieve the full URL for the incoming request you may use the url or fullUrl methods. The url method will return the URL without the query string, while the fullUrl method includes the query string:</p>
<pre><code class="php">// Without Query String...
$url = $request-&gt;url();

// With Query String...
$url = $request-&gt;fullUrl();
</code></pre>

<h4 id="retrieving-the-request-method">Retrieving The Request Method</h4>
<p>The method method will return the HTTP verb for the request. You may use the isMethod method to verify that the HTTP verb matches a given string:</p>
<pre><code class="php">$method = $request-&gt;method();

if ($request-&gt;isMethod('post')) {
    //
}
</code></pre>

<p><a name="psr7-requests"></a></p>
<h3 id="psr-7-requests">PSR-7 Requests</h3>
<p>The <a href="http://www.php-fig.org/psr/psr-7/">PSR-7 standard</a> specifies interfaces for HTTP messages, including requests and responses. If you would like to obtain an instance of a PSR-7 request instead of a Space MVC request, you will first need to install a few libraries. Space MVC uses the <em>Symfony HTTP Message Bridge</em> component to convert typical Space MVC requests and responses into PSR-7 compatible implementations:</p>
<pre><code class="php">composer require symfony/psr-http-message-bridge
composer require zendframework/zend-diactoros
</code></pre>

<p>Once you have installed these libraries, you may obtain a PSR-7 request by type-hinting the request interface on your route Closure or controller method:</p>
<pre><code class="php">use Psr\Http\Message\ServerRequestInterface;

Route::get('/', function (ServerRequestInterface $request) {
    //
});
</code></pre>

<p>If you return a PSR-7 response instance from a route or controller, it will automatically be converted back to a Space MVC response instance and be displayed by the framework.</p>
<p><a name="input-trimming-and-normalization"></a></p>
<h2 id="input-trimming-normalization"><a href="#input-trimming-and-normalization">Input Trimming &amp; Normalization</a></h2>
<p>By default, Space MVC includes the TrimStrings and ConvertEmptyStringsToNull middleware in your application's global middleware stack. These middleware are listed in the stack by the App\Http\Kernel class. These middleware will automatically trim all incoming string fields on the request, as well as convert any empty string fields to null. This allows you to not have to worry about these normalization concerns in your routes and controllers.
If you would like to disable this behavior, you may remove the two middleware from your application's middleware stack by removing them from the $middleware property of your App\Http\Kernel class.
<a name="retrieving-input"></a></p>
<h2 id="retrieving-input"><a href="#retrieving-input">Retrieving Input</a></h2>
<h4 id="retrieving-all-input-data">Retrieving All Input Data</h4>
<p>You may also retrieve all of the input data as an array using the all method:</p>
<pre><code class="php">$input = $request-&gt;all();
</code></pre>

<h4 id="retrieving-an-input-value">Retrieving An Input Value</h4>
<p>Using a few simple methods, you may access all of the user input from your Illuminate\Http\Request instance without worrying about which HTTP verb was used for the request. Regardless of the HTTP verb, the input method may be used to retrieve user input:</p>
<pre><code class="php">$name = $request-&gt;input('name');
</code></pre>

<p>You may pass a default value as the second argument to the input method. This value will be returned if the requested input value is not present on the request:</p>
<pre><code class="php">$name = $request-&gt;input('name', 'Sally');
</code></pre>

<p>When working with forms that contain array inputs, use "dot" notation to access the arrays:</p>
<pre><code class="php">$name = $request-&gt;input('products.0.name');

$names = $request-&gt;input('products.*.name');
</code></pre>

<h4 id="retrieving-input-from-the-query-string">Retrieving Input From The Query String</h4>
<p>While the input method retrieves values from entire request payload (including the query string), the query method will only retrieve values from the query string:</p>
<pre><code class="php">$name = $request-&gt;query('name');
</code></pre>

<p>If the requested query string value data is not present, the second argument to this method will be returned:</p>
<pre><code class="php">$name = $request-&gt;query('name', 'Helen');
</code></pre>

<p>You may call the query method without any arguments in order to retrieve all of the query string values as an associative array:</p>
<pre><code class="php">$query = $request-&gt;query();
</code></pre>

<h4 id="retrieving-input-via-dynamic-properties">Retrieving Input Via Dynamic Properties</h4>
<p>You may also access user input using dynamic properties on the Illuminate\Http\Request instance. For example, if one of your application's forms contains a name field, you may access the value of the field like so:</p>
<pre><code class="php">$name = $request-&gt;name;
</code></pre>

<p>When using dynamic properties, Space MVC will first look for the parameter's value in the request payload. If it is not present, Space MVC will search for the field in the route parameters.</p>
<h4 id="retrieving-json-input-values">Retrieving JSON Input Values</h4>
<p>When sending JSON requests to your application, you may access the JSON data via the input method as long as the Content-Type header of the request is properly set to application/json. You may even use "dot" syntax to dig into JSON arrays:</p>
<pre><code class="php">$name = $request-&gt;input('user.name');
</code></pre>

<h4 id="retrieving-a-portion-of-the-input-data">Retrieving A Portion Of The Input Data</h4>
<p>If you need to retrieve a subset of the input data, you may use the only and except methods. Both of these methods accept a single array or a dynamic list of arguments:</p>
<pre><code class="php">$input = $request-&gt;only(['username', 'password']);

$input = $request-&gt;only('username', 'password');

$input = $request-&gt;except(['credit_card']);

$input = $request-&gt;except('credit_card');
</code></pre>

<p>The only method returns all of the key / value pairs that you request; however, it will not return key / value pairs that are not present on the request.</p>
<h4 id="determining-if-an-input-value-is-present">Determining If An Input Value Is Present</h4>
<p>You should use the has method to determine if a value is present on the request. The has method returns true if the value is present on the request:</p>
<pre><code class="php">if ($request-&gt;has('name')) {
    //
}
</code></pre>

<p>When given an array, the has method will determine if all of the specified values are present:</p>
<pre><code class="php">if ($request-&gt;has(['name', 'email'])) {
    //
}
</code></pre>

<p>If you would like to determine if a value is present on the request and is not empty, you may use the filled method:</p>
<pre><code class="php">if ($request-&gt;filled('name')) {
    //
}
</code></pre>

<p><a name="old-input"></a></p>
<h3 id="old-input">Old Input</h3>
<p>Space MVC allows you to keep input from one request during the next request. This feature is particularly useful for re-populating forms after detecting validation errors. However, if you are using Space MVC's included <a href="/docs/5.7/validation">validation features</a>, it is unlikely you will need to manually use these methods, as some of Space MVC's built-in validation facilities will call them automatically.</p>
<h4 id="flashing-input-to-the-session">Flashing Input To The Session</h4>
<p>The flash method on the Illuminate\Http\Request class will flash the current input to the <a href="/docs/5.7/session">session</a> so that it is available during the user's next request to the application:</p>
<pre><code class="php">$request-&gt;flash();
</code></pre>

<p>You may also use the flashOnly and flashExcept methods to flash a subset of the request data to the session. These methods are useful for keeping sensitive information such as passwords out of the session:</p>
<pre><code class="php">$request-&gt;flashOnly(['username', 'email']);

$request-&gt;flashExcept('password');
</code></pre>

<h4 id="flashing-input-then-redirecting">Flashing Input Then Redirecting</h4>
<p>Since you often will want to flash input to the session and then redirect to the previous page, you may easily chain input flashing onto a redirect using the withInput method:</p>
<pre><code class="php">return redirect('form')-&gt;withInput();

return redirect('form')-&gt;withInput(
    $request-&gt;except('password')
);
</code></pre>

<h4 id="retrieving-old-input">Retrieving Old Input</h4>
<p>To retrieve flashed input from the previous request, use the old method on the Request instance. The old method will pull the previously flashed input data from the <a href="/docs/5.7/session">session</a>:</p>
<pre><code class="php">$username = $request-&gt;old('username');
</code></pre>

<p>Space MVC also provides a global old helper. If you are displaying old input within a <a href="/docs/5.7/blade">Blade template</a>, it is more convenient to use the old helper. If no old input exists for the given field, null will be returned:</p>
<pre><code class="php">&lt;input type=&quot;text&quot; name=&quot;username&quot; value=&quot;{{ old('username') }}&quot;&gt;
</code></pre>

<p><a name="cookies"></a></p>
<h3 id="cookies">Cookies</h3>
<h4 id="retrieving-cookies-from-requests">Retrieving Cookies From Requests</h4>
<p>All cookies created by the Space MVC framework are encrypted and signed with an authentication code, meaning they will be considered invalid if they have been changed by the client. To retrieve a cookie value from the request, use the cookie method on a Illuminate\Http\Request instance:</p>
<pre><code class="php">$value = $request-&gt;cookie('name');
</code></pre>

<p>Alternatively, you may use the Cookie facade to access cookie values:</p>
<pre><code class="php">$value = Cookie::get('name');
</code></pre>

<h4 id="attaching-cookies-to-responses">Attaching Cookies To Responses</h4>
<p>You may attach a cookie to an outgoing Illuminate\Http\Response instance using the cookie method. You should pass the name, value, and number of minutes the cookie should be considered valid to this method:</p>
<pre><code class="php">return response('Hello World')-&gt;cookie(
    'name', 'value', $minutes
);
</code></pre>

<p>The cookie method also accepts a few more arguments which are used less frequently. Generally, these arguments have the same purpose and meaning as the arguments that would be given to PHP's native <a href="https://secure.php.net/manual/en/function.setcookie.php">setcookie</a> method:</p>
<pre><code class="php">return response('Hello World')-&gt;cookie(
    'name', 'value', $minutes, $path, $domain, $secure, $httpOnly
);
</code></pre>

<p>Alternatively, you can use the Cookie facade to "queue" cookies for attachment to the outgoing response from your application. The queue method accepts a Cookie instance or the arguments needed to create a Cookie instance. These cookies will be attached to the outgoing response before it is sent to the browser:</p>
<pre><code class="php">Cookie::queue(Cookie::make('name', 'value', $minutes));

Cookie::queue('name', 'value', $minutes);
</code></pre>

<h4 id="generating-cookie-instances">Generating Cookie Instances</h4>
<p>If you would like to generate a Symfony\Component\HttpFoundation\Cookie instance that can be given to a response instance at a later time, you may use the global cookie helper. This cookie will not be sent back to the client unless it is attached to a response instance:</p>
<pre><code class="php">$cookie = cookie('name', 'value', $minutes);

return response('Hello World')-&gt;cookie($cookie);
</code></pre>

<p><a name="files"></a></p>
<h2 id="files"><a href="#files">Files</a></h2>
<p><a name="retrieving-uploaded-files"></a></p>
<h3 id="retrieving-uploaded-files">Retrieving Uploaded Files</h3>
<p>You may access uploaded files from a Illuminate\Http\Request instance using the file method or using dynamic properties. The file method returns an instance of the Illuminate\Http\UploadedFile class, which extends the PHP SplFileInfo class and provides a variety of methods for interacting with the file:</p>
<pre><code class="php">$file = $request-&gt;file('photo');

$file = $request-&gt;photo;
</code></pre>

<p>You may determine if a file is present on the request using the hasFile method:</p>
<pre><code class="php">if ($request-&gt;hasFile('photo')) {
    //
}
</code></pre>

<h4 id="validating-successful-uploads">Validating Successful Uploads</h4>
<p>In addition to checking if the file is present, you may verify that there were no problems uploading the file via the isValid method:</p>
<pre><code class="php">if ($request-&gt;file('photo')-&gt;isValid()) {
    //
}
</code></pre>

<h4 id="file-paths-extensions">File Paths &amp; Extensions</h4>
<p>The UploadedFile class also contains methods for accessing the file's fully-qualified path and its extension. The extension method will attempt to guess the file's extension based on its contents. This extension may be different from the extension that was supplied by the client:</p>
<pre><code class="php">$path = $request-&gt;photo-&gt;path();

$extension = $request-&gt;photo-&gt;extension();
</code></pre>

<h4 id="other-file-methods">Other File Methods</h4>
<p>There are a variety of other methods available on UploadedFile instances. Check out the <a href="http://api.symfony.com/3.0/Symfony/Component/HttpFoundation/File/UploadedFile.html">API documentation for the class</a> for more information regarding these methods.
<a name="storing-uploaded-files"></a></p>
<h3 id="storing-uploaded-files">Storing Uploaded Files</h3>
<p>To store an uploaded file, you will typically use one of your configured <a href="/docs/5.7/filesystem">filesystems</a>. The UploadedFile class has a store method which will move an uploaded file to one of your disks, which may be a location on your local filesystem or even a cloud storage location like Amazon S3.
The store method accepts the path where the file should be stored relative to the filesystem's configured root directory. This path should not contain a file name, since a unique ID will automatically be generated to serve as the file name.
The store method also accepts an optional second argument for the name of the disk that should be used to store the file. The method will return the path of the file relative to the disk's root:</p>
<pre><code class="php">$path = $request-&gt;photo-&gt;store('images');

$path = $request-&gt;photo-&gt;store('images', 's3');
</code></pre>

<p>If you do not want a file name to be automatically generated, you may use the storeAs method, which accepts the path, file name, and disk name as its arguments:</p>
<pre><code class="php">$path = $request-&gt;photo-&gt;storeAs('images', 'filename.jpg');

$path = $request-&gt;photo-&gt;storeAs('images', 'filename.jpg', 's3');
</code></pre>

<p><a name="configuring-trusted-proxies"></a></p>
<h2 id="configuring-trusted-proxies"><a href="#configuring-trusted-proxies">Configuring Trusted Proxies</a></h2>
<p>When running your applications behind a load balancer that terminates TLS / SSL certificates, you may notice your application sometimes does not generate HTTPS links. Typically this is because your application is being forwarded traffic from your load balancer on port 80 and does not know it should generate secure links.
To solve this, you may use the App\Http\Middleware\TrustProxies middleware that is included in your Space MVC application, which allows you to quickly customize the load balancers or proxies that should be trusted by your application. Your trusted proxies should be listed as an array on the $proxies property of this middleware. In addition to configuring the trusted proxies, you may configure the proxy $headers that should be trusted:</p>
<pre><code class="php">&lt;?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Fideloper\Proxy\TrustProxies as Middleware;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array
     */
    protected $proxies = [
        '192.168.1.1',
        '192.168.1.2',
    ];

    /**
     * The headers that should be used to detect proxies.
     *
     * @var string
     */
    protected $headers = Request::HEADER_X_FORWARDED_ALL;
}
</code></pre>

<p>If you are using AWS Elastic Load Balancing, your $headers value should be Request::HEADER_X_FORWARDED_AWS_ELB. For more information on the constants that may be used in the $headers property, check out Symfony's documentation on <a href="http://symfony.com/doc/current/deployment/proxies.html">trusting proxies</a>.</p>
<h4 id="trusting-all-proxies">Trusting All Proxies</h4>
<p>If you are using Amazon AWS or another "cloud" load balancer provider, you may not know the IP addresses of your actual balancers. In this case, you may use * to trust all proxies:</p>
<pre><code class="php">/**
 * The trusted proxies for this application.
 *
 * @var array
 */
protected $proxies = '*';
</code></pre>
                
                  
                
              
              
                


              
            </article>
          </div>
        </div>
      </main>

      <div style="height:50px;"></div>

      
        
<footer class="md-footer" style="position:fixed;bottom:0;left:0;width:100%;">
  
    <div class="md-footer-nav">
      <nav class="md-footer-nav__inner md-grid">
        
          <a href="../controllers/" title="Controllers" class="md-flex md-footer-nav__link md-footer-nav__link--prev" rel="prev">
            <div class="md-flex__cell md-flex__cell--shrink">
              <i class="md-icon md-icon--arrow-back md-footer-nav__button"></i>
            </div>
            <div class="md-flex__cell md-flex__cell--stretch md-footer-nav__title">
              <span class="md-flex__ellipsis">
                <span class="md-footer-nav__direction">
                  Previous
                </span>
                Controllers
              </span>
            </div>
          </a>
        
        
          <a href="../responses/" title="Responses" class="md-flex md-footer-nav__link md-footer-nav__link--next" rel="next">
            <div class="md-flex__cell md-flex__cell--stretch md-footer-nav__title">
              <span class="md-flex__ellipsis">
                <span class="md-footer-nav__direction">
                  Next
                </span>
                Responses
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
