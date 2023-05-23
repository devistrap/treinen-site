{
    "openapi": "3.0.1",
    "info": {
        "title": "Reisinformatie API",
        "description": "Deze API bevat alle reisinformatie bronnen voor de NS App",
        "contact": {
            "name": "M-Lab",
            "email": "mlab@ns.nl"
        },
        "version": "1.0"
    },
    "servers": [
        {
            "url": "https://gateway.apiportal.ns.nl/reisinformatie-api"
        }
    ],
    "paths": {
        "/api/v2/departures": {
            "get": {
                "tags": [
                    "Departures"
                ],
                "summary": "Departures",
                "description": "List of departures for a specific station",
                "operationId": "getDepartures",
                "parameters": [
                    {
                        "name": "lang",
                        "in": "query",
                        "description": "Language to use for localizing the departures list. Only a small subset of text is translated, mainly notes. Defaults to Dutch",
                        "schema": {
                            "type": "string"
                        }
                    },
                    {
                        "name": "station",
                        "in": "query",
                        "description": "NS Station code for the station to return departures for. Can be left empty if uicCode parameter is provided.",
                        "schema": {
                            "type": "string"
                        },
                        "example": "ut"
                    },
                    {
                        "name": "uicCode",
                        "in": "query",
                        "description": "UIC code for the station to return departures for. Can be left empty if station parameter is provided.",
                        "schema": {
                            "type": "string"
                        },
                        "example": 8400621
                    },
                    {
                        "name": "dateTime",
                        "in": "query",
                        "description": "Format - date-time (as date-time in RFC3339). Departure date to show departures from. Only supported for departures at foreign stations. Defaults to server time (Europe/Amsterdam)",
                        "schema": {
                            "type": "string",
                            "format": "date-time"
                        }
                    },
                    {
                        "name": "maxJourneys",
                        "in": "query",
                        "description": "Number of departures or departures to return. Defaults to 40",
                        "schema": {
                            "type": "integer"
                        }
                    }
                ],
                "responses": {
                    "200": {
                        "description": "A list of departures",
                        "content": {
                            "*/*": {
                                "schema": {
                                    "$ref": "#/components/schemas/RepresentationResponseDeparturesPayload"
                                },
                                "examples": {
                                    "default": {
                                        "value": null
                                    }
                                }
                            }
                        }
                    },
                    "400": {
                        "description": "Bad request. One or more parameters are invalid",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": "#/components/schemas/APIError"
                                },
                                "example": {
                                    "timestamp": "string",
                                    "code": 0,
                                    "message": "string",
                                    "path": "string",
                                    "exception": "string",
                                    "errors": [
                                        {
                                            "message": "string",
                                            "type": "string",
                                            "lang": "string"
                                        }
                                    ],
                                    "requestId": "string"
                                }
                            }
                        }
                    },
                    "404": {
                        "description": "Station name or uiccode provided in the parameters could not be found",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": "#/components/schemas/APIError"
                                },
                                "example": {
                                    "timestamp": "string",
                                    "code": 0,
                                    "message": "string",
                                    "path": "string",
                                    "exception": "string",
                                    "errors": [
                                        {
                                            "message": "string",
                                            "type": "string",
                                            "lang": "string"
                                        }
                                    ],
                                    "requestId": "string"
                                }
                            }
                        }
                    }
                }
            }
        },
        "/api/v2/arrivals": {
            "get": {
                "tags": [
                    "Arrivals"
                ],
                "summary": "Arrivals",
                "description": "List of arrivals for a specific station",
                "operationId": "getArrivals",
                "parameters": [
                    {
                        "name": "lang",
                        "in": "query",
                        "description": "Language to use for localizing the arrivals list. Only a small subset of text is translated, mainly notes. Defaults to Dutch",
                        "schema": {
                            "type": "string"
                        }
                    },
                    {
                        "name": "station",
                        "in": "query",
                        "description": "NS Station code for the station to return arrivals for. Can be left empty if uicCode parameter is provided.",
                        "schema": {
                            "type": "string"
                        },
                        "example": "ut"
                    },
                    {
                        "name": "uicCode",
                        "in": "query",
                        "description": "UIC code for the station to return arrivals for. Can be left empty if station parameter is provided.",
                        "schema": {
                            "type": "string"
                        },
                        "example": 8400621
                    },
                    {
                        "name": "dateTime",
                        "in": "query",
                        "description": "Format - date-time (as date-time in RFC3339). Departure date to show arrivals from.  Only supported for arrivals at foreign stations. Defaults to server time (Europe/Amsterdam)",
                        "schema": {
                            "type": "string",
                            "format": "date-time"
                        }
                    },
                    {
                        "name": "maxJourneys",
                        "in": "query",
                        "description": "Number of departures or arrivals to return. Defaults to 40",
                        "schema": {
                            "type": "integer"
                        }
                    }
                ],
                "responses": {
                    "200": {
                        "description": "A list of arrivals",
                        "content": {
                            "*/*": {
                                "schema": {
                                    "$ref": "#/components/schemas/RepresentationResponseArrivalsPayload"
                                },
                                "examples": {
                                    "default": {
                                        "value": null
                                    }
                                }
                            }
                        }
                    },
                    "400": {
                        "description": "Bad request. One or more parameters are invalid",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": "#/components/schemas/APIError"
                                },
                                "example": {
                                    "timestamp": "string",
                                    "code": 0,
                                    "message": "string",
                                    "path": "string",
                                    "exception": "string",
                                    "errors": [
                                        {
                                            "message": "string",
                                            "type": "string",
                                            "lang": "string"
                                        }
                                    ],
                                    "requestId": "string"
                                }
                            }
                        }
                    },
                    "404": {
                        "description": "Station name or uiccode provided in the parameters could not be found",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": "#/components/schemas/APIError"
                                },
                                "example": {
                                    "timestamp": "string",
                                    "code": 0,
                                    "message": "string",
                                    "path": "string",
                                    "exception": "string",
                                    "errors": [
                                        {
                                            "message": "string",
                                            "type": "string",
                                            "lang": "string"
                                        }
                                    ],
                                    "requestId": "string"
                                }
                            }
                        }
                    }
                }
            }
        },
        "/api/v2/journey": {
            "get": {
                "tags": [
                    "Journey"
                ],
                "summary": "Journey details",
                "description": "Returns information about a specific journey",
                "operationId": "getJourneyDetail",
                "parameters": [
                    {
                        "name": "train",
                        "in": "query",
                        "description": "Format - int32. Train number to return details for. Either the train number or journey identifier must be given",
                        "schema": {
                            "type": "integer",
                            "format": "int32"
                        },
                        "example": 6952
                    },
                    {
                        "name": "id",
                        "in": "query",
                        "description": "Journey identifier. Can be found in as journeyDetailRef in the /api/v3/trips output. Either the train number of journey identifier must be given",
                        "schema": {
                            "type": "string"
                        },
                        "example": "1|231691|0|784|15122020"
                    },
                    {
                        "name": "dateTime",
                        "in": "query",
                        "description": "Format - date-time (as date-time in RFC3339). Date for this journey. Defaults to server time (Europe/Amsterdam)",
                        "schema": {
                            "type": "string",
                            "format": "date-time"
                        }
                    },
                    {
                        "name": "departureUicCode",
                        "in": "query",
                        "description": "UIC code of the station that will be indicated as kind = DEPARTURE in the output.",
                        "schema": {
                            "type": "string"
                        },
                        "example": 8400335
                    },
                    {
                        "name": "transferUicCode",
                        "in": "query",
                        "description": "UIC code of the station that will be indicated as kind = TRANSFER in the output.",
                        "schema": {
                            "type": "string"
                        },
                        "example": 8400621
                    },
                    {
                        "name": "arrivalUicCode",
                        "in": "query",
                        "description": "UIC code of the station that will be indicated as kind = ARRIVAL in the output.",
                        "schema": {
                            "type": "string"
                        },
                        "example": 8400263
                    }
                ],
                "responses": {
                    "200": {
                        "description": "Information about the journey",
                        "content": {
                            "*/*": {
                                "schema": {
                                    "$ref": "#/components/schemas/RepresentationResponseJourney"
                                },
                                "examples": {
                                    "default": {
                                        "value": null
                                    }
                                }
                            }
                        }
                    },
                    "400": {
                        "description": "Bad request. One or more parameters are invalid",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": "#/components/schemas/APIError"
                                },
                                "example": {
                                    "timestamp": "string",
                                    "code": 0,
                                    "message": "string",
                                    "path": "string",
                                    "exception": "string",
                                    "errors": [
                                        {
                                            "message": "string",
                                            "type": "string",
                                            "lang": "string"
                                        }
                                    ],
                                    "requestId": "string"
                                }
                            }
                        }
                    },
                    "404": {
                        "description": "Information about this journey could  not be found",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": "#/components/schemas/APIError"
                                },
                                "example": {
                                    "timestamp": "string",
                                    "code": 0,
                                    "message": "string",
                                    "path": "string",
                                    "exception": "string",
                                    "errors": [
                                        {
                                            "message": "string",
                                            "type": "string",
                                            "lang": "string"
                                        }
                                    ],
                                    "requestId": "string"
                                }
                            }
                        }
                    }
                }
            }
        },
        "/api/v3/trips/trip": {
            "get": {
                "tags": [
                    "Trips"
                ],
                "summary": "Single trip",
                "description": "Returns a single trip, based on the given parameters",
                "operationId": "getTrip",
                "parameters": [
                    {
                        "name": "ctxRecon",
                        "in": "query",
                        "description": "Reconstruction context to use as basis for finding trip. Can be found in the /api/v3/trips output",
                        "required": true,
                        "schema": {
                            "type": "string"
                        }
                    },
                    {
                        "name": "date",
                        "in": "query",
                        "description": "Format - date-time (as date-time in RFC3339). Datetime to use when reconstructing trip, may be a different date than the trip was originally planned.",
                        "schema": {
                            "type": "string",
                            "format": "date-time"
                        }
                    },
                    {
                        "name": "travelRequestType",
                        "in": "query",
                        "description": "Specify directions or directionsOnly to include directions for walk/bike/car legs in the result.",
                        "schema": {
                            "enum": [
                                "DEFAULT",
                                "DIRECTIONS",
                                "DIRECTIONS_ONLY"
                            ],
                            "type": "string",
                            "default": "DEFAULT"
                        }
                    },
                    {
                        "name": "sourceCtxRecon",
                        "in": "query",
                        "description": "Give the original reconstruction which was provided by the source (only possible if HARP was used as source)",
                        "schema": {
                            "type": "boolean",
                            "default": false
                        }
                    },
                    {
                        "name": "product",
                        "in": "query",
                        "description": "Name of the product that will be used in travel.",
                        "schema": {
                            "enum": [
                                "GEEN",
                                "OVCHIPKAART_ENKELE_REIS",
                                "OVCHIPKAART_RETOUR",
                                "DAL_VOORDEEL",
                                "ALTIJD_VOORDEEL",
                                "DAL_VRIJ",
                                "WEEKEND_VRIJ",
                                "ALTIJD_VRIJ",
                                "BUSINESSCARD",
                                "BUSINESSCARD_DAL",
                                "STUDENT_WEEK",
                                "STUDENT_WEEKEND",
                                "VDU",
                                "SAMENREISKORTING",
                                "TRAJECT_VRIJ"
                            ],
                            "type": "string"
                        }
                    },
                    {
                        "name": "discount",
                        "in": "query",
                        "description": "Discount of travel to use when calculating product prices",
                        "schema": {
                            "type": "string",
                            "default": "NO_DISCOUNT"
                        }
                    },
                    {
                        "name": "travelClass",
                        "in": "query",
                        "description": "Format - int32. Class of travel to use when calculating product prices",
                        "schema": {
                            "type": "integer",
                            "format": "int32",
                            "default": 2
                        }
                    },
                    {
                        "name": "Authorization",
                        "in": "header",
                        "description": "Account details to use when querying trip assistance options",
                        "schema": {
                            "type": "string"
                        }
                    },
                    {
                        "name": "lang",
                        "in": "header",
                        "description": "Language to use for localizing the travel advice. Only a small subset of text is translated, mainly notes. Defaults to Dutch",
                        "schema": {
                            "type": "string"
                        }
                    }
                ],
                "responses": {
                    "200": {
                        "description": "A trip that matches the given parameters",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": "#/components/schemas/Trip"
                                },
                                "example": {
                                    "uid": "string",
                                    "ctxRecon": "string",
                                    "plannedDurationInMinutes": 0,
                                    "actualDurationInMinutes": 0,
                                    "transfers": 0,
                                    "status": "CANCELLED",
                                    "primaryMessage": {
                                        "title": "string",
                                        "nesColor": {
                                            "type": "SUCCESS",
                                            "color": "string"
                                        },
                                        "message": {
                                            "id": "string",
                                            "externalId": "string",
                                            "head": "string",
                                            "text": "string",
                                            "lead": "string",
                                            "routeIdxFrom": 0,
                                            "routeIdxTo": 0,
                                            "type": "MAINTENANCE",
                                            "nesColor": {
                                                "type": "SUCCESS",
                                                "color": "string"
                                            },
                                            "startDate": "string",
                                            "endDate": "string",
                                            "startTime": "string",
                                            "endTime": "string"
                                        },
                                        "icon": "string"
                                    },
                                    "messages": [
                                        {
                                            "id": "string",
                                            "externalId": "string",
                                            "head": "string",
                                            "text": "string",
                                            "lead": "string",
                                            "routeIdxFrom": 0,
                                            "routeIdxTo": 0,
                                            "type": "MAINTENANCE",
                                            "nesColor": {
                                                "type": "SUCCESS",
                                                "color": "string"
                                            },
                                            "startDate": "string",
                                            "endDate": "string",
                                            "startTime": "string",
                                            "endTime": "string"
                                        }
                                    ],
                                    "legs": [
                                        {
                                            "idx": "string",
                                            "name": "string",
                                            "travelType": "PUBLIC_TRANSIT",
                                            "direction": "string",
                                            "cancelled": true,
                                            "changePossible": true,
                                            "alternativeTransport": true,
                                            "journeyDetailRef": "string",
                                            "origin": {
                                                "name": "string",
                                                "lng": 0,
                                                "lat": 0,
                                                "city": "string",
                                                "countryCode": "string",
                                                "uicCode": "string",
                                                "type": "STATION",
                                                "prognosisType": "string",
                                                "plannedTimeZoneOffset": 0,
                                                "plannedDateTime": "string",
                                                "actualTimeZoneOffset": 0,
                                                "actualDateTime": "string",
                                                "plannedTrack": "string",
                                                "actualTrack": "string",
                                                "exitSide": "LEFT",
                                                "checkinStatus": "CHECKIN",
                                                "travelAssistanceBookingInfo": {
                                                    "name": "string",
                                                    "tripLegIndex": "string",
                                                    "stationUic": "string",
                                                    "serviceTypeIds": [
                                                        "string"
                                                    ],
                                                    "defaultAssistanceValue": true,
                                                    "canChangeAssistance": true,
                                                    "message": "string"
                                                },
                                                "travelAssistanceMeetingPoints": [
                                                    "string"
                                                ],
                                                "travelAssistanceMeetingPointDetails": [
                                                    {
                                                        "name": "string",
                                                        "minutesBefore": 0
                                                    }
                                                ],
                                                "notes": [
                                                    {
                                                        "value": "string",
                                                        "key": "string",
                                                        "noteType": "UNKNOWN",
                                                        "priority": 0,
                                                        "routeIdxFrom": 0,
                                                        "routeIdxTo": 0,
                                                        "link": {
                                                            "title": "string",
                                                            "url": "string"
                                                        },
                                                        "isPresentationRequired": true,
                                                        "category": "PLATFORM_INFORMATION"
                                                    }
                                                ],
                                                "quayCode": "string"
                                            },
                                            "destination": {
                                                "name": "string",
                                                "lng": 0,
                                                "lat": 0,
                                                "city": "string",
                                                "countryCode": "string",
                                                "uicCode": "string",
                                                "type": "STATION",
                                                "prognosisType": "string",
                                                "plannedTimeZoneOffset": 0,
                                                "plannedDateTime": "string",
                                                "actualTimeZoneOffset": 0,
                                                "actualDateTime": "string",
                                                "plannedTrack": "string",
                                                "actualTrack": "string",
                                                "exitSide": "LEFT",
                                                "checkinStatus": "CHECKIN",
                                                "travelAssistanceBookingInfo": {
                                                    "name": "string",
                                                    "tripLegIndex": "string",
                                                    "stationUic": "string",
                                                    "serviceTypeIds": [
                                                        "string"
                                                    ],
                                                    "defaultAssistanceValue": true,
                                                    "canChangeAssistance": true,
                                                    "message": "string"
                                                },
                                                "travelAssistanceMeetingPoints": [
                                                    "string"
                                                ],
                                                "travelAssistanceMeetingPointDetails": [
                                                    {
                                                        "name": "string",
                                                        "minutesBefore": 0
                                                    }
                                                ],
                                                "notes": [
                                                    {
                                                        "value": "string",
                                                        "key": "string",
                                                        "noteType": "UNKNOWN",
                                                        "priority": 0,
                                                        "routeIdxFrom": 0,
                                                        "routeIdxTo": 0,
                                                        "link": {
                                                            "title": "string",
                                                            "url": "string"
                                                        },
                                                        "isPresentationRequired": true,
                                                        "category": "PLATFORM_INFORMATION"
                                                    }
                                                ],
                                                "quayCode": "string"
                                            },
                                            "product": {
                                                "number": "string",
                                                "categoryCode": "string",
                                                "shortCategoryName": "string",
                                                "longCategoryName": "string",
                                                "operatorCode": "string",
                                                "operatorName": "string",
                                                "operatorAdministrativeCode": 0,
                                                "type": "TRAIN",
                                                "displayName": "string"
                                            },
                                            "sharedModality": {
                                                "provider": "string",
                                                "name": "string",
                                                "availability": true,
                                                "nearByMeMapping": "OV_FIETS",
                                                "planIcon": "string"
                                            },
                                            "notes": [
                                                {
                                                    "value": "string",
                                                    "key": "string",
                                                    "noteType": "UNKNOWN",
                                                    "priority": 0,
                                                    "routeIdxFrom": 0,
                                                    "routeIdxTo": 0,
                                                    "link": {
                                                        "title": "string",
                                                        "url": "string"
                                                    },
                                                    "isPresentationRequired": true,
                                                    "category": "PLATFORM_INFORMATION"
                                                }
                                            ],
                                            "messages": [
                                                {
                                                    "id": "string",
                                                    "externalId": "string",
                                                    "head": "string",
                                                    "text": "string",
                                                    "lead": "string",
                                                    "routeIdxFrom": 0,
                                                    "routeIdxTo": 0,
                                                    "type": "MAINTENANCE",
                                                    "nesColor": {
                                                        "type": "SUCCESS",
                                                        "color": "string"
                                                    },
                                                    "startDate": "string",
                                                    "endDate": "string",
                                                    "startTime": "string",
                                                    "endTime": "string"
                                                }
                                            ],
                                            "stops": [
                                                {
                                                    "uicCode": "string",
                                                    "name": "string",
                                                    "lat": 0,
                                                    "lng": 0,
                                                    "countryCode": "string",
                                                    "notes": [
                                                        {
                                                            "value": "string",
                                                            "key": "string",
                                                            "type": "U",
                                                            "priority": 0
                                                        }
                                                    ],
                                                    "routeIdx": 0,
                                                    "departurePrognosisType": "string",
                                                    "plannedDepartureDateTime": "string",
                                                    "plannedDepartureTimeZoneOffset": 0,
                                                    "actualDepartureDateTime": "string",
                                                    "actualDepartureTimeZoneOffset": 0,
                                                    "plannedArrivalDateTime": "string",
                                                    "plannedArrivalTimeZoneOffset": 0,
                                                    "actualArrivalDateTime": "string",
                                                    "actualArrivalTimeZoneOffset": 0,
                                                    "plannedPassingDateTime": "string",
                                                    "actualPassingDateTime": "string",
                                                    "arrivalPrognosisType": "string",
                                                    "actualDepartureTrack": "string",
                                                    "plannedDepartureTrack": "string",
                                                    "plannedArrivalTrack": "string",
                                                    "actualArrivalTrack": "string",
                                                    "departureDelayInSeconds": 0,
                                                    "arrivalDelayInSeconds": 0,
                                                    "cancelled": true,
                                                    "borderStop": true,
                                                    "passing": true,
                                                    "quayCode": "string"
                                                }
                                            ],
                                            "steps": [
                                                {
                                                    "distanceInMeters": 0,
                                                    "durationInSeconds": 0,
                                                    "startLocation": {
                                                        "station": {
                                                            "uicCode": "string",
                                                            "stationCode": "string",
                                                            "name": "string",
                                                            "coordinate": {
                                                                "lat": 0,
                                                                "lng": 0
                                                            },
                                                            "countryCode": "string"
                                                        },
                                                        "description": "string"
                                                    },
                                                    "endLocation": {
                                                        "station": {
                                                            "uicCode": "string",
                                                            "stationCode": "string",
                                                            "name": "string",
                                                            "coordinate": {
                                                                "lat": 0,
                                                                "lng": 0
                                                            },
                                                            "countryCode": "string"
                                                        },
                                                        "description": "string"
                                                    },
                                                    "instructions": "string"
                                                }
                                            ],
                                            "coordinates": [
                                                [
                                                    0
                                                ]
                                            ],
                                            "crowdForecast": "UNKNOWN",
                                            "punctuality": 0,
                                            "crossPlatformTransfer": true,
                                            "shorterStock": true,
                                            "changeCouldBePossible": true,
                                            "shorterStockWarning": "string",
                                            "shorterStockClassification": "BUSY",
                                            "journeyDetail": [
                                                {
                                                    "type": "BTM",
                                                    "link": {
                                                        "title": "string",
                                                        "url": "string"
                                                    }
                                                }
                                            ],
                                            "reachable": true,
                                            "plannedDurationInMinutes": 0,
                                            "travelAssistanceDeparture": {
                                                "name": "string",
                                                "tripLegIndex": "string",
                                                "stationUic": "string",
                                                "serviceTypeIds": [
                                                    "string"
                                                ],
                                                "defaultAssistanceValue": true,
                                                "canChangeAssistance": true,
                                                "message": "string"
                                            },
                                            "travelAssistanceArrival": {
                                                "name": "string",
                                                "tripLegIndex": "string",
                                                "stationUic": "string",
                                                "serviceTypeIds": [
                                                    "string"
                                                ],
                                                "defaultAssistanceValue": true,
                                                "canChangeAssistance": true,
                                                "message": "string"
                                            },
                                            "overviewPolyLine": [
                                                {
                                                    "lat": 0,
                                                    "lng": 0
                                                }
                                            ]
                                        }
                                    ],
                                    "overviewPolyLine": [
                                        {
                                            "lat": 0,
                                            "lng": 0
                                        }
                                    ],
                                    "crowdForecast": "UNKNOWN",
                                    "punctuality": 0,
                                    "optimal": true,
                                    "fareRoute": {
                                        "routeId": "string",
                                        "origin": {
                                            "varCode": 0,
                                            "name": "string"
                                        },
                                        "destination": {
                                            "varCode": 0,
                                            "name": "string"
                                        }
                                    },
                                    "fares": [
                                        {
                                            "priceInCents": 0,
                                            "product": "OVCHIPKAART_ENKELE_REIS",
                                            "travelClass": "FIRST_CLASS",
                                            "priceInCentsExcludingSupplement": 0,
                                            "discountType": "NO_DISCOUNT",
                                            "supplementInCents": 0,
                                            "link": "string"
                                        }
                                    ],
                                    "fareLegs": [
                                        {
                                            "origin": {
                                                "name": "string",
                                                "lng": 0,
                                                "lat": 0,
                                                "city": "string",
                                                "countryCode": "string",
                                                "uicCode": "string",
                                                "type": "STATION",
                                                "prognosisType": "string",
                                                "plannedTimeZoneOffset": 0,
                                                "plannedDateTime": "string",
                                                "actualTimeZoneOffset": 0,
                                                "actualDateTime": "string",
                                                "plannedTrack": "string",
                                                "actualTrack": "string",
                                                "exitSide": "LEFT",
                                                "checkinStatus": "CHECKIN",
                                                "travelAssistanceBookingInfo": {
                                                    "name": "string",
                                                    "tripLegIndex": "string",
                                                    "stationUic": "string",
                                                    "serviceTypeIds": [
                                                        "string"
                                                    ],
                                                    "defaultAssistanceValue": true,
                                                    "canChangeAssistance": true,
                                                    "message": "string"
                                                },
                                                "travelAssistanceMeetingPoints": [
                                                    "string"
                                                ],
                                                "travelAssistanceMeetingPointDetails": [
                                                    {
                                                        "name": "string",
                                                        "minutesBefore": 0
                                                    }
                                                ],
                                                "notes": [
                                                    {
                                                        "value": "string",
                                                        "key": "string",
                                                        "noteType": "UNKNOWN",
                                                        "priority": 0,
                                                        "routeIdxFrom": 0,
                                                        "routeIdxTo": 0,
                                                        "link": {
                                                            "title": "string",
                                                            "url": "string"
                                                        },
                                                        "isPresentationRequired": true,
                                                        "category": "PLATFORM_INFORMATION"
                                                    }
                                                ],
                                                "quayCode": "string"
                                            },
                                            "destination": {
                                                "name": "string",
                                                "lng": 0,
                                                "lat": 0,
                                                "city": "string",
                                                "countryCode": "string",
                                                "uicCode": "string",
                                                "type": "STATION",
                                                "prognosisType": "string",
                                                "plannedTimeZoneOffset": 0,
                                                "plannedDateTime": "string",
                                                "actualTimeZoneOffset": 0,
                                                "actualDateTime": "string",
                                                "plannedTrack": "string",
                                                "actualTrack": "string",
                                                "exitSide": "LEFT",
                                                "checkinStatus": "CHECKIN",
                                                "travelAssistanceBookingInfo": {
                                                    "name": "string",
                                                    "tripLegIndex": "string",
                                                    "stationUic": "string",
                                                    "serviceTypeIds": [
                                                        "string"
                                                    ],
                                                    "defaultAssistanceValue": true,
                                                    "canChangeAssistance": true,
                                                    "message": "string"
                                                },
                                                "travelAssistanceMeetingPoints": [
                                                    "string"
                                                ],
                                                "travelAssistanceMeetingPointDetails": [
                                                    {
                                                        "name": "string",
                                                        "minutesBefore": 0
                                                    }
                                                ],
                                                "notes": [
                                                    {
                                                        "value": "string",
                                                        "key": "string",
                                                        "noteType": "UNKNOWN",
                                                        "priority": 0,
                                                        "routeIdxFrom": 0,
                                                        "routeIdxTo": 0,
                                                        "link": {
                                                            "title": "string",
                                                            "url": "string"
                                                        },
                                                        "isPresentationRequired": true,
                                                        "category": "PLATFORM_INFORMATION"
                                                    }
                                                ],
                                                "quayCode": "string"
                                            },
                                            "operator": "string",
                                            "productTypes": [
                                                "TRAIN"
                                            ],
                                            "fares": [
                                                {
                                                    "priceInCents": 0,
                                                    "priceInCentsExcludingSupplement": 0,
                                                    "supplementInCents": 0,
                                                    "buyableTicketPriceInCents": 0,
                                                    "buyableTicketPriceInCentsExcludingSupplement": 0,
                                                    "buyableTicketSupplementPriceInCents": 0,
                                                    "product": "GEEN",
                                                    "travelClass": "FIRST_CLASS",
                                                    "discountType": "NO_DISCOUNT",
                                                    "link": "string"
                                                }
                                            ]
                                        }
                                    ],
                                    "productFare": {
                                        "priceInCents": 0,
                                        "priceInCentsExcludingSupplement": 0,
                                        "supplementInCents": 0,
                                        "buyableTicketPriceInCents": 0,
                                        "buyableTicketPriceInCentsExcludingSupplement": 0,
                                        "buyableTicketSupplementPriceInCents": 0,
                                        "product": "GEEN",
                                        "travelClass": "FIRST_CLASS",
                                        "discountType": "NO_DISCOUNT",
                                        "link": "string"
                                    },
                                    "fareOptions": {
                                        "isInternationalBookable": true,
                                        "isInternational": true,
                                        "isEticketBuyable": true,
                                        "isPossibleWithOvChipkaart": true,
                                        "isTotalPriceUnknown": true,
                                        "supplementsBasedOnSelectedFare": [
                                            {
                                                "supplementPriceInCents": 0,
                                                "legIdx": "string",
                                                "fromUICCode": "string",
                                                "toUICCode": "string",
                                                "link": {
                                                    "title": "string",
                                                    "url": "string"
                                                }
                                            }
                                        ],
                                        "reasonEticketNotBuyable": {
                                            "reason": "UNKNOWN_PRICE",
                                            "description": "string"
                                        },
                                        "salesOptions": [
                                            {
                                                "type": "EARLY_BOOKING_DISCOUNT",
                                                "permilleFullTariff": 0,
                                                "priceInCents": 0,
                                                "betterOption": true,
                                                "recommendationText": "string"
                                            }
                                        ]
                                    },
                                    "bookingUrl": {
                                        "title": "string",
                                        "url": "string"
                                    },
                                    "type": "NS",
                                    "shareUrl": {
                                        "title": "string",
                                        "url": "string"
                                    },
                                    "realtime": true,
                                    "travelAssistanceInfo": {
                                        "termsAndConditionsLink": "string",
                                        "tripRequestId": 0,
                                        "isAssistanceRequired": true
                                    },
                                    "routeId": "string",
                                    "registerJourney": {
                                        "url": "string",
                                        "searchUrl": "string",
                                        "status": "REGISTRATION_POSSIBLE",
                                        "bicycleReservationRequired": true,
                                        "availability": {
                                            "seats": true,
                                            "numberOfSeats": 0,
                                            "bicycle": true,
                                            "numberOfBicyclePlaces": 0
                                        }
                                    },
                                    "eco": {
                                        "co2kg": 0
                                    }
                                }
                            }
                        }
                    },
                    "400": {
                        "description": "Bad request. One or more parameters are invalid",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": "#/components/schemas/APIError"
                                },
                                "example": {
                                    "timestamp": "string",
                                    "code": 0,
                                    "message": "string",
                                    "path": "string",
                                    "exception": "string",
                                    "errors": [
                                        {
                                            "message": "string",
                                            "type": "string",
                                            "lang": "string"
                                        }
                                    ],
                                    "requestId": "string"
                                }
                            }
                        }
                    },
                    "419": {
                        "description": "Backend system failed in an unrecoverable way.",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": "#/components/schemas/APIError"
                                },
                                "example": {
                                    "timestamp": "string",
                                    "code": 0,
                                    "message": "string",
                                    "path": "string",
                                    "exception": "string",
                                    "errors": [
                                        {
                                            "message": "string",
                                            "type": "string",
                                            "lang": "string"
                                        }
                                    ],
                                    "requestId": "string"
                                }
                            }
                        }
                    }
                }
            }
        },
        "/api/v1/calamities": {
            "get": {
                "tags": [
                    "Disruptions"
                ],
                "summary": "Calamities",
                "description": "List of calamities. This operation is deprecated. Use /api/v3/disruptions instead",
                "operationId": "getCalamities",
                "parameters": [
                    {
                        "name": "lang",
                        "in": "query",
                        "description": "Language to use for localizing the calamities",
                        "schema": {
                            "type": "string"
                        }
                    }
                ],
                "responses": {
                    "200": {
                        "description": "A list of calamities",
                        "content": {
                            "*/*": {
                                "schema": {
                                    "$ref": "#/components/schemas/CalamitiesResponse"
                                },
                                "examples": {
                                    "default": {
                                        "value": null
                                    }
                                }
                            }
                        }
                    }
                }
            }
        },
        "/api/v2/price/international": {
            "get": {
                "tags": [
                    "Prices"
                ],
                "summary": "International prices",
                "description": "Returns price information for international trips",
                "operationId": "getInternationalPrices",
                "parameters": [
                    {
                        "name": "fromStation",
                        "in": "query",
                        "description": "UIC code of the origin station",
                        "required": true,
                        "schema": {
                            "type": "string"
                        },
                        "example": 8400621
                    },
                    {
                        "name": "toStation",
                        "in": "query",
                        "description": "UIC code of the destination station",
                        "required": true,
                        "schema": {
                            "type": "string"
                        },
                        "example": 8065969
                    },
                    {
                        "name": "departureDateTime",
                        "in": "query",
                        "description": "Format - date-time (as date-time in RFC3339). Planned departure time of the trip.",
                        "required": true,
                        "schema": {
                            "type": "string",
                            "format": "date-time"
                        }
                    },
                    {
                        "name": "arrivalDateTime",
                        "in": "query",
                        "description": "Format - date-time (as date-time in RFC3339). Planned arrival time of the trip.",
                        "required": true,
                        "schema": {
                            "type": "string",
                            "format": "date-time"
                        }
                    }
                ],
                "responses": {
                    "200": {
                        "description": "Information about the price to pay given the input parameters",
                        "content": {
                            "*/*": {
                                "schema": {
                                    "$ref": "#/components/schemas/RepresentationResponseInternationalPrice"
                                },
                                "examples": {
                                    "default": {
                                        "value": null
                                    }
                                }
                            }
                        }
                    },
                    "400": {
                        "description": "Bad request. One or more parameters are invalid",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": "#/components/schemas/APIError"
                                },
                                "example": {
                                    "timestamp": "string",
                                    "code": 0,
                                    "message": "string",
                                    "path": "string",
                                    "exception": "string",
                                    "errors": [
                                        {
                                            "message": "string",
                                            "type": "string",
                                            "lang": "string"
                                        }
                                    ],
                                    "requestId": "string"
                                }
                            }
                        }
                    },
                    "404": {
                        "description": "Stationcode provided in the parameters could not be found, or the price is unknown",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": "#/components/schemas/APIError"
                                },
                                "example": {
                                    "timestamp": "string",
                                    "code": 0,
                                    "message": "string",
                                    "path": "string",
                                    "exception": "string",
                                    "errors": [
                                        {
                                            "message": "string",
                                            "type": "string",
                                            "lang": "string"
                                        }
                                    ],
                                    "requestId": "string"
                                }
                            }
                        }
                    }
                }
            }
        },
        "/api/v3/price": {
            "get": {
                "tags": [
                    "Prices"
                ],
                "summary": "Domestic prices",
                "description": "Returns price information for domestic trips",
                "operationId": "getPrices",
                "parameters": [
                    {
                        "name": "fromStation",
                        "in": "query",
                        "description": "NS station code of the origin station",
                        "schema": {
                            "type": "string"
                        },
                        "example": "ut"
                    },
                    {
                        "name": "toStation",
                        "in": "query",
                        "description": "NS Station code of the destination station",
                        "schema": {
                            "type": "string"
                        },
                        "example": "gn"
                    },
                    {
                        "name": "travelClass",
                        "in": "query",
                        "description": "Travel class to return the price for",
                        "schema": {
                            "enum": [
                                "FIRST_CLASS",
                                "SECOND_CLASS"
                            ],
                            "type": "string"
                        }
                    },
                    {
                        "name": "travelType",
                        "in": "query",
                        "description": "Return the price for a single or return trip. Defaults to single",
                        "schema": {
                            "enum": [
                                "single",
                                "return"
                            ],
                            "type": "string"
                        }
                    },
                    {
                        "name": "isJointJourney",
                        "in": "query",
                        "description": "Set to true to return the price including joint journey discount",
                        "schema": {
                            "type": "boolean",
                            "default": false
                        }
                    },
                    {
                        "name": "adults",
                        "in": "query",
                        "description": "Format - int32. Number of adults to return the price for. Defaults to 1",
                        "schema": {
                            "type": "integer",
                            "format": "int32",
                            "default": 1
                        }
                    },
                    {
                        "name": "children",
                        "in": "query",
                        "description": "Format - int32. Number of children to return the price for. Defaults to 0",
                        "schema": {
                            "type": "integer",
                            "format": "int32",
                            "default": 0
                        }
                    },
                    {
                        "name": "routeId",
                        "in": "query",
                        "description": "Specific identifier for the route to take between the two stations. This routeId is returned in the /api/v3/trips call.",
                        "schema": {
                            "type": "string"
                        }
                    },
                    {
                        "name": "plannedDepartureTime",
                        "in": "query",
                        "description": "Format - date-time (as date-time in RFC3339). Planned departure time of the trip. Is used to find the correct route, if multiple routes are possible between the origin and destination station.",
                        "schema": {
                            "type": "string",
                            "format": "date-time"
                        }
                    },
                    {
                        "name": "plannedArrivalTime",
                        "in": "query",
                        "description": "Format - date-time (as date-time in RFC3339). Planned arrival time of the trip. Is used to find the correct route, if multiple routes are possible between the origin and destination station.",
                        "schema": {
                            "type": "string",
                            "format": "date-time"
                        }
                    }
                ],
                "responses": {
                    "200": {
                        "description": "Information about the price to pay given the input parameters",
                        "content": {
                            "*/*": {
                                "schema": {
                                    "$ref": "#/components/schemas/RepresentationResponsePricesResponseV3"
                                },
                                "examples": {
                                    "default": {
                                        "value": null
                                    }
                                }
                            }
                        }
                    },
                    "400": {
                        "description": "Bad request. One or more parameters are invalid",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": "#/components/schemas/APIError"
                                },
                                "example": {
                                    "timestamp": "string",
                                    "code": 0,
                                    "message": "string",
                                    "path": "string",
                                    "exception": "string",
                                    "errors": [
                                        {
                                            "message": "string",
                                            "type": "string",
                                            "lang": "string"
                                        }
                                    ],
                                    "requestId": "string"
                                }
                            }
                        }
                    },
                    "404": {
                        "description": "Stationcode provided in the parameters could not be found or the price is unknown",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": "#/components/schemas/APIError"
                                },
                                "example": {
                                    "timestamp": "string",
                                    "code": 0,
                                    "message": "string",
                                    "path": "string",
                                    "exception": "string",
                                    "errors": [
                                        {
                                            "message": "string",
                                            "type": "string",
                                            "lang": "string"
                                        }
                                    ],
                                    "requestId": "string"
                                }
                            }
                        }
                    }
                }
            }
        },
        "/api/v2/stations": {
            "get": {
                "tags": [
                    "Stations"
                ],
                "summary": "Stations",
                "description": "List of stations.",
                "operationId": "getStations",
                "parameters": [
                    {
                        "name": "q",
                        "in": "query",
                        "description": "q",
                        "schema": {
                            "maxLength": 2147483647,
                            "minLength": 2,
                            "type": "string"
                        }
                    },
                    {
                        "name": "countryCodes",
                        "in": "query",
                        "description": "countryCodes",
                        "schema": {
                            "type": "array",
                            "items": {
                                "type": "string"
                            }
                        },
                        "example": "nl,d,b"
                    },
                    {
                        "name": "limit",
                        "in": "query",
                        "description": "Format - int64. limit",
                        "schema": {
                            "type": "integer",
                            "format": "int64",
                            "default": 10
                        }
                    },
                    {
                        "name": "x-caller-id",
                        "in": "header",
                        "schema": {
                            "type": "string"
                        }
                    }
                ],
                "responses": {
                    "200": {
                        "description": "A list of stations that can be used to plan trips",
                        "content": {
                            "*/*": {
                                "schema": {
                                    "$ref": "#/components/schemas/StationResponse"
                                },
                                "examples": {
                                    "default": {
                                        "value": null
                                    }
                                }
                            }
                        }
                    }
                }
            }
        },
        "/api/v3/trips": {
            "get": {
                "tags": [
                    "Trips"
                ],
                "summary": "Trips",
                "description": "Returns a travel advice for the given parameters",
                "operationId": "getTravelAdvice",
                "parameters": [
                    {
                        "name": "lang",
                        "in": "query",
                        "description": "Language to use for localizing the travel advice. Only a small subset of text is translated, mainly notes. Defaults to Dutch",
                        "schema": {
                            "type": "string"
                        }
                    },
                    {
                        "name": "fromStation",
                        "in": "query",
                        "description": "NS station code of the origin station",
                        "schema": {
                            "type": "string"
                        }
                    },
                    {
                        "name": "originUicCode",
                        "in": "query",
                        "description": "UIC code of the origin station",
                        "schema": {
                            "type": "string"
                        }
                    },
                    {
                        "name": "originLat",
                        "in": "query",
                        "description": "Latitude of the origin location. Should be used together with originLng. If the origin is a station, just provide the uicCode instead of the lat/lng",
                        "schema": {
                            "type": "number"
                        }
                    },
                    {
                        "name": "originLng",
                        "in": "query",
                        "description": "Longitude of the origin location. Should be used together with originLat. If the origin is a station, just provide the uicCode instead of the lat/lng",
                        "schema": {
                            "type": "number"
                        }
                    },
                    {
                        "name": "originName",
                        "in": "query",
                        "description": "Name of the origin location. Will be returned in the response",
                        "schema": {
                            "type": "string"
                        }
                    },
                    {
                        "name": "toStation",
                        "in": "query",
                        "description": "NS station code of the destination station",
                        "schema": {
                            "type": "string"
                        }
                    },
                    {
                        "name": "destinationUicCode",
                        "in": "query",
                        "description": "UIC code of the destination station",
                        "schema": {
                            "type": "string"
                        }
                    },
                    {
                        "name": "destinationLat",
                        "in": "query",
                        "description": "Latitude of the destination location. Should be used together with destinationLng. If the destination is a station, just provide the uicCode instead of the lat/lng",
                        "schema": {
                            "type": "number"
                        }
                    },
                    {
                        "name": "destinationLng",
                        "in": "query",
                        "description": "Longitude of the destination location. Should be used together with destinationLat. If the destination is a station, just provide the uicCode instead of the lat/lng",
                        "schema": {
                            "type": "number"
                        }
                    },
                    {
                        "name": "destinationName",
                        "in": "query",
                        "description": "Name of the destination location. Will be returned in the response",
                        "schema": {
                            "type": "string"
                        }
                    },
                    {
                        "name": "viaStation",
                        "in": "query",
                        "description": "NS station code of the via station",
                        "schema": {
                            "type": "string"
                        }
                    },
                    {
                        "name": "viaUicCode",
                        "in": "query",
                        "description": "UIC code of the via station",
                        "schema": {
                            "type": "string"
                        }
                    },
                    {
                        "name": "viaLat",
                        "in": "query",
                        "description": "Latitude of the via location. Should be used together with viaLng. Will only be used for door-to-door trips. If the via location is a station, just provide the uicCode instead of the lat/lng.",
                        "schema": {
                            "type": "number"
                        }
                    },
                    {
                        "name": "viaLng",
                        "in": "query",
                        "description": "Longitude of the via location. Should be used together with viaLat. Will only be used for door-to-door trips. If the via location is a station, just provide the uicCode instead of the lat/lng.",
                        "schema": {
                            "type": "number"
                        }
                    },
                    {
                        "name": "originWalk",
                        "in": "query",
                        "description": "Return trip advices with walking options to start travel from origin to a train station (first mile)",
                        "schema": {
                            "type": "boolean",
                            "default": false
                        }
                    },
                    {
                        "name": "originBike",
                        "in": "query",
                        "description": "Return trip advices with biking options to start travel from origin to a train station (first mile)",
                        "schema": {
                            "type": "boolean",
                            "default": false
                        }
                    },
                    {
                        "name": "originCar",
                        "in": "query",
                        "description": "Return trip advices with car options to start travel from origin to a train station (first mile)",
                        "schema": {
                            "type": "boolean",
                            "default": false
                        }
                    },
                    {
                        "name": "destinationWalk",
                        "in": "query",
                        "description": "Return trip advices with walking options to finish travel to the destination (last mile)",
                        "schema": {
                            "type": "boolean",
                            "default": false
                        }
                    },
                    {
                        "name": "destinationBike",
                        "in": "query",
                        "description": "Return trip advices with biking options to finish travel to the destination (last mile)",
                        "schema": {
                            "type": "boolean",
                            "default": false
                        }
                    },
                    {
                        "name": "destinationCar",
                        "in": "query",
                        "description": "Return trip advices with car options to finish travel to the destination (last mile)",
                        "schema": {
                            "type": "boolean",
                            "default": false
                        }
                    },
                    {
                        "name": "dateTime",
                        "in": "query",
                        "description": "Format - date-time (as date-time in RFC3339). Datetime that the user want to depart from his origin or or arrive at his destination",
                        "schema": {
                            "type": "string",
                            "format": "date-time"
                        }
                    },
                    {
                        "name": "searchForArrival",
                        "in": "query",
                        "description": "If set, the date and time parameters specify the arrival time for the trip search instead of the departure time",
                        "schema": {
                            "type": "boolean"
                        }
                    },
                    {
                        "name": "departure",
                        "in": "query",
                        "description": "Use searchForArrival parameter instead",
                        "schema": {
                            "type": "boolean"
                        }
                    },
                    {
                        "name": "context",
                        "in": "query",
                        "description": "Parameter specifying that the user wants a next or previous page of the results",
                        "schema": {
                            "type": "string"
                        }
                    },
                    {
                        "name": "shorterChange",
                        "in": "query",
                        "description": "Changes the CHANGE_NOT_POSSIBLE status to CHANGE_COULD_BE_POSSIBLE if the traveler can walk twice as fast. Deprecated: the functionality is removed because we do not want to suggest travelers to run.",
                        "schema": {
                            "type": "boolean",
                            "default": false
                        }
                    },
                    {
                        "name": "addChangeTime",
                        "in": "query",
                        "description": "Format - int32. Extra time in minutes required at all transfers to change trains.",
                        "schema": {
                            "type": "integer",
                            "format": "int32"
                        }
                    },
                    {
                        "name": "minimalChangeTime",
                        "in": "query",
                        "description": "Format - int32. Use addChangeTime instead",
                        "schema": {
                            "type": "integer",
                            "format": "int32"
                        }
                    },
                    {
                        "name": "viaWaitTime",
                        "in": "query",
                        "description": "Format - int32. Waiting time in minutes at the via location, exclusive of transfer time",
                        "schema": {
                            "type": "integer",
                            "format": "int32"
                        }
                    },
                    {
                        "name": "originAccessible",
                        "in": "query",
                        "description": "Use travelAssistance parameter instead",
                        "schema": {
                            "type": "boolean"
                        }
                    },
                    {
                        "name": "travelAssistance",
                        "in": "query",
                        "description": "Return trip advices from the trip assistance booking engine PAS",
                        "schema": {
                            "type": "boolean",
                            "default": false
                        }
                    },
                    {
                        "name": "nsr",
                        "in": "query",
                        "description": "Format - int32. NSR number for the customer making this request. This parameter should only be provided if travelAssistance = true",
                        "schema": {
                            "type": "integer",
                            "format": "int32"
                        }
                    },
                    {
                        "name": "travelAssistanceTransferTime",
                        "in": "query",
                        "description": "Format - int32. Use addChangeTime parameter instead",
                        "schema": {
                            "type": "integer",
                            "format": "int32"
                        }
                    },
                    {
                        "name": "accessibilityEquipment1",
                        "in": "query",
                        "description": "Accesibility equipment to use when searching for trip assistance options (AVG/PAS)",
                        "schema": {
                            "type": "string"
                        }
                    },
                    {
                        "name": "accessibilityEquipment2",
                        "in": "query",
                        "description": "Accesibility equipment to use when searching for trip assistance options (AVG/PAS)",
                        "schema": {
                            "type": "string"
                        }
                    },
                    {
                        "name": "searchForAccessibleTrip",
                        "in": "query",
                        "description": "Return trip advices that are accessible. (might be bookable too)",
                        "schema": {
                            "type": "boolean",
                            "default": false
                        }
                    },
                    {
                        "name": "filterTransportMode",
                        "in": "query",
                        "description": "Could be used to filter for REGIONAL_TRAINS. This parameter is replaced by the localTrainsOnly parameter",
                        "schema": {
                            "type": "string"
                        }
                    },
                    {
                        "name": "localTrainsOnly",
                        "in": "query",
                        "description": "Search only for local train options, i.e. sprinter/sneltrein/stoptrein",
                        "schema": {
                            "type": "boolean",
                            "default": false
                        }
                    },
                    {
                        "name": "excludeHighSpeedTrains",
                        "in": "query",
                        "description": "Exclude high speed trains from results (including those with a required reservation)",
                        "schema": {
                            "type": "boolean",
                            "default": false
                        }
                    },
                    {
                        "name": "excludeTrainsWithReservationRequired",
                        "in": "query",
                        "description": "Exclude trains for domestic trips that require a reservation (e.g. Thalys)",
                        "schema": {
                            "type": "boolean",
                            "default": false
                        }
                    },
                    {
                        "name": "product",
                        "in": "query",
                        "description": "Name of the product that will be used in travel",
                        "schema": {
                            "enum": [
                                "GEEN",
                                "OVCHIPKAART_ENKELE_REIS",
                                "OVCHIPKAART_RETOUR",
                                "DAL_VOORDEEL",
                                "ALTIJD_VOORDEEL",
                                "DAL_VRIJ",
                                "WEEKEND_VRIJ",
                                "ALTIJD_VRIJ",
                                "BUSINESSCARD",
                                "BUSINESSCARD_DAL",
                                "STUDENT_WEEK",
                                "STUDENT_WEEKEND",
                                "VDU",
                                "SAMENREISKORTING",
                                "TRAJECT_VRIJ"
                            ],
                            "type": "string"
                        }
                    },
                    {
                        "name": "discount",
                        "in": "query",
                        "description": "Discount of travel to use when calculating product prices",
                        "schema": {
                            "type": "string",
                            "default": "NO_DISCOUNT"
                        }
                    },
                    {
                        "name": "travelClass",
                        "in": "query",
                        "description": "Format - int32. Class of travel to use when calculating product prices",
                        "schema": {
                            "type": "integer",
                            "format": "int32",
                            "default": 2
                        }
                    },
                    {
                        "name": "passing",
                        "in": "query",
                        "description": "Show intermediate stops that the journey passes but doesn't stop at (only works for source:HARP not multi-modal trips from negentwee)",
                        "schema": {
                            "type": "boolean",
                            "default": false
                        }
                    },
                    {
                        "name": "travelRequestType",
                        "in": "query",
                        "description": "directionsOnly only plans a google directions (walk/bike/car) advice",
                        "schema": {
                            "enum": [
                                "DEFAULT",
                                "DIRECTIONS",
                                "DIRECTIONS_ONLY"
                            ],
                            "type": "string",
                            "default": "DEFAULT"
                        }
                    },
                    {
                        "name": "disabledTransportModalities",
                        "in": "query",
                        "description": "exclude modalities from trip search",
                        "schema": {
                            "type": "array",
                            "items": {
                                "type": "string"
                            }
                        }
                    },
                    {
                        "name": "firstMileModality",
                        "in": "query",
                        "description": "Shared modality origin filter to use when querying trips",
                        "schema": {
                            "type": "string"
                        }
                    },
                    {
                        "name": "lastMileModality",
                        "in": "query",
                        "description": "Shared modality destination filter to use when querying trips",
                        "schema": {
                            "type": "string"
                        }
                    },
                    {
                        "name": "entireTripModality",
                        "in": "query",
                        "description": "Shared modality total trip filter to use when querying trips",
                        "schema": {
                            "type": "string"
                        }
                    },
                    {
                        "name": "Authorization",
                        "in": "header",
                        "description": "Account details to use when querying trip assistance options",
                        "schema": {
                            "type": "string"
                        }
                    }
                ],
                "responses": {
                    "200": {
                        "description": "A traveladvice with zero or more trips",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "type": "array",
                                    "items": {
                                        "$ref": "#/components/schemas/TravelAdvice"
                                    }
                                },
                                "example": [
                                    {
                                        "source": "HARP",
                                        "trips": [
                                            {
                                                "uid": "string",
                                                "ctxRecon": "string",
                                                "plannedDurationInMinutes": 0,
                                                "actualDurationInMinutes": 0,
                                                "transfers": 0,
                                                "status": "CANCELLED",
                                                "primaryMessage": {
                                                    "title": "string",
                                                    "nesColor": {
                                                        "type": "SUCCESS",
                                                        "color": "string"
                                                    },
                                                    "message": {
                                                        "id": "string",
                                                        "externalId": "string",
                                                        "head": "string",
                                                        "text": "string",
                                                        "lead": "string",
                                                        "routeIdxFrom": 0,
                                                        "routeIdxTo": 0,
                                                        "type": "MAINTENANCE",
                                                        "nesColor": {
                                                            "type": "SUCCESS",
                                                            "color": "string"
                                                        },
                                                        "startDate": "string",
                                                        "endDate": "string",
                                                        "startTime": "string",
                                                        "endTime": "string"
                                                    },
                                                    "icon": "string"
                                                },
                                                "messages": [
                                                    {
                                                        "id": "string",
                                                        "externalId": "string",
                                                        "head": "string",
                                                        "text": "string",
                                                        "lead": "string",
                                                        "routeIdxFrom": 0,
                                                        "routeIdxTo": 0,
                                                        "type": "MAINTENANCE",
                                                        "nesColor": {
                                                            "type": "SUCCESS",
                                                            "color": "string"
                                                        },
                                                        "startDate": "string",
                                                        "endDate": "string",
                                                        "startTime": "string",
                                                        "endTime": "string"
                                                    }
                                                ],
                                                "legs": [
                                                    {
                                                        "idx": "string",
                                                        "name": "string",
                                                        "travelType": "PUBLIC_TRANSIT",
                                                        "direction": "string",
                                                        "cancelled": true,
                                                        "changePossible": true,
                                                        "alternativeTransport": true,
                                                        "journeyDetailRef": "string",
                                                        "origin": {
                                                            "name": "string",
                                                            "lng": 0,
                                                            "lat": 0,
                                                            "city": "string",
                                                            "countryCode": "string",
                                                            "uicCode": "string",
                                                            "type": "STATION",
                                                            "prognosisType": "string",
                                                            "plannedTimeZoneOffset": 0,
                                                            "plannedDateTime": "string",
                                                            "actualTimeZoneOffset": 0,
                                                            "actualDateTime": "string",
                                                            "plannedTrack": "string",
                                                            "actualTrack": "string",
                                                            "exitSide": "LEFT",
                                                            "checkinStatus": "CHECKIN",
                                                            "travelAssistanceBookingInfo": {
                                                                "name": "string",
                                                                "tripLegIndex": "string",
                                                                "stationUic": "string",
                                                                "serviceTypeIds": [
                                                                    "string"
                                                                ],
                                                                "defaultAssistanceValue": true,
                                                                "canChangeAssistance": true,
                                                                "message": "string"
                                                            },
                                                            "travelAssistanceMeetingPoints": [
                                                                "string"
                                                            ],
                                                            "travelAssistanceMeetingPointDetails": [
                                                                {
                                                                    "name": "string",
                                                                    "minutesBefore": 0
                                                                }
                                                            ],
                                                            "notes": [
                                                                {
                                                                    "value": "string",
                                                                    "key": "string",
                                                                    "noteType": "UNKNOWN",
                                                                    "priority": 0,
                                                                    "routeIdxFrom": 0,
                                                                    "routeIdxTo": 0,
                                                                    "link": {
                                                                        "title": "string",
                                                                        "url": "string"
                                                                    },
                                                                    "isPresentationRequired": true,
                                                                    "category": "PLATFORM_INFORMATION"
                                                                }
                                                            ],
                                                            "quayCode": "string"
                                                        },
                                                        "destination": {
                                                            "name": "string",
                                                            "lng": 0,
                                                            "lat": 0,
                                                            "city": "string",
                                                            "countryCode": "string",
                                                            "uicCode": "string",
                                                            "type": "STATION",
                                                            "prognosisType": "string",
                                                            "plannedTimeZoneOffset": 0,
                                                            "plannedDateTime": "string",
                                                            "actualTimeZoneOffset": 0,
                                                            "actualDateTime": "string",
                                                            "plannedTrack": "string",
                                                            "actualTrack": "string",
                                                            "exitSide": "LEFT",
                                                            "checkinStatus": "CHECKIN",
                                                            "travelAssistanceBookingInfo": {
                                                                "name": "string",
                                                                "tripLegIndex": "string",
                                                                "stationUic": "string",
                                                                "serviceTypeIds": [
                                                                    "string"
                                                                ],
                                                                "defaultAssistanceValue": true,
                                                                "canChangeAssistance": true,
                                                                "message": "string"
                                                            },
                                                            "travelAssistanceMeetingPoints": [
                                                                "string"
                                                            ],
                                                            "travelAssistanceMeetingPointDetails": [
                                                                {
                                                                    "name": "string",
                                                                    "minutesBefore": 0
                                                                }
                                                            ],
                                                            "notes": [
                                                                {
                                                                    "value": "string",
                                                                    "key": "string",
                                                                    "noteType": "UNKNOWN",
                                                                    "priority": 0,
                                                                    "routeIdxFrom": 0,
                                                                    "routeIdxTo": 0,
                                                                    "link": {
                                                                        "title": "string",
                                                                        "url": "string"
                                                                    },
                                                                    "isPresentationRequired": true,
                                                                    "category": "PLATFORM_INFORMATION"
                                                                }
                                                            ],
                                                            "quayCode": "string"
                                                        },
                                                        "product": {
                                                            "number": "string",
                                                            "categoryCode": "string",
                                                            "shortCategoryName": "string",
                                                            "longCategoryName": "string",
                                                            "operatorCode": "string",
                                                            "operatorName": "string",
                                                            "operatorAdministrativeCode": 0,
                                                            "type": "TRAIN",
                                                            "displayName": "string"
                                                        },
                                                        "sharedModality": {
                                                            "provider": "string",
                                                            "name": "string",
                                                            "availability": true,
                                                            "nearByMeMapping": "OV_FIETS",
                                                            "planIcon": "string"
                                                        },
                                                        "notes": [
                                                            {
                                                                "value": "string",
                                                                "key": "string",
                                                                "noteType": "UNKNOWN",
                                                                "priority": 0,
                                                                "routeIdxFrom": 0,
                                                                "routeIdxTo": 0,
                                                                "link": {
                                                                    "title": "string",
                                                                    "url": "string"
                                                                },
                                                                "isPresentationRequired": true,
                                                                "category": "PLATFORM_INFORMATION"
                                                            }
                                                        ],
                                                        "messages": [
                                                            {
                                                                "id": "string",
                                                                "externalId": "string",
                                                                "head": "string",
                                                                "text": "string",
                                                                "lead": "string",
                                                                "routeIdxFrom": 0,
                                                                "routeIdxTo": 0,
                                                                "type": "MAINTENANCE",
                                                                "nesColor": {
                                                                    "type": "SUCCESS",
                                                                    "color": "string"
                                                                },
                                                                "startDate": "string",
                                                                "endDate": "string",
                                                                "startTime": "string",
                                                                "endTime": "string"
                                                            }
                                                        ],
                                                        "stops": [
                                                            {
                                                                "uicCode": "string",
                                                                "name": "string",
                                                                "lat": 0,
                                                                "lng": 0,
                                                                "countryCode": "string",
                                                                "notes": [
                                                                    {
                                                                        "value": "string",
                                                                        "key": "string",
                                                                        "type": "U",
                                                                        "priority": 0
                                                                    }
                                                                ],
                                                                "routeIdx": 0,
                                                                "departurePrognosisType": "string",
                                                                "plannedDepartureDateTime": "string",
                                                                "plannedDepartureTimeZoneOffset": 0,
                                                                "actualDepartureDateTime": "string",
                                                                "actualDepartureTimeZoneOffset": 0,
                                                                "plannedArrivalDateTime": "string",
                                                                "plannedArrivalTimeZoneOffset": 0,
                                                                "actualArrivalDateTime": "string",
                                                                "actualArrivalTimeZoneOffset": 0,
                                                                "plannedPassingDateTime": "string",
                                                                "actualPassingDateTime": "string",
                                                                "arrivalPrognosisType": "string",
                                                                "actualDepartureTrack": "string",
                                                                "plannedDepartureTrack": "string",
                                                                "plannedArrivalTrack": "string",
                                                                "actualArrivalTrack": "string",
                                                                "departureDelayInSeconds": 0,
                                                                "arrivalDelayInSeconds": 0,
                                                                "cancelled": true,
                                                                "borderStop": true,
                                                                "passing": true,
                                                                "quayCode": "string"
                                                            }
                                                        ],
                                                        "steps": [
                                                            {
                                                                "distanceInMeters": 0,
                                                                "durationInSeconds": 0,
                                                                "startLocation": {
                                                                    "station": {
                                                                        "uicCode": "string",
                                                                        "stationCode": "string",
                                                                        "name": "string",
                                                                        "coordinate": {
                                                                            "lat": 0,
                                                                            "lng": 0
                                                                        },
                                                                        "countryCode": "string"
                                                                    },
                                                                    "description": "string"
                                                                },
                                                                "endLocation": {
                                                                    "station": {
                                                                        "uicCode": "string",
                                                                        "stationCode": "string",
                                                                        "name": "string",
                                                                        "coordinate": {
                                                                            "lat": 0,
                                                                            "lng": 0
                                                                        },
                                                                        "countryCode": "string"
                                                                    },
                                                                    "description": "string"
                                                                },
                                                                "instructions": "string"
                                                            }
                                                        ],
                                                        "coordinates": [
                                                            [
                                                                0
                                                            ]
                                                        ],
                                                        "crowdForecast": "UNKNOWN",
                                                        "punctuality": 0,
                                                        "crossPlatformTransfer": true,
                                                        "shorterStock": true,
                                                        "changeCouldBePossible": true,
                                                        "shorterStockWarning": "string",
                                                        "shorterStockClassification": "BUSY",
                                                        "journeyDetail": [
                                                            {
                                                                "type": "BTM",
                                                                "link": {
                                                                    "title": "string",
                                                                    "url": "string"
                                                                }
                                                            }
                                                        ],
                                                        "reachable": true,
                                                        "plannedDurationInMinutes": 0,
                                                        "travelAssistanceDeparture": {
                                                            "name": "string",
                                                            "tripLegIndex": "string",
                                                            "stationUic": "string",
                                                            "serviceTypeIds": [
                                                                "string"
                                                            ],
                                                            "defaultAssistanceValue": true,
                                                            "canChangeAssistance": true,
                                                            "message": "string"
                                                        },
                                                        "travelAssistanceArrival": {
                                                            "name": "string",
                                                            "tripLegIndex": "string",
                                                            "stationUic": "string",
                                                            "serviceTypeIds": [
                                                                "string"
                                                            ],
                                                            "defaultAssistanceValue": true,
                                                            "canChangeAssistance": true,
                                                            "message": "string"
                                                        },
                                                        "overviewPolyLine": [
                                                            {
                                                                "lat": 0,
                                                                "lng": 0
                                                            }
                                                        ]
                                                    }
                                                ],
                                                "overviewPolyLine": [
                                                    {
                                                        "lat": 0,
                                                        "lng": 0
                                                    }
                                                ],
                                                "crowdForecast": "UNKNOWN",
                                                "punctuality": 0,
                                                "optimal": true,
                                                "fareRoute": {
                                                    "routeId": "string",
                                                    "origin": {
                                                        "varCode": 0,
                                                        "name": "string"
                                                    },
                                                    "destination": {
                                                        "varCode": 0,
                                                        "name": "string"
                                                    }
                                                },
                                                "fares": [
                                                    {
                                                        "priceInCents": 0,
                                                        "product": "OVCHIPKAART_ENKELE_REIS",
                                                        "travelClass": "FIRST_CLASS",
                                                        "priceInCentsExcludingSupplement": 0,
                                                        "discountType": "NO_DISCOUNT",
                                                        "supplementInCents": 0,
                                                        "link": "string"
                                                    }
                                                ],
                                                "fareLegs": [
                                                    {
                                                        "origin": {
                                                            "name": "string",
                                                            "lng": 0,
                                                            "lat": 0,
                                                            "city": "string",
                                                            "countryCode": "string",
                                                            "uicCode": "string",
                                                            "type": "STATION",
                                                            "prognosisType": "string",
                                                            "plannedTimeZoneOffset": 0,
                                                            "plannedDateTime": "string",
                                                            "actualTimeZoneOffset": 0,
                                                            "actualDateTime": "string",
                                                            "plannedTrack": "string",
                                                            "actualTrack": "string",
                                                            "exitSide": "LEFT",
                                                            "checkinStatus": "CHECKIN",
                                                            "travelAssistanceBookingInfo": {
                                                                "name": "string",
                                                                "tripLegIndex": "string",
                                                                "stationUic": "string",
                                                                "serviceTypeIds": [
                                                                    "string"
                                                                ],
                                                                "defaultAssistanceValue": true,
                                                                "canChangeAssistance": true,
                                                                "message": "string"
                                                            },
                                                            "travelAssistanceMeetingPoints": [
                                                                "string"
                                                            ],
                                                            "travelAssistanceMeetingPointDetails": [
                                                                {
                                                                    "name": "string",
                                                                    "minutesBefore": 0
                                                                }
                                                            ],
                                                            "notes": [
                                                                {
                                                                    "value": "string",
                                                                    "key": "string",
                                                                    "noteType": "UNKNOWN",
                                                                    "priority": 0,
                                                                    "routeIdxFrom": 0,
                                                                    "routeIdxTo": 0,
                                                                    "link": {
                                                                        "title": "string",
                                                                        "url": "string"
                                                                    },
                                                                    "isPresentationRequired": true,
                                                                    "category": "PLATFORM_INFORMATION"
                                                                }
                                                            ],
                                                            "quayCode": "string"
                                                        },
                                                        "destination": {
                                                            "name": "string",
                                                            "lng": 0,
                                                            "lat": 0,
                                                            "city": "string",
                                                            "countryCode": "string",
                                                            "uicCode": "string",
                                                            "type": "STATION",
                                                            "prognosisType": "string",
                                                            "plannedTimeZoneOffset": 0,
                                                            "plannedDateTime": "string",
                                                            "actualTimeZoneOffset": 0,
                                                            "actualDateTime": "string",
                                                            "plannedTrack": "string",
                                                            "actualTrack": "string",
                                                            "exitSide": "LEFT",
                                                            "checkinStatus": "CHECKIN",
                                                            "travelAssistanceBookingInfo": {
                                                                "name": "string",
                                                                "tripLegIndex": "string",
                                                                "stationUic": "string",
                                                                "serviceTypeIds": [
                                                                    "string"
                                                                ],
                                                                "defaultAssistanceValue": true,
                                                                "canChangeAssistance": true,
                                                                "message": "string"
                                                            },
                                                            "travelAssistanceMeetingPoints": [
                                                                "string"
                                                            ],
                                                            "travelAssistanceMeetingPointDetails": [
                                                                {
                                                                    "name": "string",
                                                                    "minutesBefore": 0
                                                                }
                                                            ],
                                                            "notes": [
                                                                {
                                                                    "value": "string",
                                                                    "key": "string",
                                                                    "noteType": "UNKNOWN",
                                                                    "priority": 0,
                                                                    "routeIdxFrom": 0,
                                                                    "routeIdxTo": 0,
                                                                    "link": {
                                                                        "title": "string",
                                                                        "url": "string"
                                                                    },
                                                                    "isPresentationRequired": true,
                                                                    "category": "PLATFORM_INFORMATION"
                                                                }
                                                            ],
                                                            "quayCode": "string"
                                                        },
                                                        "operator": "string",
                                                        "productTypes": [
                                                            "TRAIN"
                                                        ],
                                                        "fares": [
                                                            {
                                                                "priceInCents": 0,
                                                                "priceInCentsExcludingSupplement": 0,
                                                                "supplementInCents": 0,
                                                                "buyableTicketPriceInCents": 0,
                                                                "buyableTicketPriceInCentsExcludingSupplement": 0,
                                                                "buyableTicketSupplementPriceInCents": 0,
                                                                "product": "GEEN",
                                                                "travelClass": "FIRST_CLASS",
                                                                "discountType": "NO_DISCOUNT",
                                                                "link": "string"
                                                            }
                                                        ]
                                                    }
                                                ],
                                                "productFare": {
                                                    "priceInCents": 0,
                                                    "priceInCentsExcludingSupplement": 0,
                                                    "supplementInCents": 0,
                                                    "buyableTicketPriceInCents": 0,
                                                    "buyableTicketPriceInCentsExcludingSupplement": 0,
                                                    "buyableTicketSupplementPriceInCents": 0,
                                                    "product": "GEEN",
                                                    "travelClass": "FIRST_CLASS",
                                                    "discountType": "NO_DISCOUNT",
                                                    "link": "string"
                                                },
                                                "fareOptions": {
                                                    "isInternationalBookable": true,
                                                    "isInternational": true,
                                                    "isEticketBuyable": true,
                                                    "isPossibleWithOvChipkaart": true,
                                                    "isTotalPriceUnknown": true,
                                                    "supplementsBasedOnSelectedFare": [
                                                        {
                                                            "supplementPriceInCents": 0,
                                                            "legIdx": "string",
                                                            "fromUICCode": "string",
                                                            "toUICCode": "string",
                                                            "link": {
                                                                "title": "string",
                                                                "url": "string"
                                                            }
                                                        }
                                                    ],
                                                    "reasonEticketNotBuyable": {
                                                        "reason": "UNKNOWN_PRICE",
                                                        "description": "string"
                                                    },
                                                    "salesOptions": [
                                                        {
                                                            "type": "EARLY_BOOKING_DISCOUNT",
                                                            "permilleFullTariff": 0,
                                                            "priceInCents": 0,
                                                            "betterOption": true,
                                                            "recommendationText": "string"
                                                        }
                                                    ]
                                                },
                                                "bookingUrl": {
                                                    "title": "string",
                                                    "url": "string"
                                                },
                                                "type": "NS",
                                                "shareUrl": {
                                                    "title": "string",
                                                    "url": "string"
                                                },
                                                "realtime": true,
                                                "travelAssistanceInfo": {
                                                    "termsAndConditionsLink": "string",
                                                    "tripRequestId": 0,
                                                    "isAssistanceRequired": true
                                                },
                                                "routeId": "string",
                                                "registerJourney": {
                                                    "url": "string",
                                                    "searchUrl": "string",
                                                    "status": "REGISTRATION_POSSIBLE",
                                                    "bicycleReservationRequired": true,
                                                    "availability": {
                                                        "seats": true,
                                                        "numberOfSeats": 0,
                                                        "bicycle": true,
                                                        "numberOfBicyclePlaces": 0
                                                    }
                                                },
                                                "eco": {
                                                    "co2kg": 0
                                                }
                                            }
                                        ],
                                        "scrollRequestBackwardContext": "string",
                                        "scrollRequestForwardContext": "string",
                                        "message": "string"
                                    }
                                ]
                            }
                        }
                    },
                    "400": {
                        "description": "Bad request. One or more parameters are invalid",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": "#/components/schemas/APIError"
                                },
                                "example": {
                                    "timestamp": "string",
                                    "code": 0,
                                    "message": "string",
                                    "path": "string",
                                    "exception": "string",
                                    "errors": [
                                        {
                                            "message": "string",
                                            "type": "string",
                                            "lang": "string"
                                        }
                                    ],
                                    "requestId": "string"
                                }
                            }
                        }
                    },
                    "419": {
                        "description": "Backend system failed in an unrecoverable way.",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": "#/components/schemas/APIError"
                                },
                                "example": {
                                    "timestamp": "string",
                                    "code": 0,
                                    "message": "string",
                                    "path": "string",
                                    "exception": "string",
                                    "errors": [
                                        {
                                            "message": "string",
                                            "type": "string",
                                            "lang": "string"
                                        }
                                    ],
                                    "requestId": "string"
                                }
                            }
                        }
                    }
                }
            }
        },
        "/api/v2/disruptions/station/{stationCode}": {
            "get": {
                "tags": [
                    "Disruptions"
                ],
                "summary": "Station disruptions (old)",
                "description": "List of disruptions relevant for the current station. This operation is deprecated. Use /api/v3/disruptions/station/{stationCode} instead.",
                "operationId": "station_disruptions_v2",
                "parameters": [
                    {
                        "name": "stationCode",
                        "in": "path",
                        "description": "NS Station code or UIC code for the station to return disruptions for. Case insensitive",
                        "required": true,
                        "schema": {
                            "type": "string"
                        },
                        "example": "UT"
                    }
                ],
                "responses": {
                    "200": {
                        "description": "A list of disruptions relevant for the given station",
                        "content": {
                            "*/*": {
                                "schema": {
                                    "$ref": "#/components/schemas/RepresentationResponseListVerstoringContainer"
                                },
                                "examples": {
                                    "default": {
                                        "value": null
                                    }
                                }
                            }
                        }
                    },
                    "400": {
                        "description": "Bad request. One or more parameters are invalid",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": "#/components/schemas/APIError"
                                },
                                "example": {
                                    "timestamp": "string",
                                    "code": 0,
                                    "message": "string",
                                    "path": "string",
                                    "exception": "string",
                                    "errors": [
                                        {
                                            "message": "string",
                                            "type": "string",
                                            "lang": "string"
                                        }
                                    ],
                                    "requestId": "string"
                                }
                            }
                        }
                    },
                    "404": {
                        "description": "Station not found",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": "#/components/schemas/APIError"
                                },
                                "example": {
                                    "timestamp": "string",
                                    "code": 0,
                                    "message": "string",
                                    "path": "string",
                                    "exception": "string",
                                    "errors": [
                                        {
                                            "message": "string",
                                            "type": "string",
                                            "lang": "string"
                                        }
                                    ],
                                    "requestId": "string"
                                }
                            }
                        }
                    },
                    "500": {
                        "description": "A list of disruptions relevant for the given station",
                        "content": {
                            "*/*": {
                                "schema": {
                                    "$ref": "#/components/schemas/RepresentationResponseListVerstoringContainer"
                                },
                                "examples": {
                                    "default": {
                                        "value": null
                                    }
                                }
                            }
                        }
                    }
                }
            }
        },
        "/api/v2/disruptions/{id}": {
            "get": {
                "tags": [
                    "Disruptions"
                ],
                "summary": "Single disruption (old)",
                "description": "Returns information on a single disruption/maintenance. This operation is deprecated. Use /api/v3/disruptions/{type}/{id} instead.",
                "operationId": "disruption_v2",
                "parameters": [
                    {
                        "name": "id",
                        "in": "path",
                        "description": "Unique identifier of the disruption to return. Can be found using the /api/v2/disruptions call",
                        "required": true,
                        "schema": {
                            "type": "string"
                        },
                        "example": 6004123
                    }
                ],
                "responses": {
                    "200": {
                        "description": "The requested disruption",
                        "content": {
                            "*/*": {
                                "schema": {
                                    "$ref": "#/components/schemas/RepresentationResponseVerstoringContainer"
                                },
                                "examples": {
                                    "default": {
                                        "value": null
                                    }
                                }
                            }
                        }
                    },
                    "400": {
                        "description": "Bad request. One or more parameters are invalid",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": "#/components/schemas/APIError"
                                },
                                "example": {
                                    "timestamp": "string",
                                    "code": 0,
                                    "message": "string",
                                    "path": "string",
                                    "exception": "string",
                                    "errors": [
                                        {
                                            "message": "string",
                                            "type": "string",
                                            "lang": "string"
                                        }
                                    ],
                                    "requestId": "string"
                                }
                            }
                        }
                    },
                    "404": {
                        "description": "Disruption not found or wrong type given",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": "#/components/schemas/APIError"
                                },
                                "example": {
                                    "timestamp": "string",
                                    "code": 0,
                                    "message": "string",
                                    "path": "string",
                                    "exception": "string",
                                    "errors": [
                                        {
                                            "message": "string",
                                            "type": "string",
                                            "lang": "string"
                                        }
                                    ],
                                    "requestId": "string"
                                }
                            }
                        }
                    },
                    "500": {
                        "description": "The requested disruption",
                        "content": {
                            "*/*": {
                                "schema": {
                                    "$ref": "#/components/schemas/RepresentationResponseVerstoringContainer"
                                },
                                "examples": {
                                    "default": {
                                        "value": null
                                    }
                                }
                            }
                        }
                    }
                }
            }
        },
        "/api/v2/disruptions": {
            "get": {
                "tags": [
                    "Disruptions"
                ],
                "summary": "Disruptions (old)",
                "description": "List of disruptions/maintenance. This operation is deprecated. Use /api/v3/disruptions instead.",
                "operationId": "disruptions_v2",
                "parameters": [
                    {
                        "name": "type",
                        "in": "query",
                        "description": "Type of the disruptions to be returned. If not present all types will be returned.",
                        "schema": {
                            "enum": [
                                "storing",
                                "werkzaamheid"
                            ],
                            "type": "string"
                        }
                    },
                    {
                        "name": "actual",
                        "in": "query",
                        "description": "Flag to filter maintenance to only return active items, i.e. maintenance that is happening right now",
                        "schema": {
                            "type": "boolean",
                            "default": false
                        }
                    },
                    {
                        "name": "lang",
                        "in": "header",
                        "description": "Language for the disruptions. Defaults to nl. See https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Accept-Language for details. Please note that only the calamities will be translated, as no translation is available for maintenance and disruptions",
                        "schema": {
                            "type": "string"
                        },
                        "example": "nl"
                    }
                ],
                "responses": {
                    "200": {
                        "description": "A list of disruptions",
                        "content": {
                            "*/*": {
                                "schema": {
                                    "$ref": "#/components/schemas/RepresentationResponseListVerstoringContainer"
                                },
                                "examples": {
                                    "default": {
                                        "value": null
                                    }
                                }
                            }
                        }
                    },
                    "400": {
                        "description": "Bad request. One or more parameters are invalid",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": "#/components/schemas/APIError"
                                },
                                "example": {
                                    "timestamp": "string",
                                    "code": 0,
                                    "message": "string",
                                    "path": "string",
                                    "exception": "string",
                                    "errors": [
                                        {
                                            "message": "string",
                                            "type": "string",
                                            "lang": "string"
                                        }
                                    ],
                                    "requestId": "string"
                                }
                            }
                        }
                    }
                }
            }
        },
        "/api/v3/disruptions/station/{stationCode}": {
            "get": {
                "tags": [
                    "Disruptions"
                ],
                "summary": "Station disruptions",
                "description": "List of disruptions relevant for the current station",
                "operationId": "getStationDisruptions_v3",
                "parameters": [
                    {
                        "name": "stationCode",
                        "in": "path",
                        "required": true,
                        "schema": {
                            "type": "string"
                        }
                    }
                ],
                "responses": {
                    "200": {
                        "description": "A list of disruptions relevant for the given station",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "type": "array",
                                    "items": {
                                        "$ref": "#/components/schemas/DisruptionBase"
                                    }
                                },
                                "example": [
                                    {
                                        "id": "string",
                                        "type": "CALAMITY",
                                        "title": "string",
                                        "topic": "string",
                                        "isActive": true,
                                        "registrationTime": "string",
                                        "releaseTime": "string",
                                        "local": true,
                                        "titleSections": [
                                            [
                                                {
                                                    "type": "STATION",
                                                    "value": "string"
                                                }
                                            ]
                                        ],
                                        "start": "string",
                                        "end": "string",
                                        "period": "string",
                                        "phase": {
                                            "id": "string",
                                            "label": "string"
                                        },
                                        "impact": {
                                            "value": 0
                                        },
                                        "expectedDuration": {
                                            "description": "string",
                                            "endTime": "string"
                                        },
                                        "summaryAdditionalTravelTime": {
                                            "label": "string",
                                            "shortLabel": "string",
                                            "minimumDurationInMinutes": 0,
                                            "maximumDurationInMinutes": 0
                                        },
                                        "publicationSections": [
                                            {
                                                "section": {
                                                    "stations": [
                                                        {
                                                            "uicCode": "string",
                                                            "stationCode": "string",
                                                            "name": "string",
                                                            "coordinate": {
                                                                "lat": 0,
                                                                "lng": 0
                                                            },
                                                            "countryCode": "string"
                                                        }
                                                    ],
                                                    "direction": "ONE_WAY"
                                                },
                                                "consequence": {
                                                    "section": {
                                                        "stations": [
                                                            {
                                                                "uicCode": "string",
                                                                "stationCode": "string",
                                                                "name": "string",
                                                                "coordinate": {
                                                                    "lat": 0,
                                                                    "lng": 0
                                                                },
                                                                "countryCode": "string"
                                                            }
                                                        ],
                                                        "direction": "ONE_WAY"
                                                    },
                                                    "description": "string",
                                                    "level": "NO_OR_MUCH_LESS_TRAINS"
                                                },
                                                "sectionType": "NL"
                                            }
                                        ],
                                        "timespans": [
                                            {
                                                "start": "string",
                                                "end": "string",
                                                "period": "string",
                                                "situation": {
                                                    "label": "string"
                                                },
                                                "cause": {
                                                    "label": "string"
                                                },
                                                "additionalTravelTime": {
                                                    "label": "string",
                                                    "shortLabel": "string",
                                                    "minimumDurationInMinutes": 0,
                                                    "maximumDurationInMinutes": 0
                                                },
                                                "alternativeTransport": {
                                                    "label": "string",
                                                    "shortLabel": "string"
                                                },
                                                "advices": [
                                                    "string"
                                                ]
                                            }
                                        ],
                                        "alternativeTransportTimespans": [
                                            {
                                                "start": "string",
                                                "end": "string",
                                                "alternativeTransport": {
                                                    "location": [
                                                        {
                                                            "station": {
                                                                "uicCode": "string",
                                                                "stationCode": "string",
                                                                "name": "string",
                                                                "coordinate": {
                                                                    "lat": 0,
                                                                    "lng": 0
                                                                },
                                                                "countryCode": "string"
                                                            },
                                                            "description": "string"
                                                        }
                                                    ],
                                                    "label": "string",
                                                    "shortLabel": "string"
                                                }
                                            }
                                        ]
                                    }
                                ]
                            }
                        }
                    },
                    "400": {
                        "description": "Bad request. One or more parameters are invalid",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": "#/components/schemas/APIError"
                                },
                                "example": {
                                    "timestamp": "string",
                                    "code": 0,
                                    "message": "string",
                                    "path": "string",
                                    "exception": "string",
                                    "errors": [
                                        {
                                            "message": "string",
                                            "type": "string",
                                            "lang": "string"
                                        }
                                    ],
                                    "requestId": "string"
                                }
                            }
                        }
                    },
                    "404": {
                        "description": "Station not found",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": "#/components/schemas/APIError"
                                },
                                "example": {
                                    "timestamp": "string",
                                    "code": 0,
                                    "message": "string",
                                    "path": "string",
                                    "exception": "string",
                                    "errors": [
                                        {
                                            "message": "string",
                                            "type": "string",
                                            "lang": "string"
                                        }
                                    ],
                                    "requestId": "string"
                                }
                            }
                        }
                    },
                    "500": {
                        "description": "A list of disruptions relevant for the given station",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "type": "array",
                                    "items": {
                                        "$ref": "#/components/schemas/DisruptionBase"
                                    }
                                },
                                "example": [
                                    {
                                        "id": "string",
                                        "type": "CALAMITY",
                                        "title": "string",
                                        "topic": "string",
                                        "isActive": true,
                                        "registrationTime": "string",
                                        "releaseTime": "string",
                                        "local": true,
                                        "titleSections": [
                                            [
                                                {
                                                    "type": "STATION",
                                                    "value": "string"
                                                }
                                            ]
                                        ],
                                        "start": "string",
                                        "end": "string",
                                        "period": "string",
                                        "phase": {
                                            "id": "string",
                                            "label": "string"
                                        },
                                        "impact": {
                                            "value": 0
                                        },
                                        "expectedDuration": {
                                            "description": "string",
                                            "endTime": "string"
                                        },
                                        "summaryAdditionalTravelTime": {
                                            "label": "string",
                                            "shortLabel": "string",
                                            "minimumDurationInMinutes": 0,
                                            "maximumDurationInMinutes": 0
                                        },
                                        "publicationSections": [
                                            {
                                                "section": {
                                                    "stations": [
                                                        {
                                                            "uicCode": "string",
                                                            "stationCode": "string",
                                                            "name": "string",
                                                            "coordinate": {
                                                                "lat": 0,
                                                                "lng": 0
                                                            },
                                                            "countryCode": "string"
                                                        }
                                                    ],
                                                    "direction": "ONE_WAY"
                                                },
                                                "consequence": {
                                                    "section": {
                                                        "stations": [
                                                            {
                                                                "uicCode": "string",
                                                                "stationCode": "string",
                                                                "name": "string",
                                                                "coordinate": {
                                                                    "lat": 0,
                                                                    "lng": 0
                                                                },
                                                                "countryCode": "string"
                                                            }
                                                        ],
                                                        "direction": "ONE_WAY"
                                                    },
                                                    "description": "string",
                                                    "level": "NO_OR_MUCH_LESS_TRAINS"
                                                },
                                                "sectionType": "NL"
                                            }
                                        ],
                                        "timespans": [
                                            {
                                                "start": "string",
                                                "end": "string",
                                                "period": "string",
                                                "situation": {
                                                    "label": "string"
                                                },
                                                "cause": {
                                                    "label": "string"
                                                },
                                                "additionalTravelTime": {
                                                    "label": "string",
                                                    "shortLabel": "string",
                                                    "minimumDurationInMinutes": 0,
                                                    "maximumDurationInMinutes": 0
                                                },
                                                "alternativeTransport": {
                                                    "label": "string",
                                                    "shortLabel": "string"
                                                },
                                                "advices": [
                                                    "string"
                                                ]
                                            }
                                        ],
                                        "alternativeTransportTimespans": [
                                            {
                                                "start": "string",
                                                "end": "string",
                                                "alternativeTransport": {
                                                    "location": [
                                                        {
                                                            "station": {
                                                                "uicCode": "string",
                                                                "stationCode": "string",
                                                                "name": "string",
                                                                "coordinate": {
                                                                    "lat": 0,
                                                                    "lng": 0
                                                                },
                                                                "countryCode": "string"
                                                            },
                                                            "description": "string"
                                                        }
                                                    ],
                                                    "label": "string",
                                                    "shortLabel": "string"
                                                }
                                            }
                                        ]
                                    }
                                ]
                            }
                        }
                    }
                }
            }
        },
        "/api/v3/disruptions/{type}/{id}": {
            "get": {
                "tags": [
                    "Disruptions"
                ],
                "summary": "Single disruption",
                "description": "Returns information on a single disruption/maintenance/calamity",
                "operationId": "getDisruption_v3",
                "parameters": [
                    {
                        "name": "type",
                        "in": "path",
                        "description": "Disruption type for the disruption to return.",
                        "required": true,
                        "schema": {
                            "enum": [
                                "CALAMITY",
                                "DISRUPTION",
                                "MAINTENANCE"
                            ],
                            "type": "string"
                        },
                        "example": "disruption"
                    },
                    {
                        "name": "id",
                        "in": "path",
                        "description": "Unique identifier of the disruption to return. Can be found using the /api/v3/disruptions call",
                        "required": true,
                        "schema": {
                            "type": "string"
                        },
                        "example": 6004123
                    }
                ],
                "responses": {
                    "200": {
                        "description": "The requested disruption",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": "#/components/schemas/DisruptionBase"
                                },
                                "example": {
                                    "id": "string",
                                    "type": "CALAMITY",
                                    "title": "string",
                                    "topic": "string",
                                    "isActive": true,
                                    "registrationTime": "string",
                                    "releaseTime": "string",
                                    "local": true,
                                    "titleSections": [
                                        [
                                            {
                                                "type": "STATION",
                                                "value": "string"
                                            }
                                        ]
                                    ],
                                    "start": "string",
                                    "end": "string",
                                    "period": "string",
                                    "phase": {
                                        "id": "string",
                                        "label": "string"
                                    },
                                    "impact": {
                                        "value": 0
                                    },
                                    "expectedDuration": {
                                        "description": "string",
                                        "endTime": "string"
                                    },
                                    "summaryAdditionalTravelTime": {
                                        "label": "string",
                                        "shortLabel": "string",
                                        "minimumDurationInMinutes": 0,
                                        "maximumDurationInMinutes": 0
                                    },
                                    "publicationSections": [
                                        {
                                            "section": {
                                                "stations": [
                                                    {
                                                        "uicCode": "string",
                                                        "stationCode": "string",
                                                        "name": "string",
                                                        "coordinate": {
                                                            "lat": 0,
                                                            "lng": 0
                                                        },
                                                        "countryCode": "string"
                                                    }
                                                ],
                                                "direction": "ONE_WAY"
                                            },
                                            "consequence": {
                                                "section": {
                                                    "stations": [
                                                        {
                                                            "uicCode": "string",
                                                            "stationCode": "string",
                                                            "name": "string",
                                                            "coordinate": {
                                                                "lat": 0,
                                                                "lng": 0
                                                            },
                                                            "countryCode": "string"
                                                        }
                                                    ],
                                                    "direction": "ONE_WAY"
                                                },
                                                "description": "string",
                                                "level": "NO_OR_MUCH_LESS_TRAINS"
                                            },
                                            "sectionType": "NL"
                                        }
                                    ],
                                    "timespans": [
                                        {
                                            "start": "string",
                                            "end": "string",
                                            "period": "string",
                                            "situation": {
                                                "label": "string"
                                            },
                                            "cause": {
                                                "label": "string"
                                            },
                                            "additionalTravelTime": {
                                                "label": "string",
                                                "shortLabel": "string",
                                                "minimumDurationInMinutes": 0,
                                                "maximumDurationInMinutes": 0
                                            },
                                            "alternativeTransport": {
                                                "label": "string",
                                                "shortLabel": "string"
                                            },
                                            "advices": [
                                                "string"
                                            ]
                                        }
                                    ],
                                    "alternativeTransportTimespans": [
                                        {
                                            "start": "string",
                                            "end": "string",
                                            "alternativeTransport": {
                                                "location": [
                                                    {
                                                        "station": {
                                                            "uicCode": "string",
                                                            "stationCode": "string",
                                                            "name": "string",
                                                            "coordinate": {
                                                                "lat": 0,
                                                                "lng": 0
                                                            },
                                                            "countryCode": "string"
                                                        },
                                                        "description": "string"
                                                    }
                                                ],
                                                "label": "string",
                                                "shortLabel": "string"
                                            }
                                        }
                                    ]
                                }
                            }
                        }
                    },
                    "400": {
                        "description": "Bad request. One or more parameters are invalid",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": "#/components/schemas/APIError"
                                },
                                "example": {
                                    "timestamp": "string",
                                    "code": 0,
                                    "message": "string",
                                    "path": "string",
                                    "exception": "string",
                                    "errors": [
                                        {
                                            "message": "string",
                                            "type": "string",
                                            "lang": "string"
                                        }
                                    ],
                                    "requestId": "string"
                                }
                            }
                        }
                    },
                    "404": {
                        "description": "Disruption not found or wrong type given",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": "#/components/schemas/APIError"
                                },
                                "example": {
                                    "timestamp": "string",
                                    "code": 0,
                                    "message": "string",
                                    "path": "string",
                                    "exception": "string",
                                    "errors": [
                                        {
                                            "message": "string",
                                            "type": "string",
                                            "lang": "string"
                                        }
                                    ],
                                    "requestId": "string"
                                }
                            }
                        }
                    },
                    "500": {
                        "description": "The requested disruption",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": "#/components/schemas/DisruptionBase"
                                },
                                "example": {
                                    "id": "string",
                                    "type": "CALAMITY",
                                    "title": "string",
                                    "topic": "string",
                                    "isActive": true,
                                    "registrationTime": "string",
                                    "releaseTime": "string",
                                    "local": true,
                                    "titleSections": [
                                        [
                                            {
                                                "type": "STATION",
                                                "value": "string"
                                            }
                                        ]
                                    ],
                                    "start": "string",
                                    "end": "string",
                                    "period": "string",
                                    "phase": {
                                        "id": "string",
                                        "label": "string"
                                    },
                                    "impact": {
                                        "value": 0
                                    },
                                    "expectedDuration": {
                                        "description": "string",
                                        "endTime": "string"
                                    },
                                    "summaryAdditionalTravelTime": {
                                        "label": "string",
                                        "shortLabel": "string",
                                        "minimumDurationInMinutes": 0,
                                        "maximumDurationInMinutes": 0
                                    },
                                    "publicationSections": [
                                        {
                                            "section": {
                                                "stations": [
                                                    {
                                                        "uicCode": "string",
                                                        "stationCode": "string",
                                                        "name": "string",
                                                        "coordinate": {
                                                            "lat": 0,
                                                            "lng": 0
                                                        },
                                                        "countryCode": "string"
                                                    }
                                                ],
                                                "direction": "ONE_WAY"
                                            },
                                            "consequence": {
                                                "section": {
                                                    "stations": [
                                                        {
                                                            "uicCode": "string",
                                                            "stationCode": "string",
                                                            "name": "string",
                                                            "coordinate": {
                                                                "lat": 0,
                                                                "lng": 0
                                                            },
                                                            "countryCode": "string"
                                                        }
                                                    ],
                                                    "direction": "ONE_WAY"
                                                },
                                                "description": "string",
                                                "level": "NO_OR_MUCH_LESS_TRAINS"
                                            },
                                            "sectionType": "NL"
                                        }
                                    ],
                                    "timespans": [
                                        {
                                            "start": "string",
                                            "end": "string",
                                            "period": "string",
                                            "situation": {
                                                "label": "string"
                                            },
                                            "cause": {
                                                "label": "string"
                                            },
                                            "additionalTravelTime": {
                                                "label": "string",
                                                "shortLabel": "string",
                                                "minimumDurationInMinutes": 0,
                                                "maximumDurationInMinutes": 0
                                            },
                                            "alternativeTransport": {
                                                "label": "string",
                                                "shortLabel": "string"
                                            },
                                            "advices": [
                                                "string"
                                            ]
                                        }
                                    ],
                                    "alternativeTransportTimespans": [
                                        {
                                            "start": "string",
                                            "end": "string",
                                            "alternativeTransport": {
                                                "location": [
                                                    {
                                                        "station": {
                                                            "uicCode": "string",
                                                            "stationCode": "string",
                                                            "name": "string",
                                                            "coordinate": {
                                                                "lat": 0,
                                                                "lng": 0
                                                            },
                                                            "countryCode": "string"
                                                        },
                                                        "description": "string"
                                                    }
                                                ],
                                                "label": "string",
                                                "shortLabel": "string"
                                            }
                                        }
                                    ]
                                }
                            }
                        }
                    }
                }
            }
        },
        "/api/v3/disruptions": {
            "get": {
                "tags": [
                    "Disruptions"
                ],
                "summary": "Disruptions",
                "description": "List of calamities/disruptions/maintenance.",
                "operationId": "getDisruptions_v3",
                "parameters": [
                    {
                        "name": "type",
                        "in": "query",
                        "description": "Type of the disruptions to be returned. If not present all types will be returned.",
                        "schema": {
                            "type": "array",
                            "items": {
                                "enum": [
                                    "CALAMITY",
                                    "DISRUPTION",
                                    "MAINTENANCE"
                                ],
                                "type": "string"
                            }
                        }
                    },
                    {
                        "name": "isActive",
                        "in": "query",
                        "description": "Flag to filter maintenance to only return active items, i.e. maintenance that is happening right now",
                        "schema": {
                            "type": "boolean",
                            "default": false
                        }
                    },
                    {
                        "name": "Accept-Language",
                        "in": "header",
                        "description": "Language for the disruptions. Defaults to nl. See https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Accept-Language for details. Please note that only the calamities will be translated, as no translation is available for maintenance and disruptions",
                        "schema": {
                            "type": "string"
                        },
                        "example": "nl-NL, nl;q=0.9, en;q=0.8, *;q=0.5"
                    }
                ],
                "responses": {
                    "200": {
                        "description": "A list of disruptions",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "type": "array",
                                    "items": {
                                        "$ref": "#/components/schemas/DisruptionBase"
                                    }
                                },
                                "example": [
                                    {
                                        "id": "string",
                                        "type": "CALAMITY",
                                        "title": "string",
                                        "topic": "string",
                                        "isActive": true,
                                        "registrationTime": "string",
                                        "releaseTime": "string",
                                        "local": true,
                                        "titleSections": [
                                            [
                                                {
                                                    "type": "STATION",
                                                    "value": "string"
                                                }
                                            ]
                                        ],
                                        "start": "string",
                                        "end": "string",
                                        "period": "string",
                                        "phase": {
                                            "id": "string",
                                            "label": "string"
                                        },
                                        "impact": {
                                            "value": 0
                                        },
                                        "expectedDuration": {
                                            "description": "string",
                                            "endTime": "string"
                                        },
                                        "summaryAdditionalTravelTime": {
                                            "label": "string",
                                            "shortLabel": "string",
                                            "minimumDurationInMinutes": 0,
                                            "maximumDurationInMinutes": 0
                                        },
                                        "publicationSections": [
                                            {
                                                "section": {
                                                    "stations": [
                                                        {
                                                            "uicCode": "string",
                                                            "stationCode": "string",
                                                            "name": "string",
                                                            "coordinate": {
                                                                "lat": 0,
                                                                "lng": 0
                                                            },
                                                            "countryCode": "string"
                                                        }
                                                    ],
                                                    "direction": "ONE_WAY"
                                                },
                                                "consequence": {
                                                    "section": {
                                                        "stations": [
                                                            {
                                                                "uicCode": "string",
                                                                "stationCode": "string",
                                                                "name": "string",
                                                                "coordinate": {
                                                                    "lat": 0,
                                                                    "lng": 0
                                                                },
                                                                "countryCode": "string"
                                                            }
                                                        ],
                                                        "direction": "ONE_WAY"
                                                    },
                                                    "description": "string",
                                                    "level": "NO_OR_MUCH_LESS_TRAINS"
                                                },
                                                "sectionType": "NL"
                                            }
                                        ],
                                        "timespans": [
                                            {
                                                "start": "string",
                                                "end": "string",
                                                "period": "string",
                                                "situation": {
                                                    "label": "string"
                                                },
                                                "cause": {
                                                    "label": "string"
                                                },
                                                "additionalTravelTime": {
                                                    "label": "string",
                                                    "shortLabel": "string",
                                                    "minimumDurationInMinutes": 0,
                                                    "maximumDurationInMinutes": 0
                                                },
                                                "alternativeTransport": {
                                                    "label": "string",
                                                    "shortLabel": "string"
                                                },
                                                "advices": [
                                                    "string"
                                                ]
                                            }
                                        ],
                                        "alternativeTransportTimespans": [
                                            {
                                                "start": "string",
                                                "end": "string",
                                                "alternativeTransport": {
                                                    "location": [
                                                        {
                                                            "station": {
                                                                "uicCode": "string",
                                                                "stationCode": "string",
                                                                "name": "string",
                                                                "coordinate": {
                                                                    "lat": 0,
                                                                    "lng": 0
                                                                },
                                                                "countryCode": "string"
                                                            },
                                                            "description": "string"
                                                        }
                                                    ],
                                                    "label": "string",
                                                    "shortLabel": "string"
                                                }
                                            }
                                        ]
                                    }
                                ]
                            }
                        }
                    },
                    "400": {
                        "description": "Bad request. One or more parameters are invalid",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": "#/components/schemas/APIError"
                                },
                                "example": {
                                    "timestamp": "string",
                                    "code": 0,
                                    "message": "string",
                                    "path": "string",
                                    "exception": "string",
                                    "errors": [
                                        {
                                            "message": "string",
                                            "type": "string",
                                            "lang": "string"
                                        }
                                    ],
                                    "requestId": "string"
                                }
                            }
                        }
                    }
                }
            }
        },
        "/api/v2/price": {
            "get": {
                "tags": [
                    "Prices"
                ],
                "summary": "Domestic prices",
                "description": "Returns price information for domestic trips",
                "operationId": "getPrices_1",
                "parameters": [
                    {
                        "name": "fromStation",
                        "in": "query",
                        "description": "NS station code of the origin station",
                        "schema": {
                            "type": "string"
                        },
                        "example": "ut"
                    },
                    {
                        "name": "toStation",
                        "in": "query",
                        "description": "NS Station code of the destination station",
                        "schema": {
                            "type": "string"
                        },
                        "example": "gn"
                    },
                    {
                        "name": "travelClass",
                        "in": "query",
                        "description": "Travel class to return the price for",
                        "schema": {
                            "enum": [
                                "1",
                                "2"
                            ],
                            "type": "string"
                        }
                    },
                    {
                        "name": "travelType",
                        "in": "query",
                        "description": "Return the price for a single or return trip. Defaults to single",
                        "schema": {
                            "enum": [
                                "single",
                                "return"
                            ],
                            "type": "string"
                        }
                    },
                    {
                        "name": "isJointJourney",
                        "in": "query",
                        "description": "Set to true to return the price including joint journey discount",
                        "schema": {
                            "type": "boolean",
                            "default": false
                        }
                    },
                    {
                        "name": "adults",
                        "in": "query",
                        "description": "Format - int32. Number of adults to return the price for. Defaults to 1",
                        "schema": {
                            "type": "integer",
                            "format": "int32",
                            "default": 1
                        }
                    },
                    {
                        "name": "children",
                        "in": "query",
                        "description": "Format - int32. Number of children to return the price for. Defaults to 0",
                        "schema": {
                            "type": "integer",
                            "format": "int32",
                            "default": 0
                        }
                    },
                    {
                        "name": "routeId",
                        "in": "query",
                        "description": "Specific identifier for the route to take between the two stations. This routeId is returned in the /api/v3/trips call.",
                        "schema": {
                            "type": "string"
                        }
                    },
                    {
                        "name": "plannedFromTime",
                        "in": "query",
                        "description": "Format - date-time (as date-time in RFC3339). Planned departure time of the trip. Is used to find the correct route, if multiple routes are possible between the origin and destination station.",
                        "schema": {
                            "type": "string",
                            "format": "date-time"
                        }
                    },
                    {
                        "name": "plannedArrivalTime",
                        "in": "query",
                        "description": "Format - date-time (as date-time in RFC3339). Planned arrival time of the trip. Is used to find the correct route, if multiple routes are possible between the origin and destination station.",
                        "schema": {
                            "type": "string",
                            "format": "date-time"
                        }
                    }
                ],
                "responses": {
                    "200": {
                        "description": "Information about the price to pay given the input parameters",
                        "content": {
                            "*/*": {
                                "schema": {
                                    "$ref": "#/components/schemas/RepresentationResponsePrice"
                                },
                                "examples": {
                                    "default": {
                                        "value": null
                                    }
                                }
                            }
                        }
                    },
                    "400": {
                        "description": "Bad request. One or more parameters are invalid",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": "#/components/schemas/APIError"
                                },
                                "example": {
                                    "timestamp": "string",
                                    "code": 0,
                                    "message": "string",
                                    "path": "string",
                                    "exception": "string",
                                    "errors": [
                                        {
                                            "message": "string",
                                            "type": "string",
                                            "lang": "string"
                                        }
                                    ],
                                    "requestId": "string"
                                }
                            }
                        }
                    },
                    "404": {
                        "description": "Stationcode provided in the parameters could not be found or the price is unknown",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": "#/components/schemas/APIError"
                                },
                                "example": {
                                    "timestamp": "string",
                                    "code": 0,
                                    "message": "string",
                                    "path": "string",
                                    "exception": "string",
                                    "errors": [
                                        {
                                            "message": "string",
                                            "type": "string",
                                            "lang": "string"
                                        }
                                    ],
                                    "requestId": "string"
                                }
                            }
                        }
                    }
                }
            }
        },
        "/api/v2/stations/nearest": {
            "get": {
                "tags": [
                    "Stations"
                ],
                "summary": "Get stations closest to provided coordinates",
                "description": "Get stations closest to provided coordinates",
                "operationId": "getNearestStations",
                "parameters": [
                    {
                        "name": "lat",
                        "in": "query",
                        "description": "lat",
                        "required": true,
                        "schema": {
                            "type": "number"
                        }
                    },
                    {
                        "name": "lng",
                        "in": "query",
                        "description": "lat",
                        "required": true,
                        "schema": {
                            "type": "number"
                        }
                    },
                    {
                        "name": "limit",
                        "in": "query",
                        "description": "Format - int32. limit",
                        "schema": {
                            "type": "integer",
                            "format": "int32",
                            "default": 2
                        }
                    },
                    {
                        "name": "x-caller-id",
                        "in": "header",
                        "schema": {
                            "type": "string"
                        }
                    }
                ],
                "responses": {
                    "200": {
                        "description": "A list of plannable stations closest to provided coordinates",
                        "content": {
                            "*/*": {
                                "schema": {
                                    "$ref": "#/components/schemas/StationResponse"
                                },
                                "examples": {
                                    "default": {
                                        "value": null
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    },
    "components": {
        "schemas": {
            "Coordinate": {
                "required": [
                    "lat",
                    "lng"
                ],
                "type": "object",
                "properties": {
                    "lat": {
                        "type": "number"
                    },
                    "lng": {
                        "type": "number"
                    }
                }
            },
            "Eco": {
                "required": [
                    "co2kg"
                ],
                "type": "object",
                "properties": {
                    "co2kg": {
                        "type": "number",
                        "format": "double"
                    }
                }
            },
            "EticketNotBuyableReason": {
                "required": [
                    "reason"
                ],
                "type": "object",
                "properties": {
                    "reason": {
                        "enum": [
                            "UNKNOWN_PRICE",
                            "TOO_MANY_SEPARATE_PARTS",
                            "TOO_FAR_IN_PAST",
                            "TOO_FAR_IN_FUTURE",
                            "STATION_NOT_OPEN_YET",
                            "TRIP_IS_NOT_DOMESTIC",
                            "VIA_STATION_REQUESTED",
                            "NO_TRAIN_LEGS_IN_TRIP"
                        ],
                        "type": "string"
                    },
                    "description": {
                        "type": "string"
                    }
                }
            },
            "FareLeg": {
                "required": [
                    "destination",
                    "fares",
                    "origin",
                    "productTypes"
                ],
                "type": "object",
                "properties": {
                    "origin": {
                        "$ref": "#/components/schemas/TripOriginDestination"
                    },
                    "destination": {
                        "$ref": "#/components/schemas/TripOriginDestination"
                    },
                    "operator": {
                        "type": "string"
                    },
                    "productTypes": {
                        "type": "array",
                        "items": {
                            "enum": [
                                "TRAIN",
                                "BUS",
                                "TRAM",
                                "METRO",
                                "FERRY",
                                "WALK",
                                "BIKE",
                                "CAR",
                                "TAXI",
                                "SUBWAY",
                                "SHARED_MODALITY",
                                "UNKNOWN"
                            ],
                            "type": "string"
                        }
                    },
                    "fares": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/TripTravelFare"
                        }
                    }
                }
            },
            "FareLegStop": {
                "required": [
                    "varCode"
                ],
                "type": "object",
                "properties": {
                    "varCode": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "name": {
                        "type": "string"
                    }
                }
            },
            "FareRoute": {
                "required": [
                    "destination",
                    "origin"
                ],
                "type": "object",
                "properties": {
                    "routeId": {
                        "type": "string"
                    },
                    "origin": {
                        "$ref": "#/components/schemas/FareLegStop"
                    },
                    "destination": {
                        "$ref": "#/components/schemas/FareLegStop"
                    }
                }
            },
            "JourneyDetailLink": {
                "required": [
                    "link",
                    "type"
                ],
                "type": "object",
                "properties": {
                    "type": {
                        "enum": [
                            "BTM",
                            "TRAIN_XML",
                            "TRAIN_JSON"
                        ],
                        "type": "string"
                    },
                    "link": {
                        "$ref": "#/components/schemas/Link"
                    }
                }
            },
            "JourneyRegistrationParameters": {
                "required": [
                    "bicycleReservationRequired",
                    "searchUrl",
                    "status"
                ],
                "type": "object",
                "properties": {
                    "url": {
                        "type": "string",
                        "format": "uri"
                    },
                    "searchUrl": {
                        "type": "string",
                        "format": "uri"
                    },
                    "status": {
                        "enum": [
                            "REGISTRATION_POSSIBLE",
                            "NOT_AVAILABLE",
                            "DATE_IN_PAST",
                            "DATE_TOO_FAR_FUTURE",
                            "NOT_NECESSARY_OTHER_OPERATOR",
                            "UNKNOWN"
                        ],
                        "type": "string"
                    },
                    "bicycleReservationRequired": {
                        "type": "boolean"
                    },
                    "availability": {
                        "$ref": "#/components/schemas/RegistrationAvailability"
                    }
                }
            },
            "Leg": {
                "required": [
                    "alternativeTransport",
                    "cancelled",
                    "changePossible",
                    "destination",
                    "origin",
                    "reachable",
                    "stops"
                ],
                "type": "object",
                "properties": {
                    "idx": {
                        "type": "string"
                    },
                    "name": {
                        "type": "string"
                    },
                    "travelType": {
                        "enum": [
                            "PUBLIC_TRANSIT",
                            "WALK",
                            "TRANSFER",
                            "BIKE",
                            "CAR",
                            "KISS",
                            "TAXI",
                            "UNKNOWN"
                        ],
                        "type": "string"
                    },
                    "direction": {
                        "type": "string"
                    },
                    "cancelled": {
                        "type": "boolean"
                    },
                    "changePossible": {
                        "type": "boolean"
                    },
                    "alternativeTransport": {
                        "type": "boolean"
                    },
                    "journeyDetailRef": {
                        "type": "string"
                    },
                    "origin": {
                        "$ref": "#/components/schemas/TripOriginDestination"
                    },
                    "destination": {
                        "$ref": "#/components/schemas/TripOriginDestination"
                    },
                    "product": {
                        "$ref": "#/components/schemas/Product"
                    },
                    "sharedModality": {
                        "$ref": "#/components/schemas/SharedModality"
                    },
                    "notes": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/Note"
                        }
                    },
                    "messages": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/Message"
                        }
                    },
                    "stops": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/Stop"
                        }
                    },
                    "steps": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/Step"
                        }
                    },
                    "coordinates": {
                        "type": "array",
                        "items": {
                            "type": "array",
                            "items": {
                                "type": "number",
                                "format": "double"
                            }
                        }
                    },
                    "crowdForecast": {
                        "enum": [
                            "UNKNOWN",
                            "LOW",
                            "MEDIUM",
                            "HIGH"
                        ],
                        "type": "string"
                    },
                    "punctuality": {
                        "type": "number",
                        "format": "double"
                    },
                    "crossPlatformTransfer": {
                        "type": "boolean"
                    },
                    "shorterStock": {
                        "type": "boolean"
                    },
                    "changeCouldBePossible": {
                        "type": "boolean"
                    },
                    "shorterStockWarning": {
                        "type": "string"
                    },
                    "shorterStockClassification": {
                        "enum": [
                            "BUSY",
                            "EXTRA_BUSY"
                        ],
                        "type": "string"
                    },
                    "journeyDetail": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/JourneyDetailLink"
                        }
                    },
                    "reachable": {
                        "type": "boolean"
                    },
                    "plannedDurationInMinutes": {
                        "type": "integer",
                        "format": "int64"
                    },
                    "travelAssistanceDeparture": {
                        "$ref": "#/components/schemas/ServiceBookingInfo"
                    },
                    "travelAssistanceArrival": {
                        "$ref": "#/components/schemas/ServiceBookingInfo"
                    },
                    "overviewPolyLine": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/Coordinate"
                        }
                    }
                }
            },
            "Link": {
                "type": "object",
                "properties": {
                    "title": {
                        "type": "string"
                    },
                    "url": {
                        "type": "string"
                    }
                }
            },
            "Location": {
                "required": [
                    "description",
                    "station"
                ],
                "type": "object",
                "properties": {
                    "station": {
                        "$ref": "#/components/schemas/StationReference"
                    },
                    "description": {
                        "type": "string",
                        "description": "Human readable description of the location of the alternative transport"
                    }
                },
                "description": "Gives more information about the location of the alternative transport"
            },
            "MeetingPointDetails": {
                "required": [
                    "minutesBefore",
                    "name"
                ],
                "type": "object",
                "properties": {
                    "name": {
                        "type": "string"
                    },
                    "minutesBefore": {
                        "type": "integer",
                        "format": "int32"
                    }
                }
            },
            "Message": {
                "type": "object",
                "properties": {
                    "id": {
                        "type": "string"
                    },
                    "externalId": {
                        "type": "string"
                    },
                    "head": {
                        "type": "string"
                    },
                    "text": {
                        "type": "string"
                    },
                    "lead": {
                        "type": "string"
                    },
                    "routeIdxFrom": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "routeIdxTo": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "type": {
                        "enum": [
                            "MAINTENANCE",
                            "DISRUPTION"
                        ],
                        "type": "string"
                    },
                    "nesColor": {
                        "$ref": "#/components/schemas/NesColor"
                    },
                    "startDate": {
                        "type": "string"
                    },
                    "endDate": {
                        "type": "string"
                    },
                    "startTime": {
                        "type": "string"
                    },
                    "endTime": {
                        "type": "string"
                    }
                }
            },
            "NesColor": {
                "required": [
                    "color",
                    "type"
                ],
                "type": "object",
                "properties": {
                    "type": {
                        "enum": [
                            "SUCCESS",
                            "INFORMATIVE",
                            "WARNING",
                            "ERROR",
                            "ERROR_HEAVY"
                        ],
                        "type": "string"
                    },
                    "color": {
                        "type": "string"
                    }
                }
            },
            "Note": {
                "required": [
                    "isPresentationRequired"
                ],
                "type": "object",
                "properties": {
                    "value": {
                        "type": "string"
                    },
                    "key": {
                        "type": "string"
                    },
                    "noteType": {
                        "enum": [
                            "UNKNOWN",
                            "ATTRIBUTE",
                            "INFOTEXT",
                            "REALTIME",
                            "TICKET",
                            "HINT"
                        ],
                        "type": "string"
                    },
                    "priority": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "routeIdxFrom": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "routeIdxTo": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "link": {
                        "$ref": "#/components/schemas/Link"
                    },
                    "isPresentationRequired": {
                        "type": "boolean"
                    },
                    "category": {
                        "enum": [
                            "PLATFORM_INFORMATION",
                            "OVERCHECK_INSTRUCTION",
                            "UNKNOWN"
                        ],
                        "type": "string"
                    }
                }
            },
            "PrimaryMessage": {
                "required": [
                    "icon",
                    "nesColor",
                    "title"
                ],
                "type": "object",
                "properties": {
                    "title": {
                        "type": "string"
                    },
                    "nesColor": {
                        "$ref": "#/components/schemas/NesColor"
                    },
                    "message": {
                        "$ref": "#/components/schemas/Message"
                    },
                    "icon": {
                        "type": "string"
                    }
                },
                "description": "Most important message to display"
            },
            "Product": {
                "required": [
                    "type"
                ],
                "type": "object",
                "properties": {
                    "number": {
                        "type": "string"
                    },
                    "categoryCode": {
                        "type": "string"
                    },
                    "shortCategoryName": {
                        "type": "string"
                    },
                    "longCategoryName": {
                        "type": "string"
                    },
                    "operatorCode": {
                        "type": "string"
                    },
                    "operatorName": {
                        "type": "string"
                    },
                    "operatorAdministrativeCode": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "type": {
                        "enum": [
                            "TRAIN",
                            "BUS",
                            "TRAM",
                            "METRO",
                            "FERRY",
                            "WALK",
                            "BIKE",
                            "CAR",
                            "TAXI",
                            "SUBWAY",
                            "SHARED_MODALITY",
                            "UNKNOWN"
                        ],
                        "type": "string"
                    },
                    "displayName": {
                        "type": "string"
                    }
                }
            },
            "RegistrationAvailability": {
                "required": [
                    "bicycle",
                    "seats"
                ],
                "type": "object",
                "properties": {
                    "seats": {
                        "type": "boolean"
                    },
                    "numberOfSeats": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "bicycle": {
                        "type": "boolean"
                    },
                    "numberOfBicyclePlaces": {
                        "type": "integer",
                        "format": "int32"
                    }
                }
            },
            "SalesOption": {
                "required": [
                    "betterOption",
                    "type"
                ],
                "type": "object",
                "properties": {
                    "type": {
                        "enum": [
                            "EARLY_BOOKING_DISCOUNT",
                            "NS_DEAL_DISCOUNT"
                        ],
                        "type": "string"
                    },
                    "permilleFullTariff": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "priceInCents": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "betterOption": {
                        "type": "boolean"
                    },
                    "recommendationText": {
                        "type": "string"
                    }
                }
            },
            "ServiceBookingInfo": {
                "required": [
                    "canChangeAssistance",
                    "defaultAssistanceValue",
                    "name",
                    "serviceTypeIds",
                    "tripLegIndex"
                ],
                "type": "object",
                "properties": {
                    "name": {
                        "type": "string"
                    },
                    "tripLegIndex": {
                        "type": "string"
                    },
                    "stationUic": {
                        "type": "string"
                    },
                    "serviceTypeIds": {
                        "type": "array",
                        "items": {
                            "type": "string"
                        }
                    },
                    "defaultAssistanceValue": {
                        "type": "boolean"
                    },
                    "canChangeAssistance": {
                        "type": "boolean"
                    },
                    "message": {
                        "type": "string"
                    }
                }
            },
            "SharedModality": {
                "required": [
                    "availability",
                    "nearByMeMapping",
                    "provider"
                ],
                "type": "object",
                "properties": {
                    "provider": {
                        "type": "string"
                    },
                    "name": {
                        "type": "string"
                    },
                    "availability": {
                        "type": "boolean"
                    },
                    "nearByMeMapping": {
                        "enum": [
                            "OV_FIETS",
                            "SHARED_ELECTRICAL_BIKE",
                            "SHARED_BIKE",
                            "SHARED_SCOOTER",
                            "SHARED_CAR",
                            "UNKNOWN"
                        ],
                        "type": "string"
                    },
                    "planIcon": {
                        "type": "string"
                    }
                }
            },
            "Step": {
                "required": [
                    "distanceInMeters",
                    "durationInSeconds",
                    "endLocation",
                    "instructions",
                    "startLocation"
                ],
                "type": "object",
                "properties": {
                    "distanceInMeters": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "durationInSeconds": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "startLocation": {
                        "$ref": "#/components/schemas/Location"
                    },
                    "endLocation": {
                        "$ref": "#/components/schemas/Location"
                    },
                    "instructions": {
                        "type": "string"
                    }
                }
            },
            "Stop": {
                "required": [
                    "borderStop",
                    "cancelled",
                    "notes",
                    "passing"
                ],
                "type": "object",
                "properties": {
                    "uicCode": {
                        "type": "string"
                    },
                    "name": {
                        "type": "string"
                    },
                    "lat": {
                        "type": "number"
                    },
                    "lng": {
                        "type": "number"
                    },
                    "countryCode": {
                        "type": "string"
                    },
                    "notes": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/StopNote"
                        }
                    },
                    "routeIdx": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "departurePrognosisType": {
                        "type": "string"
                    },
                    "plannedDepartureDateTime": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "plannedDepartureTimeZoneOffset": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "actualDepartureDateTime": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "actualDepartureTimeZoneOffset": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "plannedArrivalDateTime": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "plannedArrivalTimeZoneOffset": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "actualArrivalDateTime": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "actualArrivalTimeZoneOffset": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "plannedPassingDateTime": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "actualPassingDateTime": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "arrivalPrognosisType": {
                        "type": "string"
                    },
                    "actualDepartureTrack": {
                        "type": "string"
                    },
                    "plannedDepartureTrack": {
                        "type": "string"
                    },
                    "plannedArrivalTrack": {
                        "type": "string"
                    },
                    "actualArrivalTrack": {
                        "type": "string"
                    },
                    "departureDelayInSeconds": {
                        "type": "integer",
                        "format": "int64"
                    },
                    "arrivalDelayInSeconds": {
                        "type": "integer",
                        "format": "int64"
                    },
                    "cancelled": {
                        "type": "boolean"
                    },
                    "borderStop": {
                        "type": "boolean"
                    },
                    "passing": {
                        "type": "boolean"
                    },
                    "quayCode": {
                        "type": "string"
                    }
                }
            },
            "StopNote": {
                "required": [
                    "type",
                    "value"
                ],
                "type": "object",
                "properties": {
                    "value": {
                        "type": "string"
                    },
                    "key": {
                        "type": "string"
                    },
                    "type": {
                        "enum": [
                            "U",
                            "A",
                            "I",
                            "R",
                            "H"
                        ],
                        "type": "string"
                    },
                    "priority": {
                        "type": "integer",
                        "format": "int32"
                    }
                }
            },
            "TravelAdvice": {
                "required": [
                    "source",
                    "trips"
                ],
                "type": "object",
                "properties": {
                    "source": {
                        "enum": [
                            "HARP",
                            "NEGENTWEE",
                            "GOOGLE",
                            "PAS"
                        ],
                        "type": "string",
                        "description": "Source system that has generated these travel advices"
                    },
                    "trips": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/Trip"
                        },
                        "description": "List of trips"
                    },
                    "scrollRequestBackwardContext": {
                        "type": "string",
                        "description": "Scroll context to use when scrolling back in time. Can be used in scrollContext query parameter"
                    },
                    "scrollRequestForwardContext": {
                        "type": "string",
                        "description": "Scroll context to use when scrolling forward in time. Can be used in scrollContext query parameter"
                    },
                    "message": {
                        "type": "string",
                        "description": "Optional message indicating why the list of trips is empty."
                    }
                }
            },
            "TravelAssistanceInfo": {
                "required": [
                    "isAssistanceRequired",
                    "tripRequestId"
                ],
                "type": "object",
                "properties": {
                    "termsAndConditionsLink": {
                        "type": "string",
                        "format": "url"
                    },
                    "tripRequestId": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "isAssistanceRequired": {
                        "type": "boolean"
                    }
                }
            },
            "Trip": {
                "required": [
                    "ctxRecon",
                    "legs",
                    "optimal",
                    "realtime",
                    "status",
                    "transfers",
                    "type",
                    "uid"
                ],
                "type": "object",
                "properties": {
                    "uid": {
                        "type": "string",
                        "description": "Unique identifier for this trip"
                    },
                    "ctxRecon": {
                        "type": "string",
                        "description": "Reconstruction context for this trip. Can be used to reconstruct this exact trip with the v3/trips/trip endpoint"
                    },
                    "plannedDurationInMinutes": {
                        "type": "integer",
                        "description": "Planned duration of this trip in minutes",
                        "format": "int64"
                    },
                    "actualDurationInMinutes": {
                        "type": "integer",
                        "description": "Actual duration of this trip in minutes, or the planned duration if no realtime information about this trip is available.",
                        "format": "int64"
                    },
                    "transfers": {
                        "type": "integer",
                        "description": "Number of public transit transfers",
                        "format": "int32"
                    },
                    "status": {
                        "enum": [
                            "CANCELLED",
                            "CHANGE_NOT_POSSIBLE",
                            "ALTERNATIVE_TRANSPORT",
                            "DISRUPTION",
                            "MAINTENANCE",
                            "UNCERTAIN",
                            "REPLACEMENT",
                            "ADDITIONAL",
                            "SPECIAL",
                            "NORMAL"
                        ],
                        "type": "string",
                        "description": "Status of this trip"
                    },
                    "primaryMessage": {
                        "$ref": "#/components/schemas/PrimaryMessage"
                    },
                    "messages": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/Message"
                        },
                        "description": "List of messages regarding maintenance or disruption that influences this trip."
                    },
                    "legs": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/Leg"
                        }
                    },
                    "overviewPolyLine": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/Coordinate"
                        }
                    },
                    "crowdForecast": {
                        "enum": [
                            "UNKNOWN",
                            "LOW",
                            "MEDIUM",
                            "HIGH"
                        ],
                        "type": "string"
                    },
                    "punctuality": {
                        "type": "number",
                        "format": "double"
                    },
                    "optimal": {
                        "type": "boolean",
                        "description": "Whether or not this trip is regarded the best possible option of all returned trips"
                    },
                    "fareRoute": {
                        "$ref": "#/components/schemas/FareRoute"
                    },
                    "fares": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/TripSalesFare"
                        }
                    },
                    "fareLegs": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/FareLeg"
                        }
                    },
                    "productFare": {
                        "$ref": "#/components/schemas/TripTravelFare"
                    },
                    "fareOptions": {
                        "$ref": "#/components/schemas/TripFareOptions"
                    },
                    "bookingUrl": {
                        "$ref": "#/components/schemas/Link"
                    },
                    "type": {
                        "enum": [
                            "NS",
                            "NS_ACCESSIBLE",
                            "NEGENTWEE",
                            "GOOGLE",
                            "PAS"
                        ],
                        "type": "string"
                    },
                    "shareUrl": {
                        "$ref": "#/components/schemas/Link"
                    },
                    "realtime": {
                        "type": "boolean"
                    },
                    "travelAssistanceInfo": {
                        "$ref": "#/components/schemas/TravelAssistanceInfo"
                    },
                    "routeId": {
                        "type": "string"
                    },
                    "registerJourney": {
                        "$ref": "#/components/schemas/JourneyRegistrationParameters"
                    },
                    "eco": {
                        "$ref": "#/components/schemas/Eco"
                    }
                }
            },
            "TripFareOptions": {
                "required": [
                    "isEticketBuyable",
                    "isInternational",
                    "isInternationalBookable",
                    "isPossibleWithOvChipkaart",
                    "isTotalPriceUnknown"
                ],
                "type": "object",
                "properties": {
                    "isInternationalBookable": {
                        "type": "boolean"
                    },
                    "isInternational": {
                        "type": "boolean"
                    },
                    "isEticketBuyable": {
                        "type": "boolean"
                    },
                    "isPossibleWithOvChipkaart": {
                        "type": "boolean"
                    },
                    "isTotalPriceUnknown": {
                        "type": "boolean"
                    },
                    "supplementsBasedOnSelectedFare": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/TripFareSupplement"
                        }
                    },
                    "reasonEticketNotBuyable": {
                        "$ref": "#/components/schemas/EticketNotBuyableReason"
                    },
                    "salesOptions": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/SalesOption"
                        }
                    }
                }
            },
            "TripFareSupplement": {
                "required": [
                    "supplementPriceInCents"
                ],
                "type": "object",
                "properties": {
                    "supplementPriceInCents": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "legIdx": {
                        "type": "string"
                    },
                    "fromUICCode": {
                        "type": "string"
                    },
                    "toUICCode": {
                        "type": "string"
                    },
                    "link": {
                        "$ref": "#/components/schemas/Link"
                    }
                }
            },
            "TripOriginDestination": {
                "type": "object",
                "properties": {
                    "name": {
                        "type": "string"
                    },
                    "lng": {
                        "type": "number"
                    },
                    "lat": {
                        "type": "number"
                    },
                    "city": {
                        "type": "string"
                    },
                    "countryCode": {
                        "type": "string"
                    },
                    "uicCode": {
                        "type": "string"
                    },
                    "type": {
                        "enum": [
                            "STATION",
                            "ADDRESS",
                            "POINT_OF_INTEREST"
                        ],
                        "type": "string"
                    },
                    "prognosisType": {
                        "type": "string"
                    },
                    "plannedTimeZoneOffset": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "plannedDateTime": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "actualTimeZoneOffset": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "actualDateTime": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "plannedTrack": {
                        "type": "string"
                    },
                    "actualTrack": {
                        "type": "string"
                    },
                    "exitSide": {
                        "enum": [
                            "LEFT",
                            "RIGHT",
                            "UNKNOWN"
                        ],
                        "type": "string"
                    },
                    "checkinStatus": {
                        "enum": [
                            "CHECKIN",
                            "CHECKOUT",
                            "OVERCHECK",
                            "DETOUR",
                            "REQUIRED_CHECK_OUT_IN",
                            "NOTHING"
                        ],
                        "type": "string"
                    },
                    "travelAssistanceBookingInfo": {
                        "$ref": "#/components/schemas/ServiceBookingInfo"
                    },
                    "travelAssistanceMeetingPoints": {
                        "type": "array",
                        "items": {
                            "type": "string"
                        }
                    },
                    "travelAssistanceMeetingPointDetails": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/MeetingPointDetails"
                        }
                    },
                    "notes": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/Note"
                        }
                    },
                    "quayCode": {
                        "type": "string"
                    }
                }
            },
            "TripSalesFare": {
                "type": "object",
                "properties": {
                    "priceInCents": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "product": {
                        "enum": [
                            "OVCHIPKAART_ENKELE_REIS",
                            "OVCHIPKAART_RETOUR",
                            "TRAJECT_VRIJ_MAAND",
                            "TRAJECT_VRIJ_JAAR",
                            "BUSINESS_CARD_TRAJECT_VRIJ_JAAR",
                            "ETICKET_ENKELE_REIS",
                            "ETICKET_RETOUR",
                            "ETICKET_JOINT_JOURNEY_DISCOUNT_RETOUR",
                            "ETICKET_JOINT_JOURNEY_DISCOUNT_ENKELE_REIS",
                            "EARLY_BOOKING_DISCOUNT_ENKELE_REIS",
                            "EARLY_BOOKING_DISCOUNT_RETOUR",
                            "GROUP_OFF_PEAK",
                            "NS_DEAL_DISCOUNT_ENKELE_REIS",
                            "RAILRUNNER",
                            "ICE_SUPPLEMENT",
                            "ICD_SUPPLEMENT",
                            "NSI"
                        ],
                        "type": "string"
                    },
                    "travelClass": {
                        "enum": [
                            "FIRST_CLASS",
                            "SECOND_CLASS"
                        ],
                        "type": "string"
                    },
                    "priceInCentsExcludingSupplement": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "discountType": {
                        "enum": [
                            "NO_DISCOUNT",
                            "DISCOUNT_20_PERCENT",
                            "DISCOUNT_40_PERCENT",
                            "NO_CHARGE",
                            "OTHER"
                        ],
                        "type": "string"
                    },
                    "supplementInCents": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "link": {
                        "type": "string"
                    }
                }
            },
            "TripTravelFare": {
                "required": [
                    "discountType"
                ],
                "type": "object",
                "properties": {
                    "priceInCents": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "priceInCentsExcludingSupplement": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "supplementInCents": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "buyableTicketPriceInCents": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "buyableTicketPriceInCentsExcludingSupplement": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "buyableTicketSupplementPriceInCents": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "product": {
                        "enum": [
                            "GEEN",
                            "OVCHIPKAART_ENKELE_REIS",
                            "OVCHIPKAART_RETOUR",
                            "DAL_VOORDEEL",
                            "ALTIJD_VOORDEEL",
                            "DAL_VRIJ",
                            "WEEKEND_VRIJ",
                            "ALTIJD_VRIJ",
                            "BUSINESSCARD",
                            "BUSINESSCARD_DAL",
                            "STUDENT_WEEK",
                            "STUDENT_WEEKEND",
                            "VDU",
                            "SAMENREISKORTING",
                            "TRAJECT_VRIJ"
                        ],
                        "type": "string"
                    },
                    "travelClass": {
                        "enum": [
                            "FIRST_CLASS",
                            "SECOND_CLASS"
                        ],
                        "type": "string"
                    },
                    "discountType": {
                        "enum": [
                            "NO_DISCOUNT",
                            "DISCOUNT_20_PERCENT",
                            "DISCOUNT_40_PERCENT",
                            "NO_CHARGE",
                            "OTHER"
                        ],
                        "type": "string"
                    },
                    "link": {
                        "type": "string"
                    }
                }
            },
            "APIError": {
                "required": [
                    "code",
                    "message",
                    "path",
                    "requestId",
                    "timestamp"
                ],
                "type": "object",
                "properties": {
                    "timestamp": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "code": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "message": {
                        "type": "string"
                    },
                    "path": {
                        "type": "string"
                    },
                    "exception": {
                        "type": "string"
                    },
                    "errors": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/LocalizedErrorDetail"
                        }
                    },
                    "requestId": {
                        "type": "string"
                    }
                }
            },
            "LocalizedErrorDetail": {
                "required": [
                    "lang",
                    "message",
                    "type"
                ],
                "type": "object",
                "properties": {
                    "message": {
                        "type": "string"
                    },
                    "type": {
                        "type": "string"
                    },
                    "lang": {
                        "type": "string"
                    }
                }
            },
            "PriceV3": {
                "required": [
                    "conditionsHeader",
                    "discountType",
                    "displayName",
                    "isBestOption",
                    "isSelectable",
                    "pricePerAdultInCents",
                    "pricePerChildInCents",
                    "productId",
                    "totalPriceInCents",
                    "travelClass",
                    "travelProducts"
                ],
                "type": "object",
                "properties": {
                    "totalPriceInCents": {
                        "type": "integer",
                        "description": "Total price",
                        "format": "int32"
                    },
                    "pricePerAdultInCents": {
                        "type": "integer",
                        "description": "Price per adult",
                        "format": "int32"
                    },
                    "discountInCents": {
                        "type": "integer",
                        "description": "Discount price compared to total price without any discount",
                        "format": "int32"
                    },
                    "operatorName": {
                        "type": "string",
                        "description": "Name of the operator"
                    },
                    "discountType": {
                        "enum": [
                            "NONE",
                            "EARLY_BOOKING",
                            "GROUP",
                            "JOINT_JOURNEY",
                            "RAILRUNNER",
                            "NS_DEAL"
                        ],
                        "type": "string",
                        "description": "Type of discount"
                    },
                    "travelClass": {
                        "enum": [
                            "FIRST_CLASS",
                            "SECOND_CLASS"
                        ],
                        "type": "string",
                        "description": "Traveling class"
                    },
                    "travelProducts": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/Unit"
                        },
                        "description": "Travel products types"
                    },
                    "isSelectable": {
                        "type": "boolean",
                        "description": "Denotes if the user can select this option"
                    },
                    "displayName": {
                        "type": "string",
                        "description": "Display name of product"
                    },
                    "conditionsHeader": {
                        "type": "string",
                        "description": "Header of conditions"
                    },
                    "conditionsText": {
                        "type": "string",
                        "description": "Conditions of product"
                    },
                    "conditionsUrl": {
                        "type": "string",
                        "description": "Url to webpage with common conditions"
                    },
                    "productId": {
                        "type": "string",
                        "description": "Product ID used to buy ticket"
                    },
                    "isBestOption": {
                        "type": "boolean",
                        "description": "Indicates if this price is the best option for client"
                    },
                    "pricePerChildInCents": {
                        "type": "integer",
                        "description": "Price per child",
                        "format": "int32"
                    }
                }
            },
            "PricesResponseV3": {
                "required": [
                    "prices"
                ],
                "type": "object",
                "properties": {
                    "prices": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/PriceV3"
                        }
                    }
                }
            },
            "RepresentationResponsePricesResponseV3": {
                "required": [
                    "payload"
                ],
                "type": "object",
                "properties": {
                    "payload": {
                        "$ref": "#/components/schemas/PricesResponseV3"
                    },
                    "links": {
                        "type": "object",
                        "additionalProperties": {
                            "$ref": "#/components/schemas/Link"
                        }
                    },
                    "meta": {
                        "type": "object",
                        "additionalProperties": {
                            "type": "object"
                        }
                    }
                }
            },
            "Unit": {
                "type": "object",
                "description": "Travel products types"
            },
            "AdditionalTravelTime": {
                "required": [
                    "label"
                ],
                "type": "object",
                "properties": {
                    "label": {
                        "type": "string",
                        "description": "Human readable description of the additional travel time that is expected"
                    },
                    "shortLabel": {
                        "type": "string",
                        "description": "Short human readable description of the additional travel time that is expected"
                    },
                    "minimumDurationInMinutes": {
                        "type": "integer",
                        "description": "Minimum expected additional travel time in minutes",
                        "format": "int64"
                    },
                    "maximumDurationInMinutes": {
                        "type": "integer",
                        "description": "Maximum expected additional travel time in minutes",
                        "format": "int64"
                    }
                },
                "description": "Information about the cause of the additional travel time that is expected"
            },
            "AlternativeTransport": {
                "required": [
                    "label",
                    "location"
                ],
                "type": "object",
                "properties": {
                    "location": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/Location"
                        },
                        "description": "Gives more information about the location of the alternative transport"
                    },
                    "label": {
                        "type": "string",
                        "description": "Human readable description of the alternative transport that is available to the user"
                    },
                    "shortLabel": {
                        "type": "string",
                        "description": "Short label indicating the alternative transport that is available to the user"
                    }
                },
                "description": "Information about the alternative transport that is available to the user"
            },
            "AlternativeTransportSummary": {
                "required": [
                    "label"
                ],
                "type": "object",
                "properties": {
                    "label": {
                        "type": "string",
                        "description": "Human readable description of the alternative transport that is available to the user"
                    },
                    "shortLabel": {
                        "type": "string",
                        "description": "Short label indicating the alternative transport that is available to the user"
                    }
                },
                "description": "Information about the cause of the alternative transport that is available to the user"
            },
            "AlternativeTransportTimespan": {
                "required": [
                    "alternativeTransport",
                    "start"
                ],
                "type": "object",
                "properties": {
                    "start": {
                        "type": "string",
                        "description": "Start time of this timespan",
                        "format": "date-time"
                    },
                    "end": {
                        "type": "string",
                        "description": "End time of this timespan",
                        "format": "date-time"
                    },
                    "alternativeTransport": {
                        "$ref": "#/components/schemas/AlternativeTransport"
                    }
                },
                "description": "Distinguishable timespans for alternative transport within this disruption."
            },
            "BodyItem": {
                "required": [
                    "content",
                    "type"
                ],
                "type": "object",
                "oneOf": [
                    {
                        "$ref": "#/components/schemas/TextBodyItem"
                    },
                    {
                        "$ref": "#/components/schemas/LinksBodyItem"
                    },
                    {
                        "$ref": "#/components/schemas/DownloadsBodyItem"
                    }
                ],
                "properties": {
                    "title": {
                        "type": "string"
                    },
                    "type": {
                        "enum": [
                            "TEXT",
                            "DOWNLOADS",
                            "LINKS"
                        ],
                        "type": "string"
                    },
                    "content": {
                        "$ref": "#/components/schemas/BodyItemContent"
                    }
                },
                "description": "Body items to render when showing this calamity",
                "discriminator": {
                    "propertyName": "type",
                    "mapping": {
                        "TEXT": "#/components/schemas/TextBodyItem",
                        "LINKS": "#/components/schemas/LinksBodyItem",
                        "DOWNLOADS": "#/components/schemas/DownloadsBodyItem"
                    }
                }
            },
            "BodyItemContent": {
                "type": "object"
            },
            "Button": {
                "type": "object",
                "properties": {
                    "label": {
                        "type": "string"
                    },
                    "type": {
                        "enum": [
                            "PLANNER",
                            "DISRUPTIONS",
                            "MAINTENANCE",
                            "EXTERNAL"
                        ],
                        "type": "string"
                    },
                    "accessibilityLabel": {
                        "type": "string"
                    },
                    "url": {
                        "type": "string"
                    }
                }
            },
            "Buttons": {
                "required": [
                    "items",
                    "position"
                ],
                "type": "object",
                "properties": {
                    "position": {
                        "type": "array",
                        "items": {
                            "enum": [
                                "TOP",
                                "BOTTOM"
                            ],
                            "type": "string"
                        }
                    },
                    "items": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/Button"
                        }
                    }
                },
                "description": "Buttons to render when showing this calamity"
            },
            "Calamity": {
                "required": [
                    "bodyItems",
                    "buttons",
                    "id",
                    "isActive",
                    "priority",
                    "title",
                    "type"
                ],
                "type": "object",
                "properties": {
                    "id": {
                        "type": "string",
                        "description": "Unique identifier of the calamity"
                    },
                    "title": {
                        "type": "string",
                        "description": "Title of the calamity"
                    },
                    "topic": {
                        "type": "string",
                        "description": "Topic to subscribe to in order to receive updates for this disruption."
                    },
                    "description": {
                        "type": "string",
                        "description": "Human readable description for this calamity"
                    },
                    "priority": {
                        "enum": [
                            "PRIO_1",
                            "PRIO_2",
                            "PRIO_3"
                        ],
                        "type": "string",
                        "description": "Priority for this calamity"
                    },
                    "lastUpdated": {
                        "type": "string",
                        "description": "Moment that this calamity was last updated",
                        "format": "date-time"
                    },
                    "expectedNextUpdate": {
                        "type": "string",
                        "description": "Expected moment that this calamity will be updated",
                        "format": "date-time"
                    },
                    "bodyItems": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/BodyItem"
                        },
                        "description": "Body items to render when showing this calamity"
                    },
                    "buttons": {
                        "$ref": "#/components/schemas/Buttons"
                    },
                    "url": {
                        "type": "string",
                        "description": "URL for more information about this calamity",
                        "format": "uri"
                    },
                    "type": {
                        "enum": [
                            "CALAMITY",
                            "DISRUPTION",
                            "MAINTENANCE"
                        ],
                        "type": "string"
                    },
                    "isActive": {
                        "type": "boolean"
                    }
                }
            },
            "Cause": {
                "required": [
                    "label"
                ],
                "type": "object",
                "properties": {
                    "label": {
                        "type": "string",
                        "description": "Human readable description of the cause of the disruption"
                    }
                },
                "description": "Information about the cause of the disruption in this timespan"
            },
            "Disruption": {
                "required": [
                    "alternativeTransportTimespans",
                    "id",
                    "isActive",
                    "local",
                    "publicationSections",
                    "start",
                    "timespans",
                    "title",
                    "titleSections",
                    "type"
                ],
                "type": "object",
                "properties": {
                    "id": {
                        "type": "string",
                        "description": "Unique identifier of the disruption"
                    },
                    "type": {
                        "enum": [
                            "CALAMITY",
                            "DISRUPTION",
                            "MAINTENANCE"
                        ],
                        "type": "string",
                        "description": "Type of disruption"
                    },
                    "registrationTime": {
                        "type": "string",
                        "description": "Registration time of this disruption",
                        "format": "date-time"
                    },
                    "releaseTime": {
                        "type": "string",
                        "description": "Release time of this disruption",
                        "format": "date-time"
                    },
                    "local": {
                        "type": "boolean",
                        "description": "A local disruption has messages tailored towards a specific station."
                    },
                    "title": {
                        "type": "string",
                        "description": "Title of the disruption, containing the location(s) of the disruption"
                    },
                    "titleSections": {
                        "type": "array",
                        "items": {
                            "type": "array",
                            "items": {
                                "$ref": "#/components/schemas/TitleSection"
                            },
                            "description": "Title of the disruption which includes where the disruption takes place. For example: Utrecht - Gouda -Icon- Den Haag"
                        },
                        "description": "Title of the disruption which includes where the disruption takes place. For example: Utrecht - Gouda -Icon- Den Haag"
                    },
                    "topic": {
                        "type": "string",
                        "description": "Topic to subscribe to in order to receive updates for this disruption."
                    },
                    "isActive": {
                        "type": "boolean",
                        "description": "Whether or not this item is active, i.e. it is currently happening. For example maintenance that starts in the future has this property set to false"
                    },
                    "start": {
                        "type": "string",
                        "description": "Start time of the disruption",
                        "format": "date-time"
                    },
                    "end": {
                        "type": "string",
                        "description": "End time of the disruption. May be left empty if unknown",
                        "format": "date-time"
                    },
                    "period": {
                        "type": "string",
                        "description": "Human readable description of the period for this disruption"
                    },
                    "phase": {
                        "$ref": "#/components/schemas/Phase"
                    },
                    "impact": {
                        "$ref": "#/components/schemas/Impact"
                    },
                    "expectedDuration": {
                        "$ref": "#/components/schemas/ExpectedDuration"
                    },
                    "summaryAdditionalTravelTime": {
                        "$ref": "#/components/schemas/AdditionalTravelTime"
                    },
                    "publicationSections": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/PublicationSection"
                        },
                        "description": "Publication sections for this disruptions. Please note that these may be larger than the actual\ntrack sections where the disruption is. This has to do with stations being recognizable for the customer.\nFor example, there could be a disruption between Utrecht Vaartse Rijn and Bunnik. In that case, the\ntrajectory could be Utrecht Centraal to Driebergen-Zeist, as most customers do not know where Utrecht Vaartse\nRijn and Bunnik are. In this case, the trajectory will contain Utrecht Centraal to Driebergen-Zeist, whereas\nthe disruptedTrackSection will contain Utrecht Vaartse Rijn to Bunnik"
                    },
                    "timespans": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/Timespan"
                        },
                        "description": "Distinguishable timespans within this disruption. Multiple timespans may occur for maintenance."
                    },
                    "alternativeTransportTimespans": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/AlternativeTransportTimespan"
                        },
                        "description": "Distinguishable timespans for alternative transport within this disruption."
                    }
                }
            },
            "DisruptionBase": {
                "required": [
                    "id",
                    "isActive",
                    "title",
                    "type"
                ],
                "type": "object",
                "oneOf": [
                    {
                        "$ref": "#/components/schemas/Disruption"
                    },
                    {
                        "$ref": "#/components/schemas/Calamity"
                    }
                ],
                "properties": {
                    "id": {
                        "type": "string",
                        "description": "Unique identifier of the disruption"
                    },
                    "type": {
                        "enum": [
                            "CALAMITY",
                            "DISRUPTION",
                            "MAINTENANCE"
                        ],
                        "type": "string",
                        "description": "Type of disruption"
                    },
                    "title": {
                        "type": "string",
                        "description": "Title of the disruption, containing the location(s) of the disruption"
                    },
                    "topic": {
                        "type": "string",
                        "description": "Topic to subscribe to in order to receive updates for this disruption."
                    },
                    "isActive": {
                        "type": "boolean",
                        "description": "Whether or not this item is active, i.e. it is currently happening. For example maintenance that starts in the future has this property set to false"
                    }
                },
                "discriminator": {
                    "propertyName": "type",
                    "mapping": {
                        "DISRUPTION": "#/components/schemas/Disruption",
                        "MAINTENANCE": "#/components/schemas/Disruption",
                        "CALAMITY": "#/components/schemas/Calamity"
                    }
                }
            },
            "DisruptionConsequence": {
                "required": [
                    "level",
                    "section"
                ],
                "type": "object",
                "properties": {
                    "section": {
                        "$ref": "#/components/schemas/Section"
                    },
                    "description": {
                        "type": "string"
                    },
                    "level": {
                        "enum": [
                            "NO_OR_MUCH_LESS_TRAINS",
                            "LESS_TRAINS",
                            "NORMAL_OR_MORE_TRAINS"
                        ],
                        "type": "string"
                    }
                }
            },
            "Download": {
                "required": [
                    "contentLength"
                ],
                "type": "object",
                "properties": {
                    "title": {
                        "type": "string"
                    },
                    "url": {
                        "type": "string"
                    },
                    "contentLength": {
                        "type": "integer",
                        "format": "int64"
                    },
                    "mimeType": {
                        "type": "string"
                    },
                    "lastModified": {
                        "type": "string",
                        "format": "date-time"
                    }
                }
            },
            "DownloadsBodyItem": {
                "required": [
                    "content",
                    "type"
                ],
                "type": "object",
                "properties": {
                    "title": {
                        "type": "string"
                    },
                    "content": {
                        "$ref": "#/components/schemas/DownloadsBodyItemContent"
                    },
                    "type": {
                        "enum": [
                            "TEXT",
                            "DOWNLOADS",
                            "LINKS"
                        ],
                        "type": "string"
                    }
                }
            },
            "DownloadsBodyItemContent": {
                "required": [
                    "downloads"
                ],
                "type": "object",
                "properties": {
                    "downloads": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/Download"
                        }
                    }
                }
            },
            "ExpectedDuration": {
                "required": [
                    "description"
                ],
                "type": "object",
                "properties": {
                    "description": {
                        "type": "string",
                        "description": "Human readable description of the expected duration of the disruption."
                    },
                    "endTime": {
                        "type": "string",
                        "description": "Expected end time for this disruption",
                        "format": "date-time"
                    }
                },
                "description": "Information on the expected duration for this disruption. Is empty for maintenance"
            },
            "Impact": {
                "required": [
                    "value"
                ],
                "type": "object",
                "properties": {
                    "value": {
                        "type": "integer",
                        "format": "int32"
                    }
                },
                "description": "Impact of the disruption, from 0 - 5"
            },
            "LinksBodyItem": {
                "required": [
                    "content",
                    "type"
                ],
                "type": "object",
                "properties": {
                    "title": {
                        "type": "string"
                    },
                    "content": {
                        "$ref": "#/components/schemas/LinksBodyItemContent"
                    },
                    "type": {
                        "enum": [
                            "TEXT",
                            "DOWNLOADS",
                            "LINKS"
                        ],
                        "type": "string"
                    }
                }
            },
            "LinksBodyItemContent": {
                "required": [
                    "links"
                ],
                "type": "object",
                "properties": {
                    "links": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/Link"
                        }
                    }
                }
            },
            "Phase": {
                "required": [
                    "id",
                    "label"
                ],
                "type": "object",
                "properties": {
                    "id": {
                        "type": "string"
                    },
                    "label": {
                        "type": "string"
                    }
                },
                "description": "Phase of the disruption"
            },
            "PublicationSection": {
                "required": [
                    "section",
                    "sectionType"
                ],
                "type": "object",
                "properties": {
                    "section": {
                        "$ref": "#/components/schemas/Section"
                    },
                    "consequence": {
                        "$ref": "#/components/schemas/DisruptionConsequence"
                    },
                    "sectionType": {
                        "enum": [
                            "NL",
                            "NEIGHBORING_COUNTRY",
                            "HSL",
                            "INTERNATIONAL"
                        ],
                        "type": "string"
                    }
                },
                "description": "Publication sections for this disruptions. Please note that these may be larger than the actual\ntrack sections where the disruption is. This has to do with stations being recognizable for the customer.\nFor example, there could be a disruption between Utrecht Vaartse Rijn and Bunnik. In that case, the\ntrajectory could be Utrecht Centraal to Driebergen-Zeist, as most customers do not know where Utrecht Vaartse\nRijn and Bunnik are. In this case, the trajectory will contain Utrecht Centraal to Driebergen-Zeist, whereas\nthe disruptedTrackSection will contain Utrecht Vaartse Rijn to Bunnik"
            },
            "Section": {
                "required": [
                    "direction",
                    "stations"
                ],
                "type": "object",
                "properties": {
                    "stations": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/StationReference"
                        }
                    },
                    "direction": {
                        "enum": [
                            "ONE_WAY",
                            "BOTH"
                        ],
                        "type": "string"
                    }
                }
            },
            "Situation": {
                "required": [
                    "label"
                ],
                "type": "object",
                "properties": {
                    "label": {
                        "type": "string",
                        "description": "Human readable description of the situation caused by the disruption"
                    }
                },
                "description": "Information about the situation caused by the disruption"
            },
            "StationReference": {
                "required": [
                    "countryCode",
                    "name",
                    "uicCode"
                ],
                "type": "object",
                "properties": {
                    "uicCode": {
                        "type": "string"
                    },
                    "stationCode": {
                        "type": "string"
                    },
                    "name": {
                        "type": "string"
                    },
                    "coordinate": {
                        "$ref": "#/components/schemas/Coordinate"
                    },
                    "countryCode": {
                        "type": "string"
                    }
                },
                "description": "Gives information about the station the alternative transport belongs to"
            },
            "TextBodyItem": {
                "required": [
                    "content",
                    "type"
                ],
                "type": "object",
                "properties": {
                    "title": {
                        "type": "string"
                    },
                    "content": {
                        "$ref": "#/components/schemas/TextBodyItemContent"
                    },
                    "type": {
                        "enum": [
                            "TEXT",
                            "DOWNLOADS",
                            "LINKS"
                        ],
                        "type": "string"
                    }
                }
            },
            "TextBodyItemContent": {
                "type": "object",
                "properties": {
                    "text": {
                        "type": "string"
                    }
                }
            },
            "Timespan": {
                "required": [
                    "advices",
                    "situation",
                    "start"
                ],
                "type": "object",
                "properties": {
                    "start": {
                        "type": "string",
                        "description": "Start time of this timespan",
                        "format": "date-time"
                    },
                    "end": {
                        "type": "string",
                        "description": "End time of this timespan. May be left empty if unknown",
                        "format": "date-time"
                    },
                    "period": {
                        "type": "string",
                        "description": "Human readable description of the period for this disruption"
                    },
                    "situation": {
                        "$ref": "#/components/schemas/Situation"
                    },
                    "cause": {
                        "$ref": "#/components/schemas/Cause"
                    },
                    "additionalTravelTime": {
                        "$ref": "#/components/schemas/AdditionalTravelTime"
                    },
                    "alternativeTransport": {
                        "$ref": "#/components/schemas/AlternativeTransportSummary"
                    },
                    "advices": {
                        "type": "array",
                        "items": {
                            "type": "string",
                            "description": "List of advices"
                        },
                        "description": "List of advices"
                    }
                },
                "description": "Distinguishable timespans within this disruption. Multiple timespans may occur for maintenance."
            },
            "TitleSection": {
                "required": [
                    "type",
                    "value"
                ],
                "type": "object",
                "properties": {
                    "type": {
                        "enum": [
                            "STATION",
                            "ICON"
                        ],
                        "type": "string"
                    },
                    "value": {
                        "type": "string"
                    }
                },
                "description": "Title of the disruption which includes where the disruption takes place. For example: Utrecht - Gouda -Icon- Den Haag"
            },
            "NearbyMeLocationId": {
                "required": [
                    "type",
                    "value"
                ],
                "type": "object",
                "properties": {
                    "value": {
                        "type": "string"
                    },
                    "type": {
                        "type": "string"
                    }
                }
            },
            "Station": {
                "required": [
                    "UICCode",
                    "heeftFaciliteiten",
                    "heeftReisassistentie",
                    "heeftVertrektijden",
                    "sporen",
                    "stationType",
                    "synoniemen"
                ],
                "type": "object",
                "properties": {
                    "UICCode": {
                        "type": "string"
                    },
                    "stationType": {
                        "type": "string"
                    },
                    "EVACode": {
                        "type": "string"
                    },
                    "code": {
                        "type": "string"
                    },
                    "sporen": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/Track"
                        }
                    },
                    "synoniemen": {
                        "type": "array",
                        "items": {
                            "type": "string"
                        }
                    },
                    "heeftFaciliteiten": {
                        "type": "boolean"
                    },
                    "heeftVertrektijden": {
                        "type": "boolean"
                    },
                    "heeftReisassistentie": {
                        "type": "boolean"
                    },
                    "namen": {
                        "$ref": "#/components/schemas/StationsNamen"
                    },
                    "land": {
                        "type": "string"
                    },
                    "lat": {
                        "type": "number"
                    },
                    "lng": {
                        "type": "number"
                    },
                    "radius": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "naderenRadius": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "distance": {
                        "type": "number",
                        "format": "double"
                    },
                    "ingangsDatum": {
                        "type": "string",
                        "format": "date"
                    },
                    "eindDatum": {
                        "type": "string",
                        "format": "date"
                    },
                    "nearbyMeLocationId": {
                        "$ref": "#/components/schemas/NearbyMeLocationId"
                    }
                }
            },
            "StationResponse": {
                "required": [
                    "payload"
                ],
                "type": "object",
                "properties": {
                    "payload": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/Station"
                        }
                    },
                    "links": {
                        "type": "object",
                        "additionalProperties": {
                            "type": "string"
                        }
                    },
                    "meta": {
                        "type": "object",
                        "additionalProperties": {
                            "type": "string"
                        }
                    }
                }
            },
            "StationsNamen": {
                "required": [
                    "kort",
                    "lang",
                    "middel"
                ],
                "type": "object",
                "properties": {
                    "lang": {
                        "type": "string"
                    },
                    "middel": {
                        "type": "string"
                    },
                    "kort": {
                        "type": "string"
                    },
                    "festive": {
                        "type": "string"
                    }
                }
            },
            "Track": {
                "required": [
                    "spoorNummer"
                ],
                "type": "object",
                "properties": {
                    "spoorNummer": {
                        "type": "string"
                    }
                }
            },
            "Price": {
                "required": [
                    "totalPriceInCents",
                    "travelClass",
                    "travelDiscount",
                    "travelProducts"
                ],
                "type": "object",
                "properties": {
                    "totalPriceInCents": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "priceDifferenceInCentsBetweenFirstAndSecondClass": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "priceDifferenceInCentsBetweenJointJourneyDiscount": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "operatorName": {
                        "type": "string"
                    },
                    "travelDiscount": {
                        "enum": [
                            "NO_DISCOUNT",
                            "DISCOUNT_20",
                            "DISCOUNT_40",
                            "NO_CHARGE"
                        ],
                        "type": "string"
                    },
                    "travelClass": {
                        "enum": [
                            "FIRST_CLASS",
                            "SECOND_CLASS"
                        ],
                        "type": "string"
                    },
                    "travelProducts": {
                        "type": "array",
                        "items": {
                            "enum": [
                                "OVCHIPKAART_ENKELE_REIS",
                                "OVCHIPKAART_RETOUR",
                                "TRAJECT_VRIJ_MAAND",
                                "TRAJECT_VRIJ_JAAR",
                                "BUSINESS_CARD_TRAJECT_VRIJ_JAAR",
                                "RAILRUNNER",
                                "ETICKET_ENKELE_REIS",
                                "ETICKET_RETOUR",
                                "ETICKET_JOINT_JOURNEY_DISCOUNT_RETOUR",
                                "ETICKET_JOINT_JOURNEY_DISCOUNT_ENKELE_REIS"
                            ],
                            "type": "string"
                        }
                    }
                }
            },
            "RepresentationResponsePrice": {
                "required": [
                    "payload"
                ],
                "type": "object",
                "properties": {
                    "payload": {
                        "$ref": "#/components/schemas/Price"
                    },
                    "links": {
                        "type": "object",
                        "additionalProperties": {
                            "$ref": "#/components/schemas/Link"
                        }
                    },
                    "meta": {
                        "type": "object",
                        "additionalProperties": {
                            "type": "object"
                        }
                    }
                }
            },
            "InternationalPrice": {
                "required": [
                    "priceInCents",
                    "priceInCentsExcludingSupplement",
                    "product",
                    "travelClass"
                ],
                "type": "object",
                "properties": {
                    "priceInCents": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "priceInCentsExcludingSupplement": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "product": {
                        "type": "string"
                    },
                    "travelClass": {
                        "enum": [
                            "FIRST_CLASS",
                            "SECOND_CLASS"
                        ],
                        "type": "string"
                    },
                    "link": {
                        "type": "string",
                        "format": "uri"
                    }
                }
            },
            "RepresentationResponseInternationalPrice": {
                "required": [
                    "payload"
                ],
                "type": "object",
                "properties": {
                    "payload": {
                        "$ref": "#/components/schemas/InternationalPrice"
                    },
                    "links": {
                        "type": "object",
                        "additionalProperties": {
                            "$ref": "#/components/schemas/Link"
                        }
                    },
                    "meta": {
                        "type": "object",
                        "additionalProperties": {
                            "type": "object"
                        }
                    }
                }
            },
            "ArrivalOrDeparture": {
                "required": [
                    "cancelled",
                    "crowdForecast",
                    "product"
                ],
                "type": "object",
                "properties": {
                    "product": {
                        "$ref": "#/components/schemas/Product"
                    },
                    "origin": {
                        "$ref": "#/components/schemas/Station"
                    },
                    "destination": {
                        "$ref": "#/components/schemas/Station"
                    },
                    "plannedTime": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "actualTime": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "delayInSeconds": {
                        "type": "integer",
                        "format": "int64"
                    },
                    "plannedTrack": {
                        "type": "string"
                    },
                    "actualTrack": {
                        "type": "string"
                    },
                    "cancelled": {
                        "type": "boolean"
                    },
                    "punctuality": {
                        "type": "number",
                        "format": "double"
                    },
                    "crowdForecast": {
                        "enum": [
                            "UNKNOWN",
                            "LOW",
                            "MEDIUM",
                            "HIGH"
                        ],
                        "type": "string"
                    },
                    "shorterStockClassification": {
                        "enum": [
                            "BUSY",
                            "EXTRA_BUSY"
                        ],
                        "type": "string"
                    },
                    "stockIdentifiers": {
                        "type": "array",
                        "items": {
                            "type": "string"
                        }
                    }
                }
            },
            "CoachCrowdForecast": {
                "required": [
                    "classification",
                    "paddingLeft",
                    "width"
                ],
                "type": "object",
                "properties": {
                    "paddingLeft": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "width": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "classification": {
                        "enum": [
                            "UNKNOWN",
                            "LOW",
                            "MEDIUM",
                            "HIGH"
                        ],
                        "type": "string"
                    }
                }
            },
            "Journey": {
                "required": [
                    "allowCrowdReporting",
                    "notes",
                    "productNumbers",
                    "source",
                    "stops"
                ],
                "type": "object",
                "properties": {
                    "notes": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/Note"
                        }
                    },
                    "productNumbers": {
                        "type": "array",
                        "items": {
                            "type": "string"
                        }
                    },
                    "stops": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/JourneyStop"
                        }
                    },
                    "allowCrowdReporting": {
                        "type": "boolean"
                    },
                    "source": {
                        "type": "string"
                    }
                }
            },
            "JourneyStop": {
                "required": [
                    "arrivals",
                    "departures",
                    "id",
                    "nextStopId",
                    "previousStopId",
                    "stop"
                ],
                "type": "object",
                "properties": {
                    "id": {
                        "type": "string"
                    },
                    "stop": {
                        "$ref": "#/components/schemas/Station"
                    },
                    "previousStopId": {
                        "type": "array",
                        "items": {
                            "type": "string"
                        }
                    },
                    "nextStopId": {
                        "type": "array",
                        "items": {
                            "type": "string"
                        }
                    },
                    "destination": {
                        "type": "string"
                    },
                    "status": {
                        "enum": [
                            "ORIGIN",
                            "SPLIT",
                            "STOP",
                            "PASSING",
                            "COMBINE",
                            "DESTINATION",
                            "STOP_CHANGED_ORIGIN",
                            "STOP_CHANGED_DESTINATION"
                        ],
                        "type": "string"
                    },
                    "kind": {
                        "enum": [
                            "DEPARTURE",
                            "ARRIVAL",
                            "TRANSFER"
                        ],
                        "type": "string"
                    },
                    "arrivals": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/ArrivalOrDeparture"
                        }
                    },
                    "departures": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/ArrivalOrDeparture"
                        }
                    },
                    "actualStock": {
                        "$ref": "#/components/schemas/Stock"
                    },
                    "plannedStock": {
                        "$ref": "#/components/schemas/Stock"
                    },
                    "platformFeatures": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/PlatformFeature"
                        }
                    },
                    "coachCrowdForecast": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/CoachCrowdForecast"
                        }
                    }
                }
            },
            "Part": {
                "required": [
                    "facilities"
                ],
                "type": "object",
                "properties": {
                    "stockIdentifier": {
                        "type": "string"
                    },
                    "destination": {
                        "$ref": "#/components/schemas/Station"
                    },
                    "facilities": {
                        "type": "array",
                        "items": {
                            "type": "string"
                        }
                    },
                    "image": {
                        "$ref": "#/components/schemas/StockPartLink"
                    }
                }
            },
            "PlatformFeature": {
                "required": [
                    "description",
                    "paddingLeft",
                    "type",
                    "width"
                ],
                "type": "object",
                "properties": {
                    "paddingLeft": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "width": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "type": {
                        "type": "string"
                    },
                    "description": {
                        "type": "string"
                    }
                }
            },
            "RepresentationResponseJourney": {
                "required": [
                    "payload"
                ],
                "type": "object",
                "properties": {
                    "payload": {
                        "$ref": "#/components/schemas/Journey"
                    },
                    "links": {
                        "type": "object",
                        "additionalProperties": {
                            "$ref": "#/components/schemas/Link"
                        }
                    },
                    "meta": {
                        "type": "object",
                        "additionalProperties": {
                            "type": "object"
                        }
                    }
                }
            },
            "Stock": {
                "required": [
                    "hasSignificantChange",
                    "numberOfParts",
                    "numberOfSeats",
                    "trainParts"
                ],
                "type": "object",
                "properties": {
                    "trainType": {
                        "type": "string"
                    },
                    "numberOfSeats": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "numberOfParts": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "trainParts": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/Part"
                        }
                    },
                    "hasSignificantChange": {
                        "type": "boolean"
                    }
                }
            },
            "StockPartLink": {
                "required": [
                    "uri"
                ],
                "type": "object",
                "properties": {
                    "uri": {
                        "type": "string"
                    }
                }
            },
            "AlternatiefVervoer": {
                "type": "object",
                "properties": {
                    "beschrijving": {
                        "type": "string"
                    },
                    "begintijd": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "eindtijd": {
                        "type": "string",
                        "format": "date-time"
                    }
                }
            },
            "Baanvak": {
                "type": "object",
                "properties": {
                    "stations": {
                        "type": "array",
                        "items": {
                            "type": "string"
                        }
                    }
                }
            },
            "BaanvakBeperking": {
                "required": [
                    "tot",
                    "van"
                ],
                "type": "object",
                "properties": {
                    "van": {
                        "$ref": "#/components/schemas/StationCode"
                    },
                    "tot": {
                        "$ref": "#/components/schemas/StationCode"
                    }
                }
            },
            "Geldigheid": {
                "type": "object",
                "properties": {
                    "startDatum": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "eindDatum": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "startTijd": {
                        "type": "string"
                    },
                    "eindTijd": {
                        "type": "string"
                    }
                }
            },
            "Gevolg": {
                "type": "object",
                "properties": {
                    "stations": {
                        "type": "array",
                        "items": {
                            "type": "string"
                        }
                    },
                    "niveau": {
                        "enum": [
                            "GEEN_OF_VEEL_MINDER_TREINEN",
                            "MINDER_TREINEN",
                            "NORMAAL_AANTAL_OF_MEER_TREINEN"
                        ],
                        "type": "string"
                    }
                }
            },
            "Melding": {
                "type": "object",
                "properties": {
                    "id": {
                        "type": "string"
                    },
                    "titel": {
                        "type": "string"
                    },
                    "beschrijving": {
                        "type": "string"
                    },
                    "type": {
                        "enum": [
                            "prio_1",
                            "prio_2",
                            "prio_3"
                        ],
                        "type": "string"
                    },
                    "url": {
                        "type": "string"
                    },
                    "buttonPositie": {
                        "enum": [
                            "beide",
                            "boven",
                            "onder"
                        ],
                        "type": "string"
                    },
                    "laatstGewijzigd": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "volgendeUpdate": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "bodyItems": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/BodyItem"
                        }
                    },
                    "buttons": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/Button"
                        }
                    }
                }
            },
            "Reisadviezen": {
                "required": [
                    "reisadvies"
                ],
                "type": "object",
                "properties": {
                    "titel": {
                        "type": "string"
                    },
                    "reisadvies": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/VerstoringReisadvies"
                        }
                    }
                }
            },
            "RepresentationResponseListVerstoringContainer": {
                "required": [
                    "payload"
                ],
                "type": "object",
                "properties": {
                    "payload": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/VerstoringContainer"
                        }
                    },
                    "links": {
                        "type": "object",
                        "additionalProperties": {
                            "$ref": "#/components/schemas/Link"
                        }
                    },
                    "meta": {
                        "type": "object",
                        "additionalProperties": {
                            "type": "object"
                        }
                    }
                }
            },
            "StationCode": {
                "type": "object",
                "properties": {
                    "code": {
                        "type": "string"
                    }
                }
            },
            "Traject": {
                "type": "object",
                "properties": {
                    "stations": {
                        "type": "array",
                        "items": {
                            "type": "string"
                        }
                    },
                    "begintijd": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "eindtijd": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "richting": {
                        "enum": [
                            "VANUIT",
                            "NAAR",
                            "VANUIT_EN_NAAR",
                            "HEEN",
                            "HEEN_EN_TERUG"
                        ],
                        "type": "string"
                    },
                    "gevolg": {
                        "$ref": "#/components/schemas/Gevolg"
                    }
                }
            },
            "Verstoring": {
                "required": [
                    "geldigheidsLijst",
                    "landelijk",
                    "type"
                ],
                "type": "object",
                "properties": {
                    "type": {
                        "enum": [
                            "MELDING_PRIO_1",
                            "MELDING_PRIO_2",
                            "MELDING_PRIO_3",
                            "STORING",
                            "WERKZAAMHEID",
                            "EVENEMENT"
                        ],
                        "type": "string"
                    },
                    "id": {
                        "type": "string"
                    },
                    "baanvakBeperking": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/BaanvakBeperking"
                        }
                    },
                    "reden": {
                        "type": "string"
                    },
                    "extraReistijd": {
                        "type": "string"
                    },
                    "leafletUrl": {
                        "type": "string"
                    },
                    "reisadviezen": {
                        "$ref": "#/components/schemas/Reisadviezen"
                    },
                    "geldigheidsLijst": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/Geldigheid"
                        }
                    },
                    "verwachting": {
                        "type": "string"
                    },
                    "gevolg": {
                        "type": "string"
                    },
                    "gevolgType": {
                        "type": "string"
                    },
                    "fase": {
                        "type": "string"
                    },
                    "faseLabel": {
                        "type": "string"
                    },
                    "impact": {
                        "type": "integer"
                    },
                    "maatschappij": {
                        "type": "integer"
                    },
                    "alternatiefVervoer": {
                        "type": "string"
                    },
                    "alternatiefVervoerLijst": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/AlternatiefVervoer"
                        }
                    },
                    "landelijk": {
                        "type": "boolean"
                    },
                    "oorzaak": {
                        "type": "string"
                    },
                    "header": {
                        "type": "string"
                    },
                    "meldtijd": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "periode": {
                        "type": "string"
                    },
                    "baanvakken": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/Baanvak"
                        }
                    },
                    "trajecten": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/Traject"
                        }
                    },
                    "versie": {
                        "type": "string"
                    },
                    "volgnummer": {
                        "type": "string"
                    },
                    "prioriteit": {
                        "type": "integer",
                        "format": "int32"
                    }
                }
            },
            "VerstoringContainer": {
                "type": "object",
                "properties": {
                    "id": {
                        "type": "string"
                    },
                    "type": {
                        "enum": [
                            "prio_1",
                            "prio_2",
                            "prio_3",
                            "verstoring",
                            "werkzaamheid"
                        ],
                        "type": "string"
                    },
                    "titel": {
                        "type": "string"
                    },
                    "url": {
                        "type": "string"
                    },
                    "topic": {
                        "type": "string"
                    },
                    "melding": {
                        "$ref": "#/components/schemas/Melding"
                    },
                    "verstoring": {
                        "$ref": "#/components/schemas/Verstoring"
                    }
                }
            },
            "VerstoringReisadvies": {
                "required": [
                    "advies"
                ],
                "type": "object",
                "properties": {
                    "titel": {
                        "type": "string"
                    },
                    "advies": {
                        "type": "array",
                        "items": {
                            "type": "string"
                        }
                    }
                }
            },
            "RepresentationResponseVerstoringContainer": {
                "required": [
                    "payload"
                ],
                "type": "object",
                "properties": {
                    "payload": {
                        "$ref": "#/components/schemas/VerstoringContainer"
                    },
                    "links": {
                        "type": "object",
                        "additionalProperties": {
                            "$ref": "#/components/schemas/Link"
                        }
                    },
                    "meta": {
                        "type": "object",
                        "additionalProperties": {
                            "type": "object"
                        }
                    }
                }
            },
            "Departure": {
                "required": [
                    "cancelled",
                    "departureStatus",
                    "messages",
                    "name",
                    "product",
                    "routeStations",
                    "trainCategory"
                ],
                "type": "object",
                "properties": {
                    "direction": {
                        "type": "string"
                    },
                    "name": {
                        "type": "string"
                    },
                    "plannedDateTime": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "plannedTimeZoneOffset": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "actualDateTime": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "actualTimeZoneOffset": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "plannedTrack": {
                        "type": "string"
                    },
                    "actualTrack": {
                        "type": "string"
                    },
                    "product": {
                        "$ref": "#/components/schemas/Product"
                    },
                    "trainCategory": {
                        "type": "string"
                    },
                    "cancelled": {
                        "type": "boolean"
                    },
                    "journeyDetailRef": {
                        "type": "string"
                    },
                    "routeStations": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/RouteStation"
                        }
                    },
                    "messages": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/Message"
                        }
                    },
                    "departureStatus": {
                        "enum": [
                            "ON_STATION",
                            "INCOMING",
                            "DEPARTED",
                            "UNKNOWN"
                        ],
                        "type": "string"
                    }
                }
            },
            "DeparturesPayload": {
                "required": [
                    "departures",
                    "source"
                ],
                "type": "object",
                "properties": {
                    "source": {
                        "type": "string"
                    },
                    "departures": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/Departure"
                        }
                    }
                }
            },
            "RepresentationResponseDeparturesPayload": {
                "required": [
                    "payload"
                ],
                "type": "object",
                "properties": {
                    "payload": {
                        "$ref": "#/components/schemas/DeparturesPayload"
                    },
                    "links": {
                        "type": "object",
                        "additionalProperties": {
                            "$ref": "#/components/schemas/Link"
                        }
                    },
                    "meta": {
                        "type": "object",
                        "additionalProperties": {
                            "type": "object"
                        }
                    }
                }
            },
            "RouteStation": {
                "type": "object",
                "properties": {
                    "uicCode": {
                        "type": "string"
                    },
                    "mediumName": {
                        "type": "string"
                    }
                }
            },
            "Arrival": {
                "required": [
                    "arrivalStatus",
                    "cancelled",
                    "messages",
                    "name",
                    "product",
                    "trainCategory"
                ],
                "type": "object",
                "properties": {
                    "origin": {
                        "type": "string"
                    },
                    "name": {
                        "type": "string"
                    },
                    "plannedDateTime": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "plannedTimeZoneOffset": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "actualDateTime": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "actualTimeZoneOffset": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "plannedTrack": {
                        "type": "string"
                    },
                    "actualTrack": {
                        "type": "string"
                    },
                    "product": {
                        "$ref": "#/components/schemas/Product"
                    },
                    "trainCategory": {
                        "type": "string"
                    },
                    "cancelled": {
                        "type": "boolean"
                    },
                    "journeyDetailRef": {
                        "type": "string"
                    },
                    "messages": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/Message"
                        }
                    },
                    "arrivalStatus": {
                        "enum": [
                            "ON_STATION",
                            "INCOMING",
                            "DEPARTED",
                            "UNKNOWN"
                        ],
                        "type": "string"
                    }
                }
            },
            "ArrivalsPayload": {
                "required": [
                    "arrivals",
                    "source"
                ],
                "type": "object",
                "properties": {
                    "source": {
                        "type": "string"
                    },
                    "arrivals": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/Arrival"
                        }
                    }
                }
            },
            "RepresentationResponseArrivalsPayload": {
                "required": [
                    "payload"
                ],
                "type": "object",
                "properties": {
                    "payload": {
                        "$ref": "#/components/schemas/ArrivalsPayload"
                    },
                    "links": {
                        "type": "object",
                        "additionalProperties": {
                            "$ref": "#/components/schemas/Link"
                        }
                    },
                    "meta": {
                        "type": "object",
                        "additionalProperties": {
                            "type": "object"
                        }
                    }
                }
            },
            "CalamitiesResourceCalamity": {
                "type": "object",
                "properties": {
                    "id": {
                        "type": "string"
                    },
                    "titel": {
                        "type": "string"
                    },
                    "beschrijving": {
                        "type": "string"
                    },
                    "lastModified": {
                        "type": "integer",
                        "format": "int64"
                    },
                    "type": {
                        "enum": [
                            "informatie",
                            "waarschuwing"
                        ],
                        "type": "string"
                    },
                    "url": {
                        "type": "string"
                    },
                    "buttonPositie": {
                        "enum": [
                            "boven",
                            "onder",
                            "beide"
                        ],
                        "type": "string"
                    },
                    "laatstGewijzigd": {
                        "type": "integer",
                        "format": "int64"
                    },
                    "volgendeUpdate": {
                        "type": "integer",
                        "format": "int64"
                    },
                    "calltoactionbuttons": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/CallToActionButton"
                        }
                    },
                    "bodyitems": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/CalamityBodyItem"
                        }
                    }
                }
            },
            "CalamitiesResponse": {
                "type": "object",
                "properties": {
                    "calamiteit": {
                        "$ref": "#/components/schemas/CalamitiesResourceCalamity"
                    },
                    "meldingen": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/CalamitiesResourceCalamity"
                        }
                    }
                }
            },
            "CalamityBodyItem": {
                "required": [
                    "objectType"
                ],
                "type": "object",
                "properties": {
                    "objectType": {
                        "type": "string"
                    },
                    "content": {
                        "type": "string"
                    },
                    "titel": {
                        "type": "string"
                    },
                    "downloads": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/Download"
                        }
                    },
                    "links": {
                        "type": "array",
                        "items": {
                            "$ref": "#/components/schemas/Link"
                        }
                    }
                }
            },
            "CallToActionButton": {
                "type": "object",
                "properties": {
                    "callToAction": {
                        "type": "string"
                    },
                    "url": {
                        "type": "string"
                    },
                    "type": {
                        "enum": [
                            "primary",
                            "secondary",
                            "buy",
                            "print"
                        ],
                        "type": "string"
                    },
                    "voorleestitel": {
                        "type": "string"
                    }
                }
            }
        },
        "securitySchemes": {
            "apiKeyHeader": {
                "type": "apiKey",
                "name": "Ocp-Apim-Subscription-Key",
                "in": "header"
            },
            "apiKeyQuery": {
                "type": "apiKey",
                "name": "subscription-key",
                "in": "query"
            }
        }
    },
    "security": [
        {
            "apiKeyHeader": []
        },
        {
            "apiKeyQuery": []
        }
    ]
}