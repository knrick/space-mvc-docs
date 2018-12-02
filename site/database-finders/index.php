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
    
    
      
        <title>Finders - Space MVC Framework</title>
      
    
    
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
    
      <a href="#database-finders" tabindex="1" class="md-skip">
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
                Finders
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

    
      
      
      

  


  <li class="md-nav__item md-nav__item--active md-nav__item--nested">
    
      <input class="md-toggle md-nav__toggle" data-md-toggle="nav-5" type="checkbox" id="nav-5" checked>
    
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

        
          
          
          

  


  <li class="md-nav__item md-nav__item--active">
    
    <input class="md-toggle md-nav__toggle" data-md-toggle="toc" type="checkbox" id="__toc">
    
    
      <label class="md-nav__link md-nav__link--active" for="__toc">
        Finders
      </label>
    
    <a href="./" title="Finders" class="md-nav__link md-nav__link--active">
      Finders
    </a>
    
      
<nav class="md-nav md-nav--secondary">
  
  
  
    <label class="md-nav__title" for="__toc">Table of contents</label>
    <ul class="md-nav__list" data-md-scrollfix>
      
        <li class="md-nav__item">
  <a href="#database-finders" title="Database : Finders" class="md-nav__link">
    Database : Finders
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#single-record-result" title="Single record result" class="md-nav__link">
    Single record result
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#find-by-primary-key" title="Find by primary key" class="md-nav__link">
    Find by primary key
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#find-first" title="Find first" class="md-nav__link">
    Find first
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#find-last" title="Find last" class="md-nav__link">
    Find last
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#multiple-records-result" title="Multiple records result" class="md-nav__link">
    Multiple records result
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#find-by-primary-key_1" title="Find by primary key" class="md-nav__link">
    Find by primary key
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#find-all" title="Find all" class="md-nav__link">
    Find all
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#finder-options" title="Finder options" class="md-nav__link">
    Finder options
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#conditions" title="Conditions" class="md-nav__link">
    Conditions
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#limit-offset" title="Limit &amp; Offset" class="md-nav__link">
    Limit &amp; Offset
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#order" title="Order" class="md-nav__link">
    Order
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#select" title="Select" class="md-nav__link">
    Select
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#from" title="From" class="md-nav__link">
    From
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#group" title="Group" class="md-nav__link">
    Group
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#having" title="Having" class="md-nav__link">
    Having
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#read-only" title="Read only" class="md-nav__link">
    Read only
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#dynamic-finders" title="Dynamic finders" class="md-nav__link">
    Dynamic finders
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#joins" title="Joins" class="md-nav__link">
    Joins
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#find-by-custom-sql" title="Find by custom SQL" class="md-nav__link">
    Find by custom SQL
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#eager-loading-associations" title="Eager loading associations" class="md-nav__link">
    Eager loading associations
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
      
      
      
      
    </ul>
  
</nav>
    
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
  <a href="#database-finders" title="Database : Finders" class="md-nav__link">
    Database : Finders
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#single-record-result" title="Single record result" class="md-nav__link">
    Single record result
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#find-by-primary-key" title="Find by primary key" class="md-nav__link">
    Find by primary key
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#find-first" title="Find first" class="md-nav__link">
    Find first
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#find-last" title="Find last" class="md-nav__link">
    Find last
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#multiple-records-result" title="Multiple records result" class="md-nav__link">
    Multiple records result
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#find-by-primary-key_1" title="Find by primary key" class="md-nav__link">
    Find by primary key
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#find-all" title="Find all" class="md-nav__link">
    Find all
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#finder-options" title="Finder options" class="md-nav__link">
    Finder options
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#conditions" title="Conditions" class="md-nav__link">
    Conditions
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#limit-offset" title="Limit &amp; Offset" class="md-nav__link">
    Limit &amp; Offset
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#order" title="Order" class="md-nav__link">
    Order
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#select" title="Select" class="md-nav__link">
    Select
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#from" title="From" class="md-nav__link">
    From
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#group" title="Group" class="md-nav__link">
    Group
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#having" title="Having" class="md-nav__link">
    Having
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#read-only" title="Read only" class="md-nav__link">
    Read only
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#dynamic-finders" title="Dynamic finders" class="md-nav__link">
    Dynamic finders
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#joins" title="Joins" class="md-nav__link">
    Joins
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#find-by-custom-sql" title="Find by custom SQL" class="md-nav__link">
    Find by custom SQL
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#eager-loading-associations" title="Eager loading associations" class="md-nav__link">
    Eager loading associations
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
                  <a href="https://github.com/space-mvc/space-mvc/edit/master/docs/database-finders.md" title="Edit this page" class="md-icon md-content__icon">&#xE3C9;</a>
                 -->

                
                  <h1>Finders</h1>
                
                <h2 id="database-finders">Database : Finders</h2>
