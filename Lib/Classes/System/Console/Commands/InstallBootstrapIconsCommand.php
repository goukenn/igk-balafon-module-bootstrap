<?php 

// @author: C.A.D. BONDJE DOUE
// @filename: InstallBootstrapIconsCommand.php
// @date: 20230309 16:50:52
// @desc: 
namespace igk\bootstrap\System\Console\Commands;

use IGK\Controllers\BaseController;
use IGK\Helper\IO;
use IGK\System\Console\Commmands\ModuleExecCommandBase;
use IGK\System\Console\Logger;
use IGK\System\Shell\OsShell;

/**
 * install bootstrap icons
 * @package igk\bootstrap
 */
class InstallBootstrapIconsCommand extends ModuleExecCommandBase{
    var $command = '--bootstrap:icons-install';

    var $category ='bootstrap';

    var $description = "use to install bootstrap package to project";

    var $options = [
        "--clean"=>"flag clear ouput directory",
        "--name"=>"name of the ouput directory",
    ];

    public function exec($command, string $controller=null) { 
        $cmd = '';
        if ($yarn = OsShell::Where("yarn")){
            $cmd = 'yarn';
        } else if($npm = OsShell::Where("npm")) {
            $cmd = 'npm';
        } else {
            Logger::danger("missing yarn or npm");
            return -1;
        }
        $ctrl = ($controller ?  self::GetController($controller) : null ) ?? igk_die("require project controller");
        
        if (method_exists($this, $fc = '_installWith'.ucfirst($cmd))){
            return $this->$fc($command, $ctrl);
        }
    }

    public function _installWithYarn($command , BaseController $ctrl){

        $bck = getcwd();
        chdir(igk_io_packagesdir());
        if (!empty($o = `yarn info bootstrap-icons 2>&1`)){
            $o = `yarn add bootstrap-icons 2>&1`;
        } 
        if ($o){
            $name = igk_getv($command->options, "--name", "bootstrap-icons");
            $clean = property_exists($command->options, "--clean"); 
            // copy to asset dir 
            Logger::info("make - install ");
            $dir = $ctrl->getAssetsDir()."/".$name;
            IO::CreateDir($dir) || igk_die("failed to create asset dir");
            // if (is_dir($dir)){
            //     IO::RmDir($dir);
            // }
            if (is_link($dir)){
                @unlink($dir);
                IO::CreateDir($dir);
            }
            if ($clean){
                IO::CleanDir($dir);
            }
            $bootstrap_dir  = getcwd()."/node_modules/bootstrap-icons"; 
            if (is_dir($bootstrap_dir)){
                Logger::info("copy to asset dir as ".$name);
                foreach(['font','icons'] as $d){
                    IO::CopyFiles($bootstrap_dir."/".$d, $dir."/".$d, true, true);
                }                
            }
        }
        chdir($bck);
    }
    public function _installWithNmp(){
        $o = `npm install bootstrap-icons`;

    }
}
