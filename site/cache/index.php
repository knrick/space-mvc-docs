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
    
    
      
        <title>Cache - Space MVC Framework</title>
      
    
    
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
    
      <a href="#cache" tabindex="1" class="md-skip">
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
                Cache
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

        
          
          
          

  


  <li class="md-nav__item md-nav__item--active">
    
    <input class="md-toggle md-nav__toggle" data-md-toggle="toc" type="checkbox" id="__toc">
    
      
    
    
      <label class="md-nav__link md-nav__link--active" for="__toc">
        Cache
      </label>
    
    <a href="./" title="Cache" class="md-nav__link md-nav__link--active">
      Cache
    </a>
    
      
<nav class="md-nav md-nav--secondary">
  
  
    
  
  
    <label class="md-nav__title" for="__toc">Table of contents</label>
    <ul class="md-nav__list" data-md-scrollfix>
      
        <li class="md-nav__item">
  <a href="#configuration" title="Configuration" class="md-nav__link">
    Configuration
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
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
  <a href="#memcached" title="Memcached" class="md-nav__link">
    Memcached
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
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#cache-usage" title="Cache Usage" class="md-nav__link">
    Cache Usage
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#obtaining-a-cache-instance" title="Obtaining A Cache Instance" class="md-nav__link">
    Obtaining A Cache Instance
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#accessing-multiple-cache-stores" title="Accessing Multiple Cache Stores" class="md-nav__link">
    Accessing Multiple Cache Stores
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#retrieving-items-from-the-cache" title="Retrieving Items From The Cache" class="md-nav__link">
    Retrieving Items From The Cache
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#checking-for-item-existence" title="Checking For Item Existence" class="md-nav__link">
    Checking For Item Existence
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#incrementing-decrementing-values" title="Incrementing / Decrementing Values" class="md-nav__link">
    Incrementing / Decrementing Values
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#retrieve-store" title="Retrieve &amp; Store" class="md-nav__link">
    Retrieve &amp; Store
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#retrieve-delete" title="Retrieve &amp; Delete" class="md-nav__link">
    Retrieve &amp; Delete
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#storing-items-in-the-cache" title="Storing Items In The Cache" class="md-nav__link">
    Storing Items In The Cache
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#store-if-not-present" title="Store If Not Present" class="md-nav__link">
    Store If Not Present
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#storing-items-forever" title="Storing Items Forever" class="md-nav__link">
    Storing Items Forever
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#removing-items-from-the-cache" title="Removing Items From The Cache" class="md-nav__link">
    Removing Items From The Cache
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#atomic-locks" title="Atomic Locks" class="md-nav__link">
    Atomic Locks
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#the-cache-helper" title="The Cache Helper" class="md-nav__link">
    The Cache Helper
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#cache-tags" title="Cache Tags" class="md-nav__link">
    Cache Tags
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#storing-tagged-cache-items" title="Storing Tagged Cache Items" class="md-nav__link">
    Storing Tagged Cache Items
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#accessing-tagged-cache-items" title="Accessing Tagged Cache Items" class="md-nav__link">
    Accessing Tagged Cache Items
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#removing-tagged-cache-items" title="Removing Tagged Cache Items" class="md-nav__link">
    Removing Tagged Cache Items
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#adding-custom-cache-drivers" title="Adding Custom Cache Drivers" class="md-nav__link">
    Adding Custom Cache Drivers
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#writing-the-driver" title="Writing The Driver" class="md-nav__link">
    Writing The Driver
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
      
        <li class="md-nav__item">
  <a href="#events" title="Events" class="md-nav__link">
    Events
  </a>
  
</li>
      
      
      
      
      
    </ul>
  
