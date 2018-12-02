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
    
    
      
        <title>Mail - Space MVC Framework</title>
      
    
    
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
    
      <a href="#mail" tabindex="1" class="md-skip">
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
                Mail
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

        
          
          
          

  


  <li class="md-nav__item md-nav__item--active">
    
    <input class="md-toggle md-nav__toggle" data-md-toggle="toc" type="checkbox" id="__toc">
    
      
    
    
      <label class="md-nav__link md-nav__link--active" for="__toc">
        Mail
      </label>
    
    <a href="./" title="Mail" class="md-nav__link md-nav__link--active">
      Mail
    </a>
    
      
<nav class="md-nav md-nav--secondary">
  
  
    
  
  
    <label class="md-nav__title" for="__toc">Table of contents</label>
    <ul class="md-nav__list" data-md-scrollfix>
      
        <li class="md-nav__item">
  <a href="#driver-prerequisites" title="Driver Prerequisites" class="md-nav__link">
    Driver Prerequisites
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#mailgun-driver" title="Mailgun Driver" class="md-nav__link">
    Mailgun Driver
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#sparkpost-driver" title="SparkPost Driver" class="md-nav__link">
    SparkPost Driver
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#ses-driver" title="SES Driver" class="md-nav__link">
    SES Driver
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#generating-mailables" title="Generating Mailables" class="md-nav__link">
    Generating Mailables
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#writing-mailables" title="Writing Mailables" class="md-nav__link">
    Writing Mailables
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#configuring-the-sender" title="Configuring The Sender" class="md-nav__link">
    Configuring The Sender
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#using-the-from-method" title="Using The from Method" class="md-nav__link">
    Using The from Method
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#using-a-global-from-address" title="Using A Global from Address" class="md-nav__link">
    Using A Global from Address
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#configuring-the-view" title="Configuring The View" class="md-nav__link">
    Configuring The View
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#plain-text-emails" title="Plain Text Emails" class="md-nav__link">
    Plain Text Emails
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#view-data" title="View Data" class="md-nav__link">
    View Data
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#via-public-properties" title="Via Public Properties" class="md-nav__link">
    Via Public Properties
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#via-the-with-method" title="Via The with Method:" class="md-nav__link">
    Via The with Method:
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#attachments" title="Attachments" class="md-nav__link">
    Attachments
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#attaching-files-from-disk" title="Attaching Files from Disk" class="md-nav__link">
    Attaching Files from Disk
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#raw-data-attachments" title="Raw Data Attachments" class="md-nav__link">
    Raw Data Attachments
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#inline-attachments" title="Inline Attachments" class="md-nav__link">
    Inline Attachments
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#embedding-raw-data-attachments" title="Embedding Raw Data Attachments" class="md-nav__link">
    Embedding Raw Data Attachments
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#customizing-the-swiftmailer-message" title="Customizing The SwiftMailer Message" class="md-nav__link">
    Customizing The SwiftMailer Message
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#markdown-mailables" title="Markdown Mailables" class="md-nav__link">
    Markdown Mailables
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#generating-markdown-mailables" title="Generating Markdown Mailables" class="md-nav__link">
    Generating Markdown Mailables
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#writing-markdown-messages" title="Writing Markdown Messages" class="md-nav__link">
    Writing Markdown Messages
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
  <a href="#sending-mail" title="Sending Mail" class="md-nav__link">
    Sending Mail
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#rendering-mailables" title="Rendering Mailables" class="md-nav__link">
    Rendering Mailables
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#previewing-mailables-in-the-browser" title="Previewing Mailables In The Browser" class="md-nav__link">
    Previewing Mailables In The Browser
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#queueing-mail" title="Queueing Mail" class="md-nav__link">
    Queueing Mail
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#queueing-a-mail-message" title="Queueing A Mail Message" class="md-nav__link">
    Queueing A Mail Message
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#delayed-message-queueing" title="Delayed Message Queueing" class="md-nav__link">
    Delayed Message Queueing
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#pushing-to-specific-queues" title="Pushing To Specific Queues" class="md-nav__link">
    Pushing To Specific Queues
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#queueing-by-default" title="Queueing By Default" class="md-nav__link">
    Queueing By Default
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#localizing-mailables" title="Localizing Mailables" class="md-nav__link">
    Localizing Mailables
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
  <a href="#mail-local-development" title="Mail &amp; Local Development" class="md-nav__link">
    Mail &amp; Local Development
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#log-driver" title="Log Driver" class="md-nav__link">
    Log Driver
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#universal-to" title="Universal To" class="md-nav__link">
    Universal To
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#mailtrap" title="Mailtrap" class="md-nav__link">
    Mailtrap
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
  <a href="#driver-prerequisites" title="Driver Prerequisites" class="md-nav__link">
    Driver Prerequisites
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#mailgun-driver" title="Mailgun Driver" class="md-nav__link">
    Mailgun Driver
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#sparkpost-driver" title="SparkPost Driver" class="md-nav__link">
    SparkPost Driver
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#ses-driver" title="SES Driver" class="md-nav__link">
    SES Driver
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#generating-mailables" title="Generating Mailables" class="md-nav__link">
    Generating Mailables
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#writing-mailables" title="Writing Mailables" class="md-nav__link">
    Writing Mailables
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#configuring-the-sender" title="Configuring The Sender" class="md-nav__link">
    Configuring The Sender
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#using-the-from-method" title="Using The from Method" class="md-nav__link">
    Using The from Method
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#using-a-global-from-address" title="Using A Global from Address" class="md-nav__link">
    Using A Global from Address
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#configuring-the-view" title="Configuring The View" class="md-nav__link">
    Configuring The View
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#plain-text-emails" title="Plain Text Emails" class="md-nav__link">
    Plain Text Emails
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#view-data" title="View Data" class="md-nav__link">
    View Data
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#via-public-properties" title="Via Public Properties" class="md-nav__link">
    Via Public Properties
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#via-the-with-method" title="Via The with Method:" class="md-nav__link">
    Via The with Method:
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#attachments" title="Attachments" class="md-nav__link">
    Attachments
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#attaching-files-from-disk" title="Attaching Files from Disk" class="md-nav__link">
    Attaching Files from Disk
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#raw-data-attachments" title="Raw Data Attachments" class="md-nav__link">
    Raw Data Attachments
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#inline-attachments" title="Inline Attachments" class="md-nav__link">
    Inline Attachments
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#embedding-raw-data-attachments" title="Embedding Raw Data Attachments" class="md-nav__link">
    Embedding Raw Data Attachments
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#customizing-the-swiftmailer-message" title="Customizing The SwiftMailer Message" class="md-nav__link">
    Customizing The SwiftMailer Message
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#markdown-mailables" title="Markdown Mailables" class="md-nav__link">
    Markdown Mailables
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#generating-markdown-mailables" title="Generating Markdown Mailables" class="md-nav__link">
    Generating Markdown Mailables
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#writing-markdown-messages" title="Writing Markdown Messages" class="md-nav__link">
    Writing Markdown Messages
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
  <a href="#sending-mail" title="Sending Mail" class="md-nav__link">
    Sending Mail
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#rendering-mailables" title="Rendering Mailables" class="md-nav__link">
    Rendering Mailables
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#previewing-mailables-in-the-browser" title="Previewing Mailables In The Browser" class="md-nav__link">
    Previewing Mailables In The Browser
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#queueing-mail" title="Queueing Mail" class="md-nav__link">
    Queueing Mail
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#queueing-a-mail-message" title="Queueing A Mail Message" class="md-nav__link">
    Queueing A Mail Message
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#delayed-message-queueing" title="Delayed Message Queueing" class="md-nav__link">
    Delayed Message Queueing
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#pushing-to-specific-queues" title="Pushing To Specific Queues" class="md-nav__link">
    Pushing To Specific Queues
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#queueing-by-default" title="Queueing By Default" class="md-nav__link">
    Queueing By Default
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#localizing-mailables" title="Localizing Mailables" class="md-nav__link">
    Localizing Mailables
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
  <a href="#mail-local-development" title="Mail &amp; Local Development" class="md-nav__link">
    Mail &amp; Local Development
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#log-driver" title="Log Driver" class="md-nav__link">
    Log Driver
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#universal-to" title="Universal To" class="md-nav__link">
    Universal To
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#mailtrap" title="Mailtrap" class="md-nav__link">
    Mailtrap
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
                  <a href="https://github.com/space-mvc/space-mvc/edit/master/docs/mail.md" title="Edit this page" class="md-icon md-content__icon">&#xE3C9;</a>
                 -->

                
                <h1 id="mail">Mail</h1>
