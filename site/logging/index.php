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
    
    
      
        <title>Logging - Space MVC Framework</title>
      
    
    
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
    
      <a href="#logging" tabindex="1" class="md-skip">
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
                Logging
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

        
          
          
          

  


  <li class="md-nav__item md-nav__item--active">
    
    <input class="md-toggle md-nav__toggle" data-md-toggle="toc" type="checkbox" id="__toc">
    
      
    
    
      <label class="md-nav__link md-nav__link--active" for="__toc">
        Logging
      </label>
    
    <a href="./" title="Logging" class="md-nav__link md-nav__link--active">
      Logging
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
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#configuring-the-channel-name" title="Configuring The Channel Name" class="md-nav__link">
    Configuring The Channel Name
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#available-channel-drivers" title="Available Channel Drivers" class="md-nav__link">
    Available Channel Drivers
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#configuring-the-slack-channel" title="Configuring The Slack Channel" class="md-nav__link">
    Configuring The Slack Channel
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#building-log-stacks" title="Building Log Stacks" class="md-nav__link">
    Building Log Stacks
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#log-levels" title="Log Levels" class="md-nav__link">
    Log Levels
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#writing-log-messages" title="Writing Log Messages" class="md-nav__link">
    Writing Log Messages
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#contextual-information" title="Contextual Information" class="md-nav__link">
    Contextual Information
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#writing-to-specific-channels" title="Writing To Specific Channels" class="md-nav__link">
    Writing To Specific Channels
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#advanced-monolog-channel-customization" title="Advanced Monolog Channel Customization" class="md-nav__link">
    Advanced Monolog Channel Customization
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#customizing-monolog-for-channels" title="Customizing Monolog For Channels" class="md-nav__link">
    Customizing Monolog For Channels
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#creating-monolog-handler-channels" title="Creating Monolog Handler Channels" class="md-nav__link">
    Creating Monolog Handler Channels
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#monolog-formatters" title="Monolog Formatters" class="md-nav__link">
    Monolog Formatters
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#creating-channels-via-factories" title="Creating Channels Via Factories" class="md-nav__link">
    Creating Channels Via Factories
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
      
      
      
      
    </ul>
  
</nav>
    
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
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#configuring-the-channel-name" title="Configuring The Channel Name" class="md-nav__link">
    Configuring The Channel Name
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#available-channel-drivers" title="Available Channel Drivers" class="md-nav__link">
    Available Channel Drivers
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#configuring-the-slack-channel" title="Configuring The Slack Channel" class="md-nav__link">
    Configuring The Slack Channel
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#building-log-stacks" title="Building Log Stacks" class="md-nav__link">
    Building Log Stacks
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#log-levels" title="Log Levels" class="md-nav__link">
    Log Levels
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#writing-log-messages" title="Writing Log Messages" class="md-nav__link">
    Writing Log Messages
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#contextual-information" title="Contextual Information" class="md-nav__link">
    Contextual Information
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#writing-to-specific-channels" title="Writing To Specific Channels" class="md-nav__link">
    Writing To Specific Channels
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#advanced-monolog-channel-customization" title="Advanced Monolog Channel Customization" class="md-nav__link">
    Advanced Monolog Channel Customization
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#customizing-monolog-for-channels" title="Customizing Monolog For Channels" class="md-nav__link">
    Customizing Monolog For Channels
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#creating-monolog-handler-channels" title="Creating Monolog Handler Channels" class="md-nav__link">
    Creating Monolog Handler Channels
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#monolog-formatters" title="Monolog Formatters" class="md-nav__link">
    Monolog Formatters
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#creating-channels-via-factories" title="Creating Channels Via Factories" class="md-nav__link">
    Creating Channels Via Factories
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
                  <a href="https://github.com/space-mvc/space-mvc/edit/master/docs/logging.md" title="Edit this page" class="md-icon md-content__icon">&#xE3C9;</a>
                 -->

                
                <h1 id="logging">Logging</h1>
