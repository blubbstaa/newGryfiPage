<?php namespace PHPSTORM_META { $STATIC_METHOD_TYPES = array(\Core::make('') => array(
'config' instanceof \Concrete\Core\Config\Repository\Repository,
'config/database' instanceof \Concrete\Core\Config\Repository\Repository,
'director' instanceof \Symfony\Component\EventDispatcher\EventDispatcher,
'helper/file' instanceof \Concrete\Core\File\Service\File,
'helper/concrete/file' instanceof \Concrete\Core\File\Service\Application,
'helper/image' instanceof \Concrete\Core\File\Image\BasicThumbnailer,
'helper/mime' instanceof \Concrete\Core\File\Service\Mime,
'image/imagick' instanceof \Imagine\Imagick\Imagine,
'image/gd' instanceof \Imagine\Gd\Imagine,
'image/thumbnailer' instanceof \Concrete\Core\File\Image\BasicThumbnailer,
'helper/encryption' instanceof \Concrete\Core\Encryption\EncryptionService,
'helper/validation/antispam' instanceof \Concrete\Core\Antispam\Service,
'helper/validation/captcha' instanceof \Concrete\Core\Captcha\Service,
'helper/validation/file' instanceof \Concrete\Core\File\ValidationService,
'helper/validation/form' instanceof \Concrete\Core\Form\Service\Validation,
'helper/validation/identifier' instanceof \Concrete\Core\Utility\Service\Identifier,
'helper/validation/ip' instanceof \Concrete\Core\Permission\IPService,
'helper/validation/numbers' instanceof \Concrete\Core\Utility\Service\Validation\Numbers,
'helper/validation/strings' instanceof \Concrete\Core\Utility\Service\Validation\Strings,
'helper/validation/banned_words' instanceof \Concrete\Core\Validation\BannedWord\Service,
'helper/security' instanceof \Concrete\Core\Validation\SanitizeService,
'captcha' instanceof \Concrete\Core\Captcha\Service,
'ip' instanceof \Concrete\Core\Permission\IPService,
'helper/validation/token' instanceof \Concrete\Core\Validation\CSRF\Token,
'helper/validation/error' instanceof \Concrete\Core\Error\Error,
'token' instanceof \Concrete\Core\Validation\CSRF\Token,
'helper/localization/countries' instanceof \Concrete\Core\Localization\Service\CountryList,
'helper/localization/states_provinces' instanceof \Concrete\Core\Localization\Service\StatesProvincesList,
'helper/lists/countries' instanceof \Concrete\Core\Localization\Service\CountryList,
'helper/lists/states_provinces' instanceof \Concrete\Core\Localization\Service\StatesProvincesList,
'helper/date' instanceof \Concrete\Core\Localization\Service\Date,
'localization/countries' instanceof \Concrete\Core\Localization\Service\CountryList,
'localization/states_provinces' instanceof \Concrete\Core\Localization\Service\StatesProvincesList,
'localization/languages' instanceof \Concrete\Core\Localization\Service\LanguageList,
'lists/countries' instanceof \Concrete\Core\Localization\Service\CountryList,
'lists/states_provinces' instanceof \Concrete\Core\Localization\Service\StatesProvincesList,
'date' instanceof \Concrete\Core\Localization\Service\Date,
'multilingual/interface/flag' instanceof \Concrete\Core\Multilingual\Service\UserInterface\Flag,
'multilingual/detector' instanceof \Concrete\Core\Multilingual\Service\Detector,
'multilingual/extractor' instanceof \Concrete\Core\Multilingual\Service\Extractor,
'helper/feed' instanceof \Concrete\Core\Feed\FeedService,
'helper/html' instanceof \Concrete\Core\Html\Service\Html,
'helper/lightbox' instanceof \Concrete\Core\Html\Service\Lightbox,
'helper/navigation' instanceof \Concrete\Core\Html\Service\Navigation,
'helper/seo' instanceof \Concrete\Core\Html\Service\Seo,
'html/image' instanceof \Concrete\Core\Html\Image,
'editor' instanceof \Concrete\Core\Editor\RedactorEditor,
'helper/mail' instanceof \Concrete\Core\Mail\Service,
'mail' instanceof \Concrete\Core\Mail\Service,
'helper/concrete/asset_library' instanceof \Concrete\Core\Application\Service\FileManager,
'helper/concrete/file_manager' instanceof \Concrete\Core\Application\Service\FileManager,
'helper/concrete/avatar' instanceof \Concrete\Core\Application\Service\Avatar,
'helper/concrete/composer' instanceof \Concrete\Core\Application\Service\Composer,
'helper/concrete/dashboard' instanceof \Concrete\Core\Application\Service\Dashboard,
'helper/concrete/dashboard/sitemap' instanceof \Concrete\Core\Application\Service\Dashboard\Sitemap,
'helper/concrete/ui' instanceof \Concrete\Core\Application\Service\UserInterface,
'helper/concrete/ui/menu' instanceof \Concrete\Core\Application\Service\UserInterface\Menu,
'helper/concrete/ui/help' instanceof \Concrete\Core\Application\Service\UserInterface\Help,
'helper/concrete/upgrade' instanceof \Concrete\Core\Application\Service\Upgrade,
'helper/concrete/urls' instanceof \Concrete\Core\Application\Service\Urls,
'helper/concrete/user' instanceof \Concrete\Core\Application\Service\User,
'helper/concrete/validation' instanceof \Concrete\Core\Application\Service\Validation,
'helper/rating' instanceof \Concrete\Attribute\Rating\Service,
'helper/pagination' instanceof \Concrete\Core\Legacy\Pagination,
'help' instanceof \Concrete\Core\Application\Service\UserInterface\Help,
'help/core' instanceof \Concrete\Core\Application\Service\UserInterface\Help\CoreManager,
'help/dashboard' instanceof \Concrete\Core\Application\Service\UserInterface\Help\DashboardManager,
'help/block_type' instanceof \Concrete\Core\Application\Service\UserInterface\Help\BlockTypeManager,
'help/panel' instanceof \Concrete\Core\Application\Service\UserInterface\Help\PanelManager,
'error' instanceof \Concrete\Core\Error\Error,
'helper/text' instanceof \Concrete\Core\Utility\Service\Text,
'helper/arrays' instanceof \Concrete\Core\Utility\Service\Arrays,
'helper/number' instanceof \Concrete\Core\Utility\Service\Number,
'helper/xml' instanceof \Concrete\Core\Utility\Service\Xml,
'helper/url' instanceof \Concrete\Core\Utility\Service\Url,
'manager/grid_framework' instanceof \Concrete\Core\Page\Theme\GridFramework\Manager,
'manager/view/pagination' instanceof \Concrete\Core\Search\Pagination\View\Manager,
'manager/page_type/validator' instanceof \Concrete\Core\Page\Type\Validator\Manager,
'manager/area_layout_preset_provider' instanceof \Concrete\Core\Area\Layout\Preset\Provider\Manager,
'database' instanceof \Concrete\Core\Database\DatabaseManager,
'database/orm' instanceof \Concrete\Core\Database\DatabaseManagerORM,
'helper/form' instanceof \Concrete\Core\Form\Service\Form,
'helper/form/attribute' instanceof \Concrete\Core\Form\Service\Widget\Attribute,
'helper/form/color' instanceof \Concrete\Core\Form\Service\Widget\Color,
'helper/form/font' instanceof \Concrete\Core\Form\Service\Widget\Typography,
'helper/form/typography' instanceof \Concrete\Core\Form\Service\Widget\Typography,
'helper/form/date_time' instanceof \Concrete\Core\Form\Service\Widget\DateTime,
'helper/form/page_selector' instanceof \Concrete\Core\Form\Service\Widget\PageSelector,
'helper/form/rating' instanceof \Concrete\Core\Form\Service\Widget\Rating,
'helper/form/user_selector' instanceof \Concrete\Core\Form\Service\Widget\UserSelector,
'session' instanceof \Symfony\Component\HttpFoundation\Session\Session,
'cookie' instanceof \Concrete\Core\Cookie\CookieJar,
'helper/ajax' instanceof \Concrete\Core\Http\Service\Ajax,
'helper/json' instanceof \Concrete\Core\Http\Service\Json,
'cache' instanceof \Concrete\Core\Cache\Level\ObjectCache,
'cache/request' instanceof \Concrete\Core\Cache\Level\RequestCache,
'cache/expensive' instanceof \Concrete\Core\Cache\Level\ExpensiveCache,
'url/canonical/resolver' instanceof \Concrete\Core\Url\Resolver\CanonicalUrlResolver,
'url/canonical' instanceof \Concrete\Core\Url\UrlImmutable,
'url/resolver/path' instanceof \Concrete\Core\Url\Resolver\PathUrlResolver,
'url/resolver/page' instanceof \Concrete\Core\Url\Resolver\PageUrlResolver,
'url/resolver/route' instanceof \Concrete\Core\Url\Resolver\RouteUrlResolver,
'url/manager' instanceof \Concrete\Core\Url\Resolver\Manager\ResolverManager,
'device/manager' instanceof \Concrete\Core\Device\DeviceManager,
'editor/image/extension/factory' instanceof \Concrete\Core\ImageEditor\ExtensionFactory,
'editor/image' instanceof \Concrete\Core\ImageEditor\ImageEditor,
'editor/image/core' instanceof \Concrete\Core\ImageEditor\ImageEditor,
'oauth/factory/service' instanceof \OAuth\ServiceFactory,
'oauth/factory/extractor' instanceof \OAuth\UserData\ExtractorFactory,
'authentication/community' instanceof \Concrete\Core\Authentication\Type\Community\Service\Community,
'authentication/facebook' instanceof \OAuth\OAuth2\Service\Facebook,
'authentication/google' instanceof \OAuth\OAuth2\Service\Google,
'authentication/twitter' instanceof \OAuth\OAuth1\Service\Twitter,
'app' instanceof Concrete\Core\Application\Application,
'log' instanceof Concrete\Core\Logging\Logger,
), \Loader::helper('') => array('file' instanceof \Concrete\Core\File\Service\File,
'concrete/file' instanceof \Concrete\Core\File\Service\Application,
'image' instanceof \Concrete\Core\File\Image\BasicThumbnailer,
'mime' instanceof \Concrete\Core\File\Service\Mime,
'encryption' instanceof \Concrete\Core\Encryption\EncryptionService,
'validation/antispam' instanceof \Concrete\Core\Antispam\Service,
'validation/captcha' instanceof \Concrete\Core\Captcha\Service,
'validation/file' instanceof \Concrete\Core\File\ValidationService,
'validation/form' instanceof \Concrete\Core\Form\Service\Validation,
'validation/identifier' instanceof \Concrete\Core\Utility\Service\Identifier,
'validation/ip' instanceof \Concrete\Core\Permission\IPService,
'validation/numbers' instanceof \Concrete\Core\Utility\Service\Validation\Numbers,
'validation/strings' instanceof \Concrete\Core\Utility\Service\Validation\Strings,
'validation/banned_words' instanceof \Concrete\Core\Validation\BannedWord\Service,
'security' instanceof \Concrete\Core\Validation\SanitizeService,
'validation/token' instanceof \Concrete\Core\Validation\CSRF\Token,
'validation/error' instanceof \Concrete\Core\Error\Error,
'localization/countries' instanceof \Concrete\Core\Localization\Service\CountryList,
'localization/states_provinces' instanceof \Concrete\Core\Localization\Service\StatesProvincesList,
'lists/countries' instanceof \Concrete\Core\Localization\Service\CountryList,
'lists/states_provinces' instanceof \Concrete\Core\Localization\Service\StatesProvincesList,
'date' instanceof \Concrete\Core\Localization\Service\Date,
'feed' instanceof \Concrete\Core\Feed\FeedService,
'html' instanceof \Concrete\Core\Html\Service\Html,
'lightbox' instanceof \Concrete\Core\Html\Service\Lightbox,
'navigation' instanceof \Concrete\Core\Html\Service\Navigation,
'seo' instanceof \Concrete\Core\Html\Service\Seo,
'mail' instanceof \Concrete\Core\Mail\Service,
'concrete/asset_library' instanceof \Concrete\Core\Application\Service\FileManager,
'concrete/file_manager' instanceof \Concrete\Core\Application\Service\FileManager,
'concrete/avatar' instanceof \Concrete\Core\Application\Service\Avatar,
'concrete/composer' instanceof \Concrete\Core\Application\Service\Composer,
'concrete/dashboard' instanceof \Concrete\Core\Application\Service\Dashboard,
'concrete/dashboard/sitemap' instanceof \Concrete\Core\Application\Service\Dashboard\Sitemap,
'concrete/ui' instanceof \Concrete\Core\Application\Service\UserInterface,
'concrete/ui/menu' instanceof \Concrete\Core\Application\Service\UserInterface\Menu,
'concrete/ui/help' instanceof \Concrete\Core\Application\Service\UserInterface\Help,
'concrete/upgrade' instanceof \Concrete\Core\Application\Service\Upgrade,
'concrete/urls' instanceof \Concrete\Core\Application\Service\Urls,
'concrete/user' instanceof \Concrete\Core\Application\Service\User,
'concrete/validation' instanceof \Concrete\Core\Application\Service\Validation,
'rating' instanceof \Concrete\Attribute\Rating\Service,
'pagination' instanceof \Concrete\Core\Legacy\Pagination,
'text' instanceof \Concrete\Core\Utility\Service\Text,
'arrays' instanceof \Concrete\Core\Utility\Service\Arrays,
'number' instanceof \Concrete\Core\Utility\Service\Number,
'xml' instanceof \Concrete\Core\Utility\Service\Xml,
'url' instanceof \Concrete\Core\Utility\Service\Url,
'form' instanceof \Concrete\Core\Form\Service\Form,
'form/attribute' instanceof \Concrete\Core\Form\Service\Widget\Attribute,
'form/color' instanceof \Concrete\Core\Form\Service\Widget\Color,
'form/font' instanceof \Concrete\Core\Form\Service\Widget\Typography,
'form/typography' instanceof \Concrete\Core\Form\Service\Widget\Typography,
'form/date_time' instanceof \Concrete\Core\Form\Service\Widget\DateTime,
'form/page_selector' instanceof \Concrete\Core\Form\Service\Widget\PageSelector,
'form/rating' instanceof \Concrete\Core\Form\Service\Widget\Rating,
'form/user_selector' instanceof \Concrete\Core\Form\Service\Widget\UserSelector,
'ajax' instanceof \Concrete\Core\Http\Service\Ajax,
'json' instanceof \Concrete\Core\Http\Service\Json,
), \Package::getByHandle('') => array('basic_table_package' instanceof \Concrete\Package\BasicTablePackage\Controller,
'ec_dev_tools' instanceof \Concrete\Package\EcDevTools\Controller,
'entities_example' instanceof \Concrete\Core\Package\BrokenPackage,
));}