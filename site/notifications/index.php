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
    
    
      
        <title>Notifications - Space MVC Framework</title>
      
    
    
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
    
      <a href="#notifications" tabindex="1" class="md-skip">
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
                Notifications
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
  <a href="#creating-notifications" title="Creating Notifications" class="md-nav__link">
    Creating Notifications
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#sending-notifications" title="Sending Notifications" class="md-nav__link">
    Sending Notifications
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#using-the-notifiable-trait" title="Using The Notifiable Trait" class="md-nav__link">
    Using The Notifiable Trait
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#using-the-notification-facade" title="Using The Notification Facade" class="md-nav__link">
    Using The Notification Facade
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#specifying-delivery-channels" title="Specifying Delivery Channels" class="md-nav__link">
    Specifying Delivery Channels
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#queueing-notifications" title="Queueing Notifications" class="md-nav__link">
    Queueing Notifications
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#on-demand-notifications" title="On-Demand Notifications" class="md-nav__link">
    On-Demand Notifications
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#mail-notifications" title="Mail Notifications" class="md-nav__link">
    Mail Notifications
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#formatting-mail-messages" title="Formatting Mail Messages" class="md-nav__link">
    Formatting Mail Messages
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#other-notification-formatting-options" title="Other Notification Formatting Options" class="md-nav__link">
    Other Notification Formatting Options
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#error-messages" title="Error Messages" class="md-nav__link">
    Error Messages
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#customizing-the-recipient" title="Customizing The Recipient" class="md-nav__link">
    Customizing The Recipient
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#customizing-the-subject" title="Customizing The Subject" class="md-nav__link">
    Customizing The Subject
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#customizing-the-templates" title="Customizing The Templates" class="md-nav__link">
    Customizing The Templates
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#markdown-mail-notifications" title="Markdown Mail Notifications" class="md-nav__link">
    Markdown Mail Notifications
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#generating-the-message" title="Generating The Message" class="md-nav__link">
    Generating The Message
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#writing-the-message" title="Writing The Message" class="md-nav__link">
    Writing The Message
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#button-component" title="Button Component" class="md-nav__link">
    Button Component
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#panel-component" title="Panel Component" class="md-nav__link">
    Panel Component
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#table-component" title="Table Component" class="md-nav__link">
    Table Component
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#customizing-the-components" title="Customizing The Components" class="md-nav__link">
    Customizing The Components
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#customizing-the-css" title="Customizing The CSS" class="md-nav__link">
    Customizing The CSS
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#database-notifications" title="Database Notifications" class="md-nav__link">
    Database Notifications
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#prerequisites" title="Prerequisites" class="md-nav__link">
    Prerequisites
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#formatting-database-notifications" title="Formatting Database Notifications" class="md-nav__link">
    Formatting Database Notifications
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#todatabase-vs-toarray" title="toDatabase Vs. toArray" class="md-nav__link">
    toDatabase Vs. toArray
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#accessing-the-notifications" title="Accessing The Notifications" class="md-nav__link">
    Accessing The Notifications
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#marking-notifications-as-read" title="Marking Notifications As Read" class="md-nav__link">
    Marking Notifications As Read
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#broadcast-notifications" title="Broadcast Notifications" class="md-nav__link">
    Broadcast Notifications
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#prerequisites_1" title="Prerequisites" class="md-nav__link">
    Prerequisites
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#formatting-broadcast-notifications" title="Formatting Broadcast Notifications" class="md-nav__link">
    Formatting Broadcast Notifications
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#broadcast-queue-configuration" title="Broadcast Queue Configuration" class="md-nav__link">
    Broadcast Queue Configuration
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#listening-for-notifications" title="Listening For Notifications" class="md-nav__link">
    Listening For Notifications
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#customizing-the-notification-channel" title="Customizing The Notification Channel" class="md-nav__link">
    Customizing The Notification Channel
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#sms-notifications" title="SMS Notifications" class="md-nav__link">
    SMS Notifications
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#prerequisites_2" title="Prerequisites" class="md-nav__link">
    Prerequisites
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#formatting-sms-notifications" title="Formatting SMS Notifications" class="md-nav__link">
    Formatting SMS Notifications
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#unicode-content" title="Unicode Content" class="md-nav__link">
    Unicode Content
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#customizing-the-from-number" title="Customizing The "From" Number" class="md-nav__link">
    Customizing The "From" Number
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#routing-sms-notifications" title="Routing SMS Notifications" class="md-nav__link">
    Routing SMS Notifications
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#slack-notifications" title="Slack Notifications" class="md-nav__link">
    Slack Notifications
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#prerequisites_3" title="Prerequisites" class="md-nav__link">
    Prerequisites
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#formatting-slack-notifications" title="Formatting Slack Notifications" class="md-nav__link">
    Formatting Slack Notifications
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#customizing-the-sender-recipient" title="Customizing The Sender &amp; Recipient" class="md-nav__link">
    Customizing The Sender &amp; Recipient
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#slack-attachments" title="Slack Attachments" class="md-nav__link">
    Slack Attachments
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#markdown-attachment-content" title="Markdown Attachment Content" class="md-nav__link">
    Markdown Attachment Content
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#routing-slack-notifications" title="Routing Slack Notifications" class="md-nav__link">
    Routing Slack Notifications
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#localizing-notifications" title="Localizing Notifications" class="md-nav__link">
    Localizing Notifications
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#user-preferred-locales" title="User Preferred Locales" class="md-nav__link">
    User Preferred Locales
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#notification-events" title="Notification Events" class="md-nav__link">
    Notification Events
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#custom-channels" title="Custom Channels" class="md-nav__link">
    Custom Channels
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
                  <a href="https://github.com/space-mvc/space-mvc/edit/master/docs/notifications.md" title="Edit this page" class="md-icon md-content__icon">&#xE3C9;</a>
                 -->

                
                <h1 id="notifications">Notifications</h1>
