<?php

$credentials = array(
	'username' => 'admin',
	'password' => 'secret'
);

require_once('../basic_auth.php');
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
    
    
      
        <title>Responses - Space MVC Framework</title>
      
    
    
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
    
      <a href="#http-responses" tabindex="1" class="md-skip">
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
                Responses
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

        <a href="/">
          <button class="x-button" type="button">Home</button>
        </a>

        <a href="/what-is-wamp/">
          <button class="x-button" type="button">Tutorial Videos</button>
        </a>

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

        
          
          
          


  <li class="md-nav__item">
    <a href="../requests/" title="Requests" class="md-nav__link">
      Requests
    </a>
  </li>

        
          
          
          

  


  <li class="md-nav__item md-nav__item--active">
    
    <input class="md-toggle md-nav__toggle" data-md-toggle="toc" type="checkbox" id="__toc">
    
      
    
    
      <label class="md-nav__link md-nav__link--active" for="__toc">
        Responses
      </label>
    
    <a href="./" title="Responses" class="md-nav__link md-nav__link--active">
      Responses
    </a>
    
      
<nav class="md-nav md-nav--secondary">
  
  
    
  
  
    <label class="md-nav__title" for="__toc">Table of contents</label>
    <ul class="md-nav__list" data-md-scrollfix>
      
        <li class="md-nav__item">
  <a href="#creating-responses" title="Creating Responses" class="md-nav__link">
    Creating Responses
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#strings-arrays" title="Strings &amp; Arrays" class="md-nav__link">
    Strings &amp; Arrays
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#response-objects" title="Response Objects" class="md-nav__link">
    Response Objects
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#attaching-headers-to-responses" title="Attaching Headers To Responses" class="md-nav__link">
    Attaching Headers To Responses
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#attaching-cookies-to-responses" title="Attaching Cookies To Responses" class="md-nav__link">
    Attaching Cookies To Responses
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#cookies-encryption" title="Cookies &amp; Encryption" class="md-nav__link">
    Cookies &amp; Encryption
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#redirects" title="Redirects" class="md-nav__link">
    Redirects
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#redirecting-to-named-routes" title="Redirecting To Named Routes" class="md-nav__link">
    Redirecting To Named Routes
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#populating-parameters-via-eloquent-models" title="Populating Parameters Via Eloquent Models" class="md-nav__link">
    Populating Parameters Via Eloquent Models
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#redirecting-to-controller-actions" title="Redirecting To Controller Actions" class="md-nav__link">
    Redirecting To Controller Actions
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#redirecting-to-external-domains" title="Redirecting To External Domains" class="md-nav__link">
    Redirecting To External Domains
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#redirecting-with-flashed-session-data" title="Redirecting With Flashed Session Data" class="md-nav__link">
    Redirecting With Flashed Session Data
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#other-response-types" title="Other Response Types" class="md-nav__link">
    Other Response Types
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#view-responses" title="View Responses" class="md-nav__link">
    View Responses
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#json-responses" title="JSON Responses" class="md-nav__link">
    JSON Responses
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#file-downloads" title="File Downloads" class="md-nav__link">
    File Downloads
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#streamed-downloads" title="Streamed Downloads" class="md-nav__link">
    Streamed Downloads
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#file-responses" title="File Responses" class="md-nav__link">
    File Responses
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#response-macros" title="Response Macros" class="md-nav__link">
    Response Macros
  </a>
  
</li>
      
      
      
      
      
    </ul>
  
