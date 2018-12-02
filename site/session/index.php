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
    
    
      
        <title>Session - Space MVC Framework</title>
      
    
    
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
    
      <a href="#http-session" tabindex="1" class="md-skip">
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
                Session
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

        
          
          
          

  


  <li class="md-nav__item md-nav__item--active">
    
    <input class="md-toggle md-nav__toggle" data-md-toggle="toc" type="checkbox" id="__toc">
    
      
    
    
      <label class="md-nav__link md-nav__link--active" for="__toc">
        Session
      </label>
    
    <a href="./" title="Session" class="md-nav__link md-nav__link--active">
      Session
    </a>
    
      
<nav class="md-nav md-nav--secondary">
  
  
    
  
  
    <label class="md-nav__title" for="__toc">Table of contents</label>
    <ul class="md-nav__list" data-md-scrollfix>
      
        <li class="md-nav__item">
  <a href="#introduction" title="Introduction" class="md-nav__link">
    Introduction
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#configuration" title="Configuration" class="md-nav__link">
    Configuration
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#driver-prerequisites" title="Driver Prerequisites" class="md-nav__link">
    Driver Prerequisites
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#database" title="Database" class="md-nav__link">
    Database
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#redis" title="Redis" class="md-nav__link">
    Redis
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#using-the-session" title="Using The Session" class="md-nav__link">
    Using The Session
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#retrieving-data" title="Retrieving Data" class="md-nav__link">
    Retrieving Data
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#the-global-session-helper" title="The Global Session Helper" class="md-nav__link">
    The Global Session Helper
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#retrieving-all-session-data" title="Retrieving All Session Data" class="md-nav__link">
    Retrieving All Session Data
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#determining-if-an-item-exists-in-the-session" title="Determining If An Item Exists In The Session" class="md-nav__link">
    Determining If An Item Exists In The Session
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#storing-data" title="Storing Data" class="md-nav__link">
    Storing Data
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#pushing-to-array-session-values" title="Pushing To Array Session Values" class="md-nav__link">
    Pushing To Array Session Values
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#retrieving-deleting-an-item" title="Retrieving &amp; Deleting An Item" class="md-nav__link">
    Retrieving &amp; Deleting An Item
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#flash-data" title="Flash Data" class="md-nav__link">
    Flash Data
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#deleting-data" title="Deleting Data" class="md-nav__link">
    Deleting Data
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#regenerating-the-session-id" title="Regenerating The Session ID" class="md-nav__link">
    Regenerating The Session ID
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#adding-custom-session-drivers" title="Adding Custom Session Drivers" class="md-nav__link">
    Adding Custom Session Drivers
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#implementing-the-driver" title="Implementing The Driver" class="md-nav__link">
    Implementing The Driver
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#registering-the-driver" title="Registering The Driver" class="md-nav__link">
    Registering The Driver
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
      
      
      
      
    </ul>
  
</nav>
    
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
  <a href="#configuration" title="Configuration" class="md-nav__link">
    Configuration
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#driver-prerequisites" title="Driver Prerequisites" class="md-nav__link">
    Driver Prerequisites
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#database" title="Database" class="md-nav__link">
    Database
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#redis" title="Redis" class="md-nav__link">
    Redis
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#using-the-session" title="Using The Session" class="md-nav__link">
    Using The Session
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#retrieving-data" title="Retrieving Data" class="md-nav__link">
    Retrieving Data
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#the-global-session-helper" title="The Global Session Helper" class="md-nav__link">
    The Global Session Helper
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#retrieving-all-session-data" title="Retrieving All Session Data" class="md-nav__link">
    Retrieving All Session Data
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#determining-if-an-item-exists-in-the-session" title="Determining If An Item Exists In The Session" class="md-nav__link">
    Determining If An Item Exists In The Session
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#storing-data" title="Storing Data" class="md-nav__link">
    Storing Data
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#pushing-to-array-session-values" title="Pushing To Array Session Values" class="md-nav__link">
    Pushing To Array Session Values
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#retrieving-deleting-an-item" title="Retrieving &amp; Deleting An Item" class="md-nav__link">
    Retrieving &amp; Deleting An Item
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#flash-data" title="Flash Data" class="md-nav__link">
    Flash Data
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#deleting-data" title="Deleting Data" class="md-nav__link">
    Deleting Data
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#regenerating-the-session-id" title="Regenerating The Session ID" class="md-nav__link">
    Regenerating The Session ID
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#adding-custom-session-drivers" title="Adding Custom Session Drivers" class="md-nav__link">
    Adding Custom Session Drivers
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#implementing-the-driver" title="Implementing The Driver" class="md-nav__link">
    Implementing The Driver
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#registering-the-driver" title="Registering The Driver" class="md-nav__link">
    Registering The Driver
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
                  <a href="https://github.com/space-mvc/space-mvc/edit/master/docs/session.md" title="Edit this page" class="md-icon md-content__icon">&#xE3C9;</a>
                 -->

                
                <h1 id="http-session">HTTP Session</h1>