<p>Space MVC provides a clean, simple API over the popular <a href="https://swiftmailer.symfony.com/">SwiftMailer</a> library with drivers for SMTP, Mailgun, SparkPost, Amazon SES, PHP's mail function, and sendmail, allowing you to quickly get started sending mail through a local or cloud based service of your choice.
<a name="driver-prerequisites"></a></p>
<h3 id="driver-prerequisites">Driver Prerequisites</h3>
<p>The API based drivers such as Mailgun and SparkPost are often simpler and faster than SMTP servers. If possible, you should use one of these drivers. All of the API drivers require the Guzzle HTTP library, which may be installed via the Composer package manager:</p>
<pre><code class="php">composer require guzzlehttp/guzzle
</code></pre>

<h4 id="mailgun-driver">Mailgun Driver</h4>
<p>To use the Mailgun driver, first install Guzzle, then set the driver option in your config/mail.php configuration file to mailgun. Next, verify that your config/services.php configuration file contains the following options:</p>
<pre><code class="php">'mailgun' =&gt; [
    'domain' =&gt; 'your-mailgun-domain',
    'secret' =&gt; 'your-mailgun-key',
],
</code></pre>

<p>If you are not using the "US" <a href="https://documentation.mailgun.com/en/latest/api-intro.html#mailgun-regions">Mailgun region</a>, you may define your region's endpoint in the services configuration file:</p>
<pre><code class="php">'mailgun' =&gt; [
    'domain' =&gt; 'your-mailgun-domain',
    'secret' =&gt; 'your-mailgun-key',
    'endpoint' =&gt; 'api.eu.mailgun.net',
],
</code></pre>

