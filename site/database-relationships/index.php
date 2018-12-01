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
    
    
      
        <title>Relationships - Space MVC Framework</title>
      
    
    
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
    
      <a href="#database-relationships" tabindex="1" class="md-skip">
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
                Relationships
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

        
          
          
          


  <li class="md-nav__item">
    <a href="../database-finders/" title="Finders" class="md-nav__link">
      Finders
    </a>
  </li>

        
          
          
          

  


  <li class="md-nav__item md-nav__item--active">
    
    <input class="md-toggle md-nav__toggle" data-md-toggle="toc" type="checkbox" id="__toc">
    
    
      <label class="md-nav__link md-nav__link--active" for="__toc">
        Relationships
      </label>
    
    <a href="./" title="Relationships" class="md-nav__link md-nav__link--active">
      Relationships
    </a>
    
      
<nav class="md-nav md-nav--secondary">
  
  
  
    <label class="md-nav__title" for="__toc">Table of contents</label>
    <ul class="md-nav__list" data-md-scrollfix>
      
        <li class="md-nav__item">
  <a href="#database-relationships" title="Database : Relationships" class="md-nav__link">
    Database : Relationships
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#common-options" title="Common options" class="md-nav__link">
    Common options
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#conditions" title="conditions" class="md-nav__link">
    conditions
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#readonly" title="readonly" class="md-nav__link">
    readonly
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#select" title="select" class="md-nav__link">
    select
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#class_name" title="class_name" class="md-nav__link">
    class_name
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#has_many" title="has_many" class="md-nav__link">
    has_many
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#has_many-through-many-to-many" title="has_many through (many to many)" class="md-nav__link">
    has_many through (many to many)
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#belongs_to" title="belongs_to" class="md-nav__link">
    belongs_to
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#has_one" title="has_one" class="md-nav__link">
    has_one
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#has_one-through" title="has_one through" class="md-nav__link">
    has_one through
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#self-referential" title="Self-referential" class="md-nav__link">
    Self-referential
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
  <a href="#database-relationships" title="Database : Relationships" class="md-nav__link">
    Database : Relationships
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#common-options" title="Common options" class="md-nav__link">
    Common options
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#conditions" title="conditions" class="md-nav__link">
    conditions
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#readonly" title="readonly" class="md-nav__link">
    readonly
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#select" title="select" class="md-nav__link">
    select
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#class_name" title="class_name" class="md-nav__link">
    class_name
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#has_many" title="has_many" class="md-nav__link">
    has_many
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#has_many-through-many-to-many" title="has_many through (many to many)" class="md-nav__link">
    has_many through (many to many)
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#belongs_to" title="belongs_to" class="md-nav__link">
    belongs_to
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#has_one" title="has_one" class="md-nav__link">
    has_one
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#has_one-through" title="has_one through" class="md-nav__link">
    has_one through
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#self-referential" title="Self-referential" class="md-nav__link">
    Self-referential
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
                  <a href="https://github.com/space-mvc/space-mvc/edit/master/docs/database-relationships.md" title="Edit this page" class="md-icon md-content__icon">&#xE3C9;</a>
                 -->

                
                  <h1>Relationships</h1>
                
                <h2 id="database-relationships">Database : Relationships</h2>
<ul id="topic-list">
        <li><a href="/docs/database/relationships#common-options">Common options</a></li>
        <li><a href="/docs/database/relationships#has_many">has_many</a></li>
        <li><a href="/docs/database/relationships#has_many_through" title="many to many">has_many through</a></li>
        <li><a href="/docs/database/relationships#belongs_to">belongs_to</a></li>
        <li><a href="/docs/database/relationships#has_one">has_one</a></li>
        <li><a href="/docs/database/relationships#self-referential">Self-referential</a></li>
    </ul>

<p>What are associations? By declaring associations on your models, you allow them to communicate with each other. These associations should match the way data in your tables relate to each other.</p>
<h4 id="common-options">Common options</h4>
<p>These are available amongst each type of association.</p>
<p><strong>conditions</strong>: string/array of <a href="/docs/database/finders#conditions">finder conditions</a><br><strong>readonly</strong>: whether associated objects can be <a href="/docs/database/finders#read-only">saved/destroyed</a><br><strong>select</strong>: specify fields in the <a href="/docs/database/finders#select">select clause</a><br><strong>class_name</strong>: the class name of the associated model<br><strong>foreign_key</strong>: name of foreign_key</p>
<p>Let's take a look at these options with a few different association types</p>
<h5 id="conditions">conditions</h5>
<p>Below, we specify that associated payments of an order object should not be void.</p>
<pre><code class="php">1 class Order extends ActiveRecord\Model {
2   static $has_many = array(
3     array('payments', 'conditions' =&gt; array('void = ?' =&gt; array(0)))
4   );
5 }

