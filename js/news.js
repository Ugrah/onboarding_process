$(function(){

    var getcicposts = function() {

        var posts = [];
        $.ajax({
            type: 'GET',
            url: 'http://localhost/cic-news/wp-json/wp/v2/posts',
            async: !1,
            success: function(data){
                posts = data;
            },
            complete: function(){

            }
        });

        return posts;
    }
    var ArticlesAlaUnetemplate = function(data) {
        
        if (typeof data != "undefined" && data != null && data.length != null && data.length > 0) {
            var article = "";
            data.forEach(element => {

                article += '<div class="post-175 post  format-standard has-post-thumbnail  category-motion category-photography category-uncategorized tag-eclipse tag-grid tag-mysql post-item isotope-item clearfix">'
                article += '<div class="image_frame post-photo-wrapper scale-with-grid">'
                article += '<div class="image_wrapper">'
                article += '<a href="?page=Cheques-irreguliers-BAM-delegue-la-gestion-a-Creditinfo-Checks">'
                article += '<div class="mask"></div><img width="576" src="images/news_1.jpeg" class="scale-with-grid wp-post-image" alt="" />'
                article += '</a>'
                article += '</div>'
                article += '</div>'
                article += '<div class="post-desc-wrapper">'
                article += '<div class="post-desc">'
                article += '<div class="post-meta clearfix">'
                article += '<div class="author-date" style="font-size: 12px;">'
                article += '<span class="date"><span></span><i class="icon-clock"></i> 04 Avril 2018</span>'
                article += '</div>'
                article += '</div>'
                article += '<div class="post-title">'
                article += '<h2 class="entry-title">'
                article += '<a href="?page=Cheques-irreguliers-BAM-delegue-la-gestion-a-Creditinfo-Checks">Chèques irréguliers : BAM délègue la gestion à Creditinfo Checks</a>'
                article += '</h2>'
                article += '</div>'
                article += '<div class="post-excerpt">'
                article += '<p>« Pour résoudre le problème des chèques irréguliers, Bank Al-Maghrib (BAM) s’appuie sur Creditinfo Checks,filiale de l\’islandais Creditinfo.</p>'
                article += '</div>'
                article += '<div class="post-footer">'
                article += '<div class="button-love">'
                article += '<span class="love-text">Article intéressant ?</span>'
                article += '<a style="color: #25a6d1; display: inline-block; width: 35px; height: 35px; line-height: 35px; text-align: center; border-radius: 100%;" href="#"><i class="icon-mail"></i></a>'
                article += '<a style="color: #3a5897; display: inline-block; width: 35px; height: 35px; line-height: 35px; text-align: center; border-radius: 100%;" href="#"><i class="icon-facebook"></i></a>'
                article += '<a style="color: #0e76a8; display: inline-block; width: 35px; height: 35px; line-height: 35px; text-align: center; border-radius: 100%;" href="#"><i class="icon-linkedin"></i></a>'
                article += '</div>'
                article += '<div class="post-links">'
                article += '<i class="icon-doc-text"></i>'
                article += '<a href="?page=Cheques-irreguliers-BAM-delegue-la-gestion-a-Creditinfo-Checks" class="post-more">Lire la suite</a>'
                article += '</div>'
                article += '</div>'
                article += '</div>'
                article += '</div>'
                article += '</div>'
            });
        }
        
        return article;
    }
    var data = getcicposts();
    return;
    $('.articles-a-la-une').html( ArticlesAlaUnetemplate(data) );
});