<h4 id="introduction">Introduction</h4>
<p>To help you learn more about what's happening within your application, Space MVC provides robust logging services that allow you to log messages to files, the system error log, and even to Slack to notify your entire team.
Under the hood, Space MVC utilizes the <a href="https://github.com/Seldaek/monolog">Monolog</a> library, which provides support for a variety of powerful log handlers. Space MVC makes it a cinch to configure these handlers, allowing you to mix and match them to customize your application's log handling.
<a name="configuration"></a></p>
<h2 id="configuration"><a href="#configuration">Configuration</a></h2>
<p>All of the configuration for your application's logging system is housed in the config/logging.php configuration file. This file allows you to configure your application's log channels, so be sure to review each of the available channels and their options. Of course, we'll review a few common options below.
By default, Space MVC will use the stack channel when logging messages. The stack channel is used to aggregate multiple log channels into a single channel. For more information on building stacks, check out the <a href="#building-log-stacks">documentation below</a>.</p>
<h4 id="configuring-the-channel-name">Configuring The Channel Name</h4>
<p>By default, Monolog is instantiated with a "channel name" that matches the current environment, such as production or local. To change this value, add a name option to your channel's configuration:</p>
<pre><code class="php">'stack' =&gt; [
    'driver' =&gt; 'stack',
    'name' =&gt; 'channel-name',
    'channels' =&gt; ['single', 'slack'],
],
</code></pre>

<h4 id="available-channel-drivers">Available Channel Drivers</h4>
<table>
<thead>
<tr>
<th>Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td>stack</td>
<td>A wrapper to facilitate creating "multi-channel" channels</td>
</tr>
<tr>
<td>single</td>
<td>A single file or path based logger channel (StreamHandler)</td>
</tr>
<tr>
<td>daily</td>
<td>A RotatingFileHandler based Monolog driver which rotates daily</td>
</tr>
<tr>
<td>slack</td>
<td>A SlackWebhookHandler based Monolog driver</td>
</tr>
<tr>
<td>syslog</td>
<td>A SyslogHandler based Monolog driver</td>
</tr>
<tr>
<td>errorlog</td>
<td>A ErrorLogHandler based Monolog driver</td>
</tr>
<tr>
<td>monolog</td>
<td>A Monolog factory driver that may use any supported Monolog handler</td>
</tr>
<tr>
<td>custom</td>
<td>A driver that calls a specified factory to create a channel</td>
</tr>
</tbody>
</table>
<p>Check out the documentation on <a href="#advanced-monolog-channel-customization">advanced channel customization</a> to learn more about the monolog and custom drivers.</p>
<h4 id="configuring-the-slack-channel">Configuring The Slack Channel</h4>
<p>The slack channel requires a url configuration option. This URL should match a URL for an <a href="https://slack.com/apps/A0F7XDUAZ-incoming-webhooks">incoming webhook</a> that you have configured for your Slack team.
<a name="building-log-stacks"></a></p>
<h3 id="building-log-stacks">Building Log Stacks</h3>
<p>As previously mentioned, the stack driver allows you to combine multiple channels into a single log channel. To illustrate how to use log stacks, let's take a look at an example configuration that you might see in a production application:</p>
<pre><code class="php">'channels' =&gt; [
    'stack' =&gt; [
        'driver' =&gt; 'stack',
        'channels' =&gt; ['syslog', 'slack'],
    ],

    'syslog' =&gt; [
        'driver' =&gt; 'syslog',
        'level' =&gt; 'debug',
    ],

    'slack' =&gt; [
        'driver' =&gt; 'slack',
        'url' =&gt; env('LOG_SLACK_WEBHOOK_URL'),
        'username' =&gt; 'Space MVC Log',
        'emoji' =&gt; ':boom:',
        'level' =&gt; 'critical',
    ],
],
</code></pre>

<p>Let's dissect this configuration. First, notice our stack channel aggregates two other channels via its channels option: syslog and slack. So, when logging messages, both of these channels will have the opportunity to log the message.</p>
<h4 id="log-levels">Log Levels</h4>
<p>Take note of the level configuration option present on the syslog and slack channel configurations in the example above. This option determines the minimum "level" a message must be in order to be logged by the channel. Monolog, which powers Space MVC's logging services, offers all of the log levels defined in the <a href="https://tools.ietf.org/html/rfc5424">RFC 5424 specification</a>: <strong>emergency</strong>, <strong>alert</strong>, <strong>critical</strong>, <strong>error</strong>, <strong>warning</strong>, <strong>notice</strong>, <strong>info</strong>, and <strong>debug</strong>.
So, imagine we log a message using the debug method:</p>
<pre><code class="php">Log::debug('An informational message.');
</code></pre>