<pre><code>&lt;ul&gt;
    &lt;li&gt;&lt;a href="#introduction"&gt;Introduction&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#creating-notifications"&gt;Creating Notifications&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#sending-notifications"&gt;Sending Notifications&lt;/a&gt;
        &lt;ul&gt;
            &lt;li&gt;&lt;a href="#using-the-notifiable-trait"&gt;Using The Notifiable Trait&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#using-the-notification-facade"&gt;Using The Notification Facade&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#specifying-delivery-channels"&gt;Specifying Delivery Channels&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#queueing-notifications"&gt;Queueing Notifications&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#on-demand-notifications"&gt;On-Demand Notifications&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#mail-notifications"&gt;Mail Notifications&lt;/a&gt;
        &lt;ul&gt;
            &lt;li&gt;&lt;a href="#formatting-mail-messages"&gt;Formatting Mail Messages&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#customizing-the-recipient"&gt;Customizing The Recipient&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#customizing-the-subject"&gt;Customizing The Subject&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#customizing-the-templates"&gt;Customizing The Templates&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#markdown-mail-notifications"&gt;Markdown Mail Notifications&lt;/a&gt;
        &lt;ul&gt;
            &lt;li&gt;&lt;a href="#generating-the-message"&gt;Generating The Message&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#writing-the-message"&gt;Writing The Message&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#customizing-the-components"&gt;Customizing The Components&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#database-notifications"&gt;Database Notifications&lt;/a&gt;
        &lt;ul&gt;
            &lt;li&gt;&lt;a href="#database-prerequisites"&gt;Prerequisites&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#formatting-database-notifications"&gt;Formatting Database Notifications&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#accessing-the-notifications"&gt;Accessing The Notifications&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#marking-notifications-as-read"&gt;Marking Notifications As Read&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#broadcast-notifications"&gt;Broadcast Notifications&lt;/a&gt;
        &lt;ul&gt;
            &lt;li&gt;&lt;a href="#broadcast-prerequisites"&gt;Prerequisites&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#formatting-broadcast-notifications"&gt;Formatting Broadcast Notifications&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#listening-for-notifications"&gt;Listening For Notifications&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#sms-notifications"&gt;SMS Notifications&lt;/a&gt;
        &lt;ul&gt;
            &lt;li&gt;&lt;a href="#sms-prerequisites"&gt;Prerequisites&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#formatting-sms-notifications"&gt;Formatting SMS Notifications&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#customizing-the-from-number"&gt;Customizing The "From" Number&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#routing-sms-notifications"&gt;Routing SMS Notifications&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#slack-notifications"&gt;Slack Notifications&lt;/a&gt;
        &lt;ul&gt;
            &lt;li&gt;&lt;a href="#slack-prerequisites"&gt;Prerequisites&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#formatting-slack-notifications"&gt;Formatting Slack Notifications&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#slack-attachments"&gt;Slack Attachments&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#routing-slack-notifications"&gt;Routing Slack Notifications&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#localizing-notifications"&gt;Localizing Notifications&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#notification-events"&gt;Notification Events&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#custom-channels"&gt;Custom Channels&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</code></pre>
<p><a name="introduction"></a></p>
<h2 id="introduction"><a href="#introduction">Introduction</a></h2>
<p>In addition to support for <a href="/docs/5.7/mail">sending email</a>, Space MVC provides support for sending notifications across a variety of delivery channels, including mail, SMS (via <a href="https://www.nexmo.com/">Nexmo</a>), and <a href="https://slack.com">Slack</a>. Notifications may also be stored in a database so they may be displayed in your web interface.
Typically, notifications should be short, informational messages that notify users of something that occurred in your application. For example, if you are writing a billing application, you might send an "Invoice Paid" notification to your users via the email and SMS channels.
<a name="creating-notifications"></a></p>
<h2 id="creating-notifications"><a href="#creating-notifications">Creating Notifications</a></h2>
<p>In Space MVC, each notification is represented by a single class (typically stored in the app/Notifications directory). Don't worry if you don't see this directory in your application, it will be created for you when you run the make:notification Artisan command:</p>
<pre><code class="php">php artisan make:notification InvoicePaid
</code></pre>

<p>This command will place a fresh notification class in your app/Notifications directory. Each notification class contains a via method and a variable number of message building methods (such as toMail or toDatabase) that convert the notification to a message optimized for that particular channel.
<a name="sending-notifications"></a></p>
<h2 id="sending-notifications"><a href="#sending-notifications">Sending Notifications</a></h2>
<p><a name="using-the-notifiable-trait"></a></p>
<h3 id="using-the-notifiable-trait">Using The Notifiable Trait</h3>
<p>Notifications may be sent in two ways: using the notify method of the Notifiable trait or using the Notification <a href="/docs/5.7/facades">facade</a>. First, let's explore using the trait:</p>
<pre><code class="php">&lt;?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
}
</code></pre>

<p>This trait is utilized by the default App\User model and contains one method that may be used to send notifications: notify. The notify method expects to receive a notification instance:</p>
<pre><code class="php">use App\Notifications\InvoicePaid;

$user-&gt;notify(new InvoicePaid($invoice));
</code></pre>

