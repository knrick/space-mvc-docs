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
    
    
      
        <title>Broadcasting - Space MVC Framework</title>
      
    
    
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
    
      <a href="#broadcasting" tabindex="1" class="md-skip">
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
                Broadcasting
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
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#configuration" title="Configuration" class="md-nav__link">
    Configuration
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#broadcast-service-provider" title="Broadcast Service Provider" class="md-nav__link">
    Broadcast Service Provider
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#csrf-token" title="CSRF Token" class="md-nav__link">
    CSRF Token
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#driver-prerequisites" title="Driver Prerequisites" class="md-nav__link">
    Driver Prerequisites
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#pusher" title="Pusher" class="md-nav__link">
    Pusher
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#redis" title="Redis" class="md-nav__link">
    Redis
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#socketio" title="Socket.IO" class="md-nav__link">
    Socket.IO
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#queue-prerequisites" title="Queue Prerequisites" class="md-nav__link">
    Queue Prerequisites
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#concept-overview" title="Concept Overview" class="md-nav__link">
    Concept Overview
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#using-an-example-application" title="Using An Example Application" class="md-nav__link">
    Using An Example Application
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#the-shouldbroadcast-interface" title="The ShouldBroadcast Interface" class="md-nav__link">
    The ShouldBroadcast Interface
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#authorizing-channels" title="Authorizing Channels" class="md-nav__link">
    Authorizing Channels
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#listening-for-event-broadcasts" title="Listening For Event Broadcasts" class="md-nav__link">
    Listening For Event Broadcasts
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#defining-broadcast-events" title="Defining Broadcast Events" class="md-nav__link">
    Defining Broadcast Events
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#broadcast-name" title="Broadcast Name" class="md-nav__link">
    Broadcast Name
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#broadcast-data" title="Broadcast Data" class="md-nav__link">
    Broadcast Data
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#broadcast-queue" title="Broadcast Queue" class="md-nav__link">
    Broadcast Queue
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#broadcast-conditions" title="Broadcast Conditions" class="md-nav__link">
    Broadcast Conditions
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#authorizing-channels_1" title="Authorizing Channels" class="md-nav__link">
    Authorizing Channels
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#defining-authorization-routes" title="Defining Authorization Routes" class="md-nav__link">
    Defining Authorization Routes
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#customizing-the-authorization-endpoint" title="Customizing The Authorization Endpoint" class="md-nav__link">
    Customizing The Authorization Endpoint
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#defining-authorization-callbacks" title="Defining Authorization Callbacks" class="md-nav__link">
    Defining Authorization Callbacks
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#authorization-callback-model-binding" title="Authorization Callback Model Binding" class="md-nav__link">
    Authorization Callback Model Binding
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#defining-channel-classes" title="Defining Channel Classes" class="md-nav__link">
    Defining Channel Classes
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#broadcasting-events" title="Broadcasting Events" class="md-nav__link">
    Broadcasting Events
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#only-to-others" title="Only To Others" class="md-nav__link">
    Only To Others
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#configuration_1" title="Configuration" class="md-nav__link">
    Configuration
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#receiving-broadcasts" title="Receiving Broadcasts" class="md-nav__link">
    Receiving Broadcasts
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#installing-space-mvc-echo" title="Installing Space MVC Echo" class="md-nav__link">
    Installing Space MVC Echo
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#using-an-existing-client-instance" title="Using An Existing Client Instance" class="md-nav__link">
    Using An Existing Client Instance
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#listening-for-events" title="Listening For Events" class="md-nav__link">
    Listening For Events
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#leaving-a-channel" title="Leaving A Channel" class="md-nav__link">
    Leaving A Channel
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#namespaces" title="Namespaces" class="md-nav__link">
    Namespaces
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#presence-channels" title="Presence Channels" class="md-nav__link">
    Presence Channels
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#authorizing-presence-channels" title="Authorizing Presence Channels" class="md-nav__link">
    Authorizing Presence Channels
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#joining-presence-channels" title="Joining Presence Channels" class="md-nav__link">
    Joining Presence Channels
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#broadcasting-to-presence-channels" title="Broadcasting To Presence Channels" class="md-nav__link">
    Broadcasting To Presence Channels
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#client-events" title="Client Events" class="md-nav__link">
    Client Events
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#notifications" title="Notifications" class="md-nav__link">
    Notifications
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
                  <a href="https://github.com/space-mvc/space-mvc/edit/master/docs/broadcasting.md" title="Edit this page" class="md-icon md-content__icon">&#xE3C9;</a>
                 -->

                
                <h1 id="broadcasting">Broadcasting</h1>