</nav>
    
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
  <a href="#configuration" title="Configuration" class="md-nav__link">
    Configuration
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
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
  <a href="#memcached" title="Memcached" class="md-nav__link">
    Memcached
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
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#cache-usage" title="Cache Usage" class="md-nav__link">
    Cache Usage
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#obtaining-a-cache-instance" title="Obtaining A Cache Instance" class="md-nav__link">
    Obtaining A Cache Instance
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#accessing-multiple-cache-stores" title="Accessing Multiple Cache Stores" class="md-nav__link">
    Accessing Multiple Cache Stores
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#retrieving-items-from-the-cache" title="Retrieving Items From The Cache" class="md-nav__link">
    Retrieving Items From The Cache
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#checking-for-item-existence" title="Checking For Item Existence" class="md-nav__link">
    Checking For Item Existence
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#incrementing-decrementing-values" title="Incrementing / Decrementing Values" class="md-nav__link">
    Incrementing / Decrementing Values
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#retrieve-store" title="Retrieve &amp; Store" class="md-nav__link">
    Retrieve &amp; Store
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#retrieve-delete" title="Retrieve &amp; Delete" class="md-nav__link">
    Retrieve &amp; Delete
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#storing-items-in-the-cache" title="Storing Items In The Cache" class="md-nav__link">
    Storing Items In The Cache
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#store-if-not-present" title="Store If Not Present" class="md-nav__link">
    Store If Not Present
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#storing-items-forever" title="Storing Items Forever" class="md-nav__link">
    Storing Items Forever
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#removing-items-from-the-cache" title="Removing Items From The Cache" class="md-nav__link">
    Removing Items From The Cache
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#atomic-locks" title="Atomic Locks" class="md-nav__link">
    Atomic Locks
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#the-cache-helper" title="The Cache Helper" class="md-nav__link">
    The Cache Helper
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#cache-tags" title="Cache Tags" class="md-nav__link">
    Cache Tags
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#storing-tagged-cache-items" title="Storing Tagged Cache Items" class="md-nav__link">
    Storing Tagged Cache Items
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#accessing-tagged-cache-items" title="Accessing Tagged Cache Items" class="md-nav__link">
    Accessing Tagged Cache Items
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#removing-tagged-cache-items" title="Removing Tagged Cache Items" class="md-nav__link">
    Removing Tagged Cache Items
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#adding-custom-cache-drivers" title="Adding Custom Cache Drivers" class="md-nav__link">
    Adding Custom Cache Drivers
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#writing-the-driver" title="Writing The Driver" class="md-nav__link">
    Writing The Driver
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
      
        <li class="md-nav__item">
  <a href="#events" title="Events" class="md-nav__link">
    Events
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
                  <a href="https://github.com/space-mvc/space-mvc/edit/master/docs/cache.md" title="Edit this page" class="md-icon md-content__icon">&#xE3C9;</a>
                 -->

                
                <h1 id="cache">Cache</h1>
<h2 id="configuration">Configuration</h2>
<p>Space MVC provides an expressive, unified API for various caching backends. The cache configuration is located at config/cache.php. In this file you may specify which cache driver you would like to be used by default throughout your application. Space MVC supports popular caching backends like <a href="https://memcached.org">Memcached</a> and <a href="https://redis.io">Redis</a> out of the box.
The cache configuration file also contains various other options, which are documented within the file, so make sure to read over these options. By default, Space MVC is configured to use the file cache driver, which stores the serialized, cached objects in the filesystem. For larger applications, it is recommended that you use a more robust driver such as Memcached or Redis. You may even configure multiple cache configurations for the same driver.
<a name="driver-prerequisites"></a></p>
<h3 id="driver-prerequisites">Driver Prerequisites</h3>
<h4 id="database">Database</h4>
<p>When using the database cache driver, you will need to setup a table to contain the cache items. You'll find an example Schema declaration for the table below:</p>
<pre><code class="php">Schema::create('cache', function ($table) {
    $table-&gt;string('key')-&gt;unique();
    $table-&gt;text('value');
    $table-&gt;integer('expiration');
});
</code></pre>

<p>You may also use the php artisan cache:table Artisan command to generate a migration with the proper schema.</p>
<h4 id="memcached">Memcached</h4>
<p>Using the Memcached driver requires the <a href="https://pecl.php.net/package/memcached">Memcached PECL package</a> to be installed. You may list all of your Memcached servers in the config/cache.php configuration file:</p>
<pre><code class="php">'memcached' =&gt; [
    [
        'host' =&gt; '127.0.0.1',
        'port' =&gt; 11211,
        'weight' =&gt; 100
    ],
],
</code></pre>

