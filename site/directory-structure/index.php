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
    
    
      
        <title>Directory Structure - Space MVC Framework</title>
      
    
    
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
    
      <a href="#directory-structure" tabindex="1" class="md-skip">
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
                Directory Structure
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

    
      
      
      

  


  <li class="md-nav__item md-nav__item--active md-nav__item--nested">
    
      <input class="md-toggle md-nav__toggle" data-md-toggle="nav-3" type="checkbox" id="nav-3" checked>
    
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

        
          
          
          

  


  <li class="md-nav__item md-nav__item--active">
    
    <input class="md-toggle md-nav__toggle" data-md-toggle="toc" type="checkbox" id="__toc">
    
      
    
    
      <label class="md-nav__link md-nav__link--active" for="__toc">
        Directory Structure
      </label>
    
    <a href="./" title="Directory Structure" class="md-nav__link md-nav__link--active">
      Directory Structure
    </a>
    
      
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
  <a href="#where-is-the-models-directory" title="Where Is The Models Directory?" class="md-nav__link">
    Where Is The Models Directory?
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#the-app-directory" title="The App Directory" class="md-nav__link">
    The App Directory
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#the-config-directory" title="The Config Directory" class="md-nav__link">
    The Config Directory
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#the-database-directory" title="The Database Directory" class="md-nav__link">
    The Database Directory
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#the-public-directory" title="The Public Directory" class="md-nav__link">
    The Public Directory
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#the-resources-directory" title="The Resources Directory" class="md-nav__link">
    The Resources Directory
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#the-routes-directory" title="The Routes Directory" class="md-nav__link">
    The Routes Directory
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#the-storage-directory" title="The Storage Directory" class="md-nav__link">
    The Storage Directory
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#the-tests-directory" title="The Tests Directory" class="md-nav__link">
    The Tests Directory
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#the-vendor-directory" title="The Vendor Directory" class="md-nav__link">
    The Vendor Directory
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#the-events-directory" title="The Events Directory" class="md-nav__link">
    The Events Directory
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#the-listeners-directory" title="The Listeners Directory" class="md-nav__link">
    The Listeners Directory
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
  <a href="#where-is-the-models-directory" title="Where Is The Models Directory?" class="md-nav__link">
    Where Is The Models Directory?
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#the-app-directory" title="The App Directory" class="md-nav__link">
    The App Directory
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#the-config-directory" title="The Config Directory" class="md-nav__link">
    The Config Directory
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#the-database-directory" title="The Database Directory" class="md-nav__link">
    The Database Directory
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#the-public-directory" title="The Public Directory" class="md-nav__link">
    The Public Directory
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#the-resources-directory" title="The Resources Directory" class="md-nav__link">
    The Resources Directory
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#the-routes-directory" title="The Routes Directory" class="md-nav__link">
    The Routes Directory
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#the-storage-directory" title="The Storage Directory" class="md-nav__link">
    The Storage Directory
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#the-tests-directory" title="The Tests Directory" class="md-nav__link">
    The Tests Directory
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#the-vendor-directory" title="The Vendor Directory" class="md-nav__link">
    The Vendor Directory
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#the-events-directory" title="The Events Directory" class="md-nav__link">
    The Events Directory
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#the-listeners-directory" title="The Listeners Directory" class="md-nav__link">
    The Listeners Directory
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
                  <a href="https://github.com/space-mvc/space-mvc/edit/master/docs/directory-structure.md" title="Edit this page" class="md-icon md-content__icon">&#xE3C9;</a>
                 -->

                
                <h1 id="directory-structure">Directory Structure</h1>
<ul>
<li><a href="#introduction">Introduction</a></li>
<li>
<p><a href="#the-root-directory">The Root Directory</a></p>
<ul>
<li><a href="#the-root-app-directory">The app Directory</a></li>
<li><a href="#the-config-directory">The config Directory</a></li>
<li><a href="#the-database-directory">The database Directory</a></li>
<li><a href="#the-public-directory">The public Directory</a></li>
<li>
<p><a href="#the-resources-directory">The resources Directory</a></p>
</li>
<li>
<p><a href="#the-routes-directory">The routes Directory</a></p>
</li>
<li><a href="#the-storage-directory">The storage Directory</a></li>
<li><a href="#the-tests-directory">The tests Directory</a></li>
<li><a href="#the-vendor-directory">The vendor Directory</a></li>
<li><a href="#the-listeners-directory">The Models Directory</a></li>
<li><a href="#the-listeners-directory">The Requests Directory</a></li>
<li><a href="#the-events-directory">The Events Directory</a></li>
<li><a href="#the-listeners-directory">The Listeners Directory</a></li>
</ul>
</li>
</ul>
<p><a name="introduction"></a></p>
<h2 id="introduction"><a href="#introduction">Introduction</a></h2>
<p>The default Space MVC application structure is intended to provide a great starting point for both large and small
        applications. Of course, you are free to organize your application however you like. Space MVC imposes almost no
        restrictions on where any given class is located - as long as Composer can autoload the class.</p>
<h4 id="where-is-the-models-directory">Where Is The Models Directory?</h4>
<p>When getting started with Space MVC, many developers are confused by the lack of a &gt;models
        directory. However, the lack of such a directory is intentional. We find the word "models" ambiguous since it
        means many different things to many different people. Some developers refer to an application's "model" as the
        totality of all of its business logic, while others refer to "models" as classes that interact with a relational
        database.</p>
<p><a name="the-root-app-directory"></a></p>
<h4 id="the-app-directory">The App Directory</h4>
<p>The directory, as you might expect, contains the core code of your
        application. We'll explore this directory in more detail soon; however, almost all of the classes in your
        application will be in this directory.</p>
