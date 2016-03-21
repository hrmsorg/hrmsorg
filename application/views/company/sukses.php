<head>
<title>CARIKODE</title>
</head>
<body>
 
<h1>BERHASIL DI UPLOAD !!!!</h1>
 
<ul>
<?php foreach ($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>
 
<p><?php echo anchor('upload_file', 'Upload lagi'); ?></p>
 
</body>
</html>