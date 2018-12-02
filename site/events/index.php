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
    
    
      
        <title>Events - Space MVC Framework</title>
      
    
    
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
    
      <a href="#events" tabindex="1" class="md-skip">
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
                Events
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

    
      
      
      

  


  <li class="md-nav__item md-nav__item--active md-nav__item--nested">
    
      <input class="md-toggle md-nav__toggle" data-md-toggle="nav-6" type="checkbox" id="nav-6" checked>
    
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

        
          
          
          

  


  <li class="md-nav__item md-nav__item--active">
    
    <input class="md-toggle md-nav__toggle" data-md-toggle="toc" type="checkbox" id="__toc">
    
      
    
    
      <label class="md-nav__link md-nav__link--active" for="__toc">
        Events
      </label>
    
    <a href="./" title="Events" class="md-nav__link md-nav__link--active">
      Events
    </a>
    
      
<nav class="md-nav md-nav--secondary">
  
  
    
  
  
    <label class="md-nav__title" for="__toc">Table of contents</label>
    <ul class="md-nav__list" data-md-scrollfix>
      
        <li class="md-nav__item">
  <a href="#registering-events-listeners" title="Registering Events &amp; Listeners" class="md-nav__link">
    Registering Events &amp; Listeners
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#generating-events-listeners" title="Generating Events &amp; Listeners" class="md-nav__link">
    Generating Events &amp; Listeners
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#manually-registering-events" title="Manually Registering Events" class="md-nav__link">
    Manually Registering Events
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#wildcard-event-listeners" title="Wildcard Event Listeners" class="md-nav__link">
    Wildcard Event Listeners
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#defining-events" title="Defining Events" class="md-nav__link">
    Defining Events
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#defining-listeners" title="Defining Listeners" class="md-nav__link">
    Defining Listeners
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#stopping-the-propagation-of-an-event" title="Stopping The Propagation Of An Event" class="md-nav__link">
    Stopping The Propagation Of An Event
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#queued-event-listeners" title="Queued Event Listeners" class="md-nav__link">
    Queued Event Listeners
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#customizing-the-queue-connection-queue-name" title="Customizing The Queue Connection &amp; Queue Name" class="md-nav__link">
    Customizing The Queue Connection &amp; Queue Name
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#manually-accessing-the-queue" title="Manually Accessing The Queue" class="md-nav__link">
    Manually Accessing The Queue
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#handling-failed-jobs" title="Handling Failed Jobs" class="md-nav__link">
    Handling Failed Jobs
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#dispatching-events" title="Dispatching Events" class="md-nav__link">
    Dispatching Events
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#event-subscribers" title="Event Subscribers" class="md-nav__link">
    Event Subscribers
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#writing-event-subscribers" title="Writing Event Subscribers" class="md-nav__link">
    Writing Event Subscribers
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#registering-event-subscribers" title="Registering Event Subscribers" class="md-nav__link">
    Registering Event Subscribers
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
      
      
      
      
    </ul>
  
</nav>
    
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
  <a href="#registering-events-listeners" title="Registering Events &amp; Listeners" class="md-nav__link">
    Registering Events &amp; Listeners
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#generating-events-listeners" title="Generating Events &amp; Listeners" class="md-nav__link">
    Generating Events &amp; Listeners
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#manually-registering-events" title="Manually Registering Events" class="md-nav__link">
    Manually Registering Events
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#wildcard-event-listeners" title="Wildcard Event Listeners" class="md-nav__link">
    Wildcard Event Listeners
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#defining-events" title="Defining Events" class="md-nav__link">
    Defining Events
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#defining-listeners" title="Defining Listeners" class="md-nav__link">
    Defining Listeners
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#stopping-the-propagation-of-an-event" title="Stopping The Propagation Of An Event" class="md-nav__link">
    Stopping The Propagation Of An Event
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#queued-event-listeners" title="Queued Event Listeners" class="md-nav__link">
    Queued Event Listeners
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#customizing-the-queue-connection-queue-name" title="Customizing The Queue Connection &amp; Queue Name" class="md-nav__link">
    Customizing The Queue Connection &amp; Queue Name
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#manually-accessing-the-queue" title="Manually Accessing The Queue" class="md-nav__link">
    Manually Accessing The Queue
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#handling-failed-jobs" title="Handling Failed Jobs" class="md-nav__link">
    Handling Failed Jobs
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#dispatching-events" title="Dispatching Events" class="md-nav__link">
    Dispatching Events
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#event-subscribers" title="Event Subscribers" class="md-nav__link">
    Event Subscribers
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#writing-event-subscribers" title="Writing Event Subscribers" class="md-nav__link">
    Writing Event Subscribers
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#registering-event-subscribers" title="Registering Event Subscribers" class="md-nav__link">
    Registering Event Subscribers
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
                  <a href="https://github.com/space-mvc/space-mvc/edit/master/docs/events.md" title="Edit this page" class="md-icon md-content__icon">&#xE3C9;</a>
                 -->

                
                <h1 id="events">Events</h1>