<h4 id="sparkpost-driver">SparkPost Driver</h4>
<p>To use the SparkPost driver, first install Guzzle, then set the driver option in your config/mail.php configuration file to sparkpost. Next, verify that your config/services.php configuration file contains the following options:</p>
<pre><code class="php">'sparkpost' =&gt; [
    'secret' =&gt; 'your-sparkpost-key',
],
</code></pre>

<p>If necessary, you may also configure which <a href="https://developers.sparkpost.com/api/#header-endpoints">API endpoint</a> should be used:</p>
<pre><code class="php">'sparkpost' =&gt; [
    'secret' =&gt; 'your-sparkpost-key',
    'options' =&gt; [
        'endpoint' =&gt; 'https://api.eu.sparkpost.com/api/v1/transmissions',
    ],
],
</code></pre>

<h4 id="ses-driver">SES Driver</h4>
<p>To use the Amazon SES driver you must first install the Amazon AWS SDK for PHP. You may install this library by adding the following line to your composer.json file's require section and running the composer update command:</p>
<pre><code class="php">&quot;aws/aws-sdk-php&quot;: &quot;~3.0&quot;
</code></pre>

<p>Next, set the driver option in your config/mail.php configuration file to ses and verify that your config/services.php configuration file contains the following options:</p>
<pre><code class="php">'ses' =&gt; [
    'key' =&gt; 'your-ses-key',
    'secret' =&gt; 'your-ses-secret',
    'region' =&gt; 'ses-region',  // e.g. us-east-1
],
</code></pre>

<p>If you need to include <a href="https://docs.aws.amazon.com/aws-sdk-php/v3/api/api-email-2010-12-01.html#sendrawemail">additional options</a> when executing the SES SendRawEmail request, you may define an options array within your ses configuration:</p>
<pre><code class="php">'ses' =&gt; [
    'key' =&gt; 'your-ses-key',
    'secret' =&gt; 'your-ses-secret',
    'region' =&gt; 'ses-region',  // e.g. us-east-1
    'options' =&gt; [
        'ConfigurationSetName' =&gt; 'MyConfigurationSet',
        'Tags' =&gt; [
            [
                'Name' =&gt; 'foo',
                'Value' =&gt; 'bar',
            ],
        ],
    ],
],
</code></pre>

<p><a name="generating-mailables"></a></p>
<h2 id="generating-mailables"><a href="#generating-mailables">Generating Mailables</a></h2>
<p>In Space MVC, each type of email sent by your application is represented as a "mailable" class. These classes are stored in the app/Mail directory. Don't worry if you don't see this directory in your application, since it will be generated for you when you create your first mailable class using the make:mail command:</p>
<pre><code class="php">php artisan make:mail OrderShipped
</code></pre>