<p>Remember, you may use the Illuminate\Notifications\Notifiable trait on any of your models. You are not limited to only including it on your User model.
<a name="using-the-notification-facade"></a></p>
<h3 id="using-the-notification-facade">Using The Notification Facade</h3>
<p>Alternatively, you may send notifications via the Notification <a href="/docs/5.7/facades">facade</a>. This is useful primarily when you need to send a notification to multiple notifiable entities such as a collection of users. To send notifications using the facade, pass all of the notifiable entities and the notification instance to the send method:</p>
<pre><code class="php">Notification::send($users, new InvoicePaid($invoice));
</code></pre>

<p><a name="specifying-delivery-channels"></a></p>
<h3 id="specifying-delivery-channels">Specifying Delivery Channels</h3>
<p>Every notification class has a via method that determines on which channels the notification will be delivered. Out of the box, notifications may be sent on the mail, database, broadcast, nexmo, and slack channels.
If you would like to use other delivery channels such as Telegram or Pusher, check out the community driven <a href="http://Space MVC-notification-channels.com">Space MVC Notification Channels website</a>.
The via method receives a $notifiable instance, which will be an instance of the class to which the notification is being sent. You may use $notifiable to determine which channels the notification should be delivered on:</p>
<pre><code class="php">/**
 * Get the notification's delivery channels.
 *
 * @param  mixed  $notifiable
 * @return array
 */
public function via($notifiable)
{
    return $notifiable-&gt;prefers_sms ? ['nexmo'] : ['mail', 'database'];
}
</code></pre>

<p><a name="queueing-notifications"></a></p>
<h3 id="queueing-notifications">Queueing Notifications</h3>
<p>Before queueing notifications you should configure your queue and <a href="/docs/5.7/queues">start a worker</a>.
Sending notifications can take time, especially if the channel needs an external API call to deliver the notification. To speed up your application's response time, let your notification be queued by adding the ShouldQueue interface and Queueable trait to your class. The interface and trait are already imported for all notifications generated using make:notification, so you may immediately add them to your notification class:</p>
<pre><code class="php">&lt;?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;

class InvoicePaid extends Notification implements ShouldQueue
{
    use Queueable;

    // ...
}
</code></pre>

<p>Once the ShouldQueue interface has been added to your notification, you may send the notification like normal. Space MVC will detect the ShouldQueue interface on the class and automatically queue the delivery of the notification:</p>
<pre><code class="php">$user-&gt;notify(new InvoicePaid($invoice));
</code></pre>

<p>If you would like to delay the delivery of the notification, you may chain the delay method onto your notification instantiation:</p>
<pre><code class="php">$when = now()-&gt;addMinutes(10);

$user-&gt;notify((new InvoicePaid($invoice))-&gt;delay($when));
</code></pre>

<p><a name="on-demand-notifications"></a></p>
<h3 id="on-demand-notifications">On-Demand Notifications</h3>
<p>Sometimes you may need to send a notification to someone who is not stored as a "user" of your application. Using the Notification::route method, you may specify ad-hoc notification routing information before sending the notification:</p>
<pre><code class="php">Notification::route('mail', 'taylor@example.com')
            -&gt;route('nexmo', '5555555555')
            -&gt;notify(new InvoicePaid($invoice));
</code></pre>

<p><a name="mail-notifications"></a></p>
<h2 id="mail-notifications"><a href="#mail-notifications">Mail Notifications</a></h2>
<p><a name="formatting-mail-messages"></a></p>
<h3 id="formatting-mail-messages">Formatting Mail Messages</h3>
<p>If a notification supports being sent as an email, you should define a toMail method on the notification class. This method will receive a $notifiable entity and should return a Illuminate\Notifications\Messages\MailMessage instance. Mail messages may contain lines of text as well as a "call to action". Let's take a look at an example toMail method:</p>
<pre><code class="php">/**
 * Get the mail representation of the notification.
 *
 * @param  mixed  $notifiable
 * @return \Illuminate\Notifications\Messages\MailMessage
 */
public function toMail($notifiable)
{
    $url = url('/invoice/'.$this-&gt;invoice-&gt;id);

    return (new MailMessage)
                -&gt;greeting('Hello!')
                -&gt;line('One of your invoices has been paid!')
                -&gt;action('View Invoice', $url)
                -&gt;line('Thank you for using our application!');
}
</code></pre>

<p>Note we are using $this-&gt;invoice-&gt;id in our toMail method. You may pass any data your notification needs to generate its message into the notification's constructor.
In this example, we register a greeting, a line of text, a call to action, and then another line of text. These methods provided by the MailMessage object make it simple and fast to format small transactional emails. The mail channel will then translate the message components into a nice, responsive HTML email template with a plain-text counterpart. Here is an example of an email generated by the mail channel:
    <img src="https://Space MVC.com/assets/img/notification-example.png" width="551" height="596">
When sending mail notifications, be sure to set the name value in your config/app.php configuration file. This value will be used in the header and footer of your mail notification messages.</p>
<h4 id="other-notification-formatting-options">Other Notification Formatting Options</h4>
<p>Instead of defining the "lines" of text in the notification class, you may use the view method to specify a custom template that should be used to render the notification email:</p>
<pre><code class="php">/**
 * Get the mail representation of the notification.
 *
 * @param  mixed  $notifiable
 * @return \Illuminate\Notifications\Messages\MailMessage
 */
public function toMail($notifiable)
{
    return (new MailMessage)-&gt;view(
        'emails.name', ['invoice' =&gt; $this-&gt;invoice]
    );
}
</code></pre>

