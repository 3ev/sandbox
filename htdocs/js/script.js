$(document).ready(function(){
    $.ajax({
        dataType: "jsonp",
        url: 'http://content.guardianapis.com/search?q='+guardianfeed.searchterm+'&format=json&api-key='+guardianfeed.apikey,
        success: function(data){
            loadfeed(data.response, $("#feed"));
        }
    });
});

function loadfeed(json, container){
    var content = "<ul>";
    $.each(json.results, function(index, item){
        content += '<li><a href="'+item.webUrl+'">'+item.webTitle+'</a></li>';
    });
    content += "</ul>";
    container.html(content);
}