<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина - 17 Carat</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="logo3.png" type="image/x-icon"> <!-- Иконка вкладки -->
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet"> <!-- Подключение шрифта PT Serif -->
</head>
<body class="cart-page">
    <div class="container">
        <!-- Блок 1: Логотип и навигация -->
        <div class="header">
            <div class="logo">
                <img src="logob.png" alt="17 Carat Logo">
            </div>
            <div class="nav">
                <a href="index.html">Главная</a>
                <a href="catalog.php">Каталог</a>
                <a href="cart.php">Корзина</a>
            </div>
        </div>

        <!-- Блок 2: Корзина -->
        <div class="cart-section">
            <div class="cart-items" id="cart-items">
                <!-- Товары будут добавляться здесь с помощью JavaScript -->
            </div>
            <div class="delivery-form">
                <h3>Способ доставки</h3>
                <form id="deliveryForm" action="feedback.php" method="POST">
                    <label>
                        <input type="checkbox" name="delivery" value="pickup">
                        Самовывоз из магазина
                    </label>
                    <label>
                        <input type="checkbox" name="delivery" value="courier">
                        Доставка курьером
                    </label>
                    <div class="courier-details" style="display: none;">
                        <label for="address">Укажите адрес доставки:</label>
                        <input type="text" id="address" name="address" placeholder="Укажите адрес доставки" required>
                        <label for="phone">Укажите номер телефона:</label>
                        <input type="text" id="phone" name="phone" placeholder="Укажите номер телефона" required>
                    </div>
                    <button type="submit">Заказать</button>
                </form>
            </div>
            <div class="cart-total">
                <h2>Итого</h2>
                <p id="total-price">0 руб.</p>
            </div>
        </div>
    </div>

    <!-- Блок 3: Футер с контактами -->
    <div class="footer">
        <div class="footer-logo">
            <img src="logo1.png" alt="17 Carat Logo">
        </div>
        <div class="contacts">
            <p>Контакты</p>
            <p>8-***-***-****</p>
            <p>17caratshop@mail.ru</p>
            <p>Ульяновск, ул. Университетская набережная, 40</p>
        </div>
    </div>

    <script src="scripts.js"></script>
    <script>
        // JavaScript для отображения полей доставки курьером
        const deliveryForm = document.getElementById('deliveryForm');
        const courierDetails = document.querySelector('.courier-details');
        const courierCheckbox = document.querySelector('input[value="courier"]');

        courierCheckbox.addEventListener('change', function() {
            if (courierCheckbox.checked) {
                courierDetails.style.display = 'block';
            } else {
                courierDetails.style.display = 'none';
            }
        });
    </script>
</body>
</html>