<p><ul>
        <li><a href="#introduction">Introduction</a>
            <ul>
                <li><a href="#configuration">Configuration</a></li>
                <li><a href="#driver-prerequisites">Driver Prerequisites</a></li>
            </ul></li>
        <li><a href="#concept-overview">Concept Overview</a>
            <ul>
                <li><a href="#using-example-application">Using An Example Application</a></li>
            </ul></li>
        <li><a href="#defining-broadcast-events">Defining Broadcast Events</a>
            <ul>
                <li><a href="#broadcast-name">Broadcast Name</a></li>
                <li><a href="#broadcast-data">Broadcast Data</a></li>
                <li><a href="#broadcast-queue">Broadcast Queue</a></li>
                <li><a href="#broadcast-conditions">Broadcast Conditions</a></li>
            </ul></li>
        <li><a href="#authorizing-channels">Authorizing Channels</a>
            <ul>
                <li><a href="#defining-authorization-routes">Defining Authorization Routes</a></li>
                <li><a href="#defining-authorization-callbacks">Defining Authorization Callbacks</a></li>
                <li><a href="#defining-channel-classes">Defining Channel Classes</a></li>
            </ul></li>
        <li><a href="#broadcasting-events">Broadcasting Events</a>
            <ul>
                <li><a href="#only-to-others">Only To Others</a></li>
            </ul></li>
        <li><a href="#receiving-broadcasts">Receiving Broadcasts</a>
            <ul>
                <li><a href="#installing-Space MVC-echo">Installing Space MVC Echo</a></li>
                <li><a href="#listening-for-events">Listening For Events</a></li>
                <li><a href="#leaving-a-channel">Leaving A Channel</a></li>
                <li><a href="#namespaces">Namespaces</a></li>
            </ul></li>
        <li><a href="#presence-channels">Presence Channels</a>
            <ul>
                <li><a href="#authorizing-presence-channels">Authorizing Presence Channels</a></li>
                <li><a href="#joining-presence-channels">Joining Presence Channels</a></li>
                <li><a href="#broadcasting-to-presence-channels">Broadcasting To Presence Channels</a></li>
            </ul></li>
        <li><a href="#client-events">Client Events</a></li>
        <li><a href="#notifications">Notifications</a></li>
    </ul>
<a name="introduction"></a></p>
<h2 id="introduction"><a href="#introduction">Introduction</a></h2>
<p>In many modern web applications, WebSockets are used to implement realtime, live-updating user interfaces. When some data is updated on the server, a message is typically sent over a WebSocket connection to be handled by the client. This provides a more robust, efficient alternative to continually polling your application for changes.
To assist you in building these types of applications, Space MVC makes it easy to "broadcast" your <a href="/docs/5.7/events">events</a> over a WebSocket connection. Broadcasting your Space MVC events allows you to share the same event names between your server-side code and your client-side JavaScript application.
Before diving into event broadcasting, make sure you have read all of the documentation regarding Space MVC <a href="/docs/5.7/events">events and listeners</a>.
<a name="configuration"></a></p>
<h3 id="configuration">Configuration</h3>
<p>All of your application's event broadcasting configuration is stored in the config/broadcasting.php configuration file. Space MVC supports several broadcast drivers out of the box: <a href="https://pusher.com">Pusher</a>, <a href="/docs/5.7/redis">Redis</a>, and a log driver for local development and debugging. Additionally, a null driver is included which allows you to totally disable broadcasting. A configuration example is included for each of these drivers in the config/broadcasting.php configuration file.</p>
<h4 id="broadcast-service-provider">Broadcast Service Provider</h4>
<p>Before broadcasting any events, you will first need to register the App\Providers\BroadcastServiceProvider. In fresh Space MVC applications, you only need to uncomment this provider in the providers array of your config/app.php configuration file. This provider will allow you to register the broadcast authorization routes and callbacks.</p>
<h4 id="csrf-token">CSRF Token</h4>
<p><a href="#installing-Space MVC-echo">Space MVC Echo</a> will need access to the current session's CSRF token. You should verify that your application's head HTML element defines a meta tag containing the CSRF token:</p>
<pre><code class="php">&lt;meta name=&quot;csrf-token&quot; content=&quot;{{ csrf_token() }}&quot;&gt;
</code></pre>