<p>In addition, you may return a <a href="/docs/5.7/mail">mailable object</a> from the toMail method:</p>
<pre><code class="php">use App\Mail\InvoicePaid as Mailable;

/**
 * Get the mail representation of the notification.
 *
 * @param  mixed  $notifiable
 * @return Mailable
 */
public function toMail($notifiable)
{
    return (new Mailable($this-&gt;invoice))-&gt;to($this-&gt;user-&gt;email);
}
</code></pre>

<p><a name="error-messages"></a></p>
<h4 id="error-messages">Error Messages</h4>
<p>Some notifications inform users of errors, such as a failed invoice payment. You may indicate that a mail message is regarding an error by calling the error method when building your message. When using the error method on a mail message, the call to action button will be red instead of blue:</p>
<pre><code class="php">/**
 * Get the mail representation of the notification.
 *
 * @param  mixed  $notifiable
 * @return \Illuminate\Notifications\Message
 */
public function toMail($notifiable)
{
    return (new MailMessage)
                -&gt;error()
                -&gt;subject('Notification Subject')
                -&gt;line('...');
}
</code></pre>

<p><a name="customizing-the-recipient"></a></p>
<h3 id="customizing-the-recipient">Customizing The Recipient</h3>
<p>When sending notifications via the mail channel, the notification system will automatically look for an email property on your notifiable entity. You may customize which email address is used to deliver the notification by defining a routeNotificationForMail method on the entity:</p>
<pre><code class="php">&lt;?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * Route notifications for the mail channel.
     *
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return string
     */
    public function routeNotificationForMail($notification)
    {
        return $this-&gt;email_address;
    }
}
</code></pre>

<p><a name="customizing-the-subject"></a></p>
<h3 id="customizing-the-subject">Customizing The Subject</h3>
<p>By default, the email's subject is the class name of the notification formatted to "title case". So, if your notification class is named InvoicePaid, the email's subject will be Invoice Paid. If you would like to specify an explicit subject for the message, you may call the subject method when building your message:</p>
<pre><code class="php">/**
 * Get the mail representation of the notification.
 *
 * @param  mixed  $notifiable
 * @return \Illuminate\Notifications\Messages\MailMessage
 */
public function toMail($notifiable)
{
    return (new MailMessage)
                -&gt;subject('Notification Subject')
                -&gt;line('...');
}
</code></pre>

<p><a name="customizing-the-templates"></a></p>
<h3 id="customizing-the-templates">Customizing The Templates</h3>
<p>You can modify the HTML and plain-text template used by mail notifications by publishing the notification package's resources. After running this command, the mail notification templates will be located in the resources/views/vendor/notifications directory:</p>
<pre><code class="php">php artisan vendor:publish --tag=Space MVC-notifications
</code></pre>

<p><a name="markdown-mail-notifications"></a></p>
<h2 id="markdown-mail-notifications"><a href="#markdown-mail-notifications">Markdown Mail Notifications</a></h2>
<p>Markdown mail notifications allow you to take advantage of the pre-built templates of mail notifications, while giving you more freedom to write longer, customized messages. Since the messages are written in Markdown, Space MVC is able to render beautiful, responsive HTML templates for the messages while also automatically generating a plain-text counterpart.
<a name="generating-the-message"></a></p>
<h3 id="generating-the-message">Generating The Message</h3>
<p>To generate a notification with a corresponding Markdown template, you may use the --markdown option of the make:notification Artisan command:</p>
<pre><code class="php">php artisan make:notification InvoicePaid --markdown=mail.invoice.paid
</code></pre>

<p>Like all other mail notifications, notifications that use Markdown templates should define a toMail method on their notification class. However, instead of using the line and action methods to construct the notification, use the markdown method to specify the name of the Markdown template that should be used:</p>
<pre><code class="php">/**
 * Get the mail representation of the notification.
 *
 * @param  mixed  $notifiable
 * @return \Illuminate\Notifications\Messages\MailMessage
 */
public function toMail($notifiable)
{
    $url = url('/invoice/'.$this-&gt;invoice-&gt;id);

    return (new MailMessage)
                -&gt;subject('Invoice Paid')
                -&gt;markdown('mail.invoice.paid', ['url' =&gt; $url]);
}
</code></pre>

<p><a name="writing-the-message"></a></p>
<h3 id="writing-the-message">Writing The Message</h3>
<p>Markdown mail notifications use a combination of Blade components and Markdown syntax which allow you to easily construct notifications while leveraging Space MVC's pre-crafted notification components:</p>
<pre><code class="php">@component('mail::message')
# Invoice Paid

Your invoice has been paid!

@component('mail::button', ['url' =&gt; $url])
View Invoice
@endcomponent

Thanks,&lt;br&gt;
{{ config('app.name') }}
@endcomponent
</code></pre>

<h4 id="button-component">Button Component</h4>
<p>The button component renders a centered button link. The component accepts two arguments, a url and an optional color. Supported colors are blue, green, and red. You may add as many button components to a notification as you wish:</p>
<pre><code class="php">@component('mail::button', ['url' =&gt; $url, 'color' =&gt; 'green'])
View Invoice
@endcomponent
</code></pre>

<h4 id="panel-component">Panel Component</h4>
<p>The panel component renders the given block of text in a panel that has a slightly different background color than the rest of the notification. This allows you to draw attention to a given block of text:</p>
<pre><code class="php">@component('mail::panel')
This is the panel content.
@endcomponent
</code></pre>