<p><a name="writing-mailables"></a></p>
<h2 id="writing-mailables"><a href="#writing-mailables">Writing Mailables</a></h2>
<p>All of a mailable class' configuration is done in the build method. Within this method, you may call various methods such as from, subject, view, and attach to configure the email's presentation and delivery.
<a name="configuring-the-sender"></a></p>
<h3 id="configuring-the-sender">Configuring The Sender</h3>
<h4 id="using-the-from-method">Using The from Method</h4>
<p>First, let's explore configuring the sender of the email. Or, in other words, who the email is going to be "from". There are two ways to configure the sender. First, you may use the from method within your mailable class' build method:</p>
<pre><code class="php">/**
 * Build the message.
 *
 * @return $this
 */
public function build()
{
    return $this-&gt;from('example@example.com')
                -&gt;view('emails.orders.shipped');
}
</code></pre>

<h4 id="using-a-global-from-address">Using A Global from Address</h4>
<p>However, if your application uses the same "from" address for all of its emails, it can become cumbersome to call the from method in each mailable class you generate. Instead, you may specify a global "from" address in your config/mail.php configuration file. This address will be used if no other "from" address is specified within the mailable class:</p>
<pre><code class="php">'from' =&gt; ['address' =&gt; 'example@example.com', 'name' =&gt; 'App Name'],
</code></pre>

<p>In addition, you may define a global "reply_to" address within your config/mail.php configuration file:</p>
<pre><code class="php">'reply_to' =&gt; ['address' =&gt; 'example@example.com', 'name' =&gt; 'App Name'],
</code></pre>

<p><a name="configuring-the-view"></a></p>
<h3 id="configuring-the-view">Configuring The View</h3>
<p>Within a mailable class' build method, you may use the view method to specify which template should be used when rendering the email's contents. Since each email typically uses a <a href="/docs/5.7/blade">Blade template</a> to render its contents, you have the full power and convenience of the Blade templating engine when building your email's HTML:</p>
<pre><code class="php">/**
 * Build the message.
 *
 * @return $this
 */
public function build()
{
    return $this-&gt;view('emails.orders.shipped');
}
</code></pre>

<p>You may wish to create a resources/views/emails directory to house all of your email templates; however, you are free to place them wherever you wish within your resources/views directory.</p>
<h4 id="plain-text-emails">Plain Text Emails</h4>
<p>If you would like to define a plain-text version of your email, you may use the text method. Like the view method, the text method accepts a template name which will be used to render the contents of the email. You are free to define both a HTML and plain-text version of your message:</p>
<pre><code class="php">/**
 * Build the message.
 *
 * @return $this
 */
public function build()
{
    return $this-&gt;view('emails.orders.shipped')
                -&gt;text('emails.orders.shipped_plain');
}
</code></pre>

<p><a name="view-data"></a></p>
<h3 id="view-data">View Data</h3>
<h4 id="via-public-properties">Via Public Properties</h4>
<p>Typically, you will want to pass some data to your view that you can utilize when rendering the email's HTML. There are two ways you may make data available to your view. First, any public property defined on your mailable class will automatically be made available to the view. So, for example, you may pass data into your mailable class' constructor and set that data to public properties defined on the class:</p>
<pre><code class="php">&lt;?php

namespace App\Mail;

use App\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The order instance.
     *
     * @var Order
     */
    public $order;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this-&gt;order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this-&gt;view('emails.orders.shipped');
    }
}
</code></pre>

<p>Once the data has been set to a public property, it will automatically be available in your view, so you may access it like you would access any other data in your Blade templates:</p>
<pre><code class="php">&lt;div&gt;
    Price: {{ $order-&gt;price }}
&lt;/div&gt;
</code></pre>

<h4 id="via-the-with-method">Via The with Method:</h4>
<p>If you would like to customize the format of your email's data before it is sent to the template, you may manually pass your data to the view via the with method. Typically, you will still pass data via the mailable class' constructor; however, you should set this data to protected or private properties so the data is not automatically made available to the template. Then, when calling the with method, pass an array of data that you wish to make available to the template:</p>
<pre><code class="php">&lt;?php