<p><a name="driver-prerequisites"></a></p>
<h3 id="driver-prerequisites">Driver Prerequisites</h3>
<h4 id="pusher">Pusher</h4>
<p>If you are broadcasting your events over <a href="https://pusher.com">Pusher</a>, you should install the Pusher PHP SDK using the Composer package manager:</p>
<pre><code class="php">composer require pusher/pusher-php-server &quot;~3.0&quot;
</code></pre>

<p>Next, you should configure your Pusher credentials in the config/broadcasting.php configuration file. An example Pusher configuration is already included in this file, allowing you to quickly specify your Pusher key, secret, and application ID. The config/broadcasting.php file's pusher configuration also allows you to specify additional options that are supported by Pusher, such as the cluster:</p>
<pre><code class="php">'options' =&gt; [
    'cluster' =&gt; 'eu',
    'encrypted' =&gt; true
],
</code></pre>

<p>When using Pusher and <a href="#installing-Space MVC-echo">Space MVC Echo</a>, you should specify pusher as your desired broadcaster when instantiating the Echo instance in your resources/js/bootstrap.js file:</p>
<pre><code class="php">import Echo from &quot;Space MVC-echo&quot;

window.Pusher = require('pusher-js');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: 'your-pusher-key'
});
</code></pre>

<h4 id="redis">Redis</h4>
<p>If you are using the Redis broadcaster, you should install the Predis library:</p>
<pre><code class="php">composer require predis/predis
</code></pre>

<p>The Redis broadcaster will broadcast messages using Redis' pub / sub feature; however, you will need to pair this with a WebSocket server that can receive the messages from Redis and broadcast them to your WebSocket channels.
When the Redis broadcaster publishes an event, it will be published on the event's specified channel names and the payload will be a JSON encoded string containing the event name, a data payload, and the user that generated the event's socket ID (if applicable).</p>
<h4 id="socketio">Socket.IO</h4>
<p>If you are going to pair the Redis broadcaster with a Socket.IO server, you will need to include the Socket.IO JavaScript client library in your application. You may install it via the NPM package manager:</p>
<pre><code class="php">npm install --save socket.io-client
</code></pre>

<p>Next, you will need to instantiate Echo with the socket.io connector and a host.</p>
<pre><code class="php">import Echo from &quot;Space MVC-echo&quot;

window.io = require('socket.io-client');

window.Echo = new Echo({
    broadcaster: 'socket.io',
    host: window.location.hostname + ':6001'
});
</code></pre>

<p>Finally, you will need to run a compatible Socket.IO server. Space MVC does not include a Socket.IO server implementation; however, a community driven Socket.IO server is currently maintained at the <a href="https://github.com/tlaverdure/Space MVC-echo-server">tlaverdure/Space MVC-echo-server</a> GitHub repository.</p>
<h4 id="queue-prerequisites">Queue Prerequisites</h4>
<p>Before broadcasting events, you will also need to configure and run a <a href="/docs/5.7/queues">queue listener</a>. All event broadcasting is done via queued jobs so that the response time of your application is not seriously affected.
<a name="concept-overview"></a></p>
<h2 id="concept-overview"><a href="#concept-overview">Concept Overview</a></h2>
<p>Space MVC's event broadcasting allows you to broadcast your server-side Space MVC events to your client-side JavaScript application using a driver-based approach to WebSockets. Currently, Space MVC ships with <a href="https://pusher.com">Pusher</a> and Redis drivers. The events may be easily consumed on the client-side using the <a href="#installing-Space MVC-echo">Space MVC Echo</a> Javascript package.
Events are broadcast over "channels", which may be specified as public or private. Any visitor to your application may subscribe to a public channel without any authentication or authorization; however, in order to subscribe to a private channel, a user must be authenticated and authorized to listen on that channel.
<a name="using-example-application"></a></p>
<h3 id="using-an-example-application">Using An Example Application</h3>
<p>Before diving into each component of event broadcasting, let's take a high level overview using an e-commerce store as an example. We won't discuss the details of configuring <a href="https://pusher.com">Pusher</a> or <a href="#installing-Space MVC-echo">Space MVC Echo</a> since that will be discussed in detail in other sections of this documentation.
In our application, let's assume we have a page that allows users to view the shipping status for their orders. Let's also assume that a ShippingStatusUpdated event is fired when a shipping status update is processed by the application:</p>
<pre><code class="php">event(new ShippingStatusUpdated($update));
</code></pre>

