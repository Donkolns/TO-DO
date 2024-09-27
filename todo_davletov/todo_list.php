<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список дел</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="js/script.js" defer></script>
</head>

<body>

    <div class="container">
        <header>
            <h1>TODO LIST</h1>
            <div class="controls">
    <input type="text" id="search-task" class="text" placeholder="Поиск записей">
    <select id="filter-task">
        <option value="all">ВСЕ</option>
        <option value="completed">ВЫПОЛНЕННЫЕ</option>
        <option value="incomplete">НЕВЫПОЛНЕННЫЕ</option>
    </select>
    <button id="theme-toggle">
        <img id="theme-icon" src="images/moon.png" alt="Тёмная тема">
    </button>
</div>


            <a href="sign/logout.php" class="logout">Выйти</a>
        </header>

        <div class="task-form">
            <button class="add-task-btn" onclick="openModal()">
                <img src="images/Vector.png" alt="Добавить задачу">
            </button>

            <div class="task-list">
            </div>

        </div>
    </div>

    <div id="modal" class="modal">
        <div class="modal-content">
            <h2>НОВАЯ ЗАПИСЬ</h2>
            <div class="text-div">
                <input type="text" id="note-title" placeholder="Название">
                <textarea id="note-input" placeholder="Описание"></textarea>
                <div class="modal-actions">
                    <button id="cancel-btn" class="modal-btn cancel">ОТМЕНА</button>
                    <button id="apply-btn" class="modal-btn apply">ДОБАВИТЬ</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>