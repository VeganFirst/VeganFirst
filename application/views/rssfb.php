<?php header('Content-type: text/xml; charset=utf-8'); ?>

<rss xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:dc="http://purl.org/dc/elements/1.1/" version="2.0">

<?php
$search = array('h3', '<p style="text-align: center;"><img', '<p style="text-align:center"><img', '<p style="text-align:center;"><img', '" /></p>','<p dir="ltr" style="text-align:center"><img', '<p style="text-align:center"><strong><img', '" /></strong></p>','<p dir="ltr" style="text-align:center"><span style="background-color:transparent; color:rgb(0, 0, 0)"><img','" /></span></p>', '<p dir="ltr" style="text-align:center"><span style="background-color:transparent; color:#000000"><img', '<p style="text-align: center;"><br /> <img','<p style="text-align: center;"><strong><img', '<p dir="ltr" style="text-align: center;"><span style="background-color:transparent"><img');
$replace = array('h2', '<img', '<img', '<img', '" />', '<img','<img','" />','<img', '" />','<img','<img','<img','<img');
$count=1;
?>
<?php foreach($articles as $art):?>
<item>
      <title><?php echo htmlspecialchars($art->PageTitle);?></title>
      <link><?php echo base_url().'article/'.$art->Url;?></link>
      <pubDate><?php echo date("D, d M Y H:i:s O", strtotime($art->postTime));?></pubDate>
      <author>Mr. Author</author>
      <description><?php echo htmlspecialchars($art->Article_desc);?></description>
      <content:encoded>
        <![CDATA[
        <!doctype html>
        <html lang="en" prefix="op: http://media.facebook.com/op#">
          <head>
            <meta charset="utf-8">
            <link rel="canonical" href="<?php echo base_url().'article/'.$art->Url;?>">
            <meta property="op:markup_version" content="v1.0">
          </head>
          <body>
            <article>
              <header>
            <figure>
        <img src="<?php echo base_url().'media/upload/article/main/'.$art->FeaturedImage ?>" />
        <figcaption><?php echo htmlspecialchars($art->PageTitle);?></figcaption>
      </figure>

      <h1> <?php echo htmlspecialchars($art->PageTitle);?> </h1>
      <h2> <?php echo htmlspecialchars($art->Article_desc);?>  </h2>

      
      <address>
        <?php echo htmlspecialchars($art->FirstName.' '.$art->LastName);?>
      </address>
      <time class="op-published" datetime="<?php echo date("D, d M Y H:i:s O", strtotime($art->postTime));?>"><?php echo date("F dS, h:i:s A", strtotime($art->postTime));?></time>
      <time class="op-modified" datetime="<?php echo date("D, d M Y H:i:s O", strtotime($art->updatedTime));?>"><?php echo date("F dS, h:i:s A", strtotime($art->updatedTime));?></time>

              </header>
                     <?php echo str_replace($search, $replace, $art->Article_post);?>
              <footer>
              </footer>
            </article>
          </body>
        </html>
        ]]>
      </content:encoded>
    </item>
<?php
if($count==20)
{
break;
}
 $count++; endforeach;?>
</rss>