<h4 id="the-shouldbroadcast-interface">The ShouldBroadcast Interface</h4>
<p>When a user is viewing one of their orders, we don't want them to have to refresh the page to view status updates. Instead, we want to broadcast the updates to the application as they are created. So, we need to mark the ShippingStatusUpdated event with the ShouldBroadcast interface. This will instruct Space MVC to broadcast the event when it is fired:</p>
<pre><code class="php">&lt;?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ShippingStatusUpdated implements ShouldBroadcast
{
    /**
     * Information about the shipping status update.
     *
     * @var string
     */
    public $update;
}
</code></pre>

<p>The ShouldBroadcast interface requires our event to define a broadcastOn method. This method is responsible for returning the channels that the event should broadcast on. An empty stub of this method is already defined on generated event classes, so we only need to fill in its details. We only want the creator of the order to be able to view status updates, so we will broadcast the event on a private channel that is tied to the order:</p>
<pre><code class="php">/**
 * Get the channels the event should broadcast on.
 *
 * @return array
 */
public function broadcastOn()
{
    return new PrivateChannel('order.'.$this-&gt;update-&gt;order_id);
}
</code></pre>

<h4 id="authorizing-channels">Authorizing Channels</h4>
<p>Remember, users must be authorized to listen on private channels. We may define our channel authorization rules in the routes/channels.php file. In this example, we need to verify that any user attempting to listen on the private order.1 channel is actually the creator of the order:</p>
<pre><code class="php">Broadcast::channel('order.{orderId}', function ($user, $orderId) {
    return $user-&gt;id === Order::findOrNew($orderId)-&gt;user_id;
});
</code></pre>

<p>The channel method accepts two arguments: the name of the channel and a callback which returns true or false indicating whether the user is authorized to listen on the channel.
All authorization callbacks receive the currently authenticated user as their first argument and any additional wildcard parameters as their subsequent arguments. In this example, we are using the {orderId} placeholder to indicate that the "ID" portion of the channel name is a wildcard.</p>
<h4 id="listening-for-event-broadcasts">Listening For Event Broadcasts</h4>
<p>Next, all that remains is to listen for the event in our JavaScript application. We can do this using Space MVC Echo. First, we'll use the private method to subscribe to the private channel. Then, we may use the listen method to listen for the ShippingStatusUpdated event. By default, all of the event's public properties will be included on the broadcast event:</p>
<pre><code class="php">Echo.private(`order.${orderId}`)
    .listen('ShippingStatusUpdated', (e) =&gt; {
        console.log(e.update);
    });
</code></pre>

<p><a name="defining-broadcast-events"></a></p>
<h2 id="defining-broadcast-events"><a href="#defining-broadcast-events">Defining Broadcast Events</a></h2>
<p>To inform Space MVC that a given event should be broadcast, implement the Illuminate\Contracts\Broadcasting\ShouldBroadcast interface on the event class. This interface is already imported into all event classes generated by the framework so you may easily add it to any of your events.
The ShouldBroadcast interface requires you to implement a single method: broadcastOn. The broadcastOn method should return a channel or array of channels that the event should broadcast on. The channels should be instances of Channel, PrivateChannel, or PresenceChannel. Instances of Channel represent public channels that any user may subscribe to, while PrivateChannels and PresenceChannels represent private channels that require <a href="#authorizing-channels">channel authorization</a>:</p>
<pre><code class="php">&lt;?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ServerCreated implements ShouldBroadcast
{
    use SerializesModels;

    public $user;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this-&gt;user = $user;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('user.'.$this-&gt;user-&gt;id);
    }
}
</code></pre>

<p>Then, you only need to <a href="/docs/5.7/events">fire the event</a> as you normally would. Once the event has been fired, a <a href="/docs/5.7/queues">queued job</a> will automatically broadcast the event over your specified broadcast driver.
<a name="broadcast-name"></a></p>
<h3 id="broadcast-name">Broadcast Name</h3>
<p>By default, Space MVC will broadcast the event using the event's class name. However, you may customize the broadcast name by defining a broadcastAs method on the event:</p>
<pre><code class="php">/**
 * The event's broadcast name.
 *
 * @return string
 */
public function broadcastAs()
{
    return 'server.created';
}
</code></pre>

<p>If you customize the broadcast name using the broadcastAs method, you should make sure to register your listener with a leading . character. This will instruct Echo to not prepend the application's namespace to the event:</p>
<pre><code class="php">.listen('.server.created', function (e) {
    ....
});
</code></pre>

