
function getFeed(){
    var numResults = $('#numResults').val();
    alert(numResults);
    var query = $('#query').val();
    var url = ('http://content.guardianapis.com/search?q='+query+'&format=json&show-fields=thumbnail%2Cstandfirst&page-size='+numResults+'&callback=?&api-key=ryj6zc777unnpambw8rdsnj3');

    //send AJAX request to the guardian feed
    var xhtr = $.ajax({
        url:url,
        dataType:'json'
    });
    //on receiving the feed info
    xhtr.done( function(response){
        //get the wrapper all the feeds will sit in
        var feedWrapper = $('#feedWrap');
        var feedlist = response.response.results;
        if($("article")){
            $('article').remove();
        }
        for(var i = 0; i < feedlist.length; i++){
            var article = $('<article></article>');
            var title = $('<h1>'+feedlist[i].webTitle+'</h1>');
            var brk = $('<br />');
            var lbrk = $('<hr />');
            var thumbnail = $('<img src="'+feedlist[i].fields.thumbnail+'"></img>');
            var summary = $('<p>'+feedlist[i].fields.standfirst+'</p>');
            var link = $('<a>'+feedlist[i].webUrl+'</a>');
            var foota = $('<footer> Posted on '+feedlist[i].webPublicationDate+'</footer>')
            $(feedWrapper).append(article);
            $(article).append(title, summary, thumbnail, brk, link, foota, lbrk);
        }
    });
}

