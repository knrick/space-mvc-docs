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
    
    
      
        <title>File Storage - Space MVC Framework</title>
      
    
    
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
    
      <a href="#file-storage" tabindex="1" class="md-skip">
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
                File Storage
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
        
        
          
          
          

  


  <li class="md-nav__item md-nav__item--active">
    
    <input class="md-toggle md-nav__toggle" data-md-toggle="toc" type="checkbox" id="__toc">
    
      
    
    
      <label class="md-nav__link md-nav__link--active" for="__toc">
        File Storage
      </label>
    
    <a href="./" title="File Storage" class="md-nav__link md-nav__link--active">
      File Storage
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
  <a href="#the-public-disk" title="The Public Disk" class="md-nav__link">
    The Public Disk
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#the-local-driver" title="The Local Driver" class="md-nav__link">
    The Local Driver
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#driver-prerequisites" title="Driver Prerequisites" class="md-nav__link">
    Driver Prerequisites
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#composer-packages" title="Composer Packages" class="md-nav__link">
    Composer Packages
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#s3-driver-configuration" title="S3 Driver Configuration" class="md-nav__link">
    S3 Driver Configuration
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#ftp-driver-configuration" title="FTP Driver Configuration" class="md-nav__link">
    FTP Driver Configuration
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#sftp-driver-configuration" title="SFTP Driver Configuration" class="md-nav__link">
    SFTP Driver Configuration
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#rackspace-driver-configuration" title="Rackspace Driver Configuration" class="md-nav__link">
    Rackspace Driver Configuration
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#caching" title="Caching" class="md-nav__link">
    Caching
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#obtaining-disk-instances" title="Obtaining Disk Instances" class="md-nav__link">
    Obtaining Disk Instances
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#retrieving-files" title="Retrieving Files" class="md-nav__link">
    Retrieving Files
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#downloading-files" title="Downloading Files" class="md-nav__link">
    Downloading Files
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#file-urls" title="File URLs" class="md-nav__link">
    File URLs
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#temporary-urls" title="Temporary URLs" class="md-nav__link">
    Temporary URLs
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#local-url-host-customization" title="Local URL Host Customization" class="md-nav__link">
    Local URL Host Customization
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#file-metadata" title="File Metadata" class="md-nav__link">
    File Metadata
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#storing-files" title="Storing Files" class="md-nav__link">
    Storing Files
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#automatic-streaming" title="Automatic Streaming" class="md-nav__link">
    Automatic Streaming
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#prepending-appending-to-files" title="Prepending &amp; Appending To Files" class="md-nav__link">
    Prepending &amp; Appending To Files
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#copying-moving-files" title="Copying &amp; Moving Files" class="md-nav__link">
    Copying &amp; Moving Files
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#file-uploads" title="File Uploads" class="md-nav__link">
    File Uploads
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#specifying-a-file-name" title="Specifying A File Name" class="md-nav__link">
    Specifying A File Name
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#specifying-a-disk" title="Specifying A Disk" class="md-nav__link">
    Specifying A Disk
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#file-visibility" title="File Visibility" class="md-nav__link">
    File Visibility
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#deleting-files" title="Deleting Files" class="md-nav__link">
    Deleting Files
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#directories" title="Directories" class="md-nav__link">
    Directories
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#get-all-files-within-a-directory" title="Get All Files Within A Directory" class="md-nav__link">
    Get All Files Within A Directory
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#get-all-directories-within-a-directory" title="Get All Directories Within A Directory" class="md-nav__link">
    Get All Directories Within A Directory
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#create-a-directory" title="Create A Directory" class="md-nav__link">
    Create A Directory
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#delete-a-directory" title="Delete A Directory" class="md-nav__link">
    Delete A Directory
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#custom-filesystems" title="Custom Filesystems" class="md-nav__link">
    Custom Filesystems
  </a>
  
</li>
      
      
      
      
      
    </ul>
  
