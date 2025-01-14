<?php

namespace WP_CLI_Secure\SubCommands;

class BlockPhpExecutionInUploads extends SubCommand {
    public string $ruleTemplate = 'block_php_execution_in_uploads';
    public string $ruleName = 'BLOCK PHP EXECUTION IN UPLOADS';
    public string $successMessage = 'Block Execution In Uploads Directory rule has been deployed.';
    public string $removalMessage= 'Block Execution In Uploads Directory rule has been removed.';
}