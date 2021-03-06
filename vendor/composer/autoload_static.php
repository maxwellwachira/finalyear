<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0d5d5eb4dddba8c6fbda3ac1cfc15879
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Mailjet' => 
            array (
                0 => __DIR__ . '/..' . '/mailjet/mailjet-apiv3-php/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Firebase\\JWT\\BeforeValidException' => __DIR__ . '/..' . '/firebase/php-jwt/src/BeforeValidException.php',
        'Firebase\\JWT\\ExpiredException' => __DIR__ . '/..' . '/firebase/php-jwt/src/ExpiredException.php',
        'Firebase\\JWT\\JWK' => __DIR__ . '/..' . '/firebase/php-jwt/src/JWK.php',
        'Firebase\\JWT\\JWT' => __DIR__ . '/..' . '/firebase/php-jwt/src/JWT.php',
        'Firebase\\JWT\\SignatureInvalidException' => __DIR__ . '/..' . '/firebase/php-jwt/src/SignatureInvalidException.php',
        'Mailjet\\Client' => __DIR__ . '/..' . '/mailjet/mailjet-apiv3-php/src/Mailjet/Client.php',
        'Mailjet\\Config' => __DIR__ . '/..' . '/mailjet/mailjet-apiv3-php/src/Mailjet/Config.php',
        'Mailjet\\Request' => __DIR__ . '/..' . '/mailjet/mailjet-apiv3-php/src/Mailjet/Request.php',
        'Mailjet\\Resources' => __DIR__ . '/..' . '/mailjet/mailjet-apiv3-php/src/Mailjet/Resources.php',
        'Mailjet\\Response' => __DIR__ . '/..' . '/mailjet/mailjet-apiv3-php/src/Mailjet/Response.php',
        'Psr\\Http\\Client\\ClientExceptionInterface' => __DIR__ . '/..' . '/psr/http-client/src/ClientExceptionInterface.php',
        'Psr\\Http\\Client\\ClientInterface' => __DIR__ . '/..' . '/psr/http-client/src/ClientInterface.php',
        'Psr\\Http\\Client\\NetworkExceptionInterface' => __DIR__ . '/..' . '/psr/http-client/src/NetworkExceptionInterface.php',
        'Psr\\Http\\Client\\RequestExceptionInterface' => __DIR__ . '/..' . '/psr/http-client/src/RequestExceptionInterface.php',
        'Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        'Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        'Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        'Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        'Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        'Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        'Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
        'app\\api\\AfricasTalkingGateway' => __DIR__ . '/../..' . '/api/AfricasTalkingGateway.php',
        'app\\api\\AfricasTalkingGatewayException' => __DIR__ . '/../..' . '/api/AfricasTalkingGatewayException.php',
        'app\\config\\Database' => __DIR__ . '/../..' . '/config/Database.php',
        'app\\controllers\\AdminController' => __DIR__ . '/../..' . '/controllers/AdminController.php',
        'app\\controllers\\AuthController' => __DIR__ . '/../..' . '/controllers/AuthController.php',
        'app\\controllers\\MailController' => __DIR__ . '/../..' . '/controllers/MailController.php',
        'app\\controllers\\MessageController' => __DIR__ . '/../..' . '/controllers/MessageController.php',
        'app\\controllers\\PagesController' => __DIR__ . '/../..' . '/controllers/PagesController.php',
        'app\\controllers\\PesapalController' => __DIR__ . '/../..' . '/controllers/PesapalController.php',
        'app\\controllers\\StudentController' => __DIR__ . '/../..' . '/controllers/StudentController.php',
        'app\\controllers\\ZoomController' => __DIR__ . '/../..' . '/controllers/ZoomController.php',
        'app\\core\\Application' => __DIR__ . '/../..' . '/core/Application.php',
        'app\\core\\Controller' => __DIR__ . '/../..' . '/core/Controller.php',
        'app\\core\\Middleware' => __DIR__ . '/../..' . '/core/Middleware.php',
        'app\\core\\Model' => __DIR__ . '/../..' . '/core/Model.php',
        'app\\core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'app\\core\\Response' => __DIR__ . '/../..' . '/core/Response.php',
        'app\\core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'app\\core\\csrf' => __DIR__ . '/../..' . '/core/csrf.php',
        'app\\models\\AdminModel' => __DIR__ . '/../..' . '/models/AdminModel.php',
        'app\\models\\LoginModel' => __DIR__ . '/../..' . '/models/LoginModel.php',
        'app\\models\\PasswordRecovery' => __DIR__ . '/../..' . '/models/PasswordRecovery.php',
        'app\\models\\PesapalModel' => __DIR__ . '/../..' . '/models/PesapalModel.php',
        'app\\models\\RegisterModel' => __DIR__ . '/../..' . '/models/RegisterModel.php',
        'app\\models\\StudentModel' => __DIR__ . '/../..' . '/models/StudentModel.php',
        'app\\models\\SubscribeModel' => __DIR__ . '/../..' . '/models/SubscribeModel.php',
        'app\\models\\otp' => __DIR__ . '/../..' . '/models/otp.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0d5d5eb4dddba8c6fbda3ac1cfc15879::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0d5d5eb4dddba8c6fbda3ac1cfc15879::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit0d5d5eb4dddba8c6fbda3ac1cfc15879::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit0d5d5eb4dddba8c6fbda3ac1cfc15879::$classMap;

        }, null, ClassLoader::class);
    }
}
