<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;








class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'dev-master',
    'version' => 'dev-master',
    'aliases' => 
    array (
    ),
    'reference' => '01a27ec50431f7e926e03faccd058884a4909eea',
    'name' => 'swoft/swoft',
  ),
  'versions' => 
  array (
    'doctrine/annotations' => 
    array (
      'pretty_version' => '1.12.1',
      'version' => '1.12.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b17c5014ef81d212ac539f07a1001832df1b6d3b',
    ),
    'doctrine/instantiator' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd56bf6102915de5702778fe20f2de3b2fe570b5b',
    ),
    'doctrine/lexer' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e864bbf5904cb8f5bb334f99209b48018522f042',
    ),
    'monolog/monolog' => 
    array (
      'pretty_version' => '1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2209ddd84e7ef1256b7af205d0717fb62cfc9c33',
    ),
    'myclabs/deep-copy' => 
    array (
      'pretty_version' => '1.10.2',
      'version' => '1.10.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '776f831124e9c62e1a2c601ecc52e776d8bb7220',
      'replaced' => 
      array (
        0 => '1.10.2',
      ),
    ),
    'nikic/php-parser' => 
    array (
      'pretty_version' => 'v4.10.5',
      'version' => '4.10.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '4432ba399e47c66624bc73c8c0f811e5c109576f',
    ),
    'phar-io/manifest' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '85265efd3af7ba3ca4b2a2c34dbfc5788dd29133',
    ),
    'phar-io/version' => 
    array (
      'pretty_version' => '3.1.0',
      'version' => '3.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bae7c545bef187884426f042434e561ab1ddb182',
    ),
    'php-di/phpdoc-reader' => 
    array (
      'pretty_version' => '2.2.1',
      'version' => '2.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '66daff34cbd2627740ffec9469ffbac9f8c8185c',
    ),
    'phpdocumentor/reflection-common' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
    ),
    'phpdocumentor/reflection-docblock' => 
    array (
      'pretty_version' => '5.2.2',
      'version' => '5.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '069a785b2141f5bcf49f3e353548dc1cce6df556',
    ),
    'phpdocumentor/type-resolver' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
    ),
    'phpoption/phpoption' => 
    array (
      'pretty_version' => '1.7.5',
      'version' => '1.7.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '994ecccd8f3283ecf5ac33254543eb0ac946d525',
    ),
    'phpspec/prophecy' => 
    array (
      'pretty_version' => '1.13.0',
      'version' => '1.13.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'be1996ed8adc35c3fd795488a653f4b518be70ea',
    ),
    'phpunit/php-code-coverage' => 
    array (
      'pretty_version' => '7.0.14',
      'version' => '7.0.14.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bb7c9a210c72e4709cdde67f8b7362f672f2225c',
    ),
    'phpunit/php-file-iterator' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '4b49fb70f067272b659ef0174ff9ca40fdaa6357',
    ),
    'phpunit/php-text-template' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
    ),
    'phpunit/php-timer' => 
    array (
      'pretty_version' => '2.1.3',
      'version' => '2.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '2454ae1765516d20c4ffe103d85a58a9a3bd5662',
    ),
    'phpunit/php-token-stream' => 
    array (
      'pretty_version' => '3.1.2',
      'version' => '3.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '472b687829041c24b25f475e14c2f38a09edf1c2',
    ),
    'phpunit/phpunit' => 
    array (
      'pretty_version' => '8.5.15',
      'version' => '8.5.15.0',
      'aliases' => 
      array (
      ),
      'reference' => '038d4196d8e8cb405cd5e82cedfe413ad6eef9ef',
    ),
    'psr/cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd11b50ad223250cf17b86e38383413f5a6764bf8',
    ),
    'psr/cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8622567409010282b7aeebe4bb841fe98b58dcaf',
    ),
    'psr/http-message' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
    ),
    'psr/http-server-handler' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'aff2f80e33b7f026ec96bb42f63242dc50ffcae7',
    ),
    'psr/http-server-middleware' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '2296f45510945530b9dceb8bcedb5cb84d40c5f5',
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.1.4',
      'version' => '1.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd49695b909c3b7628b6289db5479a1c204601f11',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0.0',
      ),
    ),
    'psr/simple-cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
    ),
    'psr/simple-cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'sebastian/code-unit-reverse-lookup' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '1de8cd5c010cb153fcd68b8d0f64606f523f7619',
    ),
    'sebastian/comparator' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '1071dfcef776a57013124ff35e1fc41ccd294758',
    ),
    'sebastian/diff' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '14f72dd46eaf2f2293cbe79c93cc0bc43161a211',
    ),
    'sebastian/environment' => 
    array (
      'pretty_version' => '4.2.4',
      'version' => '4.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd47bbbad83711771f167c72d4e3f25f7fcc1f8b0',
    ),
    'sebastian/exporter' => 
    array (
      'pretty_version' => '3.1.3',
      'version' => '3.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '6b853149eab67d4da22291d36f5b0631c0fd856e',
    ),
    'sebastian/global-state' => 
    array (
      'pretty_version' => '3.0.1',
      'version' => '3.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '474fb9edb7ab891665d3bfc6317f42a0a150454b',
    ),
    'sebastian/object-enumerator' => 
    array (
      'pretty_version' => '3.0.4',
      'version' => '3.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e67f6d32ebd0c749cf9d1dbd9f226c727043cdf2',
    ),
    'sebastian/object-reflector' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '9b8772b9cbd456ab45d4a598d2dd1a1bced6363d',
    ),
    'sebastian/recursion-context' => 
    array (
      'pretty_version' => '3.0.1',
      'version' => '3.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '367dcba38d6e1977be014dc4b22f47a484dac7fb',
    ),
    'sebastian/resource-operations' => 
    array (
      'pretty_version' => '2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '31d35ca87926450c44eae7e2611d45a7a65ea8b3',
    ),
    'sebastian/type' => 
    array (
      'pretty_version' => '1.1.4',
      'version' => '1.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '0150cfbc4495ed2df3872fb31b26781e4e077eb4',
    ),
    'sebastian/version' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '99732be0ddb3361e16ad77b68ba41efc8e979019',
    ),
    'swoft/annotation' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '8449de656fc272e909f34b1c9626160c215b77ec',
    ),
    'swoft/aop' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '5f8502960a913e38f0457e923bf7c5f622c7ff32',
    ),
    'swoft/apollo' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '3d033f9bc805a7778cb5d2bc5172c669dbd361db',
    ),
    'swoft/bean' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '2f6d540d3ccf68262e4f74fed7cd6eb11235fc14',
    ),
    'swoft/breaker' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '4bc12ef1822fddfe7018117dc7f5f6ac4d5f90f5',
    ),
    'swoft/cache' => 
    array (
      'pretty_version' => 'v2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c737c9e4d9313290c8cfcc1cb2ddfa2441bec2c0',
    ),
    'swoft/config' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cd81f57f0805694fc48dca04605b142e3ea0ccd6',
    ),
    'swoft/connection-pool' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '1c273b71674e81d436a8eabf6ed3476664601671',
    ),
    'swoft/console' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '6c952eeb0168f3f56c7bf1d542a7607706246daa',
    ),
    'swoft/consul' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '63a039d30cf100b53c9dca519f58753779745e92',
    ),
    'swoft/crontab' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd9318222788c7f051445f06bdcd85681e2c6c614',
    ),
    'swoft/db' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '5da22ca8ad5baa1b577849100d1b3cb4b342e251',
    ),
    'swoft/devtool' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '92b31d7f89290aceaa798e120fa6b2e4f4bd5d2a',
    ),
    'swoft/error' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '9f273f381bc3298566575150ef0b937db09605e1',
    ),
    'swoft/event' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e612e55b45cad51b50efc2016d35f6b087785edf',
    ),
    'swoft/framework' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '5b06c16c92cae5fad831862d15835b1fac7c8bab',
    ),
    'swoft/http-message' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f118c65d4d3bbd69e26f6e67ec5b77caa5feb5bb',
    ),
    'swoft/http-server' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f8039b16fb69d35782b65a5b31f9ebfd9fd92964',
    ),
    'swoft/i18n' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c3e1545a0633ae021129af58f14a38cd7854951f',
    ),
    'swoft/limiter' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '50ad0e68adbfef1b7d2fc60c28687ed6fa5c6c05',
    ),
    'swoft/log' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '2eb40b7b2d1d2c9a802fade89b6304cbdc63d387',
    ),
    'swoft/process' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bbe373498f0ba6a75f39622c735d0661a69f1299',
    ),
    'swoft/proxy' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '113764ab23e3dcf23b95b8c2d5277331ddbf4012',
    ),
    'swoft/redis' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '489f0b786dc4b05018cf01a70f9981b4b6b5f7e6',
    ),
    'swoft/rpc' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '4fc9171c93e325c3c14642a405ed47713ac07b82',
    ),
    'swoft/rpc-client' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '8b491b1e888fab198c24639bad5ce64b1f982e3e',
    ),
    'swoft/rpc-server' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ad40fc1594dc7ff383eaf2900685c0a0face507f',
    ),
    'swoft/serialize' => 
    array (
      'pretty_version' => 'v2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '58fd2f1f3a867bac64aa07483cc00ade2af9dd19',
    ),
    'swoft/server' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '54b2330759e08cf3e8021ea8b3c5265e7aecc0f6',
    ),
    'swoft/session' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '6aca19f5393177537561482651444dfdf8fc8d38',
    ),
    'swoft/stdlib' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '42e49f1d7ba6e7b97eaa83e72f6439a30b61d096',
    ),
    'swoft/swlib' => 
    array (
      'pretty_version' => 'v2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '904ffaf78a263e1842564dc6d6d7712ae59b583f',
    ),
    'swoft/swoft' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
      ),
      'reference' => '01a27ec50431f7e926e03faccd058884a4909eea',
    ),
    'swoft/swoole-ide-helper' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
        0 => '9999999-dev',
      ),
      'reference' => 'cebe5253a3ca152c49545bc08514ac28103b6d78',
    ),
    'swoft/task' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e26d984ddce963869acc65d047333758d97f1870',
    ),
    'swoft/tcp' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '48c70becb2a3e70eafa3cbf8142ed1b1db35727e',
    ),
    'swoft/tcp-server' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e6e4a73c5ece8457cfa26c512d5790064c35da9a',
    ),
    'swoft/validator' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '2b51cceb971ef568bb857583f60ace7a78a00106',
    ),
    'swoft/view' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '839644d9835806df4cc9505af0f851a8f95e4d98',
    ),
    'swoft/websocket-server' => 
    array (
      'pretty_version' => 'v2.0.10',
      'version' => '2.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '428dae51a40e3ac504586108b4281b01cdf23470',
    ),
    'symfony/cache' => 
    array (
      'pretty_version' => 'v5.2.7',
      'version' => '5.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '1d801d1dc5e3840e832568db6b35a954cfb435a8',
    ),
    'symfony/cache-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c0446463729b89dd4fa62e9aeecc80287323615d',
    ),
    'symfony/cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'symfony/expression-language' => 
    array (
      'pretty_version' => 'v4.4.22',
      'version' => '4.4.22.0',
      'aliases' => 
      array (
      ),
      'reference' => '0dd911bbb99d7210a8f38d8de4a7964ff4a06533',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c6c942b1ac76c82448322025e084cadc56048b4e',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dc3063ba22c2a1fd2f45ed856374d79114998f91',
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
    ),
    'symfony/var-exporter' => 
    array (
      'pretty_version' => 'v5.2.7',
      'version' => '5.2.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '01184a5ab95eb9500b9b0ef3e525979e003d9c81',
    ),
    'symfony/yaml' => 
    array (
      'pretty_version' => 'v4.4.22',
      'version' => '4.4.22.0',
      'aliases' => 
      array (
      ),
      'reference' => '1c2fd24147961525eaefb65b11987cab75adab59',
    ),
    'text/template' => 
    array (
      'pretty_version' => 'v2.6.3',
      'version' => '2.6.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fd77c2aeb9c749426c7f6b5f7ab93c8de90a7cbc',
    ),
    'theseer/tokenizer' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '75a63c33a8577608444246075ea0af0d052e452a',
    ),
    'toolkit/cli-utils' => 
    array (
      'pretty_version' => 'v1.2.4',
      'version' => '1.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b7b94b43e9e3af10e0203c6abb115309b6cb73ce',
    ),
    'vlucas/phpdotenv' => 
    array (
      'pretty_version' => 'v3.6.8',
      'version' => '3.6.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '5e679f7616db829358341e2d5cccbd18773bdab8',
    ),
    'webmozart/assert' => 
    array (
      'pretty_version' => '1.10.0',
      'version' => '1.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6964c76c7804814a842473e0c8fd15bab0f18e25',
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}

if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}









public static function isInstalled($packageName)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return true;
}
}

return false;
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}





private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {
foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}
