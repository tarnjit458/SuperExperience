<script type="text/javascript">
    window._isPublished = true;
    window._site = {
        "globalSections": {
            "footer": {
                "id": 16,
                "layout": {
                    "section": {
                        "id": "bajigu77"
                    }
                },
                "category": "footers",
                "binding": {
                    "title-navigation": "Pages",
                    "title-social": "Follow us",
                    "description": "Experience the power.",
                    "title": "Click here to edit your title",
                    "titleNavigation": "Pages",
                    "titleSocial": "Follow us",
                    "titleAddress": "Address",
                    "titleDescription": "About us",
                    "copyright": true,
                    "pagesMenu": true,
                    "_placeholders": {
                        "description": "Add a description here."
                    },
                    "_toggle": {
                        "description": true,
                        "copyrightHelper": true,
                        "dividerToggle": true,
                        "sitemapToggle": false,
                        "global.accounts": false,
                        "global.phone": false,
                        "global.email": false
                    },
                    "addressToggle": false,
                    "background": {
                        "colorIndex": 1
                    },
                    "copyrightHelper": "Click here to edit your copyright message",
                    "features": ["legal"]
                }
            }
        },
        "globalBinding": {
            "accounts": {},
            "translations": {
                "ada": {
                    "skipToMainText": "shared.ada.skipToMainContent"
                }
            },
            "menuData": [],
            "openingHours": {
                "mon": [{
                    "description": "Closed"
                }],
                "tue": [{
                    "description": "Closed"
                }],
                "wed": [{
                    "description": "Closed"
                }],
                "thu": [{
                    "description": "Closed"
                }],
                "fri": [{
                    "description": "Closed"
                }],
                "sat": [{
                    "description": "Closed"
                }],
                "sun": [{
                    "description": "Closed"
                }]
            },
            "address": {},
            "logo": {
                "value": ""
            },
            "phone": "",
            "email": "webzai_27huv@tgcreates.com",
            "companyName": "Tarnjit Ghag",
            "title": "Super Experience",
            "callToAction": {
                "source": "global.phone",
                "title": "Call"
            },
            "legal": {
                "privacyPolicy": {
                    "showCookieBanner": true,
                    "bannerPosition": "bottom",
                    "bannerText": "This site uses cookies",
                    "agreeButtonText": "I'm okay with that",
                    "privacyPolicyText": ""
                },
                "termsOfService": {
                    "termsOfServiceText": ""
                }
            },
            "description": "",
            "coverPhoto": "",
            "products": "",
            "about": ""
        },
        "theme": {
            "colors": {
                "text": [255, 255, 255],
                "background": [33, 33, 33],
                "accent": [
                    [139, 216, 189],
                    [36, 54, 101]
                ],
                "style": "pastels"
            },
            "fonts": {
                "body": {
                    "name": "Open Sans",
                    "weight": "400"
                },
                "heading": {
                    "name": "Mulish",
                    "weight": "300"
                },
                "fontSize": 1
            },
            "animations": {
                "enabled": false
            },
            "roundedCorners": false
        },
        "pages": [{
            "id": "home",
            "title": "Home",
            "uriPath": "home",
            "showInNavigation": true,
            "matchUriToTitle": true,
            "mainPage": true
        }, {
            "id": "gallery",
            "title": "About",
            "uriPath": "about",
            "showInNavigation": true,
            "matchUriToTitle": true,
            "mainPage": false
        }, {
            "id": "location",
            "title": "Products/Services",
            "uriPath": "products-services",
            "showInNavigation": true,
            "matchUriToTitle": true,
            "mainPage": false
        }, {
            "id": "contact",
            "title": "Contacts",
            "uriPath": "contacts",
            "showInNavigation": true,
            "matchUriToTitle": true,
            "mainPage": false
        }, {
            "id": 1601154489452,
            "title": "News",
            "sections": [{
                "id": 1601168055019,
                "layout": {
                    "section": {
                        "id": "tixoru73"
                    },
                    "listItem": {
                        "name": "media-text-2",
                        "html": "<div class=\"{{_parent._rowClassNames}} dlist content\">\n  <div>\n    <div class=\"crop {{parent.aspectRatio}} {{#if parent.dropShadow}}drop-shadow{{/if}}\">\n      {{image \"image\" \"div\" \"photo kv-gallery content-image\"}}\n    </div>\n    <div class=\"bio {{parent.contentAlignment}}\">\n      {{text \"title\" \"h3\" \"title--sm\"}}\n      {{text \"subtitle\" \"p\" \"body--sm\"}}\n      {{#isOn \"line\"}}<hr class=\"line\">{{/isOn}}\n      {{text \"description\" \"p\"}}\n      {{#if button}}\n        {{button \"button\" \"button-primary button-lg\"}}\n      {{/if}}\n    </div>\n  </div>\n</div>",
                        "html_templates": {
                            "left": "<div class=\"{{_parent._rowClassNames}} dlist content\">\n  <div>\n    <div class=\"crop {{parent.aspectRatio}} {{#if parent.dropShadow}}drop-shadow{{/if}}\">\n      {{image \"image\" \"div\" \"photo kv-gallery content-image\"}}\n    </div>\n    <div class=\"bio {{parent.contentAlignment}}\">\n      {{text \"title\" \"h3\" \"title--sm\"}}\n      {{text \"subtitle\" \"p\" \"body--sm\"}}\n      {{#isOn \"line\"}}<hr class=\"line\">{{/isOn}}\n      {{text \"description\" \"p\"}}\n      {{#if button}}\n        {{button \"button\" \"button-primary button-lg\"}}\n      {{/if}}\n    </div>\n  </div>\n</div>",
                            "right": "<div class=\"{{_parent._rowClassNames}} dlist content\">\n  <div class=\"flipped\">\n    <div class=\"crop {{parent.aspectRatio}} {{#if parent.dropShadow}}drop-shadow{{/if}}\">\n      {{image \"image\" \"div\" \"photo kv-gallery content-image\"}}\n    </div>\n    <div class=\"bio {{parent.contentAlignment}}\">\n      {{text \"title\" \"h3\" \"itle--sm\"}}\n      {{text \"subtitle\" \"p\" \"body--sm\"}}\n      {{#isOn \"line\"}}<hr class=\"line\">{{/isOn}}\n      {{text \"description\" \"p\"}}\n    </div>\n  </div>\n</div>"
                        },
                        "fields": ["parent.dropShadow", "image", "title", "subtitle", "description", "button"],
                        "metadata": {
                            "parents": ["media-text/media-text"],
                            "order": 8,
                            "categories": ["mediaText"],
                            "columns": {
                                "minValue": 1,
                                "maxValue": 4,
                                "default": 3,
                                "defaultAlign": "alternating"
                            },
                            "properties": {
                                "custom": {
                                    "aspectRatio": {
                                        "options": [{
                                            "value": "landscape",
                                            "label": "designer.propertyManager.options.landscape"
                                        }, {
                                            "value": "portrait",
                                            "label": "designer.propertyManager.options.portrait"
                                        }, {
                                            "value": "square",
                                            "label": "designer.propertyManager.options.square"
                                        }, {
                                            "value": "circle",
                                            "label": "designer.propertyManager.options.circle"
                                        }]
                                    },
                                    "subtitle": {
                                        "default": false
                                    },
                                    "line": {
                                        "default": false
                                    }
                                },
                                "generic": ["image", "title", "description"]
                            },
                            "id": "fuweno94"
                        },
                        "css": "\n.fuweno94 .content {\n  padding: 1rem 1rem 0; }\n\n\n.fuweno94 .bio {\n  padding: 15px 0; }\n  \n  .fuweno94 .bio h6 {\n     }\n    \n    .fuweno94 .bio h6:before {\n      content: \"\"; }\n\n\n.fuweno94 hr.line {\n  width: 2rem;\n  position: relative;\n  height: 2px;\n  border: none;\n  box-sizing: content-box;\n  \n  display: inline-block;\n  margin-top: 0; }\n\n\n.fuweno94 .crop .photo {\n  width: 100%;\n  background-size: cover;\n  background-position: center center;\n  margin: 0 auto .5rem;\n  \n  display: flex;\n  transition: box-shadow 300ms; }\n  \n  .fuweno94 .crop .photo i {\n    \n    font-size: 3rem;\n    width: 100%;\n    text-align: center;\n    align-self: center; }\n  \n  .fuweno94 .crop .photo:hover {\n    box-shadow: 0 0.5rem 2rem rgba(0, 0, 0, 0.24);\n    cursor: pointer; }\n\n\n.fuweno94 .social {\n  flex-wrap: wrap;\n  justify-content: center; }\n  \n  .fuweno94 .social .social-link {\n    \n    \n    width: 2.4rem;\n    height: 2.4rem;\n    display: flex;\n    justify-content: center;\n    align-items: center;\n    transition: all 0.3s;\n    border-radius: 50%; }\n    \n    .fuweno94 .social .social-link i {\n      max-width: 100%;\n      max-height: 100%;\n      padding: 0.25rem;\n      font-size: 1.2rem; }\n    \n    .fuweno94 .social .social-link svg {\n      max-width: 100%;\n      max-height: 100%;\n      height: 1.2rem;\n       }\n    \n    .fuweno94 .social .social-link:hover, .fuweno94 .social .social-link:focus {\n      transform: translateY(-2px);\n      -webkit-transform: translateY(-2px);\n      -ms-transform: translateY(-2px);\n      text-decoration: none;\n      border-radius: 4px / 1.1;\n      box-shadow: 0 10px 15px -5px rgba(0, 0, 0, 0.2), 0 10px 15px 0 rgba(0, 0, 0, 0.1), 0 0 1px 1px rgba(0, 0, 0, 0.05); }\n\n@media (min-width: 768px) {\n  \n  .fuweno94 .col-lg-12 > div {\n    display: flex;\n    flex-direction: row;\n    align-items: center; }\n    \n    .fuweno94 .col-lg-12 > div.flipped {\n      justify-content: space-between; }\n      \n      .fuweno94 .col-lg-12 > div.flipped .crop {\n        margin: 1rem 0 auto 2rem;\n        order: 2; }\n      \n      .fuweno94 .col-lg-12 > div.flipped .bio {\n        order: 1; }\n    \n    .fuweno94 .col-lg-12 > div .bio h5:before {\n      margin: 0 0; }\n    \n    .fuweno94 .col-lg-12 > div .social {\n      justify-content: flex-start; }\n      \n      .fuweno94 .col-lg-12 > div .social .social-link {\n        margin-left: 0;\n        margin-right: .5rem; }\n    \n    .fuweno94 .col-lg-12 > div .bio {\n      text-align: left;\n      justify-content: center;\n      flex: 1; }\n      \n      .fuweno94 .col-lg-12 > div .bio h6:before {\n        margin: 0 0 0 0; }\n    \n    .fuweno94 .col-lg-12 > div .crop {\n      width: 33%;\n      margin: 1rem 2rem auto 0;\n      transform: none;\n      -webkit-transform: none;\n      -ms-transform: none; } }\n\n\n.fuweno94 .drop-shadow .photo {\n  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.12); }\n\n\n.fuweno94 .rounded-corners .photo {\n  border-radius: .5rem; }\n\n\n.fuweno94 .landscape .photo {\n  padding-bottom: 75%; }\n\n\n.fuweno94 .portrait .photo {\n  padding-bottom: 133.33333%; }\n\n\n.fuweno94 .square .photo {\n  padding-bottom: 100%; }\n\n\n.fuweno94 .circle .photo {\n  padding-bottom: 100%;\n  border-radius: 50%; }\n\n\n.fuweno94 .align-left {\n  text-align: left; }\n  \n  .fuweno94 .align-left .social {\n    justify-content: flex-start; }\n    \n    .fuweno94 .align-left .social .social-link {\n      margin: 0 .5rem .5rem 0; }\n  \n  .fuweno94 .align-left hr.line {\n    margin-right: 0 auto 1rem 0; }\n\n\n.fuweno94 .align-center {\n  text-align: center; }\n  \n  .fuweno94 .align-center .social {\n    justify-content: center; }\n    \n    .fuweno94 .align-center .social .social-link {\n      margin: 0 .25rem .5rem .25rem; }\n  \n  .fuweno94 .align-center hr.line {\n    margin: 0 auto 1rem; }\n\n\n.fuweno94 .align-right {\n  text-align: right; }\n  \n  .fuweno94 .align-right .social {\n    justify-content: flex-end; }\n    \n    .fuweno94 .align-right .social .social-link {\n      margin: 0 0 .5rem .5rem; }\n  \n  .fuweno94 .align-right hr.line {\n    margin-left: 0 0 1rem auto; }\n\n",
                        "imports": [],
                        "style_variables": [{
                            "style_declaration": "color",
                            "style_value": "lighten($text1, 30%)",
                            "selector_text": ".fuweno94 .bio h6",
                            "condition_text": null,
                            "variable_name": "$text1",
                            "parsedVariableName": [{
                                "alpha": 1,
                                "name": "text",
                                "itteration": 0,
                                "isText": true
                            }]
                        }, {
                            "style_declaration": "background-color",
                            "style_value": "$accent1",
                            "selector_text": ".fuweno94 hr.line",
                            "condition_text": null,
                            "variable_name": "$accent1",
                            "parsedVariableName": [{
                                "alpha": 1,
                                "name": "accent",
                                "itteration": 0,
                                "isText": false
                            }]
                        }, {
                            "style_declaration": "background-color",
                            "style_value": "$accent1",
                            "selector_text": ".fuweno94 .crop .photo",
                            "condition_text": null,
                            "variable_name": "$accent1",
                            "parsedVariableName": [{
                                "alpha": 1,
                                "name": "accent",
                                "itteration": 0,
                                "isText": false
                            }]
                        }, {
                            "style_declaration": "color",
                            "style_value": "$text1_accent1",
                            "selector_text": ".fuweno94 .crop .photo i",
                            "condition_text": null,
                            "variable_name": "$text1_accent1",
                            "parsedVariableName": [{
                                "alpha": 1,
                                "name": "accent",
                                "itteration": 0,
                                "isText": false
                            }, {
                                "alpha": 1,
                                "name": "text",
                                "itteration": 0,
                                "isText": true
                            }]
                        }, {
                            "style_declaration": "background-color",
                            "style_value": "$accent1",
                            "selector_text": ".fuweno94 .social .social-link",
                            "condition_text": null,
                            "variable_name": "$accent1",
                            "parsedVariableName": [{
                                "alpha": 1,
                                "name": "accent",
                                "itteration": 0,
                                "isText": false
                            }]
                        }, {
                            "style_declaration": "color",
                            "style_value": "$text1_accent1",
                            "selector_text": ".fuweno94 .social .social-link",
                            "condition_text": null,
                            "variable_name": "$text1_accent1",
                            "parsedVariableName": [{
                                "alpha": 1,
                                "name": "accent",
                                "itteration": 0,
                                "isText": false
                            }, {
                                "alpha": 1,
                                "name": "text",
                                "itteration": 0,
                                "isText": true
                            }]
                        }, {
                            "style_declaration": "fill",
                            "style_value": "$text1_accent1",
                            "selector_text": ".fuweno94 .social .social-link svg",
                            "condition_text": null,
                            "variable_name": "$text1_accent1",
                            "parsedVariableName": [{
                                "alpha": 1,
                                "name": "accent",
                                "itteration": 0,
                                "isText": false
                            }, {
                                "alpha": 1,
                                "name": "text",
                                "itteration": 0,
                                "isText": true
                            }]
                        }],
                        "path": "media-text/media-text-2",
                        "id": "fuweno94",
                        "properties": {
                            "elements": [{
                                "label": "designer.propertyManager.fields.image",
                                "type": "boolean",
                                "default": true,
                                "isToggle": true,
                                "isGlobal": false,
                                "whenEmptyInsertLabel": "designer.propertyManager.clickHere",
                                "name": "image"
                            }, {
                                "label": "designer.propertyManager.fields.title",
                                "type": "boolean",
                                "default": true,
                                "isToggle": true,
                                "isGlobal": false,
                                "whenEmptyInsertLabel": "designer.propertyManager.clickHere",
                                "name": "title"
                            }, {
                                "label": "designer.propertyManager.fields.description",
                                "type": "boolean",
                                "default": true,
                                "isToggle": true,
                                "isGlobal": false,
                                "whenEmptyInsertLabel": "designer.propertyManager.clickHere",
                                "name": "description"
                            }, {
                                "label": "designer.propertyManager.fields.subtitle",
                                "type": "boolean",
                                "default": false,
                                "isToggle": true,
                                "isGlobal": false,
                                "whenEmptyInsertLabel": "designer.propertyManager.clickHere",
                                "name": "subtitle"
                            }, {
                                "type": "boolean",
                                "label": "designer.propertyManager.properties.line",
                                "isToggle": true,
                                "default": false,
                                "name": "line"
                            }],
                            "layout": [{
                                "type": "select",
                                "label": "designer.propertyManager.properties.aspectRatio",
                                "category": "layout",
                                "options": [{
                                    "value": "landscape",
                                    "label": "designer.propertyManager.options.landscape"
                                }, {
                                    "value": "portrait",
                                    "label": "designer.propertyManager.options.portrait"
                                }, {
                                    "value": "square",
                                    "label": "designer.propertyManager.options.square"
                                }, {
                                    "value": "circle",
                                    "label": "designer.propertyManager.options.circle"
                                }],
                                "default": "landscape",
                                "name": "aspectRatio"
                            }]
                        }
                    },
                    "columns": 2,
                    "listItemAlign": "alternating"
                },
                "category": "mediatext",
                "binding": {
                    "buttons": [{
                        "href": "page:gallery",
                        "id": "01",
                        "linkType": "page",
                        "styles": {
                            "background": "",
                            "border": ""
                        },
                        "background": "",
                        "border": "",
                        "title": "Read more",
                        "buttonClass": "button-",
                        "colorClass": "primary"
                    }],
                    "list": [{
                        "title": "MotoGP Track resurfaced!",
                        "subtitle": "Subtitle",
                        "description": "We have just resurfaced our track to ensure that you get the best experience! Using latest edge technology for the track pavement, you can be assured that your tires will grip the track better than ever! ​​​​​​​",
                        "image": {
                            "value": "https://storage.googleapis.com/production-ipage-v1-0-5/665/465665/LDRACrHS/e78c09fe98aa4ba18ba8b2cd33be0668",
                            "source": "uploads",
                            "originalSize": {
                                "width": 4256,
                                "height": 2832
                            }
                        },
                        "__index": 0
                    }, {
                        "title": "New Bike Added!",
                        "subtitle": "Subtitle",
                        "description": "We have finally got our hands on the new BMW M 1000RR and are excited to bring it to all of our valuable customers!",
                        "image": {
                            "value": "https://storage.googleapis.com/production-ipage-v1-0-5/665/465665/LDRACrHS/bd36d0b1a1624bdb811457227dd67243",
                            "source": "uploads",
                            "originalSize": {
                                "width": 1280,
                                "height": 720
                            },
                            "crop": {
                                "offsetX": 0.8812499999999996
                            }
                        },
                        "__index": 1
                    }],
                    "image": {
                        "value": "https://images.unsplash.com/photo-1524721696987-b9527df9e512?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjU1MTN9",
                        "originalSize": {
                            "width": 3201,
                            "height": 1799
                        },
                        "authorUsername": "cassi_josh",
                        "authorName": "Cassi Josh"
                    },
                    "title": "Latest News",
                    "description": "Click here to edit your description",
                    "subtitle": "Do you have more to say and show? You can do it in this section. Add pictures and a short description to show visitors more of whatever it is you want.",
                    "_placeholders": {
                        "subtitle": "Do you have more to say and show? You can do it in this section. Add pictures and a short description to show visitors more of whatever it is you want.",
                        "description": "Add a description here."
                    },
                    "_toggle": {
                        "title": true,
                        "description": false,
                        "subtitle": false,
                        "_list-item": {
                            "image": true,
                            "title": true,
                            "description": true,
                            "subtitle": false,
                            "line": true
                        }
                    },
                    "dropShadow": true,
                    "sectionSize": "section--lg",
                    "contentAlignment": "left",
                    "aspectRatio": "landscape",
                    "background": {
                        "colorIndex": 0
                    },
                    "divider": true
                }
            }],
            "uriPath": "news",
            "showInNavigation": true,
            "matchUriToTitle": true,
            "mainPage": false,
            "headerSection": {
                "id": 26,
                "layout": {
                    "section": {
                        "id": "lahuni82"
                    }
                },
                "category": "headers",
                "binding": {
                    "title": "Super Experience",
                    "subtitle": "Experience the power of super bikes",
                    "description": "Write something here to introduce yourself to your audience.",
                    "buttons": [{
                        "href": "page:contact",
                        "id": "01",
                        "linkType": "page",
                        "styles": {
                            "background": "",
                            "border": ""
                        },
                        "background": "",
                        "border": "",
                        "title": "Contact Us",
                        "buttonClass": "button-ghost-",
                        "colorClass": "tertiary",
                        "colorClassIndex": 2,
                        "style": {
                            "background-color": "#ffffff"
                        }
                    }],
                    "fullPage": false,
                    "_placeholders": {
                        "subtitle": "It's nice to meet you",
                        "description": "Write something here to introduce yourself to your audience."
                    },
                    "_toggle": {
                        "title": true,
                        "subtitle": true,
                        "description": false,
                        "buttons": true,
                        "global.callToAction": false,
                        "global.title": true,
                        "global.logo": false
                    },
                    "fixedNavigation": true,
                    "fitText": true,
                    "boxedImage": false,
                    "contentAlignment": "align-center",
                    "background": {
                        "colorIndex": 3,
                        "patternIndex": 2,
                        "opacity": 50
                    },
                    "cover": false,
                    "companyName": "Tarnjit Ghag",
                    "arrow": true,
                    "features": ["navigation"]
                }
            }
        }, {
            "id": 1601154634811,
            "title": "CMPE 272 Labs",
            "uriPath": "cmpe-272-labs",
            "showInNavigation": true,
            "matchUriToTitle": true,
            "mainPage": false
        }],
        "metadata": {
            "siteDescription": "",
            "siteKeywords": "",
            "socialShareImage": "",
            "googleAnalyticsKey": "",
            "faviconUrl": "",
            "siteName": "Super Experience",
            "siteDomain": "",
            "siteHeaderHtml": "",
            "siteFooterHtml": "",
            "language": "en",
            "companyName": "Name your site",
            "templateName": "other",
            "topicId": 1567,
            "injectSiteId": 50156581,
            "verticalId": "5d7125ff-c71d-47a3-b428-df94e8f50849"
        },
        "datasources": {},
        "apiKeys": {
            "googleMapsApiKey": "AIzaSyDQtuw04WyGWiY3JULv0HDpHdTK16H4_nI"
        },
        "urls": {
            "re_api": "https://app-gateway.ipage.com/express-editor",
            "hosting_api": "undefined",
            "dataproxy": "https://data.mywebsitebuilder.com"
        },
        "language": "en-US",
        "featureStorage": {},
        "globalFeatureModel": {},
        "navigation": [{
            "id": 1601154364563,
            "pageId": "home",
            "order": 0
        }, {
            "id": 1601154364564,
            "pageId": "gallery",
            "order": 1
        }, {
            "id": 1601154364565,
            "pageId": "location",
            "order": 2
        }, {
            "id": 1601154490093,
            "pageId": 1601154489452,
            "order": 3
        }, {
            "id": 1601154364566,
            "pageId": "contact",
            "order": 4
        }, {
            "id": 1601154636569,
            "pageId": 1601154634811,
            "order": 5
        }],
        "calculatedColors": {
            "background": "rgb(33, 33, 33)",
            "text": "rgb(255, 255, 255)",
            "title": "rgb(139, 216, 189)",
            "buttonBackground": "rgb(139, 216, 189)",
            "buttonText": "rgb(33, 33, 33)"
        },
        "siteId": 50156581,
        "partnerId": 107,
        "environment": "prod"
    };
</script>