</nav>
    
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
  <a href="#the-public-disk" title="The Public Disk" class="md-nav__link">
    The Public Disk
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#the-local-driver" title="The Local Driver" class="md-nav__link">
    The Local Driver
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#driver-prerequisites" title="Driver Prerequisites" class="md-nav__link">
    Driver Prerequisites
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#composer-packages" title="Composer Packages" class="md-nav__link">
    Composer Packages
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#s3-driver-configuration" title="S3 Driver Configuration" class="md-nav__link">
    S3 Driver Configuration
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#ftp-driver-configuration" title="FTP Driver Configuration" class="md-nav__link">
    FTP Driver Configuration
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#sftp-driver-configuration" title="SFTP Driver Configuration" class="md-nav__link">
    SFTP Driver Configuration
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#rackspace-driver-configuration" title="Rackspace Driver Configuration" class="md-nav__link">
    Rackspace Driver Configuration
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#caching" title="Caching" class="md-nav__link">
    Caching
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#obtaining-disk-instances" title="Obtaining Disk Instances" class="md-nav__link">
    Obtaining Disk Instances
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#retrieving-files" title="Retrieving Files" class="md-nav__link">
    Retrieving Files
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#downloading-files" title="Downloading Files" class="md-nav__link">
    Downloading Files
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#file-urls" title="File URLs" class="md-nav__link">
    File URLs
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#temporary-urls" title="Temporary URLs" class="md-nav__link">
    Temporary URLs
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#local-url-host-customization" title="Local URL Host Customization" class="md-nav__link">
    Local URL Host Customization
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#file-metadata" title="File Metadata" class="md-nav__link">
    File Metadata
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#storing-files" title="Storing Files" class="md-nav__link">
    Storing Files
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#automatic-streaming" title="Automatic Streaming" class="md-nav__link">
    Automatic Streaming
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#prepending-appending-to-files" title="Prepending &amp; Appending To Files" class="md-nav__link">
    Prepending &amp; Appending To Files
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#copying-moving-files" title="Copying &amp; Moving Files" class="md-nav__link">
    Copying &amp; Moving Files
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#file-uploads" title="File Uploads" class="md-nav__link">
    File Uploads
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#specifying-a-file-name" title="Specifying A File Name" class="md-nav__link">
    Specifying A File Name
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#specifying-a-disk" title="Specifying A Disk" class="md-nav__link">
    Specifying A Disk
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#file-visibility" title="File Visibility" class="md-nav__link">
    File Visibility
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#deleting-files" title="Deleting Files" class="md-nav__link">
    Deleting Files
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#directories" title="Directories" class="md-nav__link">
    Directories
  </a>
  
    <nav class="md-nav">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#get-all-files-within-a-directory" title="Get All Files Within A Directory" class="md-nav__link">
    Get All Files Within A Directory
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#get-all-directories-within-a-directory" title="Get All Directories Within A Directory" class="md-nav__link">
    Get All Directories Within A Directory
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#create-a-directory" title="Create A Directory" class="md-nav__link">
    Create A Directory
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#delete-a-directory" title="Delete A Directory" class="md-nav__link">
    Delete A Directory
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#custom-filesystems" title="Custom Filesystems" class="md-nav__link">
    Custom Filesystems
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
                  <a href="https://github.com/space-mvc/space-mvc/edit/master/docs/file-storage.md" title="Edit this page" class="md-icon md-content__icon">&#xE3C9;</a>
                 -->

                
                <h1 id="file-storage">File Storage</h1>