<p><a name="broadcast-data"></a></p>
<h3 id="broadcast-data">Broadcast Data</h3>
<p>When an event is broadcast, all of its public properties are automatically serialized and broadcast as the event's payload, allowing you to access any of its public data from your JavaScript application. So, for example, if your event has a single public $user property that contains an Eloquent model, the event's broadcast payload would be:</p>
<pre><code class="php">{
    &quot;user&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Patrick Stewart&quot;
        ...
    }
}
</code></pre>

<p>However, if you wish to have more fine-grained control over your broadcast payload, you may add a broadcastWith method to your event. This method should return the array of data that you wish to broadcast as the event payload:</p>
<pre><code class="php">/**
 * Get the data to broadcast.
 *
 * @return array
 */
public function broadcastWith()
{
    return ['id' =&gt; $this-&gt;user-&gt;id];
}
</code></pre>

<p><a name="broadcast-queue"></a></p>
<h3 id="broadcast-queue">Broadcast Queue</h3>
<p>By default, each broadcast event is placed on the default queue for the default queue connection specified in your queue.php configuration file. You may customize the queue used by the broadcaster by defining a broadcastQueue property on your event class. This property should specify the name of the queue you wish to use when broadcasting:</p>
<pre><code class="php">/**
 * The name of the queue on which to place the event.
 *
 * @var string
 */
public $broadcastQueue = 'your-queue-name';
</code></pre>

<p>If you want to broadcast your event using the sync queue instead of the default queue driver, you can implement the ShouldBroadcastNow interface instead of ShouldBroadcast:</p>
<pre><code class="php">&lt;?php

use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

class ShippingStatusUpdated implements ShouldBroadcastNow
{
    //
}
</code></pre>

<p><a name="broadcast-conditions"></a></p>
<h3 id="broadcast-conditions">Broadcast Conditions</h3>
<p>Sometimes you want to broadcast your event only if a given condition is true. You may define these conditions by adding a broadcastWhen method to your event class:</p>
<pre><code class="php">/**
 * Determine if this event should broadcast.
 *
 * @return bool
 */
public function broadcastWhen()
{
    return $this-&gt;value &gt; 100;
}
</code></pre>

<p><a name="authorizing-channels"></a></p>
<h2 id="authorizing-channels_1"><a href="#authorizing-channels">Authorizing Channels</a></h2>
<p>Private channels require you to authorize that the currently authenticated user can actually listen on the channel. This is accomplished by making an HTTP request to your Space MVC application with the channel name and allowing your application to determine if the user can listen on that channel. When using <a href="#installing-Space MVC-echo">Space MVC Echo</a>, the HTTP request to authorize subscriptions to private channels will be made automatically; however, you do need to define the proper routes to respond to these requests.
<a name="defining-authorization-routes"></a></p>
<h3 id="defining-authorization-routes">Defining Authorization Routes</h3>
<p>Thankfully, Space MVC makes it easy to define the routes to respond to channel authorization requests. In the BroadcastServiceProvider included with your Space MVC application, you will see a call to the Broadcast::routes method. This method will register the /broadcasting/auth route to handle authorization requests:</p>
<pre><code class="php">Broadcast::routes();
</code></pre>

<p>The Broadcast::routes method will automatically place its routes within the web middleware group; however, you may pass an array of route attributes to the method if you would like to customize the assigned attributes:</p>
<pre><code class="php">Broadcast::routes($attributes);
</code></pre>

<h4 id="customizing-the-authorization-endpoint">Customizing The Authorization Endpoint</h4>
<p>By default, Echo will use the /broadcasting/auth endpoint to authorize channel access. However, you may specify your own authorization endpoint by passing the authEndpoint configuration option to your Echo instance:</p>
<pre><code class="php">window.Echo = new Echo({
    broadcaster: 'pusher',
    key: 'your-pusher-key',
    authEndpoint: '/custom/endpoint/auth'
});
</code></pre>

<p><a name="defining-authorization-callbacks"></a></p>
<h3 id="defining-authorization-callbacks">Defining Authorization Callbacks</h3>
<p>Next, we need to define the logic that will actually perform the channel authorization. This is done in the routes/channels.php file that is included with your application. In this file, you may use the Broadcast::channel method to register channel authorization callbacks:</p>
<pre><code class="php">Broadcast::channel('order.{orderId}', function ($user, $orderId) {
    return $user-&gt;id === Order::findOrNew($orderId)-&gt;user_id;
});
</code></pre>