<h4 id="introduction">Introduction</h4>
<p>Since HTTP driven applications are stateless, sessions provide a way to store information about the user across multiple requests. Space MVC ships with a variety of session backends that are accessed through an expressive, unified API. Support for popular backends such as <a href="https://memcached.org">Memcached</a>, <a href="https://redis.io">Redis</a>, and databases is included out of the box.
<a name="configuration"></a></p>
<h3 id="configuration">Configuration</h3>
<p>The session configuration file is stored at config/session.php. Be sure to review the options available to you in this file. By default, Space MVC is configured to use the file session driver, which will work well for many applications. In production applications, you may consider using the memcached or redis drivers for even faster session performance.
The session driver configuration option defines where session data will be stored for each request. Space MVC ships with several great drivers out of the box:
    <div class="content-list">
        <ul>
            <li>file - sessions are stored in storage/framework/sessions.</li>
            <li>cookie - sessions are stored in secure, encrypted cookies.</li>
            <li>database - sessions are stored in a relational database.</li>
            <li>memcached / redis - sessions are stored in one of these fast, cache based stores.</li>
            <li>array - sessions are stored in a PHP array and will not be persisted.</li>
        </ul>
    </div>
The array driver is used during <a href="/docs/5.7/testing">testing</a> and prevents the data stored in the session from being persisted.
<a name="driver-prerequisites"></a></p>
<h3 id="driver-prerequisites">Driver Prerequisites</h3>
<h4 id="database">Database</h4>
<p>When using the database session driver, you will need to create a table to contain the session items. Below is an example Schema declaration for the table:</p>
<pre><code class="php">Schema::create('sessions', function ($table) {
    $table-&gt;string('id')-&gt;unique();
    $table-&gt;unsignedInteger('user_id')-&gt;nullable();
    $table-&gt;string('ip_address', 45)-&gt;nullable();
    $table-&gt;text('user_agent')-&gt;nullable();
    $table-&gt;text('payload');
    $table-&gt;integer('last_activity');
});
</code></pre>

<p>You may use the session:table Artisan command to generate this migration:</p>
<pre><code class="php">php artisan session:table

php artisan migrate
</code></pre>

<h4 id="redis">Redis</h4>
<p>Before using Redis sessions with Space MVC, you will need to install the predis/predis package (~1.0) via Composer. You may configure your Redis connections in the database configuration file. In the session configuration file, the connection option may be used to specify which Redis connection is used by the session.
<a name="using-the-session"></a></p>
<h2 id="using-the-session"><a href="#using-the-session">Using The Session</a></h2>
<p><a name="retrieving-data"></a></p>
<h3 id="retrieving-data">Retrieving Data</h3>
<p>There are two primary ways of working with session data in Space MVC: the global session helper and via a Request instance. First, let's look at accessing the session via a Request instance, which can be type-hinted on a controller method. Remember, controller method dependencies are automatically injected via the Space MVC <a href="/docs/5.7/container">service container</a>:</p>
<pre><code class="php">&lt;?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function show(Request $request, $id)
    {
        $value = $request-&gt;session()-&gt;get('key');

        //
    }
}
</code></pre>

<p>When you retrieve an item from the session, you may also pass a default value as the second argument to the get method. This default value will be returned if the specified key does not exist in the session. If you pass a Closure as the default value to the get method and the requested key does not exist, the Closure will be executed and its result returned:</p>
<pre><code class="php">$value = $request-&gt;session()-&gt;get('key', 'default');