</code></pre>

<h5 id="readonly">readonly</h5>
<p>If you add a readonly option to your association, then the associatied object cannot be saved, although, the base object can still be saved.</p>
<pre><code class="php"> 1 class Payment extends ActiveRecord\Model {
 2   static $belongs_to = array(
 3     array('user', 'readonly' =&gt; true)
 4   );
 5 }
 6
 7 $payment = Payment::first();
 8 $payment-&gt;paid = 1;
 9 $payment-&gt;save(); # this will save just fine
10
11 $payment-&gt;user-&gt;first_name = 'John';
12 $payment-&gt;user-&gt;save(); # this will throw a ReadOnlyException

</code></pre>

<h5 id="select">select</h5>
<p>Sometimes you may not need all of the fields back from one of your associations (e.g. it may be a ridiculously large table) and so you can specify the particular fields you want.</p>
<pre><code class="php">1 class Payment extends ActiveRecord\Model {
2   static $belongs_to = array(
3     array('person', 'select' =&gt; 'id, first_name, last_name')
4   );
5 }

</code></pre>

<h5 id="class_name">class_name</h5>
<p>In this example payment has a one-to-one relationship with a user, but we want to access the association thru "person." Thus, we have to provide the class name of the associated model; otherwise, ActiveRecord would try to look for a "Person" class.</p>
<pre><code class="php">1 class Payment extends ActiveRecord\Model {
2   static $belongs_to = array(
3     array('person', 'class_name' =&gt; 'User')
4   );
5 }

</code></pre>

<h4 id="has_many">has_many</h4>
<p>A one-to-many relationship. You should use a pluralized form of the associated model when declaring a has_many association, unless you want to use the <a href="/docs/database/relationships#class_name">class_name</a> option.</p>
<pre><code class="php"> 1 # one-to-many association with the model &quot;Payment&quot; 
 2 class User extends ActiveRecord\Model {
 3   static $has_many = array(
 4     array('payments')
 5   );
 6 }
 7
 8 $user = User::first();
 9 print_r($user-&gt;payments); # =&gt; will print an array of Payment objects
10
11 $payment = $user-&gt;create_payment(array('amount' =&gt; 1)); # build|create for associations.

</code></pre>

<p><img src="/images/guides/has_many.png" alt=""></p>
<p>Options (not part of <a href="/docs/database/relationships#common-options">common options</a>)</p>
<p><strong>limit/offset</strong>: limit the number of records<br><strong>primary_key</strong>: name of the primary_key of the association (assumed to be "id")<br><strong>group</strong>: GROUP BY clause<br><strong>order</strong>: ORDER BY clause<br><strong>through</strong>: the association used to go "through"</p>
<pre><code class="php">1 class Order extends ActiveRecord\Model {
2   static $has_many = array(
3     array('payments', 'limit' =&gt; 5),
4     array('items', 'order' =&gt; 'name asc', 'group' =&gt; 'type')
5   );
6 }

</code></pre>

<h5 id="has_many-through-many-to-many">has_many through (many to many)</h5>
<p>This is a convenient way to configure a many-to-many association. In this example an order is associated with users by going the its payments association.</p>
<pre><code class="php"> 1 class Order extends ActiveRecord\Model {
 2   static $has_many = array(
 3     array('payments'),
 4     array('users', 'through' =&gt; 'payments')
 5   );
 6 }
 7
 8 class Payment extends ActiveRecord\Model {
 9   static $belongs_to = array(
10     array('user'),
11     array('order')
12   );
13 }
14
15 class User extends ActiveRecord\Model {
16   static $has_many = array(
17     array('payments')
18   );
19 }
&lt;strong&gt;20&lt;/strong&gt;
21 $order = Order::first();
22 # direct access to users
23 print_r($order-&gt;users); # will print an array of User object