<ul id="topic-list">
        <li><a href="/docs/database/finders#single-record-result">Single record result</a></li>
        <li><a href="/docs/database/finders#multiple-records-result">Multiple records result</a></li>
        <li><a href="/docs/database/finders#finder-options">Finder options</a></li>
        <li><a href="/docs/database/finders#conditions">Conditions</a></li>
        <li><a href="/docs/database/finders#limit-offset">Limit & Offset</a></li>
        <li><a href="/docs/database/finders#order">Order</a></li>
        <li><a href="/docs/database/finders#select">Select</a></li>
        <li><a href="/docs/database/finders#from">From</a></li>
        <li><a href="/docs/database/finders#group">Group</a></li>
        <li><a href="/docs/database/finders#having">Having</a></li>
        <li><a href="/docs/database/finders#read-only">Read only</a></li>
        <li><a href="/docs/database/finders#dynamic-finders">Dynamic finders</a></li>
        <li><a href="/docs/database/finders#joins">Joins</a></li>
        <li><a href="/docs/database/finders#find-by-custom-sql">Find by custom SQL</a></li>
        <li><a href="/docs/database/finders#eager-loading">Eager loading associations</a></li>
    </ul>

<p>ActiveRecord supports a number of methods by which you can find records such as: via primary key, dynamic field name finders. It has the ability to fetch all the records in a table with a simple call, or you can make use of options like order, limit, select, and group.</p>
<p>There are essentially two groups of finders you will be working with: <a href="/docs/database/finders#single-record-result">a single record result</a> and <a href="/docs/database/finders#multiple-records-result">multiple records result</a>. Sometimes there will be little transparency for the method calls, meaning you may use the same method to get either one, but you will pass an option to that method to signify which type of result you will fetch.</p>
<p>All methods used to fetch records from your database will go through <strong>Model::find()</strong>, with one exception, custom sql can be passed to <a href="/docs/database/finders#find-by-custom-sql">Model::find_by_sql()</a>. In all cases, the finder methods in ActiveRecord are statically invoked. This means you will always use the following type of syntax.</p>
<pre><code class="php">1 class Book extends ActiveRecord\Model {}
2 
3 Book::find('all');
4 Book::find('last');
5 Book::first();
6 Book::last();
7 Book::all();

</code></pre>

<h4 id="single-record-result">Single record result</h4>
<p>Whenever you invoke a method which produces a single result, that method will return an instance of your model class. There are 3 different ways to fetch a single record result. We'll start with one of the most basic forms.</p>
<h4 id="find-by-primary-key">Find by primary key</h4>
<p>You can grab a record by passing a primary key to the find method. You may pass an <a href="/docs/database/finders#finder-options">options array</a> as the second argument for creating specific queries. If no record is found, a RecordNotFound exception will be thrown.</p>
<pre><code class="php">1 # Grab the book with the primary key of 2
2 Book::find(2);
3 # sql =&gt; SELECT * FROM `books` WHERE id = 2

</code></pre>

<h4 id="find-first">Find first</h4>
<p>You can get the first record back from your database two ways. If you do not pass conditions as the second argument, then this method will fetch all the results from your database, but will only return the very first result back to you. Null will be returned if no records are found.</p>
<pre><code class="php">1 # Grab all books, but only return the first result back as your model object.
2 $book = Book::first();
3 echo &quot;the first id is: {$book-&gt;id}&quot; # =&gt; the first id is: 1
4 # sql =&gt; SELECT * FROM `books`
5 
6 # this produces the same sql/result as above
7 Book::find('first');