<h2 id="introduction">Introduction</h2>
<p>Space MVC provides a powerful filesystem abstraction thanks to the wonderful <a href="https://github.com/thephpleague/flysystem">Flysystem</a> PHP package by Frank de Jonge. The Space MVC Flysystem integration provides simple to use drivers for working with local filesystems, Amazon S3, and Rackspace Cloud Storage. Even better, it's amazingly simple to switch between these storage options as the API remains the same for each system.
<a name="configuration"></a></p>
<h2 id="configuration"><a href="#configuration">Configuration</a></h2>
<p>The filesystem configuration file is located at config/filesystems.php. Within this file you may configure all of your "disks". Each disk represents a particular storage driver and storage location. Example configurations for each supported driver are included in the configuration file. So, modify the configuration to reflect your storage preferences and credentials.
Of course, you may configure as many disks as you like, and may even have multiple disks that use the same driver.
<a name="the-public-disk"></a></p>
<h3 id="the-public-disk">The Public Disk</h3>
<p>The public disk is intended for files that are going to be publicly accessible. By default, the public disk uses the local driver and stores these files in storage/app/public. To make them accessible from the web, you should create a symbolic link from public/storage to storage/app/public. This convention will keep your publicly accessible files in one directory that can be easily shared across deployments when using zero down-time deployment systems like <a href="https://envoyer.io">Envoyer</a>.
To create the symbolic link, you may use the storage:link Artisan command:</p>
<pre><code class="php">php artisan storage:link
</code></pre>

<p>Of course, once a file has been stored and the symbolic link has been created, you can create a URL to the files using the asset helper:</p>
<pre><code class="php">echo asset('storage/file.txt');
</code></pre>

<p><a name="the-local-driver"></a></p>
<h3 id="the-local-driver">The Local Driver</h3>
<p>When using the local driver, all file operations are relative to the root directory defined in your configuration file. By default, this value is set to the storage/app directory. Therefore, the following method would store a file in storage/app/file.txt:</p>
<pre><code class="php">Storage::disk('local')-&gt;put('file.txt', 'Contents');
</code></pre>

<p><a name="driver-prerequisites"></a></p>
<h3 id="driver-prerequisites">Driver Prerequisites</h3>
<h4 id="composer-packages">Composer Packages</h4>
<p>Before using the SFTP, S3, or Rackspace drivers, you will need to install the appropriate package via Composer:
    <ul>
        <li>SFTP: league/flysystem-sftp ~1.0</li>
        <li>Amazon S3: league/flysystem-aws-s3-v3 ~1.0</li>
        <li>Rackspace: league/flysystem-rackspace ~1.0</li>
    </ul>
An absolute must for performance is to use a cached adapter. You will need an additional package for this:
    <ul>
        <li>CachedAdapter: league/flysystem-cached-adapter ~1.0</li>
    </ul></p>
<h4 id="s3-driver-configuration">S3 Driver Configuration</h4>
<p>The S3 driver configuration information is located in your config/filesystems.php configuration file. This file contains an example configuration array for an S3 driver. You are free to modify this array with your own S3 configuration and credentials. For convenience, these environment variables match the naming convention used by the AWS CLI.</p>
<h4 id="ftp-driver-configuration">FTP Driver Configuration</h4>
<p>Space MVC's Flysystem integrations works great with FTP; however, a sample configuration is not included with the framework's default filesystems.php configuration file. If you need to configure a FTP filesystem, you may use the example configuration below:</p>
<pre><code class="php">'ftp' =&gt; [
    'driver'   =&gt; 'ftp',
    'host'     =&gt; 'ftp.example.com',
    'username' =&gt; 'your-username',
    'password' =&gt; 'your-password',

    // Optional FTP Settings...
    // 'port'     =&gt; 21,
    // 'root'     =&gt; '',
    // 'passive'  =&gt; true,
    // 'ssl'      =&gt; true,
    // 'timeout'  =&gt; 30,
],
</code></pre>

<h4 id="sftp-driver-configuration">SFTP Driver Configuration</h4>
<p>Space MVC's Flysystem integrations works great with SFTP; however, a sample configuration is not included with the framework's default filesystems.php configuration file. If you need to configure a SFTP filesystem, you may use the example configuration below:</p>
<pre><code class="php">'sftp' =&gt; [
    'driver' =&gt; 'sftp',
    'host' =&gt; 'example.com',
    'username' =&gt; 'your-username',
    'password' =&gt; 'your-password',

    // Settings for SSH key based authentication...
    // 'privateKey' =&gt; '/path/to/privateKey',
    // 'password' =&gt; 'encryption-password',

    // Optional SFTP Settings...
    // 'port' =&gt; 22,
    // 'root' =&gt; '',
    // 'timeout' =&gt; 30,
],
</code></pre>