<p>The channel method accepts two arguments: the name of the channel and a callback which returns true or false indicating whether the user is authorized to listen on the channel.
All authorization callbacks receive the currently authenticated user as their first argument and any additional wildcard parameters as their subsequent arguments. In this example, we are using the {orderId} placeholder to indicate that the "ID" portion of the channel name is a wildcard.</p>
<h4 id="authorization-callback-model-binding">Authorization Callback Model Binding</h4>
<p>Just like HTTP routes, channel routes may also take advantage of implicit and explicit <a href="/docs/5.7/routing#route-model-binding">route model binding</a>. For example, instead of receiving the string or numeric order ID, you may request an actual Order model instance:</p>
<pre><code class="php">use App\Order;

Broadcast::channel('order.{order}', function ($user, Order $order) {
    return $user-&gt;id === $order-&gt;user_id;
});
</code></pre>

<p><a name="defining-channel-classes"></a></p>
<h3 id="defining-channel-classes">Defining Channel Classes</h3>
<p>If your application is consuming many different channels, your routes/channels.php file could become bulky. So, instead of using Closures to authorize channels, you may use channel classes. To generate a channel class, use the make:channel Artisan command. This command will place a new channel class in the App/Broadcasting directory.</p>
<pre><code class="php">php artisan make:channel OrderChannel
</code></pre>

<p>Next, register your channel in your routes/channels.php file:</p>
<pre><code class="php">use App\Broadcasting\OrderChannel;

Broadcast::channel('order.{order}', OrderChannel::class);
</code></pre>

<p>Finally, you may place the authorization logic for your channel in the channel class' join method. This join method will house the same logic you would have typically placed in your channel authorization Closure. Of course, you may also take advantage of channel model binding:</p>
<pre><code class="php">&lt;?php

namespace App\Broadcasting;

use App\User;
use App\Order;

class OrderChannel
{
    /**
     * Create a new channel instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Authenticate the user's access to the channel.
     *
     * @param  \App\User  $user
     * @param  \App\Order  $order
     * @return array|bool
     */
    public function join(User $user, Order $order)
    {
        return $user-&gt;id === $order-&gt;user_id;
    }
}
</code></pre>

<p>Like many other classes in Space MVC, channel classes will automatically be resolved by the <a href="/docs/5.7/container">service container</a>. So, you may type-hint any dependencies required by your channel in its constructor.
<a name="broadcasting-events"></a></p>
<h2 id="broadcasting-events"><a href="#broadcasting-events">Broadcasting Events</a></h2>
<p>Once you have defined an event and marked it with the ShouldBroadcast interface, you only need to fire the event using the event function. The event dispatcher will notice that the event is marked with the ShouldBroadcast interface and will queue the event for broadcasting:</p>
<pre><code class="php">event(new ShippingStatusUpdated($update));
</code></pre>

<p><a name="only-to-others"></a></p>
<h3 id="only-to-others">Only To Others</h3>
<p>When building an application that utilizes event broadcasting, you may substitute the event function with the broadcast function. Like the event function, the broadcast function dispatches the event to your server-side listeners:</p>
<pre><code class="php">broadcast(new ShippingStatusUpdated($update));
</code></pre>

<p>However, the broadcast function also exposes the toOthers method which allows you to exclude the current user from the broadcast's recipients:</p>
<pre><code class="php">broadcast(new ShippingStatusUpdated($update))-&gt;toOthers();
</code></pre>

<p>To better understand when you may want to use the toOthers method, let's imagine a task list application where a user may create a new task by entering a task name. To create a task, your application might make a request to a /task end-point which broadcasts the task's creation and returns a JSON representation of the new task. When your JavaScript application receives the response from the end-point, it might directly insert the new task into its task list like so:</p>
<pre><code class="php">axios.post('/task', task)
    .then((response) =&gt; {
        this.tasks.push(response.data);
    });
</code></pre>

<p>However, remember that we also broadcast the task's creation. If your JavaScript application is listening for this event in order to add tasks to the task list, you will have duplicate tasks in your list: one from the end-point and one from the broadcast. You may solve this by using the toOthers method to instruct the broadcaster to not broadcast the event to the current user.
Your event must use the Illuminate\Broadcasting\InteractsWithSockets trait in order to call the toOthers method.</p>
<h4 id="configuration_1">Configuration</h4>
<p>When you initialize a Space MVC Echo instance, a socket ID is assigned to the connection. If you are using <a href="https://vuejs.org">Vue</a> and <a href="https://github.com/mzabriskie/axios">Axios</a>, the socket ID will automatically be attached to every outgoing request as a X-Socket-ID header. Then, when you call the toOthers method, Space MVC will extract the socket ID from the header and instruct the broadcaster to not broadcast to any connections with that socket ID.
If you are not using Vue and Axios, you will need to manually configure your JavaScript application to send the X-Socket-ID header. You may retrieve the socket ID using the Echo.socketId method:</p>
<pre><code class="php">var socketId = Echo.socketId();
</code></pre>

