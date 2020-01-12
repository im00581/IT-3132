"use strict";
/*
 * EXTREMELY loosely inspired by
 * https://www.kirupa.com/snippets/examples/content_slider_tutorial.htm
 */


// Required gloabl variables needed to keep slider state
var numOfSlides = 0;
var currentSlide = 0;
var qSliderContainer = document.querySelector(".slider");
var qSlider = document.querySelector(".slider figure");
var slideInterval = null;


/**
 * debulked onresize handler
 * https://github.com/louisremi/jquery-smartresize#minimalist-standalone-version
 */
function on_resize(c,t){onresize=function(){clearTimeout(t);t=setTimeout(c,100)};return c};

/**
 * Determine if the slider is currently visible.
 */
function isSliderStill(slider) {
  return getComputedStyle(slider).content.indexOf("still") > -1;
}

/**
 * Move the slider to the next slide
 */
function moveToNextSlide() {
  // Go to the next slide in the slider
  currentSlide++;

  // But reset slider if we've reached the end
  if (currentSlide > (numOfSlides - 1)) {
    currentSlide = 0;
  }

  // Get the distance to move 'cause we got to move it move it!
  var distanceToMove = qSlider.children[currentSlide].dataset.pos;
  qSlider.style.left = distanceToMove;
}

/**
 * Size the slider according to the current viewport size.
 */
function sizeSlider() {
  // Stop the slider from moving
  if (isSliderStill(qSliderContainer)) {
    clearInterval(slideInterval);
    return false;

  // Start the slider
  } else {
    var INTERVAL = 1000 * 10 * 2; // twenty seconds
    slideInterval = setInterval(moveToNextSlide, INTERVAL);
  }

  // forEach doesn't work with querySelector, so we have to convert it
  // to a proper list for everything to work
  numOfSlides = qSlider.children.length;
  var slidesList = Array.prototype.slice.call(qSlider.children);

  // Calculate and set the amount each slides needs to move to be visible
  slidesList.forEach(function(slide, index) {
    var distance = "-" + (index * 100) + "%";

    // Remove the negative value for the first value
    if (index === 0) {
      distance = distance.substring(1);
    }

    // Set the distance each slide needs to move
    slide.dataset.pos = distance;
  });
}

// Prepare the slider based on the current viewport size
on_resize(sizeSlider)();
