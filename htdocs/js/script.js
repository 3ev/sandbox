$(document).ready(function(){
    $.ajax({
        dataType: "jsonp",
        url: 'http://content.guardianapis.com/search?q=fish&format=json&api-key=kaqthxjmfxabpu8ufgb56aej',
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