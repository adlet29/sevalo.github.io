/*
 *  Document   : base_comp_calendar.js
 *  Author     : pixelcave
 *  Description: Custom JS code used in Calendar Page
 */

var BaseCompCalendar = function() {
    // Add new event in the event list
    var addEvent = function() {
        var $eventInput      = jQuery('.js-add-event');
        var $eventInputVal   = '';

        // When the add event form is submitted
        jQuery('.js-form-add-event').on('submit', function(){
            $eventInputVal = $eventInput.prop('value'); // Get input value

            // Check if the user entered something
            if ( $eventInputVal ) {
                // Add it to the events list
                jQuery('.js-events')
                    .prepend('<li class="animated fadeInDown">' +
                            jQuery('<div />').text($eventInputVal).html() +
                            '</li>');

                // Clear input field
                $eventInput.prop('value', '');

                // Re-Init Events
                initEvents();
            }

            return false;
        });
    };

    // Init drag and drop event functionality
    var initEvents = function() {
        jQuery('.js-events')
            .find('li')
            .each(function() {
                var $event = jQuery(this);

                // create an Event Object
                var $eventObject = {
                    title: jQuery.trim($event.text()),
                    color: $event.css('background-color') };

                // store the Event Object in the DOM element so we can get to it later
                jQuery(this).data('eventObject', $eventObject);

                // make the event draggable using jQuery UI
                jQuery(this).draggable({
                    zIndex: 999,
                    revert: true,
                    revertDuration: 0
                });
            });
    };

    // Init FullCalendar
    var initCalendar = function(){
        var $date    = new Date();
        var $d       = $date.getDate();
        var $m       = $date.getMonth();
        var $y       = $date.getFullYear();

        jQuery('.js-calendar').fullCalendar({
            firstDay: 1,
            editable: true,
            droppable: true,
            header: {
                left: 'title',
                right: 'prev,next month,agendaWeek,agendaDay'
            },
            drop: function($date, $allDay) { // this function is called when something is dropped
                // retrieve the dropped element's stored Event Object
                var $originalEventObject = jQuery(this).data('eventObject');

                // we need to copy it, so that multiple events don't have a reference to the same object
                var $copiedEventObject = jQuery.extend({}, $originalEventObject);

                // assign it the date that was reported
                $copiedEventObject.start = $date;

                // render the event on the calendar
                // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                jQuery('.js-calendar').fullCalendar('renderEvent', $copiedEventObject, true);

                // remove the element from the "Draggable Events" list
                jQuery(this).remove();
            },
            events: [
                {
                    title: 'day 27, senbi',
                    start: new Date($y, $m, 27),
                    allDay: true,
                    color: '#fac5a5'
                }
            ]
        });
    };

    return {
        init: function () {
            // Add Event functionality
            addEvent();

            // FullCalendar, for more examples you can check out http://fullcalendar.io/
            initEvents();
            initCalendar();
        }
    };
}();

// Initialize when page loads
jQuery(function(){ BaseCompCalendar.init(); });