</code></pre>

<h4 id="find-last">Find last</h4>
<p>If you haven't yet fallen asleep reading this guide, you should've guessed this is the same as "find first", except that it will return the last result. Null will be returned if no records are found.</p>
<pre><code class="php">1 # Grab all books, but only return the last result back as your model object.
2 $book = Book::last();
3 echo &quot;the last id is: {$book-&gt;id}&quot; # =&gt; the last id is: 32
4 # sql =&gt; SELECT * FROM `books`
5 
6 # this produces the same sql/result as above
7 Book::find('last');

</code></pre>

<h4 id="multiple-records-result">Multiple records result</h4>
<p>This type of result will always return an array of model objects. If your table holds no records, or your query yields no results, then an empty array will be given.</p>
<h4 id="find-by-primary-key_1">Find by primary key</h4>
<p>Just like the single record result for find by primary key, you can pass an array to the find method for multiple primary keys. Again, you may pass an <a href="/docs/database/finders#finder-options">options array</a> as the last argument for creating specific queries. Every key which you use as an argument must produce a corresponding record, otherwise, a RecordNotFound exception will be thrown.</p>
<pre><code class="php">1 # Grab books with the primary key of 2 or 3
2 Book::find(2,3);
3 # sql =&gt; SELECT * FROM `books` WHERE id IN (2,3)
4 
5 # same as above
6 Book::find(array(2,3));

</code></pre>

<h4 id="find-all">Find all</h4>
<p>There are 2 more ways which you can use to get multiple records back from your database. They use different methods; however, they are basically the same thing. If you do not pass an <a href="/docs/database/finders#finder-options">options array</a>, then it will fetch all records.</p>
<pre><code class="php">1 # Grab all books from the database
2 Book::all();
3 # sql =&gt; SELECT * FROM `books`
4 
5 # same as above
6 Book::find('all');

</code></pre>

<p>Here we pass some options to the same method so that we don't fetch <strong>every</strong> record.</p>
<pre><code class="php">1 $options = array('limit' =&gt; 2);
2 Book::all($options);
3 # sql =&gt; SELECT * FROM `books` LIMIT 0,2
4 
5 # same as above
6 Book::find('all', $options);

</code></pre>

<h4 id="finder-options">Finder options</h4>
<p>There are a number of options available to pass to one of the finder methods for granularity. Let's start with one of the most important options: conditions.</p>
<h4 id="conditions">Conditions</h4>
<p>This is the "WHERE" of a SQL statement. By creating conditions, ActiveRecord will parse them into a corresponding "WHERE" SQL statement to filter out your results. Conditions can be extremely simple by only supplying a string. They can also be as complex as you'd like by creating a conditions string that uses ? marks as placeholders for values. Let's start with a simple example of a conditions string.</p>
<pre><code class="php">1 # fetch all the cheap books!
2 Book::all(array('conditions' =&gt; 'price &lt; 15.00'));
3 # sql =&gt; SELECT * FROM `books` WHERE price &lt; 15.00
4 
5 # fetch all books that have &quot;war&quot; somewhere in the title
6 Book::find('all', array('conditions' =&gt; &quot;title LIKE '%war%'&quot;));
7 # sql =&gt; SELECT * FROM `books` WHERE title LIKE '%war%'

</code></pre>

<p>As stated, you can use <em>?</em> marks as placeholders for values which ActiveRecord will replace with your supplied values. The benefit of using this process is that ActiveRecord will escape your string in the backend with your database's native function to prevent SQL injection.</p>
<pre><code class="php"> 1 # fetch all the cheap books!
 2 Book::all(array('conditions' =&gt; array('price &lt; ?', 15.00)));
 3 # sql =&gt; SELECT * FROM `books` WHERE price &lt; 15.00
 4 
 5 # fetch all lousy romance novels
 6 Book::find('all', array('conditions' =&gt; array('genre = ?', 'Romance')));
 7 # sql =&gt; SELECT * FROM `books` WHERE genre = 'Romance'
 8 
 9 # fetch all books with these authors