</nav>
    
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
  <a href="#creating-responses" title="Creating Responses" class="md-nav__link">
    Creating Responses
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#strings-arrays" title="Strings &amp; Arrays" class="md-nav__link">
    Strings &amp; Arrays
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#response-objects" title="Response Objects" class="md-nav__link">
    Response Objects
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#attaching-headers-to-responses" title="Attaching Headers To Responses" class="md-nav__link">
    Attaching Headers To Responses
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#attaching-cookies-to-responses" title="Attaching Cookies To Responses" class="md-nav__link">
    Attaching Cookies To Responses
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#cookies-encryption" title="Cookies &amp; Encryption" class="md-nav__link">
    Cookies &amp; Encryption
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#redirects" title="Redirects" class="md-nav__link">
    Redirects
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#redirecting-to-named-routes" title="Redirecting To Named Routes" class="md-nav__link">
    Redirecting To Named Routes
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#populating-parameters-via-eloquent-models" title="Populating Parameters Via Eloquent Models" class="md-nav__link">
    Populating Parameters Via Eloquent Models
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#redirecting-to-controller-actions" title="Redirecting To Controller Actions" class="md-nav__link">
    Redirecting To Controller Actions
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#redirecting-to-external-domains" title="Redirecting To External Domains" class="md-nav__link">
    Redirecting To External Domains
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#redirecting-with-flashed-session-data" title="Redirecting With Flashed Session Data" class="md-nav__link">
    Redirecting With Flashed Session Data
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#other-response-types" title="Other Response Types" class="md-nav__link">
    Other Response Types
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#view-responses" title="View Responses" class="md-nav__link">
    View Responses
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#json-responses" title="JSON Responses" class="md-nav__link">
    JSON Responses
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#file-downloads" title="File Downloads" class="md-nav__link">
    File Downloads
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#streamed-downloads" title="Streamed Downloads" class="md-nav__link">
    Streamed Downloads
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#file-responses" title="File Responses" class="md-nav__link">
    File Responses
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#response-macros" title="Response Macros" class="md-nav__link">
    Response Macros
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
                  <a href="https://github.com/space-mvc/space-mvc/edit/master/docs/responses.md" title="Edit this page" class="md-icon md-content__icon">&#xE3C9;</a>
                 -->

                
                <h1 id="http-responses">HTTP Responses</h1>
<h4 id="creating-responses">Creating Responses</h4>
<h4 id="strings-arrays">Strings &amp; Arrays</h4>
<p>All routes and controllers should return a response to be sent back to the user's browser. Space MVC provides several different ways to return responses. The most basic response is returning a string from a route or controller. The framework will automatically convert the string into a full HTTP response:</p>
<pre><code class="php">Route::get('/', function () {
    return 'Hello World';
});
</code></pre>

<p>In addition to returning strings from your routes and controllers, you may also return arrays. The framework will automatically convert the array into a JSON response:</p>
<pre><code class="php">Route::get('/', function () {
    return [1, 2, 3];
});
</code></pre>

<p>Did you know you can also return <a href="/docs/5.7/eloquent-collections">Eloquent collections</a> from your routes or controllers? They will automatically be converted to JSON. Give it a shot!</p>
<h4 id="response-objects">Response Objects</h4>
<p>Typically, you won't just be returning simple strings or arrays from your route actions. Instead, you will be returning full Illuminate\Http\Response instances or <a href="/docs/5.7/views">views</a>.
Returning a full Response instance allows you to customize the response's HTTP status code and headers. A Response instance inherits from the Symfony\Component\HttpFoundation\Response class, which provides a variety of methods for building HTTP responses:</p>
<pre><code class="php">Route::get('home', function () {
    return response('Hello World', 200)
                  -&gt;header('Content-Type', 'text/plain');
});
</code></pre>

<p><a name="attaching-headers-to-responses"></a></p>
<h4 id="attaching-headers-to-responses">Attaching Headers To Responses</h4>
<p>Keep in mind that most response methods are chainable, allowing for the fluent construction of response instances. For example, you may use the header method to add a series of headers to the response before sending it back to the user:</p>
<pre><code class="php">return response($content)
            -&gt;header('Content-Type', $type)
            -&gt;header('X-Header-One', 'Header Value')
            -&gt;header('X-Header-Two', 'Header Value');
</code></pre>