namespace App\Mail;

use App\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The order instance.
     *
     * @var Order
     */
    protected $order;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this-&gt;order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this-&gt;view('emails.orders.shipped')
                    -&gt;with([
                        'orderName' =&gt; $this-&gt;order-&gt;name,
                        'orderPrice' =&gt; $this-&gt;order-&gt;price,
                    ]);
    }
}
</code></pre>

<p>Once the data has been passed to the with method, it will automatically be available in your view, so you may access it like you would access any other data in your Blade templates:</p>
<pre><code class="php">&lt;div&gt;
    Price: {{ $orderPrice }}
&lt;/div&gt;
</code></pre>

<p><a name="attachments"></a></p>
<h3 id="attachments">Attachments</h3>
<p>To add attachments to an email, use the attach method within the mailable class' build method. The attach method accepts the full path to the file as its first argument:</p>
<pre><code class="php">    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this-&gt;view('emails.orders.shipped')
                    -&gt;attach('/path/to/file');
    }
</code></pre>

<p>When attaching files to a message, you may also specify the display name and / or MIME type by passing an array as the second argument to the attach method:</p>
<pre><code class="php">    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this-&gt;view('emails.orders.shipped')
                    -&gt;attach('/path/to/file', [
                        'as' =&gt; 'name.pdf',
                        'mime' =&gt; 'application/pdf',
                    ]);
    }
</code></pre>

<h4 id="attaching-files-from-disk">Attaching Files from Disk</h4>
<p>If you have stored a file on one of your <a href="/docs/5.7/filesystem">filesystem disks</a>, you may attach it to the email using the attachFromStorage method:</p>
<pre><code class="php">/**
 * Build the message.
 *
 * @return $this
 */
 public function build()
 {
    return $this-&gt;view('email.orders.shipped')
                -&gt;attachFromStorage('/path/to/file');
 }
</code></pre>

<p>If necessary, you may specify the file's attachment name and additional options using the second and third arguments to the attachFromStorage method:</p>
<pre><code class="php">/**
 * Build the message.
 *
 * @return $this
 */
 public function build()
 {
    return $this-&gt;view('email.orders.shipped')
                -&gt;attachFromStorage('/path/to/file', 'name.pdf', [
                    'mime' =&gt; 'application/pdf'
                ]);
 }
</code></pre>

<p>The attachFromStorageDisk method may be used if you need to specify a storage disk other than your default disk:</p>
<pre><code class="php">/**
 * Build the message.
 *
 * @return $this
 */
 public function build()
 {
    return $this-&gt;view('email.orders.shipped')
                -&gt;attachFromStorageDisk('s3', '/path/to/file');
 }
</code></pre>

<h4 id="raw-data-attachments">Raw Data Attachments</h4>
<p>The attachData method may be used to attach a raw string of bytes as an attachment. For example, you might use this method if you have generated a PDF in memory and want to attach it to the email without writing it to disk. The attachData method accepts the raw data bytes as its first argument, the name of the file as its second argument, and an array of options as its third argument:</p>
<pre><code class="php">    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this-&gt;view('emails.orders.shipped')
                    -&gt;attachData($this-&gt;pdf, 'name.pdf', [
                        'mime' =&gt; 'application/pdf',
                    ]);
    }
</code></pre>

<p><a name="inline-attachments"></a></p>
<h3 id="inline-attachments">Inline Attachments</h3>
<p>Embedding inline images into your emails is typically cumbersome; however, Space MVC provides a convenient way to attach images to your emails and retrieving the appropriate CID. To embed an inline image, use the embed method on the $message variable within your email template. Space MVC automatically makes the $message variable available to all of your email templates, so you don't need to worry about passing it in manually:</p>
<pre><code class="php">&lt;body&gt;
    Here is an image:

    &lt;img src=&quot;{{ $message-&gt;embed($pathToFile) }}&quot;&gt;
&lt;/body&gt;
</code></pre>

<p>$message variable is not available in markdown messages.</p>
<h4 id="embedding-raw-data-attachments">Embedding Raw Data Attachments</h4>
<p>If you already have a raw data string you wish to embed into an email template, you may use the embedData method on the $message variable:</p>
<pre><code class="php">&lt;body&gt;
    Here is an image from raw data:

    &lt;img src=&quot;{{ $message-&gt;embedData($data, $name) }}&quot;&gt;