10 Book::find('all', array('conditions' =&gt; array('author_id in (?)', array(1,2,3))));
11 # sql =&gt; SELECT * FROM `books` WHERE author_id in (1,2,3)
12 
13 # fetch all lousy romance novels which are cheap
14 Book::all(array('conditions' =&gt; array('genre = ? AND price &lt; ?', 'Romance', 15.00)));
15 # sql =&gt; SELECT * FROM `books` WHERE genre = 'Romance' AND price &lt; 15.00

</code></pre>

<p>Here is a more complicated example. Again, the first index of the conditions array are the condition strings. The values in the array after that are the values which replace their corresponding ? marks.</p>
<pre><code class="php">1 # fetch all cheap books by these authors
2 $cond =array('conditions'=&gt;array('author_id in(?) AND price &lt; ?', array(1,2,3), 15.00));
3 Book::all($cond);
4 # sql =&gt; SELECT * FROM `books` WHERE author_id in(1,2,3) AND price &lt; 15.00

</code></pre>

<h4 id="limit-offset">Limit &amp; Offset</h4>
<p>This one should be fairly obvious. A limit option will produce a SQL limit clause for supported databases. It can be used in conjunction with the <strong>offset</strong> option.</p>
<pre><code class="php">1 # fetch all but limit to 10 total books
2 Book::find('all', array('limit' =&gt; 10));
3 # sql =&gt; SELECT * FROM `books` LIMIT 0,10
4 
5 # fetch all but limit to 10 total books starting at the 6th book
6 Book::find('all', array('limit' =&gt; 10, 'offset' =&gt; 5));
7 # sql =&gt; SELECT * FROM `books` LIMIT 5,10

</code></pre>

<h4 id="order">Order</h4>
<p>Produces an ORDERY BY SQL clause.</p>
<pre><code class="php">1 # order all books by title desc
2 Book::find('all', array('order' =&gt; 'title desc'));
3 # sql =&gt; SELECT * FROM `books` ORDER BY title desc
4 
5 # order by most expensive and title
6 Book::find('all', array('order' =&gt; 'price desc, title asc'));
7 # sql =&gt; SELECT * FROM `books` ORDER BY price desc, title asc

</code></pre>

<h4 id="select">Select</h4>
<p>Passing a select key in your <a href="/docs/database/finders#finder-options">options array</a> will allow you to specify which columns you want back from the database. This is helpful when you have a table with too many columns, but you might only want 3 columns back for 50 records. It is also helpful when used with a group statement.</p>
<pre><code class="php">1 # fetch all books, but only the id and title columns
2 Book::find('all', array('select' =&gt; 'id, title'));
3 # sql =&gt; SELECT id, title FROM `books`
4 
5 # custom sql to feed some report
6 Book::find('all', array('select' =&gt; 'avg(price) as avg_price, avg(tax) as avg_tax'));
7 # sql =&gt; SELECT avg(price) as avg_price, avg(tax) as avg_tax FROM `books` LIMIT 5,10

</code></pre>

<h4 id="from">From</h4>
<p>This designates the table you are selecting from. This can come in handy if you do a <a href="/docs/database/finders#joins">join</a> or require finer control.</p>
<pre><code class="php">1 # fetch the first book by aliasing the table name
2 Book::first(array('select'=&gt; 'b.*', 'from' =&gt; 'books as b'));
3 # sql =&gt; SELECT b.* FROM books as b LIMIT 0,1

</code></pre>

<h4 id="group">Group</h4>
<p>Generate a GROUP BY clause.</p>
<pre><code class="php">1 # group all books by prices
2 Book::all(array('group' =&gt; 'price'));
3 # sql =&gt; SELECT * FROM `books` GROUP BY price

</code></pre>

<h4 id="having">Having</h4>
<p>Generate a HAVING clause to add conditions to your GROUP BY.</p>
<pre><code class="php">1 # group all books by prices greater than $45
2 Book::all(array('group' =&gt; 'price', 'having' =&gt; 'price &gt; 45.00'));
3 # sql =&gt; SELECT * FROM `books` GROUP BY price HAVING price &gt; 45.00

</code></pre>