<p>Or, you may use the withHeaders method to specify an array of headers to be added to the response:</p>
<pre><code class="php">return response($content)
            -&gt;withHeaders([
                'Content-Type' =&gt; $type,
                'X-Header-One' =&gt; 'Header Value',
                'X-Header-Two' =&gt; 'Header Value',
            ]);
</code></pre>

<p><a name="attaching-cookies-to-responses"></a></p>
<h4 id="attaching-cookies-to-responses">Attaching Cookies To Responses</h4>
<p>The cookie method on response instances allows you to easily attach cookies to the response. For example, you may use the cookie method to generate a cookie and fluently attach it to the response instance like so:</p>
<pre><code class="php">return response($content)
                -&gt;header('Content-Type', $type)
                -&gt;cookie('name', 'value', $minutes);
</code></pre>

<p>The cookie method also accepts a few more arguments which are used less frequently. Generally, these arguments have the same purpose and meaning as the arguments that would be given to PHP's native <a href="https://secure.php.net/manual/en/function.setcookie.php">setcookie</a> method:</p>
<pre><code class="php">-&gt;cookie($name, $value, $minutes, $path, $domain, $secure, $httpOnly)
</code></pre>

<p>Alternatively, you can use the Cookie facade to "queue" cookies for attachment to the outgoing response from your application. The queue method accepts a Cookie instance or the arguments needed to create a Cookie instance. These cookies will be attached to the outgoing response before it is sent to the browser:</p>
<pre><code class="php">Cookie::queue(Cookie::make('name', 'value', $minutes));

Cookie::queue('name', 'value', $minutes);
</code></pre>

<p><a name="cookies-and-encryption"></a></p>
<h4 id="cookies-encryption">Cookies &amp; Encryption</h4>
<p>By default, all cookies generated by Space MVC are encrypted and signed so that they can't be modified or read by the client. If you would like to disable encryption for a subset of cookies generated by your application, you may use the $except property of the App\Http\Middleware\EncryptCookies middleware, which is located in the app/Http/Middleware directory:</p>
<pre><code class="php">/**
 * The names of the cookies that should not be encrypted.
 *
 * @var array
 */
protected $except = [
    'cookie_name',
];
</code></pre>

<p><a name="redirects"></a></p>
<h2 id="redirects"><a href="#redirects">Redirects</a></h2>
<p>Redirect responses are instances of the Illuminate\Http\RedirectResponse class, and contain the proper headers needed to redirect the user to another URL. There are several ways to generate a RedirectResponse instance. The simplest method is to use the global redirect helper:</p>
<pre><code class="php">Route::get('dashboard', function () {
    return redirect('home/dashboard');
});
</code></pre>

<p>Sometimes you may wish to redirect the user to their previous location, such as when a submitted form is invalid. You may do so by using the global back helper function. Since this feature utilizes the <a href="/docs/5.7/session">session</a>, make sure the route calling the back function is using the web middleware group or has all of the session middleware applied:</p>
<pre><code class="php">Route::post('user/profile', function () {
    // Validate the request...

    return back()-&gt;withInput();
});
</code></pre>

<p><a name="redirecting-named-routes"></a></p>
<h3 id="redirecting-to-named-routes">Redirecting To Named Routes</h3>
<p>When you call the redirect helper with no parameters, an instance of Illuminate\Routing\Redirector is returned, allowing you to call any method on the Redirector instance. For example, to generate a RedirectResponse to a named route, you may use the route method:</p>
<pre><code class="php">return redirect()-&gt;route('login');
</code></pre>

<p>If your route has parameters, you may pass them as the second argument to the route method:</p>
<pre><code class="php">// For a route with the following URI: profile/{id}

return redirect()-&gt;route('profile', ['id' =&gt; 1]);
</code></pre>

<h4 id="populating-parameters-via-eloquent-models">Populating Parameters Via Eloquent Models</h4>
<p>If you are redirecting to a route with an "ID" parameter that is being populated from an Eloquent model, you may pass the model itself. The ID will be extracted automatically:</p>
<pre><code class="php">// For a route with the following URI: profile/{id}

