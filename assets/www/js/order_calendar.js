$(document).on('pageinit', '#index', function(){ 
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
    
    $("#calendar").jqmCalendar({
        events: [{
            "summary": "Meet PM",
            "begin": new Date(y,m, 27 ),
            "end": new Date(y, m, 28)
            
        }, {
            "summary": "Dinner",
            "begin": new Date(y, m, d + 3),
            "end": new Date(y, m, d + 4)
            
        }, {
            "summary": "Lunch with Friends",
            "begin": new Date(y, m, d + 6),
            "end": new Date(y, m, d + 7)
            
        }, 
                ],
                 months: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        days: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
        startOfWeek: 0
        
    });
});