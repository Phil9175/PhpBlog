<?php 
header('Content-Type: application/xml');
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
";
?>

<rss version="2.0">
	<channel>
		<title>Journal du référencement</title>
		<description>Flux RSS du journal du referencement</description>
			<lastBuildDate>Sat, 07 Sep 2002 00:00:01 GMT</lastBuildDate>
			<link>http://www.rss.rss</link>
			<?php
				foreach ($allArticles as $key => $values):
					?>
			<item>
						<title><?php echo $values['titre']; ?></title>
						<description><?php echo $values['titre']; ?></description>
						<pubDate><?php echo date('r', strtotime($values['date_publication'])); ?></pubDate>
						<link><?php echo ADRESSE_SITE.'/'.$values['article_url']; ?></link>
			</item>
				<?php
				endforeach;
				?>
	</channel>
</rss>
