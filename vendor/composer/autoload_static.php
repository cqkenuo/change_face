<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit74887df772171a7a9e38825b677284fc
{
    public static $files = array (
        '61b023ffcf66bf7706bf90f7e45ebf71' => __DIR__ . '/..' . '/baidu/aip-sdk/lib/AipBase.php',
        '737e81f068b7933d4a90424589bc2ff7' => __DIR__ . '/..' . '/baidu/aip-sdk/AipBodyAnalysis.php',
        'cf8be21972f9184847989e38ee67a9a3' => __DIR__ . '/..' . '/baidu/aip-sdk/AipContentCensor.php',
        'd115fe9362bbad843011d0160b8bf0f0' => __DIR__ . '/..' . '/baidu/aip-sdk/AipFace.php',
        '5285b61356ab140472b6d2039b3fdc69' => __DIR__ . '/..' . '/baidu/aip-sdk/AipImageClassify.php',
        '75b58643575e6b86d7636c43b8acb79e' => __DIR__ . '/..' . '/baidu/aip-sdk/AipImageSearch.php',
        '6803d6b5951ce34abecd02ca7923bab9' => __DIR__ . '/..' . '/baidu/aip-sdk/AipKg.php',
        '263010cc0791a948b93b0451326d8490' => __DIR__ . '/..' . '/baidu/aip-sdk/AipNlp.php',
        '20465600cdf87e7598e8d3b23e358ef7' => __DIR__ . '/..' . '/baidu/aip-sdk/AipOcr.php',
        '03d6be5ce0d7e73da2264e6c76dbce69' => __DIR__ . '/..' . '/baidu/aip-sdk/AipSpeech.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit74887df772171a7a9e38825b677284fc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit74887df772171a7a9e38825b677284fc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
