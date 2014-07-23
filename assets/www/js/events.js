$(document).ready(function() {
$('.kalendar').kalendar({ 
events: [
{
title:"Event 1",
url: "http://www.google.com",
start: {
date: 20140319,
time: "19.40"
},
end: {
date: "20140319",
time: "22.00"
},
location: "Munster",
color: "yellow"

},
{
title:"Event 2.1",
url: "http://www.google.com",
start: {
date: 20140227,
time: "14.00"
},
end: {
date: "20140227",
time: "18.00"
},
location: "Osnabrueck",
color: "blue"
},
{
title:"Event 2.2",
url: "http://www.google.com",
start: {
date: 20140227,
time: "19.00"
},
end: {
date: "20140227",
time: "00.00"
},
location: "Osnabrueck",
color: "yellow"

},
{
title:"Event 3",
url: "http://www.google.com",
start: {
date: 20140216,
time: "20.00"
},
end: {
date: "20140216",
time: "22.00"
},
location: "Dortmund"
},
{
title:"Event 4",
url: "http://www.google.com",
start: {
date: 20140306,
time: "19.00"
},
end: {
date: "20140306",
time: "22.00"
},
location: "Munster",
color: "blue"
},
{
title:"100%Cocktail",
start: {
date: 20140315,
time: "10.00"
},
end: {
date: "20140315",
time: "14.00"
},
location: "Hannover",
color: "yellow"

},
{
title:"100%Cocktail",
start: {
date: 20140315,
time: "15.00"
},
end: {
date: "20140315",
time: "01.00"
},
location: "Hannover",
color: "blue"
}
],
color: "green",
firstDayOfWeek: "Monday",
eventcolors: {
yellow: {
background: "#FC0",
text: "#000",
link: "#000"
},
blue: {
background: "#6180FC",
text: "#FFF",
link: "#FFF"
}
}
});

});