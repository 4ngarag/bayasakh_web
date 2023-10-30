function getChartColorsArray(r) {
    if (null !== document.getElementById(r)) {
        var o = document.getElementById(r).getAttribute("data-colors");
        if (o) return (o = JSON.parse(o)).map(function(r) {
            var o = r.replace(" ", "");
            return -1 === o.indexOf(",") ? getComputedStyle(document.documentElement).getPropertyValue(o) || o : 2 == (r = r.split(",")).length ? "rgba(" + getComputedStyle(document.documentElement).getPropertyValue(r[0]) + "," + r[1] + ")" : o
        });
        console.warn("data-colors Attribute not found on:", r)
    }
}

var worldlinemap, worldemapmarkers, worldemapmarkersimage, usmap, canadamap, russiamap, spainmap, vectorMapWorldLineColors = getChartColorsArray("world-map-line-markers"),
    vectorMapWorldMarkersColors = (vectorMapWorldLineColors && (worldlinemap = new jsVectorMap({
        map: "world_merc",
        selector: "#world-map-line-markers",
        zoomOnScroll: !1,
        zoomButtons: !1,
        showTooltip: !1,
        draggable: 0,
        focusOn: {
            region: 'AF', // PK
            animate: true
        },
        markers: [
            {name: "Монгол", coords: [47, 99], style: {fill: 'red', image: '../src/assets/images/favicon.ico'}},
            {name: "Өмнөд солонгос", coords: [37, 127.5]},
            {name: "Орос", coords: [60, 100]},
            {name: "Дани", coords: [56, 10]},
            {name: "Украин", coords: [50, 32]},
            {name: "Польш", coords: [53, 20]},
            {name: "Молдав", coords: [47, 29]},
            {name: "Вьетнам", coords: [16, 106]},
            {name: "Франц", coords: [45, 4.5]},
            {name: "Индонез", coords: [-5, 120]},
            {name: "Сингапур", coords: [1.3, 103.8]}
        ],
        lines: [
            {from: "Өмнөд солонгос", to: "Монгол"},
            {from: "Орос", to: "Монгол"},
            {from: "Дани", to: "Монгол"},
            {from: "Украин", to: "Монгол"},
            {from: "Польш", to: "Монгол"},
            {from: "Молдав", to: "Монгол"},
            {from: "Вьетнам", to: "Монгол"},
            {from: "Франц", to: "Монгол"},
            {from: "Индонез", to: "Монгол"},
            {from: "Сингапур", to: "Монгол"}
        ],
        markerLabelStyle: {
            initial: {
              fontFamily: "'Inter', sans-serif",
              fontSize: 20,
              fontWeight: 500,
              fill: '#35373e',
            },
            // You can control the hover and selected state for labels as well.
            hover: {
              fill: 'red'
            },
            selected: {
              fill: 'blue'
            }
        },
        regionStyle: {
            initial: {
                stroke: "#9599ad",
                strokeWidth: .25,
                fill: vectorMapWorldLineColors,
                fillOpacity: 1
            }
        },
        lineStyle: {
            animation: !0,
            strokeDasharray: "6 3 6"
        },
        labels: {
            markers: {
                render: function(r) {
                    return r.name
                }
            }
        },
        series: {
            regions: [{
              attribute: "fill",
            //   legend: {
            //     title: "Some title",
            //   },
              scale: {
                colorMN: "#c79efd",
                colorKR: "#ffc371",
                colorDK: "#08d191",
                colorFR: "#fc3941",
                colorPL: "#f59a03",
                colorUA: "#ffc371",
                colorMD: "#999c2b",
                colorSG: "#769aaf",
                colorVN: "#dba7f2",
                colorID: "#ffc371",
                colorRU: "#60f14c",
              },
              values: {
                MN: "colorMN",
                KR: "colorKR",
                DK: "colorDK",
                FR: "colorFR",
                PL: "colorPL",
                UA: "colorUA",
                MD: "colorMD",
                SG: "colorSG",
                VN: "colorVN",
                ID: "colorID",
                RU: "colorRU",
              }
            }]
        }
    })), getChartColorsArray("world-map-line-markers")),
    vectorMapWorldMarkersImageColors = (vectorMapWorldMarkersColors && (worldemapmarkers = new jsVectorMap({
        map: "world_merc",
        selector: "#world-map-markers",
        zoomOnScroll: !1,
        zoomButtons: !1,
        selectedMarkers: [0, 2],
        regionStyle: {
            initial: {
                stroke: "#9599ad",
                strokeWidth: .25,
                fill: vectorMapWorldMarkersColors,
                fillOpacity: 1
            }
        },
        markersSelectable: !0,
        markers: [{
            name: "Palestine",
            coords: [31.9474, 35.2272]
        }, {
            name: "Russia",
            coords: [61.524, 105.3188]
        }, {
            name: "Canada",
            coords: [56.1304, -106.3468]
        }, {
            name: "Greenland",
            coords: [71.7069, -42.6043]
        }],
        markerStyle: {
            initial: {
                fill: "#038edc"
            },
            selected: {
                fill: "red"
            }
        },
        labels: {
            markers: {
                render: function(r) {
                    return r.name
                }
            }
        }
    })), getChartColorsArray("world-map-markers-image")),
    vectorMapUsaColors = (vectorMapWorldMarkersImageColors && (worldemapmarkersimage = new jsVectorMap({
        map: "world_merc",
        selector: "#world-map-markers-image",
        zoomOnScroll: !1,
        zoomButtons: !1,
        regionStyle: {
            initial: {
                stroke: "#9599ad",
                strokeWidth: .25,
                fill: vectorMapWorldMarkersImageColors,
                fillOpacity: 1
            }
        },
        selectedMarkers: [0, 2],
        markersSelectable: !0,
        markers: [{
            name: "Palestine",
            coords: [31.9474, 35.2272]
        }, {
            name: "Russia",
            coords: [61.524, 105.3188]
        }, {
            name: "Canada",
            coords: [56.1304, -106.3468]
        }, {
            name: "Greenland",
            coords: [71.7069, -42.6043]
        }],
        markerStyle: {
            initial: {
                image: "assets/images/logo-sm.png"
            }
        },
        labels: {
            markers: {
                render: function(r) {
                    return r.name
                }
            }
        }
    })), getChartColorsArray("usa-vectormap")),
    vectorMapCanadaColors = (vectorMapUsaColors && (usmap = new jsVectorMap({
        map: "us_merc_en",
        selector: "#usa-vectormap",
        regionStyle: {
            initial: {
                stroke: "#9599ad",
                strokeWidth: .25,
                fill: vectorMapUsaColors,
                fillOpacity: 1
            }
        },
        zoomOnScroll: !1,
        zoomButtons: !1
    })), getChartColorsArray("canada-vectormap")),
    vectorMapRussiaColors = (vectorMapCanadaColors && (canadamap = new jsVectorMap({
        map: "canada",
        selector: "#canada-vectormap",
        regionStyle: {
            initial: {
                stroke: "#9599ad",
                strokeWidth: .25,
                fill: vectorMapCanadaColors,
                fillOpacity: 1
            }
        },
        zoomOnScroll: !1,
        zoomButtons: !1
    })), getChartColorsArray("russia-vectormap")),
    vectorMapSpainColors = (vectorMapRussiaColors && (russiamap = new jsVectorMap({
        map: "russia",
        selector: "#russia-vectormap",
        regionStyle: {
            initial: {
                stroke: "#9599ad",
                strokeWidth: .25,
                fill: vectorMapRussiaColors,
                fillOpacity: 1
            }
        },
        zoomOnScroll: !1,
        zoomButtons: !1
    })), getChartColorsArray("spain-vectormap"));
vectorMapSpainColors && (spainmap = new jsVectorMap({
    map: "spain",
    selector: "#spain-vectormap",
    regionStyle: {
        initial: {
            stroke: "#9599ad",
            strokeWidth: .25,
            fill: vectorMapSpainColors,
            fillOpacity: 1
        }
    },
    zoomOnScroll: !1,
    zoomButtons: !1
}));