return redirect()-&gt;route('profile', [$user]);
</code></pre>

<p>If you would like to customize the value that is placed in the route parameter, you should override the getRouteKey method on your Eloquent model:</p>
<pre><code class="php">/**
 * Get the value of the model's route key.
 *
 * @return mixed
 */
public function getRouteKey()
{
    return $this-&gt;slug;
}
</code></pre>

<p><a name="redirecting-controller-actions"></a></p>
<h3 id="redirecting-to-controller-actions">Redirecting To Controller Actions</h3>
<p>You may also generate redirects to <a href="/docs/5.7/controllers">controller actions</a>. To do so, pass the controller and action name to the action method. Remember, you do not need to specify the full namespace to the controller since Space MVC's RouteServiceProvider will automatically set the base controller namespace:</p>
<pre><code class="php">return redirect()-&gt;action('HomeController@index');
</code></pre>

<p>If your controller route requires parameters, you may pass them as the second argument to the action method:</p>
<pre><code class="php">return redirect()-&gt;action(
    'UserController@profile', ['id' =&gt; 1]
);
</code></pre>

<p><a name="redirecting-external-domains"></a></p>
<h3 id="redirecting-to-external-domains">Redirecting To External Domains</h3>
<p>Sometimes you may need to redirect to a domain outside of your application. You may do so by calling the away method, which creates a RedirectResponse without any additional URL encoding, validation, or verification:</p>
<pre><code class="php">return redirect()-&gt;away('https://www.google.com');
</code></pre>

<p><a name="redirecting-with-flashed-session-data"></a></p>
<h3 id="redirecting-with-flashed-session-data">Redirecting With Flashed Session Data</h3>
<p>Redirecting to a new URL and <a href="/docs/5.7/session#flash-data">flashing data to the session</a> are usually done at the same time. Typically, this is done after successfully performing an action when you flash a success message to the session. For convenience, you may create a RedirectResponse instance and flash data to the session in a single, fluent method chain:</p>
<pre><code class="php">Route::post('user/profile', function () {
    // Update the user's profile...

    return redirect('dashboard')-&gt;with('status', 'Profile updated!');
});
</code></pre>

<p>After the user is redirected, you may display the flashed message from the <a href="/docs/5.7/session">session</a>. For example, using <a href="/docs/5.7/blade">Blade syntax</a>:</p>
<pre><code class="php">@if (session('status'))
    &lt;div class=&quot;alert alert-success&quot;&gt;
        {{ session('status') }}
    &lt;/div&gt;
@endif
</code></pre>

<p><a name="other-response-types"></a></p>
<h2 id="other-response-types"><a href="#other-response-types">Other Response Types</a></h2>
<p>The response helper may be used to generate other types of response instances. When the response helper is called without arguments, an implementation of the Illuminate\Contracts\Routing\ResponseFactory <a href="/docs/5.7/contracts">contract</a> is returned. This contract provides several helpful methods for generating responses.
<a name="view-responses"></a></p>
<h3 id="view-responses">View Responses</h3>
<p>If you need control over the response's status and headers but also need to return a <a href="/docs/5.7/views">view</a> as the response's content, you should use the view method:</p>
<pre><code class="php">return response()
            -&gt;view('hello', $data, 200)
            -&gt;header('Content-Type', $type);
</code></pre>

<p>Of course, if you do not need to pass a custom HTTP status code or custom headers, you should use the global view helper function.
<a name="json-responses"></a></p>
<h3 id="json-responses">JSON Responses</h3>
<p>The json method will automatically set the Content-Type header to application/json, as well as convert the given array to JSON using the json_encode PHP function:</p>
<pre><code class="php">return response()-&gt;json([
    'name' =&gt; 'Abigail',
    'state' =&gt; 'CA'
]);
</code></pre>

