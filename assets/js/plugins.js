// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.

/**
 * CodeKit Imports
 *
 * Place any jQuery/helper plugins in here using the CODEKIT STATEMENTS syntax
 * http://incident57.com/codekit/help.php
 *
 * @codekit-append "vendor/bootstrap/bootstrap-affix.js"
 * @codekit-append "vendor/bootstrap/bootstrap-alert.js"
 * @codekit-append "vendor/bootstrap/bootstrap-button.js"
 * @codekit-append "vendor/bootstrap/bootstrap-carousel.js"
 * @codekit-append "vendor/bootstrap/bootstrap-collapse.js"
 * @codekit-append "vendor/bootstrap/bootstrap-dropdown.js"
 * @codekit-append "vendor/bootstrap/bootstrap-modal.js"
 * @codekit-append "vendor/bootstrap/bootstrap-popover.js"
 * @codekit-append "vendor/bootstrap/bootstrap-scrollspy.js"
 * @codekit-append "vendor/bootstrap/bootstrap-tab.js"
 * @codekit-append "vendor/bootstrap/bootstrap-tooltip.js"
 * @codekit-append "vendor/bootstrap/bootstrap-transition.js"
 * @codekit-append "vendor/bootstrap/bootstrap-typeahead.js"
 */
