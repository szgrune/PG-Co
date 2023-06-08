---
layout: home
title: Index
---

<style>
  .carousel-wrapper {
    text-align: center;
  }

  .caption {
    /* You can change the color of your image caption here */
    color: var(--clr-a-text);
    /* You can change the color of your image caption here */
    font-size: 22px !important;
    font-weight: 400;
    opacity: 1;
  }

  .text-fade {
    opacity: 0;
    transition: all 1s ease;
  }

  @media screen and (min-width: 721px) {
    .carousel-wrapper {
      position: relative;
    }
    
    .main-carousel {
      z-index: 999;
      opacity: 1;
      transition: all ease-in-out 0.5s;
    }
    
    .main-carousel:hover {
      opacity: 0.3;
    }

    .carousel-cell {
      transition: all ease-in-out 0.5s;
    }
  
  	.caption {
      position: absolute;
      top: 50%;
      left: 50%;
      opacity: 0;
      transition: all ease-in-out 0.5s !important;
      transform: translate(-50%, -50%);
  	}
  
  	.main-carousel:hover ~ .caption {
    	opacity: 1 !important;  
  	}
  }
</style>


<div class="carousel-wrapper">
  <div class="main-carousel" style="margin-top: 100px">
    {% for image in site.static_files %}
      {% if image.path contains 'img/slider' %}
        <a id={{ image.basename }} class="carousel-wrapper" style="width: 100% !important">
          <div class="carousel-cell">
            {% if image.basename == "1" %}
              <img src="{{ site.baseurl }}{{ image.path }}" alt="Kimino Drinks"/>
            {% elsif image.basename == "2" %}
              <img src="{{ site.baseurl }}{{ image.path }}" alt="Onside"/>
            {% elsif image.basename == "3" %}
              <img src="{{ site.baseurl }}{{ image.path }}" alt="Open Library"/>
            {% endif %}
          </div>
        </a>
      {% endif %}
    {% endfor %}
  </div>
  <a class="caption">&nbsp;</a>
</div>

<script>
  let flkty = new Flickity('.main-carousel', {
        // options
        cellAlign: 'left', 
        wrapAround: true, 
        autoPlay: true,
        imagesLoaded: true,
        fade: true,
        percentPosition: false
  });

  let num = 1;
  {% for item in site.data.projectmenu.docs %}
    document.getElementById(num.toString()).href = '{{ item.url }}';
    num++;
  {% endfor %}

  var caption = document.querySelector('.caption');

  flkty.on( 'select', function() {
    $('.caption').fadeIn(500);

    // set image caption using img's alt
    if (flkty.selectedElement.id === "1") {
      caption.href = "/PG-Co/kimino.html";
        caption.textContent = "Kimino Drinks";
    } else if (flkty.selectedElement.id === "2") {
      caption.href = "/PG-Co/onside.html";
      caption.textContent = "Onside";
    } else if (flkty.selectedElement.id === "3") {
      caption.href = "/PG-Co/openlibrary.html";
      caption.textContent = "Open Library";
    }

    $('.caption').fadeOut(500);
  });

  // window.load( function() {
  //   flkty.resize();
  // });
</script>