<p><a name="the-config-directory"></a></p>
<h4 id="the-config-directory">The Config Directory</h4>
<p>The directory, as the name implies, contains all of your application's
        configuration files. It's a great idea to read through all of these files and familiarize yourself with all of
        the options available to you.</p>
<p><a name="the-database-directory"></a></p>
<h4 id="the-database-directory">The Database Directory</h4>
<p>The directory contains your database migrations, model factories, and
        seeds. If you wish, you may also use this directory to hold an SQLite database.</p>
<p><a name="the-public-directory"></a></p>
<h4 id="the-public-directory">The Public Directory</h4>
<p>The public directory contains the index.php file, which is the entry
        point for all requests entering your application and configures autoloading. This directory also houses your
        assets such as images, JavaScript, and CSS.</p>
<p><a name="the-resources-directory"></a></p>
<h4 id="the-resources-directory">The Resources Directory</h4>
<p>The resources directory contains your views as well as your raw, un-compiled
        assets such as LESS, SASS, or JavaScript. This directory also houses all of your language files.</p>
<p><a name="the-routes-directory"></a></p>
<h4 id="the-routes-directory">The Routes Directory</h4>
<p>The routes directory contains all of the route definitions for your
        application. By default, several route files are included with Space MVC:
        web.php,
        api.php,
        console.php and
        channels.php.</p>
<p>The web.php file contains routes that
        the RouteServiceProvider places in the web
        middleware group, which provides session state, CSRF protection, and cookie encryption. If your application does
        not offer a stateless, RESTful API, all of your routes will most likely be defined in the
        web.php file.</p>
<p>The api.php file contains routes that
        the RouteServiceProvider places in the api
        middleware group, which provides rate limiting. These routes are intended to be stateless, so requests entering
        the application through these routes are intended to be authenticated via tokens and will not have access to
        session state.</p>
<p>The console.php file is where you may
        define all of your Closure based console commands. Each Closure is bound to a command instance allowing a simple
        approach to interacting with each command's IO methods. Even though this file does not define HTTP routes, it
        defines console based entry points (routes) into your application.</p>
<p>The channels.php file is where you may
        register all of the event broadcasting channels that your application supports.</p>
<p><a name="the-storage-directory"></a></p>
<h4 id="the-storage-directory">The Storage Directory</h4>
<p>The storage directory contains your compiled Blade templates, file based
        sessions, file caches, and other files generated by the framework. This directory is segregated into
        app, framework, and logs directories. The app directory may
        be used to store any files generated by your application. The framework
        directory is used to store framework generated files and caches. Finally, the
        logs directory contains your application's log files.</p>
<p>The storage/app/public directory may be used to store user-generated files, such as profile avatars, that should be publicly accessible. You should
        create a symbolic link at public/storage which points to this directory. You may create the
        link using the php artisan storage:link command.</p>
<p><a name="the-tests-directory"></a></p>
<h4 id="the-tests-directory">The Tests Directory</h4>
<p>The tests directory contains your automated tests. An
        example <a href="https://phpunit.de/">PHPUnit</a> is provided out of the box. Each test class should be suffixed
        with the word Test. You may run your tests using the
        phpunit or php vendor/bin/phpunit commands.</p>
<p><a name="the-vendor-directory"></a></p>
<h4 id="the-vendor-directory">The Vendor Directory</h4>
<p>The vendor directory contains your <a href="https://getcomposer.org">Composer</a> dependencies.</p>
<p><a name="the-broadcasting-directory"></a></p>
<h4 id="the-events-directory">The Events Directory</h4>
<p>This directory does not exist by default, but will be created for you by the
       event:generate and
        make:event Artisan commands. The
        Events directory, as you might expect, houses event
            classes. Events may be used to alert other parts of your application that a given action has occurred,
        providing a great deal of flexibility and decoupling.</p>
<h4 id="the-listeners-directory">The Listeners Directory</h4>
<p>This directory does not exist by default, but will be created for you if you execute the
        event:generate or make:listener
        Artisan commands. The Listeners directory contains the classes that handle your events. Event listeners
        receive an event instance and perform logic in response to the event being fired. For example, a
        UserRegistered event might be handled by a SendWelcomeEmail listener.</p>
<p><a name="the-mail-directory"></a></p>
                
                  
                
              
              
                


              
            </article>
          </div>
        </div>
      </main>

      <div style="height:50px;"></div>

      
        
<footer class="md-footer" style="position:fixed;bottom:0;left:0;width:100%;">
  
    <div class="md-footer-nav">
      <nav class="md-footer-nav__inner md-grid">
        
          <a href="../configuration/" title="Configuration" class="md-flex md-footer-nav__link md-footer-nav__link--prev" rel="prev">
            <div class="md-flex__cell md-flex__cell--shrink">
              <i class="md-icon md-icon--arrow-back md-footer-nav__button"></i>
            </div>
            <div class="md-flex__cell md-flex__cell--stretch md-footer-nav__title">
              <span class="md-flex__ellipsis">
                <span class="md-footer-nav__direction">
                  Previous
                </span>
                Configuration
              </span>
            </div>
          </a>
        
        
          <a href="../routing/" title="Routing" class="md-flex md-footer-nav__link md-footer-nav__link--next" rel="next">
            <div class="md-flex__cell md-flex__cell--stretch md-footer-nav__title">
              <span class="md-flex__ellipsis">
                <span class="md-footer-nav__direction">
                  Next
                </span>
                Routing
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
