{% include 'header.tpl' %}
{% include 'sidebar.tpl' %}
    <div class="content pure-u-1 pure-u-md-3-4">
    
        <div>
              <!-- A wrapper for all the blog posts -->
            <div class="posts">
                <h1 class="content-subhead">{{article.title}}</h1>
        

      
                <!-- A single blog post -->
                <section class="post">
                    <header class="post-header">
                        <img class="post-avatar" alt="Tilo Mitra&#x27;s avatar" height="48" width="48" src="/public/img/common/tilo-avatar.png">

                        <h2 class="post-title"><a href="/article/show/{{article.idarticles}}">{{article.title}}</a></h2>

                        <p class="post-meta">
                            Опубликовал админ в категории
                            
                             <a class="post-category post-category-design" href="#">css</a> 
                                                         
                            
                        </p>
                    </header>

                    <div class="post-description">
                        <p>
                         {{article.text}}
                        </p>
                    </div>
                </section>
            

           
           </div>

{% include 'footer.tpl' %}