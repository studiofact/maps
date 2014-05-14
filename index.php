<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Где купить");
$APPLICATION->AddChainItem("Где купить");
?>
<section class='decorated_head'>
    <div class="image align_center">
        <img src="<?=SITE_TEMPLATE_PATH?>/images/map_logo.png" alt=""/>
    </div>

    <h1 class='align_center blue'>ГДЕ КУПИТЬ</h1>

    <p>
        Не следует, однако забывать, что новая модель организационной деятельности играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям. Значимость этих проблем настолько очевидна, что постоянный количественный рост и сфера нашей активности требуют от нас анализа соответствующий условий активизации. Идейные соображения высшего порядка, а также укрепление и развитие структуры обеспечивает широкому кругу (специалистов) участие в формировании позиций, занимаемых участниками в отношении поставленных задач. Идейные соображения высшего порядка, а также новая модель организационной деятельности позволяет оценить значение модели развития. Повседневная практика показывает, что сложившаяся структура организации представляет собой интересный эксперимент проверки модели развития.
    </p>

    <ul class="head_menu table_emulate interactive">
        <li class='cell_emulate'><a href='#' data-type='1'>Филиалы</a></li>
        <li class='cell_emulate'><a href='#' data-type='2'>Официальные представители</a></li>
        <li class='cell_emulate'><a href='#' data-type='3'>Фирменные магазины</a></li>
        <li class='cell_emulate'><a href='#' data-type='4'>Интернет магазин</a></li>
        <li class='cell_emulate'><a href='#' data-type='5'>Сервисные центры</a></li>
        <li class='cell_emulate'><a href='#' data-type='all'>Все</a></li>
    </ul>

    <div class="shadow_line blue top"></div>

</section>
<section class='main_wrapper'>
<?$APPLICATION->IncludeComponent("bitrix:catalog.section", "magasines", Array(
	"IBLOCK_TYPE" => "magasines_s2",	// Тип инфоблока
	"IBLOCK_ID" => "24",	// Инфоблок
	"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
	"SECTION_CODE" => "",	// Код раздела
	"SECTION_USER_FIELDS" => array(	// Свойства раздела
		0 => "UF_MAP_POS_TOP",
		1 => "UF_MAP_POS_LEFT",
		2 => "UF_OKRUG_LINK",
		3 => "",
	),
	"ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем элементы
	"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки элементов
	"ELEMENT_SORT_FIELD2" => "name",	// Поле для второй сортировки элементов
	"ELEMENT_SORT_ORDER2" => "asc",	// Порядок второй сортировки элементов
	"FILTER_NAME" => "arrFilter",	// Имя массива со значениями фильтра для фильтрации элементов
	"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
	"SHOW_ALL_WO_SECTION" => "Y",	// Показывать все элементы, если не указан раздел
	"HIDE_NOT_AVAILABLE" => "Y",	// Не отображать товары, которых нет на складах
	"PAGE_ELEMENT_COUNT" => "30",	// Количество элементов на странице
	"LINE_ELEMENT_COUNT" => "3",	// Количество элементов выводимых в одной строке таблицы
	"PROPERTY_CODE" => array(	// Свойства
		0 => "EMAILS",
		1 => "ADRESS",
		2 => "YAMAPS_COORDS",
		3 => "SITES",
		4 => "PHONES",
		5 => "TYPE_MARKET",
		6 => "",
	),
	"OFFERS_LIMIT" => "5",	// Максимальное количество предложений для показа (0 - все)
	"ADD_PICT_PROP" => "-",	// Дополнительная картинка основного товара
	"LABEL_PROP" => "-",	// Свойство меток товара
	"PRODUCT_SUBSCRIPTION" => "N",	// Разрешить оповещения для отсутствующих товаров
	"SHOW_DISCOUNT_PERCENT" => "N",	// Показывать процент скидки
	"SHOW_OLD_PRICE" => "N",	// Показывать старую цену
	"MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
	"MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
	"MESS_BTN_SUBSCRIBE" => "Подписаться",	// Текст кнопки "Уведомить о поступлении"
	"MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
	"MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
	"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
	"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
	"BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
	"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
	"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
	"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Название переменной, в которой передается количество товара
	"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
	"SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
	"AJAX_MODE" => "N",	// Включить режим AJAX
	"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
	"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
	"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
	"CACHE_TYPE" => "A",	// Тип кеширования
	"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
	"CACHE_GROUPS" => "Y",	// Учитывать права доступа
	"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
	"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
	"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
	"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
	"DISPLAY_COMPARE" => "N",	// Выводить кнопку сравнения
	"SET_TITLE" => "N",	// Устанавливать заголовок страницы
	"SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
	"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
	"PRICE_CODE" => "",	// Тип цены
	"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
	"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
	"PRICE_VAT_INCLUDE" => "N",	// Включать НДС в цену
	"PRODUCT_PROPERTIES" => "",	// Характеристики товара
	"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
	"CONVERT_CURRENCY" => "N",	// Показывать цены в одной валюте
	"PAGER_TEMPLATE" => "",	// Шаблон постраничной навигации
	"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
	"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
	"PAGER_TITLE" => "Товары",	// Название категорий
	"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
	"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
	"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
	"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
	),
	false
);?> 
   
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>