<h4 id="table-component">Table Component</h4>
<p>The table component allows you to transform a Markdown table into an HTML table. The component accepts the Markdown table as its content. Table column alignment is supported using the default Markdown table alignment syntax:</p>
<pre><code class="php">@component('mail::table')
| Space MVC       | Table         | Example  |
| ------------- |:-------------:| --------:|
| Col 2 is      | Centered      | $10      |
| Col 3 is      | Right-Aligned | $20      |
@endcomponent
</code></pre>

<p><a name="customizing-the-components"></a></p>
<h3 id="customizing-the-components">Customizing The Components</h3>
<p>You may export all of the Markdown notification components to your own application for customization. To export the components, use the vendor:publish Artisan command to publish the Space MVC-mail asset tag:</p>
<pre><code class="php">php artisan vendor:publish --tag=Space MVC-mail
</code></pre>

<p>This command will publish the Markdown mail components to the resources/views/vendor/mail directory. The mail directory will contain a html and a markdown directory, each containing their respective representations of every available component. You are free to customize these components however you like.</p>
<h4 id="customizing-the-css">Customizing The CSS</h4>
<p>After exporting the components, the resources/views/vendor/mail/html/themes directory will contain a default.css file. You may customize the CSS in this file and your styles will automatically be in-lined within the HTML representations of your Markdown notifications.
If you would like to build an entirely new theme for the Markdown components, write a new CSS file within the html/themes directory and change the theme option of your mail configuration file.
<a name="database-notifications"></a></p>
<h2 id="database-notifications"><a href="#database-notifications">Database Notifications</a></h2>
<p><a name="database-prerequisites"></a></p>
<h3 id="prerequisites">Prerequisites</h3>
<p>The database notification channel stores the notification information in a database table. This table will contain information such as the notification type as well as custom JSON data that describes the notification.
You can query the table to display the notifications in your application's user interface. But, before you can do that, you will need to create a database table to hold your notifications. You may use the notifications:table command to generate a migration with the proper table schema:</p>
<pre><code class="php">php artisan notifications:table

php artisan migrate
</code></pre>

<p><a name="formatting-database-notifications"></a></p>
<h3 id="formatting-database-notifications">Formatting Database Notifications</h3>
<p>If a notification supports being stored in a database table, you should define a toDatabase or toArray method on the notification class. This method will receive a $notifiable entity and should return a plain PHP array. The returned array will be encoded as JSON and stored in the data column of your notifications table. Let's take a look at an example toArray method:</p>
<pre><code class="php">/**
 * Get the array representation of the notification.
 *
 * @param  mixed  $notifiable
 * @return array
 */
public function toArray($notifiable)
{
    return [
        'invoice_id' =&gt; $this-&gt;invoice-&gt;id,
        'amount' =&gt; $this-&gt;invoice-&gt;amount,
    ];
}
</code></pre>

<h4 id="todatabase-vs-toarray">toDatabase Vs. toArray</h4>
<p>The toArray method is also used by the broadcast channel to determine which data to broadcast to your JavaScript client. If you would like to have two different array representations for the database and broadcast channels, you should define a toDatabase method instead of a toArray method.
<a name="accessing-the-notifications"></a></p>
<h3 id="accessing-the-notifications">Accessing The Notifications</h3>
<p>Once notifications are stored in the database, you need a convenient way to access them from your notifiable entities. The Illuminate\Notifications\Notifiable trait, which is included on Space MVC's default App\User model, includes a notifications Eloquent relationship that returns the notifications for the entity. To fetch notifications, you may access this method like any other Eloquent relationship. By default, notifications will be sorted by the created_at timestamp:</p>
<pre><code class="php">$user = App\User::find(1);

foreach ($user-&gt;notifications as $notification) {
    echo $notification-&gt;type;
}
</code></pre>

<p>If you want to retrieve only the "unread" notifications, you may use the unreadNotifications relationship. Again, these notifications will be sorted by the created_at timestamp:</p>
<pre><code class="php">$user = App\User::find(1);

foreach ($user-&gt;unreadNotifications as $notification) {
    echo $notification-&gt;type;
}
</code></pre>

<p>To access your notifications from your JavaScript client, you should define a notification controller for your application which returns the notifications for a notifiable entity, such as the current user. You may then make an HTTP request to that controller's URI from your JavaScript client.
<a name="marking-notifications-as-read"></a></p>
<h3 id="marking-notifications-as-read">Marking Notifications As Read</h3>
<p>Typically, you will want to mark a notification as "read" when a user views it. The Illuminate\Notifications\Notifiable trait provides a markAsRead method, which updates the read_at column on the notification's database record:</p>
<pre><code class="php">$user = App\User::find(1);

foreach ($user-&gt;unreadNotifications as $notification) {
    $notification-&gt;markAsRead();
}
</code></pre>

<p>However, instead of looping through each notification, you may use the markAsRead method directly on a collection of notifications:</p>
<pre><code class="php">$user-&gt;unreadNotifications-&gt;markAsRead();
</code></pre>

<p>You may also use a mass-update query to mark all of the notifications as read without retrieving them from the database:</p>
<pre><code class="php">$user = App\User::find(1);

$user-&gt;unreadNotifications()-&gt;update(['read_at' =&gt; now()]);
</code></pre>

<p>Of course, you may delete the notifications to remove them from the table entirely:</p>
<pre><code class="php">$user-&gt;notifications()-&gt;delete();
</code></pre>

