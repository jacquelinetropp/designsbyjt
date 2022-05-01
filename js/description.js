/**
 * This file is for the services part of the website
 */

const webDesignButton = document.getElementById("webDesignButton");
const mobileAppButton = document.getElementById("mobileAppButton");
const brandingButton = document.getElementById("brandingButton");

const webDesignArea = document.getElementById("webdesign");
const mobileAppArea = document.getElementById("mobileApp");
const brandingArea = document.getElementById("branding");

(function ($) {
  $(webDesignButton).click(function () {
    console.log("clicked");
    $(webDesignArea).css({ opacity: "1" });
    $(mobileAppArea).css({opacity: "0"});
    $(brandingArea).css({opacity: "0"});
  });
  $(mobileAppButton).click(function () {
    $(webDesignArea).css({ opacity: "0" });
    $(mobileAppArea).css({opacity: "1"});
    $(brandingArea).css({opacity: "0"});
  });
  $(brandingButton).click(function () {
    $(webDesignArea).css({ opacity: "0" });
    $(mobileAppArea).css({opacity: "0"});
    $(brandingArea).css({opacity: "1"});
  });
})(jQuery);
