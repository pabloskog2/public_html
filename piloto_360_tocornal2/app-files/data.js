var APP_DATA = {
  "scenes": [
    {
      "id": "0-acceso-",
      "name": "Acceso ",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 1500,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": -2.0442036671759354,
          "pitch": -0.0025851747740688324,
          "rotation": 0,
          "target": "1-bao-"
        },
        {
          "yaw": -0.19982806555158028,
          "pitch": 0.24174905838695793,
          "rotation": 0,
          "target": "2-cocina-"
        },
        {
          "yaw": 0.24844080211120279,
          "pitch": 0.02333765064868487,
          "rotation": 0,
          "target": "3-dormitorio-"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "1-bao-",
      "name": "Baño ",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 1500,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": -2.81478044304718,
          "pitch": 0.008683576539651128,
          "rotation": 0,
          "target": "0-acceso-"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "2-cocina-",
      "name": "Cocina ",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 1500,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": -0.7041453889409404,
          "pitch": 0.00826026284219239,
          "rotation": 0,
          "target": "0-acceso-"
        },
        {
          "yaw": 2.6334473206188376,
          "pitch": 0.035867078119117934,
          "rotation": 0,
          "target": "3-dormitorio-"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "3-dormitorio-",
      "name": "Dormitorio ",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        }
      ],
      "faceSize": 1500,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": -1.0235646842538664,
          "pitch": 0.22965312859686549,
          "rotation": 0,
          "target": "2-cocina-"
        },
        {
          "yaw": -1.2402797193507773,
          "pitch": 0.024082867315605938,
          "rotation": 0,
          "target": "0-acceso-"
        }
      ],
      "infoHotspots": []
    }
  ],
  "name": "Piloto 360º Edificio Tocornal",
  "settings": {
    "mouseViewMode": "drag",
    "autorotateEnabled": true,
    "fullscreenButton": true,
    "viewControlButtons": false
  }
};