<p>You may also set the host option to a UNIX socket path. If you do this, the port option should be set to 0:</p>
<pre><code class="php">'memcached' =&gt; [
    [
        'host' =&gt; '/var/run/memcached/memcached.sock',
        'port' =&gt; 0,
        'weight' =&gt; 100
    ],
],
</code></pre>

<h4 id="redis">Redis</h4>
<p>Before using a Redis cache with Space MVC, you will need to either install the predis/predis package (~1.0) via Composer or install the PhpRedis PHP extension via PECL.
For more information on configuring Redis, consult its <a href="/docs/5.7/redis#configuration">Space MVC documentation page</a>.
<a name="cache-usage"></a></p>
<h2 id="cache-usage"><a href="#cache-usage">Cache Usage</a></h2>
<p><a name="obtaining-a-cache-instance"></a></p>
<h3 id="obtaining-a-cache-instance">Obtaining A Cache Instance</h3>
<p>The Illuminate\Contracts\Cache\Factory and Illuminate\Contracts\Cache\Repository <a href="/docs/5.7/contracts">contracts</a> provide access to Space MVC's cache services. The Factory contract provides access to all cache drivers defined for your application. The Repository contract is typically an implementation of the default cache driver for your application as specified by your cache configuration file.
However, you may also use the Cache facade, which is what we will use throughout this documentation. The Cache facade provides convenient, terse access to the underlying implementations of the Space MVC cache contracts:</p>
<pre><code class="php">&lt;?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{
    /**
     * Show a list of all users of the application.
     *
     * @return Response
     */
    public function index()
    {
        $value = Cache::get('key');

        //
    }
}
</code></pre>

<h4 id="accessing-multiple-cache-stores">Accessing Multiple Cache Stores</h4>
<p>Using the Cache facade, you may access various cache stores via the store method. The key passed to the store method should correspond to one of the stores listed in the stores configuration array in your cache configuration file:</p>
<pre><code class="php">$value = Cache::store('file')-&gt;get('foo');

Cache::store('redis')-&gt;put('bar', 'baz', 10);
</code></pre>

<p><a name="retrieving-items-from-the-cache"></a></p>
<h3 id="retrieving-items-from-the-cache">Retrieving Items From The Cache</h3>
<p>The get method on the Cache facade is used to retrieve items from the cache. If the item does not exist in the cache, null will be returned. If you wish, you may pass a second argument to the get method specifying the default value you wish to be returned if the item doesn't exist:</p>
<pre><code class="php">$value = Cache::get('key');

$value = Cache::get('key', 'default');
</code></pre>

<p>You may even pass a Closure as the default value. The result of the Closure will be returned if the specified item does not exist in the cache. Passing a Closure allows you to defer the retrieval of default values from a database or other external service:</p>
<pre><code class="php">$value = Cache::get('key', function () {
    return DB::table(...)-&gt;get();
});
</code></pre>

<h4 id="checking-for-item-existence">Checking For Item Existence</h4>
<p>The has method may be used to determine if an item exists in the cache. This method will return false if the value is null or false:</p>
<pre><code class="php">if (Cache::has('key')) {
    //
}
</code></pre>

<h4 id="incrementing-decrementing-values">Incrementing / Decrementing Values</h4>
<p>The increment and decrement methods may be used to adjust the value of integer items in the cache. Both of these methods accept an optional second argument indicating the amount by which to increment or decrement the item's value:</p>
<pre><code class="php">Cache::increment('key');
Cache::increment('key', $amount);
Cache::decrement('key');
Cache::decrement('key', $amount);
</code></pre>