<p><a name="broadcast-notifications"></a></p>
<h2 id="broadcast-notifications"><a href="#broadcast-notifications">Broadcast Notifications</a></h2>
<p><a name="broadcast-prerequisites"></a></p>
<h3 id="prerequisites_1">Prerequisites</h3>
<p>Before broadcasting notifications, you should configure and be familiar with Space MVC's <a href="/docs/5.7/broadcasting">event broadcasting</a> services. Event broadcasting provides a way to react to server-side fired Space MVC events from your JavaScript client.
<a name="formatting-broadcast-notifications"></a></p>
<h3 id="formatting-broadcast-notifications">Formatting Broadcast Notifications</h3>
<p>The broadcast channel broadcasts notifications using Space MVC's <a href="/docs/5.7/broadcasting">event broadcasting</a> services, allowing your JavaScript client to catch notifications in realtime. If a notification supports broadcasting, you should define a toBroadcast method on the notification class. This method will receive a $notifiable entity and should return a BroadcastMessage instance. The returned data will be encoded as JSON and broadcast to your JavaScript client. Let's take a look at an example toBroadcast method:</p>
<pre><code class="php">use Illuminate\Notifications\Messages\BroadcastMessage;

/**
 * Get the broadcastable representation of the notification.
 *
 * @param  mixed  $notifiable
 * @return BroadcastMessage
 */
public function toBroadcast($notifiable)
{
    return new BroadcastMessage([
        'invoice_id' =&gt; $this-&gt;invoice-&gt;id,
        'amount' =&gt; $this-&gt;invoice-&gt;amount,
    ]);
}
</code></pre>

<h4 id="broadcast-queue-configuration">Broadcast Queue Configuration</h4>
<p>All broadcast notifications are queued for broadcasting. If you would like to configure the queue connection or queue name that is used to queue the broadcast operation, you may use the onConnection and onQueue methods of the BroadcastMessage:</p>
<pre><code class="php">return (new BroadcastMessage($data))
                -&gt;onConnection('sqs')
                -&gt;onQueue('broadcasts');
</code></pre>

<p>In addition to the data you specify, broadcast notifications will also contain a type field containing the class name of the notification.
<a name="listening-for-notifications"></a></p>
<h3 id="listening-for-notifications">Listening For Notifications</h3>
<p>Notifications will broadcast on a private channel formatted using a {notifiable}.{id} convention. So, if you are sending a notification to a App\User instance with an ID of 1, the notification will be broadcast on the App.User.1 private channel. When using <a href="/docs/5.7/broadcasting">Space MVC Echo</a>, you may easily listen for notifications on a channel using the notification helper method:</p>
<pre><code class="php">Echo.private('App.User.' + userId)
    .notification((notification) =&gt; {
        console.log(notification.type);
    });
</code></pre>

<h4 id="customizing-the-notification-channel">Customizing The Notification Channel</h4>
<p>If you would like to customize which channels a notifiable entity receives its broadcast notifications on, you may define a receivesBroadcastNotificationsOn method on the notifiable entity:</p>
<pre><code class="php">&lt;?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The channels the user receives notification broadcasts on.
     *
     * @return string
     */
    public function receivesBroadcastNotificationsOn()
    {
        return 'users.'.$this-&gt;id;
    }
}
</code></pre>

<p><a name="sms-notifications"></a></p>
<h2 id="sms-notifications"><a href="#sms-notifications">SMS Notifications</a></h2>
<p><a name="sms-prerequisites"></a></p>
<h3 id="prerequisites_2">Prerequisites</h3>
<p>Sending SMS notifications in Space MVC is powered by <a href="https://www.nexmo.com/">Nexmo</a>. Before you can send notifications via Nexmo, you need to install the nexmo/client Composer package and add a few configuration options to your config/services.php configuration file. You may copy the example configuration below to get started:</p>
<pre><code class="php">'nexmo' =&gt; [
    'key' =&gt; env('NEXMO_KEY'),
    'secret' =&gt; env('NEXMO_SECRET'),
    'sms_from' =&gt; '15556666666',
],
</code></pre>

<p>The sms_from option is the phone number that your SMS messages will be sent from. You should generate a phone number for your application in the Nexmo control panel.
<a name="formatting-sms-notifications"></a></p>
<h3 id="formatting-sms-notifications">Formatting SMS Notifications</h3>
<p>If a notification supports being sent as an SMS, you should define a toNexmo method on the notification class. This method will receive a $notifiable entity and should return a Illuminate\Notifications\Messages\NexmoMessage instance:</p>
<pre><code class="php">/**
 * Get the Nexmo / SMS representation of the notification.
 *
 * @param  mixed  $notifiable
 * @return NexmoMessage
 */
public function toNexmo($notifiable)
{
    return (new NexmoMessage)
                -&gt;content('Your SMS message content');
}
</code></pre>

<h4 id="unicode-content">Unicode Content</h4>
<p>If your SMS message will contain unicode characters, you should call the unicode method when constructing the NexmoMessage instance:</p>
<pre><code class="php">/**
 * Get the Nexmo / SMS representation of the notification.
 *
 * @param  mixed  $notifiable
 * @return NexmoMessage
 */
public function toNexmo($notifiable)
{
    return (new NexmoMessage)
                -&gt;content('Your unicode message')
                -&gt;unicode();
}
</code></pre>

<p><a name="customizing-the-from-number"></a></p>
<h3 id="customizing-the-from-number">Customizing The "From" Number</h3>
<p>If you would like to send some notifications from a phone number that is different from the phone number specified in your config/services.php file, you may use the from method on a NexmoMessage instance:</p>
<pre><code class="php">/**
 * Get the Nexmo / SMS representation of the notification.
 *
 * @param  mixed  $notifiable
 * @return NexmoMessage
 */
public function toNexmo($notifiable)
{
    return (new NexmoMessage)
                -&gt;content('Your SMS message content')
                -&gt;from('15554443333');
}
</code></pre>