<h4 id="read-only">Read only</h4>
<p>Readonly models are just that: readonly. If you try to save a readonly model, then a ReadOnlyException will be thrown.</p>
<pre><code class="php"> 1 # specify the object is readonly and cannot be saved
 2 $book = Book::first(array('readonly' =&gt; true));
 3 
 4 try {
 5   $book-&gt;save();
 6 } catch (ActiveRecord\ReadOnlyException $e) {
 7   echo $e-&gt;getMessage();
 8   # =&gt; Book::save() cannot be invoked because this model is set to read only
 9 }

</code></pre>

<h4 id="dynamic-finders">Dynamic finders</h4>
<p>These offer a quick and easy way to construct conditions without having to pass in a bloated array option. This option makes use of PHP 5.3's <a href="http://www.php.net/lsb" class="external">late static binding</a> combined with <a href="http://www.php.net/__callstatic" class="external">__callStatic()</a> allowing you to invoke undefined static methods on your model. You can either use YourModel::find_by which returns a <a href="/docs/database/finders#single-record-result">single record result</a> and YourModel::find_all_by returns <a href="/docs/database/finders#multiple-records-result">multiple records result</a>. All you have to do is add an underscore and another field name after either of those two methods. Let's take a look.</p>
<pre><code class="php"> 1 # find a single book by the title of War and Peace
 2 $book = Book::find_by_title('War and Peace');
 3 #sql =&gt; SELECT * FROM `books` WHERE title = 'War and Peace'
 4 
 5 # find all discounted books
 6 $book = Book::find_all_by_discounted(1);
 7 #sql =&gt; SELECT * FROM `books` WHERE discounted = 1
 8 
 9 # find all discounted books by given author
10 $book = Book::find_all_by_discounted_and_author_id(1, 5);
11 #sql =&gt; SELECT * FROM `books` WHERE discounted = 1 AND author_id = 5
12 
13 # find all discounted books or those which cost 5 bux
14 $book = Book::find_by_discounted_or_price(1, 5.00);
15 #sql =&gt; SELECT * FROM `books` WHERE discounted = 1 OR price = 5.00

</code></pre>

<h4 id="joins">Joins</h4>
<p>A join option may be passed to specify SQL JOINS. There are two ways to produce a JOIN. You may pass custom SQL to perform a join as a simple string. By default, the joins option will not <a href="/docs/database/finders#select">select</a> the attributes from the joined table; instead, it will only select the attributes from your model's table. You can pass a select option to specify the fields.</p>
<pre><code class="php">1 # fetch all books joining their corresponding authors
2 $join = 'LEFT JOIN authors a ON(books.author_id = a.author_id)';
3 $book = Book::all(array('joins' =&gt; $join));
4 # sql =&gt; SELECT `books`.* FROM `books`
5 #      LEFT JOIN authors a ON(books.author_id = a.author_id)

</code></pre>

<p>Or, you may specify a join via an <a href="/docs/database/relationships">related</a> model.</p>
<pre><code class="php"> 1 class Book extends ActiveRecord\Model
 2 {
 3   static $belongs_to = array(array('author'),array('publisher'));
 4 }
 5 
 6 # fetch all books joining their corresponding author
 7 $book = Book::all(array('joins' =&gt; array('author')));
 8 # sql =&gt; SELECT `books`.* FROM `books`
 9 #      INNER JOIN `authors` ON(`books`.author_id = `authors`.id)
10 
11 # here's a compound join
12 $book = Book::all(array('joins' =&gt; array('author', 'publisher')));
13 # sql =&gt; SELECT `books`.* FROM `books`
14 #      INNER JOIN `authors` ON(`books`.author_id = `authors`.id)
15 #         INNER JOIN `publishers` ON(`books`.publisher_id = `publishers`.id)

</code></pre>

<p>Joins can be combined with strings and associated models.</p>
<pre><code class="php"> 1 class Book extends ActiveRecord\Model
 2 {
 3   static $belongs_to = array(array('publisher'));
 4 }
 5 
 6 $join = 'LEFT JOIN authors a ON(books.author_id = a.author_id)';
 7 # here we use our $join string and the association publisher
 8 $book = Book::all(array('joins' =&gt; $join, 'publisher'));
 9 # sql =&gt; SELECT `books`.* FROM `books`
