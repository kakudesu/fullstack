// # sourceURL=application.js

//
//  application.js
//  App
//
//  Created by Songwen Ding on 2018/12/25.
//  Copyright © 2018 Songwen Ding. All rights reserved.
//

/*
 * This file provides an example skeletal stub for the server-side implementation 
 * of a TVML application.
 *
 * A javascript file such as this should be provided at the tvBootURL that is 
 * configured in the AppDelegate of the TVML application. Note that  the various 
 * javascript functions here are referenced by name in the AppDelegate. This skeletal 
 * implementation shows the basic entry points that you will want to handle 
 * application lifecycle events.
 */

/**
 * @description The onLaunch callback is invoked after the application JavaScript 
 * has been parsed into a JavaScript context. The handler is passed an object 
 * that contains options passed in for launch. These options are defined in the
 * swift or objective-c client code. Options can be used to communicate to
 * your JavaScript code that data and as well as state information, like if the 
 * the app is being launched in the background.
 *
 * The location attribute is automatically added to the object and represents 
 * the URL that was used to retrieve the application JavaScript.
 */

App.onLaunch = function (options) {
   baseURL = options.BASEURL;
   console.log(options);

   pushDocument(loadingDocument());
   /*
   getRemoteDocument("templates/page-navigation.xml", function(request) {
      replaceDocument(request.responseXML);
      console.log("success");
   });
   */
   getRemoteDocument("templates/images.json", function(request) {
      parseJson(request.responseText);
   });
}

App.onWillResignActive = function () {}

App.onDidEnterBackground = function () {}

App.onWillEnterForeground = function () {}

App.onDidBecomeActive = function () {}

App.onWillTerminate = function () {}


/**
 * Navigating Pahes
 */

function pushDocument(document) {
   navigationDocument.pushDocument(document);
}

function replaceDocument(document) {
   var currentDocument = getActiveDocument();
   navigationDocument.replaceDocument(document, currentDocument);
}

/**
 * Get Remote Doc
 */
var baseURL
function getRemoteDocument(path, callback) {
   var request = new XMLHttpRequest()
   request.responseType = "document"
   request.addEventListener("load", function() {
      callback(request)
   }, false)
   request.open("GET", baseURL + "/" + path, true)
   request.send()
}

function loadingDocument() {
   var template = `<?xml version="1.0" encoding="UTF-8" ?>
   <document>
      <loadingTemplate>
         <activityIndicator>
            <text>Loading</text>
         </activityIndicator>
      </loadingTemplate>
   </document>`
   console.log(template)
   var parser = new DOMParser()
   var doc = parser.parseFromString(template, 'application/xml')
   return doc
}

function parseJson(information) {
   var str = `<?xml version="1.0" encoding="UTF-8" ?>
   <document>
      <stackTemplate>
         <banner>
            <title>JSON Shelf</title>
         </banner>
         <collectionList>
            <shelf>
               <prototypes>
                  <lockup prototype="artwork">
                     <img binding="@src:{url};" width="200" height="300"/>
                     <title binding="textContent:{title};" />
                  </lockup>
               </prototypes>
               <section binding="items:{images};" />
            </shelf>
         </collectionList>
      </stackTemplate>
   </document>`;
   var parser = new DOMParser()
   var doc = parser.parseFromString(str, "application/xml")
   navigationDocument.pushDocument(doc)

   var results = JSON.parse(information)
   let newItems = results.map((result) => {
      let objectItem = new DataItem(result.type, result.ID)
      objectItem.url = result.url
      objectItem.title = result.title
      return objectItem
  })
  let shelf = doc.getElementsByTagName("shelf").item(0)
  let section = shelf.getElementsByTagName("section").item(0)
  section.dataItem = new DataItem()
  section.dataItem.setPropertyPath("images", newItems)
}

/**
 * This convenience funnction returns an alert template, which can be used to present errors to the user.
 */
var createAlert = function (title, description) {
  var str = `<?xml version="1.0" encoding="UTF-8" ?>
   <document>
      <alertTemplate>
         <title>${title}</title>
         <description>${description}</description>
      </alertTemplate>
   </document>`
  var parser = new DOMParser()
  var doc = parser.parseFromString(str, 'application/xml')
  return doc
}

var createCompilation = function () {
   var str = `<?xml version="1.0" encoding="UTF-8" ?>
   <document>
   <compilationTemplate theme="light">
       <list>
           <relatedContent>
               <itemBanner>
                   <heroImg src="path to images on your server/Car_Movie_720x1080" />
                   <row>
                       <buttonLockup>
                           <badge src="resource://button-add"/>
                           <title>Add</title>
                       </buttonLockup>
                       <buttonLockup>
                           <badge src="resource://button-rate"/>
                           <title>Rate</title>
                       </buttonLockup>
                       <buttonLockup>
                           <badge src="resource://button-shuffle"/>
                           <title>Shuffle</title>
                       </buttonLockup>
                   </row>
               </itemBanner>
           </relatedContent>
           <header>
               <title>WWDC Roadtrip Soundtrack</title>
               <subtitle>Various Artists</subtitle>
               <row>
                   <text>Instrumental</text>
                   <text>5 Songs</text>
                   <text>2015</text>
               </row>
           </header>
           <section>
               <description>Songs from your favorite movie</description>
           </section>
           <section>
               <listItemLockup>
                   <ordinal minLength="2">1</ordinal>
                   <title>Opening sequence</title>
                   <decorationLabel>11:14</decorationLabel>
               </listItemLockup>
               <listItemLockup>
                   <ordinal minLength="2">2</ordinal>
                   <title>Fight song</title>
                   <decorationLabel>3:47</decorationLabel>
               </listItemLockup>
               <listItemLockup>
                   <ordinal minLength="2">3</ordinal>
                   <title>Love theme</title>
                   <decorationLabel>6:48</decorationLabel>
               </listItemLockup>
               <listItemLockup>
                   <ordinal minLength="2">4</ordinal>
                   <title>Car chase</title>
                   <decorationLabel>5:21</decorationLabel>
               </listItemLockup>
               <listItemLockup>
                   <ordinal minLength="2">5</ordinal>
                   <title>End credit theme</title>
                   <decorationLabel>8:03</decorationLabel>
               </listItemLockup>
           </section>
       </list>
   </compilationTemplate>
</document>` 
var parser = new DOMParser() 
var doc = parser.parseFromString(str, 'application/xml') 
return doc
}