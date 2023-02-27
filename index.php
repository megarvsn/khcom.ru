<? require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Стратегии, креативные концепции, дизайн, TVC – заказать в Москве");
$APPLICATION->SetTitle("Разработка креатива и дизайна");
$APPLICATION->SetPageProperty("keywords", "Реклама, стратегии, креатив, дизайн, ролики");
$APPLICATION->SetPageProperty("description", "Простая и понятная коммуникация с ЦА, закажите поп-идеи© для рекламы и дизайна у профессионалов в Москве. Индивидуальный подход от K&H Communications");
?>

<? $APPLICATION->IncludeComponent(
    "redcode:info.list",
    "slider",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "COMPONENT_TEMPLATE" => "slider",
        "FIELD_CODE" => array(
            0 => "NAME",
            1 => "PREVIEW_TEXT",
            2 => "DETAIL_PICTURE",
            3 => "",
        ),
        "IBLOCK_ID" => "13",
        "IBLOCK_TYPE" => "redcode_corporate",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "",
        "PREVIEW_TRUNCATE_LEN" => "200",
        "PROPERTY_CODE" => array(
            0 => "URL",
            1 => "URL_VIDEO",
            2 => "WIDTH",
            3 => "HEIGHT",
            4 => "",
        ),
        "SET_STATUS_404" => "Y",
        "SET_TITLE" => "N",
        "SHOW_404" => "Y",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "ASC",
        "FILE_404" => "",
        "CACHE_FILTER" => "N",
        "SET_BROWSER_TITLE" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_LAST_MODIFIED" => "",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "",
        "ADD_SECTIONS_CHAIN" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PAGER_TEMPLATE" => "",
        "DISPLAY_BOTTOM_PAGER" => "",
        "PAGER_TITLE" => "",
        "SLIDER_SPEED" => "200",
        "SHOW_DOTS" => "Y",
        "MOUSE_DRAG" => "N",
        "AUTOPLAY" => "N",
        "AUTOPLAY_SPEED" => "600",
        "AUTOPLAY_HOVER_PAUSE" => "Y",
        "LOOP" => "Y",
        "ANIMATION_SLIDER" => "fadeOut",
        "SHOW_NAV" => "Y"
    ),
    false
); ?>
    <div class="indexWrapper">
        <? $APPLICATION->IncludeComponent(
            "redcode:info.list",
            "theses",
            array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "COMPONENT_TEMPLATE" => "theses",
                "FIELD_CODE" => array(
                    0 => "NAME",
                    1 => "PREVIEW_TEXT",
                    2 => "DETAIL_PICTURE",
                    3 => "",
                ),
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "16",
                "IBLOCK_TYPE" => "redcode_corporate",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "4",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array(
                    0 => "ICON",
                    1 => "",
                ),
                "SET_STATUS_404" => "Y",
                "SET_TITLE" => "N",
                "SHOW_404" => "Y",
                "SORT_BY1" => "SORT",
                "SORT_BY2" => "ID",
                "SORT_ORDER1" => "ASC",
                "SORT_ORDER2" => "ASC",
                "FILE_404" => "",
                "INFO_LIST_TITLE" => "Что в нас особенного",
                "SET_BROWSER_TITLE" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_LAST_MODIFIED" => "",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "",
                "ADD_SECTIONS_CHAIN" => "",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PAGER_TEMPLATE" => "",
                "DISPLAY_BOTTOM_PAGER" => "",
                "PAGER_TITLE" => ""
            ),
            false
        ); ?>

        <? $APPLICATION->IncludeComponent("bitrix:catalog", "overview-works", array(
            "HEADER_MAIN" => 'Что мы делаем',
            'COUNT_WORD_H1' => 2, // Количество слов на красном поле в заголовке H1
            "COMPONENT_TEMPLATE" => "overview-works",
            "IBLOCK_TYPE" => "redcode_corporate",    // Тип инфоблока
            "IBLOCK_ID" => "11",    // Инфоблок
            "SIDEBAR_SECTION_SHOW" => "N",    // Показывать боковую панель в списке товаров
            "SIDEBAR_SECTION_POSITION" => "left",    // Расположение боковой панели в списке товаров
            "SIDEBAR_DETAIL_SHOW" => "N",    // Показывать боковую панель на детальной странице
            "SIDEBAR_DETAIL_POSITION" => "left",    // Расположение боковой панели на детальной странице
            "SIDEBAR_PATH" => "",    // Путь к включаемой области для вывода информации в боковой панели
            "USER_CONSENT" => "Y",    // Запрашивать согласие
            "USER_CONSENT_ID" => "1",    // Соглашение
            "USER_CONSENT_IS_CHECKED" => "Y",    // Галка по умолчанию проставлена
            "USER_CONSENT_IS_LOADED" => "N",    // Загружать текст сразу
            "SEF_MODE" => "Y",    // Включить поддержку ЧПУ
            "AJAX_MODE" => "N",    // Включить режим AJAX
            "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "N",    // Включить подгрузку стилей
            "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
            "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
            "CACHE_TYPE" => "A",    // Тип кеширования
            "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
            "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
            "CACHE_GROUPS" => "N",    // Учитывать права доступа
            "USE_MAIN_ELEMENT_SECTION" => "N",    // Использовать основной раздел для показа элемента
            "DETAIL_STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для детального показа элемента
            "SET_LAST_MODIFIED" => "Y",    // Устанавливать в заголовках ответа время модификации страницы
            "SET_TITLE" => "N",    // Устанавливать заголовок страницы
            "ADD_SECTIONS_CHAIN" => "Y",    // Включать раздел в цепочку навигации
            "ADD_ELEMENT_CHAIN" => "Y",    // Включать название элемента в цепочку навигации
            "USE_FILTER" => "N",    // Показывать фильтр
            "FILTER_VIEW_MODE" => "VERTICAL",    // Вид отображения умного фильтра
            "FILTER_HIDE_ON_MOBILE" => "N",    // Скрывать умный фильтр на мобильных устройствах
            "INSTANT_RELOAD" => "N",    // Мгновенная фильтрация при включенном AJAX
            "USE_REVIEW" => "N",
            "ACTION_VARIABLE" => "action",    // Название переменной, в которой передается действие
            "PRODUCT_ID_VARIABLE" => "id",    // Название переменной, в которой передается код товара для покупки
            "USE_COMPARE" => "N",    // Разрешить сравнение товаров
            "PRICE_CODE" => "",    // Тип цены
            "USE_PRICE_COUNT" => "N",    // Использовать вывод цен с диапазонами
            "SHOW_PRICE_COUNT" => "1",    // Выводить цены для количества
            "PRICE_VAT_INCLUDE" => "Y",    // Включать НДС в цену
            "PRICE_VAT_SHOW_VALUE" => "N",    // Отображать значение НДС
            "BASKET_URL" => "/personal/basket.php",    // URL, ведущий на страницу с корзиной покупателя
            "USE_PRODUCT_QUANTITY" => "N",    // Разрешить указание количества товара
            "PRODUCT_QUANTITY_VARIABLE" => "quantity",    // Название переменной, в которой передается количество товара
            "ADD_PROPERTIES_TO_BASKET" => "N",    // Добавлять в корзину свойства товаров и предложений
            "PRODUCT_PROPS_VARIABLE" => "prop",    // Название переменной, в которой передаются характеристики товара
            "PARTIAL_PRODUCT_PROPERTIES" => "N",    // Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
            "SEARCH_PAGE_RESULT_COUNT" => "50",    // Количество результатов на странице
            "SEARCH_RESTART" => "N",    // Искать без учета морфологии (при отсутствии результата поиска)
            "SEARCH_NO_WORD_LOGIC" => "Y",    // Отключить обработку слов как логических операторов
            "SEARCH_USE_LANGUAGE_GUESS" => "Y",    // Включить автоопределение раскладки клавиатуры
            "SEARCH_CHECK_DATES" => "Y",    // Искать только в активных по дате документах
            "SEARCH_USE_SEARCH_RESULT_ORDER" => "N",    // Использовать сортировку результатов по релевантности
            "SHOW_TOP_ELEMENTS" => "N",    // Выводить топ элементов
            "TOP_ELEMENT_COUNT" => "9",
            "TOP_LINE_ELEMENT_COUNT" => "4",
            "TOP_ELEMENT_SORT_FIELD" => "sort",
            "TOP_ELEMENT_SORT_ORDER" => "asc",
            "TOP_ELEMENT_SORT_FIELD2" => "id",
            "TOP_ELEMENT_SORT_ORDER2" => "desc",
            "TOP_VIEW_MODE" => "SECTION",
            "SECTION_COUNT_ELEMENTS" => "N",    // Показывать количество элементов в разделе
            "SECTION_TOP_DEPTH" => "2",    // Максимальная отображаемая глубина разделов
            "SECTIONS_VIEW_MODE" => "TILE",    // Вид списка подразделов
            "SECTIONS_SHOW_PARENT_NAME" => "Y",    // Показывать название раздела
            "ELEMENT_SORT_FIELD" => "sort",    // По какому полю сортируем товары в разделе
            "ELEMENT_SORT_ORDER" => "asc",    // Порядок сортировки товаров в разделе
            "ELEMENT_SORT_FIELD2" => "id",    // Поле для второй сортировки товаров в разделе
            "ELEMENT_SORT_ORDER2" => "desc",    // Порядок второй сортировки товаров в разделе
            "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
            "LIST_META_KEYWORDS" => "-",    // Установить ключевые слова страницы из свойства раздела
            "LIST_META_DESCRIPTION" => "-",    // Установить описание страницы из свойства раздела
            "LIST_BROWSER_TITLE" => "-",    // Установить заголовок окна браузера из свойства раздела
            "SECTION_BACKGROUND_IMAGE" => "-",    // Установить фоновую картинку для шаблона из свойства
            "DETAIL_META_KEYWORDS" => "-",    // Установить ключевые слова страницы из свойства
            "DETAIL_META_DESCRIPTION" => "-",    // Установить описание страницы из свойства
            "DETAIL_BROWSER_TITLE" => "-",    // Установить заголовок окна браузера из свойства
            "DETAIL_SET_CANONICAL_URL" => "Y",    // Устанавливать канонический URL
            "SECTION_ID_VARIABLE" => "SECTION_ID",    // Название переменной, в которой передается код группы
            "DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",    // Использовать код группы из переменной, если не задан раздел элемента
            "DETAIL_BACKGROUND_IMAGE" => "-",    // Установить фоновую картинку для шаблона из свойства
            "SHOW_DEACTIVATED" => "N",    // Показывать деактивированные товары
            "SHOW_SKU_DESCRIPTION" => "N",    // Отображать описание для каждого торгового предложения
            "DETAIL_USE_VOTE_RATING" => "N",    // Включить рейтинг товара
            "DETAIL_USE_COMMENTS" => "N",    // Включить отзывы о товаре
            "DETAIL_BRAND_USE" => "N",    // Использовать компонент "Бренды"
            "DETAIL_DISPLAY_NAME" => "Y",    // Выводить название элемента
            "DETAIL_IMAGE_RESOLUTION" => "1by1",    // Соотношение сторон изображения товара
            "DETAIL_PRODUCT_INFO_BLOCK_ORDER" => "sku,props",    // Порядок отображения блоков информации о товаре
            "DETAIL_PRODUCT_PAY_BLOCK_ORDER" => "rating,price,priceRanges,quantityLimit,quantity,buttons",    // Порядок отображения блоков покупки товара
            "DETAIL_SHOW_SLIDER" => "N",    // Показывать слайдер для товаров
            "DETAIL_DETAIL_PICTURE_MODE" => array(    // Режим показа детальной картинки
                0 => "POPUP",
                1 => "MAGNIFIER",
            ),
            "DETAIL_ADD_DETAIL_TO_SLIDER" => "N",    // Добавлять детальную картинку в слайдер
            "DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",    // Показ описания для анонса на детальной странице
            "DETAIL_SHOW_POPULAR" => "Y",    // Показывать блок "Популярное в разделе"
            "DETAIL_SHOW_VIEWED" => "Y",    // Показывать блок "Просматривали"
            "LINK_IBLOCK_TYPE" => "",    // Тип инфоблока, элементы которого связаны с текущим элементом
            "LINK_IBLOCK_ID" => "",    // ID инфоблока, элементы которого связаны с текущим элементом
            "LINK_PROPERTY_SID" => "",    // Свойство, в котором хранится связь
            "LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",    // URL на страницу, где будет показан список связанных элементов
            "USE_STORE" => "N",    // Показывать блок "Количество товара на складе"
            "USE_ENHANCED_ECOMMERCE" => "N",    // Включить отправку данных в электронную торговлю
            "PAGER_TEMPLATE" => "default",    // Шаблон постраничной навигации
            "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
            "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
            "PAGER_TITLE" => "Товары",    // Название категорий
            "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
            "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
            "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
            "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
            "LAZY_LOAD" => "Y",    // Показать кнопку ленивой загрузки Lazy Load
            "LOAD_ON_SCROLL" => "Y",    // Подгружать товары при прокрутке до конца
            "SET_STATUS_404" => "N",    // Устанавливать статус 404
            "SHOW_404" => "N",    // Показ специальной страницы
            "MESSAGE_404" => "",
            "COMPATIBLE_MODE" => "N",    // Включить режим совместимости
            "USE_ELEMENT_COUNTER" => "N",    // Использовать счетчик просмотров
            "DISABLE_INIT_JS_IN_COMPONENT" => "N",    // Не подключать js-библиотеки в компоненте
            "ADD_PICT_PROP" => "UP_IMG",    // Дополнительная картинка основного товара
            "LABEL_PROP" => "",    // Свойство меток товара
            "SEF_FOLDER" => "/overview-works/",    // Каталог ЧПУ (относительно корня сайта)
            "PAGE_ELEMENT_COUNT" => "8",    // Количество элементов на странице
            "LINE_ELEMENT_COUNT" => "4",    // Количество элементов, выводимых в одной строке таблицы
            "LIST_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",    // Порядок отображения блоков товара
            "LIST_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'3','BIG_DATA':false}]",    // Вариант отображения товаров
            "LIST_ENLARGE_PRODUCT" => "STRICT",    // Выделять товары в списке
            "LIST_SHOW_SLIDER" => "Y",    // Показывать слайдер для товаров
            "LIST_SLIDER_INTERVAL" => "3000",    // Интервал смены слайдов, мс
            "LIST_SLIDER_PROGRESS" => "Y",    // Показывать полосу прогресса
            "MESS_BTN_LAZY_LOAD" => "Показать ещё",    // Текст кнопки "Показать ещё"
            "PRODUCT_PROPERTIES" => "",
            "LIST_PROPERTY_CODE" => array(
                0 => "",
            ),
            "DETAIL_PROPERTY_CODE" => array(
                0 => "",
            ),
            "LIST_PROPERTY_CODE_MOBILE" => "",
            "DETAIL_MAIN_BLOCK_PROPERTY_CODE" => "",
            "SEF_URL_TEMPLATES" => array(
                "sections" => "",
                "section" => "#SECTION_CODE#/",
                "element" => "#SECTION_CODE#/#ELEMENT_CODE#/",
                "compare" => "compare.php?action=#ACTION_CODE#",
                "smart_filter" => "#SECTION_ID#/filter/#SMART_FILTER_PATH#/apply/",
            ),
            "VARIABLE_ALIASES" => array(
                "compare" => array(
                    "ACTION_CODE" => "action",
                ),
            )
        ),
            false
        ); ?>
    </div>
    <div class="indexWrapper">
        <? $APPLICATION->IncludeComponent("bitrix:news.list", "main-advantages", array(
            "COMPONENT_TEMPLATE" => "main-advantages",
            "IBLOCK_TYPE" => "redcode_corporate",    // Тип информационного блока (используется только для проверки)
            "IBLOCK_ID" => "18",    // Код информационного блока
            "NEWS_COUNT" => "1000",    // Количество новостей на странице
            "SORT_BY1" => "NAME",    // Поле для первой сортировки новостей
            "SORT_ORDER1" => "ASC",    // Направление для первой сортировки новостей
            "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
            "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
            "FILTER_NAME" => "",    // Фильтр
            "FIELD_CODE" => array(    // Поля
                0 => "NAME",
                1 => "",
            ),
            "PROPERTY_CODE" => array(    // Свойства
                0 => "UP_SVG",
                1 => "",
            ),
            "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
            "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
            "AJAX_MODE" => "N",    // Включить режим AJAX
            "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
            "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
            "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
            "CACHE_TYPE" => "A",    // Тип кеширования
            "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
            "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
            "CACHE_GROUPS" => "Y",    // Учитывать права доступа
            "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
            "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
            "SET_TITLE" => "N",    // Устанавливать заголовок страницы
            "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
            "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
            "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
            "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
            "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
            "PARENT_SECTION" => "",    // ID раздела
            "PARENT_SECTION_CODE" => "history",    // Код раздела
            "INCLUDE_SUBSECTIONS" => "N",    // Показывать элементы подразделов раздела
            "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
            "DISPLAY_DATE" => "Y",    // Выводить дату элемента
            "DISPLAY_NAME" => "Y",    // Выводить название элемента
            "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
            "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
            "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
            "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
            "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
            "PAGER_TITLE" => "Новости",    // Название категорий
            "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
            "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
            "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
            "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
            "SET_STATUS_404" => "N",    // Устанавливать статус 404
            "SHOW_404" => "N",    // Показ специальной страницы
            "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
        ),
            false
        ); ?>
    </div>
    <div class="map">
        <div class="wrapper_map">
            <div class="map_inside">
                <? $APPLICATION->IncludeComponent(
                    "redcode:feedback",
                    "mapCallBack",
                    array(
                        "EMAIL_TO" => "iakiseleva2007@yandex.ru",
                        "REQUIRED_FIELDS" => array(
                            0 => "NAME",
                            1 => "EMAIL",
                        ),
                        "COMPONENT_TEMPLATE" => "mapCallBack",
                        "EVENT_MESSAGE_ID" => "14",
                        "ELEMENT_FORM" => array(
                            0 => "NAME",
                            3 => "EMAIL",
                            4 => "MESSAGE",
                        ),
                        "OPTION_THEME" => $optionTheme,
                    ),
                    false
                ); ?>
            </div>
        </div>
        <? $APPLICATION->IncludeComponent(
            "redcode:info.list",
            "indexContacts",
            array(
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "COMPONENT_TEMPLATE" => "indexContacts",
                "FIELD_CODE" => array(
                    0 => "NAME",
                    1 => "PREVIEW_TEXT",
                    2 => "DETAIL_PICTURE",
                    3 => "",
                ),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "4",
                "IBLOCK_TYPE" => "redcode_corporate",
                "NEWS_COUNT" => "1",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PROPERTY_CODE" => array(
                    0 => "MAP_COORDINATE",
                    1 => "MORE_TEXT",
                    2 => "",
                ),
                "SET_STATUS_404" => "Y",
                "SHOW_404" => "Y",
                "SORT_BY1" => "ID",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "ASC",
                "SORT_ORDER2" => "ASC",
                "FILE_404" => "",
                "ZOOM_MAP" => "16",
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_LAST_MODIFIED" => "Y",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "",
                "ADD_SECTIONS_CHAIN" => "",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PAGER_TEMPLATE" => "",
                "DISPLAY_BOTTOM_PAGER" => "",
                "PAGER_TITLE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "ACTIVE_DATE_FORMAT" => ""
            ),
            false
        ); ?>
    </div>

<? require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>