$value = $request-&gt;session()-&gt;get('key', function () {
    return 'default';
});
</code></pre>

<h4 id="the-global-session-helper">The Global Session Helper</h4>
<p>You may also use the global session PHP function to retrieve and store data in the session. When the session helper is called with a single, string argument, it will return the value of that session key. When the helper is called with an array of key / value pairs, those values will be stored in the session:</p>
<pre><code class="php">Route::get('home', function () {
    // Retrieve a piece of data from the session...
    $value = session('key');

    // Specifying a default value...
    $value = session('key', 'default');

    // Store a piece of data in the session...
    session(['key' =&gt; 'value']);
});
</code></pre>

<p>There is little practical difference between using the session via an HTTP request instance versus using the global session helper. Both methods are <a href="/docs/5.7/testing">testable</a> via the assertSessionHas method which is available in all of your test cases.</p>
<h4 id="retrieving-all-session-data">Retrieving All Session Data</h4>
<p>If you would like to retrieve all the data in the session, you may use the all method:</p>
<pre><code class="php">$data = $request-&gt;session()-&gt;all();
</code></pre>

<h4 id="determining-if-an-item-exists-in-the-session">Determining If An Item Exists In The Session</h4>
<p>To determine if an item is present in the session, you may use the has method. The has method returns true if the item is present and is not null:</p>
<pre><code class="php">if ($request-&gt;session()-&gt;has('users')) {
    //
}
</code></pre>

<p>To determine if an item is present in the session, even if its value is null, you may use the exists method. The exists method returns true if the item is present:</p>
<pre><code class="php">if ($request-&gt;session()-&gt;exists('users')) {
    //
}
</code></pre>

<p><a name="storing-data"></a></p>
<h3 id="storing-data">Storing Data</h3>
<p>To store data in the session, you will typically use the put method or the session helper:</p>
<pre><code class="php">// Via a request instance...
$request-&gt;session()-&gt;put('key', 'value');

// Via the global helper...
session(['key' =&gt; 'value']);
</code></pre>

<h4 id="pushing-to-array-session-values">Pushing To Array Session Values</h4>
<p>The push method may be used to push a new value onto a session value that is an array. For example, if the user.teams key contains an array of team names, you may push a new value onto the array like so:</p>
<pre><code class="php">$request-&gt;session()-&gt;push('user.teams', 'developers');
</code></pre>

<h4 id="retrieving-deleting-an-item">Retrieving &amp; Deleting An Item</h4>
<p>The pull method will retrieve and delete an item from the session in a single statement:</p>
<pre><code class="php">$value = $request-&gt;session()-&gt;pull('key', 'default');
</code></pre>

<p><a name="flash-data"></a></p>
<h3 id="flash-data">Flash Data</h3>
<p>Sometimes you may wish to store items in the session only for the next request. You may do so using the flash method. Data stored in the session using this method will only be available during the subsequent HTTP request, and then will be deleted. Flash data is primarily useful for short-lived status messages:</p>
<pre><code class="php">$request-&gt;session()-&gt;flash('status', 'Task was successful!');
</code></pre>

<p>If you need to keep your flash data around for several requests, you may use the reflash method, which will keep all of the flash data for an additional request. If you only need to keep specific flash data, you may use the keep method:</p>
<pre><code class="php">$request-&gt;session()-&gt;reflash();

$request-&gt;session()-&gt;keep(['username', 'email']);
</code></pre>

<p><a name="deleting-data"></a></p>
<h3 id="deleting-data">Deleting Data</h3>
<p>The forget method will remove a piece of data from the session. If you would like to remove all data from the session, you may use the flush method:</p>
<pre><code class="php">$request-&gt;session()-&gt;forget('key');

$request-&gt;session()-&gt;flush();
</code></pre>

<p><a name="regenerating-the-session-id"></a></p>
<h3 id="regenerating-the-session-id">Regenerating The Session ID</h3>
<p>Regenerating the session ID is often done in order to prevent malicious users from exploiting a <a href="https://en.wikipedia.org/wiki/Session_fixation">session fixation</a> attack on your application.
Space MVC automatically regenerates the session ID during authentication if you are using the built-in LoginController; however, if you need to manually regenerate the session ID, you may use the regenerate method.</p>
<pre><code class="php">$request-&gt;session()-&gt;regenerate();
</code></pre>

