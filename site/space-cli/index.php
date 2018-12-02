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
    
    
      
        <title>Space CLI Tool - Space MVC Framework</title>
      
    
    
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
    
      <a href="#space-command-line-interface-cli-tool" tabindex="1" class="md-skip">
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
                Space CLI Tool
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

        
          
          
          

  


  <li class="md-nav__item md-nav__item--active">
    
    <input class="md-toggle md-nav__toggle" data-md-toggle="toc" type="checkbox" id="__toc">
    
    
      <label class="md-nav__link md-nav__link--active" for="__toc">
        Space CLI Tool
      </label>
    
    <a href="./" title="Space CLI Tool" class="md-nav__link md-nav__link--active">
      Space CLI Tool
    </a>
    
      
<nav class="md-nav md-nav--secondary">
  
  
  
    <label class="md-nav__title" for="__toc">Table of contents</label>
    <ul class="md-nav__list" data-md-scrollfix>
      
        <li class="md-nav__item">
  <a href="#space-command-line-interface-cli-tool" title="Space Command Line Interface (CLI) Tool" class="md-nav__link">
    Space Command Line Interface (CLI) Tool
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#space-mvc-repl" title="Space MVC REPL" class="md-nav__link">
    Space MVC REPL
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#writing-commands" title="Writing Commands" class="md-nav__link">
    Writing Commands
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#generating-commands" title="Generating Commands" class="md-nav__link">
    Generating Commands
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#command-structure" title="Command Structure" class="md-nav__link">
    Command Structure
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#closure-commands" title="Closure Commands" class="md-nav__link">
    Closure Commands
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#type-hinting-dependencies" title="Type-Hinting Dependencies" class="md-nav__link">
    Type-Hinting Dependencies
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#closure-command-descriptions" title="Closure Command Descriptions" class="md-nav__link">
    Closure Command Descriptions
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#defining-input-expectations" title="Defining Input Expectations" class="md-nav__link">
    Defining Input Expectations
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#arguments" title="Arguments" class="md-nav__link">
    Arguments
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#options" title="Options" class="md-nav__link">
    Options
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#options-with-values" title="Options With Values" class="md-nav__link">
    Options With Values
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#option-shortcuts" title="Option Shortcuts" class="md-nav__link">
    Option Shortcuts
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#input-arrays" title="Input Arrays" class="md-nav__link">
    Input Arrays
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#input-descriptions" title="Input Descriptions" class="md-nav__link">
    Input Descriptions
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#command-io" title="Command I/O" class="md-nav__link">
    Command I/O
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#retrieving-input" title="Retrieving Input" class="md-nav__link">
    Retrieving Input
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#prompting-for-input" title="Prompting For Input" class="md-nav__link">
    Prompting For Input
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#asking-for-confirmation" title="Asking For Confirmation" class="md-nav__link">
    Asking For Confirmation
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#auto-completion" title="Auto-Completion" class="md-nav__link">
    Auto-Completion
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#multiple-choice-questions" title="Multiple Choice Questions" class="md-nav__link">
    Multiple Choice Questions
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#writing-output" title="Writing Output" class="md-nav__link">
    Writing Output
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#table-layouts" title="Table Layouts" class="md-nav__link">
    Table Layouts
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#progress-bars" title="Progress Bars" class="md-nav__link">
    Progress Bars
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#registering-commands" title="Registering Commands" class="md-nav__link">
    Registering Commands
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#programmatically-executing-commands" title="Programmatically Executing Commands" class="md-nav__link">
    Programmatically Executing Commands
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#passing-array-values" title="Passing Array Values" class="md-nav__link">
    Passing Array Values
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#passing-boolean-values" title="Passing Boolean Values" class="md-nav__link">
    Passing Boolean Values
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#calling-commands-from-other-commands" title="Calling Commands From Other Commands" class="md-nav__link">
    Calling Commands From Other Commands
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
      
      
      
      
    </ul>
  