10 #      LEFT JOIN authors a ON(books.author_id = a.author_id)
11 #         INNER JOIN `publishers` ON(`books`.publisher_id = `publishers`.id)

</code></pre>

<h4 id="find-by-custom-sql">Find by custom SQL</h4>
<p>If, for some reason, you need to create a complicated SQL query beyond the capacity of <a href="/docs/database/finders#finder-options">finder options</a>, then you can pass a custom SQL query through Model::find_by_sql(). This will render your model as <a href="/docs/database/finders#read-only">readonly</a> so that you cannot use any write methods on your returned model(s).</p>
<p><strong>Caution:</strong> find_by_sql() will NOT prevent SQL injection like all other finder methods. The burden to secure your custom find_by_sql() query is on you. You can use the Model::connection()-&gt;escape() method to escape SQL strings.</p>
<pre><code class="php">1 # this will return a single result of a book model with only the title as an attirubte
2 $book = Book::find_by_sql('select title from `books`');
3 
4 # you can even select from another table
5 $cached_book = Book::find_by_sql('select * from books_cache');
6 # this will give you the attributes from the books_cache table

</code></pre>

<h4 id="eager-loading-associations">Eager loading associations</h4>
<p>Eager loading retrieves the base model and its associations using only a few queries. This avoids the N + 1 problem.</p>
<p>Imagine you have this code which finds 10 posts and then displays each post's author's first name.</p>
<pre><code class="php">1 $posts = Post::find('all', array('limit' =&gt; 10));
2 foreach ($posts as $post)
3   echo $post-&gt;author-&gt;first_name;

</code></pre>

<p>What happens here is the we get 11 queries, 1 to find 10 posts, + 10 (one per each post to get the first name from the authors table).</p>
<p>We solve this problem by using the <strong>include</strong> option which would only issue two queries instead of 11. Here's how this would be done:</p>
<pre><code class="php">1 $posts = Post::find('all', array('limit' =&gt; 10, 'include' =&gt; array('author')));
2 foreach ($posts as $post)
3   echo $post-&gt;author-&gt;first_name;
4 
5 SELECT * FROM `posts` LIMIT 10
6 SELECT * FROM `authors` WHERE `post_id` IN (1,2,3,4,5,6,7,8,9,10)

</code></pre>

<p>Since <strong>include</strong> uses an array, you can specify more than one association:</p>
<pre><code class="php">1 $posts = Post::find('all', array('limit' =&gt; 10, 'include' =&gt; array('author', 'comments')));

</code></pre>

<p>You can also <strong>nest</strong> the <strong>include</strong> option to eager load associations of associations. The following would find the first post, eager load the first post's category, its associated comments and the associated comments' author:</p>
<pre><code class="php">1 $posts = Post::find('first', array('include' =&gt; array('category', 'comments' =&gt; array('author'))));

</code></pre>
                
                  
                
              
              
                


              
            </article>
          </div>
        </div>
      </main>

      <div style="height:50px;"></div>

      
        
<footer class="md-footer" style="position:fixed;bottom:0;left:0;width:100%;">
  
    <div class="md-footer-nav">
      <nav class="md-footer-nav__inner md-grid">
        
          <a href="../database-basic-crud/" title="Basic Crud" class="md-flex md-footer-nav__link md-footer-nav__link--prev" rel="prev">
            <div class="md-flex__cell md-flex__cell--shrink">
              <i class="md-icon md-icon--arrow-back md-footer-nav__button"></i>
            </div>
            <div class="md-flex__cell md-flex__cell--stretch md-footer-nav__title">
              <span class="md-flex__ellipsis">
                <span class="md-footer-nav__direction">
                  Previous
                </span>
                Basic Crud
              </span>
            </div>
          </a>
        
        
          <a href="../database-relationships/" title="Relationships" class="md-flex md-footer-nav__link md-footer-nav__link--next" rel="next">
            <div class="md-flex__cell md-flex__cell--stretch md-footer-nav__title">
              <span class="md-flex__ellipsis">
                <span class="md-footer-nav__direction">
                  Next
                </span>
                Relationships
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
