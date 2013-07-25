var URL = "http://content.guardianapis.com/search?q=fish&format=json&api-key=kaqthxjmfxabpu8ufgb56aej&show-fields=thumbnail";
var TEMPALTE = "<div><h2>[TITLE]</h2><p><img src='[IMG]' alt='Topic image'/></p><p>[TOPIC_TITLE] - <a href='[LINK]' target='_blank'>read more</a></p><p> Published date: [PUBLISHED]</p></div>";


$(document).ready( function () {
    displayBlogs();
});


function a(text) {
    alert(text);
}

function p(o) {
    console.log(o)
}

function populateBlogs () {
}

function displayBlogs() {
    var objBlogs = {};
    $.ajax({ 
        type: 'GET',
        url: this.URL,
        dataType: 'jsonp', 
        success: function(data) { 
            if(data.response) {
                if(data.response.results) {
                    objBlogs = data.response.results;
                    
                    var strHtmlResults = '';
                    var strErrorMsg = 'There are no blogs to display';
                    
                    if(objBlogs) {
                        for(var key in objBlogs) {
                            var currTemplate = TEMPALTE;

                            currTemplate = currTemplate.replace('[TITLE]', objBlogs[key].sectionName);
                            currTemplate = currTemplate.replace('[TOPIC_TITLE]', objBlogs[key].webTitle);
                            currTemplate = currTemplate.replace('[LINK]', objBlogs[key].webUrl);
                            currTemplate = currTemplate.replace('[IMG]', objBlogs[key].fields.thumbnail);
                            currTemplate = currTemplate.replace('[PUBLISHED]', objBlogs[key].webPublicationDate);

                            strHtmlResults += currTemplate;
                        }
                    } else {
                        strHtmlResults = strErrorMsg;
                    }
                    
                    $('#blog-container').html(strHtmlResults);
                }
            }
        }
    });
    
    
}