<h4 id="retrieve-store">Retrieve &amp; Store</h4>
<p>Sometimes you may wish to retrieve an item from the cache, but also store a default value if the requested item doesn't exist. For example, you may wish to retrieve all users from the cache or, if they don't exist, retrieve them from the database and add them to the cache. You may do this using the Cache::remember method:</p>
<pre><code class="php">$value = Cache::remember('users', $minutes, function () {
    return DB::table('users')-&gt;get();
});
</code></pre>

<p>If the item does not exist in the cache, the Closure passed to the remember method will be executed and its result will be placed in the cache.
You may use the rememberForever method to retrieve an item from the cache or store it forever:</p>
<pre><code class="php">$value = Cache::rememberForever('users', function () {
    return DB::table('users')-&gt;get();
});
</code></pre>

<h4 id="retrieve-delete">Retrieve &amp; Delete</h4>
<p>If you need to retrieve an item from the cache and then delete the item, you may use the pull method. Like the get method, null will be returned if the item does not exist in the cache:</p>
<pre><code class="php">$value = Cache::pull('key');
</code></pre>

<p><a name="storing-items-in-the-cache"></a></p>
<h3 id="storing-items-in-the-cache">Storing Items In The Cache</h3>
<p>You may use the put method on the Cache facade to store items in the cache. When you place an item in the cache, you need to specify the number of minutes for which the value should be cached:</p>
<pre><code class="php">Cache::put('key', 'value', $minutes);
</code></pre>

<p>Instead of passing the number of minutes as an integer, you may also pass a DateTime instance representing the expiration time of the cached item:</p>
<pre><code class="php">$expiresAt = now()-&gt;addMinutes(10);

Cache::put('key', 'value', $expiresAt);
</code></pre>

<h4 id="store-if-not-present">Store If Not Present</h4>
<p>The add method will only add the item to the cache if it does not already exist in the cache store. The method will return true if the item is actually added to the cache. Otherwise, the method will return false:</p>
<pre><code class="php">Cache::add('key', 'value', $minutes);
</code></pre>

<h4 id="storing-items-forever">Storing Items Forever</h4>
<p>The forever method may be used to store an item in the cache permanently. Since these items will not expire, they must be manually removed from the cache using the forget method:</p>
<pre><code class="php">Cache::forever('key', 'value');
</code></pre>

<p>If you are using the Memcached driver, items that are stored "forever" may be removed when the cache reaches its size limit.
<a name="removing-items-from-the-cache"></a></p>
<h3 id="removing-items-from-the-cache">Removing Items From The Cache</h3>
<p>You may remove items from the cache using the forget method:</p>
<pre><code class="php">Cache::forget('key');
</code></pre>

<p>You may clear the entire cache using the flush method:</p>
<pre><code class="php">Cache::flush();
</code></pre>

<p>Flushing the cache does not respect the cache prefix and will remove all entries from the cache. Consider this carefully when clearing a cache which is shared by other applications.
<a name="atomic-locks"></a></p>
<h3 id="atomic-locks">Atomic Locks</h3>
<p>To utilize this feature, your application must be using the memcached or redis cache driver as your application's default cache driver. In addition, all servers must be communicating with the same central cache server.
Atomic locks allow for the manipulation of distributed locks without worrying about race conditions. For example, <a href="https://forge.space-mvc.com">Space MVC</a> uses atomic locks to ensure that only one remote task is being executed on a server at a time. You may create and manage locks using the Cache::lock method:</p>
<pre><code class="php">if (Cache::lock('foo', 10)-&gt;get()) {
    // Lock acquired for 10 seconds...

    Cache::lock('foo')-&gt;release();
}
</code></pre>

<p>The get method also accepts a Closure. After the Closure is executed, Space MVC will automatically release the lock:</p>
<pre><code class="php">Cache::lock('foo')-&gt;get(function () {
    // Lock acquired indefinitely and automatically released...
});
</code></pre>

<p>If the lock is not available at the moment you request it, you may instruct Space MVC to wait for a specified number of seconds. If the lock can not be acquired within the specified time limit, an Illuminate\Contracts\Cache\LockTimeoutException will be thrown:</p>
<pre><code class="php">if (Cache::lock('foo', 10)-&gt;block(5)) {
    // Lock acquired after waiting maximum of 5 seconds...
}