<h4 id="rackspace-driver-configuration">Rackspace Driver Configuration</h4>
<p>Space MVC's Flysystem integrations works great with Rackspace; however, a sample configuration is not included with the framework's default filesystems.php configuration file. If you need to configure a Rackspace filesystem, you may use the example configuration below:</p>
<pre><code class="php">'rackspace' =&gt; [
    'driver'    =&gt; 'rackspace',
    'username'  =&gt; 'your-username',
    'key'       =&gt; 'your-key',
    'container' =&gt; 'your-container',
    'endpoint'  =&gt; 'https://identity.api.rackspacecloud.com/v2.0/',
    'region'    =&gt; 'IAD',
    'url_type'  =&gt; 'publicURL',
],
</code></pre>

<p><a name="caching"></a></p>
<h3 id="caching">Caching</h3>
<p>To enable caching for a given disk, you may add a cache directive to the disk's configuration options. The cache option should be an array of caching options containing the disk name, the expire time in seconds, and the cache prefix:</p>
<pre><code class="php">'s3' =&gt; [
    'driver' =&gt; 's3',

    // Other Disk Options...

    'cache' =&gt; [
        'store' =&gt; 'memcached',
        'expire' =&gt; 600,
        'prefix' =&gt; 'cache-prefix',
    ],
],
</code></pre>

<p><a name="obtaining-disk-instances"></a></p>
<h2 id="obtaining-disk-instances"><a href="#obtaining-disk-instances">Obtaining Disk Instances</a></h2>
<p>The Storage facade may be used to interact with any of your configured disks. For example, you may use the put method on the facade to store an avatar on the default disk. If you call methods on the Storage facade without first calling the disk method, the method call will automatically be passed to the default disk:</p>
<pre><code class="php">use Illuminate\Support\Facades\Storage;

Storage::put('avatars/1', $fileContents);
</code></pre>

<p>If your applications interacts with multiple disks, you may use the disk method on the Storage facade to work with files on a particular disk:</p>
<pre><code class="php">Storage::disk('s3')-&gt;put('avatars/1', $fileContents);
</code></pre>

<p><a name="retrieving-files"></a></p>
<h2 id="retrieving-files"><a href="#retrieving-files">Retrieving Files</a></h2>
<p>The get method may be used to retrieve the contents of a file. The raw string contents of the file will be returned by the method. Remember, all file paths should be specified relative to the "root" location configured for the disk:</p>
<pre><code class="php">$contents = Storage::get('file.jpg');
</code></pre>

<p>The exists method may be used to determine if a file exists on the disk:</p>
<pre><code class="php">$exists = Storage::disk('s3')-&gt;exists('file.jpg');
</code></pre>

<p><a name="downloading-files"></a></p>
<h3 id="downloading-files">Downloading Files</h3>
<p>The download method may be used to generate a response that forces the user's browser to download the file at the given path. The download method accepts a file name as the second argument to the method, which will determine the file name that is seen by the user downloading the file. Finally, you may pass an array of HTTP headers as the third argument to the method:</p>
<pre><code class="php">return Storage::download('file.jpg');

return Storage::download('file.jpg', $name, $headers);
</code></pre>

<p><a name="file-urls"></a></p>
<h3 id="file-urls">File URLs</h3>
<p>You may use the url method to get the URL for the given file. If you are using the local driver, this will typically just prepend /storage to the given path and return a relative URL to the file. If you are using the s3 or rackspace driver, the fully qualified remote URL will be returned:</p>
<pre><code class="php">use Illuminate\Support\Facades\Storage;