<p><a name="receiving-broadcasts"></a></p>
<h2 id="receiving-broadcasts"><a href="#receiving-broadcasts">Receiving Broadcasts</a></h2>
<p><a name="installing-Space MVC-echo"></a></p>
<h3 id="installing-space-mvc-echo">Installing Space MVC Echo</h3>
<p>Space MVC Echo is a JavaScript library that makes it painless to subscribe to channels and listen for events broadcast by Space MVC. You may install Echo via the NPM package manager. In this example, we will also install the pusher-js package since we will be using the Pusher broadcaster:</p>
<pre><code class="php">npm install --save Space MVC-echo pusher-js
</code></pre>

<p>Once Echo is installed, you are ready to create a fresh Echo instance in your application's JavaScript. A great place to do this is at the bottom of the resources/js/bootstrap.js file that is included with the Space MVC framework:</p>
<pre><code class="php">import Echo from &quot;Space MVC-echo&quot;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: 'your-pusher-key'
});
</code></pre>

<p>When creating an Echo instance that uses the pusher connector, you may also specify a cluster as well as whether the connection should be encrypted:</p>
<pre><code class="php">window.Echo = new Echo({
    broadcaster: 'pusher',
    key: 'your-pusher-key',
    cluster: 'eu',
    encrypted: true
});
</code></pre>

<h4 id="using-an-existing-client-instance">Using An Existing Client Instance</h4>
<p>If you already have a Pusher or Socket.io client instance that you would like Echo to utilize, you may pass it to Echo via the client configuration option:</p>
<pre><code class="php">const client = require('pusher-js');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: 'your-pusher-key',
    client: client
});
</code></pre>

<p><a name="listening-for-events"></a></p>
<h3 id="listening-for-events">Listening For Events</h3>
<p>Once you have installed and instantiated Echo, you are ready to start listening for event broadcasts. First, use the channel method to retrieve an instance of a channel, then call the listen method to listen for a specified event:</p>
<pre><code class="php">Echo.channel('orders')
    .listen('OrderShipped', (e) =&gt; {
        console.log(e.order.name);
    });
</code></pre>

<p>If you would like to listen for events on a private channel, use the private method instead. You may continue to chain calls to the listen method to listen for multiple events on a single channel:</p>
<pre><code class="php">Echo.private('orders')
    .listen(...)
    .listen(...)
    .listen(...);
</code></pre>

<p><a name="leaving-a-channel"></a></p>
<h3 id="leaving-a-channel">Leaving A Channel</h3>
<p>To leave a channel, you may call the leave method on your Echo instance:</p>
<pre><code class="php">Echo.leave('orders');
</code></pre>

<p><a name="namespaces"></a></p>
<h3 id="namespaces">Namespaces</h3>
<p>You may have noticed in the examples above that we did not specify the full namespace for the event classes. This is because Echo will automatically assume the events are located in the App\Events namespace. However, you may configure the root namespace when you instantiate Echo by passing a namespace configuration option:</p>
<pre><code class="php">window.Echo = new Echo({
    broadcaster: 'pusher',
    key: 'your-pusher-key',
    namespace: 'App.Other.Namespace'
});
</code></pre>

<p>Alternatively, you may prefix event classes with a . when subscribing to them using Echo. This will allow you to always specify the fully-qualified class name:</p>
<pre><code class="php">Echo.channel('orders')
    .listen('.Namespace.Event.Class', (e) =&gt; {
        //
    });
</code></pre>

<p><a name="presence-channels"></a></p>
<h2 id="presence-channels"><a href="#presence-channels">Presence Channels</a></h2>
<p>Presence channels build on the security of private channels while exposing the additional feature of awareness of who is subscribed to the channel. This makes it easy to build powerful, collaborative application features such as notifying users when another user is viewing the same page.
<a name="authorizing-presence-channels"></a></p>
<h3 id="authorizing-presence-channels">Authorizing Presence Channels</h3>
<p>All presence channels are also private channels; therefore, users must be <a href="#authorizing-channels">authorized to access them</a>. However, when defining authorization callbacks for presence channels, you will not return true if the user is authorized to join the channel. Instead, you should return an array of data about the user.
The data returned by the authorization callback will be made available to the presence channel event listeners in your JavaScript application. If the user is not authorized to join the presence channel, you should return false or null:</p>
<pre><code class="php">Broadcast::channel('chat.{roomId}', function ($user, $roomId) {
    if ($user-&gt;canJoinRoom($roomId)) {
        return ['id' =&gt; $user-&gt;id, 'name' =&gt; $user-&gt;name];
    }
});
</code></pre>