</code></pre>

<p><img src="/images/guides/has_many_through.png" alt=""></p>
<h4 id="belongs_to">belongs_to</h4>
<p>This indicates a one-to-one relationship. Its difference from <a href="/docs/database/relationships#has_one">has_one</a> is that the foreign key will be on the table which declares a belongs_to association. You should use a singular form of the associated model when declaring this association, unless you want to use the <a href="/docs/database/relationships#class_name">class_name</a> option.</p>
<pre><code class="php">1 class Payment extends ActiveRecord\Model {
2   static $belongs_to = array(
3     array('user')
4   );
5 }
6
7 $payment = Payment::first();
8 echo $payment-&gt;user-&gt;first_name; # first_name of associated User object

</code></pre>

<p><img src="/images/guides/belongs_to.png" alt=""></p>
<p>Options (not part of <a href="/docs/database/relationships#common-options">common options</a>)</p>
<p><strong>primary_key</strong>: name of the primary_key of the association (assumed to be "id")</p>
<h4 id="has_one">has_one</h4>
<p>This indicates a one-to-one relationship. A has_one will have the foreign key on the associated table unlike <a href="/docs/database/relationships#belongs_to">belongs_to</a>. You should use a singular form of the associated model when declaring this association, unless you want to use the <a href="/docs/database/relationships#class_name">class_name</a> option.</p>
<pre><code class="php">1 class Payment extends ActiveRecord\Model {
2   static $has_one = array(
3     array('receipt')
4   );
5 }

</code></pre>

<p><img src="/images/guides/has_one.png" alt=""></p>
<p>Options (not part of <a href="/docs/database/relationships#common-options">common options</a>)</p>
<p><strong>primary_key</strong>: name of the primary_key of the association (assumed to be "id")<br><strong>through</strong>: the association used to go "through"</p>
<h5 id="has_one-through">has_one through</h5>
<p>A one-to-one association. In this example, an owner has a quarter_back by going through its team association.</p>
<pre><code class="php"> 1 class Owner extends ActiveRecord\Model {
 2   static $has_one = array(
 3     array('team'),
 4     array('quarter_back', 'through' =&gt; 'team')
 5   );
 6 }
 7
 8 class Team extends ActiveRecord\Model {
 9   static $belongs_to = array(
10     array('owner')
11   );
12
13   static $has_one = array(
14     array('quarter_back')
15   );
16 }
17
18 class QuarterBack extends ActiveRecord\Model {
19   static $belongs_to = array(
&lt;strong&gt;20&lt;/strong&gt;     array('team')
21   );
22 }

</code></pre>

<p><img src="/images/guides/has_one_through.png" alt=""></p>
<h4 id="self-referential">Self-referential</h4>
<p>Model's can declare associations to themselves. This can be helpful for table auditing, or in the example below, where a post would need to know about its parent.</p>
<pre><code class="php">1 class Post extends ActiveRecord\Model {
2   static $belongs_to = array(array('parent_post', 'class_name' =&gt; 'Post'));
3 }

</code></pre>

<p><img src="/images/guides/belongs_to_self_referential.png" alt=""></p>
                
                  
                
              
              
                


              
            </article>
          </div>
        </div>
      </main>

      <div style="height:50px;"></div>

      
        
<footer class="md-footer">
  
    <div class="md-footer-nav">
      <nav class="md-footer-nav__inner md-grid">
        
          <a href="../database-finders/" title="Finders" class="md-flex md-footer-nav__link md-footer-nav__link--prev" rel="prev">
            <div class="md-flex__cell md-flex__cell--shrink">
              <i class="md-icon md-icon--arrow-back md-footer-nav__button"></i>
            </div>
            <div class="md-flex__cell md-flex__cell--stretch md-footer-nav__title">
              <span class="md-flex__ellipsis">
                <span class="md-footer-nav__direction">
                  Previous
                </span>
                Finders
              </span>
            </div>
          </a>
        
        
          <a href="../file-storage/" title="File Storage" class="md-flex md-footer-nav__link md-footer-nav__link--next" rel="next">
            <div class="md-flex__cell md-flex__cell--stretch md-footer-nav__title">
              <span class="md-flex__ellipsis">
                <span class="md-footer-nav__direction">
                  Next
                </span>
                File Storage
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
