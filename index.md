---
layout: default
title: Index
---

<div class="main-carousel" data-flickity='{ 
  "cellAlign": "left", 
  "wrapAround": true, 
  "autoplay": true,
  "fade": true
}'>
  {% for image in site.static_files %}
    {% if image.path contains 'img/slider' %}
      <div class="carousel-cell">
        <img src="{{ site.baseurl }}{{ image.path }}" alt="image"/>
      </div>
    {% endif %}
  {% endfor %}
</div>