</nav>
    
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
  <a href="#space-command-line-interface-cli-tool" title="Space Command Line Interface (CLI) Tool" class="md-nav__link">
    Space Command Line Interface (CLI) Tool
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#space-mvc-repl" title="Space MVC REPL" class="md-nav__link">
    Space MVC REPL
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#writing-commands" title="Writing Commands" class="md-nav__link">
    Writing Commands
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#generating-commands" title="Generating Commands" class="md-nav__link">
    Generating Commands
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#command-structure" title="Command Structure" class="md-nav__link">
    Command Structure
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#closure-commands" title="Closure Commands" class="md-nav__link">
    Closure Commands
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#type-hinting-dependencies" title="Type-Hinting Dependencies" class="md-nav__link">
    Type-Hinting Dependencies
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#closure-command-descriptions" title="Closure Command Descriptions" class="md-nav__link">
    Closure Command Descriptions
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#defining-input-expectations" title="Defining Input Expectations" class="md-nav__link">
    Defining Input Expectations
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#arguments" title="Arguments" class="md-nav__link">
    Arguments
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#options" title="Options" class="md-nav__link">
    Options
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#options-with-values" title="Options With Values" class="md-nav__link">
    Options With Values
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#option-shortcuts" title="Option Shortcuts" class="md-nav__link">
    Option Shortcuts
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#input-arrays" title="Input Arrays" class="md-nav__link">
    Input Arrays
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#input-descriptions" title="Input Descriptions" class="md-nav__link">
    Input Descriptions
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#command-io" title="Command I/O" class="md-nav__link">
    Command I/O
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#retrieving-input" title="Retrieving Input" class="md-nav__link">
    Retrieving Input
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#prompting-for-input" title="Prompting For Input" class="md-nav__link">
    Prompting For Input
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#asking-for-confirmation" title="Asking For Confirmation" class="md-nav__link">
    Asking For Confirmation
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#auto-completion" title="Auto-Completion" class="md-nav__link">
    Auto-Completion
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#multiple-choice-questions" title="Multiple Choice Questions" class="md-nav__link">
    Multiple Choice Questions
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#writing-output" title="Writing Output" class="md-nav__link">
    Writing Output
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#table-layouts" title="Table Layouts" class="md-nav__link">
    Table Layouts
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#progress-bars" title="Progress Bars" class="md-nav__link">
    Progress Bars
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#registering-commands" title="Registering Commands" class="md-nav__link">
    Registering Commands
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#programmatically-executing-commands" title="Programmatically Executing Commands" class="md-nav__link">
    Programmatically Executing Commands
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#passing-array-values" title="Passing Array Values" class="md-nav__link">
    Passing Array Values
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#passing-boolean-values" title="Passing Boolean Values" class="md-nav__link">
    Passing Boolean Values
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#calling-commands-from-other-commands" title="Calling Commands From Other Commands" class="md-nav__link">
    Calling Commands From Other Commands
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
                  <a href="https://github.com/space-mvc/space-mvc/edit/master/docs/space-cli.md" title="Edit this page" class="md-icon md-content__icon">&#xE3C9;</a>
                 -->

                
                  <h1>Space CLI Tool</h1>
                
                <h2 id="space-command-line-interface-cli-tool">Space Command Line Interface (CLI) Tool</h2>
<p>Space is the command-line interface included with Space MVC. It provides a number of helpful commands that can assist you while you build your application. To view a list of all available Space commands, you may use the list command:</p>
<pre><code class="bash">php space list
</code></pre>

<p>Every command also includes a "help" screen which displays and describes the command's available arguments and options. To view a help screen, precede the name of the command with help:</p>
<pre><code class="bash">php space help migrate
</code></pre>