<p><a name="routing-sms-notifications"></a></p>
<h3 id="routing-sms-notifications">Routing SMS Notifications</h3>
<p>When sending notifications via the nexmo channel, the notification system will automatically look for a phone_number attribute on the notifiable entity. If you would like to customize the phone number the notification is delivered to, define a routeNotificationForNexmo method on the entity:</p>
<pre><code class="php">&lt;?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * Route notifications for the Nexmo channel.
     *
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return string
     */
    public function routeNotificationForNexmo($notification)
    {
        return $this-&gt;phone;
    }
}
</code></pre>

<p><a name="slack-notifications"></a></p>
<h2 id="slack-notifications"><a href="#slack-notifications">Slack Notifications</a></h2>
<p><a name="slack-prerequisites"></a></p>
<h3 id="prerequisites_3">Prerequisites</h3>
<p>Before you can send notifications via Slack, you must install the Guzzle HTTP library via Composer:</p>
<pre><code class="php">composer require guzzlehttp/guzzle
</code></pre>

<p>You will also need to configure an <a href="https://api.slack.com/incoming-webhooks">"Incoming Webhook"</a> integration for your Slack team. This integration will provide you with a URL you may use when <a href="#routing-slack-notifications">routing Slack notifications</a>.
<a name="formatting-slack-notifications"></a></p>
<h3 id="formatting-slack-notifications">Formatting Slack Notifications</h3>
<p>If a notification supports being sent as a Slack message, you should define a toSlack method on the notification class. This method will receive a $notifiable entity and should return a Illuminate\Notifications\Messages\SlackMessage instance. Slack messages may contain text content as well as an "attachment" that formats additional text or an array of fields. Let's take a look at a basic toSlack example:</p>
<pre><code class="php">/**
 * Get the Slack representation of the notification.
 *
 * @param  mixed  $notifiable
 * @return SlackMessage
 */
public function toSlack($notifiable)
{
    return (new SlackMessage)
                -&gt;content('One of your invoices has been paid!');
}
</code></pre>

<p>In this example we are just sending a single line of text to Slack, which will create a message that looks like the following:
    <img src="https://Space MVC.com/assets/img/basic-slack-notification.png"></p>
<h4 id="customizing-the-sender-recipient">Customizing The Sender &amp; Recipient</h4>
<p>You may use the from and to methods to customize the sender and recipient. The from method accepts a username and emoji identifier, while the to method accepts a channel or username:</p>
<pre><code class="php">/**
 * Get the Slack representation of the notification.
 *
 * @param  mixed  $notifiable
 * @return SlackMessage
 */
public function toSlack($notifiable)
{
    return (new SlackMessage)
                -&gt;from('Ghost', ':ghost:')
                -&gt;to('#other')
                -&gt;content('This will be sent to #other');
}
</code></pre>

<p>You may also use an image as your logo instead of an emoji:</p>
<pre><code class="php">/**
 * Get the Slack representation of the notification.
 *
 * @param  mixed  $notifiable
 * @return SlackMessage
 */
public function toSlack($notifiable)
{
    return (new SlackMessage)
                -&gt;from('Space MVC')
                -&gt;image('https://Space MVC.com/favicon.png')
                -&gt;content('This will display the Space MVC logo next to the message');
}
</code></pre>

<p><a name="slack-attachments"></a></p>
<h3 id="slack-attachments">Slack Attachments</h3>
<p>You may also add "attachments" to Slack messages. Attachments provide richer formatting options than simple text messages. In this example, we will send an error notification about an exception that occurred in an application, including a link to view more details about the exception:</p>
<pre><code class="php">/**
 * Get the Slack representation of the notification.
 *
 * @param  mixed  $notifiable
 * @return SlackMessage
 */
public function toSlack($notifiable)
{
    $url = url('/exceptions/'.$this-&gt;exception-&gt;id);

    return (new SlackMessage)
                -&gt;error()
                -&gt;content('Whoops! Something went wrong.')
                -&gt;attachment(function ($attachment) use ($url) {
                    $attachment-&gt;title('Exception: File Not Found', $url)
                               -&gt;content('File [background.jpg] was not found.');
                });
}
</code></pre>

<p>The example above will generate a Slack message that looks like the following:
    <img src="https://Space MVC.com/assets/img/basic-slack-attachment.png">
Attachments also allow you to specify an array of data that should be presented to the user. The given data will be presented in a table-style format for easy reading:</p>
<pre><code class="php">/**
 * Get the Slack representation of the notification.
 *
 * @param  mixed  $notifiable
 * @return SlackMessage
 */
public function toSlack($notifiable)
{
    $url = url('/invoices/'.$this-&gt;invoice-&gt;id);

    return (new SlackMessage)
                -&gt;success()
                -&gt;content('One of your invoices has been paid!')
                -&gt;attachment(function ($attachment) use ($url) {
                    $attachment-&gt;title('Invoice 1322', $url)
                               -&gt;fields([
                                    'Title' =&gt; 'Server Expenses',
                                    'Amount' =&gt; '$1,234',
                                    'Via' =&gt; 'American Express',
                                    'Was Overdue' =&gt; ':-1:',
                                ]);
                });
}
</code></pre>

<p>The example above will create a Slack message that looks like the following:
    <img src="https://Space MVC.com/assets/img/slack-fields-attachment.png"></p>
