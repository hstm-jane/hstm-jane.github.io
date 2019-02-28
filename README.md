# HealthStream User Interface Library (UIL)

## Table of Contents
* [Getting Started](#getting-started)
* [File Structure](#file-structure)
* [Prototypes](#prototypes)
* [Patterns](#patterns)
* [Contributing](#contributing)
* [Contact](#contact)

## <a name="getting-started">Getting Started
The HealthStream User Interface Library (UIL) is a shared set of fonts, images, styles, and code that we use to build prototypes and contribute to the production apps. We use [Gulp](http://gulpjs.com/) to manage the shared and prototype-specific assets, by compiling and merging them into each prototype. When Gulp starts, and whenever a source file is modified, the source files are reprocessed into the prototypes' content and scripts directories so we don't have to do it manually.

### Dependencies
* [Installing Gulp](https://github.com/gulpjs/gulp/blob/master/docs/getting-started.md) - You only need to install globally, the project gulp file has already been created in this repo.
* [MAMP](https://www.mamp.info/en/) or [WAMP](http://www.wampserver.com/en/) to run PHP locally

## <a name="file-structure">File Structure
The repository is broken into two major sections, Source and Prototypes.

### Source Directory
* Holds the source files used in the prototypes and production.
* Further divided by app-specific files and those shared between all apps.
* Content directories hold fonts, images, and styles (LESS).
* Scripts directories hold javascript files.

### Prototypes Directory
* Contains a subdirectory for each app.
* The contents and scripts folders in each app is controlled by gulp. Gulp empties the folder then compiles, combines and copies the source files here automatically.
* Content directories hold copied-from-source fonts, images, and compiled styles (CSS).
* Scripts directories hold copied-from-source javascript files.
* The shared directory contains all shared php helper patterns used in the apps.

## <a name="prototypes">Prototypes

### Viewing the Prototypes Locally
* Using MAMP or WAMP, set up a .dev host file entry for each prototype (hlc.dev, platform.dev, etc.).
* Point those local domains to their corresponding prototype directory (hlc.dev -> /UIL/prototypes/hlc-student).

### Viewing the Prototypes Publicly
Code that is pushed to the UIL/Master branch at github.com is deployed automatically to the following URLs.
* [HLC Student Prototype](http://hstm-hlc-student.patternmanager.com)
* [Live Events Prototype](http://hstm-platform.patternmanager.com)
* [Bright Ideas Prototype](http://hstm-bright-ideas.patternmanager.com)

#### HCC Demo Prototypes - Manually Deployed
The HCC Demo protoypes are a manually deployed version of the HLC Student prototype that Sales uses to show future workflows. Any differences are due to subdomain-dependent logic handled by the php or the codebase not being current.
* [HCC Demo as Rater Prototype](http://hstm-hccdemo-rater.patternmanager.com/)
* [HCC Demo as Employee Prototype](http://hstm-hccdemo-employee.patternmanager.com/)

#### How Deploying Works
In most cases, code that is pushed to the UIL/Master branch at github.com is deployed automatically. Using github webhooks, [Laravel Forge](https://forge.laravel.com/) is notified and the prototypes are automatically deployed to subdomains hosted on [Pattern Manager](http://patternmanager.com). The webhook also posts notifications to the UX Team's Slack channel.
When manually deploying the HCC Demo sites, please be aware that deploying during the day may interrupt a Sales demo. To trigger a HCC Demo deploy, please email [#uxteam@healthstream.com](mailto:#uxteam@healthstream.com), Marc Sexton can help.

## <a name="patterns">Patterns
To speed up development and improve code consisitency, the UIL includes PHP helpers reused components. These php helpers only need a data array to output a working component.
* Header
* Focus Bar
* Search
* Focus Nav
* Slat
* Stickybar
* Footer

### Adding a Pattern
Patterns are simple to add, but should be approached carefully because they are namespaced and available in every prototype. To include a pattern, create a directory in the UIL/prototypes/shared/patterns folder with the name of your pattern. Inside that directory place a php file by the same name (e.g. widget/widget.php). The file will be autoloaded and available in each prototype. For examples on extending the Pattern class, refer to the existing patterns.

## <a name="contributing">Contributing

### Updating a Prototype
Once you have the UIL running locally, it's easy to make changes in the code and see it running at one of your local .dev domains. To make that code accessible to others, follow this short checklist:
* Make sure you've run Gulp and that everything is still working correctly. Common mistakes are putting images and javascript in the prototype directories instead of the source, and gulp removes your work when it recompiles.
* Make sure you've commited your changes locally in git.
* Pull from Github/Master to make sure you have the latest code. Unless you were touching the same files as other people, it should be a clean merge. If you run into merge issues on a CSS file, commit the merge with the errors and rerun Gulp. This will recompile all the LESS files making new CSS and almost always clear up the problem.
* Once you are merged, committed, and gulped, you can push to Github/Master.

### Adding an App
Adding a new app to the UIL consists of three parts:
* Creating the Prototype directory
* Creating the Source directory
* Updating the Gulp file (gulpfile.js)

Assuming that this prototype is identical in structure to the others, updating the gulpfile.js is a copy & paste & update process.
* You'll need to add a path in the path section (var myNewApp = 'prototypes/my-new-app';).
* Copy an existing task block and update all name instances to myNewApp.
* Copy an existing gulp.watch block and update all name instances to myNewApp.
* Add your app (myNewApp) to the start task array.

### Working with Contractors with Read-Only Access
* Add the contractor to the UIL Read-Only team to give them access.
* Have the contractor fork the repo.
* The contractor does their work and commits to their fork's github/master branch.
* The contractor uses github.com to create a merge request.
* The internal developer working with the contractor pulls in the contractor's github/master to their local environment to check the changes and runs through the Updating a Prototype checklist above.
* If all is working as expected the internal developer can push the changes into Github/Master. This will clear the contractor's merge request.

## <a name="contact">Contact
Please direct questions and comments to [#uxteam@healthstream.com](mailto:#uxteam@healthstream.com)