<h4 id="space-mvc-repl">Space MVC REPL</h4>
<p>All Space MVC applications include Tinker, a REPL powered by the <a href="https://github.com/bobthecow/psysh">PsySH</a> package. Tinker allows you to interact with your entire Space MVC application on the command line, including the Eloquent ORM, jobs, events, and more. To enter the Tinker environment, run the tinker Space command:</p>
<pre><code class="bash">php space tinker
</code></pre>

<p><a name="writing-commands"></a></p>
<h2 id="writing-commands"><a href="#writing-commands">Writing Commands</a></h2>
<p>In addition to the commands provided with Space, you may also build your own custom commands. Commands are
        typically stored in the app/Console/Commands directory; however, you are free to choose your own
        storage location as long as your commands can be loaded by Composer.
<a name="generating-commands"></a></p>
<h3 id="generating-commands">Generating Commands</h3>
<p>To create a new command, use the make:command
        Space command. This command will create a new command class in the app/Console/Commands
        directory. Don't worry if this directory does not exist in your application, since it will be created the first
        time you run the make:command Space
        command. The generated command will include the default set of properties and methods that are present on all
        commands:</p>
<pre><code class="bash">php space make:command SendEmails
</code></pre>

<p><a name="command-structure"></a></p>
<h3 id="command-structure">Command Structure</h3>
<p>After generating your command, you should fill in the signature and description properties of the class, which will be used when displaying
        your command on the list screen. The handle method will be called when your command is executed. You may place
        your command logic in this method.
For greater code reuse, it is good practice to keep your console commands light and let them defer to
    application services to accomplish their tasks. In the example below, note that we inject a service class to do
    the "heavy lifting" of sending the e-mails.
Let's take a look at an example command. Note that we are able to inject any dependencies we need into the
        command's constructor or handle method. The Space MVC <a
                href="/docs/5.7/container">service container</a> will automatically inject all dependencies type-hinted
        in the constructor or handle method:</p>
<pre><code class="php">&lt;?php

namespace App\Console\Commands;