<p>Given our configuration, the syslog channel will write the message to the system log; however, since the error message is not critical or above, it will not be sent to Slack. However, if we log an emergency message, it will be sent to both the system log and Slack since the emergency level is above our minimum level threshold for both channels:</p>
<pre><code class="php">Log::emergency('The system is down!');
</code></pre>

<p><a name="writing-log-messages"></a></p>
<h2 id="writing-log-messages"><a href="#writing-log-messages">Writing Log Messages</a></h2>
<p>You may write information to the logs using the Log <a href="/docs/5.7/facades">facade</a>. As previously mentioned, the logger provides the eight logging levels defined in the <a href="https://tools.ietf.org/html/rfc5424">RFC 5424 specification</a>: <strong>emergency</strong>, <strong>alert</strong>, <strong>critical</strong>, <strong>error</strong>, <strong>warning</strong>, <strong>notice</strong>, <strong>info</strong> and <strong>debug</strong>:</p>
<pre><code class="php">Log::emergency($message);
Log::alert($message);
Log::critical($message);
Log::error($message);
Log::warning($message);
Log::notice($message);
Log::info($message);
Log::debug($message);
</code></pre>

<p>So, you may call any of these methods to log a message for the corresponding level. By default, the message will be written to the default log channel as configured by your config/logging.php configuration file:</p>
<pre><code class="php">&lt;?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile($id)
    {
        Log::info('Showing user profile for user: '.$id);

        return view('user.profile', ['user' =&gt; User::findOrFail($id)]);
    }
}
</code></pre>

<h4 id="contextual-information">Contextual Information</h4>
<p>An array of contextual data may also be passed to the log methods. This contextual data will be formatted and displayed with the log message:</p>
<pre><code class="php">Log::info('User failed to login.', ['id' =&gt; $user-&gt;id]);
</code></pre>

<p><a name="writing-to-specific-channels"></a></p>
<h3 id="writing-to-specific-channels">Writing To Specific Channels</h3>
<p>Sometimes you may wish to log a message to a channel other than your application's default channel. You may use the channel method on the Log facade to retrieve and log to any channel defined in your configuration file:</p>
<pre><code class="php">Log::channel('slack')-&gt;info('Something happened!');
</code></pre>

<p>If you would like to create an on-demand logging stack consisting of multiple channels, you may use the stack method:</p>
<pre><code class="php">Log::stack(['single', 'slack'])-&gt;info('Something happened!');
</code></pre>

<p><a name="advanced-monolog-channel-customization"></a></p>
<h2 id="advanced-monolog-channel-customization"><a href="#advanced-monolog-channel-customization">Advanced Monolog Channel Customization</a></h2>
<p><a name="customizing-monolog-for-channels"></a></p>
<h3 id="customizing-monolog-for-channels">Customizing Monolog For Channels</h3>
<p>Sometimes you may need complete control over how Monolog is configured for an existing channel. For example, you may want to configure a custom Monolog FormatterInterface implementation for a given channel's handlers.
To get started, define a tap array on the channel's configuration. The tap array should contain a list of classes that should have an opportunity to customize (or "tap" into) the Monolog instance after it is created:</p>
<pre><code class="php">'single' =&gt; [
    'driver' =&gt; 'single',
    'tap' =&gt; [App\Logging\CustomizeFormatter::class],
    'path' =&gt; storage_path('logs/Space MVC.log'),
    'level' =&gt; 'debug',
],
</code></pre>

<p>Once you have configured the tap option on your channel, you're ready to define the class that will customize your Monolog instance. This class only needs a single method: __invoke, which receives an Illuminate\Log\Logger instance. The Illuminate\Log\Logger instance proxies all method calls to the underlying Monolog instance:</p>
<pre><code class="php">&lt;?php

namespace App\Logging;

class CustomizeFormatter
{
    /**
     * Customize the given logger instance.
     *
     * @param  \Illuminate\Log\Logger  $logger
     * @return void
     */
    public function __invoke($logger)
    {
        foreach ($logger-&gt;getHandlers() as $handler) {
            $handler-&gt;setFormatter(...);
        }
    }
}
</code></pre>