&lt;/body&gt;
</code></pre>

<p><a name="customizing-the-swiftmailer-message"></a></p>
<h3 id="customizing-the-swiftmailer-message">Customizing The SwiftMailer Message</h3>
<p>The withSwiftMessage method of the Mailable base class allows you to register a callback which will be invoked with the raw SwiftMailer message instance before sending the message. This gives you an opportunity to customize the message before it is delivered:</p>
<pre><code class="php">    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this-&gt;view('emails.orders.shipped');

        $this-&gt;withSwiftMessage(function ($message) {
            $message-&gt;getHeaders()
                    -&gt;addTextHeader('Custom-Header', 'HeaderValue');
        });
    }
</code></pre>

<p><a name="markdown-mailables"></a></p>
<h2 id="markdown-mailables"><a href="#markdown-mailables">Markdown Mailables</a></h2>
<p>Markdown mailable messages allow you to take advantage of the pre-built templates and components of mail notifications in your mailables. Since the messages are written in Markdown, Space MVC is able to render beautiful, responsive HTML templates for the messages while also automatically generating a plain-text counterpart.
<a name="generating-markdown-mailables"></a></p>
<h3 id="generating-markdown-mailables">Generating Markdown Mailables</h3>
<p>To generate a mailable with a corresponding Markdown template, you may use the --markdown option of the make:mail Artisan command:</p>
<pre><code class="php">php artisan make:mail OrderShipped --markdown=emails.orders.shipped
</code></pre>

<p>Then, when configuring the mailable within its build method, call the markdown method instead of the view method. The markdown methods accepts the name of the Markdown template and an optional array of data to make available to the template:</p>
<pre><code class="php">/**
 * Build the message.
 *
 * @return $this
 */
public function build()
{
    return $this-&gt;from('example@example.com')
                -&gt;markdown('emails.orders.shipped');
}
</code></pre>

<p><a name="writing-markdown-messages"></a></p>
<h3 id="writing-markdown-messages">Writing Markdown Messages</h3>
<p>Markdown mailables use a combination of Blade components and Markdown syntax which allow you to easily construct mail messages while leveraging Space MVC's pre-crafted components:</p>
<pre><code class="php">@component('mail::message')
# Order Shipped

Your order has been shipped!

@component('mail::button', ['url' =&gt; $url])
View Order
@endcomponent

Thanks,&lt;br&gt;
{{ config('app.name') }}
@endcomponent
</code></pre>

<p>Do not use excess indentation when writing Markdown emails. Markdown parsers will render indented content as code blocks.</p>
<h4 id="button-component">Button Component</h4>
<p>The button component renders a centered button link. The component accepts two arguments, a url and an optional color. Supported colors are primary, success, and error. You may add as many button components to a message as you wish:</p>
<pre><code class="php">@component('mail::button', ['url' =&gt; $url, 'color' =&gt; 'success'])
View Order
@endcomponent
</code></pre>

<h4 id="panel-component">Panel Component</h4>
<p>The panel component renders the given block of text in a panel that has a slightly different background color than the rest of the message. This allows you to draw attention to a given block of text:</p>
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
<p>You may export all of the Markdown mail components to your own application for customization. To export the components, use the vendor:publish Artisan command to publish the Space MVC-mail asset tag:</p>
<pre><code class="php">php artisan vendor:publish --tag=Space MVC-mail
</code></pre>

<p>This command will publish the Markdown mail components to the resources/views/vendor/mail directory. The mail directory will contain a html and a markdown directory, each containing their respective representations of every available component. The components in the html directory are used to generate the HTML version of your email, and their counterparts in the markdown directory are used to generate the plain-text version. You are free to customize these components however you like.</p>
<h4 id="customizing-the-css">Customizing The CSS</h4>
<p>After exporting the components, the resources/views/vendor/mail/html/themes directory will contain a default.css file. You may customize the CSS in this file and your styles will automatically be in-lined within the HTML representations of your Markdown mail messages.</p>
<p>If you would like to build an entirely new theme for the Markdown components, write a new CSS file within the html/themes directory and change the theme option of your mail configuration file.
<a name="sending-mail"></a></p>
<h2 id="sending-mail"><a href="#sending-mail">Sending Mail</a></h2>
<p>To send a message, use the to method on the Mail <a href="/docs/5.7/facades">facade</a>. The to method accepts an email address, a user instance, or a collection of users. If you pass an object or collection of objects, the mailer will automatically use their email and name properties when setting the email recipients, so make sure these attributes are available on your objects. Once you have specified your recipients, you may pass an instance of your mailable class to the send method:</p>
<pre><code class="php">&lt;?php

