<?php
$title = "Статус Серверів"; 
$servers = array(
    'Сервер Gate зовнішній' => array(
        'ip' => '195.162.81.13',
        'port' => 19785,
        'info' => '195.162.81.13',
        'purpose' => '19785'
    ),
    
    'Сервер 1' => array(
        'ip' => '192.168.3.215',
        'port' => 9100,
        'info' => '',
        'purpose' => ' '
      ),
      
    'Сервер 2' => array(
        'ip' => '127.0.0.1',
        'port' => 3213,
        'info' => '',
        'purpose' => ' '
     ),
     
    'Сервер 3' => array(
        'ip' => '192.168.3.16',
        'port' => 9100,
        'info' => '',
        'purpose' => ' '
      ),
      
    'Сервер 4' => array(
        'ip' => '195.162.81.13',
        'port' => 19785,
        'info' => '',
        'purpose' => ' '
        ),
        
    'Сервер 5' => array(
        'ip' => '192.168.3.245',
        'port' => 19785,
        'info' => '',
        'purpose' => ' '
      ),
      
    'Сервер 6' => array(
        'ip' => '195.162.81.13',
        'port' => 19785,
        'info' => '',
        'purpose' => ' '
     ),
     
    'Сервер 7' => array(
        'ip' => '195.162.81.13',
        'port' => 19785,
        'info' => '',
        'purpose' => ' '
      ),
      
    'Сервер 8' => array(
        'ip' => '195.162.81.13',
        'port' => 19785,
        'info' => '',
        'purpose' => ' '
        ),
        
    'Сервер 9' => array(
        'ip' => '195.162.81.13',
        'port' => 19785,
        'info' => '',
        'purpose' => ' '
      ),
      
    'Сервер 10' => array(
        'ip' => '192.168.3.245',
        'port' => 80,
        'info' => '',
        'purpose' => ' '
     ),
     
    'Сервер 11' => array(
        'ip' => '195.162.81.13',
        'port' => 19785,
        'info' => '',
        'purpose' => ' '
      ),
      
    'Сервер 12' => array(
        'ip' => '192.168.3.245',
        'port' => 80,
        'info' => '',
        'purpose' => ' '
    )
);
if (isset($_GET['host'])) {
    $host = $_GET['host'];
    if (isset($servers[$host])) {
        header('Content-Type: application/json');

        $return = array(
            'status' => test($servers[$host])
        );

        echo json_encode($return);
        exit;
    } else {
        header("HTTP/1.1 404 Not Found");
    }
}
$names = array();
foreach ($servers as $name => $info) {
    $names[$name] = md5($name);
}
     include_once ('menu.php'); 
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/2.3.2/cosmo/bootstrap.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
        <style type="text/css">
                /* Custom Styles */
        </style>
    </head>
    <body>
        <div class="container">
            <h1><?php echo $title; ?></h1>
            <table class="table" id="info-table" >
                <thead>
                    <tr>
                        <th></th>
                        <th>Назва</th>
                        <th>IP</th>
                        <th>Port</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($servers as $name => $server): ?>
                        <tr id="<?php echo md5($name); ?>">
                            <td><i class="icon-spinner icon-spin icon-large"></i></td>
                            <td class="name"><?php echo $name; ?></td>
                            <td><?php echo $server['info']; ?></td>
                            <td><?php echo $server['purpose']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript">
            function test(host, hash) {
                var request;
                request = $.ajax({
                    url: "<?php echo basename(__FILE__); ?>",
                    type: "get",
                    data: {
                        host: host
                    },
                    beforeSend: function () {
                        $('#' + hash).children().children().css({'visibility': 'visible'});
                    }
                });
                request.done(function (response, textStatus, jqXHR) {
                    var status = response.status;
                    var statusClass;
                    if (status) {
                        statusClass = 'success';
                    } else {
                        statusClass = 'error';
                    }
                    $('#' + hash).removeClass('success error').addClass(statusClass);
                });
                request.fail(function (jqXHR, textStatus, errorThrown) {
                   
                    console.error(
                        "The following error occured: " +
                            textStatus, errorThrown
                    );
                });
                request.always(function () {
                    $('#' + hash).children().children().css({'visibility': 'hidden'});
                })
            }
            $(document).ready(function () {

                var servers = <?php echo json_encode($names); ?>;
                var server, hash;

                for (var key in servers) {
                    server = key;
                    hash = servers[key];

                    test(server, hash);
                    (function loop(server, hash) {
                        setTimeout(function () {
                            test(server, hash);

                            loop(server, hash);
                        }, 6000);
                    })(server, hash);
                }
            });
        </script>
    </body>
</html>
<?php
function test($server) {
    $socket = @fsockopen($server['ip'], $server['port'], $errorNo, $errorStr, 3);
    if ($errorNo == 0) {
        return true;
    } else {
        return false;
    }
}
function in_array_r($needle, $haystack, $strict = false) {
    foreach ($haystack as $item) {
        if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && in_array_r($needle, $item, $strict))) {
            return true;
        }
    }
    return false;
}
?>
<script>
function tableSearch() {
    var phrase = document.getElementById('search-text');
    var table = document.getElementById('info-table');
    var regPhrase = new RegExp(phrase.value, 'i');
    var flag = false;
    for (var i = 1; i < table.rows.length; i++) {
        flag = false;
        for (var j = table.rows[i].cells.length - 1; j >= 0; j--) {
            flag = regPhrase.test(table.rows[i].cells[j].innerHTML);
            if (flag) break;
        }
        if (flag) {
            table.rows[i].style.display = "";
        } else {
            table.rows[i].style.display = "none";
        }

    }
}
</script>