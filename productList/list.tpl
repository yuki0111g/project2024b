<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="list.css">
    <title>商品一覧</title>
</head>

<h1>商品一覧</h1><table border="1">
<div id="column" class="column02">
<h3>2個並び</h3>
<ul>
{foreach $resultMarc as $loop}
<li><a href=""><img src={"../productImages/"|cat:$loop.image} /><p>{$loop.productName}</p><span>{$loop.value|cat:"円"}</span></a></li>
{/foreach}
</ul>
</div>