Cache::lock('foo', 10)-&gt;block(5, function () {
    // Lock acquired after waiting maximum of 5 seconds...
});
</code></pre>

<p><a name="the-cache-helper"></a></p>
<h3 id="the-cache-helper">The Cache Helper</h3>
<p>In addition to using the Cache facade or <a href="/docs/5.7/contracts">cache contract</a>, you may also use the global cache function to retrieve and store data via the cache. When the cache function is called with a single, string argument, it will return the value of the given key:</p>
<pre><code class="php">$value = cache('key');
</code></pre>

<p>If you provide an array of key / value pairs and an expiration time to the function, it will store values in the cache for the specified duration:</p>
<pre><code class="php">cache(['key' =&gt; 'value'], $minutes);

cache(['key' =&gt; 'value'], now()-&gt;addSeconds(10));
</code></pre>

<p>When the cache function is called without any arguments, it returns an instance of the Illuminate\Contracts\Cache\Factory implementation, allowing you to all other caching methods:</p>
<pre><code class="php">cache()-&gt;remember('users', $minutes, function () {
    return DB::table('users')-&gt;get();
});
</code></pre>

<p>When testing call to the global cache function, you may use the Cache::shouldReceive method just as if you were <a href="/docs/5.7/mocking#mocking-facades">testing a facade</a>.
<a name="cache-tags"></a></p>
<h2 id="cache-tags"><a href="#cache-tags">Cache Tags</a></h2>
<p>Cache tags are not supported when using the file or database cache drivers. Furthermore, when using multiple tags with caches that are stored "forever", performance will be best with a driver such as memcached, which automatically purges stale records.
<a name="storing-tagged-cache-items"></a></p>
<h3 id="storing-tagged-cache-items">Storing Tagged Cache Items</h3>
<p>Cache tags allow you to tag related items in the cache and then flush all cached values that have been assigned a given tag. You may access a tagged cache by passing in an ordered array of tag names. For example, let's access a tagged cache and put value in the cache:</p>
<pre><code class="php">Cache::tags(['people', 'artists'])-&gt;put('John', $john, $minutes);

Cache::tags(['people', 'authors'])-&gt;put('Anne', $anne, $minutes);
</code></pre>

<p><a name="accessing-tagged-cache-items"></a></p>
<h3 id="accessing-tagged-cache-items">Accessing Tagged Cache Items</h3>
<p>To retrieve a tagged cache item, pass the same ordered list of tags to the tags method and then call the get method with the key you wish to retrieve:</p>
<pre><code class="php">$john = Cache::tags(['people', 'artists'])-&gt;get('John');

$anne = Cache::tags(['people', 'authors'])-&gt;get('Anne');
</code></pre>

<p><a name="removing-tagged-cache-items"></a></p>
<h3 id="removing-tagged-cache-items">Removing Tagged Cache Items</h3>
<p>You may flush all items that are assigned a tag or list of tags. For example, this statement would remove all caches tagged with either people, authors, or both. So, both Anne and John would be removed from the cache:</p>
<pre><code class="php">Cache::tags(['people', 'authors'])-&gt;flush();
</code></pre>

<p>In contrast, this statement would remove only caches tagged with authors, so Anne would be removed, but not John:</p>
<pre><code class="php">Cache::tags('authors')-&gt;flush();
</code></pre>

<p><a name="adding-custom-cache-drivers"></a></p>
<h2 id="adding-custom-cache-drivers"><a href="#adding-custom-cache-drivers">Adding Custom Cache Drivers</a></h2>
<p><a name="writing-the-driver"></a></p>
<h3 id="writing-the-driver">Writing The Driver</h3>
<p>To create our custom cache driver, we first need to implement the Illuminate\Contracts\Cache\Store <a href="/docs/5.7/contracts">contract</a>. So, a MongoDB cache implementation would look something like this:</p>
<pre><code class="php">&lt;?php

namespace App\Extensions;

use Illuminate\Contracts\Cache\Store;