<p>All of your "tap" classes are resolved by the <a href="/docs/5.7/container">service container</a>, so any constructor dependencies they require will automatically be injected.
<a name="creating-monolog-handler-channels"></a></p>
<h3 id="creating-monolog-handler-channels">Creating Monolog Handler Channels</h3>
<p>Monolog has a variety of <a href="https://github.com/Seldaek/monolog/tree/master/src/Monolog/Handler">available handlers</a>. In some cases, the type of logger you wish to create is merely a Monolog driver with an instance of a specific handler.  These channels can be created using the monolog driver.
When using the monolog driver, the handler configuration option is used to specify which handler will be instantiated. Optionally, any constructor parameters the handler needs may be specified using the handler_with configuration option:</p>
<pre><code class="php">'logentries' =&gt; [
    'driver'  =&gt; 'monolog',
    'handler' =&gt; Monolog\Handler\SyslogUdpHandler::class,
    'handler_with' =&gt; [
        'host' =&gt; 'my.logentries.internal.datahubhost.company.com',
        'port' =&gt; '10000',
    ],
],
</code></pre>

<h4 id="monolog-formatters">Monolog Formatters</h4>
<p>When using the monolog driver, the Monolog LineFormatter will be used as the default formatter. However, you may customize the type of formatter passed to the handler using the formatter and formatter_with configuration options:</p>
<pre><code class="php">'browser' =&gt; [
    'driver' =&gt; 'monolog',
    'handler' =&gt; Monolog\Handler\BrowserConsoleHandler::class,
    'formatter' =&gt; Monolog\Formatter\HtmlFormatter::class,
    'formatter_with' =&gt; [
        'dateFormat' =&gt; 'Y-m-d',
    ],
],
</code></pre>

<p>If you are using a Monolog handler that is capable of providing its own formatter, you may set the value of the formatter configuration option to default:</p>
<pre><code class="php">'newrelic' =&gt; [
    'driver' =&gt; 'monolog',
    'handler' =&gt; Monolog\Handler\NewRelicHandler::class,
    'formatter' =&gt; 'default',
],
</code></pre>

<p><a name="creating-channels-via-factories"></a></p>
<h3 id="creating-channels-via-factories">Creating Channels Via Factories</h3>
<p>If you would like to define an entirely custom channel in which you have full control over Monolog's instantiation and configuration, you may specify a custom driver type in your config/logging.php configuration file. Your configuration should include a via option to point to the factory class which will be invoked to create the Monolog instance:</p>
<pre><code class="php">'channels' =&gt; [
    'custom' =&gt; [
        'driver' =&gt; 'custom',
        'via' =&gt; App\Logging\CreateCustomLogger::class,
    ],
],
</code></pre>

<p>Once you have configured the custom channel, you're ready to define the class that will create your Monolog instance. This class only needs a single method: __invoke, which should return the Monolog instance:</p>
<pre><code class="php">&lt;?php

namespace App\Logging;

use Monolog\Logger;

class CreateCustomLogger
{
    /**
     * Create a custom Monolog instance.
     *
     * @param  array  $config
     * @return \Monolog\Logger
     */
    public function __invoke(array $config)
    {
        return new Logger(...);
    }
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
        
          <a href="../error-handling/" title="Error Handling" class="md-flex md-footer-nav__link md-footer-nav__link--prev" rel="prev">
            <div class="md-flex__cell md-flex__cell--shrink">
              <i class="md-icon md-icon--arrow-back md-footer-nav__button"></i>
            </div>
            <div class="md-flex__cell md-flex__cell--stretch md-footer-nav__title">
              <span class="md-flex__ellipsis">
                <span class="md-footer-nav__direction">
                  Previous
                </span>
                Error Handling
              </span>
            </div>
          </a>
        
        
          <a href="../database-getting-started/" title="Getting Started" class="md-flex md-footer-nav__link md-footer-nav__link--next" rel="next">
            <div class="md-flex__cell md-flex__cell--stretch md-footer-nav__title">
              <span class="md-flex__ellipsis">
                <span class="md-footer-nav__direction">
                  Next
                </span>
                Getting Started
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