<p>Space MVC's events provide a simple observer implementation, allowing you to subscribe and listen for various events that occur in your application. Event classes are typically stored in the app/Events directory, while their listeners are stored in app/Listeners. Don't worry if you don't see these directories in your application, since they will be created for you as you generate events and listeners using Artisan console commands.
Events serve as a great way to decouple various aspects of your application, since a single event can have multiple listeners that do not depend on each other. For example, you may wish to send a Slack notification to your user each time an order has shipped. Instead of coupling your order processing code to your Slack notification code, you can raise an OrderShipped event, which a listener can receive and transform into a Slack notification.
<a name="registering-events-and-listeners"></a></p>
<h2 id="registering-events-listeners"><a href="#registering-events-and-listeners">Registering Events &amp; Listeners</a></h2>
<p>The EventServiceProvider included with your Space MVC application provides a convenient place to register all of your application's event listeners. The listen property contains an array of all events (keys) and their listeners (values). Of course, you may add as many events to this array as your application requires. For example, let's add a OrderShipped event:</p>
<pre><code class="php">/**
 * The event listener mappings for the application.
 *
 * @var array
 */
protected $listen = [
    'App\Events\OrderShipped' =&gt; [
        'App\Listeners\SendShipmentNotification',
    ],
];
</code></pre>

<p><a name="generating-events-and-listeners"></a></p>
<h3 id="generating-events-listeners">Generating Events &amp; Listeners</h3>
<p>Of course, manually creating the files for each event and listener is cumbersome. Instead, add listeners and events to your EventServiceProvider and use the event:generate command. This command will generate any events or listeners that are listed in your EventServiceProvider. Of course, events and listeners that already exist will be left untouched:</p>
<pre><code class="php">php artisan event:generate
</code></pre>

<p><a name="manually-registering-events"></a></p>
<h3 id="manually-registering-events">Manually Registering Events</h3>
<p>Typically, events should be registered via the EventServiceProvider $listen array; however, you may also register Closure based events manually in the boot method of your EventServiceProvider:</p>
<pre><code class="php">/**
 * Register any other events for your application.
 *
 * @return void
 */
public function boot()
{
    parent::boot();

    Event::listen('event.name', function ($foo, $bar) {
        //
    });
}
</code></pre>

<h4 id="wildcard-event-listeners">Wildcard Event Listeners</h4>
<p>You may even register listeners using the * as a wildcard parameter, allowing you to catch multiple events on the same listener. Wildcard listeners receive the event name as their first argument, and the entire event data array as their second argument:</p>
<pre><code class="php">Event::listen('event.*', function ($eventName, array $data) {
    //
});
</code></pre>

<p><a name="defining-events"></a></p>
<h2 id="defining-events"><a href="#defining-events">Defining Events</a></h2>
<p>An event class is a data container which holds the information related to the event. For example, let's assume our generated OrderShipped event receives an <a href="/docs/5.7/eloquent">Eloquent ORM</a> object:</p>
<pre><code class="php">&lt;?php

namespace App\Events;

use App\Order;
use Illuminate\Queue\SerializesModels;

class OrderShipped
{
    use SerializesModels;

    public $order;

    /**
     * Create a new event instance.
     *
     * @param  \App\Order  $order
     * @return void
     */
    public function __construct(Order $order)
    {
        $this-&gt;order = $order;
    }
}
</code></pre>