<p><a name="adding-custom-session-drivers"></a></p>
<h2 id="adding-custom-session-drivers"><a href="#adding-custom-session-drivers">Adding Custom Session Drivers</a></h2>
<p><a name="implementing-the-driver"></a></p>
<h4 id="implementing-the-driver">Implementing The Driver</h4>
<p>Your custom session driver should implement the SessionHandlerInterface. This interface contains just a few simple methods we need to implement. A stubbed MongoDB implementation looks something like this:</p>
<pre><code class="php">&lt;?php

namespace App\Extensions;

class MongoSessionHandler implements \SessionHandlerInterface
{
    public function open($savePath, $sessionName) {}
    public function close() {}
    public function read($sessionId) {}
    public function write($sessionId, $data) {}
    public function destroy($sessionId) {}
    public function gc($lifetime) {}
}
</code></pre>

<p>Space MVC does not ship with a directory to contain your extensions. You are free to place them anywhere you like. In this example, we have created an Extensions directory to house the MongoSessionHandler.
Since the purpose of these methods is not readily understandable, let's quickly cover what each of the methods do:
    <div class="content-list">
        <ul>
            <li>The open method would typically be used in file based session store systems. Since Space MVC ships with a file session driver, you will almost never need to put anything in this method. You can leave it as an empty stub. It is a fact of poor interface design (which we'll discuss later) that PHP requires us to implement this method.</li>
            <li>The close method, like the open method, can also usually be disregarded. For most drivers, it is not needed.</li>
            <li>The read method should return the string version of the session data associated with the given $sessionId. There is no need to do any serialization or other encoding when retrieving or storing session data in your driver, as Space MVC will perform the serialization for you.</li>
            <li>The write method should write the given $data string associated with the $sessionId to some persistent storage system, such as MongoDB, Dynamo, etc.  Again, you should not perform any serialization - Space MVC will have already handled that for you.</li>
            <li>The destroy method should remove the data associated with the $sessionId from persistent storage.</li>
            <li>The gc method should destroy all session data that is older than the given $lifetime, which is a UNIX timestamp. For self-expiring systems like Memcached and Redis, this method may be left empty.</li>
        </ul>
    </div>
<a name="registering-the-driver"></a></p>
<h4 id="registering-the-driver">Registering The Driver</h4>
<p>Once your driver has been implemented, you are ready to register it with the framework. To add additional drivers to Space MVC's session backend, you may use the extend method on the Session <a href="/docs/5.7/facades">facade</a>. You should call the extend method from the boot method of a <a href="/docs/5.7/providers">service provider</a>. You may do this from the existing AppServiceProvider or create an entirely new provider:</p>
<pre><code class="php">&lt;?php

namespace App\Providers;

use App\Extensions\MongoSessionHandler;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

class SessionServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        Session::extend('mongo', function ($app) {
            // Return implementation of SessionHandlerInterface...
            return new MongoSessionHandler;
        });
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
</code></pre>

<p>Once the session driver has been registered, you may use the mongo driver in your config/session.php configuration file.</p>
                
                  
                
              
              
                


              
            </article>
          </div>
        </div>
      </main>

      <div style="height:50px;"></div>

      
        
<footer class="md-footer" style="position:fixed;bottom:0;left:0;width:100%;">
  
    <div class="md-footer-nav">
      <nav class="md-footer-nav__inner md-grid">
        
          <a href="../views/" title="Views" class="md-flex md-footer-nav__link md-footer-nav__link--prev" rel="prev">
            <div class="md-flex__cell md-flex__cell--shrink">
              <i class="md-icon md-icon--arrow-back md-footer-nav__button"></i>
            </div>
            <div class="md-flex__cell md-flex__cell--stretch md-footer-nav__title">
              <span class="md-flex__ellipsis">
                <span class="md-footer-nav__direction">
                  Previous
                </span>
                Views
              </span>
            </div>
          </a>
        
        
          <a href="../validation/" title="Validation" class="md-flex md-footer-nav__link md-footer-nav__link--next" rel="next">
            <div class="md-flex__cell md-flex__cell--stretch md-footer-nav__title">
              <span class="md-flex__ellipsis">
                <span class="md-footer-nav__direction">
                  Next
                </span>
                Validation
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
