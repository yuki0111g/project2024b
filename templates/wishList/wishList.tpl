<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お気に入りページ</title>
    
</head>
<body>
    <header>
        <h1>お気に入りページ</h1>
        
    </header>
    <main>
        <h2>欲しいものリスト</h2>
        <form id="wishlistForm" action="wishList.php" method="post">
        {foreach $resultMarc as $loop}
        {array_push($loop, $key)}
            <div class="item">
                <input type="checkbox" id="apple" name="item" value="{$loop.productName}">
                <label for="apple">
                    <img src={"./productImages/"|cat:$loop.image} alt={$loop.productName}>
                    {$loop.productName}
                </label>
                    <input type="hidden" name="delete_index" value={$loop.whitelist_id}>
                    <input type="submit" class="cart-btn" name="add_cart" value="カートに追加(まだできない)">
                    <input type="submit" class="delete-btn" name="delete_item" value="削除">
            </div>
        {/foreach}
            <button type="button" onclick="showSelectedItems()">購入したものをお気に入りに追加</button>
        </form>
       
    </main>
    <script>
        function showSelectedItems() {
            const form = document.getElementById('wishlistForm');
            const selectedItems = [];
            const checkboxes = form.querySelectorAll('input[name="item"]:checked');

            checkboxes.forEach(checkbox => {
                selectedItems.push(checkbox.value);
            });

            const selectedItemsList = document.getElementById('selectedItems');
            selectedItemsList.innerHTML = '';
            
            if (selectedItems.length > 0) {
                selectedItems.forEach(item => {
                    const listItem = document.createElement('li');
                    listItem.textContent = item;

                    const deleteButton = document.createElement('button');
                    deleteButton.textContent = '削除';
                    deleteButton.onclick = function() {
                        listItem.remove();
                    };

                    listItem.appendChild(deleteButton);
                    selectedItemsList.appendChild(listItem);
                });
            } else {
                selectedItemsList.textContent = 'お気に入り商品がありません。';
            }
        }

        function searchFavoriteItems() {
            const searchInput = document.getElementById('searchInput').value.toLowerCase();
            const items = document.querySelectorAll('.result li');

            items.forEach(item => {
                const label = item.textContent.toLowerCase();
                if (label.includes(searchInput)) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        function updateItemsList() {
            const itemLimit = document.getElementById('itemLimit').value;
            const items = document.querySelectorAll('.result li');
            let count = 0;

            items.forEach(item => {
                if (count < itemLimit) {
                    item.style.display = 'flex';
                    count++;
                } else {
                    item.style.display = 'none';
                }
            });
        }

        document.getElementById('itemLimit').addEventListener('input', updateItemsList);
    </script>
</body>
</html>