<p><a name="joining-presence-channels"></a></p>
<h3 id="joining-presence-channels">Joining Presence Channels</h3>
<p>To join a presence channel, you may use Echo's join method. The join method will return a PresenceChannel implementation which, along with exposing the listen method, allows you to subscribe to the here, joining, and leaving events.</p>
<pre><code class="php">Echo.join(`chat.${roomId}`)
    .here((users) =&gt; {
        //
    })
    .joining((user) =&gt; {
        console.log(user.name);
    })
    .leaving((user) =&gt; {
        console.log(user.name);
    });
</code></pre>

<p>The here callback will be executed immediately once the channel is joined successfully, and will receive an array containing the user information for all of the other users currently subscribed to the channel. The joining method will be executed when a new user joins a channel, while the leaving method will be executed when a user leaves the channel.
<a name="broadcasting-to-presence-channels"></a></p>
<h3 id="broadcasting-to-presence-channels">Broadcasting To Presence Channels</h3>
<p>Presence channels may receive events just like public or private channels. Using the example of a chatroom, we may want to broadcast NewMessage events to the room's presence channel. To do so, we'll return an instance of PresenceChannel from the event's broadcastOn method:</p>
<pre><code class="php">/**
 * Get the channels the event should broadcast on.
 *
 * @return Channel|array
 */
public function broadcastOn()
{
    return new PresenceChannel('room.'.$this-&gt;message-&gt;room_id);
}
</code></pre>

<p>Like public or private events, presence channel events may be broadcast using the broadcast function. As with other events, you may use the toOthers method to exclude the current user from receiving the broadcast:</p>
<pre><code class="php">broadcast(new NewMessage($message));

broadcast(new NewMessage($message))-&gt;toOthers();
</code></pre>

<p>You may listen for the join event via Echo's listen method:</p>
<pre><code class="php">Echo.join(`chat.${roomId}`)
    .here(...)
    .joining(...)
    .leaving(...)
    .listen('NewMessage', (e) =&gt; {
        //
    });
</code></pre>

<p><a name="client-events"></a></p>
<h2 id="client-events"><a href="#client-events">Client Events</a></h2>
<p>When using <a href="https://pusher.com">Pusher</a>, you must enable the "Client Events" option in the "App Settings" section of your <a href="https://dashboard.pusher.com/">application dashboard</a> in order to send client events.
Sometimes you may wish to broadcast an event to other connected clients without hitting your Space MVC application at all. This can be particularly useful for things like "typing" notifications, where you want to alert users of your application that another user is typing a message on a given screen.
To broadcast client events, you may use Echo's whisper method:</p>
<pre><code class="php">Echo.private('chat')
    .whisper('typing', {
        name: this.user.name
    });
</code></pre>

<p>To listen for client events, you may use the listenForWhisper method:</p>
<pre><code class="php">Echo.private('chat')
    .listenForWhisper('typing', (e) =&gt; {
        console.log(e.name);
    });
</code></pre>

<p><a name="notifications"></a></p>
<h2 id="notifications"><a href="#notifications">Notifications</a></h2>
<p>By pairing event broadcasting with <a href="/docs/5.7/notifications">notifications</a>, your JavaScript application may receive new notifications as they occur without needing to refresh the page. First, be sure to read over the documentation on using <a href="/docs/5.7/notifications#broadcast-notifications">the broadcast notification channel</a>.
Once you have configured a notification to use the broadcast channel, you may listen for the broadcast events using Echo's notification method. Remember, the channel name should match the class name of the entity receiving the notifications:</p>
<pre><code class="php">Echo.private(`App.User.${userId}`)
    .notification((notification) =&gt; {
        console.log(notification.type);
    });
</code></pre>

<p>In this example, all notifications sent to App\User instances via the broadcast channel would be received by the callback. A channel authorization callback for the App.User.{id} channel is included in the default BroadcastServiceProvider that ships with the Space MVC framework.</p>
                
                  
                
              
              
                


              
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