namespace App\Http\Controllers;

use App\Order;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
     * Ship the given order.
     *
     * @param  Request  $request
     * @param  int  $orderId
     * @return Response
     */
    public function ship(Request $request, $orderId)
    {
        $order = Order::findOrFail($orderId);

        // Ship order...

        Mail::to($request-&gt;user())-&gt;send(new OrderShipped($order));
    }
}
</code></pre>

<p>Of course, you are not limited to just specifying the "to" recipients when sending a message. You are free to set "to", "cc", and "bcc" recipients all within a single, chained method call:</p>
<pre><code class="php">Mail::to($request-&gt;user())
    -&gt;cc($moreUsers)
    -&gt;bcc($evenMoreUsers)
    -&gt;send(new OrderShipped($order));
</code></pre>

<p><a name="rendering-mailables"></a></p>
<h2 id="rendering-mailables"><a href="#rendering-mailables">Rendering Mailables</a></h2>
<p>Sometimes you may wish to capture the HTML content of a mailable without sending it. To accomplish this, you may call the render method of the mailable. This method will return the evaluated contents of the mailable as a string:</p>
<pre><code class="php">$invoice = App\Invoice::find(1);

return (new App\Mail\InvoicePaid($invoice))-&gt;render();
</code></pre>

<p><a name="previewing-mailables-in-the-browser"></a></p>
<h3 id="previewing-mailables-in-the-browser">Previewing Mailables In The Browser</h3>
<p>When designing a mailable's template, it is convenient to quickly preview the rendered mailable in your browser like a typical Blade template. For this reason, Space MVC allows you to return any mailable directly from a route Closure or controller. When a mailable is returned, it will be rendered and displayed in the browser, allowing you to quickly preview its design without needing to send it to an actual email address:</p>
<pre><code class="php">Route::get('/mailable', function () {
    $invoice = App\Invoice::find(1);

    return new App\Mail\InvoicePaid($invoice);
});
</code></pre>

<p><a name="queueing-mail"></a></p>
<h3 id="queueing-mail">Queueing Mail</h3>
<h4 id="queueing-a-mail-message">Queueing A Mail Message</h4>
<p>Since sending email messages can drastically lengthen the response time of your application, many developers choose to queue email messages for background sending. Space MVC makes this easy using its built-in <a href="/docs/5.7/queues">unified queue API</a>. To queue a mail message, use the queue method on the Mail facade after specifying the message's recipients:</p>
<pre><code class="php">Mail::to($request-&gt;user())
    -&gt;cc($moreUsers)
    -&gt;bcc($evenMoreUsers)
    -&gt;queue(new OrderShipped($order));
</code></pre>

<p>This method will automatically take care of pushing a job onto the queue so the message is sent in the background. Of course, you will need to <a href="/docs/5.7/queues">configure your queues</a> before using this feature.</p>
<h4 id="delayed-message-queueing">Delayed Message Queueing</h4>
<p>If you wish to delay the delivery of a queued email message, you may use the later method. As its first argument, the later method accepts a DateTime instance indicating when the message should be sent:</p>
<pre><code class="php">$when = now()-&gt;addMinutes(10);

Mail::to($request-&gt;user())
    -&gt;cc($moreUsers)
    -&gt;bcc($evenMoreUsers)
    -&gt;later($when, new OrderShipped($order));
</code></pre>

<h4 id="pushing-to-specific-queues">Pushing To Specific Queues</h4>
<p>Since all mailable classes generated using the make:mail command make use of the Illuminate\Bus\Queueable trait, you may call the onQueue and onConnection methods on any mailable class instance, allowing you to specify the connection and queue name for the message:</p>
<pre><code class="php">$message = (new OrderShipped($order))
                -&gt;onConnection('sqs')
                -&gt;onQueue('emails');

Mail::to($request-&gt;user())
    -&gt;cc($moreUsers)
    -&gt;bcc($evenMoreUsers)
    -&gt;queue($message);