<h4 id="markdown-attachment-content">Markdown Attachment Content</h4>
<p>If some of your attachment fields contain Markdown, you may use the markdown method to instruct Slack to parse and display the given attachment fields as Markdown formatted text. The values accepted by this method are: pretext, text, and / or fields. For more information about Slack attachment formatting, check out the <a href="https://api.slack.com/docs/message-formatting#message_formatting">Slack API documentation</a>:</p>
<pre><code class="php">/**
 * Get the Slack representation of the notification.
 *
 * @param  mixed  $notifiable
 * @return SlackMessage
 */
public function toSlack($notifiable)
{
    $url = url('/exceptions/'.$this-&gt;exception-&gt;id);

    return (new SlackMessage)
                -&gt;error()
                -&gt;content('Whoops! Something went wrong.')
                -&gt;attachment(function ($attachment) use ($url) {
                    $attachment-&gt;title('Exception: File Not Found', $url)
                               -&gt;content('File [background.jpg] was *not found*.')
                               -&gt;markdown(['text']);
                });
}
</code></pre>

<p><a name="routing-slack-notifications"></a></p>
<h3 id="routing-slack-notifications">Routing Slack Notifications</h3>
<p>To route Slack notifications to the proper location, define a routeNotificationForSlack method on your notifiable entity. This should return the webhook URL to which the notification should be delivered. Webhook URLs may be generated by adding an "Incoming Webhook" service to your Slack team:</p>
<pre><code class="php">&lt;?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * Route notifications for the Slack channel.
     *
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return string
     */
    public function routeNotificationForSlack($notification)
    {
        return 'https://hooks.slack.com/services/...';
    }
}
</code></pre>

<p><a name="localizing-notifications"></a></p>
<h2 id="localizing-notifications"><a href="#localizing-notifications">Localizing Notifications</a></h2>
<p>Space MVC allows you to send notifications in a locale other than the current language, and will even remember this locale if the notification is queued.
To accomplish this, the Illuminate\Notifications\Notification class offers a locale method to set the desired language. The application will change into this locale when the notification is being formatted and then revert back to the previous locale when formatting is complete:</p>
<pre><code class="php">$user-&gt;notify((new InvoicePaid($invoice))-&gt;locale('es'));
</code></pre>

<p>Localization of multiple notifiable entries may also be achieved via the Notification facade:</p>
<pre><code class="php">Notification::locale('es')-&gt;send($users, new InvoicePaid($invoice));
</code></pre>

<h3 id="user-preferred-locales">User Preferred Locales</h3>
<p>Sometimes, applications store each user's preferred locale. By implementing the HasLocalePreference contract on your notifiable model, you may instruct Space MVC to use this stored locale when sending a notification:</p>
<pre><code class="php">use Illuminate\Contracts\Translation\HasLocalePreference;

class User extends Model implements HasLocalePreference
{
    /**
     * Get the user's preferred locale.
     *
     * @return string
     */
    public function preferredLocale()
    {
        return $this-&gt;locale;
    }
}
</code></pre>

<p>Once you have implemented the interface, Space MVC will automatically use the preferred locale when sending notifications and mailables to the model. Therefore, there is no need to call the locale method when using this interface:</p>
<pre><code class="php">$user-&gt;notify(new InvoicePaid($invoice));
</code></pre>

<p><a name="notification-events"></a></p>
<h2 id="notification-events"><a href="#notification-events">Notification Events</a></h2>
<p>When a notification is sent, the Illuminate\Notifications\Events\NotificationSent event is fired by the notification system. This contains the "notifiable" entity and the notification instance itself. You may register listeners for this event in your EventServiceProvider:</p>
<pre><code class="php">/**
 * The event listener mappings for the application.
 *
 * @var array
 */
protected $listen = [
    'Illuminate\Notifications\Events\NotificationSent' =&gt; [
        'App\Listeners\LogNotification',
    ],
];
</code></pre>

<p>After registering listeners in your EventServiceProvider, use the event:generate Artisan command to quickly generate listener classes.
Within an event listener, you may access the notifiable, notification, and channel properties on the event to learn more about the notification recipient or the notification itself:</p>
<pre><code class="php">/**
 * Handle the event.
 *
 * @param  NotificationSent  $event
 * @return void
 */
public function handle(NotificationSent $event)
{
    // $event-&gt;channel
    // $event-&gt;notifiable
    // $event-&gt;notification
}
</code></pre>

<p><a name="custom-channels"></a></p>
<h2 id="custom-channels"><a href="#custom-channels">Custom Channels</a></h2>
<p>Space MVC ships with a handful of notification channels, but you may want to write your own drivers to deliver notifications via other channels. Space MVC makes it simple. To get started, define a class that contains a send method. The method should receive two arguments: a $notifiable and a $notification:</p>
<pre><code class="php">&lt;?php

namespace App\Channels;

use Illuminate\Notifications\Notification;

class VoiceChannel
{
    /**
     * Send the given notification.
     *
     * @param  mixed  $notifiable
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return void
     */
    public function send($notifiable, Notification $notification)
    {
        $message = $notification-&gt;toVoice($notifiable);

        // Send notification to the $notifiable instance...
    }
}
</code></pre>

<p>Once your notification channel class has been defined, you may return the class name from the via method of any of your notifications:</p>
<pre><code class="php">&lt;?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use App\Channels\VoiceChannel;
use App\Channels\Messages\VoiceMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;

class InvoicePaid extends Notification
{
    use Queueable;

    /**
     * Get the notification channels.
     *
     * @param  mixed  $notifiable
     * @return array|string
     */
    public function via($notifiable)
    {
        return [VoiceChannel::class];
    }

    /**
     * Get the voice representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return VoiceMessage
     */
    public function toVoice($notifiable)
    {
        // ...
    }
}
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