<p>As you can see, this event class contains no logic. It is a container for the Order instance that was purchased. The SerializesModels trait used by the event will gracefully serialize any Eloquent models if the event object is serialized using PHP's serialize function.
<a name="defining-listeners"></a></p>
<h2 id="defining-listeners"><a href="#defining-listeners">Defining Listeners</a></h2>
<p>Next, let's take a look at the listener for our example event. Event listeners receive the event instance in their handle method. The event:generate command will automatically import the proper event class and type-hint the event on the handle method. Within the handle method, you may perform any actions necessary to respond to the event:</p>
<pre><code class="php">&lt;?php

namespace App\Listeners;

use App\Events\OrderShipped;

class SendShipmentNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\OrderShipped  $event
     * @return void
     */
    public function handle(OrderShipped $event)
    {
        // Access the order using $event-&gt;order...
    }
}
</code></pre>

<p>Your event listeners may also type-hint any dependencies they need on their constructors. All event listeners are resolved via the Space MVC <a href="/docs/5.7/container">service container</a>, so dependencies will be injected automatically.</p>
<h4 id="stopping-the-propagation-of-an-event">Stopping The Propagation Of An Event</h4>
<p>Sometimes, you may wish to stop the propagation of an event to other listeners. You may do so by returning false from your listener's handle method.
<a name="queued-event-listeners"></a></p>
<h2 id="queued-event-listeners"><a href="#queued-event-listeners">Queued Event Listeners</a></h2>
<p>Queueing listeners can be beneficial if your listener is going to perform a slow task such as sending an e-mail or making an HTTP request. Before getting started with queued listeners, make sure to <a href="/docs/5.7/queues">configure your queue</a> and start a queue listener on your server or local development environment.
To specify that a listener should be queued, add the ShouldQueue interface to the listener class. Listeners generated by the event:generate Artisan command already have this interface imported into the current namespace, so you can use it immediately:</p>
<pre><code class="php">&lt;?php

namespace App\Listeners;

use App\Events\OrderShipped;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendShipmentNotification implements ShouldQueue
{
    //
}
</code></pre>

<p>That's it! Now, when this listener is called for an event, it will be automatically queued by the event dispatcher using Space MVC's <a href="/docs/5.7/queues">queue system</a>. If no exceptions are thrown when the listener is executed by the queue, the queued job will automatically be deleted after it has finished processing.</p>
<h4 id="customizing-the-queue-connection-queue-name">Customizing The Queue Connection &amp; Queue Name</h4>
<p>If you would like to customize the queue connection and queue name used by an event listener, you may define $connection and $queue properties on your listener class:</p>
<pre><code class="php">&lt;?php

namespace App\Listeners;

use App\Events\OrderShipped;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendShipmentNotification implements ShouldQueue
{
    /**
     * The name of the connection the job should be sent to.
     *
     * @var string|null
     */
    public $connection = 'sqs';

    /**
     * The name of the queue the job should be sent to.
     *
     * @var string|null
     */
    public $queue = 'listeners';
}
</code></pre>

<p><a name="manually-accessing-the-queue"></a></p>
<h3 id="manually-accessing-the-queue">Manually Accessing The Queue</h3>
<p>If you need to manually access the listener's underlying queue job's delete and release methods, you may do so using the Illuminate\Queue\InteractsWithQueue trait. This trait is imported by default on generated listeners and provides access to these methods:</p>
<pre><code class="php">&lt;?php

namespace App\Listeners;

use App\Events\OrderShipped;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendShipmentNotification implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Handle the event.
     *
     * @param  \App\Events\OrderShipped  $event
     * @return void
     */
    public function handle(OrderShipped $event)
    {
        if (true) {
            $this-&gt;release(30);
        }
    }
}
</code></pre>

<p><a name="handling-failed-jobs"></a></p>
<h3 id="handling-failed-jobs">Handling Failed Jobs</h3>
<p>Sometimes your queued event listeners may fail. If queued listener exceeds the maximum number of attempts as defined by your queue worker, the failed method will be called on your listener. The failed method receives the event instance and the exception that caused the failure:</p>
<pre><code class="php">&lt;?php

namespace App\Listeners;

