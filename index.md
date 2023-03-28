---
layout: default
title: Index
---

<div class="main-carousel" style="margin-top: 100px">
  {% for image in site.static_files %}
    {% if image.path contains 'img/slider' %}
      <div class="carousel-cell">
        <img src="{{ site.baseurl }}{{ image.path }}" alt="image" style="height: 400px"/>
      </div>
    {% endif %}
  {% endfor %}
</div>

<script>
  let flkty = new Flickity('.main-carousel', {
        // options
        cellAlign: 'left', 
        wrapAround: true, 
        autoPlay: true,
        imagesLoaded: true,
        fade: true
  });

  // window.load( function() {
  //   flkty.resize();
  // });
</script>