<p>If you would like to create a JSONP response, you may use the json method in combination with the withCallback method:</p>
<pre><code class="php">return response()
            -&gt;json(['name' =&gt; 'Abigail', 'state' =&gt; 'CA'])
            -&gt;withCallback($request-&gt;input('callback'));
</code></pre>

<p><a name="file-downloads"></a></p>
<h3 id="file-downloads">File Downloads</h3>
<p>The download method may be used to generate a response that forces the user's browser to download the file at the given path. The download method accepts a file name as the second argument to the method, which will determine the file name that is seen by the user downloading the file. Finally, you may pass an array of HTTP headers as the third argument to the method:</p>
<pre><code class="php">return response()-&gt;download($pathToFile);

return response()-&gt;download($pathToFile, $name, $headers);

return response()-&gt;download($pathToFile)-&gt;deleteFileAfterSend();
</code></pre>

<p>Symfony HttpFoundation, which manages file downloads, requires the file being downloaded to have an ASCII file name.</p>
<h4 id="streamed-downloads">Streamed Downloads</h4>
<p>Sometimes you may wish to turn the string response of a given operation into a downloadable response without having to write the contents of the operation to disk. You may use the streamDownload method in this scenario. This method accepts a callback, file name, and an optional array of headers as its arguments:</p>
<pre><code class="php">return response()-&gt;streamDownload(function () {
    echo GitHub::api('repo')
                -&gt;contents()
                -&gt;readme('Space MVC', 'Space MVC')['contents'];
}, 'Space MVC-readme.md');
</code></pre>

<p><a name="file-responses"></a></p>
<h3 id="file-responses">File Responses</h3>
<p>The file method may be used to display a file, such as an image or PDF, directly in the user's browser instead of initiating a download. This method accepts the path to the file as its first argument and an array of headers as its second argument:</p>
<pre><code class="php">return response()-&gt;file($pathToFile);

return response()-&gt;file($pathToFile, $headers);
</code></pre>

<p><a name="response-macros"></a></p>
<h2 id="response-macros"><a href="#response-macros">Response Macros</a></h2>
<p>If you would like to define a custom response that you can re-use in a variety of your routes and controllers, you may use the macro method on the Response facade. For example, from a <a href="/docs/5.7/providers">service provider's</a> boot method:</p>
<pre><code class="php">&lt;?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

class ResponseMacroServiceProvider extends ServiceProvider
{
    /**
     * Register the application's response macros.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('caps', function ($value) {
            return Response::make(strtoupper($value));
        });
    }
}
</code></pre>

<p>The macro function accepts a name as its first argument, and a Closure as its second. The macro's Closure will be executed when calling the macro name from a ResponseFactory implementation or the response helper:</p>
<pre><code class="php">return response()-&gt;caps('foo');
</code></pre>
                
                  
                
              
              
                


              
            </article>
          </div>
        </div>
      </main>

      <div style="height:50px;"></div>

      
        
<footer class="md-footer">
  
    <div class="md-footer-nav">
      <nav class="md-footer-nav__inner md-grid">
        
          <a href="../requests/" title="Requests" class="md-flex md-footer-nav__link md-footer-nav__link--prev" rel="prev">
            <div class="md-flex__cell md-flex__cell--shrink">
              <i class="md-icon md-icon--arrow-back md-footer-nav__button"></i>
            </div>
            <div class="md-flex__cell md-flex__cell--stretch md-footer-nav__title">
              <span class="md-flex__ellipsis">
                <span class="md-footer-nav__direction">
                  Previous
                </span>
                Requests
              </span>
            </div>
          </a>
        
        
          <a href="../views/" title="Views" class="md-flex md-footer-nav__link md-footer-nav__link--next" rel="next">
            <div class="md-flex__cell md-flex__cell--stretch md-footer-nav__title">
              <span class="md-flex__ellipsis">
                <span class="md-footer-nav__direction">
                  Next
                </span>
                Views
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