use App\User;
use App\DripEmailer;
use Illuminate\Console\Command;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected \$signature = \'email:send {user}\';

    /**
     * The console command description.
     *
     * @var string
     */
    protected \$description = \'Send drip e-mails to a user\';

    /**
     * The drip e-mail service.
     *
     * @var DripEmailer
     */
    protected \$drip;

    /**
     * Create a new command instance.
     *
     * @param  DripEmailer  \$drip
     * @return void
     */
    public function __construct(DripEmailer \$drip)
    {
        parent::__construct();

        \$this-&gt;drip = \$drip;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        \$this-&gt;drip-&gt;send(User::find(\$this-&gt;argument(\'user\')));
    }
}
</code></pre>

<pre><code class="php">&lt;?php

namespace App\Console\Commands;

use App\User;
use App\DripEmailer;
use Illuminate\Console\Command;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = \'email:send {user}\';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = \'Send drip e-mails to a user\';

    /**
     * The drip e-mail service.
     *
     * @var DripEmailer
     */
    protected $drip;

    /**
     * Create a new command instance.
     *
     * @param  DripEmailer  $drip
     * @return void
     */
    public function __construct(DripEmailer $drip)
    {
        parent::__construct();

        $this-&gt;drip = $drip;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this-&gt;drip-&gt;send(User::find($this-&gt;argument(\'user\')));
    }
}
</code></pre>

<p><a name="closure-commands"></a></p>
<h3 id="closure-commands">Closure Commands</h3>
<p>Closure based commands provide an alternative to defining console commands as classes. In the same way that route
        Closures are an alternative to controllers, think of command Closures as an alternative to command classes.
        Within the commands method of your app/Console/Kernel.php file, Space MVC loads the routes/console.php file:</p>
<pre><code class="php">/**
 * Register the Closure based commands for the application.
 *
 * @return void
 */
protected function commands()
{
    require base_path(\'routes/console.php\');
}
</code></pre>

<p>Even though this file does not define HTTP routes, it defines console based entry points (routes) into your
        application. Within this file, you may define all of your Closure based routes using the Space::command
        method. The command method accepts two arguments: the <a
                href="#defining-input-expectations">command signature</a> and a Closure which receives the commands
        arguments and options:</p>
<pre><code class="php">Space::command(\'build {project}\', function ($project) {
    $this-&gt;info(&quot;Building {$project}!&quot;);
});
</code></pre>

<p>The Closure is bound to the underlying command instance, so you have full access to all of the helper methods you
        would typically be able to access on a full command class.</p>
<h4 id="type-hinting-dependencies">Type-Hinting Dependencies</h4>
<p>In addition to receiving your command's arguments and options, command Closures may also type-hint additional
        dependencies that you would like resolved out of the <a href="/docs/5.7/container">service container</a>:</p>
<pre><code class="php">use App\User;
use App\DripEmailer;

Space::command(\'email:send {user}\', function (DripEmailer $drip, $user) {
    $drip-&gt;send(User::find($user));
});
</code></pre>

<h4 id="closure-command-descriptions">Closure Command Descriptions</h4>
<p>When defining a Closure based command, you may use the describe method to add
        a description to the command. This description will be displayed when you run the php
            space list or php space help commands:</p>
<pre><code class="php">Space::command(\'build {project}\', function ($project) {
    $this-&gt;info(&quot;Building {$project}!&quot;);
})-&gt;describe(\'Build the project\');
</code></pre>

<p><a name="defining-input-expectations"></a></p>
<h2 id="defining-input-expectations"><a href="#defining-input-expectations">Defining Input Expectations</a></h2>
<p>When writing console commands, it is common to gather input from the user through arguments or options. Space MVC
        makes it very convenient to define the input you expect from the user using the signature
        property on your commands. The signature property allows you to define the
        name, arguments, and options for the command in a single, expressive, route-like syntax.
<a name="arguments"></a></p>
<h3 id="arguments">Arguments</h3>
<p>All user supplied arguments and options are wrapped in curly braces. In the following example, the command
        defines one <strong>required</strong> argument: user:</p>
<pre><code class="php">/**
 * The name and signature of the console command.
 *
 * @var string
 */
protected $signature = \'email:send {user}\';
</code></pre>

<p>You may also make arguments optional and define default values for arguments:</p>
<pre><code class="php">// Optional argument...
email:send {user?}

// Optional argument with default value...
email:send {user=foo}
</code></pre>

<p><a name="options"></a></p>
<h3 id="options">Options</h3>
<p>Options, like arguments, are another form of user input. Options are prefixed by two hyphens (--) when they are specified on the
        command line. There are two types of options: those that receive a value and those that don't. Options that
        don't receive a value serve as a boolean "switch". Let's take a look at an example of this type of option:</p>
<pre><code class="php">/**
 * The name and signature of the console command.
 *
 * @var string
 */
protected $signature = \'email:send {user} {--queue}\';
</code></pre>

<p>In this example, the --queue switch may be
        specified when calling the Space command. If the --queue switch is passed, the value of the option will be true. Otherwise, the value will be false:</p>
<pre><code class="php">php space email:send 1 --queue
</code></pre>

<p><a name="options-with-values"></a></p>
<h4 id="options-with-values">Options With Values</h4>
<p>Next, let's take a look at an option that expects a value. If the user must specify a value for an option, suffix
        the option name with a = sign:</p>
<pre><code class="php">/**
 * The name and signature of the console command.
 *
 * @var string
 */
protected $signature = \'email:send {user} {--queue=}\';
</code></pre>

<p>In this example, the user may pass a value for the option like so:</p>
<pre><code class="php">php space email:send 1 --queue=default
</code></pre>

<p>You may assign default values to options by specifying the default value after the option name. If no option
        value is passed by the user, the default value will be used:</p>
<pre><code class="php">email:send {user} {--queue=default}
</code></pre>

<p><a name="option-shortcuts"></a></p>
<h4 id="option-shortcuts">Option Shortcuts</h4>
<p>To assign a shortcut when defining an option, you may specify it before the option name and use a | delimiter to
        separate the shortcut from the full option name:</p>
<pre><code class="php">email:send {user} {--Q|queue}
</code></pre>

<p><a name="input-arrays"></a></p>
<h3 id="input-arrays">Input Arrays</h3>
<p>If you would like to define arguments or options to expect array inputs, you may use the * character. First, let's take a look
        at an example that specifies an array argument:</p>
<pre><code class="php">email:send {user*}
</code></pre>

<p>When calling this method, the user arguments may be passed in order to the
        command line. For example, the following command will set the value of user
        to ['foo', 'bar']:</p>
<pre><code class="php">php space email:send foo bar
</code></pre>

<p>When defining an option that expects an array input, each option value passed to the command should be prefixed
        with the option name:</p>
<pre><code class="php">email:send {user} {--id=*}

php space email:send --id=1 --id=2
</code></pre>

<p><a name="input-descriptions"></a></p>
<h3 id="input-descriptions">Input Descriptions</h3>
<p>You may assign descriptions to input arguments and options by separating the parameter from the description using
        a colon. If you need a little extra room to define your command, feel free to spread the definition across
        multiple lines:</p>
<pre><code class="php">/**
 * The name and signature of the console command.
 *
 * @var string
 */
protected $signature = \'email:send
                        {user : The ID of the user}
                        {--queue= : Whether the job should be queued}\';
</code></pre>

<p><a name="command-io"></a></p>
<h2 id="command-io"><a href="#command-io">Command I/O</a></h2>
<p><a name="retrieving-input"></a></p>
<h3 id="retrieving-input">Retrieving Input</h3>
<p>While your command is executing, you will obviously need to access the values for the arguments and options
        accepted by your command. To do so, you may use the argument and option methods:</p>
<pre><code class="php">/**
 * Execute the console command.
 *
 * @return mixed
 */
public function handle()
{
    $userId = $this-&gt;argument(\'user\');

    //
}
</code></pre>

<p>If you need to retrieve all of the arguments as an array, call the arguments
        method:</p>
<pre><code class="php">$arguments = $this-&gt;arguments();
</code></pre>

<p>Options may be retrieved just as easily as arguments using the option method.
        To retrieve all of the options as an array, call the options method:</p>
<pre><code class="php">// Retrieve a specific option...
$queueName = $this-&gt;option(\'queue\');

// Retrieve all options...
$options = $this-&gt;options();
</code></pre>

<p>If the argument or option does not exist, null will be returned.
<a name="prompting-for-input"></a></p>
<h3 id="prompting-for-input">Prompting For Input</h3>
<p>In addition to displaying output, you may also ask the user to provide input during the execution of your
        command. The ask method will prompt the user with the given question, accept
        their input, and then return the user's input back to your command:</p>
<pre><code class="php">/**
 * Execute the console command.
 *
 * @return mixed
 */
public function handle()
{
    $name = $this-&gt;ask(\'What is your name?\');
}
</code></pre>

<p>The secret method is similar to ask, but
        the user's input will not be visible to them as they type in the console. This method is useful when asking for
        sensitive information such as a password:</p>
<pre><code class="php">$password = $this-&gt;secret(\'What is the password?\');
</code></pre>

<h4 id="asking-for-confirmation">Asking For Confirmation</h4>
<p>If you need to ask the user for a simple confirmation, you may use the confirm
        method. By default, this method will return false.
        However, if the user enters y or yes in
        response to the prompt, the method will return true.</p>
<pre><code class="php">if ($this-&gt;confirm(\'Do you wish to continue?\')) {
    //
}
</code></pre>

<h4 id="auto-completion">Auto-Completion</h4>
<p>The anticipate method can be used to provide auto-completion for possible
        choices. The user can still choose any answer, regardless of the auto-completion hints:</p>
<pre><code class="php">$name = $this-&gt;anticipate(\'What is your name?\', [\'Taylor\', \'Dayle\']);
</code></pre>

<h4 id="multiple-choice-questions">Multiple Choice Questions</h4>
<p>If you need to give the user a predefined set of choices, you may use the choice method. You may set the array index of the default value to be
        returned if no option is chosen:</p>
<pre><code class="php">$name = $this-&gt;choice(\'What is your name?\', [\'Taylor\', \'Dayle\'], $defaultIndex);
</code></pre>

<p><a name="writing-output"></a></p>
<h3 id="writing-output">Writing Output</h3>
<p>To send output to the console, use the line, info, comment, question and error methods. Each of
        these methods will use appropriate ANSI colors for their purpose. For example, let's display some general
        information to the user. Typically, the info method will display in the
        console as green text:</p>
<pre><code class="php">/**
 * Execute the console command.
 *
 * @return mixed
 */
public function handle()
{
    $this-&gt;info(\'Display this on the screen\');
}
</code></pre>

<p>To display an error message, use the error method. Error message text is
        typically displayed in red:</p>
<pre><code class="php">$this-&gt;error(\'Something went wrong!\');
</code></pre>

<p>If you would like to display plain, uncolored console output, use the line
        method:</p>
<pre><code class="php">$this-&gt;line(\'Display this on the screen\');
</code></pre>

<h4 id="table-layouts">Table Layouts</h4>
<p>The table method makes it easy to correctly format multiple rows / columns of
        data. Just pass in the headers and rows to the method. The width and height will be dynamically calculated based
        on the given data:</p>
<pre><code class="php">$headers = [\'Name\', \'Email\'];

$users = App\User::all([\'name\', \'email\'])-&gt;toArray();

$this-&gt;table($headers, $users);
</code></pre>

<h4 id="progress-bars">Progress Bars</h4>
<p>For long running tasks, it could be helpful to show a progress indicator. Using the output object, we can start,
        advance and stop the Progress Bar. First, define the total number of steps the process will iterate through.
        Then, advance the Progress Bar after processing each item:</p>
<pre><code class="php">$users = App\User::all();

$bar = $this-&gt;output-&gt;createProgressBar(count($users));

$bar-&gt;start();

foreach ($users as $user) {
    $this-&gt;performTask($user);

    $bar-&gt;advance();
}

$bar-&gt;finish();
</code></pre>

<p>For more advanced options, check out the <a
                href="https://symfony.com/doc/current/components/console/helpers/progressbar.html">Symfony Progress Bar
            component documentation</a>.
<a name="registering-commands"></a></p>
<h2 id="registering-commands"><a href="#registering-commands">Registering Commands</a></h2>
<p>Because of the load method call in your console kernel's commands method, all commands within the app/Console/Commands directory will automatically be registered with
        Space. In fact, you are free to make additional calls to the load method to
        scan other directories for Space commands:</p>
<pre><code class="php">/**
 * Register the commands for the application.
 *
 * @return void
 */
protected function commands()
{
    $this-&gt;load(__DIR__.\'/Commands\');
    $this-&gt;load(__DIR__.\'/MoreCommands\');

    // ...
}
</code></pre>

<p>You may also manually register commands by adding its class name to the $commands property of your app/Console/Kernel.php file. When Space boots, all the commands listed in this
        property will be resolved by the <a href="/docs/5.7/container">service container</a> and registered with Space:</p>
<pre><code class="php">protected $commands = [
    Commands\SendEmails::class
];
</code></pre>

<p><a name="programmatically-executing-commands"></a></p>
<h2 id="programmatically-executing-commands"><a href="#programmatically-executing-commands">Programmatically Executing Commands</a></h2>
<p>Sometimes you may wish to execute an Space command outside of the CLI. For example, you may wish to fire an Space
        command from a route or controller. You may use the call method on the Space facade to accomplish this. The call method accepts either the command's name or class as the first
        argument, and an array of command parameters as the second argument. The exit code will be returned:</p>
<pre><code class="php">Route::get(\'/foo\', function () {
    $exitCode = Space::call(\'email:send\', [
        \'user\' =&gt; 1, \'--queue\' =&gt; \'default\'
    ]);

    //
});
</code></pre>

<p>Using the queue method on the Space facade,
        you may even queue Space commands so they are processed in the background by your <a href="/docs/5.7/queues">queue
            workers</a>. Before using this method, make sure you have configured your queue and are running a queue
        listener:</p>
<pre><code class="php">Route::get(\'/foo\', function () {
    Space::queue(\'email:send\', [
        \'user\' =&gt; 1, \'--queue\' =&gt; \'default\'
    ]);

    //
});
</code></pre>

<p>You may also specify the connection or queue the Space command should be dispatched to:</p>
<pre><code class="php">Space::queue(\'email:send\', [
    \'user\' =&gt; 1, \'--queue\' =&gt; \'default\'
])-&gt;onConnection(\'redis\')-&gt;onQueue(\'commands\');
</code></pre>

<h4 id="passing-array-values">Passing Array Values</h4>
<p>If your command defines an option that accepts an array, you may pass an array of values to that option:</p>
<pre><code class="php">Route::get(\'/foo\', function () {
    $exitCode = Space::call(\'email:send\', [
        \'user\' =&gt; 1, \'--id\' =&gt; [5, 13]
    ]);
});
</code></pre>

<h4 id="passing-boolean-values">Passing Boolean Values</h4>
<p>If you need to specify the value of an option that does not accept string values, such as the --force flag on the migrate:refresh command, you should
        pass true or false:</p>
<pre><code class="php">$exitCode = Space::call(\'migrate:refresh\', [
    \'--force\' =&gt; true,
]);
</code></pre>

<p><a name="calling-commands-from-other-commands"></a></p>
<h3 id="calling-commands-from-other-commands">Calling Commands From Other Commands</h3>
<p>Sometimes you may wish to call other commands from an existing Space command. You may do so using the call method. This call method accepts
        the command name and an array of command parameters:</p>
<pre><code class="php">/**
 * Execute the console command.
 *
 * @return mixed
 */
public function handle()
{
    $this-&gt;call(\'email:send\', [
        \'user\' =&gt; 1, \'--queue\' =&gt; \'default\'
    ]);

    //
}
</code></pre>

<p>If you would like to call another console command and suppress all of its output, you may use the callSilent method. The callSilent method
        has the same signature as the call method:</p>
<pre><code class="php">$this-&gt;callSilent(\'email:send\', [
    \'user\' =&gt; 1, \'--queue\' =&gt; \'default\'
]);
</code></pre>
                
                  
                
              
              
                


              
            </article>
          </div>
        </div>
      </main>

      <div style="height:50px;"></div>

      
        
<footer class="md-footer">
  
    <div class="md-footer-nav">
      <nav class="md-footer-nav__inner md-grid">
        
          <a href="../installation/" title="Space MVC Installation" class="md-flex md-footer-nav__link md-footer-nav__link--prev" rel="prev">
            <div class="md-flex__cell md-flex__cell--shrink">
              <i class="md-icon md-icon--arrow-back md-footer-nav__button"></i>
            </div>
            <div class="md-flex__cell md-flex__cell--stretch md-footer-nav__title">
              <span class="md-flex__ellipsis">
                <span class="md-footer-nav__direction">
                  Previous
                </span>
                Space MVC Installation
              </span>
            </div>
          </a>
        
        
          <a href="../environments/" title="Environments" class="md-flex md-footer-nav__link md-footer-nav__link--next" rel="next">
            <div class="md-flex__cell md-flex__cell--stretch md-footer-nav__title">
              <span class="md-flex__ellipsis">
                <span class="md-footer-nav__direction">
                  Next
                </span>
                Environments
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