$url = Storage::url('file.jpg');
</code></pre>

<p>Remember, if you are using the local driver, all files that should be publicly accessible should be placed in the storage/app/public directory. Furthermore, you should <a href="#the-public-disk">create a symbolic link</a> at public/storage which points to the storage/app/public directory.</p>
<h4 id="temporary-urls">Temporary URLs</h4>
<p>For files stored using the s3 or rackspace driver, you may create a temporary URL to a given file using the temporaryUrl method. This methods accepts a path and a DateTime instance specifying when the URL should expire:</p>
<pre><code class="php">$url = Storage::temporaryUrl(
    'file.jpg', now()-&gt;addMinutes(5)
);
</code></pre>

<h4 id="local-url-host-customization">Local URL Host Customization</h4>
<p>If you would like to pre-define the host for files stored on a disk using the local driver, you may add a url option to the disk's configuration array:</p>
<pre><code class="php">'public' =&gt; [
    'driver' =&gt; 'local',
    'root' =&gt; storage_path('app/public'),
    'url' =&gt; env('APP_URL').'/storage',
    'visibility' =&gt; 'public',
],
</code></pre>

<p><a name="file-metadata"></a></p>
<h3 id="file-metadata">File Metadata</h3>
<p>In addition to reading and writing files, Space MVC can also provide information about the files themselves. For example, the size method may be used to get the size of the file in bytes:</p>
<pre><code class="php">use Illuminate\Support\Facades\Storage;

$size = Storage::size('file.jpg');
</code></pre>

<p>The lastModified method returns the UNIX timestamp of the last time the file was modified:</p>
<pre><code class="php">$time = Storage::lastModified('file.jpg');
</code></pre>

<p><a name="storing-files"></a></p>
<h2 id="storing-files"><a href="#storing-files">Storing Files</a></h2>
<p>The put method may be used to store raw file contents on a disk. You may also pass a PHP resource to the put method, which will use Flysystem's underlying stream support. Using streams is greatly recommended when dealing with large files:</p>
<pre><code class="php">use Illuminate\Support\Facades\Storage;

Storage::put('file.jpg', $contents);

Storage::put('file.jpg', $resource);
</code></pre>

<h4 id="automatic-streaming">Automatic Streaming</h4>
<p>If you would like Space MVC to automatically manage streaming a given file to your storage location, you may use the putFile or putFileAs method. This method accepts either a Illuminate\Http\File or Illuminate\Http\UploadedFile instance and will automatically stream the file to your desired location:</p>
<pre><code class="php">use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

// Automatically generate a unique ID for file name...
Storage::putFile('photos', new File('/path/to/photo'));

// Manually specify a file name...
Storage::putFileAs('photos', new File('/path/to/photo'), 'photo.jpg');
</code></pre>

<p>There are a few important things to note about the putFile method. Note that we only specified a directory name, not a file name. By default, the putFile method will generate a unique ID to serve as the file name. The file's extension will be determined by examining the file's MIME type. The path to the file will be returned by the putFile method so you can store the path, including the generated file name, in your database.
The putFile and putFileAs methods also accept an argument to specify the "visibility" of the stored file. This is particularly useful if you are storing the file on a cloud disk such as S3 and would like the file to be publicly accessible:</p>
<pre><code class="php">Storage::putFile('photos', new File('/path/to/photo'), 'public');
</code></pre>

<h4 id="prepending-appending-to-files">Prepending &amp; Appending To Files</h4>
<p>The prepend and append methods allow you to write to the beginning or end of a file:</p>
<pre><code class="php">Storage::prepend('file.log', 'Prepended Text');

Storage::append('file.log', 'Appended Text');
</code></pre>

<h4 id="copying-moving-files">Copying &amp; Moving Files</h4>
<p>The copy method may be used to copy an existing file to a new location on the disk, while the move method may be used to rename or move an existing file to a new location:</p>
<pre><code class="php">Storage::copy('old/file.jpg', 'new/file.jpg');

