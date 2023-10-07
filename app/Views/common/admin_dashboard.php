<head>
    <?php echo $header ?>
    <title><?php echo $title ?></title>
    <!-- CUSTOM STYLES -->
    <style {csp-style-nonce}>
        .page-header-wrap {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .user-notification-wrap {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .page-header {
            font-size: 24px;
            font-weight: 600;
        }
    </style>
</head>
<body> 
    <div class="main">
        <?= $navbar ?>
        <?= $page_header ?>
    </div>
    <?= $footer ?>
</body>