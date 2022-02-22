<?php header('Content-type: text/xml; charset=utf-8'); ?>

<rss xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:dc="http://purl.org/dc/elements/1.1/" version="2.0">
<?php foreach($articles as $art):?>
<item>
<title><?php echo htmlspecialchars($art->PageTitle);?></title>
<link><?php echo base_url().'article/'.$art->Url;?></link>
<content:encoded><?php echo htmlspecialchars($art->Article_desc);?></content:encoded>
<pubDate><?php echo date("D, d M Y H:i:s O", strtotime($art->postTime));?></pubDate>


</item>
<?php endforeach;?>
</rss>