Storage::move('old/file.jpg', 'new/file.jpg');
</code></pre>

<p><a name="file-uploads"></a></p>
<h3 id="file-uploads">File Uploads</h3>
<p>In web applications, one of the most common use-cases for storing files is storing user uploaded files such as profile pictures, photos, and documents. Space MVC makes it very easy to store uploaded files using the store method on an uploaded file instance. Call the store method with the path at which you wish to store the uploaded file:</p>
<pre><code class="php">&lt;?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserAvatarController extends Controller
{
    /**
     * Update the avatar for the user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function update(Request $request)
    {
        $path = $request-&gt;file('avatar')-&gt;store('avatars');

        return $path;
    }
}
</code></pre>

<p>There are a few important things to note about this example. Note that we only specified a directory name, not a file name. By default, the store method will generate a unique ID to serve as the file name. The file's extension will be determined by examining the file's MIME type. The path to the file will be returned by the store method so you can store the path, including the generated file name, in your database.
You may also call the putFile method on the Storage facade to perform the same file manipulation as the example above:</p>
<pre><code class="php">$path = Storage::putFile('avatars', $request-&gt;file('avatar'));
</code></pre>

<h4 id="specifying-a-file-name">Specifying A File Name</h4>
<p>If you would not like a file name to be automatically assigned to your stored file, you may use the storeAs method, which receives the path, the file name, and the (optional) disk as its arguments:</p>
<pre><code class="php">$path = $request-&gt;file('avatar')-&gt;storeAs(
    'avatars', $request-&gt;user()-&gt;id
);
</code></pre>

<p>Of course, you may also use the putFileAs method on the Storage facade, which will perform the same file manipulation as the example above:</p>
<pre><code class="php">$path = Storage::putFileAs(
    'avatars', $request-&gt;file('avatar'), $request-&gt;user()-&gt;id
);
</code></pre>

<h4 id="specifying-a-disk">Specifying A Disk</h4>
<p>By default, this method will use your default disk. If you would like to specify another disk, pass the disk name as the second argument to the store method:</p>
<pre><code class="php">$path = $request-&gt;file('avatar')-&gt;store(
    'avatars/'.$request-&gt;user()-&gt;id, 's3'
);
</code></pre>

<p><a name="file-visibility"></a></p>
<h3 id="file-visibility">File Visibility</h3>
<p>In Space MVC's Flysystem integration, "visibility" is an abstraction of file permissions across multiple platforms. Files may either be declared public or private. When a file is declared public, you are indicating that the file should generally be accessible to others. For example, when using the S3 driver, you may retrieve URLs for public files.
You can set the visibility when setting the file via the put method:</p>
<pre><code class="php">use Illuminate\Support\Facades\Storage;

Storage::put('file.jpg', $contents, 'public');
</code></pre>

<p>If the file has already been stored, its visibility can be retrieved and set via the getVisibility and setVisibility methods:</p>
<pre><code class="php">$visibility = Storage::getVisibility('file.jpg');

Storage::setVisibility('file.jpg', 'public')
</code></pre>

<p><a name="deleting-files"></a></p>
<h2 id="deleting-files"><a href="#deleting-files">Deleting Files</a></h2>
<p>The delete method accepts a single filename or an array of files to remove from the disk:</p>
<pre><code class="php">use Illuminate\Support\Facades\Storage;

Storage::delete('file.jpg');

Storage::delete(['file.jpg', 'file2.jpg']);
</code></pre>

<p>If necessary, you may specify the disk that the file should be deleted from:</p>
<pre><code class="php">use Illuminate\Support\Facades\Storage;

Storage::disk('s3')-&gt;delete('folder_path/file_name.jpg');
</code></pre>

<p><a name="directories"></a></p>
<h2 id="directories"><a href="#directories">Directories</a></h2>
<h4 id="get-all-files-within-a-directory">Get All Files Within A Directory</h4>
<p>The files method returns an array of all of the files in a given directory. If you would like to retrieve a list of all files within a given directory including all sub-directories, you may use the allFiles method:</p>
<pre><code class="php">use Illuminate\Support\Facades\Storage;

$files = Storage::files($directory);

$files = Storage::allFiles($directory);
</code></pre>

<h4 id="get-all-directories-within-a-directory">Get All Directories Within A Directory</h4>
<p>The directories method returns an array of all the directories within a given directory. Additionally, you may use the allDirectories method to get a list of all directories within a given directory and all of its sub-directories:</p>
<pre><code class="php">$directories = Storage::directories($directory);

// Recursive...
$directories = Storage::allDirectories($directory);
</code></pre>

<h4 id="create-a-directory">Create A Directory</h4>
<p>The makeDirectory method will create the given directory, including any needed sub-directories:</p>
<pre><code class="php">Storage::makeDirectory($directory);
</code></pre>

<h4 id="delete-a-directory">Delete A Directory</h4>
<p>Finally, the deleteDirectory may be used to remove a directory and all of its files:</p>
<pre><code class="php">Storage::deleteDirectory($directory);
</code></pre>

<p><a name="custom-filesystems"></a></p>
<h2 id="custom-filesystems"><a href="#custom-filesystems">Custom Filesystems</a></h2>
<p>Space MVC's Flysystem integration provides drivers for several "drivers" out of the box; however, Flysystem is not limited to these and has adapters for many other storage systems. You can create a custom driver if you want to use one of these additional adapters in your Space MVC application.
In order to set up the custom filesystem you will need a Flysystem adapter. Let's add a community maintained Dropbox adapter to our project:</p>
<pre><code class="php">composer require spatie/flysystem-dropbox
</code></pre>

<p>Next, you should create a <a href="/docs/5.7/providers">service provider</a> such as DropboxServiceProvider. In the provider's boot method, you may use the Storage facade's extend method to define the custom driver:</p>
<pre><code class="php">&lt;?php

namespace App\Providers;

use Storage;
use League\Flysystem\Filesystem;
use Illuminate\Support\ServiceProvider;
use Spatie\Dropbox\Client as DropboxClient;
use Spatie\FlysystemDropbox\DropboxAdapter;

class DropboxServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        Storage::extend('dropbox', function ($app, $config) {
            $client = new DropboxClient(
                $config['authorization_token']
            );

            return new Filesystem(new DropboxAdapter($client));
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

<p>The first argument of the extend method is the name of the driver and the second is a Closure that receives the $app and $config variables. The resolver Closure must return an instance of League\Flysystem\Filesystem. The $config variable contains the values defined in config/filesystems.php for the specified disk.
Once you have created the service provider to register the extension, you may use the dropbox driver in your config/filesystems.php configuration file.</p>
                
                  
                
              
              
                


              
            </article>
          </div>
        </div>
      </main>

      <div style="height:50px;"></div>

      
        
<footer class="md-footer">
  
    <div class="md-footer-nav">
      <nav class="md-footer-nav__inner md-grid">
        
          <a href="../database-relationships/" title="Relationships" class="md-flex md-footer-nav__link md-footer-nav__link--prev" rel="prev">
            <div class="md-flex__cell md-flex__cell--shrink">
              <i class="md-icon md-icon--arrow-back md-footer-nav__button"></i>
            </div>
            <div class="md-flex__cell md-flex__cell--stretch md-footer-nav__title">
              <span class="md-flex__ellipsis">
                <span class="md-footer-nav__direction">
                  Previous
                </span>
                Relationships
              </span>
            </div>
          </a>
        
        
          <a href="../cache/" title="Cache" class="md-flex md-footer-nav__link md-footer-nav__link--next" rel="next">
            <div class="md-flex__cell md-flex__cell--stretch md-footer-nav__title">
              <span class="md-flex__ellipsis">
                <span class="md-footer-nav__direction">
                  Next
                </span>
                Cache
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
