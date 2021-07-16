# Ionic Frontend

##References:
### Angular
* https://angular.io/tutorial
* https://angular.io/guide/router-tutorial

### Ionic
* https://www.positronx.io/ionic-angular-responsive-grid-tutorial-with-examples/
* https://www.positronx.io/create-ionic-angular-http-service/

### UI Component Reference
* https://ionicframework.com/docs/components
* https://ionicframework.com/docs/v3/components/


## Requirements
* NodeJS (^v12.16.2)
* npm (^v6.14.4)
* Ionic (^v5.4.16)
* Cordova (^v9.0.0)


## Setup
Activate the PHPStorm Symfony, PHP Toolbox, PHP Inspections EA Extended plugins.


* Install NodeJS
* ``npm i typescript``
* ``npm i -g @ionic/cli``
* ``npm i -g cordova``
* ``npm install``
* ``ionic serve -l``

## Build for Android

* Install Java JDK 8, add the SYSTEM VARIABLE ``JAVA_HOME`` C:\Program Files\Java\jdk1.8.0_281
* Install Gradle
* Install the Android SDK and accept its licences, add the SYSTEM VARIABLE: ``ANDROID_HOME`` and/or ``ANDROID_SDK_ROOT`` as C:\Users\User\AppData\Local\Android\Sdk
* Install Android Debug Bridge Utility (adb)
* add the *PATH VARIABLES* ``%JAVA_HOME%\bin``, ``C:\xampp\gradle\gradle-6.8.3\bin``, ``C:\Users\User\AppData\Local\Android\Sdk\tools`` and ``C:\Users\Gabi\AppData\Local\Android\Sdk\platform-tools``

* ``ionic cordova platform add android``

* ``ionic cordova resources android`` (creates all the needed images from the icon and splashscreen image)

* ``ionic cordova compile android`` to compile the .apk.

## Install .apk on a device

* Turn on the Develpment Mode on the device (click on service number 5 times) and enable USB transfer
* ``cd ANDROID_SDK_ROOT``
* connect your Device with an USB cable
* ``adb devices``
* ``adb start-server``
* ``adb install <path-to-project>\platforms\android\app\build\outputs\apk\debug\app-debug.apk``

In case the App does not work re-install the webview plugin.

* ``ionic cordova plugin rm cordova-plugin-ionic-webview``
* ``ionic cordova plugin add cordova-plugin-ionic-webview``
* ``rm -rf plugins``
* ``ionic cordova build android``

## Remote Debugging the Android Device App

In Chrome:

* go to ``chrome://inspect#devices``
* once your device gets detected click on inspect

## Build for iOS
* todo