use App\Events\OrderShipped;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendShipmentNotification implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Handle the event.
     *
     * @param  \App\Events\OrderShipped  $event
     * @return void
     */
    public function handle(OrderShipped $event)
    {
        //
    }

    /**
     * Handle a job failure.
     *
     * @param  \App\Events\OrderShipped  $event
     * @param  \Exception  $exception
     * @return void
     */
    public function failed(OrderShipped $event, $exception)
    {
        //
    }
}
</code></pre>

<p><a name="dispatching-events"></a></p>
<h2 id="dispatching-events"><a href="#dispatching-events">Dispatching Events</a></h2>
<p>To dispatch an event, you may pass an instance of the event to the event helper. The helper will dispatch the event to all of its registered listeners. Since the event helper is globally available, you may call it from anywhere in your application:</p>
<pre><code class="php">&lt;?php

namespace App\Http\Controllers;

use App\Order;
use App\Events\OrderShipped;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
     * Ship the given order.
     *
     * @param  int  $orderId
     * @return Response
     */
    public function ship($orderId)
    {
        $order = Order::findOrFail($orderId);

        // Order shipment logic...

        event(new OrderShipped($order));
    }
}
</code></pre>

<p>When testing, it can be helpful to assert that certain events were dispatched without actually triggering their listeners. Space MVC's <a href="/docs/5.7/mocking#event-fake">built-in testing helpers</a> makes it a cinch.
<a name="event-subscribers"></a></p>
<h2 id="event-subscribers"><a href="#event-subscribers">Event Subscribers</a></h2>
<p><a name="writing-event-subscribers"></a></p>
<h3 id="writing-event-subscribers">Writing Event Subscribers</h3>
<p>Event subscribers are classes that may subscribe to multiple events from within the class itself, allowing you to define several event handlers within a single class. Subscribers should define a subscribe method, which will be passed an event dispatcher instance. You may call the listen method on the given dispatcher to register event listeners:</p>
<pre><code class="php">&lt;?php

namespace App\Listeners;

class UserEventSubscriber
{
    /**
     * Handle user login events.
     */
    public function onUserLogin($event) {}

    /**
     * Handle user logout events.
     */
    public function onUserLogout($event) {}

    /**
     * Register the listeners for the subscriber.
     *
     * @param  \Illuminate\Events\Dispatcher  $events
     */
    public function subscribe($events)
    {
        $events-&gt;listen(
            'Illuminate\Auth\Events\Login',
            'App\Listeners\UserEventSubscriber@onUserLogin'
        );

        $events-&gt;listen(
            'Illuminate\Auth\Events\Logout',
            'App\Listeners\UserEventSubscriber@onUserLogout'
        );
    }
}
</code></pre>

<p><a name="registering-event-subscribers"></a></p>
<h3 id="registering-event-subscribers">Registering Event Subscribers</h3>
<p>After writing the subscriber, you are ready to register it with the event dispatcher. You may register subscribers using the $subscribe property on the EventServiceProvider. For example, let's add the UserEventSubscriber to the list:</p>
<pre><code class="php">&lt;?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        //
    ];

    /**
     * The subscriber classes to register.
     *
     * @var array
     */
    protected $subscribe = [
        'App\Listeners\UserEventSubscriber',
    ];
}
</code></pre>
                
                  
                
              
              
                


              
            </article>
          </div>
        </div>
      </main>

      <div style="height:50px;"></div>

      
        
<footer class="md-footer">
  
    <div class="md-footer-nav">
      <nav class="md-footer-nav__inner md-grid">
        
          <a href="../cache/" title="Cache" class="md-flex md-footer-nav__link md-footer-nav__link--prev" rel="prev">
            <div class="md-flex__cell md-flex__cell--shrink">
              <i class="md-icon md-icon--arrow-back md-footer-nav__button"></i>
            </div>
            <div class="md-flex__cell md-flex__cell--stretch md-footer-nav__title">
              <span class="md-flex__ellipsis">
                <span class="md-footer-nav__direction">
                  Previous
                </span>
                Cache
              </span>
            </div>
          </a>
        
        
          <a href="../mail/" title="Mail" class="md-flex md-footer-nav__link md-footer-nav__link--next" rel="next">
            <div class="md-flex__cell md-flex__cell--stretch md-footer-nav__title">
              <span class="md-flex__ellipsis">
                <span class="md-footer-nav__direction">
                  Next
                </span>
                Mail
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
