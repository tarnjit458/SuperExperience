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
            "sections": [{
                "id": 1601410261914,
                "layout": {
                    "section": {
                        "id": "macuje57"
                    }
                },
                "category": "calltoaction",
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
                        "title": "Read more"
                    }],
                    "icon": {
                        "value": "fa-home"
                    },
                    "image": {
                        "value": "https://storage.googleapis.com/production-ipage-v1-0-5/665/465665/LDRACrHS/e78c09fe98aa4ba18ba8b2cd33be0668",
                        "altText": "purple, black, and orange abstract paintin",
                        "source": "uploads"
                    },
                    "description": "Unleash the full potential of our bikes on our custom MotoGp style race track.",
                    "title": "MotoGP Track",
                    "subtitle": "Learn more about what we do",
                    "_placeholders": {
                        "subtitle": "Learn more about what we do",
                        "description": "Explain your call to action or hide this element by clicking the option on the right panel"
                    },
                    "_toggle": {
                        "image": true,
                        "title": true,
                        "description": true,
                        "buttons": true,
                        "subtitle": false
                    },
                    "sectionSize": "section--lg",
                    "contentAlignment": "align-left",
                    "background": {
                        "colorIndex": 0
                    }
                }
            }, {
                "id": 1601167919758,
                "layout": {
                    "section": {
                        "id": "zoduye36"
                    },
                    "listItem": {
                        "name": "products-1",
                        "html": "<div class=\"{{_parent._rowClassNames}} dlist\">\n  <div class=\"content-card default-card {{#if parent.dropShadow}}drop-shadow-md{{/if}}\">\n      {{image \"image\" \"div\" \"photo kv-gallery content-image\"}}\n      <div class=\"bio {{#isOff \"image\"}}no-image{{/isOff}}\">\n        {{text \"title\" \"h3\" \"title title--xs\"}}\n        {{text \"description\" \"p\" \"description body--md\"}}\n        {{#isOn \"buttons\"}}\n          {{button \"link\" \"button-md button-primary button-card\"}}\n        {{/isOn}}\n      </div>\n  </div>\n</div>",
                        "html_templates": {},
                        "fields": ["parent.dropShadow", "image", "title", "description", "link"],
                        "metadata": {
                            "parents": ["products/products"],
                            "categories": ["products"],
                            "columns": {
                                "minValue": 2,
                                "maxValue": 3,
                                "default": 3
                            },
                            "properties": {
                                "custom": {
                                    "aspectRatio": {
                                        "options": [{
                                            "value": "circle",
                                            "label": "designer.propertyManager.options.circle"
                                        }, {
                                            "value": "square",
                                            "label": "designer.propertyManager.options.square"
                                        }, {
                                            "value": "landscape",
                                            "label": "designer.propertyManager.options.landscape"
                                        }, {
                                            "value": "portrait",
                                            "label": "designer.propertyManager.options.portrait"
                                        }],
                                        "default": "circle"
                                    }
                                },
                                "generic": ["image", "title", "description", "buttons", "dropShadow"]
                            },
                            "id": "hiluse82"
                        },
                        "css": "\n.hiluse82 .content-card {\n  \n  \n  margin: 30px 0 15px;\n  height: calc(100% - 45px);\n  border-radius: 3px;\n  transition: box-shadow 300ms cubic-bezier(0.19, 1, 0.22, 1); }\n\n\n.hiluse82 .drop-shadow-md:hover {\n  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.04), 0 14px 18px -8px rgba(0, 0, 0, 0.11), 0 12px 12px -5px rgba(0, 0, 0, 0.09), 0 11px 8px 0 rgba(0, 0, 0, 0.03); }\n\n\n.hiluse82 .drop-shadow-md .photo {\n  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); }\n\n\n.hiluse82 .bio {\n  padding: 0 .5rem 1rem; }\n  \n  .hiluse82 .bio.no-image {\n    padding: 1rem .5rem 1rem; }\n  \n  .hiluse82 .bio .subtitle {\n    opacity: .54;\n    margin-top: -0.5rem;\n    font-weight: 400; }\n\n@media (min-width: 992px) {\n  \n  .hiluse82 .bio {\n    padding: 0 1rem 1.25rem; }\n    \n    .hiluse82 .bio.no-image {\n      padding: 1.25rem 1rem 1rem; } }\n\n\n.hiluse82 .photo {\n  width: 50%;\n  padding-bottom: 50%;\n  border-radius: 50%;\n  background-size: cover;\n  background-position: center center;\n  margin: 0 auto;\n  position: relative;\n  top: -1.5rem;\n  \n  display: flex; }\n  \n  .hiluse82 .photo i {\n    \n    font-size: 3rem;\n    width: 100%;\n    text-align: center;\n    align-self: center; }\n\n@media (min-width: 768px) {\n  \n  .hiluse82 .col-lg-12 .content-card {\n    flex-direction: row;\n    align-items: center; }\n    \n    .hiluse82 .col-lg-12 .content-card .social {\n      justify-content: flex-start; }\n    \n    .hiluse82 .col-lg-12 .content-card .bio {\n      justify-content: center; }\n    \n    .hiluse82 .col-lg-12 .content-card .photo {\n      margin: 2rem;\n      transform: none;\n      -webkit-transform: none;\n      -ms-transform: none; }\n    \n    .hiluse82 .col-lg-12 .content-card.flipped {\n      justify-content: space-between; }\n      \n      .hiluse82 .col-lg-12 .content-card.flipped .photo {\n        order: 2; }\n      \n      .hiluse82 .col-lg-12 .content-card.flipped .bio {\n        order: 1; } }\n\n\n.hiluse82 .rounded-corners .content-card {\n  border-radius: .5rem; }\n\n\n.hiluse82 .square .photo {\n  width: 50%;\n  padding-bottom: 50%;\n  border-radius: 0; }\n\n\n.hiluse82 .portrait .photo {\n  width: 50%;\n  padding-bottom: 66.6667%;\n  border-radius: 0; }\n\n\n.hiluse82 .landscape .photo {\n  width: 80%;\n  padding-bottom: 60%;\n  border-radius: 0; }\n\n\n.hiluse82 .rounded-corners .photo {\n  border-radius: .5rem; }\n\n\n.hiluse82 .circle .photo {\n  width: 50%;\n  padding-bottom: 50%;\n  border-radius: 50%; }\n\n\n.hiluse82 .align-left .bio {\n  text-align: left; }\n\n\n.hiluse82 .align-center .bio {\n  text-align: center; }\n\n\n.hiluse82 .social {\n  justify-content: flex-end;\n  transform: translateX(10px); }\n\n",
                        "imports": [],
                        "style_variables": [{
                            "style_declaration": "background",
                            "style_value": "$card",
                            "selector_text": ".hiluse82 .content-card",
                            "condition_text": null,
                            "variable_name": "$card",
                            "parsedVariableName": [{
                                "alpha": 1,
                                "name": "card",
                                "itteration": 0,
                                "isText": false
                            }]
                        }, {
                            "style_declaration": "color",
                            "style_value": "$text1_card",
                            "selector_text": ".hiluse82 .content-card",
                            "condition_text": null,
                            "variable_name": "$text1_card",
                            "parsedVariableName": [{
                                "alpha": 1,
                                "name": "card",
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
                            "selector_text": ".hiluse82 .photo",
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
                            "selector_text": ".hiluse82 .photo i",
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
                        "path": "products/products-1",
                        "id": "hiluse82",
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
                                "label": "designer.propertyManager.fields.buttons",
                                "type": "boolean",
                                "default": true,
                                "isToggle": true,
                                "isGlobal": false,
                                "whenEmptyInsertValue": [],
                                "name": "buttons"
                            }],
                            "layout": [{
                                "type": "boolean",
                                "label": "designer.propertyManager.properties.dropShadow",
                                "category": "layout",
                                "default": true,
                                "name": "dropShadow"
                            }, {
                                "type": "select",
                                "label": "designer.propertyManager.properties.aspectRatio",
                                "category": "layout",
                                "options": [{
                                    "value": "circle",
                                    "label": "designer.propertyManager.options.circle"
                                }, {
                                    "value": "square",
                                    "label": "designer.propertyManager.options.square"
                                }, {
                                    "value": "landscape",
                                    "label": "designer.propertyManager.options.landscape"
                                }, {
                                    "value": "portrait",
                                    "label": "designer.propertyManager.options.portrait"
                                }],
                                "default": "circle",
                                "name": "aspectRatio"
                            }]
                        }
                    },
                    "columns": 2
                },
                "category": "products",
                "binding": {
                    "list": [{
                        "link": {
                            "href": "page:gallery",
                            "linkType": "page",
                            "styles": {
                                "background": "",
                                "border": ""
                            },
                            "background": "",
                            "border": "",
                            "title": "Read more"
                        },
                        "icon": {
                            "value": "fa-user-o"
                        },
                        "image": {
                            "value": "https://storage.googleapis.com/production-ipage-v1-0-5/665/465665/LDRACrHS/e194787081754586bf809b6b83d4b833",
                            "source": "uploads",
                            "originalSize": {
                                "width": 1440,
                                "height": 1080
                            }
                        },
                        "title": "Kawasaki H2R",
                        "description": "Power: 310 hp<br>Torque: 115 lb⋅ft<br>Wet Weight: 476 lbs<br>0-60 mph: ~3 seconds",
                        "__index": 0
                    }, {
                        "link": {
                            "href": "page:gallery",
                            "linkType": "page",
                            "styles": {
                                "background": "",
                                "border": ""
                            },
                            "background": "",
                            "border": "",
                            "title": "Read more"
                        },
                        "icon": {
                            "value": "fa-user-o"
                        },
                        "image": {
                            "value": "https://storage.googleapis.com/production-ipage-v1-0-5/665/465665/LDRACrHS/e295ca4b281d40fd88621d9534367e52",
                            "source": "uploads",
                            "originalSize": {
                                "width": 1793,
                                "height": 1358
                            },
                            "crop": {
                                "offsetX": 1.0000000000000004
                            }
                        },
                        "title": "BMW HP4 Race",
                        "description": "Power:&nbsp;215 hp<br>Torque: 88&nbsp;lb⋅ft<br>Wet Weight: 378 lbs<br>0-60mph : ~2.9 seconds",
                        "__index": 1
                    }, {
                        "link": {
                            "href": "page:gallery",
                            "linkType": "page",
                            "styles": {
                                "background": "",
                                "border": ""
                            },
                            "background": "",
                            "border": "",
                            "title": "Read more"
                        },
                        "icon": {
                            "value": "fa-user-o"
                        },
                        "image": {
                            "value": "https://storage.googleapis.com/production-ipage-v1-0-5/665/465665/LDRACrHS/d1b4f39d864746ceb512b0731f4587bd",
                            "source": "uploads",
                            "originalSize": {
                                "width": 1350,
                                "height": 1101
                            }
                        },
                        "title": "Ducati V4R",
                        "description": "Power: 221 hp<br>Torque: 83 lb⋅ft<br>Wet Weight: 425 lbs<br>0-60 mph: ~3.2 seconds",
                        "__index": 2
                    }, {
                        "link": {
                            "href": "page:gallery",
                            "linkType": "page",
                            "styles": {
                                "background": "",
                                "border": ""
                            },
                            "background": "",
                            "border": "",
                            "title": "Read more"
                        },
                        "icon": {
                            "value": "fa-user-o"
                        },
                        "image": {
                            "value": "https://storage.googleapis.com/production-ipage-v1-0-5/665/465665/LDRACrHS/bd36d0b1a1624bdb811457227dd67243",
                            "source": "uploads",
                            "originalSize": {
                                "width": 1280,
                                "height": 720
                            },
                            "crop": {
                                "offsetX": 0.948132780082987
                            }
                        },
                        "title": "BMW M 1000RR",
                        "description": "Power : 205 hp<br>Torque:&nbsp;83 lb⋅ft<br>Wet Weight: 374 lbs<br>0-60 mph: ~3.1 seconds",
                        "__index": 3
                    }],
                    "title": "Products",
                    "description": "Choose a bike from our selection to rent on our track.",
                    "_placeholders": {
                        "description": "Add a description here."
                    },
                    "_toggle": {
                        "title": true,
                        "subtitle": false,
                        "description": true,
                        "_list-item": {
                            "image": true,
                            "title": true,
                            "description": true,
                            "buttons": false,
                            "subtitle": false
                        }
                    },
                    "dropShadow": true,
                    "sectionSize": "section--lg",
                    "contentAlignment": "align-center",
                    "aspectRatio": "square",
                    "background": {
                        "colorIndex": 0
                    },
                    "divider": true
                }
            }],
            "uriPath": "products-services",
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
            "id": "contact",
            "title": "Contacts",
            "uriPath": "contacts",
            "showInNavigation": true,
            "matchUriToTitle": true,
            "mainPage": false
        }, {
            "id": 1601154489452,
            "title": "News",
            "uriPath": "news",
            "showInNavigation": true,
            "matchUriToTitle": true,
            "mainPage": false
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