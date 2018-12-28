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
   baseURL = options.BASEURL
   console.log(options)

   pushDocument(loadingDocument())
   getRemoteDocument('sources/m3u8.json', function (requst) {
      var doc = libraryDocument(requst.responseText)
      pushDocument(doc)
   })
   /*
   getRemoteDocument('library/library.xml', function (request) {
     replaceDocument(request.responseXML)
     console.log('success')
   })*/
   /*
   getRemoteDocument("templates/images.json", function(request) {
      parseJson(request.responseText)
   });*/
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
   navigationDocument.pushDocument(document)
}

function replaceDocument(document) {
   var currentDocument = getActiveDocument()
   navigationDocument.replaceDocument(document, currentDocument)
}

function playVideo(url) {
   console.log(url)
}

/**
 * Get Remote Doc
 */
var baseURL
function getRemoteDocument(path, callback) {
   var request = new XMLHttpRequest()
   request.responseType = 'document'
   request.addEventListener('load', function () {
      callback(request)
   }, false)
   request.open('GET', baseURL + '/' + path, true)
   request.send()
}

/**
 * Common Doc
 */
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

function libraryDocument(json) {
   let res = JSON.parse(json)
   var sources = ``
   for (i = 0; i < res.length; i++) {
      var listItems = ``
      for (j = 0; j < res[i].list.length; j++) {
         listItems += `
          <lockup onselect="playVideo('${res[i].list[j].url}')">
             <img src="http://b.hiphotos.baidu.com/image/pic/item/6159252dd42a28343dd43e9f56b5c9ea15cebf37.jpg" width="250" height="376" />
             <title>${res[i].list[j].name}</title>
          </lockup>`
      }
      sources += `
       <listItemLockup>
          <title>${res[i].name}</title>
          <decorationLabel>${res[i].list.length}</decorationLabel>
          <relatedContent>
             <grid>
                <section>${listItems}
                </section>
             </grid>
          </relatedContent>
       </listItemLockup>`
   }
   var str = `<?xml version="1.0" encoding="UTF-8" ?>
    <document>
       <catalogTemplate>
          <banner>
             <title>在线直播</title>
          </banner>
          <list>
             <section>${sources}
             </section>
          </list>
       </catalogTemplate>
    </document>`
   console.log(str)
   var parser = new DOMParser()
   var doc = parser.parseFromString(str, 'application/xml')
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
    </document>`
   var parser = new DOMParser()
   var doc = parser.parseFromString(str, 'application/xml')
   navigationDocument.pushDocument(doc)

   var results = JSON.parse(information)
   let newItems = results.map((result) => {
      let objectItem = new DataItem(result.type, result.ID)
      objectItem.url = result.url
      objectItem.title = result.title
      return objectItem
   })
   let shelf = doc.getElementsByTagName('shelf').item(0)
   let section = shelf.getElementsByTagName('section').item(0)
   section.dataItem = new DataItem()
   section.dataItem.setPropertyPath('images', newItems)
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