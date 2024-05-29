<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dist/css/app/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('dist/js/app/app.js') }}"></script>
    <title>Пластинка</title>
</head>
<body>
<div class="hero__block-wrapper">
    @include('layouts.header')
</div>
<main>
    <div class="container-personal-account">
        <h1 class="personal-account-title">Личный кабинет</h1>
        <div class="profile-section">
            <h2 class="section-title">Профиль</h2>
            <div class="profile-info">
                <p><strong>Имя:</strong> <span id="profile-name">Иван Иванов</span></p>
                <p><strong>Email:</strong> <span id="profile-email">ivan@example.com</span></p>
                <button id="edit-profile-btn" class="btn">Редактировать профиль</button>
            </div>
            <div class="edit-profile-form" style="display: none;">
                <h3 class="section-title">Редактировать профиль</h3>
                <form id="profile-form">
                    <label for="name" class="form-label">Имя:</label>
                    <input type="text" id="name" class="form-input" value="Иван Иванов">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" class="form-input" value="ivan@example.com">
                    <button type="submit" class="btn">Сохранить</button>
                    <button type="button" id="cancel-edit-profile" class="btn btn-secondary">Отмена</button>
                </form>
            </div>
        </div>

        <div class="addresses-section">
            <h2 class="section-title">Адреса доставки</h2>
            <ul id="address-list" class="address-list">
                <li class="address-item">
                    <span class="address-text">Москва, ул. Пушкина, д. 10</span>
                    <button class="edit-address-btn btn">Редактировать</button>
                    <button class="delete-address-btn btn btn-danger">Удалить</button>
                </li>
            </ul>
            <button id="add-address-btn" class="btn">Добавить адрес</button>
            <div class="add-address-form" style="display: none;">
                <h3 class="section-title">Добавить/Редактировать адрес</h3>
                <form id="address-form">
                    <label for="address" class="form-label">Адрес:</label>
                    <input type="text" id="address" class="form-input" placeholder="Введите адрес">
                    <button type="submit" class="btn">Сохранить</button>
                    <button type="button" id="cancel-add-address" class="btn btn-secondary">Отмена</button>
                </form>
            </div>
        </div>

        <div class="orders-section">
            <h2 class="section-title">Мои заказы</h2>
            <ul id="order-list" class="order-list">
                <li class="order-item">
                    <span class="order-text">Заказ №1234 - Статус: Доставлен</span>
                    <button class="view-order-btn btn">Просмотр</button>
                </li>
                <li class="order-item">
                    <span class="order-text">Заказ №5678 - Статус: В пути</span>
                    <button class="view-order-btn btn">Просмотр</button>
                </li>
            </ul>
        </div>
    </div>
</main>
@include('layouts.footer')
</body>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const profileForm = document.getElementById('profile-form');
        const editProfileBtn = document.getElementById('edit-profile-btn');
        const cancelEditProfileBtn = document.getElementById('cancel-edit-profile');
        const profileInfo = document.querySelector('.profile-info');
        const editProfileForm = document.querySelector('.edit-profile-form');

        const addressForm = document.getElementById('address-form');
        const addAddressBtn = document.getElementById('add-address-btn');
        const cancelAddAddressBtn = document.getElementById('cancel-add-address');
        const addressList = document.getElementById('address-list');
        const addAddressForm = document.querySelector('.add-address-form');

        const orderList = document.getElementById('order-list');

        let editAddressIndex = null;

        // Редактирование профиля
        editProfileBtn.addEventListener('click', () => {
            profileInfo.style.display = 'none';
            editProfileForm.style.display = 'block';
        });

        cancelEditProfileBtn.addEventListener('click', () => {
            profileInfo.style.display = 'block';
            editProfileForm.style.display = 'none';
        });

        profileForm.addEventListener('submit', (e) => {
            e.preventDefault();
            document.getElementById('profile-name').textContent = document.getElementById('name').value;
            document.getElementById('profile-email').textContent = document.getElementById('email').value;
            profileInfo.style.display = 'block';
            editProfileForm.style.display = 'none';
        });

        // Добавление/редактирование адреса
        addAddressBtn.addEventListener('click', () => {
            addAddressForm.style.display = 'block';
            addressForm.reset();
            editAddressIndex = null;
        });

        cancelAddAddressBtn.addEventListener('click', () => {
            addAddressForm.style.display = 'none';
        });

        addressForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const addressValue = document.getElementById('address').value;
            if (editAddressIndex !== null) {
                addressList.children[editAddressIndex].querySelector('.address-text').textContent = addressValue;
            } else {
                const li = document.createElement('li');
                li.classList.add('address-item');
                li.innerHTML = `<span class="address-text">${addressValue}</span>
                            <button class="edit-address-btn btn">Редактировать</button>
                            <button class="delete-address-btn btn btn-danger">Удалить</button>`;
                addressList.appendChild(li);
            }
            addAddressForm.style.display = 'none';
        });

        // Редактирование и удаление адреса
        addressList.addEventListener('click', (e) => {
            if (e.target.classList.contains('edit-address-btn')) {
                const li = e.target.closest('.address-item');
                document.getElementById('address').value = li.querySelector('.address-text').textContent;
                addAddressForm.style.display = 'block';
                editAddressIndex = Array.from(addressList.children).indexOf(li);
            } else if (e.target.classList.contains('delete-address-btn')) {
                e.target.closest('.address-item').remove();
            }
        });

        // Просмотр заказа
        orderList.addEventListener('click', (e) => {
            if (e.target.classList.contains('view-order-btn')) {
                const orderInfo = e.target.closest('.order-item').querySelector('.order-text').textContent;
                alert(`Информация о заказе: ${orderInfo}`);
            }
        });
    });

</script>
</html>