class MongoStore implements Store
{
    public function get($key) {}
    public function many(array $keys);
    public function put($key, $value, $minutes) {}
    public function putMany(array $values, $minutes);
    public function increment($key, $value = 1) {}
    public function decrement($key, $value = 1) {}
    public function forever($key, $value) {}
    public function forget($key) {}
    public function flush() {}
    public function getPrefix() {}
}
</code></pre>

<p>We just need to implement each of these methods using a MongoDB connection. For an example of how to implement each of these methods, take a look at the Illuminate\Cache\MemcachedStore in the framework source code. Once our implementation is complete, we can finish our custom driver registration.</p>
<pre><code class="php">Cache::extend('mongo', function ($app) {
    return Cache::repository(new MongoStore);
});
</code></pre>

<p>If you're wondering where to put your custom cache driver code, you could create an Extensions namespace within your app directory. However, keep in mind that Space MVC does not have a rigid application structure and you are free to organize your application according to your preferences.
<a name="registering-the-driver"></a></p>
<h3 id="registering-the-driver">Registering The Driver</h3>
<p>To register the custom cache driver with Space MVC, we will use the extend method on the Cache facade. The call to Cache::extend could be done in the boot method of the default App\Providers\AppServiceProvider that ships with fresh Space MVC applications, or you may create your own service provider to house the extension - just don't forget to register the provider in the config/app.php provider array:</p>
<pre><code class="php">&lt;?php

namespace App\Providers;

use App\Extensions\MongoStore;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class CacheServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        Cache::extend('mongo', function ($app) {
            return Cache::repository(new MongoStore);
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

<p>The first argument passed to the extend method is the name of the driver. This will correspond to your driver option in the config/cache.php configuration file. The second argument is a Closure that should return an Illuminate\Cache\Repository instance. The Closure will be passed an $app instance, which is an instance of the <a href="/docs/5.7/container">service container</a>.
Once your extension is registered, update your config/cache.php configuration file's driver option to the name of your extension.
<a name="events"></a></p>
<h2 id="events"><a href="#events">Events</a></h2>
<p>To execute code on every cache operation, you may listen for the <a href="/docs/5.7/events">events</a> fired by the cache. Typically, you should place these event listeners within your EventServiceProvider:</p>
<pre><code class="php">/**
 * The event listener mappings for the application.
 *
 * @var array
 */
protected $listen = [
    'Illuminate\Cache\Events\CacheHit' =&gt; [
        'App\Listeners\LogCacheHit',
    ],

    'Illuminate\Cache\Events\CacheMissed' =&gt; [
        'App\Listeners\LogCacheMissed',
    ],

    'Illuminate\Cache\Events\KeyForgotten' =&gt; [
        'App\Listeners\LogKeyForgotten',
    ],

    'Illuminate\Cache\Events\KeyWritten' =&gt; [
        'App\Listeners\LogKeyWritten',
    ],
];
</code></pre>
                
                  
                
              
              
                


              
            </article>
          </div>
        </div>
      </main>

      <div style="height:50px;"></div>

      
        
<footer class="md-footer">
  
    <div class="md-footer-nav">
      <nav class="md-footer-nav__inner md-grid">
        
          <a href="../file-storage/" title="File Storage" class="md-flex md-footer-nav__link md-footer-nav__link--prev" rel="prev">
            <div class="md-flex__cell md-flex__cell--shrink">
              <i class="md-icon md-icon--arrow-back md-footer-nav__button"></i>
            </div>
            <div class="md-flex__cell md-flex__cell--stretch md-footer-nav__title">
              <span class="md-flex__ellipsis">
                <span class="md-footer-nav__direction">
                  Previous
                </span>
                File Storage
              </span>
            </div>
          </a>
        
        
          <a href="../events/" title="Events" class="md-flex md-footer-nav__link md-footer-nav__link--next" rel="next">
            <div class="md-flex__cell md-flex__cell--stretch md-footer-nav__title">
              <span class="md-flex__ellipsis">
                <span class="md-footer-nav__direction">
                  Next
                </span>
                Events
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