</code></pre>

<h4 id="queueing-by-default">Queueing By Default</h4>
<p>If you have mailable classes that you want to always be queued, you may implement the ShouldQueue contract on the class. Now, even if you call the send method when mailing, the mailable will still be queued since it implements the contract:</p>
<pre><code class="php">use Illuminate\Contracts\Queue\ShouldQueue;

class OrderShipped extends Mailable implements ShouldQueue
{
    //
}
</code></pre>

<p><a name="localizing-mailables"></a></p>
<h2 id="localizing-mailables"><a href="#localizing-mailables">Localizing Mailables</a></h2>
<p>Space MVC allows you to send mailables in a locale other than the current language, and will even remember this locale if the mail is queued.
To accomplish this, the Illuminate\Mail\Mailable class offers a locale method to set the desired language. The application will change into this locale when the mailable is being formatted and then revert back to the previous locale when formatting is complete:</p>
<pre><code class="php">Mail::to($request-&gt;user())-&gt;send(
    (new OrderShipped($order))-&gt;locale('es')
);
</code></pre>

<h3 id="user-preferred-locales">User Preferred Locales</h3>
<p>Sometimes, applications store each user's preferred locale. By implementing the HasLocalePreference contract on one or more of your models, you may instruct Space MVC to use this stored locale when sending mail:</p>
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

<p>Once you have implemented the interface, Space MVC will automatically use the preferred locale when sending mailables and notifications to the model. Therefore, there is no need to call the locale method when using this interface:</p>
<pre><code class="php">Mail::to($request-&gt;user())-&gt;send(new OrderShipped($order));
</code></pre>

<p><a name="mail-and-local-development"></a></p>
<h2 id="mail-local-development"><a href="#mail-and-local-development">Mail &amp; Local Development</a></h2>
<p>When developing an application that sends email, you probably don't want to actually send emails to live email addresses. Space MVC provides several ways to "disable" the actual sending of emails during local development.</p>
<h4 id="log-driver">Log Driver</h4>
<p>Instead of sending your emails, the log mail driver will write all email messages to your log files for inspection. For more information on configuring your application per environment, check out the <a href="/docs/5.7/configuration#environment-configuration">configuration documentation</a>.</p>
<h4 id="universal-to">Universal To</h4>
<p>Another solution provided by Space MVC is to set a universal recipient of all emails sent by the framework. This way, all the emails generated by your application will be sent to a specific address, instead of the address actually specified when sending the message. This can be done via the to option in your config/mail.php configuration file:</p>
<pre><code class="php">'to' =&gt; [
    'address' =&gt; 'example@example.com',
    'name' =&gt; 'Example'
],
</code></pre>

<h4 id="mailtrap">Mailtrap</h4>
<p>Finally, you may use a service like <a href="https://mailtrap.io">Mailtrap</a> and the smtp driver to send your email messages to a "dummy" mailbox where you may view them in a true email client. This approach has the benefit of allowing you to actually inspect the final emails in Mailtrap's message viewer.
<a name="events"></a></p>
<h2 id="events"><a href="#events">Events</a></h2>
<p>Space MVC fires two events during the process of sending mail messages. The MessageSending event is fired prior to a message being sent, while the MessageSent event is fired after a message has been sent. Remember, these events are fired when the mail is being <em>sent</em>, not when it is queued. You may register an event listener for this event in your EventServiceProvider:</p>
<pre><code class="php">/**
 * The event listener mappings for the application.
 *
 * @var array
 */
protected $listen = [
    'Illuminate\Mail\Events\MessageSending' =&gt; [
        'App\Listeners\LogSendingMessage',
    ],
    'Illuminate\Mail\Events\MessageSent' =&gt; [
        'App\Listeners\LogSentMessage',
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
        
          <a href="../events/" title="Events" class="md-flex md-footer-nav__link md-footer-nav__link--prev" rel="prev">
            <div class="md-flex__cell md-flex__cell--shrink">
              <i class="md-icon md-icon--arrow-back md-footer-nav__button"></i>
            </div>
            <div class="md-flex__cell md-flex__cell--stretch md-footer-nav__title">
              <span class="md-flex__ellipsis">
                <span class="md-footer-nav__direction">
                  Previous
                </span>
                Events
              </span>
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
