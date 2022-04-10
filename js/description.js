/**
 * This file is for the services part of the website
 */

const webDesignButton = document.getElementById('webDesignButton');
const mobileAppButton = document.getElementById('mobileAppButton');
const brandingButton = document.getElementById('brandingButton');

const webDesignArea = document.getElementsByClassName('webdesign');
const mobileAppArea = document.getElementsByClassName('mobileApp');
const brandingArea = document.getElementsByClassName('branding');


$(webDesignButton).onClick(function() {
    alert("clicked");
})