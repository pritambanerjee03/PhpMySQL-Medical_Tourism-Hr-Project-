particlesJS("space", {
  "particles": {
    "number": {
      "value": 50,
      "density": {
        "enable": false
      }
    },
    "color": {
      "value": "#000"
    },
    "opacity": {
      "value": 1,
      "anim": {
        "enable": false
      }
    },
      shape: {
      type: "image",
      image: {
        "src" : "images/medical_particle.png",
        width: 25,
        height: 25
      }
    },
    /*"shape": {
      "type": ["circle","star","polygon"],
      "stroke": {
        "width": 4,
        "color": "#fff"
      },
      "polygon": {
        "nb_sides": 5
      }
    },*/
    "size": {
      "value": 25,
      "random": true,
      "anim": {
        "enable": true,
        "speed": 40,
        "size_min": 10,
        "sync": false
      }
    },
    "line_linked": {
      "enable": false
    },
    "move": {
      "enable": true,
      "speed": 5,
      "direction": "none",
      "straight": false
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": false
      }
    },
    "modes": {
      "push": {
        "particles_nb": 12
      }
    }
  }
});